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
                                <form action="/guru/{{ $guru->id }}/update" method="POST"
                                    enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Guru</label>
                                        <input name="nama_guru" type="text" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Guru"
                                            value="{{ $guru->nama_guru }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">KTP</label>
                                        <input name="ktp" type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="KTP"
                                            value="{{ $guru->ktp }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIP</label>
                                        <input name="nip" type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="nip"
                                            value="{{ $guru->nip }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">MAPEL</label>
                                        <input name="mapel" type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Mapel" value="{{ $guru->mapel }}">
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
