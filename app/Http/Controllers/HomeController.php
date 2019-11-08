<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Contact;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $data = $this->getContacts();
    return view('home'/*["data"=>$data]*/);
    }

    // function getContacts(){
    //     $objuser = new User();
    //     $objContact = new Contact();
    //     $user_id = $user_id = \Auth::user()->id;
    //     //one to many inverse
    //     //$objContact::find(1)->user;
    //     return $objuser::find($user_id)->contacts()->get();
    // }
}
