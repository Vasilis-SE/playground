<template>
	<div class="buttons" style="width: 100%;"> 
		<v-container>
			<v-layout row wrap>
				<v-flex xs12> <div class="content-title display-1" > Buttons </div> </v-flex>
			</v-layout>
			<br>
			<h4> Basic Coloring </h4>
			<v-layout row wrap>
				<v-flex md2> <v-btn color="success"> Success </v-btn> </v-flex>
				<v-flex md2> <v-btn color="warning"> Warning </v-btn> </v-flex>
				<v-flex md2> <v-btn color="error"> Error </v-btn> </v-flex>
				<v-flex md2> <v-btn color="info"> Info </v-btn> </v-flex>
				<v-flex md2> <v-btn color="disabled" disabled> Disabled </v-btn> </v-flex>
				<v-flex md2> <v-btn color="primary"> Primary </v-btn> </v-flex>
				<v-flex md2> <v-btn color="secondary"> Secondary </v-btn> </v-flex>
			</v-layout>
			<br>
			<h4> Basic Sizing </h4>
			<v-layout row wrap>
				<v-flex md2> <v-btn color="success" x-small> X-Small </v-btn> </v-flex>
				<v-flex md2> <v-btn color="warning" small> Small </v-btn> </v-flex>
				<v-flex md2> <v-btn color="error" medium> Medium </v-btn> </v-flex>
				<v-flex md2> <v-btn color="info" large> Large </v-btn> </v-flex>
				<v-flex md2> <v-btn color="primary" x-large> X-Large </v-btn> </v-flex>
			</v-layout>
			<br>
			<h4> Basic Types </h4>
			<v-layout row wrap>
				<v-flex md12> <v-btn color="warning" block> Block </v-btn> </v-flex>
				<v-flex md2> <v-btn color="primary" depressed> Depressed </v-btn> </v-flex>
				<v-flex md2> <v-btn color="primary" fab> Fab </v-btn> </v-flex>
				<v-flex md2> <v-btn color="primary" outlined> Outlined </v-btn> </v-flex>
				<v-flex md2> <v-btn color="primary" rounded> Rounded </v-btn> </v-flex>
				<v-flex md2> <v-btn color="primary" text> Text </v-btn> </v-flex>
			</v-layout>
			<br>
			<h4> Icons </h4>
			<v-layout row wrap>
				<v-flex md2> 
					<v-btn color="primary" icon> 
						<v-icon>mdi-check</v-icon> 
					</v-btn> 
				</v-flex>
				<v-flex md2> 
					<v-btn color="primary" icon outlined> 
						<v-icon>mdi-check-decagram</v-icon> 
					</v-btn> 
				</v-flex>
				<v-flex md2> 
					<v-btn color="primary" fab dark small> 
						<v-icon>mdi-snowman</v-icon> 
					</v-btn> 
				</v-flex>
				<v-flex md2> 
					<v-btn color="success" fab dark x-small> 
						<v-icon>mdi-solar-panel</v-icon> 
					</v-btn> 
				</v-flex>
				<v-flex md2> 
					<v-btn color="error" fab dark large> 
						<v-icon>mdi-solar-power</v-icon> 
					</v-btn> 
				</v-flex>
			</v-layout>
			<br>
			<h4> Loading </h4>
			<v-layout row wrap>
				<v-flex md12> <v-btn text loading> </v-btn> </v-flex>
			</v-layout>


			<br>
			<h4> Floating </h4>
			<v-layout row wrap>
				<v-flex md12>
		        	<v-card-text style="height: 100px; position: relative">
	              		<v-btn absolute dark fab top right color="pink">
                			<v-icon>mdi-shopify</v-icon>
              			</v-btn>
            		</v-card-text>
				</v-flex>
			</v-layout>
		
		</v-container>
	</div>
</template>

<script>
	export default {
		name: 'buttons',
		data() {
			return {
			}
			
		}
	};
</script>
