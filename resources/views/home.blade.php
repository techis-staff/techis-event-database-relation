<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body class="container d-flex flex-wrap justify-content-around">
    @foreach ($users as $user)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            {{-- 利用者の名前 --}}
            <h5 class="card-title">{{$user->name}}</h5>
        </div>
        {{-- 本の一覧 --}}
        <ul class="list-group list-group-flush">
            @foreach($user->books as $book)
                <li class="list-group-item">{{$book->title}}</li>
            @endforeach
        </ul>
    </div>
    @endforeach
</body>

</html>