


    <div class="container">

        <!-- BOOKS -->
        <section class="page_section">

            <div class="row">

				<?php foreach($books as $book){ ?>
                <div class="col col4 left">
                    <article class="book clear">
                        <div class="book_image left">
                            <a href="<?php echo BASE_URL.'books/detail/'.$book->book_id; ?>">
                            	<img src="<?php echo MEDIA_URL.$book->book_image; ?>"/>
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
                </div>
				<?php } ?>

    		</div>
         </section>

        <div class="page_navigation">
        	<a href="" class="current_page">1</a>
         	<a href="">2</a>
            <a href="">3</a>
            <a href="">4</a>
        </div>

   	</div>
