<div class="mt-4 bg-blue-50 rounded px-4 py-5 border-b border-blue-200 sm:px-6">
    <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-no-wrap">
        <div class="ml-4 mt-4">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-12 w-12 rounded-full" src="{{ $comment->owner->photo_url }}" alt="" />
                </div>
                <div class="ml-4">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $comment->owner->name }}
                    </h3>
                    <p class="text-sm leading-5 text-gray-500">
                        Account Manager
                    </p>
                </div>
            </div>
        </div>
        <div class="ml-4 mt-4 text-sm text-gray-500 flex-shrink-0 flex">
            {{ dateLongFormat($comment->updated_at) }}
        </div>
    </div>
    <div class="mt-3 border-t border-blue-100 pt-3 text-sm text-gray-600">
        {{ $comment->body }}
    </div>
</div>
