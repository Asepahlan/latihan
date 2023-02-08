<form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
        <table>
        <tr>
            <td>Kode Produk</td>
            <td><input type="text" name="kd_produk" id="" value="{{ $kd_produk }}"></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="nm_produk" id="" value="{{ $nm_produk }}"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" id="" value="{{ $harga }}"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="deskripsi" id="" value="{{ $deskripsi }}"></td>
        </tr>
        @if($image!='')
        <tr>
            <td>image</td>
            <td>
                <img src="{{ url('storage').'/'.$image }}" alt="">
            </td>
        </tr>
        @endif
        <tr>
            <td>Gambar</td>
            <td><input type="file" name="image" id="" value=""></td>
        </tr>
        <tr>
            <td>Kode Kategori</td>
            <td><input type="text" name="kd_kategori" id="" value="{{ $kd_kategori }}"></td>
        </tr>
        <tr>
            <td><input type="submit" value="SUBMIT" name="submit"></td>
        </tr>
        </table>

    </form>

