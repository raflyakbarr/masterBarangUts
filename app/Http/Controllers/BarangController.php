<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\Validator;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Dashboard;
use Illuminate\Http\Request;

class BarangController extends Controller
{
	public function index()
	{
		$barang = Barang::get();

		return view('barang.index', ['data' => $barang]);
	}

	public function tambah()
	{
		$kategori = Kategori::get();

		return view('barang.form', ['kategori' => $kategori]);
	}

	public function simpan(Request $request)
	{
        $messages = [
            'required' => ':Attribute harus diisi.',
            // 'harga' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'id_kategori' => 'required|numeric',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'deskripsi' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

		$data = [
			'kode_barang' => $request->kode_barang,
			'nama_barang' => $request->nama_barang,
			'id_kategori' => $request->id_kategori,
			'harga' => $request->harga,
			'jumlah' => $request->jumlah,
			'deskripsi' => $request->deskripsi,
		];

		Barang::create($data);

		return redirect()->route('barang');
	}

	public function edit($id)
	{

		$barang = Barang::find($id)->first();
		$kategori = Kategori::get();

		return view('barang.form', ['barang' => $barang, 'kategori' => $kategori]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'kode_barang' => $request->kode_barang,
			'nama_barang' => $request->nama_barang,
			'id_kategori' => $request->id_kategori,
			'harga' => $request->harga,
			'jumlah' => $request->jumlah,
			'deskripsi' => $request->deskripsi,
		];

		Barang::find($id)->update($data);

		return redirect()->route('barang');
	}

	public function hapus($id)
	{
		Barang::find($id)->delete();

		return redirect()->route('barang');
	}
}
