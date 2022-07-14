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
            <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf

                <img src="{{ asset('Upload/images/portfolio/app/' . $portfolio->app) }}" height="150px" width="150px"
                    alt="">
                <x-backend.form.input type="file" placeholder="App" label="app" name="app"
                    value="{{ $portfolio->app }}" />
                <img src="{{ asset('Upload/images/portfolio/web/' . $portfolio->web) }}" height="150px" width="150px"
                    alt="">
                <x-backend.form.input type="file" placeholder="Web" label="web" name="web"
                    value="{{ $portfolio->web }}" />
                <img src="{{ asset('Upload/images/portfolio/card/' . $portfolio->card) }}" height="150px"
                    width="150px" alt="">
                <x-backend.form.input type="file" placeholder="Descrioption" label="Description" name="description"
                    value="{{ $portfolio->card }}" />

                <x-backend.submit-button>
                    {{ __('Update') }}
                </x-backend.submit-button>
            </form>

        </x-slot>
    </x-backend.card>
</x-app-layout>
