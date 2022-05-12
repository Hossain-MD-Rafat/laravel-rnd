<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class Test extends Controller
{
    public function translate()
    {
        // $tr = new GoogleTranslate();
        // $tr->setSource();
        // $tr->setTarget('en');
        // echo "Original text: გამარჯობა მსოფლიო!";
        // echo "<br>Translated text: ";
        // echo $tr->translate('გამარჯობა მსოფლიო!');
        return view('welcome');
    }
}
