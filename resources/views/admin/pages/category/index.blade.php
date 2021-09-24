@extends('admin.layouts.master', ['pageTitle'=>'Danh mục sản phẩm']) 
@section('content')
<div class="container-fluid plr_30 body_white_bg pt_30">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="QA_section">
          <div class="white_box_tittle list_header">
            <h4>Danh mục sản phẩm</h4>
            <div class="box_right d-flex lms_block">
              <div class="serach_field_2">
                <div class="search_inner">
                  <form active="#">
                    <div class="search_field">
                      <input type="text" name="key" placeholder="Search content here..." />
                    </div>
                    <button type="submit"><i class="ti-search"></i></button>
                  </form>
                </div>
              </div>
              <div class="add_button ml-10">
                <a href="{{ route('add-category') }}" class="btn_1">Thêm mới</a>
              </div>
            </div>
          </div>
  
          <div class="QA_table">
            <!-- table-responsive -->
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
              <table class="table dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1141px;">
                <thead>
                  <tr role="row">
                    <th scope="col" class="sorting_asc text-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 87px;" aria-sort="ascending" aria-label="title: activate to sort column descending">
                      Tên danh mục
                    </th>
                    <th scope="col" class="sorting text-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 128px;" aria-label="Teacher: activate to sort column ascending" >Danh mục cha</th>
                    <th scope="col" class="sorting text-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;" aria-label="Lesson: activate to sort column ascending">Trạng thái</th>
                    <th scope="col" class="sorting text-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 91px;" aria-label="Enrolled: activate to sort column ascending">Slug</th>
                    <th scope="col" class="sorting text-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 64px;" aria-label="Price: activate to sort column ascending">Ngày tạo</th>
                    <th scope="col" class="sorting text-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 64px;" aria-label="Price: activate to sort column ascending">Lựa chọn</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $item)
                <tr role="row" class="odd">
                    <td class="text-center">{{$item->name}}</td>
                    <td class="text-center">{{$item->parent_id}}</td>
                    <td class="text-center">
                      @if ($item->status == 0)
                          <span class="btn btn-danger">Ẩn</span>
                      @else
                      <span class="btn btn-success">Hiện</span>
                      @endif
                    <td class="text-center">{{$item->slug}}</td>
                    <td class="text-center">{{$item->created_at}}</td>
                    <td class="text-center">
                        <a href="{{route('edit-category', ['category'=>$item->id])}}">
                          <span class="btn btn-success">Sửa</span>
                        </a>
                        <form method="POST" action="{{route('category.destroy', ['category'=>$item->id])}}" onsubmit="return ConfirmDelete( this )">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-danger" type="submit">Xóa</button>
                      </form>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
<script>
  function ConfirmDelete($this) {
    if(!confirm("Bạn có muốn xóa không?")) {
      return false;
    }
    this.form.submit();
    }
</script>
