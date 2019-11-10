<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use PDF;
class PdfController extends Controller
{
    function downloadPdf(){
        $id_user= \Auth::user()->id;
        $data= Post::where('user_id', $id_user);
        $pdf = PDF::loadView('postpdf',compact('data'));
        return $pdf->download('post.pdf');
    }
}
