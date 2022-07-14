<x-app-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            {{ __('home') }}
            <br>
            <a href="{{ route('admin.home') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <form action="{{ route('admin.home.update', $home->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Title" label="Title" name="title"
                    value="{{ $home->title }}" />
                <x-backend.form.input type="text" placeholder="logo" label="Description" name="logo"
                    value="{{ $home->logo }}" />
                <x-backend.submit-button>
                    {{ __('Update') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
