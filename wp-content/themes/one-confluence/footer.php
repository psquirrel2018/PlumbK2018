<!-- Footer -->
<?php
global $whatsInaName;

if (function_exists('one_get_option')) {
    //Footer Info
    $footerPhone = one_get_option('phone_text');
    $footerEmail = one_get_option('foot_email');
    $footer_logo = one_get_option('logo2');
    $address_line1 = one_get_option('address_line1');
    $address_line2 = one_get_option('address_line2');
}
?>

<div id="textModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button  class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">What's in a Name?</h4>
            </div>
            <div class="modal-body">
                <div style="text-align: center;">

                    <div class="copy text-center message" style="padding:30px 45px;">
                        <?= $whatsInaName; ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <img style="width:40%;float:right;" class="img-responsive" src="/3plus1/wp-content/uploads/2017/03/invitation_signature-1.4.png">
            </div>
        </div>
    </div>
</div>


<div id="contactModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button  class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myContactModalLabel">Contact Us</h4>
            </div>
            <div class="modal-body">
                <div class="footer-logo" style="text-align: center;">
                    <img src="<?= $footer_logo; ?>" style="max-width:250px;margin:15px auto;" class="img-responsive">
                </div>
                <div class="footer-address">
                    <a href="tel:<?= $footerPhone; ?>" style="color:#000000;"><span class="glyphicon glyphicon-phone"></span> <?= $footerPhone; ?></a> | <span class="glyphicon glyphicon-map-marker"></span> <?=$address_line1; ?> | <?=$address_line2; ?> | <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:<?= $footerEmail; ?>" style="color:#000000;"><?= $footerEmail; ?></a>
                </div>
            </div>
            <div class="modal-footer">
                <!--<img style="width:40%;float:right;" class="img-responsive" src="/3plus1/wp-content/uploads/2017/03/invitation_signature-1.4.png">-->
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>