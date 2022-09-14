<?php

namespace App\Http\Controllers;

use App\Models\CustomerParent;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CustomerParentController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Parent/Index', [
            'parents' => CustomerParent::all()
        ]);

        /*
            return Inertia::render('Parent/Index', [
                'parents' => CustomerParent::all(),
                'message' => 'List orang tua loaded'
            ])->with('message', 'Contact created.');
        */
    }
}
