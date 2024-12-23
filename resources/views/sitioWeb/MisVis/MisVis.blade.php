<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="/" ><button >Regresar</button></a>
    <section class="container">
        <table class="table">
          <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">nombre</th>
                  <th scope="col">apellido</th>
                  <th scope="col">acciones</th>
                </tr>
          </thead>
          <tbody>
            @foreach($getMisVis as $getMisViss)
                <tr>
                  <th scope="row">{{$getMisViss->id}}</th>
                  <td>{{$getMisViss->texto}}</td>
                  <td>{{$getMisViss->imagenes_id}}</td>
                  <td>{{$getMisViss->status}}</td>
                  <td>
                  <a href="/edit/{{$getMisViss->id}}" ><button  type="button" class="btn btn-primary">Editar</button></a>
                  
                  </td>
                </tr>
                @endforeach
          </tbody>
        </table>
    </section>
    
</body>
</html>