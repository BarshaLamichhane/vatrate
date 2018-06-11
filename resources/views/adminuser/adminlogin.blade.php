<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>
    <div class="container text-left">
        <div class="row">
            <div class="card" style="max-width: 50rem;">
                <div class="card-header">
                    <h1>Password Reset</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="#" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-sm-12  col-md-12 col-lg-12">
                                <label><b>New password:</b></label>
                                <input type="password" class="form-control" placeholder="New password">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label><b>Confirm Password:</b></label>
                                <input type="password" class="form-control" placeholder="Re-enter password" id="barshass">
                            </div>
                            <div class="form-group col-sm-2  col-md-2  col-lg-2 ">
                                <button onClick="submitpost()" type="button" class="form-control btn btn-success">Submit</button>
                            </div>
                            <div class="form-group col-sm-2  col-md-2  col-lg-2 ">
                                <button onClick="cancelpost()" type="button" class="form-control btn btn-info">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert2@7.20.7/dist/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script>
        function submitpost(){
            console.log("success");
            swal({
                title: 'Congratulations',
                type: 'success',
                confirmButtonColor: "green",
                confirmButtonText: "Yes, got it!",
                text:'Your password has changed successfully'
                });
            
        }
        function cancelpost(){
            console.log("cancelled");
            swal({
                title: 'Sorry',
                type: 'error',
                confirmButtonColor: "#770412",
                confirmButtonText: "Yes, got it!",
                text:'you cancelled the process'
        });
    }
    </script>

</body>
    <style>
        .container {
            background-color: white;
            margin-top: 220px;
            margin-left: 650px;
        }

        h1 {
            text-align: center;
        }

        .btn-success {
            background-color: #00b197;
            border-color: #00b197;
        }
    </style>

</html>