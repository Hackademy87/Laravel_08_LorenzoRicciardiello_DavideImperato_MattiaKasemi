



<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" >

@csrf

  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" name="name" class="form-control">
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Categoria</label>
    <select class="form-control" name="category_id">

    <option value="null" disabled >seleziona una categoria</option>
    @foreach($categories as $category)
    <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
  </select>
  </div>


  <div class="mb-3">
    <label  class="form-label">materiale</label>
    <select class="form-control" name="materialId[]" multiple>

    <option value="null" disabled >seleziona i materiali</option>
    @foreach($materials as $material)
    <option value="{{$material->id}}">{{$material->name}}</option>
    @endforeach
  </select>
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