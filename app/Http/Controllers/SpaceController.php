<?php

namespace App\Http\Controllers;
use App\Models\Space;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
    use HasFactory;
    public function index()
    {
        $space = Space::get();
        return view('space/index', compact('space'));   
    }
}
