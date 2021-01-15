@extends('layouts.app', ['title' => ''])

@push('css')
    <style>
        .layout {
            width: 100%;
            height: 550px;
            overflow: auto;
        }
    </style>
@endpush

@section('content')
            
<div class="card mt-4">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h4 class="mt-1">Data Ruangan</h4>
            <a href="{{ route('ruangan.create') }}" class="btn btn-primary"><i class="fas fa-plus mr-1 mt-1"></i> Tambah</a>
        </div>
    </div>
    <div class="card-body p-4 layout">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Tipe</th>
                        <th>Blok</th>
                        <th>Lantai</th>
                        <th>Status</th>
                        <th width="150">Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataRuangan as $listRuangan)
                        <tr align="center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $listRuangan['nama'] }}</td>
                            <td>{{ $listRuangan['tipe'] }}</td>
                            <td>{{ $listRuangan['blok'] }}</td>
                            <td>{{ $listRuangan['lantai'] }}</td>
                            @if( $listRuangan['status'] == "Digunakan")
                            <td><span class="btn btn-outline-danger btn-sm" style="cursor:auto; font-size: 0.8rem;">Digunakan</span></td>
                            @else
                            <td><span class="btn btn-outline-success btn-sm" style="cursor:auto; font-size: 0.8rem;">Kosong</span></td>
                            @endif
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>
                                <a href="" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('js')
    <script>
        $(document).ready( function () {
            $('#example').DataTable();
        } );
    </script>

    <script>
        $.ajax({
            url: ""
        });
    </script>
@endpush