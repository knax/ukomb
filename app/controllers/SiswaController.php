<?php

class SiswaController extends BaseController
{

    public function listNilai()
    {
        $user = Auth::user();

        $siswa = Siswa::find($user->identifier);

        $data['nilai'] = $siswa->nilai;

        return View::make('siswa.nilai.index')->with($data);
    }

    public function dataDiri()
    {
        $user = Auth::user();

        $data['siswa'] = Siswa::find($user->identifier);
        return View::make('siswa.data_diri.index')->with($data);
    }

    public function editDataDiriForm()
    {
        $user = Auth::user();

        $data['siswa'] = Siswa::find($user->identifier);

        return View::make('siswa.data_diri.edit')->with($data);
    }

    public function editDataDiri()
    {
        $user = Auth::user();

        $siswa = Siswa::find($user->identifier);

        $siswa->nisn = Input::get('nisn', $siswa->nisn);
        $siswa->nama = Input::get('nama', $siswa->nama);
        $siswa->alamat = Input::get('alamat', $siswa->alamat);
        $siswa->tanggal_lahir = Input::get('tanggal_lahir', $siswa->tanggal_lahir);

        $foto = Input::file('foto');

        if(!is_null($foto)) {
            $fotoName = $siswa->id . '.' . $foto->getClientOriginalExtension();
            File::delete(public_path() . '/images/siswa/' . $siswa->foto);
            $foto->move(public_path() . '/images/siswa/', $fotoName);
            $siswa->foto = $fotoName;
        }

        $siswa->save();

        return Redirect::action('siswa.data_diri');
    }
}
