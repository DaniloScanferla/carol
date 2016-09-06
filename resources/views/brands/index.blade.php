@extends('layouts.app')

@section('content')

    <div class="panel-body">
        @include('common.errors')

        <form action="/brand" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="brand-name" class="col-sm-3 control-label">Brand</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="brand-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Brand
                    </button>
                </div>
            </div>
        </form>
    </div>


     @if (count($brands) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Brands
            </div>

            <div class="panel-body">
                <table class="table table-striped brand-table">

                    <thead>
                        <th>Brand</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $brand->name }}</div>
                                </td>

                                <td>
                                    <form action="/brand/{{ $brand->id }}" method="POST">
							            {{ csrf_field() }}
							            {{ method_field('DELETE') }}

							            <button>Delete Brand</button>
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