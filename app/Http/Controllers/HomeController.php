<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function discount()
    {
    	return view('/discount');
    }

    public function welcome()
    {
    	return view('/welcome');
    }

    public function booking()
    {
    	return view('/booking');
    }

    public function about()
    {
    	return view('/about');
    }

    public function blog()
    {
    	return view('/blog');
    } 

     public function contact()
    {
    	return view('/contact');
    } 

    public function destination()
    {
    	return view('/destination');
    } 

    public function gallery()
    {
        return view('/gallery');
    }
    public function ladakh_itinerary(Request $request)
    {
        return view('/itinerary/itinerary_ladakh');

    }
    public function goa_itinerary(Request $request)
    {
        return view('/itinerary/itinerary_goa');

    }
    public function kasol_itinerary(Request $request)
    {
        return view('/itinerary/itinerary_kasol');

    }
    public function manali_itinerary(Request $request)
    {
        return view('/itinerary/itinerary_manali');

    }
    public function kedarnath_itinerary(Request $request)
    {
        return view('/itinerary/itinerary_kedarnath');

    }
    public function mcleodganj_itinerary(Request $request)
    {
        return view('/itinerary/itinerary_mcleodganj');

    }
     
    public function mail(Request $request)
    {

       var_dump($fname = $request->input('fname'));die;

        // $fname = $request->input('fname');
        // $lname = $request->input('lname');
        // $email = $request->input('email');
        // $subject = $request->input('subject');
        // $message = $request->input('message');

      
        // Mail::send(['text'=>'mail'], $data, function($message) use ($data) {
        //  $message->to($data['test.oc907@gmail.com'], 'Testing mail')->subject
        //     ($subject);
        //  $message->from($email, $fname);
        // });
      // return response()->json();
    } 
}
