<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Tesseract
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php $additional = get_theme_mod('tesseract_footer_additional_content') ? true : false;

        $menuClass = 'only-menu';
        if ( $additional ) $menuClass = 'is-additional';

        $addcontent_hml = get_theme_mod('tesseract_footer_additional_content');
		$footerNav_class = ( is_string($addcontent_hml) && ( $addcontent_hml !== 'nothing' ) ) ? 'is-before' : 'none-before';

		$content = get_theme_mod('tesseract_footer_right');
		$content_default_button = get_theme_mod('tesseract_footer_right_content_if_button');

		$footerWidthClass = ( get_theme_mod('tesseract_footer_width') == 'fullwidth' ) ? ' footer-fullwidth' : ' footer-autowidth';

		if ( defined('TESSERACT_BRANDING_EXIST') ) {
			if ( $content ) :
				$rightContentClass = ' mother-content-' . $content;
			elseif ( !$content && $content_default_button ) :
				$rightContentClass = ' mother-content-notset mother-defbtn-isset';
			else:
				$rightContentClass = ' mother-content-notset mother-defbtn-isset';
			endif;
		} else {
			$rightContentClass = ' mother-branding';
		} ?>

    	<div id="footer-banner" class="cf<?php echo ' menu-' . $menuClass; echo $rightContentClass . $footerWidthClass; ?>">
            <div id="horizontal-menu-wrap" class="<?php echo $menuClass . ' ' . $footerNav_class; ?>">

                <?php // SHOULD some additional content be added before the menu?
                if ( is_string($addcontent_hml) && ( $addcontent_hml !== 'nothing' ) ) : ?>

                    <div id="horizontal-menu-before" class="switch thm-left-left"><?php tesseract_horizontal_footer_menu_additional_content( $addcontent_hml ); ?></div>

                <?php endif; //EOF left menu - IS before content ?>

                <?php $menuSelected = get_theme_mod('tesseract_footer_menu_select');
				if ( $menuSelected !== 'none' ) : ?>

					<section id="footer-horizontal-menu" class="cf <?php echo $footerNav_class; ?>"><?php tesseract_output_menu( FALSE, FALSE, 'secondary', 1 ); ?></section>
              	<?php endif; ?>

            </div><!-- EOF horizontal-menu-wrap -->

            <table width="100%" style="margin-top:30px;border:none;">
              <tr>
                <td height="59" style="border:none;"><a href="http://facebook.com/trendloft"><img src="../facebookIco.png" width="59" height="58"/></a></td>
                <td height="59" style="border:none;"><a href="http://instagram.com/trend_loft"><img src="../twitterIco.png" width="59" height="58"/></a></td>
             	<td height="59" style="border:none;"><a href="http://pintrest.com/trendloft"><img src="../instagramIco.png" width="59" height="58"/></a></td>
             	<td height="59" style="border:none;"><a href="http://twitter.com/trendloft"><img src="../pinterestIco.png" width="59" height="58"/></a></td>
		<td height="59" style="border:none;"><a href="mailto:info@trendloft.net"><img src="../mailIco.png" width="59" height="58"/></a></td>
              </tr>
            </table></td>

      	</div><!-- EOF footer-banner -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>