<div>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
    <p class="alert alert-info">
        Existem {{ $count }} usuários na listagem.
    </p>

    <p class="alert alert-warning">
        {{ $print('minha mensagem') }}
    </p>
</div>
