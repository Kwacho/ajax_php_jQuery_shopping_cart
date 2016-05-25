<?php

/* If session is not started, start session */
if(session_status()==PHP_SESSION_NONE){session_start();}
require_once("database.php");  // request database connection with its objects 

/* Remove item from shopping cart */
if(isset($_POST['item_id'])){    
/* Fetch all items from database that matches $_POST['item_id'] Limit 1 at the end so only one item is fetched. */
    $items = $database->find_by_query("SELECT * FROM shopping_items WHERE item_id='{$_POST['item_id']}' LIMIT 1");
}

foreach($items as $item){ ?>
    <div id='item_display'>
        <span class="close_image">close</span>        
        <img class='item_display_img' src="images/<?php echo $item['item_image']; ?>">
    </div>
<?php }  ?>

