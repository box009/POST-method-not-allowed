<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create()
    {
        return view('create');
    }








    public function store(Request $request)
    {

        $messages = [
            'river.required' => 'খালি রাখা যাবে না',
            
        ];


        $validated = $request->validate([
            'river' => 'required|string',
        ],$messages );
    
        // The blog post is valid...
    }
 
}
