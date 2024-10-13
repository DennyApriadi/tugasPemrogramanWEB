<html>
<head>
    <title>Tugas Pemrograman WEB</title>
</head>

<body style="background : #610119; color: white;">
    <center><img src="img/icon.png" width="80" height="80" alt="Logo HIMATIF">
    <h1>Data Pengurus HIMATIF</h1>

    <div style="margin-top: 30px;">
    <table border="2" width="500">
        <tr>
            <td>Nama</td>
            <td><?php echo $_GET['nama']; ?></td>
        </tr>

        <tr>
            <td>NPM</td>
            <td><?php echo $_GET['npm']; ?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><?php echo $_GET['email']; ?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $_GET['jk']; ?></td>
        </tr>

        <tr>
            <td>Departemen</td>
            <td><?php echo $_GET['dp']; ?></td>
        </tr>
    </table>
    </div>
    </center>

</body>
</html>