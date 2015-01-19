@section('content')
    <ul class="posts">
    	@foreach($post as $k => $v)
			<li>
				<h2>{{ $v->title }}</h2>
				<p>{{ $v->content }}</p>
				<strong>Post by {{ $v->author }}.</strong>
			</li>
		@endforeach
    </ul>
@stop