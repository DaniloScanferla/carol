@extends('layouts.app')

@section('content')

    <div class="panel-body">
        @include('common.errors')

        <form action="/product" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="product-name" class="col-sm-3 control-label">Product</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="product-name" class="form-control">
                </div>
                <select class="form-control" name="item_id">
                @foreach($brands as $brand)
                  <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
                </select>
                <select class="form-control" name="item_id">
                @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                </select>

            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Product
                    </button>
                </div>
            </div>
        </form>
    </div>


     @if (count($products) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Products
            </div>

            <div class="panel-body">
                <table class="table table-striped category-table">

                    <thead>
                        <th>Product</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $product->name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $product->brand->name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $product->category->name }}</div>
                                </td>
                                <td>
                                    <form action="/product/{{ $product->id }}" method="POST">
							            {{ csrf_field() }}
							            {{ method_field('DELETE') }}

							            <button>Delete Product</button>
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