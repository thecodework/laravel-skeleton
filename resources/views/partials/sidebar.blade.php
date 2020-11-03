<aside class="w-64 bg-gray-600 text-white h-screen relative">
    <div class="p-6 text-center">
        <a href="{{route('dashboard')}}" class="text-white text-2xl font-semibold uppercase hover:text-gray-300 text-center">Admin</a>
        {{-- <button class="w-full bg-red-500 cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> New Report
        </button> --}}
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            <i class="fas fa-tachometer-alt mr-3"></i>
            @svg('dashboard', 'h-6 w-6 mr-2 text-white') Dashboard
        </x-nav-link>
    </nav>
</aside>