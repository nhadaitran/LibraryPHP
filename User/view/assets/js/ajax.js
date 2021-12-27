function search_data() {
        var search = jQuery('#search').val();        
        jQuery.ajax({
            method: 'post',
            url: 'ControllerSearch.php',                        
            data: {search: search},            
            success: function(data) {
                jQuery('#search_table').html(data);            
            }
        });
    }

    function search_cat() {
        var category = jQuery('#category').val();        
        jQuery.ajax({
            method: 'post',
            url: 'ControllerSearch.php',
            data: {category: category},            
            success: function(data) {
                jQuery('#search_table').html(data);
            }            
        });
    }