@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Jabatan</h1>
<br>
     <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Search</h3>
            </div>
            <form action="{{ url()->current() }}" >

            <div class="box-body">
              <div class="row">
                <div class="col-xs-5">
                  <div class="input-group">


                <div class="input-group-btn">
                  <button type="submit" class="btn btn-danger">Cari</button>
                </div>
                <!-- /btn-group -->
                
                <input type="text" class="form-control" name="keyword" placeholder="Search Data Jabatan..">
              </div>
                </div>
              </div>
            </div>
          </form>
            <!-- /.box-body -->
          </div>
    

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Jabatan</h3>
            </div>
            
            <div class="box-body">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Tambah Data
              </button>
              
              <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Masukkan Data Jabatan</h4>
              </div>
              <form class="form-horizontal" action="{{route('jabatan.store')}}" method="post">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Jabatan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Jabatan" name="nama_jabatan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jumlah</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="Jumlah" name="jumlah">
                  </div>
                </div>
              
              </div>
              <!-- /.box-body -->
            
              <!-- /.box-footer -->
  
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        </form>
            <table class="table table-bordered table-striped">
                <tr>
                <th>Nama Jabatan</th>
                <th>Jumlah</th>
                <th>Aksi</th>
                </tr>

                @foreach($jabatan as $jabatan)
                <tr>
                <td>{{$jabatan->nama_jabatan}}</td>
                <td>{{$jabatan->jumlah}}</td>
                  <td>
                                 <!--update -->
                                <button class="btn btn-icon btn-sm btn-info" type="button">
                                 <a style="color:white" href="{{ route('jabatan.edit',$jabatan->id_jabatan)}}"> Edit
                                 </button></a> 
                                <br>
                                <!--delete -->
                                <form action="{{ route('jabatan.destroy', $jabatan->id_jabatan)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                <a onclick="return confirm('Are you sure?')"><button class="btn btn-icon btn-sm btn-danger" type="submit">
                                Delete
                                </button></a>
                    </td>
                </tr>
                @endforeach
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  
    <!-- /.content -->
@endsection