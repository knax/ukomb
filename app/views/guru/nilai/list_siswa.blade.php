@extends('layout.container')

@section('content')
    <h1>Beri nilai</h1>

    <hr/>

    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>Nama Siswa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($siswa as $row)
            <tr>
                <td><a href="{{action('guru.beri_nilai.standar_kompetensi', ['siswaId' => $row->id])}}">{{$row->nama}}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection