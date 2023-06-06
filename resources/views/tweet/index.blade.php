<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world </h1>
    <div>
        <p>投稿</p>
        <form action="{{route('tweet.create')}}" method="post">
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea name="tweet" id="tweet-content" placeholder="つぶやきを入カ"></textarea>
            @error('tweet')
                <p style = "color:red">{{$message}}</p>
            @enderror
            <button type="submit">投稿</button>

        </form>
    </div>
    <div>
        @foreach ($tweets as $tweet)
        <p>{{$tweet->content}}</p>
        @endforeach
    </div>
</body>
</html>