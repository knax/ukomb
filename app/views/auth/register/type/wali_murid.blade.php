@extends('layout.container')

@section('content')
    <h1>Register Wali Murid</h1>
    <hr/>
    <div class="well">
        <form class="form-horizontal" action="{{action('auth.register')}}" method="post">
            <fieldset>
                @include('auth.include.previous_data')
                <div class="form-group">
                    <label for="nisn_murid" class="col-md-2 control-label">NISN Murid</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nisn_murid" name="nisn_murid">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_ayah" class="col-md-2 control-label">Nama Ayah</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pekerjaan_ayah" class="col-md-2 control-label">Pekerjaan Ayah</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_ibu" class="col-md-2 control-label">Nama Ibu</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pekerjaan_ibu" class="col-md-2 control-label">Pekerjaan Ibu</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu">
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-10">
                        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="telepon" class="col-md-2 control-label">Telepon</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="telepon" name="telepon">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection