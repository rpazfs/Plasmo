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
                                <td class="d-flex">
                                    <a href="#">
                                        <div class="icon-telepon align-self-center mr-3" style="background-color: #31BA45; padding: 5px 10px;">
                                            <i class="fa fa-phone" style="color: white;"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="icon-email align-self-center mr-3" style="background-color: #2A7DF5; padding: 5px 9px;">
                                            <i class="fa fa-envelope" style="color: white;"></i>
                                        </div>
                                    </a>
                                </td>
                              </tr>
                            @endforeach
                          </table>
                    </div>
</x-app-layout>