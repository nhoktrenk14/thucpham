@extends('admin.layouts.master', ['pageTitle'=>'Thêm mới sản phẩm'])

@section('content')

<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-header form-header">
        <h3 class="modal-title form-title">Thêm mới sản phẩm</h3>
    </div>
    <div class="form-group">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" name="name" class="form-control"
               placeholder="Nhập tên sản phẩm">
        <span class="error-msg" error-for="name"></span>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Ảnh sản phẩm</label>
        <input type="file" class="form-control-file" name="files" id="exampleFormControlFile1">
    </div>
    <div class="form-group">
        <label>Danh mục:</label>
        <select name="category_id" class="default_sel w-100">
            <option value="">--Chọn danh mục--</option>
            @foreach ($category as $cate)
                <option value="{{$cate->id}}">{{$cate->name}}</option>
            @endforeach
        </select>
        <span class="error-msg" error-for="category_id"></span>
    </div>
    <div class="form-group">
        <label>Nhãn hàng:</label>
        <select name="brand_id" class="default_sel w-100">
            <option value="">--Chọn nhãn hàng:--</option>
            @foreach ($Brand as $bra)
                <option value="{{$bra->id}}">{{$bra->name}}</option>
            @endforeach
        </select>
        <span class="error-msg" error-for="category_id"></span>
    </div>
    <div class="form-group">
        <label for="status">Trạng thái:</label>
        <div class="radio">
            <input id="radio-1" name="status" type="radio" value="1" checked>
            <label for="radio-1" class="radio-label">Hiện</label>
        </div>
        <div class="radio">
            <input id="radio-2" name="status" type="radio" value="0">
            <label for="radio-2" class="radio-label">Ẩn</label>
        </div>
    </div>
    <div class="form-group">
        <label>Giá gốc:</label>
        <div class="input-group">
            <input type="number" name="regular_price" class="form-control js-vnd-currency"
                   placeholder="Nhập giá gốc">
            <div class="input-group-append">
                <span class="input-group-text">VND</span>
            </div>
        </div>
        <span class="error-msg" error-for="regular_price"></span>
    </div>
    <div class="form-group">
        <label>Giá khuyến mãi:</label>
        <div class="input-group">
            <input type="number" name="promotional_price" class="form-control"
                   placeholder="Nhập giá khuyến mãi">
            <div class="input-group-append">
                <span class="input-group-text">VND</span>
        </div>
    </div>
    <div class="form-group">
        <label>Mô tả:</label>
        <textarea class="form-control" name="description" rows="5"></textarea>
        <span class="error-msg" error-for="description"></span>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Thêm mới</button>
      </div>
    </div>
  </form>
@endsection
