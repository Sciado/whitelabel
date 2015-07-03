		<?php if(!is_home() || get_option('13floor_featured') == 'false') { ?>
				</div> <!-- end #content -->
			</div> <!-- end #contentwrap -->

			<div id="content-bottom"></div>

			<div id="footer-top"></div>
			<div id="footer" class="clearfix">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
				<?php endif; ?>
			</div> <!-- end #footer -->
		<?php }; ?>

		<div id="copyright" class="clearfix">
			<p><?php esc_html_e('Powered by ','Rodgers Publishing'); ?> <a href="http://www.RodgersPublishing.com">Rodgers Publishing</a> | <?php esc_html_e('Designed by ','Sciado'); ?> <a href="http://www.Sciado.com">Sciado.com</a></p>
		</div> <!-- end #copyright -->

	</div> <!-- end #wrap -->

	<?php get_template_part('includes/scripts'); ?>
	<?php wp_footer(); ?>
</div>
</div>
</body>
</html>