<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Plus;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(!Auth::check()) {
            return redirect('/');
         }
        
            

        $plus = Plus::get();

        $data = [
            'plus' => $plus,
        ];
        
         return view('index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check()) {
            return redirect('/');
         }
        
        return view('fitur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::check()) {
            return redirect('login');
         }

         
         
        $nama = $request->input('nama');
        $kelas = $request->input('kelas');



        Plus::create([
            'nama' => $nama,
            'kelas' => $kelas,
        ]);

        return redirect('index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Auth::check()) {
            return redirect('/');
         }
        
        $selected = Plus::where('id', $id)->first();

        $data = [
            'plus' => $selected
        ];

        return view('fitur.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!Auth::check()) {
            return redirect('/');
         }

        $nama = $request->input('nama');
        $kelas = $request->input('kelas');

        Plus::where('id', $id)->update([
                'nama' => $nama,
                'kelas' => $kelas
            ]);

            return redirect('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Auth::check()) {
            return redirect('/');
         }

        Plus::selectById($id)->delete();
        
        return redirect('index');
    }


    public function profile() {

        if(!Auth::check()) {
            return redirect('/');
         }

        return view('profile');
    }
}
