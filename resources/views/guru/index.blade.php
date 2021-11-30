@extends('layout.master')
@section('content')
<br>
<div class="header">
    <div class="header">
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="panel-title"><center>Guru</center></h3>
                        <hr>
                        <div slass="left">
                            <a type="button" class="btn btn-success btn-sm btn-toggle" data-toggle="modal"
                                data-target="#exampleModalLong">
                                <i class="fa fa-plus text-white" aria-hidden="true"> + Tambah</i>
                            </a>
                        </div>
                        <div class="panel-body">
                            <div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA_GURU</th>
                                            <th>KTP</th>
                                            <th>NIP</th>
                                            <th>MAPEL</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; ?>
                                        @foreach($guru as $guru)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $guru->nama_guru }}</td>
                                            <td>{{ $guru->ktp }}</td>
                                            <td>{{ $guru->nip }}</td>
                                            <td>{{ $guru->mapel }}</td>
                                            <td>
                                                <a href="/guru/{{ $guru->id }}/edit"
                                                    class="btn btn-primary btn-sm">edit<i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a>
                                                <a href="/guru/{{ $guru->id }}/delete"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('yakin mau di hapus ?')">hapus<i
                                                        class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Form Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/guru/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Guru</label>
                            <input name="nama_guru" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama Guru">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">KTP</label>
                            <input name="ktp" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="KTP">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIP</label>
                            <input name="nip" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="NIP">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">MAPEL</label>
                            <input name="mapel" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="MAPEL">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        @endsection
