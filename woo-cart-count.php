<!-- Woo Commerce Shopping Cart -->
<div style="float:right" class="chat-button btn btn-default">
<div class="woo-menu-count">
<i class="fa fa-shopping-cart"></i>&nbsp;<?php global $woocommerce; ?>
<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
</div>
<!-- end Woo -->
</div>