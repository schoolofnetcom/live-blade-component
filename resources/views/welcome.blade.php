<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title>Blade Components</title>
  </head>
  <body>
    <div class="container">
        <h1>Blade Components</h1>

        <!-- Chamada de componente -->
        {{-- <x-hello />
        <x-folder.hello /> --}}

        <!-- Passagem de parâmetros -->
        {{-- <x-alert message="Minha mensagem" type="danger" />
        <x-alert message="Minha mensagem 2" type="info" />
        <x-alert message="Minha mensagem 3" type="success" />
        <x-alert message="Minha mensagem 4" type="warning" />
        <x-alert message="Minha mensagem dark" />

        <x-users :users="$users" /> --}}

        <!-- Inserindo atributos ao componente -->
            {{-- <x-input
                message="Minha mensagem"
                placeholder="Digite seu nome"
                class="form-control"
            /> --}}

        <!-- Trabalhando com slots -->
        {{-- <x-card>
            <x-slot name="title">
                Meu título do card
            </x-slot>

            <x-slot name="subtitle">
                meu subtitulo do card
            </x-slot>

            Minha mensagem do card
        </x-card> --}}

        <!-- Inline Component Views -->
        {{-- <x-message>
            Meu component inline
        </x-message> --}}

        <!-- Componentes Anônimos -->
        {{-- <x-anonimo message="Meu alerta anonimo" /> --}}

        <!-- Componentes dinamicos -->
        {{-- @if($component) --}}
            <x-dynamic-component :component="$component ?? 'segundo'" />
        {{-- @endif --}}
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
