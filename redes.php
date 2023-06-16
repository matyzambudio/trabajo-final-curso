<?php $url =  $url = "http://localhost/2023/"; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<style>
    #foto {
        transition: .5s, color .10s;
        -webkit-transition: .5s, color .10s;
        -moz-transition: .5s, color .10s;
    }

    #foto:hover {
        transform: rotateZ(360deg);
        -webkit-transform: rotateZ(360deg);
        -moz-transform: rotateZ(360deg);
    }
    #redesColor{
        background-color: #2acaca;
        
    }
</style>

<div class="container-fluid border border-secondary" style="max-width: 100%" id="redesColor">
    <div class="row text-center m-3">
        <div class="col">
            <a href="https://www.facebook.com"><img src="<?php echo $url ?>imgFondos/Facebook.png" width="25%" id="foto"></a>
        </div>
        <div class="col">
            <a href="https://www.instagram.com/gt.barberos/"><img src="<?php echo $url ?>imgFondos/instagram.png" width="25%" id="foto"></a>
        </div>
        <div class="col">
            <a href="https://api.whatsapp.com/send?phone=5492615604474"><img src="<?php echo $url ?>imgFondos/whatsapp.png" width="25%" id="foto"></a>
        </div>
        <div class="col">
            <a href="https://goo.gl/maps/SZyNw5RBCX8BGkgS6"><img src="<?php echo $url ?>imgFondos/maps.png" width="25%" id="foto"></a>
        </div>
    </div>
</div>