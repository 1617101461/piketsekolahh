<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Laratrust::hasRole('admin'))return $this->adminDashBoard();
        if(Laratrust::hasRole('member'))return $this->memberDashBoard();
        
        return view('home');
    }
protected function adminDashBoard()
{
    
    return view ('admin.index');
}

protected function memberDashBoard()
{
    
    return view ('member.index');
}
}
