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
            manage_book();
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
            manage_book();
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
    var name = jQuery('#name').val();
    var email = jQuery('#email').val();
    var old_password = jQuery('#old_password').val();
    var new_password = jQuery('#new_password').val();
    var confirm_password = jQuery('#confirm_password').val();
    jQuery.ajax({
        method: 'post',
        url: 'ControllerUser.php',
        dataType: "json",
        encode: true,
        data: {
            name:name,
            email:email,
            old_password:old_password,
            new_password:new_password,
            confirm_password:confirm_password,
            action: "update",
        },
        success: function (data) {
            jQuery('#liveToastUpdateUser').toast('show');
            console.log(data);
        },
        error: function (jqXHR, textStatus, errorThrown){
            console.log("Ngu vcl"),
            console.log(name),
            console.log(email),
            console.log(old_password),
            console.log(new_password),
            console.log(confirm_password)
        }

    });
    return false;
}