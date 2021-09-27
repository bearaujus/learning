<?php

namespace App\Http\Controllers;

use App\Models\Decrypted;
use Illuminate\Http\Request;
use App\Models\Encrypted;

class DecryptedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Controller::init();

        return view('decrypt/index', [
            'title' => 'DECRYPT'
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
            'encrypted_text' => ['required']
        ]);

        $encrypted = Encrypted::where('algo', '=', $request['algo'])->where('encrypted_text', '=', $request['encrypted_text'])->first();
        if ($encrypted == null) {
            return redirect('/decrypt')->with('fail', __('decrypt/validation.fail'));
        }

        return view('decrypt/decrypted', [
            'title' => 'DECRYPTED',
            'decrypted' => $encrypted->decrypted()->first(),
            'encrypted' => $encrypted
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Decrypted  $decrypted
     * @return \Illuminate\Http\Response
     */
    public function show(Decrypted $decrypted)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Decrypted  $decrypted
     * @return \Illuminate\Http\Response
     */
    public function edit(Decrypted $decrypted)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Decrypted  $decrypted
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Decrypted $decrypted)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Decrypted  $decrypted
     * @return \Illuminate\Http\Response
     */
    public function destroy(Decrypted $decrypted)
    {
        //
    }
}
