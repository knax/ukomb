@extends('layout.container')

@section('content')
    <h1>Beri Nilai</h1>
    <form class="form-horizontal" action="{{action('guru.beri_nilai', ['siswaId' => $siswa->id, 'standarKompetensiId' => $standarKompetensi->id])}}" method="post">
        <fieldset>
            <legend>Create</legend>
            <div class="form-group">
                <label class="col-md-2 control-label">Siswa</label>

                <div class="col-md-10">
                    <p class="form-control-static">{{$siswa->nama}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Standar Kompetensi</label>

                <div class="col-md-10">
                    <p class="form-control-static">{{$standarKompetensi->nama}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="nilai_angka">Nilai Angka</label>

                <div class="col-md-10">
                    <input class="form-control" type="text" id="nilai_angka" name="nilai_angka"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="nilai_huruf">Nilai Huruf</label>

                <div class="col-md-10">
                    <input class="form-control" type="text" id="nilai_huruf" name="nilai_huruf"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>
@endsection