<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="name">Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="name" id="name" placeholder="Juli Raj" />
                        </div>
                        <x-form-error name="name" />
                    </div>
                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" placeholder="juli.raj@gmail.com"/>
                        </div>
                        <x-form-error name="email" />
                    </div>
                    <div class="sm:col-span-4">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password" />
                        </div>
                        <x-form-error name="password" />
                    </div>
                </div>
            </div>
        </div>
  
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button> Register </x-form-button>
        </div>
    </form>
</x-layout>
  