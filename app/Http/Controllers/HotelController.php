<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\City;
use App\Models\Country;
use App\Models\Favourite_hotel;
use App\Models\Hotel;
use App\Models\Offerroom;
use App\Models\Reservation_hotel;
use App\Models\Review_hotel;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Hotel::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=Validator::make($request->all(),[
            'city_id'=>'required',
            'Name'=>'required',
            'Address'=>'required',
            'description'=>'required',
            'link'=>'required',
            'image_profile'=>'required',
            'number_of_room'=>'required',
            'phone'=>'required',
            'stars'=>'required',
            'rate'=>'required'
        ]);
        if($data->fails())
        {
            return response()->json(['message'=>$data->errors()]);
        }
        $hotel=Hotel::create([
            'city_id'=>$request['city_id'],
            'Name'=>$request['Name'],
            'Address'=>$request['Address'],
            'description'=>$request['description'],
            'link'=>$request['link'],
            'image_profile'=>$request['image_profile'],
            'number_of_room'=>$request['number_of_room'],
            'phone'=>$request['phone'],
            'stars'=>$request['stars'],
            'rate'=>$request['rate']
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hotel=Hotel::query()->find($id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hotel=Hotel::query()->find($id);
        $hotel->update($request->all());
        $hotel->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel=Hotel::query()->find($id);
        $hotel->delete();
    }

    public function search(Request $request)
    {
        $city = City::query();
        $hotel = Hotel::query();
        if ($city->where('Name', 'like', '%' . $request['name'] . '%')->exists()) {
            foreach ($city->get(['id']) as $iteam) {
                $hotel = Hotel::query()->select('Name', 'image_profile', 'address', 'stars', 'rate')->where('city_id', '=', $iteam->id)->get();
                return $hotel;
            }}
            return response()->json(['not found']);
          if(  $hotel=Hotel::query()->select('hotels.Name', 'image_profile', 'address', 'stars', 'rate','cities.Name as city')
            ->where('hotels.Name','like','%'.$request['name'].'%')
            ->join('cities','hotels.city_id','=','cities.id')
            ->get()){
        return $hotel;
            }
            return response()->json(['not found']);
    }

    public function profile_Hotel(Request $request)
    {
        $images = Hotel::query()
            ->where('Name', '=', $request['name'])
            ->join('images', 'hotels.id', '=', 'images.hotel_id')
            ->pluck('image')
            ->toArray();

        $hotel = Hotel::query()
            ->select('Name', 'Address', 'description', 'image_profile', 'link', 'phone',
                'stars', 'number_of_room', 'rate')
            ->where('Name', '=', $request['name'])
            ->groupBy('Name', 'Address', 'description', 'image_profile', 'link', 'phone', 'stars', 'number_of_room', 'rate')
            ->first()
            ->toArray();

        $response = [
            'name' => $hotel['Name'],
            'address' => $hotel['Address'],
            'description' => $hotel['description'],
            'number_of_room' => $hotel['number_of_room'],
            'rate' => $hotel['rate'],
            'image_profile' => $hotel['image_profile'],
            'images' => $images,
        ];

        return response()->json([$response]);
    }
    public function room(Request $request)
    {
        $room = Room::query()
            ->select('rooms.id','rooms.type', 'rooms.image', 'rooms.description', 'rooms.price', 'rooms.number_of_person')
            ->join('hotels', 'rooms.hotel_id', '=', 'hotels.id')
            ->where('hotels.name', '=', $request['name'])
            ->get();
        return $room;
    }
    public function profile_room(Request $request)
    {
        $room = Room::query()
            ->select('rooms.id','rooms.type', 'rooms.image', 'rooms.description', 'rooms.price', 'rooms.number_of_person')
            ->where('type', '=', $request['type'])
            ->join('hotels', 'rooms.hotel_id', '=', 'hotels.id')
            ->where('hotels.name', '=', $request['name'])
            ->get();
        return $room;
    }

    public function offer_room(Request $request)
    {
        $offer_room = Offerroom::query()
            ->select('offerroom.id','offerroom.type', 'offerroom.image', 'offerroom.description', 'offerroom.old_price',
                'offerroom.new_price','offerroom.number_of_person')
            ->where('is_available','=',true)
            ->join('hotels', 'offerroom.hotel_id', '=', 'hotels.id')
            ->where('hotels.name', '=', $request['name'])
            ->get();
        return $offer_room;
    }
    public function Comment(Request $request){
        $data=Validator::make($request->all(),[
            'rate'=>'required||integer|between:1,5',
            'comment'=>'required',
            'hotel'=>'required'
        ]);
        if ($data->fails())
        {
            return response()->json(['message'=>$data->errors()]);
        }
        $hotel=Hotel::query()->where('name','=',$request['hotel'])->first();
        $comment =Review_hotel::create([
            'user_id'=>Auth::user()->id,
            'hotel_id'=>$hotel->id,
            'rate'=>$request['rate'],
            'comment'=>$request['comment']
        ]);
        return response(['Successes']);
    }

    public function Comment_hotel (Request $request)
    {
        $comments = Review_hotel::query()
            ->select(DB::raw("concat(users.First_name, ' ', users.Last_name) as user_name"), 'review_hotel.comment','review_hotel.rate')
            ->join('users', 'review_hotel.user_id', '=', 'users.id')
            ->join('hotels','review_hotel.hotel_id','=','hotels.id')
            ->where('Name', '=', $request['name'])
            ->get()
            ->toArray();
        return $comments;
    }


    public function favourite_hotel(Request $request)
    {
        $data = Validator::make($request->all(), [
            'hotel' => 'required',
        ]);
        if ($data->fails()) {
            return response()->json(['message' => $data->errors()]);
        }
        $hotel = Hotel::query()->where('name', '=', $request['hotel'])->first();
        $favourite = Favourite_hotel::query();
        if ($favourite->where('hotel_id', '=', $hotel->id)->where('user_id', '=', Auth::user()->id)->first()) {
            $favourite->delete();
        } else {
            $favourite = Favourite_hotel::create([
                'user_id' => Auth::user()->id,
                'hotel_id' => $hotel->id
            ]);
            return response()->json(['Success']);
        }
    }
    public function reservation_room(Request $request)
    {
        $data = Validator::make($request->all(), [
            'room_id' => 'required',
            'email' => 'required',
            'password' => 'required',
            'duration' => 'required',
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

        $room = Room::query()->where('id', '=', $request['room_id'])->first();
        if (!$room->is_available) {
            return response()->json(['message' => 'all rooms of this type is completed']);
        }
        if ($account->balance < $room->price) {
            return response()->json(['message' => 'Please charge your account.']);
        }
        $currentDate = Carbon::now();
        $check_in = $currentDate;
        $check_out = $currentDate->copy()->addDays($request->input('duration'));

        $account->balance = $account->balance - $room->price;
        $account->save();
            $total_price= $room->price * $request['duration'];
        $reserve = Reservation_hotel::create([
            'user_id' => Auth::user()->id,
            'room_id' => $request['room_id'],
            'duration' => $request['duration'],
            'check_in' => $check_in,
            'check_out' => $check_out,
            'price_total' => $total_price
        ]);

        $room->count = $room->count + 1;
        $room->save();

        if ($room->count == $room->number_of_rooms) {
            $room->is_available = 0;
            $room->save();
        }

        return response()->json(['message'=>'success']);
    }
    public function reservation_offer_room(Request $request)
    {
        $data = Validator::make($request->all(), [
            'room_id' => 'required',
            'email' => 'required',
            'password' => 'required',
            'duration' => 'required',
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

        $room = Offerroom::query()->where('id', '=', $request['room_id'])->first();
        if (!$room->is_available){
            return response()->json(['message' => 'all rooms of this type is completed']);
        }
        if ($account->balance < $room->price) {
            return response()->json(['message' => 'Please charge your account.']);
        }
        $currentDate = Carbon::now();
        $check_in = $currentDate;
        $check_out = $currentDate->copy()->addDays($request->input('duration'));

        $account->balance = $account->balance - $room->price;
        $account->save();
        $total_price= $room->new_price * $request['duration'];
        $reserve = Reservation_hotel::create([
            'user_id' => Auth::user()->id,
            'room_id' => $request['room_id'],
            'duration' => $request['duration'],
            'check_in' => $check_in,
            'check_out' => $check_out,
            'price_total' => $total_price
        ]);
            $room->is_available = 0;
            $room->save();
        return response()->json(['message'=>'success']);
    }
}
