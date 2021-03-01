
	<div class="container">

        <div class="row">

            <!-- BOOK DETAIL -->
            <div class="col col8 left">

                <article class="book_detail">

                    <!-- ARTICLE HEADER -->
                    <header>
                        <h1 class="book_title">
							<?php echo $book->book_title; ?>
                        </h1>
                        <div class="row">
                            <div class="col col6 right">

                                <p class="book_lead">
                                	<?php echo $book->book_lead; ?>
                                </p>
                                <div class="price">
                                	€<?php echo $book->book_price; ?>
                                </div>
                                <a href="<?php echo BASE_URL.'cart/add/'.$book->book_id; ?>" class="buy">
                                	+ add to cart
                                </a>
                            </div>
                            <div class="col col6 left">
                                <img src="<?php echo MEDIA_URL.$book->book_image; ?>"/>
                            </div>
                        </div>
                    </header>

                    <div class="article_text">
                    	<?php echo $book->book_text; ?>
                    </div>

                </article>
            </div>

            <!-- OTHER BOOKS -->
            <div class="col col4 left">

                <section class="side_section">

                    <header>
                    	<h1>Other books</h1>
                    </header>

					<?php foreach($related as $book){ ?>
                    <article class="book clear">
                        <div class="book_image left">
                            <a href="<?php echo BASE_URL.'books/detail/'.$book->book_id; ?>">
                            	<img src="<?php echo MEDIA_URL.$book->book_image; ?>" />
                            </a>
                        </div>
                        <header class="right">
                            <h1>
                            	<a href="<?php echo BASE_URL.'books/detail/'.$book->book_id; ?>">
                            		<?php echo $book->book_title; ?>
                            	</a>
                            </h1>
                            <h2>
                            	<?php echo $book->book_author; ?>
                            </h2>
                            <div class="price">
                            	€<?php echo $book->book_price; ?>
                            </div>
                            <a href="<?php echo BASE_URL.'cart/add/'.$book->book_id; ?>" class="buy">
                            	+ add to cart
                            </a>
                        </header>
                    </article>
					<?php } ?>

                </section>

            </div>

        </div>
        <!-- END OF ROW -->

   	</div>
