<template>
	<div class="carousel" style="width: 100%;"> 
		<v-container>
			<v-layout row wrap>
				<v-flex> <div class="content-title display-1" > Carousel </div> </v-flex>
			</v-layout>
		
			<v-layout row wrap>
				<v-flex md6 xs12 column>
				  	<h4> Simple Form </h4>
				  	<v-carousel dark>
						<v-carousel-item v-for="item in items" v-bind:src="item.image"></v-carousel-item>
					</v-carousel>
				</v-flex>

				<v-flex md6 xs12 column>
				  	<h4> With Text </h4>
				  	<v-carousel dark>
						<v-carousel-item v-for="item in items" v-bind:src="item.image">
							<div class="display-3 dark"> {{item.text}} </div>
							<div class="subtitle-1 dark pa2"> {{item.description}} </div>
						</v-carousel-item>
					</v-carousel>
				</v-flex>
			</v-layout>

			<br/>
		
			<v-layout row wrap>
				<v-flex md6 xs12 column>
				  	<h4> Hide Delimiters </h4>
				  	<v-carousel hide-delimiters>
						<v-carousel-item v-for="item in items" v-bind:src="item.image"></v-carousel-item>
					</v-carousel>
				</v-flex>

				<v-flex md6 xs12 column>
				  	<h4> With Progress Bar </h4>
				  	<v-carousel progress progress-color="light-green">
						<v-carousel-item v-for="item in items" v-bind:src="item.image"></v-carousel-item>
					</v-carousel>
				</v-flex>
			</v-layout>

			<br/>

			<v-layout row wrap>
				<v-flex> <div class="content-title display-1" > Carousel Cycle </div> </v-flex>
			</v-layout>
			<v-layout row wrap>
				<v-flex md4 xs12 column>
				  	<h4> Default 6000 </h4>
				  	<v-carousel cycle>
						<v-carousel-item v-for="item in items" v-bind:src="item.image"></v-carousel-item>
					</v-carousel>
				</v-flex>

				<v-flex md4 xs12 column>
				  	<h4> 4000 </h4>
				  	<v-carousel cycle interval=4000>
						<v-carousel-item v-for="item in items" v-bind:src="item.image"></v-carousel-item>
					</v-carousel>
				</v-flex>

				<v-flex md4 xs12 column>
				  	<h4> 500 </h4>
				  	<v-carousel cycle interval=500>
						<v-carousel-item v-for="item in items" v-bind:src="item.image"></v-carousel-item>
					</v-carousel>
				</v-flex>
			</v-layout>

			<br/>

			<v-layout row wrap>
				<v-flex md4 sm6 xs12 column>
				  	<h4> Simple Form </h4>
				  	<v-carousel>
						<v-carousel-item v-for="item in items" v-bind:src="item.image"></v-carousel-item>
					</v-carousel>
				</v-flex>

			</v-layout>

		</v-container>
	</div>
</template>

<script>
	export default {
		name: 'carousel',
		data() {
			return {
				items: [
					{ text: "Beach on Hawaii", description: "Beautiful beaches on hawaii with green waters.", image: "/images/carousel/carousel1.jpg" },
					{ text: "Sydney Australia", description: "The beautiful city of Sydney on Australia.", image: "/images/carousel/carousel2.jpg" }
				]
			}
		}
	};
</script>
