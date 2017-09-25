<html>
    <head>
        <title>{$title}</title>
    </head>
    <body>
        <h1>{$titulo}</h1><br>
        <i>{$data|date_format:"Data %d/%m/%Y Hora: %H:%M"}</i>
        <hr>
        <p>{$texto}</p>
        <p align="center"><a href="javascript:history.back()">Voltar</a></p>
    </body>
</html>