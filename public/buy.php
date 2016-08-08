<?php

    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
    render("buy_form.php", ["title" => "Buy"]);
    }
        // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
    if(empty($_POST["symbol"]))
    {
        apologize("Provide a symbol.");
    }
    
    if(empty($_POST["number"]))
    {
        apologize("Provide the number of shares to purchase.");
    }
    
    if(preg_match("/^\d+$/", $_POST["number"]) == false)
    {
        apologize("Please provdide valid quantity of shares");
    }
    
    $update = lookup($_POST["symbol"]);
    
    if($update == false)
    {
        apologize("Please provdide valid SYMBOL.");
    }
    
    
    
    CS50::query("UPDATE users SET cash = (cash - ?) WHERE id = ?" , ($_POST["number"]*$update["price"]) , $_SESSION["id"]);
    
    CS50::query("INSERT INTO portfolio (user_id, symbol, shares) VALUES(?, ?, ?) ON DUPLICATE KEY UPDATE shares = (shares + ?)
",$_SESSION["id"] , strtoupper($_POST["symbol"]) , $_POST["number"] , $_POST["number"] );

    CS50::query("INSERT INTO history (user_id , Symbol, Quantity ,Price , Value , Type) VALUES(?, ?,? ,?, ? , 'BUY')",$_SESSION["id"] , strtoupper($_POST["symbol"]) , $_POST["number"], $update["price"] , ($update["price"]*$_POST["number"]) );

    
    
    
    
    redirect("/");

}

?>