<?php

namespace App\Http\Controllers;

use App\Mail\Toursim;
use App\Models\Admin;
use App\Models\City;
use App\Models\Complaints;
use App\Models\Country;
use App\Models\Favourite_hotel;
use App\Models\Favourite_place;
use App\Models\Favourite_restaurant;
use App\Models\Reservation_hotel;
use App\Models\Reservation_place;
use App\Models\Reserve_Multi_ticket;
use App\Models\Reserve_Single_ticket;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use function Symfony\Component\Translation\t;
use App\Notifications\RegisterNotifaication;
use App\Notifications\EmailVerificationNotification;

class UserController extends Controller

{

    public function index()
    {
        return User::all();
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
        if (User::where('email', '=', $request['email'])->first()) {
            return response()->json(['message' => 'please change the email']);
        }
        $data = Validator::make($request->all(), [
            'First_name' => 'required|min:3',
            'Last_name' => 'required|min:3',
            'nationality' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6'
        ]);
        if ($data->fails()) {
            return response()->json(['message' => $data->errors()]);
        }
        $user = User::create([
            'First_name' => $request['First_name'],
            'Last_name' => $request['Last_name'],
            'nationality' => $request['nationality'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        $token = $user->createToken('authToken')->plainTextToken;
        $user->notify(new RegisterNotifaication());
        $user->notify(new EmailVerificationNotification());
        return response()->json([
            'token' => $token,
            'state' => 200
        ]);
    }
    public function login(Request $request)
    {
        $admin = Admin::query();
        if ($admin->where('email', '=', $request['email'])->exists()) {
            if (!Auth::guard('admin')->attempt($request->only('email', 'password'))) {
                return Response()->json(['message' => 'password invalid']);
            }
            return redirect()->route('dashboard');
        } else {
            $user = User::query();
            if ($user->where('email', '=', $request['email'])->exists()) {
                if (!Auth::attempt($request->only('email', 'password'))) {
                    return Response()->json(['message' => 'password invalid', 'token' => null]);
                }
                $user = User::where('email', $request['email'])->firstorfail();
                    if (!$user->email_verified_at) {
                        $user->notify(new EmailVerificationNotification());
                        return Response()->json(['message' => 'Email not verified. A new verification link has been sent to your email.']);
                    }
                $token = $user->createToken('authToken')->plainTextToken;
                return Response()->json(['token' => $token]);
            } else {
                return response()->json(['message' => 'you should signup before login']);
            }
        }

    }

    public function logout()
    {
        $token = \auth()->user()->tokens();
        $token->delete();
        return Response()->json(['massage' => 'logged out successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function profile()
    {
        $user = User::query()->find(Auth::user()->id);
        if ($user->gender != null && $user->image != null) {
            return response()->json([$user->only('First_name', 'Last_name', 'nationality', 'gender', 'image')]);
        } else if ($user->gender != null) {
            return $user->only('First_name', 'Last_name', 'nationality', 'gender');
        }
        if ($user->image != null) {
            return $user->only('First_name', 'Last_name', 'nationality', 'image');
        }
        return $user->only('First_name', 'Last_name', 'nationality');
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
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if (!$request['image']) {
            $user->update($request->all());
            $user->save();
            return response()->json(['state' => 200]);
        } else {

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
                }
                $user['image'] = URL::asset('storage' . $path);
                $user->update($request->all());
                $user->save();
                return response()->json(['state' => 200]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find(Auth::user()->id);
        $user->delete();
        return response()->json(['state' => 200]);
    }
    public function My_reservation()
    {
        $my_hotel = Reservation_hotel::query()
            ->select('hotels.Name', 'rooms.type', 'reservations.check_in', 'reservations.check_out')
            ->join('users', 'users.id', '=', 'reservations.user_id')
            ->where('users.id', '=', Auth::user()->id)
            ->join('rooms', 'rooms.id', '=', 'reservations.room_id')
            ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->get();
        $my_place = Reservation_place::query()
            ->select('places.name', 'reservation_places.check_in', 'reservation_places.check_out')
            ->join('users', 'users.id', '=', 'reservation_places.user_id')
            ->where('users.id', '=', Auth::user()->id)
            ->join('places', 'places.id', '=', 'reservation_places.place_id')
            ->get();

        $my_Single_trip = Reserve_Single_ticket::query()
            ->select('single_trips.source', 'single_trips.departure_airport', 'single_trips.destination',
                'single_trips.arrival_airport', 'single_tickets.type', 'reservation_single_ticket.check_in')
            ->join('users', 'users.id', '=', 'reservation_single_ticket.user_id')
            ->where('users.id', '=', Auth::user()->id)
            ->join('single_tickets', 'single_tickets.id', '=', 'reservation_single_ticket.ticket_id')
            ->join('single_trips', 'single_trips.id', '=', 'single_tickets.trip_id')
            ->get();

        $my_Multi_trip = Reserve_Multi_ticket::query()
            ->select('multi_trips.source', 'multi_trips.departure_airport', 'multi_trips.destination',
                'multi_trips.arrival_airport', 'multi_tickets.type', 'reservation_multi_ticket.check_in')
            ->join('users', 'users.id', '=', 'reservation_multi_ticket.user_id')
            ->where('users.id', '=', Auth::user()->id)
            ->join('multi_tickets', 'multi_tickets.id', '=', 'reservation_multi_ticket.ticket_id')
            ->join('multi_trips', 'multi_trips.id', '=', 'multi_tickets.trip_id')
            ->get();

        $response = [
            'Hotel' => $my_hotel,
            'Place' => $my_place,
            'Single_ticket' => $my_Single_trip,
            'Multi_ticket' => $my_Multi_trip,
        ];
        return response()->json($response);
    }
    public function My_favourite()
    {
        $my_hotel = Favourite_hotel::query()
            ->select('hotels.Name','hotels.image_profile')
            ->join('users', 'users.id', '=', 'favourites_hotel.user_id')
            ->where('users.id', '=', Auth::user()->id)
            ->join('hotels', 'hotels.id', '=', 'favourites_hotel.hotel_id')
            ->get();

        $my_place =Favourite_place::query()
            ->select('places.name','places.image_profile')
            ->join('users', 'users.id', '=', 'favourites_places.user_id')
            ->where('users.id', '=', Auth::user()->id)
            ->join('places', 'places.id', '=', 'favourites_places.place_id')
            ->get();
        $my_restaurant = Favourite_restaurant::query()
            ->select('restaurants.name','restaurants.image_profile')
            ->join('users', 'users.id', '=', 'favourites_restaurants.user_id')
            ->where('users.id', '=', Auth::user()->id)
            ->join('restaurants', 'restaurants.id', '=', 'favourites_restaurants.restaurant_id')
            ->get();
        $response = [
            'Hotel' => $my_hotel,
            'Place' => $my_place,
            'Restaurant' => $my_restaurant,
        ];
        return response()->json($response);
    }
    public function complaints(Request $request)
    {
        $data=Validator::make($request->all(),[
            'comment'=>'required',
        ]);
        if ($data->fails())
        {
            return response()->json(['message'=>$data->errors()]);
        }
        $complaints =Complaints::create([
            'user_id'=>Auth::user()->id,
            'comment'=>$request['comment']
        ]);
        return response()->json(['message'=>'Your complaint has been successfully received.Thank you for contacting us. We will work to process your complaint and get back to you as soon as possible.']);
    }
}
