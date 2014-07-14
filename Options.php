<?php
if (isset($_POST['submit'])) {

  $descsite=get_option( 'desc_site');

if ( ! function_exists( 'wp_handle_upload' ) ) require_once( ABSPATH . 'wp-admin/includes/file.php' );
$uploadedfile = $_FILES['logo'];
$titledesc=$_POST['titledesc'];
$decstxt=$_POST['decstxt'];
$upload_overrides = array( 'test_form' => false );
$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
if (!empty($uploadedfile)) {
if (!($movefile["error"]=="No file was uploaded.")) {
$urlfile=$movefile ["url"];
 global $wpdb;
var_dump($movefile) ;
echo "<br>";
var_dump($uploadedfile);
$descsite[0]=$urlfile;
echo $descsite[0];
   $t=update_option( 'desc_site',$descsite, '', 'yes' );
   var_dump($t);

}

}

if($titledesc)
{
  $descsite[1]=$titledesc;
  echo $descsite[1];
     $t=update_option( 'desc_site',$descsite, '', 'yes' );

}
if($decstxt)
{
  echo $descsite[2];
  $descsite[2]=$decstxt;
     $t=update_option( 'desc_site',$descsite, '', 'yes' );
}
}

/*********************************************************************************************/
/*************************************                     ***************************************/
/***********************************************************************************************/

if (isset($_POST['submit2'])) {

      $tabimg=get_option('imgservice');
      $tabtitleserv=get_option('titleservice');
      $tabdescserv=get_option('descservice');

      $tabsize=count(get_option('imgservice'));
      $indice=intval($_POST['info']);

      if ( ! function_exists( 'wp_handle_upload' ) ) require_once( ABSPATH . 'wp-admin/includes/file.php' );
      $uploadedfile = $_FILES['imgnuber'];
      $upload_overrides = array( 'test_form' => false );
      $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );

if($indice>=$tabsize)
{
if (!empty($uploadedfile)) {
if ( !($movefile["error"]=="No file was uploaded.") ) {
$urlfile=$movefile ["url"];
 global $wpdb;
$p=array_push($tabimg,$urlfile);
var_dump($p);
echo "<br>";
$op5=update_option( 'imgservice', $tabimg,'','' );
   var_dump($op5);
echo "<br>";
}
}
  if ($_POST['titleservice']) {
  $p2=array_push($tabtitleserv,$_POST['titleservice']);
  var_dump($p2);
  echo "<br>";
$op6=update_option( 'titleservice', $tabtitleserv,'','' );
var_dump($op6);
echo "<br>";

  }
    if ($_POST['descservice']) {
$p3=array_push($tabdescserv,$_POST['descservice']);
var_dump($p3);
echo "<br>";
$op9=update_option( 'descservice',  $tabdescserv,'','' );

var_dump($op9);
echo "<br>";
  }


}           
else
{

if (!empty($uploadedfile)) {
if ( !($movefile["error"]=="No file was uploaded.") ) {
$urlfile=$movefile ["url"];
 global $wpdb;
 $tabimg[$indice]=$urlfile;
echo "<br>";
$op5=update_option( 'imgservice', $tabimg,'','' );
   var_dump($op5);
echo "<br>";
}
}
  if ($_POST['titleservice']) {
 $tabtitleserv[$indice]=$_POST['titleservice'];
  echo "<br>";
$op6=update_option( 'titleservice', $tabtitleserv,'','' );
var_dump($op6);
echo "<br>";

  }
    if ($_POST['descservice']) {

$tabdescserv[$indice]=$_POST['descservice'];
echo "<br>";
$op9=update_option( 'descservice',  $tabdescserv,'','' );

var_dump($op9);
echo "<br>";
  }
}

}


if (isset($_POST['supp'])) {


      $tabimg=get_option('imgservice');
      $tabtitleserv=get_option('titleservice');
      $tabdescserv=get_option('descservice');
      $indice=intval($_POST['info']);
     

unset($tabimg[$indice]);
unset($tabtitleserv[$indice]);
unset($tabdescserv[$indice]);

$tabimg=array_values($tabimg);
$tabtitleserv=array_values($tabtitleserv);
$tabdescserv=array_values($tabdescserv);

echo $tabimg[$indice];
echo $tabtitleserv[$indice];
echo $tabdescserv[$indice];
$op9=update_option( 'imgservice',  $tabimg,'','' );
$op91=update_option( 'titleservice',  $tabtitleserv,'','' );
$op911=update_option( 'descservice',  $tabdescserv,'','' );




}
/******************************************************************/
/************************         ***********************************/
/**********************************************************************/
/************************************************************************/

if (isset($_POST['submitteam'])) {

      $tabimg=get_option('imgteam');
      echo  $tabimg;
      var_dump($tabimg);
      echo "<br>";
      $tabtitteam=get_option('nameteam');
      echo  $tabtitteam;
      var_dump($tabtitteam);
      echo "<br>";
      $tabdescteam=get_option('descteam');
      echo  $tabdescteam;
      var_dump($tabdescteam);
      echo "<br>";

      $tabsize=count(get_option('imgteam'));
      echo  $tabsize;
      echo "<br>";
      $indice=intval($_POST['infoteam']);
      echo  $indice;
      echo "<br>";

      if ( ! function_exists( 'wp_handle_upload' ) ) require_once( ABSPATH . 'wp-admin/includes/file.php' );
      $uploadedfile = $_FILES['imgmember'];
      $upload_overrides = array( 'test_form' => false );
      $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );

 echo  $movefile; var_dump($movefile);
      echo "<br>";
if($indice>=$tabsize)
{
  var_dump($indice>=$tabsize);
      echo "<br>";
if (!empty($uploadedfile)) {
    var_dump($uploadedfile);
          echo "<br>";

      var_dump($movefile["error"]);
            echo "<br>";
$urlfile=$movefile ["url"];
var_dump($urlfile);
            echo "<br>";
 global $wpdb;
$p=array_push($tabimg,$urlfile);
var_dump($p);
echo "<br>";
$op5=update_option( 'imgteam', $tabimg,'','' );
   var_dump($op5);
echo "<br>";

}
  if ($_POST['namemember']) {
  $p2=array_push($tabtitteam,$_POST['namemember']);
  var_dump($p2);
  echo "<br>";
$op6=update_option( 'nameteam', $tabtitteam,'','' );
var_dump($op6);
echo "<br>";

  }
    if ($_POST['descmember']) {
$p3=array_push($tabdescteam,$_POST['descmember']);
var_dump($p3);
echo "<br>";
$op9=update_option( 'descteam',  $tabdescteam,'','' );

var_dump($op9);
echo "<br>";
  }


}           
else
{

if (!empty($uploadedfile)) {
if ( !($movefile["error"]=="No file was uploaded.") ) {
$urlfile=$movefile ["url"];
 global $wpdb;
 $tabimg[$indice]=$urlfile;
echo "<br>";
$op5=update_option( 'imgteam', $tabimg,'','' );
   var_dump($op5);
echo "<br>";
}
}
  if ($_POST['namemember']) {
 $tabtitteam[$indice]=$_POST['namemember'];
  echo "<br>";
$op6=update_option( 'nameteam', $tabtitteam,'','' );
var_dump($op6);
echo "<br>";

  }
    if ($_POST['descmember']) {

$tabdescteam[$indice]=$_POST['descmember'];
echo "<br>";
$op9=update_option( 'descteam',  $tabdescteam,'','' );

var_dump($op9);
echo "<br>";
  }
}

}


if (isset($_POST['suppmember'])) {


      $tabimg=get_option('imgteam');
      $tabtitleserv=get_option('nameteam');
      $tabdescserv=get_option('descteam');
      $indice=intval($_POST['infoteam']);
     

unset($tabimg[$indice]);
unset($tabtitleserv[$indice]);
unset($tabdescserv[$indice]);

$tabimg=array_values($tabimg);
$tabtitleserv=array_values($tabtitleserv);
$tabdescserv=array_values($tabdescserv);

echo $tabimg[$indice];
echo $tabtitleserv[$indice];
echo $tabdescserv[$indice];
$op9=update_option( 'imgteam',  $tabimg,'','' );
$op91=update_option( 'nameteam',  $tabtitleserv,'','' );
$op911=update_option( 'descteam',  $tabdescserv,'','' );




}
?>

<style>
.service
{
height: 514px;
margin: auto;
/* margin-bottom: 100px; */
width: 92%;
}
.team
{
height: 514px;
margin: auto;
/* margin-bottom: 100px; */
width: 92%;
}
#servicehided
{
  display: none;
}
#teamshided
{
  display: none;
}
#options {
width: 20%;
float: left;
margin-top: 7%;
/* margin-left: 8.6%; */
background-color: #C5EFF7;
}
#headeroption
{
  float: right;
width: 70%;
margin-top: 5%;
margin-right: 9.55%;
padding-left: 5px;
height: 700px;
background-color: #C5EFF7;
padding-top: 5%;
padding-bottom: 5%;
padding-left: 5px;
}
#servicesoption
{
  float: right;
width: 70%;
margin-top: 5%;
margin-right: 9.55%;
background-color: #C5EFF7;
padding-top: 5%;
padding-bottom: 5%;
padding-left: 5px;
}
#parallaxoption
{
  float: right;
width: 70%;
margin-top: 5%;
margin-right: 9.55%;
padding-left: 5px;
height: 700px;
background-color: #C5EFF7;
padding-top: 5%;
padding-bottom: 5%;
padding-left: 5px;
}
#teamoption
{
  float: right;
width: 70%;
margin-top: 5%;
margin-right: 9.55%;
background-color: #C5EFF7;
padding-top: 5%;
padding-bottom: 5%;
padding-left: 5px;
}
#parallax1option
{
  float: right;
width: 70%;
margin-top: 5%;
margin-right: 9.55%;
padding-left: 5px;
height: 700px;
background-color: #C5EFF7;
padding-top: 5%;
padding-bottom: 5%;
padding-left: 5px;
}
#blogoption
{
  float: right;
width: 70%;
margin-top: 5%;
margin-right: 9.55%;
padding-left: 5px;
height: 700px;
background-color: #C5EFF7;
padding-top: 5%;
padding-bottom: 5%;
padding-left: 5px;
}
#parallax2option
{
  float: right;
width: 70%;
margin-top: 5%;
margin-right: 9.55%;
padding-left: 5px;
height: 700px;
background-color: #C5EFF7;
padding-top: 5%;
padding-bottom: 5%;
padding-left: 5px;
}
#contactoption
{
  float: right;
width: 70%;
margin-top: 5%;
margin-right: 9.55%;
padding-left: 5px;
height: 700px;
background-color: #C5EFF7;
padding-top: 5%;
padding-bottom: 5%;
padding-left: 5px;
}
#footeroption
{
  float: right;
width: 70%;
margin-top: 5%;
margin-right: 9.55%;
padding-left: 5px;
height: 700px;
background-color: #C5EFF7;
padding-top: 5%;
padding-bottom: 5%;
padding-left: 5px;
}
#options div
{
  height: 50px;
border: 1px #BDC3C7 solid;
margin-bottom: 2px;
text-align: center;
background-color: #89C4F4;
}
#options a
{
text-decoration: none;
color: black;
}
#options div p
{
  vertical-align: middle;
}
.submita
{
  border: none;
height: 36px;
background-color: #89C4F4;

}

</style>





<script>
   jQuery(document).ready(function(){
          jQuery("#headeroption").show();
          jQuery("#servicesoption").hide();
          jQuery("#parallaxoption").hide();
          jQuery("#teamoption").hide();
          jQuery("#parallax1option").hide();
          jQuery("#blogoption").hide();
          jQuery("#parallax2option").hide();
          jQuery("#contactoption").hide();
          jQuery("#footeroption").hide();

     jQuery("#header").click(function()
        {
          jQuery("#headeroption").show();
          jQuery("#servicesoption").hide();
          jQuery("#parallaxoption").hide();
          jQuery("#teamoption").hide();
          jQuery("#parallax1option").hide();
          jQuery("#blogoption").hide();
          jQuery("#parallax2option").hide();
          jQuery("#contactoption").hide();
          jQuery("#footeroption").hide();
        });
      jQuery("#section1").click(function()
        {
          jQuery("#headeroption").hide();
          jQuery("#servicesoption").show();
          jQuery("#parallaxoption").hide();
          jQuery("#teamoption").hide();
          jQuery("#parallax1option").hide();
          jQuery("#blogoption").hide();
          jQuery("#parallax2option").hide();
          jQuery("#contactoption").hide();
          jQuery("#footeroption").hide();
        });
      jQuery("#parallax").click(function()
        {
          jQuery("#headeroption").hide();
          jQuery("#servicesoption").hide();
          jQuery("#parallaxoption").show();
          jQuery("#teamoption").hide();
          jQuery("#parallax1option").hide();
          jQuery("#blogoption").hide();
          jQuery("#parallax2option").hide();
          jQuery("#contactoption").hide();
          jQuery("#footeroption").hide();
        });
      jQuery("#section2").click(function()
        {
          jQuery("#headeroption").hide();
          jQuery("#servicesoption").hide();
          jQuery("#parallaxoption").hide();
          jQuery("#teamoption").show();
          jQuery("#parallax1option").hide();
          jQuery("#blogoption").hide();
          jQuery("#parallax2option").hide();
          jQuery("#contactoption").hide();
          jQuery("#footeroption").hide();
        });
      jQuery("#parallax1").click(function()
        {
          jQuery("#headeroption").hide();
          jQuery("#servicesoption").hide();
          jQuery("#parallaxoption").hide();
          jQuery("#teamoption").hide();
          jQuery("#parallax1option").show();
          jQuery("#blogoption").hide();
          jQuery("#parallax2option").hide();
          jQuery("#contactoption").hide();
          jQuery("#footeroption").hide();
        });
      jQuery("#blog").click(function()
        {
          jQuery("#headeroption").hide();
          jQuery("#servicesoption").hide();
          jQuery("#parallaxoption").hide();
          jQuery("#team").hide();
          jQuery("#parallax1option").hide();
          jQuery("#blogoption").show();
          jQuery("#parallax2option").hide();
          jQuery("#contactoption").hide();
          jQuery("#footeroption").hide();
        });
      jQuery("#parallax2").click(function()
        {
          jQuery("#headeroption").hide();
          jQuery("#servicesoption").hide();
          jQuery("#parallaxoption").hide();
          jQuery("#team").hide();
          jQuery("#parallax1option").hide();
          jQuery("#blogoption").hide();
          jQuery("#parallax2option").show();
          jQuery("#contactoption").hide();
          jQuery("#footeroption").hide();
        });
      jQuery("#contact").click(function()
        {
          jQuery("#headeroption").hide();
          jQuery("#servicesoption").hide();
          jQuery("#parallaxoption").hide();
          jQuery("#team").hide();
          jQuery("#parallax1option").hide();
          jQuery("#blogoption").hide();
          jQuery("#parallax2option").hide();
          jQuery("#contactoption").show();
          jQuery("#footeroption").hide();        });
      jQuery("#footer").click(function()
        {
          jQuery("#headeroption").hide();
          jQuery("#servicesoption").hide();
          jQuery("#parallaxoption").hide();
          jQuery("#teamoption").hide();
          jQuery("#parallax1option").hide();
          jQuery("#blogoption").hide();
          jQuery("#parallax2option").hide();
          jQuery("#contactoption").hide();
          jQuery("#footeroption").show();    
        });      

     var elementCounter = jQuery('#numtot').val();
        jQuery("#add-new-service").click(function() {
            var elementRow = jQuery("#servicehided").clone();
            var newId = "service" + elementCounter;
                
            elementRow.attr("id", newId);
            elementRow.show();
                
            var inputField = jQuery("#numberx", elementRow);
            inputField.attr("value", elementCounter); 
                 
          

            elementCounter++;
                 
            jQuery("#servicess").append(elementRow);
                
            return false;
        });  

     var elementCounter = jQuery('#numtotteam').val();
        jQuery("#add-new-member").click(function() {
            var elementRow = jQuery("#teamshided").clone();
            var newId = "team" + elementCounter;
                
            elementRow.attr("id", newId);
            elementRow.show();
                
            var inputField = jQuery("#memberx", elementRow);
            inputField.attr("value", elementCounter); 
                 
          

            elementCounter++;
                 
            jQuery("#teams").append(elementRow);
                
            return false;
        });       
    });

</script>
<div id="options">
	<a href="#Header"><div id="header"> <p>Header</p> </div></a>
  <a href="#Services"><div id="section1"> <p><?php if (get_option('section1name')) {
   echo get_option('section1name');
  } else{echo "Section 1";} ?></p></div></a>
  <a href="#Parallax"><div id="parallax"> <p>Parallax</p></div></a>
  <a href="#Team"><div id="section2"> <p><?php if (get_option('section2name')) {
    echo get_option('section2name');
  } else{echo "Section 2";}  ?></p></div></a>
  <a href="#Parallax2"><div id="parallax1"> <p>Parallax2</p></div></a>
  <a href="#Blog"><div id="blog"> <p>Blog</p></div></a>
  <a href="#Parallax3"><div id="parallax2"> <p>Parallax3</p></div></a>
  <a href="#Contact"><div id="contact"> <p>Contact</p></div></a>
  <a href="#Footerx"><div id="Footer"> <p>Footer</p></div></a>
</div>
<div id="headeroption" >
<form action="" method="post" enctype="multipart/form-data" name="x">
<table border="0">
<tr>
  <td width="150"> <label for="file">Filename:</label></td>
  <td> <input type="file" name="logo" id="logo"></td>
 <td><?php echo '<img src="'.get_option( 'desc_site')[0].'" style="width:150px;height:150px;">'; ?></td>

  </tr>

<tr>
  <td width="150">  <label for="titledesc">Description Title:</label></td>
<?php    echo '<td><input type="text" name="titledesc" id="titledesc" value="'.get_option( 'desc_site')[1].'" style="width: 434px;"></td>'; ?>
</tr>
<tr>
	<td width="150"><label for="decstxt">Description Texte:</label></td>
	<td> <textarea id="decstxt" rows="7" name="decstxt" style="margin: 2px;width: 434px;height: 199px;"><?php echo get_option( 'desc_site')[2]; ?></textarea></td>
</tr>
<tr>
            <td > </td>

  <td align="right"> <input type="submit" name="submit" value="Enregistrer la modification" id="submit" class="submita"></td>
</tr>
</table>
</form>

</div>




<div id="servicesoption" >
 <form action="#" method="POST" enctype="multipart/form-data">
<table >
<?php 
     echo "<tr>";
     echo "<td align='center'>";
    echo "Name = ".get_option('section1name');
     echo "</td>";
      echo "<td align='center'>";
    echo "Id = ".get_option('section1id');
     echo "</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<td>";
    echo '<input type="text" value=" '.get_option('section1name').'" id="sec1name" name="sec1name">'; 
     echo "</td>";
     echo "<td>";
    echo '<input type="text" value=" '.get_option('section1id').'" id="sec1id" name="sec1id">'; 
     echo "</td>";
       echo "<td>";
    echo '  <input type="submit" name="sec1nameid" value="Enregistrer la modification">'; 
     echo "</td>";
     echo "</tr>";
?>
</table>
</form>
<br>
<form action="#" method="POST" enctype="multipart/form-data">
<?php echo '<input type="text" value=" '.count(get_option('imgservice')).'" id="numtot" hidden>'; ?>
  <input type="submit" name="submit3" id="add-new-service" value="Add New Service ">
</form>

<div id="servicess" style="width: 100%;margin: auto;max-width:794px;">
            <?php 
            $n=count(get_option('imgservice')); 

            $x='imgservice';
            $titleserv='titleservice';
            $descserv='descservice';

for ($i=0; $i < $n; $i++) { 


                 
           
               echo '<div id="service'.$i.'" class="service">';
               echo '<form action="#" method="post" enctype="multipart/form-data">';
               echo ' <table border="0">';
               echo ' <tr>';
               echo ' <td width="150"> <label for="file">Filename:</label></td>';
               echo ' <td> <input type="file" name="imgnuber" id="imgnuber"></td>';
               echo ' <td> '; echo'<img src="'.get_option($x)[$i].'" style="width:150px;height:150px;">'; echo '</td>';
               echo ' </tr>';
               echo ' <tr>';
               echo ' <td width="150"> <label for="file">Titre:</label></td>';
               echo ' <td> <input type="Texte" name="titleservice" id="titleservice"value="'.get_option( $titleserv)[$i].'" style="width: 434px;"maxlength="50"</td>';
               echo ' </tr>';
               echo ' <tr>';
               echo ' <td width="150"> <label for="file">Description:</label></td>';
               echo ' <td> <textarea name="descservice" id="descservice" style="margin: 2px;width: 434px;height: 199px;"maxlength="214">'.get_option( $descserv)[$i].' </textarea></td>';
               echo ' </tr>';
               echo ' <tr>';
               echo ' <td colspan="2"><input type="text" name="info" value="'.$i.'"  hidden><input type="submit" name="supp" value="Supprimer" id="submitservicedesc" class="submita"></td>';
               echo ' <td align="right"> <input type="submit" name="submit2" value="Enregistrer la modification" id="submitservicedesc" class="submita"></td>';
               echo ' </tr>';
               echo ' </table>';
               echo '</form>';
               echo '<font color="#3A539B">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</font>'; 
               echo '</div>';
            
            }


            ?>
           <div id="servicehided" class="service" >
           <form action="#" method="POST" enctype="multipart/form-data">
            <table border="0">
            <tr>
            <td width="150"> <label for="file">Filename:</label></td>
            <td> <input type="file" name="imgnuber" id="imgnuber"></td>
            <td> <?php echo' <img src="" style="width:150px;height:150px;">';?> </td>
            </tr>
            <tr>
            <td width="150"> <label for="file">Titre:</label></td>
            <td> <input type="Texte" name="titleservice" id="titleservice" style="width: 434px;" maxlength="50"></td>
            </tr>          
            <tr>
            <td width="150"> <label for="file">Description :</label></td>
            <td> <textarea name="descservice" id="descservice" style="margin: 2px;width: 434px;height: 199px;" maxlength="214"></textarea></td>
            </tr>
            <tr>
            <td colspan="2"><input type="text"  name="info" id="numberx" hidden></td>
            <td align="right"> <input  type="submit" name="submit2" value="Enregistrer la modification" id="submit" class="submita"></td>
            </tr>
            </table>
           </form>
           </div>
</div>

 </form>

</div>

<div id="parallaxoption" >
  
</div>
<div id="teamoption" >
 <form action="#" method="POST" enctype="multipart/form-data">
<table >
<?php 
     echo "<tr>";
     echo "<td align='center'>";
    echo "Name = ".get_option('section2name');
     echo "</td>";
      echo "<td align='center'>";
    echo "Id = ".get_option('section2id');
     echo "</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<td>";
    echo '<input type="text" value=" '.get_option('section2name').'" id="sec1name" name="sec1name">'; 
     echo "</td>";
     echo "<td>";
    echo '<input type="text" value=" '.get_option('section2id').'" id="sec1id" name="sec1id">'; 
     echo "</td>";
       echo "<td>";
    echo '  <input type="submit" name="sec2nameid" value="Enregistrer la modification">'; 
     echo "</td>";
     echo "</tr>";
?>
</table>
</form>
<br>

  <form action="#" method="POST" enctype="multipart/form-data">
<?php echo '<input type="text" value=" '.count(get_option('imgteam')).'" id="numtotteam" hidden>'; ?>
  <input type="submit" name="submit4" id="add-new-member" value="Add New Member">
</form>

<div id="teams" style="width: 100%;margin: auto;max-width:794px;">
            <?php 
            $n=count(get_option('imgteam')); 

            $x='imgteam';
            $titleserv='nameteam';
            $descserv='descteam';

for ($i=0; $i < $n; $i++) { 


                 
           
               echo '<div id="team'.$i.'" class="team">';
               echo '<form action="#" method="post" enctype="multipart/form-data">';
               echo ' <table border="0">';
               echo ' <tr>';
               echo ' <td width="150"> <label for="file">Filename:</label></td>';
               echo ' <td> <input type="file" name="imgmember" id="imgmember"></td>';
               echo ' <td> '; echo'<img src="'.get_option($x)[$i].'" style="width:150px;height:150px;">'; echo '</td>';
               echo ' </tr>';
               echo ' <tr>';
               echo ' <td width="150"> <label for="file">Titre:</label></td>';
               echo ' <td> <input type="Texte" name="namemember" id="namemember"value="'.get_option( $titleserv)[$i].'" style="width: 434px;"maxlength="50"</td>';
               echo ' </tr>';
               echo ' <tr>';
               echo ' <td width="150"> <label for="file">Description:</label></td>';
               echo ' <td> <textarea name="descmember" id="descmember" style="margin: 2px;width: 434px;height: 199px;"maxlength="214">'.get_option( $descserv)[$i].' </textarea></td>';
               echo ' </tr>';
               echo ' <tr>';
               echo ' <td colspan="2"><input type="text" name="infoteam" value="'.$i.'"  hidden><input type="submit" name="suppmember" value="Supprimer" id="submitservicedesc" class="submita"></td>';
               echo ' <td align="right"> <input type="submit" name="submitteam" value="Enregistrer la modification" id="submitservicedesc" class="submita"></td>';
               echo ' </tr>';
               echo ' </table>';
               echo '</form>';
               echo '<font color="#3A539B">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</font>'; 
               echo '</div>';
            
            }


            ?>
           <div id="teamshided" class="team" >
           <form action="#" method="POST" enctype="multipart/form-data">
            <table border="0">
            <tr>
            <td width="150"> <label for="file">Filename:</label></td>
            <td> <input type="file" name="imgmember" id="imgmember"></td>
            <td> <?php echo' <img src="" style="width:150px;height:150px;">';?> </td>
            </tr>
            <tr>
            <td width="150"> <label for="file">Name :</label></td>
            <td> <input type="Texte" name="namemember" id="namemember" style="width: 434px;" maxlength="50"></td>
            </tr>          
            <tr>
            <td width="150"> <label for="file">Description :</label></td>
            <td> <textarea name="descmember" id="descmember" style="margin: 2px;width: 434px;height: 199px;" maxlength="214"></textarea></td>
            </tr>
            <tr>
            <td colspan="2"><input type="text"  name="infoteam" id="memberx" hidden></td>
            <td align="right"> <input  type="submit" name="submitteam" value="Enregistrer la modification" id="submit" class="submita"></td>
            </tr>
            </table>
           </form>
           </div>
</div>

 </form>
</div>
<div id="parallax1option" >
  
</div>
<div id="blogoption" >
  
</div>
<div id="parallax2option" >
  
</div>
<div id="contactoption" >
  
</div>
<div id="footeroption" >
  
</div>
