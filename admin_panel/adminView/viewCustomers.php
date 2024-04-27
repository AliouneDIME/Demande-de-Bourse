<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">id</th>
        <th class="text-center">Utilisateur</th>
        <th class="text-center">Email</th>
        <th class="text-center">Numero</th>
        <th class="text-center">DateInscription</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from utilisateurs";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["prenom"]?> <?=$row["nom"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["token"]?></td>
      <td><?=$row["date_inscription"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>