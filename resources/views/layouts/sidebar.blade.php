<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Disklankan</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li><a class="nav-link" href="{{url('dashboard')}}"><i class="fas fa-home"></i> <span>Home</span></a></li>  
              <li><a class="active" href="{{url('user')}}"><i class="far fa-user"></i> <span>User</span></a></li>
                {{-- <ul class="dropdown-menu">
                  <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                  <li><a href="auth-login.html">Login</a></li>
                  <li><a class="beep beep-sidebar" href="auth-login-2.html">Login 2</a></li>
                  <li><a href="auth-register.html">Register</a></li>
                  <li><a href="auth-reset-password.html">Reset Password</a></li>
                </ul> --}}
              <li><a class="nav-link" href="{{url('tpi')}}"><i class="fas fa-fire"></i> <span>TPI</span></a></li>
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
              <li><a class="nav-link" href="blank.html"><i class="fas fa-book"></i> <span>Rekapitulasi</span></a></li>
            </ul>
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class=" "></i> Logout
              </a>
            </div>
        </aside>
      </div>