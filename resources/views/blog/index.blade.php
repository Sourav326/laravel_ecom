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
                    @foreach($blogs as $blog)
                        <div class="col-12 col-sm-6 col-md-4 mb-5">
                            <div class="post-entry">
                                <a href="#" class="post-thumbnail"><img src="{{asset($blog->image)}}" alt="Image" class="img-fluid"></a>
                                <div class="post-content-entry">
                                    <h3><a href="#">{{$blog->title}}</a></h3>
                                    <p>{{ Illuminate\Support\Str::limit($blog->body, 200) }}</p>
                                    <div class="meta">
                                        <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#"> {{date("M d, Y", strtotime($blog->created_at))}}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
				</div>
                {{ $blogs->links() }}
			</div>
		</div>
		<!-- End Blog Section -->	

@endsection

