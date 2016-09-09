<!-- Menu area -->
<div id="menubar" style="float: left;"> 
	<div id="menubarBinder">
		<img src="/bootstrap/images/logo.png" style="width: 58px;
			height: 58px; float: left; position: relative; z-index: 10;" class="img img-responsive"/>
		<img src="/bootstrap/images/title_logo.png" style="width: 280px;
			height: 67px; float: left; position: absolute; z-index: 10;" class="img"/>
	</div>
	
	<nav class="navbar navbar-inverse" style="position: absolute; width: 100%;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#"> Home </a></li>
					<li><a href="#"> About </a></li>
					<li><a href="#"> News </a></li> 
					<li><a href="#"> Destinations </a></li> 
					<li><a href="#"> Gallery </a></li>
					<li><a href="#"> Contact </a></li>									
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle" type="button" data-toggle="dropdown">
								<span style="color: #9d9d9d; text-decoration: none; display: block; padding-top: 15px;
									padding-bottom: 15px; cursor: pointer;" class="glyphicon glyphicon-log-in"> 
									<span id="loginGlyph" style="margin-left: -8px; font-family: Verdana;"> Login </span> 
								</span> 
							</a>
							<form method="POST" name="formLogin" id="formLogin">
								<ul class="dropdown-menu">
									<li> <input type="text" id="" name="" class="" /> </li>
									<li> <input type="password" id="" name="" class="" /> </li>
									<li> <button type="submit" class="btn btn-primary"> Login </button> </li>
								</ul>
							</form>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div> 
<!-- End of menu area -->

