<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
    @foreach ($allTrips as $trip)
    <div class="container">
      <h1>Our Offer for your  unforgettable trip:</h1>
        <div class="box-trip">
            <div class="img-box">
                <img src="{{$trip->cover}}" alt="">
            </div>
            <div class="informations">
                <h2> {{$trip ->city}}</h2>
                <h3> {{$trip ->hotel}}</h3>
                <h3>Nights: {{$trip ->days}}</h3>
                <h3> €{{$trip ->price}}</h3>
              
            </div>
          
             <br>
        </div>
    </div>
    

    @endforeach

    @foreach ($tripFiltrati as $tripFiltrato)
    <div class="container">
        <h1>Dati filtrati</h1>
      <h1>Our Offer for your  unforgettable trip:</h1>
        <div class="box-trip">
            <div class="img-box">
                <img src="{{$tripFiltrato->cover}}" alt="">
            </div>
            <div class="informations">
                <h2> {{$tripFiltrato ->city}}</h2>
                <h3> {{$tripFiltrato ->hotel}}</h3>
                <h3>Nights: {{$tripFiltrato ->days}}</h3>
                <h3> €{{$tripFiltrato ->price}}</h3>
              
            </div>
            
             <br>
        </div>
    </div>
    @endforeach
</body>
</html>
<style>


    .container{
        width:1200px;
        margin: 0 auto;
        background: black;
        color:white;
        
    }
    h1{
        color:red;
        text-align: center;
        text-transform: uppercase;
        margin-top: 15px;
    }
    .box-trip{
        display:flex;
        height:350px;
        width:1200px;
    }
   .img-box{
       width:400px;
       margin:  0px 0px 15px 15px;
   }
    img{
        max-width:100%;
        height:100%;
    }
    .informations{
        margin-left: 30px;
        
    }
</style>