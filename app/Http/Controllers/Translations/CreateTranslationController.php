<?php

namespace App\Http\Controllers\Translations;

use App\Models\Translation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateTranslationController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required',
            'timetocomplete' => 'required',
        ]);

        return Translation::create($request->all());
    }

}
