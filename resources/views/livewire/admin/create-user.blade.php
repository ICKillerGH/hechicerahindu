<div class="space-y-3">

    <x-alert :message="session('success')" color="green" />

    <x-section-heading>
        Nuevo usuario
    </x-section-heading>

    <x-card
        tag="form"
        wire:submit.prevent="save"
        wire:loading.class="opacity-75 pointer-events-none"
        wire:target="save"
    >
        {{-- Nombre --}}
        <x-card.section has-input>
            <x-slot name="label">
                <label for="name">Nombre</label>
            </x-slot>

            <x-input.text
                name="name"
                :error="$errors->first('name')"
                full-width
                wire:model.defer="name"
            />
        </x-card.section>

        {{-- Correo electrónico --}}
        <x-card.section has-input>
            <x-slot name="label">
                <label for="email">Correo electrónico</label>
            </x-slot>

            <x-input.text
                name="email"
                :error="$errors->first('email')"
                full-width
                wire:model.defer="email"
            />
        </x-card.section>

        {{-- Rol --}}
        <x-card.section has-input>
            <x-slot name="label">
                <label for="role">Rol</label>
            </x-slot>

            <x-input.select
                name="role"
                :error="$errors->first('role')"
                full-width
                wire:model.defer="role"
            >
                <option value="invalid">Select an option</option>
                @foreach ($roles as $role)
                    <option value="{{ $role }}">{{ ucfirst($role) }}</option>
                @endforeach
            </x-input.select>
        </x-card.section>

        {{-- Contraseña --}}
        <x-card.section has-input>
            <x-slot name="label">
                <label for="password">Contraseña</label>
            </x-slot>

            <x-input.password
                name="password"
                :error="$errors->first('password')"
                full-width
                wire:model.defer="password"
            />
        </x-card.section>

        {{-- Confirmar contraseña --}}
        <x-card.section has-input>
            <x-slot name="label">
                <label for="password_confirmation">Confirmar contraseña</label>
            </x-slot>

            <x-input.password
                name="password_confirmation"
                full-width
                wire:model.defer="password_confirmation"
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
                <x-button type="button" color="blue" wire:click="save(false)">
                    Crear Usuario y Agregar Otro
                </x-button>

                <x-button type="submit" color="blue">
                    Crear Usuario
                </x-button>
            </x-card.footer>
        </x-slot>
    </x-card>
</div>
