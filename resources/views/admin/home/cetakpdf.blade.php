<b><h1 style="text-align:center">View Stok Produk</h1></b>
    <img src="https://rekreartive.com/wp-content/uploads/2018/10/Logo-UPH-Universitas-Pelita-Harapan-Original-PNG.png" alt="" style="margin:  0 0 0 35%; width:30%">
    <style>
        table tr{
            padding: 50px;
            border:3px;
        }
        table td{
            border:5px;
        }
        table th{
            border:5px;
        }
    </style>
    <h1>Nama: Daniel Shiffer</h1>
    <h1>NIM: 03081200025</h1>
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th>Id Gudang</th>
            <th>Stok</th>
        </tr>
        </thead>

        <?php

        $rows = DB::select("
        SELECT id_produk, nama_produk, id_gudang, stok FROM vstok");
        $no=1;

        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>".$row->id_produk."</td>";
            echo "<td>".$row->nama_produk."</td>";
            echo "<td>".$row->id_gudang."</td>";
            echo "<td>".$row->stok."</td>";

            echo "</tr>";
            $no+=1;
        }
        ?>
    </table>
    <br>
<script>
  window.addEventListener("load", window.print());
</script>