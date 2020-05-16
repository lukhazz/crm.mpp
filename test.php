<!DOCTYPE html>
<html>
<?php //ob_start(); ?>
<?php 
$pageTitle="Test"; 
$description="Testovací stránka"; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="js/jquery.table2excel.js"></script>





<body>
	<div class="page">
		<?php require_once("login-db.php") ?>
		<?php require_once("login.php") ?>
		<?php require_once("roles.php") ?>
		<?php require("block-header.php"); ?>
		<?php require("functions.php") ?>
		<div class="container">
			<main>
				<section>

					<h2>Test</h2>

					<?php  
						$id = "15";
					?>
				
					<?php
						$file_prename = makeFilePreName( $id );					
						//$file_prename 	= ""; 
						$file_path_original 	= "promoday/original/".date("Y");
						$file_path_resized 		= "promoday/resized/".date("Y");
						//echo "$file_prename";	
						//echo $file_path."<br>".$file_prename;
						 require("upload-test.php");
					?>

					<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
				         <input type="file" name="image" />
				         <input type="submit"/>
				      </form>

					<table class="table2excel" data-tableName="Test Table 1">
						<thead>
							<tr class="noExl"><td>This shouldn't get exported</td><td>This shouldn't get exported either</td></tr>
							<tr><td>This Should get exported as a header</td><td>This should too</td></tr>
						</thead>
						<tbody>
							<tr><td>data1a</td><td>data1b</td></tr>
							<tr><td>data2a</td><td>data2b</td></tr>
						</tbody>
						<tfoot>
							<tr><td colspan="2">This footer spans 2 cells</td></tr>
						</tfoot>
					</table>
					<br>
					<table class="table2excel" data-tableName="Test Table 2">
						<thead>
							<tr class="noExl"><td>This shouldn't get exported</td><td>This shouldn't get exported either</td></tr>
							<tr><td>This Should get exported as a header</td><td>This should too</td></tr>
						</thead>
						<tbody>
							<tr><td>data1a</td><td>data1b</td></tr>
							<tr><td>data2a</td><td>data2b</td></tr>
						</tbody>
						<tfoot>
							<tr><td colspan="2">This footer spans 2 cells</td></tr>
						</tfoot>
					</table>

					<table id="pharmacy-old">
			            <tr>
			                <th>Column 1</th>
			                <th>Column "cool" 2</th>
			                <th>Column 3</th>
			                <th>Column 4</th>
			            </tr>
			            <tr>
			                <td>100,111</td>
			                <td>200</td>
			                <td>300</td>
			                <td>áéíóú</td>
			            </tr>
			            <tr>
			                <td>400</td>
			                <td>500</td>
			                <td>Chinese chars: 解决导出csv中文乱码问题</td>
			                <td>àèìòù</td>
			            </tr>
			            <tr>
			                <td>Text</td>
			                <td>More text</td>
			                <td>Text with
			                new line</td>
			                <td>ç ñ ÄËÏÖÜ äëïöü</td>
			            </tr>
			        </table>

					<input type="button" class="per100" onclick="table2excel('summary', 'MPP')" value="Export do Excelu">

					<div>


						

					<input type="button" download="<?php echo date("ymd"); ?>-MPP.xls" class="per100" onclick="return ExcellentExport.excel(this, 'pharmacy', 'List 1');" value="Export do Excelu">

			        <a download="somedata.csv" href="#" onclick="return ExcellentExport.csv(this, 'pharmacy');">Export to CSV - UTF8</a><br>

			        <a download="somedata.csv" href="#" onclick="return ExcellentExport.csv(this, 'pharmacy', ';');">Export to CSV - Using semicolon ";" separator - UTF8</a><br>

			        <a download="somedata.xls" href="#" onclick="return ExcellentExport.excel(this, 'pharmacy', 'Sheet Name Here');">Export to Excel</a><br>


					<?php echo get_browser_name($_SERVER['HTTP_USER_AGENT']); ?>
					<?php 
						if (get_browser_name($_SERVER['HTTP_USER_AGENT'])=="Firefox") {
							?><input type="button" class="per100" onclick="tableToExcel('summary', 'MPP')" value="Export do Excelu"><?php
						}
						else {
							?><a download="<?php echo date("ymd"); ?>_MPP.xls" href="#" onclick="return ExcellentExport.excel(this, 'pharmacy', 'List 1');"><input type="button" value="Export do Excelu"></a><br><?php
						}
					 ?>
					<input type="button" class="per100" onclick="table2excel('summary', 'MPP')" value="Export do Excelu"><br>

					<a download="<?php echo date("ymd"); ?>_MPP.xls" href="#" onclick="return ExcellentExport.excel(this, 'pharmacy', 'List 1');"><input type="button" value="Export do Excelu"></a><br>

					<table id="pharmacy">
						<thead>
							<tr>
								<th>VDL</th>
								<th>Rating</th>
								<th>Řetězec</th>
								<th>Název</th>
								<th>Ulice</th>
								<th>Město</th>
								<th>Okres</th>
								<th>Kontaktní osoba</th>
								<th>Telefon</th>
								<th>Upravit</th>
							</tr>
						</thead>
						<tbody>	 
							
							<tr>
								<td>449092</td>
								<td>D</td>
								<td>&nbsp;</td>
								<td>BYLINNÁ LÉKÁRNA CS AKTUEL SERVIS</td>
								<td>TYLOVA 4</td>
								<td>PLZEŇ</td>
								<td>PLZEŇ-MĚSTO</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1719">Edit</a></td>
							</tr>
							<tr>
								<td>730003</td>
								<td>B</td>
								<td>MOJE LÉKÁRNA</td>
								<td>LÉKÁRNA</td>
								<td>KOMENSKÉHO 733</td>
								<td>BÍLOVICE N. SVITAVOU</td>
								<td>BRNO-VENKOV</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=51">Edit</a></td>
							</tr>
							<tr>
								<td>710020</td>
								<td>E</td>
								<td>&nbsp;</td>
								<td>LÉKÁRNA</td>
								<td>MASARYKOVO NÁMĚSTÍ 6/4</td>
								<td>BOSKOVICE</td>
								<td>BLANSKO</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=86">Edit</a></td>
							</tr>
							<tr>
								<td>710036</td>
								<td>E</td>
								<td>&nbsp;</td>
								<td>LÉKÁRNA</td>
								<td>MASARYKOVO NÁMĚSTÍ 25/25</td>
								<td>BOSKOVICE</td>
								<td>BLANSKO</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=90">Edit</a></td>
							</tr>
							<tr>
								<td>720052</td>
								<td>C</td>
								<td>ALPHEGA</td>
								<td>LÉKÁRNA</td>
								<td>ŠTEFÁNIKOVA 23</td>
								<td>BRNO</td>
								<td>BRNO-MĚSTO</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=176">Edit</a></td>
							</tr>
							<tr>
								<td>820023</td>
								<td>D</td>
								<td>CoPharm</td>
								<td>LÉKÁRNA</td>
								<td>DRUŽBA 1189</td>
								<td>BRUMOV - BYLNICE</td>
								<td>ZLÍN</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=269">Edit</a></td>
							</tr>
							<tr>
								<td>900021</td>
								<td>E</td>
								<td>&nbsp;</td>
								<td>LÉKÁRNA</td>
								<td>BEROUNSKÁ 23</td>
								<td>BUDIŠOV N/BUDIŠOVKOU</td>
								<td>OPAVA</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=298">Edit</a></td>
							</tr>
							<tr>
								<td>800016</td>
								<td>D</td>
								<td>MOJE LÉKÁRNA</td>
								<td>LÉKÁRNA</td>
								<td>BUCHLOVICE 273</td>
								<td>BUCHLOVICE</td>
								<td>UHERSKÉ HRADIŠTĚ</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=301">Edit</a></td>
							</tr>
							<tr>
								<td>750054</td>
								<td>E</td>
								<td>PharmaPoint</td>
								<td>LÉKÁRNA</td>
								<td>NÁDRAŽNÍ 697</td>
								<td>BZENEC</td>
								<td>HODONÍN</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=315">Edit</a></td>
							</tr>
							<tr>
								<td>750012</td>
								<td>E</td>
								<td>ALPHEGA PARTNER</td>
								<td>LÉKÁRNA</td>
								<td>ČEJČ 73</td>
								<td>ČEJČ</td>
								<td>HODONÍN</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=325">Edit</a></td>
							</tr>
							<tr>
								<td>200007</td>
								<td>D</td>
								<td>PharmaPoint</td>
								<td>LÉKÁRNA</td>
								<td>SUKOVA 44</td>
								<td>ČERČANY</td>
								<td>BENEŠOV</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=331">Edit</a></td>
							</tr>
							<tr>
								<td>660018</td>
								<td>C</td>
								<td>MAGISTRA</td>
								<td>LÉKÁRNA</td>
								<td>NÁM. F. L. VĚKA 38</td>
								<td>DOBRUŠKA</td>
								<td>RYCHNOV NAD KNĚŽNOU</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=446">Edit</a></td>
							</tr>
							<tr>
								<td>730017</td>
								<td>D</td>
								<td>&nbsp;</td>
								<td>LÉKÁRNA</td>
								<td>MASARYKOVO NÁMĚSTÍ 828/1a</td>
								<td>DOLNÍ KOUNICE</td>
								<td>BRNO-VENKOV</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=468">Edit</a></td>
							</tr>
							<tr>
								<td>800029</td>
								<td>E</td>
								<td>MOJE LÉKÁRNA</td>
								<td>LÉKÁRNA</td>
								<td>VINOHRADSKÁ 606</td>
								<td>DOLNÍ NĚMČÍ</td>
								<td>UHERSKÉ HRADIŠTĚ</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=471">Edit</a></td>
							</tr>
							<tr>
								<td>410012</td>
								<td>E</td>
								<td>&nbsp;</td>
								<td>LÉKÁRNA</td>
								<td>AMERICKÁ 8</td>
								<td>FRANTIŠKOVY LÁZNĚ</td>
								<td>CHEB</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=499">Edit</a></td>
							</tr>
							<tr>
								<td>750007</td>
								<td>D</td>
								<td>ALPHEGA PARTNER</td>
								<td>LÉKÁRNA</td>
								<td>DOBROVOLSKÉHO 11</td>
								<td>HODONÍN</td>
								<td>HODONÍN</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=600">Edit</a></td>
							</tr>
							<tr>
								<td>470005</td>
								<td>E</td>
								<td>CoPharm</td>
								<td>LÉKÁRNA</td>
								<td>HOLOUBKOV 281</td>
								<td>HOLOUBKOV</td>
								<td>ROKYCANY</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=616">Edit</a></td>
							</tr>
							<tr>
								<td>940033</td>
								<td>D</td>
								<td>&nbsp;</td>
								<td>LÉKÁRNA</td>
								<td>HORNÍ BEČVA 654</td>
								<td>HORNÍ BEČVA</td>
								<td>VSETÍN</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=622">Edit</a></td>
							</tr>
							<tr>
								<td>850038</td>
								<td>D</td>
								<td>MOJE LÉKÁRNA</td>
								<td>LÉKÁRNA</td>
								<td>MASARYKOVA 106</td>
								<td>HORNÍ BENEŠOV</td>
								<td>BRUNTÁL</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=623">Edit</a></td>
							</tr>
							<tr>
								<td>210015</td>
								<td>D</td>
								<td>PharmaPoint</td>
								<td>LÉKÁRNA</td>
								<td>KOMENSKÉHO 49</td>
								<td>HOŘOVICE</td>
								<td>BEROUN</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=641">Edit</a></td>
							</tr>
							<tr>
								<td>290031</td>
								<td>D</td>
								<td>PharmaPoint</td>
								<td>LÉKÁRNA</td>
								<td>ČSL.ARMÁDY 17</td>
								<td>HOSTIVICE</td>
								<td>PRAHA-ZÁPAD</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=646">Edit</a></td>
							</tr>
							<tr>
								<td>940016</td>
								<td>E</td>
								<td>&nbsp;</td>
								<td>LÉKÁRNA</td>
								<td>SOLANEC 627</td>
								<td>HUTISKO - SOLANEC</td>
								<td>VSETÍN</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=729">Edit</a></td>
							</tr>
							<tr>
								<td>340006</td>
								<td>E</td>
								<td>&nbsp;</td>
								<td>LÉKÁRNA</td>
								<td>TŘEBOŇSKÁ 215</td>
								<td>CHLUM U TŘEBONĚ</td>
								<td>JINDŘICHŮV HRADEC</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=741">Edit</a></td>
							</tr>
							<tr>
								<td>620012</td>
								<td>D</td>
								<td>ALPHEGA</td>
								<td>LÉKÁRNA</td>
								<td>U POŠTY 17</td>
								<td>CHRAST U CHRUDIMĚ</td>
								<td>CHRUDIM</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=773">Edit</a></td>
							</tr>
							<tr>
								<td>770012</td>
								<td>E</td>
								<td>MOJE LÉKÁRNA</td>
								<td>LÉKÁRNA</td>
								<td>MÍRU 825</td>
								<td>CHROPYNĚ</td>
								<td>KROMĚŘÍŽ</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=777">Edit</a></td>
							</tr>
							<tr>
								<td>900016</td>
								<td>D</td>
								<td>ALPHEGA PARTNER</td>
								<td>LÉKÁRNA</td>
								<td>K. M. LICHNOVSKÉHO 267</td>
								<td>CHUCHELNÁ</td>
								<td>OPAVA</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=792">Edit</a></td>
							</tr>
							<tr>
								<td>940026</td>
								<td>D</td>
								<td>PharmaPoint</td>
								<td>LÉKÁRNA</td>
								<td>VSETÍNSKÁ 71</td>
								<td>KAROLINKA</td>
								<td>VSETÍN</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=928">Edit</a></td>
							</tr>
							<tr>
								<td>220010</td>
								<td>C</td>
								<td>ALPHEGA PARTNER</td>
								<td>LÉKÁRNA</td>
								<td>VRCHLICKÉHO 1977</td>
								<td>KLADNO</td>
								<td>KLADNO</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=956">Edit</a></td>
							</tr>
							<tr>
								<td>430026</td>
								<td>D</td>
								<td>ALPHEGA</td>
								<td>LÉKÁRNA</td>
								<td>DRAGOUNSKÁ 404/IV</td>
								<td>KLATOVY</td>
								<td>KLATOVY</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=982">Edit</a></td>
							</tr>
							<tr>
								<td>770011</td>
								<td>E</td>
								<td>CoPharm</td>
								<td>LÉKÁRNA</td>
								<td>NÁMĚSTÍ 401</td>
								<td>KORYČANY</td>
								<td>KROMĚŘÍŽ</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1015">Edit</a></td>
							</tr>
							<tr>
								<td>660012</td>
								<td>C</td>
								<td>&nbsp;</td>
								<td>LÉKÁRNA</td>
								<td>PALACKÉHO NÁMĚSTÍ 26</td>
								<td>KOSTELEC NAD ORLICÍ</td>
								<td>RYCHNOV NAD KNĚŽNOU</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1021">Edit</a></td>
							</tr>
							<tr>
								<td>770035</td>
								<td>D</td>
								<td>&nbsp;</td>
								<td>LÉKÁRNA</td>
								<td>MORAVSKÁ 387/51</td>
								<td>KROMĚŘÍŽ</td>
								<td>KROMĚŘÍŽ</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1055">Edit</a></td>
							</tr>
							<tr>
								<td>770027</td>
								<td>D</td>
								<td>ALPHEGA</td>
								<td>LÉKÁRNA</td>
								<td>SLOVANSKÉ NÁMĚSTÍ 2790</td>
								<td>KROMĚŘÍŽ</td>
								<td>KROMĚŘÍŽ</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1059">Edit</a></td>
							</tr>
							<tr>
								<td>800012</td>
								<td>E</td>
								<td>&nbsp;</td>
								<td>LÉKÁRNA</td>
								<td>NÁMĚSTÍ SVOBODY 359</td>
								<td>KUNOVICE</td>
								<td>UHERSKÉ HRADIŠTĚ</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1076">Edit</a></td>
							</tr>
							<tr>
								<td>770013</td>
								<td>D</td>
								<td>ALPHEGA</td>
								<td>LÉKÁRNA</td>
								<td>KRAJINA 257</td>
								<td>KVASICE</td>
								<td>KROMĚŘÍŽ</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1090">Edit</a></td>
							</tr>
							<tr>
								<td>650026</td>
								<td>E</td>
								<td>&nbsp;</td>
								<td>LÉKÁRNA</td>
								<td>LANGROVA 11</td>
								<td>LÁZNĚ BOHDANEČ</td>
								<td>PARDUBICE</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1109">Edit</a></td>
							</tr>
							<tr>
								<td>700007</td>
								<td>E</td>
								<td>&nbsp;</td>
								<td>LÉKÁRNA</td>
								<td>KOMENSKÉHO 299</td>
								<td>LETOHRAD</td>
								<td>ÚSTÍ NAD ORLICÍ</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1114">Edit</a></td>
							</tr>
							<tr>
								<td>710013</td>
								<td>D</td>
								<td>MAGISTRA</td>
								<td>LÉKÁRNA</td>
								<td>MASARYKOVO NÁMĚSTÍ 25/206</td>
								<td>LETOVICE</td>
								<td>BLANSKO</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1116">Edit</a></td>
							</tr>
							<tr>
								<td>260004</td>
								<td>C</td>
								<td>PILULKA PARTNER</td>
								<td>LÉKÁRNA</td>
								<td>AREÁL ŠKODA AUTO, A.S.</td>
								<td>MLADÁ BOLESLAV</td>
								<td>MLADÁ BOLESLAV</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1280">Edit</a></td>
							</tr>
							<tr>
								<td>770015</td>
								<td>D</td>
								<td>ALPHEGA</td>
								<td>LÉKÁRNA</td>
								<td>17.LISTOPADU 140</td>
								<td>MORKOVICE - SLÍŽANY</td>
								<td>KROMĚŘÍŽ</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1315">Edit</a></td>
							</tr>
							<tr>
								<td>780020</td>
								<td>C</td>
								<td>ALPHEGA</td>
								<td>LÉKÁRNA</td>
								<td>SOKOLSKÁ 522</td>
								<td>NĚMČICE NAD HANOU</td>
								<td>PROSTĚJOV</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1355">Edit</a></td>
							</tr>
							<tr>
								<td>940007</td>
								<td>D</td>
								<td>ALPHEGA</td>
								<td>LÉKÁRNA</td>
								<td>NOVÝ HROZENKOV 455</td>
								<td>NOVÝ HROZENKOV</td>
								<td>VSETÍN</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1392">Edit</a></td>
							</tr>
							<tr>
								<td>270003</td>
								<td>D</td>
								<td>CoPharm</td>
								<td>LÉKÁRNA</td>
								<td>2. KVĚTNA 757</td>
								<td>NYMBURK</td>
								<td>NYMBURK</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1406">Edit</a></td>
							</tr>
							<tr>
								<td>430042</td>
								<td>C</td>
								<td>ALPHEGA</td>
								<td>LÉKÁRNA</td>
								<td>PETRA BEZRUČE 158</td>
								<td>NÝRSKO</td>
								<td>KLATOVY</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1415">Edit</a></td>
							</tr>
							<tr>
								<td>890091</td>
								<td>D</td>
								<td>MOJE LÉKÁRNA</td>
								<td>LÉKÁRNA</td>
								<td>KMOCHOVA 18</td>
								<td>OLOMOUC</td>
								<td>OLOMOUC</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1428">Edit</a></td>
							</tr>
							<tr>
								<td>890013</td>
								<td>D</td>
								<td>MOJE LÉKÁRNA</td>
								<td>LÉKÁRNA</td>
								<td>JANSKÉHO 26</td>
								<td>OLOMOUC</td>
								<td>OLOMOUC</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1454">Edit</a></td>
							</tr>
							<tr>
								<td>910152</td>
								<td>C</td>
								<td>ALPHEGA</td>
								<td>LÉKÁRNA</td>
								<td>MJR. NOVÁKA 1392/1</td>
								<td>OSTRAVA</td>
								<td>OSTRAVA-MĚSTO</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1496">Edit</a></td>
							</tr>
							<tr>
								<td>910051</td>
								<td>D</td>
								<td>MOJE LÉK.PARTNER</td>
								<td>LÉKÁRNA</td>
								<td>PORUBSKÁ 552</td>
								<td>OSTRAVA</td>
								<td>OSTRAVA-MĚSTO</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1589">Edit</a></td>
							</tr>
							<tr>
								<td>390014</td>
								<td>E</td>
								<td>MAGISTRA</td>
								<td>LÉKÁRNA</td>
								<td>ČSLA 250</td>
								<td>PLANÁ NAD LUŽNICÍ</td>
								<td>TÁBOR</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1662">Edit</a></td>
							</tr>
							<tr>
								<td>440103</td>
								<td>C</td>
								<td>PharmaPoint</td>
								<td>LÉKÁRNA</td>
								<td>ČECHOVA 44</td>
								<td>PLZEŇ</td>
								<td>PLZEŇ-MĚSTO</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><a href="pharmacy-edit.php?id=1696">Edit</a></td>
							</tr> 
						</tbody>
					</table> 

				</div>



				</section>
			</main>
		</div>		
		<!--<script>
			$(function() {
				$(".table2excel").table2excel({
					exclude: ".noExl",
					name: "Excel Document Name",
					filename: "myFileName",
					fileext: ".xls",
					exclude_img: true,
					exclude_links: true,
					exclude_inputs: true
				});
			});
		</script>-->
		
		<?php require("block-footer.php"); ?>
		<?php //ob_end_flush(); ?>

		<script src="http://requirejs.org/docs/release/2.3.2/minified/require.js"></script>
		<script>
		    require(['excellentexport'], function(ee) {
		        window.ExcellentExport = ee;
		    });
		</script>

	</div>
</body>
</html>