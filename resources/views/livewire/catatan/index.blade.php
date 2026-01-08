<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Daftar User (1 - 10)</h1>

    @if($users->isEmpty())
        <p class="text-gray-500">Belum ada user.</p>
    @else
        <div class="border border-gray-700 rounded-lg overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Dibuat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr class="border-t border-gray-700 hover:bg-gray-900">
                            <td class="px-4 py-3">{{ $user->id }}</td>
                            <td class="px-4 py-3">{{ $user->name }}</td>
                            <td class="px-4 py-3">{{ $user->email }}</td>
                            <td class="px-4 py-3">{{ $user->created_at->format('d M Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; text-align: left; border-bottom: 1px solid #333; }
        th { background-color: #222; color: white; }
        tr:hover { background-color: #1a1a1a; }
    </style>
</div>
