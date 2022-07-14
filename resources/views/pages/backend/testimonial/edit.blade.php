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
            <form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Title" label="Title" name="title"
                    value="{{ $testimonial->title }}" />
                <x-backend.form.input type="text" placeholder="Role" label="Role" name="role"
                    value="{{ $testimonial->role }}" />
                <x-backend.form.input type="text" placeholder="Description" label="Description" name="description"
                    value="{{ $testimonial->description }}" />
                <img src="{{ asset('Upload/images/testimonial/' . $testimonial->image) }}" height="150px"
                    width="150px" alt="">
                <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="image"
                    value="{{ asset('Upload/images/testimonial/' . $testimonial->image) }}" />
                <x-backend.submit-button>
                    {{ __('Update') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
