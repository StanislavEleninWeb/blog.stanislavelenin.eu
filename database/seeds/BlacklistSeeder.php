<?php

use Illuminate\Database\Seeder;

class BlacklistSeeder extends Seeder {

    private $blacklist = [
        "боклук",
        "боклуци",
        "тъп",
        "тъпи",
        "тъпаци",
        "тъпак",
        "тъпанар",
        "тъпанари",
        "тапанари",
        "тапанар",
        "тъпанарско",
        "тъпанарски",
        "тапанарско",
        "тапанарски",
        "ковра",
        "дейба",
        "гъз",
        "задник",
        "задници",
        "копеле",
        "копелета",
        "кучи син",
        "клитор",
        "клитур",
        "пикльо",
        "пиклю",
        "пикла",
        "ебач",
        "ебачи",
        "ебане",
        "еба се",
        "иби съ",
        "ибъ",
        "иби",
        "ибем",
        "ебете се",
        "да се ебеш",
        "да ти еба",
        "еби си",
        "ебете си",
        "ще ви еба",
        "ше ви еба",
        "ще ви еба",
        "ше ви еба",
        "ти да еба",
        "ви да еба",
        "да си ебе",
        "ша ва еба",
        "еба",
        "си е ебало",
        "ебал",
        "ебала",
        "ебано",
        "ебан",
        "ебана",
        "еби",
        "ебали",
        "ебала",
        "ебал",
        "преебана",
        "преебавам",
        "преебан",
        "ебаси",
        "ебати",
        "баси",
        "е*а",
        "е*ано",
        "е*ан",
        "наебан",
        "наебана",
        "наебано",
        "заебан",
        "заебана",
        "заебавам",
        "заебано",
        "лизане",
        "лъскане",
        "еби се",
        "ерекция",
        "еакулирам",
        "еякулирам",
        "еякулация",
        "мастурбирам",
        "мастурбация",
        "сперма",
        "педал",
        "пендел",
        "педераст",
        "педерастия",
        "педерас",
        "педерастки",
        "педераски",
        "лесбийка",
        "лесбийки",
        "лесбийство",
        "лесбо",
        "секс",
        "гей секс",
        "гей",
        "гейове",
        "порно",
        "детска порнография",
        "порнографски",
        "порнографска",
        "порнографско",
        "дупе",
        "гъз",
        "задник",
        "пръдла",
        "пърдене",
        "пръдня",
        "пръдльо",
        "негър",
        "сране",
        "сера",
        "да сереш",
        "сере",
        "говно",
        "говнар",
        "гувно",
        "гувнар",
        "путка",
        "потка",
        "курва",
        "ковра",
        "курвар",
        "анал",
        "анален",
        "анална",
        "анално",
        "травестит",
        "джендър",
        "транс джендър",
        "порногрaфия",
        "малтретиране",
        "брутален",
        "луд",
        "луди",
        "идиот",
        "идиоти",
        "убий се",
        "убийство",
        "пушене",
        "умрял",
        "умряла",
        "мъртва",
        "цигари",
        "цигара",
        "мъртъв",
        "дрога",
        "наркотици",
        "марихуана",
        "кокаин",
        "хероин",
        "трева",
        "напушен",
        "нашушена",
        "коз",
        "накозен",
        "накозена",
        "накозено",
        "смърт",
        "транссексуален",
        "транссексуална",
        "бисексуален",
        "бисексуална",
        "умри",
        "пистолет",
        "пушка",
        "по дяволите",
        "дявол",
        "вампир",
        "малоумник",
        "малоумници",
        "малоумни",
        "малоумна",
        "малоумно",
        "малоумен",
        "калъф",
        "келеш",
        "келеши",
        "кретен",
        "кретени",
        "курви",
        "кретенка",
        "екскремент",
        "фекалия",
        "фекалии",
        "лайно",
        "говно",
        "хомосексуален",
        "пикоч",
        "хомосексуалист",
        "содомия",
        "анус",
        "федърка",
        "говнар",
        "говнян",
        "лайнар",
        "мангал",
        "мангали",
        "кур",
        "кор",
        "хой",
        "курове",
        "хуй",
        "пенис",
        "яж ми хуя",
        "кура",
        "лайната",
        "хуйове",
        "уй",
        "швестер",
        "чеп",
        "чукам",
        "чукане",
        "шибам",
        "шибай се",
        "шибай",
        "шибан",
        "шибана",
        "шибани",
        "шибано",
        "шибаняк",
        "шибаняци",
        "парцал",
        "пачавра",
        "пачаври",
        "ануси",
        "кучка",
        "кучки",
        "гъз",
        "гъзове",
        "задници",
        "пи4ка",
        "пи4ки",
        "шунда",
        "дилдо",
        "вибратор",
        "пидал",
        "пидали",
        "педал",
        "педали",
        "педалски",
        "фелацио",
        "кунилингус",
        "чекия",
        "чикия",
        "пиче",
        "путкa",
        "чекии",
        "чикии",
        "чекий",
        "чикий",
        "лайнян",
        "свирка",
        "свирки",
        "зверски",
        "пръдлив",
        "оргия",
        "оргии",
        "похотлив",
        "насран",
        "посран",
        "осран",
        "оргазъм",
        "оргазми",
        "пичка",
        "пички",
        "капут",
        "презерватив",
        "кондом",
        "надуваема кукла",
        "пи4е",
        "псувам",
        "пцовам",
        "златен душ",
        "садо-мазо",
        "садомазо",
        "садист",
        "секс-играчки",
        "секс играчки",
        "анални топчета",
        "вагина",
        "вулва",
        "шунди",
        "вагини",
        "вагинален",
        "вагинална",
        "вагинално",
        "вагинални",
        "бабалюга",
        "путе",
        "подка",
        "гейтак",
        "роми",
        "черва",
        "недъгав",
        "мензиc",
        "дупе",
        "гаргамел",
        "слива",
        "проcтитyция",
        "проститутка",
        "компаньонка",
        "cера",
        "фекалира",
        "хемероиди",
        "разпори",
        "гранясал",
        "копеленце",
        "сиренясал",
        "недоебан",
        "чикибоец",
        "кривопишков",
        "манаф",
        "чоребе",
        "пъшкам",
        "мамка ти",
        "мамка ви",
        "мамка му",
        "прасе",
        "мафетамин",
        "амфети",
        "мет",
        "мескалин",
        "лсд",
        "метадон",
        "екстази",
        "екстаси",
        "пyтkа",
        "kur",
        "kyr",
        "kup",
        "kyp",
        "cur",
        "cyp",
        "кур",
        "кир",
        "кор",
        "коп",
        "kип",
        "kиp",
        "kyr",
        "putka",
        "potka",
        "pytka",
        "риtka",
        "рytка",
        "ритка",
        "рytka",
        "рyтkа",
        "pоtкa",
        "hуi",
        "hоi",
        "xоu",
        "xyй",
        "xoй",
        "xуi",
        "експлозив",
        "експлозия",
        "терор",
        "дупара",
        "допара",
        "терорист",
        "мадо",
        "мъдо",
        "мъде",
        "мъдя",
        "недоклатен",
        "недоклатени",
        "недоклатена",
        "bokluk",
        "bokluci",
        "boklutsi",
        "bokluzi",
        "tup",
        "tupi",
        "tupaci",
        "tapaci",
        "tapanari",
        "tapanar",
        "tupanarsko",
        "kovra",
        "kovri",
        "kowra",
        "kowri",
        "tupanarski",
        "tapanarsko",
        "tapanarski",
        "sheiba",
        "gaz",
        "guz",
        "zadnik",
        "zadnitsi",
        "zadnitzi",
        "zadnici",
        "zadnic",
        "copele",
        "kopele",
        "kop3l3",
        "kopeleta",
        "kuci sin",
        "kuchi sin",
        "ku4i sin",
        "klitor",
        "pishka",
        "pi6ka",
        "piska",
        "pichka",
        "pi4ka",
        "pichki",
        "pi4ki",
        "p1chka",
        "p1chki",
        "pyshka",
        "py6ka",
        "pj6ka",
        "pjshka",
        "pychka",
        "py4ka",
        "piklio",
        "pyklio",
        "pikljo",
        "piklyo",
        "pikla",
        "ebach",
        "eba4",
        "ebachi",
        "eba4i",
        "ebane",
        "4ukane",
        "chukane",
        "cukane",
        "3bane",
        "eban3",
        "eba",
        "3ba",
        "3b4",
        "eba se",
        "da se ebesh",
        "ebe6",
        "3ba4",
        "eba4",
        "da ti eba maykata",
        "maikata",
        "majkata",
        "ebi si maykata",
        "ebete si maykata",
        "ebete si maikata",
        "shte vi eba maykata",
        "shte vi eba maikata",
        "6e",
        "she vi eba maykata",
        "she vi eba maikata",
        "kyrvi",
        "kurbi",
        "kyrbi",
        "shа vi eba maykata",
        "shа vi eba",
        "mayka ti da eba",
        "maika ti da eba",
        "mayka vi da eba",
        "maika vi da eba",
        "da si ebe",
        "da si ebe",
        "sha va eba",
        "sha va eba",
        "eba",
        "si e ebalo",
        "si e ebalo",
        "mamka mu",
        "mamka",
        "ebal",
        "ebala",
        "ebano",
        "eban",
        "ebana",
        "preebana",
        "preebavam",
        "preeban",
        "ebasi",
        "ebati",
        "basi",
        "e*a",
        "e*ano",
        "e*an",
        "naeban",
        "naebana",
        "naebano",
        "zaeban",
        "zaebana",
        "zaebavam",
        "zaebano",
        "lizane",
        "lyskane",
        "laskane",
        "ebi se",
        "eyakuliram",
        "eqkuliram",
        "eqkulaciq",
        "eyakulaciq",
        "eqkulatsiq",
        "eyakulaciya",
        "eyakulatsya",
        "eyakulatsia",
        "eqkulatsya",
        "eyakulatsiya",
        "masturbiram",
        "masturbatsiya",
        "sperma",
        "shpakla",
        "6pakla",
        "pidal",
        "pidali pedal",
        "pendel",
        "pederast",
        "peeras",
        "pederastiya",
        "pederastiq",
        "pederastia",
        "pederaschenca",
        "pederascheta",
        "pederastchenca",
        "pederastiiski",
        "pederas",
        "pederastki",
        "pederaski",
        "lezbiika",
        "lezbiiki",
        "lesbiika",
        "lesbiiki",
        "lesbiyka",
        "lesbiyki",
        "lesbiystvo",
        "sex",
        "homo",
        "seks",
        "gay",
        "gay sex",
        "gey seks",
        "gey",
        "geyove",
        "porno",
        "detska pornografiya",
        "pornografiq",
        "pornografski",
        "pornografska",
        "pornografsko",
        "prydla",
        "prydlio",
        "prydlyo",
        "pradla",
        "pardene",
        "pradnya",
        "pradlyo",
        "seksi",
        "sexy",
        "negar",
        "srane",
        "sera",
        "da seresh",
        "sere6",
        "govno",
        "govnar",
        "guvno",
        "guvnar",
        "putka",
        "potka",
        "kurva",
        "kovra",
        "kurvar",
        "anal",
        "analen",
        "analna",
        "analno",
        "travestit",
        "trans dzhendar",
        "trans gender",
        "trans jender",
        "trans zendyr",
        "pornografiya",
        "maltretirane",
        "lud",
        "ludi",
        "idiot",
        "idioti",
        "ubii",
        "ubivam",
        "iznasilvam",
        "ubiy se",
        "tsigari",
        "tsigara",
        "cigara",
        "cigari",
        "pusha",
        "koz",
        "treva",
        "gybi",
        "gubi",
        "myrtyv",
        "martav",
        "droga",
        "narkotitsi",
        "marihuana",
        "kokain",
        "smart",
        "transseksualen",
        "transsexualen",
        "transsexualna",
        "transseksualna",
        "biseksualen",
        "bisexualen",
        "bisexualna",
        "biseksualna",
        "napompan",
        "napompana",
        "evrei",
        "evrein",
        "tsiganin",
        "ciganin",
        "ciganche",
        "ciganior",
        "tsigani",
        "proklet",
        "prokleti",
        "krada",
        "lyubovnik",
        "lubovnik",
        "umri",
        "pistolet",
        "pushka",
        "po dyavolite",
        "diavol",
        "devil",
        "satan",
        "dyavol",
        "glupatsi",
        "glupaci",
        "glopak",
        "glopatsi",
        "maloumnik",
        "maloumnitsi",
        "maloumni",
        "maloumna",
        "maloumno",
        "maloumen",
        "duda",
        "kelesh",
        "kele6",
        "keleme",
        "keleshi",
        "kreten",
        "kreteni",
        "layno",
        "laino",
        "govnyan",
        "laynar",
        "kur",
        "kurove",
        "huy",
        "penis",
        "qj yazh mi huya",
        "yazh mi kura",
        "yazh mi laynata",
        "huyove",
        "sodomiya",
        "sodomiq",
        "sodom",
        "homoseksualen",
        "homosexualen",
        "homoseksualist",
        "homosexualist",
        "shvester",
        "chep",
        "4ep",
        "chukam",
        "4ukam",
        "chukane",
        "4ukane",
        "na4ukam",
        "6ibam",
        "shibam",
        "6ibay",
        "6ibai",
        "shibay",
        "shibay",
        "shiban",
        "6ibano",
        "shibana",
        "shibani",
        "6iban",
        "6ibam",
        "6ibane",
        "shibano",
        "shibanyak",
        "shibaniak",
        "shibanyatsi",
        "partsal",
        "parcal",
        "pachavra",
        "pa4avra",
        "pachavri",
        "pa4avri",
        "anus",
        "anusi",
        "gyz",
        "kuchka",
        "ku4ka",
        "kuchki",
        "ku4ki",
        "gaz",
        "guz",
        "gazove",
        "guzove",
        "zadnik",
        "zadnitsi",
        "6unda",
        "pute",
        "shunda",
        "dildo",
        "vibrator",
        "pedal",
        "pedali",
        "pedalski",
        "felatsio",
        "kunilingus",
        "chikia",
        "4ikia",
        "4ikiq",
        "chikiq",
        "chikiya",
        "4ickya",
        "chikya",
        "chekidjiq",
        "4ekidjia",
        "4ekidjia",
        "chekidjiya",
        "chekiya",
        "4ekiya",
        "4ikiya",
        "chikiya",
        "chekii",
        "4ekii",
        "chikii",
        "4ikii",
        "laynyan",
        "lainqn",
        "lainyan",
        "svirka",
        "svirki",
        "zverski",
        "zhivotinski",
        "pradliv",
        "prydliv",
        "orgiya",
        "orgiq",
        "orgia",
        "orgy",
        "orgii",
        "pohotliv",
        "nasran",
        "posran",
        "osran",
        "orgazam",
        "orgasm",
        "orgazmi",
        "telefonen seks",
        "pichka",
        "pichki",
        "pi4ka",
        "pi4ki",
        "pi4e",
        "kaput",
        "prezervativ",
        "kondom",
        "naduvaema",
        "psuvam",
        "ptsovam",
        "zlaten dush",
        "piche",
        "sado-mazo",
        "sadomazo",
        "sadist",
        "seks-igrachki",
        "seks igrachki",
        "analni topcheta",
        "top4eta",
        "vagina",
        "vulva",
        "shunda",
        "6unda",
        "6undi",
        "shundi",
        "ebа",
        "еБа",
        "eба",
        "eбa",
        "ебa",
        "eбе",
        "eбe",
        "vagini",
        "vaginalen",
        "vaginalna",
        "vaginalno",
        "vaginalni",
        "babalyuga",
        "babaliuga",
        "podka",
        "kor",
        "hoy",
        "geytak",
        "rom",
        "romi",
        "4erwa",
        "4erva",
        "cherva",
        "nedagav",
        "menzic",
        "menzis",
        "cikyl",
        "cikal",
        "labia",
        "dupe",
        "gargamel",
        "sliva",
        "proctitytsiya",
        "prostituciq",
        "prostituciya",
        "prostitutka",
        "kompanyonka",
        "eskort",
        "fekalira",
        "hemeroidi",
        "razpori",
        "granyasal",
        "kopelentse",
        "sirenyasal",
        "nedoeban",
        "4ikiboets",
        "4ikiboec",
        "chikiboec",
        "chikiboets",
        "krivopishkov",
        "manaf",
        "4orebe",
        "chorebe",
        "fekalii",
        "fekalia",
        "ekskrementi",
        "ekskrement",
        "amphetamine",
        "ampheti",
        "amfetamin",
        "amfeti",
        "meth",
        "metadon",
        "methadone",
        "meskalin",
        "lsd",
        "extasy",
        "ekstazi",
        "lekarstvo",
        "eksploziv",
        "eksplozia",
        "terror",
        "teror",
        "terrorist",
        "terrorist",
        "kyp",
        "dopara",
        "dupara",
        "mentel",
        "nedoklaten",
        "nedoklateni",
        "nedoklatena",
        "mado",
        "mudo",
        "6it",
        "shit",
        "fuck",
        "cunt",
        "gay",
        "bitch",
        "biatch",
        "bitch",
        "blowjob",
        "handjob",
        "penis",
        "anal",
        "anus",
        "arse",
        "ass",
        "ballsack",
        "balls",
        "bloody",
        "blow job",
        "bollock",
        "boner",
        "boob",
        "bugger",
        "bum",
        "butt",
        "buttplug",
        "clitoris",
        "cock",
        "coon",
        "crap",
        "cunt",
        "damn",
        "dick",
        "dildo",
        "fag",
        "fellatio",
        "f u c k",
        "goddamn",
        "god damn",
        "hell",
        "homo",
        "jerk",
        "jizz",
        "penis",
        "piss",
        "poop",
        "prick",
        "pube",
        "pussy",
        "scrotum",
        "sex",
        "shit",
        "s hit",
        "sh1t",
        "slut",
        "smegma",
        "spunk",
        "tit",
        "turd",
        "twat",
        "vagina",
        "wank",
        "whore",
        "wtf",
        "analphabet",
        "anarchist",
        "ape",
        "arse",
        "arselicker",
        "ass",
        "ass master",
        "ass-kisser",
        "ass-nugget",
        "ass-wipe",
        "asshole",
        "backwoodsman",
        "balls",
        "bandit",
        "barbar",
        "bitch",
        "blubber gut",
        "booby",
        "boozer",
        "bozo",
        "brain-fart",
        "brainles",
        "brownie.bugger",
        "butt",
        "buttfucker",
        "butthead",
        "callboy",
        "callgirl",
        "camel",
        "cannibal",
        "chaavanist",
        "chauvi",
        "cheater",
        "children fucker",
        "clit",
        "clown",
        "cock",
        "cock master",
        "cock up",
        "cockboy",
        "cockfucker",
        "cockroach",
        "Dickhead",
        "exhibitionist",
        "slacker",
        "fucker",
        "hangover",
        "fag",
        "feck",
        "fellate",
        "fellatio",
        "felching",
        "fudgepacker",
        "fudge packer",
        "flange",
        "axwound",
        "bitchtits",
        "brotherfucker",
        "bumblefuck",
        "butt plug",
        "butt-pirate",
        "buttfucker",
        "buttfucka",
        "bampot",
        "carpetmuncher",
        "chesticle",
        "chode",
        "clit",
        "cuntflaps",
        "clitface",
        "clitfuck",
        "clusterfuck",
        "cockburger",
        "cockbite",
        "cockass",
        "cumguzzler",
        "cumdupmster",
        "cumslut",
        "cooter",
        "dickjuice",
        "dicktickler",
        "dickwad",
        "dickweasel",
        "dipshit",
        "douchebag",
        "dumbass",
        "dyke",
        "fagbag",
        "faggot",
        "faggotcock",
        "fuckface",
        "gaylord",
        "god",
        "jew",
        "jewish",
        "Israel",
        "isis",
        "terror",
        "terrorist",
        "nuke",
        "nuclear",
        "bomb",
        "explosion",
        "guns",
        "gun",
        "die",
        "shoot",
        "suicide",
        "homicide",
        "humping",
        "puto",
        "twat",
        "titfuck",
        "vajayjay",
        "wanker",
        "wank",
        "mierda",
        "mierda",
        "homosexuales",
        "mamada",
        "paja",
        "anal",
        "ano",
        "bolas",
        "sangrienta",
        "mamada",
        "bollock",
        "teta",
        "vago",
        "a tope",
        "buttplug",
        "coon",
        "mierda",
        "joder",
        "consolador",
        "marica",
        "sexo oral",
        "cogida",
        "demonios",
        "homo",
        "esperma",
        "negro",
        "negro",
        "pis",
        "merda",
        "dannazione",
        "dildo",
        "frocio",
        "fellatio",
        "homo",
        "piscio",
        "vagina",
        "puttana",
        "anarchico",
        "idiota",
        "terrorista",
        "puttana",
        "јеботе",
        "геј",
        "пениса",
        "анални",
        "анусу",
        "дупе",
        "копиле",
        "клиторис",
        "пенис",
        "курац",
        "дилдо",
        "пениса",
        "педеру",
        "скротум",
        "секс",
        "говно",
        "пичко",
        "вагине",
        "курва",
        "анархиста",
        "мозак-прдеж",
        "проститутке",
        "Цхауви",
        "деца јебач",
        "клиторис",
        "курац",
        "курац мајстор",
        "Пенис",
        "глупане",
        "лезбејка",
        "матер ти јебем",
        "терор",
        "терористи",
        "умрети",
        "самоубиство",
        "убиство",
        "кретен",
        "пичке",
        "педер",
        "пичко",
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        foreach ($this->blacklist as $word) {
            $word = strtolower($word);
            
            $result = DB::table('blacklists')->select('*')->where('word', $word)->first();
            
            if(!$result){
                DB::table('blacklists')->insert([
                    'word' => $word
                ]);
            }
        }
    }

}
