<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Pure CSS clickable flip cards</title>
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
      @foreach ($flipcard as $item)
          
   
    <div class="col-md-4">
      <div class="card">
          <input type="checkbox" id="card{{ $item->id }}" class="more">
          <div class="content">
              <div class="front" style="background-image:url({{ asset('image/ITIL4.png')}});)">
                  <div class="inner">
                      <h2>{{ $item->question }}</h2>
                      <div class="rating">
                        <div class="row">
                          <a class="btn btn-primary" type="button" name="button">Hints 1</a>
                            <a class="btn btn-primary" type="button" name="button">Hints 2</a>
                            <a class="btn btn-primary" type="button" name="button">Hints 3</a>
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
                          <h5>{{ $item->answer }}</h5>
                      </div>

                      <label for="card{{ $item->id }}" class="button return" aria-hidden="true">
                          <i class="fas fa-arrow-left"></i>
                      </label>
                  </div>
                  <strong><h3 class="text-center">Is Your Ans Correct?</h3></strong>
                  <div class="row text-center">
                    <a class="btn btn-success" href="#">Yes</a>
                      <a class="btn btn-danger" href="#">No</a>
                  </div>

              </div>
          </div>
      </div>
    </div>

  </div>
  @endforeach


    </div>
<!-- partial -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>