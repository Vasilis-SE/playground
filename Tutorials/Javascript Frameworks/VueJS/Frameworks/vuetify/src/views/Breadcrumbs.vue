<template>
	<div class="breadcrumbs" style="width: 100%;"> 
		<v-container>
			<v-layout row wrap>
				<v-flex xs12> <div class="content-title display-1" > Bread Crumbs </div> </v-flex>

				<v-flex xs12> <h4> Simple Form </h4> </v-flex>
				<v-flex xs12>
				  	<v-system-bar color="green lighten-5" text>
						<v-breadcrumbs :items="items" divider=">"></v-breadcrumbs>
					</v-system-bar>
				</v-flex>

				<v-flex xs12> <h4> Breadcrumbs With Icons </h4> </v-flex>
				<v-flex xs12>
				  	<v-system-bar color="green lighten-5" text>
						<v-breadcrumbs :items="items">
							<template v-slot:divider>
					          	<v-icon>mdi-arrow-expand-right</v-icon>
					        </template>
						</v-breadcrumbs>
					</v-system-bar>
				</v-flex>

			</v-layout>

		</v-container>
	</div>
</template>

<script>
	export default {
		name: 'breadcrumbs',
		data() {
			return {
				items: [
					{
						text: "Home",
						disabled: false,
						href: "/"
					},
					{
						text: "UI Components",
						disabled: false,
						href: "/"
					},
					{
						text: "Breadcrumbs",
						disabled: true,
						href: ""
					}
				]
			}	
		}
	};
</script>
