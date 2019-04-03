@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Jabatan</h1>
<br>
      
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Jabatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($kategori as $p)
            <form class="form-horizontal" action="/datakategori/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="{{ $p->nama }}" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis_kelamin" value="{{ $p->jenis_kelamin}}" placeholder="Jenis Kelamin">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jabatan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jabatan" value="{{ $p->jabatan}}" placeholder="Jabatan">
                  </div>
                </div>
      
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </section>
        @endforeach

    <!-- /.content -->
  
    <!-- /.content -->
@endsection