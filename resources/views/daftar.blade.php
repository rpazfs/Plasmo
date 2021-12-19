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
    <header class="container">
        @include('components.navbar-home')
    </header>

    <main>
        <section class="hero">
            <article class="hero pt-5 pb-5 d-flex container">
                <a style="width: 50%;" href="/daftar-pendonor">
                    <div class="pendonor d-flex flex-column mx-auto" >
                        <div class="icon-pendonor align-self-center">
                            <img src="{{asset('/images/icon-pendonor.png')}}" alt="icon pendonor">
                        </div>
                        <div class="pendonor-content text-center mt-5">
                            <h3>Daftar Sebagai Pendonor</h3>
                            <p>Dengan menjadi pendonor, anda dapat membantu sesama dan meringankan beban para pasien yang terdampak covid-19. Daftar dan bantu sesama.</p>                        
                        </div>
                    </div>
                </a>                
                <a style="width: 50%" href="/daftar-donor">
                    <div class="donor d-flex flex-column mx-auto">
                        <div class="icon-donor align-self-center">
                            <img src="{{asset('/images/icon-donor.png')}}" alt="icon donor">
                        </div>
                        <div class="donor-content text-center mt-5">
                            <h3>Daftar Sebagai Pencari Donor</h3>
                            <p>Anda dapat mengajukan permohonan donor plasma darah sehingga dapat membantu pemulihan anda menggunakan plasma darah.</p>                        
                        </div>
                    </div>
                </a>                
            </article>
        </section>
    </main>

    @include('components.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>