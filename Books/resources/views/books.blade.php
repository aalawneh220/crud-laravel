<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>books</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{-- {{$arr = [ 'img.jbg', 'img2.jbg']}}; --}}
      {{-- @php
          
       $arr = [
        ['img' => 'https://d3i5mgdwi2ze58.cloudfront.net/swd3lfscp8lshlhuwfjng9s92o8q', 'book_tittle' => ' War and Peace', 'book_author'=>'Leo Tolstoy' , 'book_description'=>'War and Peace delineates in graphic detail events leading up to Napoleon'],
        ['img' => 'https://d3i5mgdwi2ze58.cloudfront.net/ohbd3xqukj7do2f0o5txmhghfsva', 'book_tittle' => '  In Search of Lost Time', 'book_author'=>'Marcel Proust' , 'book_description'=>'the first part of A la recherche de temps perdu, Marcel Proust'],
        ['img' => 'https://d3i5mgdwi2ze58.cloudfront.net/lyehiedvgxh6ipswwpv1wis3bj9k', 'book_tittle' => '   The Collected Works', 'book_author'=>'Kahlil Gibran' , 'book_description'=>'A collection of the major works of the celebrated poet, artist, and mystic features '],
        ['img' => 'https://d3i5mgdwi2ze58.cloudfront.net/kztop4hfi592g61tyhgtbl9d01ev', 'book_tittle' => '    The Bible ', 'book_author'=>'Christian Church' , 'book_description'=>'The Authorized King James Version is of the Christian Bible begun in 1604'],
        ['img' => 'https://d3i5mgdwi2ze58.cloudfront.net/3lq8zmcep8aira47s3j17ie1bg0c', 'book_tittle' => '     Bleak House ', 'book_author'=>'Charles Dickens' , 'book_description'=>'Bleak House is the ninth novel by Charles Dickens, published in twenty monthly'],
      
    ];
@endphp --}}

      @foreach ($allBook as $item)
          
     
    <div class="card d-inline-flex p-2 bg-light" style="width: 18rem;">
        <img src="{{$item['book_image']}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$item['book_tittle']}}</h5>
          <p class="card-text">{{$item['book_description']}} {{$item['book_author']}}</p>
          <a href="#" class="btn btn-info">Update</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </div>
      </div>
      
      @endforeach

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>