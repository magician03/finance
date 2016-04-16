<?php

    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
    render("quote_form.php", ["title" => "Quote"]);
    }
        // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
    if(empty($_POST["symbol"]))
    {
        apologize("Provide a symbol.");
    }
    
    render("quote_r.php", [ "title" => "Quote"]);

}

?>