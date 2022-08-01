<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class DecentemploymentController extends Controller
{
    public function index(){
        return view('Frontend.home');
    }
    public function inner(){
        return view('Frontend.inner');
    }
    public function services(){
        return view('Frontend.services');
    }
    public function jobcategory(){
        return view('Frontend.jobcategory');
    }
    public function joblist(){
        return view('Frontend.joblist');
    }
    public function client(){
        return view('Frontend.client');
    }
    public function gallery(){
        return view('Frontend.gallery');
    }
    public function contact(){
        return view('Frontend.contact');
    }
    public function applyform(){
        return view('Frontend.applyform');
    }
}