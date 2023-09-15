<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product</title>
</head>
<body>
    <h1>List Product</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nama Product</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($komponen as $k) : ?>
            <tr>
                <td><?= $k->nama; ?></td>
                <td><?= $k->kategori; ?></td>
                <td><?= $k->deskripsi; ?></td>
                <td><?= $k->harga; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
