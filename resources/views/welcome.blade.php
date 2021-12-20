<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Plasmo</title>
  </head>
  <body>
    <main>
        <section class="hero">
            <article class="hero pt-5 pb-5 container">
                <div class="content mb-5 pt-5 mt-5 pb-5 d-flex">
                    <div class="tentang-image mr-5  mb-5 mt-5">
                        <img src="{{asset('/images/tentang-kami.png')}}" width="80%" alt="gambar hero">
                    </div>
                    <div class="hero-content align-self-center ml-5  pb-5 pt-5" style="width: 70%;">
                        <h1>Selamat Datang di Plasmo</h1>
                        <p>Plasmo adalah sebuah platform yang dikhususkan untuk membantu para pasien terdampak Covid-19 yang membutuhkan Plasma Darah. Platform ini dibuat sebagai bentuk partisipasi kami dalam membantu melawan Covid-19. Kegunaan dari platform kami diantaranya dapat menemukan pendonor plasma darah untuk pasien terdampak covid-19 dan akan bermanfaat bagi pasien yang kesulitan untuk menemukan pendonor.</p>
                        <div class="action mt-5">
                            @if (auth()->user()->role_id == 1)
                                <a href="/dashboard-admin"><button type="button" class="primary-btn mr-3"><i class="fa fa-dashboard mr-3" style="font-size:20px;color:white;"></i>Dashboard</button></a>
                                <a href="/user"><button type="button" class="primary-btn mr-3"><i class='fa fa-user mr-3' style='font-size:20px;color:white;'></i>Users</button></a>
                                <a href="/rumah-sakit"><button type="button" class="primary-btn"><i class='	fa fa-h-square mr-3' style='font-size:20px;color:white;'></i>Rumah Sakit</button></a>
                            @endif

                            @if (auth()->user()->role_id == 2)        
                                <a href="/dashboard"><button type="button" class="primary-btn mr-3"><i class="fa fa-dashboard mr-3" style="font-size:20px;color:white;"></i>Dashboard</button></a>
                                <a href="/stok-plasma-donor"><button type="button" class="primary-btn"><i class="fa fa-pie-chart mr-3" style="font-size:20px;color:white;"></i>Stok Plasma</button></a>
                            @endif

                            @if (auth()->user()->role_id == 3)
                                <a href="/dashboard-pendonor"><button type="button" class="primary-btn mr-3"><i class="fa fa-dashboard mr-3" style="font-size:20px;color:white;"></i>Dashboard</button></a>
                                <a href="/stok-plasma-pendonor"><button type="button" class="primary-btn"><i class="fa fa-pie-chart mr-3" style="font-size:20px;color:white;"></i>Stok Plasma</button></a>
                            @endif
                        </div>
                    </div>                    
                </div>
                
            </article>            
        </section>   
    </main>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>