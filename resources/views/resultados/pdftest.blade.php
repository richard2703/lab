<html>

<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>

<body>
    <header>
        <h1>test.net</h1>
    </header>

    <div class="content">
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead class="labelTitulo">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono </th>
                    <th>Nacimiento</th>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->nacimiento }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sin registros.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <h1>www.test.net</h1>
    </footer>
</body>

</html>
