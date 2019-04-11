@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Menu</h1>
<br>
     
@if (count($hasil))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              
            <table class="table table-bordered table-striped">
                <tr>
                <th>Hidangan</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
                </tr>

                @foreach($menu as $menu)
                <tr>
                <td>{{$menu->kategori}}</td>
                <td>{{$menu->deskripsi}}</td>
                    <td><a href="">Edit</a> | <a href="/hapus/destroy/{{ $menu->id }}">Hapus</a></td>
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