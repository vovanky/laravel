<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App;

class ChangeLanguageController extends Controller
{

     public function lang( request $request){
        $lang = $request->language;
        $language = config('app.locale');
        if ($lang == 'en') {
            $language = 'en';
        }
        if ($lang == 'vi') {
            $language = 'vi';
        }
        \Session::put('language', $language);
        return redirect()->back();
      }
}
