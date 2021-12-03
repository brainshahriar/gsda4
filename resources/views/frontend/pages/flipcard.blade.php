<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>GSDA</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'><link rel="stylesheet" href="{{asset('style.css')}}">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <div class="col-md-12">

  
      @foreach ($flipcard as $index => $item)
          

    <div class="col-md-4">
      <div class="card" style="width: 80rem; height: 50rem;">
          <input type="checkbox" id="card{{ $item->id }}" class="more">
          <div class="content">
              <div class="front" style="background-image:url({{ asset('image/ITIL4.png')}});)">
                  <div class="inner">

                      <h1 style="font-weight:700;">Card : {{$index + $flipcard->firstItem()}} </h1>
                      <h2>{{ $item->question }}</h2>
                      <div class="rating">
                        <div class="row">
                            
                            @if($item->hints1)
                            <button id="mybtn" class="btn btn-primary" onclick="myFunction()">Hints 1</button>
                            
                                <p id="myDIV" style="margin-right:5px;display: none;color:#800869;font-weight:700;font-size:30px">{{ $item->hints1 }}</p>
                                @endif
                                @if($item->hints2)
                                <button id="mybtn2" class="btn btn-primary" onclick="myFunction2()">Hints 2</button>
                                <p id="myDIV2" style="margin-right:5px;display: none;color:green;font-weight:700;font-size:30px">{{ $item->hints2 }}</p>
                                @endif
                                @if($item->hints3)
                                <button id="mybtn3" class="btn btn-primary" onclick="myFunction3()">Hints 3</button>
                                
                                <p id="myDIV3" style="margin-right:5px;display: none;color:red;font-weight:700;font-size:30px">{{ $item->hints3 }}</p>
                                @endif
                                @if($item->hints4)
                                <button id="mybtn4" class="btn btn-primary" onclick="myFunction4()">Hints 4</button>
                                
                                <p id="myDIV4" style="margin-right:5px; display: none;color:blue;font-weight:700;font-size:30px">{{ $item->hints4 }}</p>
                                @endif
                        </div>

                      </div>
                      <label for="card{{ $item->id }}" class="button" aria-hidden="true">
                          Show Results
                      </label>
                  </div>
              </div>
              <div class="back">
                  
                  <div class="inner">
                      <div class="description">
                         <h5 style="font-size:20px; font-weight: 700">{{ $item->answer }}</h5>
                      </div>
                      <label for="card{{ $item->id }}" class="button return" aria-hidden="true">
                          <i class="fas fa-arrow-left"></i>
                      </label>
                  </div>
                  <div  id="myBTN">
                  <strong><h3 class="text-center">Is Your Ans Correct?</h3></strong>

        <form  id="frm">
        @csrf
          <input type="hidden" name="user_id" id="user_id" value={{Auth::id()}}>
          <input type="hidden" name="course_id" id="course_id" value="{{$item->id}}">
          <input type="hidden" name="flipcard_id" id="flipcard_id" value="{{$item->id}}">
          <input type="hidden" name="mark" id="mark" value="{{$item->id}}">
                    <div class="row text-center">
                          <button class="btn btn-success" id="mybtn5" onclick="myFunction5()" name="submit" type="submit" value="Submit" id="frmSubmit" class="btn button-md">Yes</button>
                          <button class="btn btn-danger" id="mybtn5" onclick="myFunction5()" name="submit" type="submit" value="Submit" id="frmSubmit" class="btn button-md">No</button>
                    </div>
                      </div>
                 </form>                     
              </div>
          </div>
      </div>
    </div>
  </div>
  @endforeach
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="col-lg-12 m-b20 text-center">

       {{ $flipcard->links()}}
    
    </div>
    
<!-- partial -->
<!-- Latest compiled and minified JavaScript -->





<script>
    function myFunction() {
  var x = document.getElementById("myDIV");
  var y=document.getElementById("mybtn");
  if (x.style.display === "none") {
    x.style.display = "inline";
    y.style.display = "none";

  } else {
    x.style.display = "none";
  }
}
</script>
<script>
    function myFunction2() {
  var x = document.getElementById("myDIV2");
  var y=document.getElementById("mybtn2");
  if (x.style.display === "none") {
    x.style.display = "inline";
    y.style.display = "none";

  } else {
    x.style.display = "none";
  }
}
</script>
<script>
    function myFunction3() {
  var x = document.getElementById("myDIV3");
  var y=document.getElementById("mybtn3");
  if (x.style.display === "none") {
    x.style.display = "inline";
    y.style.display = "none";

  } else {
    x.style.display = "none";
  }
}
</script>


<script>
    function myFunction4() {
  var x = document.getElementById("myDIV4");
  var y=document.getElementById("mybtn4");
  if (x.style.display === "none") {
    x.style.display = "inline";
    y.style.display = "none";
  } else {
    x.style.display = "none";
  }
}
</script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
 jQuery('#frm').submit(function(e){
   e.preventDefault();
   jQuery.ajax({
     url:"{{url('flipcard-ajax/store')}}",
     data:jQuery('#frm').serialize(),
     type:'post',
     success:function(result){
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Your work has been saved Play Next',
          showConfirmButton: false,
          timer: 1500
        })  
             console.log('successfully data added');
     }
   });
 });
  </script>

<script>
    function myFunction5() {
  var x = document.getElementById("myBTN");
  var y=document.getElementById("mybtn5");
  if (x.style.display === "none") {
    y.style.display = "none";

  } else {
    x.style.display = "none";
  }
}
</script>

</body>

</html>