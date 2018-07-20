<div class="row white centered">
               <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Absensi</h2>
                </div>
                <!-- /Section header -->

                <!-- blog -->
                <div class="panel-title pull-right">
                        <link rel="stylesheet" type="text/css" href="/assets/data/css/datatables.min.css"/>
                            <script type="text/javascript" src="/assets/data/js/datatables.min.js"></script>
</div>
            <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>kelas</th>
                                        <th>Tanggal</th>
                                        <th>Petugas Piket</th>
                                        <th>Keterangan</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $nomor = 1; ?>
                                    @php $no = 1; @endphp
                                    @foreach($absensisiswas as $data)
                                  <tr>
                                
                                        <td>{{ $no++ }}</td>
                                        <td><p>{{ $data->siswa->nama }}</p></td>
                                        <td><p>{{ $data->kelas->nama_kelas }}</p></td>
                                        <td>{{ $data->tanggal }}</td>
                                        <td><p>{{ $data->petugaspiket->nama_petugas }}</p></td>
                                        <td>{{ $data->keterangan }}</td>
                                        <td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>