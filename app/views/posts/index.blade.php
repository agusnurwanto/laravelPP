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
    {{ Form::open(['route'=>'posts.store']) }}
        <div>
            {{ Form::label('Title') }}
            {{ Form::text('title') }}
            {{ $errors->first('title') }}
        </div>
        <div>
            {{ Form::label('Content') }}
            {{ Form::textarea('content') }}
            {{ $errors->first('content') }}
        </div>
        <div>{{ Form::submit('Create Post') }}</div>
    {{ Form::close() }}
@stop
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@stop