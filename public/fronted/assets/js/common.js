$(function () {
    $(document).off('submit', '#branchEnquiryForm').on('submit', '#branchEnquiryForm', function (event) {
        event.preventDefault();
        var form = $(this);
        var submitButton = form.find('button[type="submit"]');
        $('.form-control').removeClass('is-invalid');
        $('.invalid-feedback').remove();
        submitButton.prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...');
        var formData = new FormData(this);
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                submitButton.prop('disabled', false).html('Submit');
                if (response.status === 'success') {
                    form[0].reset();
                    showNotificationAll('success!', response.message);
                }
            },
            error: function (xhr) {
                submitButton.prop('disabled', false).html('Submit');
                var errors = xhr.responseJSON?.errors;
                if (errors) {
                    $.each(errors, function (key, value) {
                        var inputField = $('#' + key);
                        inputField.addClass('is-invalid');
                        inputField.after('<div class="invalid-feedback">' + value[0] + '</div>');
                    });
                } else {
                    showNotificationAll('error!', 'Something went wrong. Please try again later.');
                }
            }
        });
    });
    /*Announcement carousel */
    $(".announcement-carousel").each(function() {
        var itemCount = $(this).data('item-count');        
        $(this).owlCarousel({
            loop: itemCount > 1,
            margin: 20,
            nav: itemCount > 1,
            dots: false,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            smartSpeed: 500,
            fluidSpeed: 500,
            dragEndSpeed: 500,
            navText: [
                "<i class='fas fa-chevron-left'></i>",
                "<i class='fas fa-chevron-right'></i>"
            ],
            responsive: {
                0: { items: 1 },
                768: { items: Math.min(2, itemCount) },
                992: { items: Math.min(3, itemCount) }
            }
        });
    });
    /*Announcement carousel */
    /*Testimonials*/
    $(document).on('click', 'a[data-ajax-testimonials-popup="true"]', function () {
        var title = $(this).data('title');
        var size = ($(this).data('size') == '') ? 'md' : $(this).data('size');
        var url = $(this).data('url');
        var data = {
            size: size,
            url: url
        };
        $("#commanModel .modal-title").html(title);
        $("#commanModel .modal-dialog").addClass('modal-' + size);

        $.ajax({
            url: url,
            type: 'GET',
            data: data,
            success: function (data) {
                $('#commanModel .render-data').html(data.modalContent);
                $("#commanModel").modal('show');                
            },
            error: function (data) {
                data = data.responseJSON;
            }
        });
    });
    /*Testimonials*/
    /*Alumni modal */
    $(document).on('click', 'a[data-ajax-alumni-popup="true"]', function () {
        var $link = $(this);
        var title = $(this).data('title');
        var size = ($(this).data('size') == '') ? 'md' : $(this).data('size');
        var url = $(this).data('url');
        var data = {
            size: size,
            url: url
        };
        $("#commanModel .modal-title").html(title);
        $("#commanModel .modal-dialog").addClass('modal-' + size);
        $link.addClass('disabled').html(`
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...
            `);
        $.ajax({
            url: url,
            type: 'GET',
            data: data,
            success: function (data) {
                $('#commanModel .render-data').html(data.modalContent);
                $link.removeClass('disabled').html('Read More <i class="fas fa-arrow-right-long"></i>');
                $("#commanModel").modal('show');                
            },
            error: function (data) {
                data = data.responseJSON;
                $link.removeClass('disabled').html('Read More <i class="fas fa-arrow-right-long"></i>');
            }
        });
    });
    /*Alumni modal */

     $(window).on('load', function () {
        var $container = $('.grid-services-image');
        $container.imagesLoaded(function () {
            $container.isotope({
                filter: '*'
            });
        });
    });
 });
 
/* Function to show toast notifications (using Bootstrap 5 Toast) */
function showNotificationAll(type, message) {
    let toastContainer = document.querySelector('.toast-container');
    if (!toastContainer) {
        toastContainer = document.createElement('div');
        toastContainer.className = 'toast-container position-fixed top-0 start-50 translate-middle-x p-3';
        toastContainer.style.zIndex = '1055';
        document.body.appendChild(toastContainer);
    }
    const toastEl = document.createElement('div');
    toastEl.className = `toast align-items-center text-white ${type === 'success' ? 'bg-success' : 'bg-danger'} border-0`;
    toastEl.setAttribute('role', 'alert');
    toastEl.setAttribute('aria-live', 'assertive');
    toastEl.setAttribute('aria-atomic', 'true');
    toastEl.innerHTML = `
        <div class="d-flex">
            <div class="toast-body">
                ${message}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    `;
    toastContainer.appendChild(toastEl);
    const toast = new bootstrap.Toast(toastEl, {
        autohide: true,
        delay: 5000
    });
    toast.show();
    toastEl.addEventListener('hidden.bs.toast', function() {
        toastEl.remove();
    });
}