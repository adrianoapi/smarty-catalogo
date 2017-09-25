<html>
    <head>
        <title>{$title}</title>
    </head>
    <body>
        <div align="center">
            <table boErder="0" cellspacing="0" width="60%">
                <tr>
                    <td width="50%" bgcolor="#E8E8E8">
                        Últimas notícias
                    </td>
                    <td width="50%" bgcolor="#E8E8E8">
                        <p algin="right"><strong>{$smarty.now|date_format:"%d/%m/%Y"}</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="100%" colspan="2" bgcolor="#FBFBFB">
                        <br>
                        {section name=i loop=$titulos}
                            <p>
                                <strong><u>{$titulos[i]}</u></strong>
                                <i>({$datas[i]|date_format:"%d/%m/%Y %H:%M"})</i><br>
                                {$textos[i]|truncate:150}
                                [<a href="mostra_noticia.php?id={$ids[i]}">Leia mais</a>]
                            </p>
                        {/section}
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>