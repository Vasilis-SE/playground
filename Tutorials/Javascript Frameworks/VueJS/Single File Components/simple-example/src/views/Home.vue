<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App"/>
  </div>
</template>

<script>
import VueUsers from '@/components/VueUsers.vue'

export default {
	name: 'home',
	components: {
		VueUsers
	}
}
</script>
