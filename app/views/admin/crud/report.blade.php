<h1>{{$table['name']}}</h1>
<div>
<table>
    <thead>
    <tr>
    @foreach($table['field'] as $field)
        <th>{{$field}}</th>
    @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($table['body'] as $row)
        <tr>
            @foreach($row->toArray() as $cell)
                <td>{{$cell}}</td>
            @endforeach
        </tr>
    @endforeach
    <tr></tr>
    </tbody>
</table>
</div>
<style type="text/css">
    table {
        border-collapse: collapse;
        border: 1px solid black;
        width: 100%;
    }
    td, th {
        border: 1px solid black;
    }
    div {
        border: 1px solid black;
    }
</style>