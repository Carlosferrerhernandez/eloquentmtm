<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Tabla productos</h2>

{{-- <table>
  <tr>
    <th>Producto</th>
    <th>Presentaciones</th>
    <th>Valor</th>
  </tr>
  @foreach($productos as $producto)
  <tr>
    <th>{{$producto->denominacion}}</th>

    @foreach($productos->presentaciones as $presentacion)
      <th>{{ $presentacion->denominacion }}</th>
      <th>{{ $presentacion->pivot->costo}}</th>
    @endforeach

  </tr>
  @endforeach
</table> --}}

<table>
  <tr>
    <th>Producto</th>
    <th>Presentaciones</th>
    <th>Valor</th>
  </tr>
  @foreach($presentaciones as $presentacion)
  <tr>

    @foreach($presentacion->productos as $producto)
      <th>{{ $producto->denominacion }}</th>
      <th>{{ $presentacion->denominacion}}</th>
      <th>{{ $producto->pivot->costo}}</th>
    @endforeach
    
  </tr>
  @endforeach
</table>

</body>
</html>
