@extends('layouts.app', ['title' => 'Denah SMKN 4 Bandung'])

@push('css')
    <style>
        .map1 {
            margin-top: 10px;
            width: 100%;
            height: 640px;
            overflow: auto;
        }
        .map2 {
            width: 100%;
            height: 1000px;
            overflow: auto;
            display: none;
        }
        .card:hover {
            cursor: pointer;
        }
        th, td {
            font-size: 0.8em;
        }
    </style>
@endpush

@section('content')
            
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
            {{-- <div class="d-flex justify-content-start mr-5" id="kelas-eskul">
                <div class="card p-5 bg-dark mr-2 text-center" style="height: 50px; width:170px;">
                    <h6 class="text-white" style="margin-top: -10px;">Pramuka</h6>
                </div>
                <div class="card p-5 bg-dark mr-2 text-center" style="height: 50px; width:170px;">
                    <h6 class="text-white" style="margin-top: -10px;">PMR</h6>
                </div>
            </div> --}}
        </div> 
    </div>
        {{-- 
        <div class="d-flex justify-content-srat p-5">
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
        </div>  --}}
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="ruangan-tab" data-toggle="tab" href="#ruangan" role="tab" aria-controls="ruangan" aria-selected="true">Ruangan</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="sarpras-tab" data-toggle="tab" href="#sarpras" role="tab" aria-controls="sarpras" aria-selected="false">SarPras</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="ruangan" role="tabpanel" aria-labelledby="ruangan-tab">
                        <div class="table-responsive mt-4">
                            <table class="table table-bordered table-sm">
                                <tr>
                                    <th width="30%" class="th-gray">Tipe</th>
                                    <td width="70%" id="">Kelas</td>
                                </tr>
                                <tr>
                                    <th width="30%" class="th-gray">Lantai</th>
                                    <td width="70%" id="">1</td>
                                </tr>
                                <tr>
                                    <th width="30%" class="th-gray">Status</th>
                                    <td width="70%" id="">Digunakan</td>
                                </tr>
                                <tr>
                                    <th width="30%" class="th-gray">Deskripsi</th>
                                    <td width="70%" id="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos sapiente nulla praesentium nam esse sequi saepe.</td>
                                </tr>                                
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sarpras" role="tabpanel" aria-labelledby="sarpras-tab">
                        <div class="table-responsive mt-4">
                            <table class="table table-bordered table-sm">
                                <tr align="center">
                                    <th width="30%" class="th-gray">Nama Barang</th>
                                    <th width="20%" class="th-gray">Jumlah</th>
                                    <th width="25%" class="th-gray">Kondisi</th>
                                    <th width="25%" class="th-gray">Catatan</th>
                                </tr>
                                <tr align="center">
                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                </tr>
                                <tr align="center">
                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                </tr>
                                <tr align="center">
                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                </tr>
                                <tr align="center">
                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Navigate</button>
            </div>
        </div>
        </div>
    </div>

@endsection

@push('js')
    <script>
        $.ajax({
            url: ""
        });
    </script>
@endpush