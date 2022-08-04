<?php

namespace App\Http\Controllers\Translations;

use App\Models\Translation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditTranslationController extends Controller
{
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        $translation = Translation::find($id);
        $translation->update($request->all());
        return $translation;
    }
}
