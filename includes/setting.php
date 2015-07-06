<?php
add_action('admin_menu', 'register_checkout_menu_page');

function register_checkout_menu_page() {
   add_options_page('woocommerce', 'Checkout Settings',10, 'one_settings', 'bd_setting_checkout_page');   
}    
function bd_setting_checkout_page(){
   ?>
    <h2>One page Checkout Settings</h2> 
   <?php 
    $bd_navigation_data = get_option('cart_colum'); 
    $bd_billing_colum = get_option('billing_colum'); 
 
     if($bd_navigation_data!=''){
        $bd_navigation = get_option('cart_colum');
           
     }else{
         $bd_navigation='2';  
     }
 
     if($bd_billing_colum!=''){
        $bd_billing = get_option('billing_colum');
           
     }else{
         $bd_billing='1';  
     }
     
    if (isset($_POST['bd_updatedata'])) {
        update_option('cart_colum', $_POST['cart_colum']);
        update_option('billing_colum', $_POST['billing_colum']);            
        echo '<div id="message" class="updated"><p><strong>';
        echo 'Settings Updated!';
        echo '</strong></p></div>';
        echo "<script>self.location='admin.php?page=one_settings';</script>";
}
?>
<div class="welcome-panel option-div ">
       
    <form method="post" action=""> 
        <table>
        <tr>
           <td><?php  _e('Checkout Page Layout:', 'Bootstrap-one-page-woocommerce-checkout');?></td>
            <td> 
                <select id="cart_colum" name="cart_colum" class="styled select180">           
                    <option value="1" <?php selected( $bd_navigation == '1');?>>One Colum</option>	
                    <option value="2" <?php selected( $bd_navigation == '2');?>>Two Colum</option>	           
                </select>
            </td>
        </tr>
        <tr>
        <td><?php  _e('Billing Details / Different address Layout :', 'Bootstrap-one-page-woocommerce-checkout');?></td>
            <td> 
                <select id="cart_colum" name="billing_colum" class="styled select180">           
                    <option value="1" <?php selected( $bd_billing == '1');?>>One Colum</option>	
                    <option value="2" <?php selected( $bd_billing == '2');?>>Two Colum</option>	           
                </select>
            </td>
        </tr>
            
        </table>
        <p>
        <input type="hidden" name="bd_updatedata" value="1" />
        <input type="submit" value="Save" class="button button-primary"/>
        </p>    
    </form>
     </div> 
     
     <div class="welcome-panel option-div ">
        <h3><?php  _e('Shortcode:', 'Bootstrap-one-page-woocommerce-checkout');?></h3>  
        
        <p>Change This shortcode in your checkout page:</p> 
                
        <p><code>[bd_woocommerce_one_page_checkout]</code></p>
      
       
    </div> 
     
    <?php    
    }   