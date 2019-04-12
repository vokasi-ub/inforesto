@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Karyawan</h1>
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
                
                <input type="text" class="form-control" name="keywoard" placeholder="Search Data Karyawan..">
              </div>
                </div>
              </div>
            </div>
          </form>
            <!-- /.box-body -->
          </div>
    

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Karyawan</h3>
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
                <h4 class="modal-title">Masukkan Data Karyawan</h4>
              </div>
              <form class="form-horizontal" action="{{route('karyawan.store')}}" enctype="multipart/form-data" method="post">
              @csrf
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
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Nama" name="nama">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Email" name="email">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat" name="alamat">
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
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Jumlah</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Gambar</th>
                <th>Aksi</th>
                </tr>

                @foreach($karyawan as $karyawan)
                <tr>
                <td>{{$karyawan->nama}}</td>
                <td>{{$karyawan->get_jabatan->nama_jabatan}}</td>
                <td>{{$karyawan->get_jabatan->jumlah}}</td>
                <td>{{$karyawan->email}}</td>
                <td>{{$karyawan->alamat}}</td>
                <td><img src="images/{{$karyawan->image}}" alt="" width="250px" heigth="250px"></td>
                     <td>
                                <!--update -->
                                <button class="btn btn-icon btn-sm btn-info" type="button">
                                 <a style="color:white" href="{{ route('karyawan.edit',$karyawan->id_karyawan)}}"> Edit
                                 </button></a> 
                                <br>
                                <!--delete -->
                                <form action="{{ route('karyawan.destroy', $karyawan->id_karyawan)}}" method="post">
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