<?php

    $url =       $_GET['url'];       $url_url =       $url;       if (!$url)      { $url   = "http://pub.lic.is/daumen/"; } $url_kurzArray = explode("://", $url); if (isset($url_kurzArray["1"])) { $url_kurz = $url_kurzArray["1"]; } else { $url_kurz = $url; }
    $prefix =    $_GET['prefix'];    $prefix_url =    $prefix;    if (!$prefix)   { $prefix   = ""; }
    $zahler =    $_GET['zahler'];    $zahler_url =    $zahler;    if (!$zahler)   { $zahler   = "0"; }
    $korrektur = $_GET['korrektur']; $korrektur_url = $korrektur; if ((!$korrektur) && (($korrektur != "L") && ($korrektur != "M") && ($korrektur != "Q") && ($korrektur != "H"))) { $korrektur = "L"; }
    $template =  $_GET['template'];  $template_url =  $template;  if (!$template) { $template = "standard"; }
    $zeilen =    $_GET['zeilen'];    $zeilen_url =    $zeilen; 
    $spalten =   $_GET['spalten'];   $spalten_url =   $spalten; 
    $cta =       $_GET['cta'];       $cta_url =       $cta; 
    $konfig =    $_GET['konfig'];    $konfig_url =    $konfig;    if (!$konfig)   { $konfig   = "0"; }
    $zeile_breite = 600;
    $ergebnis = ""; 
    
    if ($template == "doku")
    {
       if (!$zeilen)   { $zeilen   = "2"; }
       if (!$spalten)  { $spalten  = "3"; }
       $spalte_breite_gross = round($zeile_breite / $spalten);
       $spalte_breite_klein = round($zeile_breite / $spalten / 2);
       $counter = $zahler;
       
       $i = 1;
       while ($i <= $zeilen):
          
          $zeile = "";
          $zeile_anfang = '<tr>';
          $zeile_ende =   '</tr>';
           
          $zeile = $zeile . '' . $zeile_anfang;
          
          $j = 1;
          $counter_1 = $counter;
          while ($j <= $spalten):
              
             $zeile = $zeile . '  <td align="center" colspan="2"><br />Daumen ' . $counter_1 . '<br /><br /></td>';
             
             $counter_1++;
             $j++;
          endwhile;
          
          $zeile = $zeile . '' . $zeile_ende;
          $zeile = $zeile . '' . $zeile_anfang;
          
          $k = 1;
          $counter_2 = $counter;
          while ($k <= $spalten):
             
             $zeile = $zeile . '  <td align="center" colspan="2"><img src="http://chart.apis.google.com/chart?cht=qr&chs=' . $spalte_breite_gross . 'x' . $spalte_breite_gross . '&chld=' . $korrektur . '&choe=UTF-8&chl=' . $url . '' . $prefix . '' . $counter_2 . '%2F" width="' . $spalte_breite_gross . '" height="' . $spalte_breite_gross . '" border="0" /></td>';
            
             $counter_2++;
             $k++;
          endwhile;
          
          $zeile = $zeile . '' . $zeile_ende;
          $zeile = $zeile . '' . $zeile_anfang;
          
          $l = 1;
          $counter_3 = $counter;
          while ($l <= $spalten):
             
             $zeile = $zeile . '  <td align="center" colspan="1"><img src="http://chart.apis.google.com/chart?cht=qr&chs=' . $spalte_breite_klein . 'x' . $spalte_breite_klein . '&chld=' . $korrektur . '&choe=UTF-8&chl=' . $url . '' . $prefix . '' . $counter_3 . '%2F" width="' . $spalte_breite_klein . '" height="' . $spalte_breite_klein . '" border="0" /></td>';
             $zeile = $zeile . '  <td align="center" colspan="1"><img src="http://chart.apis.google.com/chart?cht=qr&chs=' . $spalte_breite_klein . 'x' . $spalte_breite_klein . '&chld=' . $korrektur . '&choe=UTF-8&chl=' . $url . '' . $prefix . '' . $counter_3 . '%2F" width="' . $spalte_breite_klein . '" height="' . $spalte_breite_klein . '" border="0" /></td>';
          
             $counter_3++;
             $l++;
          endwhile;
          
          $zeile = $zeile . '' . $zeile_ende;
          $ergebnis = $ergebnis . $zeile;
       // echo $ergebnis;
           
          $counter = $counter + $spalten;
          $i++;
       endwhile;
    }
    else if ($template == "standard")
    {
       if (!$zeilen)   { $zeilen   = "6"; }
       if (!$spalten)  { $spalten  = "6"; }
       $spalte_breite = round($zeile_breite / $spalten);
       
       $zeile_anfang = '<tr>';
       $zeile_ende =   '</tr>';
       
       $i = 1;
       while ($i <= $zeilen):
          
          $ergebnis = $ergebnis . '' . $zeile_anfang;
          $zeile = "";
          
          $j = 1;
          while ($j <= $spalten):
             $zahler++;
             $cta_fett = '<div style="padding-top: 5px;"><b>'.$cta.'</b></div>';
             $zeile = $zeile . '<td style="font-size: 10px;" align="center">' . $cta_fett . '<img src="http://chart.apis.google.com/chart?cht=qr&chs=' . $spalte_breite . 'x' . $spalte_breite . '&chld=' . $korrektur . '&choe=UTF-8&chl=' . $url . '' . $prefix . '' . $zahler . '%2F" width="' . $spalte_breite . '" height="' . $spalte_breite . '" title="' . $url . '' . $prefix . '' . $zahler . '/" border="0" /><br /><div style="padding-bottom: 8px;">' . $url_kurz . '' . $prefix . '' . $zahler . '</div></td>';
             $j++;
          endwhile;
          
          $ergebnis = $ergebnis . '' . $zeile;
          $ergebnis = $ergebnis . '' . $zeile_ende;
           
          $i++;
       endwhile;
    }
    else
    {
       if (!$zeilen)   { $zeilen   = "7"; }
       if (!$spalten)  { $spalten  = "6"; }
       $spalte_breite = round($zeile_breite / $spalten);
       
       $zeile_anfang = '<tr>';
       $zeile_ende =   '</tr>';
       
       $i = 1;
       while ($i <= $zeilen):
          
          $ergebnis = $ergebnis . '' . $zeile_anfang;
          $zeile = "";
          
          $j = 1;
          while ($j <= $spalten):
             $zahler++;
             $zeile = $zeile . '<td style="font-size: 10px;" align="center"><img src="http://chart.apis.google.com/chart?cht=qr&chs=' . $spalte_breite . 'x' . $spalte_breite . '&chld=' . $korrektur . '&choe=UTF-8&chl=' . $url . '' . $prefix . '' . $zahler . '%2F" width="' . $spalte_breite . '" height="' . $spalte_breite . '" title="' . $url . '' . $prefix . '' . $zahler . '/" border="0" /><br />' . $url_kurz . '' . $prefix . '' . $zahler . '</td>';
             $j++;
          endwhile;
          
          $ergebnis = $ergebnis . '' . $zeile;
          $ergebnis = $ergebnis . '' . $zeile_ende;
           
          $i++;
       endwhile;
    }
    
?>