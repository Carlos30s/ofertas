<h1>Ofertas</h1>

<a href="/ofertas/create">Nueva oferta</a>

<table border="1">
<tr>
<th>Titulo</th>
<th>Tienda</th>
<th>Precio</th>
<th>Acciones</th>
</tr>

@foreach($ofertas as $oferta)
<tr>
<td>{{ $oferta->titulo }}</td>
<td>{{ $oferta->tienda }}</td>
<td>{{ $oferta->precio_descuento }}</td>

<td>
<a href="/ofertas/{{ $oferta->id }}">Ver</a>
<a href="/ofertas/{{ $oferta->id }}/edit">Editar</a>

<form action="/ofertas/{{ $oferta->id }}" method="POST">
@csrf
@method('DELETE')
<button type="submit">Eliminar</button>
</form>

</td>
</tr>
@endforeach

</table>