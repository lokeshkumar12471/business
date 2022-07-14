<x-app-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            {{ __('Testimonial') }}
            <br>
            <a href="{{ route('admin.testimonial') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <form action="{{ route('admin.testimonial.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Title" label="Title" name="title" value="" />
                <x-backend.form.input type="text" placeholder="Role" label="Role" name="role" value="" />
                <x-backend.form.input type="text" placeholder="Description" label="Description" name="description"
                    value="" />
                <x-backend.form.input type="file" placeholder="Upload Image" label="image" name="image"
                    value="" />
                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
