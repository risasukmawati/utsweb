<?php

namespace App\Http\Controllers;

use App\Models\laundry;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class laundryController extends Controller
{

    public function index()
    {
        $laundry = DB::table('laundry')
        ->select("laundry.id", "kodelaundry", "laundry.nama", "laundry.beratlaundry","laundry.jenislaundry")
        ->get();

        return view('laundry.index', ['datalaundry' => $laundry]);
    }

    public function create()
    {
       
        return view('laundry.create');
    }

    public function store(Request $request)
    {
        DB::table('laundry')->insert([
            'kodelaundry' => $request->kodelaundry,
            'nama' => $request->nama,
            'beratlaundry' => $request->beratlaundry,
            'jenislaundry' => $request->jenislaundry
        ]);

        return redirect(url('/laundry'));
    }

    public function update(Request $request, $id)
    {
        DB::table('laundry')
        ->where('id', $id)
        ->update([
            'kodelaundry' => $request->kodelaundry,
            'nama' => $request->nama,
            'beratlaundry' => $request->beratlaundry,
            'jenislaundry' => $request->jenislaundry,
        ]);

        return redirect(url('/laundry'));
    }

    public function edit($id)
    {
        $laundry = DB::table('laundry')
        ->select("laundry.id", "kodelaundry", "laundry.nama", "laundry.beratlaundry","laundry.jenislaundry")
        ->first();


        return view('laundry.edit', ['datalaundry' => $laundry, 'id' => $id]);
    }

    public function show(String $id)
    {
        $laundry = DB::table('laundry')
        ->select("laundry.id", "kodelaundry", "laundry.nama", "laundry.beratlaundry","laundry.jenislaundry")
        // ->where('laundry.id', $id)
        ->first();


        return view('laundry.show', ['datalaundry' => $laundry, 'id' => $id]);
    }
    public function destroy($id)
    {
        DB::table('laundry')
        ->where('id', $id)
        ->delete();

        return redirect(url('/laundry'));
}
}