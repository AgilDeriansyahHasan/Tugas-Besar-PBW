<x-app-layout>
    <x-slot name="heading">Form Voting</x-slot>
    <x-slot name="header">
        <h2 class="text-center text-gray-800 text-2xl font-semibold">Form Voting</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800">
                    <h3 class="text-lg text-gray-700">Silahkan Mengisi Form dan Voting yang ada di bawah</h3>
                    <p class="mb-6 text-sm text-gray-600">
                        Partisipasi Anda sangat penting bagi kami. Harap lengkapi formulir di bawah ini dengan data yang benar, lalu pilih satu opsi voting yang sesuai dengan pilihan Anda.
                    </p>

                    <form action="{{ route('voting.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="block font-medium text-gray-700">Nama:</label>
                            <input type="text" name="nama" id="nama" class="mt-1 block w-full border-gray-300 text-gray-800 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                        </div>

                        <div class="mb-4">
                            <label for="npm" class="block font-medium text-gray-700">NPM:</label>
                            <input type="text" name="npm" id="npm" class="mt-1 block w-full border-gray-300 text-gray-800 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                        </div>

                        <div class="mb-4">
                            <label for="pilihan" class="block font-medium text-gray-700 dark:text-gray-400">Pilihan:</label>
                            <div class="pilihan-container mt-2" style="display: flex; justify-content: space-between;">
                                @for ($i = 1; $i <= 5; $i++)
                                    <div class="pilihan-box mb-2" style="border: 2px solid #007BFF; border-radius: 10px; padding: 20px; text-align: center; flex: 1; margin: 0 5px;">
                                        <input type="radio" id="pilihan{{ $i }}" name="pilihan" value="Pilihan {{ $i }}" required style="margin-right: 10px;">
                                        <label for="pilihan{{ $i }}" class="text-gray-700 dark:text-gray-400">Pilihan {{ $i }}</label>
                                    </div>
                                @endfor
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 focus:ring focus:ring-green-500">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
