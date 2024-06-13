<x-layout>
  <x-slot:heading>
      Add Movie
  </x-slot:heading>
  <form method="POST" action="/movies">
      @csrf
      <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
              <h2 class="text-base font-semibold leading-7 text-gray-900">Add a movie to your watched list</h2>
              <p class="mt-1 text-sm leading-6 text-gray-600"> Tell us about your thoughts!</p>
              
              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <x-form-label for="name">Name</x-form-label>
                      <div class="mt-2">
                          <x-form-input name="name" id="name" placeholder="Mary Poppins" />
                      </div>
                      <x-form-error name="name" />
                  </div>
                  <div class="sm:col-span-4">
                      <label for="Rating" class="block text-sm font-medium leading-6 text-gray-900">Rating</label>
                      <div class="mt-2">
                          <x-form-input name="Rating" id="Rating" placeholder="4/5" />
                      </div>
                      <x-form-error name="Rating" />
                  </div>
              </div>
          </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
          <x-form-button>Save </x-form-button>
      </div>
  </form>
</x-layout>
