<div>
    <form wire:submit.prevent="submit">
        <div class="mt-6 border-t-2 border-gray-200 pt-6">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="mt-2">
                                <div class="rounded-md shadow-sm">
                                    <textarea id="about" rows="3" wire:model="body"
                                        class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                </div>
                                @error('body')<p class="f-error">{{ $message }}</p>@enderror
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <span class="inline-flex rounded-md shadow-sm">
                                <button type="submit"
                                    class="inline-flex justify-center btn btn-primary">
                                    Add Comment
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <!--Add-Comment-Card-->
        </div>
    </form>
</div>
