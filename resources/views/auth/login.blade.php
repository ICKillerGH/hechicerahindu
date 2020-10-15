<x-html>
    <x-slot name="head">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </x-slot>

    <div class="font-nunito h-screen flex items-center justify-center bg-gray-50">
        <div class="max-w-md w-full">
            <h1 class="mb-5 text-4xl text-center font-semibold">Iniciar sesión</h1>

            <x-card
                tag="form"
                action="{{ url('/login') }}"
                method="post"
            >
                @csrf

                <x-card.content class="p-8 space-y-5 text-gray-700 text-sm">
                    <x-input.text
                        name="email"
                        label="Correo electrónico"
                        :error="$errors->first('email')"
                        :value="old('email')"
                        full-width
                        autofocus
                    />

                    <x-input.password
                        name="password"
                        label="Contraseña"
                        :error="$errors->first('password')"
                        :value="old('password')"
                        full-width
                    />

                    <x-input.check
                        name="rememberme"
                        label="Recuerdame"
                        :error="$errors->first('rememberme')"
                    />

                    <x-button.indigo type="submit" class="w-full">
                        Ingresar
                    </x-button.indigo>
                </x-card.content>
            </x-card>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ mix('js/admin.js') }}"></script>
    </x-slot>
</x-html>
