<template>
	<div class="bottomsheets" style="width: 100%;"> 
		<v-container>
			<v-layout row wrap>
				<v-flex xs12> <div class="content-title display-1" > Bottom Sheet </div> </v-flex>
				<v-flex xs12> <div class="content-description" > Box that slides from bottom up to display a message (like cookie policy). </div> </v-flex>
			</v-layout>
			<br>
		    <v-layout row wrap>
		    	<v-flex column xs4>
		    		<v-bottom-sheet v-model="sheet">
				        <template v-slot:activator="{ on }"> <v-btn color="purple" dark v-on="on"> Simple Form </v-btn>  </template>
						<v-sheet class="text-center">
					    	<v-btn class="mt-6" flat color="red" @click="sheet = !sheet">close</v-btn>
					        <div>The basic usage of v-bottom-sheet. Almost any content can be placed inside this component</div>
					    </v-sheet>
				    </v-bottom-sheet>
		    	</v-flex>
		    	<v-flex column xs4>
		    		<v-bottom-sheet v-model="sheet2" persistent>
				        <template v-slot:activator="{ on }"> <v-btn color="purple" dark v-on="on"> Persistent </v-btn>  </template>
						<v-sheet class="text-center">
					    	<v-btn class="mt-6" flat color="red" @click="sheet2 = !sheet2">close</v-btn>
					        <div>This is persistent bottom sheet on click on the void wont close it</div>
					    </v-sheet>
				    </v-bottom-sheet>
		    	</v-flex>
		    	<v-flex column xs4>
		    		<v-bottom-sheet v-model="sheet3" inset>
				        <template v-slot:activator="{ on }"> <v-btn color="purple" dark v-on="on"> Inset </v-btn>  </template>
						<v-sheet class="text-center">
					    	<v-btn class="mt-6" flat color="red" @click="sheet3 = !sheet3">close</v-btn>
					        <div>This is persistent bottom sheet on click on the void wont close it</div>
					    </v-sheet>
				    </v-bottom-sheet>
		    	</v-flex>
		    </v-layout>
		</v-container>
	</div>
</template>

<script>
	export default {
		name: 'bottomsheets',
		data() {
			return {
				sheet: false,	
				sheet2: false,	
				sheet3: false,	
			}
			
		}
	};
</script>
