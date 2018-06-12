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
                    <form method="post" action="/vatsave" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-sm-12  col-md-12 col-lg-12">
                                <label><b>Item Name:</b></label>
                                <input type="text" name="itemname" class="form-control" placeholder="Enter items">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label><b>Quantity:</b></label>
                                <input type="text" name="quantity" class="form-control" placeholder="Enter quantity of the item">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label><b>Original Price:</b></label>
                                <input type="text" class="form-control" name="price" placeholder="Enter Original price of the item">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label><b>vat percent</b></label>
                                <input type="text" class="form-control" name="vatpercent" placeholder="Enter vat percentage for particular item">
                            </div>
                            <div class="form-group col-sm-2  col-md-2  col-lg-2 ">
                                <input type="submit" class="form-control btn btn-success" value="submit">
                            </div>
                            <div class="form-group col-sm-2  col-md-2  col-lg-2 ">
                                <button  type="button" class="form-control btn btn-info">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</html>