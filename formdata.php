<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html lang="pl">
    <head>
        <meta charset ="UTF-8"/>
        <title>
            FORMDATA TEST
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function ()
            {
                $('#file-sender').submit(function (e)
                {
                    e.preventDefault();
                    var data = new FormData();
                    data.append('name', 'test');
                    data.append('file', $('#file')[0].files[0])
                    $.ajax({
                        url: 'http://mvc/fd.php',
                        data: data,
                        type: 'POST',
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        success: function (msg) {
                            $('#request-respond').html(msg);
                        }
                    });
                    //alert('dziala');
                })

            })
        </script>
    </head>
    <body>
        <div id="request-respond"></div>
        <form action="formdata.php" method="post" id="file-sender" enctype="multipart/form-data">
            <input type="file" id="file">
            <input type="submit" value="Wyslij">
        </form>
    </body>
</html>