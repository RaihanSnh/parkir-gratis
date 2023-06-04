@include('partials.top')

<h3 class="page-header p-3 fw-bold">Data Siswa</h3>

@include('siswa.menu')

<table class="table table-striped" id="datatable">
    <thead>
      <tr class="text-center">
        <th>ID</th>
        <th>Nama Siswa</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach($datasiswa as $s)
            <tr>
                <td class="text-center">{{ $s->idsiswa }}</td>
                <td>{{ $s->namasiswa }}</td>
                <td>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right p-2" role="menu">
                            <li>
                            <a href="/siswashow/{{ $s->idsiswa }}"><span class="fa fa-eye"></span> Detail</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                            <a href="/siswaedit/{{ $s->idsiswa }}"><span class="fa fa-edit"></span> Ubah</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                            <a href="/siswahapus/{{ $s->idsiswa }}"><span class="fa fa-trash"></span> Hapus</a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br/>
<div class="">
    Halaman : {{ $datasiswa->currentPage() }} <br/>
    Jumlah Data : {{ $datasiswa->total() }} <br/>
    Data Per Halaman : {{ $datasiswa->perPage() }} <br/>
</div>
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        {{ $datasiswa->links() }}
    </ul>
</nav>

@include('partials.bottom')
