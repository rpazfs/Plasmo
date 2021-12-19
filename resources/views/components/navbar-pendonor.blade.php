<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between">
            <a class="navbar-brand" href="#"><img src="{{asset('/images/logo.png')}}" alt="logo Plasmo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    
              <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0">
                <li class="nav-item {{Request::is('dashboard-pendonor') ? 'active':''}}">
                  <a class="nav-link" href="/dashboard-pendonor">Dashboard</a>
                </li>
                <li class="nav-item {{Request::is('stok-plasma-pendonor') ? 'active':''}}">
                  <a class="nav-link" href="/stok-plasma-pendonor">Stok Plasma</a>
                </li>
                <li class="nav-item {{Request::is('berita-pendonor') ? 'active':''}}">
                    <a class="nav-link" href="/berita-pendonor">Berita & Informasi</a>
                </li>
                <li class="nav-item {{Request::is('faq-pendonor') ? 'active':''}}">
                  <a class="nav-link" href="/faq-pendonor">FAQ</a>
                </li>
              </ul>
              <div class="form-inline my-2 my-lg-0">                
                <div class="user-image mr-2">
                    <a href="/dashboard"><img src="{{asset('/images/user.png')}}" alt="gambar user"></a>                    
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" style="color: #122D74; background-color: white; border: 0;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="/dashboard-pendonor"><button class="dropdown-item" type="button">Dashboard</button>  </a>                    
                        <a href="/user-profile-pendonor"><button class="dropdown-item" type="button">Pengaturan Akun</button></a>
                        <a href="#"><button class="dropdown-item" type="button">Notifikasi</button></a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();this.closest('form').submit();">
                                Keluar
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </nav>