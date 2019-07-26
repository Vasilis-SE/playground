<template>
	<div>
		<header>
			<div class="header-logo"> <img src="../assets/header_logo.png" /> </div>
			<div class="header-menu-binder" id="nav">
				<router-link to="/">Home</router-link> |
				<router-link to="/about">News</router-link>
				<router-link to="/about">About</router-link>
				<router-link to="/about">Contact</router-link>
			</div>
		</header>
		<div class="main-content-binder">
			<aside>
				<div class="side-menu-sel"> Programming News </div>
				<div class="side-menu-sel"> Scientific News </div>
				<div class="side-menu-sel"> Weather News </div>
				<div class="side-menu-sel"> Economy News </div>
			</aside>
			<main><router-view/></main>
		</div>
		<footer>
			<div class="footer-content-binder">
				<div class="footer-links">
					<router-link to="/about">About</router-link>
					<router-link to="/about">Contact</router-link>
				</div>
				<div class="footer-logo">
					
				</div>
				<div class="footer-owner-rights"></div>
			</div>
		</footer>
	</div>
</template>

<script>
	export default {
		name: 'pagestructure'
	}
</script>
