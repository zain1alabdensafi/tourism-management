<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Favourite_hotel;
use App\Models\Favourite_restaurant;
use App\Models\Hotel;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RestaurantController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    public function favourite_restaurant(Request $request)
    {
        $data = Validator::make($request->all(), [
            'restaurant' => 'required',
        ]);
        if ($data->fails()) {
            return response()->json(['message' => $data->errors()]);
        }
        $restaurant = Restaurant::query()->where('name', '=', $request['restaurant'])->first();
        $favourite = Favourite_restaurant::query();
        if ($favourite->where('restaurant_id', '=', $restaurant->id)->where('user_id', '=', Auth::user()->id)->first()) {
            $favourite->delete();
        } else {
            $favourite = Favourite_restaurant::create([
                'user_id' => Auth::user()->id,
                'restaurant_id' => $restaurant->id
            ]);
            return response()->json(['Success']);
        }
    }

    public function store(Request $request)
    {
        $data = validator()->make($request->all(),[
            'city_id'=>'required',
            'name'=>'required',
            'address'=>'required',
            'type'=>'required',
            'description'=>'required',
            'image_profile'=>'required',
            'phone'=>'required',
            'rate'=>'required'
        ]);
        if($data->fails()){

        return response()->json(['message'=>$data->errors()]);
        }
        $restaurant = Restaurant::create([
            'city_id'=>$request['city_id'],
            'name'=>$request['name'],
            'address'=>$request['address'],
            'type'=>$request['type'],
            'description'=>$request['description'],
            'image_profile'=>$request['image_profile'],
            'phone'=>$request['phone'],
            'rate'=>$request['rate']
        ]);

    }


    public function show(string $id)
    {
        $restaurant= Restaurant::query()->find($id)->get();
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        $restaurant = Restaurant::query()->find($id);
        $restaurant->update($request->all());
        $restaurant->save();
    }


    public function destroy(string $id)
    {
        $restaurant = Restaurant::query()->find($id);
        $restaurant->delete();
    }

    public function search_restaurant(Request $request){
        $city = City::query();
        $restaurant = Restaurant::query();
        $restaurantNames = [];
        if ($city->where('name', 'like', '%' . $request['name'] . '%')->exists()) {
            foreach ($city->get(['id']) as $iteam) {
                $cityH = City::find($iteam->id);
                foreach ($cityH->restaurant as $rest) {
                    $restaurantNames[] = [
                        'name'=>$rest->name,
                        'address'=>$rest->address,
                        'type'=>$rest->type,
                        'rate'=>$rest->rate,
                        'image'=>$rest->image_profile
                ];
                }
            }
            return response($restaurantNames);
        }
        if($restaurant->where('name','like','%'.$request['name'].'%')->get())
        {
            return response()->json([$restaurant->get(['name','address','type','rate'])]);
        }
        else{
            return response()->json(['message'=>'Not Found']);
        }
    }
    public function profile_restaurant(Request $request)
    {
        $restaurant = Restaurant::query()->where('name','=',$request['name'])->get(['name','address','type','rate','description','image_profile','phone']);
        return response($restaurant);
    }
}
