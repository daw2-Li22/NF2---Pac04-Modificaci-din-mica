<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js">
    </script>
    <title></title>
</head>

<body>
    Buscar <input type="" name="" id="i1">
    <ul id="uv"></ul>
    <script type="text/javascript">
        $('#i1').keyup(function() {
            var v = $(this).val()
            $.get("buscador.php?a=" + v, function(result) {
                console.log(result)
                if (result == 1) {
                    alert('no encuentra parabla,añadiando nuevo')
                } else {
                    $('#uv').html(result);



                }
            });
        })
    </script>
</body>

</html>