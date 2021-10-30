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

    <h1>Lista de clientes do sistema</h1>
    <div class="card">
        <div class="card-body">
            <div class="text-end">
                <a class="btn btn-info text-white" href="{{ route('admin.customer.create') }}">Novo cliente</a>
            </div>

        </div>
    </div>

    @if (empty($customers))
        <div class="alert alert-warning" role="alert">
            Nenhum registro encontrado
        </div>
    @else

        @if (session()->exists('message'))
            <div class="alert alert-primary" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif

        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cpf</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)

                    <tr>
                        <td>{{ $customer->id }} </td>
                        <td>{{ $customer->name }} </td>
                        <td>{{ $customer->email }} </td>
                        <td>{{ $customer->cpf }} </td>
                        <td>
                            <div class="btn-group">

                                <a class="btn btn-sm btn-success"
                                    href="{{ route('admin.customer.show', ['customer' => $customer->id]) }}">Visualizar</a>
                                <a class="btn btn-sm btn-info text-white"
                                    href="{{ route('admin.customer.edit', ['customer' => $customer->id]) }}">Editar</a>
                                <form action="{{ route('admin.customer.destroy', ['customer' => $customer->id]) }}"
                                    method="post">
                                    @csrf @method('delete')
                                    <button class="btn btn-sm btn-danger" type="submit">Apagar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
