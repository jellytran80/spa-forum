import Vue from 'vue'
import Router from 'vue-router'

// Views
import HomeView from '../components/views/HomeView'
import CategoryView from '../components/views/CategoryView'
import TopicView from '../components/views/TopicView'

Vue.use(Router)

export default new Router({
	routes: [
		{ path: '/', name: 'Home', component: HomeView },
		{ path: '/category', name: 'Category', component: CategoryView },
		{ path: '/topic', name: 'Topci', component: TopicView }
    ]
})