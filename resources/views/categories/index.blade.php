@extends('layouts.app')

@section('content')

    <div class="panel-body">
        @include('common.errors')

        <form action="/category" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="category-name" class="col-sm-3 control-label">Category</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="category-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Category
                    </button>
                </div>
            </div>
        </form>
    </div>


     @if (count($categories) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Categories
            </div>

            <div class="panel-body">
                <table class="table table-striped category-table">

                    <thead>
                        <th>Category</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $category->name }}</div>
                                </td>

                                <td>
                                    <form action="/category/{{ $category->id }}" method="POST">
							            {{ csrf_field() }}
							            {{ method_field('DELETE') }}

							            <button>Delete Category</button>
							        </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection