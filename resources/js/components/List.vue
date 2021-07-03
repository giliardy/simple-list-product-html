<template>
	<div class="container">
		<section class="box-list-product" v-for="(item, key) in list">
			<div class="row d-flex align-items-center">
				<div class="col-6 col-md-2">
					<img :src="item.ThumbnailURL" :alt="item.Name">
				</div>
				<div class="col-6 col-md-7 col-lg-8">
					<h2>{{ item.Name }}</h2>
					<p class="price">${{ item["Retail Price"] }} <small>${{ item.Price }}</small></p>
				</div>
				<div class="col-12 col-md-3 col-lg-2 mt-3 mt-md-0 text-center">
					<a :href="'/products/' + item.Slug" class="btn btn-success">View Details</a>
				</div>
			</div>	
		</section>
	</div>
</template>

<script>
	
	export default{
		props:{
			list:{
      			required: true
			}
		},

		mounted(){
			
		},

		data(){
			return{
				
			}
		},

		methods:{

		}
	};

</script>

<style lang="scss" scoped>
	.box-list-product{
		border: 1px solid #CCC;
		border-radius: 4px;
		padding: 10px;
		margin-bottom: 20px;
		background-color: #f6f6f6;

		.price{
			font-weight: 600;
			font-size: 1.2em;
			margin: 0;
			small{
				vertical-align: top;
			}
		}
	}
</style>