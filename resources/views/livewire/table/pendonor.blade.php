<x-data-table :data="$data" :model="$pendonor">
                            <x-slot name="head">
                              <tr style="color: #121F44; font-family: 'Heebo';">
                                <th scope="col"><a wire:click.prevent="sortBy('id')" role="button" href="#">
                                    No
                                    @include('components.sort-icon', ['field' => 'id'])
                                </a></th>
                                <th scope="col"><a wire:click.prevent="sortBy('nama_pendonor')" role="button" href="#">
                                    Nama Pendonor
                                    @include('components.sort-icon', ['field' => 'nama_pendonor'])
                                </a></th>
                                <th scope="col"><a wire:click.prevent="sortBy('blood_type')" role="button" href="#">
                                    Golongan Darah
                                    @include('components.sort-icon', ['field' => 'blood_type'])
                                </a></th>
                                <th scope="col"><a wire:click.prevent="sortBy('city')" role="button" href="#">
                                    Lokasi
                                    @include('components.sort-icon', ['field' => 'city'])
                                </a</th>
                                <th scope="col">Kontak</th>
                              </tr>
                            </thead>
                            <tbody style="font-family: 'Montserrat';">
                            @foreach($pendonor as $data)
                                <tr x-data="window.__controller.dataTableController({{ $data->id }})">    
                                <th scope="row">{{$data->id_user}}</th>
                                <td>{{$data->nama_pendonor}}</td>
                                <td>{{$data->blood_type}}</td>
                                <td>{{$data->city}}</td>
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
                              </x-slot>
                        </x-data-table>