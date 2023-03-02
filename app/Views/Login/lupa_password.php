<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
</head>

<body>
    <form action="<?= base_url().'index.php/Login/forgot'?>" method="post">
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>