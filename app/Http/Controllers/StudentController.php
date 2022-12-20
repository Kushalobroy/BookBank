<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\User;
use App\Models\message;
use App\Models\BookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    
    public function Books(){
        $data = book::all();

        $data2=Auth::user();
        
        return view('Book', compact('data','data2'));
    }
    public function messagetolibrarian(){

        return view('messagetolibrarian');
    }
    public function message(Request $request){
        $data = new message;
        $data->name= $request->name;
        $data->message= $request->message;
        $data->save();
        return redirect()->back();
    }
    public function requestbook(Request $request){
      $data = new BookRequest;
      $data->B_id=$request->B_id;
      $data->u_id = $request->u_id;
      $data->save();
      return redirect()->back()->with('message','Request Sent Succesfully');
       
    }

}
