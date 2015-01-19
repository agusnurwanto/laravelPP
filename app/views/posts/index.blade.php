@section('content')
	<h2>Create Post</h2>
	@if(count($errors->all()) > 0)
        <ul>
            @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
        <hr>
    @endif
    {{ Form::open(['route'=>'posts.create']) }}
        <div>
            {{ Form::label('Title') }}
            {{ Form::text('title') }}
        </div>
        <div>
            {{ Form::label('Content') }}
            {{ Form::textarea('content') }}
        </div>
        <div>{{ Form::submit('Create Post') }}</div>
    {{ Form::close() }}
@stop
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@stop