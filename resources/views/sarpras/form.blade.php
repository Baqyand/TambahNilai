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
            <div class="d-flex justify-content-start">
                <a href="{{ route('sarpras.index') }}" class="btn btn-primary mr-3"><i
                        class="fas fa-arrow-left mt-1 fa-xs"></i></a>
                <h5 class="mt-2">Form Data Sarana Prasarana</h5>
            </div>
        </div>
        <div class="card-body p-4 layout">
            <form method="POST" action={{ url('sarpras', @$sarpras->id) }}>
                {{ csrf_field() }}
                <div class="form-row mb-3">
                    <div class="col">
                        <label for="nama">Nama</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan Nama Item" id="nama"
                            name="nama">
                    </div>
                    <div class="col">
                        <label for="id_ruangan" class="text-dark">Ruangan</label>
                        <select class="form-control form-control-sm" id="id_ruangan" name="id_ruangan">

                            @foreach ($ruangan as $dataRuangan)
                                <option value="{{ $dataRuangan->id }}"> {{ $dataRuangan->nama }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-row mb-3">
                    <div class="col">
                        <label for="jumlah" class="text-dark">Jumlah</label>
                        <input class="form-control form-control-sm" type="number" placeholder="Masukan Jumlah Item"
                            id="jumlah" name="jumlah" min="1">

                    </div>
                    <div class="col">
                        <label for="kondisi" class="text-dark">Kondisi</label>
                        <select class="form-control form-control-sm" id="kondisi" name="kondisi">
                            <option value="Sangat Baik">Sangat Baik</option>
                            <option value="Baik">Baik</option>
                            <option value="Kurang Baik">Kurang Baik</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="catatan">Catatan</label>
                    <textarea class="form-control" id="catatan" rows="6" style="resize: none;" name="catatan"></textarea>
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>

@endsection
