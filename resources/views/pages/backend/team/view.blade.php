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
            <x-backend.form.input type="text" placeholder="{{ $team->title }}" label="Title" name="title"
                value="" />
            <x-backend.form.input type="text" placeholder="{{ $team->role }}" label="Role" name="role"
                value="" />
            <img src="{{ asset('Upload/images/team/' . $team->image) }}" height="250px" width="250px" alt="">


            </form>
        </x-slot>
    </x-backend.card>
</x-app-layout>
