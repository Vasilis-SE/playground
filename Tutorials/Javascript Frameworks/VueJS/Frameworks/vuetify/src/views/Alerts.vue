<template>
	<div class="alerts" style="width: 100%;"> 
		<v-container>
			<v-layout>
				<v-flex> <div class="content-title display-1" > Alerts </div> </v-flex>
			</v-layout>

			<h3>Simple Usage</h3>
			<v-layout wrap>
				<v-flex xl4 lg4 md6 sm6 xs12 column>
					<v-alert type="success" color="success"> Success </v-alert>
					<v-alert type="error" color="error" > Error </v-alert>
					<v-alert type="warning" color="warning"> Warning </v-alert>
					<v-alert type="info" color="info"> Info </v-alert>
				</v-flex>

				<v-flex xl4 lg4 md6 sm6 xs12 column>
					<v-alert type="success" color="success" icon="mdi-marker-check"> Success with icon </v-alert>
					<v-alert type="error" color="error" icon="mdi-cancel"> Error with icon </v-alert>
					<v-alert type="warning" color="warning" icon="mdi-map-marker-alert-outline"> Warning with icon </v-alert>
					<v-alert type="info" color="info" icon="mdi-comment-question-outline"> Info with icon </v-alert>
				</v-flex>

				<v-flex xl4 lg4 md6 sm6 xs12 column>
					<v-alert type="success" color="success" border="top"> Success with icon </v-alert>
					<v-alert type="error" color="error" border="left"> Error with icon </v-alert>
					<v-alert type="warning" color="warning" border="bottom"> Warning with icon </v-alert>
					<v-alert type="info" color="info" border="right"> Info with icon </v-alert>
				</v-flex>
			</v-layout>

			<h3>Other Functionalities</h3>
			<v-layout wrap>
				<v-flex xl4 lg4 md6 sm6 xs12 column>
					<v-alert type="success" color="success" outlined> Success with icon </v-alert>
					<v-alert type="error" color="error" outlined> Error with icon </v-alert>
					<v-alert type="warning" color="warning" outlined> Warning with icon </v-alert>
					<v-alert type="info" color="info" outlined> Info with icon </v-alert>
				</v-flex>	
				<v-flex xl4 lg4 md6 sm6 xs12 column>
					<v-alert type="success" color="success" prominened> Success with icon </v-alert>
					<v-alert type="error" color="error" prominened> Error with icon </v-alert>
					<v-alert type="warning" color="warning" prominened> Warning with icon </v-alert>
					<v-alert type="info" color="info" prominened> Info with icon </v-alert>
				</v-flex>	

				<v-flex xl4 lg4 md6 sm6 xs12 column>
					<v-alert type="success" color="success" dismissible> Success with icon </v-alert>
					<v-alert type="error" color="error" dismissible> Error with icon </v-alert>
					<v-alert type="warning" color="warning" dismissible> Warning with icon </v-alert>
					<v-alert type="info" color="info" dismissible> Info with icon </v-alert>
				</v-flex>

				<v-flex xl4 lg4 md6 sm6 xs12 column>
					<v-alert type="success" color="success" text> Success with icon </v-alert>
					<v-alert type="error" color="error" text> Error with icon </v-alert>
					<v-alert type="warning" color="warning" text> Warning with icon </v-alert>
					<v-alert type="info" color="info" text> Info with icon </v-alert>
				</v-flex>		
			</v-layout>

		</v-container>
	</div>
</template>

<script>
	export default {
		name: 'alerts'
	};
</script>
