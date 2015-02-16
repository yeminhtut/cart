<ul class="products">
    <?php foreach($products as $p): ?>
    <li>
        <h3><?php echo $p['product_name']; ?></h3>
        <img src="<?php echo base_url(); ?>assets/img/1.png" alt="" />
        <small id="price"><?php echo $p['price']; ?></small>
        <select class="form-control" id="product_count">
        	<option value="0">Any</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>
    </li>
    <?php endforeach;?>
</ul>
<h3>Total:<span id="total"></span></h3>
<button type="button" class="btn btn-success">Checkout</button>