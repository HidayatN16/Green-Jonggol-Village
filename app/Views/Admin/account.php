<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Account</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

<body>
    <div>
        <a href="<?= base_url().'index.php/Admin_Controller/create_account' ?>">Tambah Akun</a>
    </div>
    <div class="table-responsive">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama Konsumen</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Option</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            foreach ($user as $row) {        ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->username ?></td>
                        <td>
                            <?php if ($row->nama_lengkap == null) {  ?>
                                <p>Kosong</p>
                            <?php } else { ?>
                                <p><?= $row->nama_lengkap ?></p>
                            <?php } ?>
                        </td>
                        <td>
                            <?php if ($row->email == null) {  ?>
                                <p>Kosong</p>
                            <?php } else { ?>
                                <p><?= $row->email ?></p>
                            <?php } ?>
                        </td>
                        <td>
                            <?php if ($row->nohp == null) {  ?>
                                <p>Kosong</p>
                            <?php } else { ?>
                                <p><?= $row->nohp ?></p>
                            <?php } ?>
                        </td>
                        <td>
                            <a href="">Reset</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>
            <?php } ?>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>