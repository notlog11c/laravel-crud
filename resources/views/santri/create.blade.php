<h1><center>Data Santri</center></h1>


<form action="{{ route('santri.store') }}" method="post">

    @csrf
    <h4>Masukkan Nama Anda</h4>
    <input type="text" name="nama" placeholder="Masukkan Nama"><br>
    @if ($errors->has('nama'))
    <strong>{{ $errors->first('nama')}}</strong>
    <br>
    @endif
    <br>
    <br>
    <h4>Masukkan Umur Anda</h4>
    <input type="text" name="umur" placeholder="Masukkan Umur"> <br>
    @if ($errors->has('umur'))
    <strong>{{ $errors->first('umur')}}</strong>
    <br>
    @endif
    <br>
    <br>
    <h4>Masukkan Alamat Anda</h4>
    <textarea name="alamat" placeholder="Masukkan Alamat"></textarea> <br>
    @if ($errors->has('alamat'))
    <strong>{{ $errors->first('alamat')}}</strong>
    <br> @endif
    <br>
    <br>
    <h4>Masukkan Jenis Kelamin Anda</h4>
    <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin"> <br>
    @if ($errors->has('jenis_kelamin'))
    <strong>{{ $errors->first('jenis_kelamin')}}</strong>
    <br>
    @endif
    <br>
    <br>
    <button type="submit" name="button"> Simpan </button>
    <a href="{{ route('santri.index') }}">Kembali </a>
</form>