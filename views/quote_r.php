<form action="../public/quote.php" method="post">
<fieldset>
    <div class="form-group">
        <?php
        
        
    $stock = lookup($_POST["symbol"]);
    
    if(empty($stock["symbol"]))
    {
        apologize("Invalid symbol or symbol you provide doesn't exist.");
    }
    
    echo  "Symbol : ".$stock["symbol"];
    echo  "<br/>Name : ". $stock["name"];
    echo  "<br/>Price : " . $stock["price"];
    
    
    
    
    ?>
    </div>
    </fieldset>