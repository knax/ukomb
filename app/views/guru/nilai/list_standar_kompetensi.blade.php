@extends('layout.container')

@section('content')
    <h1>Pilih Standar Kompetensi</h1>

    <hr/>

    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>Standar Kompetensi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($standarKompetensi as $row)
            <tr>
                <td><a href="{{action('guru.beri_nilai.form', ['siswaId' => $siswaId, 'standarKompetensiId' => $row->id])}}">{{$row->nama}}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection