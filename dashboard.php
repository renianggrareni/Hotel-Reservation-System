<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WBooking</title>
    <?php require('images/inc/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="stylesheet" href="./style-footer.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>



</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#" class="navbar-brand ml-3">WBOOKING</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

    </header>

    <main>
        
            <div class="container-fluid p-0">
                <div class="site-content">
                    <div class="d-flex justify-content-center">
                        <div class="d-flex flex-column text-center">
                            <marquee behavior="" direction=""><p class="site-desc">Selamat Datang di WBOOKING</p></marquee>
                        </div>
                    </div>
                </div>
            </div> 
       

        <div class="section-1"> 
            <div class="container text-center">
                <h1 class="heading-1">Layanan Hotel & Penerbangan</h1>
                <p class="para-1">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <div class="row justify-content-center text-center">
                    <div class="col-md-4" id="pesan">
                        <div class="card">
                            <img src="./images/hotel (1).png" alt="image" class="card-image-top" />
                            <div class="card-body">
                                <h4 class="card-title">Hotel</h4>
                                <p class="card-text"></p>
                                <a href="index.php" class="btn btn-primary">Pesan Sekarang >></a>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./images/pecawat.png" alt="image" class="card-image-top" />
                            <div class="card-body">
                                <h4 class="card-title">Pesawat</h4>
                                <p class="card-text"></p>
                                <a href="" class="btn btn-primary">Pesan Sekarang >></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <script>
         window.sr = ScrollReveal({ duration : 1000 });

        sr.reveal('.site-content .d-flex');
        sr.reveal('.section-1 .card');
        sr.reveal('.section-2 .d-flex');
        sr.reveal('.section-3 .col-md-4');
        sr.reveal('.section-4 .col-md-7');
    </script>

</body>
</html>