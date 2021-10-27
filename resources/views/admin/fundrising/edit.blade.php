<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @section('css')
            <style>
                h1{
                    font-size: 2em;
                    font-weight: bolder;
                }
                h2{
                    font-size: 1.5em;
                    font-weight: bolder;
                }
                h3{
                    font-size: 1.17em;
                    font-weight: bolder;
                }
            </style>
        @endsection
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Fundrising') }}
            </h2>
        </x-slot>
    
        <div class="py-10 px-4">
            <div class="rounded shadow bg-white dark:bg-gray-800 dark:text-gray-900">
                <div class="p-4" x-init="init()">
                    <form action="{{ route('admin.fundrising.update', $fundrising->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                            <!-- Profile Photo File Input -->
                            <input type="file" class="hidden"
                                        name="photo"
                                        x-ref="photo"
                                        x-on:change="
                                                photoName = $refs.photo.files[0].name;
                                                const reader = new FileReader();
                                                reader.onload = (e) => {
                                                    photoPreview = e.target.result;
                                                };
                                                reader.readAsDataURL($refs.photo.files[0]);
                                        " />
            
                            <x-jet-label for="photo" value="{{ __('Photo') }}" />
            
                            <!-- Current Profile Photo -->
                            <div class="mt-2" x-show="! photoPreview">
                                <img src="{{ $fundrising->getFirstMediaUrl('images') }}" alt="" class="h-20 w-20 object-cover">
                            </div>
            
                            <!-- New Profile Photo Preview -->
                            <div class="mt-2" x-show="photoPreview">
                                <span class="block w-20 h-20 bg-cover bg-no-repeat bg-center"
                                      x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                </span>
                            </div>
            
                            <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                                {{ __('Select A Cover Photo') }}
                            </x-jet-secondary-button>
            
                            <x-jet-input-error for="photo" class="mt-2" />
                        </div>
            
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="title" value="{{ __('Title') }}" />
                            <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $fundrising->title }}" required autofocus autocomplete="title" />
                            <x-jet-input-error for="title" class="mt-2" />
                        </div>
            
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="target" value="{{ __('Targeted Amount') }}" />
                            <x-jet-input id="target" class="block mt-1 w-full" type="number" name="target" value="{{ $fundrising->target }}" required />
                            <x-jet-input-error for="target" class="mt-2" />
                        </div>
                        <h3 class="text-2xl font-bold dark:text-gray-100">Write about the fundrising here.</h3>
                        <div class="mt-4">
                            <textarea class="text-gray-900 dark:text-gray-800" name="description" rows="10" id="task-textarea">{{ $fundrising->description }}</textarea>
                        </div>
                        <div class="mt-3">
                            <x-jet-button>
                                {{ __('Save') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        @push('scripts')
        @include('admin.ckeditor')
        @endpush
    </div>
</x-app-layout>