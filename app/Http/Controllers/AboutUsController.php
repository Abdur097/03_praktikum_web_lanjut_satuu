<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function aboutus()
    {
        $data = array(
            'nama' => 'Abdur Rozak Junaidi',
            'nim' => '1941720009'
        );
        return view('about-us', $data);
    }
}
