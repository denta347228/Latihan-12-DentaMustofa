
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatbot</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>
<body class="bg dark">
 <div class="container mt-5">

 <h1 class="text-Bold">SABRINA</h1>
 <form action="{{url('/chat')}}" method="POST">
 @csrf
 <div class="mb-3">
<label for="message" class="form-label text-light">message</label>
<input type="text" clas="form-control" id="message"name="message" placeholder="tulis" >
</div>
<button type="submit" class="btn btn-primary">Klik</button>
</form>
 </div>
 </div>

 <div class="container">
 @if ( session ('response'))
    <hr>
    <div>
        <h2 class="fw-bols"> Answer</h2>
        <p class="fs-5"> 
            {!! Str::markdown (session ('response')) !!}

        </p>
    </div>
    </div>
 
 @endif

 
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            <!--link boostrap  -->
            <script src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>
            <!--link js untuk serch  -->

            
</body>
</html>