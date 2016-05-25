<?php 
    /* Get header */
    require_once("header.php");
?>
<body>
         
    <?php
        /* Get Navigation Bar */
        require_once('navigation_bar.php');
        /* Get Carousel/slider */
        require_once("carousel.php");
    ?>
    
    <div class='shopping_cart_info_holder'>
        <div class="col-xs-12">
            <a href="#" class="shopping_cart_info" title="Shopping cart item total">             
                <i class='glyphicon glyphicon-shopping-cart' style='color:#008cba; font-size:25px;'></i>            
                <span id='items_in_shopping_cart' style='color:#ff5500; font-size:25px;'>
                    <?php 
                        /* If there are items in the basket display total of items, else display 'empty'*/
                        if(isset($_SESSION["items"])){   
                            if(count($_SESSION["items"]) > 0){
                                echo count($_SESSION["items"]);
                            }else{
                                echo "empty";
                            }
                        }else{
                            echo "empty";
                        }
                    ?>
                </span>
            </a>
        </div>
    </div>

    <!-- Holds shopping cart info with selected items -->
    <div class="shopping_cart_holder">
        <a href="#" class="close_shopping_cart_holder" >Close Cart</a>
        <h2>Shopping Cart</h2>
        <div id="shopping_cart_output">
        </div>
    </div>
    
    <!--    Display Item here-->
    <div class="item_display_holder"></div>

    <!-- Display info about cart update in the middle of the screen -->
    <div id='cart_update_info'></div>

    <?php    
        /* FETCH ITEMS ACCORDING TO CATEGORIES CHOSEN BY USER */
        if(isset($_GET['menu'])){
            $menuCategory = $_GET['menu'];        
            /* If you want to display all items click on ShareMyWeb Logo */
            if($menuCategory =="main"){
                $items = $database->find_by_query("SELECT * FROM shopping_items");    
            /* Categories accordingly */
            }else{            
                $items = $database->find_by_query("SELECT * FROM shopping_items WHERE category='{$menuCategory}'");    
            }
        }else{
            $items = $database->find_by_query("SELECT * FROM shopping_items");    
        }
    ?>  
    
    <div class='container' style='padding:10px;'>
    <!--Display Items in the List -->
        <ul class="list_of_items">
            <?php foreach($items as $item) { ?>
                <div class="col-xs-12 col-sm-4">    
                    <li>                                      
                        <form class="item_form">                            
                            <div class='item_disp_img_holder'>                                            
                                <img class="item_disp_image" src="images/<?php echo $item["item_image"]; ?>" item_id="<?php echo $item["item_id"]; ?>" alt="<?php echo $item["item_name"]; ?>">
                                <div class='item_title_holder'>
    <span class='item_disp_title'><?php echo $item["item_name"]; ?></span>
                                </div>
                            </div>                    
                            <div style='width:235px; text-align:center; margin:0 auto;'>
                                <span style='font-size:25px;'><?php echo "£".$item["item_price"]; ?></span>
                            </div>
                            <div class="item_disp_values">
                                <div>Quantity:
                                    <select name="item_qty">
                                        <?php
                                            // Choose itemquantity
                                            $maxQty=5;
                                            for($i=1;$i<=$maxQty;$i++){
                                                echo "<option value='{$i}'>$i</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div>Size:
                                    <select name="item_size">
                                        <?php 
                                            /* Specify size option in array below */
                                            $options=array("XS","S","M","XL","XXL");
                                            foreach($options as $option){
                                                echo "<option value='{$option}'>$option</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <input name="item_id" type="hidden" value="<?php echo $item["item_id"]; ?>">
                                <button class='add_item_to_cart' type="submit">Add Item</button>
                            </div>
                        </form>
                    </li>
                </div>
            <?php } ?>
        </ul>
    </div>
     <div class="push"></div>
    
<!--  Get footer-->
    <?php
        require_once("footer.php");
    ?>