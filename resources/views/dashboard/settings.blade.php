<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Site Settings') }}
            </h2>

        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('settings') }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="mb-4">
                            <x-input-label for="site_name" :value="__('Site Name')" />
                            <x-text-input id="site_name" class="block mt-1 w-full" type="text" name="site_name"
                                :value="old('site_name', $settings['site_name'] ?? '')"  autocomplete="site_name" />
                            <x-input-error :messages="$errors->get('site_name')" class="mt-2" />
                        </div>

                           <div class="mb-4">
                            <x-input-label for="facebook" :value="__('Facebook')" />
                            <x-text-input id="facebook" class="block mt-1 w-full" type="text" name="facebook"
                                :value="old('facebook', $settings['facebook'] ?? '')"  autocomplete="facebook" />
                            <x-input-error :messages="$errors->get('facebook')" class="mt-2" />
                        </div>

                               <div class="mb-4">
                            <x-input-label for="githup" :value="__('Githup')" />
                            <x-text-input id="githup" class="block mt-1 w-full" type="text" name="githup"
                                :value="old('githup', $settings['githup'] ?? '')"  autocomplete="githup" />
                            <x-input-error :messages="$errors->get('githup')" class="mt-2" />
                        </div>

                               <div class="mb-4">
                            <x-input-label for="linkedin" :value="__('LinkedIn')" />
                            <x-text-input id="linkedin" class="block mt-1 w-full" type="text" name="linkedin"
                                :value="old('linkedin', $settings['linkedin'] ?? '')"  autocomplete="linkedin" />
                            <x-input-error :messages="$errors->get('linkedin')" class="mt-2" />
                        </div>

                               <div class="mb-4">
                            <x-input-label for="twitter" :value="__('Twitter')" />
                            <x-text-input id="twitter" class="block mt-1 w-full" type="text" name="twitter"
                                :value="old('twitter', $settings['twitter'] ?? '')"  autocomplete="twitter" />
                            <x-input-error :messages="$errors->get('twitter')" class="mt-2" />
                        </div>

                        <button
                            class="mt-4 bg-green-600 text-white  rounded-md px-4 py-1 hover:bg-green-700 duration-300">
                            {{ __('Save') }}
                        </button>



                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
