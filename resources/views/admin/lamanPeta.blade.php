@extends('admin.layouts.main')

@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i> Menu</a>
    </header>

    <div class="page-heading col-12 col-lg-12">
        <div class="row">
            <div class="col-sm-8">
                <h3>Peta Persebaran</h3>
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
                    <section>
                        <div class="col-12 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4></h4>
                                </div>
                                <div id="map" style="width:100%;height:500px;">
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
                    </section>
                    @include('admin.modalMap')

                </div>
            @endsection
