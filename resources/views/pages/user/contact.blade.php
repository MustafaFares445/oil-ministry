@extends('masteruser.app')
@section('content')


<section class="contact">

    <div class="main-heading ">
          <h2>contact us</h2>
          <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.
          </p>
    </div>

    <div class="row contact-row">
          <div class="col-6  ">
                <div class="contact-left">
                     <form class="contact-form"method="POST" action="{{route('send_message.store')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="row ">
                                 <div class="col-6 form-col">
                                  <div class="form-name">
                                     <label > Full Name</label>
                                     <input type="text" class="inname in"id="name"name="name"
                                     class="@error('name') is-invalid @enderror" placeholder="Your Name" >
                                     @error('name')
                                     <div class="alert alert-danger" >{{$message}}</div>
                                     @enderror
                                  </div>
                                 </div>

                                 <div class="col-6 form-col ">
                                  <div class="form-email ">
                                  <label > Your Email</label>
                                  <input type="email" class="inemail in"
                                  class="@error('email') is-invalid @enderror" placeholder="Your Email" id="email"name="email">
                                  @error('email')
                                  <div class="alert alert-danger" >{{$message}}</div>
                                  @enderror
                                  </div>
                                  </div>
                            </div>

                            <div class="row form-row form-col">
                                  <label > Your Subject</label>
                                  <input type="text" class="insubject in"
                                  class="@error('subject') is-invalid @enderror" placeholder="Subject" id="subject"name="subject">
                                  @error('subject')
                                  <div class="alert alert-danger" >{{$message}}</div>
                                  @enderror
                            </div>

                            <div class="row form-row form-col">
                                  <label > Your Message</label>
                                  <textarea class="textmessage in" rows="8"
                                  class="@error('message') is-invalid @enderror" placeholder="Message" id="message"name="message"></textarea>
                                  @error('message')
                                  <div class="alert alert-danger" >{{$message}}</div>
                                  @enderror


                            </div>

                            <button class="btn_contact btn w-100 py-3" type="submit">Send Message</button>

                      </form>
                </div>
          </div>
          <div class="col-6">
                {{-- <div class="contact-right"> --}}
                <div id="map" style="height:500px; width: 1000px;"></div>

                {{-- </div> --}}
          </div>
    </div>

</section>



<!-- ******************************** footer section********************************* -->
<div class="footer  ">
<div class="row footer-row animate__slideInUp">
    <div class="col-md-3">
    <div class="dbox w-100 text-center">
    <div class="icon d-flex align-items-center justify-content-center footer_icon">
    <span class="fa fa-map-marker"></span>
    </div>
    <div class="text ">
    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
    </div>
    </div>
    </div>
    <div class="col-md-3">
    <div class="dbox w-100 text-center">
    <div class="icon d-flex align-items-center justify-content-center footer_icon">
    <span class="fa fa-phone"></span>
    </div>
    <div class="text">
    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
    </div>
    </div>
    </div>
    <div class="col-md-3">
    <div class="dbox w-100 text-center">
    <div class="icon d-flex align-items-center justify-content-center footer_icon">
    <span class="fa fa-paper-plane"></span>
    </div>
    <div class="text">
    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
    </div>
    </div>
    </div>
    <div class="col-md-3">
    <div class="dbox w-100 text-center">
    <div class="icon d-flex align-items-center justify-content-center footer_icon">
    <span class="fa fa-globe"></span>
    </div>
    <div class="text">
    <p><span>Website</span> <a href="#">yoursite.com</a></p>
    </div>
    </div>
    </div>
    </div>
</div>



@endsection

@section('script')

    <script>



        $("#pac-input").focusin(function() {
            $(this).val('');
        });

        $('#latitude').val('');
        $('#longitude').val('');


        // This example adds a search box to a map, using the Google Place Autocomplete
        // feature. People can enter geographical searches. The search box will return a
        // pick list containing a mix of places and predicted search terms.

        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        function initAutocomplete() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 24.740691, lng: 46.6528521 },
                zoom: 13,
                mapTypeId: 'roadmap'
            });

            // move pin and current location
            infoWindow = new google.maps.InfoWindow;
            geocoder = new google.maps.Geocoder();
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    map.setCenter(pos);
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(pos),
                        map: map,
                        title: 'موقعك الحالي'
                    });
                    markers.push(marker);
                    marker.addListener('click', function() {
                        geocodeLatLng(geocoder, map, infoWindow,marker);
                    });
                    // to get current position address on load
                    google.maps.event.trigger(marker, 'click');
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                console.log('dsdsdsdsddsd');
                handleLocationError(false, infoWindow, map.getCenter());
            }

            var geocoder = new google.maps.Geocoder();
            google.maps.event.addListener(map, 'click', function(event) {
                SelectedLatLng = event.latLng;
                geocoder.geocode({
                    'latLng': event.latLng
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            deleteMarkers();
                            addMarkerRunTime(event.latLng);
                            SelectedLocation = results[0].formatted_address;
                            console.log( results[0].formatted_address);
                            splitLatLng(String(event.latLng));
                            $("#pac-input").val(results[0].formatted_address);
                        }
                    }
                });
            });
            function geocodeLatLng(geocoder, map, infowindow,markerCurrent) {
                var latlng = {lat: markerCurrent.position.lat(), lng: markerCurrent.position.lng()};
                /* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/
                $('#latitude').val(markerCurrent.position.lat());
                $('#longitude').val(markerCurrent.position.lng());

                geocoder.geocode({'location': latlng}, function(results, status) {
                    if (status === 'OK') {
                        if (results[0]) {
                            map.setZoom(8);
                            var marker = new google.maps.Marker({
                                position: latlng,
                                map: map
                            });
                            markers.push(marker);
                            infowindow.setContent(results[0].formatted_address);
                            SelectedLocation = results[0].formatted_address;
                            $("#pac-input").val(results[0].formatted_address);

                            infowindow.open(map, marker);
                        } else {
                            window.alert('No results found');
                        }
                    } else {
                        window.alert('Geocoder failed due to: ' + status);
                    }
                });
                SelectedLatLng =(markerCurrent.position.lat(),markerCurrent.position.lng());
            }
            function addMarkerRunTime(location) {
                var marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
                markers.push(marker);
            }
            function setMapOnAll(map) {
                for (var i = 0; i < markers.length; i++) {
                    markers[i].setMap(map);
                }
            }
            function clearMarkers() {
                setMapOnAll(null);
            }
            function deleteMarkers() {
                clearMarkers();
                markers = [];
            }

            // Create the search box and link it to the UI element.
            var input = document.getElementById('pac-input');
            $("#pac-input").val("أبحث هنا ");
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);

            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
            });

            var markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                // Clear out the old markers.
                markers.forEach(function(marker) {
                    marker.setMap(null);
                });
                markers = [];

                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(100, 100),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };

                    // Create a marker for each place.
                    markers.push(new google.maps.Marker({
                        map: map,
                        icon: icon,
                        title: place.name,
                        position: place.geometry.location
                    }));


                    $('#latitude').val(place.geometry.location.lat());
                    $('#longitude').val(place.geometry.location.lng());

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
        function splitLatLng(latLng){
            var newString = latLng.substring(0, latLng.length-1);
            var newString2 = newString.substring(1);
            var trainindIdArray = newString2.split(',');
            var lat = trainindIdArray[0];
            var Lng  = trainindIdArray[1];

            $("#latitude").val(lat);
            $("#longitude").val(Lng);
        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKZAuxH9xTzD2DLY2nKSPKrgRi2_y0ejs&libraries=places&callback=initAutocomplete&language=ar&region=sy
         async defer"></script>
    @stop
