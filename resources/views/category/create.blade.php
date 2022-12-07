@extends('layouts.admin.share')

@section('title', 'Thêm dannh mục mới')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Thêm mới danh mục</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('categories.store') }}" method="post" role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="categoryName">Danh mục</label>
                    <input name="c_name" type="text" class="form-control" id="categoryName" placeholder="Nhập tên danh mục">
                </div>
            </div>
            <!-- /.box-body -->
            @csrf
            <div class="box-footer">
                <button type="submit" class="btn btn-success">Lưu</button>
                <a href="{{ route('categories.index') }}" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
@endsection
