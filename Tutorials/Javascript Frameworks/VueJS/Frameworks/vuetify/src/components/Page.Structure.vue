<template>
  	<div class="pagestructure">
  		<v-app-bar app clipped-left color="light-blue darken-1">
			<v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
			<span class="title ml-3 mr-5"> </span>
			<v-text-field solo-inverted flat hide-details label="Search"></v-text-field>
			<v-spacer></v-spacer>
		</v-app-bar>
  	
  		<v-navigation-drawer  v-model="drawer" app clipped color="white lighten-4">
			<v-list dense class="white lighten-4">    
		    	<v-list-group v-for="(item, prefix) in items" v-bind:prefix='prefix'>
		    	  	<template v-slot:activator>
		    	     	<v-list-item-icon> <v-icon>{{item.icon}}</v-icon> </v-list-item-icon>
		    	  	  	<v-list-item-title> {{item.label}} </v-list-item-title>
		    	  	</template>	
		    	  	<v-list-item v-if="item.childs.length > 0" v-for="subpage in item.childs"> 
		    	  		<router-link v-bind:to="subpage.path" class="sidemenu-page-selection">
		    	  			<v-list-item-icon> <v-icon>mdi-arrow-right-thick</v-icon> </v-list-item-icon>
		    	  	  		<v-list-item-title> {{subpage.title}} </v-list-item-title>
		    	  	  	</router-link>
		    	  	</v-list-item>
		    	</v-list-group>
			</v-list>
		</v-navigation-drawer>

		<v-content>
      		<v-container fluid fill-height class="lighten-4">
        		<v-layout align-center>
        			<router-view/>
        		</v-layout>
      		</v-container>
    	</v-content>
  	</div>
</template>

<script>
  export default {
  	name: 'pagestructure',
    props: {
    	source: String,
    },
    data: () => ({
      drawer: null,
      items: {
        "uicomponents": {
        	label: "UI Components",
        	icon: "mdi-cogs",
        	childs: [
        		{ 
        			title: "Alerts",
        			path: "/alerts" 
        		},
        		{ 
        			title: "Badges",
        			path: "/badges" 
        		},
        		{ 
        			title: "Bars",
        			path: "/bars" 
        		},
        		{ 
        			title: "Bottom Sheets",
        			path: "/bottomsheets" 
        		},
        		{ 
        			title: "Buttons",
        			path: "/buttons" 
        		},
        		{ 
        			title: "Breadcrumbs",
        			path: "/breadcrumbs" 
        		},
        		{ 
        			title: "Calendars",
        			path: "/calendars" 
        		},
        		{ 
        			title: "Cards",
        			path: "/cards" 
        		},
        		{ 
        			title: "Carousel",
        			path: "/carousel" 
        		}
        	]
        },
        "animations": {
        	label: "Animations",
        	icon: "mdi-animation-outline",
        	childs: [
        		{ 
        			title: "Transitions",
        			path: "/transitions" 
        		}
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