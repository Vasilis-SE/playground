<template>
  	<div class="news">
  		<div class="page-title"> News </div>
		
		<router-link to="/"> 
			<div class="news-category-selection" referto="programmingNews"> Programming News </div> 
		</router-link>

		<router-link to="/"> 
			<div class="news-category-selection" referto="scientificNews"> Scientific News </div>
		</router-link>

		<router-link to="/"> 
			<div class="news-category-selection" referto="weatherNews"> Weather News </div>
		</router-link>

		<router-link to="/"> 
			<div class="news-category-selection" referto="economyNews"> Economy News </div>
		</router-link>


  	</div>
</template>

<script>
	export default {
	  name: 'news'
	}
</script>
