
<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
/* Update item quantity */
function updateCartItem(obj, rowid){
	$.get("<?php echo base_url('index.php/cart/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
		if(resp == 'ok'){
			location.reload();
		}else{
			alert('Cart update failed, please try again.');
		}
	});
}
</script>

<h2>Shopping Cart</h2>
<div class="row cart">
    <table class="table">
    <thead>
        <tr>
            <th ></th>
            <th >Product</th>
            <th >Price</th>
            <th >Description</th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
        <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>
        <tr>
            <td>
            </td>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' LKR'; ?></td>
            <td><?php echo '$'.$item["description"]; ?></td>
            <td>
                <a href="<?php echo base_url('index.php/cart/removeItem/'.$item["rowid"]); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="6"><p>Your cart is empty.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="<?php echo base_url('index.php/venpackage/'); ?>" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
            <td colspan="3"></td>
            <?php if($this->cart->total_items() > 0){ ?>
            <td class="text-left">Grand Total: <b><?php echo '$'.$this->cart->total().' USD'; ?></b></td>
            <td><a href="<?php echo base_url('index.php/checkout/'); ?>" class="btn btn-success btn-block">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
</div>
