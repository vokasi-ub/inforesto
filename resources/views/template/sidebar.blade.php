<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('tema/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>NIKE ERAWATY</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">INFORMATION</li>
        
        <li>
          <a href="menu">
            <i class="fa fa-table"></i> <span>Daftar Menu</span> 
          </a>
        </li>
        <li>
          <a href="karyawan">
            <i class="fa fa-table"></i> <span>Data Karyawan</span> 
          </a>
        </li>
        <li>
          <a href="jabatan">
            <i class="fa fa-table"></i> <span>Data Jabatan</span> 
          </a>
        </li>

        <i class="fa fa-table"></i> 
            <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="mdi-hardware-keyboard-tab fa fa-table"></i>{{ __('Logout') }}
            </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        
      </ul>
    </section>
    <!-- /.sidebar -->