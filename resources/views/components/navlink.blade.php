<a {{ $attributes }}
    class="{{ !$active ? 'text-white hover:font-medium' : 'underline' }} block py-2 px-3 rounded md:bg-transparent md:p-0 "
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>