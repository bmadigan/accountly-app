<x-ui.modal-form title="Create New Message" x-cloak>
    <x-slot name="trigger">
        <button @click="open = true" class="btn btn-secondary -mt-2 mr-1">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-4 mr-1"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
            New Message
        </button>
    </x-slot>

    <livewire:messages.create>

</x-ui.modal-form>
