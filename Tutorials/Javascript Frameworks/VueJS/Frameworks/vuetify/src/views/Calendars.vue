<template>
	<div class="calendars" style="width: 100%;"> 
		<v-container>
			<v-layout>
				<v-flex> <div class="content-title display-1" > Calendars </div> </v-flex>
			</v-layout>
			
			<v-layout row wrap>
			  	<v-flex md6 xs12 column> 
			  		<h4> Simple Form </h4> 
			  		<v-calendar type="month"></v-calendar>
			  	</v-flex>

			  	<v-flex md6 xs12 column> 
			  		<h4> Events </h4> 
			  		<v-calendar type="month" :events="events" color="pink" event-color="pink" dark></v-calendar>
			  	</v-flex>
			</v-layout>

			<br/><br/>

			<v-layout row wrap>
			  	<v-flex md6 xs12 column> 
			  		<h4> Week Type </h4> 
			  		<v-calendar type="week" :events="events1"></v-calendar>
			  	</v-flex>

			  	<v-flex md6 xs12 column> 
			  		<h4> Day Type </h4> 
			  		<v-calendar type="day" :events="events1" color="green" event-color="green"></v-calendar>
			  	</v-flex> 
			</v-layout>

			<br/><br/>

			<v-layout row wrap>
				<v-flex xs12>
				  	<v-btn fab outlined small absolute left color="primary" v-on:click="$refs.rangecalendar.prev()"> <v-icon>mdi-arrow-collapse-left</v-icon> </v-btn>
			  		<v-btn fab outlined small absolute right color="primary" v-on:click="$refs.rangecalendar.next()"> <v-icon>mdi-arrow-collapse-right</v-icon> </v-btn>
				</v-flex>			  	
				<br/><br/>
			  	<v-flex xs12 column> 
			  		<h4> Change Calendar </h4> 
			  		
			  		<v-calendar 
			  			type="month" 
			  			color="green" 
			  			event-color="green" 
			  			ref="rangecalendar"
			  			:events="events2">
			  		</v-calendar>
			  	</v-flex> 
			</v-layout>



		</v-container>
	</div>
</template>

<script>
	export default {
		name: 'calendars',
		data() {
			return {
				events: [
					{ name: "Birthday Ann", start: "2019-08-15"},				
					{ name: "Council Talk", start: "2019-08-19", end: "2019-08-21" }
				],
				events1: [
					{ name: "Birthday Ann", start: "2019-08-15 12:00:00"},
					{ name: "Birthday Bill", start: "2019-08-15 00:00:00"},
					{ name: "Birthday Walter", start: "2019-08-15 23:00:00"},
					{ name: "Birthday Alex", start: "2019-08-15 14:32:00"},
					{ name: "Birthday Walter", start: "2019-08-15 19:48:35"}
				],
				events2: [
					{ name: "Birthday Ann", start: "2019-08-15", end: "2019-08-21"},				
					{ name: "Council Talk", start: "2019-08-19", end: "2019-08-21" }
				]
			}
			
		}
	};
</script>
