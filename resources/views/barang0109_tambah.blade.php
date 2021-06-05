<form action="{{ route('barang0109.store') }}" method="post">
    @csrf
    ID : <input type="text" name="id">
    NAMA BARANG : <input type="text" name="nama_brg">
    HARGA : <input type="text" name="harga">
    <button type="submit">Simpan</button>
</form>