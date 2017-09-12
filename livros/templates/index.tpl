<html>
    <head>
        <title>{$titulo}</title>
    </head>
    <body>
        <h2 class="center">{$titulo}</h2>
        <table>
            <tr bgcolor="#FFFF00">
                <td>Livro</td>
                <td>Autor</td>
            </tr>
            {section name=i loop=$livros}
                <tr bgcolor="{cycle values="#eeeeee,#d0d0d0"}">
                    <td>{$livros[i]}</td>
                    <td>{$autores[i]}</td>
                </tr>
            {/section}
        </table>
    </body>
</html>