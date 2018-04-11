<h1><center>Edit Data Santri</center></h1>


<form action="{{ route('santri.update', $santri->id) }}" method="post">

    @csrf
    {{-- Cara ke 1 --}}
    @method('PATCH')
    {{-- Cara ke 2 --}}
    {{-- {{ method_field('PATCH') }} --}}

    <h4>Edit Nama Anda</h4>
    <input type="text" name="nama" value="{{ $santri->nama }}"><br>
    @if ($errors->has('nama'))
    <strong>{{ $errors->first('nama')}}</strong>
    <br>
    @endif
    
    <h4>Edit Umur Anda</h4>
    <input type="text" name="umur" value="{{ $santri->umur }}"> <br>
    @if ($errors->has('umur'))
    <strong>{{ $errors->first('umur')}}</strong>
    <br>
    @endif
    
    <h4>Edit Alamat Anda</h4>
    <textarea name="alamat">{{ $santri->alamat }}</textarea> <br>
    @if ($errors->has('alamat'))
    <strong>{{ $errors->first('alamat')}}</strong>
    <br>
    @endif
    
    <h4>Edit Jenis Kelamin Anda</h4>
    <input type="text" name="jenis_kelamin" value="{{ $santri->jenis_kelamin }}"> <br>
    @if ($errors->has('jenis_kelamin'))
    <strong>{{ $errors->first('jenis_kelamin')}}</strong>
    <br>
    @endif

    <button type="submit" name="button"> Edit </button>

    <a href="{{ route('santri.index') }}">Kembali </a>

</form>