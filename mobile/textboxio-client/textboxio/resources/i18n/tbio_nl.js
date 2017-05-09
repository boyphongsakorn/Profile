/** @license
 * Copyright (c) 2013-2017 Ephox Corp. All rights reserved.
 * This software is provided "AS IS," without a warranty of any kind.
 */
!function(){var a=function(){return{a11y:{widget:{title:"Toegankelijkheidscontrole",running:"Bezig met controle...",issue:{counter:"Probleem {0} van {1}",help:"WCAG 2.0 referentie - opent in een nieuw venster",none:"Geen toegankelijkheidsproblemen gedetecteerd"},previous:"Vorig probleem",next:"Volgend probleem",repair:"Probleem oplossen",available:"Oplossing beschikbaar",ignore:"Negeren"},image:{alttext:{empty:"Afbeeldingen moeten een alternatieve tekstbeschrijving hebben",filenameduplicate:"De alternatieve tekst moet verschillen van de bestandsnaam van de afbeelding",set:"Geef een alternatieve tekst op:",validation:{empty:"Alternatieve tekst mag niet leeg zijn",filenameduplicate:"Alternatieve tekst mag niet gelijk aan de bestandsnaam zijn"}}},table:{caption:{empty:"Tabellen moeten een bijschrift hebben",summaryduplicate:"Bijschrift en samenvatting van tabel kunnen niet dezelfde waarde hebben",set:"Geef een bijschrift op:",validation:{empty:"Bijschrift mag niet leeg zijn",summaryduplicate:"Tabelbijschrift mag niet gelijk aan de samenvatting zijn"}},summary:{empty:"Complexe tabellen moeten een samenvatting hebben",set:"Geef een tabelsamenvatting op:",validation:{empty:"Samenvatting mag niet leeg zijn",captionduplicate:"Samenvatting tabel mag niet gelijk aan het bijschrift zijn"}},rowscells:{none:"Tabelelementen moeten <tr> en <td> tags bevatten"},headers:{none:"Tabellen moeten minstens \xe9\xe9n kopcel bevatten",set:"Kies een tabelkop:",validation:{none:"Selecteer een rij- of kolomkop"}},headerscope:{none:"Tabelkoppen moeten op een rij of kolom worden toegepast",set:"Selecteer bereik kop:",scope:{row:"Rij",col:"Kolom",rowgroup:"Rijgroep",colgroup:"Kolomgroep"}}},heading:{nonsequential:"Koppen moeten opeenvolgend worden toegepast. Bijvoorbeeld: kop 1 moet worden gevolgd door kop 2, niet door kop 3.",paragraphmisuse:"Deze paragraaf lijkt op een kop. Selecteer een kopniveau als het ook een kop is.",set:"Selecteer een kopniveau:"},link:{adjacent:"Naast elkaar staande links met dezelfde url moeten worden samengevoegd tot \xe9\xe9n hyperlink."},list:{paragraphmisuse:"De geselecteerde tekst lijkt op een lijst Lijsten moeten worden opgemaakt met een lijst-tag."},contrast:{smalltext:"Tekst moet een contrastverhouding van 4,5:1 of hoger hebben",largetext:"Grote tekst moet een contrastverhouding van 3:1 of hoger hebben"},severity:{error:"Fout",warning:"Waarschuwing",info:"Informatief"}},aria:{autocorrect:{announce:"Autocorrectie {0}"},label:{toolbar:"Tekst met Opmaak Bewerken Werkbalk",editor:"Textbox.io Tekst met Opmaak Bewerken - {0}",fullscreen:"Textbox.io Volledig scherm Tekst met Opmaak Bewerken - {0}",content:"Bewerkbare inhoud",more:"Klik hier om uit of samen te vouwen"},help:{mac:"Druk op \u2303\u2325H voor Help",ctrl:"Druk op CTRL SHIFT H voor Help"},color:{picker:"Kleurenkiezer",menu:"Menu Kleurenkiezer"},font:{color:"Tekstkleuren",highlight:"Markeerkleuren",palette:"Kleurenpalet"},context:{menu:{generic:"Contextmenu"}},stepper:{input:{invalid:"Waarde voor grootte is ongeldig"}},table:{headerdescription:"Druk op spatiebalk om instelling te activeren. Druk op Tab om terug te keren naar tabelkiezer.",cell:{border:{size:"Randbreedte"}}},input:{invalid:"Ongeldige invoer"},widget:{navigation:"Gebruik de pijltjestoetsen om te navigeren."},image:{crop:{size:"Bijsnijdgrootte is {0} pixels bij {1} pixels"}}},color:{white:"Wit",black:"Zwart",gray:"Grijs",metal:"Metaal",smoke:"Smoke",red:"Rood",darkred:"Donkerrood",darkorange:"Donkeroranje",orange:"Oranje",yellow:"Geel",green:"Groen",darkgreen:"Donkergroen",mediumseagreen:"Middel Zeegroen",lightgreen:"Lichtgroen",lime:"Lime",mediumblue:"Middel blauw",navy:"Marine",blue:"Blauw",lightblue:"Lichtblauw",violet:"Violet"},directionality:{rtldir:"Van rechts naar links",ltrdir:"Van links naar rechts"},parlance:{menu:"Menu Talen",set:"Taal instellen",ar:"Arabisch",ca:"Catalaans",zh_cn:"Chinees (Vereenvoudigd)",zh_tw:"Chinees (Traditioneel)",hr:"Kroatisch",cs:"Tsjechisch",da:"Deens",nl:"Nederlands",en:"Engels",en_au:"Engels (Australi\xeb)",en_ca:"Engels (Canada)",en_gb:"Engels (Verenigd Koninkrijk)",en_us:"Engels (Verenigde Staten)",fa:"Farsi",fi:"Fins",fr:"Frans",fr_ca:"Frans (Canada)",de:"Duits",el:"Grieks",he:"Hebreeuws",hu:"Hongaars",it:"Italiaans",ja:"Japans",kk:"Kazachstaans",ko:"Koreaans",no:"Noors",pl:"Pools",pt_br:"Portugees (Brazili\xeb)",pt_pt:"Portugees (Portugal)",ro:"Roemeens",ru:"Russisch",sk:"Slowaaks",sl:"Sloveens",es:"Spaans",es_419:"Spaans (Latijns Amerika)",es_es:"Spaans (Spanje)",sv:"Zweeds",tt:"Tataars",th:"Thais",tr:"Turks",uk:"Oekra\xefens"},taptoedit:"Tik om te bewerken",plaincode:{dialog:{title:"Codeweergave",editor:"HTML-teksteditor"}},help:{dialog:{accessibility:"Toetsenbordnavigatie",a11ycheck:"Toegankelijkheid controleren",about:"Info Textbox.io",markdown:"Markdown-opmaak",shortcuts:"Sneltoetsen"}},spelling:{context:{more:"Meer",morelabel:"Submenu Meer Spellingsopties"},none:"Geen",menu:"Spelling taal"},specialchar:{open:"Speciaal teken",dialog:"Speciaal teken invoegen",latin:"Latijn",insert:"Invoegen",punctuation:"Interpunctie",currency:"Valuta's","extended-latin-a":"Latijn A uitgebreid","extended-latin-b":"Latijn B uitgebreid",arrows:"Pijlen",mathematical:"Wiskundig",miscellaneous:"Diversen",selects:"Geselecteerde tekens",grid:"Speciale tekens"},insert:{"menu-button":"Menu Invoegen",menu:"Invoegen",link:"Koppeling",image:"Pictogram",table:"Tabel",horizontalrule:"Horizontale lijn",media:"Media"},media:{embed:"Media inbeddingscode",insert:"Invoegen",placeholder:"Plak inbeddingscode hier."},wordcount:{open:"Woorden tellen",dialog:"Woorden tellen",counts:"Aantal",selection:"Selectie",document:"Document",characters:"Tekens",charactersnospaces:"Tekens (geen spaties)",words:"Woorden"},list:{unordered:{menu:"Opties Niet-geordende lijst",default:"Standaard Niet-geordend",circle:"Cirkel Niet-geordend",square:"Vierkant Niet-geordend",disc:"Schijf Niet-geordend"},ordered:{menu:"Opties Geordende lijst",default:"Standaard Geordend",decimal:"Decimaal Geordend","upper-alpha":"Hoofdletters Geordend","lower-alpha":"Kleine letters Geordend","upper-roman":"Grote Romeinse cijfers Geordend","lower-roman":"Kleine Romeinse cijfers Geordend","lower-greek":"Kleine Griekse letters Geordend"}},tag:{inline:{class:"span ({0})"},img:"afbeelding"},block:{normal:"Normaal",p:"Alinea",h1:"Kop 1",h2:"Kop 2",h3:"Kop 3",h4:"Kop 4",h5:"Kop 5",h6:"Kop 6",div:"Div",pre:"Pre",li:"Lijstitem",td:"Cel",th:"Kopcel",styles:"Menu Stijlen",dropdown:"Blokken",describe:"Huidige stijl {0}",menu:"Stijlen",label:{inline:"Inlinestijlen",table:"Tabelstijlen",line:"Lijnstijlen",media:"Mediastijlen",list:"Lijststijlen",link:"Koppelingstijlen"}},font:{"menu-button":"Menu Lettertype",menu:"Lettertype",face:"Lettertype",size:"Tekengrootte",coloroption:"Kleur",describe:"Huidig lettertype {0}",color:"Tekst",highlight:"Markering",stepper:{input:"Tekengrootte instellen",increase:"Tekengrootte vergroten",decrease:"Tekengrootte verkleinen"}},cog:{"menu-button":"Menu Instellingen",menu:"Instellingen",spellcheck:"Spellingcontrole",capitalisation:"Hoofdlettergebruik",autocorrect:"AutoCorrectie",linkpreviews:"Voorbeelden koppeling",help:"Help"},alignment:{toolbar:"Menu Uitlijning",menu:"Uitlijning",left:"Links uitlijnen",center:"Centreren",right:"Rechts uitlijnen",justify:"Uitvullen",describe:"Huidige uitlijning {0}"},category:{language:"Groep Talen",undo:"Groep Ongedaan maken en Opnieuw uitvoeren",insert:"Groep Invoegen",style:"Groep Stijlen",emphasis:"Groep Opmaak",align:"Groep Uitlijning",listindent:"Groep Lijst en Inspringing",format:"Groep Lettertype",tools:"Groep Extra",table:"Groep Tabel",image:"Groep Afbeelding bewerken"},action:{undo:"Ongedaan maken",redo:"Opnieuw uitvoeren",bold:"Vet",italic:"Cursief",underline:"Onderstrepen",strikethrough:"Doorhalen",subscript:"Subscript",superscript:"Superscript",removeformat:"Opmaak verwijderen",bullist:"Niet-geordende lijst",numlist:"Gesorteerde lijst",indent:"Inspringing vergroten",outdent:"Inspringing verkleinen",blockquote:"Blockquote",fullscreen:"Volledig scherm",search:"Dialoogvenster Zoeken en Vervangen",a11ycheck:"Toegankelijkheid controleren",toggle:{fullscreen:"Volledig scherm verlaten"}},table:{menu:"Tabel invoegen","column-header":"Koptekstkolom","row-header":"Koptekstrij",float:"Zwevende uitlijning",cell:{color:{border:"Randkleur",background:"Achtergrondkleur"},border:{width:"Randbreedte",stepper:{input:"Randbreedte instellen",increase:"Randbreedte vergroten",decrease:"Randbreedte verkleinen"}}},context:{row:{title:"Submenu Rij",menu:"Rij",insertabove:"Hierboven invoegen",insertbelow:"Hieronder invoegen"},column:{title:"Submenu Kolom",menu:"Kolom",insertleft:"Links invoegen",insertright:"Rechts invoegen"},cell:{merge:"Cellen samenvoegen",unmerge:"Cel splitsen","split-cols":"In kolommen splitsen","split-rows":"In rijen splitsen"},table:{title:"Submenu Tabel",menu:"Tabel",properties:"Eigenschappen",delete:"Verwijderen"},common:{delete:"Verwijderen",normal:"Als Normaal instellen",header:"Als Kop instellen"},palette:{show:"Opties tabelbewerking beschikbaar op werkbalk",hide:"Opties tabelbewerking niet meer beschikbaar"}},picker:{header:"Koptekst ingesteld",label:"Tabelkiezer",describepicker:"Gebruik de pijltjestoetsen om tabelgrootte in te stellen.  Druk op Tab om naar tabelkopinstellingen te gaan. Druk op Spatie- of Entertoets om tabel in te voegen.",rows:"{0} hoog",cols:"{0} breed"},border:"Rand",summary:"Samenvatting",dialog:"Tabeleigenschappen",caption:"Tabelopschrift",width:"Breedte",height:"Hoogte"},align:{none:"Niet uitlijnen",center:"Centreren",left:"Links uitlijnen",right:"Rechts uitlijnen"},button:{ok:"OK",cancel:"Annuleren",close:"Dialoogvenster annuleren"},banner:{close:"Banner sluiten"},border:{on:"Aan",off:"Uit",labels:{on:"Rand aan",off:"Rand uit"}},loading:{wait:"Even wachten"},toolbar:{more:"Meer",backbutton:"Terug","switch-code":"Naar codeweergave overschakelen","switch-pencil":"Naar ontwerpweergave overschakelen"},link:{context:{edit:"Link bewerken",follow:"Koppeling openen",ignore:"Verbroken koppeling negeren",remove:"Koppeling verwijderen"},dialog:{aria:{update:"Link bijwerken",insert:"Link invoegen",properties:"Linkeigenschappen",quick:"Snelle opties"},autocomplete:{open:"Koppeling lijst automatisch aanvullen beschikbaar. Typ verder of gebruik toetsen omhoog en omlaag om suggesties te selecteren.",close:"Koppeling lijst automatisch aanvullen gesloten",accept:"Suggestie geselecteerde koppeling {0}"},edit:"Bewerken",remove:"Verwijderen",preview:"Voorbeeld",update:"Bijwerken",insert:"Invoegen",tooltip:"Koppeling"},properties:{dialog:{title:"Linkeigenschappen"},text:{label:"Weer te geven tekst",placeholder:"Schermtekst typen of plakken"},url:{label:"URL voor koppeling of bladwijzer",placeholder:"URL voor koppeling of bladwijzer invoeren",invalid:"Mogelijk is uw URL voor koppeling incorrect"},title:{label:"Titel",placeholder:"Titel koppeling typen of plakken"},button:{remove:"Verwijderen"},target:{label:"Doel",none:"Geen",blank:"Nieuw venster",top:"Hele pagina",self:"Zelfde frame",parent:"Bovenliggend frame"}},anchor:{top:"Bovenkant document",bottom:"Onderkant document"}},fileupload:{title:"Afbeeldingen invoegen",tablocal:"Lokale bestanden",tabweburl:"Web-URL",dropimages:"Afbeeldingen hier neerzetten",chooseimage:"Afbeelding voor uploaden kiezen",web:{url:"URL van webafbeelding:"},weburlhelp:"Typ uw URL om een voorbeeld van de afbeelding te zien. Bij grote afbeeldingen kan het even duren voordat ze worden weergegeven.",invalid1:"We kunnen geen afbeelding vinden bij de URL die u gebruikt.",invalid2:"Controleer uw URL op tikfouten.",invalid3:"Zorg ervoor dat de afbeelding die u opent openbaar is en niet met een wachtwoord is beveiligd of zich op een priv\xe9netwerk bevindt."},image:{context:{properties:"Eigenschappen afbeelding",palette:{show:"Opties bewerking afbeeldingen beschikbaar op werkbalk",hide:"Opties bewerking afbeeldingen niet meer beschikbaar"}},dialog:{title:"Eigenschappen afbeelding",fields:{align:"Zwevende uitlijning",url:"URL",urllocal:"Afbeelding nog niet opgeslagen",alt:"Alternatieve tekst",width:"Breedte",height:"Hoogte",constrain:{label:"Verhoudingen behouden",on:"Vergrendelde verhoudingen",off:"Ontgrendelde verhoudingen"}}},menu:"Afbeelding invoegen","menu-button":"Menu Afbeelding invoegen","from-url":"Web-URL","from-camera":"Camera-album",toolbar:{rotateleft:"Linksom draaien",rotateright:"Rechtsom draaien",fliphorizontal:"Horizontaal omkeren",flipvertical:"Verticaal omkeren",properties:"Eigenschappen afbeelding"},crop:{announce:"Interface Bijsnijden wordt geopend. Druk op Enter om toe te passen, op Escape om te annuleren.",cancel:"Bijsnijdbewerking annuleren",begin:"Afbeelding bijsnijden.",apply:"Bijsnijden toepassen",handle:{nw:"Bijsnijdgreep linksboven",ne:"Bijsnijdgreep rechtsboven",se:"Bijsnijdgreep rechtsonder",sw:"Bijsnijdgreep linksonder",shade:"Bijsnijdmasker"}}},units:{"amount-of-total":"{0} van {1}"},search:{menu:"Zoeken en Vervangen",field:{replace:"Veld Vervangen",search:"Veld Zoeken"},search:"Zoeken",previous:"Vorige",next:"Volgende",replace:"Vervangen","replace-all":"Alles vervangen",matchcase:"Identieke hoofdletters/kleine letters"},mentions:{initiated:"Vermelding aangemaakt, typ verder met zoeken tijdens typen",lookahead:{open:"Vervolgkeuzelijst met zoeken tijdens typen",cancelled:"Vermelding geannuleerd",searching:"Resultaten zoeken",selected:"Vermelding van {0} ingevoegd",noresults:"Geen resultaten"}},cement:{dialog:{paste:{title:"Opties voor opmaak plakken",instructions:"Kies of u de opmaak van de geplakte inhoud wilt behouden of verwijderen.",merge:"Opmaak behouden",clean:"Opmaak verwijderen"},flash:{title:"Importeren van lokale afbeelding","trigger-paste":"Druk opnieuw op Ctrl+V als u de inhoud inclusief afbeeldingen wilt plakken.",missing:'Voor het importeren van afbeeldingen uit Microsoft Office is Adobe Flash vereist. Installeer de <a href="http://get.adobe.com/flashplayer/" target="_blank">Adobe Flash Player</a>.',"press-escape":'Druk op <span class="ephox-polish-help-kbd">Esc</span> als u lokale afbeeldingen wilt negeren en door wilt gaan met bewerken.'}}},cloud:{error:{apikey:"Uw API-sleutel is ongeldig.",domain:"Uw domein ({0}) wordt niet ondersteund door uw API-sleutel.",plan:"U hebt het op uw plan beschikbare aantal editor downloads overschreden. Ga naar de website voor een upgrade."},dashboard:"Ga naar het beheerdersdashboard"},errors:{paste:{notready:"De functionaliteit Word importeren is niet geladen. Probeer na even wachten opnieuw.",generic:"Er is een fout opgetreden tijdens het plakken van content."},toolbar:{missing:{custom:{string:'Aangepaste opdrachten moeten de eigenschap "{0}" hebben en moeten een tekenreeks zijn'}},invalid:"De configuratie van de werkbalk is ongeldig ({0}). Raadpleeg de console voor meer informatie."},spelling:{missing:{service:"De service Spellingcontrole is niet gevonden: ({0})."}},images:{edit:{needsproxy:"Er is een proxy vereist om afbeeldingen voor dit domein te bewerken: ({0})",proxyerror:"Kan niet communiceren met de proxy om deze afbeelding te bewerken. Raadpleeg de console voor meer informatie.",generic:"Er is een fout opgetreden tijdens het uitvoeren van de afbeeldingsbewerking. Raadpleeg de console voor meer informatie."},disallowed:{local:"Lokale afbeelding plakken is gedeactiveerd. Lokale afbeeldingen zijn uit geplakte inhoud verwijderd.",dragdrop:"Slepen en neerzetten is gedeactiveerd."},upload:{unknown:"Uploaden van afbeelding mislukt",invalid:"Niet alle bestanden zijn verwerkt - sommige waren geen geldige afbeeldingen",failed:"Uploaden van afbeelding mislukt: ({0})",cors:"Kan geen contact krijgen met upload-service afbeeldingen. Mogelijke CORS-fout: ({0})"},missing:{service:"De service Afbeeldingen is niet gevonden: ({0}).",flash:"Afbeeldingen worden mogelijk niet ge\xefmporteerd vanwege de beveiligingsinstellingen van uw browser."},import:{failed:"Importeren van sommige afbeeldingen mislukt.",unsupported:"Niet-ondersteund afbeeldingstype.",invalid:"Afbeelding is ongeldig."}},webview:{image:"Rechtstreeks gekopieerde afbeeldingen kunnen niet worden geplakt."},safari:{image:"Het rechtstreeks plakken van afbeeldingen wordt door Safari niet ondersteund.",url:"Voorgestelde a�|a    �|a                     =V            �:V    8}a            �|a    J      �|a            en plakken."},flash:{crashed:"Afbeeldingen zijn niet ge\xefmporteerd omdat Adobe Flash vastgelopen lijkt te zijn. Dit kan het gevolg zijn van het plakken van grote documenten."},http:{400:"Ongeldige opdracht: {0}",401:"Niet geautoriseerd: {0}",403:"Verboden: {0}",404:"Niet gevonden: {0}",407:"Proxy-verificatie vereist: {0}",409:"Bestandsconflict: {0}",413:"Nettolading te groot: {0}",415:"Niet-ondersteund mediatype: {0}",500:"Interne serverfout: {0}",501:"Niet ge\xefmplementeerd: {0}"}}}},b=function(a,b){var c=a.src.indexOf("?");return a.src.indexOf(b)+b.length===c},c=function(a){for(var b=a.split("."),c=window,d=0;d<b.length&&void 0!==c&&null!==c;++d)c=c[b[d]];return c},d=function(a,b){if(a){var d="data-main",e=a.getAttribute(d);if(e){a.removeAttribute(d);var f=c(e);if("function"==typeof f)return f;console.warn("attribute on "+b+" does not reference a global method")}else console.warn("no data-main attribute found on "+b+" script tag")}},e=function(a,c){var e=d(document.currentScript,c);if(e)return e;for(var f=document.getElementsByTagName("script"),g=0;g<f.length;g++)if(b(f[g],a)){var h=d(f[g],c);if(h)return h}throw"cannot locate "+c+" script tag"},f="2.2.0",g=e("tbio_nl.js","strings for language nl");g({version:f,strings:a})}();