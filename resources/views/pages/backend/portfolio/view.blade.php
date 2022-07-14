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
            <img src="{{ asset('Upload/images/portfolio/app/' . $portfolio->app) }}" height="150px" width="150px"
                alt="">

            <img src="{{ asset('Upload/images/portfolio/web/' . $portfolio->web) }}" height="150px" width="150px"
                alt="">

            <img src="{{ asset('Upload/images/portfolio/card/' . $portfolio->card) }}" height="150px" width="150px"
                alt="">


            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
