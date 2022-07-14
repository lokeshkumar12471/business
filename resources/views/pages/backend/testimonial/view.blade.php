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
            <x-backend.form.input type="text" placeholder="{{ $testimonial->title }}" label="Title" name="title"
                value="" />
            <x-backend.form.input type="text" placeholder="{{ $testimonial->role }}" label="Role" name="role"
                value="" />
            <x-backend.form.input type="text" placeholder="{{ $testimonial->description }}" label="Description"
                name="description" value="" />
            <img src="{{ asset('Upload/images/testimonial/' . $testimonial->image) }}" height="250px" width="250px"
                alt="">
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
