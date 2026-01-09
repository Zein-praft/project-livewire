<div>
    {{-- TABEL USER --}}
    <div class="bg-gray-900 p-6 rounded-xl shadow mb-6">
        <h2 class="text-lg font-bold text-white mb-4">factory users</h2>
        <button wire:click="createUser" type="button" class="mb-5 bg-blue-500 hover:bg-blue-800 rounded-lg font-medium text-sm px-5 py-2.5 cursor-pointer"> buat user baru</button>
        <table class="w-full text-sm text-gray-300">
            {{-- <thead>
                {{-- <tr class="border-gray-700"> --}}
                {{-- </tr> --}}
            {{-- </thead> --}}
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-gray-800 hover:bg-gray-800">
                        <td class="py-2">{{ $user->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

{{-- testing --}}