<?php get_header(); ?>



<!--**********************************************

* This creates the three stations displayed on the Home page

***********************************************-->

<div class="row" ng-controller="mainControl">

<!--**********************************************

* The 91fm radio widget

***********************************************-->



<div class="col-xs-12 col-sm-4">

	<div class="radio-inner">

		<div class="image-inner">

			<a class = "image-inner-a" href="<?php bloginfo('url'); ?>/91fm" title="Listen to 91FM">


				<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow( "91fm", "" ); } ?>

<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Home Left')) : else : ?>

			<?php endif; ?>




		</a>

		<div class="channel-nav">

			<div class="channel-inner">

				<div class="radio-title">91.5 FM</div>

				<!--<div class="radio-type">Always Inspirational</div>-->

				<div class="radio-links">







					<a class = "channel-a" href="91fm/" title="Listen to 91FM" ng-show="angularActive">Listen Now </a>



<!--****

href for listen now link was #/play91fm but I am making it a link to the page because playing now widget isnt working like this.

-->

					<a class = "channel-a" href="<?php bloginfo('url'); ?>/91fm" title="Listen to 91FM" ng-hide="angularActive">Listen Now </a>

				</div>

			</div><!-- /.channel-inner -->

		</div><!-- /.channel-nav -->

	</div><!-- /.image-inner -->

</div><!-- /.radio-inner -->

<br>

</div><!-- /.radio-front #inspirational -->



<!--**********************************************

* The 94fm radio widget

***********************************************-->



<div class="col-xs-12 col-sm-4">

	<div class="radio-inner">

		<div class="image-inner">

			<a class = "image-inner-a" href="<?php bloginfo('url'); ?>/94fm" title="Listen to 94FM">

				<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow( "94fm", "" ); } ?>

<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Home Middle')) : else : ?>

			<?php endif; ?>

		</a>

		<div class="channel-nav">

			<div class="channel-inner">

				<div class="radio-title">94.3 FM</div>

				<!--<div class="radio-type">Music You Want, News You Need</div>-->

				<div class="radio-links">

					<a class = "channel-a" href="/94fm" title="Listen to 94FM" ng-show="angularActive">Listen Now </a>





<!--****

href for listen now link was #/play94fm but I am making it a link to the page because playing now widget isnt working like this.

-->


					<a class = "channel-a" href="<?php bloginfo('url'); ?>/94fm" title="Listen to 94FM"ng-hide="angularActive">Listen Now </a>

				</div>

			</div><!-- /.channel-inner -->

		</div><!-- /.channel-nav -->

	</div><!-- /.image-inner -->

</div><!-- /.radio-inner -->

<br>

</div>

<!--**********************************************

* The Internet Radio widget

***********************************************-->



<div class="col-xs-12 col-sm-4">

	<div class="radio-inner">

		<div class="image-inner">

			<a class = "image-inner-a" href="<?php bloginfo('url'); ?>/internet-radio" title="Listen to Internet Radio">

<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow( "internet-radio", "" ); } ?>

				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Home Right')) : else : ?>

			<?php endif; ?>

		</a>

		<div class="channel-nav">

			<div class="channel-inner">

				<div class="radio-title">Online</div>

				<!--<div class="radio-type">Your Link to Campus</div>-->

				<div class="radio-links">

					<a class = "channel-a" href="/internet-radio" title="Listen to Internet Radio" ng-show="angularActive">Listen Now </a>



<!--****

href for listen now link was #/playOnline but I am making it a link to the page because playing now widget isnt working like this.

-->

					<a class = "channel-a" href="<?php bloginfo('url'); ?>/internet-radio" title="Listen to Internet Radio" ng-hide="angularActive">Listen Now </a>

				</div>

			</div><!-- /.channel-inner -->

		</div><!-- /.channel-nav -->

	</div><!-- /.image-inner -->

</div><!-- /.radio-inner -->

</div>

</div><!-- /#radio-home -->

<div class="row" class="home-listen-now">

	<div class="col-xs-12" ng-view></div>

</div>



<!--**********************************************

* End of Home display

***********************************************-->

<!-- Start latest post -->
</br>
<center><h1>Latest News</h1></center>
</br>
<article>

		<?php // Display blog posts on any page @ http://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('showposts=3' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>

		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>

<!-- End latest post -->

<!--**********************************************

* get_footer imports the footer.php file

***********************************************-->



<?php get_footer(); ?>



<!--**********************************************

* End of get_footer

***********************************************-->