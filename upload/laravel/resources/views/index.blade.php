<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <style>
        body {
            font-family: "Nunito", sans-serif;
        }

        .logo-slide {
            width: 80px
        }

        .item {
            width: 90px;
            height: 90px;
            display: flex;
            justify-content: center;
            align-items: center;
            user-select: none;
        }

        .radio {
            display: none;
        }

        .radio~span {
            font-size: 3rem;
            filter: grayscale(100);
            cursor: pointer;
            transition: 0.3s;
        }

        .radio:checked~span {
            filter: grayscale(0);
            font-size: 4rem;
        }

    </style>
    <title>{{ setting('site.title') }}</title>
</head>

<body
    style="background: url(https://1.bp.blogspot.com/-Vn983IRFeqU/YJN7R7rHMgI/AAAAAAAAIac/X4wvE8IEWuYGwAFDW7SoXiNYw797RfVOwCLcBGAsYHQ/s1920/loreng-TNI-AD-2.jpg) center center fixed;">

    <div class="container ">
        <div class="p-2" style="background-color: #198754">
        </div>
        <header class="" style="background-color: orange">
            <div class="d-flex flex-column flex-md-row ">

                <div class="row gx-20">
                    <div class="col-2">
                        {{-- <a href="/" class="d-flex align-items-center text-white text-decoration-none">
                            <img src="{{ setting('site.logo') }}" alt="" style="width:50px">
                        </a> --}}
                    </div>
                    <div class="col-10" style="padding-left: 20px">
                        {{-- <div class="col text-white">
                            {{ setting('site.description') }}
                        </div>
                        <div class="col text-white">
                            {{ setting('site.subdescription') }}
                        </div> --}}
                    </div>
                </div>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto align-items-end" style="height: 70px">
                    <a class="me-3 py-2 text-white text-decoration-none" href="#">Home</a>
                    <a class="me-3 py-2 text-white text-decoration-none" href="#">Tentang Pengadilan</a>
                    <a class="me-3 py-2 text-white text-decoration-none" href="#">Layanan Publik</a>
                    <a class="me-3 py-2 text-white text-decoration-none" href="#">Layanan Hukum</a>
                    <a class="me-3 py-2 text-white text-decoration-none" href="#">Transparansi</a>
                </nav>
            </div>

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators align-items-end">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background: #198754">

                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#198754" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Another example headline.</h1>
                                <p>Some representative placeholder content for the second slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#198754" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Some representative placeholder content for the second slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#198754" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>One more for good measure.</h1>
                                <p>Some representative placeholder content for the third slide of this carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </header>
        <div class="p-2" style="background-color: orange">
        </div>
        <div style="background: #a6a6a6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="height:80px">
                <div class="carousel-inner">
                    @php
                        $count = count($logo_sliders);
                        $total = ceil($count / 4);
                        $end = 0;
                    @endphp
                    @for ($i = 0; $i < $total; $i++)
                        @php
                            $start = $i * 4;
                            $end = 4 + $end;
                            if ($end >= $count) {
                                $end = $count;
                            }
                        @endphp
                        <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                            <div class="row align-items-center">
                                @for ($j = $start; $j < $end; $j++)

                                    <div class="col-3 d-flex justify-content-center">
                                        <a href="{{ $logo_sliders[$j]->link }}" target="_blank"
                                            rel="noopener noreferrer"><img class="logo-slide"
                                                src="{{ url($logo_sliders[$j]->img) }}" alt=""></a>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @endfor
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <main style="background: white">
            <div class="d-flex flex-column flex-md-row align-items-center p-2 border-bottom mb-2">
                <div>
                    Jadwal Sidang, {{ date('F j, Y') }}
                </div>
                <div class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    Pembaharuan Data : {{ NOW() }} , Total : 0 Perkara
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Tanggal Sidang"
                            aria-label="Recipient's username with two button addons">
                        <button class="btn btn-outline btn-success text-white" type="button">Cari</button>
                        <button class="btn btn-outline btn-success text-white" type="button">Sidang Hari Ini</button>
                    </div>

                </div>
            </div>
            <table class="table table-success table-striped">
                <thead>
                    <tr style="background-color: green !important;">
                        <td>
                            No
                        </td>
                        <td>
                            Tanggal Register
                        </td>
                        <td>
                            Klarifikasi Perkara
                        </td>
                        <td>
                            Para Pihak
                        </td>
                        <td>
                            Status Perkara
                        </td>
                        <td>
                            Lama Proses
                        </td>
                        <td>
                            Link
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="7" class="align-center">
                            No Data
                        </td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" style="color:green" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" style="color:green" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" style="color:green" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" style="color:green" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" style="color:green" href="#">Next</a></li>
                </ul>
            </nav>
            <div class="row">
                <div class="col-4">
                    <div class="card  ">
                        <div class="card-header bg-success text-white">Berita Terbaru</div>
                        <div class="card-body">

                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-4 center">
                                        <img src="https://home.dilmil-pontianak.go.id/wp-content/uploads/2020/11/WhatsApp-Image-2020-11-11-at-08.52.57-1024x768.jpeg"
                                            class="rounded img-fluid pt-3 pr-2" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Judul</h5>
                                            <p class="card-text">This is a wider card with supporting text below
                                                as
                                                ...</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3
                                                    mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-4 center">
                                        <img src="https://home.dilmil-pontianak.go.id/wp-content/uploads/2020/11/WhatsApp-Image-2020-11-11-at-08.52.57-1024x768.jpeg"
                                            class="rounded img-fluid pt-3 pr-2" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Judul</h5>
                                            <p class="card-text">This is a wider card with supporting text below
                                                as
                                                ...</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3
                                                    mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-4 center">
                                        <img src="https://home.dilmil-pontianak.go.id/wp-content/uploads/2020/11/WhatsApp-Image-2020-11-11-at-08.52.57-1024x768.jpeg"
                                            class="rounded img-fluid pt-3 pr-2" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Judul</h5>
                                            <p class="card-text">This is a wider card with supporting text below
                                                as
                                                ...</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3
                                                    mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="row g-0">
                                    <div class="col-md-4 center">
                                        <img src="https://home.dilmil-pontianak.go.id/wp-content/uploads/2020/11/WhatsApp-Image-2020-11-11-at-08.52.57-1024x768.jpeg"
                                            class="rounded img-fluid pt-3 pr-2" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Judul</h5>
                                            <p class="card-text">This is a wider card with supporting text below
                                                as
                                                ...</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3
                                                    mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-success"> View More</a>
                    </div>

                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-4">
                            <div class="app">
                                <p>Let us know how we did</p>
                                <div class="container" style="display: flex;
                                flex-wrap: wrap;
                                justify-content: center;
                                align-items: center;">
                                    <div class="item">
                                        <label for="1">
                                            <input class="radio" type="radio" name="feedback" id="1"
                                                value="1">
                                            <span>🙁</span>
                                        </label>
                                    </div>

                                    <div class="item">
                                        <label for="2">
                                            <input class="radio" type="radio" name="feedback" id="3"
                                                value="3">
                                            <span>😁</span>
                                        </label>
                                    </div>

                                    <div class="item">
                                        <label for="3">
                                            <input class="radio" type="radio" name="feedback" id="4"
                                                value="4">
                                            <span>😍</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Pareto.PNG/384px-Pareto.PNG"
                                    alt="" style="width: 100%">
                            </div>

                        </div>
                        <div class="col-4">
                            <div>
                                <img src="https://www.howtogeek.com/wp-content/uploads/2021/10/GoogleSheetsPieChart.png?width=1198&trim=1,1&bg-color=000&pad=1,1"
                                    alt="" style="width: 100%">
                            </div>

                        </div>
                    </div>
                    <div class="bg-dark">
                        <h2 class="text-center text-white pb-2">
                            Zona Integritas
                        </h2>
                        <div class="row align-items-center pb-3">
                            <div class="col-4" align="center">
                                <img src="http://pengadilan.test/image/integritas-1.jpeg" class="img-fluid" alt=""
                                    style="max-width:200px">
                            </div>
                            <div class="col-4" align="center">

                                <img src="http://pengadilan.test/image/integritas-2.jpeg" class="img-fluid" alt=""
                                    style="max-width:200px">
                            </div>
                            <div class="col-4" align="center">

                                <img src="http://pengadilan.test/image/integritas-3.jpeg" class="img-fluid" alt=""
                                    style="max-width:200px">
                            </div>
                        </div>
                        <div class="row align-items-center pb-3">
                            <div class="col-4" align="center">

                                <img src="http://pengadilan.test/image/integritas-4.jpeg" class="img-fluid" alt=""
                                    style="max-width:200px">
                            </div>
                            <div class="col-4" align="center">

                                <img src="http://pengadilan.test/image/integritas-5.jpeg" class="img-fluid" alt=""
                                    style="max-width:200px">
                            </div>
                            <div class="col-4" align="center">

                                <img src="http://pengadilan.test/image/integritas-6.jpeg" class="img-fluid" alt=""
                                    style="max-width:200px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-3">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner p-3">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9e/Placeholder_Person.jpg"
                                width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <iframe width="100%" height="441" src="https://www.youtube.com/embed/iBrSAyLTW0o"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            Penngumuman
                        </div>

                        <div class="card-body">
                            <h5 class="card-title"><a href="#" class="text-decoration-none link-success">Lorem
                                    ipsum dolor sit amet ..</a></h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                    ago</small></p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#" class="text-decoration-none link-success">Lorem
                                    ipsum dolor sit amet ..</a></h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                    ago</small></p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#" class="text-decoration-none link-success">Lorem
                                    ipsum dolor sit amet ..</a></h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                    ago</small></p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#" class="text-decoration-none link-success">Lorem
                                    ipsum dolor sit amet ..</a></h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                    ago</small></p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#" class="text-decoration-none link-success">Lorem
                                    ipsum dolor sit amet ..</a></h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                    ago</small></p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col align-items-center text-center p-2">
                    <img src="https://www.mahkamahagung.go.id/cms/media/191" alt="" style="width: 50px"><br><a href="#"
                        class="text-decoration-none link-success">Mahkamah Agung RI<br>
                        Silahkan Klik Tautan Diatas Agar Dapat Terhubung Ke Situs Mahkamah Agung RI</a>
                </div>
                <div class="col align-items-center text-center p-2">
                    <img src="http://www.dilmil-jakarta.go.id/wp-content/uploads/2015/05/ma_77x100.png" alt=""
                        style="width: 50px"><br><a href="#" class="text-decoration-none link-success">Ditjen
                        Badilmiltun MA-RI<br>
                        Direktorat Jenderal Badan Peradilan Militer dan Tata Usaha Negara.</a>
                </div>
                <div class="col align-items-center text-center p-2">
                    <img src="http://www.dilmil-jakarta.go.id/wp-content/uploads/2015/05/ma_77x100.png" alt=""
                        style="width: 50px"><br><a href="#" class="text-decoration-none link-success">Dilmiltama<br>
                        Pengadilan Militer Utama</a>
                </div>
                <div class="col align-items-center text-center p-2">
                    <img src="http://www.dilmil-jakarta.go.id/wp-content/uploads/2015/05/ma_77x100.png" alt=""
                        style="width: 50px"><br><a href="#" class="text-decoration-none link-success">Dilmilti II
                        Jakarta<br>
                        Pengadilan Militer Tinggi II Jakarta</a>
                </div>
                <div class="col align-items-center text-center p-2">
                    <img src="http://www.dilmil-jakarta.go.id/wp-content/uploads/2015/05/ma_77x100.png" alt=""
                        style="width: 50px"><br><a href="#" class="text-decoration-none link-success">Jaringan
                        Dokumentasi dan Informasi Hukum (JDIH) MA-RI</a>
                </div>
            </div>
        </main>
    </div>
    <div class="container">
        <footer class="" style="background: #198754;height:50px">
            <div class="row mx-auto">
                <div class="text-light  p-3">
                    Copyright © 2022 Ver. 2.0 Dilmil II-08 Jakarta
                </div>
            </div>
        </footer>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $('#carouselExample').carousel({
            interval: 4000,
            wrap: true,
            keyboard: true
        });

        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45],
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {}
        };
    </script>
    <script>
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
        const myChart2 = new Chart(
            document.getElementById('myChart-2'),
            config
        );
    </script>
    <script>
        $('.choice').on('click', function() {
            var $this = $(this);

            $('.reaction').removeClass('reaction-fade-in');
            $('.emoji').removeClass('emoji-selected');
            $this.find('.reaction').addClass('reaction-fade-in');
            $this.find('.emoji').addClass('emoji-selected');

        });


        $('#question-1 .choice').on('click', function() {
            var ranking1 = $(this).attr('data-value');

            $('.answer-submit').on('click', function() {
                sessionStorage.setItem('ranking1', ranking1);
                $('#question-2').removeClass('hide');
                $('#question-1').addClass('hide');
            });
        });


        $('#question-2 .choice').on('click', function() {
            var ranking2 = $(this).attr('data-value');

            $('.answer-submit').on('click', function() {
                sessionStorage.setItem('ranking2', ranking2);
                $('#question-3').removeClass('hide');
                $('#question-2').addClass('hide');
            });
        });



        $('#question-3 .choice').on('click', function() {
            var ranking3 = $(this).attr('data-value');

            $('.answer-submit').on('click', function() {
                sessionStorage.setItem('ranking3', ranking3);
                $('#question-3').addClass('hide');
                $('.summary').removeClass('hide');

                var total;

                function calculateTotal() {

                    var ranking1 = sessionStorage.getItem('ranking1');
                    var ranking2 = sessionStorage.getItem('ranking2');
                    var ranking3 = sessionStorage.getItem('ranking3');
                    var total = parseInt(ranking1) + parseInt(ranking2) + parseInt(ranking3);

                    if (total >= 14) {
                        $('#amazing').removeClass('hide');
                    } else if ((total < 14) && (total > 10)) {
                        $('#good').removeClass('hide');
                    } else if ((total < 11) && (total > 7)) {
                        $('#okay').removeClass('hide');
                    } else if ((total < 8) && (total > 4)) {
                        $('#disappointing').removeClass('hide');
                    } else {
                        $('#terrible').removeClass('hide');
                    }
                }

                // if (total > 13) {
                //   $('#amazing').removeClass('hide');
                // }

                calculateTotal();




            });
        });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
