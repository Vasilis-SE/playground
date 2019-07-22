<template>
	<div class="vue-users">
		<div class="row" v-for="user in users">
			<div> {{user.userid}} </div>
			<div> {{user.fname}} {{user.lname}} </div>
			<div> {{user.phone}} </div>
			<div> {{user.email}} </div>
		</div>
	</div>
</template>

<script src="../users_list.js"></script>
<script>
export default {
    name: "VueUsers",
    data() {
    	return {
    		users: userList
    	}
    	
    }
}
</script>