<template>
	<div class="cards" style="width: 100%;"> 
		<v-container>
			<v-layout row wrap>
				<v-flex> <div class="content-title display-1" > Cards </div> </v-flex>
			</v-layout>
			
			<br/>

			<v-layout row wrap>
				<v-flex md3 xs12 column>
					<h4> Simple Form </h4>
					<v-card>
						<v-card-title primary-title> Title </v-card-title>  
						<v-card-text> This is the description </v-card-text>
						<v-card-actions>
							<v-btn color="primary">Submit</v-btn>
						</v-card-actions>
					</v-card>
				</v-flex>

				<v-flex md3 xs12 column>
					<h4> Disabled </h4>
					<v-card disabled>
						<v-card-title primary-title> Title </v-card-title>  
						<v-card-text> This is the description </v-card-text>
						<v-card-actions>
							<v-btn color="primary">Submit</v-btn>
						</v-card-actions>
					</v-card>
				</v-flex>

				<v-flex md3 xs12 column>
					<h4> With Link </h4>
					<v-card href="/">
						<v-card-title primary-title> Title </v-card-title>  
						<v-card-text> This is the description </v-card-text>
						<v-card-actions>
							<v-btn color="primary">Submit</v-btn>
						</v-card-actions>
					</v-card>
				</v-flex>

				<v-flex md3 xs12 column>
					<h4> While Loading </h4>
					<v-card loading>
						<v-card-title primary-title> Title </v-card-title>  
						<v-card-text> This is the description </v-card-text>
						<v-card-actions>
							<v-btn color="primary">Submit</v-btn>
						</v-card-actions>
					</v-card>
				</v-flex>
			</v-layout>

			<br/>

			<v-layout row wrap>
				<v-flex md3 xs12 column>
					<h4> Outlined </h4>
					<v-card outlined>
						<v-card-title primary-title> Title </v-card-title>  
						<v-card-text> This is the description </v-card-text>
						<v-card-actions>
							<v-btn color="primary">Submit</v-btn>
						</v-card-actions>
					</v-card>
				</v-flex>

				<v-flex md3 xs12 column>
					<h4> Ripple </h4>
					<v-card ripple>
						<v-card-title primary-title> Title </v-card-title>  
						<v-card-text> This is the description </v-card-text>
						<v-card-actions>
							<v-btn color="primary">Submit</v-btn>
						</v-card-actions>
					</v-card>
				</v-flex>

				<v-flex md3 xs12 column>
					<h4> With Background </h4>
					<v-card ripple>
						<v-img src="../assets/background1.jpg" height="100px" class="white--text"> 
							<v-card-title primary-title> Title </v-card-title>  
						</v-img>
						<v-card-text> This is the description </v-card-text>
						<v-card-actions>
							<v-btn color="primary">Submit</v-btn>
						</v-card-actions>
					</v-card>
				</v-flex>
			</v-layout>

			<br/>

			<v-layout row wrap>
				<v-flex xs12 column>
					<h4> Horizontal Card </h4>
					<v-card dark color="#1F7087">
			        	<v-list-item three-line>
			                <v-list-item-content class="align-self-start">
			                  	<v-list-item-title class="headline mb-2"> Title </v-list-item-title>
			                  	<v-list-item-subtitle> This is a discription text... </v-list-item-subtitle>
			                </v-list-item-content>
			  
			                <v-list-item-avatar size="125" tile>
			                  	<v-img src="../assets/background1.jpg"></v-img>
			                </v-list-item-avatar>
			            </v-list-item>
					</v-card>
				</v-flex>
			</v-layout>

		</v-container>
	</div>
</template>

<script>
	export default {
		name: 'cards',
		data() {
			return {

			}
		}
	};
</script>
