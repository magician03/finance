<?php

    require("../includes/config.php"); 
    
    $positions = [];
    $rows = CS50::query("SELECT * FROM history WHERE user_id = ?" , $_SESSION["id"]);
  
    foreach ($rows as $row)
    {
          $positions[] = [
                "Symbol" => $row["Symbol"],
                "Quantity" => $row["Quantity"],
                "Time" => $row["Time"],
                "Type" => $row["Type"],
                "Price" => $row["Price"],
                "Value" => $row["Value"]
            ];
        
    }
    
   
    
    render("history_r.php", [ "positions" => $positions, "title" => "History"]);
    



?>