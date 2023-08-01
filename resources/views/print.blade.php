<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&family=Work+Sans:wght@200;400;500;600;700;800&display=swap')}}" rel="stylesheet">


<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
<div class="container">
    <div class="logo">
        <h3>Service public</h3>
        <img src="{{url('imgs/Seal_of_Mauritania_(2018).svg')}}" alt="logo" style="width: 100px;">
    </div>

<div class="info">
    <h5>La Direction De Ce Service: </h5>
    @foreach ($structurs as $structur)
    <p>{{$structur->nom}}</p>
    @endforeach
    @foreach ($services as $service)
    <p><b>Service name: </b>{{$service->nom}}</p>
    <b><p>Quelles sont les document demande pour le dossier de ce service?</p></b>
    <p>{{$service->document}}</p>
    <b><p>quelles est le periode de valide pour ce service</p></b>
    <p>{{$service->periode}}</p>
    <h4>quelles est le prix  pour ce service ?</h4>
    @if ($service->prix != 0)
    <p>{{$service->prix}}UM</p>
    @else
    <p>Free</p>
    @endif
    @endforeach
</div>
        {{-- <h4>categorie</h4>
        @foreach ($categorie as $category)
        <p>{{$category->nom}}</p>
        @endforeach --}}

    </div>
    <script src="{{url('js/app.js')}}"></script>
    <script>
        window.print();
    </script>
</body>
</html>
