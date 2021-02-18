<div>
    @if($thanks)
        <div class="text-lg">
            Thank you.  Your message has been sent.  We will get back with you as soon as possible.
        </div>

    @else
        <form wire:submit.prevent="send">
            <div class="mb-3">
                <label class="block w-full text-lg mb-2 font-bold">
                    Your Name
                </label>
                <input
                    wire:model="name"
                    class="block w-full bg-white rounded-lg"
                    type="text"
                />
                @error('name') <span class="text-red-500 font-bold">{{$message}}</span> @enderror
            </div>
            <div class="mb-3">
                <label class="block w-full text-lg mb-2 font-bold">
                    Your Email
                </label>
                <input
                    wire:model="email"
                    class="block w-full bg-white rounded-lg"
                    type="email"
                />
                @error('email') <span class="text-red-500 font-bold">{{$message}}</span> @enderror
            </div>
            <div class="mb-3">
                <label class="block w-full text-lg mb-2 font-bold">
                    Your Message
                </label>
                <textarea
                    wire:model="message"
                    class="block w-full bg-white rounded-lg"
                    type="text"
                ></textarea>
                @error('message') <span class="text-red-500 font-bold">{{$message}}</span> @enderror
            </div>
            <div>
                <button class="focus:outline-none bg-blue-300 p-4 rounded-lg">Send</button>
            </div>
        </form>
    @endif
</div>

