<x-app-layout>
    <x-backend.card class="">
        <x-slot name="title" class="pl-5">
            {{ __('team') }}
            <br>
            <a href="{{ route('admin.team') }}">
                <x-backend.submit-button>
                    {{ __('Back') }}
                </x-backend.submit-button>
            </a>
            <form action="{{ route('admin.team.update', $team->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.form.input type="text" placeholder="Title" label="Title" name="title"
                    value="{{ $team->title }}" />
                <x-backend.form.input type="text" placeholder="Role" label="Role" name="role"
                    value="{{ $team->role }}" />
                <img src="{{ asset('Upload/images/team/' . $team->image) }}" height="150px" width="150px"
                    alt="">
                <x-backend.form.input type="file" placeholder="Upload Image" label="Image" name="image"
                    value="{{ asset('Upload/images/about/' . $team->image) }}" />
                <x-backend.submit-button>
                    {{ __('Update') }}
                </x-backend.submit-button>
            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
