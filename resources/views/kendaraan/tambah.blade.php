@include('partials.top')

<h3 class="page-header">Data Kendaraan</h3>

@include('kendaraan.menu')

<form action="/kendaraanstore" method="post">
    {{ csrf_field() }}
    <table class="table table-striped table-middle">
        <tr>
            <th width="20%">ID</th>
            <td width="1%">:</td>
            <td><input type="text" class="form-control" name="idkendaraan" disabled></td>
        </tr>
        <tr>
            <th>Nama Siswa/ID Siswa</th>
            <td>:</td>
            <td><select class="form-control selectlive" name="idsiswa" required>
                <option value="" selected disabled>- Pilih Siswa -</option>
                @foreach ($datasiswa as $s)
                <option value="{{ $s->idsiswa }}">
                    {{ ucfirst($s->namasiswa) }}
                </option>
                @endforeach
              </select></td>
        </tr>
        <tr>
            <th>Nomor Plat</th>
            <td>:</td>
            <td><input type="text" class="form-control" name="platnomor" required></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-dark btn-md">
        <i class="fa fa-save"></i> Simpan
    </button>
</form>

@include('partials.bottom')
