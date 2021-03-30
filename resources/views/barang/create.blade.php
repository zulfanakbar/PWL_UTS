@extends('barang.layouts.app')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Barang
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Peringatan</strong>Ada yang salah dengan inputan anda!<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('barang.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="Kode Barang">Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control" id="kode_barang">
                    </div>
                    <div class="form-group">
                        <label for="Nama Barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang">
                    </div>
                    <div class="form-group">
                        <label for="Kategori Barang">Kategori Barang</label>
                        <select name="kategori_barang" class="form-select" id="kategori_barang">
                            <option selected disabled hidden>Pilih Kategori</option>
                            <option value="perlengkapan riding">perlengkapan riding</option>
                            <option value="aksesoris motor">aksesoris motor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga">
                    </div>
                    <div class="form-group">
                        <label for="Qty">Qty</label>
                        <input type="text" name="qty" class="form-control" id="qty">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
