<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email',
            'hp' => 'required|digits_between:11,12',
            'subjek' => 'required',
            'keluhan' => 'required'
        ]);

        contacts::create($validateData);
        $dataName = $validateData['nama'];
        $message = 'Pesan ' . $dataName . ' berhasil di kirim';
        return redirect()->route('home')->with('pesan', $message);
    }
}
