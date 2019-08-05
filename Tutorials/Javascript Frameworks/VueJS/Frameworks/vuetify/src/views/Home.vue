<template>
	<div class="home"> 
		<v-container>
			<v-layout>
				<v-flex align-center justify-center row fill-height> <img src="../assets/vuetify_logo.png" class="text-center" /> </v-flex>
			</v-layout>
			<v-layout>
				<v-flex> <div class="content-title display-1" > Vuetify Documentation </div> </v-flex>
			</v-layout>

			<v-layout>
				<v-flex>
					<div class="content-section">
						This is a simple documentation project about vuetify. It contains subpages controlled by vue router and every subpage is an example-tutorial
						about a component or style or animation of vuetify framework.
					</div>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
	export default {
		name: 'home'
	};
</script>
