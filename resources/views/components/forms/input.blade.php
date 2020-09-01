@props([
'formLabel' => false,
'leadingAddOn' => false,
'inlineAddOn' => false,
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
        @if($leadingAddOn)
            <span
                class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-cool-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
            {{ $leadingAddOn}}
        </span>
        @endif

        @if($inlineAddOn)
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <span class="text-cool-gray-500 sm:text-sm sm:leading-5">
                {{ $inlineAddOn}}
            </span>
            </div>
        @endif

        <input {{ $attributes }} class="
                {{ $leadingAddOn ? 'rounded-none rounded-r-md' : '' }}
        {{ $inlineAddOn ? 'pl-16 sm:pl-14' : '' }}
            flex-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
    </div>

    @if($helpText)
        <p class="mt-1 text-sm text-cool-gray-500">{{ $helpText }}</p>
    @endif

    @if($error)
        <p class="mt-1 text-sm text-red-500">{{ $error }}</p>
    @endif
</div>
