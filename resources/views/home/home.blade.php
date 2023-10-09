<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <title>SIG Pulau Tikus</title>
    <!-- Favicons -->
    <link href="{{ asset('assets/icon/favicon.ico') }}" rel="icon">
    <link href="{{ asset('assets/icon/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://kit.fontawesome.com/f28fac3438.js" crossorigin="anonymous"></script>
    <style>
        #hero {
            background: url('https://ksmtour.com/media/images/articles7/pulau-tikus-bengkulu.jpg');
            width: 100%;
            background-size: cover;
            height: 100vh;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
        }


        #hero:before {
            content: "";
            background: rgba(255, 255, 255, 0);
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
        }

        #hero h1 {
            margin: 0;
            font-size: 64px;
            font-weight: 700;
            line-height: 56px;
            color: #ffffff;
        }

        #hero p {
            color: #ffffff;
            margin: 15px 0 0 0;
            font-size: 26px;
            font-family: "Poppins", sans-serif;
        }

        #hero p span {
            color: #ffffff;
            letter-spacing: 1px;
        }

        #hero .social-links {
            margin-top: 10px;
        }

        #hero .social-links a {
            font-size: 24px;
            display: inline-block;
            color: #ffffff;
            line-height: 1;
            margin-right: 10px;
            transition: 0.3s;
        }

        #hero .social-links a:hover {
            color: #000000;
        }

        #footer {
            background-color: rgb(2, 18, 34);
            color: white;
            margin: 0px;
            padding: 10px;
            /* Mengatur jarak antara teks dan batas footer */
            min-height: 70px;
            /* Mengatur tinggi minimal footer */

        }

        .hover-div .alalghzy {
            color: #0563bb;
            /* Warna teks asli */
        }

        .hover-div .fa-square-github {
            color: #ffffff;
            /* Warna ikon asli */
        }

        /* Gaya saat elemen div dihover */
        .hover-div:hover .alalghzy {
            color: #c88eff;
            /* Ganti dengan warna yang Anda inginkan saat dihover */
        }

        .hover-div:hover .fa-square-github {
            color: #ffee00;
            /* Ganti dengan warna yang Anda inginkan saat dihover */
        }
    </style>
</head>

<body>
    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">
        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                        <span>Beranda</span></a>
                </li>
                <li><a href="#about" class="nav-link scrollto"><i class="bi bi-signpost-split"></i>
                        <span>Tentang</span></a></li>
                <li><a href="#peta" class="nav-link scrollto"><i class="bi bi-map"></i> <span>Peta
                            Inventarisasi</span></a>
                </li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bi bi-journals"></i>
                        <span>Data Iventarisasi</span></a></li>
                <li><a href="#tentangkami" class="nav-link scrollto"><i class="bi bi-code-slash"></i> <span>Tentang Kami</span></a>
                </li>
                <li><a href="{{ route('admin.index') }}" class="nav-link scrollto"><i class="bi bi-person-gear"></i>
                        <span>Login Admin</span></a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <span style="color:aliceblue; margin-bottom: 30px;">Sistem Informasi Geografis & Inventarisasi</span>
            <h1>Pulau Tikus</h1>
            <p><span class="typed"
                    data-typed-items="Provinsi Bengkulu, Pulau Eksotis, Pulau Terumbu Karang, Pulau Wisata"></span></p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about" style="margin-bottom: 0">
            <div class="container" data-aos="fade-up" style="margin-top: 1%; margin-bottom: -5%">
                <div class="section-title">
                    <h2>Sekilas Pulau Tikus</h2>
                    <p style="text-align:justify; margin-top: 20px;">Pulau Tikus adalah pulau kecil yang tidak
                        berpenghuni dengan luas lebih kurang 6.000 m<sup>2</sup>. Pulau ini terletak di perairan Pantai
                        Bengkulu yang merupakan bagian dari wilayah pemerintah Kota Bengkulu. Pulau Tikus dikelilingi
                        gugusan terumbu karang seluas 250 hektare. Dengan potensi alam yang menawan, Pulau Tikus dapat
                        bersaing dengan keindahan pulau wisata lainnya. Pulau Tikus juga memiliki potensi wisata bahari.
                        Untuk berwisata dan menikmati alam di pulau ini, wisatawan dapat menempuh dengan menyewa perahu
                        dengan biaya yang terjangkau. Jarak pelayaran dari dalam menuju Pulau Tikus berkisar 30 menit.
                    </p>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Statistik Section ======= -->
        <section id="facts" class="facts">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Data Inventarisasi Pulau Tikus</h2>
                    <p></p>
                </div>
                <div class="row justify-content-center align-items-center" style="margin-top: -5%;">
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box"
                            style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                            <div class="tengah"
                                style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background-color: #0563bb;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" id="Coral"
                                    width="30" height="30">
                                    <path
                                        d="M40.67,32.43c-3,2.54-7.13,2.62-9.93,2.27a23.17,23.17,0,0,1,7-4.9C47.93,25.28,47,11,46.94,10.84c-.09-2.53-4.18-2.42-4,.3,0,.1.61,9.34-4.69,13.69a11.87,11.87,0,0,0-3.34-8,23.93,23.93,0,0,0,5-9.33,2,2,0,1,0-3.88-1,19.94,19.94,0,0,1-4.09,7.68c-3-3.65-1.05-10.6-1-10.68a2,2,0,0,0-3.83-1.14c-.14.46-3.34,11.45,3.8,16.22,3.74,2.49,3.58,6.72,3.33,8.48a27.9,27.9,0,0,0-8.06,6.72,28.43,28.43,0,0,0-1-5.38,16.65,16.65,0,0,0,2.76-6A2,2,0,1,0,24,21.61a13.8,13.8,0,0,1-.82,2.32c-1.89-3.12-3-3.19-5.5-6.06A17.55,17.55,0,0,0,22,6a2,2,0,0,0-2.34-2c-3.18.53-.06,4.89-4.37,10.51A17.31,17.31,0,0,1,13,8.75,2,2,0,0,0,10.74,7c-4.14.49.25,8.69,2.6,11.85,2.14,4.28,8.76,4.51,8.89,17.53a44.78,44.78,0,0,0-10.08-6.61A7.91,7.91,0,0,0,14,25a2,2,0,1,0-4,.08,4.73,4.73,0,0,1-1.37,2.72C3.82,23.74,5,16,5,11A2,2,0,0,0,2.34,9.1C.73,9.61,1,11.36,1,13,1,18.15.17,27.64,7.85,32.1c1.2.8,4.51,1.78,9.28,5.31,2.57,1.91,1.33,4.62.61,7A2,2,0,0,0,19.66,47h8.62a2,2,0,0,0,1.92-2.57l-1.36-4.51a1,1,0,0,1,1.1-1.28c4.65.64,9.5,0,13.17-3A2,2,0,1,0,40.67,32.43Z"
                                        data-name="30. Coral" fill="#fcfcfc" class="color000000 svgShape"></path>
                                </svg>
                            </div>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $postsCount }}"
                                data-purecounter-duration="2" class="purecounter"></span>
                            <p>Terumbu Karang</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box"
                            style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                            <div class="tengah"
                                style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background-color: #0563bb;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66 66" id="Turtle"
                                    width="30" height="30">
                                    <path
                                        d="M55.2 18.1c2.3-2.3 4.3-7.1 2.1-9.3-1-1-2.7-1.2-4.8-.6-1.7.5-3.4 1.5-4.5 2.6v.1c1.5.8 2.9 1.9 4.1 3.1 1.2 1.2 2.2 2.6 3.1 4.1zM20.4 6.9c3.5.1 9 .8 10.2 2.1v.1c3-.8 6-1 8.4-.8 0-1.5-.1-2.7-.4-3.4-.4-.9-1.7-2.5-2.7-3-3.8-1.8-11.8-.7-16.2 3.4-.3.3-.4.7-.3 1.1.2.3.6.5 1 .5zm-11.5 26c-3.3.4-7.8 1.5-7.9 4.2-.1 2.5 3.8 4.3 8.3 5.2-.8-3.2-.8-6.7-.4-9.4zm14.8 23.8c.9 4.4 2.6 8.3 5.1 8.3h.1c2.7-.1 3.8-4.6 4.2-7.9-3.1.4-6.3.4-9.4-.4zm-3.2-26.3-8.3-2.2c-2.9 7.6-2 15.7 2.9 21.2l8.2-8.2-2.8-10.8zm8.4-9.8-2.2-8c-6.1 2.8-11 8-13.7 13.7l8 2.2 7.9-7.9zm-4.1 22-8.2 8.2c5.7 5.1 13.9 5.7 21.2 2.9l-2.2-8.3-10.8-2.8zM22.5 29.9l2.9 10.7 10.7 2.9 7.9-7.9-2.9-10.7L30.4 22zM28.7 11.8l2.2 8.3L41.7 23l8.2-8.2c-5.5-5-13.7-5.9-21.2-3zm8.8 33.1 2.1 8c6.1-2.8 11-7.9 13.8-13.7l-8-2.2-7.9 7.9zm5.6-20.5L46 35.2l8.3 2.2c2.8-7.2 2.2-15.5-2.9-21.2l-8.3 8.2zm21.1 5.7c-.5-1.1-2.1-2.4-3-2.7-.7-.3-1.8-.4-3.3-.4.2 2.7-.1 5.7-.8 8.4h.1c1.3 1.1 2 6.6 2 10.2 0 .4.3.8.7.9.1 0 .2.1.3.1.3 0 .5-.1.7-.3 4-4.4 5.1-12.4 3.3-16.2z"
                                        fill="#fcfcfc" class="color000000 svgShape"></path>
                                </svg>
                            </div>
                            <span data-purecounter-start="0" data-purecounter-end="4000"
                                data-purecounter-duration="2" class="purecounter"></span>
                            <p>Penyu</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box"
                            style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                            <div class="tengah"
                                style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background-color: #0563bb;">
                                <img width="30" height="30" src="{{ asset('img/bakau.png') }}" />
                            </div>
                            <span data-purecounter-start="0" data-purecounter-end="80" data-purecounter-duration="2"
                                class="purecounter"></span>
                            <p>Mangrove</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Statistik Section -->

        <!-- ======= Peta Section ======= -->
        <section id="peta" class="resume">
            <div class="container" data-aos="fade-up" data-aos-offset="350">
                <div class="section-title">
                    <h2>Peta Inventarisasi</h2>
                    <p>Sistem informasi geografis inventarisasi mengenai terumbu karang dan penyu yang ada di Pulau
                        Tikus, Kota Bengkulu.</p>
                </div>
                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4></h4>
                        </div>
                        <div id="map" style="width:100%;height:440px;">
                            <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>
                            <script>
                                function initialize() {
                                    var mapOptions = {
                                        zoom: 18,
                                        center: new google.maps.LatLng(-3.838195020251307, 102.1797480229322),
                                        // -3.760280003973284, 102.27250601387755
                                        disableDefaultUI: false,
                                        mapTypeId: 'satellite'
                                    };
                                    var mapElement = document.getElementById('map');
                                    var map = new google.maps.Map(mapElement, mapOptions);
                                    var locations = [
                                        @foreach ($posts as $item)
                                            {
                                                latitude: {{ $item->latitude }},
                                                longitude: {{ $item->longitude }},
                                                idPost: {{ $item->id_post }},
                                                title: "{{ $item->nama }}"
                                            },
                                        @endforeach
                                    ];
                                    for (var i = 0; i < locations.length; i++) {
                                        (function() {
                                            var location = locations[i];
                                            var marker = new google.maps.Marker({
                                                position: new google.maps.LatLng(location.latitude, location.longitude),
                                                map: map,
                                                title: location.title,
                                                icon: '{{ asset('img/location.png') }}'
                                            });
                                            var infowindow = new google.maps.InfoWindow({
                                                content: location.title
                                            });
                                            // Tambahkan event listener untuk menampilkan modal saat marker diklik
                                            marker.addListener('click', function() {
                                                var id_post = location.idPost;
                                                $('#locationTitle-' + id_post).text(this.title);
                                                $('#locationModal-' + id_post).modal('show');
                                            });
                                        })();
                                    }
                                }
                                // Memanggil fungsi initialize setelah peta API Google Maps dimuat
                                google.maps.event.addDomListener(window, 'load', initialize);
                            </script>
                        </div>
                    </div>
                </div>
                @foreach ($posts as $item)
                    <div class="modal fade" id="locationModal-{{ $item->id_post }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg text-start"
                            role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $item->nama }}</h5>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="bi bi-x"></i></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr class="text-start">
                                                <th scope="col">Deskripsi</th>
                                                <th class="text-center" scope="col">Latitude</th>
                                                <th class="text-center" scope="col">Longitude</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td class="text-center">{{ $item->latitude }}</td>
                                                <td class="text-center">{{ $item->longitude }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up" data-aos-offset="500" style="margin-bottom: px">

                <div class="section-title">
                    <h2>Data Iventarisasi</h2>
                    <p></p>
                </div>
                <div class="card-body">
                    <table id="tabel-data" class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                            </tr>
                        </thead>
                        @if ($posts->count())
                            @foreach ($posts as $key => $post)
                                <tr id="tr_{{ $post->id_post }}">
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $post->nama }}</td>
                                    <td>{{ $post->deskripsi }}</td>
                                    <td>{{ $post->latitude }}</td>
                                    <td>{{ $post->longitude }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="tentangkami" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bx bxl-dribbble"></i>
                            </div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                    </path>
                                </svg>
                                <i class="bx bx-file"></i>
                            </div>
                            <h4><a href="">Sed Perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bx bx-tachometer"></i>
                            </div>
                            <h4><a href="">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-yellow">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                    </path>
                                </svg>
                                <i class="bx bx-layer"></i>
                            </div>
                            <h4><a href="">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-red">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                    </path>
                                </svg>
                                <i class="bx bx-slideshow"></i>
                            </div>
                            <h4><a href="">Dele Cardo</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                    </path>
                                </svg>
                                <i class="bx bx-arch"></i>
                            </div>
                            <h4><a href="">Divera Don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            {{-- <h3>Sistem Informasi Geografis</h3>
            <p>Yoe yoe yoe</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div> --}}

            <div class="copyright">
                &copy; Copyright <strong><span>saya</span></strong>. All Rights Reserved
            </div>
            <div class="hover-div">
                <div class="credits" style="font-size: 13px">
                    Dibuat oleh <a class="alalghzy" href="https://github.com/alalghzy"><i
                            class="fa-brands fa-square-github fa-bounce"></i>
                        alalghzy</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('home/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('home/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('home/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('home/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('home/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('home/js/main.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script>
        new PureCounter();
    </script>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
