<?php

namespace App\Http\Controllers;

use App\Models\CustomerStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class CustomerStudentController extends Controller
{
    public function index()
    {
        return Inertia::render('Student/Index', [
            'students' => CustomerStudent::all()
        ]);
    }

    public function edit(CustomerStudent $student)
    {
        return Inertia::render('Student/Edit', [
            'student' => $student,
            'parent' => $student->parent
        ]);
    }

    public function update(Request $request, $id)
    {
        $entity = CustomerStudent::find($id);

        $entity->name = $request->name;
        $entity->school = $request->school;
        $entity->grade = $request->grade;
        $entity->phone = $request->phone;
        $entity->email = $request->email;
        $entity->note = $request->note;

        $entity->update();

        return Redirect::route('student.index')->with('message', 'Student details of ' . $entity->name . ' updated');
    }
}
