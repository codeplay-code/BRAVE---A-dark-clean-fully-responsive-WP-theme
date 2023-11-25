
	</div>
	<!-- END body -->

	<!-- BEGIN WIDGETS -->
	<div class="widgets-wrapper">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widgets') ) : ?><?php endif; ?>
	</div>
	<!-- END WIDGETS -->

</div>
<!-- END #sitewrap -->

<!-- BEGIN FOOTER -->
<div id="footer"></div>
<!-- END FOOTER -->

<!-- wp_footer -->
<?php wp_footer(); ?>
</body>
</html>