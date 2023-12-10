<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Andara Dental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-color: #FDF4F5;">
    <!-- header -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="">
        <div class="container-fluid justify-content-between" style="background-color: #5E8CF5">
            <div class="row">
                <a class="navbar-brand" href="home.php" style="padding: 10px 0 10px 0">
                    <img src="img/logo.png" alt="" width="100" height="50" class="d-inline-block align-text-top ms-4">
                </a>
            </div>
            <div class="row" style="margin-right: 130px">
                <p style="position: relative; left: 130px; top: 1px; font-weight: 500; color: #ffffff">Hello,Erga</p>

                <div class="dropdown" style="margin-right: -100px;" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" style="color: #ffffff; margin-right: -100px;" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                    </svg>
                    <ul>
                        <li><a style="padding-right: 113px; text-decoration: none; color: #163785" href="profile.php">Profile</a></li>
                        <li><a style="padding-right: 112px; text-decoration: none; color: #163785" href="index.php">Keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- End header -->

    <section id="register" class="register" style="margin: 150px 0 150px 0">
        <h1 class="text-center mb-5" style="color: #AAC4FF; font-weight: bold">Pendaftaran Pasien Baru</h1>
        <div class="d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="card" style="border-radius: 5px;">
                    <div class="card-body my-3">
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="" style="font-weight: bold; font-size: 25px">NIK</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" style="border: 3px solid #AAC4FF;" class="form-control" placeholder="Masukkan NIK, Kemudian Enter">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="" style="font-weight: bold; font-size: 25px">Nama Lengkap</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" style="border: 3px solid #AAC4FF;" class="form-control" placeholder="Masukkan nama lengkap anda">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="" style="font-weight: bold; font-size: 25px">No Telepon</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" style="border: 3px solid #AAC4FF;" class="form-control" placeholder="Masukkan no telepon anda">
                            </div>
                        </div>


                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="" style="font-weight: bold; font-size: 25px">Tanggal Lahir</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="date" style="border: 3px solid #AAC4FF;" class="form-control" placeholder="Pick date & time" id="time" />
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="" style="font-weight: bold; font-size: 25px">Alamat</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" style="border: 3px solid #AAC4FF;" class="form-control" placeholder="Masukkan alamat anda">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="" style="font-weight: bold; font-size: 25px">Jenis kelamin</label>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-select" style="border: 3px solid #AAC4FF;" aria-label="Default select example">
                                    <option disabled="disabled" selected="selected">Pilih jenis kelamin anda</option>
                                    <option value="1">Pria</option>
                                    <option value="2">Wanita</option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="hayo text-end mt-5">
                    <a class="btn btn-light btn-lg text-white" style="background-color: #B1B2FF; padding: 7px 15px 7px 15px" href="home.php">CONFIRM</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="footer" style="background-color: #5E8CF5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 footer-info text-align-center">
                    <a href="" class="logo d-flex align-items-center" style="text-decoration:none  ">
                        <span>FRESH DENTAL
                            INDONESIA </span>
                    </a>
                    <p style="font-size: 25px">Jl. Kalidami No. 41 Surabaya</p>
                </div>
                <div class="col-lg-4 col-12 footer-links text-align-center">
                    <h4>Hubungi Kami</h4>
                    <ul style="font-size: 20px; ">
                        <li><a style="text-decoration: none" href="#">freshdental@gmail.com</a></li>
                        <li><a style="text-decoration: none" href="#">@freshdent</a></li>
                        <li><a style="text-decoration: none" href="#">021-555-786-234</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-12 footer-links text-align-center">
                    <h4>Download Aplikasi</h4>
                    <a href="">
                        <img src="img/gplay.png" style="margin-left: -20px" alt="">
                    </a>
                    <br>
                    <a href="">
                        <img src="img/astore.png" style="margin-left: -5px" alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
        $('#carouselExampleIndicators').on('slid.bs.carousel', function(e) {
            $('#carouselExampleIndicators').carousel(
                '2') // Will slide to the slide 2 as soon as the transition to slide 1 is finished
        })
        $('#carouselExampleIndicators').carousel('1') // Will start sliding to the slide 1 and returns to the caller
        $('#carouselExampleIndicators').carousel(
            '2') // !! Will be ignored, as the transition to the slide 1 is not finished !!
    </script>
</body>

</html>