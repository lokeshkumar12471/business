<x-app-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            {{ __('portfolio') }}
            <br>
            <a href="{{ route('admin.portfolio') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <form action="{{ route('admin.portfolio.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="file" placeholder="" label="App" name="app" value="" />
                <x-backend.form.input type="file" placeholder="" label="Card" name="card" value="" />
                <x-backend.form.input type="file" placeholder="" label="Web" name="web" value="" />

                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
