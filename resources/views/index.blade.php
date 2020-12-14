@extends('_layout')

@section('content')
    <div class="container my-3">
        <div class="columns">
            <div class="column is-three-quarters">
                <div id="app">

                </div>
                <hr>
                @for($i = 0; $i < 10; $i++)
                    <div class="card my-3">
                        <div class="card-header">
                            <div class="card-header-title">
                                AAA
                            </div>
                        </div>
                        <div class="card-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos harum laboriosam maiores perspiciatis placeat veritatis. Amet ipsam obcaecati voluptas. Distinctio ducimus eligendi expedita iure maiores molestiae necessitatibus odio perspiciatis.
                        </div>
                        <footer class="card-footer">
                            <div class="card-footer-item">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate, ducimus hic modi numquam quas quasi qui reiciendis sequi vero. Aspernatur assumenda blanditiis cumque distinctio iure suscipit unde voluptates? Ipsa?
                            </div>
                        </footer>
                    </div>
                @endfor
            </div>
            <div class="column">
                <div class="card my-3">
                    <div class="card-content">
                        tags
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

