<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap-grid.min.css">
    <title>Train</title>
</head>

<body>
    <div class="container">
        <div class="row">
            @foreach ($train as $trains)
            <div class="col-2 ">
                <h1>{{$trains->agency}}</h1>
                <p>{{$trains->departure_station}}</p>
                <p>{{$trains->arrival_station}}</p>
                <p>{{$trains->departure_time}}</p>
                <p>{{$trains->arrival_time}}</p>
                <p>{{$trains->train_code}}</p>
                <p>{{$trains->carriage_number}}</p>
                <p>{{$trains->train_cancelled}}</p>
                <p>{{$trains->in_time}}</p>
            </div>
            @endforeach
        </div>
    </div>
</body>
<style scoped>
    body {
        background-color: #222;
        color: white;
    }
</style>

</html>