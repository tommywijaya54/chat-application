<?php

namespace App\Http\Controllers;

use App\Models\CustomerStudent;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CustomerStudentController extends Controller
{
    public function index()
    {
        return Inertia::render('Student/Index', [
            'students' => CustomerStudent::all()
        ]);
    }
}
