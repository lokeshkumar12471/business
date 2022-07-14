<x-app-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            {{ __('Address') }}

            <form action="{{ route('admin.static-options') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Upload Title" label="Title" name="contacta_title"
                    value="" />
                <x-backend.form.input type="text" placeholder="Upload Description" label="Description"
                    name="contacta_description" value="" />
                <x-backend.form.input type="file" placeholder="Upload Logo" label="Logo" name="contacta_logo"
                    value="" />

                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>
            {{ __('Email') }}
            <form action="{{ route('admin.static-options') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Upload Title" label="Title" name="contacte_title"
                    value="" />
                <x-backend.form.input type="text" placeholder="Upload Description" label="Description"
                    name="contacte_description" value="" />
                <x-backend.form.input type="file" placeholder="Upload Logo" label="Logo" name="contacte_logo"
                    value="" />
                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>

            {{ __('Mobile') }}
            <form action="{{ route('admin.static-options') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Upload Title" label="Title" name="contactp_title"
                    value="" />
                <x-backend.form.input type="text" placeholder="Upload Description" label="Description"
                    name="contactp_description" value="" />
                <x-backend.form.input type="file" placeholder="Upload Logo" label="Logo" name="contactp_logo"
                    value="" />
                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>
            {{ __('Gmap_link') }}
            <form action="{{ route('admin.static-options') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Upload gmap_link" label="Gmap_link" name="gmap_link"
                    value="" />

                <x-backend.submit-button>
                    {{ __('Save') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
