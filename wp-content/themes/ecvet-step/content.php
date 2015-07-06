<?php
/**
 * The default template for displaying content
 *
 * @package ECVET STEP Themes
 * @subpackage ECVET STEP One
 * @since ECVET STEP One 1.0
 */
 
//Getting data from Theme Options Panel and Meta Box 
global $ecvetstep_options_settings;
$options = $ecvetstep_options_settings;

//Content Layout
$current_content_layout = $options['content_layout'];

//More Tag
$moretag = $options[ 'more_tag_text' ];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
        <div class="featured-sticky"><?php _e( 'Featured post', 'ecvetstep' ); ?></div>
    <?php endif; ?>
    
    <?php if ( function_exists( 'ecvetstep_content_image' ) ) : ecvetstep_content_image(); endif; ?>
    
    <div class="entry-container">
    
		<header class="entry-header">
    		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ecvetstep' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php if ( 'post' == get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php ecvetstep_header_meta(); ?>
                </div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php 
		//Get Excerpt
		$ecvetstep_excerpt = get_the_excerpt();
		
		if ( is_search() || ( !is_single() && $current_content_layout=='excerpt' && !empty( $ecvetstep_excerpt ) ) ) : ?>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->     
		<?php else : ?>
            <div class="entry-content">
                <?php the_content( $moretag ); ?>
                <?php wp_link_pages( array( 
					'before'		=> '<div class="page-link"><span class="pages">' . __( 'Pages:', 'ecvetstep' ) . '</span>',
					'after'			=> '</div>',
					'link_before' 	=> '<span>',
					'link_after'   	=> '</span>',
				) ); 
				?>
            </div><!-- .entry-content -->
        <?php endif; ?>

        <footer class="entry-meta">
        	<?php ecvetstep_footer_meta(); ?>
			<?php if ( comments_open() && ! post_password_required() ) : ?>
                <span class="sep"> | </span>
                <span class="comments-link">
                    <?php comments_popup_link(__('Leave a reply', 'ecvetstep'), __('1 Reply', 'ecvetstep'), __('% Replies', 'ecvetstep')); ?>
                </span>
            <?php endif; ?>            
            <?php edit_post_link( __( 'Edit', 'ecvetstep' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'ecvetstep_author_bio_avatar_size', 68 ) ); ?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'ecvetstep' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'ecvetstep' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>            
        </footer><!-- .entry-meta -->
        
  	</div><!-- .entry-container -->
    
</article><!-- #post-<?php the_ID(); ?> -->