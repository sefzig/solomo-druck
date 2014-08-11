<?php include 'php/druckvorlage.php'; ?><html>
    <head>
        <title>Solomo Aufkleber drucken</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </head>
    <body>
        <div style="float: right; margin-top: 26px;">&nbsp;&nbsp; <a href="#" id="togglen1" onclick="konfiguration(0)" style="display: none;">Konfiguration ausblenden</a><span id="togglen0" style="display: none;"><a href="#" onclick="konfiguration(1)">Konfiguration einblenden</a>, <a href="javascript:window.print()">Drucken</a></span> &nbsp;&nbsp;</div>
        <br />
        <h1>Solomo Aufkleber drucken</h1>
        <!--
        Ein Skript zum Erstellen einer Druckvorlage mit
        <a href="https://sefzig.net/wiki/">konfigurierbaren QR-Codes</a>.
        Konfiguriere die Vorlage mit
        <a href="https://sefzig.net/solomo/druck/?korrektur=[L|M|H|Q]&prefix=[DeinVorname|ProjektName]&zahler=[0|9|18|27|...]">diesen URL-Parametern</a>.
        <br /><br />
        -->
        <div id="konfiguration" style="display: none;" rel="<?php echo $konfig; ?>">
          <a id="musterlink" href="?zahler=%zahler%&prefix=%prefix%&korrektur=%korrektur%&zeilen=%zeilen%&spalten=%spalten%&template=%template%&konfig=%konfig%&cta=%cta%&url=%url%" title="Musterlink" style="display: none;">Musterlink</a>
          <table width="<?php echo $zeile_breite + 33; ?>" cellspacing="2">
            <tr><td colspan="4" style="padding: 10px; font-style: italic;">Hier kannst Du Druck-Vorlagen für durchnummerierte QR-Aufkleber erstellen.</td></tr>
            <tr><td>Url         </td><td><input type="text" id="url"       value="<?php echo $url_url;       ?>"></td><td>URL des QR-Codes                         </td><td> http://sefzig.net/solomo/daumen/ </td></tr>
            <tr><td>Cta         </td><td><input type="text" id="cta"       value="<?php echo $cta_url;       ?>"></td><td>Call-to-action des Aufklebers            </td><td> Bewerte diese Arbeit             </td></tr>
            <tr><td>Prefix      </td><td><input type="text" id="prefix"    value="<?php echo $prefix_url;    ?>"></td><td>Individuelles K&uuml;rzel                </td><td> Projektname | Vorname            </td></tr>
            <tr><td>Z&auml;hler </td><td><input type="text" id="zahler"    value="<?php echo $zahler_url;    ?>"></td><td>Start der Nummerierung                   </td><td> 0 | 6 | 12 | ...                 </td></tr>
            <tr><td>Korrektur   </td><td><input type="text" id="korrektur" value="<?php echo $korrektur_url; ?>"></td><td>Fehlerkorrektur-Level                    </td><td> L | M | H | Q                    </td></tr>
            <tr><td>Template    </td><td><input type="text" id="template"  value="<?php echo $template_url;  ?>"></td><td>K&uuml;rzel des zu verwendenden Templates</td><td> standard | doku | klein          </td></tr>
            <tr><td>Zeilen      </td><td><input type="text" id="zeilen"    value="<?php echo $zeilen_url;    ?>"></td><td>Menge der gew&uuml;nschten Zeilen        </td><td> 3 | 6                            </td></tr>
            <tr><td>Spalten     </td><td><input type="text" id="spalten"   value="<?php echo $spalten_url;   ?>"></td><td>Menge der gew&uuml;nschten Spalten       </td><td> 2 | 4                            </td></tr>
            <tr><td colspan="4" style="padding: 10px;"><button value="Übernehmen" onclick="konfigurieren();">Übernehmen</button> &nbsp; <button value="Zurücksetzen" onclick="location.href = '?';">Zurücksetzen</button></td></tr>
            <!--
            <tr><td></td><td><input type="text" name="" value="<?php echo $_url; ?>"></td><td></td><td></td></tr>
            -->
          </table>
          <br />
        </div>
        <table>
           <?php echo $ergebnis; ?>
        </table>
    </body>
</html>
