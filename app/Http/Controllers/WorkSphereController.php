<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkSphere;

class WorkSphereController extends Controller
{
    public function search(Request $request)
    {
    	return WorkSphere::all();
    }
}
