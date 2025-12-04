<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
    <link rel="stylesheet" href={{ asset('css/registro.css') }}>
</head>

<body>

    <div class="main-container">

        <div class="top-container">
            <h1>Pagina de testing</h1>
            <button id="redirect-button">
                Vuelve a la página de bienvenida
            </button>
        </div>

        <div class="form-container">

            <h2>Puedes registrate para datos dummy nada más...</h2>
            <h4>¿Qué esperabas? Estamos probando...</h4>

            <form action="{{ route('usuarios.store') }}" class="form-tag-container" method="post">

                @csrf
                
                <label for="nombre"> Nombre:
                    <input type="text" name="nombre" id="nombre" class="input-field" autocomplete="off" required>
                </label>

                <label for="edad"> Edad:
                    <input type="text" name="edad" id="edad" class="input-field" autocomplete="off" required> 
                </label>

                <label for="carrera"> Carrera:
                    <select name="carrera" id="carrera" class="input-field" required>
                        <option value="" disabled selected>Selecciona tu carrera</option>
                        <option value="LMAD">LMAD</option>
                        <option value="LCC">LCC</option>
                        <option value="LSTI">LSTI</option>
                        <option value="LM">LM</option>
                        <option value="LA">LA</option>
                    </select>
                </label>

                <button type="submit">Enviar mis datos</button>
            </form>
        </div>

    </div>

    <script>

        document.getElementById("redirect-button").addEventListener("click", function () {
            window.location.href = "{{ route('home') }}";
        });

    </script>

</body>

</html>