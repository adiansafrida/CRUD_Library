<?php
    include_once("connect.php");
    $pengarang = mysqli_query($mysqli, "SELECT pengarang.*, id_pengarang, nama_pengarang, email, telp, alamat FROM pengarang");

?>
 
<html>
<head>    
    <title>Pengarang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <style>
        tr:nth-child(even) {
        background-color: #cccccc;
    </style>
</head>
 
<body>

<center>
    <a class='btn btn-success' href="index.php">Buku</a> 
    <a class='btn btn-success' href="penerbit.php">Penerbit</a> 
    <a class='btn btn-success' href="pengarang.php">Pengarang</a> 
    <a class='btn btn-success' href="katalog.php">Katalog</a>
    <hr>
</center>

<a class='btn btn-warning' href="add_pengarang.php">Add New Pengarang</a><br/><br/>
 
    <table class="table" width='80%' border='2' cellspacing="0">
 
    <tr>
        <th>Id Pengarang</th> 
        <th>Nama Pengarang</th> 
        <th>Email</th> 
        <th>Telp</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php  
        while($pengarang_data = mysqli_fetch_array($pengarang)) {         
            echo "<tr>";
            echo "<td>".$pengarang_data['id_pengarang']."</td>";
            echo "<td>".$pengarang_data['nama_pengarang']."</td>";
            echo "<td>".$pengarang_data['email']."</td>";    
            echo "<td>".$pengarang_data['telp']."</td>";
            echo "<td>".$pengarang_data['alamat']."</td>";  
            echo "<td><a class='btn btn-primary' href='edit_pengarang.php?id_pengarang=$pengarang_data[id_pengarang]'>Edit</a> | <a class='btn btn-danger' href='delete_pengarang.php?id_pengarang=$pengarang_data[id_pengarang]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</body>
</html>