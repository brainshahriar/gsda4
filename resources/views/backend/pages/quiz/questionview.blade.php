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
  <ol   class="ul-list"  style="list-style-type: lower-alpha;" >

    <li>&nbsp;<input type="radio" {{$item->options==$item->answer ? 'checked' : ''}} />
    @foreach ($options as $opt)
    <li value="{{ $opt }}">{{ ucwords($opt) }}</li>        
    @endforeach
    
    </li>
   

    
  </ol>

  @endforeach
    <!-- Modal -->
</div>
@endsection
