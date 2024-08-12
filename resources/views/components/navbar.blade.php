<header class="w-full bg-purple-500 py-5">
    <nav class="w-full flex justify-between items-center px-4 mx-auto text-white">
        <h1 class="text-xl font-bold">SIPA 2024</h1>
        <ul class="flex items-center gap-5">
            <li>
                <x-navlink href="/" :active="request()->is('/')">Beranda</x-navlink>
            </li>
            <li>
                <x-navlink href="/mata-kuliah" :active="request()->is('mata-kuliah')">Mata Kuliah</x-navlink>
            </li>
            <li>
                <x-navlink href="/mahasiswa" :active="request()->is('mahasiswa')" >Mahasiswa</x-navlink>
            </li>
        </ul>
    </nav>
</header>