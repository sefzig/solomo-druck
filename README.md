Solomo Aufkleber
================

Druckvorlage für Aufkleber mit durchnummerierten QR Codes.
URL-Schema, Format und Texte können festgelegt werden.
Nach Ausblenden der Konfiguration kann die Seite gedruckt werden. 

[Solomo-Funktionen](https://github.com/sefzig/solomo/blob/master/README.md) 
* [solomo-chat](https://github.com/sefzig/solomo-chat/blob/master/README.md) 
* [solomo-daumen](https://github.com/sefzig/solomo-daumen/blob/master/README.md) 
* [solomo-druck](https://github.com/sefzig/solomo-druck/blob/master/README.md) 

Links
* [Druckvorlage öffnen](http://sefzig.net/solomo/druck/)
* [Druckvorlage vorausgefüllt für Solomo-Daumen "gh"](http://sefzig.net/solomo/druck/?zahler=0&prefix=gh&korrektur=L&zeilen=6&spalten=4&template=standard&konfig=0&cta=Bewerte%20dies!&url=http://sefzig.net/solomo/daumen/)

## URL-Parameter

Die Vorlage kann mit URL-Parametern vorausgefüllt/gespeichert werden:

<pre>
http://sefzig.net/solomo/druck/
?zahler=    // Start der Nummerierung -1, z.B. 0 oder 30
&prefix=    // Wort zwischen URL und Nummerierung, z.B. Projektname
&korrektur= // Fehlerkorrektur-Level des QR Codes: L | M | H | Q
&zeilen=    // Menge der gewünschten Zeilen, z.B. 3 oder 6
&spalten=   // Menge der gewünschten Spalten, z.B. 3 oder 4
&template=  // Kürzel des zu verwendenden Templates: standard | doku | klein
&konfig=    // Ausblenden der Konfiguration: 1 | 0
&cta=       // Titel-Text (in manchen Templates), z.B. Jetzt abstimmen
&url=       // URL des QR-Codes, z.B. http://sefzig.net/solomo/daumen/
</pre>
