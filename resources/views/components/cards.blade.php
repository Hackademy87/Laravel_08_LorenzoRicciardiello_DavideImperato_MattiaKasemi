




<div class="card" style="width: 18rem;">
  <img src="{{ Storage::url($product->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h3>{{$product->name}}</h3>
    <p>{{$product->category->name}}</p>
    <p>{{$product->getMaterials()}}</p>
    <p class="card-text">{{$product->price}}€</p>
    <p>{{$product->gender}}</p>
    <p>inserito da : {{$product->user->profile->nickname}} </p>
  </div>
</div>

