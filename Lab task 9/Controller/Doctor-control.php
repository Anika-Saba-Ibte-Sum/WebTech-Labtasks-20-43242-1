<?php
include '../Model/Doctor-model.php';

$data = doc_authentication($_GET['q']);

if($data != null){?>

<table>
  
    <tr>

    <th>Name</th>

    <th>Email</th>

    <th>Specialist</th>

    <th>Mobile</th>

    <th>Available time</th>

</tr>

<tr>

    <td><?php echo $data["name"] ; ?></td>

    <td><?php echo $data["email"] ; ?></td>

    <td><?php echo $data["specialist"] ; ?></td>

    <td><?php echo $data["mobile"] ; ?></td>

    <td><?php echo $data["available time"] ; ?></td>

</tr>
</table>
 
<?php
}else{
  echo $_GET['q']." does not exist";
}





?>