<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        return response()->json([
            'name' => 'Walk Off',
            'description' => 'A Laravel-based baseball game API.',
            'version' => '0.1.0',
        ]);
    }
}
