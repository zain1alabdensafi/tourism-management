<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Multi_ticket;
use App\Models\Multi_trip;
use App\Models\Reserve_Multi_ticket;
use App\Models\Reserve_Single_ticket;
use App\Models\Single_ticket;
use App\Models\Single_trip;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function Search(Request $request)
    {
        $data=Validator::make($request->all(),[
            'source'=>'required',
            'destination'=>'required',
            'date'=>'required'
        ]);
        if($data->fails())
        {
            return response()->json(['message'=>$data->errors()]);
        }
        $Single_trips=Single_trip::query();
        $Multi_trips=Multi_trip::query();
        $results = [];
        if($Single_trips->where('source','=',$request['source'])->where('destination','=',$request['destination'])->exists()) {
            $result2 = Single_trip::query()->select('single_trips.id', 'source', 'departure_airport', 'destination', 'arrival_airport', DB::raw("DATE_FORMAT(CONCAT('$request[date]', ' ', starting_time), '%Y-%m-%d %I:%i:%s %AM') as starting_time"), 'ending_time')
                ->where('source', '=', $request['source'])
                ->where('destination', '=', $request['destination'])
                ->where('starting_time', 'LIKE', '% AM')
                ->get();
            $result1 = Single_trip::query()->select('single_trips.id', 'source', 'departure_airport', 'destination', 'arrival_airport', DB::raw("DATE_FORMAT(CONCAT('$request[date]', ' ', starting_time), '%Y-%m-%d %I:%i:%s %PM') as starting_time"), 'ending_time')
                ->where('source', '=', $request['source'])
                ->where('destination', '=', $request['destination'])
                ->where('starting_time', 'LIKE', '% PM')
                ->get();
            $response=[
                'the trips in mooring'=>$result2,
                'the trips in night'=>$result1,
            ];
            return $response;
        }
        elseif ($Multi_trips->where('source','=',$request['source'])->where('destination','=',$request['destination'])->exists())
        {
            $result2 = Multi_trip::query()->select('multi_trips.id', 'source', 'departure_airport', 'destination', 'arrival_airport','path_trip', DB::raw("DATE_FORMAT(CONCAT('$request[date]', ' ', starting_time), '%Y-%m-%d %I:%i:%s %AM') as starting_time"), 'ending_time')
                ->where('source', '=', $request['source'])
                ->where('destination', '=', $request['destination'])
                ->where('starting_time', 'LIKE', '% AM')
                ->get();
            $result1 = Multi_trip::query()->select('multi_trips.id', 'source', 'departure_airport', 'destination', 'arrival_airport','path_trip', DB::raw("DATE_FORMAT(CONCAT('$request[date]', ' ', starting_time), '%Y-%m-%d %I:%i:%s %PM') as starting_time"), 'ending_time')
                ->where('source', '=', $request['source'])
                ->where('destination', '=', $request['destination'])
                ->where('starting_time', 'LIKE', '% PM')
                ->get();
            $response=[
                'the trips in mooring'=>$result2,
                'the trips in night'=>$result1,
            ];
            return $response;
        }
        else{
            return response()->json(['message'=>'there is no trips in this input']);
        }
    }
    public function Ticket(Request $request)
    {
        $data=Validator::make($request->all(),[
            'source'=>'required',
            'destination'=>'required',
        ]);
        if($data->fails())
        {
            return response()->json(['message'=>$data->errors()]);
        }
        $Single_trips=Single_trip::query();
        $Multi_trips=Multi_trip::query();
        $Single_ticket=Single_ticket::query();
        $Multi_ticket=Multi_ticket::query();
        if($Single_trips->where('source','=',$request['source'])->where('destination','=',$request['destination'])->exists())
        {
             $ticket=$Single_ticket->select('id','type','price')
               ->where('trip_id','=',$request['id'])
                 ->get();
            return response()->json(['ticket' => $ticket]);
        }
        elseif ($Multi_trips->where('source','=',$request['source'])->where('destination','=',$request['destination'])->exists())
        {
            $ticket=$Multi_ticket->select('id','type','price')
                ->get();
            return response()->json(['ticket' => $ticket]);
        }
    }
        public function Reserve (Request $request)
        {
        $data=Validator::make($request->all(),[
            'ticket_id'=>'required',
            'email' => 'required',
            'password' => 'required',
            'source'=>'required',
            'destination'=>'required'
        ]);
        if($data->fails())
        {
            return response()->json(['message'=>$data->errors()]);
        }
          $Single_trips=Single_trip::query();
            $Multi_trips=Multi_trip::query();
            $Single_ticket=Single_ticket::query();
            $Multi_ticket=Multi_ticket::query();
          $account = Account::query()
           ->where('email', '=', $request->input('email'))
           ->where('password', '=', $request->input('password'))
            ->first();
            if (!$account) {
                return response()->json(['message' => 'You do not have an account.']);
            }
           else if($Single_trips->where('source','=',$request['source'])->where('destination','=',$request['destination'])->exists())
            {
                $trips = Single_trip::query()
                    ->where('source', '=', $request->input('source'))
                    ->where('destination', '=', $request->input('destination'))
                    ->join('single_tickets', 'single_trips.id', '=', 'single_tickets.trip_id')
                    ->where('single_tickets.id', '=', $request->input('ticket_id'))
                    ->first();
                if (!$trips->is_available) {
                    return response()->json(['message' => 'all ticket of this trips is completed']);
                }
               $ticekt=Single_ticket::query()->where('id','=',$request['ticket_id'])->first();
               if($account->balance < $ticekt->price)
               {
                   return response()->json(['message' => 'Please charge your account.']);
               }
                   $currentDate = Carbon::now();
                   $check_in = $currentDate;
                   $account->balance = $account->balance - $ticekt->price;
                   $account->save();
                   $reserve=Reserve_Single_ticket::create([
                       'user_id'=>Auth::user()->id,
                       'ticket_id'=>$request['ticket_id'],
                       'check_in'=>$check_in,
                        'price_total'=>$ticekt->price
                       ]);
                   $trips1=Single_trip::find($trips->trip_id);
                   $trips1->count = $trips1->count + 1;
                   $trips1->save();
                   if ($trips1->count == $trips1->number_of_person) {
                       $trips1->is_available = 0;
                       $trips1->save();
                   }
                    return response()->json(['message'=>'success']);
               }
           elseif ($Multi_trips->where('source','=',$request['source'])->where('destination','=',$request['destination'])->exists())
           {
               $trips=Multi_trip::query()
                   ->join('single_tickets','single_tickets.trip_id','multi_trips.id')
                   ->where('single_tickets.id','=',$request['ticket_id'])
                   ->first();

               if (!$trips->is_available) {
                   return response()->json(['message' => 'all ticket of this trips is completed']);
               }
               $ticekt=Multi_ticket::query()->where('id','=',$request['ticket_id'])->first();
               if($account->balance < $ticekt->price)
               {
                   return response()->json(['message' => 'Please charge your account.']);
               }
                   $currentDate = Carbon::now();
                   $check_in = $currentDate;
                   $account->balance = $account->balance - $ticekt->price;
                   $account->save();
                   $reserve=Reserve_Multi_ticket::create([
                       'user_id'=>Auth::user()->id,
                       'ticket_id'=>$request['ticket_id'],
                       'check_in'=>$check_in,
                       'price_total'=>$ticekt->price
                   ]);
               $trips1=Multi_trip::find($trips->trip_id);
               $trips1->count = $trips1->count + 1;
               $trips1->save();
               if ($trips1->count == $trips1->number_of_person) {
                   $trips1->is_available = 0;
                   $trips1->save();
               }
                   return response()->json(['message'=>'success']);
               }
    }
}


