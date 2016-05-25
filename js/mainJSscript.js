$(document).ready(function(){	
    
    /* Action on form submit */
    $(".item_form").submit(function(e){
        var form_data = $(this).serialize();            
        /* AJAX request  - shoppingCartData.php */
        $.ajax({
            url: "shoppingCartData.php",
            type: "POST",
            dataType:"json", 
            data: form_data
        }).done(function(data){ //if AJAX request if succesfull .....
            var totalItemInCart = $("#items_in_shopping_cart").html(data.items_in_cart); // get Json data                   
            var new_item_qty = $("#items_in_shopping_cart").html(data.all_items); // get Json data                   
            /* Empty the update info bar before calling it. Otherwise appended content will duplicate. */
            $('#cart_update_info').empty();
            /* append data/info to cart_update_info bar */
            $("#cart_update_info").append("<div id='new_item_added'><i class='glyphicon glyphicon-ok' style='color:green;'></i> Item added to the cart</div>").fadeIn('fast').delay(2000).fadeOut('fast');
            /* If shopping cart is still open, items will appear on it at the same time of adding them */
            if($(".shopping_cart_holder").css("display") == "block"){ // Check if shopping cart is open 
                $(".shopping_cart_info").trigger( "click" );  // update cart on event
            }
        })
        e.preventDefault();
    });
    
    /* Display shopping cart content when clicking on shopping_cart_info bar */
	$(".shopping_cart_info").click(function(e) {
		e.preventDefault();         
		$(".shopping_cart_holder").fadeIn(); // how to cart displays - you can change to any event you wish.
        /* Ajax call for shoppingCartData.php if $_POST['load_cart_items'] */
		$("#shopping_cart_output" ).load( "shoppingCartData.php", {"load_cart_items":"true"});
	});	
    
	/* Close Cart by clicking 'close' button */
	$( ".close_shopping_cart_holder").click(function(e){
		e.preventDefault(); 
		$(".shopping_cart_holder").fadeOut(500); // close cart of fadeOut ... or any event you wish 
	});
    
	//Remove items from cart
	$("#shopping_cart_output").on('click', 'a.remove_item_from_cart', function(e) {
		e.preventDefault(); 
		var item_id = $(this).attr("item_id"); // get item id        
        /* This part make sure tha the removed item disappears from shopping cart and is being removed */
        /* json gets the item_id */
		$.getJSON( "shoppingCartData.php", {"remove_item_from_cart":item_id} , function(data){ //get Item id
			$("#items_in_shopping_cart").html(data.items_in_cart); //update Item count in cart-info bar
            // update shopping cart content
			$(".shopping_cart_info").trigger( "click" ); 
		});
	});  

    /* Change item quantity - ADD */
    $("#shopping_cart_output").on("click", "a.add_itm_qty", function(e){
        e.preventDefault(); 
        var item_id = $(this).attr("item_id");   
        $.getJSON( "shoppingCartData.php", {"add_itm_qty":item_id} , function(data){ 
            // update specific item quantity on event
			$(".shopping_cart_info").click(); 
		});
    }); 

    /* Change item quantity - SUBTRUCT */
     $("#shopping_cart_output").on("click", "a.subtruct_itm_qty", function(e){
        e.preventDefault(); 
        var item_id = $(this).attr("item_id");   
        $.getJSON( "shoppingCartData.php", {"subtruct_itm_qty":item_id} , function(data){ 
            // update specific item quantity on event
			$(".shopping_cart_info").click(); 
		});
    }); 
        
    /* Display image on click */
    $(".item_disp_image").click(function(e){
        e.preventDefault(); 
        var item_id = $(this).attr("item_id");
        $.post('displayItem.php',{item_id: item_id}, function(data) { // send post data to displayItem.php
            var item_display_id = $(".item_display_holder").html(data); // update the data in .item_displa_holder
        });
    }); 
    /* Close image on click */
    $(".item_display_holder").on("click",".close_image", function(e){
        e.preventDefault();
        $("#item_display").hide();
    });    
    
    /* Show image title on item hover */
    $('.item_disp_img_holder').hover( function() {
        $(this).find('.item_disp_title').css("display","block","width","inherit");
    }, function() {
        $(this).find('.item_disp_title').fadeOut(200);
    });
        
    /*   ADDITIONAL OPTIONS YOU COULD USE    */
        
    /* Close Cart when mouse leaves shopping_cart_holder area - ADDITIONAL OPTION */
//	$( ".shopping_cart_holder").on("mouseleave",function(e){ // how to cart closes - you can change to any event you wish.
//		e.preventDefault();            
//		$(".shopping_cart_holder").fadeOut();
//	});    
    
    // Enlarge image on hoover 
//    $('.item_disp_image').hover(function() {
//    $(this).css("cursor", "pointer");  // Shows a pointer type
//    $(this).animate({
//        width: "100%",
//        height: "100%"
//    }, 'fast');

    // Go back to default image size
//    }, function() {
//        $(this).animate({
//            width: "80%"
//        }, 'fast');
//    });
     
});