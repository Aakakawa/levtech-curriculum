<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    
    </head>
    <body>
    <h1>Blog Name</h1>
       
        <form action="/posts" method="POST">
            @csrf
             <div class ="title">
                  <h2>タイトル</h2>
                  <input type="text" name="post[title]" placeholder="タイトル"/>
             </div>
             <div class ="body">
                  <h2>内容</h2>
                  <textarea name="post[body]" placeholder="今日も１日お疲れ様でした。"></textarea>
             </div>
             <input type="submit" value="store"/>
        </form>
       <div class ='back'>[<a href ='/'>戻る</a>]</div>
    </body>
</html>
