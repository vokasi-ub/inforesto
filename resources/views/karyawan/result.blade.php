@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Karyawan</h1>
<br>
     
@if (count($hasil))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              
            <table class="table table-bordered table-striped">
                <tr>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
                </tr>

                @foreach($karyawan as $karyawan)
                <tr>
                <td>{{$karyawan->karyawan}}</td>
                <td>{{$karyawan->jumlah}}</td>
                    <td><a href="">Edit</a> | <a href="/delete/destroy/{{ $karyawan->id }}">Hapus</a></td>
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