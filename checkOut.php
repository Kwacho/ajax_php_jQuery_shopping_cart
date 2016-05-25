<?php 
    /* Get header, navigation pane/bar, database_objects file */
    require_once("header.php"); // also checks if session was started 
    /* If session 'items' is not set, redirect back to index.php */
    if(!isset($_SESSION['items']) || count($_SESSION['items'])==0){
        header("location: index.php");
    }


/* Display aded products in the shopping cart */
?>
<body>
    <div class="container" >
    <h2>My Shopping Cart</h2>
        <table class='table'> <!--Start table that will holds all data in the shopping cart --> 
            <?php
            $total=0; // define total so the script won't throw silly error of a type 'Undefined variable: total in....'
            /* Loops through item session array and display data */
            foreach($_SESSION["items"] as $item){ 			
            ?>                         
            <tr class='itemInCardRow'>            
                <td class='itemInCartDisplay'>
                    <img class='img-responsive item_disp_image' style='max-width:40px; float:left;' src="images/<?php echo $item["item_image"]; ?>">
                </td>
                <td class='itemInCartDisplay'>
                    <?php echo $item["item_name"] .", size ". $item["item_size"]; ?>            
                </td>
                <td class='itemInCartDisplay'>                 
                    <?php echo "<span class='quantity'>Qty ".$item["item_qty"]."</span>"; ?>                     
                </td>
                <td class='itemInCartDisplay'>
                    <?php echo "£".sprintf("%.2f", ($item["item_price"] * $item["item_qty"])); ?>
                </td>
            </tr>
            <?php
                /* Calculate Total */
                $total += ($item["item_price"] * $item["item_qty"]);

                }  // Close foreach loop
            ?>
            <tr>                 
                <td class='itemInCartDisplay' colspan='4'>
                    <div>
                        <a href='payment.php' title="Go To Payment"><button type="button" class="btn checkout_btn">Go To Payment</button></a>
                        <a href='index.php' title="Continue Shopping"><button type="button" class="btn continue_shopping_btn">Continue Shopping</button></a>

                    </div>
                </td>
                 <td class='itemInCartDisplay' style='text-align:right;'>
                    <div class="cart-products-total">                        
                        <span>Total : <span style='font-size:20px; color:#008cba;'></span>
                            <?php
                                // Return a total price with 2 decimals 
                                echo "£".sprintf("%.2f",$total); 
                            ?>
                        </span>
                    </div>
                </td>
            </tr>
        </table>        
    </div>
    
<?php 
/* Get header */
    require_once("footer.php");
?>  
    
<!--    <body> tag will be closed in footer ....... -->
