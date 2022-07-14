<x-app-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            {{ __('Call To Action') }}
            <form method="post" action={{ route('admin.static-options') }} enctype=multipart/form-data>
                @csrf
                <x-backend.form.input type="text" placeholder="Title" name="services_title" label="Title"
                    value="" />
                <x-backend.form.input type="text" placeholder="Description" name="services_description"
                    label="Description" value="" />
                <x-backend.form.input type="text" placeholder="Button" name="services_button" label="ServicesButton"
                    value="" />
                <x-backend.submit-button>
                    {{ _('Save') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
