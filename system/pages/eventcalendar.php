<style>
#eventscheduletable {
    border-collapse: collapse;
    table-layout: fixed;
    border-spacing: 1px;
    padding: 1px;
    border: 1px;
	background: #d4c0a1;
    border-color: #5f4d41;
    -moz-box-shadow: 2px 2px 3px 3px #7c5231;
    -webkit-box-shadow: 2px 2px 3px 3px #7c5231;
    -ms-box-shadow: 2px 2px 3px 3px #7c5231;
    box-shadow: 2px 2px 3px 3px #7c5231;
}
#eventscheduletable td {
    border: 1px solid #faf0d7;
    height: 24px;
    overflow: hidden;
	font-weight: bold;
	color: #fff;
}
.eventscheduleheadertop {
    margin: auto;
    width: 100%;
    display: flex;
    min-width: 400px;
}
.eventscheduleheaderblockleft {
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    position: relative;
}
.eventscheduleheaderdateblock {
    position: absolute;
    width: 150px;
    text-align: center;
}
.eventscheduleheaderleft {
    float: left;
}
.eventscheduleheaderright {
    float: right;
}
.eventscheduleheaderblockright {
    text-align: right;
    white-space: nowrap;
    margin-right: 5px;
}


td#dia_comum {
	color: #5f4d41;
	 background-color:#E7D1AF;
}
td#dia_atual{
	color: #5f4d41;
	background-color: #f3e5d0;
}
td#dia_branco{
	color: #5f4d41;
	background-color: #d4c0a1;
}
</style>

<?php
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Event Schedule';
?>
<div class="BoxContent" style="background-image:url(https://static.tibia.com/images/global/content/scroll.gif);">
  <div id="eventscheduletablecontainer">
    <div class="TableContainer">
      <div class="CaptionContainer">
        <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
          <div class="Text">
            <div class="eventscheduleheadertop">
              <div class="eventscheduleheaderblockleft">
                <div class="eventscheduleheaderdateblock"> <span class="eventscheduleheaderleft"></span><?php echo date('M Y') ?><span class="eventscheduleheaderright"><!--<a href="<?php echo '?eventcalendar&mes='.$mes.'&dia='.($diacorrente+1) ?>" style="color:white;">»</a>--></span> </div>
              </div>
              <div class="eventscheduleheaderblockright"><?php echo date('Y-m-d H:i') ?></div>
            </div>
          </div>
          <span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span> </div>
      </div>
      <table class="Table1" cellpadding="0" cellspacing="0" style="background-color: rgb(241, 224, 197);">
        <tbody>
          <tr>
            <td><div class="InnerTableContainer" style="padding: 10px;">
                <table style="width:100%;" id="eventscheduletable">
                  <tbody>
<?php
function MostreSemanas(){
	$semanas = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

	for($i = 0; $i < 7; $i++)
	 echo "<td>".$semanas{$i}."</td>";
}

function GetNumeroDias($mes){
	$numero_dias = array(
			'01' => 31, '02' => 28, '03' => 31, '04' =>30, '05' => 31, '06' => 30,
			'07' => 31, '08' =>31, '09' => 30, '10' => 31, '11' => 30, '12' => 31
	);
	if (((date('Y') % 4) == 0 and (date('Y') % 100)!=0) or (date('Y') % 400)==0){
	    $numero_dias['02'] = 29;	// altera o numero de dias de fevereiro se o ano for bissexto
	}
	return $numero_dias[$mes];
}

function GetNomeMes($mes){
     $meses = array( '01' => "January", '02' => "February", '03' => "March",
                     '04' => "April",   '05' => "May",      '06' => "June",
                     '07' => "July",   '08' => "August",    '09' => "September",
                     '10' => "October", '11' => "November",  '12' => "December"
                     );
      if( $mes >= 01 && $mes <= 12)
        return $meses[$mes];

        return "Mês deconhecido";
}

function MostreCalendario($mes){

	$numero_dias = GetNumeroDias( $mes );	// retorna o número de dias que tem o mês desejado
	$nome_mes = GetNomeMes($mes);
	$diacorrente = 0;

	$diasemana = jddayofweek( cal_to_jd(CAL_GREGORIAN, $mes,"01",date('Y')) , 0 );	// função que descobre o dia da semana

	 echo "<tr style='text-align:center; width:120px; background-color:#5f4d41;'>";
	   MostreSemanas();	// função que mostra as semanas aqui
	 echo "</tr>";
	for( $linha = 0; $linha < 5; $linha++ ){
	   echo "<tr>";
	   for( $coluna = 0; $coluna < 7; $coluna++ ){
		echo "<td style='height:82px; background-clip: padding-box; overflow: hidden; vertical-align:top;' ";

		  if( ($diacorrente == ( date('d') - 1) && date('m') == $mes) ){
			   echo " id = 'dia_atual' ";
		  }else{
			     if(($diacorrente + 1) <= $numero_dias ){
			         if( $coluna < $diasemana && $linha == 0){
					echo " id = 'dia_branco' ";
				 }else{
				  	echo " id = 'dia_comum' ";
				 }
			     }else{
				echo " id = 'dia_branco' ";
			     }
		  }
		echo ">";
		      if( $diacorrente + 1 <= $numero_dias ){
			 if( $coluna < $diasemana && $linha == 0){
			  	 echo " ";
			 }else{
				   echo "<div style='font-weight: bold; margin-left: 3px; margin-bottom: 2px;'><span style='vertical-align: text-bottom;'>".++$diacorrente . " <img style='border:0px;' src='https://static.tibia.com/images/global/content/icon-seasonal.png'></span></div>";


	global $config;
	$events_xml = $config['data_path'] . 'XML/events.xml';
	$xml = simplexml_load_file($events_xml);

	if($diacorrente < 10){
		$diacorrente = '0'.$diacorrente.'';
	}

$verif_date = ''.$mes.'/'.$diacorrente.'/'.date('Y').'';

foreach($xml->event as $event){
	if($verif_date >= $event['startdate'] and $verif_date <= $event['enddate']){
?>
<span style="width: 120px;" class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), '', '<div style = &quot;font-size: 12pt; font-weight: bold; word-break: break-word;&quot;><?php echo $event['name'] ?>:</div><div style = &quot;margin-bottom: 20px;&quot;>&amp;bull; <?php echo $event->description['description'] ?></div>', '');" onmouseout="$('#HelperDivContainer').hide();">
<div style="background:<?php echo $event->colors['colordark'] ?>; color:#FFF; width: 100%; font-weight: bold; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; padding: 1%; padding-left: 3px; margin-bottom:2px"><?php echo $event['name'] ?></div>
</span>
<?php
	}
}
			 }
		      }else{
			break;
		      }
		   /* FIM DO TRECHO MUITO IMPORTANTE */
		echo "</td>";
	   }
	   echo "</tr>";
	}
	echo "";
}

function MostreCalendarioCompleto(){
	    echo "<table align = 'center'>";
	    $cont = 1;
	    for( $j = 0; $j < 4; $j++ ){
		  echo "<tr>";
		for( $i = 0; $i < 3; $i++ ){

		  echo "<td>";
			MostreCalendario( ($cont < 10 ) ? "0".$cont : $cont );

		        $cont++;
		  echo "</td>";
	 	}
		echo "</tr>";
	   }
	   echo "</table>";
}

$current_dia = date('d');
$current_mes = date('m');
MostreCalendario($current_mes);
/* MostreCalendarioCompleto(); */

?>
                  </tbody>
                </table>
              </div></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <br>
  <div>* Event starts/ends at server save of this day.</div>
</div>
