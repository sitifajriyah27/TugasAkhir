<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Koperasi</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li><a class="nav-link" href="{{url('koperasi/dashboard')}}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
              <li><a class="nav-link" href="{{url('/pegawai')}}"><i class="fas fa-user"></i> <span>Data Pegawai</span></a></li>
              <li><a class="nav-link" href="{{url('/dataikankoperasi')}}"><i class="fas fa-columns"></i> <span>Data Ikan</span></a></li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-anchor"></i> <span>Nelayan</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('nelayankoperasi')}}">Data Nelayan</a></li>
                  <li><a class="nav-link" href="{{url('monitoringnelayankoperasi')}}">Monitoring Nelayan</a></li>
                  <li><a class="nav-link" href="{{url('alattangkapkoperasi')}}">Alat Tangkap</a></li>
                  <li><a class="nav-link" href="{{url('bbmkoperasi')}}">BBM</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book"></i> <span>Rekapitulasi</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('daftarproduksi')}}">Daftar Produksi</a></li>
                  <li><a class="nav-link" href="{{url('detailproduksi')}}">Detail Produksi</a></li>
                  <li><a class="nav-link" href="{{url('pendapatanikan')}}">Pendapatan Ikan</a></li>
                  <li><a class="nav-link" href="{{url('setoranretribusi')}}">Setoran Retribusi</a></li>
                </ul>
              </li>
            </ul>
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split logout">
                <i class=" "></i> Logout
              </a>
            </div>
        </aside>
      </div>
      <form method="POST" action="{{ route('logout') }}" id="formLogout">
        @csrf
    </form>