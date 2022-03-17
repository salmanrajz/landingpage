<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fronthomeController extends Controller
{
    //
    public function index(){
        // return "Zoom";
        return view('home.index');
        // return view('admin.signin');
    }
    public function lgn(){
        // return "Zoom";
        return view('home.index');
        // return view('admin.signin');
    }
    public function feature_checkouts(){
        // return "Zoom";
        return view('home.checkout');
        // return view('admin.signin');
    }
    public function feature_leads(){
        // return "Zoom";
        return view('home.leads');
        // return view('admin.signin');
    }
    //
    public function feature_email(){
        // return "Zoom";
        return view('home.mail');
        // return view('admin.signin');
    }
    //
    //
    public function fleet_management(){
        // return "Zoom";
        return view('home.fleet-management');
        // return view('admin.signin');
    }
    //
}
