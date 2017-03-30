


window.addEventListener('load', function()
{
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(location) {
            console.log(location);
        }, function(error) {
            console.error(error);
        });
    }
});

//  AIzaSyBTM2a5jHRz_KvOdYfoivjwap1ePoJWMF8
// google gps map key from google 