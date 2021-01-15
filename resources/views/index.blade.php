@extends('layouts.app')

@push('css')
    <style>
        .map1 {
            width: 100%;
            height: 550px;
            overflow: auto;
        }
        .map2 {
            width: 100%;
            height: 550px;
            overflow: auto;
            display: none;
        }
        .card:hover {
            cursor: pointer;
        }
    </style>
@endpush

@section('content')
        
    <div class="d-flex justify-content-start ml-5 mb-2">
        <h4 class="mt-2">Maps SMKN 4 Bandung Lantai</h4>
        <select class="form-control form-control-lg ml-3" style="width: 70px;">
            <option>1</option>
            <option>2</option>
        </select>
    </div>

    <div class="map1">
        <div class="d-flex justify-content-start p-5" style="margin-left: 150px;">
            <div class="d-flex justify-content-start" style="margin-right: 200px;" id="kelas-g">
                <div class="card p-5 bg-primary mr-2 text-center" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                    <h6 class="text-white">G 1.1</h6>
                </div>
                <div class="card p-5 bg-primary mr-2 text-center">
                    <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                    <h6 class="text-white">G 1.1</h6>
                </div>
                <div class="card p-5 bg-primary mr-2 text-center">
                    <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                    <h6 class="text-white">G 1.1</h6>
                </div>
                <div class="card p-5 bg-primary mr-2 text-center">
                    <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                    <h6 class="text-white">G 1.1</h6>
                </div>
            </div>            
            <div class="d-flex justify-content-start mr-5" id="kelas-eskul">
                <div class="card p-5 bg-dark mr-2 text-center" style="height: 50px; width:170px;">
                    <h6 class="text-white" style="margin-top: -10px;">Pramuka</h6>
                </div>
                <div class="card p-5 bg-dark mr-2 text-center" style="height: 50px; width:170px;">
                    <h6 class="text-white" style="margin-top: -10px;">PMR</h6>
                </div>
            </div>
        </div> 
        <div class="d-flex justify-content-start p-5">
            <div class="d-inline mr-5">
                <div id="kelas-f">
                    <div class="card p-5 bg-warning mb-2 text-center">
                        <i class="fas fa-utensils fa-2x text-white mb-3"></i>
                        <h6 class="text-white">Kantin</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">F 1.1</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">F 1.1</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">F 1.1</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">F 1.1</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">F 1.1</h6>
                    </div>
                </div>

            </div>            
            <div class="d-flex justify-content-start ml-5 mr-5 mt-5">
                <div class="d-inline">

                    <div class="d-flex justify-content-start mb-5" id="kelas-e">

                        <div class="card p-5 bg-primary mr-2 text-center" style="height: 170px;">
                            <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                            <h6 class="text-white">E 1.1</h6>
                        </div>
                        <div class="card p-5 bg-primary mr-2 text-center" style="height: 170px;">
                            <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                            <h6 class="text-white">E 1.1</h6>
                        </div>
                        <div class="card p-5 bg-primary mr-2 text-center" style="height: 170px;">
                            <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                            <h6 class="text-white">E 1.1</h6>
                        </div>
                        <div class="card p-5 bg-primary mr-2 text-center" style="height: 170px;">
                            <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                            <h6 class="text-white">E 1.1</h6>
                        </div>
                        <div class="card p-5 bg-primary mr-2 text-center" style="height: 170px;">
                            <i class="fas fa-cog fa-2x text-white mb-3"></i>
                            <h6 class="text-white">Koperasi Siswa</h6>
                        </div>

                    </div>

                    <div class="card p-5 bg-success text-center text-white" style="height: 800px; width:570px;">
                        <h6 style="margin-top: 300px;">Lapangan</h6>
                        <h6>Olahraga</h6>
                    </div>
                </div>
            </div>
            <div class="d-inline mr-5" style="margin-top: -140px;">
                <div class="kelas-d">
                    <div class="card p-5 bg-warning mb-2 text-center">
                        <i class="fas fa-basketball-ball fa-2x text-white mb-3"></i>
                        <h6 class="text-white">R.Penjas</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">D 1.1</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">D 1.1</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">D 1.1</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">D 1.1</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">D 1.1</h6>
                    </div>
                </div>
            </div>
            <div class="d-inline mr-5" style="margin-top: -140px;">
                <div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">H 1.1</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">H 1.1</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">H 1.1</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">H 1.1</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">H 1.1</h6>
                    </div>
                    <div class="card p-5 bg-primary mb-2 text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                        <h6 class="text-white">H 1.1</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start p-5">
            <div class="d-flex justify-content-start" style="margin-right: 250px;" id="kelas-c">
                <div class="card p-5 bg-primary mr-2 text-center">
                    <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                    <h6 class="text-white">C 1.1</h6>
                </div>
                <div class="card p-5 bg-primary mr-2 text-center">
                    <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                    <h6 class="text-white">C 1.1</h6>
                </div>
                <div class="card p-5 bg-primary text-center" style="margin-right: 100px;">
                    <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                    <h6 class="text-white">C 1.1</h6>
                </div>
                <div class="card p-5 bg-secondary mr-2 text-center">
                    <i class="fas fa-toilet fa-2x text-white mb-3"></i>
                    <h6 class="text-white">Toilet</h6>
                </div>
                <div class="card p-5 bg-primary mr-2 text-center">
                    <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                    <h6 class="text-white">C 1.1</h6>
                </div>
            </div>
            <div class="d-flex justify-content-start" id="kelas-a">
                <div class="card p-5 bg-primary mr-2 text-center">
                    <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                    <h6 class="text-white">Ruang Guru</h6>
                </div>
                <div class="card p-5 bg-primary mr-2 text-center">
                    <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                    <h6 class="text-white">Ruang Guru</h6>
                </div>
                <div class="card p-5 bg-primary text-center" style="margin-right: 100px;">
                    <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                    <h6 class="text-white">Tata Usaha</h6>
                </div>
                <div class="card p-5 bg-primary mr-2 text-center" style="width: 220px;">
                    <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                    <h6 class="text-white">Hubin</h6>
                </div>
                <div class="card p-5 bg-primary mr-2 text-center" style="width: 220px;">
                    <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                    <h6 class="text-white">Kepala Sekolah</h6>
                </div>
                <div class="card p-5 bg-primary mr-2 text-center" style="width: 220px;">
                    <i class="fas fa-chalkboard-teacher fa-2x text-white mb-3"></i>
                    <h6 class="text-white">Kesiswaan</h6>
                </div>
            </div>
        </div> 
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $.ajax({
            url: ""
        });
    </script>
@endsection