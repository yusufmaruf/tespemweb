<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>

</head>
<body>
    <center>
        <h2> Report Guestbook</h2>
    </center>
        <br>
        <a href="guestbook.php">+ Tulis Pesan</a>
        <br><br>
        <table border="1">
            <tr style="background-color: orange;">
                <th >No</th>
                <th >Posted</th>
                <th>Name</th>
                <th>Email</th>
                <th>Alamat</th>
                <th >city</th>
                <th>Message</th>
                <th>Tindakan</th>
            </tr>
            <?php 
            include 'conn.php';
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM guestbook");
            while($d = mysqli_fetch_array($data)){
            ?>
                <tr >
                    <td><?php echo $no++; ?></td>
                    <td width="300" align="center"><?php echo $d['posted']; ?></td>
                    <td width="300" align="center"><?php echo $d['name']; ?></td>
                    <td width="300" align="center"><?php echo $d['email']; ?></td>
                    <td width="300" align="center"><?php echo $d['address']; ?></td>
                    <td width="300" align="center"><?php echo $d['city']; ?></td>
                    <td width="300" align="center"><?php echo $d['message']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    </td>
                </tr>
                <?php 
            }
            ?>
        </table>
        <br> <br>
        <a href="logout.php">LOG OUT</a>
    
</body>
</html>