@extends('admin.admin_master')
@section('admin_dashboard_content')

<div class="container-fluid">
  <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Question</h4>
    <ul class="db-breadcrumb-list">
      <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
      <li>Question</li>
    </ul>
  </div>
  <!-- Card -->
  <div class="row" id="basic-table">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Questions</h4>
        </div>

        <div class="table table-responsive">
          <table id="user_list" class="table table-bordered">
            <thead>
              <tr>
                <th class="wd-10p">Sl</th>
                <th class="wd-10p">Course.Name</th>

                <th class="wd-10p">Quiz.Name</th>
                <th >Question</th>
                <th class="wd-10p">Answer</th>
                <th class="wd-10p">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($questions as $key=>$row)

              <tr>
                <td>{{++$key}}</td>
                <td class="user_name">
                    {{$row->course->course_title}}

                </td>
                <td class="user_name">
                    {{$row->quiz->quiz_name}}

                </td>

                <td>
                    {{$row->question}}
                </td>
                <td>
                    {{$row->answer}}
                </td>

                <td>
                  <a id="delete" href="/question/delete/{{$row->id}}"><i class="fas fa-trash"></i></a>

                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal -->

</div>


@endsection
