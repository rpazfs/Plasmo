<footer class="container">
        <div class="footer d-flex pt-5">
            <div class="footer-logo" style="width: 100%;" >
                <img src="{{asset('/images/footer-logo.png')}}" alt="logo plasmo">
                <p>Kita hadapi bersama Covid-19</p>
            </div>
            <div class="footer-nav" style="width: 100%;">
                <h4>Navigasi</h4>
                <ul class="nav-bar">
                @if (auth()->user()->role_id == 1)
                    <li><a href="/dashboard-admin">Dashboard</a></li>
                    <li><a href="/user">User</a></li>
                    <li><a href="/rumah-sakit">Rumah Sakit</a></li>
                @endif

                @if (auth()->user()->role_id == 2)
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/stok-plasma-donor">Stok Plasma</a></li>
                    <li><a href="/berita-donor">Berita & Informasi</a></li>
                    <li><a href="/faq-donor">FAQ</a></li>
                @endif

                @if (auth()->user()->role_id == 3)
                    <li><a href="/dashboard-pendonor">Dashboard</a></li>
                    <li><a href="/stok-plasma-pendonor">Stok Plasma</a></li>
                    <li><a href="/berita-donor">Berita & Informasi</a></li>
                    <li><a href="/faq-donor">FAQ</a></li>
                @endif

                    
                </ul>
            </div>
            <div class="alamat" style="width: 100%;">
                <h4>Alamat</h4>
                <p>
                    Jln. Raya Lembang, No 12.
                    Kabupaten Bandung Barat, Kecamatan Lembang.
                    Provinsi Jawa Barat, Indonesia. 40391.
                </p>
            </div>
        </div>
        <p class="text-center mt-5">Copyrights © 2021 by <span style="color: #122D74; font-weight: bold;">Plasmo</span></p>
    </footer>