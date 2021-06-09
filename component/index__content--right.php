<?php
	include $level."index__data.php";
?>
			<div class="content-right">
				<div class="product-grids">
					<!--- start-rate---->
					<script src="<?php echo $level.js__path.'jstarbox.js'?>"></script>
					<link rel="stylesheet" href="<?php echo $level.css__path.'jstarbox.css'?>" type="text/css" media="screen" charset="utf-8" />
					<script type="text/javascript">
						jQuery(function () {
							jQuery('.starbox').each(function () {
								var starbox = jQuery(this);
								starbox.starbox({
									average: starbox.attr('data-start-value'),
									changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
									ghosting: starbox.hasClass('ghosting'),
									autoUpdateAverage: starbox.hasClass('autoupdate'),
									buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
									stars: starbox.attr('data-star-count') || 5
								}).bind('starbox-value-changed', function (event, value) {
									if (starbox.hasClass('random')) {
										var val = Math.random();
										starbox.next().text(' ' + val);
										return val;
									}
								})
							});
						});
					</script>
					<!---//End-rate---->
					<!---caption-script---->
					<!---//caption-script---->
					<?php foreach ($list__product_rowsdata as $mangpro)
					{
					?>
						<div class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> <?php echo "(".$mangpro["total"].")" ?></span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="<?php echo $level.img__path.$mangpro["productimage"] ?>" title="product-name" /></a>
								<p>
									<a href="#"><small><?php echo $mangpro["id_producttype"] ?></small> <?php echo $mangpro["id_provider"] ?> <small><?php echo $mangpro["color"] ?></small> <?php echo $mangpro["size"] ?> <?php echo $mangpro["productname"] ?></a>
									<span><?php echo $mangpro["description"] ?></span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.php?id_product=<?php echo $mangpro["id_product"]?>" title ="Details product">Details</a>
								</div>
								<div class="product-info-price">
									<a href="details.php?id_product=<?php echo $mangpro["id_product"]?>" >&#163; <?php echo $mangpro["price"] ?></a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span title="Add product"></span>
							</div>
						</div>
					<?php 
					}
					?>
					<div class="clear"> </div>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
	</div>