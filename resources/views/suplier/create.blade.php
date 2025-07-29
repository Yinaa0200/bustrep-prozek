@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>From input Barang</h2>
        <div class="row">
            <div class="col">
                <form action="{{ route('supliers.store') }}" method="POST" class="form-control">
                    @csrf
                    {{-- kode suplier --}}
                    <div class="form-group">
                        <label for="" class="form-label">Kode Suplier</label>
                        <input type="text" name="kode_suplier" class="form-control">
                    </div>

                    {{-- nama suplier --}}
                    <div class="form-group">
                        <label for="" class="form-label">Nama Suplier</label>
                        <input type="text" name="nama_suplier" class="form-control">
                    </div>

                    {{-- alamat suplier --}}
                    <div class="form-group">
                        <label for="" class="form-label">Alamat Suplier</label>
                        <input type="text" name="alamat_suplier" class="form-control">
                    </div>

                    {{-- no telepon suplier --}}
                    <div class="form-group">
                        <label for="" class="form-label">No Telpon Suplier</label>
                        <input type="text" name="no_telp_suplier" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection