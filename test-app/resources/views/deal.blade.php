<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<style type="text/css">
html, body {
    height: 100%;
    background:#2d9783;
}
</style>
    <div class="container h-100 d-flex justify-content-center">
        <div class="h-100 row align-items-center">
                <div class="col">
                    <h1>Make a DEAL</h1>
                    <form action="{{ route('make-deal')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <input type="text" name="access_token" placeholder="Access_token" id="access_token" class="form-control"> <br>
                            <input type="number" name="id" placeholder="Deal_id" id="Deal_id" min="0" max="9999" class="form-control"> <br>
                            <input type="text" name="Deal_Name" placeholder="Deal_Name" id="Deal_Name" class="form-control"> <br>
                            <input type="number" name="Amount" placeholder="Amount" id="Amount" class="form-control"> <br>
                            <input type="text" name="Contact_Name" placeholder="Contact_Name" id="Contact_Name" class="form-control"> <br>
                            <input type="submit" name="button3" class="btn btn-success" value="Make a deal"/>
                        </div>
                    </form>
                </div> 
        </div>
    </div>
</body>
</html>