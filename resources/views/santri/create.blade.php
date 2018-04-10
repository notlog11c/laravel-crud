<h1>Input Data Santri</h1>

<form action="{{ route('santri.store') }}" method="post" >
    
    @csrf
    
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <br>
    <input type="text" name="umur" placeholder="Masukkan Umur">
    <br>
    <textarea name="alamat" placeholder="Masukkan Alamat"></textarea>
    <br>
    <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin">
    <br>
    <button type="submit" name="button"> Simpan </button>
</form>