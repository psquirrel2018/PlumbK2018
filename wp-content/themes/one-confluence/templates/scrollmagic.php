<?php
/**
 * Created by PhpStorm.
 * User: circdominic
 * Date: 4/12/18
 * Time: 11:31 AM
 */


//What's in a Name Variables
//$whatsInaNameTitle = get_post_meta($post->ID, '_one_front_name_title', true);
$whatsInaNameParagraphOne = get_post_meta($post->ID, '_one_front_name_paragraph_one', true);
$whatsInaNameParagraphTwo = get_post_meta($post->ID, '_one_front_name_paragraph_two', true);
$whatsInaNameParagraphThree = get_post_meta($post->ID, '_one_front_name_paragraph_three', true);
$whatsInaNameParagraphFour = get_post_meta($post->ID, '_one_front_name_paragraph_four', true);
?>

<div id="scroll-container">

	<div id="myContainer" class="container">
		<div class="row">
			<div class="col-xs-12">
				<div id="trigger-header" class="spacer s0"></div>
				<div class="wian-header sketch-bg">
				</div>
			</div>
		</div>
		<div id="paragraph1" class="row">
			<div class="col-xs-1"></div>
			<div class="col-xs-10 border-left border-left1">
				<div id="border1" class="spacer s0"></div>
				<div class="paragraph1 scroll-content tween1">
                    <?= $whatsInaNameParagraphOne; ?>

                    <!--
					<div id="trigger1" class="spacer s0"></div>
					<span class="tween1">Over the years we’ve received many inquiries as to where the business name, Plumb Kendall Solutions, came from.</span>
					<div id="fadeOut1" class="spacer s0" style="display:inline-block;"></div>
					<div id="trigger2" class="spacer s0" style="display:inline-block;"></div>
					<span class="tween2" style="display:inline;"> Most people think we’re plumbers and we take no offense.</span>
					<div id="fadeOut2" class="spacer s0" style="display:inline-block;"></div>
					<div id="trigger3" class="spacer s0" style="display:inline-block;"></div>
					<span class="tween3">We are solution oriented builders with an eye for quality, value and customer service.</span>
					<div id="fadeOut3" class="spacer s0"></div>
					-->

				</div>
			</div>
			<div class="col-xs-1"></div>
		</div>
		<div class="row">
			<div class="col-xs-1">

			</div>
			<div class="col-xs-10 border-left border-left2">
				<div id="border2" class="spacer s0"></div>
				<div class="paragraph2 scroll-content tween2">
                    <?= $whatsInaNameParagraphTwo; ?>

                    <!--
					<div id="trigger4" class="spacer s0"></div>
					<span class="tween4">The genesis for the company’s name and logo is rather simple. We love <span id="pbTrigger" class="" style="inline;">plumb bobs</span> and what they represent.</span>
					<div id="fadeOut4" class="spacer s0" style="display:inline-block;"></div>
					<div id="trigger5" class="spacer s0" style="display:inline-block;"></div>
					<span class="tween5" style="display:inline;">We combine this fact with the business founders middle name, Kendall, the rest is history.</span>
					<div id="fadeOut5" class="spacer s0" style="display:inline-block;"></div>
					<div id="trigger6" class="spacer s0" style="display:inline-block;"></div>
					<span class="tween6">A plumb bob is a heavy, symmetrical object and when suspended from a string provides a perfectly vertical reference line relative to the earth’s surface. It represents integrity, truth and sustainability.</span>
					<div id="fadeOut6" class="spacer s0"></div>
					-->

				</div>
			</div>
			<div class="col-xs-1"></div>
		</div>
		<div class="row">
			<div class="col-xs-1"></div>
			<div class="col-xs-10 border-left border-left3">
				<div id="border3" class="spacer s0"></div>
				<div class="paragraph3 scroll-content tween3">
                    <?= $whatsInaNameParagraphThree; ?>

                    <!--
					<div id="trigger7" class="spacer s0"></div>
					<span class="tween7">In capable hands it can build the ancient pyramids, the <span id="etTrigger" class="" style="inline;">Eiffel Tower</span> and with the assistance of the stars, navigate great seas.</span>
					<div id="fadeOut7" class="spacer s0" style="display:inline-block;"></div>
					<div id="trigger8" class="spacer s0" style="display:inline-block;"></div>
					<div id="pbTrigger2" class="spacer s0" style="display:inline-block;"></div>
					<span class="tween8" style="display:inline;">If you believe what we believe about the unlimited potential of the human spirit, we invite you to join us.</span>
					<div id="fadeOut8" class="spacer s0" style="display:inline-block;"></div>
					<div id="trigger9" class="spacer s0" style="display:inline-block;"></div>
					<span class="tween9">Together we can explore new frontiers, build the future and positively transform where we live, work and play.</span>
					<div id="fadeOut9" class="spacer s0"></div>
					-->

				</div>
			</div>
			<div class="col-xs-1">

			</div>
		</div>
        <?php if ($whatsInaNameParagraphFour !='') { ?>


        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 border-left border-left4">
                <div id="border4" class="spacer s0"></div>
                <div class="paragraph4 scroll-content">
                    <?= $whatsInaNameParagraphFour; ?>
                    <!--
					<div id="trigger7" class="spacer s0"></div>
					<span class="tween7">In capable hands it can build the ancient pyramids, the <span id="etTrigger" class="" style="inline;">Eiffel Tower</span> and with the assistance of the stars, navigate great seas.</span>
					<div id="fadeOut7" class="spacer s0" style="display:inline-block;"></div>
					<div id="trigger8" class="spacer s0" style="display:inline-block;"></div>
					<div id="pbTrigger2" class="spacer s0" style="display:inline-block;"></div>
					<span class="tween8" style="display:inline;">If you believe what we believe about the unlimited potential of the human spirit, we invite you to join us.</span>
					<div id="fadeOut8" class="spacer s0" style="display:inline-block;"></div>
					<div id="trigger9" class="spacer s0" style="display:inline-block;"></div>
					<span class="tween9">Together we can explore new frontiers, build the future and positively transform where we live, work and play.</span>
					<div id="fadeOut9" class="spacer s0"></div>
					-->
                </div>
            </div>
            <div class="col-md-1">

            </div>
        </div>


            <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-10 border-left border-left4">
                    <div id="border4" class="spacer s0"></div>
                    <div class="paragraph4 scroll-content tween4">
                        <?= $whatsInaNameParagraphFour; ?>

                    </div>
                </div>
                <div class="col-xs-1">

                </div>
            </div>

        <?php } ?>

		<div id="sketch" class="row">
			<div class="col-md-1"></div>
			<div class="col-md-12 pb-bg2 sketch-container">
				<div class="pb-container">
					<img class="pb-bottom img-responsive" src="http://confluence-sandbox.xyz/3plus1/wp-content/uploads/2018/04/plumb-bob-1.png">
				</div>
			</div>
		</div>

		<div id="contact-signature" class="row">
			<div class="col-md-1"></div>
			<div class="col-md-11 col-md-pull-1 pb-bg2">

				<div id="signature" class="wian-signature">
					<div id="contact" class="contact-us-button">
						<a href="#" class="" style="float:left;" data-toggle="modal" data-target="#contactModal"><img style="width:100%;" src="http://confluence-sandbox.xyz/3plus1/wp-content/uploads/2018/06/ContactUsBox-v3.png"></a>
					</div>
					<div id="sig" style="width:50%;float:right;margin-top:-30px;">
						<img src="http://confluence-sandbox.xyz/3plus1/wp-content/uploads/2018/04/signature-sans-logo.png" style="width:100%;" class="img-responsive tween10">
					</div>
					<div id="fadeOut10" class="spacer s0"></div>
				</div>
			</div>
		</div>
	</div>
</div>
