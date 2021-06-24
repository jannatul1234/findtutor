<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Auth;
use Hash;
use App\Models\Balance;
class WelcomeController extends Controller
{
      public function index()
    {
         $subject=User::distinct('subject')->where('subject','!=','NULL')->get('subject');
         
    	return view('fontend.home.home',compact('subject'));
    }


 public function teacher()
    {
         
    	return view('auth.teacher');
    }

 public function search(Request $request)
    {
        

request()->validate(['area'=>'required','subject'=>'required']);
$result=User::where('address',"LIKE","%$request->area%")->where('subject',"LIKE","%$request->subject%")->where('type','teacher') ->get();





    	return view('fontend.search',compact('result'));
    }


 public function book(Request $request)
    {
        
$book=new Book();
$book->teacher_id=$request->teacher_id;
$book->student_id=$request->student_id;

$book->save();



    	return back()->with('success','You have appointed succesfully');
    }


public function ab()
    {
        
$book=Book::get();


    	return view('admin.appoinment',compact('book'));
    }



public function approved($id)
    {
        
$book=Book::where('id',$id)->first();
$book->status=1;
$book->save();

    	return back()->with('success','You have approved succesfully');
    }

public function pass_cange()
    {
         
        return view('admin.password-change');
    }

    public function student_cngpass()
    {
         
        return view('student_cngpass');
    }


public function teacherchngpass()
    {
         
        return view('teacherchngpass');
    }



public function change_password(Request $request)
    {
        request()->validate(['password'=>'required|confirmed']);
         $change=User::where('id',Auth::user()->id)->first();
         $change->password=Hash::make($request->password);
        $change->save();

return back()->with('success','Password change succesfully');


    }



    public function edit(Request  $request)
    {
         request()->validate( [
            'name' => ['required', 'string', 'max:255'],
            'class' => ['nullable', 'string', 'max:255'],
            'subject' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'parent_name' => ['nullable', 'string', 'max:255'],
            
            
        ]);

$user=User::where('id',Auth::user()->id)->first();
$user->name=$request->name;
$user->class=$request->class;
$user->subject=$request->subject;
$user->email=$request->email;
$user->phone=$request->phone;
$user->address=$request->address;
$user->city=$request->city;
$user->parent_name=$request->parent_name;
$user->save();
return back()->with('success','Updated succesfully');
        
    }
     public function editfind()
    {
        return view('auth.edit'); 
        
    }
     public function editteacher()
    {
        return view('auth.editteacher'); 
        
    }
public function history()
    {
         $book=Book::where('student_id',Auth::user()->id)->get();
        return view('admin.history',compact('book'));
    }
public function balancesheet(Request $request)
    {
       $balance=Balance::first();
       $balance->balance=$balance->balance+$request->balance;
       $balance->save();
       return back()->with('success','Balance Added succesfully');
    }
    public function balance()
    {
        $balance=Balance::first();
       return view('admin.balance',compact('balance'));
    }


    public function student_list()
    {
         
        $students=User::where('type','student')->get();
        return view('admin.student_list',compact('students'));
    }

 public function student_delete($id)
    {
         $delete=User::where('id',$id)->first();
         $delete->delete();
         return back()->with('success','Student delete succesfully');
    }


    public function teacher_list()
    {
   $teachers=User::where('type','teacher')->get();
        return view('admin.teacher_list',compact('teachers'));      
    }
 public function teacher_delete($id)
    {
         $delete=User::where('id',$id)->first();
         $delete->delete();
         return back()->with('success','teacher delete succesfully');
    }




 public function about()
    {
        return view('fontend.about') ;
    }




}
