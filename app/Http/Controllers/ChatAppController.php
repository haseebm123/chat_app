<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ChatAppController extends Controller
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

    public function index(){
        $data = User::whereNotIn('id',[auth()->user()->id])->get();
        return view('chat.index',compact('data'));
    }

    public function chatList(){
        return 'aaaaa';

    }

    public function userList()
    {
        return User::all();
    }

    // $newItem =[];
    // $data = []; //your all data
    // foreach ($data as $key => $value) {
    //     foreach ($value as $key => $item) {
    //         array_push($newItem,$item);
    //     }
    // }
    // print_r($newItem);
}


