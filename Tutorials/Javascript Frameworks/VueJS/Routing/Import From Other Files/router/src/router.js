import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import About from './views/About.vue'
import Contact from './views/Contact.vue'
import News from './views/News.vue'
import ProgrammingNews from './views/Programming.News.vue'
import ScienceNews from './views/Science.News.vue'
import WeatherNews from './views/Weather.News.vue'
import EconomyNews from './views/Economy.News.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/about',
      name: 'about',
      component: About
    },
    {
      path: '/contact',
      name: 'contact',
      component: Contact
    },
    {
      path: '/news',
      name: 'news',
      component: News
    },
    {
       path: '/news/programming',
       name: 'programmingnews',
       component: ProgrammingNews
    },
    {
      path: '/news/science',
      name: 'sciencenews',
      component: ScienceNews
    },
    {
      path: '/news/weather',
      name: 'weathernews',
      component: WeatherNews
    },
    {
      path: '/news/economy',
      name: 'economynews',
      component: EconomyNews
    }
  ]
})
