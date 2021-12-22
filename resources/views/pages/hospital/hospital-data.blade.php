<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Hospital') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Hospital</a></div>
            <div class="breadcrumb-item"><a href="{{ route('hospital') }}">Data Hospital</a></div>
        </div>
    </x-slot>
    <div class="table px-3" style="background-color: white;">
                        <table class="table">
                            <thead>
                              <tr style="color: #121F44; font-family: 'Heebo';">
                                <th scope="col">No</th>
                                <th scope="col" class="text-center">Nama Rumah Sakit</th>
                                <th scope="col" class="text-center">Address</th>
                                <th scope="col" class="text-center">Hotline</th>
                                <th scope="col" class="text-center">Action</th>
                              </tr>
                            </thead>
                            <tbody style="font-family: 'Montserrat';">
                            @foreach($hospitals as $data)
                              <tr>
                                <th scope="row">
                                    {{$data['id']}}
                                </th>
                                <td class="text-center">
                                    {{$data['name']}}
                                </td>
                                <td class="text-center">
                                    {{$data['address']}}
                                </td>
                                <td class="text-center">
                                    {{$data['hotline']}}
                                </td>
                                <td class="whitespace-no-wrap row-action--icon">
                                    <a role="button" href="/hospital/edit/{{ $data->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                                    <a role="button" x-on:click.prevent="deleteItem" href="/hospital/delete/{{ $data->id }}"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                                </td>
                              </tr>
                            @endforeach
                          </table>
                    </div>
</x-app-layout>