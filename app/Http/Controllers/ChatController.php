<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ChatController extends Controller
{
    //
    public function index()
    {
        //ToDo: Need to remove email and password on Users Data only give (Id and Name)

        $users = User::all();
        return Inertia::render('Chat/Index', [
            'users' => $users
        ]);
    }
}
