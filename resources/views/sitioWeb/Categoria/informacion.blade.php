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
            @foreach($getCategoria as $getCategorias)
                <tr>
                  <th scope="row">{{$getCategorias->id}}</th>
                  <td>{{$getCategorias->nombreCT}}</td>
                  <td>{{$getCategorias->apellido}}</td>
                  <td>
                  <a href="/edit/{{$getCategorias->id}}" ><button  type="button" class="btn btn-primary">Editar</button></a>
                  <form action="/eliminar/{{$getCategorias->id}}" method="post">
                  @csrf
                  @method('delete')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                  </form>
                  
                  </td>
                </tr>
                @endforeach
          </tbody>
        </table>
    </section>
    
</body>
</html>