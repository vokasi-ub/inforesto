@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Karyawan</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ route('karyawan.update',$karyawan->id_karyawan)}}" method="post">
               @method('PATCH')
               {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jabatan </label>

                    <div class="col-sm-10">
                        
                        <select class="form-control" name="id_jabatan">
                            @foreach($jabatan as $row){
                            <option value="{{$row->id_jabatan}}">{{$row->nama_jabatan}}</option>
                            }
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Karyawan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="{{ $karyawan->nama }}" placeholder="Karyawan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" value="{{ $karyawan->email }}" placeholder="jumlah">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" value="{{ $karyawan->alamat }}" placeholder="jumlah">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Gambar </label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputPassword3" placeholder="Gambar" name="image">
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