<h1>Editar oferta</h1>

<form action="/ofertas/{{ $oferta->id }}" method="POST">
@csrf
@method('PUT')

Titulo: <input type="text" name="titulo" value="{{ $oferta->titulo }}"><br>
Vigencia: <input type="date" name="vigencia" value="{{ $oferta->vigencia }}"><br>
Tienda: <input type="text" name="tienda" value="{{ $oferta->tienda }}"><br>
Precio original: <input type="number" step="0.01" name="precio_original" value="{{ $oferta->precio_original }}"><br>
Precio descuento: <input type="number" step="0.01" name="precio_descuento" value="{{ $oferta->precio_descuento }}"><br>

<button type="submit">Actualizar</button>

</form>