<?php

namespace App\Http\Controllers\Translations;

use App\Models\Translation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SerachTranslationController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
    public function __invoke($name)
    {
        return Translation::where('name', 'like', '%'.$name.'%')->get();
    }
}
