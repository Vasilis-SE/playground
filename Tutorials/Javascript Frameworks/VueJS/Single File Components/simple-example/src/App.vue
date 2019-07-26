<template>
	<div id="app">
		<header>
			<div class='header-logo'> <img src="./assets/logo.png" /> </div>
			<div class='header-menu-binder'>
				<div class='header-menu'> Home </div>
				<div class='header-menu'> News </div>
				<div class='header-menu'> About </div>
				<div class='header-menu'> Contact </div>
			</div>
		</header>
		<div class="main-container">
			<aside>
				<ul>
					<li> Weather News </li>
					<li> Economy News </li>
					<li> Technology News </li>
					<li> Politics News </li>
					<li> Enviromental News </li>
					<li> Gaming News </li>
					<li> Science News </li>
					<li> Space News </li>
				</ul>
			</aside>
			<main>
				<section> This is a simple use of single file component </section>
				<div class="userslist">
					<VueUsers v-for="user in users" v-bind:userobj="user"></VueUsers>
				</div>
			</main>
		</div>
		<footer></footer>
	</div>
</template>

<style>
	body { margin: 0px; }
	#app {
		font-family: 'Avenir', Helvetica, Arial, sans-serif;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		text-align: center;
		color: #2c3e50;
	}
	#nav {
		padding: 30px;
	}

	#nav a {
		font-weight: bold;
		color: #2c3e50;
	}

	#nav a.router-link-exact-active {
		color: #42b983;
	}
	header {
	    background: #464646;
	    height: 80px;
	    width: 100%;
	    display: grid;
	    grid-template-columns: 200px 1fr;
	    border-bottom: 5px solid #41b883;
	}
	.header-logo > img {
	    width: 60px;
	    padding: 8px;
	}
	.header-menu-binder {
	    display: flex;
	    align-items: center;
	}
	.header-menu {
	    padding: 27px;
	    color: #EEE;
	    font-size: 22px;
	}
	.main-container {
		min-height: 300px;
	    display: grid;
	    grid-template-columns: 200px 1fr;
	}
	aside {
	    background: #464646;
	}
	aside > ul > li {
	    list-style: hiragana;
	    color: #EEEE;
	    font-size: 16px;
	    padding: 10px;
	}
	aside > ul > li:not(:last-child) {
	    border-bottom: 1px solid #5a5a5a;
	}
	section {
	    margin: 5px;
	    padding: 15px;
	    background: #41b883;
	    color: #EEE;
	    font-size: 17px;
	    font-family: Verdana;
	    border-radius: 3px;
	}
	.userslist {
	    display: grid;
	    grid-template-columns: 1fr 1fr 1fr;
	}
</style>
<script>
	import VueUsers from "./components/VueUsers";
	export default {
		name: 'app',
		data() {
			return { users: userList }
			
		},
		components: {
			VueUsers
		}
	}
</script>