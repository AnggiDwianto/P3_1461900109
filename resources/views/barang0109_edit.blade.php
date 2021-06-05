<form action="{{ url('barang0109/' . $barang0109->id ) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    ID : <input type="text" name="id" value="{{ $barang0109->id }}">
    NAMA BARANG: <input type="text" name="nama_brg" value="{{ $barang0109->nama_brg }}">
    HARGA : <input type="text" name="harga" value="{{ $barang0109->harga }}">
    <button type="submit">Simpan</button>
</form>