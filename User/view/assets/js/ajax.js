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
    var search = jQuery('#search').val();
    var category = jQuery('#category').val();
    jQuery.ajax({
        method: 'get',
        url: 'ControllerBook.php',
        data: {
            search: search,
            category: category,
            id_book: id_book,
            book: 'favH'
        },
        success: function (data) {
            jQuery('#search_table').html(data);
            manage_book();
        }
    });
}
function deFavH(id_book) {
    var search = jQuery('#search').val();
    var category = jQuery('#category').val();
    jQuery.ajax({
        method: 'get',
        url: 'ControllerBook.php',
        data: {
            search: search,
            category: category,
            id_book: id_book,
            book: 'defavH'
        },
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
            name: name,
            email: email,
            old_password: old_password,
            new_password: new_password,
            confirm_password: confirm_password,
            action: "update",
        },
        success: function (data) {
            if (!data.success) {
                $(".form-group").removeClass("has-error");
                $(".help-block").remove();
                if (data.error.confirm_password) {
                    $("#confirmpass-group").addClass("has-error");
                    $("#confirmpass-group").append(
                        '<h6 class="help-block" style="color:red;">' + data.error.confirm_password + "</h6>"
                    );
                }
                if (data.error.email) {
                    $("#email-group").addClass("has-error");
                    $("#email-group").append(
                        '<h6 class="help-block" style="color:red;">' + data.error.email + "</h6>"
                    );
                }
                if (data.error.old_password) {
                    $("#oldpass-group").addClass("has-error");
                    $("#oldpass-group").append(
                        '<h6 class="help-block" style="color:red;">' + data.error.old_password + "</h6>"
                    );
                }
            } else {
                jQuery('#liveToastUpdateInfo').toast('show');
                $(".form-group").removeClass("has-error");
                $(".help-block").remove();
            }
        },
    });
    return false;
}
load_pagination();
function load_pagination(query = '', page_number = 1) {
    var form_data = new FormData();

    form_data.append('query', query);

    form_data.append('page', page_number);

    var ajax_request = new XMLHttpRequest();

    ajax_request.open('POST', 'ControllerPagination.php');

    ajax_request.send(form_data);

    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState == 4 && ajax_request.status == 200) {
            var response = JSON.parse(ajax_request.responseText);

            var html = '';

            if (response.data != null) {
                html += '<table class="table table-hover">';
                html += '<thead>';
                html += '<tr>';
                html += '<th scope="col">Mã sách</th>';
                html += '<th scope="col">Tiêu đề sách</th>';
                html += '<th scope="col">Tác giả</th>';
                html += '<th scope="col">Trạng Thái</th>';
                html += '<th scope="col">Yêu Thích</th>';
                html += '</tr>';
                html += '</thead>';
                for (var count = 0; count < response.data.length; count++) {
                    if (response.data[count].name.length > 90) {
                        response.data[count].name = response.data[count].name.substring(response.data[count].name, 0, 90) + "..."
                    }
                    html += '<tr>';
                    html += '<td>' + response.data[count].id + '</td>';
                    html += '<td><a href=?book=' + response.data[count].id + '>' + response.data[count].name + '</td>';
                    html += '<td>' + response.data[count].author + '</td>';
                    if (response.data[count].status == 1) {
                        html += '<td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>';
                    } else {
                        html += '<td><button class="btn btn-success btn-sm" disabled="disable">available</button></td>';
                    }
                    if (response.data[count].fid != null) {
                        html += ' <td><button class="btn btn-danger fa fa-heart-o"onClick="deFavH(' + response.data[count].id + ');"></button></td>';
                    } else {
                        html += ' <td><button class="btn btn-success fa fa-heart-o" onClick="addFavH(' + response.data[count].id + ');"></button></td>';
                    }
                    html += '</tr>';
                }
                html += '</table>';
                jQuery('#pagination_link').html(response.pagination);
            } else {
                html += '<form class="form-row col-md mb-3 mt-3" method="post" onSubmit="return requestBook();">';
                html += '<div class="col-md">';
                html += '<input class="form-control" id="nameRequest" type="text" placeholder=" Tiêu Đề Sách..." required>';
                html += '</div>';
                html += '<div class="col-md">';
                html += '<input class="form-control" id="authorRequest" type="text" placeholder=" Tác Giả..." required>';
                html += '</div>';
                html += '<div class="col-md-2">';
                html += '<button class="btn btn-light" type="submit" id="btnRequest">+ Yêu cầu sách</button>';
                html += '</div>';
                html += '</form>';
            }
            jQuery('#search_table').html(html);
        }

    }
}