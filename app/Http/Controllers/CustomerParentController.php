<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerParentUpdateRequest;
use App\Models\CustomerParent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

    public function show(CustomerParent $parent)
    {
        return Inertia::render('');
    }

    public function edit(CustomerParent $parent)
    {
        return Inertia::render('Parent/Edit', [
            'parent' => $parent
        ]);
    }

    /*
    public function update(CustomerParent $parent, CustomerParentUpdateRequest $request)
    {
        dd($parent, $request);

        $parent->update(
            $request->validated()
        );

        return Redirect::back()->with('message', $parent->name . ' updated');
    }*/

    public function update(Request $request, $id)
    {
        $entity = CustomerParent::find($id);

        $entity->name = $request->name;
        $entity->phone = $request->phone;
        $entity->address = $request->address;
        $entity->email = $request->email;
        $entity->nik = $request->nik;
        $entity->birthdate = $request->birthdate;
        $entity->note = $request->note;

        $entity->update();

        return Redirect::route('parent.index')->with('message', $entity->name . ' updated');
    }
}
