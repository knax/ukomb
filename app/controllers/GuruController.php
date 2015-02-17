<?php

class GuruController extends BaseController
{

    public function beriNilai($siswaId, $standarKompetensiId)
    {
        $user = Auth::user();
        $guru = Guru::find($user->identifier);
        $siswa = Siswa::find($siswaId);
        $standarKompetensi = Siswa::find($standarKompetensiId);

        $nilai = new Nilai();

        $nilai->guru()->associate($guru);
        $nilai->siswa()->associate($siswa);
        $nilai->standarKompetensi()->associate($standarKompetensi);

        $nilai->angka = Input::get('nilai_angka');
        $nilai->huruf = Input::get('nilai_huruf');

        $nilai->save();

        return Redirect::action('homepage');
    }

    public function listSiswa()
    {
        $user = Auth::user();
        $guru = Guru::find($user->identifier);

        $data['siswa'] = $guru->kompetensiKeahlian->siswa;
        return View::make('guru.nilai.list_siswa')->with($data);
    }

    public function listStandarKompetensi($siswaId) {
        $user = Auth::user();

        $guru = Guru::find($user->identifier);

        $data['standarKompetensi'] = $guru->kompetensiKeahlian->standarKompetensi;
        $data['siswaId'] = $siswaId;

        return View::make('guru.nilai.list_standar_kompetensi')->with($data);
    }

    public function beriNilaiForm($siswaId, $standarKompetensiId)
    {
        $data['siswa'] = Siswa::find($siswaId);
        $data['standarKompetensi'] = StandarKompetensi::find($standarKompetensiId);

        return View::make('guru.nilai.beri_nilai')->with($data);
    }

    public function dataDiri()
    {
        $user = Auth::user();

        $data['guru'] = Guru::find($user->identifier);
        return View::make('guru.data_diri.index')->with($data);
    }

    public function editDataDiriForm()
    {
        $user = Auth::user();

        $data['guru'] = Guru::find($user->identifier);

        return View::make('guru.data_diri.edit')->with($data);
    }

    public function editDataDiri()
    {
        $user = Auth::user();

        $guru = Guru::find($user->identifier);

        $guru->nip = Input::get('nip', $guru->nip);
        $guru->nama = Input::get('nama', $guru->nama);
        $guru->alamat = Input::get('alamat', $guru->alamat);
        $guru->telepon = Input::get('telepon', $guru->telepon);

        $guru->save();

        return Redirect::action('guru.data_diri');
    }
}
