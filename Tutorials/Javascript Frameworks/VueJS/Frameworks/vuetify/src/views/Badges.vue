<template>
	<div class="badges" style="width: 100%;"> 
		<v-container>
			<v-layout>
				<v-flex> <div class="content-title display-1" > Badges </div> </v-flex>
			</v-layout>

			<br/><br/>

			<v-layout wrap>
				<v-flex md3 xs6>
					<span> Default Form: </span>
					<v-badge>
						<template v-slot:badge> 0 </template>
						<v-icon> mdi-email </v-icon>
					</v-badge>
				</v-flex>

				<v-flex md3 xs6>
					<span> Badge On Bottom: </span>
					<v-badge bottom>
						<template v-slot:badge> 0 </template>
						<v-icon> mdi-email </v-icon>
					</v-badge>
				</v-flex>

				<v-flex md3 xs6>
					<span> Badge On Left: </span>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<v-badge left>
						<template v-slot:badge> 0 </template>
						<v-icon> mdi-email </v-icon>
					</v-badge>
				</v-flex>

				<v-flex md3 xs6>
					<span> Default Form: </span>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<v-badge left bottom>
						<template v-slot:badge> 0 </template>
						<v-icon> mdi-email </v-icon>
					</v-badge>
				</v-flex>
			</v-layout>

			<br/><br/>

			<v-layout wrap>
				<v-flex md3 xs6>
					<span> Overlap: </span>
					<v-badge overlap>
						<template v-slot:badge> 0 </template>
						<v-icon> mdi-email </v-icon>
					</v-badge>
				</v-flex>

				<v-flex md3 xs6>
					<span> Icon: </span>
					<v-badge>
						<template v-slot:badge> <v-icon dark> mdi-adjust </v-icon> </template>
						<v-icon> mdi-email </v-icon>
					</v-badge>
				</v-flex>


			</v-layout>

		</v-container>
	</div>
</template>

<script>
	export default {
		name: 'badges'
	};
</script>
