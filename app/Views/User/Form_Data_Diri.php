<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas Diri</title>
</head>

<body>
    <form action="<?= base_url().'index.php/User_Controller/submit_id' ?>" method="post">
        <?php  foreach ($user as $data) { ?>
        <div>
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" value="<?= $data->nama_lengkap ?>" required>
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" value="<?= $data->email ?>" required>
        </div>
        <div>
            <label for="">No Hp</label>
            <input type="text" name="nohp" value="<?= $data->nohp ?>" required>
        </div>
        <?php } ?>
        <button type="submit">Submit</button>
    </form>
</body>

</html>