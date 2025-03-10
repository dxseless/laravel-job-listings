<x-layout>
    <x-slot:heading>
        Create job 
    </x-slot:heading>

    <form method="POST" action="/jobs/create">
        @csrf 
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a new job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need some information from you</p>

                <div class="mt-6 grid grid-cols-1 gap-x-6 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="Input title..."></x-form-input>
                            <x-form-error name="title"></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Salary (Dollars per year)</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="Input salary..."></x-form-input>
                            <x-form-error name="salary"></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="location">Location</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="location" id="location" placeholder="Input location..."></x-form-input>
                            <x-form-error name="location"></x-form-error>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>