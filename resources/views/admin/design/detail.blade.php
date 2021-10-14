<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{asset('templates/admin')}}/css/style.min.css" rel="stylesheet">

    <title>Detail</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-shadow: none;
        }

        body {
            width: 100%;
        }

        .flex-row {
            margin: 10% auto;
            width: 100%;
            height: 500px;
        }

        .flex-container {
            padding: 0 10%;
            display: flex;
            flex-wrap: wrap;
            height: 100%;
        }

        .flex-item-left {
            flex: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .flex-item-right {
            flex: 40%;
            height: 100%;
            padding: 0 5%;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .flex-img {
            width: 100%;
        }

        /* Responsive layout - makes a one column layout instead of a two-column layout */
        @media (max-width: 800px) {
            .flex-item-right,
            .flex-item-left {
                flex: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="page-breadcrumb bg-white">
        <a class="btn btn-primary" href="{{ URL::previous() }}"><i class="bx bx-arrow-back"></i>Kembali</a>
    </div>
    <div class="flex-row">
        <div class="flex-container">
            <div class="flex-item-left">
                <img src="{{asset('storage/'.$data->image)}}" class="flex-img" alt="">
            </div>
            <div class="flex-item-right head">
                <h2><strong>{{ $data->name }}</strong></h2>
                <br><br>
                <h5><strong>{{ $data->description }}</strong></h5>
            </div>
        </div>
    </div>

</body>

</html>
