<!DOCTYPE html>
<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <h1>Tambah Data</h1>
     <form method="post" class="formAdd">	
            <label>NIM</label>
            <input type="text" name="nim"><br>
            <label>Nama</label>
            <input type="text" name="nama"><br>
            <label>Prodi</label>
            <select name="prodi">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Farmasi">Farmasi</option>
                <option value="PWK">PWK</option>
            </select><br>
            <label>Angkatan</label>
            <input type="text" name="angkatan"><br>    
          <button class="btnSave">Simpan</button>
     </form>

     <h2>Hapus Data</h2>
     <form method="post" class="formDel">
         <label>NIM</label>
         <input type="text" name="nim"><br>
         <button class="btnDel">Simpan</button>         
</form>
<hr>
<h1>Edit Data</h1>
<form method="post" class="formUp">	
            <label>NIM</label>
            <input type="text" name="nim"><br>
            <label>Nama</label>
            <input type="text" name="nama"><br>
            <label>Prodi</label>
            <select name="prodi">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Farmasi">Farmasi</option>
                <option value="PWK">PWK</option>
            </select><br>
            <label>Angkatan</label>
            <input type="text" name="angkatan"><br>    
          <button class="btnUp">Simpan</button>
     </form>

        <table align="center" border=1>

        </table>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="fungsi.js"></script>
    </body>
    
</html>