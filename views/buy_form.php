<form action="buy.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="symbol" placeholder="symbol" type="text"/>
        </div>
        
        <div class="form-group">
            <input autocomplete="off" class="form-control" name="number" placeholder="No of Shares" type="text"/>
        </div>
        
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" ></span>
                Buy
            </button>
        </div>
    </fieldset>
</form>

<?php

//redirect("../views/quote.php");

?>