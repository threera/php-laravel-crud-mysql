<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Laravel 9 CRUD</h2>
                </div>
                <div>
                    <a href="{{ route('companies.create')}}" class="btn btn-success">Create company</a>
                </div>
                @if($message = Session::get('success'))
                <div class="alert-success">
                    <p>{{$message}}</p>
                </div>
                @endif

                <table class="table table-borderes">
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th width="280px">action</th>
                    </tr>
                    @foreach($companies as $company)
                    <tr>
                    <td>{{$company->id}}</td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->email}}</td>
                        <td>{{$company->address}}</td>
                        <td>
                            <form action="{{ route('companies.destroy', $company->id)}}" method="POST">
                                <a href="{{ route('companies.edit', $company->id)}}" class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $companies->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    
</body>
</html>