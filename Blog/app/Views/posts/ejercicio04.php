<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<h1 align="center">04. Mostrar una tabla con el username, nombre completo del usuario, el email y
una columna con el género (hombre/mujer) de todos los posts creados en el
año 2022</h1>

<table border=1 align="center">
    <thead>
        <tr>
            <th>USERNAME</th>
            <th>NOMBRE REAL</th>
            <th>EMAIL</th>
            <th>GÉNERO</th>
            <th>FECHA DE CREACIÓN</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td align="center"><?= $post['username'] ?></td>
                <td align="center"><?= $post['nombreCompleto'] ?></td>
                <td align="center"><?= $post['website'] ?></td>                
                <?php if ($post['gender'] == "f"): ?>
                <td align="center">Mujer</td>
                <?php else: ?>
                <td align="center">Hombre</td>
                <?php endif; ?>
                <td align="center"><?= $post['created_at'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>