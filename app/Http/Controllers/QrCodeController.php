<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function generateTextQr(Request $request) 
    {
        $qr = new QrCode();

        $redcolorQr = $request->redcolorQr ?? 0;
        $greencolorQr = $request->greencolorQr ?? 0;
        $bluecolorQr = $request->bluecolorQr ?? 0;

        $redbgcolorQr = $request->redbgcolorQr ?? 255;
        $greenbgcolorQr = $request->greenbgcolorQr ?? 255;
        $bluebgcolorQr = $request->bluebgcolorQr ?? 255;
        
        $stringQr = $request->stringQr;

        return $qr::size(200)
                    ->color($redcolorQr, $greencolorQr, $bluecolorQr)
                    ->backgroundColor($redbgcolorQr, $greenbgcolorQr, $bluebgcolorQr)
                    ->generate($stringQr);

    }
}
