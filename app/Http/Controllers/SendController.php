<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendController extends Controller
{
    public function sendMessage(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $umur = $request->umur;
        $message = $request->message;
        $no_wa = '62895341020714'; // Ganti dengan nomor WhatsApp yang diinginkan

        // Membentuk URL WhatsApp dengan data yang diterima dari formulir
        $whatsapp_url = "https://api.whatsapp.com/send?phone=$no_wa&text=Nama:%20$name%20%0DEmail:%20$email%20%0DUmur:%20$umur%20%0DPesan:%20$message";

        // Redirect pengguna ke URL WhatsApp
        return redirect()->away($whatsapp_url);
    }
}
