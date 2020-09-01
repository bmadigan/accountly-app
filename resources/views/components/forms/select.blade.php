@props([
'formLabel' => false,
'error' => false,
])
<div>
    @if($formLabel)
        <label for="email" class="block uppercase text-xs font-medium leading-5 tracking-wide mb-2">
            {{ $formLabel}}
        </label>
    @endif

    <select {{ $attributes }}
            class="form-select block w-full sm:text-sm sm:leading-5 focus:outline-none focus:shadow-outline">
        {{ $slot }}
    </select>

    @if($error)
        <p class="mt-1 text-sm text-red-500">{{ $error }}</p>
    @endif
</div>
