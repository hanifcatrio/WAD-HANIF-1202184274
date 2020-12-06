@extends ('App')
@section ('Template')

<div class="text-center mt-5">
    <h3> Input Product <h3>
</div>
<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Name Product</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Price</label>
      <label class="sr-only" for="inlineFormInputGroupUsername" name="price">Price</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">$ USD</div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
      </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Description</label>
        <textarea type="text" name="description" class="form-control" id="exampleFormControlInput1"> </textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Stock</label>
        <input type="number" class="form-control col-sm-4" id="exampleFormControlInput1" name="stock">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Image file</label>
        <div>
            <input type="file" class="col-sm-4" id="exampleFormControlInput1" name="img_path">
        </div>
    </div>
    <div class="form-group mt-4">
    <button type="submit" name="submit"class="btn btn-dark">Submit</button>
    </div>
</form>

@endsection