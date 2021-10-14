<!DOCTYPE html>
<html lang="en">

    @section('css')
    <link rel="stylesheet" href="{{ asset('plugins') }}/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('plugins') }}/datatables-responsive/css/responsive.bootstrap4.min.css">
    @endsection

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    <div class="flex-row">
        <div class="flex-container">
            <div class="flex-item-left">
                <ul>
                    <li><a class="btn btn-primary" href="{{ URL::previous() }}"><i class="bx bx-arrow-back"></i>Kembali</a></li>
                  </ul>
                <img src="{{asset('storage/'.$data->image)}}" class="flex-img" alt="">
            </div>
            <div class="flex-item-right">
                <h5><strong>Nama </strong>: {{ $data->name }}</h5>
                <h5><strong>Description </strong>: {{ $data->description }}</h5>
                <ul>
                    {{-- <li><strong>Nama </strong>: {{ $data->name }}</li> --}}
                </ul>
            </div>
        </div>
    </div>

</body>

</html>
