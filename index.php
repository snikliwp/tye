<?php
/**
 * This file displays the tye Consulting home page
 *
 * @package:	Gardens
 * @copyright:	March 2012 Pat Wilkins
 * @author:		Pat Wilkins - wilk0146@algonquinlive.com
 * @link:		https://github.com/wilk0146/open-data-app
 * @license:	New BSD License <> See License.txt
 * @version:	See Version.txt
 **/

include "includes/theme_header.php"
?>

<div id="home-main" class="home-main">
<div class="home-main-top">
<p>At Tye Consulting we pride ourselves on the functionality and design of our websites. With our unsurpassed attention to detail you will be sure that your website meets your immediate needs. </p><p>And with our broad range of experience in the implementation of large scale web portals, you can be assured that your web site will meet your future needs as well.</p>
</div> <!-- end div class main-top -->
<div class="home-main-middle">
	<div class="home-main-middle-left">
		<h2>What We Do</h2>
		<ul>
			<li>Photography</li>
			<li>Video</li>
			<li>web Design and Implementation</li>
			<li>e-Commerce Implementation</li>
			<li>Social Media Integration</li>
			<li>Mobile Integration</li>
			<li>Business Process Integration to the Web</li>
		</ul>
	</div><!-- end div class main-middle-left -->
	<div class="home-main-middle-center">
		<h2>Work Examples</h2>
		<div class="slideshow-border">
		<div class="slideshow">
			<div class="slides">
				<div class="slide"><img src="slides/thumb-image1.JPG" alt="Photo showing depth of field" /></div>
				<div class="slide"><img src="slides/thumb-image2.JPG" alt="Photo showing framing" /></div>
				<div class="slide"><img src="slides/thumb-image3.JPG" alt="Photo showing composition" /></div>
				<div class="slide"><img src="slides/thumb-image4.JPG" alt="Image of coffee shop website" /></div>
				<div class="slide"><img src="slides/thumb-image5.JPG" alt="Image of a flash Game" /></div>
				<div class="slide"><img src="slides/thumb-image6.JPG" alt="Image of a flash application that uses the webcamera" /></div>
				<div class="slide"><img src="slides/thumb-image7.JPG" alt="Image of zen garden Website" /></div>
				<div class="slide"><img src="slides/thumb-image8.JPG" alt="Image of a menu" /></div> 
			</div> <!-- end div class slides  -->
		</div> <!-- end div class slideshow -->
		</div> <!-- end div class slideshow-border -->
	</div><!-- end div class main-middle-center -->
	<div class="home-main-middle-right">
		<h2>Our Work</h2>
		<p></p>
		<p>To view samples of our work, please click on the appropriate tab in the navigation menu</p>
	</div><!-- end div class main-middle-right -->
</div><!-- end div class main-middle -->
<div class="home-main-bottom">
	<p>When you choose Tye Consulting, an exerienced staff member will work with you personally through every phase of your Web Project and also whenever you need any assistance.</p>
</div><!-- end div class main-bottom -->
</div><!-- end div id main -->

 <div id="home-right">
	 <div class="home-right-top">
	 	<div class="home-right-top-form">
			<div class="home-right-top-form-data">
				 <p>For a free Consultation Now</p>
				 <p><span>CALL: 800-555-7245</span></p>
				 <p>or fill out the form below</p>
				 <form>
					<h5 id="contact-form-h5">Your Name:</h5><input type="text" id="name" name="name" maxlength="15">
					<h5 id="contact-form-h5">Your e-Mail:</h5><input type="email" id="email" name="email" >
					<h5 id="contact-form-h5">Your Telephone Number:</h5><input type="tel" id="phone" name="phone">
					<h5 id="contact-form-h5">Message:</h5><textarea id="desc" name="desc"></textarea>
					<button type="submit">Send Message</button>
				</form>
			</div> <!-- end div class right-top-form-data -->
		</div> <!-- end div class right-top-form -->
	 
	</div><!-- end div class right-top -->
 
 </div><!-- end div class right -->

</body>

<?php
include "includes/theme_footer.php"
?>

