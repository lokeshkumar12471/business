<main class="main-content">
    <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar ">
        <div class="container-fluid navbar-inner">
            <div class="input-group search-input p-2">
                <span class="input-group-text" id="search-input">
                    {{ $title }}
                </span>
            </div>
            <ul x-show="open" class="absolute right-0 z-40 w-40 p-0 py-2 bg-white" @click.outside="open = false"
                x-transition:enter="transition ease-in duration-500"
                x-transition:enter-start="opacity-0 transform translate-y-16"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-out duration-500"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-0">
                <span>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('admin.logout')" class="rounded-b"
                            onclick="event.preventDefault();
                                               this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                </span>
                </form>
            </ul>
        </div>
    </nav>
</main>
