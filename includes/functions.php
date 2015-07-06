<?php 
    add_filter ('add_to_cart_redirect', 'bd_checkout_woo_redirect');
   
    function bd_checkout_woo_redirect() {
        global $woocommerce;
        $checkout_url = $woocommerce->cart->get_checkout_url();
        return $checkout_url;
    }
    
    add_shortcode('bd_woocommerce_one_page_checkout', 'bd_one_page_checkout');        
        function bd_one_page_checkout( $atts ) {
             $colum_option = get_option('cart_colum');
        if($colum_option=="2"){
            $colum_option_class='col-md-6';
        }else{
            $colum_option_class='col-md-12';
        } 
    ?>    
        <div class="row">
            <div class="<?php echo $colum_option_class; ?>">
                <?php echo do_shortcode ('[woocommerce_cart]') ?>
            </div>
            <div class="<?php echo $colum_option_class; ?>">
                <?php echo do_shortcode ('[woocommerce_checkout]') ?>
            </div>
        </div>    
    <?php   
    }        
add_action( 'wp_head', 'bd_plugin_style' );
function bd_plugin_style() {
    
     $option_billing_colum = get_option('billing_colum');
        if($option_billing_colum=="1"){
            $option_val__billing_colum='98%';
        }else{
            $option_val__billing_colum='48%';
        }
    
?>
<style type="text/css" media="screen">
   .woocommerce #customer_details .col-1,.woocommerce #customer_details .col-2{
    width: <?php echo $option_val__billing_colum;?>;
   }
    .cart-collaterals .cross-sells{
    display: none;
   }
   
@media (max-width:640px) {
     .woocommerce #customer_details .col-1,.woocommerce #customer_details .col-2{
    width: 100% !important;
   }
}
</style>
<?php } 
add_action( 'admin_head', 'bd_plugin_style_admin' );
function bd_plugin_style_admin() {?>
<style type="text/css" media="screen">
   .wp-admin select.styled{
    width: 240px;
   }
   .option-div{
    width: 90%;
   }
      
</style>
<?php } 
    
        ?>