@extends('admin.layouts.master', ['pageTitle'=>'User List']) 

@section('content')
<div class="container-fluid plr_30 body_white_bg pt_30">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="QA_section">
        <div class="white_box_tittle list_header">
          <h4>Table</h4>
          <div class="box_right d-flex lms_block">
            <div class="serach_field_2">
              <div class="search_inner">
                <form active="#">
                  <div class="search_field">
                    <input type="text" placeholder="Search content here..." />
                  </div>
                  <button type="submit"><i class="ti-search"></i></button>
                </form>
              </div>
            </div>
            <div class="add_button ml-10">
              <a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1">Add New</a>
            </div>
          </div>
        </div>

        <div class="QA_table">
          <!-- table-responsive -->
          <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
            <table class="table lms_table_active dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1141px;">
              <thead>
                <tr role="row">
                  <th scope="col" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 87px;" aria-sort="ascending" aria-label="title: activate to sort column descending">
                    title
                  </th>
                  <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 129px;" aria-label="Category: activate to sort column ascending">Category</th>
                  <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 128px;" aria-label="Teacher: activate to sort column ascending">Teacher</th>
                  <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;" aria-label="Lesson: activate to sort column ascending">Lesson</th>
                  <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 91px;" aria-label="Enrolled: activate to sort column ascending">Enrolled</th>
                  <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 64px;" aria-label="Price: activate to sort column ascending">Price</th>
                  <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 97px;" aria-label="Status: activate to sort column ascending">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr role="row" class="odd">
                  <th scope="row" tabindex="0" class="sorting_1"><a href="#" class="question_content"> title here 1</a></th>
                  <td>Category name</td>
                  <td>Teacher James</td>
                  <td>Lessons name</td>
                  <td>16</td>
                  <td>$25.00</td>
                  <td><a href="#" class="status_btn">Active</a></td>
                </tr>
                <tr role="row" class="even">
                  <th scope="row" tabindex="0" class="sorting_1"><a href="#" class="question_content"> title here 1</a></th>
                  <td>Category name</td>
                  <td>Teacher James</td>
                  <td>Lessons name</td>
                  <td>16</td>
                  <td>$25.00</td>
                  <td><a href="#" class="status_btn">Active</a></td>
                </tr>
                <tr role="row" class="odd">
                  <th scope="row" tabindex="0" class="sorting_1"><a href="#" class="question_content"> title here 1</a></th>
                  <td>Category name</td>
                  <td>Teacher James</td>
                  <td>Lessons name</td>
                  <td>16</td>
                  <td>$25.00</td>
                  <td><a href="#" class="status_btn">Active</a></td>
                </tr>
                <tr role="row" class="even">
                  <th scope="row" tabindex="0" class="sorting_1"><a href="#" class="question_content"> title here 1</a></th>
                  <td>Category name</td>
                  <td>Teacher James</td>
                  <td>Lessons name</td>
                  <td>16</td>
                  <td>$25.00</td>
                  <td><a href="#" class="status_btn">Active</a></td>
                </tr>
                <tr role="row" class="odd">
                  <th scope="row" tabindex="0" class="sorting_1"><a href="#" class="question_content"> title here 1</a></th>
                  <td>Category name</td>
                  <td>Teacher James</td>
                  <td>Lessons name</td>
                  <td>16</td>
                  <td>$25.00</td>
                  <td><a href="#" class="status_btn">Active</a></td>
                </tr>
                <tr role="row" class="even">
                  <th scope="row" tabindex="0" class="sorting_1"><a href="#" class="question_content"> title here 1</a></th>
                  <td>Category name</td>
                  <td>Teacher James</td>
                  <td>Lessons name</td>
                  <td>16</td>
                  <td>$25.00</td>
                  <td><a href="#" class="status_btn">Active</a></td>
                </tr>
                <tr role="row" class="odd">
                  <th scope="row" tabindex="0" class="sorting_1"><a href="#" class="question_content"> title here 1</a></th>
                  <td>Category name</td>
                  <td>Teacher James</td>
                  <td>Lessons name</td>
                  <td>16</td>
                  <td>$25.00</td>
                  <td><a href="#" class="status_btn">Active</a></td>
                </tr>
                <tr role="row" class="even">
                  <th scope="row" tabindex="0" class="sorting_1"><a href="#" class="question_content"> title here 1</a></th>
                  <td>Category name</td>
                  <td>Teacher James</td>
                  <td>Lessons name</td>
                  <td>16</td>
                  <td>$25.00</td>
                  <td><a href="#" class="status_btn">Active</a></td>
                </tr>
                <tr role="row" class="odd">
                  <th scope="row" tabindex="0" class="sorting_1"><a href="#" class="question_content"> title here 1</a></th>
                  <td>Category name</td>
                  <td>Teacher James</td>
                  <td>Lessons name</td>
                  <td>16</td>
                  <td>$25.00</td>
                  <td><a href="#" class="status_btn">Active</a></td>
                </tr>
                <tr role="row" class="even">
                  <th scope="row" tabindex="0" class="sorting_1"><a href="#" class="question_content"> title here 1</a></th>
                  <td>Category name</td>
                  <td>Teacher James</td>
                  <td>Lessons name</td>
                  <td>16</td>
                  <td>$25.00</td>
                  <td><a href="#" class="status_btn">Active</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
