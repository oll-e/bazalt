<?php

namespace Framework\System\Locale\Language;

/**
 * @codeCoverageIgnoreStart
 */
class Uk extends Ru
{
    public function getLanguageName()
    {
        return 'Ukrainian';
    }

    public function toCase($word, $case, $gender = null)
    {
        using('Framework.Vendors.NameCaseLib');
        
        $nc = new NameCaseLib_Ua();
        $res = $nc->q($word, $case, $gender);
        return $res;
    }

    public function getCountries()
    {
        return self::$countries;
    }

    public function getCurrencies()
    {
        return self::$currency;
    }

    public function getLanguages()
    {
        return self::$languages;
    }

    protected static $regions = array(
        LOCALE_AFRICAN_COUNTRIES       => 'Африка',
        LOCALE_ASIAN_COUNTRIES         => 'Азія',
        LOCALE_EUROPEAN_COUNTRIES      => 'Европа',
        LOCALE_NORTHAMERICAN_COUNTRIES => 'Північна Америка',
        LOCALE_SOUTHAMERICAN_COUNTRIES => 'Південна Америка',
        LOCALE_OCEANIAN_COUNTRIES      => 'Океанія'
    );

    public function getTimeFormats()
    {
        return array(
            LOCALE_DATETIME_SHORT     =>  '%H:%M',
            LOCALE_DATETIME_DEFAULT   =>  '%H:%M:%S',
            LOCALE_DATETIME_MEDIUM    =>  '%H:%M:%S',
            LOCALE_DATETIME_LONG      =>  '%H:%M:%S %Z',
            LOCALE_DATETIME_FULL      =>  '%H:%M годин %Z'
        );
    }

    protected static $countries = array(
        'AD' => 'Андорра',
        'AE' => 'Обʼєднані Арабські Емірати',
        'AF' => 'Афганістан',
        'AG' => 'Антигуа і Барбуда',
        'AI' => 'Ангілья',
        'AL' => 'Албанія',
        'AM' => 'Вірменія',
        'AN' => 'Нідерландські Антільські Острови',
        'AO' => 'Ангола',
        'AQ' => 'Антарктика',
        'AR' => 'Аргентина',
        'AS' => 'Американське Самоа',
        'AT' => 'Австрія',
        'AU' => 'Австралія',
        'AW' => 'Аруба',
        'AX' => 'Аландські острови',
        'AZ' => 'Азербайджан',
        'BA' => 'Боснія і Герцоговина',
        'BB' => 'Барбадос',
        'BD' => 'Бангладеш',
        'BE' => 'Бельгія',
        'BF' => 'Буркіна-Фасо',
        'BG' => 'Болгарія',
        'BH' => 'Бахрейн',
        'BI' => 'Бурунді',
        'BJ' => 'Бенін',
        'BM' => 'Бермуди',
        'BN' => 'Бруней',
        'BO' => 'Болівія',
        'BQ' => 'British Antarctic Territory',
        'BR' => 'Бразилія',
        'BS' => 'Багами',
        'BT' => 'Бутан',
        'BV' => 'Буве, острів',
        'BW' => 'Ботсвана',
        'BY' => 'Білорусь',
        'BZ' => 'Беліз',
        'CA' => 'Канада',
        'CC' => 'Кокосові острови',
        'CD' => 'Конго, Демократична Республіка',
        'CF' => 'Центрально-Африканська Республіка',
        'CG' => 'Конго',
        'CH' => 'Швейцарія',
        'CI' => 'Кот-д’Івуар',
        'CK' => 'Острови Кука',
        'CL' => 'Чилі',
        'CM' => 'Камерун',
        'CN' => 'Китай',
        'CO' => 'Колумбія',
        'CR' => 'Коста-Рика',
        'CS' => 'Serbia And Montenegro',
        'CT' => 'Canton and Enderbury Islands',
        'CU' => 'Куба',
        'CV' => 'Кабо-Верде',
        'CX' => 'Острів Різдва',
        'CY' => 'Кіпр',
        'CZ' => 'Чеська республіка',
        'DD' => 'East Germany',
        'DE' => 'Німеччина',
        'DJ' => 'Джібуті',
        'DK' => 'Данія',
        'DM' => 'Домінік',
        'DO' => 'Домініканська Республіка',
        'DZ' => 'Алжир',
        'EC' => 'Еквадор',
        'EE' => 'Естонія',
        'EG' => 'Єгипет',
        'EH' => 'Західна Сахара',
        'ER' => 'Еритрея',
        'ES' => 'Іспанія',
        'ET' => 'Ефіопія',
        'FI' => 'Фінляндія',
        'FJ' => 'Фіджі',
        'FK' => 'Фолклендські Острови (Мальвіни)',
        'FM' => 'Мікронезія',
        'FO' => 'Фарерські острови',
        'FQ' => 'French Southern and Antarctic Territories',
        'FR' => 'Франція',
        'FX' => 'Metropolitan France',
        'GA' => 'Габон',
        'GB' => 'Великобританія',
        'GD' => 'Гренада',
        'GE' => 'Грузія',
        'GF' => 'Французька Гвіана',
        'GH' => 'Гана',
        'GI' => 'Гібралтар',
        'GL' => 'Гренландія',
        'GM' => 'Гамбія',
        'GN' => 'Гвінея',
        'GP' => 'Гваделупа',
        'GQ' => 'Екваторіальна Гвінея',
        'GR' => 'Греція',
        'GS' => 'Південна Джорджія та Південні Сандвічеві Острови',
        'GT' => 'Гватемала',
        'GU' => 'Гуам',
        'GW' => 'Гвінея-Біссау',
        'GY' => 'Гайана',
        'HK' => 'Гонконг, С.А.Р. Китаю',
        'HM' => 'Острови Херд і Мак-Дональд',
        'HN' => 'Гондурас',
        'HR' => 'Хорватія',
        'HT' => 'Гаїті',
        'HU' => 'Угорщина',
        'ID' => 'Індонезія',
        'IE' => 'Ірландія',
        'IL' => 'Ізраїль',
        'IN' => 'Індія',
        'IO' => 'Британські території Індійського океану',
        'IQ' => 'Ірак',
        'IR' => 'Іран',
        'IS' => 'Ісландія',
        'IT' => 'Італія',
        'JM' => 'Ямайка',
        'JO' => 'Йорданія',
        'JP' => 'Японія',
        'JT' => 'Johnston Island',
        'KE' => 'Кенія',
        'KG' => 'Киргизстан',
        'KH' => 'Камбоджа',
        'KI' => 'Кірибаті',
        'KM' => 'Коморські Острови',
        'KN' => 'Сент-Кітс і Невіс',
        'KP' => 'Північна Корея',
        'KR' => 'Південна Корея',
        'KW' => 'Кувейт',
        'KY' => 'Кайманові острови',
        'KZ' => 'Казахстан',
        'LA' => 'Лаос',
        'LB' => 'Ліван',
        'LC' => 'Сент-Люсія',
        'LI' => 'Ліхтенштейн',
        'LK' => 'Шрі-Ланка',
        'LR' => 'Ліберія',
        'LS' => 'Лесото',
        'LT' => 'Литва',
        'LU' => 'Люксембург',
        'LV' => 'Латвія',
        'LY' => 'Лівія',
        'MA' => 'Марокко',
        'MC' => 'Монако',
        'MD' => 'Молдова',
        'MG' => 'Мадагаскар',
        'MH' => 'Маршаллові Острови',
        'MI' => 'Midway Islands',
        'MK' => 'Македонія',
        'ML' => 'Малі',
        'MM' => 'Мʼянма',
        'MN' => 'Монголія',
        'MO' => 'Макао, С.А.Р. Китаю',
        'MP' => 'Північні Маріанські Острови',
        'MQ' => 'Мартиніка',
        'MR' => 'Мавританія',
        'MS' => 'Монсеррат',
        'MT' => 'Мальта',
        'MU' => 'Маврикій',
        'MV' => 'Мальдіви',
        'MW' => 'Малаві',
        'MX' => 'Мексика',
        'MY' => 'Малайзія',
        'MZ' => 'Мозамбік',
        'NA' => 'Намібія',
        'NC' => 'Нова Каледонія',
        'NE' => 'Нігер',
        'NF' => 'Острів Норфолк',
        'NG' => 'Нігерія',
        'NI' => 'Нікарагуа',
        'NL' => 'Нідерланди',
        'NO' => 'Норвегія',
        'NP' => 'Непал',
        'NQ' => 'Dronning Maud Land',
        'NR' => 'Науру',
        'NT' => 'Neutral Zone',
        'NU' => 'Нія',
        'NZ' => 'Нова Зеландія',
        'OM' => 'Оман',
        'PA' => 'Панама',
        'PC' => 'Pacific Islands Trust Territory',
        'PE' => 'Перу',
        'PF' => 'Французька Полінезія',
        'PG' => 'Папуа Нова Гвінея',
        'PH' => 'Філіппіни',
        'PK' => 'Пакистан',
        'PL' => 'Польща',
        'PM' => 'Сен-Пʼєр і Мікелон',
        'PN' => 'Піткерн',
        'PR' => 'Пуерто-Ріко',
        'PS' => 'Палестина',
        'PT' => 'Португалія',
        'PU' => 'U.S. Miscellaneous Pacific Islands',
        'PW' => 'Палау',
        'PY' => 'Парагвай',
        'PZ' => 'Panama Canal Zone',
        'QA' => 'Катар',
        'QO' => 'Інша Океанія',
        'RE' => 'Реюньйон',
        'RO' => 'Румунія',
        'RU' => 'Росія',
        'RW' => 'Руанда',
        'SA' => 'Саудівська Аравія',
        'SB' => 'Соломонові Острови',
        'SC' => 'Сейшели',
        'SD' => 'Судан',
        'SE' => 'Швеція',
        'SG' => 'Сінгапур',
        'SH' => 'Св. Єлена',
        'SI' => 'Словенія',
        'SJ' => 'Свалбард і Ян Майєн, острови',
        'SK' => 'Словакія',
        'SL' => 'Сьєрра-Леоне',
        'SM' => 'Сан-Маріно',
        'SN' => 'Сенегал',
        'SO' => 'Сомалі',
        'SR' => 'Суринам',
        'ST' => 'Сан-Томе і Прінсіпі',
        'SU' => 'Union of Soviet Socialist Republics',
        'SV' => 'Сальвадор',
        'SY' => 'Сирійська Арабська Республіка',
        'SZ' => 'Свазіленд',
        'TC' => 'Теркс і Кайкос',
        'TD' => 'Чад',
        'TF' => 'Французькі Південні Території',
        'TG' => 'Того',
        'TH' => 'Таїланд',
        'TJ' => 'Таджикистан',
        'TK' => 'Токелау',
        'TL' => 'Східний Тимор',
        'TM' => 'Туркменистан',
        'TN' => 'Туніс',
        'TO' => 'Тонга',
        'TR' => 'Туреччина',
        'TT' => 'Тринідад і Тобаго',
        'TV' => 'Тувалу',
        'TW' => 'Тайвань',
        'TZ' => 'Танзанія, Обʼєднана Республіка',
        'UA' => 'Україна',
        'UG' => 'Уганда',
        'UM' => 'Віддалені Острови США',
        'US' => 'США',
        'UY' => 'Уругвай',
        'UZ' => 'Узбекистан',
        'VA' => 'Ватикан',
        'VC' => 'Сент-Вінсент і Гренадини',
        'VD' => 'North Vietnam',
        'VE' => 'Венесуела',
        'VG' => 'Віргінські острови (Британія)',
        'VI' => 'Віргінські острови (США)',
        'VN' => 'Вʼєтнам',
        'VU' => 'Вануату',
        'WF' => 'Валліс і Футуна, острови',
        'WK' => 'Wake Island',
        'WS' => 'Самоа',
        'YD' => 'People\'s Democratic Republic of Yemen',
        'YE' => 'Ємен',
        'YT' => 'Майот',
        'ZA' => 'ПАР',
        'ZM' => 'Замбія',
        'ZW' => 'Зімбабве',
    );

    protected static $currency = array(
        'ADP' => 'Андоррська песета',
        'AED' => 'Дирхем ОАЕ',
        'AFA' => 'Афгані (1927-2002)',
        'AFN' => 'Афгані',
        'ALL' => 'Албанський лек',
        'AMD' => 'Вірменський драм',
        'ANG' => 'Гульден Нідерландських Антіл',
        'AOA' => 'Ангольська кванза',
        'AOK' => 'Ангольська кванза (1977-1990)',
        'AON' => 'Ангольська нова кванза (1990-2000)',
        'AOR' => 'Angolan Kwanza Reajustado (1995-1999)',
        'ARA' => 'Аргентинський австрал',
        'ARP' => 'Аргентинське песо (1983-1985)',
        'ARS' => 'Аргентинське песо',
        'ATS' => 'Австрійський шилінг',
        'AUD' => 'Австралійський долар',
        'AWG' => 'Арубський гульден',
        'AZM' => 'Азербайджанський манат',
        'BAD' => 'Динар Боснії і Гецоговини',
        'BAM' => 'Конвертована марка Боснії і Герцоговини',
        'BBD' => 'Барбадоський долар',
        'BDT' => 'Бангладеська така',
        'BEC' => 'Бельгійський франк (конвертований)',
        'BEF' => 'Бельгійський франк',
        'BEL' => 'Бельгійський франк (фінансовий)',
        'BGL' => 'Болгарський твердий лев',
        'BGN' => 'Болгарський новий лев',
        'BHD' => 'Бахрейнський динар',
        'BIF' => 'Бурундійський франк',
        'BMD' => 'Бермудський долар',
        'BND' => 'Брунейський доларr',
        'BOB' => 'Болівіано',
        'BOP' => 'Болівійське песо',
        'BOV' => 'Болівійський мвдол',
        'BRB' => 'Бразильське нове крузейро (1967-1986)',
        'BRC' => 'Бразильське крузадо',
        'BRE' => 'Бразильське крузейро (1990-1993)',
        'BRL' => 'Бразильський реал',
        'BRN' => 'Бразильське нове крузадо',
        'BRR' => 'Бразильське крузейро',
        'BSD' => 'Багамський долар',
        'BTN' => 'Бутанський нгултрум',
        'BUK' => 'Бірманський кіат',
        'BWP' => 'Ботсванська пула',
        'BYB' => 'Білоруський новий рубль (1994-1999)',
        'BYR' => 'Білоруський рубль',
        'BZD' => 'Белізький долар',
        'CAD' => 'Канадський долар',
        'CDF' => 'Конголезький франк',
        'CHE' => 'WIR Euro',
        'CHF' => 'Швейцарський франк',
        'CHW' => 'WIR Franc',
        'CLF' => 'Чилійський UF',
        'CLP' => 'Чилійське песо',
        'CNY' => 'Китайський юань',
        'COP' => 'Колумбійське песо',
        'COU' => 'Unidad de Valor Real',
        'CRC' => 'Коста-риканський колон',
        'CSD' => 'Serbian Dinar',
        'CSK' => 'Чехословацька тверда крона',
        'CUP' => 'Кубинське песо',
        'CVE' => 'Ескудо Кабо-Верде',
        'CYP' => 'Кіпрський фунт',
        'CZK' => 'Чеська крона',
        'DDM' => 'East German Ostmark',
        'DEM' => 'Німецька марка',
        'DJF' => 'Франк Джібуті',
        'DKK' => 'Датська крона',
        'DOP' => 'Домініканське песо',
        'DZD' => 'Алжирський динар',
        'ECS' => 'Еквадорське сукре',
        'ECV' => 'Еквадорський UVС',
        'EEK' => 'Естонська крона',
        'EGP' => 'Єгипетський фунт',
        'EQE' => 'Ekwele',
        'ERN' => 'Еритрейська накфа',
        'ESA' => 'Spanish Peseta (A account)',
        'ESB' => 'Spanish Peseta (convertible account)',
        'ESP' => 'Іспанська песета',
        'ETB' => 'Ефіопський бир',
        'EUR' => 'Євро',
        'FIM' => 'Фінляндська марка',
        'FJD' => 'Фіджійський долар',
        'FKP' => 'Фолклендський фунт',
        'FRF' => 'Французький франк',
        'GBP' => 'Англійський фунт стерлінгів',
        'GEK' => 'Georgian Kupon Larit',
        'GEL' => 'Грузинський ларі',
        'GHC' => 'Ганський седі',
        'GIP' => 'Гібралтарський фунт',
        'GMD' => 'Гамбійська даласі',
        'GNF' => 'Гвійнейський франк',
        'GNS' => 'Гвінейське сілі',
        'GQE' => 'Equatorial Guinea Ekwele Guineana',
        'GRD' => 'Грецька драхма',
        'GTQ' => 'Гватемальський кетсаль',
        'GWE' => 'Ескудо Португальської Гвінеї',
        'GWP' => 'Песо Гвінеї-Бісау',
        'GYD' => 'Гайянський долар',
        'HKD' => 'Гонконгівський долар',
        'HNL' => 'Гондураська лемпіра',
        'HRD' => 'Хорватський динар',
        'HRK' => 'Хорватська куна',
        'HTG' => 'Гаїтянський гурд',
        'HUF' => 'Угорський форинт',
        'IDR' => 'Індонезійська рупія',
        'IEP' => 'Ірландський фунт',
        'ILP' => 'Ізраїльський фунт',
        'ILS' => 'Ізраїльський новий шекель',
        'INR' => 'Індійська рупія',
        'IQD' => 'Іракський динар',
        'IRR' => 'Іранський ріал',
        'ISK' => 'Ісландська крона',
        'ITL' => 'Італійська ліра',
        'JMD' => 'Ямайський долар',
        'JOD' => 'Йорданський динар',
        'JPY' => 'Японська єна',
        'KES' => 'Кенійський шилінг',
        'KGS' => 'Киргизький сом',
        'KHR' => 'Камбоджійський рієль',
        'KMF' => 'Коморський франк',
        'KPW' => 'Вона Північної Кореї',
        'KRW' => 'Вона Південної Кореї',
        'KWD' => 'Кувейтський динар',
        'KYD' => 'Долар Кайманових островів',
        'KZT' => 'Казахстанський тенге',
        'LAK' => 'Лаоський кіп',
        'LBP' => 'Ліванський фунт',
        'LKR' => 'Шрі-ланкійська рупія',
        'LRD' => 'Ліберійський долар',
        'LSL' => 'Лесотський лоті',
        'LSM' => 'Maloti',
        'LTL' => 'Литовський літ',
        'LTT' => 'Литовський талон',
        'LUC' => 'Luxembourg Convertible Franc',
        'LUF' => 'Люксембурзький франк',
        'LUL' => 'Luxembourg Financial Franc',
        'LVL' => 'Латвійський лат',
        'LVR' => 'Латвійський рубль',
        'LYD' => 'Лівійський динар',
        'MAD' => 'Марокканський дирхем',
        'MAF' => 'Марокканський франк',
        'MDL' => 'Молдовський лей',
        'MGA' => 'Мадагаскарський аріарі',
        'MGF' => 'Мадагаскарський франк',
        'MKD' => 'Македонський динар',
        'MLF' => 'Малійський франк',
        'MMK' => 'Кʼят Мʼянми',
        'MNT' => 'Монгольський тугрик',
        'MOP' => 'Макао патака',
        'MRO' => 'Мавританська угія',
        'MTL' => 'Мальтійська ліра',
        'MTP' => 'Мальтійський фунт',
        'MUR' => 'Маврикійська рупія',
        'MVR' => 'Мальдівська руфія',
        'MWK' => 'Малавійська квача',
        'MXN' => 'Мексиканське песо',
        'MXP' => 'Мексиканське срібне песо (1861-1992)',
        'MXV' => 'Мексиканський UDI',
        'MYR' => 'Малайзійський рингіт',
        'MZE' => 'Мозамбіцький ескудо',
        'MZM' => 'Мозамбіцький метикал',
        'NAD' => 'Намібійський долар',
        'NGN' => 'Нігерійська найра',
        'NIC' => 'Нікарагуанська кордоба',
        'NIO' => 'Нікарагуанська кордоба оро',
        'NLG' => 'Нідерландський гульден',
        'NOK' => 'Норвезька крона',
        'NPR' => 'Непальська рупія',
        'NZD' => 'Новозеландський доларr',
        'OMR' => 'Оманський ріал',
        'PAB' => 'Панамська бальбоа',
        'PEI' => 'Перуанський інті',
        'PEN' => 'Перуанський новий сол',
        'PES' => 'Перуанський сол',
        'PGK' => 'Кіна Папуа Нової Гвінеї',
        'PHP' => 'Філіппінське песо',
        'PKR' => 'Пакистанська рупія',
        'PLN' => 'Польський злотий',
        'PLZ' => 'Польський злотий (1950-1995)',
        'PTE' => 'Португальський ескудо',
        'PYG' => 'Парагвайський гуарані',
        'QAR' => 'Катарський ріал',
        'RHD' => 'Rhodesian Dollar',
        'ROL' => 'Румунський лей',
        'RON' => 'Romanian Leu',
        'RUB' => 'Російський рубль',
        'RUR' => 'Російський рубль (1991-1998)',
        'RWF' => 'Руандійський франк',
        'SAR' => 'Саудівський ріал',
        'SBD' => 'Долар Соломонових Островів',
        'SCR' => 'Сейшельська рупія',
        'SDD' => 'Суданський динар',
        'SDP' => 'Суданський фунт',
        'SEK' => 'Шведська крона',
        'SGD' => 'Сінгапурський долар',
        'SHP' => 'Фунт Святої Єлени',
        'SIT' => 'Словенський толар',
        'SKK' => 'Словацька крона',
        'SLL' => 'Леоне Сьєрра-Леоне',
        'SOS' => 'Сомалійський шилінг',
        'SRD' => 'Surinam Dollar',
        'SRG' => 'Суринамський гульден',
        'STD' => 'Добра Сан-Томе і Прінсіпі',
        'SUR' => 'Радянський рубль',
        'SVC' => 'Ель-Сальвадорський колон',
        'SYP' => 'Сирійський фунт',
        'SZL' => 'Свазілендські лілангені',
        'THB' => 'Таїландський бат',
        'TJR' => 'Таджицький рубль',
        'TJS' => 'Таджицький сомоні',
        'TMM' => 'Туркменський манат',
        'TND' => 'Туніський динар',
        'TOP' => 'Паанга Тонго',
        'TPE' => 'Тіморський ескудо',
        'TRL' => 'Турецька ліра',
        'TRY' => 'Нова турецька ліра',
        'TTD' => 'Долар Тринідаду і Тобаго',
        'TWD' => 'Новий тайванський долар',
        'TZS' => 'Танзанійський шилінг',
        'UAH' => 'Українська гривня',
        'UAK' => 'Український карбованець',
        'UGS' => 'Угандійський шилінг (1966-1987)',
        'UGX' => 'Угандійський шилінг',
        'USD' => 'Долар США',
        'USN' => 'US Dollar (Next day)',
        'USS' => 'US Dollar (Same day)',
        'UYP' => 'Уругвайське песо (1975-1993)',
        'UYU' => 'Уругвайське песо',
        'UZS' => 'Узбецький сум',
        'VEB' => 'Венесуельський болівар',
        'VND' => 'Вʼєтнамський донг',
        'VUV' => 'Вануатська вату',
        'WST' => 'Тала Західного Самоа',
        'XAF' => 'Франк Центральноафриканського фінансового товариства',
        'XAG' => 'Silver',
        'XAU' => 'Золото',
        'XBA' => 'European Composite Unit',
        'XBB' => 'Європейська грошова одиниця',
        'XBC' => 'Європейська розрахункова одиниця (XBC)',
        'XBD' => 'Європейська розрахункова одиниця (XBD)',
        'XCD' => 'Долар Східних Кирибів',
        'XDR' => 'Спеціальні права запозичення',
        'XEU' => 'Європейська валютна одиниця',
        'XFO' => 'Французький золотий франк',
        'XFU' => 'Французький франк UIC',
        'XOF' => 'Франк Західноафриканського фінансового товариства',
        'XPD' => 'Palladium',
        'XPF' => 'Французький тихоокеанський франк',
        'XPT' => 'Platinum',
        'XRE' => 'RINET Funds',
        'XTS' => 'Testing Currency Code',
        'XXX' => 'No Currency',
        'YDD' => 'Єменський динар',
        'YER' => 'Єменський ріал',
        'YUD' => 'Югославський твердий динар',
        'YUM' => 'Югославський новий динар',
        'YUN' => 'Югославський конвертований динар',
        'ZAL' => 'Південноафриканський ранд',
        'ZAR' => 'Південноафриканський ранд',
        'ZMK' => 'Замбійська квача',
        'ZRN' => 'Заїрський новий заїр',
        'ZRZ' => 'Заїрський заїр',
        'ZWD' => 'Зімбабвійський долар',
    );

    protected static $languages = array(
        'aa' => 'Афарська',
        'ab' => 'Абхазька',
        'ae' => 'Avestan',
        'af' => 'Африканс',
        'ak' => 'Akan',
        'am' => 'Амхарік',
        'an' => 'Aragonese',
        'ar' => 'Арабська',
        'as' => 'Ассамська',
        'av' => 'Avaric',
        'ay' => 'Аймара',
        'az' => 'Азербайджанська',
        'ba' => 'Башкирська',
        'be' => 'Білоруська',
        'bg' => 'Болгарська',
        'bh' => 'Біхарійська',
        'bi' => 'Бісламійська',
        'bm' => 'Bambara',
        'bn' => 'Бенгальська',
        'bo' => 'Тибетська',
        'br' => 'Бретонська',
        'bs' => 'Bosnian',
        'ca' => 'Каталонська',
        'ce' => 'Chechen',
        'ch' => 'Chamorro',
        'co' => 'Корсиканська',
        'cr' => 'Cree',
        'cs' => 'Чеська',
        'cu' => 'Church Slavic',
        'cv' => 'Chuvash',
        'cy' => 'Валлійська',
        'da' => 'Датська',
        'de' => 'Німецька',
        'dv' => 'Divehi',
        'dz' => 'Дзонг-ке',
        'ee' => 'Ewe',
        'el' => 'Грецька',
        'en' => 'Англійська',
        'eo' => 'Есперанто',
        'es' => 'Іспанська',
        'et' => 'Естонська',
        'eu' => 'Басків',
        'fa' => 'Перська',
        'ff' => 'Fulah',
        'fi' => 'Фінська',
        'fj' => 'Фіджі',
        'fo' => 'Фарерська',
        'fr' => 'Французька',
        'fy' => 'Фризька',
        'ga' => 'Ірландська',
        'gd' => 'Гаельська',
        'gl' => 'Галісійська',
        'gn' => 'Гуарані',
        'gu' => 'Гуяраті',
        'gv' => 'Manx',
        'ha' => 'Хауса',
        'he' => 'Іврит',
        'hi' => 'Гінді',
        'ho' => 'Hiri Motu',
        'hr' => 'Хорватська',
        'ht' => 'Haitian',
        'hu' => 'Угорська',
        'hy' => 'Вірменська',
        'hz' => 'Herero',
        'ia' => 'Інтерлінгва',
        'id' => 'Індонезійська',
        'ie' => 'Інтерлінгва',
        'ig' => 'Igbo',
        'ii' => 'Sichuan Yi',
        'ik' => 'Інупіак',
        'io' => 'Ido',
        'is' => 'Ісландська',
        'it' => 'Італійська',
        'iu' => 'Inuktitut',
        'ja' => 'Японська',
        'jv' => 'Яванська',
        'ka' => 'Грузинська',
        'kg' => 'Kongo',
        'ki' => 'Kikuyu',
        'kj' => 'Kuanyama',
        'kk' => 'Казахська',
        'kl' => 'Калааллісут',
        'km' => 'Кхмерська',
        'kn' => 'Каннада',
        'ko' => 'Корейська',
        'kr' => 'Kanuri',
        'ks' => 'Кашмірська',
        'ku' => 'Курдська',
        'kv' => 'Komi',
        'kw' => 'Cornish',
        'ky' => 'Киргизька',
        'la' => 'Латинська',
        'lb' => 'Luxembourgish',
        'lg' => 'Ganda',
        'li' => 'Limburgish',
        'ln' => 'Лінгала',
        'lo' => 'Лаоська',
        'lt' => 'Литовська',
        'lu' => 'Luba-Katanga',
        'lv' => 'Латвійська',
        'mg' => 'Малагасійська',
        'mh' => 'Marshallese',
        'mi' => 'Маорі',
        'mk' => 'Македонська',
        'ml' => 'Малайялам',
        'mn' => 'Монгольська',
        'mo' => 'Молдавська',
        'mr' => 'Маратхі',
        'ms' => 'Малайська',
        'mt' => 'Мальтійська',
        'my' => 'Бірманська',
        'na' => 'Науру',
        'nb' => 'Norwegian Bokmål',
        'nd' => 'North Ndebele',
        'ne' => 'Непальська',
        'ng' => 'Ndonga',
        'nl' => 'Голландська',
        'nn' => 'Norwegian Nynorsk',
        'no' => 'Норвезька',
        'nr' => 'South Ndebele',
        'nv' => 'Navajo',
        'ny' => 'Nyanja; Chichewa; Chewa',
        'oc' => 'Окитан',
        'oj' => 'Ojibwa',
        'om' => 'Оромо',
        'or' => 'Орія',
        'os' => 'Ossetic',
        'pa' => 'Панджабі',
        'pi' => 'Pali',
        'pl' => 'Польська',
        'ps' => 'Пашто',
        'pt' => 'Португальська',
        'qu' => 'Кечуа',
        'rm' => 'Ретророманські діалекти',
        'rn' => 'Кірундійська',
        'ro' => 'Румунська',
        'ru' => 'Російська',
        'rw' => 'Кінаруанда',
        'sa' => 'Санскрит',
        'sc' => 'Sardinian',
        'sd' => 'Сіндтхі',
        'se' => 'Northern Sami',
        'sg' => 'Сангро',
        'sh' => 'Сербсько-хорватська',
        'si' => 'Сингальська',
        'sk' => 'Словацька',
        'sl' => 'Словенська',
        'sm' => 'Самоанська',
        'sn' => 'Шона',
        'so' => 'Сомалі',
        'sq' => 'Албанська',
        'sr' => 'Сербська',
        'ss' => 'Сісваті',
        'st' => 'Сото, південний діалект',
        'su' => 'Суданська',
        'sv' => 'Шведська',
        'sw' => 'Суахілі',
        'ta' => 'Тамільська',
        'te' => 'Телугу',
        'tg' => 'Таджицька',
        'th' => 'Тайська',
        'ti' => 'Тигріні',
        'tk' => 'Туркменська',
        'tl' => 'Тагальська',
        'tn' => 'Сетсванська',
        'to' => 'Тонга (острови Тонга)',
        'tr' => 'Турецька',
        'ts' => 'Тсонго',
        'tt' => 'Татарська',
        'tw' => 'Тві',
        'ty' => 'Tahitian',
        'ug' => 'Уйгурська',
        'uk' => 'Українська',
        'ur' => 'Урду',
        'uz' => 'Узбецька',
        've' => 'Venda',
        'vi' => 'Вʼєтнамська',
        'vo' => 'Волапак',
        'wa' => 'Walloon',
        'wo' => 'Волоф',
        'xh' => 'Кхоса',
        'yi' => 'Ідиш',
        'yo' => 'Йоруба',
        'za' => 'Зуанг',
        'zh' => 'Китайська',
        'zu' => 'Зулуська',
    );
}
// @codeCoverageIgnoreEnd