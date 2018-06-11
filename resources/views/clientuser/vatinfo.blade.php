<!DOCTYPE html>
<html>
<head>
    <title>VAT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://unpkg.com/sweetalert2@7.20.7/dist/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card" style="max-width: 50rem;">
                <div class="card-header">
                    <h1>VAT entry</h1>
                </div>
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Qunatity</td>
                                <td>per price</td>
                                <td>vat percntage</td>
                                @foreach($vatdata as $row) 
                                <tr>
                                <td><h4>{{$row['itemname']}}</h4></td>
                                <td><h3>{{$row['quantity']}}</h3></td>
                                <td><h4> {{$row['peritemprice']}} <h4><td>
                                <td><h4> {{$row['vatrate']}} <h4><td>
                                <tr>
                            @endforeach
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</html>