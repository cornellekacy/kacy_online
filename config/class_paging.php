<?php
// class paging untuk halaman administrator
class Paging{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET[halaman])){
	$posisi=0;
	$_GET[halaman]=1;
}
else{
	$posisi = ($_GET[halaman]-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 (untuk admin)
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link halaman 1,2,3, ...
for ($i=1; $i<=$jmlhalaman; $i++){
  if ($i == $halaman_aktif){
    $link_halaman .= "<b>$i</b> | ";
  }
else{
  $link_halaman .= "<a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$i>$i</a> | ";
}
$link_halaman .= " ";
}
return $link_halaman;
}
}


// class paging untuk halaman produk (menampilkan semua produk) 
class Paging2{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET[halproduk])){
	$posisi=0;
	$_GET[halproduk]=1;
}
else{
	$posisi = ($_GET[halproduk]-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link halaman 1,2,3, ...
for ($i=1; $i<=$jmlhalaman; $i++){
  if ($i == $halaman_aktif){
    $link_halaman .= "<b>$i</b> | ";
  }
else{
  $link_halaman .= "<a href=halproduk-$i.html>$i</a> | ";
}
$link_halaman .= " ";
}
return $link_halaman;
}
}


// class paging untuk halaman kategori (menampilkan semua kategori)
class Paging3{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halkategori'])){
	$posisi=0;
	$_GET['halkategori']=1;
}
else{
	$posisi = ($_GET['halkategori']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";
// Link halaman 1,2,3, ...
for ($i=1; $i<=$jmlhalaman; $i++){
  if ($i == $halaman_aktif){
    $link_halaman .= "<b>$i</b> | ";
  }
else{
  $link_halaman .= "<a href=halkategori-$_GET[id]-$i.html>$i</a> | ";
}
$link_halaman .= " ";
}
return $link_halaman;
}
}


// class paging untuk halaman agenda (menampilkan semua agenda) 
class Paging4{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET[halagenda])){
	$posisi=0;
	$_GET[halagenda]=1;
}
else{
	$posisi = ($_GET[halagenda]-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link halaman 1,2,3, ...
for ($i=1; $i<=$jmlhalaman; $i++){
  if ($i == $halaman_aktif){
    $link_halaman .= "<b>$i</b> | ";
  }
else{
  $link_halaman .= "<a href=halagenda-$i.html>$i</a> | ";
}
$link_halaman .= " ";
}
return $link_halaman;
}
}


// class paging untuk halaman download (menampilkan semua download) 
class Paging5{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET[haldownload])){
	$posisi=0;
	$_GET[haldownload]=1;
}
else{
	$posisi = ($_GET[haldownload]-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link halaman 1,2,3, ...
for ($i=1; $i<=$jmlhalaman; $i++){
  if ($i == $halaman_aktif){
    $link_halaman .= "<b>$i</b> | ";
  }
else{
  $link_halaman .= "<a href=haldownload-$i.html>$i</a> | ";
}
$link_halaman .= " ";
}
return $link_halaman;
}
}


/*
// class paging untuk halaman agenda (menampilkan semua agenda) 
class Paging6{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET[halagenda])){
	$posisi=0;
	$_GET[halbuku]=1;
}
else{
	$posisi = ($_GET[halbuku]-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link halaman 1,2,3, ...
for ($i=1; $i<=$jmlhalaman; $i++){
  if ($i == $halaman_aktif){
    $link_halaman .= "<b>$i</b> | ";
  }
else{
  $link_halaman .= "<a href=halbuku-$i.html>$i</a> | ";
}
$link_halaman .= " ";
}
return $link_halaman;
}
}
*/


// class paging untuk halaman download (menampilkan semua download) 
class Paging6{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['haldaftar'])){
	$posisi=0;
	$_GET['haldaftar']=1;
}
else{
	$posisi = ($_GET['haldaftar']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=haldaftar-1.html><< First</a> | 
                    <a href=haldaftar-$prev.html>< Prev</a> | ";
}
else{ 
	$link_halaman .= "<< First | < Prev | ";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=haldaftar-$i.html>$i</a> | ";
  }
	  $angka .= " <b>$halaman_aktif</b> | ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=haldaftar-$i.html>$i</a> | ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ... | <a href=haldaftar-$jmlhalaman.html>$jmlhalaman</a> | " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=haldaftar-$next.html>Next ></a> | 
                     <a href=haldaftar-$jmlhalaman.html>Last >></a> ";
}
else{
	$link_halaman .= " Next > | Last >>";
}
return $link_halaman;
}
}

class Paging10{
// Fungsi untuk mencek halaman dan posisi data
		function cariPosisi($batas) {
			if(empty($_GET['haldaftar'])) {
				$posisi = 0;
				$_GET['haldaftar'] = 1;
			} else {
				$posisi = ($_GET['haldaftar'] - 1) * $batas;
			}
			return $posisi;
		}
		
		// Fungsi untuk menghitung total halaman
		function jumlahHalaman($jmldata, $batas) {
			$jmlhalaman = ceil($jmldata/$batas);
			return $jmlhalaman;
		}
		
		// Fungsi untuk link halaman 1,2,3 
		function navHalaman($halaman_aktif, $jmlhalaman) {
			global $link;
			
			$link_halaman = "";
		
			// Link ke halaman pertama (first) dan sebelumnya (prev)
			if($halaman_aktif > 1) {
				$prev = $halaman_aktif - 1;
	
				if($prev > 1) { 
					$link_halaman .= "<a class=\"first\" href=\"haldaftar-1.html\"></a>";
				}			
				$link_halaman .= "<a class=\"previouspostslink\" href=\"haldaftar-".$prev.".html\"></a>";
			}
		
			// Link halaman 1,2,3, ...
			$angka = ($halaman_aktif > 3 ? "<span>...</span>" : " "); 
			for($i = $halaman_aktif-2;$i < $halaman_aktif;$i++) {
				if ($i < 1) continue;
				$angka .= "<a href=\"haldaftar-".$i.".html\">".$i."</a>";
			}
			$angka .= "<span class=\"current\">".$halaman_aktif."</span>";
			  
			for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++) {
				if($i > $jmlhalaman) break;
				$angka .= "<a href=\"haldaftar-".$i.".html\">".$i."</a>";
			}
			$angka .= ($halaman_aktif+2 < $jmlhalaman ? "<span>...</span><a href=\"haldaftar-".$jmlhalaman.".html\">".$jmlhalaman."</a>" : " ");
		
			$link_halaman .= $angka;
			
			// Link ke halaman berikutnya (Next) dan terakhir (Last) 
			if($halaman_aktif < $jmlhalaman) {
				$next = $halaman_aktif + 1;
				$link_halaman .= "<a class=\"nextpostslink\" href=\"haldaftar-".$next.".html\"></a>";
				
				if($halaman_aktif != $jmlhalaman - 1) {
					$link_halaman .= "<a class=\"last\" href=\"haldaftar-".$jmlhalaman.".html\"></a>";
				}
			}
			
			return $link_halaman;
		}
}

?>
