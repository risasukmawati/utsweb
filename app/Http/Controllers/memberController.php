<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class memberController extends Controller
{

    public function index()
    {
        $member = DB::table('member')
        ->select("member.id", "kodemember", "member.nama","member.alamat","member.notelp","jenismember_id", "jenismember.nama AS jenismember_nama")
        ->join('jenismember', 'jenismember.id', '=', 'member.jenismember_id')
        ->get();

        return view('member.index', ['datamember' => $member]);
    }

    public function create()
    {
        $jenismember = DB::table('jenismember')->get();
       
        return view('member.create', ['jenismember' => $jenismember]);
    }

    public function store(Request $request)
    {
        DB::table('member')->insert([
            'kodemember' => $request->kodemember,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'jenismember_id' => $request->jenismember
        ]);

        return redirect(url('/member'));
    }

    public function update(Request $request, $id)
    {
        DB::table('member')
        ->where('id', $id)
        ->update([
            'kodemember' => $request->kodemember,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'jenismember_id' => $request->jenismember
        ]);

        return redirect(url('/member'));
    }

    public function edit($id)
    {
        $member = DB::table('member')
        ->select("member.id", "kodemember", "member.nama","member.alamat","member.notelp","jenismember_id", "jenismember.nama AS jenismember_nama")
        ->join('jenismember', 'jenismember.id', '=', 'member.jenismember_id')
        ->where('member.id', $id)
        ->first();

        $jenismember = DB::table('jenismember')->get();

        return view('member.edit', ['datamember' => $member, 'id' => $id, 'jenismember' => $jenismember]);
    }

    public function show(String $id)
    {
        $member = DB::table('member')
        ->select("member.id", "kodemember", "member.nama","member.alamat","member.notelp","jenismember_id", "jenismember.nama AS jenismember_nama")
        ->join('jenismember', 'jenismember.id', '=', 'member.jenismember_id')
        ->where('member.id', $id)
        ->first();

        $jenismember = DB::table('jenismember')->get();

        return view('member.show', ['datamember' => $member, 'id' => $id, 'jenismember' => $jenismember]);
    }
    public function destroy($id)
    {
        DB::table('member')
        ->where('id', $id)
        ->delete();

        return redirect(url('/member'));
}
}