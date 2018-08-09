<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{
    //
    public function questions(){
    	return view("/Home/Person/questions");
    }
    public function reports(){
    	return view("/Home/Person/reports");
    }
    public function reports_show(){
    	return view("/Home/Person/reports_show");
    }
    public function study(){
    	return view("/Home/Person/study");
    }
}
