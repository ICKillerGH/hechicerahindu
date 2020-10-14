<form wire:submit.prevent="save">
    @if ($alert = session('alert'))
        <div class="px-4 py-3 mb-4 text-center bg-secondary rounded-md">
            {{ $alert }}
        </div>
    @endif
    <div class="flex flex-col sm:flex-row">
        <div class="sm:w-1/2 sm:pr-3">
            <div class="mb-3">
                <label for="name" class="block mb-1">Nombre</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    wire:model.defer="name"
                    class="block w-full px-4 py-3 bg-transparent focus:outline-none border border-gray-800 focus:border-secondary rounded-full"
                    autocomplete="off"
                    required
                />

                @error('name')
                    <p class="text-sm italic text-secondary">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="block mb-1">Teléfono</label>
                <input
                    type="text"
                    id="phone"
                    name="phone"
                    wire:model.defer="phone"
                    class="block w-full px-4 py-3 bg-transparent focus:outline-none border border-gray-800 focus:border-secondary rounded-full"
                    autocomplete="off"
                    required
                />

                @error('phone')
                    <p class="text-sm italic text-secondary">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="subject" class="block mb-1">Asunto</label>
                <input
                    type="text"
                    id="subject"
                    name="subject"
                    wire:model.defer="subject"
                    class="block w-full px-4 py-3 bg-transparent focus:outline-none border border-gray-800 focus:border-secondary rounded-full"
                    autocomplete="off"
                    required
                />

                @error('subject')
                    <p class="text-sm italic text-secondary">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="sm:w-1/2 sm:pl-3 flex flex-col">
            <label for="message" class="block mb-1">Mensaje</label>
            <textarea
                id="message"
                name="message"
                wire:model.defer="message"
                class="block w-full flex-grow px-4 py-3 bg-transparent focus:outline-none border border-gray-800 focus:border-secondary"
                style="border-radius: 30px;"
            ></textarea>

            @error('message')
            <p class="text-sm italic text-secondary">{{ $message }}</p>
        @enderror
        </div>
    </div>

    <div class="text-center mt-5">
        <button
            type="submit"
            class="inline-flex items-center justify-center space-x-2 px-6 py-3 bg-secondary text-white rounded-full focus:outline-none hover:bg-secondary-light focus:shadow-outline"
        >
            <x-icon.loading-circle
                class="w-4 h-4"
                spin
                wire:loading
                wire:target="save"
            />
            <span>Enviar mensaje</span>
        </button>
    </div>
</form>
