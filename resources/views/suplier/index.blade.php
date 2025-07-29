@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2>Data Suplier</h2>
                <a href="{{ url('/supliers/create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
            <table border="1" cellpadding="8" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Suplier</th>
                        <th>Nama suplier</th>
                        <th>Alamat SUplier</th>
                        <th>Telepon Suplier</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($supliers as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_suplier }}</td>
                            <td>{{ $item->nama_suplier }}</td>
                            <td>{{ $item->alamat_suplier }}</td>
                            <td>{{ $item->no_telp_suplier }}</td>
                            <td>
                                <button type="submit" class="btn btn-success">Edit</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
