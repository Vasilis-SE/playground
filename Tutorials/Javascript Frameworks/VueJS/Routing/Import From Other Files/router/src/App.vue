<template>
	<div id="app">
		<pagestructure></pagestructure>
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