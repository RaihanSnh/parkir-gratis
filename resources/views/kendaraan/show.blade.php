@include('partials.top')

<h3 class="page-header">Data Kendaraan</h3>

@include('kendaraan.menu')

@foreach($datakendaraan as $k)
<form action="#" method="post">
    {{ csrf_field() }}
    <table class="table table-striped table-middle">
        <tr>
            <th width="20%">ID</th>
            <td width="1%">:</td>
            <td><input type="text" class="form-control" disabled value="{{ $k->idkendaraan }}"></td>
        </tr>
        <tr>
            <th>ID Siswa</th>
            <td>:</td>
            <td><input type="text" class="form-control" disabled value="{{ $k->idsiswa }}"></td>
        </tr>
        <tr>
            <th>Nomor Plat</th>
            <td>:</td>
            <td><input type="text" class="form-control" disabled value="{{ $k->platnomor }}"></td>
        </tr>
    </table>
</form>
@endforeach

@include('partials.bottom')
