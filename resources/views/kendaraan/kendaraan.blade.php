    @include('partials.top')

    <h3 class="page-header p-3 fw-bold">Data Kendaraan</h3>

    @include('kendaraan.menu')

    <table class="table table-striped" id="datatable">
        <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Nama Siswa</th>
            <th>Nomor Plat</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach($datakendaraan as $k)
                <tr>
                    <td class="text-center">{{ $k->idkendaraan }}</td>
                    <td>{{ ucfirst($k->siswa->namasiswa) }}</td>
                    <td>{{ $k->platnomor }}</td>
                    <td>
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right p-2" role="menu">
                                <li>
                                <a href="/kendaraanshow/{{ $k->idkendaraan }}"><span class="fa fa-eye"></span> Detail</a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                <a href="/kendaraanedit/{{ $k->idkendaraan }}"><span class="fa fa-edit"></span> Ubah</a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                <a href="/kendaraanhapus/{{ $k->idkendaraan }}"><span class="fa fa-trash"></span> Hapus</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    Halaman : {{ $datakendaraan->currentPage() }} <br/>
    Jumlah Data : {{ $datakendaraan->total() }} <br/>
    Data Per Halaman : {{ $datakendaraan->perPage() }} <br/>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {{ $datakendaraan->links() }}
        </ul>
    </nav>

    @include('partials.bottom')
