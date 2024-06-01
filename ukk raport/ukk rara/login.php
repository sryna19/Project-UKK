<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .col-1 form {
            max-width: 300px;
            margin: auto;
            background-color: #777777;
            padding: 20px;
            border-radius: 5px;

        }

        .col-1 form h2 {
            margin-top: 0;
        }

        .col-1 form label {
            display: block;
            margin-bottom: 10px;
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

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #fffce9;
        }

        header {
            position: relative;
        }

        .header-image {
            position: relative;
            overflow: hidden;

            aspect-ratio: 3/1;
        }

        .header-image img {
            position: absolute;
            object-fit: cover;
            width: 100%;
        }

        nav {
            margin-top: 0;
            background-color: #333;
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

        .col-1 .container {
            max-width: 350px;
            margin: 10px;
            color: #fff;
            background-color: #777777;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .col-1 .container button {
            background-color: #FBC02D;
            color: #333;
            margin: 0 10px;
            padding: 5px 15px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: 500;
        }

        .col-2 {
            width: 100%;
            max-width: 100%;
            padding: 20px;
            box-sizing: border-box;
            background-color: #fff;
        }

        @media only screen and (min-width: 768px) {
            .col-2 {
                width: 50%;
            }
        }

        .col-2 h1 {
            margin-top: 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-image">
            <img src="smkbisa.jpeg" alt="Header Image" />
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="admin/bacaadmin.php">Data Guru</a></li>
                <li><a href="siswa/bacasiswa.php">Data Siswa</a></li>
                <li><a href="nilai/bacanilai.php">Data Nilai</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="content">
            <div class="col-1">
                <div class="container">
                    <button onclick="location.href='login.php'">Admin</button>
                    <button>Guru</button>
                    <button>Siswa</button>
                </div>
                <div class="container">
                    <div class="col-1">
                        <form action="ceklogin.php" method="post">
                            <h2>Login Admin</h2>
                            <hr />
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" />
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" />
                            <input type="submit" value="Login" name="login" />
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-2">
                <h2>Selamat Datang</h2>
                <p>
                    Ini merupakan web lsp SMK Negeri 1 Gunungputri.
                </p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 UKK Eksternal Website.LSP.</p>
    </footer>

</body>

</html>