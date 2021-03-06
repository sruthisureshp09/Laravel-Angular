<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Mail;
use App\Mail\BookingMail;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$year=$request->date
        $data= Booking::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'sdate'=>$request->sdate,
            'edate'=>$request->edate,
            'add1'=>$request->add1,
            'add2'=>$request->add2,
            'country'=>$request->country,
            'state'=>$request->state,
            'city'=>$request->city,
            'zip'=>$request->zip,
            'phone1'=>$request->phone1,
            'phone2'=>$request->phone2,
            'email'=>$request->email,
            'notes'=>$request->notes,
            'product_id'=>$request->product_id,
           
        ]);
        
        $users_temp = explode(',', 'first@example.com,second@example.com');
        $users = [];
        foreach($users_temp as $key => $ut){
        $ua = [];
        $ua['email'] = $ut;
        //$ua['name'] = 'test';
        $users[$key] = (object)$ua;
        }
         Mail::to($users)->send(new BookingMail($data));

            //Mail::to($request->get('email'))->send(new BookingMail($data));
        
      
            return response()->json([
            'data ' => "success" ,
            ],200);
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
