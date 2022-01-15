    function searchBook(search,action){
    $.ajax({
        type: 'GET',
        url: 'ControllerBook.php',
        data: {search:search , action: action},
        cache: false,
        dataType:'json',
        success: function (data) {
            var tableBook = $('#tableBook');
            $(".trBook").remove();
            $.each(data, function(key, element) {
                var row = $('<tr class="trBook"></tr>');
                var status = 'Chưa mượn';
                if(element['status']==1){
                    status = 'Đã mượn';
                }
                row.append($('<td>'+element['id']+'</td>'));
                row.append($('<td>'+element['nameBook']+'</td>'));
                row.append($('<td>'+element['author']+'</td>'));
                row.append($('<td>'+element['nameCategory']+'</td>'));
                row.append($('<td>'+status+'</td>'));
                row.append($('<td>'+element['dateAdd']+'</td>'));
                row.append("<td>"
                    +"<button  class='btn btn-primary zmdi zmdi-edit' value='"+element['id']+"'  type='button'/>"
                    +"</td>");
                tableBook.append(row);
            });
        }
    })
}
//
//     function deleteBook(idBook,action){
//     $.ajax({
//         type: 'GET',
//         url: 'ControllerBook.php',
//         data: {idBook:idBook , action: action},
//         cache: false,
//         dataType:'json',
//         success: function (data) {
//
//         }
//     });
//
// }


//Search book by input
    var inputSearchBook = $("#inputSearchBook");
    inputSearchBook.on('input propertychange',function (){
        var search=inputSearchBook.val();
        searchBook(search,'searchBook');

    })

    //serch book by select
    var selectCategory = $("#selectCategory");
    selectCategory.on('change',function (){
        var search = selectCategory.val();
        searchBook(search,'searchBookByCategory');
    })

    // //delete book
    // var btnDeleteModel =  $("#btnDeleteModel");
    // var btndeleteBook = $(".deleteBook");
    // btndeleteBook.on('click',function () {
    //     var idBook=btndeleteBook.val();
    //     btnDeleteModel.val(idBook);
    //     btnDeleteModel.on('click',function (){
    //         var idBook=btnDeleteModel.val();
    //         deleteBook(idBook,'deleteBook');
    //         $('#btnCancelModel').trigger('click');
    //         $('.toast').toast('show');
    //         searchBook(0,'searchBookByCategory');
    //     })
    // })

    //form save book
    var formSaveBook = $("#formSaveBook");
    formSaveBook.submit(function (e){
        $.ajax({
            type: formSaveBook.attr('method'),
            url: formSaveBook.attr('action'),
            data: formSaveBook.serialize(),
        })
    })

    var inputSearchCategory = $("#inputSearchCategory");
    inputSearchCategory.on('input propertychange',function (){
        var value=inputSearchCategory.val();
        $.ajax({
            type: 'GET',
            url: 'ControllerCategory.php',
            data: {search:value , action: 'searchCategory'},
            cache: false,
            dataType:'json',
            success: function (data) {
                console.log(data);
                var tableBook = $('#tableCategory');
                $(".trCategory").remove();
                $.each(data, function(key, element) {
                    var row = $('<tr class="trCategory"></tr>');
                    row.append($('<td>'+element['id']+'</td>'));
                    row.append($('<td>'+element['name']+'</td>'));
                    row.append($('<td>'+element['countBook']+'</td>'));
                    row.append("<td>"
                        +"<button class='btn btn-primary zmdi zmdi-edit' type='button'/>"
                        +"<button class='btn btn-danger zmdi zmdi-delete' type='button'/>"
                        +"</td>");
                    tableBook.append(row);
                });
            }
        })
    });
    $('#demo').pagination({
        dataSource: [1, 2, 3, 4, 5, 6, 7, ... , 100],
    pageSize: 5,
        showPrevious: false,
        showNext: false,
        callback: function(data, pagination) {
        // template method of yourself
        var html = template(data);
        dataContainer.html(html);
    }
    })