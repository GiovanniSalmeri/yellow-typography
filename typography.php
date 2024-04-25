<?php
// Typography extension, https://github.com/GiovanniSalmeri/yellow-typography

class YellowTypography {
    const VERSION = "0.9.1";
    public $yellow;         // access to API

    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("typographyTitleParser", "safemarkdown"); // safemarkdown, markdown, none
        $this->yellow->system->setDefault("typographySubstitutions", "quotes, apostrophe, dash, dots, space");
        $this->yellow->system->setDefault("typographyHyphenation", "1");
        $this->yellow->language->setDefaults(array(
            "Language: ca",
            "TypographyQuotes: «, », “, ”",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: cs",
            "TypographyQuotes: „, “, ‚, ‘",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: da",
            "TypographyQuotes: », «, », «",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: de",
            "TypographyQuotes: », «, ›, ‹",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: et",
            "TypographyQuotes: „, ”, „, ”",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: en",
            "TypographyQuotes: “, ”, ‘, ’",
            "TypographyApostropheExceptions: 'twere, 'twas, 'tis, 'twill, 'bout, 'nuff, 'round, 'em, 'cause",
            "TypographyAltParsing: 1",
            "Language: es",
            "TypographyQuotes: «, », “, ”",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: fr",
            "TypographyQuotes: « ,  », “, ”",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: ga",
            "TypographyQuotes: ‘, ’, “, ”",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: is",
            "TypographyQuotes: „, “, „, “",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: it",
            "TypographyQuotes: «, », “, ”",
            "TypographyApostropheExceptions: po', mo', va', di', da', fa', sta', be', to'",
            "TypographyAltParsing: 0",
            "Language: la",
            "TypographyQuotes: «, », “, ”",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: lv",
            "TypographyQuotes: „, ”, „, ”",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: lt",
            "TypographyQuotes: „, “, ‚, ‘",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: hu",
            "TypographyQuotes: „, ”, «, »",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: mt",
            "TypographyQuotes: “, ”, ‘, ’",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 1",
            "Language: nl",
            "TypographyQuotes: „, ”, ‚, ’",
            "TypographyApostropheExceptions: 's, 'n, 't",
            "TypographyAltParsing: 0",
            "Language: nb",
            "TypographyQuotes: «, », «, »",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: pl",
            "TypographyQuotes: „, ”, ‚, ’",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: pt",
            "TypographyQuotes: «, », ‹, ›",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: ro",
            "TypographyQuotes: „, ”, «, »",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: sk",
            "TypographyQuotes: „, “, ‚, ‘",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: sl",
            "TypographyQuotes: „, “, ‚, ‘",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: hr",
            "TypographyQuotes: „, ”, ‚, ’",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: sr",
            "TypographyQuotes: „, ”, ‚, ’",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: fi",
            "TypographyQuotes: ”, ”, ’, ’",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: sv",
            "TypographyQuotes: ”, ”, ’, ’",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: el",
            "TypographyQuotes: «, », “, ”",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: ru",
            "TypographyQuotes: «, », „, “",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: bg",
            "TypographyQuotes: „, “, ‚, ‘",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: mk",
            "TypographyQuotes: „, “, ’, ‘",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: tr",
            "TypographyQuotes: “, ”, ‘, ’",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: uk",
            "TypographyQuotes: «, », „, “",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: be",
            "TypographyQuotes: «, », “, ”",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
            "Language: sq",
            "TypographyQuotes: „, “, ‘, ’",
            "TypographyApostropheExceptions:",
            "TypographyAltParsing: 0",
        ));
    }

    // Handle page meta data
    public function onParseMetaData($page) {
        if ($this->yellow->page==$page) {
            if ($this->yellow->system->get("typographyTitleParser")!=="none") {
                $titleContent = $page->get("titleContent");
                if ($this->yellow->system->get("typographyTitleParser")=="safemarkdown") $titleContent = htmlspecialchars($titleContent);
                $page->set("titleContent", $this->formatTitle($titleContent));
                $page->set("titleNavigation", $this->formatTitle($page->get("titleNavigation"), true));
                $page->set("titleHeader", $this->formatTitle($page->get("titleHeader"), true));
            }
        }
    }

    // Handle page content in HTML format
    public function onParseContentHtml($page, $text) {
        $substitutions = preg_split("/\s*,\s*/", $this->yellow->system->get("typographySubstitutions"));
        $substitutions = array_intersect($substitutions, [ "quotes", "apostrophe", "dash", "dots", "space" ]);
        if ($substitutions) {
            // Store protected elements
            $protectedElements = [ "pre", "code", "kbd", "script", "style", "math", "svg" ];
            $store = [];
            foreach ($protectedElements as $element) {
                $text = preg_replace_callback("/<($element)[^>]*>.*?<\/$element>/s", function($matches) use (&$store) { $store[] = $matches[0]; return "<placeholder {$matches[1]}>"; } , $text);
            }
            // Transform apostrophe, dash, dots, spaces, escapes
            if (array_diff($substitutions, [ "quotes" ])) {
                $patterns = [
                    "apostrophe"=> [
                        [ '/(?<=\pL)\'(?=\pL|["\']\pL)/u', "’" ],
                    ],
                    "dash"=> [
                        [ '/---/', "—" ],
                        [ '/--/', "–" ],
                    ],
                    "dots"=> [
                        [ '/\.\.\./', "…" ],
                    ],
                    "space"=> [
                        [ '/(\d)[ \x{a0}](\d)/', "\$1\342\200\257\$2" ], // \u{202f}
                    ],
                ];
                if ($page->get("language")=="fr") {
                    //$patterns["space"][] = [ '/[ \x{a0}]([!?;:»])/u', "\342\200\257\$1" ]; // \u{202f}
                    //$patterns["space"][] = [ '/(«)[ \x{a0}]/u', "\$1\342\200\257" ]; // \u{202f}
                    $patterns["space"][] = [ '/(?: |\x{a0}|\x{202f})?([!?;:])/u', "\342\200\257\$1"];
                }
                $realPatterns = [ [], [] ];
                foreach (array_diff($substitutions, [ "quotes" ]) as $substitution) {
                    foreach ($patterns[$substitution] as $pattern) {
                        $realPatterns[0][] = $pattern[0];
                        $realPatterns[1][] = $pattern[1];
                    }
                }
                $text = preg_replace_callback('/>([^<]+)</', function($matches) use ($realPatterns) {
                    $matches[1] = preg_replace($realPatterns[0], $realPatterns[1], $matches[1]);
                    return ">".$matches[1]."<";
                }, $text);
            }
            $apostropheExceptions = preg_split('/\s*,\s*/', $this->yellow->language->getText("typographyApostropheExceptions"));
            if ($apostropheExceptions!==[ "[typographyApostropheExceptions]" ]) {
                $text = preg_replace(array_map(function($p) { return $p[0]=="'" ? "/".$p."\b/" : "/\b".$p."/"; }, $apostropheExceptions), str_replace("'", "’", $apostropheExceptions), $text);
            }
            $text = str_replace(["\\'", "\\\""], ["′", "″"], $text); // U+2032 U+2033
            // Transform quotations marks
            if (in_array("quotes", $substitutions)) {
                $altParsing = (bool)$this->yellow->language->getText("typographyAltParsing");
                $typographyQuotes = preg_split('/\s*,\s*/', $this->yellow->language->getText("typographyQuotes"));
                if ($typographyQuotes==[ "[typographyQuotes]" ]) { 
                    $realQuotes = [ [ '"', '"' ], [ "'", "'" ] ];
                } else {
                    $realQuotes = [ [ $typographyQuotes[0], $typographyQuotes[1] ], [ $typographyQuotes[2], $typographyQuotes[3] ] ];
                }

                $openPrincipal = $openSecondary = true;
                $text = preg_replace_callback('/>([^<]+)</', function($matches) use ($realQuotes, &$openPrincipal, &$openSecondary, $altParsing) {
                    $matches[1] = preg_replace_callback('/'.($altParsing ? '' : '\'|').'"|\n/', function($char) use ($realQuotes, &$openPrincipal, &$openSecondary) {
                        if ($char[0]=="\n") {
                            return "\n";
                        } elseif ($char[0]=="\"") {
                            $openPrincipal = !$openPrincipal;
                            //if ($openPrincipal) $openSecondary = true;
                            return $realQuotes[0][$openPrincipal];
                        } elseif ($char[0]=="'") {
                            $openSecondary = !$openSecondary;
                            return $realQuotes[1][$openSecondary];
                        }
                    }, $matches[1]);
                    if ($altParsing) {
                        $matches[1] = preg_replace('/(\S)\'('.$realQuotes[1][1].')?([\s\.,:;!?…–—])/u', '$1'.$realQuotes[1][1].'$2$3', $matches[1]);
                        $matches[1] = preg_replace('/\'/u', $realQuotes[1][0], $matches[1]);
                    }
                    return ">".$matches[1]."<";
                }, $text);
            }
            // Restore protected elements
            foreach ($protectedElements as $element) {
                $text = preg_replace_callback("/<placeholder {$element}>/", function($matches) use (&$store) { return array_shift($store); } , $text);
            }
        }
        return $text;
    }

    private function formatTitle($text, $noTags = false) {
        $store = [];
        $text = htmlspecialchars_decode($text);
	$text = preg_replace_callback('/<.+?>/', function($match) use (&$store) { $store[] = $match[0]; return "<placeholder>"; }, $text);
        $text = $this->picoMarkdown($text, $noTags);
        $text = preg_replace_callback('/<placeholder>/', function($match) use (&$store, $noTags) { return $noTags ? '' : array_shift($store); }, $text);
        return $text;
    }

    private function picoMarkdown($text, $noTags = false) {
        $html = [
            '*'=>[ '<em>', '</em>' ],
            '**'=>[ '<strong>', '</strong>' ],
            '***'=>[ '<em><strong>', '</strong></em>' ],
            '_'=>[ '<em>', '</em>' ],
            '__'=>[ '<strong>', '</strong>' ],
            '___'=>[ '<em><strong>', '</strong></em>' ],
            '^'=>[ '<sup>', '</sup>' ],
            '`'=>[ '<code>', '</code>' ],
            '~~'=>[ '<del>', '</del>' ],
        ];
        $pattern = '/([\*_]{1,3}|\^|`|~~)(\S|\S.*?\S)\1/';
        if (preg_match($pattern, $text)) {
            return preg_replace_callback($pattern, function($matches) use ($noTags, $html) { return ($noTags ? '' : $html[$matches[1]][0]).$this->picoMarkdown($matches[2], $noTags).($noTags ? '' : $html[$matches[1]][1]); }, $text);
        } else {
            return $text;
        }
    }

    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $assetLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreAssetLocation");
            if ($this->yellow->system->get("typographyHyphenation")) $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$assetLocation}typography-hyphenopoly-settings.js\"></script>\n";
            if ($this->yellow->system->get("typographyHyphenation")) $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$assetLocation}typography-hyphenopoly-loader.js\"></script>\n";
        }
        return $output;
    }
}
