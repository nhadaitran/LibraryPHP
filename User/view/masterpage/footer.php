<!--Start footer-->
<footer class="footer">
    <div class="container">
        <div class="text-center">
            Copyright © 2021 -
            <a href="../../User/Controller/ControllerPage.php?page=contact">Contact Us</a>
        </div>
    </div>
</footer>
<!--End footer-->
<!-- Bootstrap core JavaScript-->
<script src="../view/assets/js/jquery.min.js"></script>
<script src="../view/assets/js/popper.min.js"></script>
<script src="../view/assets/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="../view/assets/plugins/simplebar/js/simplebar.js"></script>
<!-- sidebar-menu js -->
<script src="../view/assets/js/sidebar-menu.js"></script>

<!-- Custom scripts -->
<script src="../view/assets/js/app-script.js"></script>

<!-- Ajax -->
<script src="../view/assets/js/ajax.js"></script>

<script>
    function feedback() {
    jQuery.ajax({
        success: function (data) {
            jQuery('#liveToastFeedback').toast('show');
        }
    });
    return false;
}
</script>