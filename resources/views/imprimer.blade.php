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
{{-- <link rel="stylesheet" href="{{asset('css/master.css')}}">

<!-- Scripts -->
</head>
<body>

    <div class="logo">
        <h3>Service public</h3>
        <img src="{{url('../imgs/public-service-logo-png-transparent.png')}}" alt="logo">
    </div>
    {{-- return view('imprimer' , compact('transprots' , 'structurs','categorie')); --}}

    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    @foreach ($services as $service)
                    <h4>
                        Service name: {{$service->nom}}
                        <button class="btn btn-success float-end "><a href="print/{{$service->id}}" @click.prevent="printme" target="_blank" class="text-white text-decoration-none">imprimer</a></button>
                        {{-- <button type="button" class="btn btn-primary float-end " data-bs-toggle="modal" data-bs-target="#staticBackdrop">add service</button> --}}
                    </h4>
                    @endforeach
                </div>
                <div class="card-body">
                    <h4>la direction de ce service</h4>
                    @foreach ($structurs as $structur)
                    <p>{{$structur->nom}}</p>
                    @endforeach
                    @foreach ($services as $service)
                    <div class="col-auto float-right ml-auto">
                    <h4>Quelles sont les document demande pour le dossier de ce service?</h4>
                    <p>{{$service->document}}</p>
                    <h4>quelles est le periode de valide pour ce service ?</h4>
                    <p>{{$service->periode}}</p>
                    <h4>quelles est le prix  pour ce service ?</h4>
                    @if ($service->prix != 0)
                    <p>{{$service->prix}}UM</p>
                    @else
                    <p>Free</p>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('js/app.js')}}"></script>
    {{-- <script>
        window.print();
    </script> --}}
</body>
</html>
