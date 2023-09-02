<x-layout>


<div class="container">
  <div class="row">
<h2>Dashboard</h2>
<h3>Tutti I Prodotti</h3>
  </div>
  <div class="row">
  <div class="col-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Genere</th>
      <th scope="col">prezzo</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->category}}</td>
      <td>{{$product->gender}}</td>
      <td>{{$product->price}}€</td>
      <td>
        
<div class="d-flex justify-content-between">
        
        <a href="{{route('product.edit',compact('product'))}}" class="btn btn-success">Modifica</a>

<form action="{{route('product.delete', compact('product'))}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" >Cancella</button>
    </form>
    </div>
  </td>

    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>

</x-layout>