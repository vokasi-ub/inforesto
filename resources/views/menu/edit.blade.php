@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Daftar Menu</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Daftar Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($menu as $p)
            <form class="form-horizontal" action="/datamenu/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hidangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kategori" value="{{ $p->kategori }}" placeholder="Hidangan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="deskripsi" value="{{ $p->deskripsi }}" placeholder="Deskripsi">
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