<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
    {{-- <ul>
    @foreach ($att as $item)
        <li>{{$item->name}}</li>
    @endforeach
</ul> --}}
    <h1>Attractions Detail Table</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>detail</th>
                <th>img</th>
                <th>lat</th>
                <th>long</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($att as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->detail}}</td>
                    <td>{{$item->coverimage}}</td>
                    <td>{{$item->latitude}}</td>
                    <td>{{$item->longitude}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('home') }}" class="btn btn-primary">กลับหน้าหลัก</a>
</body>
</html>