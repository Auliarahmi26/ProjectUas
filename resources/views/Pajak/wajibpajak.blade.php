@extends('layouts.master')

@section('content')
    <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Data Wajib Pajak</h3>
                        </div>
                        <div class="panel-body">
                        <a href="{{ route('wajibpajak.create') }}" class="btn btn-primary">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                           
                                            <th>Nomor Objek Pajak</th>
                                            <th>Nama Wajib Pajak</th>
                                            <th>Alamat Objek Pajak</th>
                                            <th>Alamat Wajib Pajak</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    @foreach($wajib_pajaks as $wajib_pajak)
                                    <tbody>
                                        <tr>
                                        
                                            <td>{{$wajib_pajak->nomor_objek_pajak}}</td>
                                            <td>{{$wajib_pajak->nama_wajib_pajak}}</td>
                                            <td>{{$wajib_pajak->alamat_objek_pajak}}</td>
                                            <td>{{$wajib_pajak->alamat_wajib_pajak}}</td>
                                            <td>
                                             <form action="{{route('wajibpajak.destroy',$wajib_pajak)}}" method="POST">
                                             {{csrf_field()}}
                                             {{method_field('DELETE')}}
                                             <a href="{{route('wajibpajak.edit', $wajib_pajak)}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                             <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
                                        </tr>
                                       
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
               
@endsection
