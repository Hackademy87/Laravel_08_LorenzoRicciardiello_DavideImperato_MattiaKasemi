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




<div class="container my-4">
        <div class="row">
            <h4>Tutti gli utenti</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ruolo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }} ({{ $user->profile->role}})</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <form action="{{route('admin.changeUserRole', $user)}}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary">User</button>
                                        <input type="hidden" value="user" name="role">
                                    </form>
                                   
                                    <form action="{{route('admin.changeUserRole', $user)}}" method="POST">
                                        @csrf
                                        <button class="btn btn-secondary">Admin</button>
                                        <input type="hidden" value="admin" name="role">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>






</x-layout>