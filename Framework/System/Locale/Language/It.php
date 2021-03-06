<?php

/**
 * @codeCoverageIgnoreStart
 */
class Locale_Language_It extends Locale_AbstractLanguage
{
    public function getLanguageName()
    {
        return 'Italian';
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
        LOCALE_AFRICAN_COUNTRIES       => '',
        LOCALE_ASIAN_COUNTRIES         => '',
        LOCALE_EUROPEAN_COUNTRIES      => '',
        LOCALE_NORTHAMERICAN_COUNTRIES => '',
        LOCALE_SOUTHAMERICAN_COUNTRIES => '',
        LOCALE_OCEANIAN_COUNTRIES      => ''
    );

    public function getRegions()
    {
        return self::$regions;
    }

    public function getDateFormats()
    {
        return array(
            LOCALE_DATETIME_SHORT     =>  '%d/%m/%y',
            LOCALE_DATETIME_DEFAULT   =>  '%d-%b-%Y',
            LOCALE_DATETIME_MEDIUM    =>  '%d-%b-%Y',
            LOCALE_DATETIME_LONG      =>  '%d %B %Y',
            LOCALE_DATETIME_FULL      =>  '%A, %d %B %Y'
        );
    }

    public function getTimeFormats()
    {
        return array(
            LOCALE_DATETIME_SHORT     =>  '%H:%M',
            LOCALE_DATETIME_DEFAULT   =>  '%H:%M:%S',
            LOCALE_DATETIME_MEDIUM    =>  '%H:%M:%S',
            LOCALE_DATETIME_LONG      =>  '%H:%M:%S %Z',
            LOCALE_DATETIME_FULL      =>  '%H:%M o\'clock %Z'
        ); 
    }

    protected static $countries = array(
        'AD' => 'Andorra',
        'AE' => 'Emirati Arabi Uniti',
        'AF' => 'Afghanistan',
        'AG' => 'Antigua e Barbuda',
        'AI' => 'Anguilla',
        'AL' => 'Albania',
        'AM' => 'Armenia',
        'AN' => 'Antille Olandesi',
        'AO' => 'Angola',
        'AQ' => 'Antartide',
        'AR' => 'Argentina',
        'AS' => 'Samoa Americane',
        'AT' => 'Austria',
        'AU' => 'Australia',
        'AW' => 'Aruba',
        'AX' => 'Aland Islands',
        'AZ' => 'Azerbaigian',
        'BA' => 'Bosnia Erzegovina',
        'BB' => 'Barbados',
        'BD' => 'Bangladesh',
        'BE' => 'Belgio',
        'BF' => 'Burkina Faso',
        'BG' => 'Bulgaria',
        'BH' => 'Bahrein',
        'BI' => 'Burundi',
        'BJ' => 'Benin',
        'BM' => 'Bermuda',
        'BN' => 'Brunei',
        'BO' => 'Bolivia',
        'BQ' => 'British Antarctic Territory',
        'BR' => 'Brasile',
        'BS' => 'Bahamas',
        'BT' => 'Bhutan',
        'BV' => 'Isola Bouvet',
        'BW' => 'Botswana',
        'BY' => 'Bielorussia',
        'BZ' => 'Belize',
        'CA' => 'Canada',
        'CC' => 'Isole Cocos (Keeling)',
        'CD' => 'Repubblica Democratica del Congo',
        'CF' => 'Repubblica Centrafricana',
        'CG' => 'Congo',
        'CH' => 'Svizzera',
        'CI' => 'Costa d’Avorio',
        'CK' => 'Isole Cook',
        'CL' => 'Cile',
        'CM' => 'Camerun',
        'CN' => 'Cina',
        'CO' => 'Colombia',
        'CR' => 'Costa Rica',
        'CS' => 'Serbia e Montenegro',
        'CT' => 'Canton and Enderbury Islands',
        'CU' => 'Cuba',
        'CV' => 'Capo Verde',
        'CX' => 'Isola di Christmas',
        'CY' => 'Cipro',
        'CZ' => 'Repubblica Ceca',
        'DD' => 'East Germany',
        'DE' => 'Germania',
        'DJ' => 'Gibuti',
        'DK' => 'Danimarca',
        'DM' => 'Dominica',
        'DO' => 'Repubblica Dominicana',
        'DZ' => 'Algeria',
        'EC' => 'Ecuador',
        'EE' => 'Estonia',
        'EG' => 'Egitto',
        'EH' => 'Sahara Occidentale',
        'ER' => 'Eritrea',
        'ES' => 'Spagna',
        'ET' => 'Etiopia',
        'FI' => 'Finlandia',
        'FJ' => 'Figi',
        'FK' => 'Isole Falkland',
        'FM' => 'Micronesia',
        'FO' => 'Isole Faroe',
        'FQ' => 'French Southern and Antarctic Territories',
        'FR' => 'Francia',
        'FX' => 'Metropolitan France',
        'GA' => 'Gabon',
        'GB' => 'Regno Unito',
        'GD' => 'Grenada',
        'GE' => 'Georgia',
        'GF' => 'Guiana Francese',
        'GH' => 'Ghana',
        'GI' => 'Gibilterra',
        'GL' => 'Groenlandia',
        'GM' => 'Gambia',
        'GN' => 'Guinea',
        'GP' => 'Guadalupa',
        'GQ' => 'Guinea Equatoriale',
        'GR' => 'Grecia',
        'GS' => 'Georgia del Sud e Isole Sandwich del Sud',
        'GT' => 'Guatemala',
        'GU' => 'Guam',
        'GW' => 'Guinea-Bissau',
        'GY' => 'Guyana',
        'HK' => 'Regione Amministrativa Speciale di Hong Kong, Cina',
        'HM' => 'Isole Heard ed Isole McDonald',
        'HN' => 'Honduras',
        'HR' => 'Croazia',
        'HT' => 'Haiti',
        'HU' => 'Ungheria',
        'ID' => 'Indonesia',
        'IE' => 'Irlanda',
        'IL' => 'Israele',
        'IN' => 'India',
        'IO' => 'Territorio Britannico dell’Oceano Indiano',
        'IQ' => 'Iraq',
        'IR' => 'Iran',
        'IS' => 'Islanda',
        'IT' => 'Italia',
        'JM' => 'Giamaica',
        'JO' => 'Giordania',
        'JP' => 'Giappone',
        'JT' => 'Johnston Island',
        'KE' => 'Kenya',
        'KG' => 'Kirghizistan',
        'KH' => 'Cambogia',
        'KI' => 'Kiribati',
        'KM' => 'Comore',
        'KN' => 'Saint Kitts e Nevis',
        'KP' => 'Corea del Nord',
        'KR' => 'Corea del Sud',
        'KW' => 'Kuwait',
        'KY' => 'Isole Cayman',
        'KZ' => 'Kazakistan',
        'LA' => 'Laos',
        'LB' => 'Libano',
        'LC' => 'Saint Lucia',
        'LI' => 'Liechtenstein',
        'LK' => 'Sri Lanka',
        'LR' => 'Liberia',
        'LS' => 'Lesotho',
        'LT' => 'Lituania',
        'LU' => 'Lussemburgo',
        'LV' => 'Lettonia',
        'LY' => 'Libia',
        'MA' => 'Marocco',
        'MC' => 'Monaco',
        'MD' => 'Moldavia',
        'MG' => 'Madagascar',
        'MH' => 'Isole Marshall',
        'MI' => 'Midway Islands',
        'MK' => 'Macedonia, Repubblica',
        'ML' => 'Mali',
        'MM' => 'Myanmar',
        'MN' => 'Mongolia',
        'MO' => 'Regione Amministrativa Speciale di Macao, Cina',
        'MP' => 'Isole Marianne Settentrionali',
        'MQ' => 'Martinica',
        'MR' => 'Mauritania',
        'MS' => 'Montserrat',
        'MT' => 'Malta',
        'MU' => 'Maurizio',
        'MV' => 'Maldive',
        'MW' => 'Malawi',
        'MX' => 'Messico',
        'MY' => 'Malaysia',
        'MZ' => 'Mozambico',
        'NA' => 'Namibia',
        'NC' => 'Nuova Caledonia',
        'NE' => 'Niger',
        'NF' => 'Isola Norfolk',
        'NG' => 'Nigeria',
        'NI' => 'Nicaragua',
        'NL' => 'Paesi Bassi',
        'NO' => 'Norvegia',
        'NP' => 'Nepal',
        'NQ' => 'Dronning Maud Land',
        'NR' => 'Nauru',
        'NT' => 'Neutral Zone',
        'NU' => 'Niue',
        'NZ' => 'Nuova Zelanda',
        'OM' => 'Oman',
        'PA' => 'Panama',
        'PC' => 'Pacific Islands Trust Territory',
        'PE' => 'Perù',
        'PF' => 'Polinesia Francese',
        'PG' => 'Papua Nuova Guinea',
        'PH' => 'Filippine',
        'PK' => 'Pakistan',
        'PL' => 'Polonia',
        'PM' => 'Saint Pierre e Miquelon',
        'PN' => 'Pitcairn',
        'PR' => 'Portorico',
        'PS' => 'Palestina',
        'PT' => 'Portogallo',
        'PU' => 'U.S. Miscellaneous Pacific Islands',
        'PW' => 'Palau',
        'PY' => 'Paraguay',
        'PZ' => 'Panama Canal Zone',
        'QA' => 'Qatar',
        'QO' => 'Outlying Oceania',
        'RE' => 'Réunion',
        'RO' => 'Romania',
        'RU' => 'Federazione Russa',
        'RW' => 'Ruanda',
        'SA' => 'Arabia Saudita',
        'SB' => 'Isole Solomon',
        'SC' => 'Seychelles',
        'SD' => 'Sudan',
        'SE' => 'Svezia',
        'SG' => 'Singapore',
        'SH' => 'Sant’Elena',
        'SI' => 'Slovenia',
        'SJ' => 'Svalbard e Jan Mayen',
        'SK' => 'Slovacchia',
        'SL' => 'Sierra Leone',
        'SM' => 'San Marino',
        'SN' => 'Senegal',
        'SO' => 'Somalia',
        'SR' => 'Suriname',
        'ST' => 'São Tomé e Príncipe',
        'SU' => 'Union of Soviet Socialist Republics',
        'SV' => 'El Salvador',
        'SY' => 'Siria',
        'SZ' => 'Swaziland',
        'TC' => 'Isole Turks e Caicos',
        'TD' => 'Ciad',
        'TF' => 'Territori australi francesi',
        'TG' => 'Togo',
        'TH' => 'Tailandia',
        'TJ' => 'Tagikistan',
        'TK' => 'Tokelau',
        'TL' => 'Timor Est',
        'TM' => 'Turkmenistan',
        'TN' => 'Tunisia',
        'TO' => 'Tonga',
        'TR' => 'Turchia',
        'TT' => 'Trinidad e Tobago',
        'TV' => 'Tuvalu',
        'TW' => 'Taiwan',
        'TZ' => 'Tanzania',
        'UA' => 'Ucraina',
        'UG' => 'Uganda',
        'UM' => 'Isole Minori lontane dagli Stati Uniti',
        'US' => 'Stati Uniti',
        'UY' => 'Uruguay',
        'UZ' => 'Uzbekistan',
        'VA' => 'Vaticano',
        'VC' => 'Saint Vincent e Grenadines',
        'VD' => 'North Vietnam',
        'VE' => 'Venezuela',
        'VG' => 'Isole Vergini Britanniche',
        'VI' => 'Isole Vergini Americane',
        'VN' => 'Vietnam',
        'VU' => 'Vanuatu',
        'WF' => 'Wallis e Futuna',
        'WK' => 'Wake Island',
        'WS' => 'Samoa',
        'YD' => 'People\'s Democratic Republic of Yemen',
        'YE' => 'Yemen',
        'YT' => 'Mayotte',
        'ZA' => 'Sudafrica',
        'ZM' => 'Zambia',
        'ZW' => 'Zimbabwe',
    );

    protected static $currency = array(
        'ADP' => 'Peseta Andorrana',
        'AED' => 'Dirham degli Emirati Arabi Uniti',
        'AFA' => 'Afgani (1927-2002)',
        'AFN' => 'Afgani',
        'ALL' => 'Lek Albanese',
        'AMD' => 'Dram Armeno',
        'ANG' => 'Fiorino delle Antille Olandesi',
        'AOA' => 'Kwanza Angolano',
        'AOK' => 'Kwanza Angolano (1977-1990)',
        'AON' => 'Nuovo Kwanza Angolano (1990-2000)',
        'AOR' => 'Kwanza Reajustado Angolano (1995-1999)',
        'ARA' => 'Austral Argentino',
        'ARP' => 'Peso Argentino (vecchio Cod.)',
        'ARS' => 'Peso Argentino',
        'ATS' => 'Scellino Austriaco',
        'AUD' => 'Dollaro Australiano',
        'AWG' => 'Fiorino di Aruba',
        'AZM' => 'Manat Azero',
        'BAD' => 'Dinar Bosnia-Herzegovina',
        'BAM' => 'Marco Conv. Bosnia-Erzegovina',
        'BBD' => 'Dollaro di Barbados',
        'BDT' => 'Taka Bangladese',
        'BEC' => 'Franco Belga (convertibile)',
        'BEF' => 'Franco Belga',
        'BEL' => 'Franco Belga (finanziario)',
        'BGL' => 'Lev Bulgaro',
        'BGN' => 'Nuovo Lev Bulgaro',
        'BHD' => 'Dinaro del Bahraini',
        'BIF' => 'Franco del Burundi',
        'BMD' => 'Dollaro delle Bermuda',
        'BND' => 'Dollaro del Brunei',
        'BOB' => 'Boliviano',
        'BOP' => 'Peso Boliviano',
        'BOV' => 'Mvdol Boliviano',
        'BRB' => 'Cruzeiro Novo Brasiliano (1967-1986)',
        'BRC' => 'Cruzado Brasiliano',
        'BRE' => 'Cruzeiro Brasiliano (1990-1993)',
        'BRL' => 'Real Brasiliano',
        'BRN' => 'Cruzado Novo Brasiliano',
        'BRR' => 'Cruzeiro Brasiliano',
        'BSD' => 'Dollaro delle Bahamas',
        'BTN' => 'Ngultrum Butanese',
        'BUK' => 'Kyat Birmano',
        'BWP' => 'Pula del Botswana',
        'BYB' => 'Nuovo Rublo Bielorussia (1994-1999)',
        'BYR' => 'Rublo Bielorussia',
        'BZD' => 'Dollaro Belize',
        'CAD' => 'Dollaro Canadese',
        'CDF' => 'Franco Congolese',
        'CHE' => 'WIR Euro',
        'CHF' => 'Franco Svizzero',
        'CHW' => 'WIR Franc',
        'CLF' => 'Unidades de Fomento Chilene',
        'CLP' => 'Peso Cileno',
        'CNY' => 'Renmimbi Cinese',
        'COP' => 'Peso Colombiano',
        'COU' => 'Unidad de Valor Real',
        'CRC' => 'Colón Costaricano',
        'CSD' => 'Serbian Dinar',
        'CSK' => 'Corona forte cecoslovacca',
        'CUP' => 'Peso Cubano',
        'CVE' => 'Escudo del Capo Verde',
        'CYP' => 'Sterlina Cipriota',
        'CZK' => 'Corona Ceca',
        'DDM' => 'Ostmark della Germania Orientale',
        'DEM' => 'Marco Tedesco',
        'DJF' => 'Franco Gibutiano',
        'DKK' => 'Corona Danese',
        'DOP' => 'Peso Dominicano',
        'DZD' => 'Dinaro Algerino',
        'ECS' => 'Sucre dell’Ecuador',
        'ECV' => 'Unidad de Valor Constante (UVC) dell’Ecuador',
        'EEK' => 'Corona dell’Estonia',
        'EGP' => 'Sterlina Egiziana',
        'EQE' => 'Ekwele',
        'ERN' => 'Nakfa Eritreo',
        'ESA' => 'Spanish Peseta (A account)',
        'ESB' => 'Spanish Peseta (convertible account)',
        'ESP' => 'Peseta Spagnola',
        'ETB' => 'Birr Etiopico',
        'EUR' => 'Euro',
        'FIM' => 'Markka Finlandese',
        'FJD' => 'Dollaro delle Figi',
        'FKP' => 'Sterlina delle Falkland',
        'FRF' => 'Franco Francese',
        'GBP' => 'Sterlina Inglese',
        'GEK' => 'Kupon Larit Georgiano',
        'GEL' => 'Lari Georgiano',
        'GHC' => 'Cedi del Ghana',
        'GIP' => 'Sterlina di Gibilterra',
        'GMD' => 'Dalasi del Gambia',
        'GNF' => 'Franco della Guinea',
        'GNS' => 'Syli della Guinea',
        'GQE' => 'Ekwele della Guinea Equatoriale',
        'GRD' => 'Dracma Greca',
        'GTQ' => 'Quetzal Guatemalteco',
        'GWE' => 'Escudo della Guinea portoghese',
        'GWP' => 'Peso della Guinea-Bissau',
        'GYD' => 'Dollaro della Guyana',
        'HKD' => 'Dollaro di Hong Kong',
        'HNL' => 'Lempira Hoduregno',
        'HRD' => 'Dinaro Croato',
        'HRK' => 'Kuna Croata',
        'HTG' => 'Gourde Haitiano',
        'HUF' => 'Fiorino Ungherese',
        'IDR' => 'Rupia Indiana',
        'IEP' => 'Lira Irlandese',
        'ILP' => 'Sterlina Israeliana',
        'ILS' => 'Nuovo sheqel israeliano',
        'INR' => 'Rupia Indiana',
        'IQD' => 'Dinaro Iracheno',
        'IRR' => 'Rial Iraniano',
        'ISK' => 'Corona Islandese',
        'ITL' => 'Lira Italiana',
        'JMD' => 'Dollaro Giamaicano',
        'JOD' => 'Dinaro Giordano',
        'JPY' => 'Yen Giapponese',
        'KES' => 'Scellino Keniota',
        'KGS' => 'Som  Kirghiso',
        'KHR' => 'Riel Cambogiano',
        'KMF' => 'Franco Comoriano',
        'KPW' => 'Won Nordcoreano',
        'KRW' => 'Won Sudcoreano',
        'KWD' => 'Dinaro Kuwaitiano',
        'KYD' => 'Dollaro delle Isole Cayman',
        'KZT' => 'Tenge Kazaco',
        'LAK' => 'Kip Laotiano',
        'LBP' => 'Sterlina Libanese',
        'LKR' => 'Rupia di Sri Lanka',
        'LRD' => 'Dollaro Liberiano',
        'LSL' => 'Loti del Lesotho',
        'LSM' => 'Maloti',
        'LTL' => 'Lita Lituana',
        'LTT' => 'Talonas Lituani',
        'LUC' => 'Luxembourg Convertible Franc',
        'LUF' => 'Franco del Lussemburgo',
        'LUL' => 'Luxembourg Financial Franc',
        'LVL' => 'Lat Lettone',
        'LVR' => 'Rublo Lettone',
        'LYD' => 'Dinaro Libico',
        'MAD' => 'Dirham Marocchino',
        'MAF' => 'Franco Marocchino',
        'MDL' => 'Leu Moldavo',
        'MGA' => 'Ariary Malgascio',
        'MGF' => 'Franco Malgascio',
        'MKD' => 'Dinaro Macedone',
        'MLF' => 'Franco di Mali',
        'MMK' => 'Kyat di Myanmar',
        'MNT' => 'Tugrik Mongolo',
        'MOP' => 'Pataca di Macao',
        'MRO' => 'Ouguiya della Mauritania',
        'MTL' => 'Lira Maltese',
        'MTP' => 'Sterlina Maltese',
        'MUR' => 'Rupia Mauriziana',
        'MVR' => 'Rufiyaa delle Maldive',
        'MWK' => 'Kwacha Malawiano',
        'MXN' => 'Peso Messicano',
        'MXP' => 'Peso messicano d’argento (1861-1992)',
        'MXV' => 'Unidad de Inversion (UDI) Messicana',
        'MYR' => 'Ringgit della Malesia',
        'MZE' => 'Escudo del Mozambico',
        'MZM' => 'Metical del Mozambico',
        'NAD' => 'Dollaro Namibiano',
        'NGN' => 'Naira Nigeriana',
        'NIC' => 'Cordoba Nicaraguense',
        'NIO' => 'Córdoba oro nicaraguense',
        'NLG' => 'Fiorino Olandese',
        'NOK' => 'Corona Norvegese',
        'NPR' => 'Rupia Nepalese',
        'NZD' => 'Dollaro Neozelandese',
        'OMR' => 'Rial Omanita',
        'PAB' => 'Balboa di Panama',
        'PEI' => 'Inti Peruviano',
        'PEN' => 'Sol Nuevo Peruviano',
        'PES' => 'Sol Peruviano',
        'PGK' => 'Kina della Papua Nuova Guinea',
        'PHP' => 'Peso delle Filippine',
        'PKR' => 'Rupia del Pakistan',
        'PLN' => 'Zloty Polacco',
        'PLZ' => 'Zloty Polacco (1950-1995)',
        'PTE' => 'Escudo Portoghese',
        'PYG' => 'Guarani del Paraguay',
        'QAR' => 'Rial del Qatar',
        'RHD' => 'Rhodesian Dollar',
        'ROL' => 'Leu della Romania',
        'RON' => 'Romanian Leu',
        'RUB' => 'Rublo Russo',
        'RUR' => 'Rublo della CSI',
        'RWF' => 'Franco Ruandese',
        'SAR' => 'Ryal Saudita',
        'SBD' => 'Dollaro delle Isole Solomon',
        'SCR' => 'Rupia delle Seychelles',
        'SDD' => 'Dinaro Sudanese',
        'SDP' => 'Sterlina Sudanese',
        'SEK' => 'Corona Svedese',
        'SGD' => 'Dollaro di Singapore',
        'SHP' => 'Sterlina di Sant’Elena',
        'SIT' => 'Tallero Sloveno',
        'SKK' => 'Corona Slovacca',
        'SLL' => 'Leone della Sierra Leone',
        'SOS' => 'Scellino Somalo',
        'SRD' => 'Surinam Dollar',
        'SRG' => 'Fiorino del Suriname',
        'STD' => 'Dobra di São Tomé e Principe',
        'SUR' => 'Rublo Sovietico',
        'SVC' => 'Colón Salvadoregno',
        'SYP' => 'Sterlina Siriana',
        'SZL' => 'Lilangeni dello Swaziland',
        'THB' => 'Baht Tailandese',
        'TJR' => 'Rublo del Tajikistan',
        'TJS' => 'Somoni del Tajikistan',
        'TMM' => 'Manat Turkmeno',
        'TND' => 'Dinaro Tunisino',
        'TOP' => 'Paʻanga di Tonga',
        'TPE' => 'Escudo di Timor',
        'TRL' => 'Lira Turca',
        'TRY' => 'New Turkish Lira',
        'TTD' => 'Dollaro di Trinidad e Tobago',
        'TWD' => 'Nuovo dollaro taiwanese',
        'TZS' => 'Scellino della Tanzania',
        'UAH' => 'Hrivna Ucraina',
        'UAK' => 'Karbovanetz Ucraino',
        'UGS' => 'Scellino Ugandese (1966-1987)',
        'UGX' => 'Scellino Ugandese',
        'USD' => 'Dollaro Statunitense',
        'USN' => 'Dollaro Statunitense (Next day)',
        'USS' => 'Dollaro Statunitense (Same day)',
        'UYP' => 'Peso Uruguaiano (1975-1993)',
        'UYU' => 'Peso Uruguayo uruguaiano',
        'UZS' => 'Sum dell’Uzbekistan',
        'VEB' => 'Bolivar Venezuelano',
        'VND' => 'Dong Vietnamita',
        'VUV' => 'Vatu di Vanuatu',
        'WST' => 'Tala della Samoa Occidentale',
        'XAF' => 'Franco CFA BEAC',
        'XAG' => 'Silver',
        'XAU' => 'Oro',
        'XBA' => 'Unità composita europea',
        'XBB' => 'Unità monetaria europea',
        'XBC' => 'Unità di acconto europea (XBC)',
        'XBD' => 'Unità di acconto europea (XBD)',
        'XCD' => 'Dollaro dei Caraibi Orientali',
        'XDR' => 'Diritti Speciali di Incasso',
        'XEU' => 'Unità Monetaria Europea',
        'XFO' => 'Franco Oro Francese',
        'XFU' => 'Franco UIC Francese',
        'XOF' => 'Franco CFA BCEAO',
        'XPD' => 'Palladium',
        'XPF' => 'Franco CFP',
        'XPT' => 'Platinum',
        'XRE' => 'RINET Funds',
        'XTS' => 'Testing Currency Code',
        'XXX' => 'No Currency',
        'YDD' => 'Dinaro dello Yemen',
        'YER' => 'Rial dello Yemen',
        'YUD' => 'Dinaro Forte Yugoslavo',
        'YUM' => 'Dinaro Noviy Yugoslavo',
        'YUN' => 'Dinaro Convertibile Yugoslavo',
        'ZAL' => 'Rand Sudafricano (finanziario)',
        'ZAR' => 'Rand Sudafricano',
        'ZMK' => 'Kwacha dello Zambia',
        'ZRN' => 'Nuovo Zaire dello Zaire',
        'ZRZ' => 'Zaire dello Zaire',
        'ZWD' => 'Dollaro dello Zimbabwe',
    );

    protected static $languages = array(
        'aa' => 'Afar',
        'ab' => 'Abkhazian',
        'ae' => 'Avestan',
        'af' => 'Afrikaans',
        'ak' => 'Akan',
        'am' => 'Amarico',
        'an' => 'Aragonese',
        'ar' => 'Arabo',
        'as' => 'Assamese',
        'av' => 'Avaro',
        'ay' => 'Aymara',
        'az' => 'Azerbaigiano',
        'ba' => 'Baschiro',
        'be' => 'Bielorusso',
        'bg' => 'Bulgaro',
        'bh' => 'Bihari',
        'bi' => 'Bislama',
        'bm' => 'Bambara',
        'bn' => 'Bengalese',
        'bo' => 'Tibetano',
        'br' => 'Bretone',
        'bs' => 'Bosniaco',
        'ca' => 'Catalano',
        'ce' => 'Ceceno',
        'ch' => 'Chamorro',
        'co' => 'Corso',
        'cr' => 'Cree',
        'cs' => 'Ceco',
        'cu' => 'Slavo della Chiesa',
        'cv' => 'Chuvash',
        'cy' => 'Gallese',
        'da' => 'Danese',
        'de' => 'Tedesco',
        'dv' => 'Divehi',
        'dz' => 'Dzongkha',
        'ee' => 'Ewe',
        'el' => 'Greco',
        'en' => 'Inglese',
        'eo' => 'Esperanto',
        'es' => 'Spagnolo',
        'et' => 'Estone',
        'eu' => 'Basco',
        'fa' => 'Persiano',
        'ff' => 'Fulah',
        'fi' => 'Finlandese',
        'fj' => 'Figiano',
        'fo' => 'Faroese',
        'fr' => 'Francese',
        'fy' => 'Frisone',
        'ga' => 'Irlandese',
        'gd' => 'Gaelico scozzese',
        'gl' => 'Galiziano',
        'gn' => 'Guarana',
        'gu' => 'Gujarati',
        'gv' => 'Manx',
        'ha' => 'Haussa',
        'he' => 'Ebraico',
        'hi' => 'Hindi',
        'ho' => 'Hiri motu',
        'hr' => 'Croato',
        'ht' => 'Haitiano',
        'hu' => 'Ungherese',
        'hy' => 'Armeno',
        'hz' => 'Herero',
        'ia' => 'Interlingua',
        'id' => 'Indonesiano',
        'ie' => 'Interlingue',
        'ig' => 'Igbo',
        'ii' => 'Sichuan yi',
        'ik' => 'Inupiak',
        'io' => 'Ido',
        'is' => 'Islandese',
        'it' => 'Italiano',
        'iu' => 'Inuktitut',
        'ja' => 'Giapponese',
        'jv' => 'Giavanese',
        'ka' => 'Georgiano',
        'kg' => 'Kongo',
        'ki' => 'Kikuyu',
        'kj' => 'Kuanyama',
        'kk' => 'Kazako',
        'kl' => 'Kalaallisut',
        'km' => 'Khmer',
        'kn' => 'Kannada',
        'ko' => 'Coreano',
        'kr' => 'Kanuri',
        'ks' => 'Kashmiri',
        'ku' => 'Curdo',
        'kv' => 'Komi',
        'kw' => 'Cornico',
        'ky' => 'Kirghiso',
        'la' => 'Latino',
        'lb' => 'Lussemburghese',
        'lg' => 'Ganda',
        'li' => 'Limburgese',
        'ln' => 'Lingala',
        'lo' => 'Lao',
        'lt' => 'Lituano',
        'lu' => 'Luba-katanga',
        'lv' => 'Lettone',
        'mg' => 'Malgascio',
        'mh' => 'Marshallese',
        'mi' => 'Maori',
        'mk' => 'Macedone',
        'ml' => 'Malayalam',
        'mn' => 'Mongolo',
        'mo' => 'Moldavo',
        'mr' => 'Marathi',
        'ms' => 'Malese',
        'mt' => 'Maltese',
        'my' => 'Birmano',
        'na' => 'Nauru',
        'nb' => 'Norvegese bokmål',
        'nd' => 'Ndebele del nord',
        'ne' => 'Nepalese',
        'ng' => 'Ndonga',
        'nl' => 'Olandese',
        'nn' => 'Norvegese nynorsk',
        'no' => 'Norvegese',
        'nr' => 'Ndebele del sud',
        'nv' => 'Navajo',
        'ny' => 'Nyanja; chichewa; chewa',
        'oc' => 'Occitano (post 1500); provenzale',
        'oj' => 'Ojibwa',
        'om' => 'Oromo',
        'or' => 'Oriya',
        'os' => 'Ossetico',
        'pa' => 'Punjabi',
        'pi' => 'Pali',
        'pl' => 'Polacco',
        'ps' => 'Pashto',
        'pt' => 'Portoghese',
        'qu' => 'Quechua',
        'rm' => 'Lingua rhaeto-romance',
        'rn' => 'Rundi',
        'ro' => 'Rumeno',
        'ru' => 'Russo',
        'rw' => 'Kinyarwanda',
        'sa' => 'Sanscrito',
        'sc' => 'Sardo',
        'sd' => 'Sindhi',
        'se' => 'Sami del nord',
        'sg' => 'Sango',
        'sh' => 'Serbo-croato',
        'si' => 'Singalese',
        'sk' => 'Slovacco',
        'sl' => 'Sloveno',
        'sm' => 'Samoano',
        'sn' => 'Shona',
        'so' => 'Somalo',
        'sq' => 'Albanese',
        'sr' => 'Serbo',
        'ss' => 'Swati',
        'st' => 'Sotho del sud',
        'su' => 'Sundanese',
        'sv' => 'Svedese',
        'sw' => 'Swahili',
        'ta' => 'Tamil',
        'te' => 'Telugu',
        'tg' => 'Tagicco',
        'th' => 'Thai',
        'ti' => 'Tigrinya',
        'tk' => 'Turcomanno',
        'tl' => 'Tagalog',
        'tn' => 'Tswana',
        'to' => 'Tonga (Isole Tonga)',
        'tr' => 'Turco',
        'ts' => 'Tsonga',
        'tt' => 'Tatarico',
        'tw' => 'Ci',
        'ty' => 'Taitiano',
        'ug' => 'Uigurico',
        'uk' => 'Ucraino',
        'ur' => 'Urdu',
        'uz' => 'Usbeco',
        've' => 'Venda',
        'vi' => 'Vietnamita',
        'vo' => 'Volapük',
        'wa' => 'Vallone',
        'wo' => 'Volof',
        'xh' => 'Xosa',
        'yi' => 'Yiddish',
        'yo' => 'Yoruba',
        'za' => 'Zhuang',
        'zh' => 'Cinese',
        'zu' => 'Zulu',
    );
}
// @codeCoverageIgnoreEnd