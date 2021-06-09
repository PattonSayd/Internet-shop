@extends('layouts.app')

@section('title', $category->name)

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('user/styles/categories.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/styles/categories_responsive.css')}}">
@endsection

@section('js')
   <script src="{{asset('user/js/categories.js')}}"></script>
@endsection

@section('content')

    @section('slider')
        <!-- Home -->
        <div class="home">
            <div class="home_container">
                <div class="home_background" style="background-image:url(/user/images/categories.jpg)"></div>
                <div class="home_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content">
                                    <div class="home_title">{{$category->name}}<span>.</span></div>
                                    <div class="home_text"><p>{{$category->description}}.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Product Sorting -->
					<div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
						<div class="results">Showing <span>12</span> results</div>
						<div class="sorting_container ml-md-auto">
							<div class="sorting">
								<ul class="item_sorting">
									<li>
										<span class="sorting_text">Sort by</span>
										<i class="fa fa-chevron-down" aria-hidden="true"></i>
										<ul>
											<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
											<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
											<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_grid">

                        @include('card', ['category' => $category])

					</div>

					<div class="product_pagination">
						<ul>
							<li class="active"><a href="#">01.</a></li>
							<li><a href="#">02.</a></li>
							<li><a href="#">03.</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>

@endsection
