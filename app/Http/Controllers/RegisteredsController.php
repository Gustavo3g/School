<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Registered;
use App\Models\Student;
use Illuminate\Http\Request;

class RegisteredsController extends Controller
{

    private $registered;
    private $student;
    private $classe;

    public function __construct(Registered $registered, Student $student, Classe $classe)
    {
        $this->registered = $registered;
        $this->student = $student;
        $this->classe = $classe;
    }

    public function index()
    {
        $registereds = $this->registered
            ->get()
            ->toArray();

        return view('registereds.index', compact('registereds'));
    }

    public function create($id)
    {
        $student = $this->student->find($id)
            ->first()
            ->toArray();
        $classes = $this->classe
            ->get()
            ->toArray();


        return view('registereds.create', ['student' => $student, 'classes' => $classes]);
    }

    public function store(Request $request)
    {
        dd($request);
        return view('registereds.create');
    }
}
