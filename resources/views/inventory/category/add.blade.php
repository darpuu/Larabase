<x-app-layout>
    <div class="card">
        <div class="card-body">
  
    <h1>
        Add product
    </h1>
    <hr>
    <form method="post" action="/inventory/category/add-post">
@csrf
<div class="form-group">
        <label for="name">Name</label>
<input type="text" name="name" class="form-control" required>
    </div>
   <div>
    <label for="">code</label>
    <input type="text" name="code" class="form-control" required>
   </div>
   <div class=form-group>
    <button class="btn btn-success">Save</button>
   </div>
</form>
</hr>

</x-app-layout>