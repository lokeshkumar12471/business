<x-app-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            {{ __('Newsletter') }}
            <br>
            <a href="{{ route('admin.newsletter') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <x-backend.form.input type="text" placeholder="Enter your email id" label="Email" name="email"
                value="{{ $newsletter->email }}" />
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
