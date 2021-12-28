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

function addFav() {
    var id_book = jQuery('#btnAddFav').val();
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
function deFav() {
    var id_book = jQuery('#btnDeFav').val();
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

function delFavorite2() {
    var id_fav = jQuery('#btnDelFav').val();
    jQuery.ajax({
        method: 'get',
        url: 'ControllerBook.php',
        data: { id_fav: id_fav, book: 'defav2' },
        cache: false,
        dataType: 'json',
        success: function (data) {
            var tableBook = $('#favorite');
            $("#fav_item").remove();
            $.each(data, function (key, book) {
                book['name'] = strlen(book['name']) > 30 ? substr(book['name'], 0, 30) + "..." : book['name'];
                var row = $('<div class="card col-md-auto">');
                if ($book['image'] != null) {
                    row.append($('<img class="card-img-top" width="100px" height="250px" src="../../Admin/image/' + $book['image'] + '">'));
                } else {
                    row.append($('<img class="card-img-top" width="100px" height="250px" src="https://via.placeholder.com/300x400">'));
                }
                row.append($('<div class="card-body md-auto" style="margin-top: -25px">'));
                row.append($('<h5 class="card-title my-4"><a href=?book=' + book['id_book'] + '>' + book['name'] + '</a></h5><hr/>'));
                row.append($('<div class="d-flex justify-content-center">'));
                row.append($('<button class="btn btn-danger rounded fa fa-trash" onClick="delFavorite2();" id="btnDelFav" value="' + book['id'] + '"></button>'));
                row.append($('</div></div></div>'));
                tableBook.append(row);
            });
        }
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