<!DOCTYPE html>
<html>

<head>
    <title>Cetak Print Rekap Data Laundry</title>
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Open Sans:400,500,600,700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans:400,500,600,700&display=swap" media="print" onload="this.media='all'">
</head>

<body data-rsssl=1>
    <div class="container">

        <center>
            <br><br>
            <h2>Data Rekapan Laundry</h2>
            <h3>JK Trans</h3>
            <br><br>
        </center>

        <?php
        include 'koneksi.php';
        ?>

        <table border="1" style="width: 100%" class="table table-bordered">
            <tr>
                <th>No</th>
                <th>S. P.</th>
                <th>Colli</th>
                <th>Berat</th>
                <th>Code</th>
                <th>Franco</th>
                <th>Confrankert</th>
                <th>Penerima Barang</th>
                <th>Keterangan</th>
            </tr>
            <?php
            $no = 1;
            $sql = mysqli_query($con, "select * from pakaian");
            while ($d = mysqli_fetch_array($sql)) {
            ?>

                <tr>
                    <td> <?php echo $no++; ?></td>
                    <td> <?php echo $d['sp']; ?></td>
                    <td> <?php echo $d['colli']; ?></td>
                    <td> <?php echo $d['berat']; ?> Kg</td>
                    <td> <?php echo $d['code']; ?></td>
                    <td> <?php echo $d['franco']; ?></td>
                    <td> Rp <?php echo $d['confrankert']; ?></td>
                    <td> <?php echo $d['penerima_barang']; ?></td>
                    <td> <?php echo $d['keterangan']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>

        <script>
            window.print();
        </script>
    </div>
</body>

</html>