<template>
	<div class="pagination" style="width: 100%;"> 
		<v-container>
			<v-layout row wrap>
				<v-flex> <div class="content-title display-1" > Pagination </div> </v-flex>
			</v-layout>
	      	
			<v-layout row wrap>
				<v-flex xs4>
					<h4> Simple Format: </h4>
					<v-pagination v-model="page" :length="6"></v-pagination>
				</v-flex>
				<v-flex xs4>
					<h4> Circle Buttons: </h4>
					<v-pagination v-model="page" :length="6" circle></v-pagination>
				</v-flex>
				<v-flex xs4>
					<h4> Disabled: </h4>
					<v-pagination v-model="page" :length="6" disabled></v-pagination>
				</v-flex>
			</v-layout>

			<v-layout row wrap>
				<v-flex xs4>
					<h4> Prev & Next Icons: </h4>
					<v-pagination v-model="page" :length="6" prev-icon="mdi-arrow-left-bold-box" next-icon="mdi-arrow-right-bold-box"></v-pagination>
				</v-flex>
			</v-layout>

	      	
			
		</v-container>
	</div>
</template>

<script>
	export default {
		name: 'pagination',
		data() {
			return {
				page: 1,
			}
		}
	};
</script>
