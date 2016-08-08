<div>
  
<table class="table table-striped">
  <thead>
    <tr>
      
      <th>Symbol</th>
      <th>Name</th>
      <th>Shares</th>
      <th>Price</th>
      <th>TOTAL</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach ($positions as $position): ?>

    <tr>
        <td><?= $position["symbol"] ?></td>
        <td><?= $position["name"] ?></td>
        <td><?= $position["shares"] ?></td>
        <td><?= $position["price"] ?></td>
        <td><?= ($position["price"]*$position["shares"]) ?></td>
    </tr>

    <?php endforeach ?>
  </tbody>
</table>

<br/>
<br/>
<?php 
  
  $cashofuser = CS50::query("SELECT * FROM users WHERE id = ?" , $_SESSION["id"]);
  
  ?>
<table class="table table-striped"
  <thead>
    <tr>
      
      <th>CASH Left</th>
      <th><?= $cashofuser[0]["cash"] ?></th>

    </tr>
  </thead>
</table>


</div>
