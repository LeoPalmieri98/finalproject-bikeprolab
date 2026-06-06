<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Revision;
use Illuminate\Http\Request;

class RevisionController extends Controller
{
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'user_name'        => "required|string",
            'user_email'       => "required|email",
            'brand'            => "required|string",
            'model'            => "required|string",
            'serial_key'       => 'required|string',
            'tel_number'    => "required|string",
            'service_interval' => "required|in:50,100,200,altro",
        ]);


        $revision = Revision::create($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Richiesta di revisione salvata con successo!',
            'data'    => $revision
        ], 201);
    }
}
