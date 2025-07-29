@extends('layouts.app')
@section('content')
<div class="container">
    <h2>From input Barang</h2>
    <div class="row">
        <div class="col">
            <form action="method"="post" class="form-control">
                <div class="form-group">
                    <label for="" class="form-label">Nama Suplier</label>
                    <input type="text" name="kode_barang" class="form-control">
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Nama Suplier</label>
                    <input type="text" name="kode_barang" class="form-control">
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Nama Suplier</label>
                    <input type="text" name="kode_barang" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
    </div>
    @endsection