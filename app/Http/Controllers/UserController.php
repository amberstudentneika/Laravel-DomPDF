<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
class UserController extends Controller
{
  
    public function export_user_pdf(){
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];
           
        $pdf = PDF::loadView('pdf/file', compact('data'))->setOptions(['defaultFont' => 'sans-serif']);
     $date = date("F jS  Y h:i:s A");
    //  implode(" ",$date);
     $name='tNPS Report '.$date.".pdf";
    //  dd($date);
        return $pdf->download($name);  
    }
}
