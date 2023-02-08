<form action="{{ $action }}" method="post" enctype="multipart/form-data">
@csrf
    <table>
        <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" id="" value="{{ $nama }}"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" id="" value="{{ $email }}"></td>
    </tr>
    <tr>
        <td>No Hp</td>
        <td><input type="text" name="nohp" id="" value="{{ $nohp }}"></td>
    </tr>
    @if($foto!='')
    <tr>
        <td>Foto</td>
        <td>
            <img src="{{ url('storage').'/'.$foto }}" alt="">
        </td>
    </tr>
    @endif
    <tr>
        <td>foto</td>
        <td><input type="file" name="foto" id=""></td>
    </tr>
    <tr>
        <td><input type="submit" value="SUBMIT" name="submit"></td>
    </tr>
    </table>

</form>
