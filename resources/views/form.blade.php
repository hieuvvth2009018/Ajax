<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container col-12">
    <div class="text-center m-5">
        <h1>Client</h1>
        <form action="">
            @csrf
            <div class="row">
                <div class="col-6 form-group">
                    <input class="form-control" type="text" name="product code" placeholder="product code" id="product code">
                </div>
                <div class="col-6 form-group">
                    <input class="form-control" type="text" name="name" placeholder="name" id="name">
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <input class="form-control" type="text" name="price" placeholder="price" id="price">
                </div>
                <div class="col-6 form-group">
                    <input class="form-control" type="text" name="avatar" placeholder="avatar" id="avatar">
                </div>
            </div>
            <div class="form-group text-center">
                <button id="btn" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function (){
        $('#btn').click(function () {
            $.ajax({
                url: 'http://localhost:8080/api/ajax',
                method: 'POST',
                dataType: 'text',
                data: {
                    name: $('#name').val,
                    price: $('#price').val,
                    avatar: $('#avatar').val,
                },
                success: function (data) {
                    alert('Thêm mới sản phẩm thành công')
                    window.location.href = 'http://localhost:8080'
                },
                error: function () {

                }
            })
        })
    })
</script>
</body>
</html>
