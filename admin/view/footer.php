<!-- sa-app__footer -->
<div class="sa-app__footer d-block d-md-flex">
    <!-- copyright -->Stroyka Admin — eCommerce Dashboard Template © 2021
    <div class="m-auto"></div>
    <div>
        Powered by HTML — Design by
        <a href="https://themeforest.net/user/kos9/portfolio">Kos</a>
    </div>
    <!-- copyright / end -->
</div>
<!-- sa-app__footer / end -->
</div>
<!-- sa-app__content / end --><!-- sa-app__toasts -->
<div class="sa-app__toasts toast-container bottom-0 end-0"></div>
<!-- sa-app__toasts / end -->
</div>
<script>
      document.getElementById('myForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the form from submitting immediately

        // Reference to the form
        var form = this;

        // Use SweetAlert2 to confirm the submission
        Swal.fire({
            title: 'Bạn có chắc chắn  không?',
            text: 'Bạn sẽ không thể hoàn tác điều này!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: "Hủy",
            confirmButtonText: 'Đồng ý , Lưu!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If the user confirms, manually trigger the form submission
                form.submit();
            }
        });
    });
</script>
<script>
    function xoaKhong(link) {
        Swal.fire({
            title: "Bạn có chắc chắn không ?",
            text: "Bạn sẽ không thể hoàn tác điều này!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Hủy",
            confirmButtonText: "Đồng ý ,xóa!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
            }
        });
    }

</script>

<!-- sa-app / end --><!-- scripts -->
<script src="view/vendor/jquery/jquery.min.js"></script>
<script src="view/vendor/feather-icons/feather.min.js"></script>
<script src="view/vendor/simplebar/simplebar.min.js"></script>
<script src="view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="view/vendor/highlight.js/highlight.pack.js"></script>
<script src="view/vendor/quill/quill.min.js"></script>
<script src="view/vendor/air-datepicker/js/datepicker.min.js"></script>
<script src="view/vendor/air-datepicker/js/i18n/datepicker.en.js"></script>
<script src="view/vendor/select2/js/select2.min.js"></script>
<script src="view/vendor/fontawesome/js/all.min.js" data-auto-replace-svg="" async=""></script>
<script src="view/vendor/chart.js/chart.min.js"></script>
<script src="view/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="view/vendor/datatables/js/dataTables.bootstrap5.min.js"></script>
<script src="view/vendor/nouislider/nouislider.min.js"></script>
<script src="view/vendor/fullcalendar/main.min.js"></script>
<script src="view/js/stroyka.js"></script>
<script src="view/js/custom.js"></script>
<script src="view/js/calendar.js"></script>
<script src="view/js/demo.js"></script>
<script src="view/js/demo-chart-js.js"></script>
</body>
<!-- Mirrored from stroyka-admin.html.themeforest.scompiler.ru/variants/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 12:59:00 GMT -->

</html>