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
            <img src="#" alt="" id="a1">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">KTP Istri</label>
            <input type="file" name="ktpistri" id="ktpistri" onchange="uploadktpistri()">
            <img src="#" alt="" id="a2">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">NPWP</label>
            <input type="file" name="npwp" id="npwp" onchange="uploadnpwp()">
            <img src="#" alt="" id="a3">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">BPJS</label>
            <input type="file" name="bpjs" id="bpjs" onchange="uploadbpjs()">
            <img src="#" alt="" id="a4">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">KK</label>
            <input type="file" name="kk" id="kk" onchange="uploadkk()">
            <img src="#" alt="" id="a5">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">Buku Nikah</label>
            <input type="file" name="nikah" id="nikah" onchange="uploadnikah()">
            <img src="#" alt="" id="a6">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">Domisili</label>
            <input type="file" name="domisili" id="domisili" onchange="uploaddomisili()">
            <img src="#" alt="" id="a7">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">Surat Keterangan Tidak Memiliki Rumah</label>
            <input type="file" name="sknonrumah" id="sknonrumah" onchange="uploadsknonrumah()">
            <img src="#" alt="" id="a8">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">Surat Keterangan Istri Tidak Bekerja</label>
            <input type="file" name="skistrinonkerja" id="skistrinonkerja" onchange="uploadskistrinonkerja()">
            <img src="#" alt="" id="a9">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">Surat Keterangan Kerja</label>
            <input type="file" name="skkerja" id="skkerja" onchange="uploadskkerja()">
            <img src="#" alt="" id="a10">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">Slip Gaji</label>
            <input type="file" name="slip" id="slip" onchange="uploadslip()">
            <img src="#" alt="" id="a11">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">Rekening Koran</label>
            <input type="file" name="rekkoran" id="rekkoran" onchange="uploadrekkoran()">
            <img src="#" alt="" id="a12">
        </div>
    </form>
    <form action="" enctype="multipart/form-data" method="post">
        <div>
            <label for="">PPH</label>
            <input type="file" name="pph" id="pph" onchange="uploadpph()">
            <img src="#" alt="" id="a13">
        </div>
    </form>
    <script>
        var base_url = '<?= base_url() ?>';

        document.getElementById('ktpsuami').addEventListener('change', function() {
            a1(this);
        });

        document.getElementById('ktpistri').addEventListener('change', function() {
            a2(this);
        });

        document.getElementById('npwp').addEventListener('change', function() {
            a3(this);
        });

        document.getElementById('bpjs').addEventListener('change', function() {
            a4(this);
        });

        document.getElementById('kk').addEventListener('change', function() {
            a5(this);
        });

        document.getElementById('nikah').addEventListener('change', function() {
            a6(this);
        });

        document.getElementById('domisili').addEventListener('change', function() {
            a7(this);
        });

        document.getElementById('sknonrumah').addEventListener('change', function() {
            a8(this);
        });

        document.getElementById('skistrinonkerja').addEventListener('change', function() {
            a9(this);
        });

        document.getElementById('skkerja').addEventListener('change', function() {
            a10(this);
        });

        document.getElementById('slip').addEventListener('change', function() {
            a11(this);
        });

        document.getElementById('rekkoran').addEventListener('change', function() {
            a12(this);
        });

        document.getElementById('pph').addEventListener('change', function() {
            a13(this);
        });
    </script>

</body>

</html>