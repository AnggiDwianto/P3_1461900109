<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data pelanggan</title>
<style>
table{
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}
thead {
    background-color : #f2f2f2;
}
th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
    padding: 8px 16px;
    text-decoration: none;
}
</style>
<head>

<body>
    <div style="overflow-x: auto">

    <a class="tambah" href="{{ route('pelanggan0109.create') }}">Tambah Data </a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>id</th>
                <th>Nama pelanggan</th>
                <th>alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($pelanggan0109 as $plg)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $plg1->id }}</td>
                <td>{{ $plg1->nama_plg }}</td>
                <td>{{ $plg1->alamat }}</td>
                <td>
                    <a href="{{ url('pelaggan0109/' . $plg1->id ."/edit") }}">Edit</a>
                    |
                   <form action="{{ url('pelanggan0109/' . $plg1->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit">Delete</button>
                   </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</body>