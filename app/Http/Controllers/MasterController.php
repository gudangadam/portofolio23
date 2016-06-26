<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class MasterController extends Controller
{
   public function index()
   {
    	$orang = ['adam','fathira','satria'];
   	
   		//basic routes//
   		return view('welcome', compact('orang')); //php function compcat
   }

   public function about()
   {

   	return 'halaman lain';

   }
}
