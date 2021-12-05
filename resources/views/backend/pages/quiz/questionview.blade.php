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
  @foreach($questions as $index=>$item)
  <h3>{{$item->course->course_title}}</h3>
  <hr>
  <h5>{{ $index+1 }}.{{$item->question}}</h5> 
  <td >
    <a class="btn btn-success pull-right" id="delete" href="/question/delete/{{$item->id}}"><i class="fas fa-trash"></i></a>
  </td>
  @foreach ($options as $opt)
  <ol class="ul-list"  style="list-style-type: lower-alpha;" >
    <li>&nbsp;<input type="radio" {{$opt==$item->answer ? 'checked' : ''}} value="{{$opt}}" />
    {{$opt}}  
    </li>
  </ol>
  @endforeach
  @endforeach
    <!-- Modal -->
</div>
@endsection

