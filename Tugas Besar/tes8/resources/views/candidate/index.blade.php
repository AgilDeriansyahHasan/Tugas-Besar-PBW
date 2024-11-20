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
        <x-button as="a" href="{{ route('candidate.create') }}">Add Candidate</x-button>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
    </div>
</div>
<div class="mt-8 flow-root">
<x-table>
    <x-table.thead>
        <tr>
            <x-table.th>#</x-tab.th>
            <x-table.th>Nama</x-table.th>
            <x-table.th>Profile</x-table.th>
            <x-table.th>Description</x-table.th>
            <x-table.th>Aksi</x-table.th>
        </tr>
    </x-table.thead>
    <tbody>
        @forelse($candidates as $candidate)
        <tr>
            <x-table.td>{{ $loop->iteration }}</x-table.td>
            <x-table.td>{{ $candidate->nama }}</x-table.td>
            <x-table.td>{{ $candidate->profile }}</x-table.td>
            <x-table.td>{{ $candidate->description }}</x-table.td>
        </tr>
        @empty
        <tr>
            <x-table.td colspan="6">No candidates found.</x-table.td>
        </tr>
        @endforelse
    </tbody>
</x-table>
</div>
<x-button as="a" href="{{ route('admin.index') }}">Kembali</x-button>
</x-app-layout-admin>
