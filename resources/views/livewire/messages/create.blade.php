<x-forms.form wire:submit.prevent="submit" method="POST">
    <div>
        <div class="w-full py-2">
            <x-forms.input wire:model="title" form-label="Message Title"/>
        </div>

        <div class="w-full py-2">
            <x-forms.textarea wire:model="body" rows="4" form-label="Message Content"/>
        </div>

    </div>
    <div class="mt-8 pt-5">
        <div class="flex justify-end">
                <span class="inline-flex">
                    <button type="button" class="btn btn-outline" @click="open = false">
                        Cancel
                    </button>
                </span>
            <span class="ml-3 inline-flex rounded-md shadow-sm">
                    <button type="submit" wire:target="submit" wire:loading.attr='disabled'
                            wire:loading.class="btn-primary-disabled" class="btn btn-primary">
                        <svg wire:target="submit" wire:loading class="spinner w-4 h-4 text-white fill-current mr-2"
                             viewBox="0 0 50 50">
                            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                        </svg>
                        <span>Create Message</span>
                    </button>
                </span>
        </div>
    </div>
</x-forms.form>

