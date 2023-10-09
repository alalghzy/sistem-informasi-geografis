@extends('admin.layouts.main')

@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i> Menu</a>
    </header>
    <div class="page-heading col-12 col-lg-12">
        <div class="row">
            <div class="col-sm-8">
                <h3>Dashboard Admin</h3>
            </div>
            <div class="col-sm-4" style="display: flex; justify-content: flex-end;">
                <div class="text-gray-600" id="clock2"></div><p class="text-gray-600">&nbsp; | &nbsp;</p>
                <div class="text-gray-600" id="clock"></div>
            </div>
            <hr>
        </div>
    </div>

    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" id="Coral"
                                                width="30" height="30">
                                                <path
                                                    d="M40.67,32.43c-3,2.54-7.13,2.62-9.93,2.27a23.17,23.17,0,0,1,7-4.9C47.93,25.28,47,11,46.94,10.84c-.09-2.53-4.18-2.42-4,.3,0,.1.61,9.34-4.69,13.69a11.87,11.87,0,0,0-3.34-8,23.93,23.93,0,0,0,5-9.33,2,2,0,1,0-3.88-1,19.94,19.94,0,0,1-4.09,7.68c-3-3.65-1.05-10.6-1-10.68a2,2,0,0,0-3.83-1.14c-.14.46-3.34,11.45,3.8,16.22,3.74,2.49,3.58,6.72,3.33,8.48a27.9,27.9,0,0,0-8.06,6.72,28.43,28.43,0,0,0-1-5.38,16.65,16.65,0,0,0,2.76-6A2,2,0,1,0,24,21.61a13.8,13.8,0,0,1-.82,2.32c-1.89-3.12-3-3.19-5.5-6.06A17.55,17.55,0,0,0,22,6a2,2,0,0,0-2.34-2c-3.18.53-.06,4.89-4.37,10.51A17.31,17.31,0,0,1,13,8.75,2,2,0,0,0,10.74,7c-4.14.49.25,8.69,2.6,11.85,2.14,4.28,8.76,4.51,8.89,17.53a44.78,44.78,0,0,0-10.08-6.61A7.91,7.91,0,0,0,14,25a2,2,0,1,0-4,.08,4.73,4.73,0,0,1-1.37,2.72C3.82,23.74,5,16,5,11A2,2,0,0,0,2.34,9.1C.73,9.61,1,11.36,1,13,1,18.15.17,27.64,7.85,32.1c1.2.8,4.51,1.78,9.28,5.31,2.57,1.91,1.33,4.62.61,7A2,2,0,0,0,19.66,47h8.62a2,2,0,0,0,1.92-2.57l-1.36-4.51a1,1,0,0,1,1.1-1.28c4.65.64,9.5,0,13.17-3A2,2,0,1,0,40.67,32.43Z"
                                                    data-name="30. Coral" fill="#fcfcfc" class="color000000 svgShape">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Karang</h6>
                                        <h6 class="font-extrabold mb-0 purecounter" data-purecounter-start="0"
                                            data-purecounter-end="{{ $posts }}" data-purecounter-duration="2"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <div class="tengah"
                                                style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                                <img width="30" height="30" src="{{ asset('img/bakau.png') }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Mangrove</h6>
                                        <h6 class="font-extrabold mb-0 purecounter" data-purecounter-start="0"
                                            data-purecounter-end="100" data-purecounter-duration="2"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66 66" id="Turtle"
                                                width="30" height="30">
                                                <path
                                                    d="M55.2 18.1c2.3-2.3 4.3-7.1 2.1-9.3-1-1-2.7-1.2-4.8-.6-1.7.5-3.4 1.5-4.5 2.6v.1c1.5.8 2.9 1.9 4.1 3.1 1.2 1.2 2.2 2.6 3.1 4.1zM20.4 6.9c3.5.1 9 .8 10.2 2.1v.1c3-.8 6-1 8.4-.8 0-1.5-.1-2.7-.4-3.4-.4-.9-1.7-2.5-2.7-3-3.8-1.8-11.8-.7-16.2 3.4-.3.3-.4.7-.3 1.1.2.3.6.5 1 .5zm-11.5 26c-3.3.4-7.8 1.5-7.9 4.2-.1 2.5 3.8 4.3 8.3 5.2-.8-3.2-.8-6.7-.4-9.4zm14.8 23.8c.9 4.4 2.6 8.3 5.1 8.3h.1c2.7-.1 3.8-4.6 4.2-7.9-3.1.4-6.3.4-9.4-.4zm-3.2-26.3-8.3-2.2c-2.9 7.6-2 15.7 2.9 21.2l8.2-8.2-2.8-10.8zm8.4-9.8-2.2-8c-6.1 2.8-11 8-13.7 13.7l8 2.2 7.9-7.9zm-4.1 22-8.2 8.2c5.7 5.1 13.9 5.7 21.2 2.9l-2.2-8.3-10.8-2.8zM22.5 29.9l2.9 10.7 10.7 2.9 7.9-7.9-2.9-10.7L30.4 22zM28.7 11.8l2.2 8.3L41.7 23l8.2-8.2c-5.5-5-13.7-5.9-21.2-3zm8.8 33.1 2.1 8c6.1-2.8 11-7.9 13.8-13.7l-8-2.2-7.9 7.9zm5.6-20.5L46 35.2l8.3 2.2c2.8-7.2 2.2-15.5-2.9-21.2l-8.3 8.2zm21.1 5.7c-.5-1.1-2.1-2.4-3-2.7-.7-.3-1.8-.4-3.3-.4.2 2.7-.1 5.7-.8 8.4h.1c1.3 1.1 2 6.6 2 10.2 0 .4.3.8.7.9.1 0 .2.1.3.1.3 0 .5-.1.7-.3 4-4.4 5.1-12.4 3.3-16.2z"
                                                    fill="#fcfcfc" class="color000000 svgShape"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Penyu</h6>
                                        <h6 class="font-extrabold mb-0 purecounter" data-purecounter-start="0"
                                            data-purecounter-end="20" data-purecounter-duration="2"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Saved Post</h6>
                                        <h6 class="font-extrabold mb-0">112</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content">
                    <br>
                    <br>
                    <center><img src="" alt="Logo Pulau Tikus" width="150px"></center>
                    <br>
                    <h2>
                        <center><b>SISTEM INFORMASI GEOGRAFIS</b></center>
                    </h2>
                    <h2>
                        <center><b>PULAU TIKUS KOTA BENGKULU</b> </center>
                    </h2>
                    <h2>
                        <center><a href="{{ route('index') }}"><button class="btn btn-primary" type="button"
                                    href="../index.php">Lihat Web</button></a></center>
                    </h2>

                </div>
            @endsection
