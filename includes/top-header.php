<?php 
//session_start();

?>
<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">

<!-- ================================= User Name ========================================== -->
				
				<?php

				if(strlen($_SESSION['login']))
    				{
    					?>

						<li>
							<a href="my-account.php">
							<i class="icon fa fa-user"></i>
							Welcome -<?php echo htmlentities($_SESSION['username']);?>
							</a>
						</li>

					<?php } ?>

<!-- ================================= End User Name ========================================== -->
				
					<?php

					if(strlen($_SESSION['login'])==0)
    					{
    						?>
							
							<li class="test">
								<a href="login.php">
									<i class="icon fa fa-user"></i>
									Login
								</a>
							</li>

							<li>
								<a href="elegentclothing@gmail.com">
									<i class="icon fa fa-envelope"></i>
									ElegentClothing@gmail.com
								</a>
							</li>

							<li>
								<a href="0750449750">
									<i class="icon fa fa-phone"></i>
									(075) 0449750
								</a>
							</li>

						<?php }

					else
						{
							?>
	
							<li>
								<a href="logout.php">
									<i class="icon fa fa-power-off"></i>
									Logout
								</a>
							</li>
							
							<li>
								<a href="elegentclothing@gmail.com">
									<i class="icon fa fa-envelope"></i>
									ElegentClothing@gmail.com
								</a>
							</li>

							<li>
								<a href="0750449750">
									<i class="icon fa fa-phone"></i>
									(075) 0449750
								</a>
							</li>

						<?php } ?>

<!--==========================================================================================-->

				</ul>
			</div>
			<!-- /.cnt-account -->
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->