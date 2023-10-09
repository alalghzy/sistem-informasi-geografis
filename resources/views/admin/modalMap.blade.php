@foreach ($posts as $item)
    <div class="modal fade" id="locationModal-{{ $item->id_post }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg text-start" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $item->nama }}</h5>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
                </div>
                <div class="modal-body">
                    <table class="table table-sm">
                        <thead>
                            <tr class="text-start">
                                <th scope="col">Deskripsi</th>
                                <th class="text-center" scope="col">Latitude</th>
                                <th class="text-center" scope="col" >Longitude</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >{{ $item->deskripsi }}</td>
                                <td class="text-center">{{ $item->latitude }}</td>
                                <td class="text-center">{{ $item->longitude }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endforeach
