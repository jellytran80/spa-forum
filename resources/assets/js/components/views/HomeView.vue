<template>
	<div>
		<category v-for="category in categories" :category="category" :key="category.id"></category>
	</div>
</template>
<script>

import Category from '../Category.vue';

export default {
		
	components: { Category },

	data () {
		return {
			categories: []
		}
	},
	mounted () {
			axios.get('http://spa-forum.dev/api/categories').then((response) => {
		        this.categories = response.data.data
		    })
		}
}
</script>