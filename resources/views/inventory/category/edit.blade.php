<x-app-layout>
<div class="card">
        <div class="card-body">
    <form method="post" action="/inventory/category/edit-post">
        @csrf
        <input type="hidden" name="id" value="{{$category->id}}">
        <div class="form-group">
            <label for="">
                Name
            </label>
            <input type="text" name="name" class="form-control" value= "{{$category->name}}" required>
        </div>
        <div class="form-group">
            <label for="">
                Code
            </label>
            <input type="text" name="code" class="form-control" value= "{{$category->code}}" required>
            <button class="btn btn-success">Save</button>
        </div> 
    </form>
        </div>` 
</div>
</x-app-layout>