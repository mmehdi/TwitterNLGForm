<div class="form-group out-bus-2-to-map" style="display:none;">
    <div class="panel panel-default col-md-offset-4 col-md-6">
        <div id="out-bus-2-to-map" class="panel-collapse collapse">
            <div class="panel-body">
                <p>Please enter the address of your location into the search box and drag the marker to the correct bus stop.</p>
                <div class="panel-group" id="">
                    <input id="out-bus-2-to-map-pac-input" class="controls" type="text" placeholder="Search Box">
                    <div id="out-bus-2-to-map-mapCanvas" class="col-lg-8 col-md-8"></div>
                    <div id="out-bus-2-to-map-infoPanel">
                        <!--b>Marker status:</b-->
                        <!--div id="markerStatus"><i>Click and drag the marker.</i></div-->
                        <!--b>Current position:</b-->
                        <!--div id="info"></div-->
                        <b>Closest matching address:</b>
                        <div id="out-bus-2-to-map-address"></div>
                        <input type="hidden" name="out-bus-2-to-map-lat" id="out-bus-2-to-map-lat" value=0>
                        <input type="hidden" name="out-bus-2-to-map-lat" id="out-bus-2-to-map-long" value=0>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="button" class="btn btn-default" onClick="out_bus_2_to_map_close();">Close</button>
                <button type="button" class="btn btn-primary" onClick="out_bus_2_to_map_save();" id="out-bus-2-to-map-save-btn" data-source="">Save location</button>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
            #out-bus-2-to-map-mapCanvas {
                  width: 100%;
                  min-height: 300px;
                  margin: 0;
            }
            #out-bus-2-to-map-infoPanel {
                float: left;
                margin-left: 10px;
            }
            #out-bus-2-to-map-infoPanel div {
                margin-bottom: 5px;
            }

        .controls {
        margin-top: 16px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #out-bus-2-to-map-pac-input {
        background-color: #fff;
        padding: 0 11px 0 13px;
        width: 400px;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        text-overflow: ellipsis;
        border: 1px solid grey;
      }

      #out-bus-2-to-map-pac-input:focus {
        border-color: #4d90fe;
        margin-left: -1px;
        padding-left: 14px;  /* Regular padding-left + 1. */
        width: 401px;
      }

      .pac-container {
        font-family: Roboto;
            background-color: #FFF;
        z-index: 20;
        position: fixed;
        display: inline-block;
        float: left;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
</style>
        <script type="text/javascript">
            var geocoder = new google.maps.Geocoder();
            var out_bus_2_to_map;
            function out_bus_2_to_geocodePosition(pos) {
                geocoder.geocode({
                    latLng: pos
                }, function(responses) {
                    if (responses && responses.length > 0) {
                        out_bus_2_to_updateMarkerAddress(responses[0].formatted_address);
                    } else {
                        out_bus_2_to_updateMarkerAddress('Cannot determine address at this location.');
                    }
                });
            }

            //get lat long from address
            function out_bus_2_to_getLatLong(address){
                geocoder.geocode({'out-bus-2-to-map-address':address},function(results, status){
                    if (status == google.maps.GeocoderStatus.OK) {

                        out_bus_2_to_updateMarkerAddress(results[0].formatted_address);
                        //return results[0].geometry.location;
              } else {
                //alert("Geocode was not successful for the following reason: " + status)
                out_bus_2_to_updateMarkerAddress('Cannot determine address at this location.')
                }
             });
            }

            function out_bus_2_to_updateMarkerStatus(str) {
                //document.getElementById('markerStatus').innerHTML = str;
            }

            function out_bus_2_to_updateMarkerPosition(latLng) {
                /*document.getElementById('info').innerHTML = [
                    latLng.lat(),
                    latLng.lng()
                ].join(', ');*/

                    $('#out-bus-2-to-map-lat').val(latLng.lat());
                    $('#out-bus-2-to-map-long').val(latLng.lng());
            }

            function out_bus_2_to_updateMarkerAddress(str) {
                document.getElementById('out-bus-2-to-map-address').innerHTML = str;
            }

            function out_bus_2_to_initialize() {


                ///57.147493,-2.095392
                var latLng = new google.maps.LatLng(57.147493, -2.095392);
                out_bus_2_to_map = new google.maps.Map(document.getElementById('out-bus-2-to-map-mapCanvas'), {
                    zoom: 8,
                    center: latLng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                var marker = new google.maps.Marker({
                    position: latLng,
                    title: 'Point A',
                    map: out_bus_2_to_map,
                    draggable: true
                });


                // Update current position info.
                out_bus_2_to_updateMarkerPosition(latLng);
                out_bus_2_to_geocodePosition(latLng);

                // Add dragging event listeners.
                google.maps.event.addListener(marker, 'dragstart', function() {
                    out_bus_2_to_updateMarkerAddress('Dragging...');
                });

                google.maps.event.addListener(marker, 'drag', function() {
                    out_bus_2_to_updateMarkerStatus('Dragging...');
                    out_bus_2_to_updateMarkerPosition(marker.getPosition());
                });

                google.maps.event.addListener(marker, 'dragend', function() {
                    out_bus_2_to_updateMarkerStatus('Drag ended');
                    out_bus_2_to_geocodePosition(marker.getPosition());
                });



                // Create the search box and link it to the UI element.
                  var input = /** @type {HTMLInputElement} */(
                      document.getElementById('out-bus-2-to-map-pac-input'));
                  out_bus_2_to_map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                  var searchBox = new google.maps.places.SearchBox((input));


                //listen to search box
                google.maps.event.addListener(searchBox, "places_changed", function(){

                    var places = searchBox.getPlaces();
                    var place = places[0];
                    //input.text(place['formatted_address']);
                    //  console.log(JSON.stringify(place));
                    if (place.geometry.viewport) {
                        out_bus_2_to_map.fitBounds(place.geometry.viewport);
                    } else {
                        out_bus_2_to_map.setCenter(place.geometry.location);
                        out_bus_2_to_map.setZoom(15);
                    }

                    marker.setPosition(place.geometry.location);

                    //$("#pac-input").val(place['formatted_address']);
                    //searchBox.val(place['formatted_address']);
                    //document.getElementById('pac-input').innerHTML = str;
                    //input.value=place['formatted_address'];
                    //$("#keyword").val(place['formatted_address']);
                    out_bus_2_to_updateMarkerAddress(place['formatted_address']);
                    //geocodePosition(marker.getPosition());
                });

                google.maps.event.addListener(out_bus_2_to_map, "click", function(event){
                    // console.log(event.latLng);
                    marker.setPosition(event.latLng);
                    out_bus_2_to_updateMarkerPosition(event.latLng);
                    out_bus_2_to_geocodePosition(marker.getPosition());
                });

                //var bounds = map.getBounds();
                //searchBox.setBounds(bounds);
            
            }

            // Onload handler to fire off the app.
            google.maps.event.addDomListener(window, 'load', out_bus_2_to_initialize);

            //fix modal issue with google map
            $('#out-bus-2-to-map').on('shown.bs.collapse', function (e) {
                //alert('hi');
                google.maps.event.trigger(out_bus_2_to_map, 'resize');
                //out_bus_2_to_map.setCenter(new google.maps.LatLng(57.147493, -2.095392));

             if($('#out-bus-2-to-map-lat').val().length)
                    out_bus_2_to_map.setCenter(new google.maps.LatLng($('#out-bus-2-to-map-lat').val(), $('#out-bus-2-to-map-long').val()));
             else
                out_bus_2_to_map.setCenter(new google.maps.LatLng(57.147493, -2.095392));

            $("#out-bus-2-to-div").focus();


           });

        //store map values in the form
            function out_bus_2_to_map_save(){
                $('#out-bus-2-to').val($('#out-bus-2-to-map-address').html());
                
                $('#out-bus-2-to-lat').val($('#out-bus-2-to-map-lat').val());
                $('#out-bus-2-to-long').val($('#out-bus-2-to-map-long').val());

              $("#out-bus-2-to-map").collapse('hide');
        };
        
       //hide the div when collaspe is hidden
       $('#out-bus-2-to-map').on('hidden.bs.collapse', function (e) {
            $('.out-bus-2-to-map').hide();
            $("#out-bus-2-to-div").focus();
        });
       
       function out_bus_2_to_map_close(){
            $("#out-bus-2-to-map").collapse('hide');
        };


        function out_bus_2_to_showMap(input){
      $('.out-bus-2-to-map').show();
      $("#out-bus-2-to-map").collapse('show')
      //alert('click');
    //  if($(input).val()=='')
       //   $('#mapModal').modal('show');
    }
</script>