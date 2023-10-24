<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<h1 align="center">03. Mostrar una tabla con el nombre completo del usuario, su email y teléfono
además del título del post con status 0.</h1>

<table border=1 align="center">
    <thead>
        <tr>
            <th>NOMBRE COMPLETO</th>
            <th>EMAIL</th>
            <th>TELÉFONO</th>
            <th>TÍTULO DEL POST</th>
            <th>STATUS</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td align="center"><?= $post['nombreCompleto'] ?></td>
                <td align="center"><?= $post['website'] ?></td>
                <td align="center"><?= $post['phone'] ?></td>
                <td align="center"><?= $post['title'] ?></td>
                <td align="center"><?= $post['status'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>