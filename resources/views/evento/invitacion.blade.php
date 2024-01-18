<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="card" style="width: 7x0rem">
                <img src="images/cachimbeada_wall.jpg" class="card-img-top" alt="...">
                @if (isset($ticket))
                <div class="card-body">
                    <center>
                        <h5 class="card-title">Ticket # {{$ticket->id}}
                            @if ($ticket->estado==="Entregado")
                            <h5 class="text-white"><span class="badge bg-warning"> {{$ticket->estado}} </span></h5>
                            @elseif ($ticket->estado==="Recogido")
                            <h5 class="text-white"><span class="badge bg-danger"> {{$ticket->estado}} </span></h5>
                            @elseif ($ticket->estado==="Pagado")
                            <h5 class="text-white"><span class="badge bg-success"> {{$ticket->estado}} </span></h5>
                            @endif
                        </h5>


                        @if($ticket->estudiante_id!=null)
                            <p class="card-text">Propietario <br> <b>{{$ticket->estudiante->nombre." ". $ticket->estudiante->apellidop." ".$ticket->estudiante->apellidom}}</b></p>
                        @endif
                        @if(Auth::check())
                            <form action="{{url("validar/$ticket->id")}}" method="post">
                                @method('PUT')
                                @csrf
                                <button type="submit" class="btn btn-success" >Validar</button>
                            </form>
                        @endif


                    </center>
                </div>
                @endif
              </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
