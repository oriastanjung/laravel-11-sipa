<x-layout>
    <x-slot:title_layout>{{$title}}</x-slot:title_layout>
    <main class="flex justify-center items-center mt-10">
        <table class="border " cellpadding="10" cellspacing="0">
            <thead>
                <tr class="border">
                    <th class="border">No</th>
                    <th class="border">Nama Mata Kuliah</th>
                    <th class="border">Kode Mata Kuliah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataMk as $no=>$item)
                    <tr class="border">
                        <td class="border">{{ $no+1 }}</td>
                        <td class="border">{{ $item->nama_mata_kuliah }}</td>
                        <td class="border">{{ $item->kode_mata_kuliah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</x-layout>
