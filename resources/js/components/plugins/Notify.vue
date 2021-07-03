<template>
	<div
		v-if="options.show" 
		class="alert alert-custom" 
		:class="'alert-' + options.type"
		role="alert">
	  	
	  	<strong>{{ options.message }}</strong>
	</div>
</template>

<script>

	export default{
		props:{
			options:{
				type: Object,
      			required: true
			}
		},

		watch:{
			'options.show': function(newValue, oldValue){
				if(newValue)
					setTimeout(() => {this.options.show = false }, 3000)
			}
		},
	};
</script>