@extends('admin.admin_master')
@section('admin_dashboard_content')


<div class="container-fluid">
  <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Quiz</h4>
    <ul class="db-breadcrumb-list">
      <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
      <li>Quiz</li>
    </ul>
  </div>

    <div class="row">
    <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
     {{-- @include('admin.messages.message') --}}
    
    <form class="form-horizontal" role="form" action="{{ route('quiz-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="space-4"></div>
    <div class="form-group">
        <label for="custom select">Select Course</label>
        <select class="form-control" name="elearning_course_id">
          <option label="Choose Course"></option>
          <?php foreach ($courses as $item): ?>
            <option value="{{$item->id}}">{{$item->course_title}}</option>
          <?php endforeach; ?>
        </select>
      </div>
    <div class="space-4"></div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Quiz Name </label>
        <div class="col-sm-9">
             
         <input type="text" id="form-field-2" data-validation="required" placeholder="Quize Name" class="col-xs-10 col-sm-5" name="quiz_name" required="" >
             
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Description</label>
        <div class="col-sm-9">
            <input type="text" id="form-field-2" placeholder="Descriotion" class="col-xs-10 col-sm-5" name="description" required="" />
            
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Quiz Date</label>
        <div class="col-sm-9">
            <input type="date" id="form-field-2" placeholder="quiz date" class="col-xs-10 col-sm-5" name="quiz_date"   />
            
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Quiz Time</label>
        <div class="col-sm-9">
            <input type="text" id="form-field-2" placeholder="00:00"  pattern="[0-9]{2}:[0-9]{2}" class="col-xs-10 col-sm-5" name="quiz_time" required="" title="example 01:00 " />
            <span> exm: 00:00</span>
        </div> 
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Number Of Question View for User</label>
        <div class="col-sm-9">
            <input type="text" id="form-field-2" placeholder="How many question view for this quiz " class="col-xs-10 col-sm-5" name="number_of_question" required="" />
            
        </div>
    </div>
    <div class="space-4"></div>
    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit">
                <i class="ace-icon fa fa-check bigger-110"></i>
                Submit
            </button>
    
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                Reset
            </button>
        </div>
    </div>
    
    <div class="hr hr-24"></div>
    
     
    </form>
    
     <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
    </div>
    <br>
    <br>
    
    
    <div class="col-md-12">
        {{$quizes->links()}}
        <table class="table table-bordered" id="datatables">
           <thead>
               <tr>
                   <th>Sl</th>
                   <th>Quiz Name</th>
                   <th>Description</th>
                   <th>Date</th>
                   <th>Time</th>
            
                   <th>Num of Exam Qus</th>
                   <th>Status</th>
                   <th>Add Question</th>
                   <th>Details</th>
                   <th>Edits</th>
                   <th>Delete</th>
               </tr>
           </thead>
           <tbody>
               @foreach($quizes as $key=>$data)
               <tr>
                   <td>{{++$key}}</td>
                   <td>{{$data->quiz_name}}</td>
                   <td>{{$data->description}} </td>
                   <td>{{$data->quiz_date}} </td>
                   <td>{{$data->quiz_time}} </td>                   
                   <td>{{$data->number_of_question}} </td>
                   <td><input type="checkbox" name="status" class="quiz-status" data_id="{{$data->id}}" {{$data->status=='1'?'checked':''}}> </td>
                   <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#QuestionAdd{{ $data->id }}">Add Question</i></a>
                   </td>
                   @include('backend.pages.quiz.questionaddmodal')
                   <td><a href="/question/view/{{$data->id}}">Details</a></td>
                   <td><a href="/quizes/{{$data->id}}/edit">Edit</a></td>
                   <td><a id="delete" class="btn btn-danger" href="/quize/delete/{{ $data->id }}">Delete</a></td>
               </tr>
               @endforeach
           </tbody>
        </table>
    </div>
    
    
    @endsection
    
    @push('scripts')
    
    <script type="text/javascript">
      
        $(document).on('click','.quiz-status',function(){
         var id=$(this).attr('data_id');
       var url=("{!!url('/')!!}");
       
         $.get(url+'/quiz_status/'+id,function(fb){
             alert('Staus Successfully changed');
         });
        });
    </script>
    @endpush
    @push('scripts')
    
    
                <script type="text/javascript">
                    
              $('#category').on('change',function(e){
                  console.log(e);
    
                 var categories_id= e.target.value;
    
               $.get('/json-catelogs?categories_id=' + categories_id,function(data){
                            console.log(data);
    
                $('#catelog').empty();
              $('#catelog').append('<option value="" disable="true" selected="true">Select a Catelog</option>');
    
              $.each(data, function(index, districtsObj){
                $('#catelog').append('<option value="'+ districtsObj.id +'">'+ districtsObj.catelog +'</option>');
              });
             
                        });
                    });
                </script>
    
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#summernote').summernote({
                height:'200px',
                placeholder:'Description',
                toolbar: [
        ['style', ['fontname','bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
                ['insert', ['link', 'picture', 'video', 'hr', 'readmore']],
                ['genixcms', ['elfinder']],
                ['view', ['fullscreen', 'codeview']],
      ],
             onImageUpload: function(files, editor, welEditable) {
                sendFile(files[0],editor,welEditable);
            }	 
            });
        });
        $(function(){
    'use strict';

    $('#datatables').DataTable({
      responsive: false,
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ ',
      }
    });
  })
    </script>
    <script type="text/javascript">
    function previewImage(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>
    

</div>




@endpush
