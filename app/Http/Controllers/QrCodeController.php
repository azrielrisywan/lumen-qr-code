<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function generateTextQr(Request $request) 
    {
        $qr = new QrCode();

        $stringQr = $request->stringQr;

        return $qr::size(200)->generate($stringQr);

    }
}
