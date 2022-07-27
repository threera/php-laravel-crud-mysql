<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Add</h2>
            </div>
            <div>
                <a href="{{ route('companies.index')}}" class="btn btn-success">Backindex</a>
            </div>
            @if (Session('status'))
                <div class="alert-success">
                    {{Session('status')}}
                </div>
            @endif

            <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group m-3">
                            <strong>company</strong>
                            <input type="text" name="name" class="form-control" placeholder="company Name">
                             @error('name')
                                 <div class="alert alert-danger">{{@message}}</div>
                             @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group m-3">
                            <strong>Email</strong>
                            <input type="text" name="email" class="form-control" placeholder="company Email">
                             @error('email')
                                 <div class="alert alert-danger">{{@message}}</div>
                             @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group m-3">
                            <strong>Address</strong>
                            <input type="text" name="address" class="form-control" placeholder="company Address">
                             @error('address')
                                 <div class="alert alert-danger">{{@message}}</div>
                             @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>