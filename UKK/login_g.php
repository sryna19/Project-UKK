<?php
include "koneksi.php";
if (isset($_POST['login_g'])) {
    $nip = $_POST["nip"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM guru where nip = '$nip' and password = '$password'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) != 0) {
        echo "<br>Login sukses";
        $data = mysqli_fetch_array($query);
        $_SESSION['nip'] = $data['nip'];
        $_SESSION['namaguru'] = $data['namaguru'];
        $_SESSION['jk'] = $data['jk'];
        $_SESSION['alamat'] = $data['alamat'];
        $_SESSION['kelas'] = $data['kelas'];
        $_SESSION['namajurusan'] = $data['namajurusan'];
        $_SESSION['namamapel'] = $data['namamapel'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['idguru'] = $data['idguru'];
        $_SESSION['log'] = true;
        header("location:guru/halguru.php");
    } else {
        echo "<script>alert('Masukkan Data Terlebih Dahulu'); window.location.href='index.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            position: relative;
        }

        .header-image {
            position: relative;
            overflow: hidden;
            aspect-ratio: 3/1;
            object-fit: cover;
        }

        .header-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            max-width: 100%;
            /* set maksimum lebar gambar menjadi 50% dari lebar viewport */
        }

        nav {
            background-color: orange;
            color: #fff;
            padding: 20px;
        }

        nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            flex-wrap: wrap;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            margin: 0;
            padding: 20px;
        }

        nav ul li a:hover {
            color: #fff;
            text-decoration: none;
            background-color: #777777;
            transition: 0.3s;
        }

        main {
            margin: 20px;
            display: flex;
            flex-direction: column;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
        }

        .col-1 .cont {
            max-width: 270px;
            margin: auto;
            background-color: #4DB6AC;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: white;
        }

        .col-1 .cont h2 {
            margin-top: 0;
        }


        .col-1 button {
            margin-bottom: 10px;
            width: 100px;
            height: 50px;
            background-color: #8BC34A;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            font-weight: 500;
        }

        .col-1 button:hover {
            background-color: #048d16;
            color: white;
            cursor: pointer;
        }


        .col-1 form input[type='text'],
        .col-1 form input[type='password'] {
            width: 90%;
            padding: 10px;
            border-radius: 3px;
            border: none;
            margin-bottom: 20px;
        }

        .col-1 form input[type='submit'] {
            background-color: #048d16;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .column {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        @media only screen and (min-width: 768px) {
            .column {
                width: 50%;
            }
        }

        .column h2 {
            margin-top: 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-image">
            <img src="smkbisa1.jpeg" alt="Header Image" />
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="content">
            <div class="col-1">
                <button name="admin" onclick="location.href='login_a.php'">Admin</button>
                <button name="guru" onclick="location.href='login_g.php'">Guru</button>
                <button name="siswa" onclick="location.href='login_s.php'">Siswa</button>
                <div class="cont">
                    <form action="" method="post">
                        <h2>Login Guru</h2>
                        <hr />
                        <label for="username">Nip:</label>
                        <input type="text" id="nip" name="nip" />
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" />
                        <input type="submit" value="Login" name="login_g" />
                    </form>
                </div>
            </div>

            <div class="column">
                <h2>Tentang Guru</h2>
                <p>
                    Guru dapat mengubah serta menghapus data nilai yang ada pada siswa
                </p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Contoh Website. All rights reserved.</p>
    </footer>
</body>

</html>