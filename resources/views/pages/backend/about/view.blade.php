<x-app-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            {{ __('about') }}
            <br>
            <a href="{{ route('admin.about') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>


            <x-backend.form.input type="text" placeholder="{{ $about->title }}" label="Title" name="title"
                value="" />
            <x-backend.form.input type="text" placeholder="{{ $about->description }}" label="Description"
                name="description" value="" />
            <img src="{{ asset('Upload/images/about/' . $about->image) }}" height="250px" width="250px"
                alt="">
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
