<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action = "<?=base_url("updatekomponen/" . $komponen->id)?>">
    <div>
        <label for="nama_product">Nama Product</label>
        <input id="nama" name="nama" type="text" value="<?=$komponen->nama?>"></input>
    </div>
    <br>
    <div>
        <label for="kategori" name="kategori">kategori</label>
        <input id="kategori" name="kategori" value="<?=$komponen->kategori?>"></input>
    </div>
    <br>
    <div>
        <label for="Deskripsi" name="deskripsi">Deskripsi</label>
        <input id="Deskripsi" name="deskripsi" value="<?=$komponen->deskripsi?>"></input>
    </div>
    <br>
    <div>
        <label for="Deskripsi" name="deskripsi">Harga</label>
        <input id="Deskripsi" name="harga" value="<?=$komponen->harga?>"></input>
    </div> 
    <button type="submit" >Update</button>   
    </form>
</body>
</html>