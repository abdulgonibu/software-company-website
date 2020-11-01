@extends('frontend.layouts.master')
@section('content')


<div class="fixed">
	<ul class="services-list">
		          @foreach($portfolios as $portfolio)
				           <li>
						   <h3 class="sl-title">{{$portfolio->title}}</h3>
							<div class="sl-pic"><img src="{{url('upload/portfolio_images/'.$portfolio->image)}}" width="128" height="128" alt=""/>
							</div>
							<p>{{$portfolio->short_title}}</p>
							<a href="{{route('wdevolopment')}}" class="" target="" rel="">Learn more</a>                </li>
				@endforeach
				</ul>
	<a href="{{route('software.devolopment.service')}}" class="all-link" target="" rel="">All services</a>    </div>
<div class="blue-block">
	<div class="fixed">
		<div class="bl-text">Lvivity is the software development outsourcing company that creates efficient and scalable products based on latest web & mobile technologies for various business industries. A customer-oriented approach is the philosophy our agency operations are built upon.</div>
	</div>
</div>
<div class="fixed">
	<h3 class="title">SOME OF OUR CASES</h3>
	<div class="title-text">Lvivity offer full-cycle of outsourcing software development: from initial identification of business requirements to system testing, deployment, and maintenance. We transform ideas into engaging digital experiences!</div>
	<div class="tt-pattern"><span class="icon-chevron-down"></span></div>
	<ul class="examples-list">
						<li>
				<div class="el-title"><a
				href="{{ route('learn.case')}}">Ecommerce Ponnosala</a>
				</div>
				<div class="el-pic">
					<a href="{{ route('learn.case')}}">
						<img width="700" height="558" src="{{asset('frontend/wp-content/uploads/2019/01/lean-case.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""  sizes="(max-width: 700px) 100vw, 700px" />                        </a>
				</div>
			</li>
						<li>
				<div class="el-title"><a
							href="{{ route('fan.club')}}">Channal T24</a>
				</div>
				<div class="el-pic">
					<a href="{{ route('fan.club')}}">
						<img width="700" height="558" src="{{asset('frontend/wp-content/uploads/2019/01/fanclub.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""  sizes="(max-width: 700px) 100vw, 700px" />                        </a>
				</div>
			</li>
				</ul>
	<a href="{{route('our.work')}}" class="all-link" target="" rel="">See more</a>    </div>
<div class="reviews-block">
	<div class="fixed">
		<div class="fixed-1070">
			<h3 class="title">TESTIMONIALS</h3>
			<div class="title-text">Lvivity cooperates with small and medium businesses, large corporations, startups, and individuals all across the globe. And this is what our clients say about us.</div>
			<div class="reviews-over">
				<div class="reviews-slider">
					@foreach($sliders as $slider)
												<div>
						
							<div class="reviews-item">
								<div class="ri-icon"><span class="icon-quote-left"></span></div>
							<p>{{ $slider->long_title}}</p>
								<div class="reviews-name">
									<span>{{ $slider->short_title}}</span>                                 </div>
								<div class="reviews-info">
									<div class="ri-pic"><img
												src="{{asset('frontend/wp-content/themes/lvivity/assets/images/ri-pic.png')}}"
												width="86" height="92" alt=""/>
									</div>
									<div class="ri-cont">
										<img src="{{asset('frontend/wp-content/themes/lvivity/assets/images/ri-cont.png')}}"
											 width="95" height="27" alt=""/>
																					<div class="rating">
											<div class="vote-wrap">
												<div class="vote-hover">
													<div class="vote-block" style="height: 16px; width: 90px;">
														<div class="vote-stars"
															 style="height: 16px; width: 90px;"></div>
														<div class="vote-active"
															 style="height: 16px; width: 90px;"></div>
													</div>
												</div>
											</div>
										</div>
										<a href="https://clutch.co/profile/lvivity#reviews" class="" target="_blank" rel="nofollow">View all reviews</a>                                        </div>
								</div>
							</div>
						</div>
						@endforeach
										</div>

			</div>
			<div class="relations-block">
				<div class="relations-flex">
					<div>
						<h3>What are you waiting for?</h3>
						<p>Let's start a new software project together!</p>
					</div>
					<a href="{{route('contact.us')}}" class="btn-relations" target="" rel="">Get in touch</a>                    </div>
			</div>
		</div>
	</div>
</div>
<div class="fixed">
	<h3 class="title">BLOG</h3>
	<div class="title-text">Apart from doing your job well, it is also very important to share your thoughts and experiences with the community. Read interesting stuff on our blog and leave your comments.</div>
	<div class="tt-pattern"><span class="icon-chevron-down"></span></div>
	<ul class="latest-articles">
								<li>
			<div class="la-pic">
				<a href="what-is-industry-4-0.html">
					<img width="1200" height="804" src="{{asset('frontend/wp-content/uploads/2020/10/industry-4-0.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Industry 4.0" srcset="https://lvivity.com/wp-content/uploads/2020/10/industry-4-0.jpg 1200w, https://lvivity.com/wp-content/uploads/2020/10/industry-4-0-300x201.jpg 300w, https://lvivity.com/wp-content/uploads/2020/10/industry-4-0-1024x686.jpg 1024w, https://lvivity.com/wp-content/uploads/2020/10/industry-4-0-768x515.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px" />                    </a>
			</div>
			<h3 class="la-title">
				<a href="what-is-industry-4-0.html">What is Industry 4.0? Everything You Need to Know About That</a>
			</h3>
			<p><p>Even now, we can observe large-scale structural changes taking place in the economy. They will influence a lot of aspects connected both with businesses and people’s lives in general. We&#8230;</p>
</p>
		</li>
					<li>
			<div class="la-pic">
				<a href="how-to-hire-good-software-developers.html">
					<img width="1148" height="694" src="wp-content/uploads/2020/10/software-developers.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="How To Hire Remote Software Developers" srcset="https://lvivity.com/wp-content/uploads/2020/10/software-developers.jpg 1148w, https://lvivity.com/wp-content/uploads/2020/10/software-developers-300x181.jpg 300w, https://lvivity.com/wp-content/uploads/2020/10/software-developers-1024x619.jpg 1024w, https://lvivity.com/wp-content/uploads/2020/10/software-developers-768x464.jpg 768w" sizes="(max-width: 1148px) 100vw, 1148px" />                    </a>
			</div>
			<h3 class="la-title">
				<a href="how-to-hire-good-software-developers.html">How to Hire Good Software Developers: 7 Useful Tips That Work</a>
			</h3>
			<p><p>Businesses invite developers to fulfill various tasks like website maintenance, additional functionality implementation, CRM system development, or the development of a mobile app aimed at solving a variety of objectives&#8230;</p>
</p>
		</li>
					<li>
			<div class="la-pic">
				<a href="principles-of-good-ui-ux-design-for-mobile.html">
					<img width="1200" height="900" src="wp-content/uploads/2020/09/ui-ux-principles.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://lvivity.com/wp-content/uploads/2020/09/ui-ux-principles.jpg 1200w, https://lvivity.com/wp-content/uploads/2020/09/ui-ux-principles-300x225.jpg 300w, https://lvivity.com/wp-content/uploads/2020/09/ui-ux-principles-1024x768.jpg 1024w, https://lvivity.com/wp-content/uploads/2020/09/ui-ux-principles-768x576.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px" />                    </a>
			</div>
			<h3 class="la-title">
				<a href="principles-of-good-ui-ux-design-for-mobile.html">7 Essential Principles of Good UI/UX Design for Mobile Apps</a>
			</h3>
			<p><p>The way a mobile app looks and interaction experience that users get when working with it are equally important for developing a successful product. To make a mobile app fully&#8230;</p>
</p>
		</li>
							</ul>
	<a href="{{route('blog')}}" class="all-link" target="" rel="">See more</a>    </div>



@endsection
	
