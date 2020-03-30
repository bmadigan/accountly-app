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
                                <p class="mt-2 text-sm text-gray-500">
                                    Do we need some sort of brief description here at all? Liveiwre?
                                </p>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <span class="inline-flex rounded-md shadow-sm">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
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
