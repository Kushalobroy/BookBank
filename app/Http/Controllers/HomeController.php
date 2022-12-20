<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\BookRequest;
use App\Models\User;
use App\Models\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function redirects(){
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            $data=message::all();
            $student=User::where('usertype','0')->count();
            $book=book::count();
            $pending=BookRequest::count();
            return view('admin.dashboard', compact('student','book','data','pending'));
        }
        else{
            $data2 = User::all();
            $book=book::count();
            return view('/dashboard', compact('book','data2'));
        }
    }
   
   


   
}
