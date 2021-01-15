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
            <a href="{{ route('ruangan.index') }}" class="btn btn-primary mr-3"><i class="fas fa-arrow-left mt-1 fa-xs"></i></a>
            <h5 class="mt-2">Form Data Ruangan</h5>
        </div>
    </div>
    <div class="card-body p-4 layout">
        <form>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input class="form-control form-control-sm" type="text" placeholder="Masukan Nama Ruangan" id="nama" name="nama">
            </div>
            <div class="form-row mb-3">
                <div class="col">
                    <label for="lantai" class="text-dark">Lantai</label>
                    <select class="form-control form-control-sm" id="lantai" name="lantai">
                        <option>select</option>
                    </select>
                </div>
                <div class="col">
                    <label for="blok" class="text-dark">Blok</label>
                    <select class="form-control form-control-sm" id="blok" name="blok">
                        <option>select</option>
                    </select>
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="col">
                    <label for="tipe" class="text-dark">Tipe</label>
                    <select class="form-control form-control-sm" id="tipe" name="tipe">
                        <option>select</option>
                    </select>
                </div>
                <div class="col">
                    <label for="status" class="text-dark">Status</label>
                    <select class="form-control form-control-sm" id="status" name="status">
                        <option>select</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="6" style="resize: none;" name="deskripsi"></textarea>
              </div>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </form>							
    </div>
</div>

@endsection