<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\City;
use App\Models\Favourite_place;
use App\Models\Places;
use App\Models\Reservation_hotel;
use App\Models\Reservation_place;
use App\Models\Review_place;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class placescontroller extends Controller
{
    public function insert_places(Request $request){
        $data=Validator::make($request->all(),[
           'name'=>'required',
           'address'=>'required',
           'description'=>'required',
           'rate'=>'required',
           'image'=>'required',
           'city_id'=>'required'
        ]);
        if ($data->fails()){
            return Response()->json(['error'=>$data->errors()]);
        }
        if ($request['image']) {
            if ($request->hasFile('image')) {
                //GET filename with extension
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                //Get just the filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //Get extension
                $extension = $request->file('image')->getClientOriginalExtension();
                //Create new filename
                $filenameToStore = $filename . '_' . time() . '_' . $extension;
                //upload image
                $path = $request->file('image')->storeAs('image', $filenameToStore);

                $place = Places::create([
                    'name' => $request['name'],
                    'address' => $request['address'],
                    'description' => $request['description'],
                    'rate' => $request['rate'],
                    'image' => URL::asset('storage' . $path),
                    'city' => $request['city_id']
                ]);
            }}
        return \response()->json(['message'=>'created ']);
    }
    public function update_places(Request $request,$id ){
        $place=Places::query()->find($id);
        $place->update($request->all());
        $place->save();
        return response()->json(['places'=>$place]);
    }
    public function delete_place(Request $request,$id){
        $place=Places::query()->find($id);
        $place->delete();
        return response()->json(['message'=>'deleted ']);
    }
    public function search(Request $request)
    {
        $city = City::query();
        $place = Places::query();
        if ($city->where('Name', 'like', '%' . $request['name'] . '%')->exists()) {
            foreach ($city->get(['id']) as $iteam) {
                $place = Places::query()->select('name', 'image_profile', 'address','description','rate')->where('city_id', '=', $iteam->id)->get();
                return $place;
            }}
        $place=Places::query()->select('places.name', 'places.image_profile', 'places.address', 'places.description', 'places.rate','cities.Name as city')
            ->where('places.name','like','%'.$request['name'].'%')
            ->join('cities','places.city_id','=','cities.id')
            ->get();
        return $place;
    }
    public function profile_places(Request $request)
    {
        $images = Places::query()
            ->where('name', '=', $request['name'])
            ->join('image_places', 'places.id', '=', 'image_places.places_id')
            ->pluck('image')
            ->toArray();

        $place = Places::query()
            ->select('name', 'address', 'description', 'image_profile','rate','price')
            ->where('name', '=', $request['name'])
            ->groupBy('name', 'address', 'description', 'image_profile','rate','price')
            ->first()
            ->toArray();

        $response = [
            'name' => $place['name'],
            'address' => $place['address'],
            'description' => $place['description'],
            'rate' => $place['rate'],
            'image' => $place['image_profile'],
            'price'=>$place['price'],
            'images' => $images,
        ];

        return response()->json([$response]);
    }
    public function Comment(Request $request){
        $data=Validator::make($request->all(),[
            'rate'=>'required||integer|between:1,5',
            'comment'=>'required',
            'place'=>'required'
        ]);
        if ($data->fails())
        {
            return response()->json(['message'=>$data->errors()]);
        }
        $place=Places::query()->where('name','=',$request['place'])->first();
        $comment =Review_place::create([
            'user_id'=>Auth::user()->id,
            'place_id'=>$place->id,
            'rate'=>$request['rate'],
            'comment'=>$request['comment']
        ]);
        return response(['Successes']);
    }

    public function Comment_place (Request $request)
    {
        $comments = Review_place::query()
            ->select(DB::raw("concat(users.First_name, ' ', users.Last_name) as user_name"), 'review_places.comment','review_places.rate')
            ->join('users', 'review_places.user_id', '=', 'users.id')
            ->join('places','review_places.place_id','=','places.id')
            ->where('name', '=', $request['name'])
            ->get()
            ->toArray();
        return $comments;
    }


    public function favourite_place(Request $request)
    {
        $data = Validator::make($request->all(), [
            'place' => 'required',
        ]);
        if ($data->fails()) {
            return response()->json(['message' => $data->errors()]);
        }
        $place = Places::query()->where('name', '=', $request['place'])->first();
        $favourite = Favourite_place::query();
        if ($favourite->where('place_id', '=', $place->id)->where('user_id', '=', Auth::user()->id)->first()) {
            $favourite->delete();
        } else {
            $favourite = Favourite_place::create([
                'user_id' => Auth::user()->id,
                'place_id' => $place->id
            ]);
            return response()->json(['Success']);
        }
    }
    public function reservation_place(Request $request)
    {
        $data = Validator::make($request->all(), [
            'place' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($data->fails()) {
            return response()->json(['message' => $data->errors()]);
        }

        $account = Account::query()
            ->where('email', '=', $request->input('email'))
            ->where('password', '=', $request->input('password'))
            ->first();
        if (!$account) {
            return response()->json(['message' => 'You do not have an account.']);
        }

        $place = Places::query()->where('name', '=', $request['place'])->first();
        if($place->price == 0)
        {
        return response()->json(['message'=>'this place are general place']);
        }
        else
        {
        if ($account->balance < $place->price) {
            return response()->json(['message' => 'Please charge your account.']);
        }
        $currentDate = Carbon::now();
        $check_in = $currentDate;
        $check_out = $currentDate->copy()->addDays(1);
        $account->balance = $account->balance - $place->price;
        $account->save();
        $reserve = Reservation_place::create([
            'user_id' => Auth::user()->id,
            'place_id' => $place->id,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'price_total' => $place->price
        ]);
        return response()->json(['success']);
    }
    }
}
