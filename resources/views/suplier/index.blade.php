@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
    <h2>Data Suplier</h2>
    <div class="row">
    <div class="col-md-4">
        <a href="{{url('/Suplier/Creats')}}" class="btn btn-primary">Tambah Data</a>
    </div>
</div>
        <table border="1" cellpadding="8" cellspacing="0">
              <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Suplier</th>
                        <th>Nama suplier</th>
                        <th>Alamat SUplier</th>
                        <th>Telepon Suplier</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($supliers as $item)
                    <tr>  
                    <td>{{$loop->iteration}}</td>                        
                    <td>{{$item->kode_suplier}}</td>                        
                    <td>{{$item->nama_suplier}}</td>                        
                    <td>{{$item->alamat_suplier}}</td>                        
                    <td>{{$item->no_telp_suplier}}</td>     
                </tr>                     
                    @endforeach
                </tbody>
        </table>
      </div>
   </div>
</div>
@endsection


