<h1>Nueva Oferta</h1>

<form action="/ofertas" method="POST">
@csrf

Titulo: <input type="text" name="titulo"><br>
Vigencia: <input type="date" name="vigencia"><br>
Tienda: <input type="text" name="tienda"><br>
Precio original: <input type="number" step="0.01" name="precio_original"><br>
Precio descuento: <input type="number" step="0.01" name="precio_descuento"><br>

<button type="submit">Guardar</button>

</form>