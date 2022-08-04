<?php

namespace App\Http\Controllers\Translations;

use App\Models\Translation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OneTranslationController extends Controller
{ 
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        return Translation::find($id);
    }
}
