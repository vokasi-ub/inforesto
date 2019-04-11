@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Jabatan</h1>
<br>
     
@if (count($hasil))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              
            <table class="table table-bordered table-striped">
                <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Aksi</th>
                </tr>

                @foreach($jabatan as $jabatan)
                <tr>
                <td>{{$jabatan->nama}}</td>
                <td>{{$jabatan->jenis_kelamin}}</td>
                <td>{{$jabatan->jabatan}}</td>
                    <td><a href="">Edit</a> | <a href="/delete/destroy/{{ $jabatan->id }}">Hapus</a></td>
                </tr>
                @endforeach
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  @else
   <div class="card-panel red darken-3 white-text">Oops.. Data Tidak Ditemukan</div>
@endif
    <!-- /.content -->
@endsection