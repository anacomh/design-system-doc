
	<div class="container">

        <article class="page_article">
        	<header>
            	<h1 class="page_title"><?php echo $content->page_title; ?></h1>
                <p class="page_lead">
                	<?php echo $content->page_text; ?>
                </p>
            </header>

            <div class="contact_form">
            	<h2 class="form_title">Contact Us</h2>

				<form method="post" action="<?php echo BASE_URL.'pages/sendMessage/'?>">

	                <input type="text" name="name" class="contact_field" placeholder="Name" required/>
	                <input type="email" name="email" class="contact_field" placeholder="Email" required/>
	                <textarea name="message" class="contact_field contact_textarea" placeholder="Message" required></textarea>
	                <input type="submit" value="Send" class="contact_button"/>

				</form>

			</div>

        </article>

   	</div>
