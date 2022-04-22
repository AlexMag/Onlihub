<!DOCTYPE html>
<html lang="en">
<head>

    @include('/inc/meta')

    <meta charset="UTF-8">
    <title>Title: {{$article->title}}</title>
</head>
<body>

<div class="container">

    @include('/inc/nav')

    <h1 class="mt-3">
        Статья
    </h1>

{{--        {{print_r($article)}}--}}

    <h5 class="text-info">{{$article->title}}</h5>

    <p>Full {{$article->description}}</p>

    <button class="btn btn-outline-primary btn-sm me-2 wow zoomIn likes" data-wow-delay="1s" data-id="{{$article->id}}"> 👍 Likes: <span id="likes_{{$article->id}}">{{$article->likes}}</span> </button>

    <button class="btn btn-outline-primary btn-sm wow zoomIn" data-wow-delay="1s"> 👀 Views: {{$article->views}}</button>

    <button class="btn btn-outline-primary btn-sm float-end" onclick="history.back()">Go Back</button>
</div>


</body>
</html>
