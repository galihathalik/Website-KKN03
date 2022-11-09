<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contoh

    </title>
</head>
<body>
    <h1>Titile 1</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi inventore sit ad et? Autem aliquam nemo veniam, amet a id aut quam quibusdam facere laudantium cupiditate maiores quos sapiente laboriosam.</p>
    <textarea name="contoh" id="contoh" cols="30" rows="10">
        contoh aja
    </textarea>
    <h4>Nama : {{ $nama }}</h4>
    <ul>
        @foreach ($matkul as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>