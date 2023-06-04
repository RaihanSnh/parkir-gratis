@include('partials.top')

<h3 class="page-header">Data Siswa</h3>

@include('siswa.menu')

@foreach($datasiswa as $s)
<form action="/siswaupdate" method="post">
    {{ csrf_field() }}
    <table class="table table-striped table-middle">
        <tr>
            <th width="20%">ID</th>
            <td width="1%">:</td>
            <td><input type="hidden" class="form-control" name="idsiswa" value="{{ $s->idsiswa }}"></td>
        </tr>
        <tr>
            <th>Nama Siswa</th>
            <td>:</td>
            <td><input type="text" class="form-control" name="namasiswa" required value="{{ $s->namasiswa }}"></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-dark btn-md">
        <i class="fa fa-save"></i> Simpan
    </button>
</form>
@endforeach

@include('partials.bottom')
