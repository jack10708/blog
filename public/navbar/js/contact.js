// contact.js

$(document).ready(function() {
    $('#contact-form').submit(function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: 'path/to/your/server-side/script.php',
            data: formData,
            success: function(response) {
                $('#form-response').html('<div class="alert alert-success">' + response + '</div>');
                $('#contact-form')[0].reset();
            },
            error: function() {
                $('#form-response').html('<div class="alert alert-danger">An error occurred. Please try again later.</div>');
            }
        });
    });
});
// contact.js

function initMap() {
    var companyLocation = {lat: 32.8484, lng: -117.2733}; // Replace with your company's coordinates
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: companyLocation
    });
    var marker = new google.maps.Marker({
        position: companyLocation,
        map: map,
        title: 'Wanderlust Chronicles'
    });
}
