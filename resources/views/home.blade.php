@extends('app')

@section('title')
Home
@endsection

@section('content')
<div class="home-hero-container">
	<div class="glide">
		<div class="glide__track" data-glide-el="track">
			<ul class="glide__slides">
				<li class="glide__slide">
					<div class="home-hero" style="background-image: url('images/slide-1.jpg')">
						<div class="overlay"></div>
						<div class="container">
							<div class="content">
								<div class="content-box">
									<h1 class="heading">Programs</h1>
									<div class="description">Personalised training & diet plans tailored to your goals</div>
									<button type="button" class="btn btn-primary btn-lg">Sign Up</button>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="home-hero-nav" data-glide-el="controls">
			<button data-glide-dir="<"><</button>
			<button data-glide-dir=">">></button>
		</div>
	</div>
</div>
@endsection