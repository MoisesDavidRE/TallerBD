<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<h1 align="center">10. En una tabla, mostrar el último post escrito por cada mujer menor de 30
años y el primer post escrito por cada hombre mayor de 16 años</h1>

<table border=1 align="center">
    <thead>
        <tr>
            <th>USERNAME</th>
            <th>GÉNERO DEL USUARIO</th>
            <th>FECHA DE NACIMIENTO</th>
            <th>ID DE POSTS</th>
            <th>TITULO DEL POSTS</th>
            <th>CONTENIDO DEL POSTS</th>
            <th>FECHA DE CREACIÓN DEL POSTS</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($postsM as $pM): ?>
            <tr>
                <td><?= $pM['username'] ?></td>
                <td><?= $pM['gender'] ?></td>
                <td><?= $pM['birthday'] ?></td>
                <td><?= $pM['ultimoPost'] ?></td>
                <?php foreach ($posts as $p): ?>
                    <?php if($p['id'] == $pM['ultimoPost']):?>
                        <td><?= $p['title'] ?></td>
                        <td><?= $p['content'] ?></td>
                        <td><?= $p['created_at'] ?></td>
                    <?php endif;?>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>

        <?php foreach ($postsH as $pH): ?>
            <tr>
                <td><?= $pH['username'] ?></td>
                <td><?= $pH['gender'] ?></td>
                <td><?= $pH['birthday'] ?></td>
                <td><?= $pH['primerPost'] ?></td>
                <?php foreach ($posts as $p): ?>
                    <?php if($p['id'] == $pH['primerPost']):?>
                        <td><?= $p['title'] ?></td>
                        <td><?= $p['content'] ?></td>
                        <td><?= $p['created_at'] ?></td>
                    <?php endif;?>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>