@extends('layout.container')

@section('content')
    <h1>List Nilai</h1>
    <hr/>
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>Standar Kompetensi</th>
            <th>Guru</th>
            <th>Nilai Angka</th>
            <th>Nilai Huruf</th>
        </tr>
        </thead>
        <tbody>
        @foreach($nilai as $row)
            <tr>
                <td>{{$row->standarKompetensi->nama}}</td>
                <td>{{$row->guru->nama}}</td>
                <td>{{$row->angka}}</td>
                <td>{{$row->huruf}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <hr/>
@endsection