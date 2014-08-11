
           function konfigurieren()
           {
              var url = $("#musterlink").attr("href");
              var url_input =       $("#url").val();       var url = url.replace("%url%",url_input);
              var prefix_input =    $("#prefix").val();    var url = url.replace("%prefix%",prefix_input);
              var zahler_input =    $("#zahler").val();    var url = url.replace("%zahler%",zahler_input);
              var korrektur_input = $("#korrektur").val(); var url = url.replace("%korrektur%",korrektur_input);
              var template_input =  $("#template").val();  var url = url.replace("%template%",template_input);
              var zeilen_input =    $("#zeilen").val();    var url = url.replace("%zeilen%",zeilen_input);
              var spalten_input =   $("#spalten").val();   var url = url.replace("%spalten%",spalten_input);
              var cta_input =       $("#cta").val();       var url = url.replace("%cta%",cta_input);
              var konfig_input =    $("#konfiguration").attr("rel"); if (konfig_input == 0) { var konfig_input = 1; } else { var konfig_input = 0; } var url = url.replace("%konfig%",konfig_input);
              location.href = url;
           }
           
           function konfiguration(methode)
           {
              if (methode == "0")
              {
                 var status = "1";
              }
              else if (methode == "1")
              {
                 var status = "0";
              }
              else
              {
                 var status = $("#konfiguration").attr("rel");
              }
              
           // alert(status);
              
              if (status == 1)
              {
                 $("#konfiguration").hide();
                 $("#togglen0").css("display","inline");
                 $("#togglen1").css("display","none");
                 $("#konfiguration").attr("rel","0");
              }
              else
              {
                 $("#konfiguration").show();
                 $("#togglen0").css("display","none");
                 $("#togglen1").css("display","inline");
                 $("#konfiguration").attr("rel","1");
              }
              
              return false;
           }
           
           $(document).ready(function() { konfiguration(); });
            