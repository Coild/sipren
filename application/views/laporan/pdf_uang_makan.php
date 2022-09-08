<!DOCTYPE html>
<html>
<head>
	<title>Uang Makan Pegawai ~ PDF</title>
<style>
    html{
        margin-top: 1.5em;
    }
	body{
		font-family: sans-serif;
		font-size: 10px;
	}

	table{
		width: 100%;
		border-collapse: collapse;
	}

	table tr th, table tr td{
		padding: 4px 10px 4px 10px; 
	}

	table tr th{
		border-bottom-style: double;
	}
</style>
</head>
<body>
	<p style="font-size: 8px"><?php echo date('d/m/Y'); ?></p>
	<div style="width: 100%">
		<div style="width: 20%;display: inline-block;"><img width="100px" src="./dist/imgs/iain.png"></div>
		<div style="width: 70%;display: inline-block;">
			<p style="text-align: center;font-size: 16px;font-weight: bold;">KEMENTERIAN AGAMA REPUBLIK INDONESIA<br>INSTITUT AGAMA ISLAM NEGERI<br>(IAIN) KEDIRI</p>
			<p style="text-align: center;margin-top: 5px;font-size: 9px">Jalan Sunan Ampel No.07 Ngronggo Kota Kediri Kode Pos 64127 <br> Telepon (0354) 689282 Faksimile (0354) 686564 <br>
			Website : www.iainkediri.ac.id
			</p>
		</div>
	</div>
	<hr style="border-top: 3px solid black">
	<p style="font-size: 16px;font-weight: bold;">DATA UANG MAKAN PEGAWAI [ <?php echo $this->M_uang_makan->getLabelPeriode() ?> ]</p>
	<table border="1">
		<thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach( $get_data_pegawai->result() as $row ){ ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nik; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->kategori; ?></td>
                <td><?php echo $row->status; ?></td>
                <td align="center">

                <?php 
                $jml_absensi = 0; 
                $jml_lembur  = 0;
                ?>
                <?php for($i=0; $i<count($list);$i++ ){ 
                // cek tgl libur
                if( ! $this->M_uang_makan->cekTglLibur($list[$i])){

                    if ( $this->M_uang_makan->cekAbsensi( $row->pin, $list[$i])) { 
                        
                        if( $this->M_uang_makan->tdkAdaAturanUm() ){

                            // tampilkan absensi
                            foreach( $this->M_uang_makan->tampilAbsensi( $row->pin, $list[$i])->result() as $c ){

                                $jml_absensi++;
                                
                            }

                        } else {

                            // tampilkan absensi
                            foreach( $this->M_uang_makan->tampilAbsensi( $row->pin, $list[$i])->result() as $c ){
                                if( $this->M_uang_makan->aturanMasuk( $c->jam_masuk ) && $this->M_uang_makan->aturanPulang( $c->jam_pulang )  ){
                                    $jml_absensi++;
                                }
                            }

                        }

                    }
                  
                } else {

                    // kondisi lembur
                }

                } ?>
                
                <?php echo $jml_absensi; ?>
                
                </td>
            </tr>
            <?php } ?>
        </tbody>
	</table>
</body>
</html>