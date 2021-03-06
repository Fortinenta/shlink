<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Homepage</title>

</head>

<body class="antialiased">
    <header>
        <nav class="navbar navbar-dark bg-dark justify-content-between">
            <a class="navbar-brand text-light ml-3">ShLink</a>
            
        </nav>
    </header>

    <div class="card panels-card">

        <div class="rounded-top grey lighten-2 dark-grey-text">
            <ul class="list-inline float-right my-0 py-1 pr-3">
                <li class="list-inline-item">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                </li>
            </ul>
        </div>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark grey lighten-5 d-flex justify-content-center">

            <div class="justify-content-center">
                <ul class="list-inline my-2 py-1 dark-grey-text">
                    <li class="list-inline-item">
                        <i class="fas fa-bars" aria-hidden="true"></i>
                    </li>
                    <li class="list-inline-item font-weight-bold text-uppercase display-4">
                        Welcome To ShLink
                    </li>
                </ul>
            </div>

        </nav>
        <!--/.Navbar-->

        <form class="" action="{{ url('tambah') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                    <h2><small></small></h2>
                        Add Your New Short Link
                    </div>
                    <h5 class="card-title">Title</h5>
                    <input type="text" name="title" id="title">
                    <h5 class="card-title">URL Destination</h5>
                    <input type="text" name="url" id="url">
                    <input type="submit" name="" value="Tambah" class="btn btn-primary">

                </div>
            </div>
        </form>

        <div class="card-body grey lighten-5 rounded-bottom">

            <!-- Grid row -->
            <div class="row">

                @foreach($data as $item)
                <!-- Grid column -->
                <div class="col-6 p-1">

                    <div class="card grey lighten-2">
                        <div class="card-body pb-0 bg-info">
                            <i class="fas fa-cloud fa-3x pb-4"></i>
                            <div class="d-flex justify-content-between bg-info">
                                <p class="mb-4 h5">{{$item->title}}</p>
                                <p class="mb-4 hour">{{$item->createdAt}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body pt-0">
                            <h6 class="font-weight-bold mb-1">{{$item->shortUrl}}
                                <!-- <button onclick="{{$item->shortUrl}}">Go</button> -->
                            </h6>
                            <p class="mb-0">{{$item->destination}}</p>
                        </div>
                    </div>

                    <a href="{{ url('delete', $item->id) }}">
                        <button type="button" name="button">Delete</button>
                    </a>
                </div>
                <!-- Grid column -->

                @endforeach


            </div>
            <!-- Grid row -->

        </div>
    </div>

</body>

</html>