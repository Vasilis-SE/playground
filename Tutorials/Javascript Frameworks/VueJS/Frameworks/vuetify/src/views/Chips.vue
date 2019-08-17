<template>
	<div class="chips" style="width: 100%;"> 
		<v-container>
			<v-layout row wrap>
				<v-flex> <div class="content-title display-1" > Chips </div> </v-flex>
			</v-layout>
		
			<h4> Simple Form </h4>
			<v-layout row wrap>
				<v-flex xs12> <v-chip> Text </v-chip> </v-flex>
			</v-layout>

			<br/>

			<h4> Chip Sizes </h4>
			<v-layout row wrap>
				<v-flex md2 xs12> <v-chip x-small> Text </v-chip> </v-flex>
				<v-flex md2 xs12> <v-chip small> Text </v-chip> </v-flex>
				<v-flex md2 xs12> <v-chip> Text </v-chip> </v-flex>
				<v-flex md2 xs12> <v-chip large> Text </v-chip> </v-flex>
				<v-flex md2 xs12> <v-chip x-large> Text </v-chip> </v-flex>
			</v-layout>

			<br/>

			<h4> Chip Coloring </h4>
			<v-layout row wrap>
				<v-flex md2 xs12> <v-chip color="success"> Success </v-chip> </v-flex>
				<v-flex md2 xs12> <v-chip color="warning"> Warning </v-chip> </v-flex>
				<v-flex md2 xs12> <v-chip color="error"> Error </v-chip> </v-flex>
				<v-flex md2 xs12> <v-chip color="info"> Info </v-chip> </v-flex>
			</v-layout>

			<br/>

			<h4> Other </h4>
			<v-layout row wrap>
				<v-flex md1 xs12> <v-chip ripple> Ripple </v-chip> </v-flex>
				<v-flex md1 xs12> <v-chip outlined> Outlined </v-chip> </v-flex>
				<v-flex md2 xs12> <v-chip label> No Round Edges </v-chip> </v-flex>
				<v-flex md1 xs12> <v-chip draggable> Draggable </v-chip> </v-flex>
				<v-flex md1 xs12> <v-chip disabled> Disabled </v-chip> </v-flex>
				<v-flex md2 xs12> <v-chip v-if="chip1" close @click:close="chip1 = false"> Close Icon </v-chip> </v-flex>
			</v-layout>


		</v-container>
	</div>
</template>

<script>
	export default {
		name: 'chips',
		data() {
			return {
				chip1: true
			}
		}
	};
</script>
