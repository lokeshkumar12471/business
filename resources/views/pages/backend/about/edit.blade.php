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
            <form action="{{ route('admin.about.update', $about->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Title" label="Title" name="title"
                    value="{{ $about->title }}" />
                <x-backend.form.input type="text" placeholder="Descrioption" label="Description" name="description"
                    value="{{ $about->description }}" />
                <img src="{{ asset('Upload/images/about/' . $about->image) }}" height="150px" width="150px"
                    alt="">
                <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="image"
                    value="{{ asset('Upload/images/about/' . $about->image) }}" />
                <x-backend.submit-button>
                    {{ __('Update') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
