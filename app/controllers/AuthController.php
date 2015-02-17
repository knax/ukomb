<?php

class AuthController extends \BaseController
{

    public function login()
    {
        $username = Input::get('username');
        $password = Input::get('password');

        Auth::attempt([
            'username' => $username,
            'password' => $password
        ]);

        return Redirect::action('homepage');
    }

    public function loginForm()
    {
        return View::make('auth.login');
    }

    public function register()
    {
        $user = new User();
        $user->username = Input::get('username');
        $user->password = Hash::make(Input::get('password'));
        $user->type = Input::get('type');
        $user->active = false;

        $identifier = 0;
        if (Input::get('type') === 'siswa') {
            $identifier = $this->registerSiswa();
        } elseif (Input::get('type') === 'wali_murid') {
            $identifier = $this->registerWaliMurid();
        } elseif (Input::get('guru') === 'guru') {
            $identifier = $this->registerGuru();
        }

        $user->identifier = $identifier;

        $user->save();

        Auth::login($user);

        return Redirect::action('homepage');
    }

    private function registerSiswa()
    {
        $siswa = new Siswa();
        $siswa->nisn = Input::get('nisn');
        $siswa->nama = Input::get('nama');
        $siswa->alamat = Input::get('alamat');
        $siswa->tanggal_lahir = Input::get('tanggal_lahir');
        $siswa->foto = Input::get('foto');
        $siswa->kompetensi_keahlian_id = Input::get('jurusan');

        $siswa->save();

        return $siswa->id;
    }

    private function registerGuru()
    {
        $guru = new Guru();

        $guru->nama = Input::get('nama');
        $guru->nip = Input::get('nip');
        $guru->alamat = Input::get('alamat');
        $guru->telepon = Input::get('telepon');
        $guru->kompetensi_keahlian_id = Input::get('jurusan');

        $guru->save();

        return $guru->id;
    }

    private function registerWaliMurid()
    {
        $waliMurid = new WaliMurid();

        $waliMurid->nama_ayah = Input::get('nama_ayah');
        $waliMurid->pekerjaan_ayah = Input::get('pekerjaan_ayah');
        $waliMurid->nama_ibu = Input::get('nama_ibu');
        $waliMurid->pekerjaan_ibu = Input::get('pekerjaan_ibu');
        $waliMurid->alamat = Input::get('alamat');
        $waliMurid->telepon = Input::get('telepon');

        $waliMurid->save();

       return $waliMurid->id;
    }

    public function registerForm()
    {
        return View::make('auth.register');
    }

    public function registerNext()
    {
        $username = Input::get('username');
        $password = Input::get('password');
        $confirmPassword = Input::get('confirm_password');
        $type = Input::get('type');

        if ($password != $confirmPassword) {
            return;
        }

        $data = [
            'user' => [
                'username' => $username,
                'password' => $password,
                'type' => $type
            ],
            'kompetensiKeahlian' => KompetensiKeahlian::all()
        ];

        return View::make('auth.register.type.' . $type)->with($data);
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::action('auth.login');
    }

}