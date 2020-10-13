<?php  
$buku = array(
			array(	'judul'		=> 'Sherlock Holmes', 
					'pengarang' => 'Arthur Conan Doyle',
 					'harga' 	=> 50000,
  					'stok' 		=> 20
  				), 
  			array(	'judul' 	=> 'Arsene Lupin',
  					'pengarang' => 'Maurice LeBlanc',
  					'harga'		=> 250000,
  					'stok' 		=> 50
  				),
  			array(	'judul' 	=> 'Game Of Throne',
  					'pengarang' => 'George R.R. Martin',
  					'harga' 	=> 125000,
  					'stok' 		=> 60
  				) 
  			);

	echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            	<th>Judul Buku</th>
            	<th>Pengarang</th>
            	<th>Harga</th>
            	<th>Stok</th>
          </tr>";
    
    	$totalstok = 0;
    for($x=0;$x<count($buku);$x++){
    	$totalstok = $totalstok + $buku[$x]['stok'];
        	echo "<tr>";
       		echo "<td>".$buku[$x]['judul']."</td>";
        	echo "<td>".$buku[$x]['pengarang']."</td>";  
       		echo "<td>".$buku[$x]['harga']."</td>";  
        	echo "<td>".$buku[$x]['stok']."</td>"; 
       		echo "</tr>";
    }
    echo "<tr>
          <td colspan='3'><b>Total Harga (Rp)</b></td>
          <td>".$totalstok."</td>
          </tr>";
    echo "</table>";
    echo "<br>"; 

 
$pembelian = array( 
				array(	"judul" 	=> "Sherlock Holmes", 
						"jumlah" 	=> "5"
					), 
				array(	"judul" 	=> "Arsene Lupin", 
						"jumlah" 	=> "2"
					), 
				array(	"judul" 	=> "Game Of Throne", 
						"jumlah" 	=> "4"
					)
				);
	echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            	<th>Judul Buku</th>
            	<th>Jumlah</th>
            	<th>Harga</th>
          </tr>";


?>