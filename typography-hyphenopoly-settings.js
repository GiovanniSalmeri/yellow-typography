// Typography extension, https://github.com/GiovanniSalmeri/yellow-typography 

"use strict";
document.body.querySelectorAll('div.main *').forEach(function(node) {
    var computedStyle = getComputedStyle(node);
    if (computedStyle.hyphens=="auto") {
        node.classList.add("hyphenate");
        node.style.msHyphens = "auto";
        node.style.mozHyphens = "auto";
        node.style.webkitHyphens = "auto";
    } else if (computedStyle.textAlign=="justify") {
        node.classList.add("hyphenate");
        node.style.hyphens = "auto";
        node.style.msHyphens = "auto";
        node.style.mozHyphens = "auto";
        node.style.webkitHyphens = "auto";
    }
});

var Hyphenopoly = {
    "longWord": {
        "be": "Электрапаветраразмеркавальнік",
        "bg": "непротивоконституционствувателствувайте",
        "ca": "Anticonstitucionalment",
        "cs": "Nejneobhospodařovávatelnějšímu",
        "da": "speciallægepraksisplanlægning",
        "de": "Silbentrennungsalgorithmus",
        "el": "ηλεκτροεγκεφαλογράφημα",
        "en": "Antidisestablishmentarianism",
        "es": "Electroencefalografistas",
        "et": "uusaastaöövastuvõtuhommikuidüll",
        "fi": "kolmivaihekilowattituntimittari",
        "fr": "Anticonstitutionnellement",
        "ga": "grianghrafadóireacht",
        "hr": "prijestolonasljednikovičičinima",
        "hu": "megszentségtelenített",
        "is": "Alþjóðaflutningaverkamannasambandsins",
        "it": "Precipitevolissimevolmente",
        "lt": "kiškiakopūstlapiauti",
        "lv": "Pretpulksteņrādītājvirziens",
        "nb": "bostøttesaksmappetilgangsrettighetene",
        "nl": "meervoudigepersoonlijkheids",
        "pl": "konstantynopolitańczykowianeczka",
        "pt": "Anticonstitucionalissimamente",
        "ro": "electroglotospectrografie",
        "ru": "превысокомногорассмотрительствующий",
        "sk": "najneobhospodarovávateľnejšieho",
        "sl": "dialektičnomaterialističen",
        "sr": "Семпаравиливичинаверсаламилитипиковски",
        "sv": "Realisationsvinstbeskattning",
        "tr": "ademimerkeziyetçilik",
        "uk": "Нікотинамідаденіндинуклеотидфосфат",
    },
    "require": {
    },
    "paths": {
        "maindir": document.currentScript.src.match(/^.*\//)[0] + "../../media/typography/",
    },
    "cacheFeatureTests": true,
    "fallbacks": {
        "el": "el-monoton",
        "en": "en-gb",
        "sr": "sr-cyrl",
    },
    "setup": {
        "safecopy": true,
        "orphanControl": 2,
    },
};

Hyphenopoly["require"][document.documentElement.lang] = Hyphenopoly.longWord[document.documentElement.lang];
Hyphenopoly["paths"]["patterndir"] = Hyphenopoly["paths"]["maindir"];
