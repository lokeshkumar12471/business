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
            <x-backend.form.input type="text" placeholder="title" label="Title" name="title"
                value="{{ $home->title }}" />
            <x-backend.form.input type="text" placeholder="logo" label="Description" name="logo"
                value="{{ $home->logo }}" />
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
