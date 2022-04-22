<!DOCTYPE html>
<html lang="en">
<head>

    @include('/inc/meta')

    <meta charset="UTF-8">
    <title>Title 123</title>
</head>
<body>

<div class="container">

    @include('/inc/nav')

    <h1 class="mt-3">
        Статьи
    </h1>

    {{--    {{print_r($articles)}}--}}
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($articles as $article)

            <div class="col wow fadeInUp">

                <div class="card h-100">

                    <div class="card-header"><a href="/article/{{ $article->id }}"> {{ $article->title }} </a></div>

                    <div class="card-body">

                        <p>id: {{ $article->id }}:

                            {{ substr($article->description, 0, 35) }}
                        </p>

                        <button class="btn btn-outline-primary btn-sm me-2 wow zoomIn likes" data-wow-delay="1s" data-id="{{$article->id}}"> 👍 Likes: <span id="likes_{{$article->id}}">{{$article->likes}}</span> </button>

                        <button class="btn btn-outline-primary btn-sm wow zoomIn" data-wow-delay="1s"> 👀 Views: {{$article->views}}</button>

                        <a href="/article/{{$article->id}}" class="btn btn-outline-secondary btn-sm float-end wow fadeIn" data-wow-delay="2s">Read</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <a href="{{$articles->previousPageUrl()}}"> << </a> &nbsp;
    <a href="{{$articles->nextPageUrl()}}"> >> </a>

    <br>{{ $articles->total() }} records


</div>


</body>
</html>
