/** @license
 * Copyright (c) 2013-2017 Ephox Corp. All rights reserved.
 * This software is provided "AS IS," without a warranty of any kind.
 */
!function(){var a=function(){return{a11y:{widget:{title:"K\xe4ytett\xe4vyyden tarkistaja",running:"Tarkistetaan...",issue:{counter:"Ongelma {0} / {1}",help:"WCAG 2.0 -viittaus \u2013 avautuu uuteen ikkunaan",none:"K\xe4ytett\xe4vyysongelmia ei havaittu"},previous:"Edellinen ongelma",next:"Seuraava ongelma",repair:"Korjaa ongelma",available:"Korjaus saatavan",ignore:"Ohita"},image:{alttext:{empty:"Kuvilla on oltava vaihtoehtoinen tekstikuvaus",filenameduplicate:"Vaihtoehtoinen teksti ei saa olla sama kuin kuvan tiedostonimi",set:"Anna vaihtoehtoinen teksti:",validation:{empty:"Vaihtoehtoinen teksti ei saa olla tyhj\xe4",filenameduplicate:"Vaihtoehtoinen teksti ei saa olla sama kuin tiedostonimi"}}},table:{caption:{empty:"Taulukoissa on oltava kuvatekstit",summaryduplicate:"Taulukon kuvatekstill\xe4 ja yhteenvedolla ei saa olla sama arvo",set:"Anna kuvateksti:",validation:{empty:"Kuvateksti ei voi olla tyhj\xe4",summaryduplicate:"Taulukon kuvateksti ei voi olla sama kuin taulukon yhteenveto"}},summary:{empty:"Monimutkaisissa taulukoissa tulee olla yhteenvetoja",set:"Anna taulukon yhteenveto:",validation:{empty:"Yhteenveto ei voi olla tyhj\xe4",captionduplicate:"Taulukon yhteenveto ei voi olla sama kuin taulukon kuvateksti"}},rowscells:{none:"Taulukon elementtien on sis\xe4llett\xe4v\xe4 TR- ja TD-tunnisteet"},headers:{none:"Taulukoissa on oltava ainakin yksi yl\xe4tunnistesolu",set:"Valitse taulukon yl\xe4tunniste:",validation:{none:"Valitse joko rivin tai sarakkeen yl\xe4tunniste"}},headerscope:{none:"Taulukon yl\xe4tunnisteita pit\xe4\xe4 k\xe4ytt\xe4\xe4 riviin tai sarakkeeseen",set:"Valitse yl\xe4tunnisteen kattavuus:",scope:{row:"Rivi",col:"Sarake",rowgroup:"Riviryhm\xe4",colgroup:"Sarakeryhm\xe4"}}},heading:{nonsequential:"Otsakkeita on lis\xe4tt\xe4v\xe4 jaksottaisessa j\xe4rjestyksess\xe4. Esimerkki: otsikko1:t\xe4 pit\xe4\xe4 seurata otsikko 2, ei otsikko 3.",paragraphmisuse:"T\xe4m\xe4 kappale n\xe4ytt\xe4\xe4 otsikolta. Jos se on otsikko, valitse otsikkotaso.",set:"Valitse otsikkotaso:"},link:{adjacent:"Samaan URL:\xe4\xe4n viittaavat viereiset linkit tulee sulauttaa yhdeksi linkiksi"},list:{paragraphmisuse:"Valittu teksti n\xe4ytt\xe4\xe4 olevan lista. Listat tulee muotoilla k\xe4ytt\xe4en listatunnistetta."},contrast:{smalltext:"Tekstin kontrastisuhteen on oltava ainakin 4,5:1",largetext:"Suuren tekstin kontrastisuhteen on oltava ainakin 3:1"},severity:{error:"Virhe",warning:"Varoitus",info:"Informatiivinen"}},aria:{autocorrect:{announce:"Automaattinen korjaus {0}"},label:{toolbar:"Rich Text -editorin ty\xf6kalurivi",editor:"Textbox.io Rich Text -editori \u2013 {0}",fullscreen:"Koko n\xe4yt\xf6n Textbox.io Rich Text -editori \u2013 {0}",content:"Muokattava sis\xe4lt\xf6",more:"Laajenna tai supista napsauttamalla"},help:{mac:"Paina \u2303\u2325H ohjetta varten",ctrl:"Paina CTRL SHIFT H ohjetta varten"},color:{picker:"V\xe4rivalitsin",menu:"V\xe4rinvalitsinvalikko"},font:{color:"Tekstiv\xe4rit",highlight:"Korostusv\xe4rit",palette:"V\xe4ripaletti"},context:{menu:{generic:"Kontekstivalikko"}},stepper:{input:{invalid:"Koon arvo ei kelpaa"}},table:{headerdescription:"Aktivoi asetus painamalla v\xe4lily\xf6nti\xe4. Palaa taulukko-valitsimeen painamalla sarkainta.",cell:{border:{size:"Reunuksen koko"}}},input:{invalid:"Sy\xf6te ei kelpaa"},widget:{navigation:"Navigoi nuolin\xe4pp\xe4imill\xe4."},image:{crop:{size:"Rajauskoko on {0} pikseli\xe4 kertaa {1} pikseli\xe4"}}},color:{white:"Valkoinen",black:"Musta",gray:"Harmaa",metal:"Metalli",smoke:"Savu",red:"Punainen",darkred:"Tumma punainen",darkorange:"Tumma oranssi",orange:"Oranssi",yellow:"Keltainen",green:"Vihre\xe4",darkgreen:"Tumma vihre\xe4",mediumseagreen:"Keskitumma merenvihre\xe4",lightgreen:"Vaalea vihre\xe4",lime:"Lime",mediumblue:"Keskitumma sininen",navy:"Navy",blue:"Sininen",lightblue:"Vaalea sininen",violet:"Violetti"},directionality:{rtldir:"Suunta oikealta vasemmalle",ltrdir:"Suunta vasemmalta oikealle"},parlance:{menu:"Kielivalikko",set:"Aseta kieli",ar:"Arabia",ca:"Katalaani",zh_cn:"Kiina (yksinkertaistettu)",zh_tw:"Kiina (perinteinen)",hr:"Kroatia",cs:"T\u0161ekki",da:"Tanska",nl:"Hollanti",en:"Englanti",en_au:"Englanti (Australia)",en_ca:"Englanti (Kanada)",en_gb:"English (Yhdistynyt kuningaskunta)",en_us:"English (Yhdysvallat)",fa:"Farsi",fi:"Suomi",fr:"Ranska",fr_ca:"Ranska (Kanada)",de:"Saksa",el:"Kreikka",he:"Heprea",hu:"Unkari",it:"Italia",ja:"Japani",kk:"Kazakki",ko:"Korea",no:"Norja",pl:"Puola",pt_br:"Portugali (Brasilia)",pt_pt:"Portugali (Portugali)",ro:"Romania",ru:"Ven\xe4j\xe4",sk:"Slovakki",sl:"Sloveeni",es:"Espanja",es_419:"Espanja (latinalainen Amerikka)",es_es:"Espanja (Espanja)",sv:"Ruotsi",tt:"Tatar",th:"Thai",tr:"Turkki",uk:"Ukraina"},taptoedit:"Muokkaa napauttamalla",plaincode:{dialog:{title:"Koodin\xe4kym\xe4",editor:"HTML-l\xe4hde-editori"}},help:{dialog:{accessibility:"N\xe4pp\xe4imist\xf6navigointi",a11ycheck:"K\xe4ytett\xe4vyyden tarkistus",about:"Tietoja Textbox.iosta",markdown:"Markdown-muotoilu",shortcuts:"N\xe4pp\xe4imist\xf6oikopolut"}},spelling:{context:{more:"Enemm\xe4n...",morelabel:"Lis\xe4\xe4 lausuntavaihtoehtoja -alavalikko"},none:"Ei mit\xe4\xe4n",menu:"Oikeinkirjoituksen kieli"},specialchar:{open:"Erikoismerkki",dialog:"Lis\xe4\xe4 erikoismerkki",latin:"Latina",insert:"Lis\xe4\xe4",punctuation:"V\xe4limerkit",currency:"Valuutat","extended-latin-a":"Laajennettu latina A","extended-latin-b":"Laajennettu latina B",arrows:"Nuolet",mathematical:"Matemaattiset",miscellaneous:"Sekalaiset",selects:"Valitut merkit",grid:"Erikoismerkit"},insert:{"menu-button":"Lis\xe4ysvalikko",menu:"Lis\xe4\xe4",link:"Linkki",image:"Kuva",table:"Taulukko",horizontalrule:"Vaakaviivain",media:"Media"},media:{embed:"Median upotuskoodi",insert:"Lis\xe4\xe4",placeholder:"Liit\xe4 upotettava koodi t\xe4h\xe4n."},wordcount:{open:"Sanam\xe4\xe4r\xe4",dialog:"Sanam\xe4\xe4r\xe4",counts:"Lasku",selection:"Valinta",document:"Asiakirja",characters:"Merkki\xe4",charactersnospaces:"Merkki\xe4 (ilman v\xe4lily\xf6ntej\xe4)",words:"Sanaa"},list:{unordered:{menu:"J\xe4rjest\xe4m\xe4tt\xf6m\xe4n listan valinnat",default:"Oletuksena j\xe4rjest\xe4m\xe4t\xf6n",circle:"Ympyr\xe4 j\xe4rjest\xe4m\xe4t\xf6n",square:"Neli\xf6 j\xe4rjest\xe4m\xe4t\xf6n",disc:"Kiekko j\xe4rjestelm\xe4t\xf6n"},ordered:{menu:"J\xe4rjestetyn listan valinnat",default:"Oletuksena j\xe4rjestetty",decimal:"Desimaali j\xe4rjestetty","upper-alpha":"Iso kirjain j\xe4rjestetty","lower-alpha":"Pieni kirjain j\xe4rjestetty","upper-roman":"Iso roomalainen j\xe4rjestetty","lower-roman":"Pieni roomalainen j\xe4rjestetty","lower-greek":"Pieni kreikkalainen j\xe4rjestetty"}},tag:{inline:{class:"span ({0})"},img:"kuva"},block:{normal:"Normaali",p:"Kappale",h1:"Otsikko 1",h2:"Otsikko 2",h3:"Otsikko 3",h4:"Otsikko 4",h5:"Otsikko 5",h6:"Otsikko 6",div:"Div",pre:"Pre",li:"Luettelon kohta",td:"Solu",th:"Otsikkosolu",styles:"Tyylivalikko",dropdown:"Lohkot",describe:"Nykyinen tyyli {0}",menu:"Tyylit",label:{inline:"Inline-tyylit",table:"Taulukkotyylit",line:"Viivatyylit",media:"Mediatyylit",list:"Luettelotyylit",link:"Linkkityylit"}},font:{"menu-button":"Fonttivalikko",menu:"Fontti",face:"Kirjasintyyppi",size:"Fonttikoko",coloroption:"V\xe4ri",describe:"Nykyinen fontti {0}",color:"Teksti",highlight:"Korostus",stepper:{input:"Aseta fonttikoko",increase:"Lis\xe4\xe4 fonttikokoa",decrease:"V\xe4henn\xe4 fonttikokoa"}},cog:{"menu-button":"Asetusvalikko",menu:"Asetukset",spellcheck:"Oikeinkirjoituksen tarkistus",capitalisation:"Ison kirjaimen k\xe4ytt\xf6",autocorrect:"Automaattinen korjaus",linkpreviews:"Linkkien esikatselut",help:"Ohje"},alignment:{toolbar:"Tasausvalikko",menu:"Tasaus",left:"Tasaa vasemmalle",center:"Tasaa keskelle",right:"Tasaa oikealle",justify:"Tasaa Sovitettu",describe:"Nykyinen kohdistus {0}"},category:{language:"Kieliryhm\xe4",undo:"Kumoa ja tee uudelleen ryhm\xe4",insert:"Lis\xe4\xe4 ryhm\xe4",style:"Tyylit-ryhm\xe4",emphasis:"Muotoiluryhm\xe4",align:"Tasausryhm\xe4",listindent:"Luettele ja sisenn\xe4 -ryhm\xe4",format:"Fonttiryhm\xe4",tools:"Ty\xf6kaluryhm\xe4",table:"Taulukkoryhm\xe4",image:"Kuvanmuokkausryhm\xe4"},action:{undo:"Kumoa",redo:"Tee uudelleen",bold:"Lihavoitu",italic:"Kursivoitu",underline:"Alleviivaus",strikethrough:"Yliviivaus",subscript:"Alaindeksi",superscript:"Yl\xe4indeksi",removeformat:"Poista muotoilu",bullist:"J\xe4rjest\xe4m\xe4t\xf6n luettelo",numlist:"J\xe4rjestetty luettelo",indent:"Sisenn\xe4 lis\xe4\xe4",outdent:"Sisenn\xe4 v\xe4hemm\xe4n",blockquote:"Blockquote",fullscreen:"Koko n\xe4ytt\xf6",search:"Etsi ja korvaa -valintaikkuna",a11ycheck:"Tarkista k\xe4ytett\xe4vyys",toggle:{fullscreen:"Poistu t\xe4ysn\xe4yt\xf6st\xe4"}},table:{menu:"Lis\xe4\xe4 taulukko","column-header":"Otsikkosarake","row-header":"Otsikkorivi",float:"Kelluva tasaus",cell:{color:{border:"Reunuksen v\xe4ri",background:"Taustan v\xe4ri"},border:{width:"Reunuksen leveys",stepper:{input:"Aseta reunuksen leveys",increase:"Lis\xe4\xe4 reunuksen leveytt\xe4",decrease:"V\xe4henn\xe4 reunuksen leveytt\xe4"}}},context:{row:{title:"Rivi-alavalikko",menu:"Rivi",insertabove:"Lis\xe4\xe4 yl\xe4puolelle",insertbelow:"Lis\xe4\xe4 alapuolelle"},column:{title:"Sarake-alavalikko",menu:"Sarake",insertleft:"Lis\xe4\xe4 vasemmalle",insertright:"Lis\xe4\xe4 oikealle"},cell:{merge:"Yhdist\xe4 solut",unmerge:"Jaa solu","split-cols":"Jaa sarakkeisiin","split-rows":"Jaa riveihin"},table:{title:"Taulukko-alavalikko",menu:"Taulukko",properties:"Ominaisuudet",delete:"Poista"},common:{delete:"Poista",normal:"Aseta normaaliksi",header:"Aseta otsikoksi"},palette:{show:"Taulukon muokkausvaihtoehtoja k\xe4ytett\xe4v\xe4n\xe4 ty\xf6kalurivill\xe4",hide:"Taulukon muokkausvaihtoehdot eiv\xe4t ole en\xe4\xe4 saatavana"}},picker:{header:"Yl\xe4tunnisteen asetus",label:"Taulukko-valitsin",describepicker:"K\xe4yt\xe4 nuolin\xe4pp\xe4imi\xe4 taulukon koon asetukseen.  Siirry taulukon yl\xe4viiteasetuksiin painamalla sarkainta. Lis\xe4\xe4 taulukko painamalla v\xe4lily\xf6nti\xe4 tai enteri\xe4.",rows:"{0} korkea",cols:"{0} leve\xe4"},border:"Reunus",summary:"Yhteenveto",dialog:"Taulukon ominaisuudet",caption:"Taulukon otsikko",width:"Leveys",height:"Korkeus"},align:{none:"Kohdistus ei mit\xe4\xe4n",center:"Tasaa keskelle",left:"Tasaa vasemmalle",right:"Tasaa oikealle"},button:{ok:"OK",cancel:"Peruuta",close:"Peruuta valintaikkuna"},banner:{close:"Sulje banneri"},border:{on:"P\xe4\xe4ll\xe4",off:"Pois p\xe4\xe4lt\xe4",labels:{on:"Raja p\xe4\xe4ll\xe4",off:"Raja pois p\xe4\xe4lt\xe4"}},loading:{wait:"Odota"},toolbar:{more:"Enemm\xe4n...",backbutton:"Takaisin","switch-code":"Vaihda koodin\xe4kym\xe4\xe4n","switch-pencil":"Vaihda suunnittelun\xe4kym\xe4\xe4n"},link:{context:{edit:"Muokkaa linkki\xe4",follow:"Avaa linkki",ignore:"Sivuuta viallinen linkki",remove:"Poista linkki"},dialog:{aria:{update:"P\xe4ivit\xe4 linkki",insert:"Lis\xe4\xe4 linkki",properties:"Linkin ominaisuudet",quick:"Pikavalinnat"},autocomplete:{open:"Linkin automaattisen t\xe4ydennyksen lista k\xe4ytett\xe4viss\xe4. Jatka n\xe4pp\xe4ily\xe4 tai k\xe4yt\xe4 yl\xf6s- ja alas-nuolia valitsemaan ehdotuksia.",close:"Linkin automaattisen t\xe4ydennyksen lista suljettu",accept:"Valittu linkkiehdotus {0}"},edit:"Muokkaa",remove:"Poista",preview:"Esikatselu",update:"P\xe4ivit\xe4",insert:"Lis\xe4\xe4",tooltip:"Linkki"},properties:{dialog:{title:"Linkin ominaisuudet"},text:{label:"N\xe4ytett\xe4v\xe4 teksti",placeholder:"N\xe4pp\xe4ile tai liit\xe4 esitett\xe4v\xe4 teksti"},url:{label:"Linkin URL tai Kirjanmerkki",placeholder:"Anna linkin URL tai Kirjanmerkki",invalid:"Linkkisi URL voi olla v\xe4\xe4rin"},title:{label:"Otsikko",placeholder:"N\xe4pp\xe4ile tai liit\xe4 linkin otsikko"},button:{remove:"Poista"},target:{label:"Kohde",none:"Ei mit\xe4\xe4n",blank:"Uusi ikkuna",top:"Kokonainen sivu",self:"Sama kehys",parent:"Yl\xe4tason kehys"}},anchor:{top:"Asiakirjan yl\xe4osa",bottom:"Asiakirjan alaosa"}},fileupload:{title:"Lis\xe4\xe4 kuvia",tablocal:"Paikallistiedostot",tabweburl:"Verkko-URL",dropimages:"Pudota kuvat t\xe4h\xe4n",chooseimage:"Valitse ladattava kuva",web:{url:"Verkkokuvan URL:"},weburlhelp:"Kirjoita URL:\xe4si n\xe4hd\xe4ksesi esikatselukuvan. Suurien kuvien n\xe4kyminen voi kest\xe4\xe4 kauemmin.",invalid1:"K\xe4ytt\xe4m\xe4st\xe4si URL:st\xe4 ei l\xf6ydy kuvaa.",invalid2:"Tarkista, onko URL:ss\xe4 kirjoitusvirheit\xe4.",invalid3:"Varmista, ett\xe4 k\xe4ytt\xe4m\xe4si kuva on julkinen, eik\xe4 salasanasuojattu tai yksityisess\xe4 verkossa."},image:{context:{properties:"Kuvan ominaisuudet",palette:{show:"Kuvan muokkausvaihtoehtoja k\xe4ytett\xe4v\xe4n\xe4 ty\xf6kalurivill\xe4",hide:"Kuvan muokkausvaihtoehdot eiv\xe4t ole en\xe4\xe4 saatavana"}},dialog:{title:"Kuvan ominaisuudet",fields:{align:"Kelluva tasaus",url:"URL",urllocal:"Kuvaa ei viel\xe4 tallennettu",alt:"Vaihtoehtoinen teksti",width:"Leveys",height:"Korkeus",constrain:{label:"Rajauksen mittasuhteet",on:"Lukitut mittasuhteet",off:"Lukitsemattomat mittasuhteet"}}},menu:"Lis\xe4\xe4 kuva","menu-button":"Lis\xe4\xe4 kuvavalikko","from-url":"Verkko-URL","from-camera":"Kamerarulla",toolbar:{rotateleft:"Kierr\xe4 vasemmalle",rotateright:"Kierr\xe4 oikealle",fliphorizontal:"K\xe4\xe4nn\xe4 vaakasuunnassa",flipvertical:"K\xe4\xe4nn\xe4 pystysuunnassa",properties:"Kuvan ominaisuudet"},crop:{announce:"Siirryt\xe4\xe4n rajausk\xe4ytt\xf6liittym\xe4\xe4n. K\xe4yt\xe4 painamalla enter, peruuta painamalla escape.",cancel:"Perutaan rajaustoiminto",begin:"Rajaa kuva.",apply:"K\xe4yt\xe4 rajausta",handle:{nw:"Vasen yl\xe4nurkan rajauskahva",ne:"Oikea yl\xe4nurkan rajauskahva",se:"Oikea alanurkan rajauskahva",sw:"Vasemman alanurkan rajauskahva",shade:"Rajausmaski"}}},units:{"amount-of-total":"{0} / {1}"},search:{menu:"Etsi ja korvaa",field:{replace:"Korvaa kentt\xe4",search:"Hae kentt\xe4"},search:"Etsi",previous:"Edellinen",next:"Seuraava",replace:"Korvaa","replace-all":"Korvaa kaikki",matchcase:"Sama kirjainkoko"},mentions:{initiated:"Maininta luotu, jatka kirjoittamista ennakoivaa kirjoitusta varten",lookahead:{open:"Ennakoiva kirjoitus -listaruutu",cancelled:"Peruutettu maininta",searching:"Haetaan tuloksia",selected:"Lis\xe4tty maininta kohteesta {0}",noresults:"Ei tuloksia"}},cement:{dialog:{paste:{title:"Liitt\xe4misen muotoiluvalinnat",instructions:"Valitse, pidet\xe4\xe4nk\xf6 vai poistetaanko liitetyn sis\xe4ll\xf6n muotoilu.",merge:"Pid\xe4 muotoilu",clean:"Poista muotoilu"},flash:{title:"Paikallisen kuvan tuonti","trigger-paste":"Laukaise liit\xe4 uudestaan n\xe4pp\xe4imist\xf6lt\xe4 kuvia sis\xe4lt\xe4v\xe4n sis\xe4ll\xf6n liitt\xe4miseksi.",missing:'Adobe Flash tarvitaan tuomaan kuvia Microsoft Officesta. Asenna <a href="http://get.adobe.com/flashplayer/" target="_blank">Adobe Flash Player</a>.',"press-escape":'Paina <span class="ephox-polish-help-kbd">ESC</span> sivuuttaaksesi paikalliset kuvat ja jatkaaksesi muokkausta.'}}},cloud:{error:{apikey:"API-avaimesi ei kelpaa.",domain:"Hallinta-avaimellasi ({0}) ei ole API-avaimesi tukea.",plan:"Olet ylitt\xe4nyt sinun suunnitelmassasi saatavana olevan editorin latausm\xe4\xe4r\xe4n. K\xe4y verkkosivustolla p\xe4ivitt\xe4m\xe4ss\xe4."},dashboard:"Siirry p\xe4\xe4k\xe4ytt\xe4j\xe4n koontin\xe4ytt\xf6\xf6n"},errors:{paste:{notready:"Word Import -toiminnallisuutta ei ole ladattu. Odota ja yrit\xe4 uudestaan.",generic:"Virhe sis\xe4ll\xf6n liitt\xe4misen aikana."},toolbar:{missing:{custom:{string:'Mukautetuissa komennoissa on oltava ominaisuus "{0}" ja sen tulee olla merkkijono'}},invalid:"Ty\xf6kalurivin m\xe4\xe4ritys ei kelpaa ({0}). Katso lis\xe4tiedot konsolista."},spelling:{missing:{service:"Oikeinkirjoituksen tarkistuspalvelua ei l\xf6ytynyt: ({0})."}},images:{edit:{needsproxy:"V\xe4lityspalvelin tarvitaan muokkaamaan kuvia t\xe4st\xe4 toimialueesta: ({0})",proxyerror:"Kommunikointi v\xe4lityspalvelimen kanssa ei onnistu t\xe4m\xe4n kuvan muokkaamiseksi. Katso lis\xe4tiedot konsolista.",generic:"Virhe kuvan muokkaustoiminnon aikana. Katso lis\xe4tiedot konsolista."},disallowed:{local:"Paikallisen kuvan liitt\xe4minen on pois k\xe4yt\xf6st\xe4. Paikalliset kuvat on poistettu liitetyst\xe4 sis\xe4ll\xf6st\xe4.",dragdrop:"Ved\xe4 ja pudota on pois k\xe4yt\xf6st\xe4."},upload:{unknown:"Kuvan lataaminen ep\xe4onnistui",invalid:"Kaikkia tiedostoja ei k\xe4�oe    �oe                    ��Q            @)c    Hpe             pe    �       pe            stui: ({0}).",cors:"Yhteytt\xe4 kuvanlatauspalveluun ei saada. Mahdollinen CORS-virhe: ({0})"},missing:{service:"Kuvapalvelua ei l\xf6ytynyt: ({0}).",flash:"Selaimesi tietoturva-asetukset saattavat est\xe4\xe4 kuvien tuonnin."},import:{failed:"Joiden kuvien tuonti ep\xe4onnistui.",unsupported:"Kuvatyyppi ei ole tuettu.",invalid:"Kuva ei kelpaa."}},webview:{image:"Suoraan kopioituja kuvia ei voi liitt\xe4\xe4."},safari:{image:"Safari ei tue kuvien suoraa liitt\xe4mist\xe4.",url:"Ehdotetut kiertotavat",rtf:"Lue, miten","browser-settings":"S\xe4\xe4d\xe4 kuvien liitt\xe4miseksi selaimesi asetukset."},flash:{crashed:"Kuvia ei ole tuotu, koska Adobe Flash n\xe4ytt\xe4\xe4 kaatuneen. T\xe4m\xe4 voi johtua suurten asiakirjojen liitt\xe4misest\xe4."},http:{400:"Virheellinen pyynt\xf6: {0}",401:"Luvaton: {0}",403:"Kielletty: {0}",404:"Ei l\xf6ytynyt: {0}",407:"V\xe4lityspalvelimen varmennus vaaditaan: {0}",409:"Tiedostoristiriita: {0}",413:"Hy\xf6tykuorma liian suuri: {0}",415:"Mediatyyppi\xe4 ei tueta: {0}",500:"Sis\xe4inen palvelinvirhe: {0}",501:"Ei toteutettu: {0}"}}}},b=function(a,b){var c=a.src.indexOf("?");return a.src.indexOf(b)+b.length===c},c=function(a){for(var b=a.split("."),c=window,d=0;d<b.length&&void 0!==c&&null!==c;++d)c=c[b[d]];return c},d=function(a,b){if(a){var d="data-main",e=a.getAttribute(d);if(e){a.removeAttribute(d);var f=c(e);if("function"==typeof f)return f;console.warn("attribute on "+b+" does not reference a global method")}else console.warn("no data-main attribute found on "+b+" script tag")}},e=function(a,c){var e=d(document.currentScript,c);if(e)return e;for(var f=document.getElementsByTagName("script"),g=0;g<f.length;g++)if(b(f[g],a)){var h=d(f[g],c);if(h)return h}throw"cannot locate "+c+" script tag"},f="2.2.0",g=e("tbio_fi.js","strings for language fi");g({version:f,strings:a})}();