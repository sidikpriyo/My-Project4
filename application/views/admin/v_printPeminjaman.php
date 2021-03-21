<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<!-- kop -->
<table width="100%">
<tr>
<td width="10" align="center"><img src="<?php echo base_url() ?>assets/dist/image/mgl_logo.png" width="80" height="90"></td>
<td><center><font size="4" face="arial" style="line-height: 20px;">PERPUSTAKAAN DESA</font></center>
<center><b><font size="4" face="Courier New" style="line-height: 20px;">CONDRO UTOMO</font></b></center><br>
<center><b>Catak, Madyocondro, Kec. Secang, Magelang, Jawa Tengah 56195<b></center><br>
<hr><width="100" height="75"></hr>
</td>
</tr>
</table>

	<h3 align="center">Data Peminjaman</h3>
	<table border="1" align="center">
		<tr>
			<th align="center" style="background-color: #C0C0C0">No</th>
			<th align="center" style="background-color: #C0C0C0">Nama Peminjam</th>
            <th align="center" style="background-color: #C0C0C0">Alamat</th>
            <th align="center" style="background-color: #C0C0C0">Penanggung Jawab</th>
            <th align="center" style="background-color: #C0C0C0">Judul Buku</th>
            <th align="center" style="background-color: #C0C0C0">Tgl Pinjam</th>
            <th align="center" style="background-color: #C0C0C0">Tgl Kembali</th>
            <th align="center" style="background-color: #C0C0C0">Status</th>
		</tr>

				<?php
				$no=1;
				foreach ($pinjam as $a) : ?>

			<tr>
				<td align="center" style="background-color: #C0C0C0"><?php echo $no++ ?></td>
				<td><?php echo $a->peminjam; ?></td>
	            <td><?php echo $a->alamat; ?></td>
	            <td><?php echo $a->pj; ?></td>
	            <td><?php echo $a->Judul_buku; ?></td>
	            <td><?php echo $a->tglPinjam; ?></td>
	            <td><?= ($a->tglKembali == null) ? $a->tglharuskembali: $a->tglKembali ?></td>
	            <td><?= ($a->tglKembali == null) ? "Belum Kembali" : "Sudah kembali" ; ?></td>
				</tr>
		<?php endforeach; ?>
	</table>

	<script type="text/javascript">
	window.print();
	</script>
<a href="<?php echo base_url().'admin/Data_buku';?>" class="btn btn-primary"><p align= "right">Kembali</a>
</body>
</html>