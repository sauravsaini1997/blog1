@extends ('layouts/layout')

@section ('content')
<div id="main" class="wrapper row2">
    </br>
    </br>
    <article>
        {{ $posts->body }}
        
        
        <?php if( empty( $posts ) ) { ?>
            <div class="not-found">
                No posts found!
            </div>
        <?php } ?>
    </article>
</div>
@endsection