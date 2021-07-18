<style>
    table {
        margin: auto;
    }
   td {
       padding: 10px;
   } 
</style>

<?php session_start();  ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>List</title>
</head>

<table border="2">
  <tr>
    <td><em><b>ФИО</b></em></td>
    <td><em><b>Д.Р</b></em></td>
    <td><em><b>ИИН</b></em></td>
    <td><em><b>Тел.</b></em></td>
    <td><em><b>Адрес</b></em></td>
    <td><em><b>Images</b></em></td>
  </tr>

<?php 

$conn = mysqli_connect("localhost","root","","form");

$sql = "SELECT id, fio, dob, iin, tel, address, image FROM register_user";
$result = $conn->query($sql);


   // output data of each row
    while($data = mysqli_fetch_array($result)) {
        $id = $data['id'];
        ?>
        <tr>
            <td><?php echo $data['fio']; ?></td>
            <td><?php echo $data['dob']; ?></td>
            <td><?php echo $data['iin']; ?></td>
            <td><?php echo $data['tel']; ?></td>
            <td><?php echo $data['address']; ?></td>
            <td><?php echo "<img src='images/".$data['image']."' >"; ?></td>
            <td><?php echo "<a href='edit.php?id=".$data["id"]."' alt='edit'>Edit</a>" ?></td>
        </tr>	

    <?php
    } 

    
    

$conn->close();
?>

</table>