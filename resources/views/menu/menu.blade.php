@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Menu</h1>
<br>
     <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Fom Search</h3>
            </div>
            <form action="{{ url()->current() }}" >

            <div class="box-body">
              <div class="row">
                <div class="col-xs-5">
                  <div class="input-group">
              
                <!-- /btn-group -->
                
                <input type="text" class="form-control" name="keyword" placeholder="Search Data Hidangan..">
                  <div class="input-group-btn">
                  <button type="submit" class="btn btn-danger">Cari</button>
                </div>
              </div>
                </div>
              </div>
            </div>
          </form>
            <!-- /.box-body -->
          </div>
    

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Menu</h3>
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
                <h4 class="modal-title">Masukkan Menu Makanan</h4>
              </div>
              <form class="form-horizontal" action="/inputdatamenu/store" method="post">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hidangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Hidangan" name="kategori">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Deskripsi" name="deskripsi">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
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
                <th>Hidangan</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
                </tr>

                @foreach($menu as $menu)
                <tr>
                <td>{{$menu->kategori}}</td>
                <td>{{$menu->deskripsi}}</td>
                    <td>
                      <a href="/menuedit/edit/{{ $menu->id }}">Edit</a> | 
                        <a href="/delete/menu/{{ $menu->id }}">Hapus</a>
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