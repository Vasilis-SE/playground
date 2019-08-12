<template>
	<div class="bars" style="width: 100%;"> 
		<v-container>
			<v-layout row wrap>
				<v-flex> <div class="content-title display-1" > Menu Bar </div> </v-flex>
			</v-layout>
		
			<v-layout row wrap>
				<v-flex md6 sm6 xs12>
				 	<h4> Simple Form </h4>
					<v-app-bar color="green" dark> 
						<v-app-bar-nav-icon></v-app-bar-nav-icon>
				        <v-toolbar-title>Page title</v-toolbar-title>
					</v-app-bar> 
				</v-flex>
				<v-flex xs1></v-flex>
				<v-flex md5 sm5 xs12>
				  	<h4> Collapse Attribute </h4>
					<v-app-bar color="green" dark collapse> 
						<v-app-bar-nav-icon></v-app-bar-nav-icon>
				        <v-toolbar-title>Page title</v-toolbar-title>
					</v-app-bar>	
				</v-flex>
			</v-layout>
			<br>
			<v-layout row wrap>
				<v-flex md6 sm6 xs12>
					<h4> Collapse On Scroll Attribute </h4>
					<v-app-bar color="green" dark collapse-on-scroll> 
						<v-app-bar-nav-icon></v-app-bar-nav-icon>
				        <v-toolbar-title>Page title</v-toolbar-title>
					</v-app-bar>
				</v-flex>
				<v-flex xs1></v-flex>
				<v-flex md5 sm5 xs12>
					<h4> Elevate On Scroll Attribute </h4>
					<v-app-bar color="green" dark elevate-on-scroll> 
						<v-app-bar-nav-icon></v-app-bar-nav-icon>
				        <v-toolbar-title>Page title</v-toolbar-title>
					</v-app-bar>
				</v-flex>
			</v-layout>
			<br>
			<v-layout row wrap>
				<v-flex md6 sm6 xs12>
					<h4> Flat Attribute </h4>
					<v-app-bar color="green" dark flat> 
						<v-app-bar-nav-icon></v-app-bar-nav-icon>
				        <v-toolbar-title>Page title</v-toolbar-title>
					</v-app-bar>
				</v-flex>
				<v-flex xs1></v-flex>
				<v-flex md5 sm5 xs12>
					<h4> Shrink On Scroll Attribute </h4>
					<v-app-bar color="green" dark shrink-on-scroll> 
						<v-app-bar-nav-icon></v-app-bar-nav-icon>
				        <v-toolbar-title>Page title</v-toolbar-title>
					</v-app-bar>
				</v-flex>
			</v-layout>
			<br>
			<v-layout row wrap>
				<v-flex md6 sm6 xs12>
					<h4> With Background </h4>
					<v-app-bar color="green" dark src="../assets/background1.jpg"> 
						<v-app-bar-nav-icon></v-app-bar-nav-icon>
				        <v-toolbar-title>Page title</v-toolbar-title>
					</v-app-bar>
				</v-flex>
				<v-flex xs1></v-flex>
				<v-flex md5 sm5 xs12></v-flex>
			</v-layout>
			<br>

			<v-layout wrap row>
				<v-flex xs12> <div class="content-title display-1" > Tool Bars </div> </v-flex>
				<v-flex xs12> <div class="content-discription" > It has the same attributes like the menu bar... </div> </v-flex>
			</v-layout>
			<br>
			<v-layout row wrap>
				<v-flex md6 sm6 xs12>
					<h4> Simple Form </h4>
					<v-toolbar color="orange" dark>
						<v-toolbar-title>Tool Bar Title</v-toolbar-title>
						<v-spacer></v-spacer>
						<v-toolbar-items>
				          	<v-btn text>Tool 1</v-btn>
				          	<v-btn text>Tool 2</v-btn>
				          	<v-btn text>Tool 3</v-btn>
				        </v-toolbar-items>
					</v-toolbar>
				</v-flex>
				<v-flex xs1></v-flex>
				<v-flex md5 sm5 xs12>
					<h4> Collapse Attribute </h4>
					<v-toolbar color="orange" dark collapse>
						<v-toolbar-title>Tool Bar Title</v-toolbar-title>
						<v-spacer></v-spacer>
						<v-toolbar-items>
				          	<v-btn text>Tool 1</v-btn>
				          	<v-btn text>Tool 2</v-btn>
				          	<v-btn text>Tool 3</v-btn>
				        </v-toolbar-items>
					</v-toolbar>
				</v-flex>
			</v-layout>
			<br>
			<v-layout row wrap>
				<v-flex md6 sm6 xs12>
					<h4> Collapse Attribute </h4>
					<v-toolbar color="orange" dark src="../assets/background1.jpg">
						<v-toolbar-title>Tool Bar Title</v-toolbar-title>
						<v-spacer></v-spacer>
						<v-toolbar-items>
				          	<v-btn text>Tool 1</v-btn>
				          	<v-btn text>Tool 2</v-btn>
				          	<v-btn text>Tool 3</v-btn>
				        </v-toolbar-items>
					</v-toolbar>
				</v-flex>
				<v-flex xs1></v-flex>
				<v-flex md5 sm5 xs12></v-flex>
			</v-layout>
			<br>

			<v-layout wrap row>
				<v-flex xs12> <div class="content-title display-1" > System Bars </div> </v-flex>
				<v-flex xs12> <div class="content-discription" > Used to display a status to the user </div> </v-flex>
			</v-layout>
			<br>
			<v-layout row wrap>
				<v-flex md6 sm6 xs12>
					<h4> Simple Form </h4>
					<v-system-bar>
						<v-spacer></v-spacer>
				        <v-icon>mdi-wifi</v-icon>
				        <v-icon>mdi-signal-off</v-icon>
				        <v-icon>mdi-battery</v-icon>
					</v-system-bar>
				</v-flex>
				<v-flex xs1></v-flex>
				<v-flex md5 sm5 xs12>
					<h4> With Opacity </h4>
					<v-system-bar color="blue" lights-out>
						<v-spacer></v-spacer>
				        <v-icon>mdi-wifi</v-icon>
				        <v-icon>mdi-signal-off</v-icon>
				        <v-icon>mdi-battery</v-icon>
					</v-system-bar>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
	export default {
		name: 'bars'
	};
</script>
