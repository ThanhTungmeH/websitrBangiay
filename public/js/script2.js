// cái này là file js của trang cá nhân, nó sẽ được load khi truy cập vào trang cá nhân nơi thanh NAVBAR ấy
'use strict';
$(document).ready(function() {
    // Initialize DataTable for the product table
    $('#bang-san-pham').DataTable({
        "paging": true,
        "pageLength": 5,
        "lengthMenu": [5, 10],
        "searching": true,
        "info": true,
        "autoWidth": false
    });

    // Function to handle modal and tab switching
    $('[data-bs-tab]').on('click', function() {
        const targetTab = $(this).attr('data-bs-tab'); // Get the target tab selector

        // Open the modal
        $('#hoSoModal').modal('show');

        // After modal is shown, switch to the desired tab and remove backdrop
        $('#hoSoModal').on('shown.bs.modal', function () {
            // Remove 'active show' from all tabs
            $('.tab-pane').removeClass('active show');
            $('.nav-link').removeClass('active');

            // Add 'active show' to the target tab pane
            $(targetTab).addClass('active show');

            // Activate the corresponding nav-link
            $(`[href="${targetTab}"]`).addClass('active');

            // Update modal title based on the active tab
            const currentTab = $(targetTab).attr('id');
            let newTitle = '<span class="text-muted fw-light">Cài đặt /</span> Thông tin cá nhân'; // Default title

            if (currentTab === 'thong-tin') {
                newTitle = '<span class="text-muted fw-light">Cài đặt /</span> Thông tin cá nhân';
            } else if (currentTab === 'doi-mat-khau') {
                newTitle = '<span class="text-muted fw-light">Cài đặt /</span> Đổi mật khẩu';
            } else if (currentTab === 'lich-su-mua-hang') {
                newTitle = '<span class="text-muted fw-light">Cài đặt /</span> Lịch sử mua hàng';
            }

            $('#tieuDeTabModal').html(newTitle);

            // Remove modal backdrop if it exists
            const backdrop = document.querySelector('.modal-backdrop.fade.show');
            if (backdrop) {
                backdrop.remove();
            }

            // Remove the event listener to prevent multiple bindings
            $('#hoSoModal').off('shown.bs.modal');
        });
    });

    // Handle form validation (Example for one form)
    (function () {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
});
