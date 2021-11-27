<!DOCTYPE html>
<html>
    <head>
            <link rel="stylesheet" href="style.css">
            <title>Mujigae Restaurant</title>
        </head>
    <body class="shadow">
        <div class="container">
            <header>
                <img class="logo" src="../aset/logo-mujigae.png">
            </header>

            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">MENU</a></li>
                <li><a href="#">PRODUCT</a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>

            <img src="../aset/TOPOKKI.jpg">
        </div> 
        <br>
        <hr>
        <div class=flex>
        <div>
            <h2>Reservasi</h2>
            <form method="post" class="formAdd">	
                <label>Tanggal</label>
                <input type="date" name="tanggal"><br>
                <label>Nama</label>
                <input type="text" name="nama"><br>
                <label>Jumlah</label>
                <input type="number" name="jumlah"><br>
                <label>Waktu</label>
                <input type="time" name="waktu"><br>   
                <button class="btnSave">Simpan</button>
            </form>
        </div>

        <div>
            <h2>Batalkan Reservasi</h2>
            <form method="post" class="formDel">
                <label>Nomor Reservasi</label>
                <input type="number" name="no"><br>
                <button class="btnDel">Hapus</button>         
            </form>
        </div>
        
        <div>
            <h2>Update Data</h2>
            <form method="post" class="formUp">	
                <label>Nomor Reservasi</label>
                <input type="number" name="no"><br>
                <label>Tanggal</label>
                <input type="date" name="tanggal"><br>
                <label>Nama</label>
                <input type="text" name="nama"><br>
                <label>Jumlah</label>
                <input type="number" name="jumlah"><br>
                <label>Waktu</label>
                <input type="time" name="waktu"><br> 
                <button class="btnUp">Simpan</button>
            </form>
        </div>
        </div>
        <br>
        <h2 style="text-align: center;"> Daftar Reservasi </h2>
        <table>
        </table>
        <br><br>

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="fungsi.js"></script>
        <footer>
            Copyright &copy; 2021 Nurul Aulia Larasati
        </footer>
    
    </body>
    
</html>