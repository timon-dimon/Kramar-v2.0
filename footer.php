<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Kramar_Motorsport
 * @since Kramar Motorsport 2.0
 */
?>

				<!-- SIDEBAR -->
				<div class="sidebar">
					<?php get_sidebar(); ?>
				</div>
				<!-- //SIDEBAR -->
		
			</div>
			<!-- //SECOND SCREEN or MAIN SCREEN FOR PAGES -->
	
		</div><!-- .container -->
		<div class="clearfix"> </div>

	</div><!-- #inner-wrap -->

	<div id="footer">

		<div class="grid-wrap">

			<noindex><?php dynamic_sidebar( 'footer-logo' ); ?></noindex>
			<div class="clearfix"> </div>
			
			<div class="footer_column-left">
				<div class="footer-logo-wrap">
					<img src="img/logo2.png" alt="Kramar Motorsport" />
					<div class="copyright">
            	&copy; Copyright 2013-<?php the_time('Y'); ?>
          </div>
				</div>
			</div>
			<div class="footer_column-right">
				<div class="span4">
					<?php dynamic_sidebar( 'footer-aside' ); ?>
				</div>
			</div>
			<?php //do_action( 'kramar_credits' ); ?>
			
		</div>

	</div>

</div><!-- #outer-wrap -->

<?php wp_footer(); ?>

<noindex>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter23918353 = new Ya.Metrika({id:23918353,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/23918353" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</noindex>


<!-- for menu -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/menu.js"></script>
<!-- //for menu -->

<!-- for slider -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.eislideshow.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
    $(function() {
        $('#ei-slider').eislideshow({
	animation			: 'center',
	autoplay			: true,
	slideshow_interval	: 6000,
	titlesFactor		: 0
        });
    });
</script>
<!-- //for slider -->

</body>
</html>