<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add new Project') }}
            </h2>
            <a class="bg-amber-500 text-white px-2 py-1 rounded hover:bg-amber-600 duration-300"
                href="{{ route('projects.index') }}">All Projects</a>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


title
image
description
link
                    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                :value="old('title')" required autofocus autocomplete="title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                         <x-input-label for="image" :value="__('Image')" />
                            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"
                                :value="old('image')" required   />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="link" :value="__('Link')" />
                            <x-text-input id="link" class="block mt-1 w-full" type="text" name="link"
                                :value="old('link')"  autocomplete="link" />
                            <x-input-error :messages="$errors->get('link')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="description" :value="__('Description')" />
                        <x-textarea id="description" class="block mt-1 w-full" name="description" rows="4"
                                required autofocus autocomplete="description" >
                              {{ old('description') }}
                            </x-textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                            <button class="mt-4 bg-green-600 text-white  rounded-md px-4 py-1 hover:bg-green-700 duration-300">
                                {{ __('Save') }}
                            </button>



                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
