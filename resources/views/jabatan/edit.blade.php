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
            <form class="form-horizontal" action="{{ route('jabatan.update',$jabatan->id_jabatan)}}" method="post">
              @method('PATCH')
               {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_jabatan" value="{{ $jabatan->nama_jabatan }}" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah" value="{{ $jabatan->jumlah}}" placeholder="Jenis Kelamin">
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

    <!-- /.content -->
  
    <!-- /.content -->
@endsection