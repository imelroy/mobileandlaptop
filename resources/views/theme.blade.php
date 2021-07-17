<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Home</title> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<style type="text/css">
@media print {
    #hide {
        display :  none;
    }
}
</style>
{{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body> 
<style>
    img.slider-img{
        height: 500px !important
    }
    .custom-mobiles{
        height: 1300px
    }
    .slider-text-dark{
        background-color: #35412766 !important
    
    }
    .trending-image{
        height: 200px; 
    }
    
    .trening-item{
        float: left;
        width: 30%;
    }
    .card{
        margin-left: 160px; 
        float: left; 
        width: 50%; 
    }
    .trending-wrapper{
        margin: 30px;
    }
    .mobiledetail-img{
        height: 500px;
    }
    .laptopdropview-img{
        height: 400px;
        
    }
    .mobiledropview-img{
        height: 500px;
        float: left;
        width: 30%
    }
    .mobiledropview-image{
        height: 500px;
    }
    .search-box{
        width: 300px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    .account-table{
        height: 300px
    }
    .contact-table{
        height: 70px
    }
    .aboutus-table{
        height: 160px
    }
    .button{
        margin-left: 705px;
        width: 140px
    }
    .sobutton{
        margin-left: 735px;
        width: 140px
    }
    .order-cancel{
        width: 140px
    }
    .custom-product{
        height: 600px
    }
    .orderbtn{
        margin-left: 640px;
        width: 130px
    }
    .order-list{
        height: 492px
    }
    .cart-image{
        height: 200px;
        margin: 30px;
        float: down;
       
    }
    .order-details{
        height: 200px;
        margin: 30px;
    }
    .custom-productt{
        height: 600px
       
    }
    .trending-imagee{
        height: 200px;
        margin: 10px;
    }
    .trending-images{
        height: 180px;
        margin: 10px;
    }
    
    .trending-wrapperr{
        margin: 50px;
    }
    .cart-list-deviderr{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    .remove{
        margin: 50px;
        padding-bottom: 100px
    }
    .custom-mobile{
        margin: 50px;
    }
    .card-img-top{
        height: 250px;
    }
    
</style>
</html>