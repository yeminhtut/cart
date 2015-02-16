<a rel="nofollow" class="login-link" title="" href="javascript:;" onclick="openLogin()">Login</a>
<p class="bg-info success_msg">Successfully checkout,We send confirmation email to 
    <?php if (isset($user_email)) { echo $user_email;} ?></p>
<ul class="products">
    <?php foreach($products as $p): ?>
    <li>
        <h3><?php echo $p['product_name']; ?></h3>
        <img src="<?php echo base_url(); ?>assets/img/1.png" alt="" />
        <small id="price"><?php echo $p['price']; ?></small>
        <?php if (isset($user_email)) { ?>
            <select class="form-control" id="product_count">
            <option value="0">Any</option>
            <?php for ($i=1; $i < 11; $i++) { ?>
                <option value="<?php echo $i;?>"><?php echo $i; ?></option>
            <?php } ?>
        </select>
        <h3>Total:<span id="total"></span></h3>
        <button type="button" class="btn btn-success" id="checkout">Checkout</button>
        <?php } ?>

        
    </li>
    <?php endforeach;?>
</ul>
