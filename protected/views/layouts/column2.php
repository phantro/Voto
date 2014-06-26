<?php /* @var $this Controller */ ?>

<?php $this->beginContent('//layouts/intro'); ?>

<div class="row">
	<div class="sixteen columns">						
		
		<div class="twelve columns alpha content">
                    
                        <?php echo $content; ?>
                
                </div><!-- content columna 1 -->
                
                <aside class="four columns omega sidebar">
			
			<div class="widget group">
				<h3 class="widget-title">Galeria</h3>
				<div class="latest-item">
					<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=10&amp;display=random&amp;&amp;layout=x&amp;source=user&amp;user=12313997@N00&amp;size=s"></script>
					<p class="album-info">
						<span class="sub-head">SixPack Producciones</span>
						<span class="main-head">Reservas y Info: 71307676</span>
						<span class="album-actions">
							<a href="#" class="action-btn view">View gallery</a>
						</span>
					</p>	
				</div><!-- /latest-gallery -->
				
			</div><!-- /widget -->
			
			<div class="widget group">
				<h3 class="widget-title">Me Gusta</h3>
				<div class="latest-item">
					
                                    <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fsixpack.producciones&amp;width=217&amp;height=425&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:217px; height:425px;" allowTransparency="true"></iframe>
               
                                </div><!-- /latest-gallery -->
			</div><!-- /widget -->				
			
		</aside><!-- /sidebar -->
													
	</div><!-- /sixteen columns -->
</div><!-- /row -->

<?php $this->endContent(); ?>