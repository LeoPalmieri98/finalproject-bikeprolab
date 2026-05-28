<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Suspension;
use Illuminate\Http\Request;

class suspensionController extends Controller
{

    public function index()
    {
        $suspensions = Suspension::with("category")->get();

        return response()->json([
            "success" => true,
            "data" => $suspensions,
        ]);
    }
}
