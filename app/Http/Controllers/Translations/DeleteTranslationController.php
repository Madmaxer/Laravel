<?php

namespace App\Http\Controllers\Translations;

use App\Models\Translation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteTranslationController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        return Translation::destroy($id);
    }
}
