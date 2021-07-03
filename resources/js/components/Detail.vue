<template>
	<section class="section-product">
		<div class="container">
			<div class="row d-flex mb-3">
				<div class="col-md-3">
					<div class="position-relative d-inline-block">
						<img :src="product.PictureURL" :alt="product.Name">
						<a href="#" class="btn btn-sm btn-danger btn-clearance">Clearance</a>
						<a href="#" class="btn btn-sm btn-danger btn-shipping">Free Shipping</a>
					</div>
				</div>
				<div class="col-md-7 col-lg-6 align-self-center">
					<h2 class="mb-0 mt-2 mt-md-0">{{ product.Name }}</h2>
					<div>
						<star-rating 
							v-model="ratingAvg" 
							:round-start-rating="false"
							:increment="0.01"
							:show-rating="false"
							:star-size="20" 
							read-only />
					</div>
					<div class="more d-block d-md-none mt-2">
						<p class="mb-0" v-if="product.Brand"><strong>Brand:</strong> {{product.Brand}}</p>
						<p v-if="product.Color"><strong>Color:</strong> {{product.Color}}</p>
					</div>
					<p class="description">{{ product.Description }}</p>
				</div>
				<div class="col-md-2 offset-lg-1 text-center position-relative">
					<p class="price">${{ product["Retail Price"] }} <small>${{ product.Price }}</small></p>
					<div class="btn-add-cart">
						<span v-show="!product.Stock" class="text-danger">Out of Stock</span>
						<a :class="{'disabled':!product.Stock}" v-on:click.prevent="addCart" href="#" class="btn btn-success mt-2">Add to Cart</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col more d-none d-md-block">
					<p class="mb-0" v-if="product.Brand"><strong>Brand:</strong> {{product.Brand}}</p>
					<p v-if="product.Color"><strong>Color:</strong> {{product.Color}}</p>
				</div>
			</div>

		</div>
		
		<notify :options="notify" />

	</section>
</template>

<script>

	import StarRating from 'vue-star-rating';
	import Notify from './plugins/Notify'

	export default{
		props:{
			product:{
				type: Object,
      			required: true
			}
		},

		components:{
			StarRating,
			Notify,
		},

		mounted(){
			console.log(this.product)
		},

		data(){
			return{
				ratingAvg: this.product["RatingAvg"],
				notify:{
					type: false,
					message: "",
					show: false
				}
			}
		},

		methods:{
			addCart(){
				this.notify.type = "success"
				this.notify.message = "Product added successfully"
				this.notify.show = true
			}
		}

	};
</script>

<style lang="scss" scoped>
	.section-product{
		.btn-clearance,
		.btn-shipping{
			position: absolute;
			bottom: 5px;
		}

		.btn-clearance{
			left: 5px;
		}

		.btn-shipping{
			right: 5px;
		}

		.description{
			font-size: 1.2em;
			margin-top: 20px;
			margin-bottom: 0;
		}

		.price{
			font-size: 1.8em;
			margin-top: 10px;
			small{
				vertical-align: top;
				text-decoration: line-through;
			}
		}

		.btn-add-cart{
			text-align: center;
			.btn{
				font-size: 1.2em;
				min-width: 80%;
			}

			@media(min-width: 768px){
				position: absolute;
				left: 15px;
				right: 15px;
				bottom: 40px;
			}
			
		}

		.more{
			p{
				font-size: 1.2em;
			}
		}
	}
</style>