<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix postsloop dimasonrybox'); ?> itemscope itemtype="http://schema.org/CreativeWork">
	<div class="content-first">
			
		<div class="content-second">
			<h3 class="the-title" itemprop="headline"><a class="entry-title" rel="bookmark" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h3>
		</div>
			
		<div class="content-third" itemprop="text">

			<?php
			if( get_theme_mod( 'posts_meta_disply', '1' ) == 1 ) {
				/* di_magazine_entry_meta(); */
			}
			?>
			
			<div class="entry-content" >
			
				<?php
				if( get_theme_mod( 'archive_post_thumbnail', '1' ) == '1' ) {
					the_post_thumbnail(array(200, 200), array('class'=>'aligncenter'));
				}
				?>
				
				<?php
				if( get_theme_mod( 'excerpt_or_content', 'excerpt' ) == 'content' ) {
					the_content();
				} else {
					the_excerpt();
                }
                

				$relatedGame = get_field('related_game_player');
				echo '<hr class="section-break">';
				echo '<h2 class="headline headline--medium"> Primary Game Played </h2>';
                echo '<ul class="link-list min-list">';
                if($relatedGame){
					foreach($relatedGame as $game){
						?>
						<li><a href="<?php echo get_the_permalink($game);?>">
							<?php echo get_the_title($game);?>
							</a>
						</li>
                    <?php	
                    }
                }



				?>

			</div>
					
		</div>
				
	</div>
</div>

