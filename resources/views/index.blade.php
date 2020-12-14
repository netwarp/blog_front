@extends('_layout')

@section('content')
    <div class="container is-fullhd my-3">
        <div class="columns">
            <div class="column is-three-fifths">
                <div id="app">

                </div>
            </div>
            <div class="column">
                <div class="card my-3">
                    <div class="card-content">
                        tags
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-header">
                        <div class="card-header-title">
                            Au hasard
                        </div>
                    </div>
                    <div class="card-content">
                        @foreach($posts as $post)
                            <div class="panel" data-id="{{ $post->id ?? '' }}">
                                <div class="panel-block">
                                    <a href="/post/{{ $post->id }}">
                                        {{ $post->preview ?? '' }}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

