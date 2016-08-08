<div>
  
<table class="table table-striped">
  <thead>
    <tr>
      
      <th>Transaction Type</th>
      <th>Symbol</th>
      <th>Shares</th>
      <th>Price/share</th>
      <th>Total Value</th>
      <th>Time</th>
      
    </tr>
  </thead>
  <tbody>
     <?php foreach ($positions as $position): ?>

    <tr>
        <td><?= $position["Type"] ?></td>
        <td><?= $position["Symbol"] ?></td>
        <td><?= $position["Quantity"] ?></td>
        <td><?= $position["Price"] ?></td>
        <td><?= $position["Value"] ?></td>
        <td><?= $position["Time"] ?></td>
        
    </tr>

    <?php endforeach ?>
  </tbody>
</table>

<br/>
<br/>