//contact google map

// These are the values for your desired longitude and latitude
var lat = 54.721486;
var long = -1.368433;  

if ($(".google-map").length > 0)
{
    var myCenter = new google.maps.LatLng(
        lat, long 
    );
    function changeMarker(newLogo) {
        "use strict";
        var marker = new google.maps.Marker({
            position: myCenter,
            icon: newLogo
        });
        var map = new google.maps.Map(document.getElementById("google-map"), {
            center: myCenter,
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: true,
            rotateControl: false,
            fullscreenControl: false,
//            styles: [{
//                    "featureType": "all",
//                    "stylers": [
//                        {"saturation": -100}
//                    ]
//                }]
        });
        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, "load", function () {
        changeMarker("img/contact/location-color-3.png");
    });
}
