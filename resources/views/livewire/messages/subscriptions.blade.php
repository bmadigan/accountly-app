<div>
    @if($message->is_subscribed)
    <div>
        <h4 class="text-md leading-5 font-medium text-gray-600">
            You Are Subscribed!
        </h4>
        <p class="text-sm mt-2 leading-5 text-gray-500">
            You will be notified whenever someone adds a comment to this message.
        </p>
        <button wire:click="unsubscribe" class="mt-4 btn btn-outline">Unsubscribe me</button>
    </div>
    @else
    <div>
        <h4 class="text-md leading-5 font-medium text-gray-600">
            You Are Not Subscribed!
        </h4>
        <p class="text-sm mt-2 leading-5 text-gray-500">
            You will not be notified whenever someone adds a comment.
        </p>
        <button wire:click="subscribe" class="mt-4 btn btn-outline">Subscribe me</button>
    </div>
    @endif
</div>
