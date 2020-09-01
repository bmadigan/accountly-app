@props([
'formLabel' => false,
'helpText' => false,
'error' => false,
])
<div class="relative flex items-start">
    <div class="absolute flex items-center h-5">
        <input {{ $attributes }} type="checkbox"
               class="form-checkbox h-4 w-4 text-teal-600 transition duration-150 ease-in-out">
    </div>
    <div class="pl-7 text-sm leading-5">
        <label class="block uppercase text-xs font-medium leading-5 tracking-wide mb-2">{{ $formLabel }}</label>
        @if($helpText)
            <p class="mt-1 text-sm text-gray-500">{{ $helpText }}</p>
        @endif

        @if($error)
            <p class="mt-1 text-sm text-red-500">{{ $error }}</p>
        @endif
    </div>
</div>
