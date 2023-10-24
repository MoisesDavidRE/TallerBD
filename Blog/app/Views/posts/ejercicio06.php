<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style>
h1{
    font-family: 'Open Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
table{
    border-radius:  5px;
    border-style: hidden;
    border-style: dashed;
    font-family: 'Open Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
thead{
    background-color: gainsboro;
}
tbody{
    background-color: ;
}
</style>
<h1 align="center">06. Mostrar una tabla con los siguientes datos: cantidad total de posts por
categoría, cantidad total de posts escritos por autor</h1>

<table border=1 align="center">
    <thead>
        <tr>
        <th>POSTS ESCRITOS POR CATEGORÍA</th>
        <th>POSTS ESCRITOS POR AUTOR</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td align="center">
                <?php foreach ($postsPorCategoria as $ppc):?>
                <?= $ppc['category'].': '.$ppc['ppc'].'<br>' ?>
                <?php endforeach; ?>
            </td>
            <td align="center">
                <?php foreach ($postPorAutor as $ppa):?>
                <?= $ppa['username'].': '.$ppa['ppa'].'<br>' ?>
                <?php endforeach; ?>
            </td>
        </tr>
    </tbody>
</table>