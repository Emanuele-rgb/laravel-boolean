<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;

    public function __construct()
    {
        $this->students = config('students');
    }

    
    public function index(){
        
        
            $students = $this->students;
        

        return view ('students.index', compact('students'));
    }

    public function show($slug){

        $student = $this->searchStudent($slug, $this->students);
        if(! $student){
            abort('404');
        }

        return view ('students.show', compact('student'));
    }

    private function searchStudent($slug, $array) {
        foreach ($array as $student) {
            if($student['slug'] == $slug){
                return $student;
            }

            
        }
        return false;
    }

}
