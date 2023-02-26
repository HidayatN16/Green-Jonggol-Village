<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Berkas</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?= base_url() . 'assets/js/berkas_input.js' ?>"></script>
    <script src="<?= base_url() . 'assets/js/preview_img.js' ?>"></script>
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .upload {
            margin-bottom: 20px;
        }

        .preview {
            display: none;
        }

        .preview img {
            max-width: 400px;
            max-height: 400px;
        }
    </style>
</head>

<body>

    <form action="<?= base_url() . 'index.php/User_Controller/submit_ktpsuami' ?>" id="form" method="post" enctype="multipart/form-data">
        <div>
            <label for="">KTP Suami</label>
            <input type="file" name="ktpsuami" id="ktpsuami" onchange="uploadktpsuami()">
            <img src="#" alt="KTP Suami" id="previewImage">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">KTP Istri</label>
            <input type="file" name="ktpistri" id="ktpistri" onchange="uploadktpistri()">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">NPWP</label>
            <input type="file" name="npwp" id="npwp" onchange="uploadnpwp()">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">BPJS</label>
            <input type="file" name="bpjs" id="bpjs" onchange="uploadbpjs()">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">KK</label>
            <input type="file" name="kk" id="kk" onchange="uploadkk()">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">Buku Nikah</label>
            <input type="file" name="nikah" id="nikah" onchange="uploadnikah()">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">Domisili</label>
            <input type="file" name="domisili" id="domisili" onchange="uploaddomisili()">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">Surat Keterangan Tidak Memiliki Rumah</label>
            <input type="file" name="sknonrumah" id="sknonrumah" onchange="uploadsknonrumah()">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">Surat Keterangan Istri Tidak Bekerja</label>
            <input type="file" name="skistrinonkerja" id="skistrinonkerja" onchange="uploadskistrinonkerja()">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">Surat Keterangan Kerja</label>
            <input type="file" name="skkerja" id="skkerja" onchange="uploadskkerja()">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">Slip Gaji</label>
            <input type="file" name="slip" id="slip" onchange="uploadslip()">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">Rekening Koran</label>
            <input type="file" name="rekkoran" id="rekkoran" onchange="uploadrekkoran()">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">PPH</label>
            <input type="file" name="pph" id="pph" onchange="uploadpph()">
        </div>
    </form>
    <script>
        var base_url = '<?= base_url() ?>';

        document.getElementById('ktpsuami').addEventListener('change', function() {
            displayPreviewImage(this);
        });
        
    </script>

</body>

</html>