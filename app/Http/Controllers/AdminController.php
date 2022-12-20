<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\User;
use App\Models\message;
use App\Models\BookRequest;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function insertbook(){
        return view('admin.insertbook');
    }
    public function Home(){
        $data=message::all();
        $student=User::where('usertype','0')->count();
        $book=book::count();
        $pending=BookRequest::count();
        return view('admin.dashboard', compact('student','book','data','pending'));
    }
    public function uploadbook( Request $request ){
                    $data = new book;
                    $data->IsbnNo = $request->IsbnNo;
                    $data->Serialno= $request->Serialno;
                    $data->B_name = $request->B_name ;
                    $data->W_name = $request->W_name;
                    $data->R_Branch = $request->R_Branch;
                    $image = $request->image;

                    $imagename = time().'.'.$image->getClientOriginalExtension();
                    $data->image = $imagename;
                    $request->image->move('bookimage',$imagename);

                    $data->save();
                    return redirect()->back()->with('message','Book Added Succesfully');

    }
    public function Students(){
        if(Auth::check())
        {
         $data = User::where('usertype','=','0')->get();
         return view('admin.Students', compact('data'));
       }
      
       
        {
        return view('admin.Students',compact("data"));
        }
    }
    public function IssuedBooks(){

        $bookid= BookRequest::select('B_id')->get();
        $data2 = Book::find($bookid);
        $uid= BookRequest::select('u_id')->get();
        $data3 = User::find($uid);
        
        $data1 = $data2->merge($data3);
        $data=$data1->all();



      return view('admin.IssuedBooks',compact('data'));
    }
    public function updatedeletebook(){
        $data = book::all();
        return view('admin.update-delete-book',compact("data"));
    }
    public function deletebook($id){
        $data=book::find($id);
        $data->delete();
        return redirect()->back()->with('message','Book Deleted Succesfully');
     }
     public function updatebook($id){

     }
     public function Messages(){
         $data = Message::all();
        return view('admin.messages',compact("data"));
     }
     public function StudentProfile($id){
        $data = User::find($id);
        return view('admin.StudentProfile', compact('data'));
     }
     public function BookRequest(){

       $bookid= BookRequest::select('B_id')->get();
       $data2 = Book::find($bookid);
       $uid= BookRequest::select('u_id')->get();
        $data3 = User::find($uid);

        $data1 = $data2->merge($data3);
        $data=$data1->all();
        return view('admin.Book-Request',compact('data','uid'));
     }
     public function BookReneualRequest(){
        return view('admin.Book-Renewal-Request');
     }
     public function BookReturnRequest(){
        return view('admin.Book-Return-Request');
     }
     public function DeleteUser($id){
        $data=User::find($id);
        $data->delete();
        return redirect()->back()->with('message','User Data Succesfully');
     }
     public function AdminProfile(){
        $data = Auth::user();
                return view('admin.Admin-Profile',compact('data'));
     }
    public function UpdatePassword(){
        return view('admin.Update-Password');
    }
    public function DeleteMessage($id){
        $data=Message::find($id);
        $data->delete();
        return redirect()->back()->with('message','Messages Deleted Succesfully');
     }
}
