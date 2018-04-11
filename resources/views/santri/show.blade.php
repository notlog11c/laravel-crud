<center><h1>Data Diri Santri <br> {{ $santri->nama }}</h1></center>

<center>Umur Santri: {{ $santri->umur }} <br>
Alamat Santri: {{ $santri->alamat }} <br>
Jenis Kelamin Santri: {{ $santri->jenis_kelamin }} <br> </center>

<hr>

<a href="{{ route('santri.index') }}"> Kembali</a>