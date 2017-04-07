@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $thread->title }}</div>

                    <div class="panel-body">

                            <article>
                                <div class="body">{{ $thread->body }}</div>
                            </article>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">REPLIES</div>

                    <div class="panel-body">
                        @foreach ($thread->replies as $reply)
                            @include ('threads.reply')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
