@props([
'formLabel' => false,
'helpText' => false,
'error' => false,
])
<div>
    @if($formLabel)
        <label for="email" class="block uppercase text-cool-gray-600 text-xs font-medium leading-5 tracking-wide mb-2">
            {{ $formLabel}}
        </label>
    @endif

    <div class="flex relative rounded-md shadow-sm">
        <textarea {{ $attributes }} class="flex-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
    </div>

    @if($helpText)
        <p class="mt-1 text-sm text-cool-gray-500">{{ $helpText }}</p>
    @endif

    @if($error)
        <p class="mt-1 text-sm text-red-500">{{ $error }}</p>
    @endif
</div>
