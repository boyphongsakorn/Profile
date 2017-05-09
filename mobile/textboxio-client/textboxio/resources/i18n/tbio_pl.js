/** @license
 * Copyright (c) 2013-2017 Ephox Corp. All rights reserved.
 * This software is provided "AS IS," without a warranty of any kind.
 */
!function(){var a=function(){return{a11y:{widget:{title:"Narz\u0119dzie do sprawdzania u\u0142atwie\u0144 dost\u0119pu",running:"Sprawdzanie...",issue:{counter:"Problem {0} z {1}",help:"Skorowidz WCAG 2.0 \u2014 strona otwiera si\u0119 w nowym oknie",none:"Nie wykryto \u017cadnych problem\xf3w z u\u0142atwieniami dost\u0119pu"},previous:"Poprzedni problem",next:"Nast\u0119pny problem",repair:"Wyeliminuj problem",available:"Dost\u0119pny spos\xf3b eliminacji",ignore:"Ignoruj"},image:{alttext:{empty:"Obrazy musz\u0105 mie\u0107 alternatywne opisy tekstowe",filenameduplicate:"Alternatywny tekst musi by\u0107 inny ni\u017c nazwa pliku obrazu",set:"Udost\u0119pni\u0107 tekst alternatywny:",validation:{empty:"Tekst alternatywny nie mo\u017ce by\u0107 pusty",filenameduplicate:"Tekst alternatywny musi si\u0119 r\xf3\u017cni\u0107 od nazwy pliku"}}},table:{caption:{empty:"Tabele musz\u0105 mie\u0107 podpisy",summaryduplicate:"Podpis tabeli nie mo\u017ce mie\u0107 tej samej warto\u015bci, co podsumowanie",set:"Udost\u0119pni\u0107 podpis:",validation:{empty:"Podpis nie mo\u017ce by\u0107 pusty",summaryduplicate:"Podpis tabeli nie mo\u017ce by\u0107 taki sam, jak podsumowanie tabeli"}},summary:{empty:"Tabela z\u0142o\u017cona powinna mie\u0107 podsumowanie zawarto\u015bci",set:"Udost\u0119pni\u0107 podsumowanie tabeli:",validation:{empty:"Podsumowanie nie mo\u017ce by\u0107 puste",captionduplicate:"Podsumowanie tabeli nie mo\u017ce by\u0107 takie samo, jak podpis tabeli"}},rowscells:{none:"Elementy tabeli musz\u0105 zawiera\u0107 znaczniki TR i TD"},headers:{none:"Tabela musi zawiera\u0107 co najmniej jedn\u0105 kom\xf3rk\u0119 nag\u0142\xf3wka",set:"Wybra\u0107 nag\u0142\xf3wek tabeli:",validation:{none:"Wybra\u0107 nag\u0142\xf3wek wiersza lub kolumny"}},headerscope:{none:"Nag\u0142\xf3wki tabel musz\u0105 dotyczy\u0107 wierszy lub kolumn",set:"Wybra\u0107 zakres nag\u0142\xf3wka:",scope:{row:"Wiersz",col:"Kolumna",rowgroup:"Grupa wierszy",colgroup:"Grupa kolumn"}}},heading:{nonsequential:"Nag\u0142\xf3wki musz\u0105 by\u0107 stosowane kolejno. Na przyk\u0142ad: po Nag\u0142\xf3wku 1 powinien nast\u0119powa\u0107 Nag\u0142\xf3wek 2, a nie Nag\u0142\xf3wek 3.",paragraphmisuse:"Ten akapit wygl\u0105da jak nag\u0142\xf3wek. Je\u015bli jest to nag\u0142\xf3wek, nale\u017cy wybra\u0107 poziom nag\u0142\xf3wka.",set:"Wybra\u0107 pozioma nag\u0142\xf3wka:"},link:{adjacent:"\u0141\u0105cza s\u0105siaduj\u0105ce o takim samym adresie URL powinny by\u0107 scalane w jedno \u0142\u0105cze"},list:{paragraphmisuse:"Wybrany tekst wygl\u0105da jak lista. Listy powinny by\u0107 sformatowane z u\u017cyciem znacznika listy."},contrast:{smalltext:"Tekst musi si\u0119 charakteryzowa\u0107 wsp\xf3\u0142czynnikiem kontrastu co najmniej 4,5:1",largetext:"Du\u017cy tekst musi si\u0119 charakteryzowa\u0107 wsp\xf3\u0142czynnikiem kontrastu 3:1"},severity:{error:"B\u0142\u0105d",warning:"Ostrze\u017cenie",info:"Informacja"}},aria:{autocorrect:{announce:"Autokorekta: {0}"},label:{toolbar:"Pasek narz\u0119dzi edytora tekstu sformatowanego",editor:"Textbox.io - edytor tekstu sformatowanego - {0}",fullscreen:"Textbox.io - pe\u0142noekranowy edytor tekstu sformatowanego - {0}",content:"Zawarto\u015b\u0107 edytowalna",more:"Kliknij, aby rozwin\u0105\u0107 lub zwin\u0105\u0107"},help:{mac:"Naci\u015bnij \u2303\u2325H, aby uzyska\u0107 pomoc",ctrl:"Naci\u015bnij CTRL SHIFT H, aby uzyska\u0107 pomoc"},color:{picker:"Selektor kolor\xf3w",menu:"Menu Selektor kolor\xf3w"},font:{color:"Kolory tekstu",highlight:"Kolory pod\u015bwietlenia",palette:"Paleta kolor\xf3w"},context:{menu:{generic:"Menu kontekstowe"}},stepper:{input:{invalid:"Wielko\u015b\u0107 jest nieprawid\u0142owa"}},table:{headerdescription:"W celu aktywacji ustawienia naci\u015bnij klawisz spacji. Aby wr\xf3ci\u0107 do selektora tabel, naci\u015bnij klawisz Tab.",cell:{border:{size:"Rozmiar obramowania"}}},input:{invalid:"Niepoprawne dane wej\u015bciowe"},widget:{navigation:"W celu nawigowania u\u017cyj klawiszy strza\u0142ek."},image:{crop:{size:"Rozmiar przyci\u0119cia: {0} pikseli na {1} pikseli"}}},color:{white:"Bia\u0142y",black:"Czarny",gray:"Szary",metal:"Metaliczny",smoke:"Siwy",red:"Czerwony",darkred:"Ciemnoczerwony",darkorange:"Ciemnopomara\u0144czowy",orange:"Pomara\u0144czowy",yellow:"\u017b\xf3\u0142ty",green:"Zielony",darkgreen:"Ciemnozielony",mediumseagreen:"\u015arednia ziele\u0144 morska",lightgreen:"Jasnozielony",lime:"Limonkowy",mediumblue:"\u015aredni niebieski",navy:"Granatowy",blue:"Niebieski",lightblue:"Jasnoniebieski",violet:"Fioletowy"},directionality:{rtldir:"Kierunek: od prawej do lewej",ltrdir:"Kierunek: od lewej do prawej"},parlance:{menu:"Menu j\u0119zyk\xf3w",set:"Ustaw j\u0119zyk",ar:"Arabski",ca:"Katalo\u0144ski",zh_cn:"Chi\u0144ski (uproszczony)",zh_tw:"Chi\u0144ski (tradycyjny)",hr:"Chorwacki",cs:"Czeski",da:"Du\u0144ski",nl:"Niderlandzki",en:"Angielski",en_au:"Angielski (Australia)",en_ca:"Angielski (Kanada)",en_gb:"Angielski (Wlk. Brytania)",en_us:"Angielski (Stany Zjednoczone)",fa:"Farsi",fi:"Fi\u0144ski",fr:"Francuski",fr_ca:"Francuski (Kanada)",de:"Niemiecki",el:"Grecki",he:"Hebrajski",hu:"W\u0119gierski",it:"W\u0142oski",ja:"Japo\u0144ski",kk:"Kazachski",ko:"Korea\u0144ski",no:"Norweski",pl:"Polski",pt_br:"Portugalski (Brazylia)",pt_pt:"Portugalski (Portugalia)",ro:"Rumu\u0144ski",ru:"Rosyjski",sk:"S\u0142owacki",sl:"S\u0142owe\u0144ski",es:"Hiszpa\u0144ski",es_419:"Hiszpa\u0144ski (Ameryka \u0141aci\u0144ska)",es_es:"Hiszpa\u0144ski (Hiszpania)",sv:"Szwedzki",tt:"Tatarski",th:"Tajski",tr:"Turecki",uk:"Ukrai\u0144ski"},taptoedit:"Stuknij, aby edytowa\u0107",plaincode:{dialog:{title:"Widok kodu",editor:"Edytor \u017ar\xf3d\u0142a HTML"}},help:{dialog:{accessibility:"Nawigacja przy u\u017cyciu klawiatury",a11ycheck:"Sprawdzanie u\u0142atwie\u0144 dost\u0119pu",about:"Informacje o Textbox.io",markdown:"Formatowanie znacznikami",shortcuts:"Skr\xf3ty klawiszowe"}},spelling:{context:{more:"Wi\u0119cej",morelabel:"Menu z dodatkowymi opcjami sprawdzania pisowni"},none:"Brak",menu:"J\u0119zyk sprawdzania pisowni"},specialchar:{open:"Znak specjalny",dialog:"Wstaw znak specjalny",latin:"\u0141aci\u0144ski",insert:"Wstaw",punctuation:"Interpunkcja",currency:"Waluty","extended-latin-a":"Rozszerzony \u0141aci\u0144ski A","extended-latin-b":"Rozszerzony \u0141aci\u0144ski B",arrows:"Strza\u0142ki",mathematical:"Matematyczne",miscellaneous:"R\xf3\u017cne",selects:"Wybrane znaki",grid:"Znaki specjalne"},insert:{"menu-button":"Menu Wstaw",menu:"Wstaw",link:"\u0141\u0105cze",image:"Obraz",table:"Tabela",horizontalrule:"Linijka pozioma",media:"Media"},media:{embed:"Kod osadzenia multimedi\xf3w",insert:"Wstaw",placeholder:"Wklej kod osadzenia tutaj."},wordcount:{open:"Liczba s\u0142\xf3w",dialog:"Liczba s\u0142\xf3w",counts:"Liczba",selection:"Wyb\xf3r",document:"Dokument",characters:"Znaki",charactersnospaces:"Znaki (bez spacji)",words:"S\u0142owa"},list:{unordered:{menu:"Opcje listy nieuporz\u0105dkowanej",default:"Domy\u015blnie nieuporz\u0105dkowane",circle:"Otocz nieuporz\u0105dkowane k\xf3\u0142kiem",square:"Otocz nieuporz\u0105dkowane kwadratem",disc:"Otocz nieuporz\u0105dkowane elips\u0105"},ordered:{menu:"Opcje listy uporz\u0105dkowanej",default:"Domy\u015blnie uporz\u0105dkowane",decimal:"Uporz\u0105dkowane wg warto\u015bci dziesi\u0119tnych","upper-alpha":"Uporz\u0105dkowane wg wielkich liter alfabetu","lower-alpha":"Uporz\u0105dkowane wg ma\u0142ych liter alfabetu","upper-roman":"Uporz\u0105dkowane wg wielkich liter alfabetu \u0142aci\u0144skiego","lower-roman":"Uporz\u0105dkowane wg ma\u0142ych liter alfabetu \u0142aci\u0144skiego","lower-greek":"Uporz\u0105dkowane wg ma\u0142ych liter alfabetu greckiego"}},tag:{inline:{class:"span ({0})"},img:"obraz"},block:{normal:"Normalny",p:"Akapit",h1:"Nag\u0142\xf3wek 1",h2:"Nag\u0142\xf3wek 2",h3:"Nag\u0142\xf3wek 3",h4:"Nag\u0142\xf3wek 4",h5:"Nag\u0142\xf3wek 5",h6:"Nag\u0142\xf3wek 6",div:"Div",pre:"Pre",li:"Pozycja listy",td:"Kom\xf3rka",th:"Kom\xf3rka nag\u0142\xf3wka",styles:"Menu Style",dropdown:"Bloki",describe:"Bie\u017c\u0105cy styl: {0}",menu:"Style",label:{inline:"Style do\u0142\u0105czania",table:"Style tabeli",line:"Style linii",media:"Style multimedi\xf3w",list:"Style listy",link:"Style \u0142\u0105cza"}},font:{"menu-button":"Menu Czcionka",menu:"Czcionka",face:"Czcionka",size:"Rozmiar czcionki",coloroption:"Kolor",describe:"Bie\u017c\u0105ca czcionka: {0}",color:"Tekst",highlight:"Pod\u015bwietlenie",stepper:{input:"Ustaw rozmiar czcionki",increase:"Zmniejsz czcionk\u0119",decrease:"Zwi\u0119ksz czcionk\u0119"}},cog:{"menu-button":"Menu Ustawienia",menu:"Ustawienia",spellcheck:"Sprawdzanie pisowni",capitalisation:"Wielkie litery",autocorrect:"Autokorekta",linkpreviews:"Podgl\u0105d \u0142\u0105cza",help:"Pomoc"},alignment:{toolbar:"Menu Wyr\xf3wnanie",menu:"Wyr\xf3wnanie",left:"Wyr\xf3wnaj do lewej",center:"Wyr\xf3wnaj do \u015brodka",right:"Wyr\xf3wnaj do prawej",justify:"Wyjustuj",describe:"Bie\u017c\u0105ce wyr\xf3wnanie: {0}"},category:{language:"Grupa j\u0119zyk\xf3w",undo:"Grupa Cofnij i Pon\xf3w",insert:"Grupa Wstaw",style:"Grupa Style",emphasis:"Grupa Formatowanie",align:"Grupa Wyr\xf3wnanie",listindent:"Grupa Lista i Wci\u0119cie",format:"Grupa Czcionka",tools:"Grupa Narz\u0119dzia",table:"Grupa Tabela",image:"Grupa Edycja obraz\xf3w"},action:{undo:"Cofnij",redo:"Powt\xf3rz",bold:"Pogrubienie",italic:"Kursywa",underline:"Podkre\u015blenie",strikethrough:"Przekre\u015blenie",subscript:"Indeks dolny",superscript:"Indeks g\xf3rny",removeformat:"Usu\u0144 formatowanie",bullist:"Lista niesortowana",numlist:"Lista sortowana",indent:"Wi\u0119ksze wci\u0119cie",outdent:"Mniejsze wci\u0119cie",blockquote:"Blockquote",fullscreen:"Pe\u0142ny ekran",search:"Okno dialogowe Znajdowanie i zast\u0119powanie",a11ycheck:"Sprawd\u017a u\u0142atwienia dost\u0119pu",toggle:{fullscreen:"Wy\u0142\u0105cz widok na pe\u0142nym ekranie"}},table:{menu:"Wstaw tabel\u0119","column-header":"Kolumna nag\u0142\xf3wka","row-header":"Wiersz nag\u0142\xf3wka",float:"Wyr\xf3wnanie p\u0142ywaj\u0105ce",cell:{color:{border:"Kolor obramowania",background:"Kolor t\u0142a"},border:{width:"Szeroko\u015b\u0107 obramowania",stepper:{input:"Ustaw szeroko\u015b\u0107 obramowania",increase:"Zwi\u0119ksz szeroko\u015b\u0107 obramowania",decrease:"Zmniejsz szeroko\u015b\u0107 obramowania"}}},context:{row:{title:"Podmenu wiersza",menu:"Wiersz",insertabove:"Wstaw powy\u017cej",insertbelow:"Wstaw poni\u017cej"},column:{title:"Podmenu kolumny",menu:"Kolumna",insertleft:"Wstaw po lewej",insertright:"Wstaw po prawej"},cell:{merge:"Scal kom\xf3rki",unmerge:"Podziel kom\xf3rk\u0119","split-cols":"Podziel na kolumny","split-rows":"Podziel na wiersze"},table:{title:"Podmenu tabeli",menu:"Tabela",properties:"W\u0142a\u015bciwo\u015bci",delete:"Usu\u0144"},common:{delete:"Usu\u0144",normal:"Ustaw jako normalny",header:"Ustaw jako nag\u0142\xf3wek"},palette:{show:"Opcje edycji tabeli dost\u0119pne na pasku narz\u0119dzi",hide:"Opcje edycji tabeli, kt\xf3re nie s\u0105 ju\u017c dost\u0119pne"}},picker:{header:"Nag\u0142\xf3wek ustawiony",label:"Selektor tabeli",describepicker:"U\u017cyj klawiszy strza\u0142ek, aby ustawi\u0107 rozmiar tabeli.  Naci\u015bnij klawisz Tab, aby przej\u015b\u0107 do ustawie\u0144 nag\u0142\xf3wka tabeli. W celu wstawienia tabeli naci\u015bnij klawisz spacji lub klawisz Enter.",rows:"Wys. {0}",cols:"Szer. {0}"},border:"Obramowanie",summary:"Podsumowanie",dialog:"W\u0142a\u015bciwo\u015bci tabeli",caption:"Podpis tabeli",width:"Szeroko\u015b\u0107",height:"Wysoko\u015b\u0107"},align:{none:"Nic nie wyr\xf3wnuj",center:"Wyr\xf3wnaj do \u015brodka",left:"Wyr\xf3wnaj do lewej",right:"Wyr\xf3wnaj do prawej"},button:{ok:"OK",cancel:"Anuluj",close:"Anuluj okno dialogowe"},banner:{close:"Zamknij baner"},border:{on:"W\u0142.",off:"Wy\u0142.",labels:{on:"W\u0142\u0105cz obramowanie",off:"Wy\u0142\u0105cz obramowanie"}},loading:{wait:"Prosz\u0119 czeka\u0107"},toolbar:{more:"Wi\u0119cej",backbutton:"Wstecz","switch-code":"Prze\u0142\u0105cz do widoku Kod","switch-pencil":"Prze\u0142\u0105cz do widoku Projekt"},link:{context:{edit:"Edytuj \u0142\u0105cze",follow:"Otw\xf3rz \u0142\u0105cze",ignore:"Ignoruj nieprawid\u0142owe \u0142\u0105cze",remove:"Usu\u0144 \u0142\u0105cze"},dialog:{aria:{update:"Aktualizuj \u0142\u0105cze",insert:"Wstaw \u0142\u0105cze",properties:"W\u0142a\u015bciwo\u015bci \u0142\u0105cza",quick:"Szybkie opcje"},autocomplete:{open:"Lista autouzupe\u0142niania \u0142\u0105czy jest dost\u0119pna. Kontynuuj pisanie lub u\u017cyj klawiszy ze strza\u0142kami w g\xf3r\u0119 i w d\xf3\u0142, aby wybra\u0107 propozycj\u0119.",close:"Lista autouzupe\u0142niania \u0142\u0105czy zamkni\u0119ta",accept:"Wybierz propozycj\u0119 \u0142\u0105cza {0}"},edit:"Edytuj",remove:"Usu\u0144",preview:"Podgl\u0105d",update:"Aktualizuj",insert:"Wstaw",tooltip:"\u0141\u0105cze"},properties:{dialog:{title:"W\u0142a\u015bciwo\u015bci \u0142\u0105cza"},text:{label:"Tekst do wy\u015bwietlenia",placeholder:"Wpisz lub wklej tekst do wy\u015bwietlenia"},url:{label:"Adres URL \u0142\u0105cza lub zak\u0142adka",placeholder:"Wprowad\u017a adres URL \u0142\u0105cza lub zak\u0142adk\u0119",invalid:"Mo\u017cliwe, \u017ce podany adres URL \u0142\u0105cza jest niepoprawny"},title:{label:"Tytu\u0142",placeholder:"Wpisz lub wklej tytu\u0142 \u0142\u0105cza"},button:{remove:"Usu\u0144"},target:{label:"Cel",none:"Brak",blank:"Nowe okno",top:"Ca\u0142a strona",self:"Ta sama ramka",parent:"Ramka nadrz\u0119dna"}},anchor:{top:"Pocz\u0105tek dokumentu",bottom:"Koniec dokumentu"}},fileupload:{title:"Wstaw obrazy",tablocal:"Pliki lokalne",tabweburl:"Adres strony WWW",dropimages:"Tutaj upu\u015b\u0107 obrazy",chooseimage:"Wybierz obraz do przekazania",web:{url:"Adres URL obrazu z sieci WWW:"},weburlhelp:"Wpisz adres URL, aby wy\u015bwietli\u0107 podgl\u0105d obrazu. W przypadku wi\u0119kszych obraz\xf3w ich wy\u015bwietlenie mo\u017ce zaj\u0105\u0107 d\u0142u\u017csz\u0105 chwil\u0119.",invalid1:"Nie uda\u0142o si\u0119 znale\u017a\u0107 obrazu pod wskazanym adresem URL.",invalid2:"Sprawd\u017a, czy w adresie URL nie wprowadzono b\u0142\u0119d\xf3w literowych.",invalid3:"Upewnij si\u0119, \u017ce obraz, do kt\xf3rego uzyskujesz dost\u0119p, jest dost\u0119pny w sieci publicznej i nie jest zabezpieczony has\u0142em ani zlokalizowany w sieci prywatnej."},image:{context:{properties:"W\u0142a\u015bciwo\u015bci obrazu",palette:{show:"Opcje edycji obrazu dost\u0119pne na pasku narz\u0119dzi",hide:"Opcje edycji obrazu, kt\xf3re nie s\u0105 ju\u017c dost\u0119pne"}},dialog:{title:"W\u0142a\u015bciwo\u015bci obrazu",fields:{align:"Wyr\xf3wnanie p\u0142ywaj\u0105ce",url:"URL",urllocal:"Obraz nie jest jeszcze zapisany",alt:"Tekst alternatywny",width:"Szeroko\u015b\u0107",height:"Wysoko\u015b\u0107",constrain:{label:"Ogranicz zmiany proporcji",on:"Proporcje zablokowane",off:"Proporcje odblokowane"}}},menu:"Wstaw obraz","menu-button":"Menu Wstaw obraz","from-url":"Adres strony WWW","from-camera":"Rolka z aparatu",toolbar:{rotateleft:"Obr\xf3\u0107 w lewo",rotateright:"Obr\xf3\u0107 w prawo",fliphorizontal:"Przerzu\u0107 w poziomie",flipvertical:"Przerzu\u0107 w pionie",properties:"W\u0142a\u015bciwo\u015bci obrazu"},crop:{announce:"Przej\u015bcie do interfejsu przycinania. Aby zastosowa\u0107, naci\u015bnij klawisz Enter. Klawisz Esc powoduje anulowanie.",cancel:"Anulowanie operacji przycinania",begin:"Przytnij obraz",apply:"Zastosowanie przyci\u0119cia",handle:{nw:"Lewy g\xf3rny uchwyt przycinania",ne:"Prawy g\xf3rny uchwyt przycinania",se:"Prawy dolny uchwyt przycinania",sw:"Lewy dolny uchwyt przycinania",shade:"Maska przycinania"}}},units:{"amount-of-total":"{0} z {1}"},search:{menu:"Znajdowanie i zast\u0119powanie",field:{replace:"Pole Znajd\u017a",search:"Pole Zast\u0105p"},search:"Wyszukaj",previous:"Poprzedni",next:"Nast\u0119pny",replace:"Zast\u0105p","replace-all":"Zast\u0105p wszystkie",matchcase:"Uwzgl\u0119dniaj wielko\u015b\u0107 liter"},mentions:{initiated:"Utworzono wzmiank\u0119. Kontynuuj pisanie, aby u\u017cy\u0107 funkcji automatycznego uzupe\u0142niania",lookahead:{open:"Pole listy automatycznego uzupe\u0142niania",cancelled:"Wzmianka anulowana",searching:"Wyszukiwanie wynik\xf3w",`�c    `�c                    ��Q            @)c    ��c            ��c    �      ��c            Wklej opcje formatowania",instructions:"Wybierz opcj\u0119 zachowywania lub usuwania formatowania we wklejanej tre\u015bci.",merge:"Zachowaj formatowanie",clean:"Usu\u0144 formatowanie"},flash:{title:"Importuj obraz lokalny","trigger-paste":"Aktywuj ponownie wklejanie za pomoc\u0105 klawiatury, aby wklei\u0107 tre\u015b\u0107 wraz z obrazami.",missing:'Do zaimportowania obraz\xf3w z programu Microsoft Office wymagany jest program Adobe Flash. Zainstaluj program <a href="http://get.adobe.com/flashplayer/" target="_blank">Adobe Flash Player</a>.',"press-escape":'Naci\u015bnij klawisz <span class="ephox-polish-help-kbd">ESC</span>, aby zignorowa\u0107 obrazy lokalne i kontynuowa\u0107 edycj\u0119.'}}},cloud:{error:{apikey:"Tw\xf3j klucz API jest niepoprawny.",domain:"Twoja domena ({0}) nie jest obs\u0142ugiwana przez Tw\xf3j klucz API.",plan:"Nast\u0105pi\u0142o przekroczenie liczby pobra\u0144 edytora dost\u0119pnych dla Twojego planu. W celu uaktualnienia przejd\u017a do serwisu WWW."},dashboard:"Przejd\u017a do pulpitu administratora"},errors:{paste:{notready:"Funkcja importu programu Word nie zosta\u0142a za\u0142adowana. Poczekaj i spr\xf3buj ponownie.",generic:"Podczas wklejania tre\u015bci wyst\u0105pi\u0142 b\u0142\u0105d."},toolbar:{missing:{custom:{string:"Polecenia niestandardowe musz\u0105 mie\u0107 w\u0142a\u015bciwo\u015b\u0107 \u201e{0}\u201d i musz\u0105 mie\u0107 posta\u0107 \u0142a\u0144cucha"}},invalid:"Konfiguracja paska narz\u0119dzi jest niepoprawna ({0}). Szczeg\xf3\u0142owe informacje zawiera konsola."},spelling:{missing:{service:"Nie znaleziono us\u0142ugi sprawdzania pisowni: ({0})."}},images:{edit:{needsproxy:"W celu edycji obraz\xf3w z tej domeny wymagane jest proxy: ({0})",proxyerror:"Brak mo\u017cliwo\u015bci komunikacji z tym proxy w celu edycji tego obrazu. Szczeg\xf3\u0142owe informacje zawiera konsola.",generic:"Wyst\u0105pi\u0142 b\u0142\u0105d podczas wykonywania operacji edycji obrazu. Szczeg\xf3\u0142owe informacje zawiera konsola."},disallowed:{local:"Wklejanie obraz\xf3w lokalnych zosta\u0142o wy\u0142\u0105czone. Obrazy lokalne zosta\u0142y usuni\u0119te z wklejonej tre\u015bci.",dragdrop:"Przeci\u0105ganie i upuszczanie zosta\u0142o wy\u0142\u0105czone."},upload:{unknown:"Nie powiod\u0142o si\u0119 przekazanie obrazu",invalid:"Nie wszystkie pliki zosta\u0142y przetworzone \u2014 niekt\xf3re nie by\u0142y poprawnymi obrazami",failed:"Nie powiod\u0142o si\u0119 przekazanie obrazu: ({0}).",cors:"Nie mo\u017cna nawi\u0105za\u0107 kontaktu z us\u0142ug\u0105 przesy\u0142ania obraz\xf3w. Mo\u017cliwy b\u0142\u0105d CORS: ({0})"},missing:{service:"Nie znaleziono us\u0142ugi obraz\xf3w: ({0}).",flash:"Ustawienia zabezpiecze\u0144 przegl\u0105darki mog\u0105 uniemo\u017cliwi\u0107 zaimportowanie obraz\xf3w."},import:{failed:"Import niekt\xf3rych obraz\xf3w nie powi\xf3d\u0142 si\u0119.",unsupported:"Nieobs\u0142ugiwany typ obrazu.",invalid:"Obraz jest niepoprawny."}},webview:{image:"Nie mo\u017cna wkleja\u0107 obraz\xf3w skopiowanych bezpo\u015brednio."},safari:{image:"Przegl\u0105darka Safari nie obs\u0142uguje bezpo\u015bredniego wklejania obraz\xf3w.",url:"Sugerowane rozwi\u0105zania",rtf:"Jak to zrobi\u0107","browser-settings":"Aby m\xf3c wkleja\u0107 obrazy, zmie\u0144 ustawienia przegl\u0105darki."},flash:{crashed:"Obrazy nie zosta\u0142y zaimportowane, poniewa\u017c oprogramowanie Adobe Flash prawdopodobnie uleg\u0142o awarii. Mo\u017ce to by\u0107 spowodowane pr\xf3b\u0105 wklejenia bardzo obszernych dokument\xf3w."},http:{400:"Nieprawid\u0142owe \u017c\u0105danie: {0}",401:"Brak autoryzacji: {0}",403:"Zabronione: {0}",404:"Nie znaleziono: {0}",407:"Wymagane uwierzytelnienie serwera proxy: {0}",409:"Konflikt pliku: {0}",413:"Zbyt du\u017cy \u0142adunek: {0}",415:"Nieobs\u0142ugiwany typ multimedi\xf3w: {0}",500:"Wewn\u0119trzny b\u0142\u0105d serwera: {0}",501:"Nie zaimplementowano: {0}"}}}},b=function(a,b){var c=a.src.indexOf("?");return a.src.indexOf(b)+b.length===c},c=function(a){for(var b=a.split("."),c=window,d=0;d<b.length&&void 0!==c&&null!==c;++d)c=c[b[d]];return c},d=function(a,b){if(a){var d="data-main",e=a.getAttribute(d);if(e){a.removeAttribute(d);var f=c(e);if("function"==typeof f)return f;console.warn("attribute on "+b+" does not reference a global method")}else console.warn("no data-main attribute found on "+b+" script tag")}},e=function(a,c){var e=d(document.currentScript,c);if(e)return e;for(var f=document.getElementsByTagName("script"),g=0;g<f.length;g++)if(b(f[g],a)){var h=d(f[g],c);if(h)return h}throw"cannot locate "+c+" script tag"},f="2.2.0",g=e("tbio_pl.js","strings for language pl");g({version:f,strings:a})}();