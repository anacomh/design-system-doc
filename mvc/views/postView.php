
	<div class="container">

        <div class="row">

            <!-- BOOK DETAIL -->
            <div class="col col9 left">

                <article class="blog_detail">

                    <!-- ARTICLE HEADER -->
                    <header>
                        <h1 class="blog_title">
							<?php echo $post->blog_title; ?>
                        </h1>
                        <p class="blog_lead">
                            	<?php echo $post->blog_lead; ?>
                        </p>
                    </header>

                    <div class="blog_image">
                    	<img src="<?php echo MEDIA_URL.$post->blog_image; ?>"/>
                    </div>

                    <p class="blog_text">
                    	<?php echo $post->blog_text; ?>
                    </p>

                </article>
            </div>

            <!-- OTHER BOOKS -->
            <div class="col col3 left">

                <section class="side_section">

                    <header>
                    	<h1>Other posts</h1>
                    </header>

					<?php foreach($related as $post){ ?>
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
					<?php }  ?>


                </section>

            </div>

        </div>
        <!-- END OF ROW -->

   	</div>
