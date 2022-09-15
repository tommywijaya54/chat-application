<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class EmployeeController extends Controller
{
    public function index()
    {
        return Inertia::render('Employee/Index', [
            'employees' => Employee::all()
        ]);
    }

    public function edit(Employee $employee)
    {
        return Inertia::render('Employee/Edit', [
            'employee' => $employee
        ]);
    }

    public function update(Request $request, $id)
    {
        $entity = Employee::find($id);

        $entity->name = $request->name;
        $entity->phone = $request->phone;
        $entity->address = $request->address;
        $entity->email = $request->email;
        $entity->note = $request->note;

        $entity->join_date = $request->join_date;
        $entity->exit_date = $request->exit_date;

        $entity->relatives_name = $request->relatives_name;
        $entity->relatives_phone = $request->relatives_phone;
        $entity->relatives_note = $request->relatives_note;

        $entity->update();

        return Redirect::route('employee.index')->with('message', 'Employee details of ' . $entity->name . ' updated');
    }
}
