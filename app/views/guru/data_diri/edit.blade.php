@extends('layout.container')

@section('content')
    <form class="form-horizontal" action="{{action('guru.data_diri.edit')}}" method="post"
          enctype="multipart/form-data">
        <fieldset>
            <legend>Edit</legend>
            <div class="form-group">
                <label for="nip" class="col-md-2 control-label">NIP</label>

                <div class="col-md-10">
                    <input type="text" class="form-control" id="nip" name="nip" value="{{$guru->nip}}">
                </div>
            </div>
            <div class="form-group">
                <label for="nama" class="col-md-2 control-label">Nama</label>

                <div class="col-md-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$guru->nama}}">
                </div>
            </div>
            <div class="form-group">
                <label for="alamat" class="col-md-2 control-label">Alamat</label>

                <div class="col-md-10">
                    <textarea name="alamat" class="form-control" id="alamat" cols="30"
                              rows="10">{{$guru->alamat}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="telepon" class="col-md-2 control-label">Telepon</label>

                <div class="col-md-10">
                    <input type="text" class="form-control" id="telepon" name="telepon"
                           value="{{$guru->telepon}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
            <hr/>
        </fieldset>
    </form>
@endsection