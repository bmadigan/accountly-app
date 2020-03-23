<div class="card p-8">
    <form wire:submit.prevent="submit">
        <div>
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Create a new message
                </h3>
                <p class="mt-1 text-sm leading-5 text-gray-500">
                    This information will be displayed publicly.
                </p>
            </div>
            <div class="mt-6 grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="title" class="f-label">
                        Message Title
                    </label>
                    <div class="mt-1">
                        <input wire:model="title" id="title" class="form-input f-input sm:text-sm sm:leading-5" />
                        @error('title')<p class="f-error">{{ $message }}</p>@enderror

                    </div>
                </div>

                <div class="sm:col-span-6">
                    <label for="body" class="f-label">
                        Message Content
                    </label>
                    <div class="mt-1">
                        <textarea wire:model="body" id="body" rows="3"
                            class="form-textarea f-input sm:text-sm sm:leading-5"></textarea>
                        @error('body')<p class="f-error">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-200 pt-5">
            <div class="flex justify-end">
                <span class="inline-flex">
                    <button type="button" class="btn btn-outline">
                        Cancel
                    </button>
                </span>
                <span class="ml-3 inline-flex rounded-md shadow-sm">
                    <button type="submit" class="btn btn-primary">
                        Create Message
                    </button>
                </span>
            </div>
        </div>
    </form>
</div>
