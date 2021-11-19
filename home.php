<html>
    <head>
        <title>Daftar Belanja</title>
        <style>
            body {background-color: aliceblue;
            padding: 5px;}
            h2{background-color: #89B0CD;
            padding: 5px;}
            .button{background-color:white;
            color:black;
            padding: 5px;
            border:2px solid #384955;
            transition-duration: 0.5s;}
            .button:hover{background-color: #384955;
            color: white;}
        </style>
    </head>

    <body>
        <form method="POST" onsubmit="total()">
            <h2>Daftar Belanja</h2><br>
            Mangga
            <input type="number" id="mangga" name="mangga"><br>
            Jambu
            <input type="number" id="jambu" name="jambu"><br>
            Salak
            <input type="number" id="salak" name="salak"><br><br>
            <input type=submit name="submit" class="button">
        </form>

<div id="hasil"></div>
        <script type="text/javascript">
            <?php

            class mangga{
                public $harga;
                public function __construct($jml){
                    $this->jml = $jml;
                    $this->harga= 15000;
                }

                public function jmlMangga(){
                    return $this->jml;
                }
                
                public function hrgMangga(){
                    return $this->harga;
                }
            }

            class jambu{
                public $harga;
                public function __construct($jml){
                    $this->jml = $jml;
                    $this->harga= 13000;
                }

                public function jmlJambu(){
                    return $this->jml;
                }
                
                public function hrgJambu(){
                    return $this->harga;
                }
            }

            class salak{
                public $harga;
                public function __construct($jml){
                    $this->jml = $jml;
                    $this->harga= 10000;
                }

                public function jmlSalak(){
                    return $this->jml;
                }
                
                public function hrgSalak(){
                    return $this->harga;
                }
            }
            
            ?>

            function total(){
                event.preventDefault()

                var banyakMangga=document.getElementById('mangga').value;
                var banyakJambu=document.getElementById('jambu').value;
                var banyakSalak=document.getElementById('salak').value;

                var hargaMgg=15000;
                var hargaJam= 13000;
                var hargaSal= 10000;

                var total = banyakMangga * hargaMgg + banyakJambu * hargaJam + banyakSalak * hargaSal; 

                output = document.getElementById('hasil');
                output.innerHTML = "Total Belanja: "+ total;

            }
        </script>

    </body>
</html>