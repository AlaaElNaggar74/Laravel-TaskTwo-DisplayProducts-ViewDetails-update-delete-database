<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use Illuminate\Support\Facades\DB;



class studentController extends Controller
{
    // function index_db(){
    //     $students=DB::table('students')->get();
    //     return view("students",["students"=>$students]);
    // }
    function index(){

        // $students=students::all();
        // return view("students",["students"=>$students]);
        
        $students=students::latest()->paginate(3);
        return view("students",compact("students"));

    }

    function get_std_details($id){
        // $students=students::all();

$studentID=students::find($id);
        return view("stu_details",["studentID"=>$studentID]);
    }

    function form_input(){
       
        return view("formInput");
    }
  
    function store(){
        $data=\request();
        $name=\request()->get("name");
        $email=\request()->get("email");
        $image=\request()->get("image");
        $grade=\request()->get("grade");
 
        $student=new students();
        $student->name=$name;
        $student->email=$email;
        $student->image=$image;
        $student->grade=$grade;
        $student->save();


        return to_route("student.show",$student->id);
    }

    function form_update($id){
        $students=students::findorfail($id);
        return view("formInput",["updateId"=>$students]);
    }
    function edit(){
        $data=\request();
        $email=\request()->get("email");
        $studentID=students::where("email",$email)->first();
        $name=\request()->get("name");
        $image=\request()->get("image");
        $grade=\request()->get("grade");
 
        $studentID->name=$name;
        $studentID->image=$image;
        $studentID->grade=$grade;
        $studentID->save();


        return to_route("student.show",$studentID->id);
    }
    function destroy($id){

        $students=students::findorfail($id);
        $students->delete();
        return to_route("stu.inde");
    }

    function aboutPage()
    {
        return view('about');
    }
    function contactPage()
    {
        return view('contact');
    }
    function landingPage()
    {
        return view('landing');
    }
}
