<template>
	<div class="user-card">
		<div class="user-icon"> </div>
		<div class="user-name"> {{userobj.fname}} {{userobj.lname}} </div>
		<div class="user-details">
			<div> <b> Country: </b> {{userobj.country}} </div>
			<div> <b> Email: </b> {{userobj.email}} </div>
			<div> <b> Balance: </b> {{userobj.balance}} </div>
		</div>
	</div>
</template>

<style>
	.user-icon {
	    background: url(/img/logo.82b9c7a5.png) center center no-repeat;
	    width: 100%;
	    height: 100px;
	    background-size: contain;
	}
	.user-card {
	    border: 2px solid #f1f1f1;
	    margin: 5px;
	}
	.user-name {
	    background: #f1f1f1;
	    font-weight: bold;
	    padding: 5px 0px;
	}
	.user-details {
	    background: #35495e;
	    color: #EEE;
	    text-align: left;
	    padding: 10px;
	    font-size: 13px;
	}
</style>

<script>
	export default {
	    name: "VueUsers",
	    props: ['userobj'],
	    data: function() {
	    	return {

	    	};
	    }
	}
</script>
