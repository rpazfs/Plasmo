<div>
    <x-data-table :data="$data" :model="$hospital">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    ID
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th>
                <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                    Name
                    @include('components.sort-icon', ['field' => 'name'])
                </a></th>
                <th><a wire:click.prevent="sortBy('address')" role="button" href="#">
                    Address
                    @include('components.sort-icon', ['field' => 'address'])
                </a></th>
                <th><a wire:click.prevent="sortBy('hotline')" role="button" href="#">
                    Hotline
                    @include('components.sort-icon', ['field' => 'hotline'])
                </a></th>
                <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Tanggal Dibuat
                    @include('components.sort-icon', ['field' => 'created_at'])
                </a></th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($hospital as $hospital)
                <tr x-data="window.__controller.dataTableController({{ $hospital->id }})">
                    <td>{{ $hospital->id }}</td>
                    <td>{{ $hospital->name }}</td>
                    <td>{{ $hospital->address }}</td>
                    <td>{{ $hospital->hotline }}</td>
                    <td>{{ $hospital->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/hospital/edit/{{ $hospital->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
