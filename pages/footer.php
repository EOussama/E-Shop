      <footer>
        	<div class="container">
        		<div class="flex" style="margin-bottom: 35px;">
        			<div style="flex: 9; margin-right: 20px;">
        				<h2 style="margin-bottom: 10px;"><i class="fas fa-book"></i> Description</h2>
        				<p class="indent"><b>E-Shop</b> is a fictional virtual commercial website sharing many features with the prominent big names, the likes of <b>Amazon</b> and <b>eBay</b>, nothing too ambitious is expected from this project, it has no production goals or anything like that other than being just a class project.</p>
        				<br>
        				<p class="indent">Among many features this website provides is social interaction, you can for a change comment on products, or view others' reviews. Reaching sellers has never been this easy too, however, those key features are not open to the public, and require registering an account to fully experience the true shopping experience we strive to provide.</p>
        				<br>
        				<p class="indent">The website is highly moderated, our support team is working their best to remove and/or flag inappropriate content, as one of our many goals is to create a family-friendly space for people of all ages to trade goodies.</p>
        			</div>
        			<div style="flex: 3;">
        				<h2><i class="fas fa-link"></i> Similar websites</h2>
        				<ul class="list">
        					<a href="https://www.amazon.com/" target="_blank">Amazon<li class="listitem"></li></a>
        					<a href="https://www.ebay.com/" target="_blank">eBay<li class="listitem"></li></a>
        					<a href="https://www.newegg.com/" target="_blank">Newegg<li class="listitem"></li></a>
        					<a href="https://www.avito.ma/" target="_blank">Avito<li class="listitem"></li></a>
        					<a href="https://www.ebid.net/uk/" target="_blank">eBid<li class="listitem"></li></a>
        				</ul>
        			</div>
        		</div>
        		<hr><br>
				<h2><i class="fas fa-user"></i> Creators</h2>
				<div id="creatorCards" class="flex">
					<div class="fold creatorCard">
						<h3>Redouan Andalousi</h3>
						<ul class="list">
							<a href="https://www.facebook.com/andaloussir" target="_blank"><li><i class="fab fa-facebook"></i> Facebook</li></a>
							<a href="https://plus.google.com/u/0/110136347706439063851" target="_blank"><li><i class="fab fa-google"></i> Gmail</li></a>
							<a href="https://www.linkedin.com/in/andaloussir" target="_blank"><li><i class="fab fa-linkedin"></i> LinkedIn</li></a>
						</ul>
					</div>
					<div class="fold creatorCard">
						<h3>Oussama Essamadi</h3>
						<ul class="list">
							<a href="https://www.facebook.com/oussama.essamadi" target="_blank"><li><i class="fab fa-facebook"></i> Facebook</li></a>
							<a href="https://plus.google.com/u/0/+eoussama" target="_blank"><li><i class="fab fa-google"></i> Gmail</li></a>
							<a href="https://www.linkedin.com/in/oussama-essamadi-a59326155/" target="_blank"><li><i class="fab fa-linkedin"></i> LinkedIn</li></a>
						</ul>
					</div>
					<div class="fold creatorCard">
						<h3>Rachid Lwajdi</h3>
						<ul class="list">
							<a href="https://www.facebook.com/rachid.louajdim" target="_blank"><li><i class="fab fa-facebook"></i> Facebook</li></a>
							<a href="www.facebook.com" target="_blank"><li><i class="fab fa-google"></i> Gmail</li></a>
							<a href="www.facebook.com" target="_blank"><li><i class="fab fa-linkedin"></i> LinkedIn</li></a>
						</ul>
					</div>
				</div>
     	 		<br><hr style="margin-top: 10px;">
      	 		<p id="copyRight">
      	 			All rights reserved &copy;
      	 			<?php
						$year = date('Y');
						$output = ($year != '2018') ? "2018 - $year" : $year;
						echo $output;
					?>
      	 		</p>
       	 	</div>
        </footer>
        
        <script type="text/javascript" src="\E-Shop\scripts\modal.js"></script>
        <script type="text/javascript" src="\E-Shop\scripts\sideMenu.js"></script>
        <script type="text/javascript" src="\E-Shop\scripts\main.js"></script>
    </body>
</html>