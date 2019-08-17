import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import Alerts from './views/Alerts.vue'
import Transitions from './views/Transitions.vue'
import Badges from './views/Badges.vue'
import Bars from './views/Bars.vue'
import BottomSheets from './views/Bottom.Sheets.vue'
import Buttons from './views/Buttons.vue'
import Breadcrumbs from './views/Breadcrumbs.vue'
import Calendars from './views/Calendars.vue'
import Cards from './views/Cards.vue'
import Carousel from './views/Carousel.vue'
import Chips from './views/Chips.vue'

Vue.use(Router)

export default new Router({
	routes: [
	 	{
	 	  	path: '/',
	 	  	name: 'home',
	 	  	component: Home
	 	},
	 	{
	 	  	path: '/alerts',
	 	  	name: 'alerts',
	 	  	component: Alerts
	 	},
	 	{
	 	  	path: '/transitions',
	 	  	name: 'transitions',
	 	  	component: Transitions
	 	},
	 	{
	 	  	path: '/badges',
	 	  	name: 'badges',
	 	  	component: Badges
	 	},
	 	{
	 	  	path: '/bars',
	 	  	name: 'bars',
	 	  	component: Bars
	 	},
	 	{
	 	  	path: '/bottomsheets',
	 	  	name: 'bottomsheets',
	 	  	component: BottomSheets
	 	},
	 	{
	 	  	path: '/buttons',
	 	  	name: 'buttons',
	 	  	component: Buttons
	 	},
	 	{
	 	  	path: '/breadcrumbs',
	 	  	name: 'breadcrumbs',
	 	  	component: Breadcrumbs
	 	},
	 	{
	 	  	path: '/calendars',
	 	  	name: 'calendars',
	 	  	component: Calendars
	 	},
	 	{
	 	  	path: '/cards',
	 	  	name: 'cards',
	 	  	component: Cards
	 	},
	 	{
	 	  	path: '/carousel',
	 	  	name: 'carousel',
	 	  	component: Carousel
	 	},
	 	{
	 	  	path: '/chips',
	 	  	name: 'chips',
	 	  	component: Chips
	 	}
	]
})
