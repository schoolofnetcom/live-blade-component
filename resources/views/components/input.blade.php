<div>
    <pre>
        {{-- var_dump($attributes) --}}
    </pre>
    <p>{{ $message }}</p>
    <input {{ $attributes->merge(['data-count-user' => 30]) }} >
</div>
