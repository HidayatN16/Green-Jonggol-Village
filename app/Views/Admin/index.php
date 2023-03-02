<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

<body>
    <div>
        <a href="<?php echo base_url() . 'index.php/Login/logout' ?>">Logout</a>
        <a href="<?= base_url() . 'index.php/Admin_Controller/list_account' ?>">List Akun</a>
    </div>

    <div class="table-responsive">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Konsumen</th>
                    <th>KTP Suami</th>
                    <th>KTP Istri</th>
                    <th>NPWP</th>
                    <th>BPJS</th>
                    <th>Kartu Keluarga</th>
                    <th>Buku Nikah</th>
                    <th>Domisili</th>
                    <th>SK Tidak Memiliki Rumah</th>
                    <th>SK Istri Tidak Bekerja</th>
                    <th>SK Bekerja</th>
                    <th>Slip Gaji</th>
                    <th>Rekening Koran</th>
                    <th>Pajak Penghasilan</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            foreach ($berkas as $row) {        ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->nama_lengkap ?></td>
                    <td>
                        <?php if ($row->ktp_suami == null) {  ?>
                            <p>Kosong</p>
                        <?php } else { ?>
                            <a href="<?= base_url() . $row->ktp_suami ?>">View</a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($row->ktp_istri == null) {  ?>
                            <p>Kosong</p>
                        <?php } else { ?>
                            <a href="<?= base_url() . $row->ktp_istri ?>">View</a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($row->npwp == null) {  ?>
                            <p>Kosong</p>
                        <?php } else { ?>
                            <a href="<?= base_url() . $row->npwp ?>">View</a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($row->bpjs == null) {  ?>
                            <p>Kosong</p>
                        <?php } else { ?>
                            <a href="<?= base_url() . $row->bpjs ?>">View</a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($row->kk == null) {  ?>
                            <p>Kosong</p>
                        <?php } else { ?>
                            <a href="<?= base_url() . $row->kk ?>">View</a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($row->buku_nikah == null) {  ?>
                            <p>Kosong</p>
                        <?php } else { ?>
                            <a href="<?= base_url() . $row->buku_nikah ?>">View</a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($row->domisili == null) {  ?>
                            <p>Kosong</p>
                        <?php } else { ?>
                            <a href="<?= base_url() . $row->domisili ?>">View</a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($row->sk_non_rumah == null) {  ?>
                            <p>Kosong</p>
                        <?php } else { ?>
                            <a href="<?= base_url() . $row->sk_non_rumah ?>">View</a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($row->sk_istri_non_kerja == null) {  ?>
                            <p>Kosong</p>
                        <?php } else { ?>
                            <a href="<?= base_url() . $row->sk_istri_non_kerja ?>">View</a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($row->sk_kerja == null) {  ?>
                            <p>Kosong</p>
                        <?php } else { ?>
                            <a href="<?= base_url() . $row->sk_kerja ?>">View</a>
                        <?php } ?>

                    <td>
                        <?php if ($row->slip_gaji == null) {  ?>
                            <p>Kosong</p>
                        <?php } else { ?>
                            <a href="<?= base_url() . $row->slip_gaji ?>">View</a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($row->rekening_koran == null) {  ?>
                            <p>Kosong</p>
                        <?php } else { ?>
                            <a href="<?= base_url() . $row->rekening_koran ?>">View</a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($row->pph == null) {  ?>
                            <p>Kosong</p>
                        <?php } else { ?>
                            <a href="<?= base_url() . $row->pph ?>">View</a>
                        <?php } ?>
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