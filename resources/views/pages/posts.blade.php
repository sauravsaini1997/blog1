@extends ('layouts/layout')

@section ('content')
<div id="main" class="wrapper row2">
    </br>
    </br>
    <article>
            <h1>Posts Body</h1>
            <div class="Posts">
                {{ $posts->body }}
            </div>
    </article>
</div>
@endsection