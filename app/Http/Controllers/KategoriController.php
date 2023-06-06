<?php

namespace App\Http\Controllers;

use Illuminate\Support\facades\Validator;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
	public function index()
	{
		$kategori = Kategori::get();

		return view('kategori/index', ['kategori' => $kategori]);
	}

	public function tambah()
	{
		return view('kategori.form');
	}

	public function simpan(Request $request)
	{
        $messages = [
            'required' => ':Attribute kategori harus diisi.',
        ];

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

		$data = [
			'nama' => $request->nama,
		];

		Kategori::create($data);

		return redirect()->route('kategori');
	}

	public function edit($id)
	{
		$kategori = Kategori::find($id)->first();

		return view('kategori.form', ['kategori' => $kategori]);
	}

	public function update($id, Request $request)
	{
		Kategori::find($id)->update(['nama' => $request->nama]);

		return redirect()->route('kategori');
	}
	public function hapus($id, Request $request)
	{
		Kategori::find($id)->delete(['nama' => $request->nama]);

		return redirect()->route('kategori');
	}
}
