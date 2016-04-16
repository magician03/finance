<form action="sell.php" method="post">
    <fieldset>
        <!-- Single button -->
       

            <select class ="form-control" name = "symbol">
                        <option value = "None">None</option>
                        <?php
                        $stocks = CS50::query("SELECT symbol FROM portfolio WHERE user_id = ?" , $_SESSION["id"]);
                          ?>
                        <?php foreach ($stocks as $stock): ?>
                        
                            <option value = <?= $stock["symbol"] ?> > <?= $stock["symbol"] ?> </option>
                    
                    <?php endforeach ?>
              </select>
        
    <br/><br/>
    
    
    
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" ></span>
                Sell
            </button>
        </div>
    </fieldset>
</form>

<?php

//redirect("../views/quote.php");

?>