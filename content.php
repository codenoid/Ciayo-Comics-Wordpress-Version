		<div class="bb menu" id="menu-detail">
			<ul class="menu-list">
				<li class="logo"><a href="index.html" title=""><img src="logo.jpg" alt=""></a> </li>
				<li class=""><a title=""><?php the_title(); ?></a></li>
				<li class=""><a title="" style="font-size:20px;">|</a></li>
				<li class=""><a title="">Moved In !</a></li>

				<li class="float right">
					<a class="" href="contact.html" style="font-size:15px;margin-right:-75px;">Share This</a>
					<a target="_blank" href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="Share This"><i style="font-size:25px;color:#4D69A1;" class="facebook icon"></i></a>
				</li>
			</ul>
		</div>
		<div style="text-align:center;margin-top:20px;" class="bb container"><br><br>
		<?php the_content(); ?>
		</div>
