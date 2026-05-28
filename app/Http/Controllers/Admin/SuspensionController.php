<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Suspension;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $newSuspension->size = $data["size"] ?? "N/D";
        $newSuspension->wheel = $data["wheel"] ?? "N/D";
        $newSuspension->material = $data["material"] ?? "N/D";
        $newSuspension->color = $data["color"] ?? "N/D";
        $newSuspension->brakes = $data["brakes"] ?? "N/D";
        $newSuspension->description = $data["description"] ?? "Nessuna Descrizione";


        if (array_key_exists("image", $data)) {

            // $img_url = Storage::putFile("uploads", $data["image"]);
            $img_url = Storage::disk('public')->putFile("uploads", $data["image"]);
            $newSuspension->image = $img_url;
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
    public function edit(Suspension $suspension)
    {
        return view('admin.suspensions.edit', compact('suspension'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Suspension $suspension)
    {

        $data = $request->all();

        $suspension->category_id = $data["category_id"];
        $suspension->brand = $data["brand"];
        $suspension->name = $data["name"];
        $suspension->price = $data["price"];
        $suspension->size = $data["size"] ?? "N/D";
        $suspension->wheel = $data["wheel"] ?? "N/D";
        $suspension->material = $data["material"] ?? "N/D";
        $suspension->color = $data["color"] ?? "N/D";
        $suspension->brakes = $data["brakes"] ?? "N/D";
        $suspension->description = $data["description"] ?? "Nessuna Descrizione";


        if (array_key_exists("image", $data)) {

            Storage::delete($suspension->image);

            //$img_url = Storage::putFile("uploads", $data["image"]);

            $img_url = Storage::disk('public')->putFile("uploads", $data["image"]);

            $suspension->image = $img_url;
        }

        $suspension->update();

        return redirect()->route('admin.suspensions.show', $suspension);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suspension $suspension)
    {

        if ($suspension->image) {
            Storage::delete($suspension->image);
        }
        $suspension->delete();

        return redirect()->route('admin.suspensions.index');
    }
}
