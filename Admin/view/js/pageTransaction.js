//Search issue
var inputSearchIssue = $("#inputSearchIssue");
inputSearchIssue.on('input propertychange',function (){
    $.ajax({
        type: 'GET',
        url: 'ControllerIssue.php',
        data: {search: inputSearchIssue.val(), action: 'searchIssue'},
        cache: false,
        dataType:'json',
        success: function (data) {
            var tableIssue = $('#tableIssue');
            $(".trIssue").remove();
            $.each(data, function(key, element) {
                var row = $('<tr class="trIssue"></tr>');
                row.append($('<td>'+element['id']+'</td>'));
                row.append($('<td>'+element['nameStudent']+'</td>'));
                row.append($('<td>'+element['nameBook']+'</td>'));
                row.append($('<td>'+element['dateissue']+'</td>'));
                if(element['status']==0)
                row.append($('<td>'+'Chờ duyệt'+'</td>'));
                else
                row.append($('<td>'+'Đã duyệt'+'</td>'));
                if(element['nameAdmin']!="")
                row.append($('<td>'+element['nameAdmin']+'</td>'));
                else
                row.append($('<td>'+'Chưa có'+'</td>'));
                if(element['status']==0){
                    row.append("<td><form action='ControllerIssue.php' method='post'><input type='text' hidden name='id' value='"+element['id']+"'>"
                    +"<button type='submit' class='btn btn-success' name='action' value='yes'>Yes</button>"
                    +"<button type='submit' class='btn btn-danger' name='action' value='no'>No</button>"
                    +" </form></td>");
                }
                else
                row.append($('<td>'+'None'+'</td>'));
                tableIssue.append(row);
            });
        }
    })
})

//search return
var inputSearchReturn = $("#inputSearchReturn");
inputSearchReturn.on('input propertychange',function (){
    $.ajax({
        type: 'GET',
        url: 'ControllerReturn.php',
        data: {search: inputSearchReturn.val(), action: 'searchReturn'},
        cache: false,
        dataType:'json',
        success: function (data) {
            var tableReturn = $('#tableReturn');
            $(".trReturn").remove();
            $.each(data, function(key, element) {
                var row = $('<tr class="trReturn"></tr>');
                row.append($('<td>'+element['id']+'</td>'));
                row.append($('<td>'+element['nameAdmin']+'</td>'));
                row.append($('<td>'+element['nameStudent']+'</td>'));
                row.append($('<td>'+element['nameBook']+'</td>'));
                row.append($('<td>'+element['datereturn']+'</td>'));
                row.append("<td>"
                    +"<button class='btn btn-primary zmdi zmdi-edit' type='button'/>"
                    +"<button class='btn btn-danger zmdi zmdi-delete' type='button'/>"
                    +"</td>");
                tableReturn.append(row);
            });
        }
    })
})