<div>
    @if($message->is_subscribed)
    <div>
        <h4 class="text-md leading-5 font-medium text-green-600 flex items-center">
            <svg class="fill-current text-green-600 w-5 mr-1" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM13.7071 8.70711C14.0976 8.31658 14.0976 7.68342 13.7071 7.29289C13.3166 6.90237 12.6834 6.90237 12.2929 7.29289L9 10.5858L7.70711 9.29289C7.31658 8.90237 6.68342 8.90237 6.29289 9.29289C5.90237 9.68342 5.90237 10.3166 6.29289 10.7071L8.29289 12.7071C8.68342 13.0976 9.31658 13.0976 9.70711 12.7071L13.7071 8.70711Z" />
            </svg>
            You Are Subscribed!
        </h4>
        <p class="text-sm mt-2 leading-5 text-gray-500">
            You will be notified whenever someone adds a comment to this message.
        </p>
        <button wire:click="unsubscribe" class="mt-4 btn btn-outline">Unsubscribe me</button>
    </div>
    @else
    <div>
        <h4 class="text-md leading-5 font-medium text-orange-600 flex items-center">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 mr-1"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
            You Are Not Subscribed!
        </h4>
        <p class="text-sm mt-2 leading-5 text-gray-500">
            You will not be notified whenever someone adds a comment.
        </p>
        <button wire:click="subscribe" class="mt-4 btn btn-outline">Subscribe me</button>
    </div>
    @endif
</div>
