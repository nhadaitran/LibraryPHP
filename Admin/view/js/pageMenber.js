var inputSearchMember = $("#inputSearchMember");
    inputSearchMember.on('input propertychange', function() {
        $.ajax({
            type: 'GET',
            url: 'ControllerMember.php',
            data: {
                idMember: inputSearchMember.val(),
                action: 'searchIdNameMember'
            },
            cache: false,
            dataType: 'json',
            success: function(data) {
                var tableMember = $('#tableMember');
                $(".trMember").remove();
                $.each(data, function(key, element) {
                    var row = $('<tr class="trMember"></tr>');
                    row.append($('<td>' + element['id'] + '</td>'));
                    row.append($('<td>' + element['name'] + '</td>'));
                    row.append($('<td>' + element['username'] + '</td>'));
                    row.append($('<td>' + element['password'] + '</td>'));
                    row.append($('<td>' + element['email'] + '</td>'));
                    row.append($('<td>' + element['lock'] + '</td>'));
                    row.append("<td>" +
                        // "<button class='btn btn-primary zmdi zmdi-edit' type='button'/>" +
                        "<a href='../Controller/ControllerMember.php?action=edit&id="+element['id']+"' class='btn btn-primary zmdi zmdi-edit' type='button'></a>" +
                        // "<button class='btn btn-danger zmdi zmdi-delete' type='button'/>" +
                        "<a href='../Controller/ControllerMember.php?action=delete&id="+element['id']+"' class='btn btn-danger zmdi zmdi-delete' type='button'></a>" +
                        // "<button class='btn btn-warning zmdi zmdi-lock' type='button'/>" +
                        "<a href='../Controller/ControllerMember.php?action=lock&id="+element['id']+"' class='btn btn-warning zmdi zmdi-lock' type='button'></a>" +
                     "</td>");
                    tableMember.append(row);
                });
            }
        })
    })