<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Disklankan</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li><a class="nav-link" href="{{url('dashboard')}}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>  
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown" href="#"><i class="far fa-user"></i> <span>User</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('user')}}">Admin TPI</a></li>
                  <li><a class="nav-link" href="{{url('koperasi')}}">Admin Koperasi</a></li>
                </ul>
              </li>
              <li><a class="nav-link" href="{{url('tpi')}}"><i class="fas fa-fire"></i> <span>Koperasi</span></a></li>
              <li><a class="nav-link" href="{{url('dataikan')}}"><i class="fas fa-columns"></i> <span>Data Ikan</span></a></li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-anchor"></i> <span>Nelayan</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('nelayan')}}">Data Nelayan</a></li>
                  <li><a class="nav-link" href="{{url('monitoringnelayan')}}">Monitoring Nelayan</a></li>
                  <li><a class="nav-link" href="{{url('alattangkap')}}">Alat Tangkap</a></li>
                  <li><a class="nav-link" href="{{url('bbm')}}">BBM</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book"></i> <span>Rekapitulasi</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('semua')}}">Semua</a></li>
                  <li><a class="nav-link" href="{{url('detailproduksi')}}">Koperasi</a></li>
                  {{-- <li><a class="nav-link" href="{{url('daftarproduksi')}}">Daftar Produksi</a></li>
                  <li><a class="nav-link" href="{{url('detailproduksi')}}">Detail Produksi</a></li>
                  <li><a class="nav-link" href="{{url('pendapatanikan')}}">Pendapatan Ikan</a></li>
                  <li><a class="nav-link" href="{{url('setoranretribusi')}}">Setoran Retribusi</a></li> --}}
                </ul>
              </li>
            </ul>
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split logout">
                <i class=" "> </i> Logout
              </a>
            </div>
        </aside>
      </div>
      <form method="POST" action="{{ route('logout') }}" id="formLogout">
        @csrf
    </form>