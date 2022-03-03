<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    
    </head>
    <body>
    <h1>Blog Name</h1>
    <button type=“button”><a href='/posts/create'>記事を作る</a></button>
         <div class = 'posts'>
              @foreach ($posts as $post)
                     <div class = 'post'>
                            <a href= '/posts/{{ $post->id }}'><h2 class = 'title'>{{ $post->title }}</h2></a>
                            <p class = 'body'>{{ $post->body }}</p>
                     </div>
              @endforeach
         </div>
         <div class='paginate'>
              {{ $posts->links() }}
         </div>
    </body>
</html>
