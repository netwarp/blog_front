@extends('_layout')

@section('content')
    <div class="container is-fullhd my-3">
        <div class="columns">
            <div class="column is-three-fifths">
                <div class="card my-3">
                    <div class="card-content">
                        <div>
                            {{ $post->preview ?? '' }}
                        </div>
                        <div>
                            {{ $post->content ?? '' }}
                        </div>
                        @if($post->meta)
                            @if(isset($post->meta['og:image']))
                                <div>
                                    <a href="{{ $post->meta['og:url'] ?? '' }}" target="_blank">
                                        <img src="{{ $post->meta['og:image'] ?? '' }}" alt="{{ $post->meta['og:title'] ?? '' }}">
                                    </a>
                                </div>
                            @endif
                            <div>
                                <a href="{{ $post->meta['og:url'] ?? '' }}" target="_blank">
                                    {{ $post->meta['og:title'] ?? '' }} <br>
                                    {{ $post->meta['og:description'] ?? '' }}
                                </a>
                            </div>
                        <pre >
                            {{ var_dump($post->meta) }}
                        </pre>
                        @endif
                    </div>
                    <div class="card-footer">
                        <div class="card-footer-item">
                            <small>{{ $post->created_at->format('d-m-Y') }}</small>
                        </div>
                    </div>
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

