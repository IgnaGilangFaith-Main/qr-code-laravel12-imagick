<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class IndexController extends Controller
{
    function index(Request $request)
    {
        $input = "https://pendaftaran.elmuna-kebumen.com/asset/img/tanda-tangan.png";
        $qr = QrCode::format('png')
            ->margin(2)
            ->size(115)
            ->merge(public_path('assets/img/icon1.png'), 0.1, true)
            ->errorCorrection('H')
            ->generate($input);

        return view('index', ['qr' => $qr]);
    }
}
