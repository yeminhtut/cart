<ul class="products">
    <?php foreach($products as $p): ?>
    <li>
        <h3><?php echo $p['product_name']; ?></h3>
        <img src="<?php echo base_url(); ?>assets/img/1.png" alt="" />
        <small><?php echo $p['price']; ?></small>
        
    </li>
    <?php endforeach;?>
</ul>