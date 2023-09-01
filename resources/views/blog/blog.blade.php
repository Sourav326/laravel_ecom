@extends('layouts.app')
@section('content')

<!-- Start Blog Section -->
<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Recent Blog</h2>
					</div>
				</div>
				<div class="row">
                        <div class="col-12">
                            <div class="post-entry">
                                <a href="#" class="post-thumbnail"><img src="{{asset($blog->image)}}" alt="Image" class="img-fluid"></a>
                                <div class="post-content-entry">
                                    <h3><a href="#">Blog Title 1</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type a<br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type a</p>
                                    <div class="meta">
                                        <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
				</div>
			</div>
		</div>
		<!-- End Blog Section -->	

@endsection

