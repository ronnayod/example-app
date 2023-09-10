<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $address = "123 กรุงเทพ , ประเทศไทย";
        $tel = "06-xxxx-xxxx";
        $email = "ronnayod123@gmail.com";
        // return view('about',['address'=>$address,'tel'=>$tel,'email'=>$email]); // ส่งค่าแบบที่ 1
        // return view('about', compact('address','tel','email')); // ส่งค่าแบบที่ 2
        return view('about')
        ->with('address',$address)
        ->with('tel',$tel)
        ->with('email',$email);
    }
   
}
