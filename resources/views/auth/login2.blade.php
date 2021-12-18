<x-guest-layout>
    <header class="container">
        <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between">
            <a class="navbar-brand" href="#"><img src="{{asset('/images/logo.png')}}" alt="logo Plasmo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/tentang-kami">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/stok-plasma">Stok Plasma</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/kontak">Kontak</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <a href="{{ route('login') }}"><button type="button" class="outline-primary-btn mr-3">Masuk</button></a>
                <a href="/daftar"><button type="button" class="primary-btn">Daftar</button></a>
            </form>
            </div>
        </nav>
    </header>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
    <main>
        <section class="hero">
            <article class="hero pt-5 pb-5 d-flex container">
                <div class="form" style="width: 50%;">
                    <h1>Masuk</h1>
                    <p>Cari stok plasma dan pendonor sesuai kebutuhanmu</p>
                    <button class="btn-sign mb-3" style="width: 100%;"><i class="fa fa-google mr-3"></i> Masuk Dengan Google</button>
                    <p style="text-align: center !important;">atau masuk dengan</p>
                    <form style="width: 100%;" method="POST" action="{{ route('login') }}"> 
                    @csrf
                        <div class="form-group">
                            <x-jet-label value="{{ __('Email') }}" />
                            <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
                        <div class="form-group">
                            <x-jet-label value="{{ __('Password') }}" />
                            <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />    
                        </div>
                        <div class="form-group justify-content-between d-flex mb-5">
                            <input class="form-check-input" type="checkbox" style="margin-left: 0; margin-top: 6px;" value="" id="remember">
                            <label class="form-check-label" style="margin-left: 20px;" for="remember">
                            {{ __('Remember me') }}
                            </label>
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                        <x-jet-button class="ml-4">
                            {{ __('Login') }}
                        </x-jet-button>
                        <p>Belum punya akun ? <a href="/daftar" style="color: #122D74 !important; font-weight: bold;">Daftar disini</a></p>
                    </form>
                </div>
                <div class="masuk-image">
                    <img src="{{asset('/images/masuk.png')}}" width="100%" alt="gambar">
                </div>
            </article>
        </section>
    </main>

    <footer class="container">
        <p class="text-center mt-3">Copyrights © 2021 by <span style="color: #122D74; font-weight: bold;">Plasmo</span></p>
    </footer>
</x-guest-layout>