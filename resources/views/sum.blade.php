<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<form action='my-controller' method="post">
    @csrf
    <div class="form-group">
        <input type="number" class="form-control" placeholder="so a" name="soA">
    </div>
    <div class="form-group">
        <input type="number" class="form-control" placeholder="so b" name="soB">
    </div>
    <button type="submit" class="btn btn-primary">Tinh</button>
    <div class="form-group">
        <input type="number" class="form-control" placeholder="Ket qua" disabled="" value="<?php if(isset($sum))echo $sum;?>">
    </div>
</form>
<!--<h1>--><?php //echo $sum ?><!--</h1>-->
