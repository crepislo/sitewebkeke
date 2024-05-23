<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\App;
use Illuminate\Http\RedirectResponse;

class LangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function change(Request $request, $lang): RedirectResponse
    {
        App::setLocale($lang);
        session()->put('locale', $lang);
        // dd($request);

        return redirect()->back();
    }
}
