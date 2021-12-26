<!--Start footer-->
<footer class="footer">
    <div class="container">
        <div class="text-center">
            Copyright © 2018
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

<!-- Toast -->
<script>
    $(document).ready(function() {
        $("#applyBtn").click(function() {
            $('.toast').toast('show');
        });
    });

    function search_data() {
        var search = jQuery('#search').val();        
        jQuery.ajax({
            method: 'post',
            url: 'ControllerSearch.php',                        
            data: {search: search},            
            success: function(data) {
                jQuery('#search_table').html(data);            
            },
            error: function(e) {         
                console.info(search);
            }
        });
    }
</script>