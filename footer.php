			<!-- Footer -->
			<section id="footer">
			    <div class="container">
			        <div class="row therow">

			            <div class="col-6 col-6-medium col-12-small column column_1">
			                <?php dynamic_sidebar( 'footer-1' ) ?>
			            </div>
			            <div class="mt-5 col-6 col-6-medium col-12-small column_2">
			                <?php dynamic_sidebar( 'footer-2' ) ?>
			            </div>

			            <div class="col-12">

			                <!-- Copyright -->
			                <div id="copyright">
			                    <ul class="links">
			                        <li>&copy; Untitled. All rights reserved.</li>
			                        <li>Design: <a href="http://shopifylearners.com">Development Hub</a></li>
			                    </ul>
			                </div>

			            </div>
			        </div>
			    </div>
			</section>

			</div>

			<?php wp_footer() ?>
			</body>

			</html>


			<style>
.therow {
    display: flex;
    align-items: center;
    justify-content: center;
}



ul#menu-second-menu {
    text-decoration: none;
    list-style: none;
    line-height: 32px;

}

#footer a {
    text-decoration: none;
    font-size: 17px;
    letter-spacing: 1px;

}
			</style>