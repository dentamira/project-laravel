<h1>Tambah Student</h1>

<form action="/students" method="POST">
    @csrf

    <input type="text" name="nama" placeholder="Nama">
    <br><br>

    <input type="text" name="nim" placeholder="NIM">
    <br><br>

    <input type="text" name="jurusan" placeholder="Jurusan">
    <br><br>

    <button type="submit">Simpan</button>
</form>