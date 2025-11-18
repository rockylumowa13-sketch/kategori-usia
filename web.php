<html>
    <head>
            <title>My Web</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <!--navigation bar-->
        <div class="container-bar">
            <ul class="ul">
                <li class="li">Home</li>
                <li class="li">
                    <a href="aboutme.html">About Me</a>
                </li>
                
                <li class="li">
                    <a href="link IGmu">Contact Me</a></li>
            </ul>
            Navigation Bar
        </div>
        <!--content-->
        <div class="container-img">
            Welcome to My Web
        <a href="https://www.msn.com/id-id/berita/other/seberapa-mencekam-jalur-green-line-krl/ar-AA1PKrDW?ocid=msedgdhp&pc=U531&cvid=d9bfa7faa065426e8e185c96ba6029b4&ei=26"class="a-image">
        <img src="logo.png" width="50%" height="50%"/>
        </a>
        </div>
          <h2>masukkan usia anda </h2>
        <input type="number" id="usia" placeholder="contoh15">
        <button onclick="cekUsia()">Cek kategori</button>

        <div id="hasil"></div>

        <input type="color"/>

        <div class="film">
         <h2>Daftar Film Favorit Saya</h2>
        <table border="'1">
            <thead>
                <tr>
                    <td>JUDUL</td>
                    <td>DURASI</td>
                    <td>KATEGORI</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>AVENGER</td>
                    <td>3 JAM</td>
                    <td>ACTION</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>SORE</td>
                    <td>2 JAM</td>
                    <td>ROMANTIC</td>
                </tr>
            </tbody>
        </table>
        </div>
        <script src="data.js"></script>

    </body>
</html>