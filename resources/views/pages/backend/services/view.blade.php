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
            <x-backend.form.input type="text" placeholder="{{ $services->title }}" label="Title" name="title"
                value="" />
            <x-backend.form.input type="text" placeholder="{{ $services->description }}" label="Description"
                name="description" value="" />
            <img src="{{ asset('Upload/images/services/' . $services->image) }}" height="250px" width="250px"
                alt="">
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
