<?php

namespace App\Http\Controllers;

use App\Models\Encrypted;
use Illuminate\Http\Request;
use App\Models\Decrypted;

class EncryptedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Controller::init();

        return view('encrypt/index', [
            'title' => 'ENCRYPT'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Controller::init();

        $request->validate([
            'decrypted_text' => ['required']
        ]);

        // Get decrypted data
        $decrypted = Decrypted::where('decrypted_text', '=', $request['decrypted_text'])->first();
        // If decrypted data not exist
        if ($decrypted == null) {
            // create new decrypted data
            Decrypted::create(['decrypted_text' => $request['decrypted_text']]);
            // get latest created decrypted data
            $decrypted = Decrypted::latest('id')->first();
        }

        // Encripting text
        $encrypted_text = hash($request['algo'], $request['decrypted_text']);
        // Get encrypted data
        $encrypted = $decrypted->encrypteds()->where('algo', '=', $request['algo'])->where('encrypted_text', '=', $encrypted_text)->first();
        // If encrypted data not exist
        if ($encrypted == null) {
            // create new encrypted data
            Encrypted::create(['decrypted_id' => $decrypted['id'], 'encrypted_text' => $encrypted_text, 'algo' => $request['algo']]);
            // get latest created encrypted data
            $encrypted = Encrypted::latest('id')->first();
        }

        return view('encrypt/encrypted', [
            'title' => 'ENCRYPTED',
            'decrypted' => $decrypted,
            'encrypted' => $encrypted
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Encrypted  $encrypted
     * @return \Illuminate\Http\Response
     */
    public function show(Encrypted $encrypted)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Encrypted  $encrypted
     * @return \Illuminate\Http\Response
     */
    public function edit(Encrypted $encrypted)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Encrypted  $encrypted
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encrypted $encrypted)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Encrypted  $encrypted
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encrypted $encrypted)
    {
        //
    }
}
