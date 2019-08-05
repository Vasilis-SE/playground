<template>
  	<v-app id="keep">
  		<pagestructure></pagestructure>
  	</v-app>
</template>

<style type="text/css" src="./css/style.css?v=1"></style>
<script>
	import pagestructure from "./components/Page.Structure";
 	export default {
 		name: 'App',	
 		data() {	
 			return { }	
 		},	
 		components: {	
 			pagestructure	
 		}
 	}
</script>
