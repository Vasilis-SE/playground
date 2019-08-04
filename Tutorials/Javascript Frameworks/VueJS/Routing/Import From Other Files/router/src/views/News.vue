<template>
  	<div class="news">
  		<div class="page-title"> News </div>
		
		<router-link to="/news/programming"> 
			<div class="news-category-selection" referto="programmingNews"> <div class="selection-text"> Programming  </div></div> 
		</router-link>

		<router-link to="/news/science"> 
			<div class="news-category-selection" referto="scientificNews"> <div class="selection-text"> Scientific </div> </div>
		</router-link>
		<router-view name="science" />

		<router-link to="/news/weather"> 
			<div class="news-category-selection" referto="weatherNews"> <div class="selection-text"> Weather </div> </div>
		</router-link>
		<router-view name="weather" />

		<router-link to="/news/economy"> 
			<div class="news-category-selection" referto="economyNews"> <div class="selection-text"> Economy </div> </div>
		</router-link>
		<router-view name="economy" />
  	</div>
</template>

<script>
	export default {
	  name: 'news'
	}
</script>
