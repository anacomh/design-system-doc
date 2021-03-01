


    <div class="container">

        <!-- POSTS -->
        <section class="page_section">

            <div class="row">

				<?php foreach($posts as $post){ ?>
            	<div class="col col4 left">
                    <article class="news_article">
                        <a href="<?php echo BASE_URL.'blog/detail/'.$post->blog_id; ?>">
                        	<img src="<?php echo MEDIA_URL.$post->blog_image; ?>"/>
                        </a>
                        <header>
                            <h1>
                            	<a href="<?php echo BASE_URL.'blog/detail/'.$post->blog_id; ?>">
                                	<?php echo $post->blog_title; ?>
                                </a>
                            </h1>
                            <p>
                            <?php echo $post->blog_lead; ?>
                            </p>
                        </header>
                    </article>
                </div>
				<?php }  ?>


       		</div>

        </section>

        <div class="page_navigation">
        	<a href="" class="current_page">1</a>
         	<a href="">2</a>
            <a href="">3</a>
            <a href="">4</a>
        </div>

   	</div>
