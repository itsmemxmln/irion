<?php

    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\App;
    use Illuminate\Http\Request;
    
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\ContactController;
    
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the 'web' middleware group. Now create something great!
    |
    */
    
    Route::get('/', function () {
                return view('templates.home')->with(['meta_title' => 'Schweißbaugruppen Hersteller – Irion Qualität seit 1926', 'meta_description' => 'Schweißbaugruppen Hersteller ✓ 30 bis 5.000 Stück ☆ Konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Irion Qualität seit 1926!', 'h1' => 'Schweißbaugruppen Hersteller Irion', 'seo1' => 'Irion besteht seit 1929 und ist der Schweißbaugruppen Hersteller aus dem Schwarzwald. Unser zertifizierter Schweißfachbetrieb ist auf hochwertige Schweißbaugruppen von 30 bis 5.000 Stück spezialisiert. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/ />
<link rel="alternate" hreflang="en-US" href=/us />
', 'submenu' => '']);
            });
Route::get('/us', function () {
                return view('templates.home')->with(['meta_title' => 'Welding fabrication shop – Irion  quality since 1926', 'meta_description' => 'Welding fabrication shop ✓ 30 to 5,000 parts ☆ Consistently high quality ☆ Responsible-minded ☆ Precision ➨ Irion quality since 1926!', 'h1' => 'Welding fabrication shop Irion ', 'seo1' => 'Irion was founded in 1929 and is the welding fabrication shop from the Black Forest in Germany. Our certified welding company is specialised on welded assemblies and industrial metal fabrication from 30 to 5,000 parts. We put consistently high quality first, along with responsible-minded people and precision.', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/ />
<link rel="alternate" hreflang="en-US" href=/us />
', 'submenu' => '']);
            });
Route::get('/praezisionsfertigung', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Präzisionsfertigung – Präzisionsbearbeitung von Metall', 'meta_description' => 'Präzisionsfertigung von Hochleistungsprodukten seit 1926! ✓ Von der Entwicklung bis zur Montage ➨ Alle unsere Kompetenzen kennenlernen', 'h1' => 'Präzisionsfertigung', 'seo1' => 'IRION steht für Präzisionsfertigung in der Metallverarbeitung. Von der Entwicklung bis zur Montage nutzen wir zahlreiche Kompetenzen, um Ihr Hochleistungsprodukt herzustellen. Informieren Sie sich hier über die verschiedenen Prozesse in unserem Wertschöpfungsnetzwerk.', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer />
', 'submenu' => '<strong><a href="/praezisionsfertigung/mechanische-konstruktion">Mechanische Konstruktion </a></strong>
                                <ul></ul><strong><a href="/praezisionsfertigung/roboterschweissen">Roboterschweißen </a></strong>
                                <ul></ul><strong><a href="/praezisionsfertigung/praezisionsschneiden">Präzisionsschneiden </a></strong>
                                <ul></ul><strong><a href="/praezisionsfertigung/praezisionszerspanung">Präzisionszerspanung </a></strong>
                                <ul></ul><strong><a href="/praezisionsfertigung/praezisionsschweissen">Präzisionsschweißen </a></strong>
                                <ul></ul><strong><a href="/praezisionsfertigung/industrielle-teilereinigung-dienstleistung">Industrielle Teilereinigung </a></strong>
                                <ul></ul><strong><a href="/praezisionsfertigung/industrielle-waermebehandlung">Industrielle Wärmebehandlung </a></strong>
                                <ul></ul><strong><a href="/praezisionsfertigung/oberflaechenbeschichtung-stahl">Oberflächenbeschichtung </a></strong>
                                <ul></ul><strong><a href="/praezisionsfertigung/pvc-tauchbeschichtung">PVC Tauchbeschichtung </a></strong>
                                <ul></ul><strong><a href="/praezisionsfertigung/baugruppenmontage-maschinenbau">Baugruppenmontage </a></strong>
                                <ul></ul>']);
            });
Route::get('/us/precision-manufacturer', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Precision manufacturer – Metal machining since 1926!', 'meta_description' => 'Precision manufacturer ✓ High-performance products made in Germany since 1926 ☆ From development to assembly ➨ All our competencies', 'h1' => 'Precision manufacturer ', 'seo1' => 'Irion is a precision manufacturer in metal processing. From development to assembly, we use numerous competencies to manufacture your high-performance product. Find out here about the various processes in our value network.', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer />
', 'submenu' => '<strong><a href="/us/precision-manufacturer/mechanical-construction">Mechanical construction</a></strong>
                                <ul></ul><strong><a href="/us/precision-manufacturer/robot-welding ">Robot welding </a></strong>
                                <ul></ul><strong><a href="/us/precision-manufacturer/precision-cutting-metal">Precision cutting metal</a></strong>
                                <ul></ul><strong><a href="/us/precision-manufacturer/high-precision-machining">High precision machining</a></strong>
                                <ul></ul><strong><a href="/us/precision-manufacturer/precision-welding">Precision welding</a></strong>
                                <ul></ul><strong><a href="/us/precision-manufacturer/industrial-parts-cleaning-service">Industrial parts cleaning service</a></strong>
                                <ul></ul><strong><a href="/us/precision-manufacturer/industrial-heat-treatment">Industrial heat treatment</a></strong>
                                <ul></ul><strong><a href="/us/precision-manufacturer/surface-treatment-steel">Surface treatment steel</a></strong>
                                <ul></ul><strong><a href="/us/precision-manufacturer/pvc-dip-coating">PVC dip coating</a></strong>
                                <ul></ul><strong><a href="/us/precision-manufacturer/assembly-of-components">Assembly of components</a></strong>
                                <ul></ul>']);
            });
Route::get('/praezisionsfertigung/mechanische-konstruktion', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Mechanische Konstruktion – CAD Konstruktion bei Irion', 'meta_description' => 'Mechanische Konstruktion bei Irion seit 1926 ✓ 3D Konstruktion ☆ 2D Ableitung von Werkstattzeichnungen ➨ Zur CAD Konstruktion', 'h1' => 'Mechanische Konstruktion', 'seo1' => '<p>Für die mechanische Konstruktion verwenden wir bei IRION seit Jahren CAD Werkzeuge, um unsere Schweißbaugruppen, Schweißkonstruktionen, Schweißkonsolen und Zeichnungsteile gemeinsam mit unseren Kunden und Partnern zu entwickeln.</p> <p>Wir sind der Überzeugung, dass Kosten in der Serie zu einem sehr großen Teil in der Konstruktion entstehen. Deshalb legen wir bei der mechanischen Konstruktion großes Augenmerk in die Entwicklung unserer Schweißbaugruppen, Schweißteile, Schweißkonstruktionen, Schweißkonsolen und Zeichnungsteile, die wir im Übrigen gerne mit Ihnen feinjustieren bzw. produktionstechnisch optimieren. </p> <p>Wir setzen für die 3D Konstruktion Autodesk Inventor und Autodesk AutoCAD ein und sind gleichzeitig in der Lage, in weitere Systeme wie Siemens NX, Catia, Solid Edge, Solid Works, Creo Elements oder Microstation zu konvertieren. Des Weiteren bedienen wir uns auch der offenen Formate, wie zum Beispiel Step Dateien, dxf oder dwg.</p> <p>Die Absicherung unserer geschweißten Teile, Schweißbaugruppen, Schweißkonstruktionen und Schweißkonsolen erfolgt in FEM Programmen. Im ersten Schritt über den integrierten Nastran Postprozessor. Bei weiteren Untersuchungen greifen wir auf Ansys und Abaqus zurück.</p> <p>In der CAD Konstruktion arbeitet 5 Mitarbeiter, die durch externe Ressourcen mit jahrzehntelanger Erfahrung im Entwicklungs- und Konstruktionsbereich aufwarten können. Gerade mit Schwerpunkt geschweißte Bauteile, Schweißkonsolen, Schweißkonstruktionen wie Maschinenteile, Fassadenhalter, Betriebsmittel, etc für unsere Partner aus der Erdbewegung, Agrarindustrie, Fassadenbau, Automobilindustrie, Bauindustrie, Maschinenbau, Lackiertechnik, Kunst und Kultur sowie viele mehr!</p> <p>Irion beherrscht neben Frästeilen, Schweißteilen und gefrästen Schweißteilen sowie Schweißkonsolen, Schweißbaugruppen und Schweißkonstruktionen auch die vor allem mechanische, aber auch elektrische Installation und Inbetriebnahme im Haus sowie beim Kunden vor Ort. Abgerundet werden unsere Serviceleistungen durch mechanische Konstruktion, Konstruktionsoptimierung, FEM Berechnung, statische Berechnung, und FMEA Risikountersuchung sowie die CE-Kennzeichnung nach erfolgter CE-Dokumentation. Selbstverständlich sind wir bei IRION nach IPMA Projektmanagement zertifiziert.</p>', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/mechanische-konstruktion />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/mechanical-construction />
', 'submenu' => '']);
            });
Route::get('/us/precision-manufacturer/mechanical-construction', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Mechanical construction – CAD construction at Irion ', 'meta_description' => 'Mechanical construction at Irion  since 1926 ✓ 3D construction ☆ 2D derivation of shop drawings ➨ To CAD design', 'h1' => 'Mechanical construction', 'seo1' => '<p>For mechanical construction, we at Irion  have been using CAD tools for years to develop our welded assemblies, welded structures, welded brackets and drawing parts together with our customers and partners.
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/mechanical-construction />
', 'submenu' => '']);
            });
Route::get('/praezisionsfertigung/roboterschweissen', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Roboterschweißen – Automatisiertes Schweißen bei Irion', 'meta_description' => 'Roboterschweißen bei Irion ✓ High-Tech-Robotern mit bis zu 9 interpolierenden Achsen ☆ Made in Germany ➨ Irion Qualität seit 1926 ', 'h1' => 'Roboterschweißen', 'seo1' => '<p>Bei IRION schweißen wir stückzahlenintensive Schweißbaugruppen durch automatisiertes Schweißen.
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/robot-welding  />
', 'submenu' => '']);
            });
Route::get('/us/precision-manufacturer/robot-welding ', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Robot welding – automated welding services from Germany ', 'meta_description' => 'Robot welding at Irion  ✓ High-tech robots with up to 9 interpolating axes ☆ Automated welding in Germany ➨ Irion  quality since 1926', 'h1' => 'Robot welding ', 'seo1' => '<p>At Irion, we weld high volume welded assemblies through automated welding.
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/robot-welding  />
', 'submenu' => '']);
            });
Route::get('/praezisionsfertigung/praezisionsschneiden', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Präzisionsschneiden in der Metallverarbeitung seit 1926 ', 'meta_description' => 'Präzisionsschneiden für Ihr Hochleistungsprodukt ✓ Verschiedene Materialien ☆ Zahlreiche Techniken ➨ Jetzt Informieren!', 'h1' => 'Präzisionsschneiden in der Metallverarbeitung', 'seo1' => '<p>Die Basis unserer Produkte ist das Präzisionsschneiden von Metallteilen aus Stahl und Edelstahl, sowie CADCAM gefräste Stahl- und Edelstahlteile. Ebenso gesägte Profile aus Stahl und Edelstahl. Wir erstellen Laserteile, Biegeteile, Laserbiegeteile, Kantteile oder Laserkantteile. </p> <p>Je nach Dicke und Wärmeeinbringung verarbeiten wir wie folgt: <ul> <li>Konventioneller Zuschnitt / Sägen / gesägte Profile bis 250mm</li> <li>Laserschneiden bis 25mm</li> <li>Biegeteile bis 25mm</li> <li>Laserbiegeteile bis 25mm</li> <li>Laserkantteile bis 25mm</li> <li>Kantteile bis 25mm</li> </ul> </p> <p>Die Basisdimensionen der Teile, hergestellt aus Laserschneiden, Biegen, Kanten, Laserkantteile und Laserbiegeteile sind Rohlinge aus 6m x 4m mit einer Dicke von bis zu 150 mm. Die übliche Dicke beträgt 40mm.</p> <p>Durch unsere Schweißkompetenz, gewährleistet durch unsere hausinternen Schweißfachingenieure, als auch Schweißfachpersonen, bearbeiten wir mit unserem jährlich zertifizierten Fachpersonal nach ISO 3834, ISO 1090 ECX-2 & EXC-3 (Execution Class 2 und Execution Class 3) auch Feinkornbaustahl S460, S690, S960 und viele mehr.</p>', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/praezisionsschneiden />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/precision-cutting-metal />
', 'submenu' => '']);
            });
Route::get('/us/precision-manufacturer/precision-cutting-metal', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Precision cutting metal – At Irion  in Germany since 1926', 'meta_description' => 'Precision cutting metal for your high-performance product ✓ Various materials ☆ Numerous techniques ➨ All information here!', 'h1' => 'Precision cutting metal', 'seo1' => '<p>The basis of our products is precision cutting metal of steel and stainless steel parts, as well as CADCAM milled steel and stainless steel parts. Also sawed profiles made of steel and stainless steel. We create laser parts, bent parts, laser bent parts, edged parts or laser edged parts.
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/precision-cutting-metal />
', 'submenu' => '']);
            });
Route::get('/praezisionsfertigung/praezisionszerspanung', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Präzisionszerspanung – Fräsen von Stahl & Edelstahl', 'meta_description' => 'Präzisionszerspanung ✓ Computergesteuertes Fräsen ☆ Stahl ☆ Edelstahl ☆ Verschiedene Dimensionen ➨ Irion Qualität seit 1926!', 'h1' => 'Präzisionszerspanung', 'seo1' => '<p>Eine Herzensangelegenheit unseres langjährigen Schweißfachbetriebs ist die Präzisionszerspanung durch computergesteuertes Fräsen von Teilen aus Stahl und Edelstahl. </p> <p>Großteils offline programmiert durch CAM, laufen unsere 3-Achs, 4-Achs und 5 Achs CNC Maschinen bzw. Bearbeitungszentren und fertigen Teile mit Dimensionen bis zu 2m x 1m x 1m mit Hilfe unserer Postprozessoren, die in der Lage sind, auch unsere Low Cost Maschinen zu bespielen.</p> <p>Weitere Dimensionen ermöglicht unsere verlängerte Werkbank, basierend auf langjährigen Partnern aus der Umgebung. Erweiterte Dimensionen sind 30m x 6m x 4m auf Portalfräszentren, ebenfalls ausgelegt für Stahl und Edelstahl.</p> <p>Zeichnungsteile mit keinerlei Konstruktionsaufwand stellen wir in langjähriger Kooperation in Best Cost Countries mit direktem Zugriff auf die Produktionskapazitäten her, um Ihnen attraktivste Preise zu garantieren. Unser Qualitätsmanagement garantiert eine fehlerfreie Auslieferung.</p>', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/praezisionszerspanung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/high-precision-machining />
', 'submenu' => '']);
            });
Route::get('/us/precision-manufacturer/high-precision-machining', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'High precision machining – Steel milling since 1926!', 'meta_description' => 'High precision machining ✓ Computer-controlled milling ☆ Steel ☆ Stainless steel ☆ Various dimensions ➨ Irion quality since 1926', 'h1' => 'High precision machining', 'seo1' => '<p>A matter of the heart of our long-standing welding store is high precision machining by computer-controlled milling of parts made of steel and stainless steel. 
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/high-precision-machining />
', 'submenu' => '']);
            });
Route::get('/praezisionsfertigung/praezisionsschweissen', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Präzisionsschweißen von Stahl & Edelstahl', 'meta_description' => 'Präzisionsschweißen ist unsere Passion & Kernkompetenz ✓ High-End-Schweißequipment ➨ Lichtbogenschweißen seit mehr als 2 Dekaden  ', 'h1' => 'Präzisionsschweißen', 'seo1' => '<p>Da kommen wir her und da gehören wir hin, SCHWEISSEN ist unsere Religion! Unsere Kernkompetenz neben der CNC Bearbeitung von Stahl und Edelstahl ist das Präzisionsschweißen selbiger Materialien. Seit mehr als 2 Dekaden beherrschen wir das Lichtbogenschweißen von Stahl und Edelstahl mit unserem High-End-Schweißequipment von Cloos made in Germany!</p> <p>Präzisionsschweißen bedeutet für uns nicht nur Teile zusammenzufügen. Wir nehmen uns das Thema zu Herzen und gehen dabei täglich an unsere Grenzen. Ein Schwerpunkt unseres Schaffens liegt im Bereich zwischen additiver Fertigung (3D Druck) und Stahlguss. Als ihr Partner für Schweißbaugruppen, Schweißteile, Schweißkonstruktionen und Schweißkonsolen fertigen wir wiederholgenau und repetitiv kritische Projektserien ab 30 bis mehrere tausend Stück für Sie.</p> <p>Über 20 hochmotivierte und zertifizierte Schweißer sind verantwortlich für Ihre anspruchsvollen Schweißteile, Konsolen, Schweißkonstruktionen, unbeweglich (starr) sowie beweglich (Kulissen, Raster, etc.). Bei IRION schweißen wir manuell und stückzahlenintensive Schweißbaugruppen robotisch mit High-tech-Robotern mit bis zu 9 interpolierenden Achsen. Dimensionen unserer Schweißbaugruppen, Schweißteile, Schweißkonstruktionen und Schweißkonsolen sind bis zu 8m x 4m x 2,5m groß. Wir beginnen bei Dimensionen ab 20mm x 20mm x 1 mm.</p> <p>Made in Germany und gleichzeitig konkurrenzfähig zu sein. Dies wird möglich durch computergesteuerte offline Robotersimulation unseres geschulten und hochmotivierten Personals. Stolz sind wir dabei auf unsere AZUBI Quote von nahezu 15%. Nur so schaffen wir es, dem Fachkräftemangel entgegenzusteuern. Ausbildungsberufe, die wir in unserem Hause anbieten, sind Industriemechaniker, Zerspanungsmechaniker und Fachkraft für Metallberufe, zu dem auch der Lehrberuf des Schweißers gehört.</p> <p>Wir schweißen Stahl und  Edelstahl. Nehmen Sie gerne mit uns Kontakt auf! Wir gehen auf Ihre Anforderungen ein und unterstützen Sie bei Ihrem Vorhaben. Schweißkompetenz im Hause IRION: <ul> <li>MAG Schweißen von Stahl / Edelstahl </li> <li>MIG Schweißen von Stahl / Edelstahl </li> <li>Roboter Schweißen mit 6 Achs Schweißrobotern / 7 Achs Schweißrobotern / 8 Achs Schweißrobotern / 9 Achs Schweißrobotern</li> <li>WIG Schweißen von Stahl / Edelstahl </li> </ul> </p> <p>Unser Spektrum liegt zwischen Einzelteilen und langjährigen Serien. Kritische Massen sind sogenannte Projektserien, die einmalig abgerufen werden und wiederholgenau in Stückzahlen ab 30 Stück bis zu 3.000 Stück und mehr in präzisen Dimensionen mit Abweichungen von 0,5mm auf Längen von bis zu 5m gefertigt werden. Geschweißte Skids (Förderschlitten), geschweißte Maschinenrahmen, geschweißte Betriebsmittel, geschweißte Konsolen für Ihre Maschinen, Baumaschinen, Agrarmaschinen, Erdbewegungsmaschinen, Hebemittel wie Krane sowie Lackierhilfsmittel wie Traversen, Warenträger, Bauteilträger und vieles mehr in der Welt des Schweißens und gefrästen Schweißens.</p> <p>Ein Garant für Ihre intelligente Schweißbaugruppe ist unsere auf jahrelanger Erfahrung basierte Kompetenz der Antizipation der Wärmeveränderung von geschweißten Bauteilen. Wir richten kalt bzw. mechanisch und warm bzw. thermisch. Bevorzugt setzen wir auf unseren bewährten Vorrichtungsbau, der in der Lage ist, Ihre Teile nach dem Schweißen ohne weitere Bearbeitung in die korrekte Position zu bekommen. Dabei schaffen wir es, eine kostenintensive Nachbearbeitung mittels CNC zu vermeiden.</p> <p>Komplettiert wird unsere Schweißkompetenz durch erfahrene Qualitätsmanager, die sich der gängigen Schweißprüfverfahren bedienen. Wir beherrschen Validierungsprozesse der Eindringprüfung, optische Prüfung (visuelles Schweißprüfverfahren), in externer Ausführung auch das Röntgenschweißprüfverfahren und das Ultraschallschweißprüfverfahren, um unseren und vor allem Ihren maximalen Qualitätsansprüchen gerecht zu werden.</p>', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/praezisionsschweissen />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/precision-welding />
', 'submenu' => '']);
            });
Route::get('/us/precision-manufacturer/precision-welding', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Precision welding of steel & stainless steel', 'meta_description' => 'Precision welding is our passion & core competence ✓ High-end welding equipment ☆ Arc welding for more than 2 decades ➨ Inform now! ', 'h1' => 'Precision welding', 'seo1' => '<p>That\'s where we come from and that\'s where we belong, WELDING is our religion! Our core competence besides the CNC processing of steel and stainless steel is the precision welding of the same materials. For more than 2 decades we have mastered the arc welding of steel and stainless steel with our high-end welding equipment from Cloos made in Germany!
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/precision-welding />
', 'submenu' => '']);
            });
Route::get('/praezisionsfertigung/industrielle-teilereinigung-dienstleistung', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Industrielle Teilereinigung Dienstleistung – seit 1926', 'meta_description' => 'Industrielle Teilereinigung Dienstleistung ✓ Reinigungsprozesse die Qualität gewährleisten ☆ Diverse Techniken ➨ Jetzt informieren ', 'h1' => 'Teilereinigung als industrielle Dienstleistung', 'seo1' => '<p>Unsere Dienstleistung der industriellen Teilereinigung gewährleistet die Qualität für unsere Schweißteile, Schweißkonsolen, Schweißbaugruppen und gefrästen Schweißteile, wie Betriebsmittel etc. vor dem eigentlichen Bearbeitungsprozess des Schweißens bzw. vor der Oberflächenbehandlung wie Lackierung, Brünieren, Härten, Galvanisieren, Feuerverzinken, etc.</p> <p>Oberflächenreinigung, Kantenbruch, Entfettung, Befreiung von Zunder, zur Schweißnahtvorbereitung, Lackiervorbereitung, Entgraten, Instandsetzung und Entlackung. Wir bedienen uns der Techniken des Sandstrahlen, Gleitschleifen und Trowalisieren, um die entsprechende industrielle Teilereinigung im gewünschten Maße zu erzielen.</p>', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/industrielle-teilereinigung-dienstleistung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/industrial-parts-cleaning-service />
', 'submenu' => '']);
            });
Route::get('/us/precision-manufacturer/industrial-parts-cleaning-service', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Industrial parts cleaning service – In Germany since 1926', 'meta_description' => 'Industrial parts cleaning service ✓ Cleaning processes that guarantee quality ☆ Various techniques ➨ Find out more here!', 'h1' => 'Industrial parts cleaning service', 'seo1' => '<p>Our industrial parts cleaning service ensures the quality for our welded parts, welding brackets, welded assemblies and milled welded parts, such as operating equipment, etc., before the actual machining process of welding or surface treatment such as painting, burnishing, hardening, galvanizing, hot-dip galvanizing, etc.
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/industrial-parts-cleaning-service />
', 'submenu' => '']);
            });
Route::get('/praezisionsfertigung/industrielle-waermebehandlung', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Industrielle Wärmebehandlung – Produkthärte erhöhen ', 'meta_description' => 'Industrielle Wärmebehandlung ✓ Hohe Härte- bzw. Entspannungsgrade von geschweißten und gefrästen Produkten ➨ Jetzt informieren!', 'h1' => 'Industrielle Wärmebehandlung', 'seo1' => '<p>Werkstückberührende Teile unserer geschweißten und gefrästen Produkte erhalten eine industrielle Wärmebehandlung, um erhöhte Härte- bzw. Entspannungsgrade zu erreichen. Je nach Verwendung unserer Schweißbauteile, Schweißbaugruppen, Schweißkonstruktionen und Schweißkonsolen kommen diverse Wärmebehandlungen zum Einsatz.</p> <p>Je nach Härtegrad und Härtetiefe sind wir langjährig erfahren mit den Prozessen des: <ul> <li>Carbonitrieren</li> <li>Nitrocarburieren</li> <li>Plasmanitrieren</li> <li>Einsatzhärten</li> <li>Gasnitrieren</li> <li>Weichglühen </li> </ul></p> <p>samt dem Prozsesswissen, welches Verfahren wann zur Anwendung kommt. <ul> <li>Haltezeiten</li> <li>Härtegrade</li> <li>Entspannungsgrade</li> </ul> </p> <p>um für Sie das optimale Ergebnis aus Kosten, Termin und Qualität zu erzielen. Benötigen Sie alternative Wärmebehandlungsverfahren für Ihre Schweißbaugruppen, Schweißteile, Schweißkonstruktionen und Schweißkonsolen und geschweißten Zeichnungsteile? Kontaktieren Sie uns gerne - wir finden die ideale Lösung für Ihr Produkt.</p>', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/industrielle-waermebehandlung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/industrial-heat-treatment />
', 'submenu' => '']);
            });
Route::get('/us/precision-manufacturer/industrial-heat-treatment', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Industrial heat treatment - Increase product hardness', 'meta_description' => 'Industrial heat treatment ✓ High degrees of hardness or stress relief of welded and milled products ➨ Get more information here!', 'h1' => 'Industrial heat treatment', 'seo1' => '<p>Workpiece-contacting parts of our welded and milled products receive industrial heat treatment to achieve increased degrees of hardness or stress relief. Depending on the use of our welded components, welded assemblies, welded structures and welded brackets, various heat treatments are applied.
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/industrial-heat-treatment />
', 'submenu' => '']);
            });
Route::get('/praezisionsfertigung/oberflaechenbeschichtung-stahl', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Oberflächenbeschichtung Stahl – Veredelung und Schutz', 'meta_description' => 'Oberflächenbeschichtung von Stahl ✓ Von Korrosionsschutz bis zur Mehrschichtlackierung ☆ Zahlreiche Verfahren ➨ Jetzt Informieren! ', 'h1' => 'Oberflächenbeschichtung von Stahl', 'seo1' => '<p>Die Oberflächenbeschichtung von Stahl ist in vielen Fällen das Gesicht unserer Schweißbaugruppen, Schweißkonsolen, Schweißteile und Schweißkonstruktionen. Die Veredelung unserer geschweißten Produkte reicht von Korrosionsschutz über Grundierungen bis hin zu Mehrschichtlackierung mit 2K Lack.</p> <p>Langjährige Partnerschaften mit unseren Lacklieferanten und Equipment-Lieferanten sowie interne Erfahrung mit dem Thema Oberflächenbeschichtung ermöglichen es uns, optimale Prozesse mit exakten Schichtdicken und geringem Materialaufwand bei optimaler Oberflächenbeschaffenheit zu erzielen.</p> <p>Weitere Oberflächenbeschichtungen, die wir für unsere Schweißprodukte anbieten, sind die Pulverbeschichtung, Gummierung, Brünieren, Galvanisieren, das Feuerverzinken, Eloxieren sowie die KTL-Beschichtung, Schutzwachs und Öl.</p> <p>Wir bieten Ihnen die komplette Palette an RAL Tönen sowie spezielle Farbmischungen aus CMYK Werten und RGB Werten. Gerne ermöglichen wir auch Ihre Sonderwünsche.</p>', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/oberflaechenbeschichtung-stahl />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/surface-treatment-steel />
', 'submenu' => '']);
            });
Route::get('/us/precision-manufacturer/surface-treatment-steel', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Surface treatment steel – Finishing and protection ', 'meta_description' => 'Surface treatment of steel ✓ From corrosion protection to multi-layer coating ☆ Numerous processes ➨ Get more information here! ', 'h1' => 'Surface treatment of steel', 'seo1' => '<p>Surface treatment of steel is in many cases the face of our welded assemblies, welded brackets, welded parts and welded structures.
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/surface-treatment-steel />
', 'submenu' => '']);
            });
Route::get('/praezisionsfertigung/pvc-tauchbeschichtung', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'PVC Tauchbeschichtung – Kunststoffbeschichtung Metall', 'meta_description' => 'PVC Tauchbeschichtung ✓ Kunststoffbeschichtung für Metallteile ☆ Individuelle maßgeschneiderte Lösungen ➨ Jetzt Informieren! ', 'h1' => 'PVC Tauchbeschichtung', 'seo1' => '<p>Eine hochwertige PVC Tauchbeschichtung erhalten Sie bei IRION für verschiede Metallteile. Zum Beispiel können Sie Werkzeuggriffe gummieren lassen.
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/pvc-dip-coating />
', 'submenu' => '']);
            });
Route::get('/us/precision-manufacturer/pvc-dip-coating', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'PVC dip coating – Plastic coating metal', 'meta_description' => 'PVC dip coating ✓ Plastic coating for metal parts ☆ Individual customized solutions ➨ Get more information here!', 'h1' => 'PVC dip coating', 'seo1' => '<p>Irion offers high-quality PVC dip coating for various metal parts. For example, you can have tool handles rubberized.
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/pvc-dip-coating />
', 'submenu' => '']);
            });
Route::get('/praezisionsfertigung/baugruppenmontage-maschinenbau', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Baugruppenmontage Maschinenbau – Präzision seit 1926!', 'meta_description' => 'Baugruppenmontage im Maschinenbau ✓ Wiederholgenau von 30 bis 3.000 und mehr Stück ☆ Große Produktvielfalt ➨ Jetzt informieren!', 'h1' => 'Baugruppenmontage im Maschinenbau', 'seo1' => '<p>Bei der Baugruppenmontage im Maschinenbau ermöglicht unser exzellenter Vorrichtungsbau es, durch unsere intern ausgebildeten Zerspanungsmechaniker, Industriemechaniker und Metallfacharbeiter, die geschweißten Bauteile, geschweißten Konsolen, geschweißten Konstruktionen und geschweißten Baugruppen wiederholgenau in Stückzahlen ab 30 bis hin zu 3.000 und mehr Stück für Sie zu fertigen. </p> <p>Nach der Oberflächenbeschichtung sind wir bei der Baugruppenmontage im Maschinenbau in der Lage, unter Zuhilfenahme moderner Prozess- und Qualitätswerkzeuge und Überwachungssystemen sowie unseren eigenverantwortlichen Teams mechanische, elektrische und elektronische Montage und Installationen vorzunehmen, um aus unseren geschweißten und gefrästen sowie lackierten Teilen ein Gesamtprodukt entstehen zu lassen. </p> <p>Unter Zuhilfenahme von modernsten Digitalwerkzeugen ermöglichen wir Änderungen und Optimierungen im Zuge von Simultaneous Engineering. In Echtzeit übermitteln wir diese auf die digitalen Anzeigensysteme unseres Fachpersonals. </p> <p>So verlassen uns täglich Produkte wie: <ul> <li>Hochvoltspeicher Warenträger inkl. Spezialbeschichtung für Batterie berührende Teile</li> <li>EBB Fahrzeuge (elektrische Bodenbahnfahrzeuge)</li> <li>AGV/FTS Chassis</li> <li>EHB Gehänge</li> <li>Lastaufnahmemittel</li> <li>Schwerlastgehänge</li> <li>Fahrzeugaufnahmen</li> <li>Werkstückpaletten</li> <li>Skids / Transportschlitten/ Lackierschlitten / Montageschlitten / Skid Adapter</li> <li>Lackiertraversen / Crossbars</li> <li>Montagetraversen</li> <li>Achspaletten / Achsskids</li> <li>Montagewerkstückträger</li> <li>Cockpitvormontagevorrichtungen</li> <li>Cockpittrolleys</li> <li>EHB Weichen</li> <li>Wagenzüge</li> <li>Lackfixturen</li> <li>Türenmontageaufnahmen (L-Bügel, C-Rahmen)</li> <li>Lackiertraversen</li> <li>Lackiertrolleys</li> <li>Pendelgehänge</li> <li>Scherenrahmen inkl. Scheren für Schwerlastgehänge</li> <li>Unterbodenschutz Drehgehänge</li> <li>Schubplattformen / Skillets</li> <li>Karosserieaufnahmen</li> <li>Teleskoparme für Fahrzeugaufnahmen</li> <li>Betriebsmittelersatzteile</li> <li>KTL Verriegelungen</li> <li>Fahrwägen, C-Bügel / Dehnstöße / zerspante Vahle Schienen</li> <li>FTS Tablare / FTS Adapter</li> </ul> </p> <p>Neben der internen Montage und Inbetriebnahme, vorrangig unserer Schweißbaugruppen und Schweißkonstruktionen, warten wir die Fördertechnikanlagen unserer Kunden im Zuge der vorbeugenden Instandhaltung. Auch in diesem Bereich sorgen unsere fest angestellten Industriemechaniker, Zerspanungsmechaniker und Metallfacharbeiter für die Umsetzung höchster Ansprüche. </p>', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/baugruppenmontage-maschinenbau />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/assembly-of-components />
', 'submenu' => '']);
            });
Route::get('/us/precision-manufacturer/assembly-of-components', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Assembly of components in mechanical engineering since 1926', 'meta_description' => 'Assembly of components in mechanical engineering ✓ Repeatability from 30 to 3,000 and more pieces ☆ Large product variety ➨ Inform now', 'h1' => 'Assembly of components in mechanical engineering', 'seo1' => '<p>In the case of assembly of components in mechanical engineering, our excellent fixture construction enables our internally trained cutting machine operators, industrial mechanics and skilled metal workers to manufacture the welded components, welded brackets, welded constructions and welded subassemblies for you with repeat accuracy in quantities from 30 to 3,000 and more pieces.
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/assembly-of-components />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen', function () {
                return view('templates.basic')->with(['meta_title' => 'Schweißkonstruktionen – Schweißteile Fertigung seit 1926', 'meta_description' => 'Schweißkonstruktionen ✓ Skids ☆ Lastaufnahmemittel ☆ Maschinenbau ☆ Transportsysteme ☆ Ersatzteile ➨ Schweißteile Fertigung seit 1926!', 'h1' => 'Schweißkonstruktionen', 'seo1' => 'Irion steht seit 1926 für Schweißkonstruktionen in konstant hoher Qualität wie Skids, Lastaufnahmemittel, Maschinenbau- und Stahlbaukonstruktionen sowie Transportsysteme für die Produktion und Industrie Ersatzteile. Unsere Schweißteile Fertigung ist dabei spezialisiert auf das Projektgeschäft von 30 bis 5.000 Stück.', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications />
', 'submenu' => '<strong><a href="/schweisskonstruktionen/skid-anlagenbau">Skid Anlagenbau</a></strong>
                                <ul><li><a href="/schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie">Skid Automobilindustrie</a></li><li><a href="/schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie">Fördertechnik Automobilindustrie</a></li><li><a href="/schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger">Sonderladungsträger</a></li></ul><strong><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller">Lastaufnahmemittel</a></strong>
                                <ul><li><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl">Schwerlastpaletten</a></li><li><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall">Industriebehälter</a></li><li><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall">Transportbehälter</a></li><li><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen">Schwerlasttraversen</a></li><li><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke">Schwerlastböcke</a></li><li><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller">Rungengestelle</a></li><li><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller">Stapelgestelle</a></li></ul><strong><a href="/schweisskonstruktionen/maschinenbau">Maschinenbau</a></strong>
                                <ul><li><a href="/schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller">Scherenhubtische</a></li><li><a href="/schweisskonstruktionen/maschinenbau/schweissgestelle">Schweißgestelle</a></li><li><a href="/schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller">Fahrzeugaufbauten</a></li><li><a href="/schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme">Werkstückträgersysteme</a></li></ul><strong><a href="/schweisskonstruktionen/transportsysteme-produktion">Transportsysteme</a></strong>
                                <ul><li><a href="/schweisskonstruktionen/transportsysteme-produktion/buehnenwagen">Bühnenwagen</a></li><li><a href="/schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen">Schwerlast Plattformwagen</a></li><li><a href="/schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller">Elektrohängebahn</a></li><li><a href="/schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer">Power and Free Förderer</a></li><li><a href="/schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer">Kreiskettenförderer</a></li><li><a href="/schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer">Unterflurschleppkettenförderer</a></li><li><a href="/schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller">Fahrerlose Transportsysteme</a></li></ul><strong><a href="/schweisskonstruktionen/foerdertechnik-zubehoer-ersatzteile">Ersatzteile und Zubehör</a></strong>
                                <ul></ul>']);
            });
Route::get('/us/welding-fabrications', function () {
                return view('templates.basic')->with(['meta_title' => 'Welding fabrications – Quality made in Germany since 1926', 'meta_description' => 'Welding fabrications ✓ Skids ☆ Mechanical engineering ☆ Transport systems ☆ Industry spare parts ➨ Get more information now!', 'h1' => 'Welding fabrications', 'seo1' => 'Since 1926, Irion  has stood for consistently high quality welded constructions such as skids, load handling devices, mechanical engineering and steel constructions as well as transport systems for production and industrial spare parts. Our welded parts production is specialised in the project business from 30 to 5,000 pieces.', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications />
', 'submenu' => '<strong><a href="/us/welding-fabrications/skid-construction">Skid construction</a></strong>
                                <ul><li><a href="/us/welding-fabrications/skid-construction/skid-automotive">Skid Automotive</a></li><li><a href="/us/welding-fabrications/skid-construction/conveyor-systems-automotive">Conveyor Systems Automotive</a></li><li><a href="/us/welding-fabrications/skid-construction/special-load-carriers">Special load carriers</a></li></ul><strong><a href="/us/welding-fabrications/lifting-equipment-manufacturer">Lifting equipment </a></strong>
                                <ul><li><a href="/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers">Heavy duty steel pallets</a></li><li><a href="/us/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins">Industrial bins</a></li><li><a href="/us/welding-fabrications/lifting-equipment-manufacturer/transport-bins">Transport bins</a></li><li><a href="/us/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams">Steel cross beams</a></li><li><a href="/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands">Heavy duty stands</a></li><li><a href="/us/welding-fabrications/lifting-equipment-manufacturer/post-pallets">Post pallets</a></li><li><a href="/us/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks">Metal stacking racks</a></li></ul><strong><a href="/us/welding-fabrications/welded-steel-construction">Welded steel construction</a></strong>
                                <ul><li><a href="/us/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers">Scissor lift tables</a></li><li><a href="/us/welding-fabrications/welded-steel-construction/welded-racks">Welded racks</a></li><li><a href="/us/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies">Commercial vehicle bodies</a></li><li><a href="/us/welding-fabrications/welded-steel-construction/product-conveyor-system">Product conveyor system</a></li></ul><strong><a href="/us/welding-fabrications/transportation-systems">Transportation systems</a></strong>
                                <ul><li><a href="/us/welding-fabrications/transportation-systems/mobile-lifting-platforms">Mobile lifting platforms</a></li><li><a href="/us/welding-fabrications/transportation-systems/heavy-duty-platform-trolley">Heavy duty platform trolley</a></li><li><a href="/us/welding-fabrications/transportation-systems/electric-monorail">Electric monorail </a></li><li><a href="/us/welding-fabrications/transportation-systems/power-and-free-conveyors">Power and free conveyors</a></li><li><a href="/us/welding-fabrications/transportation-systems/chain-conveyor-parts">Chain conveyor</a></li><li><a href="/us/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor">Underfloor drag chain conveyor</a></li><li><a href="/us/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers">Automated guided vehicle</a></li></ul><strong><a href="/us/welding-fabrications/conveyor-accessories-spare-parts">Spare parts and accessories</a></strong>
                                <ul></ul>']);
            });
Route::get('/schweisskonstruktionen/skid-anlagenbau', function () {
                return view('templates.basic')->with(['meta_title' => 'Skid Anlagenbau – Skid System Fertigung für die Industrie', 'meta_description' => 'Skid Anlagenbau ✓ 30 bis 5.000 Stück ☆ Automobilindustrie ☆ Transfersysteme ☆ Sonderladungsträger ➨ Skid Systeme für die Industrie!', 'h1' => 'Skid Anlagenbau', 'seo1' => 'Irion bietet den Skid Anlagenbau für die Automobilindustrie sowie individuelle Transfersysteme und Sonderladungsträger für die Industrie. Wir fertigen Ihr maßgeschneidertes Skid System im Projektgeschäft von 30 bis 5.000 Stück in konstant hoher Qualität.', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/skid-anlagenbau />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction />
', 'submenu' => '<strong>Beispiele</strong><ul><li><a href="/schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie">Skid Automobilindustrie</a></li><li><a href="/schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie">Fördertechnik Automobilindustrie</a></li><li><a href="/schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger">Sonderladungsträger</a></li></ul>']);
            });
Route::get('/us/welding-fabrications/skid-construction', function () {
                return view('templates.basic')->with(['meta_title' => 'Skid construction – Skid system manufacturing in Germany', 'meta_description' => 'Skid construction ✓ 30 to 5,000 pieces ☆ Automotive industry ☆ Transfer systems ☆ Special load carriers ➨ Skid systems for industry!', 'h1' => 'Skid construction', 'seo1' => 'Irion offers skid system construction for the automotive industry as well as individual transfer systems and special load carriers for industry. We manufacture your customized skid system in the project business from 30 to 5,000 pieces in consistently high quality.', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/skid-anlagenbau />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction />
', 'submenu' => '<strong>Examples</strong><ul><li><a href="/us/welding-fabrications/skid-construction/skid-automotive">Skid Automotive</a></li><li><a href="/us/welding-fabrications/skid-construction/conveyor-systems-automotive">Conveyor Systems Automotive</a></li><li><a href="/us/welding-fabrications/skid-construction/special-load-carriers">Special load carriers</a></li></ul>']);
            });
Route::get('/schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie', function () {
                return view('templates.basic')->with(['meta_title' => 'Skid Automobilindustrie – Skid Fördertechnik Automotive', 'meta_description' => 'Skid Automobilindustrie ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Skid Fördertechnik für Automotive!', 'h1' => 'Skid Automobilindustrie', 'seo1' => '<p>Irion bietet Skid Systeme für die Automobilindustrie.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/skid-automotive />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/skid-construction/skid-automotive', function () {
                return view('templates.basic')->with(['meta_title' => 'Skid Automotive – Conveyor technology for car industry ', 'meta_description' => 'Skid automotive ✓ 30 to 5,000 pieces ☆ Constant high quality ☆ Responsible ☆ Precise ➨ Skid technology made in Germany!', 'h1' => 'Skid automotive', 'seo1' => '<p>Irion offers skid systems for the automotive industry.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/skid-automotive />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie', function () {
                return view('templates.basic')->with(['meta_title' => 'Fördertechnik Automobilindustrie – Transfersysteme', 'meta_description' => 'Fördertechnik Automobilindustrie ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Transfersysteme für Automotive!', 'h1' => 'Fördertechnik Automobilindustrie', 'seo1' => '<p>Irion bietet Fördertechnik Systeme für die Automobilindustrie.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/conveyor-systems-automotive />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/skid-construction/conveyor-systems-automotive', function () {
                return view('templates.basic')->with(['meta_title' => 'Conveyor systems automotive – Industry transfer technology', 'meta_description' => 'Conveyor systems automotive ✓ 30 to 5,000 pieces ☆ Contant high quality ☆ Responsible ☆ Precise ➨ Transfer systems for automotive!', 'h1' => 'Conveyor systems automotive', 'seo1' => '<p>Irion offers conveyor systems for the automotive industry.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/conveyor-systems-automotive />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger', function () {
                return view('templates.basic')->with(['meta_title' => 'Maßgeschneiderte Sonderladungsträger vom Hersteller', 'meta_description' => 'Hersteller Sonderladungsträger ✓ 30 bis 5.000 Stück ☆ Automobilindustrie ☆ Logistik ☆ Produktion ➨ Maßgeschneiderte Ladungsträger!', 'h1' => 'Sonderladungsträger ', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Sonderladungsträger.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/special-load-carriers />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/skid-construction/special-load-carriers', function () {
                return view('templates.basic')->with(['meta_title' => 'Customized special load carriers from the manufacturer', 'meta_description' => 'Special load carriers manufacturer ✓ 30 to 5,000 pieces ☆ Automotive industry ☆ Logistics ☆ Production ➨ Customized load carriers	', 'h1' => 'Special load carriers', 'seo1' => '<p>Irion is a manufacturer for high quality special load carriers.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/special-load-carriers />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller', function () {
                return view('templates.basic')->with(['meta_title' => 'Lastaufnahmemittel Hersteller und Behälterbau mit Stahl', 'meta_description' => 'Lastaufnahmemittel Hersteller ✓ Schwerlast ☆ Paletten ☆ Gestelle ☆  Traversen ☆ Behälter ➨ Lastaufnahmemittel und Behälterbau mit Stahl!', 'h1' => 'Lastaufnahmemittel Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Lastaufnahmemittel bis hin zum Behälterbau.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer />
', 'submenu' => '<strong>Beispiele</strong><ul><li><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl">Schwerlastpaletten</a></li><li><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall">Industriebehälter</a></li><li><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall">Transportbehälter</a></li><li><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen">Schwerlasttraversen</a></li><li><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke">Schwerlastböcke</a></li><li><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller">Rungengestelle</a></li><li><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller">Stapelgestelle</a></li></ul>']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer', function () {
                return view('templates.basic')->with(['meta_title' => 'Lifting equipment manufacturer and container construction', 'meta_description' => 'Lifting equipment manufacturer ✓ Pallets ☆ Racks ☆ Cross beams ➨ Load handling equipment and container construction with steel!', 'h1' => 'Lifting equipment manufacturer', 'seo1' => '<p>Irion is a lifting equipment manufacturer of high quality load handling equipment and container construction.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer />
', 'submenu' => '<strong>Examples</strong><ul><li><a href="/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers">Heavy duty steel pallets</a></li><li><a href="/us/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins">Industrial bins</a></li><li><a href="/us/welding-fabrications/lifting-equipment-manufacturer/transport-bins">Transport bins</a></li><li><a href="/us/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams">Steel cross beams</a></li><li><a href="/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands">Heavy duty stands</a></li><li><a href="/us/welding-fabrications/lifting-equipment-manufacturer/post-pallets">Post pallets</a></li><li><a href="/us/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks">Metal stacking racks</a></li></ul>']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl', function () {
                return view('templates.basic')->with(['meta_title' => 'Schwerlastpaletten aus Stahl – Stahlpaletten Hersteller', 'meta_description' => 'Schwerlastpaletten Stahl ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Stahlpaletten vom Hersteller!', 'h1' => 'Schwerlastpaletten aus Stahl', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Schwerlastpaletten aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers', function () {
                return view('templates.basic')->with(['meta_title' => 'Heavy duty steel pallets manufacturers!', 'meta_description' => 'Heavy duty steel pallets manufacturers ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Precise ➨ Made in Germany since 1926!', 'h1' => 'Heavy duty steel pallets manufacturers', 'seo1' => '<p>Irion is a manufacturer of high quality heavy duty steel pallets.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall', function () {
                return view('templates.basic')->with(['meta_title' => 'Industriebehälter Metall – Industriecontainer Hersteller', 'meta_description' => 'Industriebehälter Metall ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Industriecontainer vom Hersteller!', 'h1' => 'Industriebehälter aus Metall', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Industriebehälter aus Metall.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins', function () {
                return view('templates.basic')->with(['meta_title' => 'Industrial metal bins – Made in Germany since 1926!', 'meta_description' => 'Industrial metal bins ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Precise ➨ Industrial containers from the manufacturer!', 'h1' => 'Industrial metal bins', 'seo1' => '<p>Irion is a manufacturer of high quality industrial bins made of metal.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall', function () {
                return view('templates.basic')->with(['meta_title' => 'Transportbehälter Metall – Lagerbehälter Hersteller', 'meta_description' => 'Transportbehälter Metall ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Lagerbehälter vom Hersteller!', 'h1' => 'Transportbehälter aus Metall', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Transportbehälter aus Metall.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/transport-bins />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer/transport-bins', function () {
                return view('templates.basic')->with(['meta_title' => 'Transport bins – Made for industry in Germany since 1926!', 'meta_description' => 'Metal transport bins ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ For logistics, maintenance & production ➨ Information here!', 'h1' => 'Transport bins', 'seo1' => '<p>Irion is a manufacturer of high quality metal transport bins.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/transport-bins />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen', function () {
                return view('templates.basic')->with(['meta_title' => 'Schwerlasttraversen – Hebetechnik Hersteller', 'meta_description' => 'Schwerlasttraversen ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Hebetechnik vom Hersteller!', 'h1' => 'Schwerlasttraversen', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Schwerlasttraversen aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel cross beams – Made in Germany since 1926!', 'meta_description' => 'Steel cross beams ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Lifting technology from the manufacturer!', 'h1' => 'Steel cross beams', 'seo1' => '<p>Irion is a manufacturer of high quality steel cross beams.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke', function () {
                return view('templates.basic')->with(['meta_title' => 'Schwerlastböcke Hersteller – Schwerlast Unterstellböcke', 'meta_description' => 'Schwerlastböcke für die Industrie ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Schwerlast Unterstellböcke vom Hersteller!', 'h1' => 'Schwerlastböcke', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Schwerlastböcke aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands', function () {
                return view('templates.basic')->with(['meta_title' => 'Heavy duty stands – Metal trestles for industry!', 'meta_description' => 'Heavy duty stands ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Made in Germany since 1926!', 'h1' => 'Heavy duty stands', 'seo1' => '<p>Irion is a manufacturer of high quality heavy duty stands.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller', function () {
                return view('templates.basic')->with(['meta_title' => 'Rungengestelle Hersteller – Rungenpaletten aus Metall', 'meta_description' => 'Rungengestelle Hersteller ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Rungenpaletten aus Metall!', 'h1' => 'Rungengestelle Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Rungengestelle aus Metall.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/post-pallets />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer/post-pallets', function () {
                return view('templates.basic')->with(['meta_title' => 'Post pallets – Steel racks made in Germany since 1926!', 'meta_description' => 'Post pallets for industry! ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Custom metal pallets!', 'h1' => 'Post pallets', 'seo1' => '<p>Irion is a manufacturer of high quality steel post pallets.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/post-pallets />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller', function () {
                return view('templates.basic')->with(['meta_title' => 'Stapelgestelle Hersteller – Stapelpaletten aus Metall', 'meta_description' => 'Stapelgestelle Hersteller ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Stapelpaletten aus Metall!', 'h1' => 'Stapelgestelle Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Stapelgestelle aus Metall.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks', function () {
                return view('templates.basic')->with(['meta_title' => 'Metal stacking racks – Made in Germany since 1926!', 'meta_description' => 'Industrial metal stacking racks ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Custom steel racks!', 'h1' => 'Metal stacking racks', 'seo1' => '<p>Irion is a manufacturer of high quality metal stacking racks. Our manufacturing technology meets the special requirements of industry and is used in logistics, warehousing and production.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/maschinenbau', function () {
                return view('templates.basic')->with(['meta_title' => 'Schweißkonstruktionen Maschinenbau – Stahlbaukonstruktionen', 'meta_description' => 'Schweißkonstruktionen Maschinenbau ✓ Scherenhubtische ☆ Schweißgestelle ☆ Aufbauten ☆ Werkstückträger ➨ Industrie Stahlbaukonstruktionen!', 'h1' => 'Schweißkonstruktionen für den Maschinenbau', 'seo1' => '<p>Irion bietet hochwertige Schweißkonstruktionen für den Maschinenbau und Anlagenbau.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction />
', 'submenu' => '<strong>Beispiele</strong><ul><li><a href="/schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller">Scherenhubtische</a></li><li><a href="/schweisskonstruktionen/maschinenbau/schweissgestelle">Schweißgestelle</a></li><li><a href="/schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller">Fahrzeugaufbauten</a></li><li><a href="/schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme">Werkstückträgersysteme</a></li></ul>']);
            });
Route::get('/us/welding-fabrications/welded-steel-construction', function () {
                return view('templates.basic')->with(['meta_title' => 'Welded steel construction – Made in Germany since 1926!', 'meta_description' => 'Welded steel construction ✓ Mechanical engineering welding technology ☆ Industrial steel structures! ➨ View our specialties here!', 'h1' => 'Welded steel construction', 'seo1' => '<p>Irion offers high quality welded steel constructions for mechanical engineering and plant construction.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction />
', 'submenu' => '<strong>Examples</strong><ul><li><a href="/us/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers">Scissor lift tables</a></li><li><a href="/us/welding-fabrications/welded-steel-construction/welded-racks">Welded racks</a></li><li><a href="/us/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies">Commercial vehicle bodies</a></li><li><a href="/us/welding-fabrications/welded-steel-construction/product-conveyor-system">Product conveyor system</a></li></ul>']);
            });
Route::get('/schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller', function () {
                return view('templates.basic')->with(['meta_title' => 'Scherenhubtische Hersteller – Schwerlasthubtische', 'meta_description' => 'Scherenhubtische Hersteller ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Schwerlasthubtische aus Stahl!', 'h1' => 'Scherenhubtische Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Scherenhubtische aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers', function () {
                return view('templates.basic')->with(['meta_title' => 'Scissor lift table manufacturers – Heavy duty lift tables', 'meta_description' => 'Scissor lift table manufacturers ✓ Consistently high quality ☆ Responsible ☆ Precise ➨ Heavy duty lift tables made in Germany!', 'h1' => 'Scissor lift table manufacturers', 'seo1' => '<p>Irion is a manufacturer for high quality industrial scissor lift tables.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/maschinenbau/schweissgestelle', function () {
                return view('templates.basic')->with(['meta_title' => 'Schweißgestelle – Stahlrahmenkonstruktionen Hersteller', 'meta_description' => 'Schweißgestelle aus Stahl ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Stahlrahmenkonstruktionen Hersteller!', 'h1' => 'Schweißgestelle', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Schweißgestelle aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/welded-racks />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/welded-steel-construction/welded-racks', function () {
                return view('templates.basic')->with(['meta_title' => 'Welded racks – Steel frame construction manufacturer', 'meta_description' => 'Welded racks for industry ✓ Consistently high quality ☆ Responsible ☆ Precise ➨ Steel frame structures made in Germany since 1926!', 'h1' => 'Welded racks', 'seo1' => '<p>Irion is a manufacturer of high quality welded steel racks.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/welded-racks />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller', function () {
                return view('templates.basic')->with(['meta_title' => 'Fahrzeugaufbauten Hersteller – Nutzfahrzeugaufbauten', 'meta_description' => 'Fahrzeugaufbauten Hersteller ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Nutzfahrzeugaufbauten aus Stahl!', 'h1' => 'Fahrzeugaufbauten Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Fahrzeugaufbauten aus Stahl. Wir bieten Spezialaufbauten als auch typische Aufbauten, wie den Pritschenaufbau, Kofferaufbau, Kipperaufbau oder Kranaufbau.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies', function () {
                return view('templates.basic')->with(['meta_title' => 'Commercial vehicle bodies – Made in Germany since 1926', 'meta_description' => 'Commercial vehicle bodies manufacturer ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Inform now!', 'h1' => 'Commercial vehicle bodies', 'seo1' => '<p>Irion is a manufacturer of high quality commercial vehicle bodies. We offer special bodies as well as typical bodies, such as the flatbed body, box body, tipper body or crane body.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme', function () {
                return view('templates.basic')->with(['meta_title' => 'Werkstückträgersysteme – Werkstückträger Transportsystem', 'meta_description' => 'Werkstückträgersysteme aus Stahl ✓ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Werkstückträger Transportsystem Hersteller!', 'h1' => 'Werkstückträgersysteme', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Werkstückträgersysteme aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/product-conveyor-system />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/welded-steel-construction/product-conveyor-system', function () {
                return view('templates.basic')->with(['meta_title' => 'Product conveyor system – Made in Germany since 1926!', 'meta_description' => 'Steel product conveyor system ✓ Consistently high quality ☆ Precise ➨ Workpiece carrier Transport system manufacturer!', 'h1' => 'Product conveyor system', 'seo1' => '<p>Irion is a manufacturer of high quality steel product conveyor systems.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/product-conveyor-system />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion', function () {
                return view('templates.basic')->with(['meta_title' => 'Transportsysteme Produktion – Intralogistik Fördertechnik', 'meta_description' => 'Transportsysteme Produktion ✓ Bühnen- & Transportwagen ☆ Mechanische Teile für Förderer & Transportsysteme ➨ Intralogistik Fördertechnik!', 'h1' => 'Transportsysteme Produktion', 'seo1' => '<p>Irion bietet hochwertige Transportsysteme für Produktionsbetriebe.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems />
', 'submenu' => '<strong>Beispiele</strong><ul><li><a href="/schweisskonstruktionen/transportsysteme-produktion/buehnenwagen">Bühnenwagen</a></li><li><a href="/schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen">Schwerlast Plattformwagen</a></li><li><a href="/schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller">Elektrohängebahn</a></li><li><a href="/schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer">Power and Free Förderer</a></li><li><a href="/schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer">Kreiskettenförderer</a></li><li><a href="/schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer">Unterflurschleppkettenförderer</a></li><li><a href="/schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller">Fahrerlose Transportsysteme</a></li></ul>']);
            });
Route::get('/us/welding-fabrications/transportation-systems', function () {
                return view('templates.basic')->with(['meta_title' => 'Transportation systems – Made in Germany since 1926!', 'meta_description' => 'Transportation systems production ✓ Stage & transport trolleys ☆ Mechanical parts for conveyors ➨ Intralogistics conveyor technology!', 'h1' => 'Transportation systems', 'seo1' => '<p>Irion provides high quality transportation systems for manufacturing companies.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems />
', 'submenu' => '<strong>Examples</strong><ul><li><a href="/us/welding-fabrications/transportation-systems/mobile-lifting-platforms">Mobile lifting platforms</a></li><li><a href="/us/welding-fabrications/transportation-systems/heavy-duty-platform-trolley">Heavy duty platform trolley</a></li><li><a href="/us/welding-fabrications/transportation-systems/electric-monorail">Electric monorail </a></li><li><a href="/us/welding-fabrications/transportation-systems/power-and-free-conveyors">Power and free conveyors</a></li><li><a href="/us/welding-fabrications/transportation-systems/chain-conveyor-parts">Chain conveyor</a></li><li><a href="/us/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor">Underfloor drag chain conveyor</a></li><li><a href="/us/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers">Automated guided vehicle</a></li></ul>']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion/buehnenwagen', function () {
                return view('templates.basic')->with(['meta_title' => 'Bühnenwagen – Fahrbare Hebebühnen Hersteller', 'meta_description' => 'Bühnenwagen aus Stahl ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Fahrbare Hebebühnen Hersteller!', 'h1' => 'Bühnenwagen', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Bühnenwagen aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/mobile-lifting-platforms />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/transportation-systems/mobile-lifting-platforms', function () {
                return view('templates.basic')->with(['meta_title' => 'Mobile lifting platforms – Made in Germany since 1926!', 'meta_description' => 'Mobile lifting platforms manufacturer ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Inform now!', 'h1' => 'Mobile lifting platforms', 'seo1' => '<p>Irion is a manufacturer of high quality steel mobile lifting platforms.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/mobile-lifting-platforms />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen', function () {
                return view('templates.basic')->with(['meta_title' => 'Schwerlast Plattformwagen – Transportwagen Industrie', 'meta_description' => 'Schwerlast Plattformwagen aus Stahl ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ➨  Industrie Transportwagen vom Hersteller!', 'h1' => 'Schwerlast Plattformwagen', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Schwerlast Plattformwagen aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/heavy-duty-platform-trolley />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/transportation-systems/heavy-duty-platform-trolley', function () {
                return view('templates.basic')->with(['meta_title' => 'Heavy duty platform trolley – Made in Germany since 1926', 'meta_description' => 'Heavy duty platform trolley production ✓ 30 to 5,000 pieces ☆ Constant high quality ➨ Industrial transport truck from manufacturer!', 'h1' => 'Heavy duty platform trolley', 'seo1' => '<p>Irion is a manufacturer of high quality heavy duty platform trolleys.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/heavy-duty-platform-trolley />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller', function () {
                return view('templates.basic')->with(['meta_title' => 'Elektrohängebahn Komponenten – Mechanische Teile Hersteller', 'meta_description' => 'Elektrohängebahn Komponenten ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Mechanische Teile vom Hersteller!', 'h1' => 'Elektrohängebahn Komponenten – Mechanische Teile Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Elektrohängebahn Komponenten aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/electric-monorail />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/transportation-systems/electric-monorail', function () {
                return view('templates.basic')->with(['meta_title' => 'Electric monorail – System components manufacturer!', 'meta_description' => 'Electric monorail components ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Made in Germany since 1926', 'h1' => 'Electric monorail system components manufacturer', 'seo1' => '<p>Irion is a manufacturer of high quality steel electric monorail components.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/electric-monorail />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer', function () {
                return view('templates.basic')->with(['meta_title' => 'Power and Free Förderer Komponenten – Teile Hersteller', 'meta_description' => 'Power and Free Förderer Komponenten ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Mechanische Teile vom Hersteller!', 'h1' => 'Power and Free Förderer Komponenten – Mechanische Teile Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Power and Free Förderer Komponenten aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/power-and-free-conveyors />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/transportation-systems/power-and-free-conveyors', function () {
                return view('templates.basic')->with(['meta_title' => 'Power and free conveyor components – Parts manufacturer', 'meta_description' => 'Power and free conveyor components ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Precise ➨ Made in Germany since 1926!', 'h1' => 'Power and free conveyor components manufacturer', 'seo1' => '<p>Irion is a manufacturer of high quality power and free conveyor steel components.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/power-and-free-conveyors />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer', function () {
                return view('templates.basic')->with(['meta_title' => 'Kreiskettenförderer Komponenten – Teile Hersteller', 'meta_description' => 'Kreiskettenförderer Komponenten ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Mechanische Teile vom Hersteller!', 'h1' => 'Kreiskettenförderer Komponenten – Mechanische Teile Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Kreiskettenförderer Komponenten aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/chain-conveyor-parts />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/transportation-systems/chain-conveyor-parts', function () {
                return view('templates.basic')->with(['meta_title' => 'Chain conveyor parts – Made in Germany since 1926!', 'meta_description' => 'Circular chain conveyor parts ✓ Consistently high quality ☆ Responsible ☆ Precise ➨ Mechanical parts from the manufacturer!', 'h1' => 'Chain conveyor parts manufacturer', 'seo1' => '<p>Irion is a manufacturer for high quality circular chain conveyor parts made of steel.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/chain-conveyor-parts />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer', function () {
                return view('templates.basic')->with(['meta_title' => 'Unterflurschleppkettenförderer Komponenten – Hersteller', 'meta_description' => 'Unterflurschleppkettenförderer Komponenten ✓ 30 bis 5.000 Stk ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Mechanische Teile!', 'h1' => 'Unterflurschleppkettenförderer Komponenten – Mechanische Teile Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Unterflurschleppkettenförderer Komponenten aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor', function () {
                return view('templates.basic')->with(['meta_title' => 'Underfloor drag chain conveyor components – Manufacturer', 'meta_description' => 'Underfloor drag chain conveyor components ✓ 30 to 5,000 pcs ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Mechanical parts', 'h1' => 'Underfloor drag chain conveyor components', 'seo1' => '<p>Irion is a manufacturer of high quality steel underfloor drag chain conveyor components.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller', function () {
                return view('templates.basic')->with(['meta_title' => 'Fahrerlose Transportsysteme Komponenten – Mechanische Teile Hersteller', 'meta_description' => 'Fahrerlose Transportsysteme Komponenten ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Mechanische Teile vom Hersteller!', 'h1' => 'Fahrerlose Transportsysteme Komponenten – Mechanische Teile Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Komponenten für fahrerlose Transportsysteme aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers', function () {
                return view('templates.basic')->with(['meta_title' => 'Automated guided vehicle manufacturers – Steel Parts!', 'meta_description' => 'Automated guided vehicle parts manufacturers ✓ Consistently high quality ☆ Responsible ☆ Precise ➨ Made in Germany since 1926!', 'h1' => 'Automated guided vehicle manufacturers', 'seo1' => '<p>Irion is a manufacturer of high quality steel parts for automated guided vehicles.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers />
', 'submenu' => '']);
            });
Route::get('/schweisskonstruktionen/foerdertechnik-zubehoer-ersatzteile', function () {
                return view('templates.basic')->with(['meta_title' => 'Fördertechnik Zubehör und Ersatzteile vom Hersteller', 'meta_description' => 'Fördertechnik Zubehör und Ersatzteile ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Mechanische Teile vom Hersteller!', 'h1' => 'Fördertechnik Zubehör und Ersatzteile – Mechanische Teile Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertiges Fördertechnik Zubehör und Ersatzteile aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/conveyor-accessories-spare-parts />
', 'submenu' => '']);
            });
Route::get('/us/welding-fabrications/conveyor-accessories-spare-parts', function () {
                return view('templates.basic')->with(['meta_title' => 'Conveyor accessories and spare parts from the manufacturer', 'meta_description' => 'Conveyor accessories and spare parts ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Precise ➨ Made in Germany since 1926!', 'h1' => 'Conveyor accessories and spare parts', 'seo1' => '<p>Irion is a manufacturer of high quality steel conveyor accessories and spare parts.
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/conveyor-accessories-spare-parts />
', 'submenu' => '']);
            });
Route::get('/stahlverarbeitung', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahlverarbeitung in Deutschland seit 1926 – Firma Irion', 'meta_description' => 'Stahlverarbeitung in Deutschland ✓ 100 bis 500.000 Stück ☆ Stahlteile lasern lassen ☆ Stahlbearbeitung ☆ Präzise ➨ Qualität seit 1926!', 'h1' => 'Stahlverarbeitung', 'seo1' => '<p>Die Firma Irion bietet seit 1926 präzise Stahlverarbeitung in Deutschland. An unserem Standort im Schwarzwald können Stahlteile im Volumen von 100 bis 500.000 im Projektgeschäft produziert werden.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company />
', 'submenu' => '<strong><a href="/stahlverarbeitung/stahlteile-lasern-lassen">Stahlteile lasern lassen</a></strong>
                                <ul><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt">Stahlblech Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt">Stahlplatten Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt">Edelstahl Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt">Schwarzblech Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt">Grobblech Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt">Federstahl Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt">Werkzeugstahl Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt">Winkelstahl Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt">Elektroblech Zuschnitt</a></li></ul><strong><a href="/stahlverarbeitung/stahlbearbeitung">Stahlbearbeitung</a></strong>
                                <ul><li><a href="/stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen">Stahl schweißen lassen</a></li><li><a href="/stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen">Stahl schneiden lassen</a></li><li><a href="/stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen">Stahl biegen lassen</a></li><li><a href="/stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen">Stahl fräsen lassen</a></li><li><a href="/stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen">Stahl kanten lassen</a></li></ul>']);
            });
Route::get('/us/steel-processing-company', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel processing company – In Germany since 1926!', 'meta_description' => 'Steel processing company from Germany ✓ 100 to 500,000 pieces ☆ Lasered steel parts ☆ Precise ➨ Consistently high quality since 1926!', 'h1' => 'Steel processing company', 'seo1' => '<p>Our company Irion  has been offering precise steel processing in Germany since 1926. At our location in the Black Forest, steel parts can be produced in volumes from 100 to 500,000 in the project business.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company />
', 'submenu' => '<strong><a href="/us/steel-processing-company/laser-cut-steel-parts">Laser cut steel parts</a></strong>
                                <ul><li><a href="/us/steel-processing-company/laser-cut-steel-parts/steel-sheet-cutting">Steel sheet cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/steel-plate-cutting">Steel plate cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/cutting-of-stainless-steel">Stainless steel cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/black-metal-sheet-cut-to-size">Black sheet metal cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/cutting-thick-sheet-metal">Thick sheet metal cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/spring-steel-cut-to-size">Spring steel cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/tool-steel-cut-to-size">Tool steel cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/angle-iron-cut-to-size">Angle iron cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/electrical-steel-cutting">Electrical steel cutting</a></li></ul><strong><a href="/us/steel-processing-company/steel-machining">Steel machining</a></strong>
                                <ul><li><a href="/us/steel-processing-company/steel-machining/welding-business">Welding business</a></li><li><a href="/us/steel-processing-company/steel-machining/laser-steel-cutting-services">Steel cutting services</a></li><li><a href="/us/steel-processing-company/steel-machining/steel-bending-services">Steel bending services</a></li><li><a href="/us/steel-processing-company/steel-machining/steel-milling">Steel milling</a></li><li><a href="/us/steel-processing-company/steel-machining/press-brake-metal-forming">Brake forming</a></li></ul>']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahlteile lasern lassen – Laserteile aus Stahl', 'meta_description' => 'Stahlteile lasern lassen ✓ Stahlbleche ☆ Stahlplatten ☆ Edelstahl ☆ Schwarzblech ☆ Grobblech ☆ uvm. ➨ Industrie Laserteile aus Stahl!', 'h1' => 'Stahlteile lasern lassen', 'seo1' => '<p>Irion bietet hochwertige Industrie Laserteile aus Stahl.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts />
', 'submenu' => '<strong>Beispiele</strong><ul><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt">Stahlblech Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt">Stahlplatten Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt">Edelstahl Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt">Schwarzblech Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt">Grobblech Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt">Federstahl Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt">Werkzeugstahl Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt">Winkelstahl Zuschnitt</a></li><li><a href="/stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt">Elektroblech Zuschnitt</a></li></ul>']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts', function () {
                return view('templates.basic')->with(['meta_title' => 'Laser cut steel parts – Steel components made in Germany', 'meta_description' => 'Laser cut steel parts ✓ Steel sheets ☆ Steel plates ☆ Stainless steel ☆ Black plate ☆ and more ➨ Industrial steel laser parts', 'h1' => 'Laser cut steel parts', 'seo1' => '<p>Irion offers high quality laser cut steel parts.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts />
', 'submenu' => '<strong>Examples</strong><ul><li><a href="/us/steel-processing-company/laser-cut-steel-parts/steel-sheet-cutting">Steel sheet cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/steel-plate-cutting">Steel plate cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/cutting-of-stainless-steel">Stainless steel cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/black-metal-sheet-cut-to-size">Black sheet metal cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/cutting-thick-sheet-metal">Thick sheet metal cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/spring-steel-cut-to-size">Spring steel cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/tool-steel-cut-to-size">Tool steel cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/angle-iron-cut-to-size">Angle iron cutting</a></li><li><a href="/us/steel-processing-company/laser-cut-steel-parts/electrical-steel-cutting">Electrical steel cutting</a></li></ul>']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahlblech Zuschnitt nach Maß – Stahlblech lasern lassen', 'meta_description' => 'Stahlblech Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Stahlblech lasern lassen!', 'h1' => 'Stahlblech Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Stahlblech Zuschnitt nach Maß.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/steel-sheet-cutting />
', 'submenu' => '']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/steel-sheet-cutting', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel sheet cutting – Laser cutting for industry!', 'meta_description' => 'Steel sheet cutting ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany!', 'h1' => 'Steel sheet cutting', 'seo1' => '<p>Irion offers high-quality steel sheet cutting to measure.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/steel-sheet-cutting />
', 'submenu' => '']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahlplatten Zuschnitt – Stahlplatten lasern lassen', 'meta_description' => 'Stahlplatten Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Stahlplatten lasern lassen!', 'h1' => 'Stahlplatten Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Stahlplatten Zuschnitt nach Maß.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/steel-plate-cutting />
', 'submenu' => '']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/steel-plate-cutting', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel plate cutting – Laser cutting for industry!', 'meta_description' => 'Steel plate cutting ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany!', 'h1' => 'Steel plate cutting', 'seo1' => '<p>Irion offers high-quality steel plate cutting to measure.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/steel-plate-cutting />
', 'submenu' => '']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Edelstahl Zuschnitt nach Maß – Edelstahl lasern lassen', 'meta_description' => 'Edelstahl Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Edelstahl lasern lassen!', 'h1' => 'Edelstahl Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Edelstahl Zuschnitt nach Maß.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/cutting-of-stainless-steel />
', 'submenu' => '']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/cutting-of-stainless-steel', function () {
                return view('templates.basic')->with(['meta_title' => 'Cutting of stainless steel – Laser cutting for industry', 'meta_description' => 'Cutting of stainless steel ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany ', 'h1' => 'Cutting of stainless steel', 'seo1' => '<p>Irion offers high-quality cutting of stainless steel to measure.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/cutting-of-stainless-steel />
', 'submenu' => '']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Schwarzblech Zuschnitt – Schwarzblech lasern lassen', 'meta_description' => 'Schwarzblech Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Schwarzblech lasern lassen!', 'h1' => 'Schwarzblech Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Schwarzblech Zuschnitt nach Maß.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/black-metal-sheet-cut-to-size />
', 'submenu' => '']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/black-metal-sheet-cut-to-size', function () {
                return view('templates.basic')->with(['meta_title' => 'Black metal sheet cut to size – Industrial laser cutting', 'meta_description' => 'Black metal sheet cut to size ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany', 'h1' => 'Black metal sheet cut to size', 'seo1' => '<p>Irion offers high-quality black metal sheet cut to size.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/black-metal-sheet-cut-to-size />
', 'submenu' => '']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Grobblech Zuschnitt nach Maß – Grobblech lasern lassen', 'meta_description' => 'Grobblech Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Grobblech lasern lassen!', 'h1' => 'Grobblech Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Grobblech Zuschnitt nach Maß.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/cutting-thick-sheet-metal />
', 'submenu' => '']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/cutting-thick-sheet-metal', function () {
                return view('templates.basic')->with(['meta_title' => 'Cutting thick sheet metal – Industrial laser cutting!', 'meta_description' => 'Cutting thick sheet metal ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 ☆ Size 59 x 118 inch ➨ Top quality from Germany', 'h1' => 'Cutting thick sheet metal', 'seo1' => '<p>Irion offers cutting thick sheet metal to size in highest quality.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/cutting-thick-sheet-metal />
', 'submenu' => '']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Federstahl Zuschnitt nach Maß – Federstahl lasern lassen', 'meta_description' => 'Federstahl Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Federstahl lasern lassen!', 'h1' => 'Federstahl Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Federstahl Zuschnitt nach Maß.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/spring-steel-cut-to-size />
', 'submenu' => '']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/spring-steel-cut-to-size', function () {
                return view('templates.basic')->with(['meta_title' => 'Spring steel cut to size – Industrial laser cutting', 'meta_description' => 'Spring steel cut to size ✓ 100 to 500,000 pieces ☆ Thickness 0,04 to 0,98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany!', 'h1' => 'Spring steel cut to size', 'seo1' => '<p>Irion offers high-quality spring steel cut to size.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/spring-steel-cut-to-size />
', 'submenu' => '']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Werkzeugstahl Zuschnitt – Werkzeugstahl lasern lassen', 'meta_description' => 'Werkzeugstahl Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Werkzeugstahl lasern lassen!', 'h1' => 'Werkzeugstahl Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Werkzeugstahl Zuschnitt nach Maß.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/tool-steel-cut-to-size />
', 'submenu' => '']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/tool-steel-cut-to-size', function () {
                return view('templates.basic')->with(['meta_title' => 'Tool steel cut to size – Industrial laser cutting', 'meta_description' => 'Tool steel cut to size ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany!', 'h1' => 'Tool steel cut to size', 'seo1' => '<p>Irion offers high-quality tool steel cut to size.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/tool-steel-cut-to-size />
', 'submenu' => '']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Winkelstahl Zuschnitt – Winkelstahl lasern lassen', 'meta_description' => 'Winkelstahl Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Winkelstahl lasern lassen!', 'h1' => 'Winkelstahl Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Winkelstahl Zuschnitt nach Maß.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/angle-iron-cut-to-size />
', 'submenu' => '']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/angle-iron-cut-to-size', function () {
                return view('templates.basic')->with(['meta_title' => 'Angle iron cut to size – Industrial laser cutting', 'meta_description' => 'Angle iron cut to size ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany!', 'h1' => 'Angle iron cut to size', 'seo1' => '<p>Irion offers high-quality angle iron cut to size.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/angle-iron-cut-to-size />
', 'submenu' => '']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Elektroblech Zuschnitt – Elektroblech lasern lassen', 'meta_description' => 'Elektroblech Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Elektroblech lasern lassen!', 'h1' => 'Elektroblech Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Elektroblech Zuschnitt nach Maß.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/electrical-steel-cutting />
', 'submenu' => '']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/electrical-steel-cutting', function () {
                return view('templates.basic')->with(['meta_title' => 'Electrical steel cutting – Industrial laser cutting', 'meta_description' => 'Electrical steel cutting ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany!', 'h1' => 'Electrical steel cutting', 'seo1' => '<p>Irion offers high-quality electrical steel cutting.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/electrical-steel-cutting />
', 'submenu' => '']);
            });
Route::get('/stahlverarbeitung/stahlbearbeitung', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahlbearbeitung in Deutschland seit 1926 – Firma Irion', 'meta_description' => 'Stahlbearbeitung in Deutschland ✓ Qualität seit 1926 ☆ Schweißen ☆ Schneiden ☆ Biegen ☆ Fräsen ☆ Kanten ➨ Stahlteile bearbeiten lassen!', 'h1' => 'Stahlbearbeitung', 'seo1' => '<p>Die Firma Irion bietet seit 1926 präzise Stahlbearbeitung in Deutschland.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining />
', 'submenu' => '<strong>Beispiele</strong><ul><li><a href="/stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen">Stahl schweißen lassen</a></li><li><a href="/stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen">Stahl schneiden lassen</a></li><li><a href="/stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen">Stahl biegen lassen</a></li><li><a href="/stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen">Stahl fräsen lassen</a></li><li><a href="/stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen">Stahl kanten lassen</a></li></ul>']);
            });
Route::get('/us/steel-processing-company/steel-machining', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel machining in Germany since 1926 – Irion  Company', 'meta_description' => 'Steel machining in Germany ✓ Quality since 1926 ☆ Welding ☆ Cutting ☆ Bending ☆ Milling ☆ Edging ➨ Have steel parts processed!', 'h1' => 'Steel machining', 'seo1' => '<p>Irion has been offering precise steel machining in Germany since 1926.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining />
', 'submenu' => '<strong>Examples</strong><ul><li><a href="/us/steel-processing-company/steel-machining/welding-business">Welding business</a></li><li><a href="/us/steel-processing-company/steel-machining/laser-steel-cutting-services">Steel cutting services</a></li><li><a href="/us/steel-processing-company/steel-machining/steel-bending-services">Steel bending services</a></li><li><a href="/us/steel-processing-company/steel-machining/steel-milling">Steel milling</a></li><li><a href="/us/steel-processing-company/steel-machining/press-brake-metal-forming">Brake forming</a></li></ul>']);
            });
Route::get('/stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahl schweißen lassen – Schweißbetrieb aus Deutschland', 'meta_description' => 'Stahl schweißen lassen ✓ 30 bis 5.000 Stück ☆ Konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Schweißbetrieb aus Deutschland!', 'h1' => 'Stahl schweißen lassen', 'seo1' => '<p>Irion gibt es bereits seit 1926. Wir sind ein erfahrener Schweißbetrieb aus Deutschland, genauer gesagt aus dem Schwarzwald. Unser Sitz ist Bad Teinach, das liegt in der Nähe von Städten wie Stuttgart, Pforzheim und Tübingen.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/welding-business />
', 'submenu' => '']);
            });
Route::get('/us/steel-processing-company/steel-machining/welding-business', function () {
                return view('templates.basic')->with(['meta_title' => 'Welding business – Have steel welded in Germany', 'meta_description' => 'Welding business ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Welding company from Germany!', 'h1' => 'Welding business', 'seo1' => '<p>Irion has been around since 1926. We are an experienced welding business from Southern Germany in Central Europe.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/welding-business />
', 'submenu' => '']);
            });
Route::get('/stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahl schneiden lassen – Laserschneidbetrieb Deutschland', 'meta_description' => 'Stahl schneiden lassen ✓ 100 bis 500.000 Stück ☆ Konstant hohe Qualität ☆ Präzise ➨ Laserschneidbetrieb aus Deutschland!', 'h1' => 'Stahl schneiden lassen', 'seo1' => '<p>Irion gibt es bereits seit 1926. Wir sind ein erfahrener Laserschneidbetrieb aus Deutschland, genauer gesagt aus dem Schwarzwald. Unser Sitz ist Bad Teinach, das liegt in der Nähe von Städten wie Stuttgart, Pforzheim und Tübingen.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/laser-steel-cutting-services />
', 'submenu' => '']);
            });
Route::get('/us/steel-processing-company/steel-machining/laser-steel-cutting-services', function () {
                return view('templates.basic')->with(['meta_title' => 'Laser steel cutting services – German steel company!', 'meta_description' => 'Laser steel cutting services ✓ 100 to 500,000 pieces ☆ Consistently high quality ☆ Precise ➨ Laser cutting company from Germany', 'h1' => 'Laser steel cutting services', 'seo1' => '<p>Irion has been around since 1926. We are an experienced machining company from Southern Germany in Central Europe and offer you professional laser steel cutting services. 
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/laser-steel-cutting-services />
', 'submenu' => '']);
            });
Route::get('/stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahl biegen lassen – Biegebetrieb aus Deutschland', 'meta_description' => 'Stahl biegen lassen ✓ 100 bis 500.000 Stück ☆ Konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Biegebetrieb aus Deutschland!', 'h1' => 'Stahl biegen lassen', 'seo1' => '<p>Irion gibt es bereits seit 1926. Wir sind ein erfahrener Biegebetrieb aus Deutschland, genauer gesagt aus dem Schwarzwald. Unser Sitz ist Bad Teinach, das liegt in der Nähe von Städten wie Stuttgart, Pforzheim und Tübingen.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/steel-bending-services />
', 'submenu' => '']);
            });
Route::get('/us/steel-processing-company/steel-machining/steel-bending-services', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel bending services – German steel company	', 'meta_description' => 'Steel bending services ✓ 100 to 500,000 pieces ☆ Consistently high quality ☆ Precise ➨ Top quality from Germany since 1926!', 'h1' => 'Steel bending services', 'seo1' => '<p>Irion has been around since 1926. We are an experienced machining company from Southern Germany in Central Europe and offer you professional steel bending services. 
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/steel-bending-services />
', 'submenu' => '']);
            });
Route::get('/stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahl fräsen lassen – Zerspanungsbetrieb aus Deutschland', 'meta_description' => 'Stahl fräsen lassen ✓ 100 bis 500.000 Stück ☆ Konstant hohe Qualität ☆ Verantwortungsvoll ☆ Präzise ➨ Zerspanungsbetrieb aus Deutschland!', 'h1' => 'Stahl fräsen lassen', 'seo1' => '<p>Irion gibt es bereits seit 1926. Wir sind ein erfahrener Zerspanungsbetrieb aus Deutschland, genauer gesagt aus dem Schwarzwald. Unser Sitz ist Bad Teinach, das liegt in der Nähe von Städten wie Stuttgart, Pforzheim und Tübingen.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/steel-milling />
', 'submenu' => '']);
            });
Route::get('/us/steel-processing-company/steel-machining/steel-milling', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel milling – Machining company from Germany!', 'meta_description' => 'Steel milling services ✓ 100 to 500,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Made in Germany since 1926', 'h1' => 'Steel milling services', 'seo1' => '<p>Irion has been around since 1926. We are an experienced machining company from Southern Germany in Central Europe and offer you professional steel milling services.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/steel-milling />
', 'submenu' => '']);
            });
Route::get('/stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahl kanten lassen – Kantbetrieb aus Deutschland', 'meta_description' => 'Stahl kanten lassen ✓ 100 bis 500.000 Stück ☆ Konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Kantbetrieb aus Deutschland!', 'h1' => 'Stahl kanten lassen', 'seo1' => '<p>Irion gibt es bereits seit 1926. Wir sind ein erfahrener Kantbetrieb aus Deutschland, genauer gesagt aus dem Schwarzwald. Unser Sitz ist Bad Teinach, das liegt in der Nähe von Städten wie Stuttgart, Pforzheim und Tübingen.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/press-brake-metal-forming />
', 'submenu' => '']);
            });
Route::get('/us/steel-processing-company/steel-machining/press-brake-metal-forming', function () {
                return view('templates.basic')->with(['meta_title' => 'Press brake metal forming – German machining company!', 'meta_description' => 'Press brake metal forming ✓ 100 to 500,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ From Germany since 1926', 'h1' => 'Press brake metal forming', 'seo1' => '<p>Irion has been around since 1926. We are an experienced machining company from Southern Germany in Central Europe and offer you professional press brake metal forming.
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/press-brake-metal-forming />
', 'submenu' => '']);
            });
Route::get('/schweissunternehmen', function () {
                return view('templates.unternehmen')->with(['meta_title' => 'Schweißunternehmen – Qualität von IRION seit 1926!', 'meta_description' => 'Das Schweißunternehmen seit 1926 ✓ Unsere Partner ☆ Referenzen ☆ Historie ☆ Zahlen, Daten, Fakten ➨ Jetzt informieren!', 'h1' => 'Das Schweißunternehmen IRION', 'seo1' => '', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweissunternehmen />
<link rel="alternate" hreflang="en-US" href=/us/welding-company />
', 'submenu' => '']);
            });
Route::get('/us/welding-company', function () {
                return view('templates.unternehmen')->with(['meta_title' => 'Welding company Irion  – Quality from Germany since 1926! ', 'meta_description' => 'The welding company since 1926 ✓ Our partners ☆ References ☆ History ☆ Figures, data, facts ➨ Get all information here!', 'h1' => 'Welding company Irion ', 'seo1' => '<p>For many years our welding company has been trusted…
<link rel="alternate" hreflang="en-US" href=/us/welding-company />
', 'submenu' => '']);
            });
Route::get('#', function () {
                return view('templates.basic')->with(['meta_title' => '', 'meta_description' => '', 'h1' => '', 'seo1' => '', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=# />
', 'submenu' => '<strong><a href="/schweissunternehmen/en-1090-zertifizierte-betriebe">DIN EN 1090-2:2018 EXC3 nach EN 1090-2</a></strong>
                                <ul></ul><strong><a href="/schweissunternehmen/konstante-schweissqualitaet">DIN EN ISO 3834-2:2021</a></strong>
                                <ul></ul><strong><a href="/schweissunternehmen/qualitaetssicherung-schweissen">ISO 9001:2015</a></strong>
                                <ul></ul>']);
            });
Route::get('/schweissunternehmen/en-1090-zertifizierte-betriebe', function () {
                return view('templates.basic')->with(['meta_title' => 'EN 1090 zertifizierte Betrieb – Klasse EXC3 Stahlbau', 'meta_description' => 'EN 1090 zertifizierte Betrieb ✓ Ausführungsklasse EXC3 nach EN 1090-2 ☆ IRION ist Ihr zertifizierter Partner ➨ Jetzt informieren!', 'h1' => 'EN 1090 zertifizierter Betrieb', 'seo1' => '<p>IRION ist ein nach EN 1090, Ausführungsklasse EXC3 zertifizierter Betrieb. 
', 'submenu' => '']);
            });
Route::get('/schweissunternehmen/konstante-schweissqualitaet', function () {
                return view('templates.basic')->with(['meta_title' => 'Konstante Schweißqualität – Nach DIN EN ISO 3834-2:2021', 'meta_description' => 'Konstante Schweißqualität ✓ Zertifiziert nach DIN EN ISO 3834-2:2021 ☆ IRION ist Ihr zertifizierter Partner ➨ Jetzt informieren!', 'h1' => 'Konstante Schweißqualität zertifiziert nach DIN EN ISO 3834-2:2021', 'seo1' => '<p>IRION steht für konstante Schweißqualität, zertifiziert durch DVS ZERT.
', 'submenu' => '']);
            });
Route::get('/schweissunternehmen/qualitaetssicherung-schweissen', function () {
                return view('templates.basic')->with(['meta_title' => 'Qualitätssicherung Schweißen – ISO 9001:2015 zertifiziert', 'meta_description' => 'IRION steht für Qualitätssicherung beim Schweißen ✓ TÜV-zertifiziert nach ISO 9001:2015 ➨ Qualität von IRION seit 1926!', 'h1' => 'Qualitätssicherung Schweißen – ISO 9001:2015 zertifiziert', 'seo1' => '<p>IRION steht für Qualitätssicherung beim Schweißen, zertifiziert durch den TÜV.
', 'submenu' => '']);
            });
Route::get('/management', function () {
                return view('templates.management')->with(['meta_title' => '', 'meta_description' => '', 'h1' => '', 'seo1' => '', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/management />
<link rel="alternate" hreflang="en-US" href=/us/management />
', 'submenu' => '']);
            });
Route::get('/us/management', function () {
                return view('templates.management')->with(['meta_title' => '', 'meta_description' => '', 'h1' => '', 'seo1' => '', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/management />
<link rel="alternate" hreflang="en-US" href=/us/management />
', 'submenu' => '']);
            });
Route::get('/karriere', function () {
                return view('templates.karriere')->with(['meta_title' => 'Ihre Karriere bei der Irion GmbH', 'meta_description' => 'Wir arbeiten mit Leidenschaft an der Sache. Leidenschaft ist unser Antrieb und die Wurzel für Innovationen. Wir lieben was wir tun und bilden deshalb unsere Mitarbeiter selbst aus. Im technischen Detail liegt oft der Schlüssel zum Erfolg – wir meistern es und setzen es um.', 'h1' => 'Karriere', 'seo1' => '', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/karriere />
', 'submenu' => '']);
            });
Route::get('/schweissberatung', function () {
                return view('templates.kontakt')->with(['meta_title' => 'Schweißberatung – Kostenloses Erstgespräch bei IRION', 'meta_description' => 'Schweißberatung von IRION ✓ 30 Minuten kostenlose Schweißberatung ☆ Qualität von IRION seit 1926 ➨ Nehmen Sie jetzt Kontakt auf!', 'h1' => '30 Minuten kostenlose Schweißberatung', 'seo1' => 'Sie haben Fragen zum Thema Schweißen oder anderen Fachgebieten? Wir bieten Ihnen eine kostenlose Schweißberatung an. Nehmen Sie gleich Kontakt auf!', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweissberatung />
<link rel="alternate" hreflang="en-US" href=/us/welding-consulting />
', 'submenu' => '']);
            });
Route::get('/us/welding-consulting', function () {
                return view('templates.kontakt')->with(['meta_title' => 'Welding consulting – Free initial consultation at Irion ', 'meta_description' => 'Welding consulting from Irion  ✓ 30 minutes free welding advice ☆ Quality from Irion  since 1926 ➨ Get in touch now!', 'h1' => '30 minutes free welding consulting 	', 'seo1' => 'Do you have questions about welding or other specialties? We offer you free welding consulting. Contact us right away!', 'seo2' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweissberatung />
<link rel="alternate" hreflang="en-US" href=/us/welding-consulting />
', 'submenu' => '']);
            });

    Route::get('/en/imprint', function () {
        return view('imprint');
    });
    Route::get('/en/privacy', function () {
        return view('privacy');
    });
    Route::get('/en/terms', function () {
        return view('terms');
    });
    Route::get('/us/imprint', function () {
        return view('imprint');
    });
    Route::get('/us/privacy', function () {
        return view('privacy');
    });
    Route::get('/us/terms', function () {
        return view('terms');
    });
    Route::post('/en/send', [ContactController::class, 'send']);
    Route::post('/us/send', [ContactController::class, 'send']);

    Route::post('/send', [ContactController::class, 'send']);

    Route::fallback(function (Request $request) {
        return response()->view('/404')->setStatusCode(404);
    });

    