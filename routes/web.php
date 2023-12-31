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
                return view('templates.home')->with(['meta_title' => 'Schweißbaugruppen Hersteller – Irion Qualität seit 1926', 'meta_description' => 'Schweißbaugruppen Hersteller ✓ 30 bis 5.000 Stück ☆ Konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Irion Qualität seit 1926!', 'h1' => 'Schweiß&shy;bau&shy;gruppen Hersteller Irion', 'seo1' => 'Irion besteht seit 1929 und ist der Schweißbaugruppen Hersteller aus dem Schwarzwald. Unser zertifizierter Schweißfachbetrieb ist auf hochwertige Schweißbaugruppen von 30 bis 5.000 Stück spezialisiert. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/ />
<link rel="alternate" hreflang="en-US" href=/us />
<link rel="alternate" hreflang="x-default" href=/en />
<link rel="alternate" hreflang="en" href=/en />
', 'submenu' => '', 'img_src' => 'schweissbaugruppen-hersteller.webp', 'img_title' => 'Schweißbaugruppen Hersteller Irion', 'img_alt' => 'Schweißbaugruppen Hersteller Irion']);
            });
Route::get('/en', function () {
                return view('templates.home')->with(['meta_title' => 'Industrial welding company – Irion quality since 1926', 'meta_description' => 'Industrial welding company ✓ 30 to 5.000 parts ☆ Consistently high quality ☆ Responsible-minded ☆ Precision ➨ Irion quality since 1926!', 'h1' => 'Industrial welding company Irion', 'seo1' => 'Irion was founded in 1929 and is the industrial welding company from the Black Forest in Germany. Our certified welding company is specialised on welded assemblies from 30 to 5.000 parts. We put consistently high quality first, along with responsible-minded people and precision.', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/ />
<link rel="alternate" hreflang="en-US" href=/us />
<link rel="alternate" hreflang="x-default" href=/en />
<link rel="alternate" hreflang="en" href=/en />
', 'submenu' => '', 'img_src' => 'industrial-welding-company.jpg', 'img_title' => 'Industrial welding company Irion', 'img_alt' => 'Industrial welding company Irion']);
            });
Route::get('/us', function () {
                return view('templates.home')->with(['meta_title' => 'Welding fabrication shop – Irion  quality since 1926', 'meta_description' => 'Welding fabrication shop ✓ 30 to 5,000 parts ☆ Consistently high quality ☆ Responsible-minded ☆ Precision ➨ Irion quality since 1926!', 'h1' => 'Welding fabrication shop Irion ', 'seo1' => 'Irion was founded in 1929 and is the welding fabrication shop from the Black Forest in Germany. Our certified welding company is specialised on welded assemblies and industrial metal fabrication from 30 to 5,000 parts. We put consistently high quality first, along with responsible-minded people and precision.', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/ />
<link rel="alternate" hreflang="en-US" href=/us />
<link rel="alternate" hreflang="x-default" href=/en />
<link rel="alternate" hreflang="en" href=/en />
', 'submenu' => '', 'img_src' => 'welding-fabrication-shop.webp', 'img_title' => 'Welding fabrication shop', 'img_alt' => 'Welding fabrication shop']);
            });
Route::get('/praezisionsfertigung', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Präzisionsfertigung – Präzisionsbearbeitung von Metall', 'meta_description' => 'Präzisionsfertigung von Hochleistungsprodukten seit 1926! ✓ Von der Entwicklung bis zur Montage ➨ Alle unsere Kompetenzen kennenlernen', 'h1' => 'Präzisions&shy;fertigung', 'seo1' => 'IRION steht für Präzisionsfertigung in der Metallverarbeitung. Von der Entwicklung bis zur Montage nutzen wir zahlreiche Kompetenzen, um Ihr Hochleistungsprodukt herzustellen. Informieren Sie sich hier über die verschiedenen Prozesse in unserem Wertschöpfungsnetzwerk.', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing />
', 'submenu' => '<strong><a class="mt-1" href="/praezisionsfertigung/mechanische-konstruktion">Mechanische Konstruktion </a></strong>
                                <ul></ul><strong><a class="mt-1" href="/praezisionsfertigung/roboterschweissen">Roboterschweißen </a></strong>
                                <ul></ul><strong><a class="mt-1" href="/praezisionsfertigung/praezisionsschneiden">Präzisionsschneiden </a></strong>
                                <ul></ul><strong><a class="mt-1" href="/praezisionsfertigung/praezisionszerspanung">Präzisionszerspanung </a></strong>
                                <ul></ul><strong><a class="mt-1" href="/praezisionsfertigung/praezisionsschweissen">Präzisionsschweißen </a></strong>
                                <ul></ul><strong><a class="mt-1" href="/praezisionsfertigung/industrielle-teilereinigung-dienstleistung">Industrielle Teilereinigung </a></strong>
                                <ul></ul><strong><a class="mt-1" href="/praezisionsfertigung/industrielle-waermebehandlung">Industrielle Wärmebehandlung </a></strong>
                                <ul></ul><strong><a class="mt-1" href="/praezisionsfertigung/oberflaechenbeschichtung-stahl">Oberflächenbeschichtung </a></strong>
                                <ul></ul><strong><a class="mt-1" href="/praezisionsfertigung/pvc-tauchbeschichtung">PVC Tauchbeschichtung </a></strong>
                                <ul></ul><strong><a class="mt-1" href="/praezisionsfertigung/baugruppenmontage-maschinenbau">Baugruppenmontage </a></strong>
                                <ul></ul>', 'img_src' => 'praezisionsfertigung.webp', 'img_title' => 'Präzisionsfertigung', 'img_alt' => 'Präzisionsfertigung']);
            });
Route::get('/en/precision-manufacturing', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Precision manufacturing – Metal processing since 1926!', 'meta_description' => 'Precision manufacturing ✓ High-performance products made in Germany since 1926 ☆ From development to assembly ➨ All our competencies', 'h1' => 'Precision manufacturing', 'seo1' => 'IRION stands for precision manufacturing in metal processing. From development to assembly, we use numerous competences to manufacture your high-performance product. Find out more about the various processes in our value network here.', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing />
', 'submenu' => '<strong><a class="mt-1" href="/en/precision-manufacturing/cad-engineering">CAD engineering</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/en/precision-manufacturing/automated-welding">Automated welding</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/en/precision-manufacturing/metal-cutting-industry">Metal cutting industry</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/en/precision-manufacturing/precision-machining-services ">Precision machining services</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/en/precision-manufacturing/precision-welding-services ">Precision welding services</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/en/precision-manufacturing/industrial-parts-cleaning-service">Industrial parts cleaning service</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/en/precision-manufacturing/steel-hardening-service">Steel hardening service</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/en/precision-manufacturing/metal-surface-treatment">Metal surface treatment</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/en/precision-manufacturing/plastic-dip-coating-for-metal">Plastic dip coating for metal</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/en/precision-manufacturing/module-assembly">Module assembly</a></strong>
                                <ul></ul>', 'img_src' => 'precision-manufacturing.webp', 'img_title' => 'Precision manufacturing', 'img_alt' => 'Precision manufacturing']);
            });
Route::get('/us/precision-manufacturer', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Precision manufacturer – Metal machining since 1926!', 'meta_description' => 'Precision manufacturer ✓ High-performance products made in Germany since 1926 ☆ From development to assembly ➨ All our competencies', 'h1' => 'Precision manufacturer ', 'seo1' => 'Irion is a precision manufacturer in metal processing. From development to assembly, we use numerous competencies to manufacture your high-performance product. Find out here about the various processes in our value network.', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing />
', 'submenu' => '<strong><a class="mt-1" href="/us/precision-manufacturer/mechanical-construction">Mechanical construction</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/us/precision-manufacturer/robot-welding ">Robot welding </a></strong>
                                <ul></ul><strong><a class="mt-1" href="/us/precision-manufacturer/precision-cutting-metal">Precision cutting metal</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/us/precision-manufacturer/high-precision-machining">High precision machining</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/us/precision-manufacturer/precision-welding">Precision welding</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/us/precision-manufacturer/industrial-parts-cleaning-service">Industrial parts cleaning service</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/us/precision-manufacturer/industrial-heat-treatment">Industrial heat treatment</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/us/precision-manufacturer/surface-treatment-steel">Surface treatment steel</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/us/precision-manufacturer/pvc-dip-coating">PVC dip coating</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/us/precision-manufacturer/assembly-of-components">Assembly of components</a></strong>
                                <ul></ul>', 'img_src' => 'precision-manufacturer.webp', 'img_title' => 'Precision manufacturer', 'img_alt' => 'Precision manufacturer']);
            });
Route::get('/praezisionsfertigung/mechanische-konstruktion', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Mechanische Konstruktion – CAD Konstruktion bei Irion', 'meta_description' => 'Mechanische Konstruktion bei Irion seit 1926 ✓ 3D Konstruktion ☆ 2D Ableitung von Werkstattzeichnungen ➨ Zur CAD Konstruktion', 'h1' => 'Mechanische Konstruktion', 'seo1' => '<p>Für die mechanische Konstruktion verwenden wir bei IRION seit Jahren CAD Werkzeuge, um unsere Schweißbaugruppen, Schweißkonstruktionen, Schweißkonsolen und Zeichnungsteile gemeinsam mit unseren Kunden und Partnern zu entwickeln.</p> <p>Wir sind der Überzeugung, dass Kosten in der Serie zu einem sehr großen Teil in der Konstruktion entstehen. Deshalb legen wir bei der mechanischen Konstruktion großes Augenmerk in die Entwicklung unserer Schweißbaugruppen, Schweißteile, Schweißkonstruktionen, Schweißkonsolen und Zeichnungsteile, die wir im Übrigen gerne mit Ihnen feinjustieren bzw. produktionstechnisch optimieren. </p> <p>Wir setzen für die 3D Konstruktion Autodesk Inventor und Autodesk AutoCAD ein und sind gleichzeitig in der Lage, in weitere Systeme wie Siemens NX, Catia, Solid Edge, Solid Works, Creo Elements oder Microstation zu konvertieren. Des Weiteren bedienen wir uns auch der offenen Formate, wie zum Beispiel Step Dateien, dxf oder dwg.</p> <p>Die Absicherung unserer geschweißten Teile, Schweißbaugruppen, Schweißkonstruktionen und Schweißkonsolen erfolgt in FEM Programmen. Im ersten Schritt über den integrierten Nastran Postprozessor. Bei weiteren Untersuchungen greifen wir auf Ansys und Abaqus zurück.</p> <p>In der CAD Konstruktion arbeitet 5 Mitarbeiter, die durch externe Ressourcen mit jahrzehntelanger Erfahrung im Entwicklungs- und Konstruktionsbereich aufwarten können. Gerade mit Schwerpunkt geschweißte Bauteile, Schweißkonsolen, Schweißkonstruktionen wie Maschinenteile, Fassadenhalter, Betriebsmittel, etc für unsere Partner aus der Erdbewegung, Agrarindustrie, Fassadenbau, Automobilindustrie, Bauindustrie, Maschinenbau, Lackiertechnik, Kunst und Kultur sowie viele mehr!</p> <p>Irion beherrscht neben Frästeilen, Schweißteilen und gefrästen Schweißteilen sowie Schweißkonsolen, Schweißbaugruppen und Schweißkonstruktionen auch die vor allem mechanische, aber auch elektrische Installation und Inbetriebnahme im Haus sowie beim Kunden vor Ort. Abgerundet werden unsere Serviceleistungen durch mechanische Konstruktion, Konstruktionsoptimierung, FEM Berechnung, statische Berechnung, und FMEA Risikountersuchung sowie die CE-Kennzeichnung nach erfolgter CE-Dokumentation. Selbstverständlich sind wir bei IRION nach IPMA Projektmanagement zertifiziert.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/mechanische-konstruktion />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/mechanical-construction />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/cad-engineering />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/cad-engineering />
', 'submenu' => '', 'img_src' => 'mechanische-konstruktion.webp', 'img_title' => 'Mechanische Konstruktion', 'img_alt' => 'Mechanische Konstruktion']);
            });
Route::get('/en/precision-manufacturing/cad-engineering', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'CAD engineering – CAD construction at Irion ', 'meta_description' => 'CAD engineering ✓ 3D construction ☆ 2D derivation of shop drawings ☆ Mechanical construction at Irion since 1926 ➨ To CAD design', 'h1' => 'CAD engineering', 'seo1' => '<p>For CAD engineering, we at Irion have been using CAD tools for years to develop our welded assemblies, welded structures, welded brackets and drawing parts together with our customers and partners.
</p><p>
</p><p>We are convinced that costs in series production arise to a very large extent in the construction. That is why we pay great attention to the CAD engineering of our welded assemblies, welded parts, welded constructions, welded brackets and drawing parts in the mechanical design, which we are also happy to fine-tune with you or optimize in terms of production technology. 
</p><p>
</p><p>We use Autodesk Inventor and Autodesk AutoCAD for 3D construction and at the same time we are able to convert to other systems such as Siemens NX, Catia, Solid Edge, Solid Works, Creo Elements or Microstation. Furthermore, we also make use of open formats, such as step files, dxf or dwg.
</p><p>
</p><p>The safeguarding of our welded parts, welded assemblies, welded constructions and welded consoles is done in FEM programs. In the first step via the integrated Nastran postprocessor. For further investigations we use Ansys and Abaqus.
</p><p>
</p><p>In the CAD construction works 5 employees, who can offer decades of experience in the development and construction area by external resources. Especially with focus on welded components, welded brackets, welded constructions such as machine parts, facade brackets, operating equipment, etc for our partners in earthmoving, agricultural industry, facade construction, automotive industry, construction industry, mechanical engineering, painting technology, art and culture and many more!
</p><p>
</p><p>Irion masters not only milled parts, welded parts and milled welded parts as well as welded brackets, welded assemblies and welded constructions but also the mainly mechanical but also electrical installation and commissioning in-house as well as at the customer\'s site. Our services are rounded off by CAD engineering, design optimization, FEM calculation, static calculation, and FMEA risk analysis as well as CE marking after CE documentation has been completed.
</p><p>Of course, we at Irion are certified according to IPMA project management.
</p><p></p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/mechanische-konstruktion />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/mechanical-construction />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/cad-engineering />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/cad-engineering />
', 'submenu' => '', 'img_src' => 'cad-engineering.webp', 'img_title' => 'CAD engineering', 'img_alt' => 'CAD engineering']);
            });
Route::get('/us/precision-manufacturer/mechanical-construction', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Mechanical construction – CAD construction at Irion ', 'meta_description' => 'Mechanical construction at Irion  since 1926 ✓ 3D construction ☆ 2D derivation of shop drawings ➨ To CAD design', 'h1' => 'Mechanical construction', 'seo1' => '<p>For mechanical construction, we at Irion  have been using CAD tools for years to develop our welded assemblies, welded structures, welded brackets and drawing parts together with our customers and partners.
</p><p>
</p><p>We are convinced that costs in series production arise to a very large extent in the construction. That is why we pay great attention to the mechanical construction of our welded assemblies, welded parts, welded constructions, welded brackets and drawing parts in the mechanical design, which we are also happy to fine-tune with you or optimize in terms of production technology. 
</p><p>
</p><p>We use Autodesk Inventor and Autodesk AutoCAD for 3D construction and at the same time we are able to convert to other systems such as Siemens NX, Catia, Solid Edge, Solid Works, Creo Elements or Microstation. Furthermore, we also make use of open formats, such as step files, dxf or dwg.
</p><p>
</p><p>The safeguarding of our welded parts, welded assemblies, welded constructions and welded consoles is done in FEM programs. In the first step via the integrated Nastran postprocessor. For further investigations we use Ansys and Abaqus.
</p><p>
</p><p>In the CAD construction works 5 employees, who can offer decades of experience in the development and construction area by external resources. Especially with focus on welded components, welded brackets, welded constructions such as machine parts, facade brackets, operating equipment, etc for our partners in earthmoving, agricultural industry, facade construction, automotive industry, construction industry, mechanical engineering, painting technology, art and culture and many more!
</p><p>
</p><p>Irion masters not only milled parts, welded parts and milled welded parts as well as welded brackets, welded assemblies and welded constructions but also the mainly mechanical but also electrical installation and commissioning in-house as well as at the customer\'s site. Our services are rounded off by mechanical construction, design optimization, FEM calculation, static calculation, and FMEA risk analysis as well as CE marking after CE documentation has been completed.
</p><p>Of course, we at Irion  are certified according to IPMA project management.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/mechanische-konstruktion />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/mechanical-construction />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/cad-engineering />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/cad-engineering />
', 'submenu' => '', 'img_src' => 'mechanical-construction.webp', 'img_title' => 'Mechanical construction', 'img_alt' => 'Mechanical construction']);
            });
Route::get('/praezisionsfertigung/roboterschweissen', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Roboterschweißen – Automatisiertes Schweißen bei Irion', 'meta_description' => 'Roboterschweißen bei Irion ✓ High-Tech-Robotern mit bis zu 9 interpolierenden Achsen ☆ Made in Germany ➨ Irion Qualität seit 1926 ', 'h1' => 'Roboter&shy;schweißen', 'seo1' => '<p>Bei IRION schweißen wir stückzahlenintensive Schweißbaugruppen durch automatisiertes Schweißen.
</p><p>Roboterschweißen erfolgt bei uns durch die Verwendung von High-Tech-Robotern mit bis zu 9 interpolierenden Achsen.
</p><p>
</p><p>Verwendung finden beim Roboterschweißen:
</p><p><ul><li>	6 Achs Schweißroboter</li><li>	7 Achs Schweißroboter</li><li>	8 Achs Schweißroboter</li><li>		9 Achs Schweißroboter
</li></ul></p><p>
</p><p>Made in Germany und gleichzeitig konkurrenzfähig. Dies wird möglich durch die computergesteuerte offline Robotersimulation unseres geschulten und hochmotivierten Personals. </p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/roboterschweissen />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/robot-welding  />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/automated-welding />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/automated-welding />
', 'submenu' => '', 'img_src' => 'roboterschweissen.webp', 'img_title' => 'Roboterschweißen', 'img_alt' => 'Roboterschweißen']);
            });
Route::get('/en/precision-manufacturing/automated-welding', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Automated welding – Robot welding services from Germany ', 'meta_description' => 'Automated welding at Irion ✓ High-tech robots with up to 9 interpolating axes ☆ Robot welding in Germany ➨ Irion quality since 1926', 'h1' => 'Automated welding', 'seo1' => '<p>At Irion, we weld high volume welded assemblies through automated welding.
</p><p>
</p><p>Robot welding is done by us by using high-tech robots with up to 9 interpolating axes.
</p><p>
</p><p>Used for automated welding are:
</p><p><ul><li> 6 axis welding robots</li><li> 7 axis welding robots</li><li> 8 axis welding robots</li><li>  9 axes welding robot
</li></ul></p><p>
</p><p>Made in Germany and competitive at the same time. This is made possible by the computerized offline robot simulation of our trained and highly motivated staff. </p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/roboterschweissen />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/robot-welding  />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/automated-welding />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/automated-welding />
', 'submenu' => '', 'img_src' => 'automated-welding.webp', 'img_title' => 'Automated welding', 'img_alt' => 'Automated welding']);
            });
Route::get('/us/precision-manufacturer/robot-welding ', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Robot welding – automated welding services from Germany ', 'meta_description' => 'Robot welding at Irion  ✓ High-tech robots with up to 9 interpolating axes ☆ Automated welding in Germany ➨ Irion  quality since 1926', 'h1' => 'Robot welding ', 'seo1' => '<p>At Irion, we weld high volume welded assemblies through automated welding.
</p><p>
</p><p>Robot welding is done by us by using high-tech robots with up to 9 interpolating axes.
</p><p>
</p><p>Used for robot welding are:
</p><p><ul><li> 6 axis welding robots</li><li> 7 axis welding robots</li><li> 8 axis welding robots</li><li>  9 axes welding robot
</li></ul></p><p>
</p><p>Made in Germany and competitive at the same time. This is made possible by the computerized offline robot simulation of our trained and highly motivated staff. </p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/roboterschweissen />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/robot-welding  />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/automated-welding />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/automated-welding />
', 'submenu' => '', 'img_src' => 'robot-welding.webp', 'img_title' => 'Robot welding ', 'img_alt' => 'Robot welding ']);
            });
Route::get('/praezisionsfertigung/praezisionsschneiden', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Präzisionsschneiden in der Metallverarbeitung seit 1926 ', 'meta_description' => 'Präzisionsschneiden für Ihr Hochleistungsprodukt ✓ Verschiedene Materialien ☆ Zahlreiche Techniken ➨ Jetzt Informieren!', 'h1' => 'Präzisions&shy;schneiden in der Metall&shy;verarbeitung', 'seo1' => '<p>Die Basis unserer Produkte ist das Präzisionsschneiden von Metallteilen aus Stahl und Edelstahl, sowie CADCAM gefräste Stahl- und Edelstahlteile. Ebenso gesägte Profile aus Stahl und Edelstahl. Wir erstellen Laserteile, Biegeteile, Laserbiegeteile, Kantteile oder Laserkantteile. </p> <p>Je nach Dicke und Wärmeeinbringung verarbeiten wir wie folgt: <ul> <li>Konventioneller Zuschnitt / Sägen / gesägte Profile bis 250mm</li> <li>Laserschneiden bis 25mm</li> <li>Biegeteile bis 25mm</li> <li>Laserbiegeteile bis 25mm</li> <li>Laserkantteile bis 25mm</li> <li>Kantteile bis 25mm</li> </ul> </p> <p>Die Basisdimensionen der Teile, hergestellt aus Laserschneiden, Biegen, Kanten, Laserkantteile und Laserbiegeteile sind Rohlinge aus 6m x 4m mit einer Dicke von bis zu 150 mm. Die übliche Dicke beträgt 40mm.</p> <p>Durch unsere Schweißkompetenz, gewährleistet durch unsere hausinternen Schweißfachingenieure, als auch Schweißfachpersonen, bearbeiten wir mit unserem jährlich zertifizierten Fachpersonal nach ISO 3834, ISO 1090 ECX-2 & EXC-3 (Execution Class 2 und Execution Class 3) auch Feinkornbaustahl S460, S690, S960 und viele mehr.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/praezisionsschneiden />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/precision-cutting-metal />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/metal-cutting-industry />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/metal-cutting-industry />
', 'submenu' => '', 'img_src' => 'praezisionsschneiden.webp', 'img_title' => 'Präzisionsschneiden', 'img_alt' => 'Präzisionsschneiden']);
            });
Route::get('/en/precision-manufacturing/metal-cutting-industry', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Metal cutting industry – At Irion in Germany since 1926', 'meta_description' => 'Metal cutting industry ✓ High-performance products from Germany ✓ Various materials ☆ Numerous techniques ➨ All information here!', 'h1' => 'Metal cutting industry', 'seo1' => '<p>We have been at home in the metal cutting industry since 1926. The basis of our products is precision cutting metal of steel and stainless steel parts, as well as CADCAM milled steel and stainless steel parts. Also sawed profiles made of steel and stainless steel. We create laser parts, bent parts, laser bent parts, edged parts or laser edged parts.
</p><p>
</p><p>Depending on the thickness and heat input, we process as follows:<ul><li> Conventional cutting / sawing / sawn profiles up to 250 mm</li><li> Laser cutting up to 25 mm</li><li> bent parts up to 25 mm</li><li> Laser bent parts up to 25 mm</li><li> Laser edged parts up to 25 mm </li><li>  edged parts up to 25 mm
</li></ul></p><p>
</p><p>The basic dimensions of the parts made from laser cutting, bending, edging, laser edging parts and laser bending parts are blanks of 6 m x 4 m with thickness up to 150 mm. The usual thickness is 40 mm.
</p><p>
</p><p>Due to our welding competence, guaranteed by our in-house welding engineers, as well as welding specialists, we also process fine-grained structural steel S460, S690, S960 and many more with our annually certified specialists according to ISO 3834, ISO 1090 ECX-2 & EXC-3 (Execution Class 2 and Execution Class 3).
</p><p></p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/praezisionsschneiden />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/precision-cutting-metal />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/metal-cutting-industry />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/metal-cutting-industry />
', 'submenu' => '', 'img_src' => 'metal-cutting-industry.webp', 'img_title' => 'Metal cutting industry', 'img_alt' => 'Metal cutting industry']);
            });
Route::get('/us/precision-manufacturer/precision-cutting-metal', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Precision cutting metal – At Irion  in Germany since 1926', 'meta_description' => 'Precision cutting metal for your high-performance product ✓ Various materials ☆ Numerous techniques ➨ All information here!', 'h1' => 'Precision cutting metal', 'seo1' => '<p>The basis of our products is precision cutting metal of steel and stainless steel parts, as well as CADCAM milled steel and stainless steel parts. Also sawed profiles made of steel and stainless steel. We create laser parts, bent parts, laser bent parts, edged parts or laser edged parts.
</p><p>
</p><p>Depending on the thickness and heat input, we process as follows:<ul><li>	Conventional cutting / sawing / sawn profiles up to 9.4 inch</li><li>	Laser cutting up to 0.98 inch</li><li>	bent parts up to 0.98 inch</li><li>	Laser bent parts up to 0.98 inch</li><li>	Laser edged parts up to 0.98 inch</li><li>		edged parts up to 0.98 inch
</li></ul></p><p>
</p><p>The basic dimensions of the parts made from laser cutting, bending, edging, laser edging parts and laser bending parts are blanks of 236 inch x 157 inch with thickness up to 5.9 inch. The usual thickness is 1.57 inch.
</p><p>
</p><p>Due to our welding competence, guaranteed by our in-house welding engineers, as well as welding specialists, we also process fine-grained structural steel S460, S690, S960 and many more with our annually certified specialists according to ISO 3834, ISO 1090 ECX-2 & EXC-3 (Execution Class 2 and Execution Class 3).</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/praezisionsschneiden />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/precision-cutting-metal />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/metal-cutting-industry />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/metal-cutting-industry />
', 'submenu' => '', 'img_src' => 'precision-cutting-metal.webp', 'img_title' => 'Precision cutting metal', 'img_alt' => 'Precision cutting metal']);
            });
Route::get('/praezisionsfertigung/praezisionszerspanung', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Präzisionszerspanung – Fräsen von Stahl & Edelstahl', 'meta_description' => 'Präzisionszerspanung ✓ Computergesteuertes Fräsen ☆ Stahl ☆ Edelstahl ☆ Verschiedene Dimensionen ➨ Irion Qualität seit 1926!', 'h1' => 'Präzisions&shy;zerspanung', 'seo1' => '<p>Eine Herzensangelegenheit unseres langjährigen Schweißfachbetriebs ist die Präzisionszerspanung durch computergesteuertes Fräsen von Teilen aus Stahl und Edelstahl. </p> <p>Großteils offline programmiert durch CAM, laufen unsere 3-Achs, 4-Achs und 5 Achs CNC Maschinen bzw. Bearbeitungszentren und fertigen Teile mit Dimensionen bis zu 2m x 1m x 1m mit Hilfe unserer Postprozessoren, die in der Lage sind, auch unsere Low Cost Maschinen zu bespielen.</p> <p>Weitere Dimensionen ermöglicht unsere verlängerte Werkbank, basierend auf langjährigen Partnern aus der Umgebung. Erweiterte Dimensionen sind 30m x 6m x 4m auf Portalfräszentren, ebenfalls ausgelegt für Stahl und Edelstahl.</p> <p>Zeichnungsteile mit keinerlei Konstruktionsaufwand stellen wir in langjähriger Kooperation in Best Cost Countries mit direktem Zugriff auf die Produktionskapazitäten her, um Ihnen attraktivste Preise zu garantieren. Unser Qualitätsmanagement garantiert eine fehlerfreie Auslieferung.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/praezisionszerspanung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/high-precision-machining />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/precision-machining-services  />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/precision-machining-services  />
', 'submenu' => '', 'img_src' => 'praezisionszerspanung.webp', 'img_title' => 'Präzisionszerspanung', 'img_alt' => 'Präzisionszerspanung']);
            });
Route::get('/en/precision-manufacturing/precision-machining-services ', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Precision machining services – Steel milling since 1926!', 'meta_description' => 'Precision machining services ✓ Computer-controlled milling ☆ Steel ☆ Stainless steel ☆ Various dimensions ➨ Irion quality since 1926', 'h1' => 'Precision machining services ', 'seo1' => '<p>One of our precision machining services is computer-controlled milling of parts made of steel and stainless steel. 
</p><p>Largely programmed offline by CAM, our 3-axis, 4-axis and 5-axis CNC machines or machining centers run and produce parts with dimensions up to 2 m x 1 m x 1 m with the help of our post-processors, which are also capable of running our low cost machines.
</p><p>Further dimensions are made possible by our extended workbench, based on long-term partners from the surrounding area. Extended dimensions are 30 m x 6 m x 4 mon portal milling centers, also designed for steel and stainless steel.
</p><p>Drawing parts with no construction effort we produce in long term cooperation in best cost countries with direct access to production capacities to guarantee you most attractive prices. Our quality management guarantees a faultless delivery.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/praezisionszerspanung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/high-precision-machining />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/precision-machining-services  />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/precision-machining-services  />
', 'submenu' => '', 'img_src' => 'precision-machining-services.webp', 'img_title' => 'Precision machining services ', 'img_alt' => 'Precision machining services ']);
            });
Route::get('/us/precision-manufacturer/high-precision-machining', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'High precision machining – Steel milling since 1926!', 'meta_description' => 'High precision machining ✓ Computer-controlled milling ☆ Steel ☆ Stainless steel ☆ Various dimensions ➨ Irion quality since 1926', 'h1' => 'High precision machining', 'seo1' => '<p>A matter of the heart of our long-standing welding store is high precision machining by computer-controlled milling of parts made of steel and stainless steel. 
</p><p>
</p><p>Largely programmed offline by CAM, our 3-axis, 4-axis and 5-axis CNC machines or machining centers run and produce parts with dimensions up to 78 inch x 39 inch x 39 inch with the help of our post-processors, which are also capable of running our low cost machines.
</p><p>
</p><p>Further dimensions are made possible by our extended workbench, based on long-term partners from the surrounding area. Extended dimensions are 98 feet x 19.6 feet x 13.1 on portal milling centers, also designed for steel and stainless steel.
</p><p>
</p><p>Drawing parts with no construction effort we produce in long term cooperation in best cost countries with direct access to production capacities to guarantee you most attractive prices. Our quality management guarantees a faultless delivery.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/praezisionszerspanung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/high-precision-machining />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/precision-machining-services  />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/precision-machining-services  />
', 'submenu' => '', 'img_src' => 'high-precision-machining.webp', 'img_title' => 'High precision machining', 'img_alt' => 'High precision machining']);
            });
Route::get('/praezisionsfertigung/praezisionsschweissen', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Präzisionsschweißen von Stahl & Edelstahl', 'meta_description' => 'Präzisionsschweißen ist unsere Passion & Kernkompetenz ✓ High-End-Schweißequipment ➨ Lichtbogenschweißen seit mehr als 2 Dekaden  ', 'h1' => 'Präzisions&shy;schweißen', 'seo1' => '<p>Da kommen wir her und da gehören wir hin, SCHWEISSEN ist unsere Religion! Unsere Kernkompetenz neben der CNC Bearbeitung von Stahl und Edelstahl ist das Präzisionsschweißen selbiger Materialien. Seit mehr als 2 Dekaden beherrschen wir das Lichtbogenschweißen von Stahl und Edelstahl mit unserem High-End-Schweißequipment von Cloos made in Germany!</p> <p>Präzisionsschweißen bedeutet für uns nicht nur Teile zusammenzufügen. Wir nehmen uns das Thema zu Herzen und gehen dabei täglich an unsere Grenzen. Ein Schwerpunkt unseres Schaffens liegt im Bereich zwischen additiver Fertigung (3D Druck) und Stahlguss. Als ihr Partner für Schweißbaugruppen, Schweißteile, Schweißkonstruktionen und Schweißkonsolen fertigen wir wiederholgenau und repetitiv kritische Projektserien ab 30 bis mehrere tausend Stück für Sie.</p> <p>Über 20 hochmotivierte und zertifizierte Schweißer sind verantwortlich für Ihre anspruchsvollen Schweißteile, Konsolen, Schweißkonstruktionen, unbeweglich (starr) sowie beweglich (Kulissen, Raster, etc.). Bei IRION schweißen wir manuell und stückzahlenintensive Schweißbaugruppen robotisch mit High-tech-Robotern mit bis zu 9 interpolierenden Achsen. Dimensionen unserer Schweißbaugruppen, Schweißteile, Schweißkonstruktionen und Schweißkonsolen sind bis zu 8m x 4m x 2,5m groß. Wir beginnen bei Dimensionen ab 20mm x 20mm x 1 mm.</p> <p>Made in Germany und gleichzeitig konkurrenzfähig zu sein. Dies wird möglich durch computergesteuerte offline Robotersimulation unseres geschulten und hochmotivierten Personals. Stolz sind wir dabei auf unsere AZUBI Quote von nahezu 15%. Nur so schaffen wir es, dem Fachkräftemangel entgegenzusteuern. Ausbildungsberufe, die wir in unserem Hause anbieten, sind Industriemechaniker, Zerspanungsmechaniker und Fachkraft für Metallberufe, zu dem auch der Lehrberuf des Schweißers gehört.</p> <p>Wir schweißen Stahl und  Edelstahl. Nehmen Sie gerne mit uns Kontakt auf! Wir gehen auf Ihre Anforderungen ein und unterstützen Sie bei Ihrem Vorhaben. Schweißkompetenz im Hause IRION: <ul> <li>MAG Schweißen von Stahl / Edelstahl </li> <li>MIG Schweißen von Stahl / Edelstahl </li> <li>Roboter Schweißen mit 6 Achs Schweißrobotern / 7 Achs Schweißrobotern / 8 Achs Schweißrobotern / 9 Achs Schweißrobotern</li> <li>WIG Schweißen von Stahl / Edelstahl </li> </ul> </p> <p>Unser Spektrum liegt zwischen Einzelteilen und langjährigen Serien. Kritische Massen sind sogenannte Projektserien, die einmalig abgerufen werden und wiederholgenau in Stückzahlen ab 30 Stück bis zu 3.000 Stück und mehr in präzisen Dimensionen mit Abweichungen von 0,5mm auf Längen von bis zu 5m gefertigt werden. Geschweißte Skids (Förderschlitten), geschweißte Maschinenrahmen, geschweißte Betriebsmittel, geschweißte Konsolen für Ihre Maschinen, Baumaschinen, Agrarmaschinen, Erdbewegungsmaschinen, Hebemittel wie Krane sowie Lackierhilfsmittel wie Traversen, Warenträger, Bauteilträger und vieles mehr in der Welt des Schweißens und gefrästen Schweißens.</p> <p>Ein Garant für Ihre intelligente Schweißbaugruppe ist unsere auf jahrelanger Erfahrung basierte Kompetenz der Antizipation der Wärmeveränderung von geschweißten Bauteilen. Wir richten kalt bzw. mechanisch und warm bzw. thermisch. Bevorzugt setzen wir auf unseren bewährten Vorrichtungsbau, der in der Lage ist, Ihre Teile nach dem Schweißen ohne weitere Bearbeitung in die korrekte Position zu bekommen. Dabei schaffen wir es, eine kostenintensive Nachbearbeitung mittels CNC zu vermeiden.</p> <p>Komplettiert wird unsere Schweißkompetenz durch erfahrene Qualitätsmanager, die sich der gängigen Schweißprüfverfahren bedienen. Wir beherrschen Validierungsprozesse der Eindringprüfung, optische Prüfung (visuelles Schweißprüfverfahren), in externer Ausführung auch das Röntgenschweißprüfverfahren und das Ultraschallschweißprüfverfahren, um unseren und vor allem Ihren maximalen Qualitätsansprüchen gerecht zu werden.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/praezisionsschweissen />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/precision-welding />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/precision-welding-services  />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/precision-welding-services  />
', 'submenu' => '', 'img_src' => 'praezisionsschweissen.webp', 'img_title' => 'Präzisionsschweißen', 'img_alt' => 'Präzisionsschweißen']);
            });
Route::get('/en/precision-manufacturing/precision-welding-services ', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Precision welding services for steel & stainless steel', 'meta_description' => 'Precision welding services are our passion & core competence ✓ High-end welding equipment ➨ Arc welding for more than 2 decades! ', 'h1' => 'Precision welding services ', 'seo1' => '<p>That\'s where we come from and that\'s where we belong, WELDING is our religion! Precision welding services are our core competence alongside CNC machining of steel and stainless steel. For more than 2 decades we have mastered the arc welding of steel and stainless steel with our high-end welding equipment from Cloos made in Germany!
</p><p>Precision welding means more to us than just joining parts together. We take it to heart and push it to our limits every day. One focus of our work is in the area between additive manufacturing (3D printing) and steel casting. As your partner for welded assemblies, welded parts, welded structures and welded brackets, we manufacture repeatable and repetitive critical project series from 30 to several thousand pieces for you.
</p><p>More than 20 highly motivated and certified welders are responsible for your demanding welded parts, brackets, welded structures, immovable (rigid) as well as movable (baffles, louvers, etc.). At Irion, we weld manually and piece-intensive welded assemblies robotically using high-tech robots with up to 9 interpolating axes.
</p><p>Dimensions of our welded assemblies, weldments, welded structures and welded brackets are up to 8 m x 4 m x 2,5 m. We start with dimensions from 20 mm x 20 mm x 1 mm.
</p><p>
</p><p>Made in Germany and being competitive at the same time. This is made possible by computer controlled offline robot simulation of our trained and highly motivated staff. We are proud of our trainee quota of almost 15%. This is the only way we manage to counteract the shortage of skilled workers. Apprenticed professions that we offer in our company are industrial mechanic, metal cutting mechanic and specialist for metal professions, which also includes the apprenticed profession of welder.
</p><p>We weld steel and stainless steel. Please feel free to contact us! We will respond to your requirements and support you in your project. Welding competence at Irion:<ul><li> MAG welding of steel / stainless steel</li><li> MIG welding of steel / stainless steel</li><li> Robot welding with 6 axis welding robots / 7 axis welding robots / 8 axis welding robots / 9 axis welding robots</li><li>  TIG welding of steel / stainless steel
</li></ul></p><p>
</p><p>Our spectrum lies between single parts and long-time series. Critical masses are so-called project series, which are called off once and are manufactured repeatedly in quantities from 30 pieces up to 3.000 pieces and more in precise dimensions with deviations of 0,5 mm on lengths of up to 5 m. Welded skids (conveyor slides), welded machine frames, welded operating equipment, welded consoles for your machines, construction machinery, agricultural machinery, earthmoving machinery, lifting equipment such as cranes as well as painting aids such as cross beams, goods carriers, component carriers and much more in the world of welding and milled welding.
</p><p>A guarantor for your intelligent welding assembly is our expertise, based on years of experience, of anticipating the heat changes of welded components. We straighten cold or mechanically and hot or thermally. Preferably, we rely on our proven fixture construction, which is able to get your parts in the correct position after welding without further processing. In doing so, we manage to avoid cost-intensive post-processing by means of CNC.
</p><p>Our welding expertise is completed by experienced quality managers who use standard welding inspection procedures. We master validation processes of penetrant testing, optical testing (visual welding inspection process), in external execution also the X-ray welding inspection process and the ultrasonic welding inspection process to meet our and especially your maximum quality requirements.
</p><p></p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/praezisionsschweissen />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/precision-welding />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/precision-welding-services  />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/precision-welding-services  />
', 'submenu' => '', 'img_src' => 'precision-welding-services.webp', 'img_title' => 'Precision welding services ', 'img_alt' => 'Precision welding services ']);
            });
Route::get('/us/precision-manufacturer/precision-welding', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Precision welding of steel & stainless steel', 'meta_description' => 'Precision welding is our passion & core competence ✓ High-end welding equipment ☆ Arc welding for more than 2 decades ➨ Inform now! ', 'h1' => 'Precision welding', 'seo1' => '<p>That\'s where we come from and that\'s where we belong, WELDING is our religion! Our core competence besides the CNC processing of steel and stainless steel is the precision welding of the same materials. For more than 2 decades we have mastered the arc welding of steel and stainless steel with our high-end welding equipment from Cloos made in Germany!
</p><p>
</p><p>Precision welding means more to us than just joining parts together. We take it to heart and push it to our limits every day. One focus of our work is in the area between additive manufacturing (3D printing) and steel casting. As your partner for welded assemblies, welded parts, welded structures and welded brackets, we manufacture repeatable and repetitive critical project series from 30 to several thousand pieces for you.
</p><p>
</p><p>More than 20 highly motivated and certified welders are responsible for your demanding welded parts, brackets, welded structures, immovable (rigid) as well as movable (baffles, louvers, etc.). At Irion, we weld manually and piece-intensive welded assemblies robotically using high-tech robots with up to 9 interpolating axes.
</p><p>Dimensions of our welded assemblies, weldments, welded structures and welded brackets are up to 26.2 feet x 13.1 feet x 8.2 feet. We start with dimensions from 0.78 inch x 0.78 inch x 0.04 inch.
</p><p>
</p><p>Made in Germany and being competitive at the same time. This is made possible by computer controlled offline robot simulation of our trained and highly motivated staff. We are proud of our trainee quota of almost 15%. This is the only way we manage to counteract the shortage of skilled workers. Apprenticed professions that we offer in our company are industrial mechanic, metal cutting mechanic and specialist for metal professions, which also includes the apprenticed profession of welder.
</p><p>
</p><p>We weld steel and stainless steel. Please feel free to contact us! We will respond to your requirements and support you in your project. Welding competence at Irion:
</p><p><ul><li>	MAG welding of steel / stainless steel </li><li>	MIG welding of steel / stainless steel </li><li>	Robot welding with 6 axis welding robots / 7 axis welding robots / 8 axis welding robots / 9 axis welding robots</li><li>		TIG welding of steel / stainless steel 
</li></ul></p><p>
</p><p>Our spectrum lies between single parts and long-time series. Critical masses are so-called project series, which are called off once and are manufactured repeatedly in quantities from 30 pieces up to 3,000 pieces and more in precise dimensions with deviations of 0.02 inch on lengths of up to 16.4 feet. Welded skids (conveyor slides), welded machine frames, welded operating equipment, welded consoles for your machines, construction machinery, agricultural machinery, earthmoving machinery, lifting equipment such as cranes as well as painting aids such as cross beams, goods carriers, component carriers and much more in the world of welding and milled welding.
</p><p>
</p><p>A guarantor for your intelligent welding assembly is our expertise, based on years of experience, of anticipating the heat changes of welded components. We straighten cold or mechanically and hot or thermally. Preferably, we rely on our proven fixture construction, which is able to get your parts in the correct position after welding without further processing. In doing so, we manage to avoid cost-intensive post-processing by means of CNC.
</p><p>
</p><p>Our welding expertise is completed by experienced quality managers who use standard welding inspection procedures. We master validation processes of penetrant testing, optical testing (visual welding inspection process), in external execution also the X-ray welding inspection process and the ultrasonic welding inspection process to meet our and especially your maximum quality requirements.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/praezisionsschweissen />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/precision-welding />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/precision-welding-services  />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/precision-welding-services  />
', 'submenu' => '', 'img_src' => 'precision-welding.webp', 'img_title' => 'Precision welding', 'img_alt' => 'Precision welding']);
            });
Route::get('/praezisionsfertigung/industrielle-teilereinigung-dienstleistung', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Industrielle Teilereinigung Dienstleistung – seit 1926', 'meta_description' => 'Industrielle Teilereinigung Dienstleistung ✓ Reinigungsprozesse die Qualität gewährleisten ☆ Diverse Techniken ➨ Jetzt informieren ', 'h1' => 'Teile&shy;reinigung als industrielle Dienst&shy;leistung', 'seo1' => '<p>Unsere Dienstleistung der industriellen Teilereinigung gewährleistet die Qualität für unsere Schweißteile, Schweißkonsolen, Schweißbaugruppen und gefrästen Schweißteile, wie Betriebsmittel etc. vor dem eigentlichen Bearbeitungsprozess des Schweißens bzw. vor der Oberflächenbehandlung wie Lackierung, Brünieren, Härten, Galvanisieren, Feuerverzinken, etc.</p> <p>Oberflächenreinigung, Kantenbruch, Entfettung, Befreiung von Zunder, zur Schweißnahtvorbereitung, Lackiervorbereitung, Entgraten, Instandsetzung und Entlackung. Wir bedienen uns der Techniken des Sandstrahlen, Gleitschleifen und Trowalisieren, um die entsprechende industrielle Teilereinigung im gewünschten Maße zu erzielen.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/industrielle-teilereinigung-dienstleistung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/industrial-parts-cleaning-service />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/industrial-parts-cleaning-service />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/industrial-parts-cleaning-service />
', 'submenu' => '', 'img_src' => 'industrielle-teilereinigung-dienstleistung.webp', 'img_title' => 'Industrielle Teilereinigung Dienstleistung', 'img_alt' => 'Industrielle Teilereinigung Dienstleistung']);
            });
Route::get('/en/precision-manufacturing/industrial-parts-cleaning-service', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Industrial parts cleaning service – In Germany since 1926', 'meta_description' => 'Industrial parts cleaning service ✓ Cleaning processes that guarantee quality ☆ Various techniques ➨ Find out more here!', 'h1' => 'Industrial parts cleaning service', 'seo1' => '<p>Our industrial parts cleaning service ensures the quality for our welded parts, welding brackets, welded assemblies and milled welded parts, such as operating equipment, etc., before the actual machining process of welding or surface treatment such as painting, burnishing, hardening, galvanizing, hot-dip galvanizing, etc.
</p><p>
</p><p>Surface cleaning, edge breaking, degreasing, freeing from scale, for weld preparation, paint preparation, deburring, repair and paint stripping. We use the techniques of sandblasting, vibratory grinding and barrel finishing to achieve the appropriate industrial parts cleaning to the desired degree.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/industrielle-teilereinigung-dienstleistung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/industrial-parts-cleaning-service />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/industrial-parts-cleaning-service />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/industrial-parts-cleaning-service />
', 'submenu' => '', 'img_src' => 'industrial-parts-cleaning-service.webp', 'img_title' => 'Industrial parts cleaning service', 'img_alt' => 'Industrial parts cleaning service']);
            });
Route::get('/us/precision-manufacturer/industrial-parts-cleaning-service', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Industrial parts cleaning service – In Germany since 1926', 'meta_description' => 'Industrial parts cleaning service ✓ Cleaning processes that guarantee quality ☆ Various techniques ➨ Find out more here!', 'h1' => 'Industrial parts cleaning service', 'seo1' => '<p>Our industrial parts cleaning service ensures the quality for our welded parts, welding brackets, welded assemblies and milled welded parts, such as operating equipment, etc., before the actual machining process of welding or surface treatment such as painting, burnishing, hardening, galvanizing, hot-dip galvanizing, etc.
</p><p>
</p><p>Surface cleaning, edge breaking, degreasing, freeing from scale, for weld preparation, paint preparation, deburring, repair and paint stripping. We use the techniques of sandblasting, vibratory grinding and barrel finishing to achieve the appropriate industrial parts cleaning to the desired degree.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/industrielle-teilereinigung-dienstleistung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/industrial-parts-cleaning-service />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/industrial-parts-cleaning-service />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/industrial-parts-cleaning-service />
', 'submenu' => '', 'img_src' => 'industrial-parts-cleaning-service.webp', 'img_title' => 'Industrial parts cleaning service', 'img_alt' => 'Industrial parts cleaning service']);
            });
Route::get('/praezisionsfertigung/industrielle-waermebehandlung', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Industrielle Wärmebehandlung – Produkthärte erhöhen ', 'meta_description' => 'Industrielle Wärmebehandlung ✓ Hohe Härte- bzw. Entspannungsgrade von geschweißten und gefrästen Produkten ➨ Jetzt informieren!', 'h1' => 'Industrielle Wärme&shy;behandlung', 'seo1' => '<p>Werkstückberührende Teile unserer geschweißten und gefrästen Produkte erhalten eine industrielle Wärmebehandlung, um erhöhte Härte- bzw. Entspannungsgrade zu erreichen. Je nach Verwendung unserer Schweißbauteile, Schweißbaugruppen, Schweißkonstruktionen und Schweißkonsolen kommen diverse Wärmebehandlungen zum Einsatz.</p> <p>Je nach Härtegrad und Härtetiefe sind wir langjährig erfahren mit den Prozessen des: <ul> <li>Carbonitrieren</li> <li>Nitrocarburieren</li> <li>Plasmanitrieren</li> <li>Einsatzhärten</li> <li>Gasnitrieren</li> <li>Weichglühen </li> </ul></p> <p>samt dem Prozsesswissen, welches Verfahren wann zur Anwendung kommt. <ul> <li>Haltezeiten</li> <li>Härtegrade</li> <li>Entspannungsgrade</li> </ul> </p> <p>um für Sie das optimale Ergebnis aus Kosten, Termin und Qualität zu erzielen. Benötigen Sie alternative Wärmebehandlungsverfahren für Ihre Schweißbaugruppen, Schweißteile, Schweißkonstruktionen und Schweißkonsolen und geschweißten Zeichnungsteile? Kontaktieren Sie uns gerne - wir finden die ideale Lösung für Ihr Produkt.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/industrielle-waermebehandlung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/industrial-heat-treatment />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/steel-hardening-service />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/steel-hardening-service />
', 'submenu' => '', 'img_src' => 'industrielle-waermebehandlung.webp', 'img_title' => 'Industrielle Wärmebehandlung', 'img_alt' => 'Industrielle Wärmebehandlung']);
            });
Route::get('/en/precision-manufacturing/steel-hardening-service', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Steel hardening service - Steel heat treatment at Irion ', 'meta_description' => 'Steel hardening service ✓ High degrees of hardness or stress relief of welded and milled products ➨ Get more information here!', 'h1' => 'Steel hardening service', 'seo1' => '<p>Through the Irion steel hardening service, workpiece-contacting parts of welded and milled products receive industrial heat treatment to achieve increased degrees of hardness or stress relief. Depending on the use of our welded components, welded assemblies, welded structures and welded brackets, various heat treatments are applied.
</p><p>
</p><p>We have many years of experience with the processes of:
</p><p><ul><li> Carbonitriding</li><li> Nitrocarburizing</li><li> Plasma nitriding</li><li> Case hardening</li><li> Gas nitriding</li><li> Soft annealing
</p><p>
</p><p>Including the process knowledge, which process is used when it comes to:
</p><p></li><li> Holding times</li><li> Degrees of hardening</li><li>  Degrees of stress relief
</li></ul></p><p>
</p><p>In order to achieve the optimum result for you in terms of cost, deadline and quality.
</p><p>
</p><p>Do you need alternative heat treatment processes for your welded assemblies, welded parts, welded constructions and welded brackets and welded drawing parts? Feel free to contact us - we will find the ideal solution for your product.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/industrielle-waermebehandlung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/industrial-heat-treatment />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/steel-hardening-service />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/steel-hardening-service />
', 'submenu' => '', 'img_src' => 'steel-hardening-service.webp', 'img_title' => 'Steel hardening service', 'img_alt' => 'Steel hardening service']);
            });
Route::get('/us/precision-manufacturer/industrial-heat-treatment', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Industrial heat treatment - Increase product hardness', 'meta_description' => 'Industrial heat treatment ✓ High degrees of hardness or stress relief of welded and milled products ➨ Get more information here!', 'h1' => 'Industrial heat treatment', 'seo1' => '<p>Workpiece-contacting parts of our welded and milled products receive industrial heat treatment to achieve increased degrees of hardness or stress relief. Depending on the use of our welded components, welded assemblies, welded structures and welded brackets, various heat treatments are applied.
</p><p>
</p><p>We have many years of experience with the processes of:
</p><p><ul><li>	Carbonitriding</li><li>	Nitrocarburizing</li><li>	Plasma nitriding</li><li>	Case hardening</li><li>	Gas nitriding</li><li>	Soft annealing
</p><p></ul>
</p><p>Including the process knowledge, which process is used when it comes to:
</p><p><ul></li><li>	Holding times</li><li>	Degrees of hardening</li><li>		Degrees of stress relief
</li></ul></p><p>
</p><p>In order to achieve the optimum result for you in terms of cost, deadline and quality.
</p><p>
</p><p>Do you need alternative heat treatment processes for your welded assemblies, welded parts, welded constructions and welded brackets and welded drawing parts? Feel free to contact us - we will find the ideal solution for your product.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/industrielle-waermebehandlung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/industrial-heat-treatment />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/steel-hardening-service />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/steel-hardening-service />
', 'submenu' => '', 'img_src' => 'industrial-heat-treatment.webp', 'img_title' => 'Industrial heat treatment', 'img_alt' => 'Industrial heat treatment']);
            });
Route::get('/praezisionsfertigung/oberflaechenbeschichtung-stahl', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Oberflächenbeschichtung Stahl – Veredelung und Schutz', 'meta_description' => 'Oberflächenbeschichtung von Stahl ✓ Von Korrosionsschutz bis zur Mehrschichtlackierung ☆ Zahlreiche Verfahren ➨ Jetzt Informieren! ', 'h1' => 'Oberflächen&shy;beschichtung von Stahl', 'seo1' => '<p>Die Oberflächenbeschichtung von Stahl ist in vielen Fällen das Gesicht unserer Schweißbaugruppen, Schweißkonsolen, Schweißteile und Schweißkonstruktionen. Die Veredelung unserer geschweißten Produkte reicht von Korrosionsschutz über Grundierungen bis hin zu Mehrschichtlackierung mit 2K Lack.</p> <p>Langjährige Partnerschaften mit unseren Lacklieferanten und Equipment-Lieferanten sowie interne Erfahrung mit dem Thema Oberflächenbeschichtung ermöglichen es uns, optimale Prozesse mit exakten Schichtdicken und geringem Materialaufwand bei optimaler Oberflächenbeschaffenheit zu erzielen.</p> <p>Weitere Oberflächenbeschichtungen, die wir für unsere Schweißprodukte anbieten, sind die Pulverbeschichtung, Gummierung, Brünieren, Galvanisieren, das Feuerverzinken, Eloxieren sowie die KTL-Beschichtung, Schutzwachs und Öl.</p> <p>Wir bieten Ihnen die komplette Palette an RAL Tönen sowie spezielle Farbmischungen aus CMYK Werten und RGB Werten. Gerne ermöglichen wir auch Ihre Sonderwünsche.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/oberflaechenbeschichtung-stahl />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/surface-treatment-steel />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/metal-surface-treatment />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/metal-surface-treatment />
', 'submenu' => '', 'img_src' => 'oberflaechenbeschichtung-stahl.webp', 'img_title' => 'Oberflächenbeschichtung Stahl', 'img_alt' => 'Oberflächenbeschichtung Stahl']);
            });
Route::get('/en/precision-manufacturing/metal-surface-treatment', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Metal surface treatment – Finishing and protection ', 'meta_description' => 'Surface treatment of metal ✓ From corrosion protection to multi-layer coating ☆ Numerous processes ➨ Get more information here! ', 'h1' => 'Metal surface treatment', 'seo1' => '<p>Surface treatment of metal is in many cases the face of our welded assemblies, welded brackets, welded parts and welded structures.
</p><p>The finishing of our welded products ranges from corrosion protection to primers and multi-layer coating with 2K paint.
</p><p>
</p><p>Long-standing partnerships with our paint suppliers and equipment suppliers, as well as internal experience with surface treatment of metal, enable us to achieve optimal processes with exact coating thicknesses and low material costs with optimal surface finishes.
</p><p>
</p><p>Other surface treatments we offer for our welding products are powder coating, rubber coating, burnishing, galvanizing, hot-dip galvanizing, anodizing as well as KTL coating, protective wax and oil.
</p><p>
</p><p>We offer the complete range of RAL colours as well as special colour mixtures from CMYK values and RGB values. We are also happy to accommodate your special requests.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/oberflaechenbeschichtung-stahl />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/surface-treatment-steel />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/metal-surface-treatment />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/metal-surface-treatment />
', 'submenu' => '', 'img_src' => 'metal-surface-treatment.webp', 'img_title' => 'Metal surface treatment', 'img_alt' => 'Metal surface treatment']);
            });
Route::get('/us/precision-manufacturer/surface-treatment-steel', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Surface treatment steel – Finishing and protection ', 'meta_description' => 'Surface treatment of steel ✓ From corrosion protection to multi-layer coating ☆ Numerous processes ➨ Get more information here! ', 'h1' => 'Surface treatment of steel', 'seo1' => '<p>Surface treatment of steel is in many cases the face of our welded assemblies, welded brackets, welded parts and welded structures.
</p><p>The finishing of our welded products ranges from corrosion protection to primers and multi-layer coating with 2K paint.
</p><p>
</p><p>Long-standing partnerships with our paint suppliers and equipment suppliers, as well as internal experience with surface treatment of steel, enable us to achieve optimal processes with exact coating thicknesses and low material costs with optimal surface finishes.
</p><p>
</p><p>Other surface treatments we offer for our welding products are powder coating, rubber coating, burnishing, galvanizing, hot-dip galvanizing, anodizing as well as KTL coating, protective wax and oil.
</p><p>
</p><p>We offer the complete range of RAL colors as well as special color mixtures from CMYK values and RGB values. We are also happy to accommodate your special requests.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/oberflaechenbeschichtung-stahl />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/surface-treatment-steel />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/metal-surface-treatment />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/metal-surface-treatment />
', 'submenu' => '', 'img_src' => 'surface-treatment-steel.webp', 'img_title' => 'Surface treatment steel', 'img_alt' => 'Surface treatment steel']);
            });
Route::get('/praezisionsfertigung/pvc-tauchbeschichtung', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'PVC Tauchbeschichtung – Kunststoffbeschichtung Metall', 'meta_description' => 'PVC Tauchbeschichtung ✓ Kunststoffbeschichtung für Metallteile ☆ Individuelle maßgeschneiderte Lösungen ➨ Jetzt Informieren! ', 'h1' => 'PVC Tauch&shy;beschichtung', 'seo1' => '<p>Eine hochwertige PVC Tauchbeschichtung erhalten Sie bei IRION für verschiede Metallteile. Zum Beispiel können Sie Werkzeuggriffe gummieren lassen.
</p><p>
</p><p>Nicht nur bei der bei der Kunststoffbeschichtung von Metall gehen wir auf Ihre persönlichen Anforderungen ein. Sprechen Sie uns gerne an, zusammen finden wir eine maßgeschneiderte Lösung für Ihre individuelle PVC Beschichtung.
</p><p>
</p><p>Auch bei der PVC Tauchbeschichtung erfüllen wir die speziellen Anforderungen der Industrie mit konstant hoher Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/pvc-tauchbeschichtung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/pvc-dip-coating />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/plastic-dip-coating-for-metal />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/plastic-dip-coating-for-metal />
', 'submenu' => '', 'img_src' => 'pvc-tauchbeschichtung.webp', 'img_title' => 'PVC Tauchbeschichtung', 'img_alt' => 'PVC Tauchbeschichtung']);
            });
Route::get('/en/precision-manufacturing/plastic-dip-coating-for-metal', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Plastic dip coating for metal – PVC coating at Irion', 'meta_description' => 'Plastic dip coating for metal ✓ PVC coating in Germany ☆ Individual customised solutions ➨ Get more information here!', 'h1' => 'Plastic dip coating for metal', 'seo1' => '<p>Irion offers high-quality plastic dip coating for various metal parts. For example, you can have tool handles rubberized.
</p><p>
</p><p>Not only for the plastic coating of metal we respond to your personal requirements. Please contact us, together we will find a tailor-made solution for your individual PVC coating.
</p><p>
</p><p>Also in the case of plastic dip coating, we meet the special requirements of the industry with consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/pvc-tauchbeschichtung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/pvc-dip-coating />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/plastic-dip-coating-for-metal />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/plastic-dip-coating-for-metal />
', 'submenu' => '', 'img_src' => 'plastic-dip-coating-for-metal.webp', 'img_title' => 'Plastic dip coating for metal', 'img_alt' => 'Plastic dip coating for metal']);
            });
Route::get('/us/precision-manufacturer/pvc-dip-coating', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'PVC dip coating – Plastic coating metal', 'meta_description' => 'PVC dip coating ✓ Plastic coating for metal parts ☆ Individual customized solutions ➨ Get more information here!', 'h1' => 'PVC dip coating', 'seo1' => '<p>Irion offers high-quality PVC dip coating for various metal parts. For example, you can have tool handles rubberized.
</p><p>
</p><p>Not only for the plastic coating of metal we respond to your personal requirements. Please contact us, together we will find a tailor-made solution for your individual PVC coating.
</p><p>
</p><p>Also in the case of PVC dip coating, we meet the special requirements of the industry with consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/pvc-tauchbeschichtung />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/pvc-dip-coating />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/plastic-dip-coating-for-metal />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/plastic-dip-coating-for-metal />
', 'submenu' => '', 'img_src' => 'pvc-dip-coating.webp', 'img_title' => 'PVC dip coating', 'img_alt' => 'PVC dip coating']);
            });
Route::get('/praezisionsfertigung/baugruppenmontage-maschinenbau', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Baugruppenmontage Maschinenbau – Präzision seit 1926!', 'meta_description' => 'Baugruppenmontage im Maschinenbau ✓ Wiederholgenau von 30 bis 3.000 und mehr Stück ☆ Große Produktvielfalt ➨ Jetzt informieren!', 'h1' => 'Baugruppen&shy;montage im Maschinenbau', 'seo1' => '<p>Bei der Baugruppenmontage im Maschinenbau ermöglicht unser exzellenter Vorrichtungsbau es, durch unsere intern ausgebildeten Zerspanungsmechaniker, Industriemechaniker und Metallfacharbeiter, die geschweißten Bauteile, geschweißten Konsolen, geschweißten Konstruktionen und geschweißten Baugruppen wiederholgenau in Stückzahlen ab 30 bis hin zu 3.000 und mehr Stück für Sie zu fertigen. </p> <p>Nach der Oberflächenbeschichtung sind wir bei der Baugruppenmontage im Maschinenbau in der Lage, unter Zuhilfenahme moderner Prozess- und Qualitätswerkzeuge und Überwachungssystemen sowie unseren eigenverantwortlichen Teams mechanische, elektrische und elektronische Montage und Installationen vorzunehmen, um aus unseren geschweißten und gefrästen sowie lackierten Teilen ein Gesamtprodukt entstehen zu lassen. </p> <p>Unter Zuhilfenahme von modernsten Digitalwerkzeugen ermöglichen wir Änderungen und Optimierungen im Zuge von Simultaneous Engineering. In Echtzeit übermitteln wir diese auf die digitalen Anzeigensysteme unseres Fachpersonals. </p> <p>So verlassen uns täglich Produkte wie: <ul> <li>Hochvoltspeicher Warenträger inkl. Spezialbeschichtung für Batterie berührende Teile</li> <li>EBB Fahrzeuge (elektrische Bodenbahnfahrzeuge)</li> <li>AGV/FTS Chassis</li> <li>EHB Gehänge</li> <li>Lastaufnahmemittel</li> <li>Schwerlastgehänge</li> <li>Fahrzeugaufnahmen</li> <li>Werkstückpaletten</li> <li>Skids / Transportschlitten/ Lackierschlitten / Montageschlitten / Skid Adapter</li> <li>Lackiertraversen / Crossbars</li> <li>Montagetraversen</li> <li>Achspaletten / Achsskids</li> <li>Montagewerkstückträger</li> <li>Cockpitvormontagevorrichtungen</li> <li>Cockpittrolleys</li> <li>EHB Weichen</li> <li>Wagenzüge</li> <li>Lackfixturen</li> <li>Türenmontageaufnahmen (L-Bügel, C-Rahmen)</li> <li>Lackiertraversen</li> <li>Lackiertrolleys</li> <li>Pendelgehänge</li> <li>Scherenrahmen inkl. Scheren für Schwerlastgehänge</li> <li>Unterbodenschutz Drehgehänge</li> <li>Schubplattformen / Skillets</li> <li>Karosserieaufnahmen</li> <li>Teleskoparme für Fahrzeugaufnahmen</li> <li>Betriebsmittelersatzteile</li> <li>KTL Verriegelungen</li> <li>Fahrwägen, C-Bügel / Dehnstöße / zerspante Vahle Schienen</li> <li>FTS Tablare / FTS Adapter</li> </ul> </p> <p>Neben der internen Montage und Inbetriebnahme, vorrangig unserer Schweißbaugruppen und Schweißkonstruktionen, warten wir die Fördertechnikanlagen unserer Kunden im Zuge der vorbeugenden Instandhaltung. Auch in diesem Bereich sorgen unsere fest angestellten Industriemechaniker, Zerspanungsmechaniker und Metallfacharbeiter für die Umsetzung höchster Ansprüche. </p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/baugruppenmontage-maschinenbau />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/assembly-of-components />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/module-assembly />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/module-assembly />
', 'submenu' => '', 'img_src' => 'baugruppenmontage-maschinenbau.webp', 'img_title' => 'Baugruppenmontage Maschinenbau', 'img_alt' => 'Baugruppenmontage Maschinenbau']);
            });
Route::get('/en/precision-manufacturing/module-assembly', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Module assembly in mechanical engineering since 1926!', 'meta_description' => 'Module assembly in mechanical engineering at Irion ✓ Repeatability from 30 to 3.000 and more pieces ☆ Large product variety ➨ Inform now!', 'h1' => 'Module assembly in mechanical engineering', 'seo1' => '<p>In the case of module assembly in mechanical engineering, our excellent fixture construction enables our internally trained cutting machine operators, industrial mechanics and skilled metal workers to manufacture the welded components, welded brackets, welded constructions and welded subassemblies for you with repeat accuracy in quantities from 30 to 3.000 and more pieces.
</p><p>
</p><p>After the surface coating, we are able to carry out mechanical, electrical and electronic assembly and installations in the module assembly, with the help of modern process and quality tools and monitoring systems, as well as our own responsible teams, in order to create a complete product from our welded and milled as well as painted parts.
</p><p>
</p><p>With the help of the latest digital tools, we enable changes and optimizations to be made in the course of simultaneous engineering. We transmit them in real time to the digital display systems of our specialized personnel.
</p><p>
</p><p>In this way, products such as:
</p><p><ul><li> High-voltage storage systems Goods carriers incl. special coating for parts in contact with the battery</li><li> EBB vehicles (electric ground track vehicles)</li><li> AGV/FTS chassis</li><li> EHB hangers</li><li> Load suspension devices</li><li> Heavy duty hangers</li><li> Vehicle mounts</li><li> Workpiece pallets</li><li> Skids / transport skids / painting skids / assembly skids / skid adapters</li><li> Painting traverses / Crossbars</li><li> Assembly traverses</li><li> Axle pallets / Axle skids</li><li> Assembly workpiece carriers</li><li> Cockpit pre-assembly fixtures</li><li> Cockpit trolleys</li><li> EHB turnouts</li><li> Carriage trains</li><li> Paint fixtures</li><li> Door mounting fixtures (L-frame, C-frame)</li><li> Painting traverses</li><li> Painting trolleys</li><li> Pendulum hangers</li><li> Scissor frames incl. scissors for heavy duty hangers</li><li> Underbody protection swivel hangers</li><li> Pushing platforms / Skillets</li><li> Car body mounts</li><li> Telescopic arms for vehicle mounts</li><li> Spare parts for operating equipment</li><li> KTL locks</li><li> Carriages, C-frame / expansion joints / machined Vahle rails</li><li>  FTS trays / FTS adapters
</li></ul></p><p>
</p><p>In addition to internal assembly and commissioning, primarily of our welded assemblies and welded constructions, we maintain our customers\' conveyor systems in the course of preventive maintenance. In this area, too, our permanently employed industrial mechanics, cutting machine operators and skilled metal workers ensure that the highest standards are met.
</p><p></p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/baugruppenmontage-maschinenbau />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/assembly-of-components />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/module-assembly />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/module-assembly />
', 'submenu' => '', 'img_src' => 'module-assembly.webp', 'img_title' => 'Module assembly', 'img_alt' => 'Module assembly']);
            });
Route::get('/us/precision-manufacturer/assembly-of-components', function () {
                return view('templates.praezisionsfertigung')->with(['meta_title' => 'Assembly of components in mechanical engineering since 1926', 'meta_description' => 'Assembly of components in mechanical engineering ✓ Repeatability from 30 to 3,000 and more pieces ☆ Large product variety ➨ Inform now', 'h1' => 'Assembly of components in mechanical engineering', 'seo1' => '<p>In the case of assembly of components in mechanical engineering, our excellent fixture construction enables our internally trained cutting machine operators, industrial mechanics and skilled metal workers to manufacture the welded components, welded brackets, welded constructions and welded subassemblies for you with repeat accuracy in quantities from 30 to 3,000 and more pieces.
</p><p>
</p><p>After the surface coating, we are able to carry out mechanical, electrical and electronic assembly and installations in the assembly of components, with the help of modern process and quality tools and monitoring systems, as well as our own responsible teams, in order to create a complete product from our welded and milled as well as painted parts.
</p><p>
</p><p>With the help of the latest digital tools, we enable changes and optimizations to be made in the course of simultaneous engineering. We transmit them in real time to the digital display systems of our specialized personnel.
</p><p>
</p><p>In this way, products such as:
</p><p><ul><li>	High-voltage storage systems Goods carriers incl. special coating for parts in contact with the battery</li><li>	EBB vehicles (electric ground track vehicles)</li><li>	AGV/FTS chassis</li><li>	EHB hangers</li><li>	Load suspension devices</li><li>	Heavy duty hangers</li><li>	Vehicle mounts</li><li>	Workpiece pallets</li><li>	Skids / transport skids / painting skids / assembly skids / skid adapters</li><li>	Painting traverses / Crossbars</li><li>	Assembly traverses</li><li>	Axle pallets / Axle skids</li><li>	Assembly workpiece carriers</li><li>	Cockpit pre-assembly fixtures</li><li>	Cockpit trolleys</li><li>	EHB turnouts</li><li>	Carriage trains</li><li>	Paint fixtures</li><li>	Door mounting fixtures (L-frame, C-frame)</li><li>	Painting traverses</li><li>	Painting trolleys</li><li>	Pendulum hangers</li><li>	Scissor frames incl. scissors for heavy duty hangers</li><li>	Underbody protection swivel hangers</li><li>	Pushing platforms / Skillets</li><li>	Car body mounts</li><li>	Telescopic arms for vehicle mounts</li><li>	Spare parts for operating equipment</li><li>	KTL locks</li><li>	Carriages, C-frame / expansion joints / machined Vahle rails</li><li>		FTS trays / FTS adapters
</li></ul></p><p>
</p><p>In addition to internal assembly and commissioning, primarily of our welded assemblies and welded constructions, we maintain our customers\' conveyor systems in the course of preventive maintenance. In this area, too, our permanently employed industrial mechanics, cutting machine operators and skilled metal workers ensure that the highest standards are met.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/praezisionsfertigung/baugruppenmontage-maschinenbau />
<link rel="alternate" hreflang="en-US" href=/us/precision-manufacturer/assembly-of-components />
<link rel="alternate" hreflang="x-default" href=/en/precision-manufacturing/module-assembly />
<link rel="alternate" hreflang="en" href=/en/precision-manufacturing/module-assembly />
', 'submenu' => '', 'img_src' => 'assembly-of-components.webp', 'img_title' => 'Assembly of components', 'img_alt' => 'Assembly of components']);
            });
Route::get('/schweisskonstruktionen', function () {
                return view('templates.basic')->with(['meta_title' => 'Schweißkonstruktionen – Schweißteile Fertigung seit 1926', 'meta_description' => 'Schweißkonstruktionen ✓ Skids ☆ Lastaufnahmemittel ☆ Maschinenbau ☆ Transportsysteme ☆ Ersatzteile ➨ Schweißteile Fertigung seit 1926!', 'h1' => 'Schweiß&shy;konstruktionen', 'seo1' => 'Irion steht seit 1926 für Schweißkonstruktionen in konstant hoher Qualität wie Skids, Lastaufnahmemittel, Maschinenbau- und Stahlbaukonstruktionen sowie Transportsysteme für die Produktion und Industrie Ersatzteile. Unsere Schweißteile Fertigung ist dabei spezialisiert auf das Projektgeschäft von 30 bis 5.000 Stück.', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction  />
<link rel="alternate" hreflang="en" href=/en/welded-construction  />
', 'submenu' => '<strong><a class="mt-1" href="/schweisskonstruktionen/skid-anlagenbau">Skid Anlagenbau</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie">Skid Automobilindustrie</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie">Fördertechnik Automobilindustrie</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger">Sonderladungsträger</a></li></ul><strong><a class="mt-1" href="/schweisskonstruktionen/lastaufnahmemittel-hersteller">Lastaufnahmemittel</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl">Schwerlastpaletten</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall">Industriebehälter</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall">Transportbehälter</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen">Schwerlasttraversen</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke">Schwerlastböcke</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller">Rungengestelle</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller">Stapelgestelle</a></li></ul><strong><a class="mt-1" href="/schweisskonstruktionen/maschinenbau">Maschinenbau</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller">Scherenhubtische</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/maschinenbau/schweissgestelle">Schweißgestelle</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller">Fahrzeugaufbauten</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme">Werkstückträgersysteme</a></li></ul><strong><a class="mt-1" href="/schweisskonstruktionen/transportsysteme-produktion">Transportsysteme</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/transportsysteme-produktion/buehnenwagen">Bühnenwagen</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen">Schwerlast Plattformwagen</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller">Elektrohängebahn</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer">Power and Free Förderer</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer">Kreiskettenförderer</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer">Unterflurschleppkettenförderer</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller">Fahrerlose Transportsysteme</a></li></ul><strong><a class="mt-1" href="/schweisskonstruktionen/foerdertechnik-zubehoer-ersatzteile">Ersatzteile und Zubehör</a></strong>
                                <ul></ul>', 'img_src' => 'schweisskonstruktionen.webp', 'img_title' => 'Schweißkonstruktionen', 'img_alt' => 'Schweißkonstruktionen']);
            });
Route::get('/en/welded-construction ', function () {
                return view('templates.basic')->with(['meta_title' => 'Welded construction – Quality made in Germany since 1926', 'meta_description' => 'Welded construction ✓ Skids ☆ Mechanical engineering ☆ Transport systems ☆ Industry spare parts ➨ Get more information now!', 'h1' => 'Welded construction ', 'seo1' => 'Since 1926, Irion has stood for consistently high quality welded constructions such as skids, load handling devices, mechanical engineering and steel constructions as well as transport systems for production and industrial spare parts. Our welded parts production is specialised in the project business from 30 to 5.000 pieces.', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction  />
<link rel="alternate" hreflang="en" href=/en/welded-construction  />
', 'submenu' => '<strong><a class="mt-1" href="/en/welded-construction/skid-system">Skid system</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/en/welded-construction/skid-system/skid-automotive">Skid Automotive</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/skid-system/conveyor-technology">Conveyor technology automotive</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/skid-system/special-load-carriers">Special load carriers</a></li></ul><strong><a class="mt-1" href="/en/welded-construction/manufactured-lifting-equipment">Manufactured lifting equipment</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/en/welded-construction/manufactured-lifting-equipment/steel-pallets-manufacturers">Steel pallets manufacturers</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/manufactured-lifting-equipment/industrial-container ">Industrial container</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/manufactured-lifting-equipment/transport-bins">Transport bins</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/manufactured-lifting-equipment/steel-cross-beams">Steel cross beams</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/manufactured-lifting-equipment/heavy-duty-steel-trestles ">Heavy duty steel trestles</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/manufactured-lifting-equipment/pallet-stillages">Pallet stillages</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/manufactured-lifting-equipment/metal-stacking-racks">Metal stacking racks</a></li></ul><strong><a class="mt-1" href="/en/welded-construction/welding-mechanical-engineering">Welding mechanical engineering</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/en/welded-construction/welding-mechanical-engineering/lifting-platform">Lifting platform</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/welding-mechanical-engineering/steel-frame-construction">Steel frame construction</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/welding-mechanical-engineering/truck-bodies-manufacturers ">Truck bodies manufacturers</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/welding-mechanical-engineering/product-conveyor-system">Product conveyor system</a></li></ul><strong><a class="mt-1" href="/en/welded-construction/transportation-systems">Transportation systems</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/en/welded-construction/transportation-systems/mobile-lifting-platforms">Mobile lifting platforms</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/transportation-systems/heavy-duty-platform-truck">Heavy duty platform truck</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/transportation-systems/ems-system">EMS system</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/transportation-systems/power-and-free-conveyors">Power and free conveyors</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/transportation-systems/chain-conveyor-parts">Chain conveyor parts</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/transportation-systems//underfloor-drag-chain-conveyor">Underfloor drag chain conveyor</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/transportation-systems/driverless-transport-systems">Driverless transport systems</a></li></ul><strong><a class="mt-1" href="/en/welded-construction/conveyor-components">Conveyor components</a></strong>
                                <ul></ul>', 'img_src' => 'welded-construction .webp', 'img_title' => 'Welded construction ', 'img_alt' => 'Welded construction ']);
            });
Route::get('/us/welding-fabrications', function () {
                return view('templates.basic')->with(['meta_title' => 'Welding fabrications – Quality made in Germany since 1926', 'meta_description' => 'Welding fabrications ✓ Skids ☆ Mechanical engineering ☆ Transport systems ☆ Industry spare parts ➨ Get more information now!', 'h1' => 'Welding fabrications', 'seo1' => 'Since 1926, Irion  has stood for consistently high quality welded constructions such as skids, load handling devices, mechanical engineering and steel constructions as well as transport systems for production and industrial spare parts. Our welded parts production is specialised in the project business from 30 to 5,000 pieces.', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction  />
<link rel="alternate" hreflang="en" href=/en/welded-construction  />
', 'submenu' => '<strong><a class="mt-1" href="/us/welding-fabrications/skid-construction">Skid construction</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/skid-construction/skid-automotive">Skid Automotive</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/skid-construction/conveyor-systems-automotive">Conveyor Systems Automotive</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/skid-construction/special-load-carriers">Special load carriers</a></li></ul><strong><a class="mt-1" href="/us/welding-fabrications/lifting-equipment-manufacturer">Lifting equipment </a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers">Heavy duty steel pallets</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins">Industrial bins</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/lifting-equipment-manufacturer/transport-bins">Transport bins</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams">Steel cross beams</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands">Heavy duty stands</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/lifting-equipment-manufacturer/post-pallets">Post pallets</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks">Metal stacking racks</a></li></ul><strong><a class="mt-1" href="/us/welding-fabrications/welded-steel-construction">Welded steel construction</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers">Scissor lift tables</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/welded-steel-construction/welded-racks">Welded racks</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies">Commercial vehicle bodies</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/welded-steel-construction/product-conveyor-system">Product conveyor system</a></li></ul><strong><a class="mt-1" href="/us/welding-fabrications/transportation-systems">Transportation systems</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/transportation-systems/mobile-lifting-platforms">Mobile lifting platforms</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/transportation-systems/heavy-duty-platform-trolley">Heavy duty platform trolley</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/transportation-systems/electric-monorail">Electric monorail </a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/transportation-systems/power-and-free-conveyors">Power and free conveyors</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/transportation-systems/chain-conveyor-parts">Chain conveyor</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor">Underfloor drag chain conveyor</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers">Automated guided vehicle</a></li></ul><strong><a class="mt-1" href="/us/welding-fabrications/conveyor-accessories-spare-parts">Spare parts and accessories</a></strong>
                                <ul></ul>', 'img_src' => 'welding-fabrications.webp', 'img_title' => 'Welding fabrications', 'img_alt' => 'Welding fabrications']);
            });
Route::get('/schweisskonstruktionen/skid-anlagenbau', function () {
                return view('templates.basic')->with(['meta_title' => 'Skid Anlagenbau – Skid System Fertigung für die Industrie', 'meta_description' => 'Skid Anlagenbau ✓ 30 bis 5.000 Stück ☆ Automobilindustrie ☆ Transfersysteme ☆ Sonderladungsträger ➨ Skid Systeme für die Industrie!', 'h1' => 'Skid Anlagenbau', 'seo1' => 'Irion bietet den Skid Anlagenbau für die Automobilindustrie sowie individuelle Transfersysteme und Sonderladungsträger für die Industrie. Wir fertigen Ihr maßgeschneidertes Skid System im Projektgeschäft von 30 bis 5.000 Stück in konstant hoher Qualität.', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/skid-anlagenbau />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/skid-system />
<link rel="alternate" hreflang="en" href=/en/welded-construction/skid-system />
', 'submenu' => '<strong>Beispiele</strong><ul><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie">Skid Automobilindustrie</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie">Fördertechnik Automobilindustrie</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger">Sonderladungsträger</a></li></ul>', 'img_src' => 'skid-anlagenbau.webp', 'img_title' => 'Skid Anlagenbau', 'img_alt' => 'Skid Anlagenbau']);
            });
Route::get('/en/welded-construction/skid-system', function () {
                return view('templates.basic')->with(['meta_title' => 'Skid system – Skid manufacturing in Germany', 'meta_description' => 'Skid system ✓ 30 to 5.000 pieces ☆ Automotive industry ☆ Transfer systems ☆ Special load carriers ➨ Skid systems for industry!', 'h1' => 'Skid system', 'seo1' => 'Irion offers skid system construction for the automotive industry as well as individual transfer systems and special load carriers for industry. We manufacture your customised skid system in the project business from 30 to 5.000 pieces in consistently high quality.', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/skid-anlagenbau />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/skid-system />
<link rel="alternate" hreflang="en" href=/en/welded-construction/skid-system />
', 'submenu' => '<strong>Examples</strong><ul><li class="my-4 my-lg-1"><a href="/en/welded-construction/skid-system/skid-automotive">Skid Automotive</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/skid-system/conveyor-technology">Conveyor technology automotive</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/skid-system/special-load-carriers">Special load carriers</a></li></ul>', 'img_src' => 'skid-system.webp', 'img_title' => 'Skid system', 'img_alt' => 'Skid system']);
            });
Route::get('/us/welding-fabrications/skid-construction', function () {
                return view('templates.basic')->with(['meta_title' => 'Skid construction – Skid system manufacturing in Germany', 'meta_description' => 'Skid construction ✓ 30 to 5,000 pieces ☆ Automotive industry ☆ Transfer systems ☆ Special load carriers ➨ Skid systems for industry!', 'h1' => 'Skid construction', 'seo1' => 'Irion offers skid system construction for the automotive industry as well as individual transfer systems and special load carriers for industry. We manufacture your customized skid system in the project business from 30 to 5,000 pieces in consistently high quality.', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/skid-anlagenbau />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/skid-system />
<link rel="alternate" hreflang="en" href=/en/welded-construction/skid-system />
', 'submenu' => '<strong>Examples</strong><ul><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/skid-construction/skid-automotive">Skid Automotive</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/skid-construction/conveyor-systems-automotive">Conveyor Systems Automotive</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/skid-construction/special-load-carriers">Special load carriers</a></li></ul>', 'img_src' => 'skid-construction.webp', 'img_title' => 'Skid construction', 'img_alt' => 'Skid construction']);
            });
Route::get('/schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie', function () {
                return view('templates.basic')->with(['meta_title' => 'Skid Automobilindustrie – Skid Fördertechnik Automotive', 'meta_description' => 'Skid Automobilindustrie ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Skid Fördertechnik für Automotive!', 'h1' => 'Skid Automobil&shy;industrie', 'seo1' => '<p>Irion bietet Skid Systeme für die Automobilindustrie.
</p><p>Die Karosserietransportgestelle sind beispielsweise für die spezifischen Anforderungen im Automobil Rohbau und in Lackstraßen ausgelegt. Beipspiele wären Rohbauskids, Tauchskids zur KTL Lackierung, Lackierskids oder eine Skidprüfelehre.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Skid Fördertechnik für Automotive von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '<ul> <li> Fertigung unter Berücksichtigung mechanischer und metallurgischer Aspekte </li> <li> Verschmutzungsresistenz </li> <li> Temperaturbeständigkeit </li> <li> Lasten > 1.000 kg </li> <li> getaktete Montage, Demontage, Wartung </li> <li> Einzelteileanzahl bis ca. 150 Positionen </li> <li> Größe > 5 m </li> <li> Genauigkeit +/- 0,1 mm </li> <li> Eindeutige Identifizierung </li> <li> Mechanisch und elektronisch </li> <li> Fertigungslose bis über 1.000 Stück </li> </ul>', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/skid-automotive />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/skid-system/skid-automotive />
<link rel="alternate" hreflang="en" href=/en/welded-construction/skid-system/skid-automotive />
', 'submenu' => '', 'img_src' => 'skid-automobilindustrie.webp', 'img_title' => 'Skid Automobilindustrie', 'img_alt' => 'Skid Automobilindustrie']);
            });
Route::get('/en/welded-construction/skid-system/skid-automotive', function () {
                return view('templates.basic')->with(['meta_title' => 'Skid Automotive – Conveyor technology for car industry ', 'meta_description' => 'Skid automotive ✓ 30 to 5.000 pieces ☆ Constant high quality ☆ Responsible ☆ Precise ➨ Skid technology made in Germany!', 'h1' => 'Skid automotive', 'seo1' => '<p>Irion offers skid systems for the automotive industry.
</p><p>For example, the car body transport racks are designed for the specific requirements in the automotive body shop and in paint lines. Examples would be body-in-white skids, dipping skids for KTL painting, painting skids or a skid testing gauge.
</p><p>
</p><p>Our certified welding company manufactures customised skid conveyor technology for automotive from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => ' <ul><li> Manufacturing under consideration of mechanical and metallurgical aspects</li><li> Resistance to contamination</li><li> Temperature resistance</li><li> Loads > 1.000 kg</li><li> Clocked assembly, disassembly, maintenance</li><li> Number of individual parts up to approx. 150 positions</li><li> Size > 4 m</li><li> Accuracy +/- 0,1 mm</li><li> Unique identification</li><li> Mechanical and electronic</li><li>  Production lots up to more than 1.000 pieces</li></ul>', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/skid-automotive />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/skid-system/skid-automotive />
<link rel="alternate" hreflang="en" href=/en/welded-construction/skid-system/skid-automotive />
', 'submenu' => '', 'img_src' => 'skid-automotive.webp', 'img_title' => 'Skid automotive', 'img_alt' => 'Skid automotive']);
            });
Route::get('/us/welding-fabrications/skid-construction/skid-automotive', function () {
                return view('templates.basic')->with(['meta_title' => 'Skid Automotive – Conveyor technology for car industry ', 'meta_description' => 'Skid automotive ✓ 30 to 5,000 pieces ☆ Constant high quality ☆ Responsible ☆ Precise ➨ Skid technology made in Germany!', 'h1' => 'Skid automotive', 'seo1' => '<p>Irion offers skid systems for the automotive industry.
</p><p>For example, the car body transport racks are designed for the specific requirements in the automotive body shop and in paint lines. Examples would be body-in-white skids, dipping skids for KTL painting, painting skids or a skid testing gauge.
</p><p>
</p><p>Our certified welding company manufactures customized skid conveyor technology for automotive from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => ' <ul><li> Manufacturing under consideration of mechanical and metallurgical aspects</li><li> Resistance to contamination</li><li> Temperature resistance</li><li> Loads > 2,200 lbs</li><li> Clocked assembly, disassembly, maintenance</li><li> Number of individual parts up to approx. 150 positions</li><li> Size > 16 ft</li><li> Accuracy +/- 0.04 inch</li><li> Unique identification</li><li> Mechanical and electronic</li><li>  Production lots up to more than 1,000 pieces</li></ul>', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/skid-automotive />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/skid-system/skid-automotive />
<link rel="alternate" hreflang="en" href=/en/welded-construction/skid-system/skid-automotive />
', 'submenu' => '', 'img_src' => 'skid-automotive.webp', 'img_title' => 'Skid automotive', 'img_alt' => 'Skid automotive']);
            });
Route::get('/schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie', function () {
                return view('templates.basic')->with(['meta_title' => 'Fördertechnik Automobilindustrie – Transfersysteme', 'meta_description' => 'Fördertechnik Automobilindustrie ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Transfersysteme für Automotive!', 'h1' => 'Fördertechnik Automobil&shy;industrie', 'seo1' => '<p>Irion bietet Fördertechnik Systeme für die Automobilindustrie.
</p><p>Beispiele für diese Werkstückträger Transportsysteme sind Sitzgehänge, Türskids, Pendelförderer EHB oder Inline Werkstückträger für HV-Batterien.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Transfersysteme für Automotive von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => ' <ul><li> Fertigung unter Berücksichtigung mechanischer und metallurgischer Aspekte (auch Beschichtung)</li><li> Verschmutzungsresistenz</li><li> Temperaturbeständigkeit</li><li> Lasten ~ 300 kg</li><li> getaktete Montage, Demontage, Wartung</li><li> Einzelteileanzahl bis ca. 300 Positionen</li><li> Größe ca. 2-5m</li><li> Genauigkeit +/- 0,1 mm</li><li> Eindeutige Identifizierung</li><li> Mechanisch und elektronisch</li><li>  Fertigungslose bis ca. 3.000 Stück</li></ul>', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/conveyor-systems-automotive />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/skid-system/conveyor-technology />
<link rel="alternate" hreflang="en" href=/en/welded-construction/skid-system/conveyor-technology />
', 'submenu' => '', 'img_src' => 'foerdertechnik-automobilindustrie.webp', 'img_title' => 'Fördertechnik Automobilindustrie', 'img_alt' => 'Fördertechnik Automobilindustrie']);
            });
Route::get('/en/welded-construction/skid-system/conveyor-technology', function () {
                return view('templates.basic')->with(['meta_title' => 'Conveyor technology – Automotive transfer systems', 'meta_description' => 'Conveyor technology ✓ 30 to 5.000 pieces ☆ Constant high quality ☆ Responsible ☆ Precise ➨ Transfer systems for automotive! ', 'h1' => 'Conveyor technology for automotive', 'seo1' => '<p>Irion offers conveyor technology for the automotive industry.
</p><p>Examples of these workpiece carrier transport systems are seat hangers, door skids, pendulum conveyors EHB or inline workpiece carriers for HV batteries.
</p><p>
</p><p>Our certified welding company manufactures customised conveyor technology for automotive from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => ' <ul><li> Manufacturing taking into account mechanical and metallurgical aspects (also coating).</li><li> Resistance to contamination</li><li> Temperature resistance</li><li> Loads ~ 300 kg</li><li> Clocked assembly, disassembly, maintenance</li><li> Number of parts up to approx. 300 positions</li><li> Size approx. 2 - 5 m</li><li> Accuracy +/- 0,1 mm</li><li> Unique identification</li><li> Mechanical and electronic</li><li>  Production lots up to approx. 3.000 pieces</li></ul>', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/conveyor-systems-automotive />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/skid-system/conveyor-technology />
<link rel="alternate" hreflang="en" href=/en/welded-construction/skid-system/conveyor-technology />
', 'submenu' => '', 'img_src' => 'conveyor-technology.webp', 'img_title' => 'Conveyor technology', 'img_alt' => 'Conveyor technology']);
            });
Route::get('/us/welding-fabrications/skid-construction/conveyor-systems-automotive', function () {
                return view('templates.basic')->with(['meta_title' => 'Conveyor systems automotive – Industry transfer technology', 'meta_description' => 'Conveyor systems automotive ✓ 30 to 5,000 pieces ☆ Contant high quality ☆ Responsible ☆ Precise ➨ Transfer systems for automotive!', 'h1' => 'Conveyor systems automotive', 'seo1' => '<p>Irion offers conveyor systems for the automotive industry.
</p><p>Examples of these workpiece carrier transport systems are seat hangers, door skids, pendulum conveyors EHB or inline workpiece carriers for HV batteries.
</p><p>
</p><p>Our certified welding company manufactures customized transfer systems for automotive from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => ' <ul><li> Manufacturing taking into account mechanical and metallurgical aspects (also coating).</li><li> Resistance to contamination</li><li> Temperature resistance</li><li> Loads ~ 660 lbs</li><li> Clocked assembly, disassembly, maintenance</li><li> Number of parts up to approx. 300 positions</li><li> Size approx. 6.5 - 16.4 ft</li><li> Accuracy +/-  0.04 inch</li><li> Unique identification</li><li> Mechanical and electronic</li><li>  Production lots up to approx. 3,000 pieces</li></ul>', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/conveyor-systems-automotive />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/skid-system/conveyor-technology />
<link rel="alternate" hreflang="en" href=/en/welded-construction/skid-system/conveyor-technology />
', 'submenu' => '', 'img_src' => 'conveyor-systems-automotive.webp', 'img_title' => 'Conveyor systems automotive', 'img_alt' => 'Conveyor systems automotive']);
            });
Route::get('/schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger', function () {
                return view('templates.basic')->with(['meta_title' => 'Maßgeschneiderte Sonderladungsträger vom Hersteller', 'meta_description' => 'Hersteller Sonderladungsträger ✓ 30 bis 5.000 Stück ☆ Automobilindustrie ☆ Logistik ☆ Produktion ➨ Maßgeschneiderte Ladungsträger!', 'h1' => 'Sonder&shy;ladungsträger ', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Sonderladungsträger.
</p><p>Unsere Ladungsträger und Montageträger sind spezielle Industrietechnik Transportgestelle für die Automobilindustrie oder werden in der Logistik, Instandhaltung und Produktion eingesetzt.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Sonderladungsträger von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/special-load-carriers />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/skid-system/special-load-carriers />
<link rel="alternate" hreflang="en" href=/en/welded-construction/skid-system/special-load-carriers />
', 'submenu' => '', 'img_src' => 'hersteller-sonderladungstraeger.webp', 'img_title' => 'Sonderladungsträger ', 'img_alt' => 'Sonderladungsträger ']);
            });
Route::get('/en/welded-construction/skid-system/special-load-carriers', function () {
                return view('templates.basic')->with(['meta_title' => 'Customised special load carriers from the manufacturer', 'meta_description' => 'Special load carriers manufacturer ✓ 30 to 5.000 pieces ☆ Automotive industry ☆ Logistics ☆ Production ➨ customised load carriers	', 'h1' => 'Special load carriers', 'seo1' => '<p>Irion is a manufacturer for high quality special load carriers.
</p><p>Our load carriers and assembly carriers are special industrial technology transport racks for the automotive industry or are used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding store manufactures customisedspecial load carriers from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/special-load-carriers />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/skid-system/special-load-carriers />
<link rel="alternate" hreflang="en" href=/en/welded-construction/skid-system/special-load-carriers />
', 'submenu' => '', 'img_src' => 'special-load-carriers.webp', 'img_title' => 'Special load carriers', 'img_alt' => 'Special load carriers']);
            });
Route::get('/us/welding-fabrications/skid-construction/special-load-carriers', function () {
                return view('templates.basic')->with(['meta_title' => 'Customized special load carriers from the manufacturer', 'meta_description' => 'Special load carriers manufacturer ✓ 30 to 5,000 pieces ☆ Automotive industry ☆ Logistics ☆ Production ➨ Customized load carriers	', 'h1' => 'Special load carriers', 'seo1' => '<p>Irion is a manufacturer for high quality special load carriers.
</p><p>Our load carriers and assembly carriers are special industrial technology transport racks for the automotive industry or are used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding store manufactures customized special load carriers from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/skid-construction/special-load-carriers />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/skid-system/special-load-carriers />
<link rel="alternate" hreflang="en" href=/en/welded-construction/skid-system/special-load-carriers />
', 'submenu' => '', 'img_src' => 'special-load-carriers.webp', 'img_title' => 'Special load carriers', 'img_alt' => 'Special load carriers']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller', function () {
                return view('templates.basic')->with(['meta_title' => 'Lastaufnahmemittel Hersteller und Behälterbau mit Stahl', 'meta_description' => 'Lastaufnahmemittel Hersteller ✓ Schwerlast ☆ Paletten ☆ Gestelle ☆  Traversen ☆ Behälter ➨ Lastaufnahmemittel und Behälterbau mit Stahl!', 'h1' => 'Lastaufnahme&shy;mittel Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Lastaufnahmemittel bis hin zum Behälterbau.
</p><p>Unsere Spezialitäten sind Stahlkonstruktionen für Schwerlast wie Paletten, Behälter, Traversen, Unterstellböcke oder Gestelle für die Industrie. Wir fertigen Ihr maßgeschneidertes Lastaufnahmemittel im Projektgeschäft von 30 bis 5.000 Stück in konstant hoher Qualität.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment />
', 'submenu' => '<strong>Beispiele</strong><ul><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl">Schwerlastpaletten</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall">Industriebehälter</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall">Transportbehälter</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen">Schwerlasttraversen</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke">Schwerlastböcke</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller">Rungengestelle</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller">Stapelgestelle</a></li></ul>', 'img_src' => 'lastaufnahmemittel-hersteller.webp', 'img_title' => 'Lastaufnahmemittel Hersteller', 'img_alt' => 'Lastaufnahmemittel Hersteller']);
            });
Route::get('/en/welded-construction/manufactured-lifting-equipment', function () {
                return view('templates.basic')->with(['meta_title' => 'Manufactured lifting equipment – In Germany since 1926!', 'meta_description' => 'Manufactured lifting equipment ✓ Pallets ☆ Racks ☆ Cross beams ➨ Load handling equipment and container construction with steel! ', 'h1' => 'Manufactured lifting equipment ', 'seo1' => '<p>Irion stands for manufactured lifting equipment and container construction of highest quality.
</p><p>Our specialities are steel constructions for heavy loads such as pallets, containers, cross beams, trestles or frames for industry. We manufacture your customised load handling equipment in project business from 30 to 5.000 pieces in consistently high quality.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment />
', 'submenu' => '<strong>Examples</strong><ul><li class="my-4 my-lg-1"><a href="/en/welded-construction/manufactured-lifting-equipment/steel-pallets-manufacturers">Steel pallets manufacturers</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/manufactured-lifting-equipment/industrial-container ">Industrial container</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/manufactured-lifting-equipment/transport-bins">Transport bins</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/manufactured-lifting-equipment/steel-cross-beams">Steel cross beams</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/manufactured-lifting-equipment/heavy-duty-steel-trestles ">Heavy duty steel trestles</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/manufactured-lifting-equipment/pallet-stillages">Pallet stillages</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/manufactured-lifting-equipment/metal-stacking-racks">Metal stacking racks</a></li></ul>', 'img_src' => 'manufactured-lifting-equipment.webp', 'img_title' => 'Manufactured lifting equipment ', 'img_alt' => 'Manufactured lifting equipment ']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer', function () {
                return view('templates.basic')->with(['meta_title' => 'Lifting equipment manufacturer and container construction', 'meta_description' => 'Lifting equipment manufacturer ✓ Pallets ☆ Racks ☆ Cross beams ➨ Load handling equipment and container construction with steel!', 'h1' => 'Lifting equipment manufacturer', 'seo1' => '<p>Irion is a lifting equipment manufacturer of high quality load handling equipment and container construction.
</p><p>Our specialities are steel constructions for heavy loads such as pallets, containers, cross beams, trestles or frames for industry. We manufacture your customized load handling equipment in project business from 30 to 5,000 pieces in consistently high quality.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment />
', 'submenu' => '<strong>Examples</strong><ul><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers">Heavy duty steel pallets</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins">Industrial bins</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/lifting-equipment-manufacturer/transport-bins">Transport bins</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams">Steel cross beams</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands">Heavy duty stands</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/lifting-equipment-manufacturer/post-pallets">Post pallets</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks">Metal stacking racks</a></li></ul>', 'img_src' => 'lifting-equipment-manufacturer.webp', 'img_title' => 'Lifting equipment manufacturer', 'img_alt' => 'Lifting equipment manufacturer']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl', function () {
                return view('templates.basic')->with(['meta_title' => 'Schwerlastpaletten aus Stahl – Stahlpaletten Hersteller', 'meta_description' => 'Schwerlastpaletten Stahl ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Stahlpaletten vom Hersteller!', 'h1' => 'Schwerlast&shy;paletten aus Stahl', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Schwerlastpaletten aus Stahl.
</p><p>Unsere Stahlpaletten erfüllen die speziellen Anforderungen der Industrie und werden in der Logistik, Instandhaltung und Produktion eingesetzt.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Schwerlastpaletten von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/steel-pallets-manufacturers />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/steel-pallets-manufacturers />
', 'submenu' => '', 'img_src' => 'schwerlastpaletten-stahl.webp', 'img_title' => 'Schwerlastpaletten aus Stahl', 'img_alt' => 'Schwerlastpaletten aus Stahl']);
            });
Route::get('/en/welded-construction/manufactured-lifting-equipment/steel-pallets-manufacturers', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel pallets manufacturers – From Germany since 1926!', 'meta_description' => 'Steel pallets manufacturers ✓ 30 to 5.000 pieces ☆ Consistently high quality ☆ Precise ➨ Custom-made in Germany since 1926!', 'h1' => 'Steel pallets manufacturers', 'seo1' => '<p>Irion is a manufacturer of high quality heavy duty steel pallets.
</p><p>Our steel pallets meet the special requirements of industry and are used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding specialist manufactures customised heavy-duty pallets from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/steel-pallets-manufacturers />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/steel-pallets-manufacturers />
', 'submenu' => '', 'img_src' => 'steel-pallets-manufacturers.webp', 'img_title' => 'Steel pallets manufacturers', 'img_alt' => 'Steel pallets manufacturers']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers', function () {
                return view('templates.basic')->with(['meta_title' => 'Heavy duty steel pallets manufacturers!', 'meta_description' => 'Heavy duty steel pallets manufacturers ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Precise ➨ Made in Germany since 1926!', 'h1' => 'Heavy duty steel pallets manufacturers', 'seo1' => '<p>Irion is a manufacturer of high quality heavy duty steel pallets.
</p><p>Our steel pallets meet the special requirements of industry and are used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding specialist manufactures customized heavy-duty pallets from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/steel-pallets-manufacturers />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/steel-pallets-manufacturers />
', 'submenu' => '', 'img_src' => 'heavy-duty-steel-pallets-manufacturers.webp', 'img_title' => 'Heavy duty steel pallets manufacturers', 'img_alt' => 'Heavy duty steel pallets manufacturers']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall', function () {
                return view('templates.basic')->with(['meta_title' => 'Industriebehälter Metall – Industriecontainer Hersteller', 'meta_description' => 'Industriebehälter Metall ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Industriecontainer vom Hersteller!', 'h1' => 'Industrie&shy;behälter aus Metall', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Industriebehälter aus Metall.
</p><p>Unsere Behältertechnik erfüllt die speziellen Anforderungen der Industrie und wird in der Logistik, Instandhaltung und Produktion eingesetzt.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Industriecontainer aus Stahl von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/industrial-container  />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/industrial-container  />
', 'submenu' => '', 'img_src' => 'industriebehaelter-metall.webp', 'img_title' => 'Industriebehälter aus Metall', 'img_alt' => 'Industriebehälter aus Metall']);
            });
Route::get('/en/welded-construction/manufactured-lifting-equipment/industrial-container ', function () {
                return view('templates.basic')->with(['meta_title' => 'Industrial container – Made in Germany since 1926!', 'meta_description' => 'Industrial container ✓ 30 to 5.000 pieces ☆ Consistently high quality ☆ Precise ➨ Industrial containers from the manufacturer!', 'h1' => 'Industrial container', 'seo1' => '<p>Irion is a manufacturer of high quality industrial containers made of metal.
</p><p>Our container technology meets the special requirements of industry and is used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding company manufactures customised industrial containers made of steel from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/industrial-container  />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/industrial-container  />
', 'submenu' => '', 'img_src' => 'industrial-container.webp', 'img_title' => 'Industrial container', 'img_alt' => 'Industrial container']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins', function () {
                return view('templates.basic')->with(['meta_title' => 'Industrial metal bins – Made in Germany since 1926!', 'meta_description' => 'Industrial metal bins ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Precise ➨ Industrial containers from the manufacturer!', 'h1' => 'Industrial metal bins', 'seo1' => '<p>Irion is a manufacturer of high quality industrial bins made of metal.
</p><p>Our container technology meets the special requirements of industry and is used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding company manufactures customized industrial containers made of steel from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/industrial-container  />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/industrial-container  />
', 'submenu' => '', 'img_src' => 'industrial-metal-bins.webp', 'img_title' => 'Industrial metal bins', 'img_alt' => 'Industrial metal bins']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall', function () {
                return view('templates.basic')->with(['meta_title' => 'Transportbehälter Metall – Lagerbehälter Hersteller', 'meta_description' => 'Transportbehälter Metall ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Lagerbehälter vom Hersteller!', 'h1' => 'Transport&shy;behälter aus Metall', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Transportbehälter aus Metall.
</p><p>Unsere Behältertechnik erfüllt die speziellen Anforderungen der Industrie und wird in der Logistik, Instandhaltung und Produktion eingesetzt.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Lagerbehälter aus Stahl von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/transport-bins />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/transport-bins />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/transport-bins />
', 'submenu' => '', 'img_src' => 'transportbehaelter-metall.webp', 'img_title' => 'Transportbehälter aus Metall', 'img_alt' => 'Transportbehälter aus Metall']);
            });
Route::get('/en/welded-construction/manufactured-lifting-equipment/transport-bins', function () {
                return view('templates.basic')->with(['meta_title' => 'Transport bins – Made for industry in Germany since 1926!', 'meta_description' => 'Metal transport bins ✓ 30 to 5.000 pieces ☆ Consistently high quality ☆ For logistics, maintenance & production ➨ Information here!', 'h1' => 'Transport bins', 'seo1' => '<p>Irion is a manufacturer of high quality metal transport bins.
</p><p>Our container technology meets the special requirements of industry and is used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding company manufactures customised steel storage bins from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/transport-bins />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/transport-bins />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/transport-bins />
', 'submenu' => '', 'img_src' => 'transport-bins.webp', 'img_title' => 'Transport bins', 'img_alt' => 'Transport bins']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer/transport-bins', function () {
                return view('templates.basic')->with(['meta_title' => 'Transport bins – Made for industry in Germany since 1926!', 'meta_description' => 'Metal transport bins ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ For logistics, maintenance & production ➨ Information here!', 'h1' => 'Transport bins', 'seo1' => '<p>Irion is a manufacturer of high quality metal transport bins.
</p><p>Our container technology meets the special requirements of industry and is used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding company manufactures customized steel storage bins from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/transport-bins />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/transport-bins />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/transport-bins />
', 'submenu' => '', 'img_src' => 'transport-bins.webp', 'img_title' => 'Transport bins', 'img_alt' => 'Transport bins']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen', function () {
                return view('templates.basic')->with(['meta_title' => 'Schwerlasttraversen – Hebetechnik Hersteller', 'meta_description' => 'Schwerlasttraversen ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Hebetechnik vom Hersteller!', 'h1' => 'Schwerlast&shy;traversen', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Schwerlasttraversen aus Stahl.
</p><p>Unsere Hebetechnik erfüllt die speziellen Anforderungen der Industrie und wird in der Logistik, Instandhaltung und Produktion eingesetzt.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Traversen aus Stahl von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/steel-cross-beams />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/steel-cross-beams />
', 'submenu' => '', 'img_src' => 'schwerlasttraversen.webp', 'img_title' => 'Schwerlasttraversen', 'img_alt' => 'Schwerlasttraversen']);
            });
Route::get('/en/welded-construction/manufactured-lifting-equipment/steel-cross-beams', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel cross beams – Made in Germany since 1926!', 'meta_description' => 'Steel cross beams ✓ 30 to 5.000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Lifting technology from the manufacturer!', 'h1' => 'Steel cross beams', 'seo1' => '<p>Irion is a manufacturer of high quality steel cross beams.
</p><p>Our lifting technology meets the special requirements of industry and is used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding company manufactures customised steel cross beams from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision. </p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/steel-cross-beams />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/steel-cross-beams />
', 'submenu' => '', 'img_src' => 'steel-cross-beams.webp', 'img_title' => 'Steel cross beams', 'img_alt' => 'Steel cross beams']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel cross beams – Made in Germany since 1926!', 'meta_description' => 'Steel cross beams ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Lifting technology from the manufacturer!', 'h1' => 'Steel cross beams', 'seo1' => '<p>Irion is a manufacturer of high quality steel cross beams.
</p><p>Our lifting technology meets the special requirements of industry and is used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding company manufactures customized steel cross beams from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision. </p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/steel-cross-beams />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/steel-cross-beams />
', 'submenu' => '', 'img_src' => 'steel-cross-beams.webp', 'img_title' => 'Steel cross beams', 'img_alt' => 'Steel cross beams']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke', function () {
                return view('templates.basic')->with(['meta_title' => 'Schwerlastböcke Hersteller – Schwerlast Unterstellböcke', 'meta_description' => 'Schwerlastböcke für die Industrie ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Schwerlast Unterstellböcke vom Hersteller!', 'h1' => 'Schwerlastböcke', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Schwerlastböcke aus Stahl.
</p><p>Unsere Fertigungstechnik erfüllt anspruchsvolle Anforderungen und wird im Maschinenbau und Anlagenbau eingesetzt.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Schwerlast Unterstellböcke für die Industrie von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/heavy-duty-steel-trestles  />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/heavy-duty-steel-trestles  />
', 'submenu' => '', 'img_src' => 'schwerlastboecke.webp', 'img_title' => 'Schwerlastböcke', 'img_alt' => 'Schwerlastböcke']);
            });
Route::get('/en/welded-construction/manufactured-lifting-equipment/heavy-duty-steel-trestles ', function () {
                return view('templates.basic')->with(['meta_title' => 'Heavy duty steel trestles – Made in Germany since 1926', 'meta_description' => 'Heavy duty steel trestles ✓ 30 to 5.000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Customised heavy duty stands	', 'h1' => 'Heavy duty steel trestles', 'seo1' => '<p>Irion is a manufacturer of high quality heavy duty steel trestles.
</p><p>Our manufacturing technology meets demanding requirements and is used in mechanical engineering and plant construction.
</p><p>
</p><p>Our certified welding company manufactures customised metal trestles for industry from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/heavy-duty-steel-trestles  />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/heavy-duty-steel-trestles  />
', 'submenu' => '', 'img_src' => 'heavy-duty-steel-trestles.webp', 'img_title' => 'Heavy duty steel trestles', 'img_alt' => 'Heavy duty steel trestles']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands', function () {
                return view('templates.basic')->with(['meta_title' => 'Heavy duty stands – Metal trestles for industry!', 'meta_description' => 'Heavy duty stands ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Made in Germany since 1926!', 'h1' => 'Heavy duty stands', 'seo1' => '<p>Irion is a manufacturer of high quality heavy duty stands.
</p><p>Our manufacturing technology meets demanding requirements and is used in mechanical engineering and plant construction.
</p><p>
</p><p>Our certified welding company manufactures customized metal trestles for industry from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/heavy-duty-steel-trestles  />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/heavy-duty-steel-trestles  />
', 'submenu' => '', 'img_src' => 'heavy-duty-stands.webp', 'img_title' => 'Heavy duty stands', 'img_alt' => 'Heavy duty stands']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller', function () {
                return view('templates.basic')->with(['meta_title' => 'Rungengestelle Hersteller – Rungenpaletten aus Metall', 'meta_description' => 'Rungengestelle Hersteller ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Rungenpaletten aus Metall!', 'h1' => 'Rungen&shy;gestelle Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Rungengestelle aus Metall.
</p><p>Unsere Fertigungstechnik erfüllt die speziellen Anforderungen der Industrie und wird in der Logistik, Lagerhaltung und Produktion eingesetzt.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Rungenpaletten aus Stahl von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/post-pallets />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/pallet-stillages />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/pallet-stillages />
', 'submenu' => '', 'img_src' => 'rungengestelle-hersteller.webp', 'img_title' => 'Rungengestelle Hersteller', 'img_alt' => 'Rungengestelle Hersteller']);
            });
Route::get('/en/welded-construction/manufactured-lifting-equipment/pallet-stillages', function () {
                return view('templates.basic')->with(['meta_title' => 'Pallet stillages – Metal stillages made in Germany!', 'meta_description' => 'Pallet stillages for industry! ✓ 30 to 5.000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Customised metal stillages', 'h1' => 'Pallet stillages', 'seo1' => '<p>Irion is a manufacturer of high quality pallet stillages.
</p><p>Our manufacturing technology meets the special requirements of the industry and is used in logistics, warehousing and production.
</p><p>
</p><p>Our certified welding store manufactures custom metal stillages from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/post-pallets />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/pallet-stillages />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/pallet-stillages />
', 'submenu' => '', 'img_src' => 'pallet-stillages.webp', 'img_title' => 'Pallet stillages', 'img_alt' => 'Pallet stillages']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer/post-pallets', function () {
                return view('templates.basic')->with(['meta_title' => 'Post pallets – Steel racks made in Germany since 1926!', 'meta_description' => 'Post pallets for industry! ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Custom metal pallets!', 'h1' => 'Post pallets', 'seo1' => '<p>Irion is a manufacturer of high quality steel post pallets.
</p><p>Our manufacturing technology meets the special requirements of the industry and is used in logistics, warehousing and production.
</p><p>
</p><p>Our certified welding store manufactures custom metal stake pallets from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/post-pallets />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/pallet-stillages />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/pallet-stillages />
', 'submenu' => '', 'img_src' => 'post-pallets.webp', 'img_title' => 'Post pallets', 'img_alt' => 'Post pallets']);
            });
Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller', function () {
                return view('templates.basic')->with(['meta_title' => 'Stapelgestelle Hersteller – Stapelpaletten aus Metall', 'meta_description' => 'Stapelgestelle Hersteller ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Stapelpaletten aus Metall!', 'h1' => 'Stapel&shy;gestelle Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Stapelgestelle aus Metall.
</p><p>Unsere Fertigungstechnik erfüllt die speziellen Anforderungen der Industrie und wird in der Logistik, Lagerhaltung und Produktion eingesetzt.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Stapelpaletten aus Stahl von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/metal-stacking-racks />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/metal-stacking-racks />
', 'submenu' => '', 'img_src' => 'stapelgestelle-hersteller.webp', 'img_title' => 'Stapelgestelle Hersteller', 'img_alt' => 'Stapelgestelle Hersteller']);
            });
Route::get('/en/welded-construction/manufactured-lifting-equipment/metal-stacking-racks', function () {
                return view('templates.basic')->with(['meta_title' => 'Metal stacking racks – Made in Germany since 1926!', 'meta_description' => 'Industrial metal stacking racks ✓ 30 to 5.000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Custom steel racks!', 'h1' => 'Metal stacking racks', 'seo1' => '<p>Irion is a manufacturer of high quality metal stacking racks. Our manufacturing technology meets the special requirements of industry and is used in logistics, warehousing and production.
</p><p>
</p><p>Our certified welding store manufactures custom steel stacking racks from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/metal-stacking-racks />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/metal-stacking-racks />
', 'submenu' => '', 'img_src' => 'metal-stacking-racks.webp', 'img_title' => 'Metal Stacking racks', 'img_alt' => 'Metal stacking racks']);
            });
Route::get('/us/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks', function () {
                return view('templates.basic')->with(['meta_title' => 'Metal stacking racks – Made in Germany since 1926!', 'meta_description' => 'Industrial metal stacking racks ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Custom steel racks!', 'h1' => 'Metal stacking racks', 'seo1' => '<p>Irion is a manufacturer of high quality metal stacking racks. Our manufacturing technology meets the special requirements of industry and is used in logistics, warehousing and production.
</p><p>
</p><p>Our certified welding store manufactures custom steel stacking racks from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/manufactured-lifting-equipment/metal-stacking-racks />
<link rel="alternate" hreflang="en" href=/en/welded-construction/manufactured-lifting-equipment/metal-stacking-racks />
', 'submenu' => '', 'img_src' => 'metal-stacking-racks.webp', 'img_title' => 'Metal Stacking racks', 'img_alt' => 'Metal stacking racks']);
            });
Route::get('/schweisskonstruktionen/maschinenbau', function () {
                return view('templates.basic')->with(['meta_title' => 'Schweißkonstruktionen Maschinenbau – Stahlbaukonstruktionen', 'meta_description' => 'Schweißkonstruktionen Maschinenbau ✓ Scherenhubtische ☆ Schweißgestelle ☆ Aufbauten ☆ Werkstückträger ➨ Industrie Stahlbaukonstruktionen!', 'h1' => 'Schweiß&shy;konstruktionen für den Maschinenbau', 'seo1' => '<p>Irion bietet hochwertige Schweißkonstruktionen für den Maschinenbau und Anlagenbau.
</p><p>Unsere Spezialitäten sind Scherenhubtische, Schweißgestelle, Grundrahmen oder Fahrzeugaufbauten und Werkstückträgersysteme für die Industrie. Wir fertigen maßgeschneiderte Stahlbaukonstruktionen im Projektgeschäft von 30 bis 5.000 Stück in konstant hoher Qualität.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering />
', 'submenu' => '<strong>Beispiele</strong><ul><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller">Scherenhubtische</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/maschinenbau/schweissgestelle">Schweißgestelle</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller">Fahrzeugaufbauten</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme">Werkstückträgersysteme</a></li></ul>', 'img_src' => 'maschinenbau.webp', 'img_title' => 'Schweißkonstruktionen für den Maschinenbau', 'img_alt' => 'Schweißkonstruktionen für den Maschinenbau']);
            });
Route::get('/en/welded-construction/welding-mechanical-engineering', function () {
                return view('templates.basic')->with(['meta_title' => 'Welding mechanical engineering – In Germany since 1926	', 'meta_description' => 'Welding in mechanical engineering ✓ Welding technology from Germany ☆ Platforms ☆ Frames ☆ Bodies ➨ Industrial steel structures!	
', 'h1' => 'Welding in mechanical engineering', 'seo1' => '<p>Irion offers high quality welding for mechanical engineering and plant construction.
</p><p>Our specialties are scissor lift tables, welded frames, base frames or vehicle superstructures and workpiece carrier systems for industry. We manufacture customised steel structures in the project business from 30 to 5.000 pieces in consistently high quality.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering />
', 'submenu' => '<strong>Examples</strong><ul><li class="my-4 my-lg-1"><a href="/en/welded-construction/welding-mechanical-engineering/lifting-platform">Lifting platform</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/welding-mechanical-engineering/steel-frame-construction">Steel frame construction</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/welding-mechanical-engineering/truck-bodies-manufacturers ">Truck bodies manufacturers</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/welding-mechanical-engineering/product-conveyor-system">Product conveyor system</a></li></ul>', 'img_src' => 'welding-mechanical-engineering.webp', 'img_title' => 'Welding mechanical engineering', 'img_alt' => 'Welding mechanical engineering']);
            });
Route::get('/us/welding-fabrications/welded-steel-construction', function () {
                return view('templates.basic')->with(['meta_title' => 'Welded steel construction – Made in Germany since 1926!', 'meta_description' => 'Welded steel construction ✓ Mechanical engineering welding technology ☆ Industrial steel structures! ➨ View our specialties here!', 'h1' => 'Welded steel construction', 'seo1' => '<p>Irion offers high quality welded steel constructions for mechanical engineering and plant construction.
</p><p>Our specialties are scissor lift tables, welded frames, base frames or vehicle superstructures and workpiece carrier systems for industry. We manufacture customized steel structures in the project business from 30 to 5,000 pieces in consistently high quality.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering />
', 'submenu' => '<strong>Examples</strong><ul><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers">Scissor lift tables</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/welded-steel-construction/welded-racks">Welded racks</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies">Commercial vehicle bodies</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/welded-steel-construction/product-conveyor-system">Product conveyor system</a></li></ul>', 'img_src' => 'welded-steel-construction.webp', 'img_title' => 'Welded steel construction', 'img_alt' => 'Welded steel construction']);
            });
Route::get('/schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller', function () {
                return view('templates.basic')->with(['meta_title' => 'Scherenhubtische Hersteller – Schwerlasthubtische', 'meta_description' => 'Scherenhubtische Hersteller ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Schwerlasthubtische aus Stahl!', 'h1' => 'Scheren&shy;hubtische Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Scherenhubtische aus Stahl.
</p><p>Unsere Hubtische erfüllen die speziellen Anforderungen der Industrie wie unterschiedliche Gewichtsklassen wie 1.000 kg, 2.000 kg oder mehr als auch fahrbare Varianten.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Schwerlasthubtische von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering/lifting-platform />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering/lifting-platform />
', 'submenu' => '', 'img_src' => 'scherenhubtische-hersteller.webp', 'img_title' => 'Scherenhubtische Hersteller', 'img_alt' => 'Scherenhubtische Hersteller']);
            });
Route::get('/en/welded-construction/welding-mechanical-engineering/lifting-platform', function () {
                return view('templates.basic')->with(['meta_title' => 'Lifting platform – Made in Germany since 1926!	', 'meta_description' => 'Lifting platforms ✓ Consistently high quality ☆ Responsible ☆ Precise ➨ Customised heavy duty lifting tables from the manufacturer', 'h1' => 'Lifting platform manufacturer', 'seo1' => '<p>Irion is a manufacturer for high quality industrial lifting platforms.
</p><p>Our heavy duty lifting platforms meet the special requirements of the industry such as different weight classes like 1.000 kg, 2.000 kg or more as well as mobile versions.
</p><p>
</p><p>Our certified welding store manufactures customised heavy duty lift tables from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision. </p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering/lifting-platform />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering/lifting-platform />
', 'submenu' => '', 'img_src' => 'lifting-platform.webp', 'img_title' => 'Lifting platform', 'img_alt' => 'Lifting platform']);
            });
Route::get('/us/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers', function () {
                return view('templates.basic')->with(['meta_title' => 'Scissor lift table manufacturers – Heavy duty lift tables', 'meta_description' => 'Scissor lift table manufacturers ✓ Consistently high quality ☆ Responsible ☆ Precise ➨ Heavy duty lift tables made in Germany!', 'h1' => 'Scissor lift table manufacturers', 'seo1' => '<p>Irion is a manufacturer for high quality industrial scissor lift tables.
</p><p>Our scissor lift tables meet the special requirements of the industry such as different weight classes like 2,200 lbs, 4,400 lbs or more as well as mobile versions.
</p><p>
</p><p>Our certified welding store manufactures customized heavy duty lift tables from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering/lifting-platform />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering/lifting-platform />
', 'submenu' => '', 'img_src' => 'scissor-lift-table-manufacturers.webp', 'img_title' => 'Scissor lift table manufacturers', 'img_alt' => 'Scissor lift table manufacturers']);
            });
Route::get('/schweisskonstruktionen/maschinenbau/schweissgestelle', function () {
                return view('templates.basic')->with(['meta_title' => 'Schweißgestelle – Stahlrahmenkonstruktionen Hersteller', 'meta_description' => 'Schweißgestelle aus Stahl ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Stahlrahmenkonstruktionen Hersteller!', 'h1' => 'Schweißgestelle', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Schweißgestelle aus Stahl.
</p><p>Unsere Stahlgestelle erfüllen die speziellen Anforderungen der Industrie und werden in der Logistik, Instandhaltung und Produktion eingesetzt.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Stahlrahmenkonstruktionen von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau/schweissgestelle />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/welded-racks />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering/steel-frame-construction />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering/steel-frame-construction />
', 'submenu' => '', 'img_src' => 'schweissgestelle.webp', 'img_title' => 'Schweißgestelle', 'img_alt' => 'Schweißgestelle']);
            });
Route::get('/en/welded-construction/welding-mechanical-engineering/steel-frame-construction', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel frame construction manufacturer in Germany since 1926', 'meta_description' => 'Steel frame construction for industry ✓ Consistently high quality ☆ Responsible ☆ Precise ➨ Customised steel structures!', 'h1' => 'Steel frame construction', 'seo1' => '<p>Irion is a manufacturer of high quality steel frame constructions.
</p><p>Our welded structures meet the special requirements of industry and are used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding store manufactures custom steel frame constructions from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau/schweissgestelle />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/welded-racks />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering/steel-frame-construction />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering/steel-frame-construction />
', 'submenu' => '', 'img_src' => 'steel-frame-construction.webp', 'img_title' => 'Steel frame construction', 'img_alt' => 'Steel frame construction']);
            });
Route::get('/us/welding-fabrications/welded-steel-construction/welded-racks', function () {
                return view('templates.basic')->with(['meta_title' => 'Welded racks – Steel frame construction manufacturer', 'meta_description' => 'Welded racks for industry ✓ Consistently high quality ☆ Responsible ☆ Precise ➨ Steel frame structures made in Germany since 1926!', 'h1' => 'Welded racks', 'seo1' => '<p>Irion is a manufacturer of high quality welded steel racks.
</p><p>Our welded racks meet the special requirements of industry and are used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding store manufactures custom steel frame structures from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau/schweissgestelle />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/welded-racks />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering/steel-frame-construction />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering/steel-frame-construction />
', 'submenu' => '', 'img_src' => 'welded-racks.webp', 'img_title' => 'Welded racks', 'img_alt' => 'Welded racks']);
            });
Route::get('/schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller', function () {
                return view('templates.basic')->with(['meta_title' => 'Fahrzeugaufbauten Hersteller – Nutzfahrzeugaufbauten', 'meta_description' => 'Fahrzeugaufbauten Hersteller ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Nutzfahrzeugaufbauten aus Stahl!', 'h1' => 'Fahrzeug&shy;aufbauten Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Fahrzeugaufbauten aus Stahl. Wir bieten Spezialaufbauten als auch typische Aufbauten, wie den Pritschenaufbau, Kofferaufbau, Kipperaufbau oder Kranaufbau.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Nutzfahrzeugaufbauten. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering/truck-bodies-manufacturers  />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering/truck-bodies-manufacturers  />
', 'submenu' => '', 'img_src' => 'fahrzeugaufbauten-hersteller.webp', 'img_title' => 'Fahrzeugaufbauten Hersteller', 'img_alt' => 'Fahrzeugaufbauten Hersteller']);
            });
Route::get('/en/welded-construction/welding-mechanical-engineering/truck-bodies-manufacturers ', function () {
                return view('templates.basic')->with(['meta_title' => 'Truck bodies manufacturers – German welding since 1926', 'meta_description' => 'Truck bodies manufacturers ✓ 30 to 5.000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Inform now!', 'h1' => 'Truck bodies manufacturers ', 'seo1' => '<p>Irion is a manufacturer of high quality truck bodies. We offer special bodies as well as typical bodies, such as the flatbed body, box body, tipper body or crane body.
</p><p>
</p><p>Our certified welding store manufactures customised commercial truck bodies. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering/truck-bodies-manufacturers  />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering/truck-bodies-manufacturers  />
', 'submenu' => '', 'img_src' => 'truck-bodies-manufacturers.webp', 'img_title' => 'Truck bodies manufacturers ', 'img_alt' => 'Truck bodies manufacturers ']);
            });
Route::get('/us/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies', function () {
                return view('templates.basic')->with(['meta_title' => 'Commercial vehicle bodies – Made in Germany since 1926', 'meta_description' => 'Commercial vehicle bodies manufacturer ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Inform now!', 'h1' => 'Commercial vehicle bodies', 'seo1' => '<p>Irion is a manufacturer of high quality commercial vehicle bodies. We offer special bodies as well as typical bodies, such as the flatbed body, box body, tipper body or crane body.
</p><p>
</p><p>Our certified welding store manufactures customized commercial vehicle bodies. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering/truck-bodies-manufacturers  />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering/truck-bodies-manufacturers  />
', 'submenu' => '', 'img_src' => 'commercial-vehicle-bodies.webp', 'img_title' => 'Commercial vehicle bodies', 'img_alt' => 'Commercial vehicle bodies']);
            });
Route::get('/schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme', function () {
                return view('templates.basic')->with(['meta_title' => 'Werkstückträgersysteme – Werkstückträger Transportsystem', 'meta_description' => 'Werkstückträgersysteme aus Stahl ✓ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Werkstückträger Transportsystem Hersteller!', 'h1' => 'Werkstück&shy;trägersysteme', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Werkstückträgersysteme aus Stahl.
</p><p>Unsere Transportsysteme erfüllen die speziellen Anforderungen der Industrie und werden in der Logistik, Instandhaltung und Produktion eingesetzt.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb liefert Ihr maßgeschneidertes Werkstückträger Transportsystem. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/product-conveyor-system />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering/product-conveyor-system />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering/product-conveyor-system />
', 'submenu' => '', 'img_src' => 'werkstuecktraegersysteme.webp', 'img_title' => 'Werkstückträgersysteme', 'img_alt' => 'Werkstückträgersysteme']);
            });
Route::get('/en/welded-construction/welding-mechanical-engineering/product-conveyor-system', function () {
                return view('templates.basic')->with(['meta_title' => 'Product conveyor system – Made in Germany since 1926!', 'meta_description' => 'Steel product conveyor system ✓ Consistently high quality ☆ Precise ➨ Workpiece carrier Transport system manufacturer!', 'h1' => 'Product conveyor system', 'seo1' => '<p>Irion is a manufacturer of high quality steel product conveyor systems.
</p><p>Our transport systems meet the special requirements of industry and are used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding store delivers your customised workpiece carrier conveyor systems. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/product-conveyor-system />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering/product-conveyor-system />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering/product-conveyor-system />
', 'submenu' => '', 'img_src' => 'product-conveyor-system.webp', 'img_title' => 'Product conveyor system', 'img_alt' => 'Product conveyor system']);
            });
Route::get('/us/welding-fabrications/welded-steel-construction/product-conveyor-system', function () {
                return view('templates.basic')->with(['meta_title' => 'Product conveyor system – Made in Germany since 1926!', 'meta_description' => 'Steel product conveyor system ✓ Consistently high quality ☆ Precise ➨ Workpiece carrier Transport system manufacturer!', 'h1' => 'Product conveyor system', 'seo1' => '<p>Irion is a manufacturer of high quality steel product conveyor systems.
</p><p>Our transport systems meet the special requirements of industry and are used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding store delivers your customized workpiece carrier conveyor systems. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/welded-steel-construction/product-conveyor-system />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/welding-mechanical-engineering/product-conveyor-system />
<link rel="alternate" hreflang="en" href=/en/welded-construction/welding-mechanical-engineering/product-conveyor-system />
', 'submenu' => '', 'img_src' => 'product-conveyor-system.webp', 'img_title' => 'Product conveyor system', 'img_alt' => 'Product conveyor system']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion', function () {
                return view('templates.basic')->with(['meta_title' => 'Transportsysteme Produktion – Intralogistik Fördertechnik', 'meta_description' => 'Transportsysteme Produktion ✓ Bühnen- & Transportwagen ☆ Mechanische Teile für Förderer & Transportsysteme ➨ Intralogistik Fördertechnik!', 'h1' => 'Transport&shy;systeme Produktion', 'seo1' => '<p>Irion bietet hochwertige Transportsysteme für Produktionsbetriebe.
</p><p>Unsere Spezialitäten sind Bühnenwagen, Schwerlast Transportwagen sowie mechanische Teile für eine Elektrohängebahn, Power and Free Förderer, Kreiskettenförderer, Unterflurschleppkettenförderer oder fahrerlose Transportsysteme für die Industrie. Wir liefern maßgeschneiderte Intralogistik Fördertechnik in konstant hoher Qualität.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems />
', 'submenu' => '<strong>Beispiele</strong><ul><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/transportsysteme-produktion/buehnenwagen">Bühnenwagen</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen">Schwerlast Plattformwagen</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller">Elektrohängebahn</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer">Power and Free Förderer</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer">Kreiskettenförderer</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer">Unterflurschleppkettenförderer</a></li><li class="my-4 my-lg-1"><a href="/schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller">Fahrerlose Transportsysteme</a></li></ul>', 'img_src' => 'transportsysteme-produktion.webp', 'img_title' => 'Transportsysteme Produktion', 'img_alt' => 'Transportsysteme Produktion']);
            });
Route::get('/en/welded-construction/transportation-systems', function () {
                return view('templates.basic')->with(['meta_title' => 'Transportation systems – Made in Germany since 1926!', 'meta_description' => 'Transportation systems production ✓ Stage & transport trolleys ☆ Mechanical parts for conveyors ➨ Intralogistics conveyor technology!', 'h1' => 'Transportation systems', 'seo1' => '<p>Irion provides high quality transportation systems for manufacturing companies.
</p><p>Our specialties include stage trolleys, heavy-duty transport trolleys as well as mechanical parts for an overhead electric conveyor, power and free conveyors, circular chain conveyors, underfloor drag chain conveyors or driverless transport systems for industry. We supply customised intralogistics conveyor technology in consistently high quality.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems />
', 'submenu' => '<strong>Examples</strong><ul><li class="my-4 my-lg-1"><a href="/en/welded-construction/transportation-systems/mobile-lifting-platforms">Mobile lifting platforms</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/transportation-systems/heavy-duty-platform-truck">Heavy duty platform truck</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/transportation-systems/ems-system">EMS system</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/transportation-systems/power-and-free-conveyors">Power and free conveyors</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/transportation-systems/chain-conveyor-parts">Chain conveyor parts</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/transportation-systems//underfloor-drag-chain-conveyor">Underfloor drag chain conveyor</a></li><li class="my-4 my-lg-1"><a href="/en/welded-construction/transportation-systems/driverless-transport-systems">Driverless transport systems</a></li></ul>', 'img_src' => 'transportation-systems.webp', 'img_title' => 'Transportation systems', 'img_alt' => 'Transportation systems']);
            });
Route::get('/us/welding-fabrications/transportation-systems', function () {
                return view('templates.basic')->with(['meta_title' => 'Transportation systems – Made in Germany since 1926!', 'meta_description' => 'Transportation systems production ✓ Stage & transport trolleys ☆ Mechanical parts for conveyors ➨ Intralogistics conveyor technology!', 'h1' => 'Transportation systems', 'seo1' => '<p>Irion provides high quality transportation systems for manufacturing companies.
</p><p>Our specialties include stage trolleys, heavy-duty transport trolleys as well as mechanical parts for an overhead electric conveyor, power and free conveyors, circular chain conveyors, underfloor drag chain conveyors or driverless transport systems for industry. We supply customized intralogistics conveyor technology in consistently high quality.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems />
', 'submenu' => '<strong>Examples</strong><ul><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/transportation-systems/mobile-lifting-platforms">Mobile lifting platforms</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/transportation-systems/heavy-duty-platform-trolley">Heavy duty platform trolley</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/transportation-systems/electric-monorail">Electric monorail </a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/transportation-systems/power-and-free-conveyors">Power and free conveyors</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/transportation-systems/chain-conveyor-parts">Chain conveyor</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor">Underfloor drag chain conveyor</a></li><li class="my-4 my-lg-1"><a href="/us/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers">Automated guided vehicle</a></li></ul>', 'img_src' => 'transportation-systems.webp', 'img_title' => 'Transportation systems', 'img_alt' => 'Transportation systems']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion/buehnenwagen', function () {
                return view('templates.basic')->with(['meta_title' => 'Bühnenwagen – Fahrbare Hebebühnen Hersteller', 'meta_description' => 'Bühnenwagen aus Stahl ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Fahrbare Hebebühnen Hersteller!', 'h1' => 'Bühnenwagen', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Bühnenwagen aus Stahl.
</p><p>Unsere Wagen erfüllen die speziellen Anforderungen der Industrie und werden in der Logistik, Instandhaltung und Produktion eingesetzt.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte fahrbare Hebebühnen von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/buehnenwagen />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/mobile-lifting-platforms />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/mobile-lifting-platforms />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/mobile-lifting-platforms />
', 'submenu' => '', 'img_src' => 'buehnenwagen.webp', 'img_title' => 'Bühnenwagen', 'img_alt' => 'Bühnenwagen']);
            });
Route::get('/en/welded-construction/transportation-systems/mobile-lifting-platforms', function () {
                return view('templates.basic')->with(['meta_title' => 'Mobile lifting platforms – Made in Germany since 1926!', 'meta_description' => 'Mobile lifting platforms manufacturer ✓ 30 to 5.000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Inform now!', 'h1' => 'Mobile lifting platforms', 'seo1' => '<p>Irion is a manufacturer of high quality steel mobile lifting platforms.
</p><p>Our lifting platforms meet the special requirements of industry and are used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding store manufactures customised mobile lifting platforms from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/buehnenwagen />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/mobile-lifting-platforms />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/mobile-lifting-platforms />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/mobile-lifting-platforms />
', 'submenu' => '', 'img_src' => 'mobile-lifting-platforms.webp', 'img_title' => 'Mobile lifting platforms', 'img_alt' => 'Mobile lifting platforms']);
            });
Route::get('/us/welding-fabrications/transportation-systems/mobile-lifting-platforms', function () {
                return view('templates.basic')->with(['meta_title' => 'Mobile lifting platforms – Made in Germany since 1926!', 'meta_description' => 'Mobile lifting platforms manufacturer ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Inform now!', 'h1' => 'Mobile lifting platforms', 'seo1' => '<p>Irion is a manufacturer of high quality steel mobile lifting platforms.
</p><p>Our lifting platforms meet the special requirements of industry and are used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding store manufactures customized mobile lifting platforms from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/buehnenwagen />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/mobile-lifting-platforms />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/mobile-lifting-platforms />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/mobile-lifting-platforms />
', 'submenu' => '', 'img_src' => 'mobile-lifting-platforms.webp', 'img_title' => 'Mobile lifting platforms', 'img_alt' => 'Mobile lifting platforms']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen', function () {
                return view('templates.basic')->with(['meta_title' => 'Schwerlast Plattformwagen – Transportwagen Industrie', 'meta_description' => 'Schwerlast Plattformwagen aus Stahl ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ➨  Industrie Transportwagen vom Hersteller!', 'h1' => 'Schwerlast Platt&shy;formwagen', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Schwerlast Plattformwagen aus Stahl.
</p><p>Unsere Wagen erfüllen anspruchsvolle Anforderungen und werden in der Logistik, Instandhaltung und Produktion eingesetzt.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Industrie Transportwagen von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/heavy-duty-platform-trolley />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/heavy-duty-platform-truck />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/heavy-duty-platform-truck />
', 'submenu' => '', 'img_src' => 'schwerlast-plattformwagen.webp', 'img_title' => 'Schwerlast Plattformwagen', 'img_alt' => 'Schwerlast Plattformwagen']);
            });
Route::get('/en/welded-construction/transportation-systems/heavy-duty-platform-truck', function () {
                return view('templates.basic')->with(['meta_title' => 'Heavy duty platform truck – Made in Germany since 1926', 'meta_description' => 'Heavy duty platform truck production ✓ 30 to 5.000 pieces ☆ Constant high quality ➨ Industrial transport truck from manufacturer!', 'h1' => 'Heavy duty platform truck', 'seo1' => '<p>Irion is a manufacturer of high quality heavy duty platform trucks.
</p><p>Our trolleys meet demanding requirements and are used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding store manufactures customised industrial heavy duty platform trucks from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/heavy-duty-platform-trolley />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/heavy-duty-platform-truck />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/heavy-duty-platform-truck />
', 'submenu' => '', 'img_src' => 'heavy-duty-platform-truck.webp', 'img_title' => 'Heavy duty platform truck', 'img_alt' => 'Heavy duty platform truck']);
            });
Route::get('/us/welding-fabrications/transportation-systems/heavy-duty-platform-trolley', function () {
                return view('templates.basic')->with(['meta_title' => 'Heavy duty platform trolley – Made in Germany since 1926', 'meta_description' => 'Heavy duty platform trolley production ✓ 30 to 5,000 pieces ☆ Constant high quality ➨ Industrial transport truck from manufacturer!', 'h1' => 'Heavy duty platform trolley', 'seo1' => '<p>Irion is a manufacturer of high quality heavy duty platform trolleys.
</p><p>Our trolleys meet demanding requirements and are used in logistics, maintenance and production.
</p><p>
</p><p>Our certified welding store manufactures customized industrial heavy duty platform trucks from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/heavy-duty-platform-trolley />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/heavy-duty-platform-truck />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/heavy-duty-platform-truck />
', 'submenu' => '', 'img_src' => 'heavy-duty-platform-trolley.webp', 'img_title' => 'Heavy duty platform trolley', 'img_alt' => 'Heavy duty platform trolley']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller', function () {
                return view('templates.basic')->with(['meta_title' => 'Elektrohängebahn Komponenten – Mechanische Teile Hersteller', 'meta_description' => 'Elektrohängebahn Komponenten ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Mechanische Teile vom Hersteller!', 'h1' => 'Elektro&shy;hängebahn Komponenten – Mechanische Teile Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Elektrohängebahn Komponenten aus Stahl.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte mechanische Teile in der Intralogistik von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/electric-monorail />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/ems-system />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/ems-system />
', 'submenu' => '', 'img_src' => 'elektrohaengebahn-hersteller.webp', 'img_title' => 'Elektrohängebahn Komponenten – Mechanische Teile Hersteller', 'img_alt' => 'Elektrohängebahn Komponenten – Mechanische Teile Hersteller']);
            });
Route::get('/en/welded-construction/transportation-systems/ems-system', function () {
                return view('templates.basic')->with(['meta_title' => 'EMS system – Monorail components manufacturer!', 'meta_description' => 'EMS system components manufacturer! ✓ 30 to 5.000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Made in Germany since 1926', 'h1' => 'EMS system components manufacturer	', 'seo1' => '<p>Irion is a manufacturer of high quality steel EMS system components.
</p><p>
</p><p>Our certified welding store manufactures customised mechanical parts in intralogistics from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/electric-monorail />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/ems-system />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/ems-system />
', 'submenu' => '', 'img_src' => 'ems-system.webp', 'img_title' => 'EMS system', 'img_alt' => 'EMS system']);
            });
Route::get('/us/welding-fabrications/transportation-systems/electric-monorail', function () {
                return view('templates.basic')->with(['meta_title' => 'Electric monorail – System components manufacturer!', 'meta_description' => 'Electric monorail components ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Made in Germany since 1926', 'h1' => 'Electric monorail system components manufacturer', 'seo1' => '<p>Irion is a manufacturer of high quality steel electric monorail components.
</p><p>
</p><p>Our certified welding store manufactures customized mechanical parts in intralogistics from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/electric-monorail />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/ems-system />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/ems-system />
', 'submenu' => '', 'img_src' => 'electric-monorail.webp', 'img_title' => 'Electric monorail ', 'img_alt' => 'Electric monorail ']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer', function () {
                return view('templates.basic')->with(['meta_title' => 'Power and Free Förderer Komponenten – Teile Hersteller', 'meta_description' => 'Power and Free Förderer Komponenten ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Mechanische Teile vom Hersteller!', 'h1' => 'Power and Free Förderer Komponenten – Mechanische Teile Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Power and Free Förderer Komponenten aus Stahl.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte mechanische Teile in der Intralogistik von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/power-and-free-conveyors />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/power-and-free-conveyors />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/power-and-free-conveyors />
', 'submenu' => '', 'img_src' => 'power-and-free-foerderer.webp', 'img_title' => 'Power and Free Förderer Komponenten – Mechanische Teile Hersteller', 'img_alt' => 'Power and Free Förderer Komponenten – Mechanische Teile Hersteller']);
            });
Route::get('/en/welded-construction/transportation-systems/power-and-free-conveyors', function () {
                return view('templates.basic')->with(['meta_title' => 'Power and free conveyor components – Parts manufacturer', 'meta_description' => 'Power and free conveyor components ✓ 30 to 5.000 pieces ☆ Consistently high quality ☆ Precise ➨ Made in Germany since 1926!', 'h1' => 'Power and free conveyor components manufacturer', 'seo1' => '<p>Irion is a manufacturer of high quality power and free conveyor steel components.
</p><p>
</p><p>Our certified welding store manufactures customised mechanical parts in intralogistics from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/power-and-free-conveyors />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/power-and-free-conveyors />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/power-and-free-conveyors />
', 'submenu' => '', 'img_src' => 'power-and-free-conveyors.webp', 'img_title' => 'Power and free conveyors', 'img_alt' => 'Power and free conveyors']);
            });
Route::get('/us/welding-fabrications/transportation-systems/power-and-free-conveyors', function () {
                return view('templates.basic')->with(['meta_title' => 'Power and free conveyor components – Parts manufacturer', 'meta_description' => 'Power and free conveyor components ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Precise ➨ Made in Germany since 1926!', 'h1' => 'Power and free conveyor components manufacturer', 'seo1' => '<p>Irion is a manufacturer of high quality power and free conveyor steel components.
</p><p>
</p><p>Our certified welding store manufactures customized mechanical parts in intralogistics from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/power-and-free-conveyors />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/power-and-free-conveyors />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/power-and-free-conveyors />
', 'submenu' => '', 'img_src' => 'power-and-free-conveyors.webp', 'img_title' => 'Power and free conveyors', 'img_alt' => 'Power and free conveyors']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer', function () {
                return view('templates.basic')->with(['meta_title' => 'Kreiskettenförderer Komponenten – Teile Hersteller', 'meta_description' => 'Kreiskettenförderer Komponenten ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Mechanische Teile vom Hersteller!', 'h1' => 'Kreisketten&shy;förderer Komponenten – Mechanische Teile Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Kreiskettenförderer Komponenten aus Stahl.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte mechanische Teile für Kreisförderer in der Intralogistik von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/chain-conveyor-parts />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/chain-conveyor-parts />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/chain-conveyor-parts />
', 'submenu' => '', 'img_src' => 'kreiskettenfoerderer.webp', 'img_title' => 'Kreiskettenförderer Komponenten – Mechanische Teile Hersteller', 'img_alt' => 'Kreiskettenförderer Komponenten – Mechanische Teile Hersteller']);
            });
Route::get('/en/welded-construction/transportation-systems/chain-conveyor-parts', function () {
                return view('templates.basic')->with(['meta_title' => 'Chain conveyor parts – Made in Germany since 1926!', 'meta_description' => 'Circular chain conveyor parts ✓ Consistently high quality ☆ Responsible ☆ Precise ➨ Mechanical parts from the manufacturer!', 'h1' => 'Chain conveyor parts manufacturer', 'seo1' => '<p>Irion is a manufacturer for high quality circular chain conveyor parts made of steel.
</p><p>
</p><p>Our certified welding store manufactures customised mechanical parts for circular conveyors in intralogistics from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/chain-conveyor-parts />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/chain-conveyor-parts />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/chain-conveyor-parts />
', 'submenu' => '', 'img_src' => 'chain-conveyor-parts.webp', 'img_title' => 'Chain conveyor parts', 'img_alt' => 'Chain conveyor parts']);
            });
Route::get('/us/welding-fabrications/transportation-systems/chain-conveyor-parts', function () {
                return view('templates.basic')->with(['meta_title' => 'Chain conveyor parts – Made in Germany since 1926!', 'meta_description' => 'Circular chain conveyor parts ✓ Consistently high quality ☆ Responsible ☆ Precise ➨ Mechanical parts from the manufacturer!', 'h1' => 'Chain conveyor parts manufacturer', 'seo1' => '<p>Irion is a manufacturer for high quality circular chain conveyor parts made of steel.
</p><p>
</p><p>Our certified welding store manufactures customized mechanical parts for circular conveyors in intralogistics from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/chain-conveyor-parts />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/chain-conveyor-parts />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/chain-conveyor-parts />
', 'submenu' => '', 'img_src' => 'chain-conveyor-parts.webp', 'img_title' => 'Chain conveyor parts', 'img_alt' => 'Chain conveyor parts']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer', function () {
                return view('templates.basic')->with(['meta_title' => 'Unterflurschleppkettenförderer Komponenten – Hersteller', 'meta_description' => 'Unterflurschleppkettenförderer Komponenten ✓ 30 bis 5.000 Stk ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Mechanische Teile!', 'h1' => 'Unterflur&shy;schleppketten&shy;förderer Komponenten – Mechanische Teile Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Unterflurschleppkettenförderer Komponenten aus Stahl.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte mechanische Teile in der Intralogistik von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems//underfloor-drag-chain-conveyor />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems//underfloor-drag-chain-conveyor />
', 'submenu' => '', 'img_src' => 'unterflurschleppkettenfoerderer.webp', 'img_title' => 'Unterflurschleppkettenförderer Komponenten – Mechanische Teile Hersteller', 'img_alt' => 'Unterflurschleppkettenförderer Komponenten – Mechanische Teile Hersteller']);
            });
Route::get('/en/welded-construction/transportation-systems//underfloor-drag-chain-conveyor', function () {
                return view('templates.basic')->with(['meta_title' => 'Underfloor drag chain conveyor components – Manufacturer', 'meta_description' => 'Underfloor drag chain conveyor components ✓ 30 to 5.000 pcs ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Mechanical parts', 'h1' => 'Underfloor drag chain conveyor components', 'seo1' => '<p>Irion is a manufacturer of high quality steel underfloor drag chain conveyor components.
</p><p>
</p><p>Our certified welding store manufactures customised mechanical parts in intralogistics from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems//underfloor-drag-chain-conveyor />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems//underfloor-drag-chain-conveyor />
', 'submenu' => '', 'img_src' => 'underfloor-drag-chain-conveyor.webp', 'img_title' => 'Underfloor drag chain conveyor', 'img_alt' => 'Underfloor drag chain conveyor']);
            });
Route::get('/us/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor', function () {
                return view('templates.basic')->with(['meta_title' => 'Underfloor drag chain conveyor components – Manufacturer', 'meta_description' => 'Underfloor drag chain conveyor components ✓ 30 to 5,000 pcs ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Mechanical parts', 'h1' => 'Underfloor drag chain conveyor components', 'seo1' => '<p>Irion is a manufacturer of high quality steel underfloor drag chain conveyor components.
</p><p>
</p><p>Our certified welding store manufactures customized mechanical parts in intralogistics from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems//underfloor-drag-chain-conveyor />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems//underfloor-drag-chain-conveyor />
', 'submenu' => '', 'img_src' => 'underfloor-drag-chain-conveyor.webp', 'img_title' => 'Underfloor drag chain conveyor', 'img_alt' => 'Underfloor drag chain conveyor']);
            });
Route::get('/schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller', function () {
                return view('templates.basic')->with(['meta_title' => 'Fahrerlose Transportsysteme Komponenten – Mechanische Teile Hersteller', 'meta_description' => 'Fahrerlose Transportsysteme Komponenten ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Mechanische Teile vom Hersteller!', 'h1' => 'Fahrerlose Transport&shy;systeme Komponenten – Mechanische Teile Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertige Komponenten für fahrerlose Transportsysteme aus Stahl.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte mechanische Teile in der Intralogistik von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/driverless-transport-systems />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/driverless-transport-systems />
', 'submenu' => '', 'img_src' => 'fahrerlose-transportsysteme-hersteller.webp', 'img_title' => 'Fahrerlose Transportsysteme Komponenten – Mechanische Teile Hersteller', 'img_alt' => 'Fahrerlose Transportsysteme Komponenten – Mechanische Teile Hersteller']);
            });
Route::get('/en/welded-construction/transportation-systems/driverless-transport-systems', function () {
                return view('templates.basic')->with(['meta_title' => 'Driverless transport systems – Steel parts manufacturer', 'meta_description' => 'Driverless transport systems parts manufacturer ✓ Consistently high quality ☆ Responsible ☆ Precise ➨ Made in Germany since 1926', 'h1' => 'Driverless transport systems parts manufacturer', 'seo1' => '<p>Irion is a manufacturer of high quality steel parts for driverless transport systems.
</p><p>
</p><p>Our certified welding store manufactures customised mechanical components in intralogistics from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/driverless-transport-systems />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/driverless-transport-systems />
', 'submenu' => '', 'img_src' => 'driverless-transport-systems.webp', 'img_title' => 'Driverless transport systems', 'img_alt' => 'Driverless transport systems']);
            });
Route::get('/us/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers', function () {
                return view('templates.basic')->with(['meta_title' => 'Automated guided vehicle manufacturers – Steel Parts!', 'meta_description' => 'Automated guided vehicle parts manufacturers ✓ Consistently high quality ☆ Responsible ☆ Precise ➨ Made in Germany since 1926!', 'h1' => 'Automated guided vehicle manufacturers', 'seo1' => '<p>Irion is a manufacturer of high quality steel parts for automated guided vehicles.
</p><p>
</p><p>Our certified welding store manufactures customized mechanical components in intralogistics from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/transportation-systems/driverless-transport-systems />
<link rel="alternate" hreflang="en" href=/en/welded-construction/transportation-systems/driverless-transport-systems />
', 'submenu' => '', 'img_src' => 'automated-guided-vehicle-manufacturers.webp', 'img_title' => 'Automated guided vehicle manufacturers', 'img_alt' => 'Automated guided vehicle manufacturers']);
            });
Route::get('/schweisskonstruktionen/foerdertechnik-zubehoer-ersatzteile', function () {
                return view('templates.basic')->with(['meta_title' => 'Fördertechnik Zubehör und Ersatzteile vom Hersteller', 'meta_description' => 'Fördertechnik Zubehör und Ersatzteile ✓ 30 bis 5.000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Mechanische Teile vom Hersteller!', 'h1' => 'Förder&shy;technik Zubehör und Ersatzteile – Mechanische Teile Hersteller', 'seo1' => '<p>Irion ist ein Hersteller für hochwertiges Fördertechnik Zubehör und Ersatzteile aus Stahl.
</p><p>
</p><p>Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte mechanische Teile in der Intralogistik von 30 bis 5.000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/foerdertechnik-zubehoer-ersatzteile />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/conveyor-accessories-spare-parts />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/conveyor-components />
<link rel="alternate" hreflang="en" href=/en/welded-construction/conveyor-components />
', 'submenu' => '', 'img_src' => 'foerdertechnik-zubehoer-ersatzteile.webp', 'img_title' => 'Fördertechnik Zubehör und Ersatzteile – Mechanische Teile Hersteller', 'img_alt' => 'Fördertechnik Zubehör und Ersatzteile – Mechanische Teile Hersteller']);
            });
Route::get('/en/welded-construction/conveyor-components', function () {
                return view('templates.basic')->with(['meta_title' => 'Conveyor components and spare parts from the manufacturer	', 'meta_description' => 'Conveyor components and spare parts ✓ 30 to 5.000 pieces ☆ Consistently high quality ☆ Precise ➨ Made in Germany since 1926!	', 'h1' => 'Conveyor components and spare parts	', 'seo1' => '<p>Irion is a manufacturer of high quality steel conveyor components and spare parts.
</p><p>
</p><p>Our certified welding company manufactures customised mechanical components in intralogistics from 30 to 5.000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/foerdertechnik-zubehoer-ersatzteile />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/conveyor-accessories-spare-parts />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/conveyor-components />
<link rel="alternate" hreflang="en" href=/en/welded-construction/conveyor-components />
', 'submenu' => '', 'img_src' => 'conveyor-components.webp', 'img_title' => 'Conveyor components', 'img_alt' => 'Conveyor components']);
            });
Route::get('/us/welding-fabrications/conveyor-accessories-spare-parts', function () {
                return view('templates.basic')->with(['meta_title' => 'Conveyor accessories and spare parts from the manufacturer', 'meta_description' => 'Conveyor accessories and spare parts ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Precise ➨ Made in Germany since 1926!', 'h1' => 'Conveyor accessories and spare parts', 'seo1' => '<p>Irion is a manufacturer of high quality steel conveyor accessories and spare parts.
</p><p>
</p><p>Our certified welding company manufactures customized mechanical components in intralogistics from 30 to 5,000 pieces. We stand for consistently high quality, responsibility and precision.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweisskonstruktionen/foerdertechnik-zubehoer-ersatzteile />
<link rel="alternate" hreflang="en-US" href=/us/welding-fabrications/conveyor-accessories-spare-parts />
<link rel="alternate" hreflang="x-default" href=/en/welded-construction/conveyor-components />
<link rel="alternate" hreflang="en" href=/en/welded-construction/conveyor-components />
', 'submenu' => '', 'img_src' => 'conveyor-accessories-spare-parts.webp', 'img_title' => 'Conveyor accessories and spare parts', 'img_alt' => 'Conveyor accessories and spare parts']);
            });
Route::get('/stahlverarbeitung', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahlverarbeitung in Deutschland seit 1926 – Firma Irion', 'meta_description' => 'Stahlverarbeitung in Deutschland ✓ 100 bis 500.000 Stück ☆ Stahlteile lasern lassen ☆ Stahlbearbeitung ☆ Präzise ➨ Qualität seit 1926!', 'h1' => 'Stahl&shy;verarbeitung', 'seo1' => '<p>Die Firma Irion bietet seit 1926 präzise Stahlverarbeitung in Deutschland. An unserem Standort im Schwarzwald können Stahlteile im Volumen von 100 bis 500.000 im Projektgeschäft produziert werden.
</p><p>Dabei bieten wir industrielle Stahlbearbeitung nach Maß bis hin zur Möglichkeit Stahlteile in gleichbleibend hoher Qualität lasern zu lassen.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company />
', 'submenu' => '<strong><a class="mt-1" href="/stahlverarbeitung/stahlteile-lasern-lassen">Stahlteile lasern lassen</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt">Stahlblech Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt">Stahlplatten Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt">Edelstahl Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt">Schwarzblech Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt">Grobblech Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt">Federstahl Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt">Werkzeugstahl Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt">Winkelstahl Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt">Elektroblech Zuschnitt</a></li></ul><strong><a class="mt-1" href="/stahlverarbeitung/stahlbearbeitung">Stahlbearbeitung</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen">Stahl schweißen lassen</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen">Stahl schneiden lassen</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen">Stahl biegen lassen</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen">Stahl fräsen lassen</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen">Stahl kanten lassen</a></li></ul>', 'img_src' => 'stahlverarbeitung.webp', 'img_title' => 'Stahlverarbeitung', 'img_alt' => 'Stahlverarbeitung']);
            });
Route::get('/en/steel-processing-company', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel processing company – In Germany since 1926!', 'meta_description' => 'Steel processing company from Germany ✓ 100 to 500.000 pieces ☆ Lasered steel parts ☆ Precise ➨ Consistently high quality since 1926!', 'h1' => 'Steel processing company', 'seo1' => '<p>Our company Irion has been offering precise steel processing in Germany since 1926. At our location in the Black Forest, steel parts can be produced in volumes from 100 to 500.000 in the project business.
</p><p>In doing so, we offer industrial steel processing made to measure up to the possibility of having steel parts lasered in consistently high quality.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company />
', 'submenu' => '<strong><a class="mt-1" href="/en/steel-processing-company/laser-cutting-service">Laser cutting service</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/sheet-metal-cutting">Sheet metal cutting</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/steel-plate-cut-to-size">Steel plate cut to size</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/stainless-steel-cutting">Stainless steel cutting</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/black-metal-sheet-cut-to-size">Black sheet metal cutting</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/cutting-thick-sheet-metal">Thick sheet metal cutting</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/spring-steel-cut-to-size">Spring steel cutting</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/tool-steel-cut-to-size">Tool steel cutting</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/steel-angle-cut-to-size">Steel angle cut to size</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/electrical-steel-cutting">Electrical steel cutting</a></li></ul><strong><a class="mt-1" href="/en/steel-processing-company/steel-machining">Steel machining</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/steel-machining/welding-manufacturer">Welding manufacturer</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/steel-machining/laser-cutting-company">Laser cutting company</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/steel-machining/steel-bending-company">Steel bending company</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/steel-machining/steel-milling">Steel milling</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/steel-machining/press-brake-tooling">Press brake tooling</a></li></ul>', 'img_src' => 'steel-processing-company.webp', 'img_title' => 'Steel processing company', 'img_alt' => 'Steel processing company']);
            });
Route::get('/us/steel-processing-company', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel processing company – In Germany since 1926!', 'meta_description' => 'Steel processing company from Germany ✓ 100 to 500,000 pieces ☆ Lasered steel parts ☆ Precise ➨ Consistently high quality since 1926!', 'h1' => 'Steel processing company', 'seo1' => '<p>Our company Irion  has been offering precise steel processing in Germany since 1926. At our location in the Black Forest, steel parts can be produced in volumes from 100 to 500,000 in the project business.
</p><p>In doing so, we offer industrial steel processing made to measure up to the possibility of having steel parts lasered in consistently high quality.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company />
', 'submenu' => '<strong><a class="mt-1" href="/us/steel-processing-company/laser-cut-steel-parts">Laser cut steel parts</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/steel-sheet-cutting">Steel sheet cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/steel-plate-cutting">Steel plate cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/cutting-of-stainless-steel">Stainless steel cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/black-metal-sheet-cut-to-size">Black sheet metal cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/cutting-thick-sheet-metal">Thick sheet metal cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/spring-steel-cut-to-size">Spring steel cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/tool-steel-cut-to-size">Tool steel cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/angle-iron-cut-to-size">Angle iron cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/electrical-steel-cutting">Electrical steel cutting</a></li></ul><strong><a class="mt-1" href="/us/steel-processing-company/steel-machining">Steel machining</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/steel-machining/welding-business">Welding business</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/steel-machining/laser-steel-cutting-services">Steel cutting services</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/steel-machining/steel-bending-services">Steel bending services</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/steel-machining/steel-milling">Steel milling</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/steel-machining/press-brake-metal-forming">Brake forming</a></li></ul>', 'img_src' => 'steel-processing-company.webp', 'img_title' => 'Steel processing company', 'img_alt' => 'Steel processing company']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahlteile lasern lassen – Laserteile aus Stahl', 'meta_description' => 'Stahlteile lasern lassen ✓ Stahlbleche ☆ Stahlplatten ☆ Edelstahl ☆ Schwarzblech ☆ Grobblech ☆ uvm. ➨ Industrie Laserteile aus Stahl!', 'h1' => 'Stahlteile lasern lassen', 'seo1' => '<p>Irion bietet hochwertige Industrie Laserteile aus Stahl.
</p><p>
</p><p>Sie können Stahlteile lasern lassen, wie Stahlblech, Stahlplatten, Edelstahl, Schwarzblech, Grobblech, Federstahl, Werkzeugstahl, Winkelstahl oder Elektroblech.
</p><p>
</p><p>Wir lasern Stahl im Projektgeschäft ab 100 bis 500.000 Stück in konstant hoher Qualität. Die mögliche Dicke beträgt 1 mm bis 25 mm. Die maximale Größe der Metallfläche beträgt 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service />
', 'submenu' => '<strong>Beispiele</strong><ul><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt">Stahlblech Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt">Stahlplatten Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt">Edelstahl Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt">Schwarzblech Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt">Grobblech Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt">Federstahl Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt">Werkzeugstahl Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt">Winkelstahl Zuschnitt</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt">Elektroblech Zuschnitt</a></li></ul>', 'img_src' => 'stahlteile-lasern-lassen.webp', 'img_title' => 'Stahlteile lasern lassen', 'img_alt' => 'Stahlteile lasern lassen']);
            });
Route::get('/en/steel-processing-company/laser-cutting-service', function () {
                return view('templates.basic')->with(['meta_title' => 'Laser cutting service – Steel components made in Germany	', 'meta_description' => 'Laser cutting service ✓ Steel sheets ☆ Steel plates ☆ Stainless steel ☆ Black plate ☆ and more ➨ Industrial steel laser parts', 'h1' => 'Laser cutting service', 'seo1' => '<p>Irion offers high quality laser cutting service.
</p><p>
</p><p>You can have steel parts lasered, such as steel sheet, steel plate, stainless steel, black plate, heavy plate, spring steel, tool steel, angle steel or electrical steel.
</p><p>
</p><p>We laser steel in project business from 100 to 500.000 pieces in constant high quality. The possible thickness is 1 mm bis 25 mm. The maximum size of the metal surface is 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service />
', 'submenu' => '<strong>Examples</strong><ul><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/sheet-metal-cutting">Sheet metal cutting</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/steel-plate-cut-to-size">Steel plate cut to size</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/stainless-steel-cutting">Stainless steel cutting</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/black-metal-sheet-cut-to-size">Black sheet metal cutting</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/cutting-thick-sheet-metal">Thick sheet metal cutting</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/spring-steel-cut-to-size">Spring steel cutting</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/tool-steel-cut-to-size">Tool steel cutting</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/steel-angle-cut-to-size">Steel angle cut to size</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/laser-cutting-service/electrical-steel-cutting">Electrical steel cutting</a></li></ul>', 'img_src' => 'laser-cutting-service.webp', 'img_title' => 'Laser cutting service', 'img_alt' => 'Laser cutting service']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts', function () {
                return view('templates.basic')->with(['meta_title' => 'Laser cut steel parts – Steel components made in Germany', 'meta_description' => 'Laser cut steel parts ✓ Steel sheets ☆ Steel plates ☆ Stainless steel ☆ Black plate ☆ and more ➨ Industrial steel laser parts', 'h1' => 'Laser cut steel parts', 'seo1' => '<p>Irion offers high quality laser cut steel parts.
</p><p>
</p><p>You can have steel parts lasered, such as steel sheet, steel plate, stainless steel, black plate, heavy plate, spring steel, tool steel, angle steel or electrical steel.
</p><p>
</p><p>We laser steel in project business from 100 to 500,000 pieces in constant high quality. The possible thickness is 0.04 inch to 0.98 inch. The maximum size of the metal surface is 59 inch x 118 inch.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service />
', 'submenu' => '<strong>Examples</strong><ul><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/steel-sheet-cutting">Steel sheet cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/steel-plate-cutting">Steel plate cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/cutting-of-stainless-steel">Stainless steel cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/black-metal-sheet-cut-to-size">Black sheet metal cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/cutting-thick-sheet-metal">Thick sheet metal cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/spring-steel-cut-to-size">Spring steel cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/tool-steel-cut-to-size">Tool steel cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/angle-iron-cut-to-size">Angle iron cutting</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/laser-cut-steel-parts/electrical-steel-cutting">Electrical steel cutting</a></li></ul>', 'img_src' => 'laser-cut-steel-parts.webp', 'img_title' => 'Laser cut steel parts', 'img_alt' => 'Laser cut steel parts']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahlblech Zuschnitt nach Maß – Stahlblech lasern lassen', 'meta_description' => 'Stahlblech Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Stahlblech lasern lassen!', 'h1' => 'Stahlblech Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Stahlblech Zuschnitt nach Maß.
</p><p>
</p><p>Nicht nur beim Laserzuschnitt von Stahlblechen gehen wir gerne auf Ihre individuellen Wünsche ein. Sie können bei uns im Haus auch gleich schweißen, biegen, kanten und fräsen lassen.
</p><p>
</p><p>Unsere Fertigung erfüllt die speziellen Anforderungen der Industrie mit konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.
</p><p>
</p><p>Bei Irion können Sie Stahlblech in großen Mengen lasern lassen. Wir arbeiten im Projektgeschäft ab 100 bis 500.000 Stück. Die mögliche Dicke beträgt 1 mm bis 25 mm. Die maximale Größe der Metallfläche beträgt 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/steel-sheet-cutting />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/sheet-metal-cutting />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/sheet-metal-cutting />
', 'submenu' => '', 'img_src' => 'stahlblech-zuschnitt.webp', 'img_title' => 'Stahlblech Zuschnitt', 'img_alt' => 'Stahlblech Zuschnitt']);
            });
Route::get('/en/steel-processing-company/laser-cutting-service/sheet-metal-cutting', function () {
                return view('templates.basic')->with(['meta_title' => 'Sheet metal cutting – Laser cutting for industry!', 'meta_description' => 'Sheet metal cutting ✓ 100 to 500.000 pieces ☆ Thickness 1 mm bis 25 mm ☆ Size 1,5 m x 3,0 m ➨ Top quality made in Germany!', 'h1' => 'Sheet metal cutting', 'seo1' => '<p>Irion offers high-quality sheet metal cutting to measure.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting of sheet metal. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion you can have sheet metal laser cutting in large quantities. We work in project business from 100 to 500.000 pieces. The possible thickness is 1 mm bis 25 mm. The maximum size of the metal surface is 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/steel-sheet-cutting />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/sheet-metal-cutting />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/sheet-metal-cutting />
', 'submenu' => '', 'img_src' => 'sheet-metal-cutting.webp', 'img_title' => 'Sheet metal cutting', 'img_alt' => 'Sheet metal cutting']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/steel-sheet-cutting', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel sheet cutting – Laser cutting for industry!', 'meta_description' => 'Steel sheet cutting ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany!', 'h1' => 'Steel sheet cutting', 'seo1' => '<p>Irion offers high-quality steel sheet cutting to measure.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting of steel sheets. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have sheet steel laser cutting in large quantities. We work in project business from 100 to 500,000 pieces. The possible thickness is 0.04 inch to 0.98 inch. The maximum size of the metal surface is 59 inch x 118 inch.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/steel-sheet-cutting />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/sheet-metal-cutting />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/sheet-metal-cutting />
', 'submenu' => '', 'img_src' => 'steel-sheet-cutting.webp', 'img_title' => 'Steel sheet cutting', 'img_alt' => 'Steel sheet cutting']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahlplatten Zuschnitt – Stahlplatten lasern lassen', 'meta_description' => 'Stahlplatten Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Stahlplatten lasern lassen!', 'h1' => 'Stahlplatten Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Stahlplatten Zuschnitt nach Maß.
</p><p>
</p><p>Nicht nur beim Laserzuschnitt von Stahlplatten gehen wir gerne auf Ihre individuellen Wünsche ein. Sie können bei uns im Haus auch gleich schweißen, biegen, kanten und fräsen lassen.
</p><p>
</p><p>Unsere Fertigung erfüllt die speziellen Anforderungen der Industrie mit konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.
</p><p>
</p><p>Bei Irion können Sie Stahlplatten in großen Mengen lasern lassen. Wir arbeiten im Projektgeschäft ab 100 bis 500.000 Stück. Die mögliche Dicke beträgt 1 mm bis 25 mm. Die maximale Größe der Metallfläche beträgt 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/steel-plate-cutting />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/steel-plate-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/steel-plate-cut-to-size />
', 'submenu' => '', 'img_src' => 'stahlplatten-zuschnitt.webp', 'img_title' => 'Stahlplatten Zuschnitt', 'img_alt' => 'Stahlplatten Zuschnitt']);
            });
Route::get('/en/steel-processing-company/laser-cutting-service/steel-plate-cut-to-size', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel plate cut to size – Laser cutting for industry', 'meta_description' => 'Steel plate cut to size ✓ 100 to 500.000 pieces ☆ Thickness 1 mm bis 25 mm ☆ Size 1,5 m x 3,0 m ➨ Top quality from Germany!', 'h1' => 'Steel plate cut to size ', 'seo1' => '<p>Irion offers high-quality steel plate cut to size.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting of steel plates. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have steel plate cut to size in large quantities. We work in project business from 100 to 500.000 pieces. The possible thickness is 1 mm bis 25 mm. The maximum size of the metal surface is 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/steel-plate-cutting />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/steel-plate-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/steel-plate-cut-to-size />
', 'submenu' => '', 'img_src' => 'steel-plate-cut-to-size.webp', 'img_title' => 'Steel plate cut to size', 'img_alt' => 'Steel plate cut to size']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/steel-plate-cutting', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel plate cutting – Laser cutting for industry!', 'meta_description' => 'Steel plate cutting ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany!', 'h1' => 'Steel plate cutting', 'seo1' => '<p>Irion offers high-quality steel plate cutting to measure.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting of steel plates. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have steel plate laser cutting in large quantities. We work in project business from 100 to 500,000 pieces. The possible thickness is 0.04 inch to 0.98 inch. The maximum size of the metal surface is 59 inch x 118 inch.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/steel-plate-cutting />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/steel-plate-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/steel-plate-cut-to-size />
', 'submenu' => '', 'img_src' => 'steel-plate-cutting.webp', 'img_title' => 'Steel plate cutting', 'img_alt' => 'Steel plate cutting']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Edelstahl Zuschnitt nach Maß – Edelstahl lasern lassen', 'meta_description' => 'Edelstahl Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Edelstahl lasern lassen!', 'h1' => 'Edelstahl Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Edelstahl Zuschnitt nach Maß.
</p><p>
</p><p>Nicht nur beim Laserzuschnitt von Edelstahl gehen wir gerne auf Ihre individuellen Wünsche ein. Sie können bei uns im Haus auch gleich schweißen, biegen, kanten und fräsen lassen.
</p><p>
</p><p>Unsere Fertigung erfüllt die speziellen Anforderungen der Industrie mit konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.
</p><p>
</p><p>Bei Irion können Sie Edelstahl in großen Mengen lasern lassen. Wir arbeiten im Projektgeschäft ab 100 bis 500.000 Stück. Die mögliche Dicke beträgt 1 mm bis 25 mm. Die maximale Größe der Metallfläche beträgt 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/cutting-of-stainless-steel />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/stainless-steel-cutting />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/stainless-steel-cutting />
', 'submenu' => '', 'img_src' => 'edelstahl-zuschnitt.webp', 'img_title' => 'Edelstahl Zuschnitt', 'img_alt' => 'Edelstahl Zuschnitt']);
            });
Route::get('/en/steel-processing-company/laser-cutting-service/stainless-steel-cutting', function () {
                return view('templates.basic')->with(['meta_title' => 'Stainless steel cutting – Laser cutting for industry', 'meta_description' => 'Stainless steel cutting ✓ 100 to 500.000 pieces ☆ Thickness 1 mm bis 25 mm ☆ Size 1,5 m x 3,0 m ➨ Top quality from Germany', 'h1' => 'Stainless steel cutting', 'seo1' => '<p>Irion offers high-quality stainless steel cutting to measure.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting for stainless steel. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have stainless steel cutting in large quantities. We work in project business from 100 to 500.000 pieces. The possible thickness is 1 mm bis 25 mm. The maximum size of the metal surface is 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/cutting-of-stainless-steel />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/stainless-steel-cutting />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/stainless-steel-cutting />
', 'submenu' => '', 'img_src' => 'stainless-steel-cutting.webp', 'img_title' => 'Stainless steel cutting', 'img_alt' => 'Stainless steel cutting']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/cutting-of-stainless-steel', function () {
                return view('templates.basic')->with(['meta_title' => 'Cutting of stainless steel – Laser cutting for industry', 'meta_description' => 'Cutting of stainless steel ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany ', 'h1' => 'Cutting of stainless steel', 'seo1' => '<p>Irion offers high-quality cutting of stainless steel to measure.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting for stainless steel. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have laser cutting for stainless steel in large quantities. We work in project business from 100 to 500,000 pieces. The possible thickness is 0.04 inch to 0.98 inch. The maximum size of the metal surface is 59 inch x 118 inch. </p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/cutting-of-stainless-steel />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/stainless-steel-cutting />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/stainless-steel-cutting />
', 'submenu' => '', 'img_src' => 'cutting-of-stainless-steel.webp', 'img_title' => 'Cutting of stainless steel', 'img_alt' => 'Cutting of stainless steel']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Schwarzblech Zuschnitt – Schwarzblech lasern lassen', 'meta_description' => 'Schwarzblech Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Schwarzblech lasern lassen!', 'h1' => 'Schwarzblech Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Schwarzblech Zuschnitt nach Maß.
</p><p>
</p><p>Nicht nur beim Laserzuschnitt von Schwarzblechen gehen wir gerne auf Ihre individuellen Wünsche ein. Sie können bei uns im Haus auch gleich schweißen, biegen, kanten und fräsen lassen.
</p><p>
</p><p>Unsere Fertigung erfüllt die speziellen Anforderungen der Industrie mit konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.
</p><p>
</p><p>Bei Irion können Sie Schwarzblech in großen Mengen lasern lassen. Wir arbeiten im Projektgeschäft ab 100 bis 500.000 Stück. Die mögliche Dicke beträgt 1 mm bis 25 mm. Die maximale Größe der Metallfläche beträgt 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/black-metal-sheet-cut-to-size />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/black-metal-sheet-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/black-metal-sheet-cut-to-size />
', 'submenu' => '', 'img_src' => 'schwarzblech-zuschnitt.webp', 'img_title' => 'Schwarzblech Zuschnitt', 'img_alt' => 'Schwarzblech Zuschnitt']);
            });
Route::get('/en/steel-processing-company/laser-cutting-service/black-metal-sheet-cut-to-size', function () {
                return view('templates.basic')->with(['meta_title' => 'Black metal sheet cut to size – Industrial laser cutting', 'meta_description' => 'Black metal sheet cut to size ✓ 100 to 500.000 pieces ☆ Thickness 1 mm bis 25 mm ☆ Size 1,5 m x 3,0 m ➨ Top quality from Germany', 'h1' => 'Black metal sheet cut to size', 'seo1' => '<p>Irion offers high-quality black metal sheet cut to size.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting for black sheet metal. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have laser cutting for black sheet metal in large quantities. We work in project business from 100 to 500.000 pieces. The possible thickness is 1 mm bis 25 mm. The maximum size of the metal surface is 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/black-metal-sheet-cut-to-size />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/black-metal-sheet-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/black-metal-sheet-cut-to-size />
', 'submenu' => '', 'img_src' => 'black-metal-sheet-cut-to-size.webp', 'img_title' => 'Black metal sheet cut to size', 'img_alt' => 'Black metal sheet cut to size']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/black-metal-sheet-cut-to-size', function () {
                return view('templates.basic')->with(['meta_title' => 'Black metal sheet cut to size – Industrial laser cutting', 'meta_description' => 'Black metal sheet cut to size ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany', 'h1' => 'Black metal sheet cut to size', 'seo1' => '<p>Irion offers high-quality black metal sheet cut to size.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting for black sheet metal. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have laser cutting for black sheet metal in large quantities. We work in project business from 100 to 500,000 pieces. The possible thickness is 0.04 inch to 0.98 inch. The maximum size of the metal surface is 59 inch x 118 inch.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/black-metal-sheet-cut-to-size />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/black-metal-sheet-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/black-metal-sheet-cut-to-size />
', 'submenu' => '', 'img_src' => 'black-metal-sheet-cut-to-size.webp', 'img_title' => 'Black metal sheet cut to size', 'img_alt' => 'Black metal sheet cut to size']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Grobblech Zuschnitt nach Maß – Grobblech lasern lassen', 'meta_description' => 'Grobblech Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Grobblech lasern lassen!', 'h1' => 'Grobblech Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Grobblech Zuschnitt nach Maß.
</p><p>
</p><p>Nicht nur beim Laserzuschnitt von Grobblechen gehen wir gerne auf Ihre individuellen Wünsche ein. Sie können bei uns im Haus auch gleich schweißen, biegen, kanten und fräsen lassen.
</p><p>
</p><p>Unsere Fertigung erfüllt die speziellen Anforderungen der Industrie mit konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.
</p><p>
</p><p>Bei Irion können Sie Grobblech in großen Mengen lasern lassen. Wir arbeiten im Projektgeschäft ab 100 bis 500.000 Stück. Die mögliche Dicke beträgt 1 mm bis 25 mm. Die maximale Größe der Metallfläche beträgt 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/cutting-thick-sheet-metal />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/cutting-thick-sheet-metal />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/cutting-thick-sheet-metal />
', 'submenu' => '', 'img_src' => 'grobblech-zuschnitt.webp', 'img_title' => 'Grobblech Zuschnitt', 'img_alt' => 'Grobblech Zuschnitt']);
            });
Route::get('/en/steel-processing-company/laser-cutting-service/cutting-thick-sheet-metal', function () {
                return view('templates.basic')->with(['meta_title' => 'Cutting thick sheet metal – Industrial laser cutting!', 'meta_description' => 'Cutting thick sheet metal ✓ 100 to 500.000 pieces ☆ Thickness 1 mm bis 25 mm ☆ Size 1,5 m x 3,0 m ➨ Top quality from Germany', 'h1' => 'Cutting thick sheet metal', 'seo1' => '<p>Irion offers cutting thick sheet metal to size in highest quality.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting for thick sheet metal. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have laser cutting for thick sheet metal in large quantities. We work in project business from 100 to 500.000 pieces. The possible thickness is 1 mm bis 25 mm. The maximum size of the metal surface is 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/cutting-thick-sheet-metal />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/cutting-thick-sheet-metal />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/cutting-thick-sheet-metal />
', 'submenu' => '', 'img_src' => 'cutting-thick-sheet-metal.webp', 'img_title' => 'Cutting thick sheet metal', 'img_alt' => 'Cutting thick sheet metal']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/cutting-thick-sheet-metal', function () {
                return view('templates.basic')->with(['meta_title' => 'Cutting thick sheet metal – Industrial laser cutting!', 'meta_description' => 'Cutting thick sheet metal ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 ☆ Size 59 x 118 inch ➨ Top quality from Germany', 'h1' => 'Cutting thick sheet metal', 'seo1' => '<p>Irion offers cutting thick sheet metal to size in highest quality.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting for thick sheet metal. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have laser cutting for thick sheet metal in large quantities. We work in project business from 100 to 500,000 pieces. The possible thickness is 0.04 inch to 0.98 inch. The maximum size of the metal surface is 59 inch x 118 inch.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/cutting-thick-sheet-metal />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/cutting-thick-sheet-metal />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/cutting-thick-sheet-metal />
', 'submenu' => '', 'img_src' => 'cutting-thick-sheet-metal.webp', 'img_title' => 'Cutting thick sheet metal', 'img_alt' => 'Cutting thick sheet metal']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Federstahl Zuschnitt nach Maß – Federstahl lasern lassen', 'meta_description' => 'Federstahl Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Federstahl lasern lassen!', 'h1' => 'Federstahl Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Federstahl Zuschnitt nach Maß.
</p><p>
</p><p>Nicht nur beim Laserzuschnitt von Federstählen gehen wir gerne auf Ihre individuellen Wünsche ein. Sie können bei uns im Haus auch gleich schweißen, biegen, kanten und fräsen lassen.
</p><p>
</p><p>Unsere Fertigung erfüllt die speziellen Anforderungen der Industrie mit konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.
</p><p>
</p><p>Bei Irion können Sie Federstahl in großen Mengen lasern lassen. Wir arbeiten im Projektgeschäft ab 100 bis 500.000 Stück. Die mögliche Dicke beträgt 1 mm bis 25 mm. Die maximale Größe der Metallfläche beträgt 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/spring-steel-cut-to-size />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/spring-steel-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/spring-steel-cut-to-size />
', 'submenu' => '', 'img_src' => 'federstahl-zuschnitt.webp', 'img_title' => 'Federstahl Zuschnitt', 'img_alt' => 'Federstahl Zuschnitt']);
            });
Route::get('/en/steel-processing-company/laser-cutting-service/spring-steel-cut-to-size', function () {
                return view('templates.basic')->with(['meta_title' => 'Spring steel cut to size – Industrial laser cutting', 'meta_description' => 'Spring steel cut to size ✓ 100 to 500.000 pieces ☆ Thickness 1 mm bis 25 mm ☆ Size 1,5 m x 3,0 m ➨ Top quality from Germany!', 'h1' => 'Spring steel cut to size', 'seo1' => '<p>Irion offers high-quality spring steel cut to size.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting for spring steel. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have laser cutting for spring steel in large quantities. We work in project business from 100 to 500.000 pieces. The possible thickness is 1 mm bis 25 mm. The maximum size of the metal surface is 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/spring-steel-cut-to-size />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/spring-steel-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/spring-steel-cut-to-size />
', 'submenu' => '', 'img_src' => 'spring-steel-cut-to-size.webp', 'img_title' => 'Spring steel cut to size', 'img_alt' => 'Spring steel cut to size']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/spring-steel-cut-to-size', function () {
                return view('templates.basic')->with(['meta_title' => 'Spring steel cut to size – Industrial laser cutting', 'meta_description' => 'Spring steel cut to size ✓ 100 to 500,000 pieces ☆ Thickness 0,04 to 0,98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany!', 'h1' => 'Spring steel cut to size', 'seo1' => '<p>Irion offers high-quality spring steel cut to size.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting for spring steel. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have laser cutting for spring steel in large quantities. We work in project business from 100 to 500,000 pieces. The possible thickness is 0.04 inch to 0.98 inch. The maximum size of the metal surface is 59 inch x 118 inch.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/spring-steel-cut-to-size />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/spring-steel-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/spring-steel-cut-to-size />
', 'submenu' => '', 'img_src' => 'spring-steel-cut-to-size.webp', 'img_title' => 'Spring steel cut to size', 'img_alt' => 'Spring steel cut to size']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Werkzeugstahl Zuschnitt – Werkzeugstahl lasern lassen', 'meta_description' => 'Werkzeugstahl Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Werkzeugstahl lasern lassen!', 'h1' => 'Werkzeugstahl Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Werkzeugstahl Zuschnitt nach Maß.
</p><p>
</p><p>Nicht nur beim Laserzuschnitt von Werkzeugstählen gehen wir gerne auf Ihre individuellen Wünsche ein. Sie können bei uns im Haus auch gleich schweißen, biegen, kanten und fräsen lassen.
</p><p>
</p><p>Unsere Fertigung erfüllt die speziellen Anforderungen der Industrie mit konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.
</p><p>
</p><p>Bei Irion können Sie Werkzeugstahl in großen Mengen lasern lassen. Wir arbeiten im Projektgeschäft ab 100 bis 500.000 Stück. Die mögliche Dicke beträgt 1 mm bis 25 mm. Die maximale Größe der Metallfläche beträgt 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/tool-steel-cut-to-size />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/tool-steel-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/tool-steel-cut-to-size />
', 'submenu' => '', 'img_src' => 'werkzeugstahl-zuschnitt.webp', 'img_title' => 'Werkzeugstahl Zuschnitt', 'img_alt' => 'Werkzeugstahl Zuschnitt']);
            });
Route::get('/en/steel-processing-company/laser-cutting-service/tool-steel-cut-to-size', function () {
                return view('templates.basic')->with(['meta_title' => 'Tool steel cut to size – Industrial laser cutting', 'meta_description' => 'Tool steel cut to size ✓ 100 to 500.000 pieces ☆ Thickness 1 mm bis 25 mm ☆ Size 1,5 m x 3,0 m ➨ Top quality from Germany!', 'h1' => 'Tool steel cut to size', 'seo1' => '<p>Irion offers high-quality tool steel cut to size.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting for tool steel. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have laser cutting for tool steel in large quantities. We work in project business from 100 to 500.000 pieces. The possible thickness is 1 mm bis 25 mm. The maximum size of the metal surface is 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/tool-steel-cut-to-size />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/tool-steel-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/tool-steel-cut-to-size />
', 'submenu' => '', 'img_src' => 'tool-steel-cut-to-size.webp', 'img_title' => 'Tool steel cut to size', 'img_alt' => 'Tool steel cut to size']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/tool-steel-cut-to-size', function () {
                return view('templates.basic')->with(['meta_title' => 'Tool steel cut to size – Industrial laser cutting', 'meta_description' => 'Tool steel cut to size ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany!', 'h1' => 'Tool steel cut to size', 'seo1' => '<p>Irion offers high-quality tool steel cut to size.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting for tool steel. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have laser cutting for tool steel in large quantities. We work in project business from 100 to 500,000 pieces. The possible thickness is 0.04 inch to 0.98 inch. The maximum size of the metal surface is 59 inch x 118 inch.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/tool-steel-cut-to-size />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/tool-steel-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/tool-steel-cut-to-size />
', 'submenu' => '', 'img_src' => 'tool-steel-cut-to-size.webp', 'img_title' => 'Tool steel cut to size', 'img_alt' => 'Tool steel cut to size']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Winkelstahl Zuschnitt – Winkelstahl lasern lassen', 'meta_description' => 'Winkelstahl Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Winkelstahl lasern lassen!', 'h1' => 'Winkelstahl Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Winkelstahl Zuschnitt nach Maß.
</p><p>
</p><p>Nicht nur beim Laserzuschnitt von Winkelstählen gehen wir gerne auf Ihre individuellen Wünsche ein. Sie können bei uns im Haus auch gleich schweißen, biegen, kanten und fräsen lassen.
</p><p>
</p><p>Unsere Fertigung erfüllt die speziellen Anforderungen der Industrie mit konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.
</p><p>
</p><p>Bei Irion können Sie Winkelstahl in großen Mengen lasern lassen. Wir arbeiten im Projektgeschäft ab 100 bis 500.000 Stück. Die mögliche Dicke beträgt 1 mm bis 25 mm. Die maximale Größe der Metallfläche beträgt 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/angle-iron-cut-to-size />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/steel-angle-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/steel-angle-cut-to-size />
', 'submenu' => '', 'img_src' => 'winkelstahl-zuschnitt.webp', 'img_title' => 'Winkelstahl Zuschnitt', 'img_alt' => 'Winkelstahl Zuschnitt']);
            });
Route::get('/en/steel-processing-company/laser-cutting-service/steel-angle-cut-to-size', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel angle cut to size – Industrial laser cutting', 'meta_description' => 'Steel angle cut to size ✓ 100 to 500.000 pieces ☆ Thickness 1 mm bis 25 mm ☆ Size 1,5 m x 3,0 m ➨ Top quality from Germany!', 'h1' => 'Steel angle cut to size', 'seo1' => '<p>Irion offers high-quality steel angle cut to size.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting of steel angle. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have steel angle cut to size in large quantities. We work in project business from 100 to 500.000 pieces. The possible thickness is 1 mm bis 25 mm. The maximum size of the metal surface is 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/angle-iron-cut-to-size />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/steel-angle-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/steel-angle-cut-to-size />
', 'submenu' => '', 'img_src' => 'steel-angle-cut-to-size.webp', 'img_title' => 'Steel angle cut to size', 'img_alt' => 'Steel angle cut to size']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/angle-iron-cut-to-size', function () {
                return view('templates.basic')->with(['meta_title' => 'Angle iron cut to size – Industrial laser cutting', 'meta_description' => 'Angle iron cut to size ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany!', 'h1' => 'Angle iron cut to size', 'seo1' => '<p>Irion offers high-quality angle iron cut to size.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting for angle iron. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have laser cutting for angle iron in large quantities. We work in project business from 100 to 500,000 pieces. The possible thickness is 0.04 inch to 0.98 inch. The maximum size of the metal surface is 59 inch x 118 inch.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/angle-iron-cut-to-size />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/steel-angle-cut-to-size />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/steel-angle-cut-to-size />
', 'submenu' => '', 'img_src' => 'angle-iron-cut-to-size.webp', 'img_title' => 'Angle iron cut to size', 'img_alt' => 'Angle iron cut to size']);
            });
Route::get('/stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt', function () {
                return view('templates.basic')->with(['meta_title' => 'Elektroblech Zuschnitt – Elektroblech lasern lassen', 'meta_description' => 'Elektroblech Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0 m ➨ Elektroblech lasern lassen!', 'h1' => 'Elektroblech Zuschnitt', 'seo1' => '<p>Irion bietet einen hochwertigen Elektroblech Zuschnitt nach Maß.
</p><p>
</p><p>Nicht nur beim Laserzuschnitt von Elektroblechen gehen wir gerne auf Ihre individuellen Wünsche ein. Sie können bei uns im Haus auch gleich schweißen, biegen, kanten und fräsen lassen.
</p><p>
</p><p>Unsere Fertigung erfüllt die speziellen Anforderungen der Industrie mit konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.
</p><p>
</p><p>Bei Irion können Sie Elektroblech in großen Mengen lasern lassen. Wir arbeiten im Projektgeschäft ab 100 bis 500.000 Stück. Die mögliche Dicke beträgt 1 mm bis 25 mm. Die maximale Größe der Metallfläche beträgt 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/electrical-steel-cutting />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/electrical-steel-cutting />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/electrical-steel-cutting />
', 'submenu' => '', 'img_src' => 'elektroblech-zuschnitt.webp', 'img_title' => 'Elektroblech Zuschnitt', 'img_alt' => 'Elektroblech Zuschnitt']);
            });
Route::get('/en/steel-processing-company/laser-cutting-service/electrical-steel-cutting', function () {
                return view('templates.basic')->with(['meta_title' => 'Electrical steel cutting – Industrial laser cutting', 'meta_description' => 'Electrical steel cutting ✓ 100 to 500.000 pieces ☆ Thickness 1 mm bis 25 mm ☆ Size 1,5 m x 3,0 m ➨ Top quality from Germany!', 'h1' => 'Electrical steel cutting', 'seo1' => '<p>Irion offers high-quality electrical steel cutting.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting for electrical steel. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have laser cutting for electrical steel in large quantities. We work in project business from 100 to 500.000 pieces. The possible thickness is 1 mm bis 25 mm. The maximum size of the metal surface is 1,5 m x 3,0 m.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/electrical-steel-cutting />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/electrical-steel-cutting />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/electrical-steel-cutting />
', 'submenu' => '', 'img_src' => 'electrical-steel-cutting.webp', 'img_title' => 'Electrical steel cutting', 'img_alt' => 'Electrical steel cutting']);
            });
Route::get('/us/steel-processing-company/laser-cut-steel-parts/electrical-steel-cutting', function () {
                return view('templates.basic')->with(['meta_title' => 'Electrical steel cutting – Industrial laser cutting', 'meta_description' => 'Electrical steel cutting ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany!', 'h1' => 'Electrical steel cutting', 'seo1' => '<p>Irion offers high-quality electrical steel cutting.
</p><p>
</p><p>We are happy to meet your individual requirements not only when it comes to laser cutting for electrical steel. You can also have welding, bending, edging and milling done in house.
</p><p>
</p><p>Our production meets the special requirements of the industry with consistently high quality, responsibility and precision.
</p><p>
</p><p>At Irion, you can have laser cutting for electrical steel in large quantities. We work in project business from 100 to 500,000 pieces. The possible thickness is 0.04 inch to 0.98 inch. The maximum size of the metal surface is 59 inch x 118 inch.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/laser-cut-steel-parts/electrical-steel-cutting />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/laser-cutting-service/electrical-steel-cutting />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/laser-cutting-service/electrical-steel-cutting />
', 'submenu' => '', 'img_src' => 'electrical-steel-cutting.webp', 'img_title' => 'Electrical steel cutting', 'img_alt' => 'Electrical steel cutting']);
            });
Route::get('/stahlverarbeitung/stahlbearbeitung', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahlbearbeitung in Deutschland seit 1926 – Firma Irion', 'meta_description' => 'Stahlbearbeitung in Deutschland ✓ Qualität seit 1926 ☆ Schweißen ☆ Schneiden ☆ Biegen ☆ Fräsen ☆ Kanten ➨ Stahlteile bearbeiten lassen!', 'h1' => 'Stahlbearbeitung', 'seo1' => '<p>Die Firma Irion bietet seit 1926 präzise Stahlbearbeitung in Deutschland.
</p><p>Sie können Stahlteile in großer Fertigungstiefe bearbeiten lassen, wie schweißen, schneiden, biegen, fräsen oder abkanten in Lohnfertigung.
</p><p>
</p><p>Unsere Fertigung erfüllt die speziellen Anforderungen der Industrie mit konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.
</p><p>
</p><p>Benötigen Sie darüber hinaus weitere Metallbearbeitung oder Oberflächenveredelung kümmern wir uns um eine zufriedenstellende Lösung mit ausgewählten Kooperationspartnern. 
</p><p>
</p><p></p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining />
', 'submenu' => '<strong>Beispiele</strong><ul><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen">Stahl schweißen lassen</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen">Stahl schneiden lassen</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen">Stahl biegen lassen</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen">Stahl fräsen lassen</a></li><li class="my-4 my-lg-1"><a href="/stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen">Stahl kanten lassen</a></li></ul>', 'img_src' => 'stahlbearbeitung.webp', 'img_title' => 'Stahlbearbeitung', 'img_alt' => 'Stahlbearbeitung']);
            });
Route::get('/en/steel-processing-company/steel-machining', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel machining in Germany since 1926 – Irion Company', 'meta_description' => 'Steel machining in Germany ✓ Quality since 1926 ☆ Welding ☆ Cutting ☆ Bending ☆ Milling ☆ Edging ➨ Have steel parts processed!', 'h1' => 'Steel machining', 'seo1' => '<p>Irion has been offering precise steel machining in Germany since 1926.
</p><p>You can have steel parts machined with a large vertical range of manufacture, such as welding, cutting, bending, milling or brake forming in contract manufacturing.
</p><p>
</p><p>Our production meets the special requirements of the industry with constant high quality, responsibility and precision.
</p><p>
</p><p>If you also require further metalworking or surface finishing, we will take care of a satisfactory solution with selected cooperation partners.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining />
', 'submenu' => '<strong>Examples</strong><ul><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/steel-machining/welding-manufacturer">Welding manufacturer</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/steel-machining/laser-cutting-company">Laser cutting company</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/steel-machining/steel-bending-company">Steel bending company</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/steel-machining/steel-milling">Steel milling</a></li><li class="my-4 my-lg-1"><a href="/en/steel-processing-company/steel-machining/press-brake-tooling">Press brake tooling</a></li></ul>', 'img_src' => 'steel-machining.webp', 'img_title' => 'Steel machining', 'img_alt' => 'Steel machining']);
            });
Route::get('/us/steel-processing-company/steel-machining', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel machining in Germany since 1926 – Irion  Company', 'meta_description' => 'Steel machining in Germany ✓ Quality since 1926 ☆ Welding ☆ Cutting ☆ Bending ☆ Milling ☆ Edging ➨ Have steel parts processed!', 'h1' => 'Steel machining', 'seo1' => '<p>Irion has been offering precise steel machining in Germany since 1926.
</p><p>You can have steel parts machined with a large vertical range of manufacture, such as welding, cutting, bending, milling or brake forming in contract manufacturing.
</p><p>
</p><p>Our production meets the special requirements of the industry with constant high quality, responsibility and precision.
</p><p>
</p><p>If you also require further metalworking or surface finishing, we will take care of a satisfactory solution with selected cooperation partners.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining />
', 'submenu' => '<strong>Examples</strong><ul><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/steel-machining/welding-business">Welding business</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/steel-machining/laser-steel-cutting-services">Steel cutting services</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/steel-machining/steel-bending-services">Steel bending services</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/steel-machining/steel-milling">Steel milling</a></li><li class="my-4 my-lg-1"><a href="/us/steel-processing-company/steel-machining/press-brake-metal-forming">Brake forming</a></li></ul>', 'img_src' => 'steel-machining.webp', 'img_title' => 'Steel machining', 'img_alt' => 'Steel machining']);
            });
Route::get('/stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahl schweißen lassen – Schweißbetrieb aus Deutschland', 'meta_description' => 'Stahl schweißen lassen ✓ 30 bis 5.000 Stück ☆ Konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Schweißbetrieb aus Deutschland!', 'h1' => 'Stahl schweißen lassen', 'seo1' => '<p>Irion gibt es bereits seit 1926. Wir sind ein erfahrener Schweißbetrieb aus Deutschland, genauer gesagt aus dem Schwarzwald. Unser Sitz ist Bad Teinach, das liegt in der Nähe von Städten wie Stuttgart, Pforzheim und Tübingen.
</p><p>
</p><p>Bei uns können Sie Stahl schweißen lassen ab 30 bis 5.000 Stück. Wir handeln verantwortungsbewusst und legen wert auf präzises Arbeiten und konstant hohe Qualität!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/welding-business />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/welding-manufacturer />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/welding-manufacturer />
', 'submenu' => '', 'img_src' => 'stahl-schweissen-lassen.webp', 'img_title' => 'Stahl schweißen lassen', 'img_alt' => 'Stahl schweißen lassen']);
            });
Route::get('/en/steel-processing-company/steel-machining/welding-manufacturer', function () {
                return view('templates.basic')->with(['meta_title' => 'Welding manufacturer – Have steel welded in Germany', 'meta_description' => 'Welding manufacturer ✓ 30 to 5.000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Welding company from Germany!', 'h1' => 'Welding manufacturer', 'seo1' => '<p>Irion has been around since 1926. We are an experienced welding manufacturer from Southern Germany in Central Europe.
</p><p>
</p><p>We work according to the highest quality criteria, and also meet international industry standards.
</p><p>
</p><p>With us you can have steel welded from 30 to 5.000 pieces. We act responsibly and value precise work and consistently top quality!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/welding-business />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/welding-manufacturer />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/welding-manufacturer />
', 'submenu' => '', 'img_src' => 'welding-manufacturer.webp', 'img_title' => 'Welding manufacturer', 'img_alt' => 'Welding manufacturer']);
            });
Route::get('/us/steel-processing-company/steel-machining/welding-business', function () {
                return view('templates.basic')->with(['meta_title' => 'Welding business – Have steel welded in Germany', 'meta_description' => 'Welding business ✓ 30 to 5,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Welding company from Germany!', 'h1' => 'Welding business', 'seo1' => '<p>Irion has been around since 1926. We are an experienced welding business from Southern Germany in Central Europe.
</p><p>
</p><p>We work according to the highest quality criteria, and also meet international industry standards.
</p><p>
</p><p>With us you can have steel welded from 30 to 5,000 pieces. We act responsibly and value precise work and consistently top quality! </p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/welding-business />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/welding-manufacturer />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/welding-manufacturer />
', 'submenu' => '', 'img_src' => 'welding-business.webp', 'img_title' => 'Welding business', 'img_alt' => 'Welding business']);
            });
Route::get('/stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahl schneiden lassen – Laserschneidbetrieb Deutschland', 'meta_description' => 'Stahl schneiden lassen ✓ 100 bis 500.000 Stück ☆ Konstant hohe Qualität ☆ Präzise ➨ Laserschneidbetrieb aus Deutschland!', 'h1' => 'Stahl schneiden lassen', 'seo1' => '<p>Irion gibt es bereits seit 1926. Wir sind ein erfahrener Laserschneidbetrieb aus Deutschland, genauer gesagt aus dem Schwarzwald. Unser Sitz ist Bad Teinach, das liegt in der Nähe von Städten wie Stuttgart, Pforzheim und Tübingen.
</p><p>
</p><p>Bei uns können Sie Stahl schneiden lassen ab 100 bis 500.000 Stück. Wir handeln verantwortungsbewusst und legen wert auf präzises Arbeiten und konstant hohe Qualität!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/laser-steel-cutting-services />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/laser-cutting-company />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/laser-cutting-company />
', 'submenu' => '', 'img_src' => 'stahl-schneiden-lassen.webp', 'img_title' => 'Stahl schneiden lassen', 'img_alt' => 'Stahl schneiden lassen']);
            });
Route::get('/en/steel-processing-company/steel-machining/laser-cutting-company', function () {
                return view('templates.basic')->with(['meta_title' => 'Laser cutting company – German steel machining!', 'meta_description' => 'Laser cutting company ✓ 100 to 500.000 pieces ☆ Consistently high quality ☆ Precise ➨ Industrial German steel company since 1926', 'h1' => 'Laser cutting company', 'seo1' => '<p>Irion has been around since 1926. We are an experienced laser cutting company from Southern Germany in Central Europe and offer you professional steel machining services. 
</p><p>
</p><p>We work according to the highest quality criteria, and also meet international industry standards.
</p><p>
</p><p>With us you can have steel cut from 100 to 500.000 pieces. We act responsibly and value precise work and consistently high quality!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/laser-steel-cutting-services />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/laser-cutting-company />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/laser-cutting-company />
', 'submenu' => '', 'img_src' => 'laser-cutting-company.webp', 'img_title' => 'Laser cutting company', 'img_alt' => 'Laser cutting company']);
            });
Route::get('/us/steel-processing-company/steel-machining/laser-steel-cutting-services', function () {
                return view('templates.basic')->with(['meta_title' => 'Laser steel cutting services – German steel company!', 'meta_description' => 'Laser steel cutting services ✓ 100 to 500,000 pieces ☆ Consistently high quality ☆ Precise ➨ Laser cutting company from Germany', 'h1' => 'Laser steel cutting services', 'seo1' => '<p>Irion has been around since 1926. We are an experienced machining company from Southern Germany in Central Europe and offer you professional laser steel cutting services. 
</p><p>
</p><p>We work according to the highest quality criteria, and also meet international industry standards.
</p><p>
</p><p>With us you can have steel cut from 100 to 500,000 pieces. We act responsibly and value precise work and consistently high quality!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/laser-steel-cutting-services />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/laser-cutting-company />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/laser-cutting-company />
', 'submenu' => '', 'img_src' => 'laser-steel-cutting services.webp', 'img_title' => 'Laser steel cutting services', 'img_alt' => 'Laser steel cutting services']);
            });
Route::get('/stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahl biegen lassen – Biegebetrieb aus Deutschland', 'meta_description' => 'Stahl biegen lassen ✓ 100 bis 500.000 Stück ☆ Konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Biegebetrieb aus Deutschland!', 'h1' => 'Stahl biegen lassen', 'seo1' => '<p>Irion gibt es bereits seit 1926. Wir sind ein erfahrener Biegebetrieb aus Deutschland, genauer gesagt aus dem Schwarzwald. Unser Sitz ist Bad Teinach, das liegt in der Nähe von Städten wie Stuttgart, Pforzheim und Tübingen.
</p><p>
</p><p>Bei uns können Sie Stahl biegen lassen ab 100 bis 500.000 Stück. Wir handeln verantwortungsbewusst und legen wert auf präzises Arbeiten und konstant hohe Qualität!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/steel-bending-services />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/steel-bending-company />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/steel-bending-company />
', 'submenu' => '', 'img_src' => 'stahl-biegen-lassen.webp', 'img_title' => 'Stahl biegen lassen', 'img_alt' => 'Stahl biegen lassen']);
            });
Route::get('/en/steel-processing-company/steel-machining/steel-bending-company', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel bending company – German steel machining!', 'meta_description' => 'Steel bending company ✓ 100 to 500.000 pieces ☆ Consistently high quality ☆ Precise ➨ Top quality from Germany since 1926!', 'h1' => 'Steel bending company', 'seo1' => '<p>Irion has been around since 1926. We are an experienced steel bending company from Southern Germany in Central Europe and offer you professional steel machining services. 
</p><p>
</p><p>We work according to the highest quality criteria, and also meet international industry standards.
</p><p>
</p><p>With us you can have steel bending from 100 to 500.000 pieces. We act responsibly and value precise work and consistently high quality!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/steel-bending-services />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/steel-bending-company />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/steel-bending-company />
', 'submenu' => '', 'img_src' => 'steel-bending-company.webp', 'img_title' => 'Steel bending company', 'img_alt' => 'Steel bending company']);
            });
Route::get('/us/steel-processing-company/steel-machining/steel-bending-services', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel bending services – German steel company	', 'meta_description' => 'Steel bending services ✓ 100 to 500,000 pieces ☆ Consistently high quality ☆ Precise ➨ Top quality from Germany since 1926!', 'h1' => 'Steel bending services', 'seo1' => '<p>Irion has been around since 1926. We are an experienced machining company from Southern Germany in Central Europe and offer you professional steel bending services. 
</p><p>
</p><p>We work according to the highest quality criteria, and also meet international industry standards.
</p><p>
</p><p>With us you can have steel bending from 100 to 500,000 pieces. We act responsibly and value precise work and consistently high quality!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/steel-bending-services />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/steel-bending-company />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/steel-bending-company />
', 'submenu' => '', 'img_src' => 'steel-bending-services.webp', 'img_title' => 'Steel bending services', 'img_alt' => 'Steel bending services']);
            });
Route::get('/stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahl fräsen lassen – Zerspanungsbetrieb aus Deutschland', 'meta_description' => 'Stahl fräsen lassen ✓ 100 bis 500.000 Stück ☆ Konstant hohe Qualität ☆ Verantwortungsvoll ☆ Präzise ➨ Zerspanungsbetrieb aus Deutschland!', 'h1' => 'Stahl fräsen lassen', 'seo1' => '<p>Irion gibt es bereits seit 1926. Wir sind ein erfahrener Zerspanungsbetrieb aus Deutschland, genauer gesagt aus dem Schwarzwald. Unser Sitz ist Bad Teinach, das liegt in der Nähe von Städten wie Stuttgart, Pforzheim und Tübingen.
</p><p>
</p><p>Bei uns können Sie Stahl fräsen lassen ab 100 bis 500.000 Stück. Wir handeln verantwortungsbewusst und legen wert auf präzises Arbeiten und konstant hohe Qualität!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/steel-milling />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/steel-milling />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/steel-milling />
', 'submenu' => '', 'img_src' => 'stahl-fraesen-lassen.webp', 'img_title' => 'Stahl fräsen lassen', 'img_alt' => 'Stahl fräsen lassen']);
            });
Route::get('/en/steel-processing-company/steel-machining/steel-milling', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel milling – Machining company from Germany!', 'meta_description' => 'Steel milling services ✓ 100 to 500.000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Made in Germany since 1926', 'h1' => 'Steel milling services', 'seo1' => '<p>Irion has been around since 1926. We are an experienced machining company from Southern Germany in Central Europe and offer you professional steel milling services.
</p><p>
</p><p>We work according to the highest quality criteria, and also meet international industry standards.
</p><p>
</p><p>With us you can have steel milled from 100 to 500.000 pieces. We act responsibly and value precise work and consistently top quality!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/steel-milling />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/steel-milling />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/steel-milling />
', 'submenu' => '', 'img_src' => 'steel-milling.webp', 'img_title' => 'Steel milling', 'img_alt' => 'Steel milling']);
            });
Route::get('/us/steel-processing-company/steel-machining/steel-milling', function () {
                return view('templates.basic')->with(['meta_title' => 'Steel milling – Machining company from Germany!', 'meta_description' => 'Steel milling services ✓ 100 to 500,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ Made in Germany since 1926', 'h1' => 'Steel milling services', 'seo1' => '<p>Irion has been around since 1926. We are an experienced machining company from Southern Germany in Central Europe and offer you professional steel milling services.
</p><p>
</p><p>We work according to the highest quality criteria, and also meet international industry standards.
</p><p>
</p><p>With us you can have steel milled from 100 to 500,000 pieces. We act responsibly and value precise work and consistently top quality!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/steel-milling />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/steel-milling />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/steel-milling />
', 'submenu' => '', 'img_src' => 'steel-milling.webp', 'img_title' => 'Steel milling', 'img_alt' => 'Steel milling']);
            });
Route::get('/stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen', function () {
                return view('templates.basic')->with(['meta_title' => 'Stahl kanten lassen – Kantbetrieb aus Deutschland', 'meta_description' => 'Stahl kanten lassen ✓ 100 bis 500.000 Stück ☆ Konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Kantbetrieb aus Deutschland!', 'h1' => 'Stahl kanten lassen', 'seo1' => '<p>Irion gibt es bereits seit 1926. Wir sind ein erfahrener Kantbetrieb aus Deutschland, genauer gesagt aus dem Schwarzwald. Unser Sitz ist Bad Teinach, das liegt in der Nähe von Städten wie Stuttgart, Pforzheim und Tübingen.
</p><p>
</p><p>Bei uns können Sie Stahl kanten lassen ab 100 bis 500.000 Stück. Wir handeln verantwortungsbewusst und legen wert auf präzises Arbeiten und konstant hohe Qualität!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/press-brake-metal-forming />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/press-brake-tooling />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/press-brake-tooling />
', 'submenu' => '', 'img_src' => 'stahl-kanten-lassen.webp', 'img_title' => 'Stahl kanten lassen', 'img_alt' => 'Stahl kanten lassen']);
            });
Route::get('/en/steel-processing-company/steel-machining/press-brake-tooling', function () {
                return view('templates.basic')->with(['meta_title' => 'Press brake tooling – German machining company! ', 'meta_description' => 'Press brake tooling ✓ 100 to 500.000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ From Germany since 1926', 'h1' => 'Press brake tooling', 'seo1' => '<p>Irion has been around since 1926. We are an experienced machining company from Southern Germany in Central Europe and offer you professional press brake tooling.
</p><p>
</p><p>We work according to the highest quality criteria, and also meet international industry standards.
</p><p>
</p><p>With us you can have press brake tooling from 100 to 500.000 pieces. We act responsibly and value precise work and consistently top quality!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/press-brake-metal-forming />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/press-brake-tooling />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/press-brake-tooling />
', 'submenu' => '', 'img_src' => 'press-brake-tooling.webp', 'img_title' => 'Press brake tooling', 'img_alt' => 'Press brake tooling']);
            });
Route::get('/us/steel-processing-company/steel-machining/press-brake-metal-forming', function () {
                return view('templates.basic')->with(['meta_title' => 'Press brake metal forming – German machining company!', 'meta_description' => 'Press brake metal forming ✓ 100 to 500,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ From Germany since 1926', 'h1' => 'Press brake metal forming', 'seo1' => '<p>Irion has been around since 1926. We are an experienced machining company from Southern Germany in Central Europe and offer you professional press brake metal forming.
</p><p>
</p><p>We work according to the highest quality criteria, and also meet international industry standards.
</p><p>
</p><p>With us you can have brake forming from 100 to 500,000 pieces. We act responsibly and value precise work and consistently top quality!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen />
<link rel="alternate" hreflang="en-US" href=/us/steel-processing-company/steel-machining/press-brake-metal-forming />
<link rel="alternate" hreflang="x-default" href=/en/steel-processing-company/steel-machining/press-brake-tooling />
<link rel="alternate" hreflang="en" href=/en/steel-processing-company/steel-machining/press-brake-tooling />
', 'submenu' => '', 'img_src' => 'press-brake-metal-forming.webp', 'img_title' => 'Press brake metal forming', 'img_alt' => 'Press brake metal forming']);
            });
Route::get('/metalltechnik-jobs', function () {
                return view('templates.karriere')->with(['meta_title' => 'Metalltechnik Jobs – Bad Teinach / Calw (Nordschwarzwald)', 'meta_description' => 'Metalltechnik Jobs in Bad Teinach / Calw im Nordschwarzwald ✓ Offene Stellenangebote ☆ Top Arbeitgeber ➨ Jetzt bei Irion bewerben!', 'h1' => 'Metalltechnik Jobs – Bad Teinach / Calw (Nordschwarzwald)', 'seo1' => '', 'seo2' => '<p>Ist der Job in der Nähe? <ul><li>	72213	Altensteig: Auto 23 min | Bahn 30 Min | Rad 1 h 04 min</li><li>	75378	Bad Liebenzell: Auto 22 min | Bahn 22 Min | Rad 46 min</li><li>	71034	Böblingen: Auto 29 min | Bahn 43 Min | Rad 1 h 21 min</li><li>	75365	Calw: Auto 7 min | Bahn 7 Min | Rad 17 min</li><li>	71083	Herrenberg: Auto 23 min | Bahn 31 Min | Rad 1 h 04 min</li><li>	71063	Sindelfingen: Auto 29 min | Bahn 43 Min | Rad 1 h 24 min</li><li>	</li></ul>Ist der Job in der Nähe? 
</p><p>•	72213	Altensteig: Auto 23 min | Bahn 30 Min | Rad 1 h 04 min
</p><p>•	75378	Bad Liebenzell: Auto 22 min | Bahn 22 Min | Rad 46 min
</p><p>•	71034	Böblingen: Auto 29 min | Bahn 43 Min | Rad 1 h 21 min
</p><p>•	75365	Calw: Auto 7 min | Bahn 7 Min | Rad 17 min
</p><p>•	71083	Herrenberg: Auto 23 min | Bahn 31 Min | Rad 1 h 04 min
</p><p>•	71063	Sindelfingen: Auto 29 min | Bahn 43 Min | Rad 1 h 24 min
</p><p>•	72218	Wildberg: Auto 10 min | Bahn 12 Min | Rad 30 min</p>', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/metalltechnik-jobs />
<link rel="alternate" hreflang="x-default" href=/en# />
<link rel="alternate" hreflang="en" href=/en# />
', 'submenu' => '<strong><a class="mt-1" href="/metalltechnik-jobs/industriemechaniker-ausbildung-bad-teinach-nordschwarzwald">Industriemechaniker Ausbildung</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/metalltechnik-jobs/kauffrau-fuer-bueromanagement-stellenangebot-bad-teinach-nordschwarzwald">Kauffrau für Büromanagement</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/metalltechnik-jobs/schweisser-jobs-bad-teinach-nordschwarzwald">Schweißer</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/metalltechnik-jobs/assistentin-der-geschaeftsfuehrung-stellenangebot-bad-teinach-nordschwarzwald">Assistentin der Geschäftsführung</a></strong>
                                <ul></ul>', 'img_src' => 'metalltechnik-jobs.webp', 'img_title' => 'Metalltechnik Jobs – Bad Teinach / Calw (Nordschwarzwald)', 'img_alt' => 'Metalltechnik Jobs – Bad Teinach / Calw (Nordschwarzwald)']);
            });
Route::get('/en#', function () {
                return view('templates.karriere')->with(['meta_title' => '', 'meta_description' => '', 'h1' => '', 'seo1' => '', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/metalltechnik-jobs />
<link rel="alternate" hreflang="x-default" href=/en# />
<link rel="alternate" hreflang="en" href=/en# />
', 'submenu' => '<strong><a class="mt-1" href=""></a></strong>
                                <ul></ul><strong><a class="mt-1" href=""></a></strong>
                                <ul></ul><strong><a class="mt-1" href="/en/welding-jobs-in-germany-for-english-speakers-bad-teinach-black-forest">Welder</a></strong>
                                <ul></ul><strong><a class="mt-1" href=""></a></strong>
                                <ul></ul>', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/metalltechnik-jobs/industriemechaniker-ausbildung-bad-teinach-nordschwarzwald', function () {
                return view('templates.karriere-detail')->with(['meta_title' => 'Industriemechaniker Ausbildung – Bad Teinach / Calw', 'meta_description' => 'Ausbildung zum Industriemechaniker ✓ Ausbildungsplatz in Bad Teinach / Calw im Nordschwarzwald ☆ Top Arbeitgeber ➨ Jetzt bewerben!', 'h1' => 'Industrie&shy;mechaniker Ausbildung in Bad Teinach / Calw Stammheim im Nordschwarzwald', 'seo1' => '<h2>Ausbildung zum Industriemechaniker (m/w/d) bei Irion</h2> <p>An unserem Standort in Bad Teinach / Calw Stammheim im Nordschwarzwald bieten wir interessante Ausbildungsplätze im Bereich Metalltechnik an.</p> <p>Insbesondere möchten wir aktuell den Ausbildungsplatz als Industriemechaniker (m/w/d) bei Irion besetzen. Bei der Ausbildung zum Industriemechaniker kannst Du Dich bei uns auf die Zusammenarbeit mit netten Kollegen und auf abwechslungsreiche Tätigkeiten freuen.</p>', 'seo2' => '<h2>Ausbildung bei Irion</h2> <ul> <li>Möchtest Du immer verstehen, wie das große Ganze funktioniert?</li> <li>Hast Du exzellente Noten in Mathe & Physik?</li> <li>Motivieren Dich technische Aufgaben?</li> <li>Hast Du Freude an der Lösung dieser technischen Aufgaben?</li> <li>Machen Dir Berechnungen von Geometrien Spaß?</li> <li>Kannst Du dir vorstellen Industriemaschinen zu programmieren?</li> <li>Traust Du dich Entscheidungen zu treffen?</li> <li>Schlägt Dein Herz schneller, wenn Du Produkte maßgeblich (mit)gestalten kannst?</li> <li>Bist Du jemand, der mit Gleichgesinnten Dinge bewegen will?</li> <li>Hast Du schon das eine oder andere Ziel erreicht, das Du dir gesteckt hast?</li> <li>Hast Du Interesse neue Dinge in Angriff zu nehmen?</li> <li>Stehst Du morgens gerne auf und freust Dich auf DEINEN Tag?</li> <li>Magst Du schöne Dinge und achtest Du auf diese?</li> </ul> <b>Mehr als 6 x Ja?</b> Dann melde Dich bei uns! Gerne auch telefonisch. <h2>Dein Mehrwert</h2> <ul> <li>Wir bieten die Möglichkeit der Nutzung von Dienstunterkünften</li> <li>Breit gefächerte Ausbildung incl. Buddy System</li> <li>Langfristige Perspektive: Bisher wurden alle unsere Azubis übernommen</li> <li>Ausgezeichnetes, etabliertes Produkt bei namhaften Kunden</li> <li>Möglichkeit der Weiterentwicklung entsprechend Deines eigenen Einsatzes</li> <li>Junges Management mit kurzem Kommunikationsweg</li> <li>Hoher Stellenwert einer Kultur der konstruktiven Zusammenarbeit</li> </ul> <h2>Grundsätzliches</h2> <ul> <li>Passable Deutschkenntnisse</li> <li>Real- bzw. Hauptschulabschluss (Mathe & Physik 1 oder max. 2)</li> <li>Wohnsitz im Umkreis von 35 km bzw. Bereitschaft vor Ort zu wohnen</li> <li>Sehr gute öffentliche Verkehrsanbindung (Kulturbahn Pforzheim <-> Horb)</li> <li>Berufsschule Industriemechaniker & Metall: Johann-Georg-Doertenbach-Schule Calw</li> <li>Berufsschule Zerspanungsmechaniker: Horb am Neckar</li> </ul> <h2>Qualifikation</h2> Mathe / Physik Note 1 oder 2, Studienabbrecher willkommen', 'script' => '<script type="application/ld+json"> { "@context": "http://schema.org/", "@type": "JobPosting", "title" : "Industriemechaniker Ausbildung in Bad Teinach / Calw Stammheim im Nordschwarzwald", "description" : "<p>Ausbildung zum Industriemechaniker (m/w/d) bei Irion.</p> <p>An unserem Standort in Bad Teinach / Calw Stammheim im Nordschwarzwald bieten wir interessante Ausbildungsplätze im Bereich Metalltechnik an.</p> <p>Insbesondere möchten wir aktuell den Ausbildungsplatz als Industriemechaniker (m/w/d) bei Irion besetzen. Bei der Ausbildung zum Industriemechaniker kannst Du Dich bei uns auf die Zusammenarbeit mit netten Kollegen und auf abwechslungsreiche Tätigkeiten freuen.</p> <p>AUSBILDUNG BEI IRION</p> <li>Möchtest Du immer verstehen, wie das große Ganze funktioniert?</li> <li>Hast Du exzellente Noten in Mathe & Physik?</li> <li>Motivieren Dich technische Aufgaben?</li> <li>Hast Du Freude an der Lösung dieser technischen Aufgaben?</li> <li>Machen Dir Berechnungen von Geometrien Spaß?Kannst Du dir vorstellen </li> <li>Industriemaschinen zu programmieren?</li> <li>Traust Du dich Entscheidungen zu treffen?</li> <li>Schlägt Dein Herz schneller, wenn Du Produkte maßgeblich (mit)gestalten kannst?</li> <li>Bist Du jemand, der mit Gleichgesinnten Dinge bewegen will?</li> <li>Hast Du schon das eine oder andere Ziel erreicht, das Du dir gesteckt hast?</li> <li>Hast Du Interesse neue Dinge in Angriff zu nehmen?</li> <li>Stehst Du morgens gerne auf und freust Dich auf DEINEN Tag?</li> <li>Magst Du schöne Dinge und achtest Du auf diese?</li> <li>Mehr als 6 x Ja? Dann melde Dich bei uns! Gerne auch telefonisch.</li> </ul> <p>DEIN MEHRWERT</p> <ul> <li>Wir bieten die Möglichkeit der Nutzung von Dienstunterkünften</li> <li>Breit gefächerte Ausbildung incl. Buddy System</li> <li>Langfristige Perspektive: Bisher wurden alle unsere Azubis übernommen</li> <li>Ausgezeichnetes, etabliertes Produkt bei namhaften Kunden</li> <li>Möglichkeit der Weiterentwicklung entsprechend Deines eigenen Einsatzes</li> <li>Junges Management mit kurzem Kommunikationsweg</li> <li>Hoher Stellenwert einer Kultur der konstruktiven Zusammenarbeit</li> </ul> <p>GRUNDSÄTZLICHES</p> <ul> <li>Passable Deutschkenntnisse</li> <li>Real- bzw. Hauptschulabschluss (Mathe & Physik 1 oder max. 2)</li> <li>Wohnsitz im Umkreis von 35 km bzw. Bereitschaft vor Ort zu wohnen</li> <li>Sehr gute öffentliche Verkehrsanbindung (Kulturbahn Pforzheim <-> Horb)</li> <li>Berufsschule Industriemechaniker & Metall: Johann-Georg-Doertenbach-Schule Calw</li> <li>Berufsschule Zerspanungsmechaniker: Horb am Neckar</li> </ul> <p>QUALIFIKATION</p> <ul> <li>Mathe / Physik Note 1 oder 2, Studienabbrecher willkommen </li> </ul> <p>ÜBER IRION</p> <p>Irion besteht seit 1929 und ist ein eigentümergeführtes Industrieunternehmen aus dem Schwarzwald. Unsere Spezialität sind zerspante und beschichtete Schweißbaugruppen (von 30 bis 5.000 Stück) inkl. mech. & elektr. Montage sowie IBN. Roboterschweißen, Wartung, zerspante, lackierte und gehärtete Schweißteile. </p> <p>Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision. Aktuell beschäftigt die IRION GmbH etwa 40 motivierte Köpfe in Verwaltung und Produktion. Die Produktionsfläche beträgt über 3.500 qm.</p> <p>Wir übernehmen gesellschaftliche Verantwortung. Umweltgerechtes Handeln ist für uns selbstverständlich. So erzeugen wir zum Beispiel über 60% unseres benötigten Stroms selbst aus erneuerbarer Energie und versorgen zusätzlich 200 Haushalte.</p> <p>IST DER JOB IN DER NÄHE?</p> <p>Wir bieten eine Anbindung an die Kulturbahn „Hermann Hesse Bahn“ (Pforzheim-Horb) mit direkter Verbindungen Nagold, Calw, Wildberg, usw. (Einsparung von bis 500€ durch den Wegfall eines eigenen Fahrzeugs).</p> <ul> <li>72213 Altensteig: Auto 23 min | Bahn 30 Min | Rad 1 h 04 min</li> <li>75378 Bad Liebenzell: Auto 22 min | Bahn 22 Min | Rad 46 min</li> <li>71034 Böblingen: Auto 29 min | Bahn 43 Min | Rad 1 h 21 min</li> <li>75365 Calw: Auto 7 min | Bahn 7 Min | Rad 17 min</li> <li>71083 Herrenberg: Auto 23 min | Bahn 31 Min | Rad 1 h 04 min</li> <li>71063 Sindelfingen: Auto 29 min | Bahn 43 Min | Rad 1 h 24 min</li> <li>72218 Wildberg: Auto 10 min | Bahn 12 Min | Rad 30 min</li> </ul> <p>WIR FREUEN UNS DARAUF, DICH KENNENZULERNEN!</p> <p>Der direkte Ansprechpartner für Fragen rund um die Stellenausschreibungen ist Herr Bernd Fleissinger.</p> <p>Dein Ansprechpartner</p> <p>Dipl.-Ing. (FH) Bernd Fleissinger</p> <p>Geschäftsführer</p> <p>Irion GmbH</p> <p>Station Teinach 21</p> <p>75385 Bad Teinach</p> <p>Tel.: +49 7053 188 995 24</p> <p>Mobil: +49 160 9644 7514</p> <p>E-Mail: bfleissinger@irion.de</p> ", "datePosted" : "2023-09-14", "hiringOrganization": { "@type": "Organization", "sameAs": "https://irion.de/metalltechnik-jobs/industriemechaniker-ausbildung-bad-teinach-nordschwarzwald/", "name": "Irion" }, "employmentType": ["FULL_TIME"], "jobLocation": { "@type": "Place", "address": { "streetAddress": "Station Teinach 21", "addressLocality": "Bad Teinach", "addressRegion": "Baden-Württemberg", "postalCode": "75385", "addressCountry": "Germany" } } } </script>', 'hreflang' => '<link rel="alternate" hreflang="de" href=/metalltechnik-jobs/industriemechaniker-ausbildung-bad-teinach-nordschwarzwald />
', 'submenu' => '', 'img_src' => 'industriemechaniker-ausbildung-bad-teinach-nordschwarzwald.webp', 'img_title' => 'Industriemechaniker Ausbildung in Bad Teinach / Calw Stammheim im Nordschwarzwald', 'img_alt' => 'Industriemechaniker Ausbildung in Bad Teinach / Calw Stammheim im Nordschwarzwald']);
            });
Route::get('/metalltechnik-jobs/kauffrau-fuer-bueromanagement-stellenangebot-bad-teinach-nordschwarzwald', function () {
                return view('templates.karriere-detail')->with(['meta_title' => 'Kauffrau für Büromanagement Stellenangebot – Bad Teinach', 'meta_description' => 'Stellenangebot Kauffrau für Büromanagement ✓ Job in Bad Teinach / Calw im Nordschwarzwald ☆ Top Arbeitgeber ➨ Jetzt bewerben!', 'h1' => 'Kauffrau für Büromanagement Stellenangebot in Bad Teinach / Calw Stammheim im Nordschwarzwald', 'seo1' => '<h2>Kauffrau für Büromanagement Jobs (m/w/d) bei Irion</h2> <p>An unserem Standort in Bad Teinach / Calw Stammheim im Nordschwarzwald bieten wir interessante Jobs für Fachkräfte im Bereich Büromanagement.</p> <p>Insbesondere möchten wir aktuell das Stellenangebot als Kauffrau für Büromanagement (m/w/d) in Vollzeit bei Irion besetzen. Mitarbeiter im Büromanagement können sich bei uns auf die Zusammenarbeit mit netten Kolleginnen und auf abwechslungsreiche Tätigkeiten freuen.</p>', 'seo2' => '<h2>Qualifikation</h2> Unsere Stellenanzeige richtet sich an: <ul> <li>Azubis</li> <li>Quereinsteiger</li> <li>Abiturienten</li> <li>Akademiker</li> <li>Studienabbrecher</li> <li>Bürokauffrauen</li> <li>Industriekauffrauen</li> </ul> <h2>Was wir bieten</h2> <ul> <li>Homeoffice nach Abstimmung möglich</li></ul> Weiterbildungen / Spezialisierungen <ul> <li>Betriebswirt/in (Fachschule) - allgemeine Betriebswirtschaft</li> <li>Betriebswirt/in (Fachschule) - Rechnungswesen</li> <li>Bilanzbuchhalter/in/Bachelor Professional Bilanzbuchhaltung</li> <li>Controller/in</li> <li>FiBU Finanzbuchhaltung</li> <li>KoRe Kostenrechnung</li> <li>Fachwirt/in - Verwaltung</li> <li>Betriebswirt/in (Hochschule) - Unternehmensführung, Management</li> </ul> Bezahlte Qualifizierung bei langfristiger Bindung <ul> <li>Sprachkurs</li> <li>Integrationskurs</li> <li>Weiterbildung</li> <li>Umschulung</li> </ul>', 'script' => '<script type="application/ld+json">
{
	"@context": "http://schema.org/",
	"@type": "JobPosting",
	"title" : "Kauffrau für Büromanagement Stellenangebot in Bad Teinach / Calw Stammheim im Nordschwarzwald",
	"description" : "<p>Kauffrau für Büromanagement Jobs (m/w/d) bei Irion.</p>
	
<p>An unserem Standort in Bad Teinach / Calw Stammheim im Nordschwarzwald bieten wir interessante Jobs für Fachkräfte im Bereich Büromanagement.</p>

<p>Insbesondere möchten wir aktuell das Stellenangebot als Kauffrau für Büromanagement (m/w/d) in Vollzeit bei Irion besetzen. Mitarbeiter im Büromanagement können sich bei uns auf die Zusammenarbeit mit netten Kolleginnen und auf abwechslungsreiche Tätigkeiten freuen.</p>

<p>QUALIFIKATION</p>
<p>Unsere Stellenanzeige richtet sich an</p>
<ul>
<li>Azubis</li>
<li>Quereinsteiger</li>
<li>Abiturienten</li>
<li>Akademiker</li>
<li>Studienabbrecher</li>
<li>Bürokauffrauen</li>
<li>Industriekauffrauen</li>
</ul>

<p>WAS WIR BIETEN</p>
<ul>
<li>Homeoffice nach Abstimmung möglich</li>
</ul>	

<p>Weiterbildungen / Spezialisierungen</p>
<ul>
<li>Betriebswirt/in (Fachschule) - allgemeine Betriebswirtschaft</li>
<li>Betriebswirt/in (Fachschule) - Rechnungswesen</li>
<li>Bilanzbuchhalter/in/Bachelor Professional Bilanzbuchhaltung</li>
<li>Controller/in</li>
<li>FiBU Finanzbuchhaltung</li>
<li>KoRe Kostenrechnung</li>
<li>Fachwirt/in - Verwaltung</li>
<li>Betriebswirt/in (Hochschule) - Unternehmensführung, Management</li>
</ul>	

<p>Bezahlte Qualifizierung bei langfristiger Bindung</p>
<ul>
<li>Sprachkurs</li>
<li>Integrationskurs</li>
<li>Weiterbildung</li>
<li>Umschulung</li>
</ul>	



<p>ÜBER IRION</p>

<p>Irion besteht seit 1929 und ist ein eigentümergeführtes Industrieunternehmen aus dem Schwarzwald. Unsere Spezialität sind zerspante und beschichtete Schweißbaugruppen (von 30 bis 5.000 Stück) inkl. mech. & elektr. Montage sowie IBN. Roboterschweißen, Wartung, zerspante, lackierte und gehärtete Schweißteile. </p>

<p>Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision. Aktuell beschäftigt die IRION GmbH etwa 40 motivierte Köpfe in Verwaltung und Produktion. Die Produktionsfläche beträgt über 3.500 qm.</p>

<p>Wir übernehmen gesellschaftliche Verantwortung. Umweltgerechtes Handeln ist für uns selbstverständlich. So erzeugen wir zum Beispiel über 60% unseres benötigten Stroms selbst aus erneuerbarer Energie und versorgen zusätzlich 200 Haushalte.</p>


<p>IST DER JOB IN DER NÄHE?</p>

<p>Wir bieten eine Anbindung an die Kulturbahn „Hermann Hesse Bahn“ (Pforzheim-Horb) mit direkter Verbindungen Nagold, Calw, Wildberg, usw. (Einsparung von bis 500€ durch den Wegfall eines eigenen Fahrzeugs)</p>
<ul>
<li>72213 Altensteig: Auto 23 min | Bahn 30 Min | Rad 1 h 04 min</li>
<li>75378 Bad Liebenzell: Auto 22 min | Bahn 22 Min | Rad 46 min</li>
<li>71034 Böblingen: Auto 29 min | Bahn 43 Min | Rad 1 h 21 min</li>
<li>75365 Calw: Auto 7 min | Bahn 7 Min | Rad 17 min</li>
<li>71083 Herrenberg: Auto 23 min | Bahn 31 Min | Rad 1 h 04 min</li>
<li>71063 Sindelfingen: Auto 29 min | Bahn 43 Min | Rad 1 h 24 min</li>
<li>72218 Wildberg: Auto 10 min | Bahn 12 Min | Rad 30 min</li>
</ul>	

<p>WIR FREUEN UNS DARAUF, SIE KENNENZULERNEN!</p>
<p>Der direkte Ansprechpartner für Fragen rund um die Stellenausschreibungen ist Herr Bernd Fleissinger.</p>

<p>Ihr Ansprechpartner</p>
<p>Dipl.-Ing. (FH) Bernd Fleissinger</p>
<p>Geschäftsführer</p>
<p>Irion GmbH</p>
<p>Station Teinach 21</p>
<p>75385 Bad Teinach</p>
<p>Tel.: +49 7053 188 995 24</p>
<p>Mobil: +49 160 9644 7514</p>
<p>E-Mail: bfleissinger@irion.de</p>
		",
	"datePosted" : "2023-09-14",
	"hiringOrganization": {
		"@type": "Organization",
		"sameAs": "https://irion.de/metalltechnik-jobs/kauffrau-fuer-bueromanagement-stellenangebot-bad-teinach-nordschwarzwald/",
		"name": "Irion"
	},
	"employmentType": ["FULL_TIME"],
	"jobLocation": {
		"@type": "Place",
		"address": {
			"streetAddress": "Station Teinach 21",
			"addressLocality": "Bad Teinach",
			"addressRegion": "Baden-Württemberg",
			"postalCode": "75385",
			"addressCountry": "Germany"
		}
	}
}
</script>', 'hreflang' => '<link rel="alternate" hreflang="de" href=/metalltechnik-jobs/kauffrau-fuer-bueromanagement-stellenangebot-bad-teinach-nordschwarzwald />
', 'submenu' => '', 'img_src' => 'kauffrau-fuer-bueromanagement-stellenangebot-bad-teinach-nordschwarzwald.webp', 'img_title' => 'Kauffrau für Büromanagement Stellenangebot in Bad Teinach / Calw Stammheim im Nordschwarzwald', 'img_alt' => 'Kauffrau für Büromanagement Stellenangebot in Bad Teinach / Calw Stammheim im Nordschwarzwald']);
            });
Route::get('/metalltechnik-jobs/schweisser-jobs-bad-teinach-nordschwarzwald', function () {
                return view('templates.karriere-detail')->with(['meta_title' => 'Schweißer Jobs – Stellenangebote in Bad Teinach / Calw', 'meta_description' => 'Schweißer Jobs bei Irion ✓ Stellenangebote in Bad Teinach / Calw im Nordschwarzwald ☆ Top Arbeitgeber seit 1926 ➨ Jetzt bewerben!', 'h1' => 'Schweißer Jobs in Bad Teinach / Calw Stammheim im Nordschwarzwald', 'seo1' => '<h2>Schweißer Stellenangebote (m/w/d) bei Irion</h2> <p>An unserem Standort in Bad Teinach / Calw Stammheim im Nordschwarzwald bieten wir interessante Jobs für Schweißfachkräfte.</p> <p>Insbesondere möchten wir aktuell das Stellenangebot als Schutzgasschweißer (WIG/MIG/MAG) (m/w/d) in Vollzeit bei Irion besetzen. Schweißprofis können sich bei uns auf die Zusammenarbeit mit netten Kollegen und auf abwechslungsreiche Tätigkeiten freuen.</p>', 'seo2' => '<h2>Aufgaben</h2> Fertigung von verschiedenen Schweißkonstruktionen mittels diverser Techniken <h2>Qualifikation</h2> <ul> <li>Berufserfahrung als Schweißer</li> <li>Anfänger mit guten Handfertigkeiten</li> </ul> <h2>Was wir bieten</h2> <ul> <li>Wir bieten die Möglichkeit der Nutzung von Dienstunterkünften</li> <li>Langfristige Perspektive</li> <li>Ausgezeichnetes, etabliertes Produkt bei namhaften Kunden</li> <li>Möglichkeit der Weiterentwicklung entsprechend Deines eigenen Einsatzes</li> <li>Junges Management mit kurzem Kommunikationsweg</li> <li>Hoher Stellenwert einer Kultur der konstruktiven Zusammenarbeit</li> Bezahlte Qualifizierung bei langfristiger Bindung <li>Sprachkurs</li> <li>Integrationskurs</li> <li>Weiterbildung</li> <li>Umschulung</li></ul>', 'script' => '<script type="application/ld+json"> { "@context": "http://schema.org/", "@type": "JobPosting", "title" : "Schweißer Jobs in Bad Teinach / Calw Stammheim im Nordschwarzwald", "description" : "<p>Schweißer Stellenangebote (m/w/d) bei Irion.</p> <p>An unserem Standort in Bad Teinach / Calw Stammheim im Nordschwarzwald bieten wir interessante Jobs für Schweißfachkräfte.</p> <p>Insbesondere möchten wir aktuell das Stellenangebot als Schutzgasschweißer (WIG/MIG/MAG) (m/w/d) in Vollzeit bei Irion besetzen. Schweißprofis können sich bei uns auf die Zusammenarbeit mit netten Kollegen und auf abwechslungsreiche Tätigkeiten freuen.</p> <p>AUFGABEN</p> <ul> <li>Fertigung von verschiedenen Schweißkonstruktionen mittels diverser Techniken</li> </ul> <p>QUALIFIKATION</p> <ul> <li>Berufserfahrung als Schweißer</li> <li>Anfänger mit guten Handfertigkeiten</li> </ul> <p>WAS WIR BIETEN</p> <ul> <li>Wir bieten die Möglichkeit der Nutzung von Dienstunterkünften</li> <li>Langfristige Perspektive</li> <li>Ausgezeichnetes, etabliertes Produkt bei namhaften Kunden</li> <li>Möglichkeit der Weiterentwicklung entsprechend Deines eigenen Einsatzes</li> <li>Junges Management mit kurzem Kommunikationsweg</li> <li>Hoher Stellenwert einer Kultur der konstruktiven Zusammenarbeit</li> </ul> <p>BEZAHLTE QUALIFIZIERUNG BEI LANGFRISTIGER BINDUNG</p> <ul> <li>Sprachkurs</li> <li>Integrationskurs</li> <li>Weiterbildung</li> <li>Umschulung</li> </ul> <p>ÜBER IRION</p> <p>Irion besteht seit 1929 und ist ein eigentümergeführtes Industrieunternehmen aus dem Schwarzwald. Unsere Spezialität sind zerspante und beschichtete Schweißbaugruppen (von 30 bis 5.000 Stück) inkl. mech. & elektr. Montage sowie IBN. Roboterschweißen, Wartung, zerspante, lackierte und gehärtete Schweißteile. </p> <p>Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision. Aktuell beschäftigt die IRION GmbH etwa 40 motivierte Köpfe in Verwaltung und Produktion. Die Produktionsfläche beträgt über 3.500 qm.</p> <p>Wir übernehmen gesellschaftliche Verantwortung. Umweltgerechtes Handeln ist für uns selbstverständlich. So erzeugen wir zum Beispiel über 60% unseres benötigten Stroms selbst aus erneuerbarer Energie und versorgen zusätzlich 200 Haushalte.</p> <p>IST DER JOB IN DER NÄHE?</p> <p>Wir bieten eine Anbindung an die Kulturbahn „Hermann Hesse Bahn“ (Pforzheim-Horb) mit direkter Verbindungen Nagold, Calw, Wildberg, usw. (Einsparung von bis 500€ durch den Wegfall eines eigenen Fahrzeugs)</p> <ul> <li>72213 Altensteig: Auto 23 min | Bahn 30 Min | Rad 1 h 04 min</li> <li>75378 Bad Liebenzell: Auto 22 min | Bahn 22 Min | Rad 46 min</li> <li>71034 Böblingen: Auto 29 min | Bahn 43 Min | Rad 1 h 21 min</li> <li>75365 Calw: Auto 7 min | Bahn 7 Min | Rad 17 min</li> <li>71083 Herrenberg: Auto 23 min | Bahn 31 Min | Rad 1 h 04 min</li> <li>71063 Sindelfingen: Auto 29 min | Bahn 43 Min | Rad 1 h 24 min</li> <li>72218 Wildberg: Auto 10 min | Bahn 12 Min | Rad 30 min</li> </ul> <p>WIR FREUEN UNS DARAUF, SIE KENNENZULERNEN!</p> <p>Der direkte Ansprechpartner für Fragen rund um die Stellenausschreibungen ist Herr Bernd Fleissinger.</p> <p>Ihr Ansprechpartner</p> <p>Dipl.-Ing. (FH) Bernd Fleissinger</p> <p>Geschäftsführer</p> <p>Irion GmbH</p> <p>Station Teinach 21</p> <p>75385 Bad Teinach</p> <p>Tel.: +49 7053 188 995 24</p> <p>Mobil: +49 160 9644 7514</p> <p>E-Mail: bfleissinger@irion.de</p> ", "datePosted" : "2023-09-14", "hiringOrganization": { "@type": "Organization", "sameAs": "https://irion.de/metalltechnik-jobs/schweisser-jobs-bad-teinach-nordschwarzwald/", "name": "Irion" }, "employmentType": ["FULL_TIME"], "jobLocation": { "@type": "Place", "address": { "streetAddress": "Station Teinach 21", "addressLocality": "Bad Teinach", "addressRegion": "Baden-Württemberg", "postalCode": "75385", "addressCountry": "Germany" } } } </script>', 'hreflang' => '<link rel="alternate" hreflang="de" href=/metalltechnik-jobs/schweisser-jobs-bad-teinach-nordschwarzwald />
<link rel="alternate" hreflang="x-default" href=/en/welding-jobs-in-germany-for-english-speakers-bad-teinach-black-forest />
<link rel="alternate" hreflang="en" href=/en/welding-jobs-in-germany-for-english-speakers-bad-teinach-black-forest />
', 'submenu' => '', 'img_src' => 'schweisser-jobs-bad-teinach-nordschwarzwald.webp', 'img_title' => 'Schweißer Jobs in Bad Teinach / Calw im Nordschwarzwald', 'img_alt' => 'Schweißer Jobs in Bad Teinach / Calw im Nordschwarzwald']);
            });
Route::get('/en/welding-jobs-in-germany-for-english-speakers-bad-teinach-black-forest', function () {
                return view('templates.karriere-detail')->with(['meta_title' => 'Welding jobs in Germany for English speakers in Bad Teinach', 'meta_description' => 'Welding jobs in Germany for English speakers ✓ Job in Bad Teinach / Calw in the Northern Black Forest ☆ Top employer ➨ Apply now!', 'h1' => 'Welding jobs in Germany for English speakers in Bad Teinach / Calw in the Northern Black Forest', 'seo1' => '<h2>Welding job offer in Germany for English speakers (m/f/d) at Irion</h2> <p>At our location in Bad Teinach / Calw Stammheim in the northern Black Forest, we offer interesting jobs in the field of welding.</p> <p>In particular, we fill the vacancy for a welder (TIG/MIG/MAG) (m/f/d) in full-time at Irion. Welding specialists can look forward to working with nice colleagues and to varied activities.</p>', 'seo2' => '<h2>Responsibilities</h2> Manufacture of various welded constructions using different techniques <h2>Qualification</h2> <ul> <li>Work experience as a welder</li> <li>Beginners with talent in manual skills</li> </ul> <h2>What we offer</h2> <ul> <li>We provide company accommodation.</li> <li>Long-term perspective  with a wide range of  education and training</li> <li>Excellent, established products for well-known customers</li> <li>Possibility of further development for committed employees</li> <li>Open door policy</li> <li>Team oriented family business</li> </ul> Paid qualification with long-term commitment <ul> <li>Language course</li> <li>Integration course</li> <li>Continuing education</li> <li>Retraining</li> </ul>', 'script' => '<script type="application/ld+json">
{
	"@context": "http://schema.org/",
	"@type": "JobPosting",
	"title" : "Welding jobs in Germany for English speakers in Bad Teinach / Calw in the Northern Black Forest",
	"description" : "<p>Welding job offer in Germany for English speakers (m/f/d) at Irion.</p>
	
<p>At our location in Bad Teinach / Calw Stammheim in the northern Black Forest, we offer interesting jobs in the field of welding.</p>

<p>In particular, we fill the vacancy for a welder (TIG/MIG/MAG) (m/f/d) in full-time at Irion. Welding specialists can look forward to working with nice colleagues and to varied activities.</p>

<p>RESPONSIBILITIES</p>
<ul>
<li>Manufacture of various welded constructions using different techniques</li>
</ul>

<p>QUALIFICATION</p>
<ul>
<li>Work experience as a welder</li>
<li>Beginners with good manual skills</li>
</ul>

<p>WHAT WE OFFER</p>
<ul>
<li>We offer the possibility of using service accommodation</li>
<li>Long-term perspective</li>
<li>Excellent, established product with well-known customers</li>
<li>Possibility of further development according to your own commitment</li>
<li>Young management with a short communication path</li>
<li>High value placed on a culture of constructive cooperation</li>
</ul>	

<p>PAID QUALIFICATION WITH LONG-TERM COMMITMENT </p>
<ul>
<li>Language course</li>
<li>Integration course</li>
<li>Continuing education</li>
<li>Retraining</li>
</ul>	



<p>ABOUT IRION</p>

<p>Irion has been in existence since 1929 and is an owner-managed industrial company from the Black Forest. Our speciality is machined and coated welded assemblies (from 30 to 5000 pieces) incl. mech. & electr. assembly as well as integration. Robot welding, maintenance, machined, painted and hardened welded parts.</p>

<p>We stand for consistently high quality, responsibility and precision. Currently, IRION GmbH employs about 40 motivated employees in administration and production. The production area is more than 3500 sqm.</p>

<p>We take social responsibility. Acting in an environmentally friendly way is a matter of course for us. We generate over 60% of our required electricity ourselves from renewable energy and supply an additional 200 households.</p>


<p>IS THE JOB NEARBY?</p>

<p>We offer a connection to the cultural railway „Hermann Hesse Bahn“ (Pforzheim-Horb) with direct connections Nagold, Calw, Wildberg, etc. (saving up to 500€ by not having to own a vehicle).</p>
<ul>
<li>72213 Altensteig: car 23 min | train 30 min | bike 1 h 04 min</li>
<li>75378 Bad Liebenzell: car 22 min | train 22 min | bike 46 min</li>
<li>71034 Böblingen: car 29 min | train 43 min | bike 1 h 21 min</li>
<li>75365 Calw: car 7 min | train 7 min | bike 17 min</li>
<li>71083 Herrenberg: car 23 min | train 31 min | bike 1 h 04 min</li>
<li>71063 Sindelfingen: car 29 min | train 43 min | bike 1 h 24 mi</li>
<li>72218 Wildberg: car 10 min | train 12 min | bike 30 min</li>
</ul>	

<p>WE LOOK FORWARD TO MEETING YOU!</p>
<p>If you’re interested get in contact with:</p>

<p>Your contact</p>
<p>Dipl.-Ing. (FH) Bernd Fleissinger</p>
<p>Managing director</p>
<p>Irion GmbH</p>
<p>Station Teinach 21</p>
<p>75385 Bad Teinach</p>
<p>Tel.: +49 7053 188 995 24</p>
<p>Mobil: +49 160 9644 7514</p>
<p>E-Mail: bfleissinger@irion.de</p>
		",
	"datePosted" : "2023-09-14",
	"hiringOrganization": {
		"@type": "Organization",
		"sameAs": "https://irion.de/en/job-offers/welding-jobs-in-germany-for-english-speakers-bad-teinach-black-forest/",
		"name": "Irion"
	},
	"employmentType": ["FULL_TIME"],
	"jobLocation": {
		"@type": "Place",
		"address": {
			"streetAddress": "Station Teinach 21",
			"addressLocality": "Bad Teinach",
			"addressRegion": "Baden-Württemberg",
			"postalCode": "75385",
			"addressCountry": "Germany"
		}
	}
}
</script>', 'hreflang' => '<link rel="alternate" hreflang="de" href=/metalltechnik-jobs/schweisser-jobs-bad-teinach-nordschwarzwald />
<link rel="alternate" hreflang="x-default" href=/en/welding-jobs-in-germany-for-english-speakers-bad-teinach-black-forest />
<link rel="alternate" hreflang="en" href=/en/welding-jobs-in-germany-for-english-speakers-bad-teinach-black-forest />
', 'submenu' => '', 'img_src' => 'welding-jobs-in-germany-for-english-speakers-bad-teinach-black-forest.webp', 'img_title' => 'Welding jobs in Germany for English speakers in Bad Teinach / Calw in the Northern Black Forest', 'img_alt' => 'Welding jobs in Germany for English speakers in Bad Teinach / Calw in the Northern Black Forest']);
            });
Route::get('/metalltechnik-jobs/assistentin-der-geschaeftsfuehrung-stellenangebot-bad-teinach-nordschwarzwald', function () {
                return view('templates.karriere-detail')->with(['meta_title' => 'Assistentin der Geschäftsführung Stellenangebot – Bad Teinach', 'meta_description' => 'Assistentin der Geschäftsführung bei Irion ✓ Job in Bad Teinach / Calw im Nordschwarzwald ☆ Top Arbeitgeber ➨ Jetzt bewerben!', 'h1' => 'Assistentin der Geschäftsführung Stellenangebot in Bad Teinach / Calw Stammheim im Nordschwarzwald', 'seo1' => '<h2>Assistenz der Geschäftsführung Jobs (m/w/d) bei Irion</h2> <p>An unserem Standort in Bad Teinach / Calw Stammheim im Nordschwarzwald bieten wir interessante Jobs für die Assistenz der Geschäftsführung.</p> <p>Insbesondere möchten wir aktuell das Stellenangebot als Assistentin der Geschäftsführung (m/w/d) bei Irion besetzen. Assistenten der Geschäftsführung können sich bei uns auf die Zusammenarbeit mit netten Kolleginnen und auf abwechslungsreiche Tätigkeiten freuen.</p>', 'seo2' => '<h2>Deine Aufgaben</h2> Selbständige Personen erwartet in unserem Team ein spannendes und erfüllendes Aufgabengebiet mit vielen Freiheiten und Gestaltungsmöglichkeiten. Seien Sie nah dran an der Unternehmensführung: <ul> <li>Assistenz d. Geschäftsführung</li> <li>Abwicklung Gehaltsabrechnung an Steuerbüro</li> <li>Vorbereitende Finanzbuchhaltung / Kostenrechnung</li> <li>Rechnungslegung / Rechnungsprüfung</li> <li>Arbeitszeitverwaltung / Aufzeichnung</li> <li>Angebotserstellung / Bestellungen / Lieferscheine</li> <li>Disposition (LKWs)</li> <li>Administration / Organisation (Fuhrpark, Personal, etc.)</li> <li>Claim Management</li> </ul> <h2>Dein Profil</h2> <ul> <li>Organisationstalent</li> <li>Ausgebildete Bürokauffrau (mit und ohne Erfahrung), Industriekauffrau, Kauffrau f. Büromgmt.</li> <li>Abitur (optional)</li> <li>Studienabbrecher (BWL, VWL, etc.)</li> <li>Studium (zB Kommunikationswissenschaften, Management, BWL, etc.)</li> </ul>', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/metalltechnik-jobs/assistentin-der-geschaeftsfuehrung-stellenangebot-bad-teinach-nordschwarzwald />
', 'submenu' => '', 'img_src' => 'assistentin-der-geschaeftsfuehrung-stellenangebot-bad-teinach-nordschwarzwald.webp', 'img_title' => 'Assistentin der Geschäftsführung Stellenangebot in Bad Teinach / Calw Stammheim im Nordschwarzwald', 'img_alt' => 'Assistentin der Geschäftsführung Stellenangebot in Bad Teinach / Calw Stammheim im Nordschwarzwald']);
            });
Route::get('/schweissunternehmen', function () {
                return view('templates.unternehmen')->with(['meta_title' => 'Schweißunternehmen – Qualität von IRION seit 1926!', 'meta_description' => 'Das Schweißunternehmen seit 1926 ✓ Unsere Partner ☆ Referenzen ☆ Historie ☆ Zahlen, Daten, Fakten ➨ Jetzt informieren!', 'h1' => 'Das Schweiß&shy;unternehmen IRION', 'seo1' => 'Text im Word-Dokument "SEO-Text Schweißunternehmen"', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweissunternehmen />
<link rel="alternate" hreflang="en-US" href=/us/welding-company />
<link rel="alternate" hreflang="x-default" href=/en/industrial-welding-services />
<link rel="alternate" hreflang="en" href=/en/industrial-welding-services />
', 'submenu' => '<strong><a class="mt-1" href="/management">Management</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/schweissunternehmen/zertifikate">Qualität</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/schweissunternehmen/en-1090-zertifizierte-betriebe">DIN EN 1090-2:2018 EXC3 nach EN 1090-2</a></li><li class="my-4 my-lg-1"><a href="/schweissunternehmen/konstante-schweissqualitaet">DIN EN ISO 3834-2:2021</a></li><li class="my-4 my-lg-1"><a href="/schweissunternehmen/qualitaetssicherung-schweissen">ISO 9001:2015</a></li></ul><strong><a class="mt-1" href="#">Standorte</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/standorte/schweissbaugruppen-fertigung-in-deutschland">Deutschland</a></li><li class="my-4 my-lg-1"><a href="/standorte/auslandsfertigung-produktionsverlagerung-nach-osteuropa">Bosnien</a></li></ul><strong><a class="mt-1" href="/movwing">MovWing</a></strong>
                                <ul></ul><strong><a class="mt-1" href="/schweissberatung">Kontakt</a></strong>
                                <ul></ul>', 'img_src' => 'schweissunternehmen.webp', 'img_title' => 'Schweißunternehmen', 'img_alt' => 'Schweißunternehmen']);
            });
Route::get('/en/industrial-welding-services', function () {
                return view('templates.unternehmen')->with(['meta_title' => 'Industrial welding services – Top quality from Germany', 'meta_description' => 'Industrial welding services since 1926 ✓ Our partners ☆ References ☆ History ☆ Figures, data, facts ➨ Get all information here!', 'h1' => 'Industrial welding services', 'seo1' => '<p>For many years, our industrial welding services have been trusted ...
</p><p><ul><li>	Selected partners of the automotive industry</li><li>	Renowned steel and mechanical engineering companies</li><li>	Public institutions from art and culture</li><li>	Premium manufacturers from plant engineering & materials handling</li><li>		Leading manufacturers of agricultural and construction machinery
</li></ul></p><p>
</p><p>
</p><p>History
</p><p>
</p><p>The welding company was founded in 1926 by Mr. Matthäus Irion. In 1978, the Hahn family acquired Matthäus Irion GmbH & Co. KG. From 1986, Eberhardt Hahn, who studied mechanical engineering, managed the company, and in 2018 the two industrial engineers and aeronautical engineers Bernd Fleissinger and Stefan Tschirk took over the welding company.
</p><p>
</p><p>From 1979, the business area developed towards the production of transport and storage containers, primarily for the automotive industry. From the beginning of the 80s, the supply of the materials handling industry with components for their plants was added. Today, Irion serves customers from the automotive, construction, agricultural, cultural, logistics, medical and food technology sectors with demanding welding-milling combinations in quantities ranging from 30 to 1.000 pieces.
</p><p>
</p><p>
</p><p>References
</p><p>
</p><p>Due to a consistently high level of quality, professional order processing and on-time delivery, we are always the first choice for our customers compared to our competitors.
</p><p>An excerpt from our customer list, which includes many companies of distinction, is available upon request.
</p><p>
</p><p>Numbers, data, facts
</p><p>
</p><p>Currently Irion GmbH employs 40 motivated people in administration and production. The production area is about 3500 sqm.
</p><p>The machinery consists of welding robots as well as semi-mechanical welding machines for different arc welding processes, CNC controlled machines for drilling and milling, lathes, press brakes, bending machines and sawing machines as well as numerous manipulation machines.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweissunternehmen />
<link rel="alternate" hreflang="en-US" href=/us/welding-company />
<link rel="alternate" hreflang="x-default" href=/en/industrial-welding-services />
<link rel="alternate" hreflang="en" href=/en/industrial-welding-services />
', 'submenu' => '<strong><a class="mt-1" href="/en/management">Management</a></strong>
                                <ul></ul><strong><a class="mt-1" href=""></a></strong>
                                <ul></ul><strong><a class="mt-1" href="/en#">Sites</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/en/sites/welding-company-germany">Germany</a></li><li class="my-4 my-lg-1"><a href="/en/sites/welding-abroad">Bosnia</a></li></ul><strong><a class="mt-1" href=""></a></strong>
                                <ul></ul><strong><a class="mt-1" href="/en/welding-consulting">Contact</a></strong>
                                <ul></ul>', 'img_src' => 'industrial-welding-services.webp', 'img_title' => 'Industrial welding services', 'img_alt' => 'Industrial welding services']);
            });
Route::get('/us/welding-company', function () {
                return view('templates.unternehmen')->with(['meta_title' => 'Welding company Irion  – Quality from Germany since 1926! ', 'meta_description' => 'The welding company since 1926 ✓ Our partners ☆ References ☆ History ☆ Figures, data, facts ➨ Get all information here!', 'h1' => 'Welding company Irion ', 'seo1' => '<p>For many years our welding company has been trusted…
</p><p><ul><li>	Selected partners of the automotive industry</li><li>	Renowned steel and mechanical engineering companies</li><li>	Public institutions from art and culture</li><li>	Premium manufacturers from plant engineering & materials handling</li><li>		Leading manufacturers of agricultural and construction machinery
</li></ul></p><p>
</p><p>
</p><p>History
</p><p>
</p><p>The welding company was founded in 1926 by Mr. Matthäus Irion. In 1978, the Hahn family acquired Matthäus Irion  GmbH & Co. KG. From 1986, Eberhardt Hahn, who studied mechanical engineering, managed the company, and in 2018 the two industrial engineers and aeronautical engineers Bernd Fleissinger and Stefan Tschirk took over the welding company.
</p><p>
</p><p>From 1979, the business area developed towards the production of transport and storage containers, primarily for the automotive industry. From the beginning of the 80s, the supply of the materials handling industry with components for their plants was added. Today, Irion  serves customers from the automotive, construction, agricultural, cultural, logistics, medical and food technology sectors with demanding welding-milling combinations in quantities ranging from 30 to 1,000 pieces.
</p><p>
</p><p>
</p><p>References
</p><p>
</p><p>Due to a consistently high level of quality, professional order processing and on-time delivery, we are always the first choice for our customers compared to our competitors.
</p><p>An excerpt from our customer list, which includes many companies of distinction, is available upon request.
</p><p>
</p><p>Numbers, data, facts
</p><p>
</p><p>Currently Irion  GmbH employs 40 motivated people in administration and production. The production area is about 3500 sqm.
</p><p>The machinery consists of welding robots as well as semi-mechanical welding machines for different arc welding processes, CNC controlled machines for drilling and milling, lathes, press brakes, bending machines and sawing machines as well as numerous manipulation machines.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweissunternehmen />
<link rel="alternate" hreflang="en-US" href=/us/welding-company />
<link rel="alternate" hreflang="x-default" href=/en/industrial-welding-services />
<link rel="alternate" hreflang="en" href=/en/industrial-welding-services />
', 'submenu' => '<strong><a class="mt-1" href="/us/management">Management</a></strong>
                                <ul></ul><strong><a class="mt-1" href=""></a></strong>
                                <ul></ul><strong><a class="mt-1" href="/us#">Sites</a></strong>
                                <ul><li class="my-4 my-lg-1"><a href="/us/sites/welding-company-germany">Germany</a></li><li class="my-4 my-lg-1"><a href="/us/sites/welding-in-eastern-europe">Bosnia</a></li></ul><strong><a class="mt-1" href=""></a></strong>
                                <ul></ul><strong><a class="mt-1" href="/us/welding-consulting">Contact</a></strong>
                                <ul></ul>', 'img_src' => 'welding-company.webp', 'img_title' => 'Welding company', 'img_alt' => 'Welding company']);
            });
Route::get('/management', function () {
                return view('templates.management')->with(['meta_title' => 'Management', 'meta_description' => '', 'h1' => '', 'seo1' => '', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/management />
<link rel="alternate" hreflang="en-US" href=/us/management />
<link rel="alternate" hreflang="x-default" href=/en/management />
<link rel="alternate" hreflang="en" href=/en/management />
', 'submenu' => '', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/en/management', function () {
                return view('templates.management')->with(['meta_title' => 'Management', 'meta_description' => '', 'h1' => '', 'seo1' => '', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/management />
<link rel="alternate" hreflang="en-US" href=/us/management />
<link rel="alternate" hreflang="x-default" href=/en/management />
<link rel="alternate" hreflang="en" href=/en/management />
', 'submenu' => '', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/us/management', function () {
                return view('templates.management')->with(['meta_title' => 'Management', 'meta_description' => '', 'h1' => '', 'seo1' => '', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/management />
<link rel="alternate" hreflang="en-US" href=/us/management />
<link rel="alternate" hreflang="x-default" href=/en/management />
<link rel="alternate" hreflang="en" href=/en/management />
', 'submenu' => '', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/schweissunternehmen/zertifikate', function () {
                return view('templates.certificates-index')->with(['meta_title' => '', 'meta_description' => '', 'h1' => '', 'seo1' => '', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweissunternehmen/zertifikate />
', 'submenu' => '<strong>Beispiele</strong><ul><li class="my-4 my-lg-1"><a href="/schweissunternehmen/en-1090-zertifizierte-betriebe">DIN EN 1090-2:2018 EXC3 nach EN 1090-2</a></li><li class="my-4 my-lg-1"><a href="/schweissunternehmen/konstante-schweissqualitaet">DIN EN ISO 3834-2:2021</a></li><li class="my-4 my-lg-1"><a href="/schweissunternehmen/qualitaetssicherung-schweissen">ISO 9001:2015</a></li></ul>', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/schweissunternehmen/en-1090-zertifizierte-betriebe', function () {
                return view('templates.certificates')->with(['meta_title' => 'EN 1090 zertifizierte Betrieb – Klasse EXC3 Stahlbau', 'meta_description' => 'EN 1090 zertifizierte Betrieb ✓ Ausführungsklasse EXC3 nach EN 1090-2 ☆ IRION ist Ihr zertifizierter Partner ➨ Jetzt informieren!', 'h1' => 'EN 1090 zertifizierter Betrieb', 'seo1' => '<p>IRION ist ein nach EN 1090, Ausführungsklasse EXC3 zertifizierter Betrieb. 
</p><p>
</p><p>Das Schweißzertifikat WECE-STAHL-1090-2.00093.GSIFe.2019.002 wurde in Übereinstimmung mit EN 1090-1, Tabelle B.1 zum Schweißen von Stahltragwerken nach DIN EN 1090-2 vergeben.
</p><p>
</p><p>Technische Spezifikation: EN 1090-2:2018
</p><p>
</p><p>Ausführungsklasse: EXC3 nach EN 1090-2
</p><p>
</p><p>Referenznummer für Schweißprozesse nach DIN EN ISO 40531: 135
</p><p>
</p><p>Werkstoffgruppen: 1.1, 1.2, 2.1 nach CEN ISO/TR 15608 und EN 1090-2 (2018), Tabelle 2 und 3
</p><p>
</p><p>Auf Grundlage der Bestimmungen der oben genannten technischen Spezifikation wurden alle Anforderungen an das Schweißen erfüllt.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweissunternehmen/en-1090-zertifizierte-betriebe />
', 'submenu' => '', 'img_src' => 'en-1090-zertifizierte-betriebe.webp', 'img_title' => 'EN 1090 zertifizierte Betriebe', 'img_alt' => 'EN 1090 zertifizierte Betriebe']);
            });
Route::get('/schweissunternehmen/konstante-schweissqualitaet', function () {
                return view('templates.certificates')->with(['meta_title' => 'Konstante Schweißqualität – Nach DIN EN ISO 3834-2:2021', 'meta_description' => 'Konstante Schweißqualität ✓ Zertifiziert nach DIN EN ISO 3834-2:2021 ☆ IRION ist Ihr zertifizierter Partner ➨ Jetzt informieren!', 'h1' => 'Konstante Schweiß&shy;qualität zertifiziert nach DIN EN ISO 3834-2:2021', 'seo1' => '<p>IRION steht für konstante Schweißqualität, zertifiziert durch DVS ZERT.
</p><p>
</p><p>
</p><p>Zertifikat: D-ZE-16083-01-00-IS03834-2019.0005.002
</p><p>
</p><p>Nachweis der schweißtechnischen Qualitätsanforderungen erbracht nach: DIN EN ISO 3834-2:2021
</p><p>
</p><p>Anwendungsbereich: Schweißbaugruppen für die Fördertechnik und den Maschinenbau
</p><p>
</p><p>Schweißprozesse: 135, 141 nach DIN EN ISO 4063
</p><p>
</p><p>Grundwerkstoffe: 1.1, 1.2, 2.1, 8.1 nach CEN ISO/TR 15608</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweissunternehmen/konstante-schweissqualitaet />
', 'submenu' => '', 'img_src' => 'konstante-schweissqualitaet.webp', 'img_title' => 'konstante Schweißqualität', 'img_alt' => 'konstante Schweißqualität']);
            });
Route::get('/schweissunternehmen/qualitaetssicherung-schweissen', function () {
                return view('templates.certificates')->with(['meta_title' => 'Qualitätssicherung Schweißen – ISO 9001:2015 zertifiziert', 'meta_description' => 'IRION steht für Qualitätssicherung beim Schweißen ✓ TÜV-zertifiziert nach ISO 9001:2015 ➨ Qualität von IRION seit 1926!', 'h1' => 'Qualitäts&shy;sicherung Schweißen – ISO 9001:2015 zertifiziert', 'seo1' => '<p>IRION steht für Qualitätssicherung beim Schweißen, zertifiziert durch den TÜV.
</p><p>
</p><p>Bescheinigt durch: Die Zertifizierungsstelle der TÜV SÜD Management Service GmbH
</p><p>
</p><p>Bescheinigt wird: Die Einführung eines Qualitätsmanagementsystems
</p><p>
</p><p>Zertifiziert nach: ISO 9001:2015
</p><p>
</p><p>Geltungsbereich: Herstellung und Vertrieb von Sonderanlagen, Vorrichtungen und Schweißkonstruktionen</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweissunternehmen/qualitaetssicherung-schweissen />
', 'submenu' => '', 'img_src' => 'qualitaetssicherung-schweissen.webp', 'img_title' => 'Qualitätssicherung Schweißen', 'img_alt' => 'Qualitätssicherung Schweißen']);
            });
Route::get('#', function () {
                return view('templates.unternehmen')->with(['meta_title' => '', 'meta_description' => '', 'h1' => '', 'seo1' => '', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=# />
<link rel="alternate" hreflang="en-US" href=/us# />
<link rel="alternate" hreflang="x-default" href=/en# />
<link rel="alternate" hreflang="en" href=/en# />
', 'submenu' => '<strong>Beispiele</strong><ul><li class="my-4 my-lg-1"><a href="/standorte/schweissbaugruppen-fertigung-in-deutschland">Deutschland</a></li><li class="my-4 my-lg-1"><a href="/standorte/auslandsfertigung-produktionsverlagerung-nach-osteuropa">Bosnien</a></li></ul>', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/en#', function () {
                return view('templates.unternehmen')->with(['meta_title' => '', 'meta_description' => '', 'h1' => '', 'seo1' => '', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=# />
<link rel="alternate" hreflang="en-US" href=/us# />
<link rel="alternate" hreflang="x-default" href=/en# />
<link rel="alternate" hreflang="en" href=/en# />
', 'submenu' => '<strong>Examples</strong><ul><li class="my-4 my-lg-1"><a href="/en/sites/welding-company-germany">Germany</a></li><li class="my-4 my-lg-1"><a href="/en/sites/welding-abroad">Bosnia</a></li></ul>', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/us#', function () {
                return view('templates.unternehmen')->with(['meta_title' => '', 'meta_description' => '', 'h1' => '', 'seo1' => '', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=# />
<link rel="alternate" hreflang="en-US" href=/us# />
<link rel="alternate" hreflang="x-default" href=/en# />
<link rel="alternate" hreflang="en" href=/en# />
', 'submenu' => '<strong>Examples</strong><ul><li class="my-4 my-lg-1"><a href="/us/sites/welding-company-germany">Germany</a></li><li class="my-4 my-lg-1"><a href="/us/sites/welding-in-eastern-europe">Bosnia</a></li></ul>', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/standorte/schweissbaugruppen-fertigung-in-deutschland', function () {
                return view('templates.site')->with(['meta_title' => 'Schweißbaugruppen Fertigung in Deutschland – Lohnfertiger', 'meta_description' => 'Schweißbaugruppen ✓ Lohnfertiger seit 1926 ☆ Maschinenbau ☆ Gleichbleibend hohe Qualität ➨ Fertigung in Deutschland - Baden-Württemberg!', 'h1' => 'Irion – Schweiß&shy;baugruppen Fertigung in Deutschland', 'seo1' => '<p>Wir sind Irion, Ihre Schweißbaugruppen-Experten mit hochwertiger Fertigung in Deutschland (Nordschwarzwald / Baden-Württemberg)!
</p><p> 
</p><p>Unsere Schweißer haben sich auf Schutzgasschweißen, Präzisionsfertigung und Schwerlastkonstruktionen für den Anlagen- & Maschinenbau spezialisiert. Unterstützt werden unsere Mitarbeiter von hochautomatisierten Schweißrobotern mit 10 Achsen auf 7m Länge. Lasern und Kanten zählt ebenfalls zu unserem Kompetenzfeld.
</p><p> 
</p><p>Als Lohnfertiger als auch Entwicklungsfertiger legen wir seit 1926 Wert auf gleichbleibend hohe Qualität.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/standorte/schweissbaugruppen-fertigung-in-deutschland />
<link rel="alternate" hreflang="en-US" href=/us/sites/welding-company-germany />
<link rel="alternate" hreflang="x-default" href=/en/sites/welding-company-germany />
<link rel="alternate" hreflang="en" href=/en/sites/welding-company-germany />
', 'submenu' => '', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/en/sites/welding-company-germany', function () {
                return view('templates.site')->with(['meta_title' => 'Welding company – Welder in Germany - Baden-Württemberg', 'meta_description' => 'Welding company Irion ✓ High quality since 1926 ☆ MIG and TIG welding ☆ Precision manufacturing ➨ Welder in Germany - Baden-Württemberg!', 'h1' => 'Irion – Welding company in Germany - Baden-Württemberg', 'seo1' => '<p>We are Irion, your welding company from the the North of Black Forest (Baden-Württemberg / Germany)!
</p><p>
</p><p>Our welders and robots focus on MIG and TIG welding, precision manufacturing and heavy-duty welding constructions.
</p><p>
</p><p>Since 1926, we have attached great importance to consistently high quality.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/standorte/schweissbaugruppen-fertigung-in-deutschland />
<link rel="alternate" hreflang="en-US" href=/us/sites/welding-company-germany />
<link rel="alternate" hreflang="x-default" href=/en/sites/welding-company-germany />
<link rel="alternate" hreflang="en" href=/en/sites/welding-company-germany />
', 'submenu' => '', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/us/sites/welding-company-germany', function () {
                return view('templates.site')->with(['meta_title' => 'Welding company – Welder in Germany - Baden-Württemberg', 'meta_description' => 'Welding company Irion ✓ High quality since 1926 ☆ MIG and TIG welding ☆ Precision manufacturing ➨ Welder in Germany - Baden-Württemberg!', 'h1' => 'Irion – Welding company in Germany - Baden-Württemberg', 'seo1' => '<p>We are Irion, your welding company from the the North of Black Forest (Baden-Württemberg / Germany)!
</p><p>
</p><p>Our welders and robots focus on MIG and TIG welding, precision manufacturing and heavy-duty welding constructions.
</p><p>
</p><p>Since 1926, we have attached great importance to consistently high quality.</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/standorte/schweissbaugruppen-fertigung-in-deutschland />
<link rel="alternate" hreflang="en-US" href=/us/sites/welding-company-germany />
<link rel="alternate" hreflang="x-default" href=/en/sites/welding-company-germany />
<link rel="alternate" hreflang="en" href=/en/sites/welding-company-germany />
', 'submenu' => '', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/standorte/auslandsfertigung-produktionsverlagerung-nach-osteuropa', function () {
                return view('templates.site')->with(['meta_title' => 'Auslandsfertigung – Produktionsverlagerung nach Osteuropa', 'meta_description' => 'Auslandsfertigung ✓ Schweißbaugruppen ☆ Präzision ☆ Deutsches Projektmanagement ➨ Produktionsverlagerung nach Osteuropa - Bosnien!', 'h1' => 'Auslandsfertigung – Produktions&shy;verlagerung nach Osteuropa - Bosnien', 'seo1' => '<p>Wir sind Irion, der Schweißbetrieb für Präzision!
</p><p> 
</p><p>Unsere Auslandsfertigung in Bosnien hat als Niedriglohnland den Schwerpunkt auf preiswerten Schweißbaugruppen in der Lohnfertigung von Schweißteilen und Schweißkonstruktionen von 300 bis 5.000 Stück.
</p><p> 
</p><p>Mit Irion können Sie Ihre Stahlkonstruktionen im Ausland fertigen lassen und gleichzeitig ein deutsches Projektmanagement mit persönlichem Ansprechpartner nutzen. Die Produktionsverlagerung nach Osteuropa bietet Ihnen preiswerte Produktionskosten bei gleichbleibend hoher Qualität und Verlässlichkeit.
</p><p> 
</p><p>Irion bietet Präzisionsfertigung seit 1926 durch erfahrene Schweißer unterstützt durch hochautomatisierte Robotertechnologie!</p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/standorte/auslandsfertigung-produktionsverlagerung-nach-osteuropa />
<link rel="alternate" hreflang="en-US" href=/us/sites/welding-in-eastern-europe />
<link rel="alternate" hreflang="x-default" href=/en/sites/welding-abroad />
<link rel="alternate" hreflang="en" href=/en/sites/welding-abroad />
', 'submenu' => '', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/en/sites/welding-abroad', function () {
                return view('templates.site')->with(['meta_title' => 'Welding abroad – Manufacturing in Eastern Europe - Bosnia', 'meta_description' => 'Welding abroad ✓ Low cost production ☆ 300 to 5.000 pieces ☆ German project management ➨ Manufacturing in Eastern Europe - Bosnia!', 'h1' => 'Irion – Welding abroad in Eastern Europe - Bosnia', 'seo1' => '<p>We are Irion, the welding company for precision!
</p><p>
</p><p>Our welding company in Bosnia focuses on low cost production and reasonable welding in contract manufacturing of weldments and inhouse engineerd weldments from 300 to 5.000 pieces.
</p><p>
</p><p>With Irion you achieve your steel weldments being manufactured abroad and simultaneously benefit from German project management with a personal contact person securing german quality. Manufacturing in Eastern Europe offers you reasonable production costs with consistently high quality.
</p><p>
</p><p>Irion offers precision manufacturing since 1926 by experienced welders supported by hightech robot systems up to 10 axis covering 6m part length </p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/standorte/auslandsfertigung-produktionsverlagerung-nach-osteuropa />
<link rel="alternate" hreflang="en-US" href=/us/sites/welding-in-eastern-europe />
<link rel="alternate" hreflang="x-default" href=/en/sites/welding-abroad />
<link rel="alternate" hreflang="en" href=/en/sites/welding-abroad />
', 'submenu' => '', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/us/sites/welding-in-eastern-europe', function () {
                return view('templates.site')->with(['meta_title' => 'Welding in Eastern Europe - Bosnia – Manufacturing abroad', 'meta_description' => 'Welding in Eastern Europe - Bosnia ✓ Low cost production ☆ 300 to 5,000 pieces ☆ German project management ➨ Manufacturing abroad!', 'h1' => 'Irion – Welding abroad in Eastern Europe - Bosnia', 'seo1' => '<p>We are Irion, the welding company for precision!
</p><p>
</p><p>Our welding company in Bosnia focuses on low cost production and reasonable welding in contract manufacturing of weldments and inhouse engineerd weldments from 300 to 5,000 pieces.
</p><p>
</p><p>With Irion you achieve your steel weldments being manufactured abroad and simultaneously benefit from German project management with a personal contact person securing german quality. Manufacturing in Eastern Europe offers you reasonable production costs with consistently high quality.
</p><p>
</p><p>Irion offers precision manufacturing since 1926 by experienced welders supported by hightech robot systems up to 10 axis covering 6m part length </p>', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/standorte/auslandsfertigung-produktionsverlagerung-nach-osteuropa />
<link rel="alternate" hreflang="en-US" href=/us/sites/welding-in-eastern-europe />
<link rel="alternate" hreflang="x-default" href=/en/sites/welding-abroad />
<link rel="alternate" hreflang="en" href=/en/sites/welding-abroad />
', 'submenu' => '', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/movwing', function () {
                return view('movwing')->with(['meta_title' => '', 'meta_description' => '', 'h1' => 'MovWing', 'seo1' => '', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/movwing />
', 'submenu' => '', 'img_src' => '', 'img_title' => '', 'img_alt' => '']);
            });
Route::get('/schweissberatung', function () {
                return view('templates.kontakt')->with(['meta_title' => 'Schweißberatung – Kostenloses Erstgespräch bei IRION', 'meta_description' => 'Schweißberatung von IRION ✓ 30 Minuten kostenlose Schweißberatung ☆ Qualität von IRION seit 1926 ➨ Nehmen Sie jetzt Kontakt auf!', 'h1' => '30 Minuten kostenlose Schweißberatung', 'seo1' => 'Sie haben Fragen zum Thema Schweißen oder anderen Fachgebieten? Wir bieten Ihnen eine kostenlose Schweißberatung an. Nehmen Sie gleich Kontakt auf!', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweissberatung />
<link rel="alternate" hreflang="en-US" href=/us/welding-consulting />
<link rel="alternate" hreflang="x-default" href=/en/welding-consulting />
<link rel="alternate" hreflang="en" href=/en/welding-consulting />
', 'submenu' => '', 'img_src' => 'schweissberatung.webp', 'img_title' => 'Schweißberatung', 'img_alt' => 'Schweißberatung']);
            });
Route::get('/en/welding-consulting', function () {
                return view('templates.kontakt')->with(['meta_title' => 'Welding consulting – Free initial consultation at Irion ', 'meta_description' => 'Welding consulting from Irion ✓ 30 minutes free welding advice ☆ Quality from Irion since 1926 ➨ Get in touch now!', 'h1' => '30 minutes free welding consulting 	', 'seo1' => 'Do you have questions about welding or other specialties? We offer you free welding consulting. Contact us right away!', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweissberatung />
<link rel="alternate" hreflang="en-US" href=/us/welding-consulting />
<link rel="alternate" hreflang="x-default" href=/en/welding-consulting />
<link rel="alternate" hreflang="en" href=/en/welding-consulting />
', 'submenu' => '', 'img_src' => 'welding-consulting.webp', 'img_title' => 'Welding consulting', 'img_alt' => 'Welding consulting']);
            });
Route::get('/us/welding-consulting', function () {
                return view('templates.kontakt')->with(['meta_title' => 'Welding consulting – Free initial consultation at Irion ', 'meta_description' => 'Welding consulting from Irion  ✓ 30 minutes free welding advice ☆ Quality from Irion  since 1926 ➨ Get in touch now!', 'h1' => '30 minutes free welding consulting 	', 'seo1' => 'Do you have questions about welding or other specialties? We offer you free welding consulting. Contact us right away!', 'seo2' => '', 'script' => '', 'hreflang' => '<link rel="alternate" hreflang="de" href=/schweissberatung />
<link rel="alternate" hreflang="en-US" href=/us/welding-consulting />
<link rel="alternate" hreflang="x-default" href=/en/welding-consulting />
<link rel="alternate" hreflang="en" href=/en/welding-consulting />
', 'submenu' => '', 'img_src' => 'welding-consulting.webp', 'img_title' => 'Welding consulting', 'img_alt' => 'Welding consulting']);
            });

    Route::get('/impressum', function () {
        return view('imprint');
    });
    Route::get('/datenschutz', function () {
        return view('privacy');
    });
    Route::get('/agb', function () {
        return view('terms');
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



    Route::get('/kompetenzen', function(){ 
        return Redirect::to('/praezisionsfertigung', 301); 
    });
    Route::get('/entwicklung', function(){ 
        return Redirect::to('/praezisionsfertigung/mechanische-konstruktion', 301); 
    });
    Route::get('/zuschnitt', function(){ 
        return Redirect::to('/praezisionsfertigung/praezisionsschneiden', 301); 
    });
    Route::get('/zerspanung', function(){ 
        return Redirect::to('/praezisionsfertigung/praezisionszerspanung', 301); 
    });
    Route::get('/schweissen', function(){ 
        return Redirect::to('/praezisionsfertigung/praezisionsschweissen', 301); 
    });
    Route::get('/reinigung', function(){ 
        return Redirect::to('/praezisionsfertigung/industrielle-teilereinigung-dienstleistung', 301); 
    });
    Route::get('/waermebehandlung', function(){ 
        return Redirect::to('/praezisionsfertigung/industrielle-waermebehandlung', 301); 
    });
    Route::get('/oberflaeche', function(){ 
        return Redirect::to('/praezisionsfertigung/oberflaechenbeschichtung-stahl', 301); 
    });
    Route::get('/montage', function(){ 
        return Redirect::to('/praezisionsfertigung/baugruppenmontage-maschinenbau', 301); 
    });
    Route::get('/unternehmen', function(){ 
        return Redirect::to('/schweissunternehmen', 301); 
    });
    Route::get('/kontakt', function(){ 
        return Redirect::to('/schweissberatung', 301); 
    });
    Route::get('/zertifikate', function(){ 
        return Redirect::to('/schweissunternehmen/zertifikate', 301); 
    });
    Route::get('/qualitätspolitik', function(){ 
        return Redirect::to('/schweissunternehmen/qualitätspolitik', 301); 
    });

    Route::get('/en/competences', function(){ 
        return Redirect::to('/en/precision-manufacturing', 301); 
    });
    Route::get('/en/contact', function(){ 
        return Redirect::to('/en/welding-consulting', 301); 
    });
    Route::get('/en/company', function(){ 
        return Redirect::to('/industrial-welding-services', 301); 
    });
    