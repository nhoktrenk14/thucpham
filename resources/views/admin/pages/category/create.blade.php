@extends('admin.layouts.master', ['pageTitle'=>'Thêm mới danh mục'])

@section('content')
<form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-header form-header">
        <h3 class="modal-title form-title">Thêm mới danh mục</h3>
    </div>
    <div class="form-group mt-3">
        <label for="name">Tên danh mục:</label>
        <input type="text" name="name" class="form-control"
               placeholder="Nhập tên danh mục">
        <span class="error-msg" error-for="name"></span>
    </div>
    <div class="form-group">
        <label class="mt-3" for="status">Trạng thái:</label>
        <div class="radio">
            <input id="radio-1" name="status" type="radio" value="1" checked>
            <label for="radio-1" class="radio-label">Hiện</label>
        </div>
        <div class="radio">
            <input id="radio-2" name="status" type="radio" value="0">
            <label for="radio-2" class="radio-label">Ẩn</label>
        </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Thêm</button>
      </div>
    </div>
  </form>
@endsection
