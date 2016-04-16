<?php

    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
    render("sell_form.php", ["title" => "Sell"]);
    }
        // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
    if(empty($_POST["symbol"]))
    {
        apologize("Provide a symbol.");
    }
    
    if($_POST["symbol"] == "None")
    {
        apologize("Please provide some valid symbol.");
    }
    
    $change = lookup($_POST["symbol"]);
    
    $number = CS50::query("SELECT shares FROM portfolio WHERE user_id = ? AND symbol = ?" , $_SESSION["id"] , strtoupper($_POST["symbol"]));
    
    
    
    CS50::query("UPDATE users SET cash = (cash + ?) WHERE id = ?" , ($number[0]["shares"]*$change["price"]) , $_SESSION["id"]);
     
    CS50::query("DELETE FROM portfolio WHERE user_id = ? AND symbol = ?"  , $_SESSION["id"] , $_POST["symbol"] );
    
    CS50::query("INSERT INTO history (user_id , Symbol, Quantity , Price , Value , Type) VALUES(?, ?, ?,?,? , 'SELL')",$_SESSION["id"] , strtoupper($_POST["symbol"]) , $number[0]["shares"] , $change["price"] , ($change["price"]*$number[0]["shares"]));
    
    
    
    //echo $_POST["symbol"];
    
    //echo $change["price"];
    //echo "     ";
    //echo $number[0]["shares"];
    redirect("/");
}

?>