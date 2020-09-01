@props([
'formLabel' => false,
'helpText' => false,
'error' => false,
])
<div>
    @if($formLabel)
        <label for="email" class="block uppercase text-xs font-medium leading-5 tracking-wide mb-2">
            {{ $formLabel}}
        </label>
    @endif

    <div x-data x-init="new Pikaday({ field: $refs.input, format: 'YYYY-MM-DD' })"
         @change="$dispatch('input', $event.target.value)" class="flex relative rounded-md shadow-sm">

        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <span class="sm:text-sm sm:leading-5">
                <svg class="h-4 w-4 text-cool-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </span>
        </div>

        <input {{ $attributes }} x-ref="input"
               class="pl-16 sm:pl-14 flex-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
    </div>

    @if($helpText)
        <p class="mt-1 text-sm text-gray-500">{{ $helpText }}</p>
    @endif

    @if($error)
        <p class="mt-1 text-sm text-red-500">{{ $error }}</p>
    @endif
</div>
