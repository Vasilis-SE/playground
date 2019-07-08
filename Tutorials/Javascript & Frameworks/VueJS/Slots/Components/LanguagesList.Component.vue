<template>
	<div> <slot v-for="language in programmingLangs.Web"> {{language}} </slot> </div>
	<div> <slot v-for="language in programmingLangs.Databases"> {{language}} </slot> </div>
	<div> <slot v-for="language in programmingLangs.Native"> {{language}} </slot> </div>
	<div> <slot v-for="language in programmingLangs.Minning"> {{language}} </slot> </div>
</template>

<script>
	export default {
		data: function {
			programmingLangs: {
				"Web": ["PHP","Javascript","HTML", "CSS"],
				"Databases": ["SQL", "Redis", "MongoDB"],
				"Native": ["C","C++","C#","Java","Pearl","Pascal"],
				"Minning": ["R"]
			}	
		},
		methods: {}
	}
</script>