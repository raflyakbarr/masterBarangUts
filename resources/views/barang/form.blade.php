@extends('layouts.app')

@section('title', 'Form Barang')

@section('contents')
  <form action="{{ isset($barang) ? route('barang.tambah.update', $barang->id) : route('barang.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($barang) ? 'Form Edit Barang' : 'Form Tambah Barang' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="kode_barang">Kode Barang</label>
              <input class="form-control @error('kode_barang') is-invalid @enderror rounded-5" type="text" name="kode_barang" id="kode_barang" value="{{ isset($barang) ? $barang->kode_barang : '' }}" placeholder="Masukan kode barang">
                @error('kode_barang')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
              <label for="nama_barang">Nama Barang</label>
              <input class="form-control @error('nama_barang') is-invalid @enderror rounded-5" type="text" name="nama_barang" id="nama_barang" value="{{ isset($barang) ? $barang->nama_barang : '' }}" placeholder="Masukan nama barang">
              @error('nama_barang')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="id_kategori">Kategori Barang</label>
							<select name="id_kategori" id="id_kategori" class="custom-select">
								<option value="" selected disabled hidden>-- Pilih Kategori --</option>
								@foreach ($kategori as $row)
									<option value="{{ $row->id }}" {{ isset($barang) ? ($barang->id_kategori == $row->id ? 'selected' : '') : '' }}>{{ $row->nama }}</option>
								@endforeach
							</select>
                            @error('id_kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
            </div>
            <div class="form-group">
              <label for="harga">Harga Barang</label>
              <input class="form-control @error('harga') is-invalid @enderror rounded-5" type="text" name="harga" id="harga" value="{{ isset($barang) ? $barang->harga : '' }}" placeholder="Masukan harga barang">
              @error('harga')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah Barang</label>
              <input class="form-control @error('jumlah') is-invalid @enderror rounded-5" type="text" name="jumlah" id="jumlah" value="{{ isset($barang) ? $barang->jumlah : '' }}" placeholder="Masukan jumlah barang">
              @error('jumlah')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="jumlah">Deskripsi</label>
              <input class="form-control @error('deskripsi') is-invalid @enderror rounded-5" type="text" name="deskripsi" id="deskripsi" value="{{ isset($barang) ? $barang->jumlah : '' }}" placeholder="Tuliskan deskripsi barang">
              @error('deskripsi')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
