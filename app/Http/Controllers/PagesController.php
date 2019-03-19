<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('pages.about');
    }
    public function contactUs(){
        return view('pages.contactUs');
    }
    public function admin(){
        return view('pages.adminLogin');
    }
    public function portal(){
        session()->get('loggedIn');
        if(session()->get('loggedIn') == 'isLoggedIn'){
            return view('layouts.adminPortal');
        }else{
            return redirect('/admin')->with('error','You need to login!');
        }
    }
    public function upload(){
        session()->get('loggedIn');
        if(session()->get('loggedIn') == 'isLoggedIn'){
            return view('pages.uploadAdmin');
        }else{
            return redirect('/admin')->with('error','You need to login!');
        }
        
    }
    public function icons(){
        session()->get('loggedIn');
        if(session()->get('loggedIn') == 'isLoggedIn'){
            return view('pages.iconsUpload');
        }else{
            return redirect('/admin')->with('error','You need to login!');
        }
        
    }
    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        if($username == 'Honore' && $password == 'carpe'){
            session()->put('loggedIn','isLoggedIn');
            return redirect('/portal');
        }else{
            return redirect('/admin')->with('error','Credentials not found!');
        }
    }
    public function logout(){
        session()->put('loggedIn','isLoggedOut');
        return redirect('/admin')->with('success','Successfully LoggedOut!');
    }
}
