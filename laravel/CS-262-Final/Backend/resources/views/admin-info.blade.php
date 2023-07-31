@extends('admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card"><br><br>
                        <img class="rounded-circle avatar-xl"
                            src="{{ !empty($ip[0]->profile_image) ? url('upload/images/' . $ip[0]->profile_image) : url('upload/no_image.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Name : {{ $ip[0]->user_name }} </h4>
                            <hr>
                            <h4 class="card-title">IP Address : {{ $ip[0]->ip_address }} </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div style="width:100%; height: 400px" id='map' lng="{{ $ip[0]->lng }}" lat="{{ $ip[0]->lat }}">
                </div>
            </div>
        </div>
    </div>
    <script>
        const map = document.getElementById('map');
        let loc = [+map.getAttribute('lat'), +map.getAttribute('lng')];

        function myMap() {
            var mapProp = {
                center: {
                    lat: loc[0],
                    lng: loc[1]
                },
                animation: google.maps.Animation.BOUNCE,
                zoom: 12,
            };

            // new map
            var map = new google.maps.Map(document.getElementById("map"), mapProp);

            // marker
            var marker = new google.maps.Marker({
                position: {
                    lat: loc[0],
                    lng: loc[1]
                },
                map: map
            });

            var infowindow = new google.maps.InfoWindow({
                content: `Lat: ${loc[0]}<br>Lng: ${loc[1]}`
            });

            infowindow.open(map, marker);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('API_KEY') }}&callback=myMap">
    </script>
@endsection
