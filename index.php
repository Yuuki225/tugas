<?php include("isi/header.php")?>

<?php
$dataMurid = [
    [
        "siswa_id" => "12345678",
        "siswa" => "Wawan",
        "Kelas" => "XI-PPLG1",
        "Jurusan" => "PPLG",
        "Kehadiran" => "Hadir"
    ],
    [
        "siswa_id" => "87654321",
        "siswa" => "Razwa",
        "Kelas" => "XI-PPLG1",
        "Jurusan" => "PPLG",
        "Kehadiran" => "Tidak"
    ],

    [
        "siswa_id" => "4455434",
        "siswa" => "Toto",
        "Kelas" => "XI-PPLG1",
        "Jurusan" => "PPLG",
        "Kehadiran" => "Tidak"
    ],

    [
        "siswa_id" => "0875938",
        "siswa" => "someone",
        "Kelas" => "XI-PPLG1",
        "Jurusan" => "PPLG",
        "Kehadiran" => "Tidak"
    ],

    
];
?>
<!-- main content start -->
<div class="main-content">
    <div class="col-xxl-8">
        <div class="panel">
            <div class="panel-header">
                <h5>Daftar Siswa di kelas PPLG1</h5>
                <div id="tableSearch"></div>
            </div>
            <div class="panel-body">
                <table class="table table-dashed recent-order-table" id="myTable">
                    <thead>
                        <tr>
                            <th>Siswa ID</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Absensi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataMurid as $data) { ?>
                        <tr>
                            <td><?php echo($data['siswa_id']); ?></td>
                            <td><?php echo($data['siswa']); ?></td>
                            <td><?php echo($data['Kelas']); ?></td>
                            <td><?php echo($data['Jurusan']); ?></td>
                            <td><span class="badge <?php echo $data['Kehadiran'] == 'Hadir' ? 'bg-success' : 'bg-warning'; ?>"><?php echo $data['Kehadiran']; ?></span></td>
                            <td>
                                <div class="btn-box">
                                    <button><i class="fa-light fa-eye"></i></button>
                                    <button><i class="fa-light fa-pen"></i></button>
                                    <button><i class="fa-light fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="table-bottom-control"></div>
            </div>
        </div>
    </div>
</div>

<?php include("isi/footer.php")?>