window.addEventListener('load', function() {
    var uluru = {
        lat: 9.3969,
        lng: -84.1642
    };

    function initMap(point) {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: point,
            MapTypeId: 'satellite'

        });
        var marker = new google.maps.Marker({
            position: point,
            map: map
        }); 
    }

    initMap(uluru);
});

//  AIzaSyBTM2a5jHRz_KvOdYfoivjwap1ePoJWMF8
// google gps map key from google 