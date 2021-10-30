<!doctype html>
<html lang="en">

<head>
    {{-- Required meta tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Clientes</title>
</head>

<body>



    <h1>Cadastrar novo cliente</h1>
    <div class="card">
        <div class="card-body">
            <div class="text-end">
                <a class="btn btn-info text-white" href="{{ route('admin.customer.index') }}">Clientes</a>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            @if ($errors->all())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-warning" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.customer.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email"  value="{{ old('email') }}" aria-describedby="email">
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">Cpf</label>
                    <input type="text" class="form-control" name="cpf" id="cpf"  value="{{ old('cpf') }}">
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
