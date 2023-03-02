<?php

namespace App\Controllers;

use App\Models\User_Model;

class User_Controller extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $a = $this->session->get('username');
        $Where = [
            'username' => $a
        ];
        $model = new User_Model();
        $check = $model->id_check($Where)->getRow();

        if ($a == null) {
            return redirect()->to(base_url() . 'index.php/Home/login');
        } else {
            if ($check->nama_lengkap == null || $check->nohp == null || $check->email == null) {
                echo 'Lengkapi Data Diri Terlebih Dahulu Sebelum Upload Berkas';
                $idcheck['user'] = $model->id_check($Where)->getResult();
                return view('User/Form_Data_Diri', $idcheck);
            } else {
                $id = $this->session->get('iduser');
                $berkascheck['berkas'] = $model->berkas_check($id);
                echo 'Form Upload';
                return view('User/Form_Upload_Berkas', $berkascheck);
            }
        }
    }

    public function submit_id()
    {
        $kd = $this->session->get('iduser');
        $nama = $this->request->getPost('nama');
        $nohp = $this->request->getPost('nohp');
        $email = $this->request->getPost('email');

        $id = [
            'id_user' => $kd
        ];
        $data = [
            'nama_lengkap' => $nama,
            'nohp' => $nohp,
            'email' => $email
        ];

        $model = new User_Model();
        $model->submit_id($data, $id);
        $model->add_field_berkas($id);

        return redirect()->to(base_url() . 'index.php/User_Controller/index');
    }

    public function submit_ktpsuami()
    {
        $kd = $this->session->get('iduser');
        $file = $this->request->getFile('ktpsuami');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $moved = $file->move('Berkas/ktp_suami', $newName);
            $lokasi = 'Berkas/ktp_suami/' . $newName;
            if ($moved) {
                $id = ['id_user' => $kd];
                $data = ['ktp_suami' => $lokasi];

                $model = new User_Model();
                $model->submit_berkas($data, $id);
                return 'File berhasil diunggah: ' . $file->getName();
            } else {
                return 'Query Error';
            }
        } else {
            return 'File gagal diunggah: ' . $file->getErrorString();
        }
    }

    public function submit_ktpistri()
    {
        $kd = $this->session->get('iduser');
        $file = $this->request->getFile('ktpistri');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $moved = $file->move('Berkas/ktp_istri', $newName);
            $lokasi = 'Berkas/ktp_istri/' . $newName;
            if ($moved) {
                $id = ['id_user' => $kd];
                $data = ['ktp_istri' => $lokasi];

                $model = new User_Model();
                $model->submit_berkas($data, $id);
                return 'File berhasil diunggah: ' . $file->getName();
            } else {
                return 'Query Error';
            }
        } else {
            return 'File gagal diunggah: ' . $file->getErrorString();
        }
    }

    public function submit_npwp()
    {
        $kd = $this->session->get('iduser');
        $file = $this->request->getFile('npwp');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $moved = $file->move('Berkas/npwp', $newName);
            $lokasi = 'Berkas/npwp/' . $newName;
            if ($moved) {
                $id = ['id_user' => $kd];
                $data = ['npwp' => $lokasi];

                $model = new User_Model();
                $model->submit_berkas($data, $id);
                return 'File berhasil diunggah: ' . $file->getName();
            } else {
                return 'Query Error';
            }
        } else {
            return 'File gagal diunggah: ' . $file->getErrorString();
        }
    }

    public function submit_bpjs()
    {
        $kd = $this->session->get('iduser');
        $file = $this->request->getFile('bpjs');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $moved = $file->move('Berkas/bpjs', $newName);
            $lokasi = 'Berkas/bpjs/' . $newName;
            if ($moved) {
                $id = ['id_user' => $kd];
                $data = ['bpjs' => $lokasi];

                $model = new User_Model();
                $model->submit_berkas($data, $id);
                return 'File berhasil diunggah: ' . $file->getName();
            } else {
                return 'Query Error';
            }
        } else {
            return 'File gagal diunggah: ' . $file->getErrorString();
        }
    }

    public function submit_kk()
    {
        $kd = $this->session->get('iduser');
        $file = $this->request->getFile('kk');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $moved = $file->move('Berkas/kk', $newName);
            $lokasi = 'Berkas/kk/' . $newName;
            if ($moved) {
                $id = ['id_user' => $kd];
                $data = ['kk' => $lokasi];

                $model = new User_Model();
                $model->submit_berkas($data, $id);
                return 'File berhasil diunggah: ' . $file->getName();
            } else {
                return 'Query Error';
            }
        } else {
            return 'File gagal diunggah: ' . $file->getErrorString();
        }
    }

    public function submit_nikah()
    {
        $kd = $this->session->get('iduser');
        $file = $this->request->getFile('nikah');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $moved = $file->move('Berkas/nikah', $newName);
            $lokasi = 'Berkas/nikah/' . $newName;
            if ($moved) {
                $id = ['id_user' => $kd];
                $data = ['buku_nikah' => $lokasi];

                $model = new User_Model();
                $model->submit_berkas($data, $id);
                return 'File berhasil diunggah: ' . $file->getName();
            } else {
                return 'Query Error';
            }
        } else {
            return 'File gagal diunggah: ' . $file->getErrorString();
        }
    }

    public function submit_domisili()
    {
        $kd = $this->session->get('iduser');
        $file = $this->request->getFile('domisili');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $moved = $file->move('Berkas/domisili', $newName);
            $lokasi = 'Berkas/domisili/' . $newName;
            if ($moved) {
                $id = ['id_user' => $kd];
                $data = ['domisili' => $lokasi];

                $model = new User_Model();
                $model->submit_berkas($data, $id);
                return 'File berhasil diunggah: ' . $file->getName();
            } else {
                return 'Query Error';
            }
        } else {
            return 'File gagal diunggah: ' . $file->getErrorString();
        }
    }

    public function submit_sknonrumah()
    {
        $kd = $this->session->get('iduser');
        $file = $this->request->getFile('sknonrumah');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $moved = $file->move('Berkas/sk_non_rumah', $newName);
            $lokasi = 'Berkas/sk_non_rumah/' . $newName;
            if ($moved) {
                $id = ['id_user' => $kd];
                $data = ['sk_non_rumah' => $lokasi];

                $model = new User_Model();
                $model->submit_berkas($data, $id);
                return 'File berhasil diunggah: ' . $file->getName();
            } else {
                return 'Query Error';
            }
        } else {
            return 'File gagal diunggah: ' . $file->getErrorString();
        }
    }

    public function submit_skistrinonkerja()
    {
        $kd = $this->session->get('iduser');
        $file = $this->request->getFile('skistrinonkerja');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $moved = $file->move('Berkas/sk_istri_non_kerja', $newName);
            $lokasi = 'Berkas/sk_istri_non_kerja/' . $newName;
            if ($moved) {
                $id = ['id_user' => $kd];
                $data = ['sk_istri_non_kerja' => $lokasi];

                $model = new User_Model();
                $model->submit_berkas($data, $id);
                return 'File berhasil diunggah: ' . $file->getName();
            } else {
                return 'Query Error';
            }
        } else {
            return 'File gagal diunggah: ' . $file->getErrorString();
        }
    }

    public function submit_skkerja()
    {
        $kd = $this->session->get('iduser');
        $file = $this->request->getFile('skkerja');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $moved = $file->move('Berkas/sk_kerja', $newName);
            $lokasi = 'Berkas/sk_kerja/' . $newName;
            if ($moved) {
                $id = ['id_user' => $kd];
                $data = ['sk_kerja' => $lokasi];

                $model = new User_Model();
                $model->submit_berkas($data, $id);
                return 'File berhasil diunggah: ' . $file->getName();
            } else {
                return 'Query Error';
            }
        } else {
            return 'File gagal diunggah: ' . $file->getErrorString();
        }
    }

    public function submit_slip()
    {
        $kd = $this->session->get('iduser');
        $file = $this->request->getFile('slip');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $moved = $file->move('Berkas/slip_gaji', $newName);
            $lokasi = 'Berkas/slip_gaji/' . $newName;
            if ($moved) {
                $id = ['id_user' => $kd];
                $data = ['slip_gaji' => $lokasi];

                $model = new User_Model();
                $model->submit_berkas($data, $id);
                return 'File berhasil diunggah: ' . $file->getName();
            } else {
                return 'Query Error';
            }
        } else {
            return 'File gagal diunggah: ' . $file->getErrorString();
        }
    }

    public function submit_rekkoran()
    {
        $kd = $this->session->get('iduser');
        $file = $this->request->getFile('rekkoran');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $moved = $file->move('Berkas/rekening_koran', $newName);
            $lokasi = 'Berkas/rekening_koran/' . $newName;
            if ($moved) {
                $id = ['id_user' => $kd];
                $data = ['rekening_koran' => $lokasi];

                $model = new User_Model();
                $model->submit_berkas($data, $id);
                return 'File berhasil diunggah: ' . $file->getName();
            } else {
                return 'Query Error';
            }
        } else {
            return 'File gagal diunggah: ' . $file->getErrorString();
        }
    }

    public function submit_pph()
    {
        $kd = $this->session->get('iduser');
        $file = $this->request->getFile('pph');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $moved = $file->move('Berkas/pph', $newName);
            $lokasi = 'Berkas/pph/' . $newName;
            if ($moved) {
                $id = ['id_user' => $kd];
                $data = ['pph' => $lokasi];

                $model = new User_Model();
                $model->submit_berkas($data, $id);
                return 'File berhasil diunggah: ' . $file->getName();
            } else {
                return 'Query Error';
            }
        } else {
            return 'File gagal diunggah: ' . $file->getErrorString();
        }
    }
}
