<template>
	<div class="dialogs" style="width: 100%;"> 
		<v-dialog
		  	v-model="dialog"
		  	width="500">
		  
		  	<v-card>
		  		<v-card-title primary-title> Simple Dialog Popup </v-card-title>
		  		<v-card-text>
		  			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? 
		  		</v-card-text>
		  	</v-card>
		</v-dialog>

		<v-container>
			<v-layout row wrap>
				<v-flex> <div class="content-title display-1" > Dialogs </div> </v-flex>
			</v-layout>
	
			<v-btn color="warning" @click.stop="dialog = true"> Simple Dialog </v-btn>


			<v-dialog
			  	v-model="dialog2"
			  	width="500">
			  
			  	<template v-slot:activator="{ on }">
		          	<v-btn color="primary" dark v-on="on">With Activator</v-btn>
		        </template>

			  	<v-card>
			  		<v-card-title primary-title> Simple Dialog Popup </v-card-title>
			  		<v-card-text>
			  			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? 
			  		</v-card-text>
			  	</v-card>
			</v-dialog>


			<v-dialog
				persistent
			  	v-model="dialog3"
			  	width="500">
			  
			  	<template v-slot:activator="{ on }">
		          	<v-btn color="primary" dark v-on="on">Persistent</v-btn>
		        </template>

			  	<v-card>
			  		<v-card-title primary-title> Simple Dialog Popup </v-card-title>
			  		<v-card-text>
			  			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? 
			  		</v-card-text>

			  		<v-spacer></v-spacer>

			  		<v-card-actions>
			  			<v-btn color="red darken-1" text @click="dialog3 = false"> Disagree </v-btn>
			  			<v-btn color="green darken-1" text @click="dialog3 = false"> Accept </v-btn>
			  		</v-card-actions>
			  	</v-card>
			</v-dialog>


		</v-container>
	</div>
</template>

<script>
	export default {
		name: 'dialogs',
		data() {
			return {
				dialog: false,
				dialog2: false,
				dialog3: false,
			}
		}
	};
</script>
