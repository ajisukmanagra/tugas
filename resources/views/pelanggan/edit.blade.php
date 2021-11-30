@extends('layout.master')

@section('content')
<br>
<div class="container">
    <div class="header">
        <div class="jumbotron">
            <div class="main">
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="panel-title"><center>Edit Data</center></h3>
                                <hr>
                                <form action="/pelanggan/{{ $pelanggan->id }}/update" method="POST"
                                    enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Siswa</label>
                                        <input name="nama_pelanggan" type="text" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama siswa"
                                            value="{{ $pelanggan->nama_pelanggan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NO HP</label>
                                        <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="no_hp"
                                            value="{{ $pelanggan->no_hp }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIS</label>
                                        <input name="no_ktp" type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="no_ktp"
                                            value="{{ $pelanggan->no_ktp }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NISN</label>
                                        <input name="nik" type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="nik" value="{{ $pelanggan->nik }}">
                                    </div>
                                    <div class="button">
                                        <button type="submit" class="btn btn-warning">update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
