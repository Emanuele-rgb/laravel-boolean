<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;

    public function __construct()
    {
        $this->students = [
            [
                'id' => 1,
                'img' => 'https://www.boolean.careers/images/students/biagini.png',
                'nome' => 'Alessandro Biagini',
                'eta' => 25,
                'genere' => 'm',
                'azienda' => 'DISC SPA',
                'ruolo' => 'web developer',
                'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.'
            ],
        ];
    }

    
    public function index(){
        
        
            $students = $this->students;
        

        return view ('students.index', compact('students'));
    }

    public function show($id){

    }


}
