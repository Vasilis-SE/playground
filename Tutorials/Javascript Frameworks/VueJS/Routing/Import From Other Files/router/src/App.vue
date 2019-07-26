<template>
	<div id="app">
		<pagestructure></pagestructure>



<!-- 		<div id="nav">
			<router-link to="/">Home</router-link> |
			<router-link to="/about">About</router-link>
		</div>

		<router-view/> -->
	</div>
</template>

<style type="text/css" src="./css/style.css?v=1"></style>

<script>
	import pagestructure from "./components/Page.Structure.Component";
	export default {
		name: 'app',
		data() {
			return { }
		},
		components: {
			pagestructure
		}
	}
</script>