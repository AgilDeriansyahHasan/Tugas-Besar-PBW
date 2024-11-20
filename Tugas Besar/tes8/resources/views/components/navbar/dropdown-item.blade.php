<a {{ $attributes->merge([
    'class' => request()->fullUrlIs(url($href)) 
        ? 'bg-zinc-800 text-white block rounded-md px-3 py-2 text-base font-medium' 
        : 'text-zinc-300 hover:bg-zinc-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium'
]) }}>
    {{ $slot }}
</a>
