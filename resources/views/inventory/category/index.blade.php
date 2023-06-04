<x-app-layout>
    <div class="card">
        <div class="card-body">
            <a href="/inventory/category/add" class="btn btn-primary">
                Add Category
            </a>
            <hr />
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            COde
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categoryList as $category)
                    <tr>
                        <td>
                            {{$category->id}}
                        </td>
                        <td>
                            {{$category->name}}
                        </td>
                        <td>
                            {{$category->code}}
                        </td>
                        <td> 
                            <a href="/inventory/category/edit?id={{$category->id}}" class="btn btn-info">
                                Edit
                            </a>

                            <a href="/inventory/category/delete?id={{$category->id}}" class="btn btn-danger">
                                Delete
                            </a>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>