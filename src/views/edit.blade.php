<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <h1 class="text-center mt-2" style="font-family: 'Times New Roman';">Mr Mohsin Crud Package</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header d-flex flex-row justify-content-between">
                        <span>Edit Student</span>
                        <button class="btn btn-info btn-sm">Add</button>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('student.update',$student->id) }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <input type="text" class="form-control" value="{{ $student->name }}" placeholder="Name" name="name"><br>
                            <input type="text" class="form-control" value="{{ $student->email }}" placeholder="Email" name="email"><br>
                            <input type="file" class="form-control" value="{{ $student->image }}" placeholder="image" name="image">
                            @if ($student->image ?? null)
                            <img src="{{ asset('students/'.$student->image ?? '') }}" width="100px" height="100px" alt="Not Found">
                            @endif
                            <br>
                            <input type="text" class="form-control" value="{{ $student->country }}" placeholder="Country" name="country"><br>
                            <input type="text" class="form-control" value="{{ $student->number }}" placeholder="Number" name="number"><br>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
