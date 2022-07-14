<x-app-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            {{ __('services') }}
            <br>
            <a href="{{ route('admin.services') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <form action="{{ route('admin.services.update', $services->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Title" label="Title" name="title"
                    value="{{ $services->title }}" />
                <x-backend.form.input type="text" placeholder="Description" label="Description" name="description"
                    value="{{ $services->description }}" />
                <img src="{{ asset('Upload/images/services/' . $services->image) }}" height="150px" width="150px"
                    alt="">
                <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="image"
                    value="{{ asset('Upload/images/about/' . $services->image) }}" />
                <x-backend.submit-button>
                    {{ __('Update') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
