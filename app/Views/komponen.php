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
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($komponen as $k) : ?>
            <tr>
                <td><?= $k->nama; ?></td>
                <td><?= $k->kategori; ?></td>
                <td><?= $k->deskripsi; ?></td>
                <td><?= $k->harga; ?></td>
                <td>
                    <a href="<?=base_url('editkomponen/' . $k->id)?>">edit</a>
                    <a href="<?=base_url('deletekomponen/' . $k->id)?>">hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
