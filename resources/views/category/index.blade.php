@extends('layouts.admin.share')

@section('title', 'Danh mục sản phẩm')

@section('btn', 'Thêm danh mục')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Danh mục sản phẩm</h3>
        </div>

        <a href="{{ route('categories.create') }}" class="btn btn-primary"><i class="fa fa-plus"
                                                                              aria-hidden="true"></i> @yield('btn')</a>

        <div class="box-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 20px">
                            <input type="checkbox" name="" id="">
                        </th>
                        <th>#</th>
                        <th class="text-center">Tên danh mục</th>
                        <th class="text-center">Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>{{ $category->id }}</td>
                            <td class="text-center">{{ $category->c_name }}</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-success">
                                    <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                </a>

                                <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>

                                <a href="#" class="btn btn-danger">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
