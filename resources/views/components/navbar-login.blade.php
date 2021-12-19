<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between">
            <a class="navbar-brand" href="#"><img src="{{asset('/images/logo.png')}}" alt="logo Plasmo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0">

                    @if (auth()->user()->role_id == 1)
                      <li class="nav-item {{Request::is('user') ? 'active':''}}">
                        <a class="nav-link" href="/user">Users <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item {{Request::is('rumah-sakit') ? 'active':''}}">
                        <a class="nav-link" href="/rumah-sakit">Rumah Sakit <span class="sr-only">(current)</span></a>
                      </li>
                    @endif


                    @if (auth()->user()->role_id == 2)
                      <li class="nav-item {{Request::is('dashboard') ? 'active':''}}">
                        <a class="nav-link" href="/dashboard">Dashboard <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item {{Request::is('stok-plasma-donor') ? 'active':''}}">
                        <a class="nav-link" href="/stok-plasma-donor">Stok Plasma</a>
                      </li>
                      <li class="nav-item {{Request::is('berita') ? 'active':''}}">
                          <a class="nav-link" href="/berita">Berita & Informasi</a>
                      </li>
                      <li class="nav-item {{Request::is('faq') ? 'active':''}}">
                        <a class="nav-link" href="/faq">FAQ</a>
                      </li>
                    @endif

                    @if (auth()->user()->role_id == 3)
                      <li class="nav-item {{Request::is('dashboard-pendonor') ? 'active':''}}">
                        <a class="nav-link" href="/dashboard-pendonor">Dashboard <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item {{Request::is('stok-plasma-pendonor') ? 'active':''}}">
                        <a class="nav-link" href="/stok-plasma-pendonor">Stok Plasma</a>
                      </li>
                      <li class="nav-item {{Request::is('berita') ? 'active':''}}">
                          <a class="nav-link" href="/berita">Berita & Informasi</a>
                      </li>
                      <li class="nav-item {{Request::is('faq') ? 'active':''}}">
                        <a class="nav-link" href="/faq">FAQ</a>
                      </li>
                    @endif

                
                
                
              </ul>
              <div class="form-inline my-2 my-lg-0">                
                <div class="user-image mr-2">
                    <a href="/dashboard"><img src="{{asset('/images/user.png')}}" alt="gambar user"></a>                    
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" style="color: #122D74; background-color: white; border: 0;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="/dashboard"><button class="dropdown-item" type="button">Dashboard</button>  </a>                    
                        <a href="/user-profile"><button class="dropdown-item" type="button">Pengaturan Akun</button></a>
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