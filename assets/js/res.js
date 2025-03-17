$(document).ready(function() {
$province = $("select[name='province']");
$district = $("select[name='district']");
$sector = $("select[name='sector']");

$province.change(function(){
						 if($(this).val() == "Northern Province"){
							  $("select[name='sector'] option").remove();
							  $("select[name='district'] option").remove();
							  $("<option>----Select District----</option>").appendTo($district);
							  $("<option>Burera</option>").appendTo($district);
							  $("<option>Gakenke</option>").appendTo($district);
							  $("<option>Gicumbi</option>").appendTo($district);
                              $("<option>Musanze</option>").appendTo($district);
                              
							  $("<option>Rulindo</option>").appendTo($district);
							
							  
							  }							   
							  if($(this).val() == "Western Province"){
							  $("select[name='sector'] option").remove();
							  $("select[name='district'] option").remove();
							  $("<option>----Select District----</option>").appendTo($district);
                              $("<option>Ngororero</option>").appendTo($district);
                              $("<option>Nyabihu</option>").appendTo($district);
							  $("<option>Rubavu</option>").appendTo($district);
							  $("<option>Rutsiro</option>").appendTo($district);
							  $("<option>Nyamasheke</option>").appendTo($district);
							  $("<option>Rusizi</option>").appendTo($district);
							  $("<option>Karongi</option>").appendTo($district);
							  }							  
							   if($(this).val() == "Kigali City"){
							  $("select[name='sector'] option").remove();
							  $("select[name='district'] option").remove();
							  $("<option>----Select District----</option>").appendTo($district);
                              $("<option>Gasabo</option>").appendTo($district);
                              $("<option>Kicukiro</option>").appendTo($district);
							  $("<option>Nyarugenge</option>").appendTo($district);
							  }
							   if($(this).val() == "Eastern Province"){
							  $("select[name='sector'] option").remove();
							  $("select[name='district'] option").remove();
							  $("<option>----Select District----</option>").appendTo($district);                            
                              $("<option>Bugesera</option>").appendTo($district);							  
							  $("<option>Gatsibo</option>").appendTo($district);
							   $("<option>Kayonza</option>").appendTo($district);
							  $("<option>Kirehe</option>").appendTo($district);
							   $("<option>Ngoma</option>").appendTo($district);
							  $("<option>Nyagatare</option>").appendTo($district);
							  $("<option>Rwamagana</option>").appendTo($district);						 
							 
							  }
							  
							   if($(this).val() == "Southern Province"){
							  $("select[name='sector'] option").remove();
							  $("select[name='district'] option").remove();
							  $("<option>----Select District----</option>").appendTo($district);
                              $("<option>Kamonyi</option>").appendTo($district);
                              $("<option>Muhanga</option>").appendTo($district);
							  $("<option>Ruhango</option>").appendTo($district);
							  $("<option>Nyanza</option>").appendTo($district);
							  $("<option>Huye</option>").appendTo($district);
							  $("<option>Gisagara</option>").appendTo($district);
							  $("<option>Nyamagabe</option>").appendTo($district);
							  $("<option>Nyaruguru</option>").appendTo($district);
							  
							  }
							  
						   });
$district.change(function(){
							//code for eastern
							if($(this).val() == "Kirehe"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Gahara</option>").appendTo($sector);
                              $("<option>Gatore</option>").appendTo($sector);
							  $("<option>Kigarama</option>").appendTo($sector);
							  $("<option>Kigina</option>").appendTo($sector);
							  $("<option>Kirehe</option>").appendTo($sector);
							  $("<option>Mahama</option>").appendTo($sector);
							  $("<option>Mpanga</option>").appendTo($sector);
							  $("<option>Musaza</option>").appendTo($sector);
							  $("<option>Mushikiri</option>").appendTo($sector);
							  $("<option>Nasho</option>").appendTo($sector);
							  $("<option>Nyamugari</option>").appendTo($sector);
							  $("<option>Nyarubuye</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Ngoma"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Gashanda</option>").appendTo($sector);
                              $("<option>Jarama</option>").appendTo($sector);
                              $("<option>Karembo</option>").appendTo($sector);
							  $("<option>Kazo</option>").appendTo($sector);
							  $("<option>Kibungo</option>").appendTo($sector);
							  $("<option>Mugesera</option>").appendTo($sector);
							  $("<option>Murama</option>").appendTo($sector);
							  $("<option>Mutenderi</option>").appendTo($sector);
							  $("<option>Remera</option>").appendTo($sector);
							  $("<option>Rukira</option>").appendTo($sector);
							  $("<option>Rukumberi</option>").appendTo($sector);
							  $("<option>Rurenge</option>").appendTo($sector);
							  $("<option>Sake</option>").appendTo($sector);
							  $("<option>Zaza</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Bugesera"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Gashora</option>").appendTo($sector);
                              $("<option>Juru</option>").appendTo($sector);
							  $("<option>Kamabuye</option>").appendTo($sector);
							  $("<option>Mareba</option>").appendTo($sector);
							  $("<option>Mayange</option>").appendTo($sector);
							  $("<option>Musenyi</option>").appendTo($sector);
							  $("<option>Mwogo</option>").appendTo($sector);
							  $("<option>Ngeruka</option>").appendTo($sector);
							  $("<option>Ntarama</option>").appendTo($sector);
							  $("<option>Nyamata</option>").appendTo($sector);
							  $("<option>Nyarugenge</option>").appendTo($sector);
							  $("<option>Rilima</option>").appendTo($sector);
							  $("<option>Ruhuha</option>").appendTo($sector);
							  $("<option>Rweru</option>").appendTo($sector);
							  $("<option>Shyara</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Kayonza"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Gahini</option>").appendTo($sector);
                              $("<option>Kabare</option>").appendTo($sector);
							  $("<option>Kabarondo</option>").appendTo($sector);
							  $("<option>Mukarange</option>").appendTo($sector);
							  $("<option>Murama</option>").appendTo($sector);
							  $("<option>Murundi</option>").appendTo($sector);
							  $("<option>Mwiri</option>").appendTo($sector);
							  $("<option>Ndego</option>").appendTo($sector);
							  $("<option>Nyamirama</option>").appendTo($sector);
							  $("<option>Rukara</option>").appendTo($sector);
							  $("<option>Ruramira</option>").appendTo($sector);
							  $("<option>Rwinkwavu</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Rwamagana"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Fumbwe</option>").appendTo($sector);
                              $("<option>Gahengeri</option>").appendTo($sector);
							  $("<option>Gishali</option>").appendTo($sector);
							  $("<option>Karenge</option>").appendTo($sector);
							  $("<option>Kigabiro</option>").appendTo($sector);
							  $("<option>Muhazi</option>").appendTo($sector);
							  $("<option>Munyaga</option>").appendTo($sector);
							  $("<option>Munyiginya</option>").appendTo($sector);
							  $("<option>Musha</option>").appendTo($sector);
							  $("<option>Muyumbu</option>").appendTo($sector);
							  $("<option>Mwulire</option>").appendTo($sector);
							  $("<option>Nyakaliro</option>").appendTo($sector);
							  $("<option>Nzige</option>").appendTo($sector);
							  $("<option>Rubona</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Gatsibo"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Gasange</option>").appendTo($sector);
                              $("<option>Gatsibo</option>").appendTo($sector);
							  $("<option>Gitoki</option>").appendTo($sector);
							  $("<option>Kabarore</option>").appendTo($sector);
							  $("<option>Kageyo</option>").appendTo($sector);
							  $("<option>Kiramuruzi</option>").appendTo($sector);
							  $("<option>Kiziguro</option>").appendTo($sector);
							  $("<option>Muhura</option>").appendTo($sector);
							  $("<option>Murambi</option>").appendTo($sector);
							  $("<option>Ngarama</option>").appendTo($sector);
							  $("<option>Nyagihanga</option>").appendTo($sector);
							  $("<option>Remera</option>").appendTo($sector);
							  $("<option>Rugarama</option>").appendTo($sector);
							  $("<option>Rwimbogo</option>").appendTo($sector);
							  }
							  
							   if($(this).val() == "Nyagatare"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Gatunda</option>").appendTo($sector);
                              $("<option>Karama</option>").appendTo($sector);
							  $("<option>Karangazi</option>").appendTo($sector);
							  $("<option>Katabagemu</option>").appendTo($sector);
							  $("<option>Kiyombe</option>").appendTo($sector);
							  $("<option>Matimba</option>").appendTo($sector);
							  $("<option>Mimuri</option>").appendTo($sector);
							  $("<option>Mukama</option>").appendTo($sector);
							  $("<option>Musheri</option>").appendTo($sector);
							  $("<option>Nyagatare</option>").appendTo($sector);
							  $("<option>Rukomo</option>").appendTo($sector);
							  $("<option>Rwempasha</option>").appendTo($sector);
							  $("<option>Rwimiyaga</option>").appendTo($sector);
							  $("<option>Tabagwe</option>").appendTo($sector);
							  }
							  //close for eastern
							 // code for northern
							 if($(this).val() == "Burera"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Bungwe</option>").appendTo($sector);
                              $("<option>Butaro</option>").appendTo($sector);
							  $("<option>Cyanika</option>").appendTo($sector);
							  $("<option>Cyeru</option>").appendTo($sector);
							  $("<option>Gahunga</option>").appendTo($sector);
							  $("<option>Gatebe</option>").appendTo($sector);
							  $("<option>Gitovu</option>").appendTo($sector);
							  $("<option>Kagogo</option>").appendTo($sector);
							  $("<option>Kinoni</option>").appendTo($sector);
							  $("<option>Kinyababa</option>").appendTo($sector);
							  $("<option>Kivuye</option>").appendTo($sector);
							  $("<option>Nemba</option>").appendTo($sector);
							  $("<option>Rugarama</option>").appendTo($sector);
							  $("<option>Rugengabari</option>").appendTo($sector);
							  $("<option>Ruhunde</option>").appendTo($sector);
							  $("<option>Rusarabuye</option>").appendTo($sector);
							  $("<option>Rwerere</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Musanze"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Busogo</option>").appendTo($sector);
                              $("<option>Cyuve</option>").appendTo($sector);
                              $("<option>Gacaca</option>").appendTo($sector);
							  $("<option>Gashaki</option>").appendTo($sector);
							  $("<option>Gataraga</option>").appendTo($sector);
							  $("<option>Kimonyi</option>").appendTo($sector);
							  $("<option>Kinigi</option>").appendTo($sector);
							  $("<option>Muhoza</option>").appendTo($sector);
							  $("<option>Muko</option>").appendTo($sector);
							  $("<option>Musanze</option>").appendTo($sector);
							  $("<option>Nkotsi</option>").appendTo($sector);
							  $("<option>Nyange</option>").appendTo($sector);
							  $("<option>Remera</option>").appendTo($sector);
							  $("<option>Rwaza</option>").appendTo($sector);
							  $("<option>Shingiro</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Gakenke"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Busengo</option>").appendTo($sector);
                              $("<option>Coko</option>").appendTo($sector);
							  $("<option>Cyabingo</option>").appendTo($sector);
							  $("<option>Gakenke</option>").appendTo($sector);
							  $("<option>Gashenyi</option>").appendTo($sector);
							  $("<option>Janja</option>").appendTo($sector);
							  $("<option>Kamubuga</option>").appendTo($sector);
							  $("<option>Karambo</option>").appendTo($sector);
							  $("<option>Kivuruga</option>").appendTo($sector);
							  $("<option>Mataba</option>").appendTo($sector);
							  $("<option>Minazi</option>").appendTo($sector);
							  $("<option>Mugunga</option>").appendTo($sector);
							  $("<option>Muhondo</option>").appendTo($sector);
							  $("<option>Muyongwe</option>").appendTo($sector);
							  $("<option>Muzo</option>").appendTo($sector);
							  $("<option>Nemba</option>").appendTo($sector);
							  $("<option>Ruli</option>").appendTo($sector);
							  $("<option>Rusasa</option>").appendTo($sector);
							  $("<option>Rushashi</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Gicumbi"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Bukure</option>").appendTo($sector);
                              $("<option>Bwisige</option>").appendTo($sector);
							  $("<option>Byumba</option>").appendTo($sector);
							  $("<option>Cyumba</option>").appendTo($sector);
							  $("<option>Giti</option>").appendTo($sector);
							  $("<option>Kageyo</option>").appendTo($sector);
							  $("<option>Kaniga</option>").appendTo($sector);
							  $("<option>Manyagiro</option>").appendTo($sector);
							  $("<option>Miyove</option>").appendTo($sector);
							  $("<option>Mukarange</option>").appendTo($sector);
							  $("<option>Muko</option>").appendTo($sector);
							  $("<option>Mutete</option>").appendTo($sector);
							  $("<option>Nyamiyaga</option>").appendTo($sector);
							  $("<option>Nyankenke</option>").appendTo($sector);
							  $("<option>Rubaya</option>").appendTo($sector);
							  $("<option>Rukomo</option>").appendTo($sector);
							  $("<option>Rushaki</option>").appendTo($sector);
							  $("<option>Rutare</option>").appendTo($sector);
							  $("<option>Ruvune</option>").appendTo($sector);
							  $("<option>Rwamiko</option>").appendTo($sector);
							  $("<option>Shangasha</option>").appendTo($sector);
							  }
							  if($(this).val() == "Rulindo"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Base</option>").appendTo($sector);
                              $("<option>Burega</option>").appendTo($sector);
							  $("<option>Bushoki</option>").appendTo($sector);
							  $("<option>Buyoga</option>").appendTo($sector);
							  $("<option>Cyinzuzi</option>").appendTo($sector);
							  $("<option>Cyungo</option>").appendTo($sector);
							  $("<option>-Kinihira</option>").appendTo($sector);
							  $("<option>Kisaro</option>").appendTo($sector);
							  $("<option>Masoro</option>").appendTo($sector);
							  $("<option>Mbogo</option>").appendTo($sector);
							  $("<option>Murambi</option>").appendTo($sector);
							  $("<option>Ngoma</option>").appendTo($sector);
							  $("<option>Ntarabana</option>").appendTo($sector);
							  $("<option>Rukozo</option>").appendTo($sector);
							  $("<option>Rusiga</option>").appendTo($sector);
							  $("<option>Shyorongi</option>").appendTo($sector);
							  $("<option>Tumba</option>").appendTo($sector);
							  }					  
							 
							  //close northern
							   // code for kigali
							 if($(this).val() == "Gasabo"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Bumbogo</option>").appendTo($sector);
                              $("<option>Gatsata</option>").appendTo($sector);
							  $("<option>Gikomero</option>").appendTo($sector);
							  $("<option>Gisozi</option>").appendTo($sector);
							  $("<option>Jabana</option>").appendTo($sector);
							  $("<option>Jali</option>").appendTo($sector);
							  $("<option>Kacyiru</option>").appendTo($sector);
							  $("<option>Kimihurura</option>").appendTo($sector);
							  $("<option>Kimiromko</option>").appendTo($sector);
							  $("<option>Kinyinya</option>").appendTo($sector);
							  $("<option>Ndera</option>").appendTo($sector);
							  $("<option>Nduba</option>").appendTo($sector);
							  $("<option>Remera</option>").appendTo($sector);
							  $("<option>Rusororo</option>").appendTo($sector);
							  $("<option>Rutunga</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Kicukiro"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Gahanga</option>").appendTo($sector);
                              $("<option>Gatenga</option>").appendTo($sector);
                              $("<option>Gikondo</option>").appendTo($sector);
							  $("<option>Kagarama</option>").appendTo($sector);
							  $("<option>Kanombe</option>").appendTo($sector);
							  $("<option>Kicukiro</option>").appendTo($sector);
							  $("<option>Kigarama</option>").appendTo($sector);
							  $("<option>Masaka</option>").appendTo($sector);
							  $("<option>Niboye</option>").appendTo($sector);
							  $("<option>Nyarugunga</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Nyarugenge"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Gitega</option>").appendTo($sector);
                              $("<option>Gitega</option>").appendTo($sector);
							  $("<option>Kigali</option>").appendTo($sector);
							  $("<option>Kigali</option>").appendTo($sector);
							  $("<option>Mageragere</option>").appendTo($sector);
							  $("<option>Muhima</option>").appendTo($sector);
							  $("<option>Nyakabanda</option>").appendTo($sector);
							  $("<option>Nyamirambo</option>").appendTo($sector);
							  $("<option>Nyarugenge</option>").appendTo($sector);
							  $("<option>Rwezamenyo</option>").appendTo($sector);
							  }
							  //close Kigali
							  
							  //code for western
							if($(this).val() == "Nyabihu"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Bigogwe</option>").appendTo($sector);
                              $("<option>Jenda</option>").appendTo($sector);
							  $("<option>Jomba</option>").appendTo($sector);
							  $("<option>Kabatwa</option>").appendTo($sector);
							  $("<option>Karago</option>").appendTo($sector);
							  $("<option>Kintobo</option>").appendTo($sector);
							  $("<option>Mukamira</option>").appendTo($sector);
							  $("<option>Muringa</option>").appendTo($sector);
							  $("<option>Rambura</option>").appendTo($sector);
							  $("<option>Rugera</option>").appendTo($sector);
							  $("<option>Rurembo</option>").appendTo($sector);
							  $("<option>Shyira</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Rubavu"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Bugeshi</option>").appendTo($sector);
                              $("<option>Busasamana</option>").appendTo($sector);
                              $("<option>Cyanzarwe</option>").appendTo($sector);
							  $("<option>Gisenyi</option>").appendTo($sector);
							  $("<option>Kanama</option>").appendTo($sector);
							  $("<option>Kanzenze</option>").appendTo($sector);
							  $("<option>Murama</option>").appendTo($sector);
							  $("<option>Mudende</option>").appendTo($sector);
							  $("<option>Nyakiriba</option>").appendTo($sector);
							  $("<option>Nyamyumba</option>").appendTo($sector);
							  $("<option>Nyundo</option>").appendTo($sector);
							  $("<option>Rubavu</option>").appendTo($sector);
							  $("<option>Rugerero</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Ngororero"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Bwira</option>").appendTo($sector);
                              $("<option>Gatumba</option>").appendTo($sector);
							  $("<option>Hindiro</option>").appendTo($sector);
							  $("<option>Kabaya</option>").appendTo($sector);
							  $("<option>Kageyo</option>").appendTo($sector);
							  $("<option>Kavumu</option>").appendTo($sector);
							  $("<option>Matyazo</option>").appendTo($sector);
							  $("<option>Muhanda</option>").appendTo($sector);
							  $("<option>Muhororo</option>").appendTo($sector);
							  $("<option>Ndaro</option>").appendTo($sector);
							  $("<option>Ngororero</option>").appendTo($sector);
							  $("<option>Nyange</option>").appendTo($sector);
							  $("<option>Sovu</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Karongi"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Bwishyura</option>").appendTo($sector);
                              $("<option>Gashari</option>").appendTo($sector);
							  $("<option>Gishyita</option>").appendTo($sector);
							  $("<option>Gitesi</option>").appendTo($sector);
							  $("<option>Mubuga</option>").appendTo($sector);
							  $("<option>Murambi</option>").appendTo($sector);
							  $("<option>Murundi</option>").appendTo($sector);
							  $("<option>Mutuntu</option>").appendTo($sector);
							  $("<option>Rubengera</option>").appendTo($sector);
							  $("<option>Rugabano</option>").appendTo($sector);
							  $("<option>Ruganda</option>").appendTo($sector);
							  $("<option>Rwankuba</option>").appendTo($sector);
							  $("<option>Twumba</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Rutsiro"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Boneza</option>").appendTo($sector);
                              $("<option>Gihango</option>").appendTo($sector);
							  $("<option>Kigeyo</option>").appendTo($sector);
							  $("<option>Kivumu</option>").appendTo($sector);
							  $("<option>Manihira</option>").appendTo($sector);
							  $("<option>Mukura</option>").appendTo($sector);
							  $("<option>Murunda</option>").appendTo($sector);
							  $("<option>Musasa</option>").appendTo($sector);
							  $("<option>Mushonyi</option>").appendTo($sector);
							  $("<option>Mushubati</option>").appendTo($sector);
							  $("<option>Nyabirasi</option>").appendTo($sector);
							  $("<option>Ruhango</option>").appendTo($sector);
							  $("<option>Rusebeya</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Nyamasheke"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Bushekeri</option>").appendTo($sector);
                              $("<option>Bushenge</option>").appendTo($sector);
							  $("<option>Cyato</option>").appendTo($sector);
							  $("<option>Gihombo</option>").appendTo($sector);
							  $("<option>Kagano</option>").appendTo($sector);
							  $("<option>Kanjongo</option>").appendTo($sector);
							  $("<option>Karambi</option>").appendTo($sector);
							  $("<option>Karengera</option>").appendTo($sector);
							  $("<option>Kirimbi</option>").appendTo($sector);
							  $("<option>Macuba</option>").appendTo($sector);
							  $("<option>Mahembe</option>").appendTo($sector);
							  $("<option>Nyabitekeri</option>").appendTo($sector);
							  $("<option>Rangiro</option>").appendTo($sector);
							  $("<option>Ruharambuga</option>").appendTo($sector);
							  $("<option>Shangi</option>").appendTo($sector);
							  }
							  
							   if($(this).val() == "Rusizi"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Bugarama</option>").appendTo($sector);
                              $("<option>Butare</option>").appendTo($sector);
							  $("<option>Bweyeye</option>").appendTo($sector);
							  $("<option>Gashonga</option>").appendTo($sector);
							  $("<option>Giheke</option>").appendTo($sector);
							  $("<option>Gihundwe</option>").appendTo($sector);
							  $("<option>Gikundamvura</option>").appendTo($sector);
							  $("<option>Gitambi</option>").appendTo($sector);
							  $("<option>Kamembe</option>").appendTo($sector);
							  $("<option>Muganza</option>").appendTo($sector);
							  $("<option>Mururu</option>").appendTo($sector);
							  $("<option>Nkanka</option>").appendTo($sector);
							  $("<option>Nkombo</option>").appendTo($sector);
							  $("<option>Nkungu</option>").appendTo($sector);
							  $("<option>Nyakabuye</option>").appendTo($sector);
							  $("<option>Nzahaha</option>").appendTo($sector);
							  $("<option>Rwimbogo</option>").appendTo($sector);
							  }
							  //close for western
							//code for Southern
							if($(this).val() == "Kamonyi"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Gacurabwenge</option>").appendTo($sector);
                              $("<option>Karama</option>").appendTo($sector);
							  $("<option>Kayenzi</option>").appendTo($sector);
							  $("<option>Kayumbu</option>").appendTo($sector);
							  $("<option>Mugina</option>").appendTo($sector);
							  $("<option>Musambira</option>").appendTo($sector);
							  $("<option>Ngamba</option>").appendTo($sector);
							  $("<option>Nyamiyaga</option>").appendTo($sector);
							  $("<option>Nyarubaka</option>").appendTo($sector);
							  $("<option>Rugarika</option>").appendTo($sector);
							  $("<option>Rukoma</option>").appendTo($sector);
							  $("<option>Runda</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Muhanga"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Cyeza</option>").appendTo($sector);
                              $("<option>Kabacuzi</option>").appendTo($sector);
                              $("<option>Kiyumba</option>").appendTo($sector);
							  $("<option>Muhanga</option>").appendTo($sector);
							  $("<option>Mushishiro</option>").appendTo($sector);
							  $("<option>Nyabinoni</option>").appendTo($sector);
							  $("<option>Nyamabuye</option>").appendTo($sector);
							  $("<option>Nyarusange</option>").appendTo($sector);
							  $("<option>Rongi</option>").appendTo($sector);
							  $("<option>Rugendabari</option>").appendTo($sector);
							  $("<option>Shyogwe</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Ruhango"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Bweramana</option>").appendTo($sector);
                              $("<option>Byimana</option>").appendTo($sector);
							  $("<option>Kabagali</option>").appendTo($sector);
							  $("<option>Kinazi</option>").appendTo($sector);
							  $("<option>Kinihira</option>").appendTo($sector);
							  $("<option>Mbuye</option>").appendTo($sector);
							  $("<option>Mwendo</option>").appendTo($sector);
							  $("<option>Ntongwe</option>").appendTo($sector);
							  $("<option>Ruhango</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Nyanza"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Busasamana</option>").appendTo($sector);
                              $("<option>Busoro</option>").appendTo($sector);
							  $("<option>Cyabakamyi</option>").appendTo($sector);
							  $("<option>Kibirizi</option>").appendTo($sector);
							  $("<option>Kigoma</option>").appendTo($sector);
							  $("<option>Mukingo</option>").appendTo($sector);
							  $("<option>Muyira</option>").appendTo($sector);
							  $("<option>Ntyazo</option>").appendTo($sector);
							  $("<option>Nyagisozi</option>").appendTo($sector);
							  $("<option>Rwabicuma</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Huye"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Gishamvu</option>").appendTo($sector);
                              $("<option>Huye</option>").appendTo($sector);
							  $("<option>Karama</option>").appendTo($sector);
							  $("<option>Kigoma</option>").appendTo($sector);
							  $("<option>Kinazi</option>").appendTo($sector);
							  $("<option>Maraba</option>").appendTo($sector);
							  $("<option>Mbazi</option>").appendTo($sector);
							  $("<option>Mukura</option>").appendTo($sector);
							  $("<option>Ngoma</option>").appendTo($sector);
							  $("<option>Ruhashya</option>").appendTo($sector);
							  $("<option>Rusatira</option>").appendTo($sector);
							  $("<option>Simbi</option>").appendTo($sector);
							  $("<option>Tumba</option>").appendTo($sector);
							  }
							  
							  if($(this).val() == "Gisagara"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Gikonko</option>").appendTo($sector);
                              $("<option>Gishubi</option>").appendTo($sector);
							  $("<option>Kansi</option>").appendTo($sector);
							  $("<option>Kibirizi</option>").appendTo($sector);
							  $("<option>Kigembe</option>").appendTo($sector);
							  $("<option>Mamba</option>").appendTo($sector);
							  $("<option>Muganza</option>").appendTo($sector);
							  $("<option>Mugombwa</option>").appendTo($sector);
							  $("<option>Mukingo</option>").appendTo($sector);
							  $("<option>Musha</option>").appendTo($sector);
							  $("<option>Ndora</option>").appendTo($sector);
							  $("<option>Nyanza</option>").appendTo($sector);
							  $("<option>Save</option>").appendTo($sector);
							  }
							  
							   if($(this).val() == "Nyaruguru"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Busanze</option>").appendTo($sector);
                              $("<option>Cyahinda</option>").appendTo($sector);
							  $("<option>Kibeho</option>").appendTo($sector);
							  $("<option>Kivu</option>").appendTo($sector);
							  $("<option>Mata</option>").appendTo($sector);
							  $("<option>Muganza</option>").appendTo($sector);
							  $("<option>Munini</option>").appendTo($sector);
							  $("<option>Ngera</option>").appendTo($sector);
							  $("<option>Ngoma</option>").appendTo($sector);
							  $("<option>Nyabimata</option>").appendTo($sector);
							  $("<option>Nyagisozi</option>").appendTo($sector);
							  $("<option>Ruheru</option>").appendTo($sector);
							  $("<option>Ruramba</option>").appendTo($sector);
							  $("<option>Rusenge</option>").appendTo($sector);
							  }
							  
							   if($(this).val() == "Nyamagabe"){
							  $("select[name='sector'] option").remove();
							  $("<option>----Select Sector----</option>").appendTo($sector);
                              $("<option>Buruhukiro</option>").appendTo($sector);
                              $("<option>Cyanika</option>").appendTo($sector);
							  $("<option>Gasaka</option>").appendTo($sector);
							  $("<option>Gatare</option>").appendTo($sector);
							  $("<option>Kaduha</option>").appendTo($sector);
							  $("<option>Kamegeri</option>").appendTo($sector);
							  $("<option>Kibirizi</option>").appendTo($sector);
							  $("<option>Kibumbwe</option>").appendTo($sector);
							  $("<option>Kitabi</option>").appendTo($sector);
							  $("<option>Mbazi</option>").appendTo($sector);
							  $("<option>Mugano</option>").appendTo($sector);
							  $("<option>Musange</option>").appendTo($sector);
							  $("<option>Musebeya</option>").appendTo($sector);
							  $("<option>Mushubi</option>").appendTo($sector);
							  $("<option>Nkomane</option>").appendTo($sector);
							  $("<option>Tare</option>").appendTo($sector);
							  $("<option>Uwinkingi</option>").appendTo($sector);
							  }
							  //close for Sothern Province
						});

$("input[name='antivirus']").click(function(){
										 if($(this).is(":checked")){
											 $("#amount").val("2500 frw");
											 }
											 else if($(this).is(":not(:checked)")){
												 $("#amount").val("");
												 }
										 });
$("input[name='laptopMaintenance']").click(function(){
										 if($(this).is(":checked")){
											 $("#amount").val("10000 frw");
											 }
											 else if($(this).is(":not(:checked)")){
												 $("#amount").val("");
												 }
										 });
$("input[name='password']").click(function(){
										 if($(this).is(":checked")){
											 $("#amount").val("500 frw");
											 }
											 else if($(this).is(":not(:checked)")){
												 $("#amount").val("");
												 }
										 });


});