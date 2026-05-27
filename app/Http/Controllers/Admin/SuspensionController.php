<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Suspension;
use Illuminate\Http\Request;

class SuspensionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suspensions = Suspension::all();
        return view('admin.suspensions.index', compact('suspensions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.suspensions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newSuspension = new Suspension();

        $newSuspension->category_id = $data["category_id"];
        $newSuspension->brand = $data["brand"];
        $newSuspension->name = $data["name"];
        $newSuspension->price = $data["price"];
        $newSuspension->size = $data["size"];
        $newSuspension->wheel = $data["wheel"];
        $newSuspension->material = $data["material"];
        $newSuspension->color = $data["color"];
        $newSuspension->brakes = $data["brakes"];
        $newSuspension->description = $data["description"];


        if ($request->hasFile('image')) {

            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();

            $request->file('image')->storeAs('uploads', $fileName, 'public');

            $newSuspension->image = $fileName;
        }

        $newSuspension->save();

        return redirect()->route('admin.suspensions.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Suspension $suspension)
    {
        return view('admin.suspensions.show', compact('suspension'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
