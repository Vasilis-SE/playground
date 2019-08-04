<template>
  	<v-app id="keep">
	    <v-app-bar app clipped-left color="light-blue darken-1">
	   		<v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
	   		<span class="title ml-3 mr-5"> </span>
	   		<v-text-field solo-inverted flat hide-details label="Search"></v-text-field>
	   		<v-spacer></v-spacer>
	    </v-app-bar>

    	<v-navigation-drawer v-model="drawer" app clipped color="white lighten-4">
      		<v-list dense class="white lighten-4">    
		        
		        <v-layout v-for="(item, prefix) in items"> 
		        	<v-flex>
			        	<v-icon class="xl-1 lg-1 md-1 sm-4 xs-12 fill-height">{{item.icon}}</v-icon>
			        	<div class="xl-11 lg-11 md-11 sm-8 xs-12"> {{item.label}} </div>
			        </v-flex>
		        </v-layout>


      		</v-list>
    	</v-navigation-drawer>

    	<v-content>
      		<v-container fluid fill-height class="grey lighten-4">
        		<v-layout justify-center align-center>
          			<v-flex shrink>
    
          			</v-flex>
        		</v-layout>
      		</v-container>
    	</v-content>
  	</v-app>
</template>

<script>

  export default {
  	name: 'App',
  	components: {
		// HelloWorld,
	},
    props: {
      source: String,
    },
    data: () => ({
      drawer: null,
      items: {
        "uicomponents": {
        	label: "UI Components",
        	icon: "mdi-cogs",
        	child: [
        		{ alerts: "Alerts" }
        	]
        },
        "animations": {
        	label: "Animations",
        	icon: "mdi-animation-outline",
        	childs: [
        		{ transitions: "Transitions" }
        	]
        }

      },
    }),
  }
</script>

<style>
	#keep .v-navigation-drawer__border {
	  display: none
	}
</style>