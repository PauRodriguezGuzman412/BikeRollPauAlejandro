<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
<div class="container-fluid">
    <h1 class="text-center mb-5">{{ $title }}</h1>
    <h3 class="text-end"><span class="fw-bold">Fecha:</span> {{ $date }}</h3>
    <div class="row">
        <div class="col">
            <p class=" fw-bold mb-0">CLIENTE:</p>
            <p class=" mb-0">{{ $runner->name}} {{ $runner->surname}}</p>
            <p class=" mb-0">{{ $runner->address}}</p>
            <p class="">{{ $runner->dni}}</p>
        </div>
    </div>
  

    <table class="table table-border border-dark mt-3 nb-5">

        <tr class="text-white bg-dark">

            <th class="border border-dark">Nº ARTÍCULO</th>

            <th class="border border-dark">NOMBRE</th>

            <th class="border border-dark">CANTIDAD</th>

            <th class="border border-dark">PRECIO</th>

        </tr>

        <tr>

            <td class="text-center border border-dark">1</td>
            <td class="text-center border border-dark">{{ $course->name }}</td>
            <td class="text-center border border-dark">1</td>
            <td class="text-center border border-dark">{{ $course->price }}€</td>

        </tr>
        @if($runner->federated == 'OPEN')
        <tr>
            <td class="text-center border border-dark" >1</td>
            <td class="text-center border border-dark" >Aseguradora: {{ $insurance->name }}</td>
            <td class="text-center border border-dark" >1</td>
            <td class="text-center border border-dark" >{{ $insurance->price }}€</td>
        </tr>
        @endif

    </table>

    <table class="table w-50 mt-5">

        <tr class="text-white bg-dark">

            <th colspan="2" class="border-bottom border-dark ">TOTAL FACTURA</th>

        </tr>

        <tr>

            <td class="fw-bold border-start border-bottom border-dark">SUBTOTAL </td>
            <td class="border-end border-bottom border-dark"> {{round(($course->price + $insurance->price) * 0.79,2)}}€</td>
        </tr>
        <tr>
            <td class="fw-bold border-start border-bottom border-dark">IVA (21%)</td>
            <td class="border-end border-bottom border-dark"> {{round(($course->price + $insurance->price) * 0.21,2)}}€</td>
        </tr>
        <tr>
            <td class="fw-bold border-start border-bottom border-dark">TOTAL</td>
            <td class="border-end border-bottom border-dark fw-bold text-danger"> {{($course->price + $insurance->price)}}€</td>
        </tr>
    </table>

    <h2 class="text-center mt-5">¡Gracias por su compra!</h2>

    <div class="rounded bg-dark justify-content-center w-100 p-2 mb-4" style="float:bottom;">
        <h1 class="text-white">BIKEROLL S.L.</h1><br/>
        <h3 class="text-white">DATOS DE CONTACTO:</h3>
        <h5 class="text-white">TELÉFONO: 679845219/935684027</h5>
        <h5 class="text-white">DIRECCIÓN: C/ANTONIO MACHADO, 189, 08005, BARCELONA</h5>

        <img class="w-50" src="{{ public_path('/img/bikeroll.png') }}" width="300px" style="margin-left:23%;">
    </div>
    
</div>
</body>

</html>