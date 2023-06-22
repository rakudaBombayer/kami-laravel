<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>تعالى الله</title>
</head>
<body>
  <h1>دعاء</h1>
    <p>5 مرات</p>
    <form action="{{  route('tweet.create') }}" method="post">
      @csrf            
      <label for="tweet-content"></label>
      <span>دعاء</span>
      <textarea id="tweet-content" type="text" name="tweet" placeholder="アッラーへのお祈り"></textarea>
      @error('tweet')
      <p style="color: red;">{{ $message }}</p>
      @enderror
      <button type="submit">دعاء</button>
    </form>
    <div>
      @foreach($tweets as $tweet)
          <p>{{ $tweet->content }}</p>
      @endforeach
    </div>
</body>
</html>