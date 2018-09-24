<?php
/**
 * The template for displaying the footer.
 *
 * @package Theme Freesia
 * @subpackage Idyllic
 * @since Idyllic 1.0
 */
?>

<?php if( is_front_page()): ?>
	<div class="wrap">
		<h2 class="titulo-sessao">Serviços</h2>
		<ul class="logos-servicos">
			<li><a href="http://repositorio.ibict.br/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/img/lgo/ridi.png' ?>" alt="RIDI - Repositório Institucional do Instituto Brasileiro de Informação em Ciência e Tecnologia"></a></li>
			<li><a href="http://diadorim.ibict.br/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/img/lgo/diadorim.png' ?>" alt="Diadorim - Diretório de Políticas Editoriais das Revistas Científicas Brasileiras"></a></li>
			<li><a href="http://deposita.ibict.br/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/img/lgo/deposita.png' ?>" alt="Deposita - Repositório Comum do Brasil"></a></li>
			<li><a href="http://www.latindex.org" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/img/lgo/latindex.jpg' ?>" alt="Latindex - Sistema Regional de Información en Línea para Revistas Científicas de América Latina, el Caribe, España y Portugal"></a></li>
			<li><img src="<?php echo get_stylesheet_directory_uri() . '/img/lgo/cc.png' ?>" alt="CC"></li>
		</ul>
	</div>

	<?php $catquery = new WP_Query( 'cat=159&posts_per_page=2' ); ?>
		<h2 class="titulo-sessao">Eventos</h2>
		<ul class="wrap box-eventos">
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
				<li>
					<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<?php if(has_post_thumbnail()) { ?>
						<div class="box-eventos__thumb">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php
					} ?>
					<?php the_content(); ?>
				</li>
			<?php endwhile; ?> 
		</ul>
	<?php wp_reset_postdata(); ?>

	<?php $catquery = new WP_Query( 'cat=157&posts_per_page=5' ); ?>
		<h2 class="titulo-sessao">Notícias</h2>
		<ul class="wrap box-noticias">
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
				<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
			<?php endwhile; ?> 
		</ul>
	<?php wp_reset_postdata(); ?>

	<div class="wrap">
		<h2 class="titulo-sessao">Parceiros</h2>
		<ul class="logos-carousel">
			<li><a href="http://www.lareferencia.info/pt/" target="blank"><img class="la-referencia-logo" src="<?php echo get_stylesheet_directory_uri() . '/img/lgo/la_referencia.png' ?>" alt="La Referencia - Red de Repositorios de Acceso Abierto a la Ciencia"></a></li>
			<li><a href="https://www.rcaap.pt/" target="blank"><img class="rcaap-logo" src="<?php echo get_stylesheet_directory_uri() . '/img/lgo/rcaap.png' ?>" alt="RCAAP - Repositórios Científicos de Acesso Aberto de Portugal"></a></li>
			<li><a href="http://www.scielo.org/php/index.php" target="blank"><img class="scielo-logo" src="<?php echo get_stylesheet_directory_uri() . '/img/lgo/scielo.jpg' ?>" alt="Scielo - Scientific Electronic Library Online"></a></li>
			<li><a href="https://www.cplp.org/" target="blank"><img class="cplp-logo" src="<?php echo get_stylesheet_directory_uri() . '/img/lgo/cplp.png' ?>" alt="CPLP - Comunidade dos Países de Língua Portuguesa"></a></li>
			<li><a href="https://www.coar-repositories.org/" target="blank"><img class="coar-logo" src="<?php echo get_stylesheet_directory_uri() . '/img/lgo/coar.png' ?>" alt="COAR - Confederation of Open Access Repositories"></a></li>
			<li><a href="http://www.ndltd.org/" target="blank"><img class="ndltd-logo" src="<?php echo get_stylesheet_directory_uri() . '/img/lgo/ndltd.jpg' ?>" alt="NDLTD - Networked Digital Library of Theses and Dissertations"></a></li>
			<li><a href="http://bdtd.ibict.br/" target="blank"><img class="bdtd-logo" src="<?php echo get_stylesheet_directory_uri() . '/img/lgo/bdtd.jpg' ?>" alt="BDTD - Biblioteca Digital Brasileira de Teses e Dissertações"></a></li>
		</ul>
	</div>
<?php endif;?>
</div><!-- end #content -->
<!-- Footer Start ============================================= -->
<footer id="colophon" class="site-footer">
<?php
$idyllic_settings = idyllic_get_theme_options(); 
$footer_column = $idyllic_settings['idyllic_footer_column_section'];
	if( is_active_sidebar( 'idyllic_footer_1' ) || is_active_sidebar( 'idyllic_footer_2' ) || is_active_sidebar( 'idyllic_footer_3' ) || is_active_sidebar( 'idyllic_footer_4' )) { ?>
	<div class="widget-wrap">
		<div class="wrap">
			<div class="widget-area">
			<?php
				if($footer_column == '1' || $footer_column == '2' ||  $footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.$footer_column.'">';
					if ( is_active_sidebar( 'idyllic_footer_1' ) ) :
						dynamic_sidebar( 'idyllic_footer_1' );
					endif;
				echo '</div><!-- end .column'.$footer_column. '  -->';
				}
				if($footer_column == '2' ||  $footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.$footer_column.'">';
					if ( is_active_sidebar( 'idyllic_footer_2' ) ) :
						dynamic_sidebar( 'idyllic_footer_2' );
					endif;
				echo '</div><!--end .column'.$footer_column.'  -->';
				}
				if($footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.$footer_column.'">';
					if ( is_active_sidebar( 'idyllic_footer_3' ) ) :
						dynamic_sidebar( 'idyllic_footer_3' );
					endif;
				echo '</div><!--end .column'.$footer_column.'  -->';
				}
				if($footer_column == '4'){
				echo '<div class="column-'.$footer_column.'">';
					if ( is_active_sidebar( 'idyllic_footer_4' ) ) :
						dynamic_sidebar( 'idyllic_footer_4' );
					endif;
				echo '</div><!--end .column'.$footer_column.  '-->';
				}
				?>
			</div> <!-- end .widget-area -->
		</div><!-- end .wrap -->
	</div> <!-- end .widget-wrap -->
	<?php } ?>

	<!-- BLOCO DINÂMICO DO RODAPÉ DO TEMA -->

	<?php /*
	<div class="site-info" <?php if($idyllic_settings['idyllic-img-upload-footer-image'] !=''){?>style="background-image:url('<?php echo esc_url($idyllic_settings['idyllic-img-upload-footer-image']); ?>');" <?php } ?>>
	<div class="wrap">
	<?php do_action('idyllic_footer_menu');
	if($idyllic_settings['idyllic_buttom_social_icons'] == 0):
		do_action('idyllic_social_links');
	endif;

	if ( is_active_sidebar( 'idyllic_footer_options' ) ) :
		dynamic_sidebar( 'idyllic_footer_options' );
	else:
		echo '<div class="copyright">'; ?>
		<a title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name', 'display' ); ?></a> | 
						<?php esc_html_e('Designed by:','idyllic'); ?> <a title="<?php echo esc_attr__( 'Theme Freesia', 'idyllic' ); ?>" target="_blank" href="<?php echo esc_url( 'https://themefreesia.com' ); ?>"><?php esc_html_e('Theme Freesia','idyllic');?></a> <span> 
						<?php  echo '&copy; ' . date_i18n(__('Y','idyllic')) ; ?> <a title="<?php echo esc_attr__( 'WordPress', 'idyllic' );?>" target="_blank" href="<?php echo esc_url( 'https://wordpress.org' );?>"><?php esc_html_e('WordPress','idyllic'); ?></a> </span>
					</div>
	<?php endif;
	?>
			<div style="clear:both;"></div>
		</div> <!-- end .wrap -->
	</div> <!-- end .site-info --> */ ?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="wrap">
				<div class="copyright">
					<div class="logo-ibict">
						<a href="http://www.ibict.br/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/img/lgo/ibict.png' ?>" alt="IBICT - Instituto Brasileiro de Informação em Ciência e Tecnologia"></a>
						<span>SAUS Quadra 05 Lote 06 Bloco H<br>Asa Sul, Brasília, DF, 70070-912</span>
					</div>
					<div class="logo-mctic">
						<a href="http://www.mctic.gov.br/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/img/lgo/mctic.png' ?>" alt="Ministério da Ciência, Tecnologia, Inovações e Comunicações"></a>
					</div>
				</div>
				<div style="clear:both;"></div>
			</div> <!-- end .wrap -->
		</div> <!-- end .site-info -->
		<a class="go-to-top" style="display: block;"><span class="icon-bg"></span><span class="back-to-top-text">Top</span><i class="fa fa-angle-up back-to-top-icon"></i></a>
		<div class="page-overlay"></div>
	</footer>

	<?php
		$disable_scroll = $idyllic_settings['idyllic_scroll'];
		if($disable_scroll == 0):?>
			<a class="go-to-top">
				<span class="icon-bg"></span>
				<span class="back-to-top-text"><?php esc_html_e('Top','idyllic');?></span>
				<i class="fa fa-angle-up back-to-top-icon"></i>
			</a>
	<?php endif; ?>
	<div class="page-overlay"></div>
</footer> <!-- end #colophon -->
</div><!-- end .site-content-contain -->
</div><!-- end #page -->
<?php wp_footer(); ?>

<script defer="defer" src="//barra.brasil.gov.br/barra.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/js/slick.min.js' ?>" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/js/base.js' ?>" type="text/javascript"></script>
</body>
</html>