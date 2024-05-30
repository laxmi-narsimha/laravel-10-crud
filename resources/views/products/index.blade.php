<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
        <title>Welcome to Laravel</title>
    </head>
    <body>
     
    <div class="section aboutme text-center" data-anchor="aboutme">
      <div class="opaque-bg animated fadeInDown">
        <h1 style="color:white">Add Page<span style="color:#FF6363"></span></h1>
        <p><span id="holder"></span><span class="blinking-cursor"></span></p>
      </div>
     
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <a href="index.php" class="btn btn-dark">Back</a>

    </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
    <div class="row">
        <form action= {{ route('products.store')}} method="POST">
          @csrf
        <div class="col-md-8 mx-auto mt-4">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="name" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name ">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Contact No</label>
            <input type="phone" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Enter Contact Details">
          </div>
           <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Message"></textarea>
          </div>
          <div class="mb-3">
          <button class="btn btn-primary" type="submit">Submit form</button>
          </div>
        </div>
        
</form>
    </div>
</div>
    </body>
</html>