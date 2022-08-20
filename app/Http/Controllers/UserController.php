<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
  
    public function export_user_pdf(){
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];
           
        $pdf = PDF::loadView('pdf/file', compact('data'))->setOptions(['defaultFont' => 'sans-serif']);
     
        return $pdf->download('tutsmake.pdf');  
    }
}
