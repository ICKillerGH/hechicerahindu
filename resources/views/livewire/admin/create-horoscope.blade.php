<div>
    <x-section-heading>
        Nuevo horóscopo
    </x-section-heading>

    <x-card
        tag="form"
        wire:submit.prevent="save"
        wire:loading.class="opacity-75 pointer-events-none"
    >
        {{-- Signo zodiacal --}}
        <x-card.section has-input>
            <x-slot name="label">
                <label for="zodiacSign">Signo zodiacal</label>
            </x-slot>

            <x-input.select
                name="zodiacSign"
                :error="$errors->first('zodiacSign')"
                full-width
                required
                wire:model.defer="zodiacSign"
            >
                <option
                    value="invalid"
                    {{ $zodiacSign != 'invalid' ? '' : 'selected' }}
                    disabled
                >
                    Select an option
                </option>
                @foreach ($this->zodiacSigns as $zodiacSign)
                    <option value="{{ $zodiacSign['name'] }}">{{ __($zodiacSign['name']) }}</option>
                @endforeach
            </x-input.select>
        </x-card.section>

        {{-- Desde --}}
        <x-card.section has-input>
            <x-slot name="label">
                <label for="from">Desde</label>
            </x-slot>

            <x-input.text
                name="from"
                type="date"
                :error="$errors->first('from')"
                full-width
                required
                wire:model.defer="from"
            />
        </x-card.section>

        {{-- Hasta --}}
        <x-card.section has-input>
            <x-slot name="label">
                <label for="to">Hasta</label>
            </x-slot>

            <x-input.text
                name="to"
                type="date"
                :error="$errors->first('to')"
                full-width
                required
                wire:model.defer="to"
            />
        </x-card.section>

        {{-- Contenido --}}
        <x-card.section>
            <x-slot name="label">
                <label for="content">Contenido</label>
            </x-slot>

            <x-input.editor
                name="content"
                :error="$errors->first('content')"
                wire:model.defer="content"
            />

        </x-card.section>

        <x-slot name="footer">
            <x-card.footer class="justify-end space-x-2">
                <x-icon.loading-circle
                    spin
                    class="w-5 h-5 mr-2"
                    wire:loading
                    wire:target="save"
                />

                <x-button type="submit" color="blue">
                    Crear Horóscopo
                </x-button>
            </x-card.footer>
        </x-slot>
    </x-card>
</div>
