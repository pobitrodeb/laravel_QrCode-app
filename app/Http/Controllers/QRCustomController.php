<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCustomController extends Controller
{
   public function index()
   {
    return view('qrCode');
   }
}
