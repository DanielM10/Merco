<img src='img/logo.png' width="104" />
<div align="center">
<h1>Lista de proveedores</h1>
</div>
<table align="center" border="2">
    <thead>
        <tr>        
            <th>Proveedor</th>
            <th> Nombre</th>
            <th>Categoria</th>                                           
            <th>Estatus</th>           
        </tr>
    </thead>
  <tbody>
    @foreach ($data as $usuario)
    <tr>
        <td> {{$usuario->Proveedor}} </td>                                            
        <td>{{$usuario->Nombre}}</td>
        <td align="center">{{$usuario->Categoria}}</td>                                            
        <td >{{$usuario->Estatus}}</td>       
    </tr>
    @endforeach
  </tbody>
</table>