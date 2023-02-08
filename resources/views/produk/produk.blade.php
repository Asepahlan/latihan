<h2> Halaman produk</h2>
<form action="{{ Route('kd_produk') }}" method="post">
    @csrf
    <input type="text" name="cari" id="">
    <input type="submit" value="CARI" name="bCari">
</form>
<a href="{{ url('produk/add') }}"><button>Tambah data</button></a>
<table border=1>
    <tr>
        <th>No</th>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
        <th>Kode Kategori</th>
        <th>Aksi</th>
    </tr>
    @foreach ($produk as $key=>$value )
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $value->id }}</td>
        <td>{{ $value->nm_produk }}</td>
        <td>{{ $value->harga }}</td>
        <td> {{ $value->deskripsi }} </td>
        <td><img src="storage/{{ $value->gambar }}" alt="" srcset=""></td>
        <td> {{ $value->kd_kategori }} </td>
        <td>
            <a href="{{ url('produk/delete'). '/' .$value->id }}"><button>Hapus</button></a>
            <a href="{{ url('produk/edit'). '/' .$value->id }}"><button>Edit</button></a>
        </td>
    </tr>
    @endforeach
</table>

{{ Session::get('pesan') }}

