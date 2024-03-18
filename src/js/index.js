function navigateTo(navURL) {
    event.preventDefault();
    var currentURL = window.location.href;
    $.ajax({
        url: navURL,
        method: 'GET',
        dataType: 'json',
        success: function (response) {
            $('#contentMainHome').html(response.html);
            history.pushState({ page: navURL }, '', navURL);
            sessionStorage.setItem('previousURL', currentURL);
            sessionStorage.setItem('currentURL', navURL);
            main(); // Call function changecolor
            // $.ajax({
            //     url: "<?php echo URLROOT ?>/utils/ColorIdentify.js",
            //     dataType: "script",
            //     success: function() {
            //         eval(response); 
            //         console.log("Aa");
            //     },
            //     error: function(xhr, status, error) {
            //         console.log('Error:', error);
            //     }
            // });
        },
        error: function (xhr, status, error) {
            console.log('Error:', error);
        }
    });
}

window.addEventListener('popstate', function (event) {
    var navPage = sessionStorage.getItem('previousURL');
    if (navPage != null) {
        navigateTo(navPage);
    }
});

function prevPage() {
    var navPage = sessionStorage.getItem('previousURL');
    if (navPage != null) {
        navigateTo(navPage);
    }
}

function nextPage() {
    var navPage = sessionStorage.getItem('previousURL');
    if (navPage != null) {
        navigateTo(navPage);
    }
}

function formatTime(seconds) {
    var minutes = Math.floor(seconds / 60);
    var remainingSeconds = seconds % 60;
  
    var formattedMinutes = (minutes < 10) ? "0" + minutes : minutes;
    var formattedSeconds = (remainingSeconds < 10) ? "0" + remainingSeconds : remainingSeconds;
  
    return formattedMinutes + ":" + formattedSeconds;
  }
  