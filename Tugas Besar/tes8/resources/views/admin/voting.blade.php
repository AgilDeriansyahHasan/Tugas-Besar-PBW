<x-app-layout-admin title="Vote History">
    <x-slot name="heading">Vote History</x-slot>
    <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <x-section-title>
            <x-slot name="title">Vote History</x-slot>
            <x-slot name="description">
            Terima kasih telah mengunjungi sistem voting online kami! Platform ini dirancang untuk memudahkan partisipasi Anda dalam pemilihan dengan transparansi dan kenyamanan.
            </x-slot>
        </x-section-title>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
    </div>
</div>
<div class="mt-8 flow-root">
    <x-table>
        <x-table.thead>
        <tr>
            <x-table.th>#</x-table.th>
            <x-table.th>Name</x-table.th>
            <x-table.th>Npm</x-table.th>
            <x-table.th>Pilihan</x-table.th>
            <x-table.th>Aksi</x-table.th>
        </tr>
        </x-table.thead>            

        <x-table.tbody>
            @foreach($votings as $voting)
            <tr>
                <x-table.td> {{ $voting->id }} </x-table.td>
                <x-table.td> {{ $voting->nama }} </x-table.td>
                <x-table.td> {{ $voting->npm }} </x-table.td>
                <x-table.td> {{ $voting->pilihan }} </x-table.td>
            <x-table.td>
                
            </x-table.td>
            </tr>
            @endforeach
        </x-table.tbody>
    </x-table>
</div>
    <x-button as="a" href="/admin">
        Kembali
    </x-button>
</x-app-layout-admin>