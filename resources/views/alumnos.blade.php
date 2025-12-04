<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link rel="stylesheet" href="{{ asset('css/alumnos.css') }}">
</head>

<body>

    <div class="main-container">
        <div class="table-container">
            <h1>Lista de Alumnos Registrados</h1>
            <button id="redirect-button">
                Vuelve a la página de bienvenida
            </button>
            <table class="tabla-alumnos">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Carrera</th>
                        <th>Estado</th>
                        <th>Registro</th>
                        <th>Actualizado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnosList as $alumno)
                        <tr>
                            <td>{{ $alumno->id }}</td>
                            <td>{{ $alumno->nombre }}</td>
                            <td>{{ $alumno->edad }}</td>
                            <td>{{ $alumno->carrera }}</td>
                            <td>{{$alumno->estado == '0' ? 'Activo' : 'Desactivado'}}</td>
                            <td>{{ $alumno->created_at }}</td>
                            <td>{{ $alumno->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.getElementById('redirect-button').addEventListener('click', function () {
            window.location.href = "{{ route('home') }}";
        });
    </script>

</body>

</html>