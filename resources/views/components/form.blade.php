



<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" >

@csrf

  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" name="name" class="form-control">
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Categoria</label>
    <input type="text" name="category" class="form-control" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Genere</label>
    <input type="text" name="gender" class="form-control" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Prezzo</label>
    <input type="numeric" name='price' class="form-control" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Foto</label>
    <input type="file" name="img" class="form-control" >
  </div>
  
  <button type="submit" class="btn btn-success">Aggiungi</button>
</form>