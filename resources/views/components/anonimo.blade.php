@props([
    'message',
    'type' => 'dark'
    ])

<div>
    <p {{ $attributes }} class="alert alert-{{ $type }}">{{ $message }}</p>
</div>
