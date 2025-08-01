$(document).on('click', '.home-album-ajax', function(event) {
    event.preventDefault();
    var thisData = $(this);
    var url = thisData.attr('href');
    var albumId = thisData.data('album-id');
    showLoader();
    
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            hideLoader();            
            if(response.status === 'success') {
                if (!$('.display-gallery-data-by-ajax').data('original-content')) {
                    $('.display-gallery-data-by-ajax').data('original-content', $('.display-gallery-data-by-ajax').html());
                }                
                $('.display-gallery-data-by-ajax').html(response.galleryListData);
                initGalleryPlugins();
            } else {
                showAjaxError(response.message || 'An unknown error occurred');
            }
        },
        error: function(xhr, status, error) {
            hideLoader();   
            var errorMessage = xhr.responseJSON && xhr.responseJSON.message 
                ? xhr.responseJSON.message 
                : 'Failed to load album. Please try again.';
            showAjaxError(errorMessage);
        }
    });
});
$(document).on('click', '.home-gallery-back', function() {
    var originalContent = $('.display-gallery-data-by-ajax').data('original-content');
    if (originalContent) {
        $('.display-gallery-data-by-ajax').html(originalContent);
        $('.display-gallery-data-by-ajax').removeData('original-content');
    }
});
function showAjaxError(message) {
    $('.ajax-error').text(message).fadeIn();
    setTimeout(function() {
        $('.ajax-error').fadeOut();
    }, 5000);
}
function initGalleryPlugins() {
    $('.popup-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
    new WOW().init();
}
function showLoader() {
    $('#loader').show();
}
function hideLoader() {
    $('#loader').hide();
}
$(document).ready(function() {
    initGalleryPlugins();
});