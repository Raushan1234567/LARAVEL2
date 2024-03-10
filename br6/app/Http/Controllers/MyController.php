<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Student;
use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function index(){
        return view('Products.student_create');
    }
     
       public function index1(){
        return view('Products.address_create');
    }
    public function index2(){
        return view('Products.enterstudent');
    }

   
    public function store(Request $request)
    {
        // Validate and save student data
    
        $student = new Student();
        $student->name = $request->input('name');
        $student->save();
    
        // Save associated address
        $address = new Address();
        $address->address = $request->input('address');
        $student->address()->save($address);
    
        return back()->with('success', 'Student added successfully');

    }

    
}
