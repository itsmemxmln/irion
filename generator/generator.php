<?php
    // Configuration of Script:
    
    // Template Mapping
    //// also overwrites children
    $template_mapping = [
        "/" => "templates.home",
        "/praezisionsfertigung" => "templates.praezisionsfertigung",
        "/schweissunternehmen" => "templates.unternehmen",
        "/management" => "templates.management",
        "/karriere" => "templates.karriere",
        "/schweissberatung" => "templates.kontakt",
        "/schweissunternehmen/zertifikate" => "templates.certificates-index",
        "/schweissunternehmen/qualitaetspolitik" => "templates.quality-policy",
        "/schweissunternehmen/en-1090-zertifizierte-betriebe" => "templates.certificates",
        "/schweissunternehmen/konstante-schweissqualitaet" => "templates.certificates",
        "/schweissunternehmen/qualitaetssicherung-schweissen" => "templates.certificates", 
    ];
    $nav_submenu_text = [
        "de" => "Übersicht",
        "en" => "Overview",
        "us" => "Overview"
    ];
    $nav_submenu_text_excludes = [
        "Qualität"
    ];

    // Languages
    $de_file = file_get_contents('./de.json');
    $us_file = file_get_contents('./us.json');
    $en_file = file_get_contents('./en.json');

    class Site {
        // Properties
        public $index;
        public $de;
        public $us;
        public $en;
        public $hreflang = "";
        public $children;
        public $blade = "templates.basic";
        private $template_mapping;
    
        function set_index($index) {
            $this->index = $index;
        }
        function set_lang_item($item, $lang){
            switch ($lang){
                case "de":
                    $this->de = new SiteLang();
                    $this->de->set_item($item, $lang);
                    $this->hreflang .= 
'<link rel="alternate" hreflang="de" href='.$this->de->url.' />
';
                    $this->update_blade();
                    break;
                case "en":
                    $this->en = new SiteLang();
                    $this->en->set_item($item, $lang);
                    $this->hreflang .= 
'<link rel="alternate" hreflang="x-default" href='.$this->en->url.' />
<link rel="alternate" hreflang="en" href='.$this->en->url.' />
';
                    break;
                case "us":
                    $this->us = new SiteLang();
                    $this->us->set_item($item, $lang);
                    $this->hreflang .= 
'<link rel="alternate" hreflang="en-US" href='.$this->us->url.' />
';
                    break;
                default:
                    return false;
            }
        }
        function set_subsite($site){
            if (isset($this->children)){
                array_push($this->children, $site);
            }else {
                $this->children = [$site];
            }
        }
        function set_sub_subsite($site){
            $lastChild = $this->children[count($this->children) - 1];
            if (isset($lastChild->children)){
                array_push($lastChild->children, $site);
            }else {
                $lastChild->children = [$site];
            }
        }
        function get_level(){
            if (intval(substr($this->index, -2)) > 0){
                return 3;
            }elseif (intval(substr($this->index, -4, 2)) > 0){
                return 2;
            }else {
                return 1;
            }
        }
        function create_submenus(){ 
            if (isset($this->children)){  
                foreach ($this->get_available_langs() as $lang) { 
                    switch($this->get_level()){
                        case 1:
                            $submenu = '';
                            foreach ($this->children as $child){
                                $submenu .= '<strong><a href="'.$child->$lang->url.'">'.$child->$lang->menu.'</a></strong>
                                <ul>';
                                if (isset($child->children)){
                                    foreach ($child->children as $inner_child){
                                        $submenu .= $inner_child->$lang->get_link();
                                    }
                                }
                                $submenu .= '</ul>';
                            }
                            $this->$lang->set_submenu($submenu);
                            break;
                        case 2: 
                            $submenu = $lang == "de" ? "<strong>Beispiele</strong>" : "<strong>Examples</strong>";
                            $submenu .= '<ul>';
                            foreach ($this->children as $child){
                                $submenu .= $child->$lang->get_link();    
                            }
                            $submenu .= '</ul>';
                            $this->$lang->set_submenu($submenu);
                            break;
                        default:
                            $this->$lang->submenu =  "";
                            break;
                    }
                }    
            }
        }
        function get_available_langs() {            
            $langs = [];
            if (isset($this->de)){
                array_push($langs, "de");
            }
            if (isset($this->en)){
                array_push($langs, "en");
            }
            if (isset($this->us)){
                array_push($langs, "us");
            }
            return $langs;
        } 
        function set_template_mapping($mapping){
            $this->template_mapping = $mapping;
        }
        private function update_blade(){
            echo "<br>".$this->de->url;
            if (isset($this->template_mapping) && isset($this->template_mapping[$this->de->url])){                
                $this->blade = $this->template_mapping[$this->de->url];
                echo " ==> ".$this->blade;
            }
        }
    }
    class SiteLang {
        public $url;
        public $menu;
        public $h1;
        public $seo1;
        public $seo2;
        public $meta_title;
        public $meta_description;
        public $img_src;
        public $img_title;
        public $img_alt;
        private $submenu;
        // Delete Substrings in Menu
        private $delete_substring = [
            "active" => true,
            "pattern" => ["\r\n", "("]
        ];

        function set_item($item, $lang) {
            $this->menu = $this->remove_substring($this->get_menu($item));
            $this->url = isset($item["URL"]) ? $this->get_url($item["URL"], $lang) : "#";
            $this->h1 = $item["H1 Überschrift"];
            $this->seo1 = $this->sanitize_string($item["SEO-Text oben anfügen"]);
            $this->seo2 = isset($item["SEO-Text unten anfügen"]) ? $this->sanitize_string($item["SEO-Text unten anfügen"]) : null;
            $this->meta_title = $item["Meta Title\r\n<=57 Zeichen"];
            $this->meta_description = $item["Meta Description\r\n<=137 Zeichen"]; 
            $this->img_src = $item["Bild Dateiname"];
            $this->img_title = $item["Bild Image-Title"];
            $this->img_alt = $item["Bild Alt-Text"];
        }
        function get_menu($item) {
            if (isset($item["Menü 1. Ebene"])) {
                return $item["Menü 1. Ebene"];
            }
            if (isset($item["Menü 2. Ebene"])) {
                return $item["Menü 2. Ebene"];
            }
            if (isset($item["Menü 3. Ebene"])) {
                return $item["Menü 3. Ebene"];
            }
            return false;
        }
        function remove_substring($string){
            if ($this->delete_substring["active"]){
                $index = strlen($string);
                foreach($this->delete_substring["pattern"] as $pattern) {
                    $new = strpos($string, $pattern);
                    if ($new > 0 && $new < $index){
                        $index = $new;
                    }
                }
                return substr($string, 0, $index);
            }
            return $string;
        }
        function get_url($url, $lang){
            if ($lang != "de") {
                return rtrim("/".$lang.$url, '/');
            }else return rtrim($url);
        }
        private function sanitize_string($string){
            $w_breaks = $string;
            if(strpos($w_breaks, "\r\n•") > 0){
                $first = strpos($w_breaks, "\r\n•");
                $last = strrpos($w_breaks, "\r\n•");
                $end_ul = strpos($w_breaks, "\n", $last + 9);
                $w_breaks = substr($w_breaks, 0, $first)."<ul><li>".str_replace("\r\n•", "</li><li>", substr($w_breaks, $first + 5, ($last-$first) + 1)).substr($w_breaks, $last + 5, $end_ul - ($last + 5))."</li></ul>".substr($w_breaks,$end_ul);
            }
            if (strpos($w_breaks, "\r\n-") > 0){
                $first = strpos($w_breaks, "\r\n-");
                $last = strrpos($w_breaks, "\r\n-");
                $end_ul = strpos($w_breaks, "\n", $last + 9);
                if (!$end_ul){
                    $end_ul = strlen($w_breaks);
                }
                $w_breaks = substr($w_breaks, 0, $first)."<ul><li>".str_replace("\r\n-", "</li><li>", substr($w_breaks, $first + 3, ($last-$first) + 1)).substr($w_breaks, $last + 3, $end_ul - ($last + 3))."</li></ul>".substr($w_breaks,$end_ul);
            }
            if (strpos($w_breaks, "\n") > 0){
                $w_breaks = "<p>".str_replace("\n", "</p><p>", $w_breaks)."</p>";
            }
            return addcslashes($w_breaks, "'");
        }
        function set_submenu($val){
            $this->submenu = $val;
        }
        function get_submenu(){
            return $this->submenu;
        }
        function get_link(){
            return '<li><a href="'.$this->url.'">'.$this->menu.'</a></li>';
        }
        function url_is(){
            if (strlen($this->url) <= 1){
                return $this->url;
            }else return substr($this->url,1);
        }
    }



    function create_route($item, $hreflang = '', $blade = "template.basic") {
        if ($item->url != ""){
            return 
            "Route::get('".$item->url."', function () {
                return view('".$blade."')->with(['meta_title' => '".$item->meta_title."', 'meta_description' => '".$item->meta_description."', 'h1' => '".$item->h1."', 'seo1' => '".$item->seo1."', 'seo2' => '".$item->seo2."', 'hreflang' => '".$hreflang."', 'submenu' => '".$item->get_submenu()."', 'img_src' => '".$item->img_src."', 'img_title' => '".$item->img_title."', 'img_alt' => '".$item->img_alt."']);
            });\n";            
        }
        return "";
    }


    $de = json_decode($de_file, true);
    $us = json_decode($us_file, true);
    $en = json_decode($en_file, true);

    $sites = array();
    $iUs = 0;
    $iEn = 0;


    for ($iDe = 0; $iDe < count($de); $iDe++){
        $currDe = $de[$iDe];
        $currUs = $us[$iUs];
        $currEn = $en[$iEn];
        $currIndex = $currDe["INDEX"];
        // echo "Preparing Index: ".$currIndex . "<br/>";
        if ($currIndex > 0){

            $site = new Site();
            $site->set_index($currIndex);
            $site->set_template_mapping($template_mapping);
            $site->set_lang_item($currDe, "de");
            if ($currUs["INDEX"] == $currIndex){
                $site->set_lang_item($currUs, "us");
                $iUs ++;
            }
            if ($currEn["INDEX"] == $currIndex){
                $site->set_lang_item($currEn, "en");
                $iEn ++;
            }
            switch ($site->get_level()){
                case 1:
                    array_push($sites, $site);
                    break;
                case 2: 
                    $sites[count($sites) - 1]->set_subsite($site);
                    break;
                case 3:
                    $sites[count($sites) - 1]->set_sub_subsite($site);
                    break;
                default:
                    return false;
            }
        }
    }


    // CREATE ROUTES
    echo "<h1>Routes</h1>";
    $routes = "";
    include("./placeholders.php");
    $routes .= $routesPrefix;
    foreach ($sites as $site){     
        $site->create_submenus();
        foreach ($site->get_available_langs() as $lang){ ## LANG LOOP
            $routes .= create_route($site->$lang, $site->hreflang, $site->blade);
        }
        if (isset($site->children))
            foreach($site->children as $subsite){
                $subsite->create_submenus();
                foreach ($subsite->get_available_langs() as $lang){ ## LANG LOOP
                    $blade = (in_array($subsite->blade, ["templates.certificates-index", "templates.quality-policy"])) ? $subsite->blade : $site->blade;
                    $routes .= create_route($subsite->$lang, $subsite->hreflang, $blade); # bug used as feature (blade from site not subsubsite)
                }
                if (isset($subsite->children))
                foreach($subsite->children as $subsubsite){
                    foreach ($subsubsite->get_available_langs() as $lang){ ## LANG LOOP
                        $blade = ($subsubsite->blade == "templates.certificates") ? $subsite->blade : $site->blade;
                        $routes .= create_route($subsubsite->$lang, $subsubsite->hreflang, $site->blade); # bug used as feature (blade from site not subsubsite)
                    }
                } 
            }
    }
    $routes .= $routesSuffix;

    // CREATE NAVBAR
    echo "<h1>NAVBAR</h1>";
    $navbar = array();
    foreach ($site->get_available_langs() as $lang){ ## LANG LOOP
        $navbar[$lang] = "";
    } 
    foreach ($sites as $site){
        if (!isset($site->children)) {
            foreach ($site->get_available_langs() as $lang){ ## LANG LOOP
                $navbar[$lang] .= '
                <li class="nav-item mx-2"><a href="'.$site->$lang->url.'"
                class="fw-bold nav-link {{ Request::is(\''.$site->$lang->url_is().'\') ? \'active\' : \'\' }}" aria-current="page">'.$site->$lang->menu.'</a>
                </li>';
            }     
        }else {
            foreach ($site->get_available_langs() as $lang){ ## LANG LOOP
                $navbar[$lang] .= '<li class="nav-item mx-2 dropdown">';
                    $subsites = '';                

                    foreach($site->children as $subsite){
                        if (in_array($lang, $subsite->get_available_langs())){
                            if (!isset($subsite->children)) {
                                $subsites .= '
                                <li><a class="dropdown-item {{ Request::is(\''.$subsite->$lang->url_is().'\') ? \'active\' : \'\' }}"
                                    href="'.$subsite->$lang->url.'">'.$subsite->$lang->menu.'</a></li>';
                            }else{
                                $subsites .= '
                                <li class="nav-item mx-2 dropdown">
                                    <a class="dropdown-item dropdown-toggle  {{ Request::is(\''.$subsite->$lang->url_is().'\') || Request::is(\''.$subsite->$lang->url_is().'/*\') ? \'active\' : \'\' }}" href="'.$subsite->$lang->url.'"
                                        id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                        aria-expanded="false">
                                        '.$subsite->$lang->menu.'
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                                ';
    
                                foreach($subsite->children as $subsubsite){                        
                                    if (in_array($lang, $subsite->get_available_langs())){
                                        $subsites .= '
                                        <li><a class="dropdown-item {{ Request::is(\''.$subsubsite->$lang->url_is().'\') ? \'active\' : \'\' }}"
                                                href="'.$subsubsite->$lang->url.'">
                                                '.$subsubsite->$lang->menu.'</a></li>';
                                    }
                                }                         
    
                                $subsites .= '</ul>
                                        </li>';
                            }
                        }
                    }
                    $subsites .= '</ul>';
                    // need to be after subsites
                    $navbar[$lang] .= '<a class="nav-link fw-bold dropdown-toggle {{ Request::is(\''.$site->$lang->url_is().'\') || Request::is(\''.$site->$lang->url_is().'/*\') ? \'active\' : \'\' }}"
                                        href="'.$site->$lang->url.'" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        '.$site->$lang->menu.'
                                    </a>';
                    $navbar[$lang] .= '
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
                    // add header (first link with fllowing hr)
                    if (!in_array($site->de->menu, $nav_submenu_text_excludes)){
                        $navbar[$lang] .= '
                        <li><a class="dropdown-item {{ Request::is(\''.$site->$lang->url_is().'\') ? \'active\' : \'\' }}"
                                href="'.$site->$lang->url.'">'.$nav_submenu_text[$lang].'</a></li>
                        <li>
                            <hr class="dropdown-divider my-0">
                        </li>';
                    }
                    $navbar[$lang] .= $subsites;
                $navbar[$lang] .= '</li>';
            }  
        }
    }


    $filenames = [
        ["file" => "./routes.php" , "data" => $routes],        
        ["file" => "./nav-de.php" , "data" => $navbar["de"]],        
        ["file" => "./nav-us.php" , "data" => $navbar["us"]], 
        ["file" => "./nav-en.php" , "data" => $navbar["en"]],
    ];

    foreach ($filenames as $file){
    // Sichergehen, dass die Datei existiert und beschreibbar ist.
        if (is_writable($file["file"])) {

            // Wir öffnen $file["file"] im Anfüge-Modus.
            // Der Dateizeiger befindet sich am Ende der Datei, und daher
            // wird später $somecontent mit fwrite() dorthin geschrieben.
            if (!$fp = fopen($file["file"], "w")) {
                print "Kann die Datei ".$file['file']." nicht öffnen";
                exit;
            }

            // Schreibe $somecontent in die geöffnete Datei.
            if (fwrite($fp, $file["data"]) === FALSE) {
                print "Kann nicht in die Datei ".$file['file']." schreiben";
                exit;
            }

            print "Fertig, in die Datei ".$file['file']." wurde die Routes geschrieben";

            fclose($fp);

        } else {
            print "Die Datei ".$file['file']." ist nicht schreibbar";
        }
    }
