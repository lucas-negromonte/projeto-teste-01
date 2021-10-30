<!doctype html>
<html lang="en">

<head>
    {{-- Required meta tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Editar Cliente</title>
</head>

<body>


   <h1>Editar cliente: {{ $customer->name }}</h1>
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
            @if (session()->exists('message'))
                <div class="alert alert-primary" role="alert">
                    {{ session()->get('message') }}
                </div>
            @endif

            <form action="{{ route('admin.customer.update', ['customer' => $customer->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name') ?? $customer->name }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email"
                        value="{{ old('email') ?? $customer->email }}" aria-describedby="email">
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">Cpf</label>
                    <input type="text" class="form-control" name="cpf" id="cpf"
                        value="{{ old('cpf') ?? $customer->cpf }}">
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
