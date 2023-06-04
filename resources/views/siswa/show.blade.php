@include('partials.top')

<h3 class="page-header">Data Siswa</h3>

@include('siswa.menu')

@foreach($datasiswa as $s)
<form action="#" method="post">
    {{ csrf_field() }}
    <table class="table table-striped table-middle">
        <tr>
            <th width="20%">ID</th>
            <td width="1%">:</td>
            <td><input type="text" class="form-control" name="idsiswa" disabled value="{{ $s->idsiswa }}"></td>
        </tr>
        <tr>
            <th>Nama Siswa</th>
            <td>:</td>
            <td><input type="text" class="form-control" name="namasiswa" disabled value="{{ $s->namasiswa }}"></td>
        </tr>
    </table>
</form>
@endforeach

@include('partials.bottom')
