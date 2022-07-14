<x-app-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            {{ __('contact') }}
            <br>
            <a href="{{ route('admin.contact') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <x-backend.form.input type="text" placeholder="{{ $contact->name }}" label="Title" name="name"
                value="" />
            <x-backend.form.input type="text" placeholder="{{ $contact->email }}" label="Title" name="name"
                value="" />
            <x-backend.form.input type="text" placeholder="{{ $contact->subject }}" label="Title" name="name"
                value="" />
            <x-backend.form.input type="text" placeholder="{{ $contact->message }}" label="Description"
                name="description" value="" />
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
