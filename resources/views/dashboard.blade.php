@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                                            
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(count($posts) > 0)
                        <h3>Your Posts</h3>
                        <div class="table-wrapper">
                            <table class="alt">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{ $post->title }}</td>
                                            <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a></td>
                                            <td>
                                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-primary'])}}
                                                {!!Form::close()!!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h3>You have no posts.</h3>
                        <br>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <div id="main">
                        <h1>Create Post</h1>
                        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
                            <div class="">
                                {{Form::label('title', 'Title')}}
                                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                            </div>
                            <div class="">
                                <br>
                                {{Form::label('body', 'body')}}
                                <br>
                                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Title'])}}
                            </div>
                            <br>
                            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                        {!! Form::close() !!}
                        <br>
                        <div class="card-header"></div>
                        <br>
                    @if(count($events) > 0)
                        <h3>Your Events</h3>
                        <div class="table-wrapper">
                            <table class="alt">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($events as $event)
                                        <tr>
                                            <td>{{ $event->title }}</td>
                                            <td><a href="/events/{{ $event->id }}/edit" class="btn btn-primary">Edit</a></td>
                                            <td>
                                                {!!Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-primary'])}}
                                                {!!Form::close()!!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h3>You have no events.</h3>
                        <br>
                    @endif
                        <div id="main">
                        <h1>Create Event</h1>
                        {!! Form::open(['action' => 'EventsController@store', 'method' => 'POST']) !!}
                            <div class="">
                                {{Form::label('title', 'Title')}}
                                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                            </div>
                            <div class="">
                                {{Form::label('location', 'Location')}}
                                {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Event Location'])}}
                            </div>
                            <div class="">
                                {{Form::label('time', 'Time')}}
                                {{Form::text('time', '', ['class' => 'form-control', 'placeholder' => 'Format: May 9th 2019'])}}
                            </div>
                            <div class="">
                                <br>
                                {{Form::label('body', 'body')}}
                                <br>
                                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Brief description'])}}
                            </div>
                            <br>
                            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                        {!! Form::close() !!}
                        <br>
                        <h1>Banner News</h1>
                        

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
