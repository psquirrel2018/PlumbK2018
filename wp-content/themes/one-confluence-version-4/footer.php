<!-- Footer -->
<?php
global $whatsInaName;
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
                <img style="width:40%;float:right;" class="img-responsive" src="http://knssandbox.com/pks4/wp-content/uploads/2017/03/invitation_signature-1.4.png">
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
                <?php echo do_shortcode( '[contact-form-7 id="34" title="contact form 1"]' ); ?>
            </div>
            <div class="modal-footer">
                <img style="width:40%;float:right;" class="img-responsive" src="http://knssandbox.com/pks4/wp-content/uploads/2017/03/invitation_signature-1.4.png">
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>