function search_data() {
    var search = jQuery('#search').val();
    jQuery.ajax({
        method: 'post',
        url: 'ControllerSearch.php',
        data: { search: search },
        success: function (data) {
            jQuery('#search_table').html(data);
        }
    });
}

function search_cat() {
    var category = jQuery('#category').val();
    jQuery.ajax({
        method: 'post',
        url: 'ControllerSearch.php',
        data: { category: category },
        success: function (data) {
            jQuery('#search_table').html(data);
        }
    });
}

function manage_book() {
    var categorybook = jQuery('#categorybook').val();
    jQuery.ajax({
        method: 'post',
        url: 'ControllerLoad.php',
        data: { categorybook: categorybook },
        success: function (data) {
            jQuery('#table').html(data);
        }
    });
}

function addFav(id_book) {    
    jQuery.ajax({
        method: 'get',
        url: 'ControllerBook.php',
        data: { id_book: id_book, book: 'fav' },
        success: function (data) {
            jQuery('#buttonBook').html(data);
            $('#btnAddFav').remove;
        }
    });
}
function deFav(id_book) {    
    jQuery.ajax({
        method: 'get',
        url: 'ControllerBook.php',
        data: { id_book: id_book, book: 'defav' },
        success: function (data) {
            jQuery('#buttonBook').html(data);
            $('#btnDeFav').remove;
        }
    });
}

function addFavH(id_book) {    
    jQuery.ajax({
        method: 'get',
        url: 'ControllerBook.php',
        data: { id_book: id_book, book: 'favH' },
        success: function (data) {
            jQuery('#search_table').html(data);
        }
    });
}
function deFavH(id_book) {    
    jQuery.ajax({
        method: 'get',
        url: 'ControllerBook.php',
        data: { id_book: id_book, book: 'defavH' },
        success: function (data) {
            jQuery('#search_table').html(data);
        }
    });
}

function delFavorite2(id_fav) {
    jQuery.ajax({
        method: 'get',
        url: 'ControllerBook.php',
        data: { id_fav: id_fav, book: 'defav2' },
        success: function (data) {
            $('#fav_list').remove;
            jQuery('#favorite').html(data);            
        },
    });
}
function addIssue() {
    var id_book = jQuery('#btnIssue').val();
    jQuery.ajax({
        method: 'get',
        url: 'ControllerBook.php',
        data: { id_book: id_book, book: 'issue' },
        success: function (data) {
            jQuery('#buttonBook').html(data);
            $('#btnIssue').remove;
        }
    });
}

function requestBook() {
    var name = jQuery('#nameRequest').val();
    var author = jQuery('#authorRequest').val();
    jQuery.ajax({
        method: 'post',
        url: 'ControllerBook.php',
        data: {
            name: name,
            author: author,
            book: 'request'
        },
        success: function (data) {
            jQuery('#liveToastRequest').toast('show');
        }
    });
    return false;
}

function updateInfo() {
    var name = jQuery('#nameRequest').val();
    var author = jQuery('#authorRequest').val();
    old_password
    new_password
    jQuery.ajax({
        method: 'post',
        url: 'ControllerUser.php',
        data: {
            // name: name,
            // author: author,
            // action: 'update'
        },
        success: function (data) {
            jQuery('#liveToast').toast('show');
        }

    });
    return false;
}