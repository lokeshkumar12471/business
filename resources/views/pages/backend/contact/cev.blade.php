<x-app-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            {{ __('contact') }}
            <br>
            <a href="{{ route('admin.contact') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <form action="{{ route('admin.contact.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Title" label="Title" name="name" value="" />
                <x-backend.form.input type="text" placeholder="Description" label="Description" name="description"
                    value="" />
                <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="image"
                    value="" />
                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
