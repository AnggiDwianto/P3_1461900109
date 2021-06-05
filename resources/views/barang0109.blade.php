<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data barang</title>
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

    <a class="tambah" href="{{ route('barang0109.create') }}">Tambah Data </a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>id</th>
                <th>Nama barang</th>
                <th>harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($barang0109 as $br)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $br->id }}</td>
                <td>{{ $br->nama_brg }}</td>
                <td>{{ $br->harga }}</td>
                <td>
                    <a href="{{ url('barang0109/' . $br->id ."/edit") }}">Edit</a>
                    |
                   <form action="{{ url('barang0109/' . $br->id) }}" method="post">
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