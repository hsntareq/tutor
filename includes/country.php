<?php
/**
 * Country List
 *
 * @package Tutor\Includes
 * @author Themeum <support@themeum.com>
 * @link https=>//themeum.com
 * @since 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'tutor_get_country_list' ) ) {
    function tutor_get_country_list() {
        $country_list = [
            [
                "name" =>  "Afghanistan",
                "numeric_code" =>  "004",
                "alpha_2" =>  "AF",
                "alpha_3" =>  "AFG",
                "phone_code" =>  "93",
                "currency" =>  "AFN",
                "currency_name" =>  "Afghan afghani",
                "currency_symbol" =>  "\u060b",
                "emoji" =>  "\ud83c\udde6\ud83c\uddeb",
                "states" =>  [
                    [
                        "id" =>  3901,
                        "name" =>  "Badakhshan"
                    ],
                    [
                        "id" =>  3871,
                        "name" =>  "Badghis"
                    ],
                    [
                        "id" =>  3875,
                        "name" =>  "Baghlan"
                    ],
                    [
                        "id" =>  3884,
                        "name" =>  "Balkh"
                    ],
                    [
                        "id" =>  3872,
                        "name" =>  "Bamyan"
                    ],
                    [
                        "id" =>  3892,
                        "name" =>  "Daykundi"
                    ],
                    [
                        "id" =>  3899,
                        "name" =>  "Farah"
                    ],
                    [
                        "id" =>  3889,
                        "name" =>  "Faryab"
                    ],
                    [
                        "id" =>  3870,
                        "name" =>  "Ghazni"
                    ],
                    [
                        "id" =>  3888,
                        "name" =>  "Gh\u014dr"
                    ],
                    [
                        "id" =>  3873,
                        "name" =>  "Helmand"
                    ],
                    [
                        "id" =>  3887,
                        "name" =>  "Herat"
                    ],
                    [
                        "id" =>  3886,
                        "name" =>  "Jowzjan"
                    ],
                    [
                        "id" =>  3902,
                        "name" =>  "Kabul"
                    ],
                    [
                        "id" =>  3890,
                        "name" =>  "Kandahar"
                    ],
                    [
                        "id" =>  3879,
                        "name" =>  "Kapisa"
                    ],
                    [
                        "id" =>  3878,
                        "name" =>  "Khost"
                    ],
                    [
                        "id" =>  3876,
                        "name" =>  "Kunar"
                    ],
                    [
                        "id" =>  3900,
                        "name" =>  "Kunduz Province"
                    ],
                    [
                        "id" =>  3891,
                        "name" =>  "Laghman"
                    ],
                    [
                        "id" =>  3897,
                        "name" =>  "Logar"
                    ],
                    [
                        "id" =>  3882,
                        "name" =>  "Nangarhar"
                    ],
                    [
                        "id" =>  3896,
                        "name" =>  "Nimruz"
                    ],
                    [
                        "id" =>  3880,
                        "name" =>  "Nuristan"
                    ],
                    [
                        "id" =>  3894,
                        "name" =>  "Paktia"
                    ],
                    [
                        "id" =>  3877,
                        "name" =>  "Paktika"
                    ],
                    [
                        "id" =>  3881,
                        "name" =>  "Panjshir"
                    ],
                    [
                        "id" =>  3895,
                        "name" =>  "Parwan"
                    ],
                    [
                        "id" =>  3883,
                        "name" =>  "Samangan"
                    ],
                    [
                        "id" =>  3885,
                        "name" =>  "Sar-e Pol"
                    ],
                    [
                        "id" =>  3893,
                        "name" =>  "Takhar"
                    ],
                    [
                        "id" =>  3898,
                        "name" =>  "Urozgan"
                    ],
                    [
                        "id" =>  3874,
                        "name" =>  "Zabul"
                    ]
                ]
            ],
            [
                "name" =>  "Aland Islands",
                "numeric_code" =>  "248",
                "alpha_2" =>  "AX",
                "alpha_3" =>  "ALA",
                "phone_code" =>  "+358-18",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\udde6\ud83c\uddfd",
                "states" =>  []
            ],
            [
                "name" =>  "Albania",
                "numeric_code" =>  "008",
                "alpha_2" =>  "AL",
                "alpha_3" =>  "ALB",
                "phone_code" =>  "355",
                "currency" =>  "ALL",
                "currency_name" =>  "Albanian lek",
                "currency_symbol" =>  "Lek",
                "emoji" =>  "\ud83c\udde6\ud83c\uddf1",
                "states" =>  [
                    [
                        "id" =>  603,
                        "name" =>  "Berat County"
                    ],
                    [
                        "id" =>  629,
                        "name" =>  "Berat District"
                    ],
                    [
                        "id" =>  607,
                        "name" =>  "Bulqiz\u00eb District"
                    ],
                    [
                        "id" =>  618,
                        "name" =>  "Delvin\u00eb District"
                    ],
                    [
                        "id" =>  608,
                        "name" =>  "Devoll District"
                    ],
                    [
                        "id" =>  610,
                        "name" =>  "Dib\u00ebr County"
                    ],
                    [
                        "id" =>  605,
                        "name" =>  "Dib\u00ebr District"
                    ],
                    [
                        "id" =>  632,
                        "name" =>  "Durr\u00ebs County"
                    ],
                    [
                        "id" =>  639,
                        "name" =>  "Durr\u00ebs District"
                    ],
                    [
                        "id" =>  598,
                        "name" =>  "Elbasan County"
                    ],
                    [
                        "id" =>  631,
                        "name" =>  "Fier County"
                    ],
                    [
                        "id" =>  627,
                        "name" =>  "Fier District"
                    ],
                    [
                        "id" =>  604,
                        "name" =>  "Gjirokast\u00ebr County"
                    ],
                    [
                        "id" =>  621,
                        "name" =>  "Gjirokast\u00ebr District"
                    ],
                    [
                        "id" =>  617,
                        "name" =>  "Gramsh District"
                    ],
                    [
                        "id" =>  600,
                        "name" =>  "Has District"
                    ],
                    [
                        "id" =>  594,
                        "name" =>  "Kavaj\u00eb District"
                    ],
                    [
                        "id" =>  628,
                        "name" =>  "Kolonj\u00eb District"
                    ],
                    [
                        "id" =>  630,
                        "name" =>  "Kor\u00e7\u00eb County"
                    ],
                    [
                        "id" =>  597,
                        "name" =>  "Kor\u00e7\u00eb District"
                    ],
                    [
                        "id" =>  614,
                        "name" =>  "Kruj\u00eb District"
                    ],
                    [
                        "id" =>  612,
                        "name" =>  "Ku\u00e7ov\u00eb District"
                    ],
                    [
                        "id" =>  601,
                        "name" =>  "Kuk\u00ebs County"
                    ],
                    [
                        "id" =>  623,
                        "name" =>  "Kuk\u00ebs District"
                    ],
                    [
                        "id" =>  622,
                        "name" =>  "Kurbin District"
                    ],
                    [
                        "id" =>  609,
                        "name" =>  "Lezh\u00eb County"
                    ],
                    [
                        "id" =>  595,
                        "name" =>  "Lezh\u00eb District"
                    ],
                    [
                        "id" =>  596,
                        "name" =>  "Librazhd District"
                    ],
                    [
                        "id" =>  599,
                        "name" =>  "Lushnj\u00eb District"
                    ],
                    [
                        "id" =>  602,
                        "name" =>  "Mal\u00ebsi e Madhe District"
                    ],
                    [
                        "id" =>  637,
                        "name" =>  "Mallakast\u00ebr District"
                    ],
                    [
                        "id" =>  635,
                        "name" =>  "Mat District"
                    ],
                    [
                        "id" =>  638,
                        "name" =>  "Mirdit\u00eb District"
                    ],
                    [
                        "id" =>  619,
                        "name" =>  "Peqin District"
                    ],
                    [
                        "id" =>  625,
                        "name" =>  "P\u00ebrmet District"
                    ],
                    [
                        "id" =>  606,
                        "name" =>  "Pogradec District"
                    ],
                    [
                        "id" =>  620,
                        "name" =>  "Puk\u00eb District"
                    ],
                    [
                        "id" =>  624,
                        "name" =>  "Sarand\u00eb District"
                    ],
                    [
                        "id" =>  611,
                        "name" =>  "Shkod\u00ebr County"
                    ],
                    [
                        "id" =>  626,
                        "name" =>  "Shkod\u00ebr District"
                    ],
                    [
                        "id" =>  593,
                        "name" =>  "Skrapar District"
                    ],
                    [
                        "id" =>  616,
                        "name" =>  "Tepelen\u00eb District"
                    ],
                    [
                        "id" =>  615,
                        "name" =>  "Tirana County"
                    ],
                    [
                        "id" =>  633,
                        "name" =>  "Tirana District"
                    ],
                    [
                        "id" =>  636,
                        "name" =>  "Tropoj\u00eb District"
                    ],
                    [
                        "id" =>  634,
                        "name" =>  "Vlor\u00eb County"
                    ],
                    [
                        "id" =>  613,
                        "name" =>  "Vlor\u00eb District"
                    ]
                ]
            ],
            [
                "name" =>  "Algeria",
                "numeric_code" =>  "012",
                "alpha_2" =>  "DZ",
                "alpha_3" =>  "DZA",
                "phone_code" =>  "213",
                "currency" =>  "DZD",
                "currency_name" =>  "Algerian dinar",
                "currency_symbol" =>  "\u062f\u062c",
                "emoji" =>  "\ud83c\udde9\ud83c\uddff",
                "states" =>  [
                    [
                        "id" =>  1118,
                        "name" =>  "Adrar"
                    ],
                    [
                        "id" =>  1119,
                        "name" =>  "A\u00efn Defla"
                    ],
                    [
                        "id" =>  1122,
                        "name" =>  "A\u00efn T\u00e9mouchent"
                    ],
                    [
                        "id" =>  1144,
                        "name" =>  "Algiers"
                    ],
                    [
                        "id" =>  1103,
                        "name" =>  "Annaba"
                    ],
                    [
                        "id" =>  1142,
                        "name" =>  "Batna"
                    ],
                    [
                        "id" =>  1108,
                        "name" =>  "B\u00e9char"
                    ],
                    [
                        "id" =>  1128,
                        "name" =>  "B\u00e9ja\u00efa"
                    ],
                    [
                        "id" =>  4909,
                        "name" =>  "B\u00e9ni Abb\u00e8s"
                    ],
                    [
                        "id" =>  1114,
                        "name" =>  "Biskra"
                    ],
                    [
                        "id" =>  1111,
                        "name" =>  "Blida"
                    ],
                    [
                        "id" =>  4908,
                        "name" =>  "Bordj Baji Mokhtar"
                    ],
                    [
                        "id" =>  1116,
                        "name" =>  "Bordj Bou Arr\u00e9ridj"
                    ],
                    [
                        "id" =>  1104,
                        "name" =>  "Bou\u00efra"
                    ],
                    [
                        "id" =>  1125,
                        "name" =>  "Boumerd\u00e8s"
                    ],
                    [
                        "id" =>  1105,
                        "name" =>  "Chlef"
                    ],
                    [
                        "id" =>  1121,
                        "name" =>  "Constantine"
                    ],
                    [
                        "id" =>  4912,
                        "name" =>  "Djanet"
                    ],
                    [
                        "id" =>  1098,
                        "name" =>  "Djelfa"
                    ],
                    [
                        "id" =>  1129,
                        "name" =>  "El Bayadh"
                    ],
                    [
                        "id" =>  4905,
                        "name" =>  "El M'ghair"
                    ],
                    [
                        "id" =>  4906,
                        "name" =>  "El Menia"
                    ],
                    [
                        "id" =>  1099,
                        "name" =>  "El Oued"
                    ],
                    [
                        "id" =>  1100,
                        "name" =>  "El Tarf"
                    ],
                    [
                        "id" =>  1127,
                        "name" =>  "Gharda\u00efa"
                    ],
                    [
                        "id" =>  1137,
                        "name" =>  "Guelma"
                    ],
                    [
                        "id" =>  1112,
                        "name" =>  "Illizi"
                    ],
                    [
                        "id" =>  4914,
                        "name" =>  "In Guezzam"
                    ],
                    [
                        "id" =>  4913,
                        "name" =>  "In Salah"
                    ],
                    [
                        "id" =>  1113,
                        "name" =>  "Jijel"
                    ],
                    [
                        "id" =>  1126,
                        "name" =>  "Khenchela"
                    ],
                    [
                        "id" =>  1138,
                        "name" =>  "Laghouat"
                    ],
                    [
                        "id" =>  1134,
                        "name" =>  "M'Sila"
                    ],
                    [
                        "id" =>  1124,
                        "name" =>  "Mascara"
                    ],
                    [
                        "id" =>  1109,
                        "name" =>  "M\u00e9d\u00e9a"
                    ],
                    [
                        "id" =>  1132,
                        "name" =>  "Mila"
                    ],
                    [
                        "id" =>  1140,
                        "name" =>  "Mostaganem"
                    ],
                    [
                        "id" =>  1102,
                        "name" =>  "Naama"
                    ],
                    [
                        "id" =>  1101,
                        "name" =>  "Oran"
                    ],
                    [
                        "id" =>  1139,
                        "name" =>  "Ouargla"
                    ],
                    [
                        "id" =>  4907,
                        "name" =>  "Ouled Djellal"
                    ],
                    [
                        "id" =>  1136,
                        "name" =>  "Oum El Bouaghi"
                    ],
                    [
                        "id" =>  1130,
                        "name" =>  "Relizane"
                    ],
                    [
                        "id" =>  1123,
                        "name" =>  "Sa\u00efda"
                    ],
                    [
                        "id" =>  1141,
                        "name" =>  "S\u00e9tif"
                    ],
                    [
                        "id" =>  4902,
                        "name" =>  "Sidi Bel Abb\u00e8s"
                    ],
                    [
                        "id" =>  1110,
                        "name" =>  "Skikda"
                    ],
                    [
                        "id" =>  1143,
                        "name" =>  "Souk Ahras"
                    ],
                    [
                        "id" =>  1135,
                        "name" =>  "Tamanghasset"
                    ],
                    [
                        "id" =>  1117,
                        "name" =>  "T\u00e9bessa"
                    ],
                    [
                        "id" =>  1106,
                        "name" =>  "Tiaret"
                    ],
                    [
                        "id" =>  4910,
                        "name" =>  "Timimoun"
                    ],
                    [
                        "id" =>  1120,
                        "name" =>  "Tindouf"
                    ],
                    [
                        "id" =>  1115,
                        "name" =>  "Tipasa"
                    ],
                    [
                        "id" =>  1133,
                        "name" =>  "Tissemsilt"
                    ],
                    [
                        "id" =>  1131,
                        "name" =>  "Tizi Ouzou"
                    ],
                    [
                        "id" =>  1107,
                        "name" =>  "Tlemcen"
                    ],
                    [
                        "id" =>  4911,
                        "name" =>  "Touggourt"
                    ]
                ]
            ],
            [
                "name" =>  "American Samoa",
                "numeric_code" =>  "016",
                "alpha_2" =>  "AS",
                "alpha_3" =>  "ASM",
                "phone_code" =>  "+1-684",
                "currency" =>  "USD",
                "currency_name" =>  "US Dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde6\ud83c\uddf8",
                "states" =>  []
            ],
            [
                "name" =>  "Andorra",
                "numeric_code" =>  "020",
                "alpha_2" =>  "AD",
                "alpha_3" =>  "AND",
                "phone_code" =>  "376",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\udde6\ud83c\udde9",
                "states" =>  [
                    [
                        "id" =>  488,
                        "name" =>  "Andorra la Vella"
                    ],
                    [
                        "id" =>  489,
                        "name" =>  "Canillo"
                    ],
                    [
                        "id" =>  487,
                        "name" =>  "Encamp"
                    ],
                    [
                        "id" =>  492,
                        "name" =>  "Escaldes-Engordany"
                    ],
                    [
                        "id" =>  493,
                        "name" =>  "La Massana"
                    ],
                    [
                        "id" =>  491,
                        "name" =>  "Ordino"
                    ],
                    [
                        "id" =>  490,
                        "name" =>  "Sant Juli\u00e0 de L\u00f2ria"
                    ]
                ]
            ],
            [
                "name" =>  "Angola",
                "numeric_code" =>  "024",
                "alpha_2" =>  "AO",
                "alpha_3" =>  "AGO",
                "phone_code" =>  "244",
                "currency" =>  "AOA",
                "currency_name" =>  "Angolan kwanza",
                "currency_symbol" =>  "Kz",
                "emoji" =>  "\ud83c\udde6\ud83c\uddf4",
                "states" =>  [
                    [
                        "id" =>  221,
                        "name" =>  "Bengo Province"
                    ],
                    [
                        "id" =>  218,
                        "name" =>  "Benguela Province"
                    ],
                    [
                        "id" =>  212,
                        "name" =>  "Bi\u00e9 Province"
                    ],
                    [
                        "id" =>  228,
                        "name" =>  "Cabinda Province"
                    ],
                    [
                        "id" =>  226,
                        "name" =>  "Cuando Cubango Province"
                    ],
                    [
                        "id" =>  217,
                        "name" =>  "Cuanza Norte Province"
                    ],
                    [
                        "id" =>  216,
                        "name" =>  "Cuanza Sul"
                    ],
                    [
                        "id" =>  215,
                        "name" =>  "Cunene Province"
                    ],
                    [
                        "id" =>  213,
                        "name" =>  "Huambo Province"
                    ],
                    [
                        "id" =>  225,
                        "name" =>  "Hu\u00edla Province"
                    ],
                    [
                        "id" =>  222,
                        "name" =>  "Luanda Province"
                    ],
                    [
                        "id" =>  223,
                        "name" =>  "Lunda Norte Province"
                    ],
                    [
                        "id" =>  220,
                        "name" =>  "Lunda Sul Province"
                    ],
                    [
                        "id" =>  227,
                        "name" =>  "Malanje Province"
                    ],
                    [
                        "id" =>  219,
                        "name" =>  "Moxico Province"
                    ],
                    [
                        "id" =>  224,
                        "name" =>  "U\u00edge Province"
                    ],
                    [
                        "id" =>  214,
                        "name" =>  "Zaire Province"
                    ]
                ]
            ],
            [
                "name" =>  "Anguilla",
                "numeric_code" =>  "660",
                "alpha_2" =>  "AI",
                "alpha_3" =>  "AIA",
                "phone_code" =>  "+1-264",
                "currency" =>  "XCD",
                "currency_name" =>  "East Caribbean dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde6\ud83c\uddee",
                "states" =>  []
            ],
            [
                "name" =>  "Antarctica",
                "numeric_code" =>  "010",
                "alpha_2" =>  "AQ",
                "alpha_3" =>  "ATA",
                "phone_code" =>  "672",
                "currency" =>  "AAD",
                "currency_name" =>  "Antarctican dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde6\ud83c\uddf6",
                "states" =>  []
            ],
            [
                "name" =>  "Antigua And Barbuda",
                "numeric_code" =>  "028",
                "alpha_2" =>  "AG",
                "alpha_3" =>  "ATG",
                "phone_code" =>  "+1-268",
                "currency" =>  "XCD",
                "currency_name" =>  "Eastern Caribbean dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde6\ud83c\uddec",
                "states" =>  [
                    [
                        "id" =>  3708,
                        "name" =>  "Barbuda"
                    ],
                    [
                        "id" =>  3703,
                        "name" =>  "Redonda"
                    ],
                    [
                        "id" =>  3709,
                        "name" =>  "Saint George Parish"
                    ],
                    [
                        "id" =>  3706,
                        "name" =>  "Saint John Parish"
                    ],
                    [
                        "id" =>  3707,
                        "name" =>  "Saint Mary Parish"
                    ],
                    [
                        "id" =>  3705,
                        "name" =>  "Saint Paul Parish"
                    ],
                    [
                        "id" =>  3704,
                        "name" =>  "Saint Peter Parish"
                    ],
                    [
                        "id" =>  3710,
                        "name" =>  "Saint Philip Parish"
                    ]
                ]
            ],
            [
                "name" =>  "Argentina",
                "numeric_code" =>  "032",
                "alpha_2" =>  "AR",
                "alpha_3" =>  "ARG",
                "phone_code" =>  "54",
                "currency" =>  "ARS",
                "currency_name" =>  "Argentine peso",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde6\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  3656,
                        "name" =>  "Buenos Aires"
                    ],
                    [
                        "id" =>  3647,
                        "name" =>  "Catamarca"
                    ],
                    [
                        "id" =>  3640,
                        "name" =>  "Chaco"
                    ],
                    [
                        "id" =>  3651,
                        "name" =>  "Chubut"
                    ],
                    [
                        "id" =>  4880,
                        "name" =>  "Ciudad Aut\u00f3noma de Buenos Aires"
                    ],
                    [
                        "id" =>  3642,
                        "name" =>  "C\u00f3rdoba"
                    ],
                    [
                        "id" =>  3638,
                        "name" =>  "Corrientes"
                    ],
                    [
                        "id" =>  3654,
                        "name" =>  "Entre R\u00edos"
                    ],
                    [
                        "id" =>  3652,
                        "name" =>  "Formosa"
                    ],
                    [
                        "id" =>  3645,
                        "name" =>  "Jujuy"
                    ],
                    [
                        "id" =>  3655,
                        "name" =>  "La Pampa"
                    ],
                    [
                        "id" =>  3653,
                        "name" =>  "La Rioja"
                    ],
                    [
                        "id" =>  3646,
                        "name" =>  "Mendoza"
                    ],
                    [
                        "id" =>  3644,
                        "name" =>  "Misiones"
                    ],
                    [
                        "id" =>  3648,
                        "name" =>  "Neuqu\u00e9n"
                    ],
                    [
                        "id" =>  3639,
                        "name" =>  "R\u00edo Negro"
                    ],
                    [
                        "id" =>  3643,
                        "name" =>  "Salta"
                    ],
                    [
                        "id" =>  3634,
                        "name" =>  "San Juan"
                    ],
                    [
                        "id" =>  3636,
                        "name" =>  "San Luis"
                    ],
                    [
                        "id" =>  3649,
                        "name" =>  "Santa Cruz"
                    ],
                    [
                        "id" =>  3641,
                        "name" =>  "Santa Fe"
                    ],
                    [
                        "id" =>  3635,
                        "name" =>  "Santiago del Estero"
                    ],
                    [
                        "id" =>  3650,
                        "name" =>  "Tierra del Fuego"
                    ],
                    [
                        "id" =>  3637,
                        "name" =>  "Tucum\u00e1n"
                    ]
                ]
            ],
            [
                "name" =>  "Armenia",
                "numeric_code" =>  "051",
                "alpha_2" =>  "AM",
                "alpha_3" =>  "ARM",
                "phone_code" =>  "374",
                "currency" =>  "AMD",
                "currency_name" =>  "Armenian dram",
                "currency_symbol" =>  "\u058f",
                "emoji" =>  "\ud83c\udde6\ud83c\uddf2",
                "states" =>  [
                    [
                        "id" =>  2023,
                        "name" =>  "Aragatsotn Region"
                    ],
                    [
                        "id" =>  2024,
                        "name" =>  "Ararat Province"
                    ],
                    [
                        "id" =>  2026,
                        "name" =>  "Armavir Region"
                    ],
                    [
                        "id" =>  2028,
                        "name" =>  "Gegharkunik Province"
                    ],
                    [
                        "id" =>  2033,
                        "name" =>  "Kotayk Region"
                    ],
                    [
                        "id" =>  2029,
                        "name" =>  "Lori Region"
                    ],
                    [
                        "id" =>  2031,
                        "name" =>  "Shirak Region"
                    ],
                    [
                        "id" =>  2027,
                        "name" =>  "Syunik Province"
                    ],
                    [
                        "id" =>  2032,
                        "name" =>  "Tavush Region"
                    ],
                    [
                        "id" =>  2025,
                        "name" =>  "Vayots Dzor Region"
                    ],
                    [
                        "id" =>  2030,
                        "name" =>  "Yerevan"
                    ]
                ]
            ],
            [
                "name" =>  "Aruba",
                "numeric_code" =>  "533",
                "alpha_2" =>  "AW",
                "alpha_3" =>  "ABW",
                "phone_code" =>  "297",
                "currency" =>  "AWG",
                "currency_name" =>  "Aruban florin",
                "currency_symbol" =>  "\u0192",
                "emoji" =>  "\ud83c\udde6\ud83c\uddfc",
                "states" =>  []
            ],
            [
                "name" =>  "Australia",
                "numeric_code" =>  "036",
                "alpha_2" =>  "AU",
                "alpha_3" =>  "AUS",
                "phone_code" =>  "61",
                "currency" =>  "AUD",
                "currency_name" =>  "Australian dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde6\ud83c\uddfa",
                "states" =>  [
                    [
                        "id" =>  3907,
                        "name" =>  "Australian Capital Territory"
                    ],
                    [
                        "id" =>  3909,
                        "name" =>  "New South Wales"
                    ],
                    [
                        "id" =>  3910,
                        "name" =>  "Northern Territory"
                    ],
                    [
                        "id" =>  3905,
                        "name" =>  "Queensland"
                    ],
                    [
                        "id" =>  3904,
                        "name" =>  "South Australia"
                    ],
                    [
                        "id" =>  3908,
                        "name" =>  "Tasmania"
                    ],
                    [
                        "id" =>  3903,
                        "name" =>  "Victoria"
                    ],
                    [
                        "id" =>  3906,
                        "name" =>  "Western Australia"
                    ]
                ]
            ],
            [
                "name" =>  "Austria",
                "numeric_code" =>  "040",
                "alpha_2" =>  "AT",
                "alpha_3" =>  "AUT",
                "phone_code" =>  "43",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\udde6\ud83c\uddf9",
                "states" =>  [
                    [
                        "id" =>  2062,
                        "name" =>  "Burgenland"
                    ],
                    [
                        "id" =>  2057,
                        "name" =>  "Carinthia"
                    ],
                    [
                        "id" =>  2065,
                        "name" =>  "Lower Austria"
                    ],
                    [
                        "id" =>  2061,
                        "name" =>  "Salzburg"
                    ],
                    [
                        "id" =>  2059,
                        "name" =>  "Styria"
                    ],
                    [
                        "id" =>  2064,
                        "name" =>  "Tyrol"
                    ],
                    [
                        "id" =>  2058,
                        "name" =>  "Upper Austria"
                    ],
                    [
                        "id" =>  2060,
                        "name" =>  "Vienna"
                    ],
                    [
                        "id" =>  2063,
                        "name" =>  "Vorarlberg"
                    ]
                ]
            ],
            [
                "name" =>  "Azerbaijan",
                "numeric_code" =>  "031",
                "alpha_2" =>  "AZ",
                "alpha_3" =>  "AZE",
                "phone_code" =>  "994",
                "currency" =>  "AZN",
                "currency_name" =>  "Azerbaijani manat",
                "currency_symbol" =>  "m",
                "emoji" =>  "\ud83c\udde6\ud83c\uddff",
                "states" =>  [
                    [
                        "id" =>  540,
                        "name" =>  "Absheron District"
                    ],
                    [
                        "id" =>  559,
                        "name" =>  "Agdam District"
                    ],
                    [
                        "id" =>  553,
                        "name" =>  "Agdash District"
                    ],
                    [
                        "id" =>  577,
                        "name" =>  "Aghjabadi District"
                    ],
                    [
                        "id" =>  543,
                        "name" =>  "Agstafa District"
                    ],
                    [
                        "id" =>  547,
                        "name" =>  "Agsu District"
                    ],
                    [
                        "id" =>  528,
                        "name" =>  "Astara District"
                    ],
                    [
                        "id" =>  575,
                        "name" =>  "Babek District"
                    ],
                    [
                        "id" =>  552,
                        "name" =>  "Baku"
                    ],
                    [
                        "id" =>  560,
                        "name" =>  "Balakan District"
                    ],
                    [
                        "id" =>  569,
                        "name" =>  "Barda District"
                    ],
                    [
                        "id" =>  554,
                        "name" =>  "Beylagan District"
                    ],
                    [
                        "id" =>  532,
                        "name" =>  "Bilasuvar District"
                    ],
                    [
                        "id" =>  561,
                        "name" =>  "Dashkasan District"
                    ],
                    [
                        "id" =>  527,
                        "name" =>  "Fizuli District"
                    ],
                    [
                        "id" =>  585,
                        "name" =>  "Ganja"
                    ],
                    [
                        "id" =>  589,
                        "name" =>  "G\u0259d\u0259b\u0259y"
                    ],
                    [
                        "id" =>  573,
                        "name" =>  "Gobustan District"
                    ],
                    [
                        "id" =>  551,
                        "name" =>  "Goranboy District"
                    ],
                    [
                        "id" =>  531,
                        "name" =>  "Goychay"
                    ],
                    [
                        "id" =>  574,
                        "name" =>  "Goygol District"
                    ],
                    [
                        "id" =>  571,
                        "name" =>  "Hajigabul District"
                    ],
                    [
                        "id" =>  544,
                        "name" =>  "Imishli District"
                    ],
                    [
                        "id" =>  564,
                        "name" =>  "Ismailli District"
                    ],
                    [
                        "id" =>  570,
                        "name" =>  "Jabrayil District"
                    ],
                    [
                        "id" =>  578,
                        "name" =>  "Jalilabad District"
                    ],
                    [
                        "id" =>  572,
                        "name" =>  "Julfa District"
                    ],
                    [
                        "id" =>  525,
                        "name" =>  "Kalbajar District"
                    ],
                    [
                        "id" =>  567,
                        "name" =>  "Kangarli District"
                    ],
                    [
                        "id" =>  590,
                        "name" =>  "Khachmaz District"
                    ],
                    [
                        "id" =>  537,
                        "name" =>  "Khizi District"
                    ],
                    [
                        "id" =>  524,
                        "name" =>  "Khojali District"
                    ],
                    [
                        "id" =>  549,
                        "name" =>  "Kurdamir District"
                    ],
                    [
                        "id" =>  541,
                        "name" =>  "Lachin District"
                    ],
                    [
                        "id" =>  587,
                        "name" =>  "Lankaran"
                    ],
                    [
                        "id" =>  558,
                        "name" =>  "Lankaran District"
                    ],
                    [
                        "id" =>  546,
                        "name" =>  "Lerik District"
                    ],
                    [
                        "id" =>  568,
                        "name" =>  "Martuni"
                    ],
                    [
                        "id" =>  555,
                        "name" =>  "Masally District"
                    ],
                    [
                        "id" =>  580,
                        "name" =>  "Mingachevir"
                    ],
                    [
                        "id" =>  562,
                        "name" =>  "Nakhchivan Autonomous Republic"
                    ],
                    [
                        "id" =>  530,
                        "name" =>  "Neftchala District"
                    ],
                    [
                        "id" =>  556,
                        "name" =>  "Oghuz District"
                    ],
                    [
                        "id" =>  534,
                        "name" =>  "Ordubad District"
                    ],
                    [
                        "id" =>  542,
                        "name" =>  "Qabala District"
                    ],
                    [
                        "id" =>  526,
                        "name" =>  "Qakh District"
                    ],
                    [
                        "id" =>  521,
                        "name" =>  "Qazakh District"
                    ],
                    [
                        "id" =>  563,
                        "name" =>  "Quba District"
                    ],
                    [
                        "id" =>  548,
                        "name" =>  "Qubadli District"
                    ],
                    [
                        "id" =>  588,
                        "name" =>  "Qusar District"
                    ],
                    [
                        "id" =>  557,
                        "name" =>  "Saatly District"
                    ],
                    [
                        "id" =>  565,
                        "name" =>  "Sabirabad District"
                    ],
                    [
                        "id" =>  522,
                        "name" =>  "Sadarak District"
                    ],
                    [
                        "id" =>  545,
                        "name" =>  "Salyan District"
                    ],
                    [
                        "id" =>  536,
                        "name" =>  "Samukh District"
                    ],
                    [
                        "id" =>  591,
                        "name" =>  "Shabran District"
                    ],
                    [
                        "id" =>  579,
                        "name" =>  "Shahbuz District"
                    ],
                    [
                        "id" =>  518,
                        "name" =>  "Shaki"
                    ],
                    [
                        "id" =>  586,
                        "name" =>  "Shaki District"
                    ],
                    [
                        "id" =>  529,
                        "name" =>  "Shamakhi District"
                    ],
                    [
                        "id" =>  583,
                        "name" =>  "Shamkir District"
                    ],
                    [
                        "id" =>  535,
                        "name" =>  "Sharur District"
                    ],
                    [
                        "id" =>  520,
                        "name" =>  "Shirvan"
                    ],
                    [
                        "id" =>  592,
                        "name" =>  "Shusha District"
                    ],
                    [
                        "id" =>  584,
                        "name" =>  "Siazan District"
                    ],
                    [
                        "id" =>  582,
                        "name" =>  "Sumqayit"
                    ],
                    [
                        "id" =>  519,
                        "name" =>  "Tartar District"
                    ],
                    [
                        "id" =>  533,
                        "name" =>  "Tovuz District"
                    ],
                    [
                        "id" =>  539,
                        "name" =>  "Ujar District"
                    ],
                    [
                        "id" =>  550,
                        "name" =>  "Yardymli District"
                    ],
                    [
                        "id" =>  538,
                        "name" =>  "Yevlakh"
                    ],
                    [
                        "id" =>  523,
                        "name" =>  "Yevlakh District"
                    ],
                    [
                        "id" =>  581,
                        "name" =>  "Zangilan District"
                    ],
                    [
                        "id" =>  566,
                        "name" =>  "Zaqatala District"
                    ],
                    [
                        "id" =>  576,
                        "name" =>  "Zardab District"
                    ]
                ]
            ],
            [
                "name" =>  "Bahrain",
                "numeric_code" =>  "048",
                "alpha_2" =>  "BH",
                "alpha_3" =>  "BHR",
                "phone_code" =>  "973",
                "currency" =>  "BHD",
                "currency_name" =>  "Bahraini dinar",
                "currency_symbol" =>  ".\u062f.\u0628",
                "emoji" =>  "\ud83c\udde7\ud83c\udded",
                "states" =>  [
                    [
                        "id" =>  1992,
                        "name" =>  "Capital"
                    ],
                    [
                        "id" =>  1996,
                        "name" =>  "Central"
                    ],
                    [
                        "id" =>  1995,
                        "name" =>  "Muharraq"
                    ],
                    [
                        "id" =>  1994,
                        "name" =>  "Northern"
                    ],
                    [
                        "id" =>  1993,
                        "name" =>  "Southern"
                    ]
                ]
            ],
            [
                "name" =>  "Bangladesh",
                "numeric_code" =>  "050",
                "alpha_2" =>  "BD",
                "alpha_3" =>  "BGD",
                "phone_code" =>  "880",
                "currency" =>  "BDT",
                "currency_name" =>  "Bangladeshi taka",
                "currency_symbol" =>  "\u09f3",
                "emoji" =>  "\ud83c\udde7\ud83c\udde9",
                "states" =>  [
                    [
                        "id" =>  796,
                        "name" =>  "Bagerhat District"
                    ],
                    [
                        "id" =>  802,
                        "name" =>  "Bahadia"
                    ],
                    [
                        "id" =>  752,
                        "name" =>  "Bandarban District"
                    ],
                    [
                        "id" =>  784,
                        "name" =>  "Barguna District"
                    ],
                    [
                        "id" =>  818,
                        "name" =>  "Barisal District"
                    ],
                    [
                        "id" =>  807,
                        "name" =>  "Barisal Division"
                    ],
                    [
                        "id" =>  756,
                        "name" =>  "Bhola District"
                    ],
                    [
                        "id" =>  797,
                        "name" =>  "Bogra District"
                    ],
                    [
                        "id" =>  810,
                        "name" =>  "Brahmanbaria District"
                    ],
                    [
                        "id" =>  768,
                        "name" =>  "Chandpur District"
                    ],
                    [
                        "id" =>  761,
                        "name" =>  "Chapai Nawabganj District"
                    ],
                    [
                        "id" =>  785,
                        "name" =>  "Chittagong District"
                    ],
                    [
                        "id" =>  803,
                        "name" =>  "Chittagong Division"
                    ],
                    [
                        "id" =>  788,
                        "name" =>  "Chuadanga District"
                    ],
                    [
                        "id" =>  763,
                        "name" =>  "Comilla District"
                    ],
                    [
                        "id" =>  751,
                        "name" =>  "Cox's Bazar District"
                    ],
                    [
                        "id" =>  771,
                        "name" =>  "Dhaka District"
                    ],
                    [
                        "id" =>  760,
                        "name" =>  "Dhaka Division"
                    ],
                    [
                        "id" =>  783,
                        "name" =>  "Dinajpur District"
                    ],
                    [
                        "id" =>  762,
                        "name" =>  "Faridpur District"
                    ],
                    [
                        "id" =>  816,
                        "name" =>  "Feni District"
                    ],
                    [
                        "id" =>  795,
                        "name" =>  "Gaibandha District"
                    ],
                    [
                        "id" =>  798,
                        "name" =>  "Gazipur District"
                    ],
                    [
                        "id" =>  792,
                        "name" =>  "Gopalganj District"
                    ],
                    [
                        "id" =>  805,
                        "name" =>  "Habiganj District"
                    ],
                    [
                        "id" =>  808,
                        "name" =>  "Jamalpur District"
                    ],
                    [
                        "id" =>  757,
                        "name" =>  "Jessore District"
                    ],
                    [
                        "id" =>  778,
                        "name" =>  "Jhalokati District"
                    ],
                    [
                        "id" =>  789,
                        "name" =>  "Jhenaidah District"
                    ],
                    [
                        "id" =>  806,
                        "name" =>  "Joypurhat District"
                    ],
                    [
                        "id" =>  786,
                        "name" =>  "Khagrachari District"
                    ],
                    [
                        "id" =>  811,
                        "name" =>  "Khulna District"
                    ],
                    [
                        "id" =>  775,
                        "name" =>  "Khulna Division"
                    ],
                    [
                        "id" =>  779,
                        "name" =>  "Kishoreganj District"
                    ],
                    [
                        "id" =>  793,
                        "name" =>  "Kurigram District"
                    ],
                    [
                        "id" =>  774,
                        "name" =>  "Kushtia District"
                    ],
                    [
                        "id" =>  819,
                        "name" =>  "Lakshmipur District"
                    ],
                    [
                        "id" =>  780,
                        "name" =>  "Lalmonirhat District"
                    ],
                    [
                        "id" =>  817,
                        "name" =>  "Madaripur District"
                    ],
                    [
                        "id" =>  776,
                        "name" =>  "Meherpur District"
                    ],
                    [
                        "id" =>  794,
                        "name" =>  "Moulvibazar District"
                    ],
                    [
                        "id" =>  790,
                        "name" =>  "Munshiganj District"
                    ],
                    [
                        "id" =>  766,
                        "name" =>  "Mymensingh District"
                    ],
                    [
                        "id" =>  758,
                        "name" =>  "Mymensingh Division"
                    ],
                    [
                        "id" =>  814,
                        "name" =>  "Naogaon District"
                    ],
                    [
                        "id" =>  769,
                        "name" =>  "Narail District"
                    ],
                    [
                        "id" =>  770,
                        "name" =>  "Narayanganj District"
                    ],
                    [
                        "id" =>  787,
                        "name" =>  "Natore District"
                    ],
                    [
                        "id" =>  764,
                        "name" =>  "Netrokona District"
                    ],
                    [
                        "id" =>  772,
                        "name" =>  "Nilphamari District"
                    ],
                    [
                        "id" =>  815,
                        "name" =>  "Noakhali District"
                    ],
                    [
                        "id" =>  754,
                        "name" =>  "Pabna District"
                    ],
                    [
                        "id" =>  800,
                        "name" =>  "Panchagarh District"
                    ],
                    [
                        "id" =>  777,
                        "name" =>  "Patuakhali District"
                    ],
                    [
                        "id" =>  791,
                        "name" =>  "Pirojpur District"
                    ],
                    [
                        "id" =>  773,
                        "name" =>  "Rajbari District"
                    ],
                    [
                        "id" =>  813,
                        "name" =>  "Rajshahi District"
                    ],
                    [
                        "id" =>  753,
                        "name" =>  "Rajshahi Division"
                    ],
                    [
                        "id" =>  809,
                        "name" =>  "Rangamati Hill District"
                    ],
                    [
                        "id" =>  759,
                        "name" =>  "Rangpur District"
                    ],
                    [
                        "id" =>  750,
                        "name" =>  "Rangpur Division"
                    ],
                    [
                        "id" =>  799,
                        "name" =>  "Satkhira District"
                    ],
                    [
                        "id" =>  801,
                        "name" =>  "Shariatpur District"
                    ],
                    [
                        "id" =>  755,
                        "name" =>  "Sherpur District"
                    ],
                    [
                        "id" =>  781,
                        "name" =>  "Sirajganj District"
                    ],
                    [
                        "id" =>  812,
                        "name" =>  "Sunamganj District"
                    ],
                    [
                        "id" =>  767,
                        "name" =>  "Sylhet District"
                    ],
                    [
                        "id" =>  765,
                        "name" =>  "Sylhet Division"
                    ],
                    [
                        "id" =>  782,
                        "name" =>  "Tangail District"
                    ],
                    [
                        "id" =>  804,
                        "name" =>  "Thakurgaon District"
                    ]
                ]
            ],
            [
                "name" =>  "Barbados",
                "numeric_code" =>  "052",
                "alpha_2" =>  "BB",
                "alpha_3" =>  "BRB",
                "phone_code" =>  "+1-246",
                "currency" =>  "BBD",
                "currency_name" =>  "Barbadian dollar",
                "currency_symbol" =>  "Bds$",
                "emoji" =>  "\ud83c\udde7\ud83c\udde7",
                "states" =>  [
                    [
                        "id" =>  1228,
                        "name" =>  "Christ Church"
                    ],
                    [
                        "id" =>  1229,
                        "name" =>  "Saint Andrew"
                    ],
                    [
                        "id" =>  1226,
                        "name" =>  "Saint George"
                    ],
                    [
                        "id" =>  1224,
                        "name" =>  "Saint James"
                    ],
                    [
                        "id" =>  1227,
                        "name" =>  "Saint John"
                    ],
                    [
                        "id" =>  1223,
                        "name" =>  "Saint Joseph"
                    ],
                    [
                        "id" =>  1221,
                        "name" =>  "Saint Lucy"
                    ],
                    [
                        "id" =>  1230,
                        "name" =>  "Saint Michael"
                    ],
                    [
                        "id" =>  1222,
                        "name" =>  "Saint Peter"
                    ],
                    [
                        "id" =>  1220,
                        "name" =>  "Saint Philip"
                    ],
                    [
                        "id" =>  1225,
                        "name" =>  "Saint Thomas"
                    ]
                ]
            ],
            [
                "name" =>  "Belarus",
                "numeric_code" =>  "112",
                "alpha_2" =>  "BY",
                "alpha_3" =>  "BLR",
                "phone_code" =>  "375",
                "currency" =>  "BYN",
                "currency_name" =>  "Belarusian ruble",
                "currency_symbol" =>  "Br",
                "emoji" =>  "\ud83c\udde7\ud83c\uddfe",
                "states" =>  [
                    [
                        "id" =>  2959,
                        "name" =>  "Brest Region"
                    ],
                    [
                        "id" =>  2955,
                        "name" =>  "Gomel Region"
                    ],
                    [
                        "id" =>  2956,
                        "name" =>  "Grodno Region"
                    ],
                    [
                        "id" =>  2958,
                        "name" =>  "Minsk"
                    ],
                    [
                        "id" =>  2957,
                        "name" =>  "Minsk Region"
                    ],
                    [
                        "id" =>  2954,
                        "name" =>  "Mogilev Region"
                    ],
                    [
                        "id" =>  2960,
                        "name" =>  "Vitebsk Region"
                    ]
                ]
            ],
            [
                "name" =>  "Belgium",
                "numeric_code" =>  "056",
                "alpha_2" =>  "BE",
                "alpha_3" =>  "BEL",
                "phone_code" =>  "32",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\udde7\ud83c\uddea",
                "states" =>  [
                    [
                        "id" =>  1381,
                        "name" =>  "Antwerp"
                    ],
                    [
                        "id" =>  1376,
                        "name" =>  "Brussels-Capital Region"
                    ],
                    [
                        "id" =>  1377,
                        "name" =>  "East Flanders"
                    ],
                    [
                        "id" =>  1373,
                        "name" =>  "Flanders"
                    ],
                    [
                        "id" =>  1374,
                        "name" =>  "Flemish Brabant"
                    ],
                    [
                        "id" =>  1375,
                        "name" =>  "Hainaut"
                    ],
                    [
                        "id" =>  1384,
                        "name" =>  "Li\u00e8ge"
                    ],
                    [
                        "id" =>  1372,
                        "name" =>  "Limburg"
                    ],
                    [
                        "id" =>  1379,
                        "name" =>  "Luxembourg"
                    ],
                    [
                        "id" =>  1378,
                        "name" =>  "Namur"
                    ],
                    [
                        "id" =>  1380,
                        "name" =>  "Wallonia"
                    ],
                    [
                        "id" =>  1382,
                        "name" =>  "Walloon Brabant"
                    ],
                    [
                        "id" =>  1383,
                        "name" =>  "West Flanders"
                    ]
                ]
            ],
            [
                "name" =>  "Belize",
                "numeric_code" =>  "084",
                "alpha_2" =>  "BZ",
                "alpha_3" =>  "BLZ",
                "phone_code" =>  "501",
                "currency" =>  "BZD",
                "currency_name" =>  "Belize dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde7\ud83c\uddff",
                "states" =>  [
                    [
                        "id" =>  264,
                        "name" =>  "Belize District"
                    ],
                    [
                        "id" =>  269,
                        "name" =>  "Cayo District"
                    ],
                    [
                        "id" =>  266,
                        "name" =>  "Corozal District"
                    ],
                    [
                        "id" =>  268,
                        "name" =>  "Orange Walk District"
                    ],
                    [
                        "id" =>  265,
                        "name" =>  "Stann Creek District"
                    ],
                    [
                        "id" =>  267,
                        "name" =>  "Toledo District"
                    ]
                ]
            ],
            [
                "name" =>  "Benin",
                "numeric_code" =>  "204",
                "alpha_2" =>  "BJ",
                "alpha_3" =>  "BEN",
                "phone_code" =>  "229",
                "currency" =>  "XOF",
                "currency_name" =>  "West African CFA franc",
                "currency_symbol" =>  "CFA",
                "emoji" =>  "\ud83c\udde7\ud83c\uddef",
                "states" =>  [
                    [
                        "id" =>  3077,
                        "name" =>  "Alibori Department"
                    ],
                    [
                        "id" =>  3076,
                        "name" =>  "Atakora Department"
                    ],
                    [
                        "id" =>  3079,
                        "name" =>  "Atlantique Department"
                    ],
                    [
                        "id" =>  3078,
                        "name" =>  "Borgou Department"
                    ],
                    [
                        "id" =>  3070,
                        "name" =>  "Collines Department"
                    ],
                    [
                        "id" =>  3072,
                        "name" =>  "Donga Department"
                    ],
                    [
                        "id" =>  3071,
                        "name" =>  "Kouffo Department"
                    ],
                    [
                        "id" =>  3081,
                        "name" =>  "Littoral Department"
                    ],
                    [
                        "id" =>  3075,
                        "name" =>  "Mono Department"
                    ],
                    [
                        "id" =>  3080,
                        "name" =>  "Ou\u00e9m\u00e9 Department"
                    ],
                    [
                        "id" =>  3074,
                        "name" =>  "Plateau Department"
                    ],
                    [
                        "id" =>  3073,
                        "name" =>  "Zou Department"
                    ]
                ]
            ],
            [
                "name" =>  "Bermuda",
                "numeric_code" =>  "060",
                "alpha_2" =>  "BM",
                "alpha_3" =>  "BMU",
                "phone_code" =>  "+1-441",
                "currency" =>  "BMD",
                "currency_name" =>  "Bermudian dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde7\ud83c\uddf2",
                "states" =>  [
                    [
                        "id" =>  4860,
                        "name" =>  "Devonshire Parish"
                    ],
                    [
                        "id" =>  4861,
                        "name" =>  "Hamilton Parish"
                    ],
                    [
                        "id" =>  4863,
                        "name" =>  "Paget Parish"
                    ],
                    [
                        "id" =>  4864,
                        "name" =>  "Pembroke Parish"
                    ],
                    [
                        "id" =>  4866,
                        "name" =>  "Saint George's Parish"
                    ],
                    [
                        "id" =>  4867,
                        "name" =>  "Sandys Parish"
                    ],
                    [
                        "id" =>  4868,
                        "name" =>  "Smith's Parish,"
                    ],
                    [
                        "id" =>  4869,
                        "name" =>  "Southampton Parish"
                    ],
                    [
                        "id" =>  4870,
                        "name" =>  "Warwick Parish"
                    ]
                ]
            ],
            [
                "name" =>  "Bhutan",
                "numeric_code" =>  "064",
                "alpha_2" =>  "BT",
                "alpha_3" =>  "BTN",
                "phone_code" =>  "975",
                "currency" =>  "BTN",
                "currency_name" =>  "Bhutanese ngultrum",
                "currency_symbol" =>  "Nu.",
                "emoji" =>  "\ud83c\udde7\ud83c\uddf9",
                "states" =>  [
                    [
                        "id" =>  240,
                        "name" =>  "Bumthang District"
                    ],
                    [
                        "id" =>  239,
                        "name" =>  "Chukha District"
                    ],
                    [
                        "id" =>  238,
                        "name" =>  "Dagana District"
                    ],
                    [
                        "id" =>  229,
                        "name" =>  "Gasa District"
                    ],
                    [
                        "id" =>  232,
                        "name" =>  "Haa District"
                    ],
                    [
                        "id" =>  234,
                        "name" =>  "Lhuntse District"
                    ],
                    [
                        "id" =>  242,
                        "name" =>  "Mongar District"
                    ],
                    [
                        "id" =>  237,
                        "name" =>  "Paro District"
                    ],
                    [
                        "id" =>  244,
                        "name" =>  "Pemagatshel District"
                    ],
                    [
                        "id" =>  235,
                        "name" =>  "Punakha District"
                    ],
                    [
                        "id" =>  243,
                        "name" =>  "Samdrup Jongkhar District"
                    ],
                    [
                        "id" =>  246,
                        "name" =>  "Samtse District"
                    ],
                    [
                        "id" =>  247,
                        "name" =>  "Sarpang District"
                    ],
                    [
                        "id" =>  241,
                        "name" =>  "Thimphu District"
                    ],
                    [
                        "id" =>  236,
                        "name" =>  "Trashigang District"
                    ],
                    [
                        "id" =>  245,
                        "name" =>  "Trongsa District"
                    ],
                    [
                        "id" =>  230,
                        "name" =>  "Tsirang District"
                    ],
                    [
                        "id" =>  231,
                        "name" =>  "Wangdue Phodrang District"
                    ],
                    [
                        "id" =>  233,
                        "name" =>  "Zhemgang District"
                    ]
                ]
            ],
            [
                "name" =>  "Bolivia",
                "numeric_code" =>  "068",
                "alpha_2" =>  "BO",
                "alpha_3" =>  "BOL",
                "phone_code" =>  "591",
                "currency" =>  "BOB",
                "currency_name" =>  "Bolivian boliviano",
                "currency_symbol" =>  "Bs.",
                "emoji" =>  "\ud83c\udde7\ud83c\uddf4",
                "states" =>  [
                    [
                        "id" =>  3375,
                        "name" =>  "Beni Department"
                    ],
                    [
                        "id" =>  3382,
                        "name" =>  "Chuquisaca Department"
                    ],
                    [
                        "id" =>  3381,
                        "name" =>  "Cochabamba Department"
                    ],
                    [
                        "id" =>  3380,
                        "name" =>  "La Paz Department"
                    ],
                    [
                        "id" =>  3376,
                        "name" =>  "Oruro Department"
                    ],
                    [
                        "id" =>  3379,
                        "name" =>  "Pando Department"
                    ],
                    [
                        "id" =>  3383,
                        "name" =>  "Potos\u00ed Department"
                    ],
                    [
                        "id" =>  3377,
                        "name" =>  "Santa Cruz Department"
                    ],
                    [
                        "id" =>  3378,
                        "name" =>  "Tarija Department"
                    ]
                ]
            ],
            [
                "name" =>  "Bonaire, Sint Eustatius and Saba",
                "numeric_code" =>  "535",
                "alpha_2" =>  "BQ",
                "alpha_3" =>  "BES",
                "phone_code" =>  "599",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde7\ud83c\uddf6",
                "states" =>  [
                    [
                        "id" =>  5086,
                        "name" =>  "Bonaire"
                    ],
                    [
                        "id" =>  5087,
                        "name" =>  "Saba"
                    ],
                    [
                        "id" =>  5088,
                        "name" =>  "Sint Eustatius"
                    ]
                ]
            ],
            [
                "name" =>  "Bosnia and Herzegovina",
                "numeric_code" =>  "070",
                "alpha_2" =>  "BA",
                "alpha_3" =>  "BIH",
                "phone_code" =>  "387",
                "currency" =>  "BAM",
                "currency_name" =>  "Bosnia and Herzegovina convertible mark",
                "currency_symbol" =>  "KM",
                "emoji" =>  "\ud83c\udde7\ud83c\udde6",
                "states" =>  [
                    [
                        "id" =>  472,
                        "name" =>  "Bosnian Podrinje Canton"
                    ],
                    [
                        "id" =>  460,
                        "name" =>  "Br\u010dko District"
                    ],
                    [
                        "id" =>  471,
                        "name" =>  "Canton 10"
                    ],
                    [
                        "id" =>  462,
                        "name" =>  "Central Bosnia Canton"
                    ],
                    [
                        "id" =>  467,
                        "name" =>  "Federation of Bosnia and Herzegovina"
                    ],
                    [
                        "id" =>  463,
                        "name" =>  "Herzegovina-Neretva Canton"
                    ],
                    [
                        "id" =>  464,
                        "name" =>  "Posavina Canton"
                    ],
                    [
                        "id" =>  470,
                        "name" =>  "Republika Srpska"
                    ],
                    [
                        "id" =>  466,
                        "name" =>  "Sarajevo Canton"
                    ],
                    [
                        "id" =>  461,
                        "name" =>  "Tuzla Canton"
                    ],
                    [
                        "id" =>  465,
                        "name" =>  "Una-Sana Canton"
                    ],
                    [
                        "id" =>  469,
                        "name" =>  "West Herzegovina Canton"
                    ],
                    [
                        "id" =>  468,
                        "name" =>  "Zenica-Doboj Canton"
                    ]
                ]
            ],
            [
                "name" =>  "Botswana",
                "numeric_code" =>  "072",
                "alpha_2" =>  "BW",
                "alpha_3" =>  "BWA",
                "phone_code" =>  "267",
                "currency" =>  "BWP",
                "currency_name" =>  "Botswana pula",
                "currency_symbol" =>  "P",
                "emoji" =>  "\ud83c\udde7\ud83c\uddfc",
                "states" =>  [
                    [
                        "id" =>  3067,
                        "name" =>  "Central District"
                    ],
                    [
                        "id" =>  3061,
                        "name" =>  "Ghanzi District"
                    ],
                    [
                        "id" =>  3066,
                        "name" =>  "Kgalagadi District"
                    ],
                    [
                        "id" =>  3062,
                        "name" =>  "Kgatleng District"
                    ],
                    [
                        "id" =>  3069,
                        "name" =>  "Kweneng District"
                    ],
                    [
                        "id" =>  3060,
                        "name" =>  "Ngamiland"
                    ],
                    [
                        "id" =>  3068,
                        "name" =>  "North-East District"
                    ],
                    [
                        "id" =>  3065,
                        "name" =>  "North-West District"
                    ],
                    [
                        "id" =>  3064,
                        "name" =>  "South-East District"
                    ],
                    [
                        "id" =>  3063,
                        "name" =>  "Southern District"
                    ]
                ]
            ],
            [
                "name" =>  "Bouvet Island",
                "numeric_code" =>  "074",
                "alpha_2" =>  "BV",
                "alpha_3" =>  "BVT",
                "phone_code" =>  "0055",
                "currency" =>  "NOK",
                "currency_name" =>  "Norwegian Krone",
                "currency_symbol" =>  "kr",
                "emoji" =>  "\ud83c\udde7\ud83c\uddfb",
                "states" =>  []
            ],
            [
                "name" =>  "Brazil",
                "numeric_code" =>  "076",
                "alpha_2" =>  "BR",
                "alpha_3" =>  "BRA",
                "phone_code" =>  "55",
                "currency" =>  "BRL",
                "currency_name" =>  "Brazilian real",
                "currency_symbol" =>  "R$",
                "emoji" =>  "\ud83c\udde7\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  2012,
                        "name" =>  "Acre"
                    ],
                    [
                        "id" =>  2007,
                        "name" =>  "Alagoas"
                    ],
                    [
                        "id" =>  1999,
                        "name" =>  "Amap\u00e1"
                    ],
                    [
                        "id" =>  2004,
                        "name" =>  "Amazonas"
                    ],
                    [
                        "id" =>  2002,
                        "name" =>  "Bahia"
                    ],
                    [
                        "id" =>  2016,
                        "name" =>  "Cear\u00e1"
                    ],
                    [
                        "id" =>  2017,
                        "name" =>  "Distrito Federal"
                    ],
                    [
                        "id" =>  2018,
                        "name" =>  "Esp\u00edrito Santo"
                    ],
                    [
                        "id" =>  2000,
                        "name" =>  "Goi\u00e1s"
                    ],
                    [
                        "id" =>  2015,
                        "name" =>  "Maranh\u00e3o"
                    ],
                    [
                        "id" =>  2011,
                        "name" =>  "Mato Grosso"
                    ],
                    [
                        "id" =>  2010,
                        "name" =>  "Mato Grosso do Sul"
                    ],
                    [
                        "id" =>  1998,
                        "name" =>  "Minas Gerais"
                    ],
                    [
                        "id" =>  2009,
                        "name" =>  "Par\u00e1"
                    ],
                    [
                        "id" =>  2005,
                        "name" =>  "Para\u00edba"
                    ],
                    [
                        "id" =>  2022,
                        "name" =>  "Paran\u00e1"
                    ],
                    [
                        "id" =>  2006,
                        "name" =>  "Pernambuco"
                    ],
                    [
                        "id" =>  2008,
                        "name" =>  "Piau\u00ed"
                    ],
                    [
                        "id" =>  1997,
                        "name" =>  "Rio de Janeiro"
                    ],
                    [
                        "id" =>  2019,
                        "name" =>  "Rio Grande do Norte"
                    ],
                    [
                        "id" =>  2001,
                        "name" =>  "Rio Grande do Sul"
                    ],
                    [
                        "id" =>  2013,
                        "name" =>  "Rond\u00f4nia"
                    ],
                    [
                        "id" =>  4858,
                        "name" =>  "Roraima"
                    ],
                    [
                        "id" =>  2014,
                        "name" =>  "Santa Catarina"
                    ],
                    [
                        "id" =>  2021,
                        "name" =>  "S\u00e3o Paulo"
                    ],
                    [
                        "id" =>  2003,
                        "name" =>  "Sergipe"
                    ],
                    [
                        "id" =>  2020,
                        "name" =>  "Tocantins"
                    ]
                ]
            ],
            [
                "name" =>  "British Indian Ocean Territory",
                "numeric_code" =>  "086",
                "alpha_2" =>  "IO",
                "alpha_3" =>  "IOT",
                "phone_code" =>  "246",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddee\ud83c\uddf4",
                "states" =>  []
            ],
            [
                "name" =>  "Brunei",
                "numeric_code" =>  "096",
                "alpha_2" =>  "BN",
                "alpha_3" =>  "BRN",
                "phone_code" =>  "673",
                "currency" =>  "BND",
                "currency_name" =>  "Brunei dollar",
                "currency_symbol" =>  "B$",
                "emoji" =>  "\ud83c\udde7\ud83c\uddf3",
                "states" =>  [
                    [
                        "id" =>  1217,
                        "name" =>  "Belait District"
                    ],
                    [
                        "id" =>  1216,
                        "name" =>  "Brunei-Muara District"
                    ],
                    [
                        "id" =>  1218,
                        "name" =>  "Temburong District"
                    ],
                    [
                        "id" =>  1219,
                        "name" =>  "Tutong District"
                    ]
                ]
            ],
            [
                "name" =>  "Bulgaria",
                "numeric_code" =>  "100",
                "alpha_2" =>  "BG",
                "alpha_3" =>  "BGR",
                "phone_code" =>  "359",
                "currency" =>  "BGN",
                "currency_name" =>  "Bulgarian lev",
                "currency_symbol" =>  "\u041b\u0432.",
                "emoji" =>  "\ud83c\udde7\ud83c\uddec",
                "states" =>  [
                    [
                        "id" =>  4699,
                        "name" =>  "Blagoevgrad Province"
                    ],
                    [
                        "id" =>  4715,
                        "name" =>  "Burgas Province"
                    ],
                    [
                        "id" =>  4718,
                        "name" =>  "Dobrich Province"
                    ],
                    [
                        "id" =>  4693,
                        "name" =>  "Gabrovo Province"
                    ],
                    [
                        "id" =>  4704,
                        "name" =>  "Haskovo Province"
                    ],
                    [
                        "id" =>  4702,
                        "name" =>  "Kardzhali Province"
                    ],
                    [
                        "id" =>  4703,
                        "name" =>  "Kyustendil Province"
                    ],
                    [
                        "id" =>  4710,
                        "name" =>  "Lovech Province"
                    ],
                    [
                        "id" =>  4696,
                        "name" =>  "Montana Province"
                    ],
                    [
                        "id" =>  4712,
                        "name" =>  "Pazardzhik Province"
                    ],
                    [
                        "id" =>  4695,
                        "name" =>  "Pernik Province"
                    ],
                    [
                        "id" =>  4706,
                        "name" =>  "Pleven Province"
                    ],
                    [
                        "id" =>  4701,
                        "name" =>  "Plovdiv Province"
                    ],
                    [
                        "id" =>  4698,
                        "name" =>  "Razgrad Province"
                    ],
                    [
                        "id" =>  4713,
                        "name" =>  "Ruse Province"
                    ],
                    [
                        "id" =>  4882,
                        "name" =>  "Shumen"
                    ],
                    [
                        "id" =>  4708,
                        "name" =>  "Silistra Province"
                    ],
                    [
                        "id" =>  4700,
                        "name" =>  "Sliven Province"
                    ],
                    [
                        "id" =>  4694,
                        "name" =>  "Smolyan Province"
                    ],
                    [
                        "id" =>  4705,
                        "name" =>  "Sofia City Province"
                    ],
                    [
                        "id" =>  4719,
                        "name" =>  "Sofia Province"
                    ],
                    [
                        "id" =>  4707,
                        "name" =>  "Stara Zagora Province"
                    ],
                    [
                        "id" =>  4714,
                        "name" =>  "Targovishte Province"
                    ],
                    [
                        "id" =>  4717,
                        "name" =>  "Varna Province"
                    ],
                    [
                        "id" =>  4709,
                        "name" =>  "Veliko Tarnovo Province"
                    ],
                    [
                        "id" =>  4697,
                        "name" =>  "Vidin Province"
                    ],
                    [
                        "id" =>  4711,
                        "name" =>  "Vratsa Province"
                    ],
                    [
                        "id" =>  4716,
                        "name" =>  "Yambol Province"
                    ]
                ]
            ],
            [
                "name" =>  "Burkina Faso",
                "numeric_code" =>  "854",
                "alpha_2" =>  "BF",
                "alpha_3" =>  "BFA",
                "phone_code" =>  "226",
                "currency" =>  "XOF",
                "currency_name" =>  "West African CFA franc",
                "currency_symbol" =>  "CFA",
                "emoji" =>  "\ud83c\udde7\ud83c\uddeb",
                "states" =>  [
                    [
                        "id" =>  3160,
                        "name" =>  "Bal\u00e9 Province"
                    ],
                    [
                        "id" =>  3155,
                        "name" =>  "Bam Province"
                    ],
                    [
                        "id" =>  3120,
                        "name" =>  "Banwa Province"
                    ],
                    [
                        "id" =>  3152,
                        "name" =>  "Baz\u00e8ga Province"
                    ],
                    [
                        "id" =>  3138,
                        "name" =>  "Boucle du Mouhoun Region"
                    ],
                    [
                        "id" =>  3121,
                        "name" =>  "Bougouriba Province"
                    ],
                    [
                        "id" =>  3131,
                        "name" =>  "Boulgou"
                    ],
                    [
                        "id" =>  3153,
                        "name" =>  "Cascades Region"
                    ],
                    [
                        "id" =>  3136,
                        "name" =>  "Centre"
                    ],
                    [
                        "id" =>  3162,
                        "name" =>  "Centre-Est Region"
                    ],
                    [
                        "id" =>  3127,
                        "name" =>  "Centre-Nord Region"
                    ],
                    [
                        "id" =>  3115,
                        "name" =>  "Centre-Ouest Region"
                    ],
                    [
                        "id" =>  3149,
                        "name" =>  "Centre-Sud Region"
                    ],
                    [
                        "id" =>  3167,
                        "name" =>  "Como\u00e9 Province"
                    ],
                    [
                        "id" =>  3158,
                        "name" =>  "Est Region"
                    ],
                    [
                        "id" =>  3148,
                        "name" =>  "Ganzourgou Province"
                    ],
                    [
                        "id" =>  3122,
                        "name" =>  "Gnagna Province"
                    ],
                    [
                        "id" =>  3143,
                        "name" =>  "Gourma Province"
                    ],
                    [
                        "id" =>  3165,
                        "name" =>  "Hauts-Bassins Region"
                    ],
                    [
                        "id" =>  3129,
                        "name" =>  "Houet Province"
                    ],
                    [
                        "id" =>  3135,
                        "name" =>  "Ioba Province"
                    ],
                    [
                        "id" =>  3168,
                        "name" =>  "Kadiogo Province"
                    ],
                    [
                        "id" =>  3112,
                        "name" =>  "K\u00e9n\u00e9dougou Province"
                    ],
                    [
                        "id" =>  3132,
                        "name" =>  "Komondjari Province"
                    ],
                    [
                        "id" =>  3157,
                        "name" =>  "Kompienga Province"
                    ],
                    [
                        "id" =>  3146,
                        "name" =>  "Kossi Province"
                    ],
                    [
                        "id" =>  3133,
                        "name" =>  "Koulp\u00e9logo Province"
                    ],
                    [
                        "id" =>  3161,
                        "name" =>  "Kouritenga Province"
                    ],
                    [
                        "id" =>  3147,
                        "name" =>  "Kourw\u00e9ogo Province"
                    ],
                    [
                        "id" =>  3159,
                        "name" =>  "L\u00e9raba Province"
                    ],
                    [
                        "id" =>  3151,
                        "name" =>  "Loroum Province"
                    ],
                    [
                        "id" =>  3123,
                        "name" =>  "Mouhoun"
                    ],
                    [
                        "id" =>  3116,
                        "name" =>  "Nahouri Province"
                    ],
                    [
                        "id" =>  3113,
                        "name" =>  "Namentenga Province"
                    ],
                    [
                        "id" =>  3142,
                        "name" =>  "Nayala Province"
                    ],
                    [
                        "id" =>  3164,
                        "name" =>  "Nord Region, Burkina Faso"
                    ],
                    [
                        "id" =>  3156,
                        "name" =>  "Noumbiel Province"
                    ],
                    [
                        "id" =>  3141,
                        "name" =>  "Oubritenga Province"
                    ],
                    [
                        "id" =>  3144,
                        "name" =>  "Oudalan Province"
                    ],
                    [
                        "id" =>  3117,
                        "name" =>  "Passor\u00e9 Province"
                    ],
                    [
                        "id" =>  3125,
                        "name" =>  "Plateau-Central Region"
                    ],
                    [
                        "id" =>  3163,
                        "name" =>  "Poni Province"
                    ],
                    [
                        "id" =>  3114,
                        "name" =>  "Sahel Region"
                    ],
                    [
                        "id" =>  3154,
                        "name" =>  "Sangui\u00e9 Province"
                    ],
                    [
                        "id" =>  3126,
                        "name" =>  "Sanmatenga Province"
                    ],
                    [
                        "id" =>  3139,
                        "name" =>  "S\u00e9no Province"
                    ],
                    [
                        "id" =>  3119,
                        "name" =>  "Sissili Province"
                    ],
                    [
                        "id" =>  3166,
                        "name" =>  "Soum Province"
                    ],
                    [
                        "id" =>  3137,
                        "name" =>  "Sourou Province"
                    ],
                    [
                        "id" =>  3140,
                        "name" =>  "Sud-Ouest Region"
                    ],
                    [
                        "id" =>  3128,
                        "name" =>  "Tapoa Province"
                    ],
                    [
                        "id" =>  3134,
                        "name" =>  "Tuy Province"
                    ],
                    [
                        "id" =>  3124,
                        "name" =>  "Yagha Province"
                    ],
                    [
                        "id" =>  3150,
                        "name" =>  "Yatenga Province"
                    ],
                    [
                        "id" =>  3145,
                        "name" =>  "Ziro Province"
                    ],
                    [
                        "id" =>  3130,
                        "name" =>  "Zondoma Province"
                    ],
                    [
                        "id" =>  3118,
                        "name" =>  "Zoundw\u00e9ogo Province"
                    ]
                ]
            ],
            [
                "name" =>  "Burundi",
                "numeric_code" =>  "108",
                "alpha_2" =>  "BI",
                "alpha_3" =>  "BDI",
                "phone_code" =>  "257",
                "currency" =>  "BIF",
                "currency_name" =>  "Burundian franc",
                "currency_symbol" =>  "FBu",
                "emoji" =>  "\ud83c\udde7\ud83c\uddee",
                "states" =>  [
                    [
                        "id" =>  3196,
                        "name" =>  "Bubanza Province"
                    ],
                    [
                        "id" =>  3198,
                        "name" =>  "Bujumbura Mairie Province"
                    ],
                    [
                        "id" =>  3200,
                        "name" =>  "Bujumbura Rural Province"
                    ],
                    [
                        "id" =>  3202,
                        "name" =>  "Bururi Province"
                    ],
                    [
                        "id" =>  3201,
                        "name" =>  "Cankuzo Province"
                    ],
                    [
                        "id" =>  3190,
                        "name" =>  "Cibitoke Province"
                    ],
                    [
                        "id" =>  3197,
                        "name" =>  "Gitega Province"
                    ],
                    [
                        "id" =>  3194,
                        "name" =>  "Karuzi Province"
                    ],
                    [
                        "id" =>  3192,
                        "name" =>  "Kayanza Province"
                    ],
                    [
                        "id" =>  3195,
                        "name" =>  "Kirundo Province"
                    ],
                    [
                        "id" =>  3188,
                        "name" =>  "Makamba Province"
                    ],
                    [
                        "id" =>  3193,
                        "name" =>  "Muramvya Province"
                    ],
                    [
                        "id" =>  3186,
                        "name" =>  "Muyinga Province"
                    ],
                    [
                        "id" =>  3187,
                        "name" =>  "Mwaro Province"
                    ],
                    [
                        "id" =>  3199,
                        "name" =>  "Ngozi Province"
                    ],
                    [
                        "id" =>  3185,
                        "name" =>  "Rumonge Province"
                    ],
                    [
                        "id" =>  3189,
                        "name" =>  "Rutana Province"
                    ],
                    [
                        "id" =>  3191,
                        "name" =>  "Ruyigi Province"
                    ]
                ]
            ],
            [
                "name" =>  "Cambodia",
                "numeric_code" =>  "116",
                "alpha_2" =>  "KH",
                "alpha_3" =>  "KHM",
                "phone_code" =>  "855",
                "currency" =>  "KHR",
                "currency_name" =>  "Cambodian riel",
                "currency_symbol" =>  "KHR",
                "emoji" =>  "\ud83c\uddf0\ud83c\udded",
                "states" =>  [
                    [
                        "id" =>  3984,
                        "name" =>  "Banteay Meanchey"
                    ],
                    [
                        "id" =>  3976,
                        "name" =>  "Battambang"
                    ],
                    [
                        "id" =>  3991,
                        "name" =>  "Kampong Cham"
                    ],
                    [
                        "id" =>  3979,
                        "name" =>  "Kampong Chhnang"
                    ],
                    [
                        "id" =>  3988,
                        "name" =>  "Kampong Speu"
                    ],
                    [
                        "id" =>  5070,
                        "name" =>  "Kampong Thom"
                    ],
                    [
                        "id" =>  3981,
                        "name" =>  "Kampot"
                    ],
                    [
                        "id" =>  3983,
                        "name" =>  "Kandal"
                    ],
                    [
                        "id" =>  3978,
                        "name" =>  "Kep"
                    ],
                    [
                        "id" =>  3982,
                        "name" =>  "Koh Kong"
                    ],
                    [
                        "id" =>  3986,
                        "name" =>  "Kratie"
                    ],
                    [
                        "id" =>  3985,
                        "name" =>  "Mondulkiri"
                    ],
                    [
                        "id" =>  3987,
                        "name" =>  "Oddar Meanchey"
                    ],
                    [
                        "id" =>  3980,
                        "name" =>  "Pailin"
                    ],
                    [
                        "id" =>  3994,
                        "name" =>  "Phnom Penh"
                    ],
                    [
                        "id" =>  3973,
                        "name" =>  "Preah Vihear"
                    ],
                    [
                        "id" =>  3974,
                        "name" =>  "Prey Veng"
                    ],
                    [
                        "id" =>  3977,
                        "name" =>  "Pursat"
                    ],
                    [
                        "id" =>  3990,
                        "name" =>  "Ratanakiri"
                    ],
                    [
                        "id" =>  3992,
                        "name" =>  "Siem Reap"
                    ],
                    [
                        "id" =>  3989,
                        "name" =>  "Sihanoukville"
                    ],
                    [
                        "id" =>  3993,
                        "name" =>  "Stung Treng"
                    ],
                    [
                        "id" =>  3972,
                        "name" =>  "Svay Rieng"
                    ],
                    [
                        "id" =>  3975,
                        "name" =>  "Takeo"
                    ]
                ]
            ],
            [
                "name" =>  "Cameroon",
                "numeric_code" =>  "120",
                "alpha_2" =>  "CM",
                "alpha_3" =>  "CMR",
                "phone_code" =>  "237",
                "currency" =>  "XAF",
                "currency_name" =>  "Central African CFA franc",
                "currency_symbol" =>  "FCFA",
                "emoji" =>  "\ud83c\udde8\ud83c\uddf2",
                "states" =>  [
                    [
                        "id" =>  2663,
                        "name" =>  "Adamawa"
                    ],
                    [
                        "id" =>  2660,
                        "name" =>  "Centre"
                    ],
                    [
                        "id" =>  2661,
                        "name" =>  "East"
                    ],
                    [
                        "id" =>  2656,
                        "name" =>  "Far North"
                    ],
                    [
                        "id" =>  2662,
                        "name" =>  "Littoral"
                    ],
                    [
                        "id" =>  2665,
                        "name" =>  "North"
                    ],
                    [
                        "id" =>  2657,
                        "name" =>  "Northwest"
                    ],
                    [
                        "id" =>  2659,
                        "name" =>  "South"
                    ],
                    [
                        "id" =>  2658,
                        "name" =>  "Southwest"
                    ],
                    [
                        "id" =>  2664,
                        "name" =>  "West"
                    ]
                ]
            ],
            [
                "name" =>  "Canada",
                "numeric_code" =>  "124",
                "alpha_2" =>  "CA",
                "alpha_3" =>  "CAN",
                "phone_code" =>  "1",
                "currency" =>  "CAD",
                "currency_name" =>  "Canadian dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde8\ud83c\udde6",
                "states" =>  [
                    [
                        "id" =>  872,
                        "name" =>  "Alberta"
                    ],
                    [
                        "id" =>  875,
                        "name" =>  "British Columbia"
                    ],
                    [
                        "id" =>  867,
                        "name" =>  "Manitoba"
                    ],
                    [
                        "id" =>  868,
                        "name" =>  "New Brunswick"
                    ],
                    [
                        "id" =>  877,
                        "name" =>  "Newfoundland and Labrador"
                    ],
                    [
                        "id" =>  878,
                        "name" =>  "Northwest Territories"
                    ],
                    [
                        "id" =>  874,
                        "name" =>  "Nova Scotia"
                    ],
                    [
                        "id" =>  876,
                        "name" =>  "Nunavut"
                    ],
                    [
                        "id" =>  866,
                        "name" =>  "Ontario"
                    ],
                    [
                        "id" =>  871,
                        "name" =>  "Prince Edward Island"
                    ],
                    [
                        "id" =>  873,
                        "name" =>  "Quebec"
                    ],
                    [
                        "id" =>  870,
                        "name" =>  "Saskatchewan"
                    ],
                    [
                        "id" =>  869,
                        "name" =>  "Yukon"
                    ]
                ]
            ],
            [
                "name" =>  "Cape Verde",
                "numeric_code" =>  "132",
                "alpha_2" =>  "CV",
                "alpha_3" =>  "CPV",
                "phone_code" =>  "238",
                "currency" =>  "CVE",
                "currency_name" =>  "Cape Verdean escudo",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde8\ud83c\uddfb",
                "states" =>  [
                    [
                        "id" =>  2994,
                        "name" =>  "Barlavento Islands"
                    ],
                    [
                        "id" =>  2999,
                        "name" =>  "Boa Vista"
                    ],
                    [
                        "id" =>  2996,
                        "name" =>  "Brava"
                    ],
                    [
                        "id" =>  2991,
                        "name" =>  "Maio Municipality"
                    ],
                    [
                        "id" =>  2987,
                        "name" =>  "Mosteiros"
                    ],
                    [
                        "id" =>  2997,
                        "name" =>  "Paul"
                    ],
                    [
                        "id" =>  2989,
                        "name" =>  "Porto Novo"
                    ],
                    [
                        "id" =>  2988,
                        "name" =>  "Praia"
                    ],
                    [
                        "id" =>  2982,
                        "name" =>  "Ribeira Brava Municipality"
                    ],
                    [
                        "id" =>  3002,
                        "name" =>  "Ribeira Grande"
                    ],
                    [
                        "id" =>  2984,
                        "name" =>  "Ribeira Grande de Santiago"
                    ],
                    [
                        "id" =>  2998,
                        "name" =>  "Sal"
                    ],
                    [
                        "id" =>  2985,
                        "name" =>  "Santa Catarina"
                    ],
                    [
                        "id" =>  2995,
                        "name" =>  "Santa Catarina do Fogo"
                    ],
                    [
                        "id" =>  3004,
                        "name" =>  "Santa Cruz"
                    ],
                    [
                        "id" =>  2986,
                        "name" =>  "S\u00e3o Domingos"
                    ],
                    [
                        "id" =>  3000,
                        "name" =>  "S\u00e3o Filipe"
                    ],
                    [
                        "id" =>  2993,
                        "name" =>  "S\u00e3o Louren\u00e7o dos \u00d3rg\u00e3os"
                    ],
                    [
                        "id" =>  2990,
                        "name" =>  "S\u00e3o Miguel"
                    ],
                    [
                        "id" =>  3001,
                        "name" =>  "S\u00e3o Vicente"
                    ],
                    [
                        "id" =>  2992,
                        "name" =>  "Sotavento Islands"
                    ],
                    [
                        "id" =>  2983,
                        "name" =>  "Tarrafal"
                    ],
                    [
                        "id" =>  3003,
                        "name" =>  "Tarrafal de S\u00e3o Nicolau"
                    ]
                ]
            ],
            [
                "name" =>  "Cayman Islands",
                "numeric_code" =>  "136",
                "alpha_2" =>  "KY",
                "alpha_3" =>  "CYM",
                "phone_code" =>  "+1-345",
                "currency" =>  "KYD",
                "currency_name" =>  "Cayman Islands dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf0\ud83c\uddfe",
                "states" =>  []
            ],
            [
                "name" =>  "Central African Republic",
                "numeric_code" =>  "140",
                "alpha_2" =>  "CF",
                "alpha_3" =>  "CAF",
                "phone_code" =>  "236",
                "currency" =>  "XAF",
                "currency_name" =>  "Central African CFA franc",
                "currency_symbol" =>  "FCFA",
                "emoji" =>  "\ud83c\udde8\ud83c\uddeb",
                "states" =>  [
                    [
                        "id" =>  1259,
                        "name" =>  "Bamingui-Bangoran Prefecture"
                    ],
                    [
                        "id" =>  1262,
                        "name" =>  "Bangui"
                    ],
                    [
                        "id" =>  1264,
                        "name" =>  "Basse-Kotto Prefecture"
                    ],
                    [
                        "id" =>  1258,
                        "name" =>  "Haut-Mbomou Prefecture"
                    ],
                    [
                        "id" =>  1268,
                        "name" =>  "Haute-Kotto Prefecture"
                    ],
                    [
                        "id" =>  1263,
                        "name" =>  "K\u00e9mo Prefecture"
                    ],
                    [
                        "id" =>  1256,
                        "name" =>  "Lobaye Prefecture"
                    ],
                    [
                        "id" =>  1257,
                        "name" =>  "Mamb\u00e9r\u00e9-Kad\u00e9\u00ef"
                    ],
                    [
                        "id" =>  1266,
                        "name" =>  "Mbomou Prefecture"
                    ],
                    [
                        "id" =>  1253,
                        "name" =>  "Nana-Gr\u00e9bizi Economic Prefecture"
                    ],
                    [
                        "id" =>  1260,
                        "name" =>  "Nana-Mamb\u00e9r\u00e9 Prefecture"
                    ],
                    [
                        "id" =>  1255,
                        "name" =>  "Ombella-M'Poko Prefecture"
                    ],
                    [
                        "id" =>  1265,
                        "name" =>  "Ouaka Prefecture"
                    ],
                    [
                        "id" =>  1254,
                        "name" =>  "Ouham Prefecture"
                    ],
                    [
                        "id" =>  1267,
                        "name" =>  "Ouham-Pend\u00e9 Prefecture"
                    ],
                    [
                        "id" =>  1252,
                        "name" =>  "Sangha-Mba\u00e9r\u00e9"
                    ],
                    [
                        "id" =>  1261,
                        "name" =>  "Vakaga Prefecture"
                    ]
                ]
            ],
            [
                "name" =>  "Chad",
                "numeric_code" =>  "148",
                "alpha_2" =>  "TD",
                "alpha_3" =>  "TCD",
                "phone_code" =>  "235",
                "currency" =>  "XAF",
                "currency_name" =>  "Central African CFA franc",
                "currency_symbol" =>  "FCFA",
                "emoji" =>  "\ud83c\uddf9\ud83c\udde9",
                "states" =>  [
                    [
                        "id" =>  3583,
                        "name" =>  "Bahr el Gazel"
                    ],
                    [
                        "id" =>  3590,
                        "name" =>  "Batha"
                    ],
                    [
                        "id" =>  3574,
                        "name" =>  "Borkou"
                    ],
                    [
                        "id" =>  5114,
                        "name" =>  "Chari-Baguirmi"
                    ],
                    [
                        "id" =>  3575,
                        "name" =>  "Ennedi-Est"
                    ],
                    [
                        "id" =>  3584,
                        "name" =>  "Ennedi-Ouest"
                    ],
                    [
                        "id" =>  3576,
                        "name" =>  "Gu\u00e9ra"
                    ],
                    [
                        "id" =>  3573,
                        "name" =>  "Hadjer-Lamis"
                    ],
                    [
                        "id" =>  3588,
                        "name" =>  "Kanem"
                    ],
                    [
                        "id" =>  3577,
                        "name" =>  "Lac"
                    ],
                    [
                        "id" =>  3585,
                        "name" =>  "Logone Occidental"
                    ],
                    [
                        "id" =>  3591,
                        "name" =>  "Logone Oriental"
                    ],
                    [
                        "id" =>  3589,
                        "name" =>  "Mandoul"
                    ],
                    [
                        "id" =>  3580,
                        "name" =>  "Mayo-Kebbi Est"
                    ],
                    [
                        "id" =>  3571,
                        "name" =>  "Mayo-Kebbi Ouest"
                    ],
                    [
                        "id" =>  3570,
                        "name" =>  "Moyen-Chari"
                    ],
                    [
                        "id" =>  3586,
                        "name" =>  "N'Djamena"
                    ],
                    [
                        "id" =>  3582,
                        "name" =>  "Ouadda\u00ef"
                    ],
                    [
                        "id" =>  3592,
                        "name" =>  "Salamat"
                    ],
                    [
                        "id" =>  3572,
                        "name" =>  "Sila"
                    ],
                    [
                        "id" =>  3579,
                        "name" =>  "Tandjil\u00e9"
                    ],
                    [
                        "id" =>  3587,
                        "name" =>  "Tibesti"
                    ],
                    [
                        "id" =>  3581,
                        "name" =>  "Wadi Fira"
                    ]
                ]
            ],
            [
                "name" =>  "Chile",
                "numeric_code" =>  "152",
                "alpha_2" =>  "CL",
                "alpha_3" =>  "CHL",
                "phone_code" =>  "56",
                "currency" =>  "CLP",
                "currency_name" =>  "Chilean peso",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde8\ud83c\uddf1",
                "states" =>  [
                    [
                        "id" =>  2828,
                        "name" =>  "Ais\u00e9n del General Carlos Iba\u00f1ez del Campo"
                    ],
                    [
                        "id" =>  2832,
                        "name" =>  "Antofagasta"
                    ],
                    [
                        "id" =>  2829,
                        "name" =>  "Arica y Parinacota"
                    ],
                    [
                        "id" =>  2823,
                        "name" =>  "Atacama"
                    ],
                    [
                        "id" =>  2827,
                        "name" =>  "Biob\u00edo"
                    ],
                    [
                        "id" =>  2825,
                        "name" =>  "Coquimbo"
                    ],
                    [
                        "id" =>  2826,
                        "name" =>  "La Araucan\u00eda"
                    ],
                    [
                        "id" =>  2838,
                        "name" =>  "Libertador General Bernardo O'Higgins"
                    ],
                    [
                        "id" =>  2835,
                        "name" =>  "Los Lagos"
                    ],
                    [
                        "id" =>  2834,
                        "name" =>  "Los R\u00edos"
                    ],
                    [
                        "id" =>  2836,
                        "name" =>  "Magallanes y de la Ant\u00e1rtica Chilena"
                    ],
                    [
                        "id" =>  2833,
                        "name" =>  "Maule"
                    ],
                    [
                        "id" =>  2831,
                        "name" =>  "\u00d1uble"
                    ],
                    [
                        "id" =>  2824,
                        "name" =>  "Regi\u00f3n Metropolitana de Santiago"
                    ],
                    [
                        "id" =>  2837,
                        "name" =>  "Tarapac\u00e1"
                    ],
                    [
                        "id" =>  2830,
                        "name" =>  "Valpara\u00edso"
                    ]
                ]
            ],
            [
                "name" =>  "China",
                "numeric_code" =>  "156",
                "alpha_2" =>  "CN",
                "alpha_3" =>  "CHN",
                "phone_code" =>  "86",
                "currency" =>  "CNY",
                "currency_name" =>  "Chinese yuan",
                "currency_symbol" =>  "\u00a5",
                "emoji" =>  "\ud83c\udde8\ud83c\uddf3",
                "states" =>  [
                    [
                        "id" =>  2251,
                        "name" =>  "Anhui"
                    ],
                    [
                        "id" =>  2257,
                        "name" =>  "Beijing"
                    ],
                    [
                        "id" =>  2271,
                        "name" =>  "Chongqing"
                    ],
                    [
                        "id" =>  2248,
                        "name" =>  "Fujian"
                    ],
                    [
                        "id" =>  2275,
                        "name" =>  "Gansu"
                    ],
                    [
                        "id" =>  2279,
                        "name" =>  "Guangdong"
                    ],
                    [
                        "id" =>  2278,
                        "name" =>  "Guangxi Zhuang"
                    ],
                    [
                        "id" =>  2261,
                        "name" =>  "Guizhou"
                    ],
                    [
                        "id" =>  2273,
                        "name" =>  "Hainan"
                    ],
                    [
                        "id" =>  2280,
                        "name" =>  "Hebei"
                    ],
                    [
                        "id" =>  2265,
                        "name" =>  "Heilongjiang"
                    ],
                    [
                        "id" =>  2259,
                        "name" =>  "Henan"
                    ],
                    [
                        "id" =>  2267,
                        "name" =>  "Hong Kong SAR"
                    ],
                    [
                        "id" =>  2274,
                        "name" =>  "Hubei"
                    ],
                    [
                        "id" =>  2258,
                        "name" =>  "Hunan"
                    ],
                    [
                        "id" =>  2269,
                        "name" =>  "Inner Mongolia"
                    ],
                    [
                        "id" =>  2250,
                        "name" =>  "Jiangsu"
                    ],
                    [
                        "id" =>  2256,
                        "name" =>  "Jiangxi"
                    ],
                    [
                        "id" =>  2253,
                        "name" =>  "Jilin"
                    ],
                    [
                        "id" =>  2268,
                        "name" =>  "Liaoning"
                    ],
                    [
                        "id" =>  2266,
                        "name" =>  "Macau SAR"
                    ],
                    [
                        "id" =>  2262,
                        "name" =>  "Ningxia Huizu"
                    ],
                    [
                        "id" =>  2270,
                        "name" =>  "Qinghai"
                    ],
                    [
                        "id" =>  2272,
                        "name" =>  "Shaanxi"
                    ],
                    [
                        "id" =>  2252,
                        "name" =>  "Shandong"
                    ],
                    [
                        "id" =>  2249,
                        "name" =>  "Shanghai"
                    ],
                    [
                        "id" =>  2254,
                        "name" =>  "Shanxi"
                    ],
                    [
                        "id" =>  2277,
                        "name" =>  "Sichuan"
                    ],
                    [
                        "id" =>  2255,
                        "name" =>  "Taiwan"
                    ],
                    [
                        "id" =>  2276,
                        "name" =>  "Tianjin"
                    ],
                    [
                        "id" =>  2263,
                        "name" =>  "Xinjiang"
                    ],
                    [
                        "id" =>  2264,
                        "name" =>  "Xizang"
                    ],
                    [
                        "id" =>  2260,
                        "name" =>  "Yunnan"
                    ],
                    [
                        "id" =>  2247,
                        "name" =>  "Zhejiang"
                    ]
                ]
            ],
            [
                "name" =>  "Christmas Island",
                "numeric_code" =>  "162",
                "alpha_2" =>  "CX",
                "alpha_3" =>  "CXR",
                "phone_code" =>  "61",
                "currency" =>  "AUD",
                "currency_name" =>  "Australian dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde8\ud83c\uddfd",
                "states" =>  []
            ],
            [
                "name" =>  "Cocos (Keeling) Islands",
                "numeric_code" =>  "166",
                "alpha_2" =>  "CC",
                "alpha_3" =>  "CCK",
                "phone_code" =>  "61",
                "currency" =>  "AUD",
                "currency_name" =>  "Australian dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde8\ud83c\udde8",
                "states" =>  []
            ],
            [
                "name" =>  "Colombia",
                "numeric_code" =>  "170",
                "alpha_2" =>  "CO",
                "alpha_3" =>  "COL",
                "phone_code" =>  "57",
                "currency" =>  "COP",
                "currency_name" =>  "Colombian peso",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde8\ud83c\uddf4",
                "states" =>  [
                    [
                        "id" =>  2895,
                        "name" =>  "Amazonas"
                    ],
                    [
                        "id" =>  2890,
                        "name" =>  "Antioquia"
                    ],
                    [
                        "id" =>  2881,
                        "name" =>  "Arauca"
                    ],
                    [
                        "id" =>  2900,
                        "name" =>  "Archipi\u00e9lago de San Andr\u00e9s, Providencia y Santa Catalina"
                    ],
                    [
                        "id" =>  2880,
                        "name" =>  "Atl\u00e1ntico"
                    ],
                    [
                        "id" =>  4921,
                        "name" =>  "Bogot\u00e1 D.C."
                    ],
                    [
                        "id" =>  2893,
                        "name" =>  "Bol\u00edvar"
                    ],
                    [
                        "id" =>  2903,
                        "name" =>  "Boyac\u00e1"
                    ],
                    [
                        "id" =>  2887,
                        "name" =>  "Caldas"
                    ],
                    [
                        "id" =>  2891,
                        "name" =>  "Caquet\u00e1"
                    ],
                    [
                        "id" =>  2892,
                        "name" =>  "Casanare"
                    ],
                    [
                        "id" =>  2884,
                        "name" =>  "Cauca"
                    ],
                    [
                        "id" =>  2899,
                        "name" =>  "Cesar"
                    ],
                    [
                        "id" =>  2876,
                        "name" =>  "Choc\u00f3"
                    ],
                    [
                        "id" =>  2898,
                        "name" =>  "C\u00f3rdoba"
                    ],
                    [
                        "id" =>  2875,
                        "name" =>  "Cundinamarca"
                    ],
                    [
                        "id" =>  2882,
                        "name" =>  "Guain\u00eda"
                    ],
                    [
                        "id" =>  2888,
                        "name" =>  "Guaviare"
                    ],
                    [
                        "id" =>  4871,
                        "name" =>  "Huila"
                    ],
                    [
                        "id" =>  2889,
                        "name" =>  "La Guajira"
                    ],
                    [
                        "id" =>  2886,
                        "name" =>  "Magdalena"
                    ],
                    [
                        "id" =>  2878,
                        "name" =>  "Meta"
                    ],
                    [
                        "id" =>  2897,
                        "name" =>  "Nari\u00f1o"
                    ],
                    [
                        "id" =>  2877,
                        "name" =>  "Norte de Santander"
                    ],
                    [
                        "id" =>  2896,
                        "name" =>  "Putumayo"
                    ],
                    [
                        "id" =>  2874,
                        "name" =>  "Quind\u00edo"
                    ],
                    [
                        "id" =>  2879,
                        "name" =>  "Risaralda"
                    ],
                    [
                        "id" =>  2901,
                        "name" =>  "Santander"
                    ],
                    [
                        "id" =>  2902,
                        "name" =>  "Sucre"
                    ],
                    [
                        "id" =>  2883,
                        "name" =>  "Tolima"
                    ],
                    [
                        "id" =>  2904,
                        "name" =>  "Valle del Cauca"
                    ],
                    [
                        "id" =>  2885,
                        "name" =>  "Vaup\u00e9s"
                    ],
                    [
                        "id" =>  2894,
                        "name" =>  "Vichada"
                    ]
                ]
            ],
            [
                "name" =>  "Comoros",
                "numeric_code" =>  "174",
                "alpha_2" =>  "KM",
                "alpha_3" =>  "COM",
                "phone_code" =>  "269",
                "currency" =>  "KMF",
                "currency_name" =>  "Comorian franc",
                "currency_symbol" =>  "CF",
                "emoji" =>  "\ud83c\uddf0\ud83c\uddf2",
                "states" =>  [
                    [
                        "id" =>  2821,
                        "name" =>  "Anjouan"
                    ],
                    [
                        "id" =>  2822,
                        "name" =>  "Grande Comore"
                    ],
                    [
                        "id" =>  2820,
                        "name" =>  "Moh\u00e9li"
                    ]
                ]
            ],
            [
                "name" =>  "Congo",
                "numeric_code" =>  "178",
                "alpha_2" =>  "CG",
                "alpha_3" =>  "COG",
                "phone_code" =>  "242",
                "currency" =>  "XAF",
                "currency_name" =>  "Central African CFA franc",
                "currency_symbol" =>  "FC",
                "emoji" =>  "\ud83c\udde8\ud83c\uddec",
                "states" =>  [
                    [
                        "id" =>  2866,
                        "name" =>  "Bouenza Department"
                    ],
                    [
                        "id" =>  2870,
                        "name" =>  "Brazzaville"
                    ],
                    [
                        "id" =>  2864,
                        "name" =>  "Cuvette Department"
                    ],
                    [
                        "id" =>  2869,
                        "name" =>  "Cuvette-Ouest Department"
                    ],
                    [
                        "id" =>  2867,
                        "name" =>  "Kouilou Department"
                    ],
                    [
                        "id" =>  2868,
                        "name" =>  "L\u00e9koumou Department"
                    ],
                    [
                        "id" =>  2865,
                        "name" =>  "Likouala Department"
                    ],
                    [
                        "id" =>  2872,
                        "name" =>  "Niari Department"
                    ],
                    [
                        "id" =>  2862,
                        "name" =>  "Plateaux Department"
                    ],
                    [
                        "id" =>  2863,
                        "name" =>  "Pointe-Noire"
                    ],
                    [
                        "id" =>  2873,
                        "name" =>  "Pool Department"
                    ],
                    [
                        "id" =>  2871,
                        "name" =>  "Sangha Department"
                    ]
                ]
            ],
            [
                "name" =>  "Cook Islands",
                "numeric_code" =>  "184",
                "alpha_2" =>  "CK",
                "alpha_3" =>  "COK",
                "phone_code" =>  "682",
                "currency" =>  "NZD",
                "currency_name" =>  "Cook Islands dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde8\ud83c\uddf0",
                "states" =>  []
            ],
            [
                "name" =>  "Costa Rica",
                "numeric_code" =>  "188",
                "alpha_2" =>  "CR",
                "alpha_3" =>  "CRI",
                "phone_code" =>  "506",
                "currency" =>  "CRC",
                "currency_name" =>  "Costa Rican col\u00f3n",
                "currency_symbol" =>  "\u20a1",
                "emoji" =>  "\ud83c\udde8\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  1215,
                        "name" =>  "Alajuela Province"
                    ],
                    [
                        "id" =>  1209,
                        "name" =>  "Guanacaste Province"
                    ],
                    [
                        "id" =>  1212,
                        "name" =>  "Heredia Province"
                    ],
                    [
                        "id" =>  1213,
                        "name" =>  "Lim\u00f3n Province"
                    ],
                    [
                        "id" =>  1211,
                        "name" =>  "Provincia de Cartago"
                    ],
                    [
                        "id" =>  1210,
                        "name" =>  "Puntarenas Province"
                    ],
                    [
                        "id" =>  1214,
                        "name" =>  "San Jos\u00e9 Province"
                    ]
                ]
            ],
            [
                "name" =>  "Cote D'Ivoire (Ivory Coast)",
                "numeric_code" =>  "384",
                "alpha_2" =>  "CI",
                "alpha_3" =>  "CIV",
                "phone_code" =>  "225",
                "currency" =>  "XOF",
                "currency_name" =>  "West African CFA franc",
                "currency_symbol" =>  "CFA",
                "emoji" =>  "\ud83c\udde8\ud83c\uddee",
                "states" =>  [
                    [
                        "id" =>  2634,
                        "name" =>  "Abidjan"
                    ],
                    [
                        "id" =>  2626,
                        "name" =>  "Agn\u00e9by"
                    ],
                    [
                        "id" =>  2636,
                        "name" =>  "Bafing Region"
                    ],
                    [
                        "id" =>  2643,
                        "name" =>  "Bas-Sassandra District"
                    ],
                    [
                        "id" =>  2635,
                        "name" =>  "Bas-Sassandra Region"
                    ],
                    [
                        "id" =>  2654,
                        "name" =>  "Como\u00e9 District"
                    ],
                    [
                        "id" =>  2644,
                        "name" =>  "Dengu\u00e9l\u00e9 District"
                    ],
                    [
                        "id" =>  2642,
                        "name" =>  "Dengu\u00e9l\u00e9 Region"
                    ],
                    [
                        "id" =>  2645,
                        "name" =>  "Dix-Huit Montagnes"
                    ],
                    [
                        "id" =>  2633,
                        "name" =>  "Fromager"
                    ],
                    [
                        "id" =>  2651,
                        "name" =>  "G\u00f4h-Djiboua District"
                    ],
                    [
                        "id" =>  2638,
                        "name" =>  "Haut-Sassandra"
                    ],
                    [
                        "id" =>  2632,
                        "name" =>  "Lacs District"
                    ],
                    [
                        "id" =>  2640,
                        "name" =>  "Lacs Region"
                    ],
                    [
                        "id" =>  2627,
                        "name" =>  "Lagunes District"
                    ],
                    [
                        "id" =>  2639,
                        "name" =>  "Lagunes region"
                    ],
                    [
                        "id" =>  2631,
                        "name" =>  "Marahou\u00e9 Region"
                    ],
                    [
                        "id" =>  2629,
                        "name" =>  "Montagnes District"
                    ],
                    [
                        "id" =>  2646,
                        "name" =>  "Moyen-Cavally"
                    ],
                    [
                        "id" =>  2630,
                        "name" =>  "Moyen-Como\u00e9"
                    ],
                    [
                        "id" =>  2655,
                        "name" =>  "N'zi-Como\u00e9"
                    ],
                    [
                        "id" =>  2648,
                        "name" =>  "Sassandra-Marahou\u00e9 District"
                    ],
                    [
                        "id" =>  2625,
                        "name" =>  "Savanes Region"
                    ],
                    [
                        "id" =>  2628,
                        "name" =>  "Sud-Bandama"
                    ],
                    [
                        "id" =>  2652,
                        "name" =>  "Sud-Como\u00e9"
                    ],
                    [
                        "id" =>  2637,
                        "name" =>  "Vall\u00e9e du Bandama District"
                    ],
                    [
                        "id" =>  2647,
                        "name" =>  "Vall\u00e9e du Bandama Region"
                    ],
                    [
                        "id" =>  2650,
                        "name" =>  "Woroba District"
                    ],
                    [
                        "id" =>  2649,
                        "name" =>  "Worodougou"
                    ],
                    [
                        "id" =>  2653,
                        "name" =>  "Yamoussoukro"
                    ],
                    [
                        "id" =>  2641,
                        "name" =>  "Zanzan Region"
                    ]
                ]
            ],
            [
                "name" =>  "Croatia",
                "numeric_code" =>  "191",
                "alpha_2" =>  "HR",
                "alpha_3" =>  "HRV",
                "phone_code" =>  "385",
                "currency" =>  "HRK",
                "currency_name" =>  "Croatian kuna",
                "currency_symbol" =>  "kn",
                "emoji" =>  "\ud83c\udded\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  734,
                        "name" =>  "Bjelovar-Bilogora"
                    ],
                    [
                        "id" =>  737,
                        "name" =>  "Brod-Posavina"
                    ],
                    [
                        "id" =>  728,
                        "name" =>  "Dubrovnik-Neretva"
                    ],
                    [
                        "id" =>  743,
                        "name" =>  "Istria"
                    ],
                    [
                        "id" =>  5069,
                        "name" =>  "Karlovac"
                    ],
                    [
                        "id" =>  742,
                        "name" =>  "Koprivnica-Kri\u017eevci"
                    ],
                    [
                        "id" =>  729,
                        "name" =>  "Krapina-Zagorje"
                    ],
                    [
                        "id" =>  731,
                        "name" =>  "Lika-Senj"
                    ],
                    [
                        "id" =>  726,
                        "name" =>  "Me\u0111imurje"
                    ],
                    [
                        "id" =>  740,
                        "name" =>  "Osijek-Baranja"
                    ],
                    [
                        "id" =>  724,
                        "name" =>  "Po\u017eega-Slavonia"
                    ],
                    [
                        "id" =>  735,
                        "name" =>  "Primorje-Gorski Kotar"
                    ],
                    [
                        "id" =>  730,
                        "name" =>  "\u0160ibenik-Knin"
                    ],
                    [
                        "id" =>  733,
                        "name" =>  "Sisak-Moslavina"
                    ],
                    [
                        "id" =>  725,
                        "name" =>  "Split-Dalmatia"
                    ],
                    [
                        "id" =>  739,
                        "name" =>  "Vara\u017edin"
                    ],
                    [
                        "id" =>  732,
                        "name" =>  "Virovitica-Podravina"
                    ],
                    [
                        "id" =>  741,
                        "name" =>  "Vukovar-Syrmia"
                    ],
                    [
                        "id" =>  727,
                        "name" =>  "Zadar"
                    ],
                    [
                        "id" =>  736,
                        "name" =>  "Zagreb"
                    ],
                    [
                        "id" =>  738,
                        "name" =>  "Zagreb"
                    ]
                ]
            ],
            [
                "name" =>  "Cuba",
                "numeric_code" =>  "192",
                "alpha_2" =>  "CU",
                "alpha_3" =>  "CUB",
                "phone_code" =>  "53",
                "currency" =>  "CUP",
                "currency_name" =>  "Cuban peso",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde8\ud83c\uddfa",
                "states" =>  [
                    [
                        "id" =>  283,
                        "name" =>  "Artemisa Province"
                    ],
                    [
                        "id" =>  286,
                        "name" =>  "Camag\u00fcey Province"
                    ],
                    [
                        "id" =>  282,
                        "name" =>  "Ciego de \u00c1vila Province"
                    ],
                    [
                        "id" =>  287,
                        "name" =>  "Cienfuegos Province"
                    ],
                    [
                        "id" =>  275,
                        "name" =>  "Granma Province"
                    ],
                    [
                        "id" =>  285,
                        "name" =>  "Guant\u00e1namo Province"
                    ],
                    [
                        "id" =>  272,
                        "name" =>  "Havana Province"
                    ],
                    [
                        "id" =>  279,
                        "name" =>  "Holgu\u00edn Province"
                    ],
                    [
                        "id" =>  278,
                        "name" =>  "Isla de la Juventud"
                    ],
                    [
                        "id" =>  281,
                        "name" =>  "Las Tunas Province"
                    ],
                    [
                        "id" =>  284,
                        "name" =>  "Matanzas Province"
                    ],
                    [
                        "id" =>  276,
                        "name" =>  "Mayabeque Province"
                    ],
                    [
                        "id" =>  277,
                        "name" =>  "Pinar del R\u00edo Province"
                    ],
                    [
                        "id" =>  274,
                        "name" =>  "Sancti Sp\u00edritus Province"
                    ],
                    [
                        "id" =>  273,
                        "name" =>  "Santiago de Cuba Province"
                    ],
                    [
                        "id" =>  280,
                        "name" =>  "Villa Clara Province"
                    ]
                ]
            ],
            [
                "name" =>  "Cura\u00e7ao",
                "numeric_code" =>  "531",
                "alpha_2" =>  "CW",
                "alpha_3" =>  "CUW",
                "phone_code" =>  "599",
                "currency" =>  "ANG",
                "currency_name" =>  "Netherlands Antillean guilder",
                "currency_symbol" =>  "\u0192",
                "emoji" =>  "\ud83c\udde8\ud83c\uddfc",
                "states" =>  []
            ],
            [
                "name" =>  "Cyprus",
                "numeric_code" =>  "196",
                "alpha_2" =>  "CY",
                "alpha_3" =>  "CYP",
                "phone_code" =>  "357",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\udde8\ud83c\uddfe",
                "states" =>  [
                    [
                        "id" =>  749,
                        "name" =>  "Famagusta District (Ma\u011fusa)"
                    ],
                    [
                        "id" =>  744,
                        "name" =>  "Kyrenia District (Keryneia)"
                    ],
                    [
                        "id" =>  747,
                        "name" =>  "Larnaca District (Larnaka)"
                    ],
                    [
                        "id" =>  748,
                        "name" =>  "Limassol District (Leymasun)"
                    ],
                    [
                        "id" =>  745,
                        "name" =>  "Nicosia District (Lefko\u015fa)"
                    ],
                    [
                        "id" =>  746,
                        "name" =>  "Paphos District (Pafos)"
                    ]
                ]
            ],
            [
                "name" =>  "Czech Republic",
                "numeric_code" =>  "203",
                "alpha_2" =>  "CZ",
                "alpha_3" =>  "CZE",
                "phone_code" =>  "420",
                "currency" =>  "CZK",
                "currency_name" =>  "Czech koruna",
                "currency_symbol" =>  "K\u010d",
                "emoji" =>  "\ud83c\udde8\ud83c\uddff",
                "states" =>  [
                    [
                        "id" =>  4627,
                        "name" =>  "Bene\u0161ov"
                    ],
                    [
                        "id" =>  4620,
                        "name" =>  "Beroun"
                    ],
                    [
                        "id" =>  4615,
                        "name" =>  "Blansko"
                    ],
                    [
                        "id" =>  4542,
                        "name" =>  "B\u0159eclav"
                    ],
                    [
                        "id" =>  4568,
                        "name" =>  "Brno-m\u011bsto"
                    ],
                    [
                        "id" =>  4545,
                        "name" =>  "Brno-venkov"
                    ],
                    [
                        "id" =>  4644,
                        "name" =>  "Brunt\u00e1l"
                    ],
                    [
                        "id" =>  4633,
                        "name" =>  "\u010cesk\u00e1 L\u00edpa"
                    ],
                    [
                        "id" =>  4556,
                        "name" =>  "\u010cesk\u00e9 Bud\u011bjovice"
                    ],
                    [
                        "id" =>  4543,
                        "name" =>  "\u010cesk\u00fd Krumlov"
                    ],
                    [
                        "id" =>  4573,
                        "name" =>  "Cheb"
                    ],
                    [
                        "id" =>  4553,
                        "name" =>  "Chomutov"
                    ],
                    [
                        "id" =>  4634,
                        "name" =>  "Chrudim"
                    ],
                    [
                        "id" =>  4609,
                        "name" =>  "D\u011b\u010d\u00edn"
                    ],
                    [
                        "id" =>  4641,
                        "name" =>  "Doma\u017elice"
                    ],
                    [
                        "id" =>  4559,
                        "name" =>  "Fr\u00fddek-M\u00edstek"
                    ],
                    [
                        "id" =>  4611,
                        "name" =>  "Havl\u00ed\u010dk\u016fv Brod"
                    ],
                    [
                        "id" =>  4561,
                        "name" =>  "Hodon\u00edn"
                    ],
                    [
                        "id" =>  4580,
                        "name" =>  "Hradec Kr\u00e1lov\u00e9"
                    ],
                    [
                        "id" =>  4612,
                        "name" =>  "Jablonec nad Nisou"
                    ],
                    [
                        "id" =>  4625,
                        "name" =>  "Jesen\u00edk"
                    ],
                    [
                        "id" =>  4640,
                        "name" =>  "Ji\u010d\u00edn"
                    ],
                    [
                        "id" =>  4613,
                        "name" =>  "Jihlava"
                    ],
                    [
                        "id" =>  4639,
                        "name" =>  "Jiho\u010desk\u00fd kraj"
                    ],
                    [
                        "id" =>  4602,
                        "name" =>  "Jihomoravsk\u00fd kraj"
                    ],
                    [
                        "id" =>  4624,
                        "name" =>  "Jind\u0159ich\u016fv Hradec"
                    ],
                    [
                        "id" =>  4581,
                        "name" =>  "Karlovarsk\u00fd kraj"
                    ],
                    [
                        "id" =>  4604,
                        "name" =>  "Karlovy Vary"
                    ],
                    [
                        "id" =>  4586,
                        "name" =>  "Karvin\u00e1"
                    ],
                    [
                        "id" =>  4631,
                        "name" =>  "Kladno"
                    ],
                    [
                        "id" =>  4591,
                        "name" =>  "Klatovy"
                    ],
                    [
                        "id" =>  4618,
                        "name" =>  "Kol\u00edn"
                    ],
                    [
                        "id" =>  4575,
                        "name" =>  "Kraj Vyso\u010dina"
                    ],
                    [
                        "id" =>  4614,
                        "name" =>  "Kr\u00e1lov\u00e9hradeck\u00fd kraj"
                    ],
                    [
                        "id" =>  4593,
                        "name" =>  "Krom\u011b\u0159\u00ed\u017e"
                    ],
                    [
                        "id" =>  4923,
                        "name" =>  "Kutn\u00e1 Hora"
                    ],
                    [
                        "id" =>  4590,
                        "name" =>  "Liberec"
                    ],
                    [
                        "id" =>  4601,
                        "name" =>  "Libereck\u00fd kraj"
                    ],
                    [
                        "id" =>  4605,
                        "name" =>  "Litom\u011b\u0159ice"
                    ],
                    [
                        "id" =>  4617,
                        "name" =>  "Louny"
                    ],
                    [
                        "id" =>  4638,
                        "name" =>  "M\u011bln\u00edk"
                    ],
                    [
                        "id" =>  4643,
                        "name" =>  "Mlad\u00e1 Boleslav"
                    ],
                    [
                        "id" =>  4600,
                        "name" =>  "Moravskoslezsk\u00fd kraj"
                    ],
                    [
                        "id" =>  4629,
                        "name" =>  "Most"
                    ],
                    [
                        "id" =>  4550,
                        "name" =>  "N\u00e1chod"
                    ],
                    [
                        "id" =>  4548,
                        "name" =>  "Nov\u00fd Ji\u010d\u00edn"
                    ],
                    [
                        "id" =>  4582,
                        "name" =>  "Nymburk"
                    ],
                    [
                        "id" =>  4574,
                        "name" =>  "Olomouc"
                    ],
                    [
                        "id" =>  4589,
                        "name" =>  "Olomouck\u00fd kraj"
                    ],
                    [
                        "id" =>  4623,
                        "name" =>  "Opava"
                    ],
                    [
                        "id" =>  4584,
                        "name" =>  "Ostrava-m\u011bsto"
                    ],
                    [
                        "id" =>  4547,
                        "name" =>  "Pardubice"
                    ],
                    [
                        "id" =>  4588,
                        "name" =>  "Pardubick\u00fd kraj"
                    ],
                    [
                        "id" =>  4645,
                        "name" =>  "Pelh\u0159imov"
                    ],
                    [
                        "id" =>  4560,
                        "name" =>  "P\u00edsek"
                    ],
                    [
                        "id" =>  4608,
                        "name" =>  "Plze\u0148-jih"
                    ],
                    [
                        "id" =>  4544,
                        "name" =>  "Plze\u0148-m\u011bsto"
                    ],
                    [
                        "id" =>  4564,
                        "name" =>  "Plze\u0148-sever"
                    ],
                    [
                        "id" =>  4607,
                        "name" =>  "Plze\u0148sk\u00fd kraj"
                    ],
                    [
                        "id" =>  4578,
                        "name" =>  "Prachatice"
                    ],
                    [
                        "id" =>  4606,
                        "name" =>  "Praha-v\u00fdchod"
                    ],
                    [
                        "id" =>  4619,
                        "name" =>  "Praha-z\u00e1pad"
                    ],
                    [
                        "id" =>  4598,
                        "name" =>  "Praha, Hlavn\u00ed m\u011bsto"
                    ],
                    [
                        "id" =>  4626,
                        "name" =>  "P\u0159erov"
                    ],
                    [
                        "id" =>  4546,
                        "name" =>  "P\u0159\u00edbram"
                    ],
                    [
                        "id" =>  4551,
                        "name" =>  "Prost\u011bjov"
                    ],
                    [
                        "id" =>  4558,
                        "name" =>  "Rakovn\u00edk"
                    ],
                    [
                        "id" =>  4583,
                        "name" =>  "Rokycany"
                    ],
                    [
                        "id" =>  4636,
                        "name" =>  "Rychnov nad Kn\u011b\u017enou"
                    ],
                    [
                        "id" =>  4596,
                        "name" =>  "Semily"
                    ],
                    [
                        "id" =>  4595,
                        "name" =>  "Sokolov"
                    ],
                    [
                        "id" =>  4628,
                        "name" =>  "Strakonice"
                    ],
                    [
                        "id" =>  4554,
                        "name" =>  "St\u0159edo\u010desk\u00fd kraj"
                    ],
                    [
                        "id" =>  4642,
                        "name" =>  "\u0160umperk"
                    ],
                    [
                        "id" =>  4571,
                        "name" =>  "Svitavy"
                    ],
                    [
                        "id" =>  4565,
                        "name" =>  "T\u00e1bor"
                    ],
                    [
                        "id" =>  4646,
                        "name" =>  "Tachov"
                    ],
                    [
                        "id" =>  4621,
                        "name" =>  "Teplice"
                    ],
                    [
                        "id" =>  4597,
                        "name" =>  "T\u0159eb\u00ed\u010d"
                    ],
                    [
                        "id" =>  4579,
                        "name" =>  "Trutnov"
                    ],
                    [
                        "id" =>  4592,
                        "name" =>  "Uhersk\u00e9 Hradi\u0161t\u011b"
                    ],
                    [
                        "id" =>  4576,
                        "name" =>  "\u00dasteck\u00fd kraj"
                    ],
                    [
                        "id" =>  4599,
                        "name" =>  "\u00dast\u00ed nad Labem"
                    ],
                    [
                        "id" =>  4647,
                        "name" =>  "\u00dast\u00ed nad Orlic\u00ed"
                    ],
                    [
                        "id" =>  4572,
                        "name" =>  "Vset\u00edn"
                    ],
                    [
                        "id" =>  4622,
                        "name" =>  "Vy\u0161kov"
                    ],
                    [
                        "id" =>  4648,
                        "name" =>  "\u017d\u010f\u00e1r nad S\u00e1zavou"
                    ],
                    [
                        "id" =>  4563,
                        "name" =>  "Zl\u00edn"
                    ],
                    [
                        "id" =>  4552,
                        "name" =>  "Zl\u00ednsk\u00fd kraj"
                    ],
                    [
                        "id" =>  4630,
                        "name" =>  "Znojmo"
                    ]
                ]
            ],
            [
                "name" =>  "Democratic Republic of the Congo",
                "numeric_code" =>  "180",
                "alpha_2" =>  "CD",
                "alpha_3" =>  "COD",
                "phone_code" =>  "243",
                "currency" =>  "CDF",
                "currency_name" =>  "Congolese Franc",
                "currency_symbol" =>  "FC",
                "emoji" =>  "\ud83c\udde8\ud83c\udde9",
                "states" =>  [
                    [
                        "id" =>  2753,
                        "name" =>  "Bas-U\u00e9l\u00e9"
                    ],
                    [
                        "id" =>  2744,
                        "name" =>  "\u00c9quateur"
                    ],
                    [
                        "id" =>  2750,
                        "name" =>  "Haut-Katanga"
                    ],
                    [
                        "id" =>  2758,
                        "name" =>  "Haut-Lomami"
                    ],
                    [
                        "id" =>  2734,
                        "name" =>  "Haut-U\u00e9l\u00e9"
                    ],
                    [
                        "id" =>  2751,
                        "name" =>  "Ituri"
                    ],
                    [
                        "id" =>  2757,
                        "name" =>  "Kasa\u00ef"
                    ],
                    [
                        "id" =>  2742,
                        "name" =>  "Kasa\u00ef Central"
                    ],
                    [
                        "id" =>  2735,
                        "name" =>  "Kasa\u00ef Oriental"
                    ],
                    [
                        "id" =>  2741,
                        "name" =>  "Kinshasa"
                    ],
                    [
                        "id" =>  2746,
                        "name" =>  "Kongo Central"
                    ],
                    [
                        "id" =>  2740,
                        "name" =>  "Kwango"
                    ],
                    [
                        "id" =>  2759,
                        "name" =>  "Kwilu"
                    ],
                    [
                        "id" =>  2747,
                        "name" =>  "Lomami"
                    ],
                    [
                        "id" =>  4953,
                        "name" =>  "Lualaba"
                    ],
                    [
                        "id" =>  2755,
                        "name" =>  "Mai-Ndombe"
                    ],
                    [
                        "id" =>  2745,
                        "name" =>  "Maniema"
                    ],
                    [
                        "id" =>  2752,
                        "name" =>  "Mongala"
                    ],
                    [
                        "id" =>  2749,
                        "name" =>  "Nord-Kivu"
                    ],
                    [
                        "id" =>  2739,
                        "name" =>  "Nord-Ubangi"
                    ],
                    [
                        "id" =>  2743,
                        "name" =>  "Sankuru"
                    ],
                    [
                        "id" =>  2738,
                        "name" =>  "Sud-Kivu"
                    ],
                    [
                        "id" =>  2748,
                        "name" =>  "Sud-Ubangi"
                    ],
                    [
                        "id" =>  2733,
                        "name" =>  "Tanganyika"
                    ],
                    [
                        "id" =>  2756,
                        "name" =>  "Tshopo"
                    ],
                    [
                        "id" =>  2732,
                        "name" =>  "Tshuapa"
                    ]
                ]
            ],
            [
                "name" =>  "Denmark",
                "numeric_code" =>  "208",
                "alpha_2" =>  "DK",
                "alpha_3" =>  "DNK",
                "phone_code" =>  "45",
                "currency" =>  "DKK",
                "currency_name" =>  "Danish krone",
                "currency_symbol" =>  "Kr.",
                "emoji" =>  "\ud83c\udde9\ud83c\uddf0",
                "states" =>  [
                    [
                        "id" =>  1530,
                        "name" =>  "Capital Region of Denmark"
                    ],
                    [
                        "id" =>  1531,
                        "name" =>  "Central Denmark Region"
                    ],
                    [
                        "id" =>  1532,
                        "name" =>  "North Denmark Region"
                    ],
                    [
                        "id" =>  1529,
                        "name" =>  "Region of Southern Denmark"
                    ],
                    [
                        "id" =>  1528,
                        "name" =>  "Region Zealand"
                    ]
                ]
            ],
            [
                "name" =>  "Djibouti",
                "numeric_code" =>  "262",
                "alpha_2" =>  "DJ",
                "alpha_3" =>  "DJI",
                "phone_code" =>  "253",
                "currency" =>  "DJF",
                "currency_name" =>  "Djiboutian franc",
                "currency_symbol" =>  "Fdj",
                "emoji" =>  "\ud83c\udde9\ud83c\uddef",
                "states" =>  [
                    [
                        "id" =>  2933,
                        "name" =>  "Ali Sabieh Region"
                    ],
                    [
                        "id" =>  2932,
                        "name" =>  "Arta Region"
                    ],
                    [
                        "id" =>  2930,
                        "name" =>  "Dikhil Region"
                    ],
                    [
                        "id" =>  2929,
                        "name" =>  "Djibouti"
                    ],
                    [
                        "id" =>  2928,
                        "name" =>  "Obock Region"
                    ],
                    [
                        "id" =>  2931,
                        "name" =>  "Tadjourah Region"
                    ]
                ]
            ],
            [
                "name" =>  "Dominica",
                "numeric_code" =>  "212",
                "alpha_2" =>  "DM",
                "alpha_3" =>  "DMA",
                "phone_code" =>  "+1-767",
                "currency" =>  "XCD",
                "currency_name" =>  "Eastern Caribbean dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde9\ud83c\uddf2",
                "states" =>  [
                    [
                        "id" =>  4082,
                        "name" =>  "Saint Andrew Parish"
                    ],
                    [
                        "id" =>  4078,
                        "name" =>  "Saint David Parish"
                    ],
                    [
                        "id" =>  4079,
                        "name" =>  "Saint George Parish"
                    ],
                    [
                        "id" =>  4076,
                        "name" =>  "Saint John Parish"
                    ],
                    [
                        "id" =>  4085,
                        "name" =>  "Saint Joseph Parish"
                    ],
                    [
                        "id" =>  4083,
                        "name" =>  "Saint Luke Parish"
                    ],
                    [
                        "id" =>  4077,
                        "name" =>  "Saint Mark Parish"
                    ],
                    [
                        "id" =>  4080,
                        "name" =>  "Saint Patrick Parish"
                    ],
                    [
                        "id" =>  4084,
                        "name" =>  "Saint Paul Parish"
                    ],
                    [
                        "id" =>  4081,
                        "name" =>  "Saint Peter Parish"
                    ]
                ]
            ],
            [
                "name" =>  "Dominican Republic",
                "numeric_code" =>  "214",
                "alpha_2" =>  "DO",
                "alpha_3" =>  "DOM",
                "phone_code" =>  "+1-809 and 1-829",
                "currency" =>  "DOP",
                "currency_name" =>  "Dominican peso",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udde9\ud83c\uddf4",
                "states" =>  [
                    [
                        "id" =>  4114,
                        "name" =>  "Azua Province"
                    ],
                    [
                        "id" =>  4105,
                        "name" =>  "Baoruco Province"
                    ],
                    [
                        "id" =>  4090,
                        "name" =>  "Barahona Province"
                    ],
                    [
                        "id" =>  4107,
                        "name" =>  "Dajab\u00f3n Province"
                    ],
                    [
                        "id" =>  4095,
                        "name" =>  "Distrito Nacional"
                    ],
                    [
                        "id" =>  4113,
                        "name" =>  "Duarte Province"
                    ],
                    [
                        "id" =>  4086,
                        "name" =>  "El Seibo Province"
                    ],
                    [
                        "id" =>  4102,
                        "name" =>  "Espaillat Province"
                    ],
                    [
                        "id" =>  4106,
                        "name" =>  "Hato Mayor Province"
                    ],
                    [
                        "id" =>  4089,
                        "name" =>  "Hermanas Mirabal Province"
                    ],
                    [
                        "id" =>  4097,
                        "name" =>  "Independencia"
                    ],
                    [
                        "id" =>  4109,
                        "name" =>  "La Altagracia Province"
                    ],
                    [
                        "id" =>  4087,
                        "name" =>  "La Romana Province"
                    ],
                    [
                        "id" =>  4116,
                        "name" =>  "La Vega Province"
                    ],
                    [
                        "id" =>  4094,
                        "name" =>  "Mar\u00eda Trinidad S\u00e1nchez Province"
                    ],
                    [
                        "id" =>  4099,
                        "name" =>  "Monse\u00f1or Nouel Province"
                    ],
                    [
                        "id" =>  4115,
                        "name" =>  "Monte Cristi Province"
                    ],
                    [
                        "id" =>  4111,
                        "name" =>  "Monte Plata Province"
                    ],
                    [
                        "id" =>  4101,
                        "name" =>  "Pedernales Province"
                    ],
                    [
                        "id" =>  4096,
                        "name" =>  "Peravia Province"
                    ],
                    [
                        "id" =>  4092,
                        "name" =>  "Puerto Plata Province"
                    ],
                    [
                        "id" =>  4103,
                        "name" =>  "Saman\u00e1 Province"
                    ],
                    [
                        "id" =>  4091,
                        "name" =>  "San Crist\u00f3bal Province"
                    ],
                    [
                        "id" =>  4112,
                        "name" =>  "San Jos\u00e9 de Ocoa Province"
                    ],
                    [
                        "id" =>  4098,
                        "name" =>  "San Juan Province"
                    ],
                    [
                        "id" =>  4110,
                        "name" =>  "San Pedro de Macor\u00eds"
                    ],
                    [
                        "id" =>  4088,
                        "name" =>  "S\u00e1nchez Ram\u00edrez Province"
                    ],
                    [
                        "id" =>  4108,
                        "name" =>  "Santiago Province"
                    ],
                    [
                        "id" =>  4100,
                        "name" =>  "Santiago Rodr\u00edguez Province"
                    ],
                    [
                        "id" =>  4093,
                        "name" =>  "Santo Domingo Province"
                    ],
                    [
                        "id" =>  4104,
                        "name" =>  "Valverde Province"
                    ]
                ]
            ],
            [
                "name" =>  "East Timor",
                "numeric_code" =>  "626",
                "alpha_2" =>  "TL",
                "alpha_3" =>  "TLS",
                "phone_code" =>  "670",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf9\ud83c\uddf1",
                "states" =>  [
                    [
                        "id" =>  4520,
                        "name" =>  "Aileu municipality"
                    ],
                    [
                        "id" =>  4518,
                        "name" =>  "Ainaro Municipality"
                    ],
                    [
                        "id" =>  4521,
                        "name" =>  "Baucau Municipality"
                    ],
                    [
                        "id" =>  4525,
                        "name" =>  "Bobonaro Municipality"
                    ],
                    [
                        "id" =>  4522,
                        "name" =>  "Cova Lima Municipality"
                    ],
                    [
                        "id" =>  4524,
                        "name" =>  "Dili municipality"
                    ],
                    [
                        "id" =>  4516,
                        "name" =>  "Ermera District"
                    ],
                    [
                        "id" =>  4523,
                        "name" =>  "Laut\u00e9m Municipality"
                    ],
                    [
                        "id" =>  4515,
                        "name" =>  "Liqui\u00e7\u00e1 Municipality"
                    ],
                    [
                        "id" =>  4517,
                        "name" =>  "Manatuto District"
                    ],
                    [
                        "id" =>  4519,
                        "name" =>  "Manufahi Municipality"
                    ],
                    [
                        "id" =>  4514,
                        "name" =>  "Viqueque Municipality"
                    ]
                ]
            ],
            [
                "name" =>  "Ecuador",
                "numeric_code" =>  "218",
                "alpha_2" =>  "EC",
                "alpha_3" =>  "ECU",
                "phone_code" =>  "593",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddea\ud83c\udde8",
                "states" =>  [
                    [
                        "id" =>  2923,
                        "name" =>  "Azuay"
                    ],
                    [
                        "id" =>  2920,
                        "name" =>  "Bol\u00edvar"
                    ],
                    [
                        "id" =>  2917,
                        "name" =>  "Ca\u00f1ar"
                    ],
                    [
                        "id" =>  2915,
                        "name" =>  "Carchi"
                    ],
                    [
                        "id" =>  2925,
                        "name" =>  "Chimborazo"
                    ],
                    [
                        "id" =>  2921,
                        "name" =>  "Cotopaxi"
                    ],
                    [
                        "id" =>  2924,
                        "name" =>  "El Oro"
                    ],
                    [
                        "id" =>  2922,
                        "name" =>  "Esmeraldas"
                    ],
                    [
                        "id" =>  2905,
                        "name" =>  "Gal\u00e1pagos"
                    ],
                    [
                        "id" =>  2914,
                        "name" =>  "Guayas"
                    ],
                    [
                        "id" =>  2911,
                        "name" =>  "Imbabura"
                    ],
                    [
                        "id" =>  5068,
                        "name" =>  "Loja"
                    ],
                    [
                        "id" =>  2910,
                        "name" =>  "Los R\u00edos"
                    ],
                    [
                        "id" =>  2913,
                        "name" =>  "Manab\u00ed"
                    ],
                    [
                        "id" =>  2918,
                        "name" =>  "Morona-Santiago"
                    ],
                    [
                        "id" =>  2916,
                        "name" =>  "Napo"
                    ],
                    [
                        "id" =>  2926,
                        "name" =>  "Orellana"
                    ],
                    [
                        "id" =>  2907,
                        "name" =>  "Pastaza"
                    ],
                    [
                        "id" =>  2927,
                        "name" =>  "Pichincha"
                    ],
                    [
                        "id" =>  2912,
                        "name" =>  "Santa Elena"
                    ],
                    [
                        "id" =>  2919,
                        "name" =>  "Santo Domingo de los Ts\u00e1chilas"
                    ],
                    [
                        "id" =>  2906,
                        "name" =>  "Sucumb\u00edos"
                    ],
                    [
                        "id" =>  2908,
                        "name" =>  "Tungurahua"
                    ],
                    [
                        "id" =>  2909,
                        "name" =>  "Zamora Chinchipe"
                    ]
                ]
            ],
            [
                "name" =>  "Egypt",
                "numeric_code" =>  "818",
                "alpha_2" =>  "EG",
                "alpha_3" =>  "EGY",
                "phone_code" =>  "20",
                "currency" =>  "EGP",
                "currency_name" =>  "Egyptian pound",
                "currency_symbol" =>  "\u062c.\u0645",
                "emoji" =>  "\ud83c\uddea\ud83c\uddec",
                "states" =>  [
                    [
                        "id" =>  3235,
                        "name" =>  "Alexandria"
                    ],
                    [
                        "id" =>  3225,
                        "name" =>  "Aswan"
                    ],
                    [
                        "id" =>  3236,
                        "name" =>  "Asyut"
                    ],
                    [
                        "id" =>  3241,
                        "name" =>  "Beheira"
                    ],
                    [
                        "id" =>  3230,
                        "name" =>  "Beni Suef"
                    ],
                    [
                        "id" =>  3223,
                        "name" =>  "Cairo"
                    ],
                    [
                        "id" =>  3245,
                        "name" =>  "Dakahlia"
                    ],
                    [
                        "id" =>  3224,
                        "name" =>  "Damietta"
                    ],
                    [
                        "id" =>  3238,
                        "name" =>  "Faiyum"
                    ],
                    [
                        "id" =>  3234,
                        "name" =>  "Gharbia"
                    ],
                    [
                        "id" =>  3239,
                        "name" =>  "Giza"
                    ],
                    [
                        "id" =>  3244,
                        "name" =>  "Ismailia"
                    ],
                    [
                        "id" =>  3222,
                        "name" =>  "Kafr el-Sheikh"
                    ],
                    [
                        "id" =>  3242,
                        "name" =>  "Luxor"
                    ],
                    [
                        "id" =>  3231,
                        "name" =>  "Matrouh"
                    ],
                    [
                        "id" =>  3243,
                        "name" =>  "Minya"
                    ],
                    [
                        "id" =>  3228,
                        "name" =>  "Monufia"
                    ],
                    [
                        "id" =>  3246,
                        "name" =>  "New Valley"
                    ],
                    [
                        "id" =>  3227,
                        "name" =>  "North Sinai"
                    ],
                    [
                        "id" =>  3229,
                        "name" =>  "Port Said"
                    ],
                    [
                        "id" =>  3232,
                        "name" =>  "Qalyubia"
                    ],
                    [
                        "id" =>  3247,
                        "name" =>  "Qena"
                    ],
                    [
                        "id" =>  3240,
                        "name" =>  "Red Sea"
                    ],
                    [
                        "id" =>  5067,
                        "name" =>  "Sharqia"
                    ],
                    [
                        "id" =>  3226,
                        "name" =>  "Sohag"
                    ],
                    [
                        "id" =>  3237,
                        "name" =>  "South Sinai"
                    ],
                    [
                        "id" =>  3233,
                        "name" =>  "Suez"
                    ]
                ]
            ],
            [
                "name" =>  "El Salvador",
                "numeric_code" =>  "222",
                "alpha_2" =>  "SV",
                "alpha_3" =>  "SLV",
                "phone_code" =>  "503",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddfb",
                "states" =>  [
                    [
                        "id" =>  4139,
                        "name" =>  "Ahuachap\u00e1n Department"
                    ],
                    [
                        "id" =>  4132,
                        "name" =>  "Caba\u00f1as Department"
                    ],
                    [
                        "id" =>  4131,
                        "name" =>  "Chalatenango Department"
                    ],
                    [
                        "id" =>  4137,
                        "name" =>  "Cuscatl\u00e1n Department"
                    ],
                    [
                        "id" =>  4134,
                        "name" =>  "La Libertad Department"
                    ],
                    [
                        "id" =>  4136,
                        "name" =>  "La Paz Department"
                    ],
                    [
                        "id" =>  4138,
                        "name" =>  "La Uni\u00f3n Department"
                    ],
                    [
                        "id" =>  4130,
                        "name" =>  "Moraz\u00e1n Department"
                    ],
                    [
                        "id" =>  4135,
                        "name" =>  "San Miguel Department"
                    ],
                    [
                        "id" =>  4133,
                        "name" =>  "San Salvador Department"
                    ],
                    [
                        "id" =>  4127,
                        "name" =>  "San Vicente Department"
                    ],
                    [
                        "id" =>  4128,
                        "name" =>  "Santa Ana Department"
                    ],
                    [
                        "id" =>  4140,
                        "name" =>  "Sonsonate Department"
                    ],
                    [
                        "id" =>  4129,
                        "name" =>  "Usulut\u00e1n Department"
                    ]
                ]
            ],
            [
                "name" =>  "Equatorial Guinea",
                "numeric_code" =>  "226",
                "alpha_2" =>  "GQ",
                "alpha_3" =>  "GNQ",
                "phone_code" =>  "240",
                "currency" =>  "XAF",
                "currency_name" =>  "Central African CFA franc",
                "currency_symbol" =>  "FCFA",
                "emoji" =>  "\ud83c\uddec\ud83c\uddf6",
                "states" =>  [
                    [
                        "id" =>  3444,
                        "name" =>  "Annob\u00f3n Province"
                    ],
                    [
                        "id" =>  3446,
                        "name" =>  "Bioko Norte Province"
                    ],
                    [
                        "id" =>  3443,
                        "name" =>  "Bioko Sur Province"
                    ],
                    [
                        "id" =>  3445,
                        "name" =>  "Centro Sur Province"
                    ],
                    [
                        "id" =>  3442,
                        "name" =>  "Insular Region"
                    ],
                    [
                        "id" =>  3439,
                        "name" =>  "Ki\u00e9-Ntem Province"
                    ],
                    [
                        "id" =>  3441,
                        "name" =>  "Litoral Province"
                    ],
                    [
                        "id" =>  3438,
                        "name" =>  "R\u00edo Muni"
                    ],
                    [
                        "id" =>  3440,
                        "name" =>  "Wele-Nzas Province"
                    ]
                ]
            ],
            [
                "name" =>  "Eritrea",
                "numeric_code" =>  "232",
                "alpha_2" =>  "ER",
                "alpha_3" =>  "ERI",
                "phone_code" =>  "291",
                "currency" =>  "ERN",
                "currency_name" =>  "Eritrean nakfa",
                "currency_symbol" =>  "Nfk",
                "emoji" =>  "\ud83c\uddea\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  3425,
                        "name" =>  "Anseba Region"
                    ],
                    [
                        "id" =>  3427,
                        "name" =>  "Debub Region"
                    ],
                    [
                        "id" =>  3428,
                        "name" =>  "Gash-Barka Region"
                    ],
                    [
                        "id" =>  3426,
                        "name" =>  "Maekel Region"
                    ],
                    [
                        "id" =>  3424,
                        "name" =>  "Northern Red Sea Region"
                    ],
                    [
                        "id" =>  3429,
                        "name" =>  "Southern Red Sea Region"
                    ]
                ]
            ],
            [
                "name" =>  "Estonia",
                "numeric_code" =>  "233",
                "alpha_2" =>  "EE",
                "alpha_3" =>  "EST",
                "phone_code" =>  "372",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddea\ud83c\uddea",
                "states" =>  [
                    [
                        "id" =>  3567,
                        "name" =>  "Harju County"
                    ],
                    [
                        "id" =>  3555,
                        "name" =>  "Hiiu County"
                    ],
                    [
                        "id" =>  3569,
                        "name" =>  "Ida-Viru County"
                    ],
                    [
                        "id" =>  3566,
                        "name" =>  "J\u00e4rva County"
                    ],
                    [
                        "id" =>  3565,
                        "name" =>  "J\u00f5geva County"
                    ],
                    [
                        "id" =>  3568,
                        "name" =>  "L\u00e4\u00e4ne County"
                    ],
                    [
                        "id" =>  3564,
                        "name" =>  "L\u00e4\u00e4ne-Viru County"
                    ],
                    [
                        "id" =>  3562,
                        "name" =>  "P\u00e4rnu County"
                    ],
                    [
                        "id" =>  3563,
                        "name" =>  "P\u00f5lva County"
                    ],
                    [
                        "id" =>  3559,
                        "name" =>  "Rapla County"
                    ],
                    [
                        "id" =>  3561,
                        "name" =>  "Saare County"
                    ],
                    [
                        "id" =>  3557,
                        "name" =>  "Tartu County"
                    ],
                    [
                        "id" =>  3558,
                        "name" =>  "Valga County"
                    ],
                    [
                        "id" =>  3556,
                        "name" =>  "Viljandi County"
                    ],
                    [
                        "id" =>  3560,
                        "name" =>  "V\u00f5ru County"
                    ]
                ]
            ],
            [
                "name" =>  "Ethiopia",
                "numeric_code" =>  "231",
                "alpha_2" =>  "ET",
                "alpha_3" =>  "ETH",
                "phone_code" =>  "251",
                "currency" =>  "ETB",
                "currency_name" =>  "Ethiopian birr",
                "currency_symbol" =>  "Nkf",
                "emoji" =>  "\ud83c\uddea\ud83c\uddf9",
                "states" =>  [
                    [
                        "id" =>  11,
                        "name" =>  "Addis Ababa"
                    ],
                    [
                        "id" =>  6,
                        "name" =>  "Afar Region"
                    ],
                    [
                        "id" =>  3,
                        "name" =>  "Amhara Region"
                    ],
                    [
                        "id" =>  9,
                        "name" =>  "Benishangul-Gumuz Region"
                    ],
                    [
                        "id" =>  8,
                        "name" =>  "Dire Dawa"
                    ],
                    [
                        "id" =>  10,
                        "name" =>  "Gambela Region"
                    ],
                    [
                        "id" =>  7,
                        "name" =>  "Harari Region"
                    ],
                    [
                        "id" =>  5,
                        "name" =>  "Oromia Region"
                    ],
                    [
                        "id" =>  2,
                        "name" =>  "Somali Region"
                    ],
                    [
                        "id" =>  1,
                        "name" =>  "Southern Nations, Nationalities, and Peoples' Region"
                    ],
                    [
                        "id" =>  4,
                        "name" =>  "Tigray Region"
                    ]
                ]
            ],
            [
                "name" =>  "Falkland Islands",
                "numeric_code" =>  "238",
                "alpha_2" =>  "FK",
                "alpha_3" =>  "FLK",
                "phone_code" =>  "500",
                "currency" =>  "FKP",
                "currency_name" =>  "Falkland Islands pound",
                "currency_symbol" =>  "\u00a3",
                "emoji" =>  "\ud83c\uddeb\ud83c\uddf0",
                "states" =>  []
            ],
            [
                "name" =>  "Faroe Islands",
                "numeric_code" =>  "234",
                "alpha_2" =>  "FO",
                "alpha_3" =>  "FRO",
                "phone_code" =>  "298",
                "currency" =>  "DKK",
                "currency_name" =>  "Danish krone",
                "currency_symbol" =>  "Kr.",
                "emoji" =>  "\ud83c\uddeb\ud83c\uddf4",
                "states" =>  []
            ],
            [
                "name" =>  "Fiji Islands",
                "numeric_code" =>  "242",
                "alpha_2" =>  "FJ",
                "alpha_3" =>  "FJI",
                "phone_code" =>  "679",
                "currency" =>  "FJD",
                "currency_name" =>  "Fijian dollar",
                "currency_symbol" =>  "FJ$",
                "emoji" =>  "\ud83c\uddeb\ud83c\uddef",
                "states" =>  [
                    [
                        "id" =>  1917,
                        "name" =>  "Ba"
                    ],
                    [
                        "id" =>  1930,
                        "name" =>  "Bua"
                    ],
                    [
                        "id" =>  1924,
                        "name" =>  "Cakaudrove"
                    ],
                    [
                        "id" =>  1929,
                        "name" =>  "Central Division"
                    ],
                    [
                        "id" =>  1932,
                        "name" =>  "Eastern Division"
                    ],
                    [
                        "id" =>  1934,
                        "name" =>  "Kadavu"
                    ],
                    [
                        "id" =>  1933,
                        "name" =>  "Lau"
                    ],
                    [
                        "id" =>  1916,
                        "name" =>  "Lomaiviti"
                    ],
                    [
                        "id" =>  1922,
                        "name" =>  "Macuata"
                    ],
                    [
                        "id" =>  1919,
                        "name" =>  "Nadroga-Navosa"
                    ],
                    [
                        "id" =>  1927,
                        "name" =>  "Naitasiri"
                    ],
                    [
                        "id" =>  1928,
                        "name" =>  "Namosi"
                    ],
                    [
                        "id" =>  1921,
                        "name" =>  "Northern Division"
                    ],
                    [
                        "id" =>  1926,
                        "name" =>  "Ra"
                    ],
                    [
                        "id" =>  1920,
                        "name" =>  "Rewa"
                    ],
                    [
                        "id" =>  1931,
                        "name" =>  "Rotuma"
                    ],
                    [
                        "id" =>  1925,
                        "name" =>  "Serua"
                    ],
                    [
                        "id" =>  1918,
                        "name" =>  "Tailevu"
                    ],
                    [
                        "id" =>  1923,
                        "name" =>  "Western Division"
                    ]
                ]
            ],
            [
                "name" =>  "Finland",
                "numeric_code" =>  "246",
                "alpha_2" =>  "FI",
                "alpha_3" =>  "FIN",
                "phone_code" =>  "358",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddeb\ud83c\uddee",
                "states" =>  [
                    [
                        "id" =>  1509,
                        "name" =>  "\u00c5land Islands"
                    ],
                    [
                        "id" =>  1511,
                        "name" =>  "Central Finland"
                    ],
                    [
                        "id" =>  1494,
                        "name" =>  "Central Ostrobothnia"
                    ],
                    [
                        "id" =>  1507,
                        "name" =>  "Finland Proper"
                    ],
                    [
                        "id" =>  1496,
                        "name" =>  "Kainuu"
                    ],
                    [
                        "id" =>  1512,
                        "name" =>  "Kymenlaakso"
                    ],
                    [
                        "id" =>  1500,
                        "name" =>  "Lapland"
                    ],
                    [
                        "id" =>  1504,
                        "name" =>  "North Karelia"
                    ],
                    [
                        "id" =>  1505,
                        "name" =>  "Northern Ostrobothnia"
                    ],
                    [
                        "id" =>  1503,
                        "name" =>  "Northern Savonia"
                    ],
                    [
                        "id" =>  1508,
                        "name" =>  "Ostrobothnia"
                    ],
                    [
                        "id" =>  1502,
                        "name" =>  "P\u00e4ij\u00e4nne Tavastia"
                    ],
                    [
                        "id" =>  1506,
                        "name" =>  "Pirkanmaa"
                    ],
                    [
                        "id" =>  1501,
                        "name" =>  "Satakunta"
                    ],
                    [
                        "id" =>  1497,
                        "name" =>  "South Karelia"
                    ],
                    [
                        "id" =>  1498,
                        "name" =>  "Southern Ostrobothnia"
                    ],
                    [
                        "id" =>  1495,
                        "name" =>  "Southern Savonia"
                    ],
                    [
                        "id" =>  1493,
                        "name" =>  "Tavastia Proper"
                    ],
                    [
                        "id" =>  1510,
                        "name" =>  "Uusimaa"
                    ]
                ]
            ],
            [
                "name" =>  "France",
                "numeric_code" =>  "250",
                "alpha_2" =>  "FR",
                "alpha_3" =>  "FRA",
                "phone_code" =>  "33",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddeb\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  4967,
                        "name" =>  "Ain"
                    ],
                    [
                        "id" =>  4968,
                        "name" =>  "Aisne"
                    ],
                    [
                        "id" =>  4969,
                        "name" =>  "Allier"
                    ],
                    [
                        "id" =>  4970,
                        "name" =>  "Alpes-de-Haute-Provence"
                    ],
                    [
                        "id" =>  4972,
                        "name" =>  "Alpes-Maritimes"
                    ],
                    [
                        "id" =>  4811,
                        "name" =>  "Alsace"
                    ],
                    [
                        "id" =>  4973,
                        "name" =>  "Ard\u00e8che"
                    ],
                    [
                        "id" =>  4974,
                        "name" =>  "Ardennes"
                    ],
                    [
                        "id" =>  4975,
                        "name" =>  "Ari\u00e8ge"
                    ],
                    [
                        "id" =>  4976,
                        "name" =>  "Aube"
                    ],
                    [
                        "id" =>  4977,
                        "name" =>  "Aude"
                    ],
                    [
                        "id" =>  4798,
                        "name" =>  "Auvergne-Rh\u00f4ne-Alpes"
                    ],
                    [
                        "id" =>  4978,
                        "name" =>  "Aveyron"
                    ],
                    [
                        "id" =>  5035,
                        "name" =>  "Bas-Rhin"
                    ],
                    [
                        "id" =>  4979,
                        "name" =>  "Bouches-du-Rh\u00f4ne"
                    ],
                    [
                        "id" =>  4825,
                        "name" =>  "Bourgogne-Franche-Comt\u00e9"
                    ],
                    [
                        "id" =>  4807,
                        "name" =>  "Bretagne"
                    ],
                    [
                        "id" =>  4981,
                        "name" =>  "Calvados"
                    ],
                    [
                        "id" =>  4982,
                        "name" =>  "Cantal"
                    ],
                    [
                        "id" =>  4818,
                        "name" =>  "Centre-Val de Loire"
                    ],
                    [
                        "id" =>  4983,
                        "name" =>  "Charente"
                    ],
                    [
                        "id" =>  4984,
                        "name" =>  "Charente-Maritime"
                    ],
                    [
                        "id" =>  4985,
                        "name" =>  "Cher"
                    ],
                    [
                        "id" =>  5064,
                        "name" =>  "Clipperton"
                    ],
                    [
                        "id" =>  4986,
                        "name" =>  "Corr\u00e8ze"
                    ],
                    [
                        "id" =>  4806,
                        "name" =>  "Corse"
                    ],
                    [
                        "id" =>  4996,
                        "name" =>  "Corse-du-Sud"
                    ],
                    [
                        "id" =>  4987,
                        "name" =>  "C\u00f4te-d'Or"
                    ],
                    [
                        "id" =>  4988,
                        "name" =>  "C\u00f4tes-d'Armor"
                    ],
                    [
                        "id" =>  4989,
                        "name" =>  "Creuse"
                    ],
                    [
                        "id" =>  5047,
                        "name" =>  "Deux-S\u00e8vres"
                    ],
                    [
                        "id" =>  4990,
                        "name" =>  "Dordogne"
                    ],
                    [
                        "id" =>  4991,
                        "name" =>  "Doubs"
                    ],
                    [
                        "id" =>  4992,
                        "name" =>  "Dr\u00f4me"
                    ],
                    [
                        "id" =>  5059,
                        "name" =>  "Essonne"
                    ],
                    [
                        "id" =>  4993,
                        "name" =>  "Eure"
                    ],
                    [
                        "id" =>  4994,
                        "name" =>  "Eure-et-Loir"
                    ],
                    [
                        "id" =>  4995,
                        "name" =>  "Finist\u00e8re"
                    ],
                    [
                        "id" =>  4822,
                        "name" =>  "French Guiana"
                    ],
                    [
                        "id" =>  4824,
                        "name" =>  "French Polynesia"
                    ],
                    [
                        "id" =>  5065,
                        "name" =>  "French Southern and Antarctic Lands"
                    ],
                    [
                        "id" =>  4998,
                        "name" =>  "Gard"
                    ],
                    [
                        "id" =>  5000,
                        "name" =>  "Gers"
                    ],
                    [
                        "id" =>  5001,
                        "name" =>  "Gironde"
                    ],
                    [
                        "id" =>  4820,
                        "name" =>  "Grand-Est"
                    ],
                    [
                        "id" =>  4829,
                        "name" =>  "Guadeloupe"
                    ],
                    [
                        "id" =>  5036,
                        "name" =>  "Haut-Rhin"
                    ],
                    [
                        "id" =>  4997,
                        "name" =>  "Haute-Corse"
                    ],
                    [
                        "id" =>  4999,
                        "name" =>  "Haute-Garonne"
                    ],
                    [
                        "id" =>  5011,
                        "name" =>  "Haute-Loire"
                    ],
                    [
                        "id" =>  5020,
                        "name" =>  "Haute-Marne"
                    ],
                    [
                        "id" =>  5039,
                        "name" =>  "Haute-Sa\u00f4ne"
                    ],
                    [
                        "id" =>  5043,
                        "name" =>  "Haute-Savoie"
                    ],
                    [
                        "id" =>  5055,
                        "name" =>  "Haute-Vienne"
                    ],
                    [
                        "id" =>  4971,
                        "name" =>  "Hautes-Alpes"
                    ],
                    [
                        "id" =>  5033,
                        "name" =>  "Hautes-Pyr\u00e9n\u00e9es"
                    ],
                    [
                        "id" =>  4828,
                        "name" =>  "Hauts-de-France"
                    ],
                    [
                        "id" =>  5060,
                        "name" =>  "Hauts-de-Seine"
                    ],
                    [
                        "id" =>  5002,
                        "name" =>  "H\u00e9rault"
                    ],
                    [
                        "id" =>  4796,
                        "name" =>  "\u00cele-de-France"
                    ],
                    [
                        "id" =>  5003,
                        "name" =>  "Ille-et-Vilaine"
                    ],
                    [
                        "id" =>  5004,
                        "name" =>  "Indre"
                    ],
                    [
                        "id" =>  5005,
                        "name" =>  "Indre-et-Loire"
                    ],
                    [
                        "id" =>  5006,
                        "name" =>  "Is\u00e8re"
                    ],
                    [
                        "id" =>  5007,
                        "name" =>  "Jura"
                    ],
                    [
                        "id" =>  4823,
                        "name" =>  "La R\u00e9union"
                    ],
                    [
                        "id" =>  5008,
                        "name" =>  "Landes"
                    ],
                    [
                        "id" =>  5009,
                        "name" =>  "Loir-et-Cher"
                    ],
                    [
                        "id" =>  5010,
                        "name" =>  "Loire"
                    ],
                    [
                        "id" =>  5012,
                        "name" =>  "Loire-Atlantique"
                    ],
                    [
                        "id" =>  5013,
                        "name" =>  "Loiret"
                    ],
                    [
                        "id" =>  5014,
                        "name" =>  "Lot"
                    ],
                    [
                        "id" =>  5015,
                        "name" =>  "Lot-et-Garonne"
                    ],
                    [
                        "id" =>  5016,
                        "name" =>  "Loz\u00e8re"
                    ],
                    [
                        "id" =>  5017,
                        "name" =>  "Maine-et-Loire"
                    ],
                    [
                        "id" =>  5018,
                        "name" =>  "Manche"
                    ],
                    [
                        "id" =>  5019,
                        "name" =>  "Marne"
                    ],
                    [
                        "id" =>  4827,
                        "name" =>  "Martinique"
                    ],
                    [
                        "id" =>  5021,
                        "name" =>  "Mayenne"
                    ],
                    [
                        "id" =>  4797,
                        "name" =>  "Mayotte"
                    ],
                    [
                        "id" =>  5038,
                        "name" =>  "M\u00e9tropole de Lyon"
                    ],
                    [
                        "id" =>  5022,
                        "name" =>  "Meurthe-et-Moselle"
                    ],
                    [
                        "id" =>  5023,
                        "name" =>  "Meuse"
                    ],
                    [
                        "id" =>  5024,
                        "name" =>  "Morbihan"
                    ],
                    [
                        "id" =>  5025,
                        "name" =>  "Moselle"
                    ],
                    [
                        "id" =>  5026,
                        "name" =>  "Ni\u00e8vre"
                    ],
                    [
                        "id" =>  5027,
                        "name" =>  "Nord"
                    ],
                    [
                        "id" =>  4804,
                        "name" =>  "Normandie"
                    ],
                    [
                        "id" =>  4795,
                        "name" =>  "Nouvelle-Aquitaine"
                    ],
                    [
                        "id" =>  4799,
                        "name" =>  "Occitanie"
                    ],
                    [
                        "id" =>  5028,
                        "name" =>  "Oise"
                    ],
                    [
                        "id" =>  5029,
                        "name" =>  "Orne"
                    ],
                    [
                        "id" =>  4816,
                        "name" =>  "Paris"
                    ],
                    [
                        "id" =>  5030,
                        "name" =>  "Pas-de-Calais"
                    ],
                    [
                        "id" =>  4802,
                        "name" =>  "Pays-de-la-Loire"
                    ],
                    [
                        "id" =>  4812,
                        "name" =>  "Provence-Alpes-C\u00f4te-d\u2019Azur"
                    ],
                    [
                        "id" =>  5031,
                        "name" =>  "Puy-de-D\u00f4me"
                    ],
                    [
                        "id" =>  5032,
                        "name" =>  "Pyr\u00e9n\u00e9es-Atlantiques"
                    ],
                    [
                        "id" =>  5034,
                        "name" =>  "Pyr\u00e9n\u00e9es-Orientales"
                    ],
                    [
                        "id" =>  5037,
                        "name" =>  "Rh\u00f4ne"
                    ],
                    [
                        "id" =>  4821,
                        "name" =>  "Saint Pierre and Miquelon"
                    ],
                    [
                        "id" =>  4794,
                        "name" =>  "Saint-Barth\u00e9lemy"
                    ],
                    [
                        "id" =>  4809,
                        "name" =>  "Saint-Martin"
                    ],
                    [
                        "id" =>  5040,
                        "name" =>  "Sa\u00f4ne-et-Loire"
                    ],
                    [
                        "id" =>  5041,
                        "name" =>  "Sarthe"
                    ],
                    [
                        "id" =>  5042,
                        "name" =>  "Savoie"
                    ],
                    [
                        "id" =>  5045,
                        "name" =>  "Seine-et-Marne"
                    ],
                    [
                        "id" =>  5044,
                        "name" =>  "Seine-Maritime"
                    ],
                    [
                        "id" =>  5061,
                        "name" =>  "Seine-Saint-Denis"
                    ],
                    [
                        "id" =>  5048,
                        "name" =>  "Somme"
                    ],
                    [
                        "id" =>  5049,
                        "name" =>  "Tarn"
                    ],
                    [
                        "id" =>  5050,
                        "name" =>  "Tarn-et-Garonne"
                    ],
                    [
                        "id" =>  5058,
                        "name" =>  "Territoire de Belfort"
                    ],
                    [
                        "id" =>  5063,
                        "name" =>  "Val-d'Oise"
                    ],
                    [
                        "id" =>  5062,
                        "name" =>  "Val-de-Marne"
                    ],
                    [
                        "id" =>  5051,
                        "name" =>  "Var"
                    ],
                    [
                        "id" =>  5052,
                        "name" =>  "Vaucluse"
                    ],
                    [
                        "id" =>  5053,
                        "name" =>  "Vend\u00e9e"
                    ],
                    [
                        "id" =>  5054,
                        "name" =>  "Vienne"
                    ],
                    [
                        "id" =>  5056,
                        "name" =>  "Vosges"
                    ],
                    [
                        "id" =>  4810,
                        "name" =>  "Wallis and Futuna"
                    ],
                    [
                        "id" =>  5057,
                        "name" =>  "Yonne"
                    ],
                    [
                        "id" =>  5046,
                        "name" =>  "Yvelines"
                    ]
                ]
            ],
            [
                "name" =>  "French Guiana",
                "numeric_code" =>  "254",
                "alpha_2" =>  "GF",
                "alpha_3" =>  "GUF",
                "phone_code" =>  "594",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddec\ud83c\uddeb",
                "states" =>  []
            ],
            [
                "name" =>  "French Polynesia",
                "numeric_code" =>  "258",
                "alpha_2" =>  "PF",
                "alpha_3" =>  "PYF",
                "phone_code" =>  "689",
                "currency" =>  "XPF",
                "currency_name" =>  "CFP franc",
                "currency_symbol" =>  "\u20a3",
                "emoji" =>  "\ud83c\uddf5\ud83c\uddeb",
                "states" =>  []
            ],
            [
                "name" =>  "French Southern Territories",
                "numeric_code" =>  "260",
                "alpha_2" =>  "TF",
                "alpha_3" =>  "ATF",
                "phone_code" =>  "262",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf9\ud83c\uddeb",
                "states" =>  []
            ],
            [
                "name" =>  "Gabon",
                "numeric_code" =>  "266",
                "alpha_2" =>  "GA",
                "alpha_3" =>  "GAB",
                "phone_code" =>  "241",
                "currency" =>  "XAF",
                "currency_name" =>  "Central African CFA franc",
                "currency_symbol" =>  "FCFA",
                "emoji" =>  "\ud83c\uddec\ud83c\udde6",
                "states" =>  [
                    [
                        "id" =>  2727,
                        "name" =>  "Estuaire Province"
                    ],
                    [
                        "id" =>  2726,
                        "name" =>  "Haut-Ogoou\u00e9 Province"
                    ],
                    [
                        "id" =>  2730,
                        "name" =>  "Moyen-Ogoou\u00e9 Province"
                    ],
                    [
                        "id" =>  2731,
                        "name" =>  "Ngouni\u00e9 Province"
                    ],
                    [
                        "id" =>  2725,
                        "name" =>  "Nyanga Province"
                    ],
                    [
                        "id" =>  2724,
                        "name" =>  "Ogoou\u00e9-Ivindo Province"
                    ],
                    [
                        "id" =>  2729,
                        "name" =>  "Ogoou\u00e9-Lolo Province"
                    ],
                    [
                        "id" =>  2728,
                        "name" =>  "Ogoou\u00e9-Maritime Province"
                    ],
                    [
                        "id" =>  2723,
                        "name" =>  "Woleu-Ntem Province"
                    ]
                ]
            ],
            [
                "name" =>  "Gambia The",
                "numeric_code" =>  "270",
                "alpha_2" =>  "GM",
                "alpha_3" =>  "GMB",
                "phone_code" =>  "220",
                "currency" =>  "GMD",
                "currency_name" =>  "Gambian dalasi",
                "currency_symbol" =>  "D",
                "emoji" =>  "\ud83c\uddec\ud83c\uddf2",
                "states" =>  [
                    [
                        "id" =>  2666,
                        "name" =>  "Banjul"
                    ],
                    [
                        "id" =>  2669,
                        "name" =>  "Central River Division"
                    ],
                    [
                        "id" =>  2670,
                        "name" =>  "Lower River Division"
                    ],
                    [
                        "id" =>  2671,
                        "name" =>  "North Bank Division"
                    ],
                    [
                        "id" =>  2668,
                        "name" =>  "Upper River Division"
                    ],
                    [
                        "id" =>  2667,
                        "name" =>  "West Coast Division"
                    ]
                ]
            ],
            [
                "name" =>  "Georgia",
                "numeric_code" =>  "268",
                "alpha_2" =>  "GE",
                "alpha_3" =>  "GEO",
                "phone_code" =>  "995",
                "currency" =>  "GEL",
                "currency_name" =>  "Georgian lari",
                "currency_symbol" =>  "\u10da",
                "emoji" =>  "\ud83c\uddec\ud83c\uddea",
                "states" =>  [
                    [
                        "id" =>  900,
                        "name" =>  "Adjara"
                    ],
                    [
                        "id" =>  901,
                        "name" =>  "Autonomous Republic of Abkhazia"
                    ],
                    [
                        "id" =>  907,
                        "name" =>  "Guria"
                    ],
                    [
                        "id" =>  905,
                        "name" =>  "Imereti"
                    ],
                    [
                        "id" =>  910,
                        "name" =>  "Kakheti"
                    ],
                    [
                        "id" =>  897,
                        "name" =>  "Khelvachauri Municipality"
                    ],
                    [
                        "id" =>  904,
                        "name" =>  "Kvemo Kartli"
                    ],
                    [
                        "id" =>  902,
                        "name" =>  "Mtskheta-Mtianeti"
                    ],
                    [
                        "id" =>  909,
                        "name" =>  "Racha-Lechkhumi and Kvemo Svaneti"
                    ],
                    [
                        "id" =>  908,
                        "name" =>  "Samegrelo-Zemo Svaneti"
                    ],
                    [
                        "id" =>  906,
                        "name" =>  "Samtskhe-Javakheti"
                    ],
                    [
                        "id" =>  898,
                        "name" =>  "Senaki Municipality"
                    ],
                    [
                        "id" =>  903,
                        "name" =>  "Shida Kartli"
                    ],
                    [
                        "id" =>  899,
                        "name" =>  "Tbilisi"
                    ]
                ]
            ],
            [
                "name" =>  "Germany",
                "numeric_code" =>  "276",
                "alpha_2" =>  "DE",
                "alpha_3" =>  "DEU",
                "phone_code" =>  "49",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\udde9\ud83c\uddea",
                "states" =>  [
                    [
                        "id" =>  3006,
                        "name" =>  "Baden-W\u00fcrttemberg"
                    ],
                    [
                        "id" =>  3009,
                        "name" =>  "Bavaria"
                    ],
                    [
                        "id" =>  3010,
                        "name" =>  "Berlin"
                    ],
                    [
                        "id" =>  3013,
                        "name" =>  "Brandenburg"
                    ],
                    [
                        "id" =>  3014,
                        "name" =>  "Bremen"
                    ],
                    [
                        "id" =>  3016,
                        "name" =>  "Hamburg"
                    ],
                    [
                        "id" =>  3018,
                        "name" =>  "Hesse"
                    ],
                    [
                        "id" =>  3008,
                        "name" =>  "Lower Saxony"
                    ],
                    [
                        "id" =>  3007,
                        "name" =>  "Mecklenburg-Vorpommern"
                    ],
                    [
                        "id" =>  3017,
                        "name" =>  "North Rhine-Westphalia"
                    ],
                    [
                        "id" =>  3019,
                        "name" =>  "Rhineland-Palatinate"
                    ],
                    [
                        "id" =>  3020,
                        "name" =>  "Saarland"
                    ],
                    [
                        "id" =>  3021,
                        "name" =>  "Saxony"
                    ],
                    [
                        "id" =>  3011,
                        "name" =>  "Saxony-Anhalt"
                    ],
                    [
                        "id" =>  3005,
                        "name" =>  "Schleswig-Holstein"
                    ],
                    [
                        "id" =>  3015,
                        "name" =>  "Thuringia"
                    ]
                ]
            ],
            [
                "name" =>  "Ghana",
                "numeric_code" =>  "288",
                "alpha_2" =>  "GH",
                "alpha_3" =>  "GHA",
                "phone_code" =>  "233",
                "currency" =>  "GHS",
                "currency_name" =>  "Ghanaian cedi",
                "currency_symbol" =>  "GH\u20b5",
                "emoji" =>  "\ud83c\uddec\ud83c\udded",
                "states" =>  [
                    [
                        "id" =>  53,
                        "name" =>  "Ahafo"
                    ],
                    [
                        "id" =>  48,
                        "name" =>  "Ashanti"
                    ],
                    [
                        "id" =>  4959,
                        "name" =>  "Bono"
                    ],
                    [
                        "id" =>  4958,
                        "name" =>  "Bono East"
                    ],
                    [
                        "id" =>  52,
                        "name" =>  "Central"
                    ],
                    [
                        "id" =>  50,
                        "name" =>  "Eastern"
                    ],
                    [
                        "id" =>  54,
                        "name" =>  "Greater Accra"
                    ],
                    [
                        "id" =>  4960,
                        "name" =>  "North East"
                    ],
                    [
                        "id" =>  51,
                        "name" =>  "Northern"
                    ],
                    [
                        "id" =>  4961,
                        "name" =>  "Oti"
                    ],
                    [
                        "id" =>  4962,
                        "name" =>  "Savannah"
                    ],
                    [
                        "id" =>  55,
                        "name" =>  "Upper East"
                    ],
                    [
                        "id" =>  57,
                        "name" =>  "Upper West"
                    ],
                    [
                        "id" =>  56,
                        "name" =>  "Volta"
                    ],
                    [
                        "id" =>  49,
                        "name" =>  "Western"
                    ],
                    [
                        "id" =>  4963,
                        "name" =>  "Western North"
                    ]
                ]
            ],
            [
                "name" =>  "Gibraltar",
                "numeric_code" =>  "292",
                "alpha_2" =>  "GI",
                "alpha_3" =>  "GIB",
                "phone_code" =>  "350",
                "currency" =>  "GIP",
                "currency_name" =>  "Gibraltar pound",
                "currency_symbol" =>  "\u00a3",
                "emoji" =>  "\ud83c\uddec\ud83c\uddee",
                "states" =>  []
            ],
            [
                "name" =>  "Greece",
                "numeric_code" =>  "300",
                "alpha_2" =>  "GR",
                "alpha_3" =>  "GRC",
                "phone_code" =>  "30",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddec\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  2116,
                        "name" =>  "Achaea Regional Unit"
                    ],
                    [
                        "id" =>  2123,
                        "name" =>  "Aetolia-Acarnania Regional Unit"
                    ],
                    [
                        "id" =>  2098,
                        "name" =>  "Arcadia Prefecture"
                    ],
                    [
                        "id" =>  2105,
                        "name" =>  "Argolis Regional Unit"
                    ],
                    [
                        "id" =>  2122,
                        "name" =>  "Attica Region"
                    ],
                    [
                        "id" =>  2126,
                        "name" =>  "Boeotia Regional Unit"
                    ],
                    [
                        "id" =>  2128,
                        "name" =>  "Central Greece Region"
                    ],
                    [
                        "id" =>  2125,
                        "name" =>  "Central Macedonia"
                    ],
                    [
                        "id" =>  2115,
                        "name" =>  "Chania Regional Unit"
                    ],
                    [
                        "id" =>  2124,
                        "name" =>  "Corfu Prefecture"
                    ],
                    [
                        "id" =>  2129,
                        "name" =>  "Corinthia Regional Unit"
                    ],
                    [
                        "id" =>  2109,
                        "name" =>  "Crete Region"
                    ],
                    [
                        "id" =>  2130,
                        "name" =>  "Drama Regional Unit"
                    ],
                    [
                        "id" =>  2120,
                        "name" =>  "East Attica Regional Unit"
                    ],
                    [
                        "id" =>  2117,
                        "name" =>  "East Macedonia and Thrace"
                    ],
                    [
                        "id" =>  2110,
                        "name" =>  "Epirus Region"
                    ],
                    [
                        "id" =>  2101,
                        "name" =>  "Euboea"
                    ],
                    [
                        "id" =>  2102,
                        "name" =>  "Grevena Prefecture"
                    ],
                    [
                        "id" =>  2099,
                        "name" =>  "Imathia Regional Unit"
                    ],
                    [
                        "id" =>  2113,
                        "name" =>  "Ioannina Regional Unit"
                    ],
                    [
                        "id" =>  2131,
                        "name" =>  "Ionian Islands Region"
                    ],
                    [
                        "id" =>  2095,
                        "name" =>  "Karditsa Regional Unit"
                    ],
                    [
                        "id" =>  2100,
                        "name" =>  "Kastoria Regional Unit"
                    ],
                    [
                        "id" =>  2127,
                        "name" =>  "Kefalonia Prefecture"
                    ],
                    [
                        "id" =>  2111,
                        "name" =>  "Kilkis Regional Unit"
                    ],
                    [
                        "id" =>  2112,
                        "name" =>  "Kozani Prefecture"
                    ],
                    [
                        "id" =>  2106,
                        "name" =>  "Laconia"
                    ],
                    [
                        "id" =>  2132,
                        "name" =>  "Larissa Prefecture"
                    ],
                    [
                        "id" =>  2104,
                        "name" =>  "Lefkada Regional Unit"
                    ],
                    [
                        "id" =>  2107,
                        "name" =>  "Pella Regional Unit"
                    ],
                    [
                        "id" =>  2119,
                        "name" =>  "Peloponnese Region"
                    ],
                    [
                        "id" =>  2114,
                        "name" =>  "Phthiotis Prefecture"
                    ],
                    [
                        "id" =>  2103,
                        "name" =>  "Preveza Prefecture"
                    ],
                    [
                        "id" =>  2121,
                        "name" =>  "Serres Prefecture"
                    ],
                    [
                        "id" =>  2118,
                        "name" =>  "South Aegean"
                    ],
                    [
                        "id" =>  2097,
                        "name" =>  "Thessaloniki Regional Unit"
                    ],
                    [
                        "id" =>  2096,
                        "name" =>  "West Greece Region"
                    ],
                    [
                        "id" =>  2108,
                        "name" =>  "West Macedonia Region"
                    ]
                ]
            ],
            [
                "name" =>  "Greenland",
                "numeric_code" =>  "304",
                "alpha_2" =>  "GL",
                "alpha_3" =>  "GRL",
                "phone_code" =>  "299",
                "currency" =>  "DKK",
                "currency_name" =>  "Danish krone",
                "currency_symbol" =>  "Kr.",
                "emoji" =>  "\ud83c\uddec\ud83c\uddf1",
                "states" =>  []
            ],
            [
                "name" =>  "Grenada",
                "numeric_code" =>  "308",
                "alpha_2" =>  "GD",
                "alpha_3" =>  "GRD",
                "phone_code" =>  "+1-473",
                "currency" =>  "XCD",
                "currency_name" =>  "Eastern Caribbean dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddec\ud83c\udde9",
                "states" =>  [
                    [
                        "id" =>  3867,
                        "name" =>  "Carriacou and Petite Martinique"
                    ],
                    [
                        "id" =>  3865,
                        "name" =>  "Saint Andrew Parish"
                    ],
                    [
                        "id" =>  3869,
                        "name" =>  "Saint David Parish"
                    ],
                    [
                        "id" =>  3864,
                        "name" =>  "Saint George Parish"
                    ],
                    [
                        "id" =>  3868,
                        "name" =>  "Saint John Parish"
                    ],
                    [
                        "id" =>  3866,
                        "name" =>  "Saint Mark Parish"
                    ],
                    [
                        "id" =>  3863,
                        "name" =>  "Saint Patrick Parish"
                    ]
                ]
            ],
            [
                "name" =>  "Guadeloupe",
                "numeric_code" =>  "312",
                "alpha_2" =>  "GP",
                "alpha_3" =>  "GLP",
                "phone_code" =>  "590",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddec\ud83c\uddf5",
                "states" =>  []
            ],
            [
                "name" =>  "Guam",
                "numeric_code" =>  "316",
                "alpha_2" =>  "GU",
                "alpha_3" =>  "GUM",
                "phone_code" =>  "+1-671",
                "currency" =>  "USD",
                "currency_name" =>  "US Dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddec\ud83c\uddfa",
                "states" =>  []
            ],
            [
                "name" =>  "Guatemala",
                "numeric_code" =>  "320",
                "alpha_2" =>  "GT",
                "alpha_3" =>  "GTM",
                "phone_code" =>  "502",
                "currency" =>  "GTQ",
                "currency_name" =>  "Guatemalan quetzal",
                "currency_symbol" =>  "Q",
                "emoji" =>  "\ud83c\uddec\ud83c\uddf9",
                "states" =>  [
                    [
                        "id" =>  3671,
                        "name" =>  "Alta Verapaz Department"
                    ],
                    [
                        "id" =>  3674,
                        "name" =>  "Baja Verapaz Department"
                    ],
                    [
                        "id" =>  3675,
                        "name" =>  "Chimaltenango Department"
                    ],
                    [
                        "id" =>  3666,
                        "name" =>  "Chiquimula Department"
                    ],
                    [
                        "id" =>  3662,
                        "name" =>  "El Progreso Department"
                    ],
                    [
                        "id" =>  3677,
                        "name" =>  "Escuintla Department"
                    ],
                    [
                        "id" =>  3672,
                        "name" =>  "Guatemala Department"
                    ],
                    [
                        "id" =>  3670,
                        "name" =>  "Huehuetenango Department"
                    ],
                    [
                        "id" =>  3659,
                        "name" =>  "Izabal Department"
                    ],
                    [
                        "id" =>  3658,
                        "name" =>  "Jalapa Department"
                    ],
                    [
                        "id" =>  3673,
                        "name" =>  "Jutiapa Department"
                    ],
                    [
                        "id" =>  3669,
                        "name" =>  "Pet\u00e9n Department"
                    ],
                    [
                        "id" =>  3668,
                        "name" =>  "Quetzaltenango Department"
                    ],
                    [
                        "id" =>  3657,
                        "name" =>  "Quich\u00e9 Department"
                    ],
                    [
                        "id" =>  3664,
                        "name" =>  "Retalhuleu Department"
                    ],
                    [
                        "id" =>  3676,
                        "name" =>  "Sacatep\u00e9quez Department"
                    ],
                    [
                        "id" =>  3667,
                        "name" =>  "San Marcos Department"
                    ],
                    [
                        "id" =>  3665,
                        "name" =>  "Santa Rosa Department"
                    ],
                    [
                        "id" =>  3661,
                        "name" =>  "Solol\u00e1 Department"
                    ],
                    [
                        "id" =>  3660,
                        "name" =>  "Suchitep\u00e9quez Department"
                    ],
                    [
                        "id" =>  3663,
                        "name" =>  "Totonicap\u00e1n Department"
                    ]
                ]
            ],
            [
                "name" =>  "Guernsey and Alderney",
                "numeric_code" =>  "831",
                "alpha_2" =>  "GG",
                "alpha_3" =>  "GGY",
                "phone_code" =>  "+44-1481",
                "currency" =>  "GBP",
                "currency_name" =>  "British pound",
                "currency_symbol" =>  "\u00a3",
                "emoji" =>  "\ud83c\uddec\ud83c\uddec",
                "states" =>  []
            ],
            [
                "name" =>  "Guinea",
                "numeric_code" =>  "324",
                "alpha_2" =>  "GN",
                "alpha_3" =>  "GIN",
                "phone_code" =>  "224",
                "currency" =>  "GNF",
                "currency_name" =>  "Guinean franc",
                "currency_symbol" =>  "FG",
                "emoji" =>  "\ud83c\uddec\ud83c\uddf3",
                "states" =>  [
                    [
                        "id" =>  2672,
                        "name" =>  "Beyla Prefecture"
                    ],
                    [
                        "id" =>  2699,
                        "name" =>  "Boffa Prefecture"
                    ],
                    [
                        "id" =>  2709,
                        "name" =>  "Bok\u00e9 Prefecture"
                    ],
                    [
                        "id" =>  2676,
                        "name" =>  "Bok\u00e9 Region"
                    ],
                    [
                        "id" =>  2686,
                        "name" =>  "Conakry"
                    ],
                    [
                        "id" =>  2705,
                        "name" =>  "Coyah Prefecture"
                    ],
                    [
                        "id" =>  2679,
                        "name" =>  "Dabola Prefecture"
                    ],
                    [
                        "id" =>  2706,
                        "name" =>  "Dalaba Prefecture"
                    ],
                    [
                        "id" =>  2688,
                        "name" =>  "Dinguiraye Prefecture"
                    ],
                    [
                        "id" =>  2681,
                        "name" =>  "Dubr\u00e9ka Prefecture"
                    ],
                    [
                        "id" =>  2682,
                        "name" =>  "Faranah Prefecture"
                    ],
                    [
                        "id" =>  2683,
                        "name" =>  "For\u00e9cariah Prefecture"
                    ],
                    [
                        "id" =>  2675,
                        "name" =>  "Fria Prefecture"
                    ],
                    [
                        "id" =>  2685,
                        "name" =>  "Gaoual Prefecture"
                    ],
                    [
                        "id" =>  2711,
                        "name" =>  "Gu\u00e9ck\u00e9dou Prefecture"
                    ],
                    [
                        "id" =>  2704,
                        "name" =>  "Kankan Prefecture"
                    ],
                    [
                        "id" =>  2697,
                        "name" =>  "Kankan Region"
                    ],
                    [
                        "id" =>  2710,
                        "name" =>  "K\u00e9rouan\u00e9 Prefecture"
                    ],
                    [
                        "id" =>  2693,
                        "name" =>  "Kindia Prefecture"
                    ],
                    [
                        "id" =>  2701,
                        "name" =>  "Kindia Region"
                    ],
                    [
                        "id" =>  2691,
                        "name" =>  "Kissidougou Prefecture"
                    ],
                    [
                        "id" =>  2692,
                        "name" =>  "Koubia Prefecture"
                    ],
                    [
                        "id" =>  2703,
                        "name" =>  "Koundara Prefecture"
                    ],
                    [
                        "id" =>  2695,
                        "name" =>  "Kouroussa Prefecture"
                    ],
                    [
                        "id" =>  2680,
                        "name" =>  "Lab\u00e9 Prefecture"
                    ],
                    [
                        "id" =>  2677,
                        "name" =>  "Lab\u00e9 Region"
                    ],
                    [
                        "id" =>  2690,
                        "name" =>  "L\u00e9louma Prefecture"
                    ],
                    [
                        "id" =>  2708,
                        "name" =>  "Lola Prefecture"
                    ],
                    [
                        "id" =>  2702,
                        "name" =>  "Macenta Prefecture"
                    ],
                    [
                        "id" =>  2700,
                        "name" =>  "Mali Prefecture"
                    ],
                    [
                        "id" =>  2689,
                        "name" =>  "Mamou Prefecture"
                    ],
                    [
                        "id" =>  2698,
                        "name" =>  "Mamou Region"
                    ],
                    [
                        "id" =>  2673,
                        "name" =>  "Mandiana Prefecture"
                    ],
                    [
                        "id" =>  2678,
                        "name" =>  "Nz\u00e9r\u00e9kor\u00e9 Prefecture"
                    ],
                    [
                        "id" =>  2684,
                        "name" =>  "Nz\u00e9r\u00e9kor\u00e9 Region"
                    ],
                    [
                        "id" =>  2694,
                        "name" =>  "Pita Prefecture"
                    ],
                    [
                        "id" =>  2707,
                        "name" =>  "Siguiri Prefecture"
                    ],
                    [
                        "id" =>  2687,
                        "name" =>  "T\u00e9lim\u00e9l\u00e9 Prefecture"
                    ],
                    [
                        "id" =>  2696,
                        "name" =>  "Tougu\u00e9 Prefecture"
                    ],
                    [
                        "id" =>  2674,
                        "name" =>  "Yomou Prefecture"
                    ]
                ]
            ],
            [
                "name" =>  "Guinea-Bissau",
                "numeric_code" =>  "624",
                "alpha_2" =>  "GW",
                "alpha_3" =>  "GNB",
                "phone_code" =>  "245",
                "currency" =>  "XOF",
                "currency_name" =>  "West African CFA franc",
                "currency_symbol" =>  "CFA",
                "emoji" =>  "\ud83c\uddec\ud83c\uddfc",
                "states" =>  [
                    [
                        "id" =>  2720,
                        "name" =>  "Bafat\u00e1"
                    ],
                    [
                        "id" =>  2714,
                        "name" =>  "Biombo Region"
                    ],
                    [
                        "id" =>  2722,
                        "name" =>  "Bolama Region"
                    ],
                    [
                        "id" =>  2713,
                        "name" =>  "Cacheu Region"
                    ],
                    [
                        "id" =>  2719,
                        "name" =>  "Gab\u00fa Region"
                    ],
                    [
                        "id" =>  2721,
                        "name" =>  "Leste Province"
                    ],
                    [
                        "id" =>  2717,
                        "name" =>  "Norte Province"
                    ],
                    [
                        "id" =>  2718,
                        "name" =>  "Oio Region"
                    ],
                    [
                        "id" =>  2715,
                        "name" =>  "Quinara Region"
                    ],
                    [
                        "id" =>  2716,
                        "name" =>  "Sul Province"
                    ],
                    [
                        "id" =>  2712,
                        "name" =>  "Tombali Region"
                    ]
                ]
            ],
            [
                "name" =>  "Guyana",
                "numeric_code" =>  "328",
                "alpha_2" =>  "GY",
                "alpha_3" =>  "GUY",
                "phone_code" =>  "592",
                "currency" =>  "GYD",
                "currency_name" =>  "Guyanese dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddec\ud83c\uddfe",
                "states" =>  [
                    [
                        "id" =>  2764,
                        "name" =>  "Barima-Waini"
                    ],
                    [
                        "id" =>  2760,
                        "name" =>  "Cuyuni-Mazaruni"
                    ],
                    [
                        "id" =>  2767,
                        "name" =>  "Demerara-Mahaica"
                    ],
                    [
                        "id" =>  2766,
                        "name" =>  "East Berbice-Corentyne"
                    ],
                    [
                        "id" =>  2768,
                        "name" =>  "Essequibo Islands-West Demerara"
                    ],
                    [
                        "id" =>  2762,
                        "name" =>  "Mahaica-Berbice"
                    ],
                    [
                        "id" =>  2765,
                        "name" =>  "Pomeroon-Supenaam"
                    ],
                    [
                        "id" =>  2761,
                        "name" =>  "Potaro-Siparuni"
                    ],
                    [
                        "id" =>  2763,
                        "name" =>  "Upper Demerara-Berbice"
                    ],
                    [
                        "id" =>  2769,
                        "name" =>  "Upper Takutu-Upper Essequibo"
                    ]
                ]
            ],
            [
                "name" =>  "Haiti",
                "numeric_code" =>  "332",
                "alpha_2" =>  "HT",
                "alpha_3" =>  "HTI",
                "phone_code" =>  "509",
                "currency" =>  "HTG",
                "currency_name" =>  "Haitian gourde",
                "currency_symbol" =>  "G",
                "emoji" =>  "\ud83c\udded\ud83c\uddf9",
                "states" =>  [
                    [
                        "id" =>  4123,
                        "name" =>  "Artibonite"
                    ],
                    [
                        "id" =>  4125,
                        "name" =>  "Centre"
                    ],
                    [
                        "id" =>  4119,
                        "name" =>  "Grand'Anse"
                    ],
                    [
                        "id" =>  4118,
                        "name" =>  "Nippes"
                    ],
                    [
                        "id" =>  4117,
                        "name" =>  "Nord"
                    ],
                    [
                        "id" =>  4121,
                        "name" =>  "Nord-Est"
                    ],
                    [
                        "id" =>  4126,
                        "name" =>  "Nord-Ouest"
                    ],
                    [
                        "id" =>  4120,
                        "name" =>  "Ouest"
                    ],
                    [
                        "id" =>  4122,
                        "name" =>  "Sud"
                    ],
                    [
                        "id" =>  4124,
                        "name" =>  "Sud-Est"
                    ]
                ]
            ],
            [
                "name" =>  "Heard Island and McDonald Islands",
                "numeric_code" =>  "334",
                "alpha_2" =>  "HM",
                "alpha_3" =>  "HMD",
                "phone_code" =>  "672",
                "currency" =>  "AUD",
                "currency_name" =>  "Australian dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udded\ud83c\uddf2",
                "states" =>  []
            ],
            [
                "name" =>  "Honduras",
                "numeric_code" =>  "340",
                "alpha_2" =>  "HN",
                "alpha_3" =>  "HND",
                "phone_code" =>  "504",
                "currency" =>  "HNL",
                "currency_name" =>  "Honduran lempira",
                "currency_symbol" =>  "L",
                "emoji" =>  "\ud83c\udded\ud83c\uddf3",
                "states" =>  [
                    [
                        "id" =>  4047,
                        "name" =>  "Atl\u00e1ntida Department"
                    ],
                    [
                        "id" =>  4045,
                        "name" =>  "Bay Islands Department"
                    ],
                    [
                        "id" =>  4041,
                        "name" =>  "Choluteca Department"
                    ],
                    [
                        "id" =>  4051,
                        "name" =>  "Col\u00f3n Department"
                    ],
                    [
                        "id" =>  4042,
                        "name" =>  "Comayagua Department"
                    ],
                    [
                        "id" =>  4049,
                        "name" =>  "Cop\u00e1n Department"
                    ],
                    [
                        "id" =>  4046,
                        "name" =>  "Cort\u00e9s Department"
                    ],
                    [
                        "id" =>  4043,
                        "name" =>  "El Para\u00edso Department"
                    ],
                    [
                        "id" =>  4052,
                        "name" =>  "Francisco Moraz\u00e1n Department"
                    ],
                    [
                        "id" =>  4048,
                        "name" =>  "Gracias a Dios Department"
                    ],
                    [
                        "id" =>  4044,
                        "name" =>  "Intibuc\u00e1 Department"
                    ],
                    [
                        "id" =>  4058,
                        "name" =>  "La Paz Department"
                    ],
                    [
                        "id" =>  4054,
                        "name" =>  "Lempira Department"
                    ],
                    [
                        "id" =>  4056,
                        "name" =>  "Ocotepeque Department"
                    ],
                    [
                        "id" =>  4050,
                        "name" =>  "Olancho Department"
                    ],
                    [
                        "id" =>  4053,
                        "name" =>  "Santa B\u00e1rbara Department"
                    ],
                    [
                        "id" =>  4055,
                        "name" =>  "Valle Department"
                    ],
                    [
                        "id" =>  4057,
                        "name" =>  "Yoro Department"
                    ]
                ]
            ],
            [
                "name" =>  "Hong Kong S.A.R.",
                "numeric_code" =>  "344",
                "alpha_2" =>  "HK",
                "alpha_3" =>  "HKG",
                "phone_code" =>  "852",
                "currency" =>  "HKD",
                "currency_name" =>  "Hong Kong dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\udded\ud83c\uddf0",
                "states" =>  [
                    [
                        "id" =>  4889,
                        "name" =>  "Central and Western District"
                    ],
                    [
                        "id" =>  4891,
                        "name" =>  "Eastern"
                    ],
                    [
                        "id" =>  4888,
                        "name" =>  "Islands District"
                    ],
                    [
                        "id" =>  4895,
                        "name" =>  "Kowloon City"
                    ],
                    [
                        "id" =>  4898,
                        "name" =>  "Kwai Tsing"
                    ],
                    [
                        "id" =>  4897,
                        "name" =>  "Kwun Tong"
                    ],
                    [
                        "id" =>  4900,
                        "name" =>  "North"
                    ],
                    [
                        "id" =>  4887,
                        "name" =>  "Sai Kung District"
                    ],
                    [
                        "id" =>  4901,
                        "name" =>  "Sha Tin"
                    ],
                    [
                        "id" =>  4894,
                        "name" =>  "Sham Shui Po"
                    ],
                    [
                        "id" =>  4892,
                        "name" =>  "Southern"
                    ],
                    [
                        "id" =>  4885,
                        "name" =>  "Tai Po District"
                    ],
                    [
                        "id" =>  4884,
                        "name" =>  "Tsuen Wan District"
                    ],
                    [
                        "id" =>  4899,
                        "name" =>  "Tuen Mun"
                    ],
                    [
                        "id" =>  4890,
                        "name" =>  "Wan Chai"
                    ],
                    [
                        "id" =>  4896,
                        "name" =>  "Wong Tai Sin"
                    ],
                    [
                        "id" =>  4893,
                        "name" =>  "Yau Tsim Mong"
                    ],
                    [
                        "id" =>  4883,
                        "name" =>  "Yuen Long District"
                    ]
                ]
            ],
            [
                "name" =>  "Hungary",
                "numeric_code" =>  "348",
                "alpha_2" =>  "HU",
                "alpha_3" =>  "HUN",
                "phone_code" =>  "36",
                "currency" =>  "HUF",
                "currency_name" =>  "Hungarian forint",
                "currency_symbol" =>  "Ft",
                "emoji" =>  "\ud83c\udded\ud83c\uddfa",
                "states" =>  [
                    [
                        "id" =>  1048,
                        "name" =>  "B\u00e1cs-Kiskun"
                    ],
                    [
                        "id" =>  1055,
                        "name" =>  "Baranya"
                    ],
                    [
                        "id" =>  1060,
                        "name" =>  "B\u00e9k\u00e9s"
                    ],
                    [
                        "id" =>  1036,
                        "name" =>  "B\u00e9k\u00e9scsaba"
                    ],
                    [
                        "id" =>  1058,
                        "name" =>  "Borsod-Aba\u00faj-Zempl\u00e9n"
                    ],
                    [
                        "id" =>  1064,
                        "name" =>  "Budapest"
                    ],
                    [
                        "id" =>  1031,
                        "name" =>  "Csongr\u00e1d County"
                    ],
                    [
                        "id" =>  1032,
                        "name" =>  "Debrecen"
                    ],
                    [
                        "id" =>  1049,
                        "name" =>  "Duna\u00fajv\u00e1ros"
                    ],
                    [
                        "id" =>  1037,
                        "name" =>  "Eger"
                    ],
                    [
                        "id" =>  1028,
                        "name" =>  "\u00c9rd"
                    ],
                    [
                        "id" =>  1044,
                        "name" =>  "Fej\u00e9r County"
                    ],
                    [
                        "id" =>  1041,
                        "name" =>  "Gy\u0151r"
                    ],
                    [
                        "id" =>  1042,
                        "name" =>  "Gy\u0151r-Moson-Sopron County"
                    ],
                    [
                        "id" =>  1063,
                        "name" =>  "Hajd\u00fa-Bihar County"
                    ],
                    [
                        "id" =>  1040,
                        "name" =>  "Heves County"
                    ],
                    [
                        "id" =>  1027,
                        "name" =>  "H\u00f3dmez\u0151v\u00e1s\u00e1rhely"
                    ],
                    [
                        "id" =>  1043,
                        "name" =>  "J\u00e1sz-Nagykun-Szolnok County"
                    ],
                    [
                        "id" =>  1067,
                        "name" =>  "Kaposv\u00e1r"
                    ],
                    [
                        "id" =>  1056,
                        "name" =>  "Kecskem\u00e9t"
                    ],
                    [
                        "id" =>  5085,
                        "name" =>  "Kom\u00e1rom-Esztergom"
                    ],
                    [
                        "id" =>  1065,
                        "name" =>  "Miskolc"
                    ],
                    [
                        "id" =>  1030,
                        "name" =>  "Nagykanizsa"
                    ],
                    [
                        "id" =>  1051,
                        "name" =>  "N\u00f3gr\u00e1d County"
                    ],
                    [
                        "id" =>  1034,
                        "name" =>  "Ny\u00edregyh\u00e1za"
                    ],
                    [
                        "id" =>  1053,
                        "name" =>  "P\u00e9cs"
                    ],
                    [
                        "id" =>  1059,
                        "name" =>  "Pest County"
                    ],
                    [
                        "id" =>  1068,
                        "name" =>  "Salg\u00f3tarj\u00e1n"
                    ],
                    [
                        "id" =>  1035,
                        "name" =>  "Somogy County"
                    ],
                    [
                        "id" =>  1057,
                        "name" =>  "Sopron"
                    ],
                    [
                        "id" =>  1045,
                        "name" =>  "Szabolcs-Szatm\u00e1r-Bereg County"
                    ],
                    [
                        "id" =>  1029,
                        "name" =>  "Szeged"
                    ],
                    [
                        "id" =>  1033,
                        "name" =>  "Sz\u00e9kesfeh\u00e9rv\u00e1r"
                    ],
                    [
                        "id" =>  1061,
                        "name" =>  "Szeksz\u00e1rd"
                    ],
                    [
                        "id" =>  1047,
                        "name" =>  "Szolnok"
                    ],
                    [
                        "id" =>  1052,
                        "name" =>  "Szombathely"
                    ],
                    [
                        "id" =>  1066,
                        "name" =>  "Tatab\u00e1nya"
                    ],
                    [
                        "id" =>  1038,
                        "name" =>  "Tolna County"
                    ],
                    [
                        "id" =>  1039,
                        "name" =>  "Vas County"
                    ],
                    [
                        "id" =>  1062,
                        "name" =>  "Veszpr\u00e9m"
                    ],
                    [
                        "id" =>  1054,
                        "name" =>  "Veszpr\u00e9m County"
                    ],
                    [
                        "id" =>  1046,
                        "name" =>  "Zala County"
                    ],
                    [
                        "id" =>  1050,
                        "name" =>  "Zalaegerszeg"
                    ]
                ]
            ],
            [
                "name" =>  "Iceland",
                "numeric_code" =>  "352",
                "alpha_2" =>  "IS",
                "alpha_3" =>  "ISL",
                "phone_code" =>  "354",
                "currency" =>  "ISK",
                "currency_name" =>  "Icelandic kr\u00f3na",
                "currency_symbol" =>  "kr",
                "emoji" =>  "\ud83c\uddee\ud83c\uddf8",
                "states" =>  [
                    [
                        "id" =>  3431,
                        "name" =>  "Capital Region"
                    ],
                    [
                        "id" =>  3433,
                        "name" =>  "Eastern Region"
                    ],
                    [
                        "id" =>  3437,
                        "name" =>  "Northeastern Region"
                    ],
                    [
                        "id" =>  3435,
                        "name" =>  "Northwestern Region"
                    ],
                    [
                        "id" =>  3430,
                        "name" =>  "Southern Peninsula Region"
                    ],
                    [
                        "id" =>  3434,
                        "name" =>  "Southern Region"
                    ],
                    [
                        "id" =>  3436,
                        "name" =>  "Western Region"
                    ],
                    [
                        "id" =>  3432,
                        "name" =>  "Westfjords"
                    ]
                ]
            ],
            [
                "name" =>  "India",
                "numeric_code" =>  "356",
                "alpha_2" =>  "IN",
                "alpha_3" =>  "IND",
                "phone_code" =>  "91",
                "currency" =>  "INR",
                "currency_name" =>  "Indian rupee",
                "currency_symbol" =>  "\u20b9",
                "emoji" =>  "\ud83c\uddee\ud83c\uddf3",
                "states" =>  [
                    [
                        "id" =>  4023,
                        "name" =>  "Andaman and Nicobar Islands"
                    ],
                    [
                        "id" =>  4017,
                        "name" =>  "Andhra Pradesh"
                    ],
                    [
                        "id" =>  4024,
                        "name" =>  "Arunachal Pradesh"
                    ],
                    [
                        "id" =>  4027,
                        "name" =>  "Assam"
                    ],
                    [
                        "id" =>  4037,
                        "name" =>  "Bihar"
                    ],
                    [
                        "id" =>  4031,
                        "name" =>  "Chandigarh"
                    ],
                    [
                        "id" =>  4040,
                        "name" =>  "Chhattisgarh"
                    ],
                    [
                        "id" =>  4033,
                        "name" =>  "Dadra and Nagar Haveli and Daman and Diu"
                    ],
                    [
                        "id" =>  4021,
                        "name" =>  "Delhi"
                    ],
                    [
                        "id" =>  4009,
                        "name" =>  "Goa"
                    ],
                    [
                        "id" =>  4030,
                        "name" =>  "Gujarat"
                    ],
                    [
                        "id" =>  4007,
                        "name" =>  "Haryana"
                    ],
                    [
                        "id" =>  4020,
                        "name" =>  "Himachal Pradesh"
                    ],
                    [
                        "id" =>  4029,
                        "name" =>  "Jammu and Kashmir"
                    ],
                    [
                        "id" =>  4025,
                        "name" =>  "Jharkhand"
                    ],
                    [
                        "id" =>  4026,
                        "name" =>  "Karnataka"
                    ],
                    [
                        "id" =>  4028,
                        "name" =>  "Kerala"
                    ],
                    [
                        "id" =>  4852,
                        "name" =>  "Ladakh"
                    ],
                    [
                        "id" =>  4019,
                        "name" =>  "Lakshadweep"
                    ],
                    [
                        "id" =>  4039,
                        "name" =>  "Madhya Pradesh"
                    ],
                    [
                        "id" =>  4008,
                        "name" =>  "Maharashtra"
                    ],
                    [
                        "id" =>  4010,
                        "name" =>  "Manipur"
                    ],
                    [
                        "id" =>  4006,
                        "name" =>  "Meghalaya"
                    ],
                    [
                        "id" =>  4036,
                        "name" =>  "Mizoram"
                    ],
                    [
                        "id" =>  4018,
                        "name" =>  "Nagaland"
                    ],
                    [
                        "id" =>  4013,
                        "name" =>  "Odisha"
                    ],
                    [
                        "id" =>  4011,
                        "name" =>  "Puducherry"
                    ],
                    [
                        "id" =>  4015,
                        "name" =>  "Punjab"
                    ],
                    [
                        "id" =>  4014,
                        "name" =>  "Rajasthan"
                    ],
                    [
                        "id" =>  4034,
                        "name" =>  "Sikkim"
                    ],
                    [
                        "id" =>  4035,
                        "name" =>  "Tamil Nadu"
                    ],
                    [
                        "id" =>  4012,
                        "name" =>  "Telangana"
                    ],
                    [
                        "id" =>  4038,
                        "name" =>  "Tripura"
                    ],
                    [
                        "id" =>  4022,
                        "name" =>  "Uttar Pradesh"
                    ],
                    [
                        "id" =>  4016,
                        "name" =>  "Uttarakhand"
                    ],
                    [
                        "id" =>  4853,
                        "name" =>  "West Bengal"
                    ]
                ]
            ],
            [
                "name" =>  "Indonesia",
                "numeric_code" =>  "360",
                "alpha_2" =>  "ID",
                "alpha_3" =>  "IDN",
                "phone_code" =>  "62",
                "currency" =>  "IDR",
                "currency_name" =>  "Indonesian rupiah",
                "currency_symbol" =>  "Rp",
                "emoji" =>  "\ud83c\uddee\ud83c\udde9",
                "states" =>  [
                    [
                        "id" =>  1822,
                        "name" =>  "Aceh"
                    ],
                    [
                        "id" =>  1826,
                        "name" =>  "Bali"
                    ],
                    [
                        "id" =>  1810,
                        "name" =>  "Banten"
                    ],
                    [
                        "id" =>  1793,
                        "name" =>  "Bengkulu"
                    ],
                    [
                        "id" =>  1829,
                        "name" =>  "DI Yogyakarta"
                    ],
                    [
                        "id" =>  1805,
                        "name" =>  "DKI Jakarta"
                    ],
                    [
                        "id" =>  1812,
                        "name" =>  "Gorontalo"
                    ],
                    [
                        "id" =>  1815,
                        "name" =>  "Jambi"
                    ],
                    [
                        "id" =>  1825,
                        "name" =>  "Jawa Barat"
                    ],
                    [
                        "id" =>  1802,
                        "name" =>  "Jawa Tengah"
                    ],
                    [
                        "id" =>  1827,
                        "name" =>  "Jawa Timur"
                    ],
                    [
                        "id" =>  1806,
                        "name" =>  "Kalimantan Barat"
                    ],
                    [
                        "id" =>  1819,
                        "name" =>  "Kalimantan Selatan"
                    ],
                    [
                        "id" =>  1794,
                        "name" =>  "Kalimantan Tengah"
                    ],
                    [
                        "id" =>  1804,
                        "name" =>  "Kalimantan Timur"
                    ],
                    [
                        "id" =>  1824,
                        "name" =>  "Kalimantan Utara"
                    ],
                    [
                        "id" =>  1820,
                        "name" =>  "Kepulauan Bangka Belitung"
                    ],
                    [
                        "id" =>  1807,
                        "name" =>  "Kepulauan Riau"
                    ],
                    [
                        "id" =>  1811,
                        "name" =>  "Lampung"
                    ],
                    [
                        "id" =>  1800,
                        "name" =>  "Maluku"
                    ],
                    [
                        "id" =>  1801,
                        "name" =>  "Maluku Utara"
                    ],
                    [
                        "id" =>  1814,
                        "name" =>  "Nusa Tenggara Barat"
                    ],
                    [
                        "id" =>  1818,
                        "name" =>  "Nusa Tenggara Timur"
                    ],
                    [
                        "id" =>  1798,
                        "name" =>  "Papua"
                    ],
                    [
                        "id" =>  1799,
                        "name" =>  "Papua Barat"
                    ],
                    [
                        "id" =>  1809,
                        "name" =>  "Riau"
                    ],
                    [
                        "id" =>  1817,
                        "name" =>  "Sulawesi Barat"
                    ],
                    [
                        "id" =>  1795,
                        "name" =>  "Sulawesi Selatan"
                    ],
                    [
                        "id" =>  1813,
                        "name" =>  "Sulawesi Tengah"
                    ],
                    [
                        "id" =>  1796,
                        "name" =>  "Sulawesi Tenggara"
                    ],
                    [
                        "id" =>  1808,
                        "name" =>  "Sulawesi Utara"
                    ],
                    [
                        "id" =>  1828,
                        "name" =>  "Sumatera Barat"
                    ],
                    [
                        "id" =>  1816,
                        "name" =>  "Sumatera Selatan"
                    ],
                    [
                        "id" =>  1792,
                        "name" =>  "Sumatera Utara"
                    ]
                ]
            ],
            [
                "name" =>  "Iran",
                "numeric_code" =>  "364",
                "alpha_2" =>  "IR",
                "alpha_3" =>  "IRN",
                "phone_code" =>  "98",
                "currency" =>  "IRR",
                "currency_name" =>  "Iranian rial",
                "currency_symbol" =>  "\ufdfc",
                "emoji" =>  "\ud83c\uddee\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  3929,
                        "name" =>  "Alborz"
                    ],
                    [
                        "id" =>  3934,
                        "name" =>  "Ardabil"
                    ],
                    [
                        "id" =>  3932,
                        "name" =>  "Bushehr"
                    ],
                    [
                        "id" =>  3921,
                        "name" =>  "Chaharmahal and Bakhtiari"
                    ],
                    [
                        "id" =>  3944,
                        "name" =>  "East Azerbaijan"
                    ],
                    [
                        "id" =>  3939,
                        "name" =>  "Fars"
                    ],
                    [
                        "id" =>  3920,
                        "name" =>  "Gilan"
                    ],
                    [
                        "id" =>  3933,
                        "name" =>  "Golestan"
                    ],
                    [
                        "id" =>  4920,
                        "name" =>  "Hamadan"
                    ],
                    [
                        "id" =>  3937,
                        "name" =>  "Hormozgan"
                    ],
                    [
                        "id" =>  3918,
                        "name" =>  "Ilam"
                    ],
                    [
                        "id" =>  3923,
                        "name" =>  "Isfahan"
                    ],
                    [
                        "id" =>  3943,
                        "name" =>  "Kerman"
                    ],
                    [
                        "id" =>  3919,
                        "name" =>  "Kermanshah"
                    ],
                    [
                        "id" =>  3917,
                        "name" =>  "Khuzestan"
                    ],
                    [
                        "id" =>  3926,
                        "name" =>  "Kohgiluyeh and Boyer-Ahmad"
                    ],
                    [
                        "id" =>  3935,
                        "name" =>  "Kurdistan"
                    ],
                    [
                        "id" =>  3928,
                        "name" =>  "Lorestan"
                    ],
                    [
                        "id" =>  3916,
                        "name" =>  "Markazi"
                    ],
                    [
                        "id" =>  3938,
                        "name" =>  "Mazandaran"
                    ],
                    [
                        "id" =>  3942,
                        "name" =>  "North Khorasan"
                    ],
                    [
                        "id" =>  3941,
                        "name" =>  "Qazvin"
                    ],
                    [
                        "id" =>  3922,
                        "name" =>  "Qom"
                    ],
                    [
                        "id" =>  3927,
                        "name" =>  "Razavi Khorasan"
                    ],
                    [
                        "id" =>  3940,
                        "name" =>  "Semnan"
                    ],
                    [
                        "id" =>  3931,
                        "name" =>  "Sistan and Baluchestan"
                    ],
                    [
                        "id" =>  3930,
                        "name" =>  "South Khorasan"
                    ],
                    [
                        "id" =>  3945,
                        "name" =>  "Tehran"
                    ],
                    [
                        "id" =>  3924,
                        "name" =>  "West Azarbaijan"
                    ],
                    [
                        "id" =>  3936,
                        "name" =>  "Yazd"
                    ],
                    [
                        "id" =>  3925,
                        "name" =>  "Zanjan"
                    ]
                ]
            ],
            [
                "name" =>  "Iraq",
                "numeric_code" =>  "368",
                "alpha_2" =>  "IQ",
                "alpha_3" =>  "IRQ",
                "phone_code" =>  "964",
                "currency" =>  "IQD",
                "currency_name" =>  "Iraqi dinar",
                "currency_symbol" =>  "\u062f.\u0639",
                "emoji" =>  "\ud83c\uddee\ud83c\uddf6",
                "states" =>  [
                    [
                        "id" =>  3964,
                        "name" =>  "Al Anbar"
                    ],
                    [
                        "id" =>  3958,
                        "name" =>  "Al Muthanna"
                    ],
                    [
                        "id" =>  3956,
                        "name" =>  "Al-Q\u0101disiyyah"
                    ],
                    [
                        "id" =>  3955,
                        "name" =>  "Babylon"
                    ],
                    [
                        "id" =>  3959,
                        "name" =>  "Baghdad"
                    ],
                    [
                        "id" =>  3960,
                        "name" =>  "Basra"
                    ],
                    [
                        "id" =>  3954,
                        "name" =>  "Dhi Qar"
                    ],
                    [
                        "id" =>  3965,
                        "name" =>  "Diyala"
                    ],
                    [
                        "id" =>  3967,
                        "name" =>  "Dohuk"
                    ],
                    [
                        "id" =>  3968,
                        "name" =>  "Erbil"
                    ],
                    [
                        "id" =>  3957,
                        "name" =>  "Karbala"
                    ],
                    [
                        "id" =>  3971,
                        "name" =>  "Kirkuk"
                    ],
                    [
                        "id" =>  3966,
                        "name" =>  "Maysan"
                    ],
                    [
                        "id" =>  3962,
                        "name" =>  "Najaf"
                    ],
                    [
                        "id" =>  3963,
                        "name" =>  "Nineveh"
                    ],
                    [
                        "id" =>  3961,
                        "name" =>  "Saladin"
                    ],
                    [
                        "id" =>  3969,
                        "name" =>  "Sulaymaniyah"
                    ],
                    [
                        "id" =>  3970,
                        "name" =>  "Wasit"
                    ]
                ]
            ],
            [
                "name" =>  "Ireland",
                "numeric_code" =>  "372",
                "alpha_2" =>  "IE",
                "alpha_3" =>  "IRL",
                "phone_code" =>  "353",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddee\ud83c\uddea",
                "states" =>  [
                    [
                        "id" =>  1095,
                        "name" =>  "Carlow"
                    ],
                    [
                        "id" =>  1088,
                        "name" =>  "Cavan"
                    ],
                    [
                        "id" =>  1091,
                        "name" =>  "Clare"
                    ],
                    [
                        "id" =>  1087,
                        "name" =>  "Connacht"
                    ],
                    [
                        "id" =>  1074,
                        "name" =>  "Cork"
                    ],
                    [
                        "id" =>  1071,
                        "name" =>  "Donegal"
                    ],
                    [
                        "id" =>  1072,
                        "name" =>  "Dublin"
                    ],
                    [
                        "id" =>  1079,
                        "name" =>  "Galway"
                    ],
                    [
                        "id" =>  1077,
                        "name" =>  "Kerry"
                    ],
                    [
                        "id" =>  1082,
                        "name" =>  "Kildare"
                    ],
                    [
                        "id" =>  1090,
                        "name" =>  "Kilkenny"
                    ],
                    [
                        "id" =>  1096,
                        "name" =>  "Laois"
                    ],
                    [
                        "id" =>  1073,
                        "name" =>  "Leinster"
                    ],
                    [
                        "id" =>  1094,
                        "name" =>  "Limerick"
                    ],
                    [
                        "id" =>  1076,
                        "name" =>  "Longford"
                    ],
                    [
                        "id" =>  1083,
                        "name" =>  "Louth"
                    ],
                    [
                        "id" =>  1084,
                        "name" =>  "Mayo"
                    ],
                    [
                        "id" =>  1092,
                        "name" =>  "Meath"
                    ],
                    [
                        "id" =>  1075,
                        "name" =>  "Monaghan"
                    ],
                    [
                        "id" =>  1080,
                        "name" =>  "Munster"
                    ],
                    [
                        "id" =>  1078,
                        "name" =>  "Offaly"
                    ],
                    [
                        "id" =>  1081,
                        "name" =>  "Roscommon"
                    ],
                    [
                        "id" =>  1070,
                        "name" =>  "Sligo"
                    ],
                    [
                        "id" =>  1069,
                        "name" =>  "Tipperary"
                    ],
                    [
                        "id" =>  1086,
                        "name" =>  "Ulster"
                    ],
                    [
                        "id" =>  1089,
                        "name" =>  "Waterford"
                    ],
                    [
                        "id" =>  1097,
                        "name" =>  "Westmeath"
                    ],
                    [
                        "id" =>  1093,
                        "name" =>  "Wexford"
                    ],
                    [
                        "id" =>  1085,
                        "name" =>  "Wicklow"
                    ]
                ]
            ],
            [
                "name" =>  "Israel",
                "numeric_code" =>  "376",
                "alpha_2" =>  "IL",
                "alpha_3" =>  "ISR",
                "phone_code" =>  "972",
                "currency" =>  "ILS",
                "currency_name" =>  "Israeli new shekel",
                "currency_symbol" =>  "\u20aa",
                "emoji" =>  "\ud83c\uddee\ud83c\uddf1",
                "states" =>  [
                    [
                        "id" =>  1367,
                        "name" =>  "Central District"
                    ],
                    [
                        "id" =>  1369,
                        "name" =>  "Haifa District"
                    ],
                    [
                        "id" =>  1370,
                        "name" =>  "Jerusalem District"
                    ],
                    [
                        "id" =>  1366,
                        "name" =>  "Northern District"
                    ],
                    [
                        "id" =>  1368,
                        "name" =>  "Southern District"
                    ],
                    [
                        "id" =>  1371,
                        "name" =>  "Tel Aviv District"
                    ]
                ]
            ],
            [
                "name" =>  "Italy",
                "numeric_code" =>  "380",
                "alpha_2" =>  "IT",
                "alpha_3" =>  "ITA",
                "phone_code" =>  "39",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddee\ud83c\uddf9",
                "states" =>  [
                    [
                        "id" =>  1679,
                        "name" =>  "Abruzzo"
                    ],
                    [
                        "id" =>  1727,
                        "name" =>  "Agrigento"
                    ],
                    [
                        "id" =>  1783,
                        "name" =>  "Alessandria"
                    ],
                    [
                        "id" =>  1672,
                        "name" =>  "Ancona"
                    ],
                    [
                        "id" =>  1716,
                        "name" =>  "Aosta Valley"
                    ],
                    [
                        "id" =>  1688,
                        "name" =>  "Apulia"
                    ],
                    [
                        "id" =>  1681,
                        "name" =>  "Ascoli Piceno"
                    ],
                    [
                        "id" =>  1780,
                        "name" =>  "Asti"
                    ],
                    [
                        "id" =>  1692,
                        "name" =>  "Avellino"
                    ],
                    [
                        "id" =>  1772,
                        "name" =>  "Bari"
                    ],
                    [
                        "id" =>  1686,
                        "name" =>  "Barletta-Andria-Trani"
                    ],
                    [
                        "id" =>  1706,
                        "name" =>  "Basilicata"
                    ],
                    [
                        "id" =>  1689,
                        "name" =>  "Belluno"
                    ],
                    [
                        "id" =>  1701,
                        "name" =>  "Benevento"
                    ],
                    [
                        "id" =>  1704,
                        "name" =>  "Bergamo"
                    ],
                    [
                        "id" =>  1778,
                        "name" =>  "Biella"
                    ],
                    [
                        "id" =>  1684,
                        "name" =>  "Bologna"
                    ],
                    [
                        "id" =>  1717,
                        "name" =>  "Brescia"
                    ],
                    [
                        "id" =>  1714,
                        "name" =>  "Brindisi"
                    ],
                    [
                        "id" =>  1682,
                        "name" =>  "Cagliari"
                    ],
                    [
                        "id" =>  1703,
                        "name" =>  "Calabria"
                    ],
                    [
                        "id" =>  1718,
                        "name" =>  "Caltanissetta"
                    ],
                    [
                        "id" =>  1669,
                        "name" =>  "Campania"
                    ],
                    [
                        "id" =>  1721,
                        "name" =>  "Campobasso"
                    ],
                    [
                        "id" =>  1731,
                        "name" =>  "Caserta"
                    ],
                    [
                        "id" =>  1766,
                        "name" =>  "Catania"
                    ],
                    [
                        "id" =>  1728,
                        "name" =>  "Catanzaro"
                    ],
                    [
                        "id" =>  1739,
                        "name" =>  "Chieti"
                    ],
                    [
                        "id" =>  1740,
                        "name" =>  "Como"
                    ],
                    [
                        "id" =>  1742,
                        "name" =>  "Cosenza"
                    ],
                    [
                        "id" =>  1751,
                        "name" =>  "Cremona"
                    ],
                    [
                        "id" =>  1754,
                        "name" =>  "Crotone"
                    ],
                    [
                        "id" =>  1775,
                        "name" =>  "Cuneo"
                    ],
                    [
                        "id" =>  1773,
                        "name" =>  "Emilia-Romagna"
                    ],
                    [
                        "id" =>  1723,
                        "name" =>  "Enna"
                    ],
                    [
                        "id" =>  1744,
                        "name" =>  "Fermo"
                    ],
                    [
                        "id" =>  1746,
                        "name" =>  "Ferrara"
                    ],
                    [
                        "id" =>  1680,
                        "name" =>  "Florence"
                    ],
                    [
                        "id" =>  1771,
                        "name" =>  "Foggia"
                    ],
                    [
                        "id" =>  1779,
                        "name" =>  "Forl\u00ec-Cesena"
                    ],
                    [
                        "id" =>  1756,
                        "name" =>  "Friuli\u2013Venezia Giulia"
                    ],
                    [
                        "id" =>  1776,
                        "name" =>  "Frosinone"
                    ],
                    [
                        "id" =>  1699,
                        "name" =>  "Genoa"
                    ],
                    [
                        "id" =>  1777,
                        "name" =>  "Gorizia"
                    ],
                    [
                        "id" =>  1787,
                        "name" =>  "Grosseto"
                    ],
                    [
                        "id" =>  1788,
                        "name" =>  "Imperia"
                    ],
                    [
                        "id" =>  1789,
                        "name" =>  "Isernia"
                    ],
                    [
                        "id" =>  1781,
                        "name" =>  "L'Aquila"
                    ],
                    [
                        "id" =>  1791,
                        "name" =>  "La Spezia"
                    ],
                    [
                        "id" =>  1674,
                        "name" =>  "Latina"
                    ],
                    [
                        "id" =>  1678,
                        "name" =>  "Lazio"
                    ],
                    [
                        "id" =>  1675,
                        "name" =>  "Lecce"
                    ],
                    [
                        "id" =>  1677,
                        "name" =>  "Lecco"
                    ],
                    [
                        "id" =>  1768,
                        "name" =>  "Liguria"
                    ],
                    [
                        "id" =>  1745,
                        "name" =>  "Livorno"
                    ],
                    [
                        "id" =>  1747,
                        "name" =>  "Lodi"
                    ],
                    [
                        "id" =>  1705,
                        "name" =>  "Lombardy"
                    ],
                    [
                        "id" =>  1749,
                        "name" =>  "Lucca"
                    ],
                    [
                        "id" =>  1750,
                        "name" =>  "Macerata"
                    ],
                    [
                        "id" =>  1758,
                        "name" =>  "Mantua"
                    ],
                    [
                        "id" =>  1670,
                        "name" =>  "Marche"
                    ],
                    [
                        "id" =>  1759,
                        "name" =>  "Massa and Carrara"
                    ],
                    [
                        "id" =>  1760,
                        "name" =>  "Matera"
                    ],
                    [
                        "id" =>  1761,
                        "name" =>  "Medio Campidano"
                    ],
                    [
                        "id" =>  1770,
                        "name" =>  "Messina"
                    ],
                    [
                        "id" =>  1698,
                        "name" =>  "Milan"
                    ],
                    [
                        "id" =>  1757,
                        "name" =>  "Modena"
                    ],
                    [
                        "id" =>  1695,
                        "name" =>  "Molise"
                    ],
                    [
                        "id" =>  1769,
                        "name" =>  "Monza and Brianza"
                    ],
                    [
                        "id" =>  1724,
                        "name" =>  "Naples"
                    ],
                    [
                        "id" =>  1774,
                        "name" =>  "Novara"
                    ],
                    [
                        "id" =>  1790,
                        "name" =>  "Nuoro"
                    ],
                    [
                        "id" =>  1786,
                        "name" =>  "Oristano"
                    ],
                    [
                        "id" =>  1665,
                        "name" =>  "Padua"
                    ],
                    [
                        "id" =>  1668,
                        "name" =>  "Palermo"
                    ],
                    [
                        "id" =>  1666,
                        "name" =>  "Parma"
                    ],
                    [
                        "id" =>  1676,
                        "name" =>  "Pavia"
                    ],
                    [
                        "id" =>  1691,
                        "name" =>  "Perugia"
                    ],
                    [
                        "id" =>  1693,
                        "name" =>  "Pesaro and Urbino"
                    ],
                    [
                        "id" =>  1694,
                        "name" =>  "Pescara"
                    ],
                    [
                        "id" =>  1696,
                        "name" =>  "Piacenza"
                    ],
                    [
                        "id" =>  1702,
                        "name" =>  "Piedmont"
                    ],
                    [
                        "id" =>  1685,
                        "name" =>  "Pisa"
                    ],
                    [
                        "id" =>  1687,
                        "name" =>  "Pistoia"
                    ],
                    [
                        "id" =>  1690,
                        "name" =>  "Pordenone"
                    ],
                    [
                        "id" =>  1697,
                        "name" =>  "Potenza"
                    ],
                    [
                        "id" =>  1700,
                        "name" =>  "Prato"
                    ],
                    [
                        "id" =>  1729,
                        "name" =>  "Ragusa"
                    ],
                    [
                        "id" =>  1707,
                        "name" =>  "Ravenna"
                    ],
                    [
                        "id" =>  1671,
                        "name" =>  "Reggio Calabria"
                    ],
                    [
                        "id" =>  1708,
                        "name" =>  "Reggio Emilia"
                    ],
                    [
                        "id" =>  1712,
                        "name" =>  "Rieti"
                    ],
                    [
                        "id" =>  1713,
                        "name" =>  "Rimini"
                    ],
                    [
                        "id" =>  1711,
                        "name" =>  "Rome"
                    ],
                    [
                        "id" =>  1719,
                        "name" =>  "Rovigo"
                    ],
                    [
                        "id" =>  1720,
                        "name" =>  "Salerno"
                    ],
                    [
                        "id" =>  1715,
                        "name" =>  "Sardinia"
                    ],
                    [
                        "id" =>  1722,
                        "name" =>  "Sassari"
                    ],
                    [
                        "id" =>  1732,
                        "name" =>  "Savona"
                    ],
                    [
                        "id" =>  1709,
                        "name" =>  "Sicily"
                    ],
                    [
                        "id" =>  1734,
                        "name" =>  "Siena"
                    ],
                    [
                        "id" =>  1667,
                        "name" =>  "Siracusa"
                    ],
                    [
                        "id" =>  1741,
                        "name" =>  "Sondrio"
                    ],
                    [
                        "id" =>  1730,
                        "name" =>  "South Sardinia"
                    ],
                    [
                        "id" =>  1767,
                        "name" =>  "South Tyrol"
                    ],
                    [
                        "id" =>  1743,
                        "name" =>  "Taranto"
                    ],
                    [
                        "id" =>  1752,
                        "name" =>  "Teramo"
                    ],
                    [
                        "id" =>  1755,
                        "name" =>  "Terni"
                    ],
                    [
                        "id" =>  1733,
                        "name" =>  "Trapani"
                    ],
                    [
                        "id" =>  1748,
                        "name" =>  "Trentino"
                    ],
                    [
                        "id" =>  1725,
                        "name" =>  "Trentino-South Tyrol"
                    ],
                    [
                        "id" =>  1762,
                        "name" =>  "Treviso"
                    ],
                    [
                        "id" =>  1763,
                        "name" =>  "Trieste"
                    ],
                    [
                        "id" =>  1710,
                        "name" =>  "Turin"
                    ],
                    [
                        "id" =>  1664,
                        "name" =>  "Tuscany"
                    ],
                    [
                        "id" =>  1764,
                        "name" =>  "Udine"
                    ],
                    [
                        "id" =>  1683,
                        "name" =>  "Umbria"
                    ],
                    [
                        "id" =>  1765,
                        "name" =>  "Varese"
                    ],
                    [
                        "id" =>  1753,
                        "name" =>  "Veneto"
                    ],
                    [
                        "id" =>  1673,
                        "name" =>  "Venice"
                    ],
                    [
                        "id" =>  1726,
                        "name" =>  "Verbano-Cusio-Ossola"
                    ],
                    [
                        "id" =>  1785,
                        "name" =>  "Vercelli"
                    ],
                    [
                        "id" =>  1736,
                        "name" =>  "Verona"
                    ],
                    [
                        "id" =>  1737,
                        "name" =>  "Vibo Valentia"
                    ],
                    [
                        "id" =>  1738,
                        "name" =>  "Vicenza"
                    ],
                    [
                        "id" =>  1735,
                        "name" =>  "Viterbo"
                    ]
                ]
            ],
            [
                "name" =>  "Jamaica",
                "numeric_code" =>  "388",
                "alpha_2" =>  "JM",
                "alpha_3" =>  "JAM",
                "phone_code" =>  "+1-876",
                "currency" =>  "JMD",
                "currency_name" =>  "Jamaican dollar",
                "currency_symbol" =>  "J$",
                "emoji" =>  "\ud83c\uddef\ud83c\uddf2",
                "states" =>  [
                    [
                        "id" =>  3753,
                        "name" =>  "Clarendon Parish"
                    ],
                    [
                        "id" =>  3749,
                        "name" =>  "Hanover Parish"
                    ],
                    [
                        "id" =>  3748,
                        "name" =>  "Kingston Parish"
                    ],
                    [
                        "id" =>  3754,
                        "name" =>  "Manchester Parish"
                    ],
                    [
                        "id" =>  3752,
                        "name" =>  "Portland Parish"
                    ],
                    [
                        "id" =>  3751,
                        "name" =>  "Saint Andrew"
                    ],
                    [
                        "id" =>  3744,
                        "name" =>  "Saint Ann Parish"
                    ],
                    [
                        "id" =>  3746,
                        "name" =>  "Saint Catherine Parish"
                    ],
                    [
                        "id" =>  3743,
                        "name" =>  "Saint Elizabeth Parish"
                    ],
                    [
                        "id" =>  3745,
                        "name" =>  "Saint James Parish"
                    ],
                    [
                        "id" =>  3747,
                        "name" =>  "Saint Mary Parish"
                    ],
                    [
                        "id" =>  3750,
                        "name" =>  "Saint Thomas Parish"
                    ],
                    [
                        "id" =>  3755,
                        "name" =>  "Trelawny Parish"
                    ],
                    [
                        "id" =>  3742,
                        "name" =>  "Westmoreland Parish"
                    ]
                ]
            ],
            [
                "name" =>  "Japan",
                "numeric_code" =>  "392",
                "alpha_2" =>  "JP",
                "alpha_3" =>  "JPN",
                "phone_code" =>  "81",
                "currency" =>  "JPY",
                "currency_name" =>  "Japanese yen",
                "currency_symbol" =>  "\u00a5",
                "emoji" =>  "\ud83c\uddef\ud83c\uddf5",
                "states" =>  [
                    [
                        "id" =>  827,
                        "name" =>  "Aichi Prefecture"
                    ],
                    [
                        "id" =>  829,
                        "name" =>  "Akita Prefecture"
                    ],
                    [
                        "id" =>  839,
                        "name" =>  "Aomori Prefecture"
                    ],
                    [
                        "id" =>  821,
                        "name" =>  "Chiba Prefecture"
                    ],
                    [
                        "id" =>  865,
                        "name" =>  "Ehime Prefecture"
                    ],
                    [
                        "id" =>  848,
                        "name" =>  "Fukui Prefecture"
                    ],
                    [
                        "id" =>  861,
                        "name" =>  "Fukuoka Prefecture"
                    ],
                    [
                        "id" =>  847,
                        "name" =>  "Fukushima Prefecture"
                    ],
                    [
                        "id" =>  858,
                        "name" =>  "Gifu Prefecture"
                    ],
                    [
                        "id" =>  862,
                        "name" =>  "Gunma Prefecture"
                    ],
                    [
                        "id" =>  828,
                        "name" =>  "Hiroshima Prefecture"
                    ],
                    [
                        "id" =>  832,
                        "name" =>  "Hokkaid\u014d Prefecture"
                    ],
                    [
                        "id" =>  831,
                        "name" =>  "Hy\u014dgo Prefecture"
                    ],
                    [
                        "id" =>  851,
                        "name" =>  "Ibaraki Prefecture"
                    ],
                    [
                        "id" =>  830,
                        "name" =>  "Ishikawa Prefecture"
                    ],
                    [
                        "id" =>  856,
                        "name" =>  "Iwate Prefecture"
                    ],
                    [
                        "id" =>  864,
                        "name" =>  "Kagawa Prefecture"
                    ],
                    [
                        "id" =>  840,
                        "name" =>  "Kagoshima Prefecture"
                    ],
                    [
                        "id" =>  842,
                        "name" =>  "Kanagawa Prefecture"
                    ],
                    [
                        "id" =>  4924,
                        "name" =>  "K\u014dchi Prefecture"
                    ],
                    [
                        "id" =>  846,
                        "name" =>  "Kumamoto Prefecture"
                    ],
                    [
                        "id" =>  834,
                        "name" =>  "Ky\u014dto Prefecture"
                    ],
                    [
                        "id" =>  833,
                        "name" =>  "Mie Prefecture"
                    ],
                    [
                        "id" =>  857,
                        "name" =>  "Miyagi Prefecture"
                    ],
                    [
                        "id" =>  855,
                        "name" =>  "Miyazaki Prefecture"
                    ],
                    [
                        "id" =>  843,
                        "name" =>  "Nagano Prefecture"
                    ],
                    [
                        "id" =>  849,
                        "name" =>  "Nagasaki Prefecture"
                    ],
                    [
                        "id" =>  824,
                        "name" =>  "Nara Prefecture"
                    ],
                    [
                        "id" =>  841,
                        "name" =>  "Niigata Prefecture"
                    ],
                    [
                        "id" =>  822,
                        "name" =>  "\u014cita Prefecture"
                    ],
                    [
                        "id" =>  820,
                        "name" =>  "Okayama Prefecture"
                    ],
                    [
                        "id" =>  853,
                        "name" =>  "Okinawa Prefecture"
                    ],
                    [
                        "id" =>  859,
                        "name" =>  "\u014csaka Prefecture"
                    ],
                    [
                        "id" =>  863,
                        "name" =>  "Saga Prefecture"
                    ],
                    [
                        "id" =>  860,
                        "name" =>  "Saitama Prefecture"
                    ],
                    [
                        "id" =>  845,
                        "name" =>  "Shiga Prefecture"
                    ],
                    [
                        "id" =>  826,
                        "name" =>  "Shimane Prefecture"
                    ],
                    [
                        "id" =>  825,
                        "name" =>  "Shizuoka Prefecture"
                    ],
                    [
                        "id" =>  854,
                        "name" =>  "Tochigi Prefecture"
                    ],
                    [
                        "id" =>  836,
                        "name" =>  "Tokushima Prefecture"
                    ],
                    [
                        "id" =>  823,
                        "name" =>  "Tokyo"
                    ],
                    [
                        "id" =>  850,
                        "name" =>  "Tottori Prefecture"
                    ],
                    [
                        "id" =>  838,
                        "name" =>  "Toyama Prefecture"
                    ],
                    [
                        "id" =>  844,
                        "name" =>  "Wakayama Prefecture"
                    ],
                    [
                        "id" =>  837,
                        "name" =>  "Yamagata Prefecture"
                    ],
                    [
                        "id" =>  835,
                        "name" =>  "Yamaguchi Prefecture"
                    ],
                    [
                        "id" =>  852,
                        "name" =>  "Yamanashi Prefecture"
                    ]
                ]
            ],
            [
                "name" =>  "Jersey",
                "numeric_code" =>  "832",
                "alpha_2" =>  "JE",
                "alpha_3" =>  "JEY",
                "phone_code" =>  "+44-1534",
                "currency" =>  "GBP",
                "currency_name" =>  "British pound",
                "currency_symbol" =>  "\u00a3",
                "emoji" =>  "\ud83c\uddef\ud83c\uddea",
                "states" =>  []
            ],
            [
                "name" =>  "Jordan",
                "numeric_code" =>  "400",
                "alpha_2" =>  "JO",
                "alpha_3" =>  "JOR",
                "phone_code" =>  "962",
                "currency" =>  "JOD",
                "currency_name" =>  "Jordanian dinar",
                "currency_symbol" =>  "\u0627.\u062f",
                "emoji" =>  "\ud83c\uddef\ud83c\uddf4",
                "states" =>  [
                    [
                        "id" =>  963,
                        "name" =>  "Ajloun"
                    ],
                    [
                        "id" =>  965,
                        "name" =>  "Amman"
                    ],
                    [
                        "id" =>  959,
                        "name" =>  "Aqaba"
                    ],
                    [
                        "id" =>  961,
                        "name" =>  "Balqa"
                    ],
                    [
                        "id" =>  960,
                        "name" =>  "Irbid"
                    ],
                    [
                        "id" =>  966,
                        "name" =>  "Jerash"
                    ],
                    [
                        "id" =>  956,
                        "name" =>  "Karak"
                    ],
                    [
                        "id" =>  964,
                        "name" =>  "Ma'an"
                    ],
                    [
                        "id" =>  958,
                        "name" =>  "Madaba"
                    ],
                    [
                        "id" =>  962,
                        "name" =>  "Mafraq"
                    ],
                    [
                        "id" =>  957,
                        "name" =>  "Tafilah"
                    ],
                    [
                        "id" =>  967,
                        "name" =>  "Zarqa"
                    ]
                ]
            ],
            [
                "name" =>  "Kazakhstan",
                "numeric_code" =>  "398",
                "alpha_2" =>  "KZ",
                "alpha_3" =>  "KAZ",
                "phone_code" =>  "7",
                "currency" =>  "KZT",
                "currency_name" =>  "Kazakhstani tenge",
                "currency_symbol" =>  "\u043b\u0432",
                "emoji" =>  "\ud83c\uddf0\ud83c\uddff",
                "states" =>  [
                    [
                        "id" =>  145,
                        "name" =>  "Akmola Region"
                    ],
                    [
                        "id" =>  151,
                        "name" =>  "Aktobe Region"
                    ],
                    [
                        "id" =>  152,
                        "name" =>  "Almaty"
                    ],
                    [
                        "id" =>  143,
                        "name" =>  "Almaty Region"
                    ],
                    [
                        "id" =>  153,
                        "name" =>  "Atyrau Region"
                    ],
                    [
                        "id" =>  155,
                        "name" =>  "Baikonur"
                    ],
                    [
                        "id" =>  154,
                        "name" =>  "East Kazakhstan Region"
                    ],
                    [
                        "id" =>  147,
                        "name" =>  "Jambyl Region"
                    ],
                    [
                        "id" =>  150,
                        "name" =>  "Karaganda Region"
                    ],
                    [
                        "id" =>  157,
                        "name" =>  "Kostanay Region"
                    ],
                    [
                        "id" =>  142,
                        "name" =>  "Kyzylorda Region"
                    ],
                    [
                        "id" =>  141,
                        "name" =>  "Mangystau Region"
                    ],
                    [
                        "id" =>  144,
                        "name" =>  "North Kazakhstan Region"
                    ],
                    [
                        "id" =>  156,
                        "name" =>  "Nur-Sultan"
                    ],
                    [
                        "id" =>  146,
                        "name" =>  "Pavlodar Region"
                    ],
                    [
                        "id" =>  149,
                        "name" =>  "Turkestan Region"
                    ],
                    [
                        "id" =>  148,
                        "name" =>  "West Kazakhstan Province"
                    ]
                ]
            ],
            [
                "name" =>  "Kenya",
                "numeric_code" =>  "404",
                "alpha_2" =>  "KE",
                "alpha_3" =>  "KEN",
                "phone_code" =>  "254",
                "currency" =>  "KES",
                "currency_name" =>  "Kenyan shilling",
                "currency_symbol" =>  "KSh",
                "emoji" =>  "\ud83c\uddf0\ud83c\uddea",
                "states" =>  [
                    [
                        "id" =>  181,
                        "name" =>  "Baringo"
                    ],
                    [
                        "id" =>  210,
                        "name" =>  "Bomet"
                    ],
                    [
                        "id" =>  168,
                        "name" =>  "Bungoma"
                    ],
                    [
                        "id" =>  161,
                        "name" =>  "Busia"
                    ],
                    [
                        "id" =>  201,
                        "name" =>  "Elgeyo-Marakwet"
                    ],
                    [
                        "id" =>  163,
                        "name" =>  "Embu"
                    ],
                    [
                        "id" =>  196,
                        "name" =>  "Garissa"
                    ],
                    [
                        "id" =>  195,
                        "name" =>  "Homa Bay"
                    ],
                    [
                        "id" =>  170,
                        "name" =>  "Isiolo"
                    ],
                    [
                        "id" =>  197,
                        "name" =>  "Kajiado"
                    ],
                    [
                        "id" =>  158,
                        "name" =>  "Kakamega"
                    ],
                    [
                        "id" =>  193,
                        "name" =>  "Kericho"
                    ],
                    [
                        "id" =>  199,
                        "name" =>  "Kiambu"
                    ],
                    [
                        "id" =>  174,
                        "name" =>  "Kilifi"
                    ],
                    [
                        "id" =>  167,
                        "name" =>  "Kirinyaga"
                    ],
                    [
                        "id" =>  159,
                        "name" =>  "Kisii"
                    ],
                    [
                        "id" =>  171,
                        "name" =>  "Kisumu"
                    ],
                    [
                        "id" =>  211,
                        "name" =>  "Kitui"
                    ],
                    [
                        "id" =>  173,
                        "name" =>  "Kwale"
                    ],
                    [
                        "id" =>  164,
                        "name" =>  "Laikipia"
                    ],
                    [
                        "id" =>  166,
                        "name" =>  "Lamu"
                    ],
                    [
                        "id" =>  184,
                        "name" =>  "Machakos"
                    ],
                    [
                        "id" =>  188,
                        "name" =>  "Makueni"
                    ],
                    [
                        "id" =>  187,
                        "name" =>  "Mandera"
                    ],
                    [
                        "id" =>  194,
                        "name" =>  "Marsabit"
                    ],
                    [
                        "id" =>  198,
                        "name" =>  "Meru"
                    ],
                    [
                        "id" =>  190,
                        "name" =>  "Migori"
                    ],
                    [
                        "id" =>  200,
                        "name" =>  "Mombasa"
                    ],
                    [
                        "id" =>  178,
                        "name" =>  "Murang'a"
                    ],
                    [
                        "id" =>  191,
                        "name" =>  "Nairobi City"
                    ],
                    [
                        "id" =>  203,
                        "name" =>  "Nakuru"
                    ],
                    [
                        "id" =>  165,
                        "name" =>  "Nandi"
                    ],
                    [
                        "id" =>  175,
                        "name" =>  "Narok"
                    ],
                    [
                        "id" =>  209,
                        "name" =>  "Nyamira"
                    ],
                    [
                        "id" =>  192,
                        "name" =>  "Nyandarua"
                    ],
                    [
                        "id" =>  180,
                        "name" =>  "Nyeri"
                    ],
                    [
                        "id" =>  207,
                        "name" =>  "Samburu"
                    ],
                    [
                        "id" =>  186,
                        "name" =>  "Siaya"
                    ],
                    [
                        "id" =>  176,
                        "name" =>  "Taita\u2013Taveta"
                    ],
                    [
                        "id" =>  205,
                        "name" =>  "Tana River"
                    ],
                    [
                        "id" =>  185,
                        "name" =>  "Tharaka-Nithi"
                    ],
                    [
                        "id" =>  183,
                        "name" =>  "Trans Nzoia"
                    ],
                    [
                        "id" =>  206,
                        "name" =>  "Turkana"
                    ],
                    [
                        "id" =>  169,
                        "name" =>  "Uasin Gishu"
                    ],
                    [
                        "id" =>  202,
                        "name" =>  "Vihiga"
                    ],
                    [
                        "id" =>  182,
                        "name" =>  "Wajir"
                    ],
                    [
                        "id" =>  208,
                        "name" =>  "West Pokot"
                    ]
                ]
            ],
            [
                "name" =>  "Kiribati",
                "numeric_code" =>  "296",
                "alpha_2" =>  "KI",
                "alpha_3" =>  "KIR",
                "phone_code" =>  "686",
                "currency" =>  "AUD",
                "currency_name" =>  "Australian dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf0\ud83c\uddee",
                "states" =>  [
                    [
                        "id" =>  1831,
                        "name" =>  "Gilbert Islands"
                    ],
                    [
                        "id" =>  1832,
                        "name" =>  "Line Islands"
                    ],
                    [
                        "id" =>  1830,
                        "name" =>  "Phoenix Islands"
                    ]
                ]
            ],
            [
                "name" =>  "Kosovo",
                "numeric_code" =>  "926",
                "alpha_2" =>  null,
                "alpha_3" =>  null,
                "phone_code" =>  "383",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddfd\ud83c\uddf0",
                "states" =>  [
                    [
                        "id" =>  4876,
                        "name" =>  "\u0110akovica District (Gjakove)"
                    ],
                    [
                        "id" =>  4877,
                        "name" =>  "Gjilan District"
                    ],
                    [
                        "id" =>  4878,
                        "name" =>  "Kosovska Mitrovica District"
                    ],
                    [
                        "id" =>  3738,
                        "name" =>  "Pe\u0107 District"
                    ],
                    [
                        "id" =>  4879,
                        "name" =>  "Pristina (Pri\u015ftine)"
                    ],
                    [
                        "id" =>  3723,
                        "name" =>  "Prizren District"
                    ],
                    [
                        "id" =>  4874,
                        "name" =>  "Uro\u0161evac District (Ferizaj)"
                    ]
                ]
            ],
            [
                "name" =>  "Kuwait",
                "numeric_code" =>  "414",
                "alpha_2" =>  "KW",
                "alpha_3" =>  "KWT",
                "phone_code" =>  "965",
                "currency" =>  "KWD",
                "currency_name" =>  "Kuwaiti dinar",
                "currency_symbol" =>  "\u0643.\u062f",
                "emoji" =>  "\ud83c\uddf0\ud83c\uddfc",
                "states" =>  [
                    [
                        "id" =>  977,
                        "name" =>  "Al Ahmadi"
                    ],
                    [
                        "id" =>  975,
                        "name" =>  "Al Farwaniyah"
                    ],
                    [
                        "id" =>  972,
                        "name" =>  "Al Jahra"
                    ],
                    [
                        "id" =>  976,
                        "name" =>  "Capital"
                    ],
                    [
                        "id" =>  973,
                        "name" =>  "Hawalli"
                    ],
                    [
                        "id" =>  974,
                        "name" =>  "Mubarak Al-Kabeer"
                    ]
                ]
            ],
            [
                "name" =>  "Kyrgyzstan",
                "numeric_code" =>  "417",
                "alpha_2" =>  "KG",
                "alpha_3" =>  "KGZ",
                "phone_code" =>  "996",
                "currency" =>  "KGS",
                "currency_name" =>  "Kyrgyzstani som",
                "currency_symbol" =>  "\u043b\u0432",
                "emoji" =>  "\ud83c\uddf0\ud83c\uddec",
                "states" =>  [
                    [
                        "id" =>  998,
                        "name" =>  "Batken Region"
                    ],
                    [
                        "id" =>  1001,
                        "name" =>  "Bishkek"
                    ],
                    [
                        "id" =>  1004,
                        "name" =>  "Chuy Region"
                    ],
                    [
                        "id" =>  1002,
                        "name" =>  "Issyk-Kul Region"
                    ],
                    [
                        "id" =>  1000,
                        "name" =>  "Jalal-Abad Region"
                    ],
                    [
                        "id" =>  999,
                        "name" =>  "Naryn Region"
                    ],
                    [
                        "id" =>  1003,
                        "name" =>  "Osh"
                    ],
                    [
                        "id" =>  1005,
                        "name" =>  "Osh Region"
                    ],
                    [
                        "id" =>  997,
                        "name" =>  "Talas Region"
                    ]
                ]
            ],
            [
                "name" =>  "Laos",
                "numeric_code" =>  "418",
                "alpha_2" =>  "LA",
                "alpha_3" =>  "LAO",
                "phone_code" =>  "856",
                "currency" =>  "LAK",
                "currency_name" =>  "Lao kip",
                "currency_symbol" =>  "\u20ad",
                "emoji" =>  "\ud83c\uddf1\ud83c\udde6",
                "states" =>  [
                    [
                        "id" =>  982,
                        "name" =>  "Attapeu Province"
                    ],
                    [
                        "id" =>  991,
                        "name" =>  "Bokeo Province"
                    ],
                    [
                        "id" =>  985,
                        "name" =>  "Bolikhamsai Province"
                    ],
                    [
                        "id" =>  996,
                        "name" =>  "Champasak Province"
                    ],
                    [
                        "id" =>  989,
                        "name" =>  "Houaphanh Province"
                    ],
                    [
                        "id" =>  986,
                        "name" =>  "Khammouane Province"
                    ],
                    [
                        "id" =>  992,
                        "name" =>  "Luang Namtha Province"
                    ],
                    [
                        "id" =>  978,
                        "name" =>  "Luang Prabang Province"
                    ],
                    [
                        "id" =>  988,
                        "name" =>  "Oudomxay Province"
                    ],
                    [
                        "id" =>  987,
                        "name" =>  "Phongsaly Province"
                    ],
                    [
                        "id" =>  993,
                        "name" =>  "Sainyabuli Province"
                    ],
                    [
                        "id" =>  981,
                        "name" =>  "Salavan Province"
                    ],
                    [
                        "id" =>  990,
                        "name" =>  "Savannakhet Province"
                    ],
                    [
                        "id" =>  984,
                        "name" =>  "Sekong Province"
                    ],
                    [
                        "id" =>  979,
                        "name" =>  "Vientiane Prefecture"
                    ],
                    [
                        "id" =>  980,
                        "name" =>  "Vientiane Province"
                    ],
                    [
                        "id" =>  994,
                        "name" =>  "Xaisomboun"
                    ],
                    [
                        "id" =>  983,
                        "name" =>  "Xaisomboun Province"
                    ],
                    [
                        "id" =>  995,
                        "name" =>  "Xiangkhouang Province"
                    ]
                ]
            ],
            [
                "name" =>  "Latvia",
                "numeric_code" =>  "428",
                "alpha_2" =>  "LV",
                "alpha_3" =>  "LVA",
                "phone_code" =>  "371",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf1\ud83c\uddfb",
                "states" =>  [
                    [
                        "id" =>  4445,
                        "name" =>  "Aglona Municipality"
                    ],
                    [
                        "id" =>  4472,
                        "name" =>  "Aizkraukle Municipality"
                    ],
                    [
                        "id" =>  4496,
                        "name" =>  "Aizpute Municipality"
                    ],
                    [
                        "id" =>  4499,
                        "name" =>  "Akn\u012bste Municipality"
                    ],
                    [
                        "id" =>  4484,
                        "name" =>  "Aloja Municipality"
                    ],
                    [
                        "id" =>  4485,
                        "name" =>  "Alsunga Municipality"
                    ],
                    [
                        "id" =>  4487,
                        "name" =>  "Al\u016bksne Municipality"
                    ],
                    [
                        "id" =>  4497,
                        "name" =>  "Amata Municipality"
                    ],
                    [
                        "id" =>  4457,
                        "name" =>  "Ape Municipality"
                    ],
                    [
                        "id" =>  4481,
                        "name" =>  "Auce Municipality"
                    ],
                    [
                        "id" =>  4427,
                        "name" =>  "Bab\u012bte Municipality"
                    ],
                    [
                        "id" =>  4482,
                        "name" =>  "Baldone Municipality"
                    ],
                    [
                        "id" =>  4498,
                        "name" =>  "Baltinava Municipality"
                    ],
                    [
                        "id" =>  4505,
                        "name" =>  "Balvi Municipality"
                    ],
                    [
                        "id" =>  4465,
                        "name" =>  "Bauska Municipality"
                    ],
                    [
                        "id" =>  4471,
                        "name" =>  "Bever\u012bna Municipality"
                    ],
                    [
                        "id" =>  4468,
                        "name" =>  "Broc\u0113ni Municipality"
                    ],
                    [
                        "id" =>  4411,
                        "name" =>  "Burtnieki Municipality"
                    ],
                    [
                        "id" =>  4454,
                        "name" =>  "Carnikava Municipality"
                    ],
                    [
                        "id" =>  4469,
                        "name" =>  "C\u0113sis Municipality"
                    ],
                    [
                        "id" =>  4414,
                        "name" =>  "Cesvaine Municipality"
                    ],
                    [
                        "id" =>  4410,
                        "name" =>  "Cibla Municipality"
                    ],
                    [
                        "id" =>  4504,
                        "name" =>  "Dagda Municipality"
                    ],
                    [
                        "id" =>  4463,
                        "name" =>  "Daugavpils"
                    ],
                    [
                        "id" =>  4492,
                        "name" =>  "Daugavpils Municipality"
                    ],
                    [
                        "id" =>  4437,
                        "name" =>  "Dobele Municipality"
                    ],
                    [
                        "id" =>  4428,
                        "name" =>  "Dundaga Municipality"
                    ],
                    [
                        "id" =>  4458,
                        "name" =>  "Durbe Municipality"
                    ],
                    [
                        "id" =>  4448,
                        "name" =>  "Engure Municipality"
                    ],
                    [
                        "id" =>  4444,
                        "name" =>  "\u0112rg\u013ci Municipality"
                    ],
                    [
                        "id" =>  4510,
                        "name" =>  "Garkalne Municipality"
                    ],
                    [
                        "id" =>  4470,
                        "name" =>  "Grobi\u0146a Municipality"
                    ],
                    [
                        "id" =>  4400,
                        "name" =>  "Gulbene Municipality"
                    ],
                    [
                        "id" =>  4441,
                        "name" =>  "Iecava Municipality"
                    ],
                    [
                        "id" =>  4511,
                        "name" =>  "Ik\u0161\u0137ile Municipality"
                    ],
                    [
                        "id" =>  4399,
                        "name" =>  "Il\u016bkste Municipality"
                    ],
                    [
                        "id" =>  4449,
                        "name" =>  "In\u010dukalns Municipality"
                    ],
                    [
                        "id" =>  4475,
                        "name" =>  "Jaunjelgava Municipality"
                    ],
                    [
                        "id" =>  4407,
                        "name" =>  "Jaunpiebalga Municipality"
                    ],
                    [
                        "id" =>  4489,
                        "name" =>  "Jaunpils Municipality"
                    ],
                    [
                        "id" =>  4464,
                        "name" =>  "J\u0113kabpils"
                    ],
                    [
                        "id" =>  4438,
                        "name" =>  "J\u0113kabpils Municipality"
                    ],
                    [
                        "id" =>  4500,
                        "name" =>  "Jelgava"
                    ],
                    [
                        "id" =>  4424,
                        "name" =>  "Jelgava Municipality"
                    ],
                    [
                        "id" =>  4446,
                        "name" =>  "J\u016brmala"
                    ],
                    [
                        "id" =>  4420,
                        "name" =>  "Kandava Municipality"
                    ],
                    [
                        "id" =>  4453,
                        "name" =>  "K\u0101rsava Municipality"
                    ],
                    [
                        "id" =>  4412,
                        "name" =>  "\u0136egums Municipality"
                    ],
                    [
                        "id" =>  4435,
                        "name" =>  "\u0136ekava Municipality"
                    ],
                    [
                        "id" =>  4495,
                        "name" =>  "Koc\u0113ni Municipality"
                    ],
                    [
                        "id" =>  4452,
                        "name" =>  "Koknese Municipality"
                    ],
                    [
                        "id" =>  4474,
                        "name" =>  "Kr\u0101slava Municipality"
                    ],
                    [
                        "id" =>  4422,
                        "name" =>  "Krimulda Municipality"
                    ],
                    [
                        "id" =>  4413,
                        "name" =>  "Krustpils Municipality"
                    ],
                    [
                        "id" =>  4490,
                        "name" =>  "Kuld\u012bga Municipality"
                    ],
                    [
                        "id" =>  4512,
                        "name" =>  "Lielv\u0101rde Municipality"
                    ],
                    [
                        "id" =>  4460,
                        "name" =>  "Liep\u0101ja"
                    ],
                    [
                        "id" =>  4488,
                        "name" =>  "L\u012bgatne Municipality"
                    ],
                    [
                        "id" =>  4418,
                        "name" =>  "Limba\u017ei Municipality"
                    ],
                    [
                        "id" =>  4401,
                        "name" =>  "L\u012bv\u0101ni Municipality"
                    ],
                    [
                        "id" =>  4419,
                        "name" =>  "Lub\u0101na Municipality"
                    ],
                    [
                        "id" =>  4501,
                        "name" =>  "Ludza Municipality"
                    ],
                    [
                        "id" =>  4433,
                        "name" =>  "Madona Municipality"
                    ],
                    [
                        "id" =>  4461,
                        "name" =>  "M\u0101lpils Municipality"
                    ],
                    [
                        "id" =>  4450,
                        "name" =>  "M\u0101rupe Municipality"
                    ],
                    [
                        "id" =>  4513,
                        "name" =>  "Mazsalaca Municipality"
                    ],
                    [
                        "id" =>  4451,
                        "name" =>  "M\u0113rsrags Municipality"
                    ],
                    [
                        "id" =>  4398,
                        "name" =>  "Nauk\u0161\u0113ni Municipality"
                    ],
                    [
                        "id" =>  4432,
                        "name" =>  "Nereta Municipality"
                    ],
                    [
                        "id" =>  4436,
                        "name" =>  "N\u012bca Municipality"
                    ],
                    [
                        "id" =>  4416,
                        "name" =>  "Ogre Municipality"
                    ],
                    [
                        "id" =>  4417,
                        "name" =>  "Olaine Municipality"
                    ],
                    [
                        "id" =>  4442,
                        "name" =>  "Ozolnieki Municipality"
                    ],
                    [
                        "id" =>  4507,
                        "name" =>  "P\u0101rgauja Municipality"
                    ],
                    [
                        "id" =>  4467,
                        "name" =>  "P\u0101vilosta Municipality"
                    ],
                    [
                        "id" =>  4405,
                        "name" =>  "P\u013cavi\u0146as Municipality"
                    ],
                    [
                        "id" =>  4483,
                        "name" =>  "Prei\u013ci Municipality"
                    ],
                    [
                        "id" =>  4429,
                        "name" =>  "Priekule Municipality"
                    ],
                    [
                        "id" =>  4506,
                        "name" =>  "Prieku\u013ci Municipality"
                    ],
                    [
                        "id" =>  4479,
                        "name" =>  "Rauna Municipality"
                    ],
                    [
                        "id" =>  4509,
                        "name" =>  "R\u0113zekne"
                    ],
                    [
                        "id" =>  4455,
                        "name" =>  "R\u0113zekne Municipality"
                    ],
                    [
                        "id" =>  4502,
                        "name" =>  "Riebi\u0146i Municipality"
                    ],
                    [
                        "id" =>  4491,
                        "name" =>  "Riga"
                    ],
                    [
                        "id" =>  4440,
                        "name" =>  "Roja Municipality"
                    ],
                    [
                        "id" =>  4493,
                        "name" =>  "Ropa\u017ei Municipality"
                    ],
                    [
                        "id" =>  4503,
                        "name" =>  "Rucava Municipality"
                    ],
                    [
                        "id" =>  4423,
                        "name" =>  "Rug\u0101ji Municipality"
                    ],
                    [
                        "id" =>  4426,
                        "name" =>  "R\u016bjiena Municipality"
                    ],
                    [
                        "id" =>  4404,
                        "name" =>  "Rund\u0101le Municipality"
                    ],
                    [
                        "id" =>  4434,
                        "name" =>  "Sala Municipality"
                    ],
                    [
                        "id" =>  4396,
                        "name" =>  "Salacgr\u012bva Municipality"
                    ],
                    [
                        "id" =>  4402,
                        "name" =>  "Salaspils Municipality"
                    ],
                    [
                        "id" =>  4439,
                        "name" =>  "Saldus Municipality"
                    ],
                    [
                        "id" =>  4443,
                        "name" =>  "Saulkrasti Municipality"
                    ],
                    [
                        "id" =>  4408,
                        "name" =>  "S\u0113ja Municipality"
                    ],
                    [
                        "id" =>  4476,
                        "name" =>  "Sigulda Municipality"
                    ],
                    [
                        "id" =>  4415,
                        "name" =>  "Skr\u012bveri Municipality"
                    ],
                    [
                        "id" =>  4447,
                        "name" =>  "Skrunda Municipality"
                    ],
                    [
                        "id" =>  4462,
                        "name" =>  "Smiltene Municipality"
                    ],
                    [
                        "id" =>  4478,
                        "name" =>  "Stopi\u0146i Municipality"
                    ],
                    [
                        "id" =>  4494,
                        "name" =>  "Stren\u010di Municipality"
                    ],
                    [
                        "id" =>  4459,
                        "name" =>  "Talsi Municipality"
                    ],
                    [
                        "id" =>  4480,
                        "name" =>  "T\u0113rvete Municipality"
                    ],
                    [
                        "id" =>  4409,
                        "name" =>  "Tukums Municipality"
                    ],
                    [
                        "id" =>  4508,
                        "name" =>  "Vai\u0146ode Municipality"
                    ],
                    [
                        "id" =>  4425,
                        "name" =>  "Valka Municipality"
                    ],
                    [
                        "id" =>  4473,
                        "name" =>  "Valmiera"
                    ],
                    [
                        "id" =>  4431,
                        "name" =>  "Varak\u013c\u0101ni Municipality"
                    ],
                    [
                        "id" =>  4406,
                        "name" =>  "V\u0101rkava Municipality"
                    ],
                    [
                        "id" =>  4466,
                        "name" =>  "Vecpiebalga Municipality"
                    ],
                    [
                        "id" =>  4397,
                        "name" =>  "Vecumnieki Municipality"
                    ],
                    [
                        "id" =>  4421,
                        "name" =>  "Ventspils"
                    ],
                    [
                        "id" =>  4403,
                        "name" =>  "Ventspils Municipality"
                    ],
                    [
                        "id" =>  4456,
                        "name" =>  "Vies\u012bte Municipality"
                    ],
                    [
                        "id" =>  4477,
                        "name" =>  "Vi\u013caka Municipality"
                    ],
                    [
                        "id" =>  4486,
                        "name" =>  "Vi\u013c\u0101ni Municipality"
                    ],
                    [
                        "id" =>  4430,
                        "name" =>  "Zilupe Municipality"
                    ]
                ]
            ],
            [
                "name" =>  "Lebanon",
                "numeric_code" =>  "422",
                "alpha_2" =>  "LB",
                "alpha_3" =>  "LBN",
                "phone_code" =>  "961",
                "currency" =>  "LBP",
                "currency_name" =>  "Lebanese pound",
                "currency_symbol" =>  "\u00a3",
                "emoji" =>  "\ud83c\uddf1\ud83c\udde7",
                "states" =>  [
                    [
                        "id" =>  2285,
                        "name" =>  "Akkar"
                    ],
                    [
                        "id" =>  2283,
                        "name" =>  "Baalbek-Hermel"
                    ],
                    [
                        "id" =>  2286,
                        "name" =>  "Beirut"
                    ],
                    [
                        "id" =>  2287,
                        "name" =>  "Beqaa"
                    ],
                    [
                        "id" =>  2282,
                        "name" =>  "Mount Lebanon"
                    ],
                    [
                        "id" =>  2288,
                        "name" =>  "Nabatieh"
                    ],
                    [
                        "id" =>  2284,
                        "name" =>  "North"
                    ],
                    [
                        "id" =>  2281,
                        "name" =>  "South"
                    ]
                ]
            ],
            [
                "name" =>  "Lesotho",
                "numeric_code" =>  "426",
                "alpha_2" =>  "LS",
                "alpha_3" =>  "LSO",
                "phone_code" =>  "266",
                "currency" =>  "LSL",
                "currency_name" =>  "Lesotho loti",
                "currency_symbol" =>  "L",
                "emoji" =>  "\ud83c\uddf1\ud83c\uddf8",
                "states" =>  [
                    [
                        "id" =>  3030,
                        "name" =>  "Berea District"
                    ],
                    [
                        "id" =>  3029,
                        "name" =>  "Butha-Buthe District"
                    ],
                    [
                        "id" =>  3026,
                        "name" =>  "Leribe District"
                    ],
                    [
                        "id" =>  3022,
                        "name" =>  "Mafeteng District"
                    ],
                    [
                        "id" =>  3028,
                        "name" =>  "Maseru District"
                    ],
                    [
                        "id" =>  3023,
                        "name" =>  "Mohale's Hoek District"
                    ],
                    [
                        "id" =>  3024,
                        "name" =>  "Mokhotlong District"
                    ],
                    [
                        "id" =>  3025,
                        "name" =>  "Qacha's Nek District"
                    ],
                    [
                        "id" =>  3027,
                        "name" =>  "Quthing District"
                    ],
                    [
                        "id" =>  3031,
                        "name" =>  "Thaba-Tseka District"
                    ]
                ]
            ],
            [
                "name" =>  "Liberia",
                "numeric_code" =>  "430",
                "alpha_2" =>  "LR",
                "alpha_3" =>  "LBR",
                "phone_code" =>  "231",
                "currency" =>  "LRD",
                "currency_name" =>  "Liberian dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf1\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  3041,
                        "name" =>  "Bomi County"
                    ],
                    [
                        "id" =>  3034,
                        "name" =>  "Bong County"
                    ],
                    [
                        "id" =>  3044,
                        "name" =>  "Gbarpolu County"
                    ],
                    [
                        "id" =>  3040,
                        "name" =>  "Grand Bassa County"
                    ],
                    [
                        "id" =>  3036,
                        "name" =>  "Grand Cape Mount County"
                    ],
                    [
                        "id" =>  3039,
                        "name" =>  "Grand Gedeh County"
                    ],
                    [
                        "id" =>  3045,
                        "name" =>  "Grand Kru County"
                    ],
                    [
                        "id" =>  3037,
                        "name" =>  "Lofa County"
                    ],
                    [
                        "id" =>  3043,
                        "name" =>  "Margibi County"
                    ],
                    [
                        "id" =>  3042,
                        "name" =>  "Maryland County"
                    ],
                    [
                        "id" =>  3032,
                        "name" =>  "Montserrado County"
                    ],
                    [
                        "id" =>  3046,
                        "name" =>  "Nimba"
                    ],
                    [
                        "id" =>  3033,
                        "name" =>  "River Cess County"
                    ],
                    [
                        "id" =>  3038,
                        "name" =>  "River Gee County"
                    ],
                    [
                        "id" =>  3035,
                        "name" =>  "Sinoe County"
                    ]
                ]
            ],
            [
                "name" =>  "Libya",
                "numeric_code" =>  "434",
                "alpha_2" =>  "LY",
                "alpha_3" =>  "LBY",
                "phone_code" =>  "218",
                "currency" =>  "LYD",
                "currency_name" =>  "Libyan dinar",
                "currency_symbol" =>  "\u062f.\u0644",
                "emoji" =>  "\ud83c\uddf1\ud83c\uddfe",
                "states" =>  [
                    [
                        "id" =>  2964,
                        "name" =>  "Al Wahat District"
                    ],
                    [
                        "id" =>  2981,
                        "name" =>  "Benghazi"
                    ],
                    [
                        "id" =>  2966,
                        "name" =>  "Derna District"
                    ],
                    [
                        "id" =>  2969,
                        "name" =>  "Ghat District"
                    ],
                    [
                        "id" =>  2980,
                        "name" =>  "Jabal al Akhdar"
                    ],
                    [
                        "id" =>  2974,
                        "name" =>  "Jabal al Gharbi District"
                    ],
                    [
                        "id" =>  2979,
                        "name" =>  "Jafara"
                    ],
                    [
                        "id" =>  2970,
                        "name" =>  "Jufra"
                    ],
                    [
                        "id" =>  2972,
                        "name" =>  "Kufra District"
                    ],
                    [
                        "id" =>  2968,
                        "name" =>  "Marj District"
                    ],
                    [
                        "id" =>  2978,
                        "name" =>  "Misrata District"
                    ],
                    [
                        "id" =>  2961,
                        "name" =>  "Murqub"
                    ],
                    [
                        "id" =>  2967,
                        "name" =>  "Murzuq District"
                    ],
                    [
                        "id" =>  2976,
                        "name" =>  "Nalut District"
                    ],
                    [
                        "id" =>  2962,
                        "name" =>  "Nuqat al Khams"
                    ],
                    [
                        "id" =>  2965,
                        "name" =>  "Sabha District"
                    ],
                    [
                        "id" =>  2977,
                        "name" =>  "Sirte District"
                    ],
                    [
                        "id" =>  2971,
                        "name" =>  "Tripoli District"
                    ],
                    [
                        "id" =>  2973,
                        "name" =>  "Wadi al Hayaa District"
                    ],
                    [
                        "id" =>  2975,
                        "name" =>  "Wadi al Shatii District"
                    ],
                    [
                        "id" =>  2963,
                        "name" =>  "Zawiya District"
                    ]
                ]
            ],
            [
                "name" =>  "Liechtenstein",
                "numeric_code" =>  "438",
                "alpha_2" =>  "LI",
                "alpha_3" =>  "LIE",
                "phone_code" =>  "423",
                "currency" =>  "CHF",
                "currency_name" =>  "Swiss franc",
                "currency_symbol" =>  "CHf",
                "emoji" =>  "\ud83c\uddf1\ud83c\uddee",
                "states" =>  [
                    [
                        "id" =>  458,
                        "name" =>  "Balzers"
                    ],
                    [
                        "id" =>  451,
                        "name" =>  "Eschen"
                    ],
                    [
                        "id" =>  457,
                        "name" =>  "Gamprin"
                    ],
                    [
                        "id" =>  455,
                        "name" =>  "Mauren"
                    ],
                    [
                        "id" =>  454,
                        "name" =>  "Planken"
                    ],
                    [
                        "id" =>  453,
                        "name" =>  "Ruggell"
                    ],
                    [
                        "id" =>  450,
                        "name" =>  "Schaan"
                    ],
                    [
                        "id" =>  449,
                        "name" =>  "Schellenberg"
                    ],
                    [
                        "id" =>  459,
                        "name" =>  "Triesen"
                    ],
                    [
                        "id" =>  456,
                        "name" =>  "Triesenberg"
                    ],
                    [
                        "id" =>  452,
                        "name" =>  "Vaduz"
                    ]
                ]
            ],
            [
                "name" =>  "Lithuania",
                "numeric_code" =>  "440",
                "alpha_2" =>  "LT",
                "alpha_3" =>  "LTU",
                "phone_code" =>  "370",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf1\ud83c\uddf9",
                "states" =>  [
                    [
                        "id" =>  1561,
                        "name" =>  "Akmen\u0117 District Municipality"
                    ],
                    [
                        "id" =>  1605,
                        "name" =>  "Alytus City Municipality"
                    ],
                    [
                        "id" =>  1574,
                        "name" =>  "Alytus County"
                    ],
                    [
                        "id" =>  1599,
                        "name" =>  "Alytus District Municipality"
                    ],
                    [
                        "id" =>  1603,
                        "name" =>  "Bir\u0161tonas Municipality"
                    ],
                    [
                        "id" =>  1566,
                        "name" =>  "Bir\u017eai District Municipality"
                    ],
                    [
                        "id" =>  1579,
                        "name" =>  "Druskininkai municipality"
                    ],
                    [
                        "id" =>  1559,
                        "name" =>  "Elektr\u0117nai municipality"
                    ],
                    [
                        "id" =>  1562,
                        "name" =>  "Ignalina District Municipality"
                    ],
                    [
                        "id" =>  1567,
                        "name" =>  "Jonava District Municipality"
                    ],
                    [
                        "id" =>  1581,
                        "name" =>  "Joni\u0161kis District Municipality"
                    ],
                    [
                        "id" =>  1555,
                        "name" =>  "Jurbarkas District Municipality"
                    ],
                    [
                        "id" =>  1583,
                        "name" =>  "Kai\u0161iadorys District Municipality"
                    ],
                    [
                        "id" =>  1591,
                        "name" =>  "Kalvarija municipality"
                    ],
                    [
                        "id" =>  1580,
                        "name" =>  "Kaunas City Municipality"
                    ],
                    [
                        "id" =>  1556,
                        "name" =>  "Kaunas County"
                    ],
                    [
                        "id" =>  1565,
                        "name" =>  "Kaunas District Municipality"
                    ],
                    [
                        "id" =>  1575,
                        "name" =>  "Kazl\u0173 R\u016bda municipality"
                    ],
                    [
                        "id" =>  1584,
                        "name" =>  "K\u0117dainiai District Municipality"
                    ],
                    [
                        "id" =>  1618,
                        "name" =>  "Kelm\u0117 District Municipality"
                    ],
                    [
                        "id" =>  1597,
                        "name" =>  "Klaipeda City Municipality"
                    ],
                    [
                        "id" =>  1600,
                        "name" =>  "Klaip\u0117da County"
                    ],
                    [
                        "id" =>  1604,
                        "name" =>  "Klaip\u0117da District Municipality"
                    ],
                    [
                        "id" =>  1571,
                        "name" =>  "Kretinga District Municipality"
                    ],
                    [
                        "id" =>  1585,
                        "name" =>  "Kupi\u0161kis District Municipality"
                    ],
                    [
                        "id" =>  1611,
                        "name" =>  "Lazdijai District Municipality"
                    ],
                    [
                        "id" =>  1570,
                        "name" =>  "Marijampol\u0117 County"
                    ],
                    [
                        "id" =>  1610,
                        "name" =>  "Marijampol\u0117 Municipality"
                    ],
                    [
                        "id" =>  1557,
                        "name" =>  "Ma\u017eeikiai District Municipality"
                    ],
                    [
                        "id" =>  1582,
                        "name" =>  "Mol\u0117tai District Municipality"
                    ],
                    [
                        "id" =>  1563,
                        "name" =>  "Neringa Municipality"
                    ],
                    [
                        "id" =>  1612,
                        "name" =>  "Pag\u0117giai municipality"
                    ],
                    [
                        "id" =>  1595,
                        "name" =>  "Pakruojis District Municipality"
                    ],
                    [
                        "id" =>  1588,
                        "name" =>  "Palanga City Municipality"
                    ],
                    [
                        "id" =>  1589,
                        "name" =>  "Panev\u0117\u017eys City Municipality"
                    ],
                    [
                        "id" =>  1558,
                        "name" =>  "Panev\u0117\u017eys County"
                    ],
                    [
                        "id" =>  1614,
                        "name" =>  "Panev\u0117\u017eys District Municipality"
                    ],
                    [
                        "id" =>  1616,
                        "name" =>  "Pasvalys District Municipality"
                    ],
                    [
                        "id" =>  1553,
                        "name" =>  "Plung\u0117 District Municipality"
                    ],
                    [
                        "id" =>  1578,
                        "name" =>  "Prienai District Municipality"
                    ],
                    [
                        "id" =>  1568,
                        "name" =>  "Radvili\u0161kis District Municipality"
                    ],
                    [
                        "id" =>  1587,
                        "name" =>  "Raseiniai District Municipality"
                    ],
                    [
                        "id" =>  1590,
                        "name" =>  "Rietavas municipality"
                    ],
                    [
                        "id" =>  1615,
                        "name" =>  "Roki\u0161kis District Municipality"
                    ],
                    [
                        "id" =>  1576,
                        "name" =>  "\u0160akiai District Municipality"
                    ],
                    [
                        "id" =>  1577,
                        "name" =>  "\u0160al\u010dininkai District Municipality"
                    ],
                    [
                        "id" =>  1609,
                        "name" =>  "\u0160iauliai City Municipality"
                    ],
                    [
                        "id" =>  1586,
                        "name" =>  "\u0160iauliai County"
                    ],
                    [
                        "id" =>  1554,
                        "name" =>  "\u0160iauliai District Municipality"
                    ],
                    [
                        "id" =>  1613,
                        "name" =>  "\u0160ilal\u0117 District Municipality"
                    ],
                    [
                        "id" =>  1607,
                        "name" =>  "\u0160ilut\u0117 District Municipality"
                    ],
                    [
                        "id" =>  1594,
                        "name" =>  "\u0160irvintos District Municipality"
                    ],
                    [
                        "id" =>  1617,
                        "name" =>  "Skuodas District Municipality"
                    ],
                    [
                        "id" =>  1560,
                        "name" =>  "\u0160ven\u010dionys District Municipality"
                    ],
                    [
                        "id" =>  1573,
                        "name" =>  "Taurag\u0117 County"
                    ],
                    [
                        "id" =>  1572,
                        "name" =>  "Taurag\u0117 District Municipality"
                    ],
                    [
                        "id" =>  1569,
                        "name" =>  "Tel\u0161iai County"
                    ],
                    [
                        "id" =>  1608,
                        "name" =>  "Tel\u0161iai District Municipality"
                    ],
                    [
                        "id" =>  1593,
                        "name" =>  "Trakai District Municipality"
                    ],
                    [
                        "id" =>  1596,
                        "name" =>  "Ukmerg\u0117 District Municipality"
                    ],
                    [
                        "id" =>  1621,
                        "name" =>  "Utena County"
                    ],
                    [
                        "id" =>  1598,
                        "name" =>  "Utena District Municipality"
                    ],
                    [
                        "id" =>  1602,
                        "name" =>  "Var\u0117na District Municipality"
                    ],
                    [
                        "id" =>  1620,
                        "name" =>  "Vilkavi\u0161kis District Municipality"
                    ],
                    [
                        "id" =>  1606,
                        "name" =>  "Vilnius City Municipality"
                    ],
                    [
                        "id" =>  1601,
                        "name" =>  "Vilnius County"
                    ],
                    [
                        "id" =>  1592,
                        "name" =>  "Vilnius District Municipality"
                    ],
                    [
                        "id" =>  1564,
                        "name" =>  "Visaginas Municipality"
                    ],
                    [
                        "id" =>  1619,
                        "name" =>  "Zarasai District Municipality"
                    ]
                ]
            ],
            [
                "name" =>  "Luxembourg",
                "numeric_code" =>  "442",
                "alpha_2" =>  "LU",
                "alpha_3" =>  "LUX",
                "phone_code" =>  "352",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf1\ud83c\uddfa",
                "states" =>  [
                    [
                        "id" =>  1518,
                        "name" =>  "Canton of Capellen"
                    ],
                    [
                        "id" =>  1521,
                        "name" =>  "Canton of Clervaux"
                    ],
                    [
                        "id" =>  1513,
                        "name" =>  "Canton of Diekirch"
                    ],
                    [
                        "id" =>  1515,
                        "name" =>  "Canton of Echternach"
                    ],
                    [
                        "id" =>  1517,
                        "name" =>  "Canton of Esch-sur-Alzette"
                    ],
                    [
                        "id" =>  1525,
                        "name" =>  "Canton of Grevenmacher"
                    ],
                    [
                        "id" =>  1527,
                        "name" =>  "Canton of Luxembourg"
                    ],
                    [
                        "id" =>  1522,
                        "name" =>  "Canton of Mersch"
                    ],
                    [
                        "id" =>  1516,
                        "name" =>  "Canton of Redange"
                    ],
                    [
                        "id" =>  1519,
                        "name" =>  "Canton of Remich"
                    ],
                    [
                        "id" =>  1523,
                        "name" =>  "Canton of Vianden"
                    ],
                    [
                        "id" =>  1526,
                        "name" =>  "Canton of Wiltz"
                    ],
                    [
                        "id" =>  1524,
                        "name" =>  "Diekirch District"
                    ],
                    [
                        "id" =>  1520,
                        "name" =>  "Grevenmacher District"
                    ],
                    [
                        "id" =>  1514,
                        "name" =>  "Luxembourg District"
                    ]
                ]
            ],
            [
                "name" =>  "Macau S.A.R.",
                "numeric_code" =>  "446",
                "alpha_2" =>  "MO",
                "alpha_3" =>  "MAC",
                "phone_code" =>  "853",
                "currency" =>  "MOP",
                "currency_name" =>  "Macanese pataca",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddf4",
                "states" =>  []
            ],
            [
                "name" =>  "Macedonia",
                "numeric_code" =>  "807",
                "alpha_2" =>  "MK",
                "alpha_3" =>  "MKD",
                "phone_code" =>  "389",
                "currency" =>  "MKD",
                "currency_name" =>  "Denar",
                "currency_symbol" =>  "\u0434\u0435\u043d",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddf0",
                "states" =>  [
                    [
                        "id" =>  703,
                        "name" =>  "Aerodrom Municipality"
                    ],
                    [
                        "id" =>  656,
                        "name" =>  "Ara\u010dinovo Municipality"
                    ],
                    [
                        "id" =>  716,
                        "name" =>  "Berovo Municipality"
                    ],
                    [
                        "id" =>  679,
                        "name" =>  "Bitola Municipality"
                    ],
                    [
                        "id" =>  649,
                        "name" =>  "Bogdanci Municipality"
                    ],
                    [
                        "id" =>  721,
                        "name" =>  "Bogovinje Municipality"
                    ],
                    [
                        "id" =>  652,
                        "name" =>  "Bosilovo Municipality"
                    ],
                    [
                        "id" =>  660,
                        "name" =>  "Brvenica Municipality"
                    ],
                    [
                        "id" =>  694,
                        "name" =>  "Butel Municipality"
                    ],
                    [
                        "id" =>  704,
                        "name" =>  "\u010cair Municipality"
                    ],
                    [
                        "id" =>  676,
                        "name" =>  "\u010ca\u0161ka Municipality"
                    ],
                    [
                        "id" =>  702,
                        "name" =>  "Centar Municipality"
                    ],
                    [
                        "id" =>  720,
                        "name" =>  "Centar \u017dupa Municipality"
                    ],
                    [
                        "id" =>  644,
                        "name" =>  "\u010ce\u0161inovo-Oble\u0161evo Municipality"
                    ],
                    [
                        "id" =>  715,
                        "name" =>  "\u010cu\u010der-Sandevo Municipality"
                    ],
                    [
                        "id" =>  645,
                        "name" =>  "Debarca Municipality"
                    ],
                    [
                        "id" =>  695,
                        "name" =>  "Del\u010devo Municipality"
                    ],
                    [
                        "id" =>  687,
                        "name" =>  "Demir Hisar Municipality"
                    ],
                    [
                        "id" =>  655,
                        "name" =>  "Demir Kapija Municipality"
                    ],
                    [
                        "id" =>  697,
                        "name" =>  "Dojran Municipality"
                    ],
                    [
                        "id" =>  675,
                        "name" =>  "Dolneni Municipality"
                    ],
                    [
                        "id" =>  657,
                        "name" =>  "Drugovo Municipality"
                    ],
                    [
                        "id" =>  707,
                        "name" =>  "Gazi Baba Municipality"
                    ],
                    [
                        "id" =>  648,
                        "name" =>  "Gevgelija Municipality"
                    ],
                    [
                        "id" =>  722,
                        "name" =>  "Gjor\u010de Petrov Municipality"
                    ],
                    [
                        "id" =>  693,
                        "name" =>  "Gostivar Municipality"
                    ],
                    [
                        "id" =>  708,
                        "name" =>  "Gradsko Municipality"
                    ],
                    [
                        "id" =>  684,
                        "name" =>  "Greater Skopje"
                    ],
                    [
                        "id" =>  690,
                        "name" =>  "Ilinden Municipality"
                    ],
                    [
                        "id" =>  678,
                        "name" =>  "Jegunovce Municipality"
                    ],
                    [
                        "id" =>  674,
                        "name" =>  "Karbinci"
                    ],
                    [
                        "id" =>  681,
                        "name" =>  "Karpo\u0161 Municipality"
                    ],
                    [
                        "id" =>  713,
                        "name" =>  "Kavadarci Municipality"
                    ],
                    [
                        "id" =>  688,
                        "name" =>  "Ki\u010devo Municipality"
                    ],
                    [
                        "id" =>  686,
                        "name" =>  "Kisela Voda Municipality"
                    ],
                    [
                        "id" =>  723,
                        "name" =>  "Ko\u010dani Municipality"
                    ],
                    [
                        "id" =>  665,
                        "name" =>  "Kon\u010de Municipality"
                    ],
                    [
                        "id" =>  641,
                        "name" =>  "Kratovo Municipality"
                    ],
                    [
                        "id" =>  677,
                        "name" =>  "Kriva Palanka Municipality"
                    ],
                    [
                        "id" =>  647,
                        "name" =>  "Krivoga\u0161tani Municipality"
                    ],
                    [
                        "id" =>  714,
                        "name" =>  "Kru\u0161evo Municipality"
                    ],
                    [
                        "id" =>  683,
                        "name" =>  "Kumanovo Municipality"
                    ],
                    [
                        "id" =>  659,
                        "name" =>  "Lipkovo Municipality"
                    ],
                    [
                        "id" =>  705,
                        "name" =>  "Lozovo Municipality"
                    ],
                    [
                        "id" =>  701,
                        "name" =>  "Makedonska Kamenica Municipality"
                    ],
                    [
                        "id" =>  692,
                        "name" =>  "Makedonski Brod Municipality"
                    ],
                    [
                        "id" =>  669,
                        "name" =>  "Mavrovo and Rostu\u0161a Municipality"
                    ],
                    [
                        "id" =>  653,
                        "name" =>  "Mogila Municipality"
                    ],
                    [
                        "id" =>  664,
                        "name" =>  "Negotino Municipality"
                    ],
                    [
                        "id" =>  696,
                        "name" =>  "Novaci Municipality"
                    ],
                    [
                        "id" =>  718,
                        "name" =>  "Novo Selo Municipality"
                    ],
                    [
                        "id" =>  699,
                        "name" =>  "Ohrid Municipality"
                    ],
                    [
                        "id" =>  682,
                        "name" =>  "Oslomej Municipality"
                    ],
                    [
                        "id" =>  685,
                        "name" =>  "Peh\u010devo Municipality"
                    ],
                    [
                        "id" =>  698,
                        "name" =>  "Petrovec Municipality"
                    ],
                    [
                        "id" =>  670,
                        "name" =>  "Plasnica Municipality"
                    ],
                    [
                        "id" =>  666,
                        "name" =>  "Prilep Municipality"
                    ],
                    [
                        "id" =>  646,
                        "name" =>  "Probi\u0161tip Municipality"
                    ],
                    [
                        "id" =>  709,
                        "name" =>  "Radovi\u0161 Municipality"
                    ],
                    [
                        "id" =>  717,
                        "name" =>  "Rankovce Municipality"
                    ],
                    [
                        "id" =>  712,
                        "name" =>  "Resen Municipality"
                    ],
                    [
                        "id" =>  691,
                        "name" =>  "Rosoman Municipality"
                    ],
                    [
                        "id" =>  667,
                        "name" =>  "Saraj Municipality"
                    ],
                    [
                        "id" =>  719,
                        "name" =>  "Sopi\u0161te Municipality"
                    ],
                    [
                        "id" =>  643,
                        "name" =>  "Staro Nagori\u010dane Municipality"
                    ],
                    [
                        "id" =>  661,
                        "name" =>  "\u0160tip Municipality"
                    ],
                    [
                        "id" =>  700,
                        "name" =>  "Struga Municipality"
                    ],
                    [
                        "id" =>  710,
                        "name" =>  "Strumica Municipality"
                    ],
                    [
                        "id" =>  711,
                        "name" =>  "Studeni\u010dani Municipality"
                    ],
                    [
                        "id" =>  680,
                        "name" =>  "\u0160uto Orizari Municipality"
                    ],
                    [
                        "id" =>  640,
                        "name" =>  "Sveti Nikole Municipality"
                    ],
                    [
                        "id" =>  654,
                        "name" =>  "Tearce Municipality"
                    ],
                    [
                        "id" =>  663,
                        "name" =>  "Tetovo Municipality"
                    ],
                    [
                        "id" =>  671,
                        "name" =>  "Valandovo Municipality"
                    ],
                    [
                        "id" =>  658,
                        "name" =>  "Vasilevo Municipality"
                    ],
                    [
                        "id" =>  651,
                        "name" =>  "Veles Municipality"
                    ],
                    [
                        "id" =>  662,
                        "name" =>  "Vev\u010dani Municipality"
                    ],
                    [
                        "id" =>  672,
                        "name" =>  "Vinica Municipality"
                    ],
                    [
                        "id" =>  650,
                        "name" =>  "Vrane\u0161tica Municipality"
                    ],
                    [
                        "id" =>  689,
                        "name" =>  "Vrap\u010di\u0161te Municipality"
                    ],
                    [
                        "id" =>  642,
                        "name" =>  "Zajas Municipality"
                    ],
                    [
                        "id" =>  706,
                        "name" =>  "Zelenikovo Municipality"
                    ],
                    [
                        "id" =>  668,
                        "name" =>  "\u017delino Municipality"
                    ],
                    [
                        "id" =>  673,
                        "name" =>  "Zrnovci Municipality"
                    ]
                ]
            ],
            [
                "name" =>  "Madagascar",
                "numeric_code" =>  "450",
                "alpha_2" =>  "MG",
                "alpha_3" =>  "MDG",
                "phone_code" =>  "261",
                "currency" =>  "MGA",
                "currency_name" =>  "Malagasy ariary",
                "currency_symbol" =>  "Ar",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddec",
                "states" =>  [
                    [
                        "id" =>  2951,
                        "name" =>  "Antananarivo Province"
                    ],
                    [
                        "id" =>  2950,
                        "name" =>  "Antsiranana Province"
                    ],
                    [
                        "id" =>  2948,
                        "name" =>  "Fianarantsoa Province"
                    ],
                    [
                        "id" =>  2953,
                        "name" =>  "Mahajanga Province"
                    ],
                    [
                        "id" =>  2952,
                        "name" =>  "Toamasina Province"
                    ],
                    [
                        "id" =>  2949,
                        "name" =>  "Toliara Province"
                    ]
                ]
            ],
            [
                "name" =>  "Malawi",
                "numeric_code" =>  "454",
                "alpha_2" =>  "MW",
                "alpha_3" =>  "MWI",
                "phone_code" =>  "265",
                "currency" =>  "MWK",
                "currency_name" =>  "Malawian kwacha",
                "currency_symbol" =>  "MK",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddfc",
                "states" =>  [
                    [
                        "id" =>  3096,
                        "name" =>  "Balaka District"
                    ],
                    [
                        "id" =>  3102,
                        "name" =>  "Blantyre District"
                    ],
                    [
                        "id" =>  3092,
                        "name" =>  "Central Region"
                    ],
                    [
                        "id" =>  3107,
                        "name" =>  "Chikwawa District"
                    ],
                    [
                        "id" =>  3109,
                        "name" =>  "Chiradzulu District"
                    ],
                    [
                        "id" =>  3087,
                        "name" =>  "Chitipa district"
                    ],
                    [
                        "id" =>  3097,
                        "name" =>  "Dedza District"
                    ],
                    [
                        "id" =>  3090,
                        "name" =>  "Dowa District"
                    ],
                    [
                        "id" =>  3091,
                        "name" =>  "Karonga District"
                    ],
                    [
                        "id" =>  3094,
                        "name" =>  "Kasungu District"
                    ],
                    [
                        "id" =>  3093,
                        "name" =>  "Likoma District"
                    ],
                    [
                        "id" =>  3101,
                        "name" =>  "Lilongwe District"
                    ],
                    [
                        "id" =>  3082,
                        "name" =>  "Machinga District"
                    ],
                    [
                        "id" =>  3110,
                        "name" =>  "Mangochi District"
                    ],
                    [
                        "id" =>  3099,
                        "name" =>  "Mchinji District"
                    ],
                    [
                        "id" =>  3103,
                        "name" =>  "Mulanje District"
                    ],
                    [
                        "id" =>  3084,
                        "name" =>  "Mwanza District"
                    ],
                    [
                        "id" =>  3104,
                        "name" =>  "Mzimba District"
                    ],
                    [
                        "id" =>  3095,
                        "name" =>  "Nkhata Bay District"
                    ],
                    [
                        "id" =>  3100,
                        "name" =>  "Nkhotakota District"
                    ],
                    [
                        "id" =>  3105,
                        "name" =>  "Northern Region"
                    ],
                    [
                        "id" =>  3085,
                        "name" =>  "Nsanje District"
                    ],
                    [
                        "id" =>  3088,
                        "name" =>  "Ntcheu District"
                    ],
                    [
                        "id" =>  3111,
                        "name" =>  "Ntchisi District"
                    ],
                    [
                        "id" =>  3108,
                        "name" =>  "Phalombe District"
                    ],
                    [
                        "id" =>  3089,
                        "name" =>  "Rumphi District"
                    ],
                    [
                        "id" =>  3086,
                        "name" =>  "Salima District"
                    ],
                    [
                        "id" =>  3106,
                        "name" =>  "Southern Region"
                    ],
                    [
                        "id" =>  3098,
                        "name" =>  "Thyolo District"
                    ],
                    [
                        "id" =>  3083,
                        "name" =>  "Zomba District"
                    ]
                ]
            ],
            [
                "name" =>  "Malaysia",
                "numeric_code" =>  "458",
                "alpha_2" =>  "MY",
                "alpha_3" =>  "MYS",
                "phone_code" =>  "60",
                "currency" =>  "MYR",
                "currency_name" =>  "Malaysian ringgit",
                "currency_symbol" =>  "RM",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddfe",
                "states" =>  [
                    [
                        "id" =>  1950,
                        "name" =>  "Johor"
                    ],
                    [
                        "id" =>  1947,
                        "name" =>  "Kedah"
                    ],
                    [
                        "id" =>  1946,
                        "name" =>  "Kelantan"
                    ],
                    [
                        "id" =>  1949,
                        "name" =>  "Kuala Lumpur"
                    ],
                    [
                        "id" =>  1935,
                        "name" =>  "Labuan"
                    ],
                    [
                        "id" =>  1941,
                        "name" =>  "Malacca"
                    ],
                    [
                        "id" =>  1948,
                        "name" =>  "Negeri Sembilan"
                    ],
                    [
                        "id" =>  1940,
                        "name" =>  "Pahang"
                    ],
                    [
                        "id" =>  1939,
                        "name" =>  "Penang"
                    ],
                    [
                        "id" =>  1943,
                        "name" =>  "Perak"
                    ],
                    [
                        "id" =>  1938,
                        "name" =>  "Perlis"
                    ],
                    [
                        "id" =>  1945,
                        "name" =>  "Putrajaya"
                    ],
                    [
                        "id" =>  1936,
                        "name" =>  "Sabah"
                    ],
                    [
                        "id" =>  1937,
                        "name" =>  "Sarawak"
                    ],
                    [
                        "id" =>  1944,
                        "name" =>  "Selangor"
                    ],
                    [
                        "id" =>  1942,
                        "name" =>  "Terengganu"
                    ]
                ]
            ],
            [
                "name" =>  "Maldives",
                "numeric_code" =>  "462",
                "alpha_2" =>  "MV",
                "alpha_3" =>  "MDV",
                "phone_code" =>  "960",
                "currency" =>  "MVR",
                "currency_name" =>  "Maldivian rufiyaa",
                "currency_symbol" =>  "Rf",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddfb",
                "states" =>  [
                    [
                        "id" =>  2594,
                        "name" =>  "Addu Atoll"
                    ],
                    [
                        "id" =>  2587,
                        "name" =>  "Alif Alif Atoll"
                    ],
                    [
                        "id" =>  2600,
                        "name" =>  "Alif Dhaal Atoll"
                    ],
                    [
                        "id" =>  2604,
                        "name" =>  "Central Province"
                    ],
                    [
                        "id" =>  2590,
                        "name" =>  "Dhaalu Atoll"
                    ],
                    [
                        "id" =>  2599,
                        "name" =>  "Faafu Atoll"
                    ],
                    [
                        "id" =>  2598,
                        "name" =>  "Gaafu Alif Atoll"
                    ],
                    [
                        "id" =>  2603,
                        "name" =>  "Gaafu Dhaalu Atoll"
                    ],
                    [
                        "id" =>  2595,
                        "name" =>  "Gnaviyani Atoll"
                    ],
                    [
                        "id" =>  2586,
                        "name" =>  "Haa Alif Atoll"
                    ],
                    [
                        "id" =>  2597,
                        "name" =>  "Haa Dhaalu Atoll"
                    ],
                    [
                        "id" =>  2596,
                        "name" =>  "Kaafu Atoll"
                    ],
                    [
                        "id" =>  2601,
                        "name" =>  "Laamu Atoll"
                    ],
                    [
                        "id" =>  2607,
                        "name" =>  "Lhaviyani Atoll"
                    ],
                    [
                        "id" =>  2609,
                        "name" =>  "Mal\u00e9"
                    ],
                    [
                        "id" =>  2608,
                        "name" =>  "Meemu Atoll"
                    ],
                    [
                        "id" =>  2592,
                        "name" =>  "Noonu Atoll"
                    ],
                    [
                        "id" =>  2589,
                        "name" =>  "North Central Province"
                    ],
                    [
                        "id" =>  2588,
                        "name" =>  "North Province"
                    ],
                    [
                        "id" =>  2602,
                        "name" =>  "Raa Atoll"
                    ],
                    [
                        "id" =>  2585,
                        "name" =>  "Shaviyani Atoll"
                    ],
                    [
                        "id" =>  2606,
                        "name" =>  "South Central Province"
                    ],
                    [
                        "id" =>  2605,
                        "name" =>  "South Province"
                    ],
                    [
                        "id" =>  2591,
                        "name" =>  "Thaa Atoll"
                    ],
                    [
                        "id" =>  2593,
                        "name" =>  "Upper South Province"
                    ],
                    [
                        "id" =>  2584,
                        "name" =>  "Vaavu Atoll"
                    ]
                ]
            ],
            [
                "name" =>  "Mali",
                "numeric_code" =>  "466",
                "alpha_2" =>  "ML",
                "alpha_3" =>  "MLI",
                "phone_code" =>  "223",
                "currency" =>  "XOF",
                "currency_name" =>  "West African CFA franc",
                "currency_symbol" =>  "CFA",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddf1",
                "states" =>  [
                    [
                        "id" =>  253,
                        "name" =>  "Bamako"
                    ],
                    [
                        "id" =>  258,
                        "name" =>  "Gao Region"
                    ],
                    [
                        "id" =>  252,
                        "name" =>  "Kayes Region"
                    ],
                    [
                        "id" =>  257,
                        "name" =>  "Kidal Region"
                    ],
                    [
                        "id" =>  250,
                        "name" =>  "Koulikoro Region"
                    ],
                    [
                        "id" =>  251,
                        "name" =>  "M\u00e9naka Region"
                    ],
                    [
                        "id" =>  255,
                        "name" =>  "Mopti Region"
                    ],
                    [
                        "id" =>  249,
                        "name" =>  "S\u00e9gou Region"
                    ],
                    [
                        "id" =>  254,
                        "name" =>  "Sikasso Region"
                    ],
                    [
                        "id" =>  256,
                        "name" =>  "Taoud\u00e9nit Region"
                    ],
                    [
                        "id" =>  248,
                        "name" =>  "Tombouctou Region"
                    ]
                ]
            ],
            [
                "name" =>  "Malta",
                "numeric_code" =>  "470",
                "alpha_2" =>  "MT",
                "alpha_3" =>  "MLT",
                "phone_code" =>  "356",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddf9",
                "states" =>  [
                    [
                        "id" =>  110,
                        "name" =>  "Attard"
                    ],
                    [
                        "id" =>  108,
                        "name" =>  "Balzan"
                    ],
                    [
                        "id" =>  107,
                        "name" =>  "Birgu"
                    ],
                    [
                        "id" =>  97,
                        "name" =>  "Birkirkara"
                    ],
                    [
                        "id" =>  88,
                        "name" =>  "Bir\u017cebbu\u0121a"
                    ],
                    [
                        "id" =>  138,
                        "name" =>  "Cospicua"
                    ],
                    [
                        "id" =>  117,
                        "name" =>  "Dingli"
                    ],
                    [
                        "id" =>  129,
                        "name" =>  "Fgura"
                    ],
                    [
                        "id" =>  84,
                        "name" =>  "Floriana"
                    ],
                    [
                        "id" =>  134,
                        "name" =>  "Fontana"
                    ],
                    [
                        "id" =>  130,
                        "name" =>  "G\u0127ajnsielem"
                    ],
                    [
                        "id" =>  92,
                        "name" =>  "G\u0127arb"
                    ],
                    [
                        "id" =>  120,
                        "name" =>  "G\u0127arg\u0127ur"
                    ],
                    [
                        "id" =>  106,
                        "name" =>  "G\u0127asri"
                    ],
                    [
                        "id" =>  124,
                        "name" =>  "G\u0127axaq"
                    ],
                    [
                        "id" =>  118,
                        "name" =>  "Gudja"
                    ],
                    [
                        "id" =>  113,
                        "name" =>  "G\u017cira"
                    ],
                    [
                        "id" =>  105,
                        "name" =>  "\u0126amrun"
                    ],
                    [
                        "id" =>  93,
                        "name" =>  "Iklin"
                    ],
                    [
                        "id" =>  99,
                        "name" =>  "Kalkara"
                    ],
                    [
                        "id" =>  91,
                        "name" =>  "Ker\u010bem"
                    ],
                    [
                        "id" =>  82,
                        "name" =>  "Kirkop"
                    ],
                    [
                        "id" =>  126,
                        "name" =>  "Lija"
                    ],
                    [
                        "id" =>  77,
                        "name" =>  "Luqa"
                    ],
                    [
                        "id" =>  128,
                        "name" =>  "Marsa"
                    ],
                    [
                        "id" =>  137,
                        "name" =>  "Marsaskala"
                    ],
                    [
                        "id" =>  78,
                        "name" =>  "Marsaxlokk"
                    ],
                    [
                        "id" =>  89,
                        "name" =>  "Mdina"
                    ],
                    [
                        "id" =>  102,
                        "name" =>  "Mellie\u0127a"
                    ],
                    [
                        "id" =>  109,
                        "name" =>  "M\u0121arr"
                    ],
                    [
                        "id" =>  140,
                        "name" =>  "Mosta"
                    ],
                    [
                        "id" =>  74,
                        "name" =>  "Mqabba"
                    ],
                    [
                        "id" =>  96,
                        "name" =>  "Msida"
                    ],
                    [
                        "id" =>  131,
                        "name" =>  "Mtarfa"
                    ],
                    [
                        "id" =>  132,
                        "name" =>  "Munxar"
                    ],
                    [
                        "id" =>  133,
                        "name" =>  "Nadur"
                    ],
                    [
                        "id" =>  112,
                        "name" =>  "Naxxar"
                    ],
                    [
                        "id" =>  115,
                        "name" =>  "Paola"
                    ],
                    [
                        "id" =>  125,
                        "name" =>  "Pembroke"
                    ],
                    [
                        "id" =>  127,
                        "name" =>  "Piet\u00e0"
                    ],
                    [
                        "id" =>  79,
                        "name" =>  "Qala"
                    ],
                    [
                        "id" =>  119,
                        "name" =>  "Qormi"
                    ],
                    [
                        "id" =>  111,
                        "name" =>  "Qrendi"
                    ],
                    [
                        "id" =>  83,
                        "name" =>  "Rabat"
                    ],
                    [
                        "id" =>  87,
                        "name" =>  "Saint Lawrence"
                    ],
                    [
                        "id" =>  75,
                        "name" =>  "San \u0120wann"
                    ],
                    [
                        "id" =>  116,
                        "name" =>  "Sannat"
                    ],
                    [
                        "id" =>  94,
                        "name" =>  "Santa Lu\u010bija"
                    ],
                    [
                        "id" =>  90,
                        "name" =>  "Santa Venera"
                    ],
                    [
                        "id" =>  136,
                        "name" =>  "Senglea"
                    ],
                    [
                        "id" =>  98,
                        "name" =>  "Si\u0121\u0121iewi"
                    ],
                    [
                        "id" =>  104,
                        "name" =>  "Sliema"
                    ],
                    [
                        "id" =>  100,
                        "name" =>  "St. Julian's"
                    ],
                    [
                        "id" =>  139,
                        "name" =>  "St. Paul's Bay"
                    ],
                    [
                        "id" =>  86,
                        "name" =>  "Swieqi"
                    ],
                    [
                        "id" =>  122,
                        "name" =>  "Ta' Xbiex"
                    ],
                    [
                        "id" =>  103,
                        "name" =>  "Tarxien"
                    ],
                    [
                        "id" =>  95,
                        "name" =>  "Valletta"
                    ],
                    [
                        "id" =>  101,
                        "name" =>  "Victoria"
                    ],
                    [
                        "id" =>  114,
                        "name" =>  "Xag\u0127ra"
                    ],
                    [
                        "id" =>  121,
                        "name" =>  "Xewkija"
                    ],
                    [
                        "id" =>  81,
                        "name" =>  "Xg\u0127ajra"
                    ],
                    [
                        "id" =>  123,
                        "name" =>  "\u017babbar"
                    ],
                    [
                        "id" =>  85,
                        "name" =>  "\u017bebbu\u0121 Gozo"
                    ],
                    [
                        "id" =>  80,
                        "name" =>  "\u017bebbu\u0121 Malta"
                    ],
                    [
                        "id" =>  135,
                        "name" =>  "\u017bejtun"
                    ],
                    [
                        "id" =>  76,
                        "name" =>  "\u017burrieq"
                    ]
                ]
            ],
            [
                "name" =>  "Man (Isle of)",
                "numeric_code" =>  "833",
                "alpha_2" =>  "IM",
                "alpha_3" =>  "IMN",
                "phone_code" =>  "+44-1624",
                "currency" =>  "GBP",
                "currency_name" =>  "British pound",
                "currency_symbol" =>  "\u00a3",
                "emoji" =>  "\ud83c\uddee\ud83c\uddf2",
                "states" =>  []
            ],
            [
                "name" =>  "Marshall Islands",
                "numeric_code" =>  "584",
                "alpha_2" =>  "MH",
                "alpha_3" =>  "MHL",
                "phone_code" =>  "692",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf2\ud83c\udded",
                "states" =>  [
                    [
                        "id" =>  2574,
                        "name" =>  "Ralik Chain"
                    ],
                    [
                        "id" =>  2573,
                        "name" =>  "Ratak Chain"
                    ]
                ]
            ],
            [
                "name" =>  "Martinique",
                "numeric_code" =>  "474",
                "alpha_2" =>  "MQ",
                "alpha_3" =>  "MTQ",
                "phone_code" =>  "596",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddf6",
                "states" =>  []
            ],
            [
                "name" =>  "Mauritania",
                "numeric_code" =>  "478",
                "alpha_2" =>  "MR",
                "alpha_3" =>  "MRT",
                "phone_code" =>  "222",
                "currency" =>  "MRO",
                "currency_name" =>  "Mauritanian ouguiya",
                "currency_symbol" =>  "MRU",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  3344,
                        "name" =>  "Adrar"
                    ],
                    [
                        "id" =>  3349,
                        "name" =>  "Assaba"
                    ],
                    [
                        "id" =>  3339,
                        "name" =>  "Brakna"
                    ],
                    [
                        "id" =>  3346,
                        "name" =>  "Dakhlet Nouadhibou"
                    ],
                    [
                        "id" =>  3341,
                        "name" =>  "Gorgol"
                    ],
                    [
                        "id" =>  3350,
                        "name" =>  "Guidimaka"
                    ],
                    [
                        "id" =>  3338,
                        "name" =>  "Hodh Ech Chargui"
                    ],
                    [
                        "id" =>  3351,
                        "name" =>  "Hodh El Gharbi"
                    ],
                    [
                        "id" =>  3342,
                        "name" =>  "Inchiri"
                    ],
                    [
                        "id" =>  3343,
                        "name" =>  "Nouakchott-Nord"
                    ],
                    [
                        "id" =>  3352,
                        "name" =>  "Nouakchott-Ouest"
                    ],
                    [
                        "id" =>  3347,
                        "name" =>  "Nouakchott-Sud"
                    ],
                    [
                        "id" =>  3345,
                        "name" =>  "Tagant"
                    ],
                    [
                        "id" =>  3340,
                        "name" =>  "Tiris Zemmour"
                    ],
                    [
                        "id" =>  3348,
                        "name" =>  "Trarza"
                    ]
                ]
            ],
            [
                "name" =>  "Mauritius",
                "numeric_code" =>  "480",
                "alpha_2" =>  "MU",
                "alpha_3" =>  "MUS",
                "phone_code" =>  "230",
                "currency" =>  "MUR",
                "currency_name" =>  "Mauritian rupee",
                "currency_symbol" =>  "\u20a8",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddfa",
                "states" =>  [
                    [
                        "id" =>  3248,
                        "name" =>  "Agal\u00e9ga"
                    ],
                    [
                        "id" =>  3262,
                        "name" =>  "Beau Bassin-Rose Hill"
                    ],
                    [
                        "id" =>  3251,
                        "name" =>  "Cargados Carajos"
                    ],
                    [
                        "id" =>  3255,
                        "name" =>  "Curepipe"
                    ],
                    [
                        "id" =>  3254,
                        "name" =>  "Flacq District"
                    ],
                    [
                        "id" =>  3264,
                        "name" =>  "Grand Port District"
                    ],
                    [
                        "id" =>  3253,
                        "name" =>  "Moka District"
                    ],
                    [
                        "id" =>  3250,
                        "name" =>  "Pamplemousses District"
                    ],
                    [
                        "id" =>  3263,
                        "name" =>  "Plaines Wilhems District"
                    ],
                    [
                        "id" =>  3256,
                        "name" =>  "Port Louis"
                    ],
                    [
                        "id" =>  3260,
                        "name" =>  "Port Louis District"
                    ],
                    [
                        "id" =>  3258,
                        "name" =>  "Quatre Bornes"
                    ],
                    [
                        "id" =>  3261,
                        "name" =>  "Rivi\u00e8re du Rempart District"
                    ],
                    [
                        "id" =>  3259,
                        "name" =>  "Rivi\u00e8re Noire District"
                    ],
                    [
                        "id" =>  3249,
                        "name" =>  "Rodrigues"
                    ],
                    [
                        "id" =>  3257,
                        "name" =>  "Savanne District"
                    ],
                    [
                        "id" =>  3252,
                        "name" =>  "Vacoas-Phoenix"
                    ]
                ]
            ],
            [
                "name" =>  "Mayotte",
                "numeric_code" =>  "175",
                "alpha_2" =>  "YT",
                "alpha_3" =>  "MYT",
                "phone_code" =>  "262",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddfe\ud83c\uddf9",
                "states" =>  []
            ],
            [
                "name" =>  "Mexico",
                "numeric_code" =>  "484",
                "alpha_2" =>  "MX",
                "alpha_3" =>  "MEX",
                "phone_code" =>  "52",
                "currency" =>  "MXN",
                "currency_name" =>  "Mexican peso",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddfd",
                "states" =>  [
                    [
                        "id" =>  3456,
                        "name" =>  "Aguascalientes"
                    ],
                    [
                        "id" =>  3457,
                        "name" =>  "Baja California"
                    ],
                    [
                        "id" =>  3460,
                        "name" =>  "Baja California Sur"
                    ],
                    [
                        "id" =>  3475,
                        "name" =>  "Campeche"
                    ],
                    [
                        "id" =>  3451,
                        "name" =>  "Chiapas"
                    ],
                    [
                        "id" =>  3447,
                        "name" =>  "Chihuahua"
                    ],
                    [
                        "id" =>  3473,
                        "name" =>  "Ciudad de M\u00e9xico"
                    ],
                    [
                        "id" =>  3471,
                        "name" =>  "Coahuila de Zaragoza"
                    ],
                    [
                        "id" =>  3472,
                        "name" =>  "Colima"
                    ],
                    [
                        "id" =>  3453,
                        "name" =>  "Durango"
                    ],
                    [
                        "id" =>  3450,
                        "name" =>  "Estado de M\u00e9xico"
                    ],
                    [
                        "id" =>  3469,
                        "name" =>  "Guanajuato"
                    ],
                    [
                        "id" =>  3459,
                        "name" =>  "Guerrero"
                    ],
                    [
                        "id" =>  3470,
                        "name" =>  "Hidalgo"
                    ],
                    [
                        "id" =>  4857,
                        "name" =>  "Jalisco"
                    ],
                    [
                        "id" =>  3474,
                        "name" =>  "Michoac\u00e1n de Ocampo"
                    ],
                    [
                        "id" =>  3465,
                        "name" =>  "Morelos"
                    ],
                    [
                        "id" =>  3477,
                        "name" =>  "Nayarit"
                    ],
                    [
                        "id" =>  3452,
                        "name" =>  "Nuevo Le\u00f3n"
                    ],
                    [
                        "id" =>  3448,
                        "name" =>  "Oaxaca"
                    ],
                    [
                        "id" =>  3476,
                        "name" =>  "Puebla"
                    ],
                    [
                        "id" =>  3455,
                        "name" =>  "Quer\u00e9taro"
                    ],
                    [
                        "id" =>  3467,
                        "name" =>  "Quintana Roo"
                    ],
                    [
                        "id" =>  3461,
                        "name" =>  "San Luis Potos\u00ed"
                    ],
                    [
                        "id" =>  3449,
                        "name" =>  "Sinaloa"
                    ],
                    [
                        "id" =>  3468,
                        "name" =>  "Sonora"
                    ],
                    [
                        "id" =>  3454,
                        "name" =>  "Tabasco"
                    ],
                    [
                        "id" =>  3463,
                        "name" =>  "Tamaulipas"
                    ],
                    [
                        "id" =>  3458,
                        "name" =>  "Tlaxcala"
                    ],
                    [
                        "id" =>  3464,
                        "name" =>  "Veracruz de Ignacio de la Llave"
                    ],
                    [
                        "id" =>  3466,
                        "name" =>  "Yucat\u00e1n"
                    ],
                    [
                        "id" =>  3462,
                        "name" =>  "Zacatecas"
                    ]
                ]
            ],
            [
                "name" =>  "Micronesia",
                "numeric_code" =>  "583",
                "alpha_2" =>  "FM",
                "alpha_3" =>  "FSM",
                "phone_code" =>  "691",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddeb\ud83c\uddf2",
                "states" =>  [
                    [
                        "id" =>  2580,
                        "name" =>  "Chuuk State"
                    ],
                    [
                        "id" =>  2583,
                        "name" =>  "Kosrae State"
                    ],
                    [
                        "id" =>  2581,
                        "name" =>  "Pohnpei State"
                    ],
                    [
                        "id" =>  2582,
                        "name" =>  "Yap State"
                    ]
                ]
            ],
            [
                "name" =>  "Moldova",
                "numeric_code" =>  "498",
                "alpha_2" =>  "MD",
                "alpha_3" =>  "MDA",
                "phone_code" =>  "373",
                "currency" =>  "MDL",
                "currency_name" =>  "Moldovan leu",
                "currency_symbol" =>  "L",
                "emoji" =>  "\ud83c\uddf2\ud83c\udde9",
                "states" =>  [
                    [
                        "id" =>  4368,
                        "name" =>  "Anenii Noi District"
                    ],
                    [
                        "id" =>  4393,
                        "name" =>  "B\u0103l\u021bi Municipality"
                    ],
                    [
                        "id" =>  4379,
                        "name" =>  "Basarabeasca District"
                    ],
                    [
                        "id" =>  4362,
                        "name" =>  "Bender Municipality"
                    ],
                    [
                        "id" =>  4375,
                        "name" =>  "Briceni District"
                    ],
                    [
                        "id" =>  4391,
                        "name" =>  "Cahul District"
                    ],
                    [
                        "id" =>  4366,
                        "name" =>  "C\u0103l\u0103ra\u0219i District"
                    ],
                    [
                        "id" =>  4380,
                        "name" =>  "Cantemir District"
                    ],
                    [
                        "id" =>  4365,
                        "name" =>  "C\u0103u\u0219eni District"
                    ],
                    [
                        "id" =>  4373,
                        "name" =>  "Chi\u0219in\u0103u Municipality"
                    ],
                    [
                        "id" =>  4360,
                        "name" =>  "Cimi\u0219lia District"
                    ],
                    [
                        "id" =>  4390,
                        "name" =>  "Criuleni District"
                    ],
                    [
                        "id" =>  4384,
                        "name" =>  "Dondu\u0219eni District"
                    ],
                    [
                        "id" =>  4392,
                        "name" =>  "Drochia District"
                    ],
                    [
                        "id" =>  4383,
                        "name" =>  "Dub\u0103sari District"
                    ],
                    [
                        "id" =>  4387,
                        "name" =>  "Edine\u021b District"
                    ],
                    [
                        "id" =>  4381,
                        "name" =>  "F\u0103le\u0219ti District"
                    ],
                    [
                        "id" =>  4370,
                        "name" =>  "Flore\u0219ti District"
                    ],
                    [
                        "id" =>  4385,
                        "name" =>  "Gagauzia"
                    ],
                    [
                        "id" =>  4367,
                        "name" =>  "Glodeni District"
                    ],
                    [
                        "id" =>  4382,
                        "name" =>  "H\u00eence\u0219ti District"
                    ],
                    [
                        "id" =>  4369,
                        "name" =>  "Ialoveni District"
                    ],
                    [
                        "id" =>  4363,
                        "name" =>  "Nisporeni District"
                    ],
                    [
                        "id" =>  4389,
                        "name" =>  "Ocni\u021ba District"
                    ],
                    [
                        "id" =>  4361,
                        "name" =>  "Orhei District"
                    ],
                    [
                        "id" =>  4394,
                        "name" =>  "Rezina District"
                    ],
                    [
                        "id" =>  4376,
                        "name" =>  "R\u00ee\u0219cani District"
                    ],
                    [
                        "id" =>  4364,
                        "name" =>  "S\u00eengerei District"
                    ],
                    [
                        "id" =>  4388,
                        "name" =>  "\u0218old\u0103ne\u0219ti District"
                    ],
                    [
                        "id" =>  4374,
                        "name" =>  "Soroca District"
                    ],
                    [
                        "id" =>  4378,
                        "name" =>  "\u0218tefan Vod\u0103 District"
                    ],
                    [
                        "id" =>  4377,
                        "name" =>  "Str\u0103\u0219eni District"
                    ],
                    [
                        "id" =>  4372,
                        "name" =>  "Taraclia District"
                    ],
                    [
                        "id" =>  4371,
                        "name" =>  "Telene\u0219ti District"
                    ],
                    [
                        "id" =>  4395,
                        "name" =>  "Transnistria autonomous territorial unit"
                    ],
                    [
                        "id" =>  4386,
                        "name" =>  "Ungheni District"
                    ]
                ]
            ],
            [
                "name" =>  "Monaco",
                "numeric_code" =>  "492",
                "alpha_2" =>  "MC",
                "alpha_3" =>  "MCO",
                "phone_code" =>  "377",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf2\ud83c\udde8",
                "states" =>  [
                    [
                        "id" =>  4917,
                        "name" =>  "La Colle"
                    ],
                    [
                        "id" =>  4918,
                        "name" =>  "La Condamine"
                    ],
                    [
                        "id" =>  4919,
                        "name" =>  "Moneghetti"
                    ]
                ]
            ],
            [
                "name" =>  "Mongolia",
                "numeric_code" =>  "496",
                "alpha_2" =>  "MN",
                "alpha_3" =>  "MNG",
                "phone_code" =>  "976",
                "currency" =>  "MNT",
                "currency_name" =>  "Mongolian t\u00f6gr\u00f6g",
                "currency_symbol" =>  "\u20ae",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddf3",
                "states" =>  [
                    [
                        "id" =>  1973,
                        "name" =>  "Arkhangai Province"
                    ],
                    [
                        "id" =>  1969,
                        "name" =>  "Bayan-\u00d6lgii Province"
                    ],
                    [
                        "id" =>  1976,
                        "name" =>  "Bayankhongor Province"
                    ],
                    [
                        "id" =>  1961,
                        "name" =>  "Bulgan Province"
                    ],
                    [
                        "id" =>  1962,
                        "name" =>  "Darkhan-Uul Province"
                    ],
                    [
                        "id" =>  1963,
                        "name" =>  "Dornod Province"
                    ],
                    [
                        "id" =>  1981,
                        "name" =>  "Dornogovi Province"
                    ],
                    [
                        "id" =>  1970,
                        "name" =>  "Dundgovi Province"
                    ],
                    [
                        "id" =>  1972,
                        "name" =>  "Govi-Altai Province"
                    ],
                    [
                        "id" =>  1978,
                        "name" =>  "Govis\u00fcmber Province"
                    ],
                    [
                        "id" =>  1974,
                        "name" =>  "Khentii Province"
                    ],
                    [
                        "id" =>  1964,
                        "name" =>  "Khovd Province"
                    ],
                    [
                        "id" =>  1975,
                        "name" =>  "Kh\u00f6vsg\u00f6l Province"
                    ],
                    [
                        "id" =>  1967,
                        "name" =>  "\u00d6mn\u00f6govi Province"
                    ],
                    [
                        "id" =>  1966,
                        "name" =>  "Orkhon Province"
                    ],
                    [
                        "id" =>  1965,
                        "name" =>  "\u00d6v\u00f6rkhangai Province"
                    ],
                    [
                        "id" =>  1980,
                        "name" =>  "Selenge Province"
                    ],
                    [
                        "id" =>  1977,
                        "name" =>  "S\u00fckhbaatar Province"
                    ],
                    [
                        "id" =>  1968,
                        "name" =>  "T\u00f6v Province"
                    ],
                    [
                        "id" =>  1971,
                        "name" =>  "Uvs Province"
                    ],
                    [
                        "id" =>  1979,
                        "name" =>  "Zavkhan Province"
                    ]
                ]
            ],
            [
                "name" =>  "Montenegro",
                "numeric_code" =>  "499",
                "alpha_2" =>  "ME",
                "alpha_3" =>  "MNE",
                "phone_code" =>  "382",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddea",
                "states" =>  [
                    [
                        "id" =>  23,
                        "name" =>  "Andrijevica Municipality"
                    ],
                    [
                        "id" =>  13,
                        "name" =>  "Bar Municipality"
                    ],
                    [
                        "id" =>  21,
                        "name" =>  "Berane Municipality"
                    ],
                    [
                        "id" =>  25,
                        "name" =>  "Bijelo Polje Municipality"
                    ],
                    [
                        "id" =>  30,
                        "name" =>  "Budva Municipality"
                    ],
                    [
                        "id" =>  14,
                        "name" =>  "Danilovgrad Municipality"
                    ],
                    [
                        "id" =>  24,
                        "name" =>  "Gusinje Municipality"
                    ],
                    [
                        "id" =>  31,
                        "name" =>  "Kola\u0161in Municipality"
                    ],
                    [
                        "id" =>  26,
                        "name" =>  "Kotor Municipality"
                    ],
                    [
                        "id" =>  22,
                        "name" =>  "Mojkovac Municipality"
                    ],
                    [
                        "id" =>  17,
                        "name" =>  "Nik\u0161i\u0107 Municipality"
                    ],
                    [
                        "id" =>  28,
                        "name" =>  "Old Royal Capital Cetinje"
                    ],
                    [
                        "id" =>  12,
                        "name" =>  "Petnjica Municipality"
                    ],
                    [
                        "id" =>  19,
                        "name" =>  "Plav Municipality"
                    ],
                    [
                        "id" =>  20,
                        "name" =>  "Pljevlja Municipality"
                    ],
                    [
                        "id" =>  16,
                        "name" =>  "Plu\u017eine Municipality"
                    ],
                    [
                        "id" =>  27,
                        "name" =>  "Podgorica Municipality"
                    ],
                    [
                        "id" =>  15,
                        "name" =>  "Ro\u017eaje Municipality"
                    ],
                    [
                        "id" =>  18,
                        "name" =>  "\u0160avnik Municipality"
                    ],
                    [
                        "id" =>  29,
                        "name" =>  "Tivat Municipality"
                    ],
                    [
                        "id" =>  33,
                        "name" =>  "Ulcinj Municipality"
                    ],
                    [
                        "id" =>  32,
                        "name" =>  "\u017dabljak Municipality"
                    ]
                ]
            ],
            [
                "name" =>  "Montserrat",
                "numeric_code" =>  "500",
                "alpha_2" =>  "MS",
                "alpha_3" =>  "MSR",
                "phone_code" =>  "+1-664",
                "currency" =>  "XCD",
                "currency_name" =>  "Eastern Caribbean dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddf8",
                "states" =>  []
            ],
            [
                "name" =>  "Morocco",
                "numeric_code" =>  "504",
                "alpha_2" =>  "MA",
                "alpha_3" =>  "MAR",
                "phone_code" =>  "212",
                "currency" =>  "MAD",
                "currency_name" =>  "Moroccan dirham",
                "currency_symbol" =>  "DH",
                "emoji" =>  "\ud83c\uddf2\ud83c\udde6",
                "states" =>  [
                    [
                        "id" =>  4928,
                        "name" =>  "Agadir-Ida-Ou-Tanane"
                    ],
                    [
                        "id" =>  3320,
                        "name" =>  "Al Haouz"
                    ],
                    [
                        "id" =>  3267,
                        "name" =>  "Al Hoce\u00efma"
                    ],
                    [
                        "id" =>  3266,
                        "name" =>  "Aousserd (EH)"
                    ],
                    [
                        "id" =>  3297,
                        "name" =>  "Assa-Zag (EH-partial)"
                    ],
                    [
                        "id" =>  3321,
                        "name" =>  "Azilal"
                    ],
                    [
                        "id" =>  3272,
                        "name" =>  "B\u00e9ni Mellal"
                    ],
                    [
                        "id" =>  3278,
                        "name" =>  "B\u00e9ni Mellal-Kh\u00e9nifra"
                    ],
                    [
                        "id" =>  3304,
                        "name" =>  "Benslimane"
                    ],
                    [
                        "id" =>  3285,
                        "name" =>  "Berkane"
                    ],
                    [
                        "id" =>  4929,
                        "name" =>  "Berrechid"
                    ],
                    [
                        "id" =>  3275,
                        "name" =>  "Boujdour (EH)"
                    ],
                    [
                        "id" =>  3270,
                        "name" =>  "Boulemane"
                    ],
                    [
                        "id" =>  4930,
                        "name" =>  "Casablanca"
                    ],
                    [
                        "id" =>  3303,
                        "name" =>  "Casablanca-Settat"
                    ],
                    [
                        "id" =>  3310,
                        "name" =>  "Chefchaouen"
                    ],
                    [
                        "id" =>  3274,
                        "name" =>  "Chichaoua"
                    ],
                    [
                        "id" =>  3302,
                        "name" =>  "Chtouka-Ait Baha"
                    ],
                    [
                        "id" =>  3306,
                        "name" =>  "Dakhla-Oued Ed-Dahab (EH)"
                    ],
                    [
                        "id" =>  3290,
                        "name" =>  "Dr\u00e2a-Tafilalet"
                    ],
                    [
                        "id" =>  4931,
                        "name" =>  "Driouch"
                    ],
                    [
                        "id" =>  3291,
                        "name" =>  "El Hajeb"
                    ],
                    [
                        "id" =>  3280,
                        "name" =>  "El Jadida"
                    ],
                    [
                        "id" =>  3309,
                        "name" =>  "El Kel\u00e2a des Sraghna"
                    ],
                    [
                        "id" =>  3299,
                        "name" =>  "Errachidia"
                    ],
                    [
                        "id" =>  3292,
                        "name" =>  "Es-Semara (EH-partial)"
                    ],
                    [
                        "id" =>  3316,
                        "name" =>  "Essaouira"
                    ],
                    [
                        "id" =>  3300,
                        "name" =>  "Fahs-Anjra"
                    ],
                    [
                        "id" =>  4932,
                        "name" =>  "F\u00e8s"
                    ],
                    [
                        "id" =>  3313,
                        "name" =>  "F\u00e8s-Mekn\u00e8s"
                    ],
                    [
                        "id" =>  3301,
                        "name" =>  "Figuig"
                    ],
                    [
                        "id" =>  4933,
                        "name" =>  "Fquih Ben Salah"
                    ],
                    [
                        "id" =>  3265,
                        "name" =>  "Guelmim"
                    ],
                    [
                        "id" =>  3305,
                        "name" =>  "Guelmim-Oued Noun (EH-partial)"
                    ],
                    [
                        "id" =>  4934,
                        "name" =>  "Guercif"
                    ],
                    [
                        "id" =>  3325,
                        "name" =>  "Ifrane"
                    ],
                    [
                        "id" =>  3294,
                        "name" =>  "Inezgane-Ait Melloul"
                    ],
                    [
                        "id" =>  3307,
                        "name" =>  "Jerada"
                    ],
                    [
                        "id" =>  3308,
                        "name" =>  "K\u00e9nitra"
                    ],
                    [
                        "id" =>  3276,
                        "name" =>  "Kh\u00e9misset"
                    ],
                    [
                        "id" =>  3317,
                        "name" =>  "Kh\u00e9nifra"
                    ],
                    [
                        "id" =>  3326,
                        "name" =>  "Khouribga"
                    ],
                    [
                        "id" =>  3271,
                        "name" =>  "L'Oriental"
                    ],
                    [
                        "id" =>  3293,
                        "name" =>  "La\u00e2youne (EH)"
                    ],
                    [
                        "id" =>  3298,
                        "name" =>  "La\u00e2youne-Sakia El Hamra (EH-partial)"
                    ],
                    [
                        "id" =>  3268,
                        "name" =>  "Larache"
                    ],
                    [
                        "id" =>  4936,
                        "name" =>  "M\u2019diq-Fnideq"
                    ],
                    [
                        "id" =>  4935,
                        "name" =>  "Marrakech"
                    ],
                    [
                        "id" =>  3288,
                        "name" =>  "Marrakesh-Safi"
                    ],
                    [
                        "id" =>  3284,
                        "name" =>  "M\u00e9diouna"
                    ],
                    [
                        "id" =>  4937,
                        "name" =>  "Mekn\u00e8s"
                    ],
                    [
                        "id" =>  4938,
                        "name" =>  "Midelt"
                    ],
                    [
                        "id" =>  4939,
                        "name" =>  "Mohammadia"
                    ],
                    [
                        "id" =>  3315,
                        "name" =>  "Moulay Yacoub"
                    ],
                    [
                        "id" =>  3281,
                        "name" =>  "Nador"
                    ],
                    [
                        "id" =>  3287,
                        "name" =>  "Nouaceur"
                    ],
                    [
                        "id" =>  3269,
                        "name" =>  "Ouarzazate"
                    ],
                    [
                        "id" =>  3319,
                        "name" =>  "Oued Ed-Dahab (EH)"
                    ],
                    [
                        "id" =>  4941,
                        "name" =>  "Ouezzane"
                    ],
                    [
                        "id" =>  4940,
                        "name" =>  "Oujda-Angad"
                    ],
                    [
                        "id" =>  4942,
                        "name" =>  "Rabat"
                    ],
                    [
                        "id" =>  4927,
                        "name" =>  "Rabat-Sal\u00e9-K\u00e9nitra"
                    ],
                    [
                        "id" =>  4943,
                        "name" =>  "Rehamna"
                    ],
                    [
                        "id" =>  3311,
                        "name" =>  "Safi"
                    ],
                    [
                        "id" =>  4944,
                        "name" =>  "Sal\u00e9"
                    ],
                    [
                        "id" =>  3289,
                        "name" =>  "Sefrou"
                    ],
                    [
                        "id" =>  3282,
                        "name" =>  "Settat"
                    ],
                    [
                        "id" =>  4945,
                        "name" =>  "Sidi Bennour"
                    ],
                    [
                        "id" =>  4946,
                        "name" =>  "Sidi Ifni"
                    ],
                    [
                        "id" =>  3279,
                        "name" =>  "Sidi Kacem"
                    ],
                    [
                        "id" =>  4952,
                        "name" =>  "Sidi Slimane"
                    ],
                    [
                        "id" =>  4947,
                        "name" =>  "Skhirate-T\u00e9mara"
                    ],
                    [
                        "id" =>  3295,
                        "name" =>  "Souss-Massa"
                    ],
                    [
                        "id" =>  3286,
                        "name" =>  "Tan-Tan (EH-partial)"
                    ],
                    [
                        "id" =>  4950,
                        "name" =>  "Tanger-Assilah"
                    ],
                    [
                        "id" =>  3324,
                        "name" =>  "Tanger-T\u00e9touan-Al Hoce\u00efma"
                    ],
                    [
                        "id" =>  3323,
                        "name" =>  "Taounate"
                    ],
                    [
                        "id" =>  3322,
                        "name" =>  "Taourirt"
                    ],
                    [
                        "id" =>  4948,
                        "name" =>  "Tarfaya (EH-partial)"
                    ],
                    [
                        "id" =>  3314,
                        "name" =>  "Taroudannt"
                    ],
                    [
                        "id" =>  3312,
                        "name" =>  "Tata"
                    ],
                    [
                        "id" =>  3296,
                        "name" =>  "Taza"
                    ],
                    [
                        "id" =>  3318,
                        "name" =>  "T\u00e9touan"
                    ],
                    [
                        "id" =>  4949,
                        "name" =>  "Tinghir"
                    ],
                    [
                        "id" =>  3277,
                        "name" =>  "Tiznit"
                    ],
                    [
                        "id" =>  4951,
                        "name" =>  "Youssoufia"
                    ],
                    [
                        "id" =>  3283,
                        "name" =>  "Zagora"
                    ]
                ]
            ],
            [
                "name" =>  "Mozambique",
                "numeric_code" =>  "508",
                "alpha_2" =>  "MZ",
                "alpha_3" =>  "MOZ",
                "phone_code" =>  "258",
                "currency" =>  "MZN",
                "currency_name" =>  "Mozambican metical",
                "currency_symbol" =>  "MT",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddff",
                "states" =>  [
                    [
                        "id" =>  3327,
                        "name" =>  "Cabo Delgado Province"
                    ],
                    [
                        "id" =>  3329,
                        "name" =>  "Gaza Province"
                    ],
                    [
                        "id" =>  3330,
                        "name" =>  "Inhambane Province"
                    ],
                    [
                        "id" =>  3337,
                        "name" =>  "Manica Province"
                    ],
                    [
                        "id" =>  3335,
                        "name" =>  "Maputo"
                    ],
                    [
                        "id" =>  3332,
                        "name" =>  "Maputo Province"
                    ],
                    [
                        "id" =>  3336,
                        "name" =>  "Nampula Province"
                    ],
                    [
                        "id" =>  3333,
                        "name" =>  "Niassa Province"
                    ],
                    [
                        "id" =>  3331,
                        "name" =>  "Sofala Province"
                    ],
                    [
                        "id" =>  3334,
                        "name" =>  "Tete Province"
                    ],
                    [
                        "id" =>  3328,
                        "name" =>  "Zambezia Province"
                    ]
                ]
            ],
            [
                "name" =>  "Myanmar",
                "numeric_code" =>  "104",
                "alpha_2" =>  "MM",
                "alpha_3" =>  "MMR",
                "phone_code" =>  "95",
                "currency" =>  "MMK",
                "currency_name" =>  "Burmese kyat",
                "currency_symbol" =>  "K",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddf2",
                "states" =>  [
                    [
                        "id" =>  2142,
                        "name" =>  "Ayeyarwady Region"
                    ],
                    [
                        "id" =>  2141,
                        "name" =>  "Bago"
                    ],
                    [
                        "id" =>  2137,
                        "name" =>  "Chin State"
                    ],
                    [
                        "id" =>  2143,
                        "name" =>  "Kachin State"
                    ],
                    [
                        "id" =>  2144,
                        "name" =>  "Kayah State"
                    ],
                    [
                        "id" =>  2133,
                        "name" =>  "Kayin State"
                    ],
                    [
                        "id" =>  2136,
                        "name" =>  "Magway Region"
                    ],
                    [
                        "id" =>  2134,
                        "name" =>  "Mandalay Region"
                    ],
                    [
                        "id" =>  2147,
                        "name" =>  "Mon State"
                    ],
                    [
                        "id" =>  2146,
                        "name" =>  "Naypyidaw Union Territory"
                    ],
                    [
                        "id" =>  2138,
                        "name" =>  "Rakhine State"
                    ],
                    [
                        "id" =>  2145,
                        "name" =>  "Sagaing Region"
                    ],
                    [
                        "id" =>  2139,
                        "name" =>  "Shan State"
                    ],
                    [
                        "id" =>  2140,
                        "name" =>  "Tanintharyi Region"
                    ],
                    [
                        "id" =>  2135,
                        "name" =>  "Yangon Region"
                    ]
                ]
            ],
            [
                "name" =>  "Namibia",
                "numeric_code" =>  "516",
                "alpha_2" =>  "NA",
                "alpha_3" =>  "NAM",
                "phone_code" =>  "264",
                "currency" =>  "NAD",
                "currency_name" =>  "Namibian dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf3\ud83c\udde6",
                "states" =>  [
                    [
                        "id" =>  43,
                        "name" =>  "Erongo Region"
                    ],
                    [
                        "id" =>  38,
                        "name" =>  "Hardap Region"
                    ],
                    [
                        "id" =>  45,
                        "name" =>  "Karas Region"
                    ],
                    [
                        "id" =>  36,
                        "name" =>  "Kavango East Region"
                    ],
                    [
                        "id" =>  35,
                        "name" =>  "Kavango West Region"
                    ],
                    [
                        "id" =>  44,
                        "name" =>  "Khomas Region"
                    ],
                    [
                        "id" =>  34,
                        "name" =>  "Kunene Region"
                    ],
                    [
                        "id" =>  40,
                        "name" =>  "Ohangwena Region"
                    ],
                    [
                        "id" =>  41,
                        "name" =>  "Omaheke Region"
                    ],
                    [
                        "id" =>  39,
                        "name" =>  "Omusati Region"
                    ],
                    [
                        "id" =>  37,
                        "name" =>  "Oshana Region"
                    ],
                    [
                        "id" =>  42,
                        "name" =>  "Oshikoto Region"
                    ],
                    [
                        "id" =>  46,
                        "name" =>  "Otjozondjupa Region"
                    ],
                    [
                        "id" =>  47,
                        "name" =>  "Zambezi Region"
                    ]
                ]
            ],
            [
                "name" =>  "Nauru",
                "numeric_code" =>  "520",
                "alpha_2" =>  "NR",
                "alpha_3" =>  "NRU",
                "phone_code" =>  "674",
                "currency" =>  "AUD",
                "currency_name" =>  "Australian dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf3\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  4656,
                        "name" =>  "Aiwo District"
                    ],
                    [
                        "id" =>  4658,
                        "name" =>  "Anabar District"
                    ],
                    [
                        "id" =>  4667,
                        "name" =>  "Anetan District"
                    ],
                    [
                        "id" =>  4663,
                        "name" =>  "Anibare District"
                    ],
                    [
                        "id" =>  4660,
                        "name" =>  "Baiti District"
                    ],
                    [
                        "id" =>  4665,
                        "name" =>  "Boe District"
                    ],
                    [
                        "id" =>  4662,
                        "name" =>  "Buada District"
                    ],
                    [
                        "id" =>  4666,
                        "name" =>  "Denigomodu District"
                    ],
                    [
                        "id" =>  4654,
                        "name" =>  "Ewa District"
                    ],
                    [
                        "id" =>  4661,
                        "name" =>  "Ijuw District"
                    ],
                    [
                        "id" =>  4657,
                        "name" =>  "Meneng District"
                    ],
                    [
                        "id" =>  4659,
                        "name" =>  "Nibok District"
                    ],
                    [
                        "id" =>  4655,
                        "name" =>  "Uaboe District"
                    ],
                    [
                        "id" =>  4664,
                        "name" =>  "Yaren District"
                    ]
                ]
            ],
            [
                "name" =>  "Nepal",
                "numeric_code" =>  "524",
                "alpha_2" =>  "NP",
                "alpha_3" =>  "NPL",
                "phone_code" =>  "977",
                "currency" =>  "NPR",
                "currency_name" =>  "Nepalese rupee",
                "currency_symbol" =>  "\u20a8",
                "emoji" =>  "\ud83c\uddf3\ud83c\uddf5",
                "states" =>  [
                    [
                        "id" =>  2082,
                        "name" =>  "Bagmati Zone"
                    ],
                    [
                        "id" =>  2071,
                        "name" =>  "Bheri Zone"
                    ],
                    [
                        "id" =>  2073,
                        "name" =>  "Central Region"
                    ],
                    [
                        "id" =>  2080,
                        "name" =>  "Dhaulagiri Zone"
                    ],
                    [
                        "id" =>  2069,
                        "name" =>  "Eastern Development Region"
                    ],
                    [
                        "id" =>  2068,
                        "name" =>  "Far-Western Development Region"
                    ],
                    [
                        "id" =>  2081,
                        "name" =>  "Gandaki Zone"
                    ],
                    [
                        "id" =>  2076,
                        "name" =>  "Janakpur Zone"
                    ],
                    [
                        "id" =>  2079,
                        "name" =>  "Karnali Zone"
                    ],
                    [
                        "id" =>  2072,
                        "name" =>  "Kosi Zone"
                    ],
                    [
                        "id" =>  2074,
                        "name" =>  "Lumbini Zone"
                    ],
                    [
                        "id" =>  2083,
                        "name" =>  "Mahakali Zone"
                    ],
                    [
                        "id" =>  2070,
                        "name" =>  "Mechi Zone"
                    ],
                    [
                        "id" =>  2066,
                        "name" =>  "Mid-Western Region"
                    ],
                    [
                        "id" =>  2075,
                        "name" =>  "Narayani Zone"
                    ],
                    [
                        "id" =>  2077,
                        "name" =>  "Rapti Zone"
                    ],
                    [
                        "id" =>  2084,
                        "name" =>  "Sagarmatha Zone"
                    ],
                    [
                        "id" =>  2078,
                        "name" =>  "Seti Zone"
                    ],
                    [
                        "id" =>  2067,
                        "name" =>  "Western Region"
                    ]
                ]
            ],
            [
                "name" =>  "Netherlands",
                "numeric_code" =>  "528",
                "alpha_2" =>  "NL",
                "alpha_3" =>  "NLD",
                "phone_code" =>  "31",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf3\ud83c\uddf1",
                "states" =>  [
                    [
                        "id" =>  2624,
                        "name" =>  "Bonaire"
                    ],
                    [
                        "id" =>  2613,
                        "name" =>  "Drenthe"
                    ],
                    [
                        "id" =>  2619,
                        "name" =>  "Flevoland"
                    ],
                    [
                        "id" =>  2622,
                        "name" =>  "Friesland"
                    ],
                    [
                        "id" =>  2611,
                        "name" =>  "Gelderland"
                    ],
                    [
                        "id" =>  2617,
                        "name" =>  "Groningen"
                    ],
                    [
                        "id" =>  2615,
                        "name" =>  "Limburg"
                    ],
                    [
                        "id" =>  2623,
                        "name" =>  "North Brabant"
                    ],
                    [
                        "id" =>  2612,
                        "name" =>  "North Holland"
                    ],
                    [
                        "id" =>  2618,
                        "name" =>  "Overijssel"
                    ],
                    [
                        "id" =>  2621,
                        "name" =>  "Saba"
                    ],
                    [
                        "id" =>  2616,
                        "name" =>  "Sint Eustatius"
                    ],
                    [
                        "id" =>  2614,
                        "name" =>  "South Holland"
                    ],
                    [
                        "id" =>  2610,
                        "name" =>  "Utrecht"
                    ],
                    [
                        "id" =>  2620,
                        "name" =>  "Zeeland"
                    ]
                ]
            ],
            [
                "name" =>  "New Caledonia",
                "numeric_code" =>  "540",
                "alpha_2" =>  "NC",
                "alpha_3" =>  "NCL",
                "phone_code" =>  "687",
                "currency" =>  "XPF",
                "currency_name" =>  "CFP franc",
                "currency_symbol" =>  "\u20a3",
                "emoji" =>  "\ud83c\uddf3\ud83c\udde8",
                "states" =>  []
            ],
            [
                "name" =>  "New Zealand",
                "numeric_code" =>  "554",
                "alpha_2" =>  "NZ",
                "alpha_3" =>  "NZL",
                "phone_code" =>  "64",
                "currency" =>  "NZD",
                "currency_name" =>  "New Zealand dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf3\ud83c\uddff",
                "states" =>  [
                    [
                        "id" =>  4072,
                        "name" =>  "Auckland Region"
                    ],
                    [
                        "id" =>  4074,
                        "name" =>  "Bay of Plenty Region"
                    ],
                    [
                        "id" =>  4066,
                        "name" =>  "Canterbury Region"
                    ],
                    [
                        "id" =>  4067,
                        "name" =>  "Chatham Islands"
                    ],
                    [
                        "id" =>  4068,
                        "name" =>  "Gisborne District"
                    ],
                    [
                        "id" =>  4075,
                        "name" =>  "Hawke's Bay Region"
                    ],
                    [
                        "id" =>  4060,
                        "name" =>  "Manawatu-Wanganui Region"
                    ],
                    [
                        "id" =>  4063,
                        "name" =>  "Marlborough Region"
                    ],
                    [
                        "id" =>  4070,
                        "name" =>  "Nelson Region"
                    ],
                    [
                        "id" =>  4059,
                        "name" =>  "Northland Region"
                    ],
                    [
                        "id" =>  4062,
                        "name" =>  "Otago Region"
                    ],
                    [
                        "id" =>  4071,
                        "name" =>  "Southland Region"
                    ],
                    [
                        "id" =>  4069,
                        "name" =>  "Taranaki Region"
                    ],
                    [
                        "id" =>  4073,
                        "name" =>  "Tasman District"
                    ],
                    [
                        "id" =>  4061,
                        "name" =>  "Waikato Region"
                    ],
                    [
                        "id" =>  4065,
                        "name" =>  "Wellington Region"
                    ],
                    [
                        "id" =>  4064,
                        "name" =>  "West Coast Region"
                    ]
                ]
            ],
            [
                "name" =>  "Nicaragua",
                "numeric_code" =>  "558",
                "alpha_2" =>  "NI",
                "alpha_3" =>  "NIC",
                "phone_code" =>  "505",
                "currency" =>  "NIO",
                "currency_name" =>  "Nicaraguan c\u00f3rdoba",
                "currency_symbol" =>  "C$",
                "emoji" =>  "\ud83c\uddf3\ud83c\uddee",
                "states" =>  [
                    [
                        "id" =>  946,
                        "name" =>  "Boaco"
                    ],
                    [
                        "id" =>  950,
                        "name" =>  "Carazo"
                    ],
                    [
                        "id" =>  954,
                        "name" =>  "Chinandega"
                    ],
                    [
                        "id" =>  940,
                        "name" =>  "Chontales"
                    ],
                    [
                        "id" =>  945,
                        "name" =>  "Estel\u00ed"
                    ],
                    [
                        "id" =>  943,
                        "name" =>  "Granada"
                    ],
                    [
                        "id" =>  955,
                        "name" =>  "Jinotega"
                    ],
                    [
                        "id" =>  944,
                        "name" =>  "Le\u00f3n"
                    ],
                    [
                        "id" =>  948,
                        "name" =>  "Madriz"
                    ],
                    [
                        "id" =>  941,
                        "name" =>  "Managua"
                    ],
                    [
                        "id" =>  953,
                        "name" =>  "Masaya"
                    ],
                    [
                        "id" =>  947,
                        "name" =>  "Matagalpa"
                    ],
                    [
                        "id" =>  951,
                        "name" =>  "North Caribbean Coast"
                    ],
                    [
                        "id" =>  4964,
                        "name" =>  "Nueva Segovia"
                    ],
                    [
                        "id" =>  949,
                        "name" =>  "R\u00edo San Juan"
                    ],
                    [
                        "id" =>  942,
                        "name" =>  "Rivas"
                    ],
                    [
                        "id" =>  952,
                        "name" =>  "South Caribbean Coast"
                    ]
                ]
            ],
            [
                "name" =>  "Niger",
                "numeric_code" =>  "562",
                "alpha_2" =>  "NE",
                "alpha_3" =>  "NER",
                "phone_code" =>  "227",
                "currency" =>  "XOF",
                "currency_name" =>  "West African CFA franc",
                "currency_symbol" =>  "CFA",
                "emoji" =>  "\ud83c\uddf3\ud83c\uddea",
                "states" =>  [
                    [
                        "id" =>  71,
                        "name" =>  "Agadez Region"
                    ],
                    [
                        "id" =>  72,
                        "name" =>  "Diffa Region"
                    ],
                    [
                        "id" =>  68,
                        "name" =>  "Dosso Region"
                    ],
                    [
                        "id" =>  70,
                        "name" =>  "Maradi Region"
                    ],
                    [
                        "id" =>  73,
                        "name" =>  "Tahoua Region"
                    ],
                    [
                        "id" =>  67,
                        "name" =>  "Tillab\u00e9ri Region"
                    ],
                    [
                        "id" =>  69,
                        "name" =>  "Zinder Region"
                    ]
                ]
            ],
            [
                "name" =>  "Nigeria",
                "numeric_code" =>  "566",
                "alpha_2" =>  "NG",
                "alpha_3" =>  "NGA",
                "phone_code" =>  "234",
                "currency" =>  "NGN",
                "currency_name" =>  "Nigerian naira",
                "currency_symbol" =>  "\u20a6",
                "emoji" =>  "\ud83c\uddf3\ud83c\uddec",
                "states" =>  [
                    [
                        "id" =>  303,
                        "name" =>  "Abia"
                    ],
                    [
                        "id" =>  293,
                        "name" =>  "Abuja Federal Capital Territory"
                    ],
                    [
                        "id" =>  320,
                        "name" =>  "Adamawa"
                    ],
                    [
                        "id" =>  304,
                        "name" =>  "Akwa Ibom"
                    ],
                    [
                        "id" =>  315,
                        "name" =>  "Anambra"
                    ],
                    [
                        "id" =>  312,
                        "name" =>  "Bauchi"
                    ],
                    [
                        "id" =>  305,
                        "name" =>  "Bayelsa"
                    ],
                    [
                        "id" =>  291,
                        "name" =>  "Benue"
                    ],
                    [
                        "id" =>  307,
                        "name" =>  "Borno"
                    ],
                    [
                        "id" =>  314,
                        "name" =>  "Cross River"
                    ],
                    [
                        "id" =>  316,
                        "name" =>  "Delta"
                    ],
                    [
                        "id" =>  311,
                        "name" =>  "Ebonyi"
                    ],
                    [
                        "id" =>  318,
                        "name" =>  "Edo"
                    ],
                    [
                        "id" =>  309,
                        "name" =>  "Ekiti"
                    ],
                    [
                        "id" =>  289,
                        "name" =>  "Enugu"
                    ],
                    [
                        "id" =>  310,
                        "name" =>  "Gombe"
                    ],
                    [
                        "id" =>  308,
                        "name" =>  "Imo"
                    ],
                    [
                        "id" =>  288,
                        "name" =>  "Jigawa"
                    ],
                    [
                        "id" =>  294,
                        "name" =>  "Kaduna"
                    ],
                    [
                        "id" =>  300,
                        "name" =>  "Kano"
                    ],
                    [
                        "id" =>  313,
                        "name" =>  "Katsina"
                    ],
                    [
                        "id" =>  290,
                        "name" =>  "Kebbi"
                    ],
                    [
                        "id" =>  298,
                        "name" =>  "Kogi"
                    ],
                    [
                        "id" =>  295,
                        "name" =>  "Kwara"
                    ],
                    [
                        "id" =>  306,
                        "name" =>  "Lagos"
                    ],
                    [
                        "id" =>  301,
                        "name" =>  "Nasarawa"
                    ],
                    [
                        "id" =>  317,
                        "name" =>  "Niger"
                    ],
                    [
                        "id" =>  323,
                        "name" =>  "Ogun"
                    ],
                    [
                        "id" =>  321,
                        "name" =>  "Ondo"
                    ],
                    [
                        "id" =>  322,
                        "name" =>  "Osun"
                    ],
                    [
                        "id" =>  296,
                        "name" =>  "Oyo"
                    ],
                    [
                        "id" =>  302,
                        "name" =>  "Plateau"
                    ],
                    [
                        "id" =>  4926,
                        "name" =>  "Rivers"
                    ],
                    [
                        "id" =>  292,
                        "name" =>  "Sokoto"
                    ],
                    [
                        "id" =>  319,
                        "name" =>  "Taraba"
                    ],
                    [
                        "id" =>  297,
                        "name" =>  "Yobe"
                    ],
                    [
                        "id" =>  299,
                        "name" =>  "Zamfara"
                    ]
                ]
            ],
            [
                "name" =>  "Niue",
                "numeric_code" =>  "570",
                "alpha_2" =>  "NU",
                "alpha_3" =>  "NIU",
                "phone_code" =>  "683",
                "currency" =>  "NZD",
                "currency_name" =>  "New Zealand dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf3\ud83c\uddfa",
                "states" =>  []
            ],
            [
                "name" =>  "Norfolk Island",
                "numeric_code" =>  "574",
                "alpha_2" =>  "NF",
                "alpha_3" =>  "NFK",
                "phone_code" =>  "672",
                "currency" =>  "AUD",
                "currency_name" =>  "Australian dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf3\ud83c\uddeb",
                "states" =>  []
            ],
            [
                "name" =>  "North Korea",
                "numeric_code" =>  "408",
                "alpha_2" =>  "KP",
                "alpha_3" =>  "PRK",
                "phone_code" =>  "850",
                "currency" =>  "KPW",
                "currency_name" =>  "North Korean Won",
                "currency_symbol" =>  "\u20a9",
                "emoji" =>  "\ud83c\uddf0\ud83c\uddf5",
                "states" =>  [
                    [
                        "id" =>  3998,
                        "name" =>  "Chagang Province"
                    ],
                    [
                        "id" =>  3999,
                        "name" =>  "Kangwon Province"
                    ],
                    [
                        "id" =>  3995,
                        "name" =>  "North Hamgyong Province"
                    ],
                    [
                        "id" =>  4004,
                        "name" =>  "North Hwanghae Province"
                    ],
                    [
                        "id" =>  4002,
                        "name" =>  "North Pyongan Province"
                    ],
                    [
                        "id" =>  4005,
                        "name" =>  "Pyongyang"
                    ],
                    [
                        "id" =>  4001,
                        "name" =>  "Rason"
                    ],
                    [
                        "id" =>  3996,
                        "name" =>  "Ryanggang Province"
                    ],
                    [
                        "id" =>  4000,
                        "name" =>  "South Hamgyong Province"
                    ],
                    [
                        "id" =>  4003,
                        "name" =>  "South Hwanghae Province"
                    ],
                    [
                        "id" =>  3997,
                        "name" =>  "South Pyongan Province"
                    ]
                ]
            ],
            [
                "name" =>  "Northern Mariana Islands",
                "numeric_code" =>  "580",
                "alpha_2" =>  "MP",
                "alpha_3" =>  "MNP",
                "phone_code" =>  "+1-670",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddf5",
                "states" =>  []
            ],
            [
                "name" =>  "Norway",
                "numeric_code" =>  "578",
                "alpha_2" =>  "NO",
                "alpha_3" =>  "NOR",
                "phone_code" =>  "47",
                "currency" =>  "NOK",
                "currency_name" =>  "Norwegian krone",
                "currency_symbol" =>  "kr",
                "emoji" =>  "\ud83c\uddf3\ud83c\uddf4",
                "states" =>  [
                    [
                        "id" =>  1017,
                        "name" =>  "Akershus"
                    ],
                    [
                        "id" =>  1011,
                        "name" =>  "Buskerud"
                    ],
                    [
                        "id" =>  1016,
                        "name" =>  "Finnmark"
                    ],
                    [
                        "id" =>  1019,
                        "name" =>  "Hedmark"
                    ],
                    [
                        "id" =>  1023,
                        "name" =>  "Hordaland"
                    ],
                    [
                        "id" =>  1026,
                        "name" =>  "Jan Mayen"
                    ],
                    [
                        "id" =>  1020,
                        "name" =>  "M\u00f8re og Romsdal"
                    ],
                    [
                        "id" =>  1012,
                        "name" =>  "Nord-Tr\u00f8ndelag"
                    ],
                    [
                        "id" =>  1025,
                        "name" =>  "Nordland"
                    ],
                    [
                        "id" =>  1009,
                        "name" =>  "Oppland"
                    ],
                    [
                        "id" =>  1007,
                        "name" =>  "Oslo"
                    ],
                    [
                        "id" =>  1022,
                        "name" =>  "\u00d8stfold"
                    ],
                    [
                        "id" =>  1021,
                        "name" =>  "Rogaland"
                    ],
                    [
                        "id" =>  1018,
                        "name" =>  "Sogn og Fjordane"
                    ],
                    [
                        "id" =>  1010,
                        "name" =>  "S\u00f8r-Tr\u00f8ndelag"
                    ],
                    [
                        "id" =>  1013,
                        "name" =>  "Svalbard"
                    ],
                    [
                        "id" =>  1024,
                        "name" =>  "Telemark"
                    ],
                    [
                        "id" =>  1015,
                        "name" =>  "Troms"
                    ],
                    [
                        "id" =>  1006,
                        "name" =>  "Tr\u00f8ndelag"
                    ],
                    [
                        "id" =>  1014,
                        "name" =>  "Vest-Agder"
                    ],
                    [
                        "id" =>  1008,
                        "name" =>  "Vestfold"
                    ]
                ]
            ],
            [
                "name" =>  "Oman",
                "numeric_code" =>  "512",
                "alpha_2" =>  "OM",
                "alpha_3" =>  "OMN",
                "phone_code" =>  "968",
                "currency" =>  "OMR",
                "currency_name" =>  "Omani rial",
                "currency_symbol" =>  ".\u0639.\u0631",
                "emoji" =>  "\ud83c\uddf4\ud83c\uddf2",
                "states" =>  [
                    [
                        "id" =>  3058,
                        "name" =>  "Ad Dakhiliyah"
                    ],
                    [
                        "id" =>  3047,
                        "name" =>  "Ad Dhahirah"
                    ],
                    [
                        "id" =>  3048,
                        "name" =>  "Al Batinah North"
                    ],
                    [
                        "id" =>  3050,
                        "name" =>  "Al Batinah Region"
                    ],
                    [
                        "id" =>  3049,
                        "name" =>  "Al Batinah South"
                    ],
                    [
                        "id" =>  3059,
                        "name" =>  "Al Buraimi"
                    ],
                    [
                        "id" =>  3056,
                        "name" =>  "Al Wusta"
                    ],
                    [
                        "id" =>  3053,
                        "name" =>  "Ash Sharqiyah North"
                    ],
                    [
                        "id" =>  3051,
                        "name" =>  "Ash Sharqiyah Region"
                    ],
                    [
                        "id" =>  3054,
                        "name" =>  "Ash Sharqiyah South"
                    ],
                    [
                        "id" =>  3057,
                        "name" =>  "Dhofar"
                    ],
                    [
                        "id" =>  3052,
                        "name" =>  "Musandam"
                    ],
                    [
                        "id" =>  3055,
                        "name" =>  "Muscat"
                    ]
                ]
            ],
            [
                "name" =>  "Pakistan",
                "numeric_code" =>  "586",
                "alpha_2" =>  "PK",
                "alpha_3" =>  "PAK",
                "phone_code" =>  "92",
                "currency" =>  "PKR",
                "currency_name" =>  "Pakistani rupee",
                "currency_symbol" =>  "\u20a8",
                "emoji" =>  "\ud83c\uddf5\ud83c\uddf0",
                "states" =>  [
                    [
                        "id" =>  3172,
                        "name" =>  "Azad Kashmir"
                    ],
                    [
                        "id" =>  3174,
                        "name" =>  "Balochistan"
                    ],
                    [
                        "id" =>  3173,
                        "name" =>  "Federally Administered Tribal Areas"
                    ],
                    [
                        "id" =>  3170,
                        "name" =>  "Gilgit-Baltistan"
                    ],
                    [
                        "id" =>  3169,
                        "name" =>  "Islamabad Capital Territory"
                    ],
                    [
                        "id" =>  3171,
                        "name" =>  "Khyber Pakhtunkhwa"
                    ],
                    [
                        "id" =>  3176,
                        "name" =>  "Punjab"
                    ],
                    [
                        "id" =>  3175,
                        "name" =>  "Sindh"
                    ]
                ]
            ],
            [
                "name" =>  "Palau",
                "numeric_code" =>  "585",
                "alpha_2" =>  "PW",
                "alpha_3" =>  "PLW",
                "phone_code" =>  "680",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf5\ud83c\uddfc",
                "states" =>  [
                    [
                        "id" =>  4540,
                        "name" =>  "Aimeliik"
                    ],
                    [
                        "id" =>  4528,
                        "name" =>  "Airai"
                    ],
                    [
                        "id" =>  4538,
                        "name" =>  "Angaur"
                    ],
                    [
                        "id" =>  4529,
                        "name" =>  "Hatohobei"
                    ],
                    [
                        "id" =>  4539,
                        "name" =>  "Kayangel"
                    ],
                    [
                        "id" =>  4532,
                        "name" =>  "Koror"
                    ],
                    [
                        "id" =>  4530,
                        "name" =>  "Melekeok"
                    ],
                    [
                        "id" =>  4537,
                        "name" =>  "Ngaraard"
                    ],
                    [
                        "id" =>  4533,
                        "name" =>  "Ngarchelong"
                    ],
                    [
                        "id" =>  4527,
                        "name" =>  "Ngardmau"
                    ],
                    [
                        "id" =>  4531,
                        "name" =>  "Ngatpang"
                    ],
                    [
                        "id" =>  4536,
                        "name" =>  "Ngchesar"
                    ],
                    [
                        "id" =>  4541,
                        "name" =>  "Ngeremlengui"
                    ],
                    [
                        "id" =>  4534,
                        "name" =>  "Ngiwal"
                    ],
                    [
                        "id" =>  4526,
                        "name" =>  "Peleliu"
                    ],
                    [
                        "id" =>  4535,
                        "name" =>  "Sonsorol"
                    ]
                ]
            ],
            [
                "name" =>  "Palestinian Territory Occupied",
                "numeric_code" =>  "275",
                "alpha_2" =>  "PS",
                "alpha_3" =>  "PSE",
                "phone_code" =>  "970",
                "currency" =>  "ILS",
                "currency_name" =>  "Israeli new shekel",
                "currency_symbol" =>  "\u20aa",
                "emoji" =>  "\ud83c\uddf5\ud83c\uddf8",
                "states" =>  []
            ],
            [
                "name" =>  "Panama",
                "numeric_code" =>  "591",
                "alpha_2" =>  "PA",
                "alpha_3" =>  "PAN",
                "phone_code" =>  "507",
                "currency" =>  "PAB",
                "currency_name" =>  "Panamanian balboa",
                "currency_symbol" =>  "B\/.",
                "emoji" =>  "\ud83c\uddf5\ud83c\udde6",
                "states" =>  [
                    [
                        "id" =>  1393,
                        "name" =>  "Bocas del Toro Province"
                    ],
                    [
                        "id" =>  1397,
                        "name" =>  "Chiriqu\u00ed Province"
                    ],
                    [
                        "id" =>  1387,
                        "name" =>  "Cocl\u00e9 Province"
                    ],
                    [
                        "id" =>  1386,
                        "name" =>  "Col\u00f3n Province"
                    ],
                    [
                        "id" =>  1385,
                        "name" =>  "Dari\u00e9n Province"
                    ],
                    [
                        "id" =>  1396,
                        "name" =>  "Ember\u00e1-Wounaan Comarca"
                    ],
                    [
                        "id" =>  1388,
                        "name" =>  "Guna Yala"
                    ],
                    [
                        "id" =>  1389,
                        "name" =>  "Herrera Province"
                    ],
                    [
                        "id" =>  1390,
                        "name" =>  "Los Santos Province"
                    ],
                    [
                        "id" =>  1391,
                        "name" =>  "Ng\u00f6be-Bugl\u00e9 Comarca"
                    ],
                    [
                        "id" =>  1394,
                        "name" =>  "Panam\u00e1 Oeste Province"
                    ],
                    [
                        "id" =>  1395,
                        "name" =>  "Panam\u00e1 Province"
                    ],
                    [
                        "id" =>  1392,
                        "name" =>  "Veraguas Province"
                    ]
                ]
            ],
            [
                "name" =>  "Papua new Guinea",
                "numeric_code" =>  "598",
                "alpha_2" =>  "PG",
                "alpha_3" =>  "PNG",
                "phone_code" =>  "675",
                "currency" =>  "PGK",
                "currency_name" =>  "Papua New Guinean kina",
                "currency_symbol" =>  "K",
                "emoji" =>  "\ud83c\uddf5\ud83c\uddec",
                "states" =>  [
                    [
                        "id" =>  4831,
                        "name" =>  "Bougainville"
                    ],
                    [
                        "id" =>  4847,
                        "name" =>  "Central Province"
                    ],
                    [
                        "id" =>  4846,
                        "name" =>  "Chimbu Province"
                    ],
                    [
                        "id" =>  4834,
                        "name" =>  "East New Britain"
                    ],
                    [
                        "id" =>  4845,
                        "name" =>  "Eastern Highlands Province"
                    ],
                    [
                        "id" =>  4848,
                        "name" =>  "Enga Province"
                    ],
                    [
                        "id" =>  4839,
                        "name" =>  "Gulf"
                    ],
                    [
                        "id" =>  4833,
                        "name" =>  "Hela"
                    ],
                    [
                        "id" =>  4832,
                        "name" =>  "Jiwaka Province"
                    ],
                    [
                        "id" =>  4843,
                        "name" =>  "Madang Province"
                    ],
                    [
                        "id" =>  4842,
                        "name" =>  "Manus Province"
                    ],
                    [
                        "id" =>  4849,
                        "name" =>  "Milne Bay Province"
                    ],
                    [
                        "id" =>  4835,
                        "name" =>  "Morobe Province"
                    ],
                    [
                        "id" =>  4841,
                        "name" =>  "New Ireland Province"
                    ],
                    [
                        "id" =>  4838,
                        "name" =>  "Oro Province"
                    ],
                    [
                        "id" =>  4837,
                        "name" =>  "Port Moresby"
                    ],
                    [
                        "id" =>  4836,
                        "name" =>  "Sandaun Province"
                    ],
                    [
                        "id" =>  4844,
                        "name" =>  "Southern Highlands Province"
                    ],
                    [
                        "id" =>  4830,
                        "name" =>  "West New Britain Province"
                    ],
                    [
                        "id" =>  4840,
                        "name" =>  "Western Highlands Province"
                    ],
                    [
                        "id" =>  4850,
                        "name" =>  "Western Province"
                    ]
                ]
            ],
            [
                "name" =>  "Paraguay",
                "numeric_code" =>  "600",
                "alpha_2" =>  "PY",
                "alpha_3" =>  "PRY",
                "phone_code" =>  "595",
                "currency" =>  "PYG",
                "currency_name" =>  "Paraguayan guarani",
                "currency_symbol" =>  "\u20b2",
                "emoji" =>  "\ud83c\uddf5\ud83c\uddfe",
                "states" =>  [
                    [
                        "id" =>  2785,
                        "name" =>  "Alto Paraguay Department"
                    ],
                    [
                        "id" =>  2784,
                        "name" =>  "Alto Paran\u00e1 Department"
                    ],
                    [
                        "id" =>  2782,
                        "name" =>  "Amambay Department"
                    ],
                    [
                        "id" =>  2780,
                        "name" =>  "Boquer\u00f3n Department"
                    ],
                    [
                        "id" =>  2773,
                        "name" =>  "Caaguaz\u00fa"
                    ],
                    [
                        "id" =>  2775,
                        "name" =>  "Caazap\u00e1"
                    ],
                    [
                        "id" =>  2771,
                        "name" =>  "Canindey\u00fa"
                    ],
                    [
                        "id" =>  2777,
                        "name" =>  "Central Department"
                    ],
                    [
                        "id" =>  2779,
                        "name" =>  "Concepci\u00f3n Department"
                    ],
                    [
                        "id" =>  2783,
                        "name" =>  "Cordillera Department"
                    ],
                    [
                        "id" =>  2772,
                        "name" =>  "Guair\u00e1 Department"
                    ],
                    [
                        "id" =>  2778,
                        "name" =>  "Itap\u00faa"
                    ],
                    [
                        "id" =>  2786,
                        "name" =>  "Misiones Department"
                    ],
                    [
                        "id" =>  2781,
                        "name" =>  "\u00d1eembuc\u00fa Department"
                    ],
                    [
                        "id" =>  2774,
                        "name" =>  "Paraguar\u00ed Department"
                    ],
                    [
                        "id" =>  2770,
                        "name" =>  "Presidente Hayes Department"
                    ],
                    [
                        "id" =>  2776,
                        "name" =>  "San Pedro Department"
                    ]
                ]
            ],
            [
                "name" =>  "Peru",
                "numeric_code" =>  "604",
                "alpha_2" =>  "PE",
                "alpha_3" =>  "PER",
                "phone_code" =>  "51",
                "currency" =>  "PEN",
                "currency_name" =>  "Peruvian sol",
                "currency_symbol" =>  "S\/.",
                "emoji" =>  "\ud83c\uddf5\ud83c\uddea",
                "states" =>  [
                    [
                        "id" =>  3685,
                        "name" =>  "Amazonas"
                    ],
                    [
                        "id" =>  3680,
                        "name" =>  "\u00c1ncash"
                    ],
                    [
                        "id" =>  3699,
                        "name" =>  "Apur\u00edmac"
                    ],
                    [
                        "id" =>  3681,
                        "name" =>  "Arequipa"
                    ],
                    [
                        "id" =>  3692,
                        "name" =>  "Ayacucho"
                    ],
                    [
                        "id" =>  3688,
                        "name" =>  "Cajamarca"
                    ],
                    [
                        "id" =>  3701,
                        "name" =>  "Callao"
                    ],
                    [
                        "id" =>  3691,
                        "name" =>  "Cusco"
                    ],
                    [
                        "id" =>  3679,
                        "name" =>  "Huancavelica"
                    ],
                    [
                        "id" =>  3687,
                        "name" =>  "Huanuco"
                    ],
                    [
                        "id" =>  3700,
                        "name" =>  "Ica"
                    ],
                    [
                        "id" =>  3693,
                        "name" =>  "Jun\u00edn"
                    ],
                    [
                        "id" =>  3683,
                        "name" =>  "La Libertad"
                    ],
                    [
                        "id" =>  3702,
                        "name" =>  "Lambayeque"
                    ],
                    [
                        "id" =>  3695,
                        "name" =>  "Lima"
                    ],
                    [
                        "id" =>  4922,
                        "name" =>  "Loreto"
                    ],
                    [
                        "id" =>  3678,
                        "name" =>  "Madre de Dios"
                    ],
                    [
                        "id" =>  3698,
                        "name" =>  "Moquegua"
                    ],
                    [
                        "id" =>  3686,
                        "name" =>  "Pasco"
                    ],
                    [
                        "id" =>  3697,
                        "name" =>  "Piura"
                    ],
                    [
                        "id" =>  3682,
                        "name" =>  "Puno"
                    ],
                    [
                        "id" =>  3694,
                        "name" =>  "San Mart\u00edn"
                    ],
                    [
                        "id" =>  3696,
                        "name" =>  "Tacna"
                    ],
                    [
                        "id" =>  3689,
                        "name" =>  "Tumbes"
                    ],
                    [
                        "id" =>  3684,
                        "name" =>  "Ucayali"
                    ]
                ]
            ],
            [
                "name" =>  "Philippines",
                "numeric_code" =>  "608",
                "alpha_2" =>  "PH",
                "alpha_3" =>  "PHL",
                "phone_code" =>  "63",
                "currency" =>  "PHP",
                "currency_name" =>  "Philippine peso",
                "currency_symbol" =>  "\u20b1",
                "emoji" =>  "\ud83c\uddf5\ud83c\udded",
                "states" =>  [
                    [
                        "id" =>  1324,
                        "name" =>  "Abra"
                    ],
                    [
                        "id" =>  1323,
                        "name" =>  "Agusan del Norte"
                    ],
                    [
                        "id" =>  1326,
                        "name" =>  "Agusan del Sur"
                    ],
                    [
                        "id" =>  1331,
                        "name" =>  "Aklan"
                    ],
                    [
                        "id" =>  1337,
                        "name" =>  "Albay"
                    ],
                    [
                        "id" =>  1336,
                        "name" =>  "Antique"
                    ],
                    [
                        "id" =>  1334,
                        "name" =>  "Apayao"
                    ],
                    [
                        "id" =>  1341,
                        "name" =>  "Aurora"
                    ],
                    [
                        "id" =>  1316,
                        "name" =>  "Autonomous Region in Muslim Mindanao"
                    ],
                    [
                        "id" =>  1346,
                        "name" =>  "Basilan"
                    ],
                    [
                        "id" =>  1344,
                        "name" =>  "Bataan"
                    ],
                    [
                        "id" =>  1352,
                        "name" =>  "Batanes"
                    ],
                    [
                        "id" =>  1359,
                        "name" =>  "Batangas"
                    ],
                    [
                        "id" =>  1363,
                        "name" =>  "Benguet"
                    ],
                    [
                        "id" =>  1304,
                        "name" =>  "Bicol"
                    ],
                    [
                        "id" =>  1274,
                        "name" =>  "Biliran"
                    ],
                    [
                        "id" =>  1272,
                        "name" =>  "Bohol"
                    ],
                    [
                        "id" =>  1270,
                        "name" =>  "Bukidnon"
                    ],
                    [
                        "id" =>  1278,
                        "name" =>  "Bulacan"
                    ],
                    [
                        "id" =>  1279,
                        "name" =>  "Cagayan"
                    ],
                    [
                        "id" =>  1342,
                        "name" =>  "Cagayan Valley"
                    ],
                    [
                        "id" =>  1294,
                        "name" =>  "Calabarzon"
                    ],
                    [
                        "id" =>  1283,
                        "name" =>  "Camarines Norte"
                    ],
                    [
                        "id" =>  1287,
                        "name" =>  "Camarines Sur"
                    ],
                    [
                        "id" =>  1285,
                        "name" =>  "Camiguin"
                    ],
                    [
                        "id" =>  1292,
                        "name" =>  "Capiz"
                    ],
                    [
                        "id" =>  1314,
                        "name" =>  "Caraga"
                    ],
                    [
                        "id" =>  1301,
                        "name" =>  "Catanduanes"
                    ],
                    [
                        "id" =>  1307,
                        "name" =>  "Cavite"
                    ],
                    [
                        "id" =>  1306,
                        "name" =>  "Cebu"
                    ],
                    [
                        "id" =>  1345,
                        "name" =>  "Central Luzon"
                    ],
                    [
                        "id" =>  1308,
                        "name" =>  "Central Visayas"
                    ],
                    [
                        "id" =>  1311,
                        "name" =>  "Compostela Valley"
                    ],
                    [
                        "id" =>  1335,
                        "name" =>  "Cordillera Administrative"
                    ],
                    [
                        "id" =>  1320,
                        "name" =>  "Cotabato"
                    ],
                    [
                        "id" =>  1340,
                        "name" =>  "Davao"
                    ],
                    [
                        "id" =>  1319,
                        "name" =>  "Davao del Norte"
                    ],
                    [
                        "id" =>  1318,
                        "name" =>  "Davao del Sur"
                    ],
                    [
                        "id" =>  1309,
                        "name" =>  "Davao Occidental"
                    ],
                    [
                        "id" =>  1289,
                        "name" =>  "Davao Oriental"
                    ],
                    [
                        "id" =>  1291,
                        "name" =>  "Dinagat Islands"
                    ],
                    [
                        "id" =>  1290,
                        "name" =>  "Eastern Samar"
                    ],
                    [
                        "id" =>  1322,
                        "name" =>  "Eastern Visayas"
                    ],
                    [
                        "id" =>  1303,
                        "name" =>  "Guimaras"
                    ],
                    [
                        "id" =>  1300,
                        "name" =>  "Ifugao"
                    ],
                    [
                        "id" =>  1355,
                        "name" =>  "Ilocos"
                    ],
                    [
                        "id" =>  1298,
                        "name" =>  "Ilocos Norte"
                    ],
                    [
                        "id" =>  1321,
                        "name" =>  "Ilocos Sur"
                    ],
                    [
                        "id" =>  1315,
                        "name" =>  "Iloilo"
                    ],
                    [
                        "id" =>  1313,
                        "name" =>  "Isabela"
                    ],
                    [
                        "id" =>  1312,
                        "name" =>  "Kalinga"
                    ],
                    [
                        "id" =>  1317,
                        "name" =>  "La Union"
                    ],
                    [
                        "id" =>  1328,
                        "name" =>  "Laguna"
                    ],
                    [
                        "id" =>  1327,
                        "name" =>  "Lanao del Norte"
                    ],
                    [
                        "id" =>  1333,
                        "name" =>  "Lanao del Sur"
                    ],
                    [
                        "id" =>  1332,
                        "name" =>  "Leyte"
                    ],
                    [
                        "id" =>  1330,
                        "name" =>  "Maguindanao"
                    ],
                    [
                        "id" =>  1329,
                        "name" =>  "Marinduque"
                    ],
                    [
                        "id" =>  1338,
                        "name" =>  "Masbate"
                    ],
                    [
                        "id" =>  1347,
                        "name" =>  "Metro Manila"
                    ],
                    [
                        "id" =>  1299,
                        "name" =>  "Mimaropa"
                    ],
                    [
                        "id" =>  1343,
                        "name" =>  "Misamis Occidental"
                    ],
                    [
                        "id" =>  1348,
                        "name" =>  "Misamis Oriental"
                    ],
                    [
                        "id" =>  1353,
                        "name" =>  "Mountain Province"
                    ],
                    [
                        "id" =>  1351,
                        "name" =>  "Negros Occidental"
                    ],
                    [
                        "id" =>  1350,
                        "name" =>  "Negros Oriental"
                    ],
                    [
                        "id" =>  1339,
                        "name" =>  "Northern Mindanao"
                    ],
                    [
                        "id" =>  1349,
                        "name" =>  "Northern Samar"
                    ],
                    [
                        "id" =>  1360,
                        "name" =>  "Nueva Ecija"
                    ],
                    [
                        "id" =>  1358,
                        "name" =>  "Nueva Vizcaya"
                    ],
                    [
                        "id" =>  1356,
                        "name" =>  "Occidental Mindoro"
                    ],
                    [
                        "id" =>  1354,
                        "name" =>  "Oriental Mindoro"
                    ],
                    [
                        "id" =>  1361,
                        "name" =>  "Palawan"
                    ],
                    [
                        "id" =>  1365,
                        "name" =>  "Pampanga"
                    ],
                    [
                        "id" =>  1364,
                        "name" =>  "Pangasinan"
                    ],
                    [
                        "id" =>  1275,
                        "name" =>  "Quezon"
                    ],
                    [
                        "id" =>  1273,
                        "name" =>  "Quirino"
                    ],
                    [
                        "id" =>  1271,
                        "name" =>  "Rizal"
                    ],
                    [
                        "id" =>  1269,
                        "name" =>  "Romblon"
                    ],
                    [
                        "id" =>  1277,
                        "name" =>  "Sarangani"
                    ],
                    [
                        "id" =>  1276,
                        "name" =>  "Siquijor"
                    ],
                    [
                        "id" =>  1310,
                        "name" =>  "Soccsksargen"
                    ],
                    [
                        "id" =>  1281,
                        "name" =>  "Sorsogon"
                    ],
                    [
                        "id" =>  1280,
                        "name" =>  "South Cotabato"
                    ],
                    [
                        "id" =>  1284,
                        "name" =>  "Southern Leyte"
                    ],
                    [
                        "id" =>  1282,
                        "name" =>  "Sultan Kudarat"
                    ],
                    [
                        "id" =>  1288,
                        "name" =>  "Sulu"
                    ],
                    [
                        "id" =>  1286,
                        "name" =>  "Surigao del Norte"
                    ],
                    [
                        "id" =>  1296,
                        "name" =>  "Surigao del Sur"
                    ],
                    [
                        "id" =>  1295,
                        "name" =>  "Tarlac"
                    ],
                    [
                        "id" =>  1293,
                        "name" =>  "Tawi-Tawi"
                    ],
                    [
                        "id" =>  5115,
                        "name" =>  "Western Samar"
                    ],
                    [
                        "id" =>  1305,
                        "name" =>  "Western Visayas"
                    ],
                    [
                        "id" =>  1297,
                        "name" =>  "Zambales"
                    ],
                    [
                        "id" =>  1302,
                        "name" =>  "Zamboanga del Norte"
                    ],
                    [
                        "id" =>  1357,
                        "name" =>  "Zamboanga del Sur"
                    ],
                    [
                        "id" =>  1325,
                        "name" =>  "Zamboanga Peninsula"
                    ],
                    [
                        "id" =>  1362,
                        "name" =>  "Zamboanga Sibugay"
                    ]
                ]
            ],
            [
                "name" =>  "Pitcairn Island",
                "numeric_code" =>  "612",
                "alpha_2" =>  "PN",
                "alpha_3" =>  "PCN",
                "phone_code" =>  "870",
                "currency" =>  "NZD",
                "currency_name" =>  "New Zealand dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf5\ud83c\uddf3",
                "states" =>  []
            ],
            [
                "name" =>  "Poland",
                "numeric_code" =>  "616",
                "alpha_2" =>  "PL",
                "alpha_3" =>  "POL",
                "phone_code" =>  "48",
                "currency" =>  "PLN",
                "currency_name" =>  "Polish z\u0142oty",
                "currency_symbol" =>  "z\u0142",
                "emoji" =>  "\ud83c\uddf5\ud83c\uddf1",
                "states" =>  [
                    [
                        "id" =>  1634,
                        "name" =>  "Greater Poland"
                    ],
                    [
                        "id" =>  1625,
                        "name" =>  "Kuyavian-Pomeranian"
                    ],
                    [
                        "id" =>  1635,
                        "name" =>  "Lesser Poland"
                    ],
                    [
                        "id" =>  1629,
                        "name" =>  "Lower Silesian"
                    ],
                    [
                        "id" =>  1638,
                        "name" =>  "Lublin"
                    ],
                    [
                        "id" =>  1631,
                        "name" =>  "Lubusz"
                    ],
                    [
                        "id" =>  1636,
                        "name" =>  "\u0141\u00f3d\u017a"
                    ],
                    [
                        "id" =>  1637,
                        "name" =>  "Masovian"
                    ],
                    [
                        "id" =>  1622,
                        "name" =>  "Opole"
                    ],
                    [
                        "id" =>  1626,
                        "name" =>  "Podkarpackie"
                    ],
                    [
                        "id" =>  1632,
                        "name" =>  "Podlaskie"
                    ],
                    [
                        "id" =>  1624,
                        "name" =>  "Pomeranian"
                    ],
                    [
                        "id" =>  1623,
                        "name" =>  "Silesian"
                    ],
                    [
                        "id" =>  1630,
                        "name" =>  "\u015awi\u0119tokrzyskie"
                    ],
                    [
                        "id" =>  1628,
                        "name" =>  "Warmian-Masurian"
                    ],
                    [
                        "id" =>  1633,
                        "name" =>  "West Pomeranian"
                    ]
                ]
            ],
            [
                "name" =>  "Portugal",
                "numeric_code" =>  "620",
                "alpha_2" =>  "PT",
                "alpha_3" =>  "PRT",
                "phone_code" =>  "351",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf5\ud83c\uddf9",
                "states" =>  [
                    [
                        "id" =>  2233,
                        "name" =>  "A\u00e7ores"
                    ],
                    [
                        "id" =>  2235,
                        "name" =>  "Aveiro"
                    ],
                    [
                        "id" =>  2230,
                        "name" =>  "Beja"
                    ],
                    [
                        "id" =>  2244,
                        "name" =>  "Braga"
                    ],
                    [
                        "id" =>  2229,
                        "name" =>  "Bragan\u00e7a"
                    ],
                    [
                        "id" =>  2241,
                        "name" =>  "Castelo Branco"
                    ],
                    [
                        "id" =>  2246,
                        "name" =>  "Coimbra"
                    ],
                    [
                        "id" =>  2236,
                        "name" =>  "\u00c9vora"
                    ],
                    [
                        "id" =>  2239,
                        "name" =>  "Faro"
                    ],
                    [
                        "id" =>  4859,
                        "name" =>  "Guarda"
                    ],
                    [
                        "id" =>  2240,
                        "name" =>  "Leiria"
                    ],
                    [
                        "id" =>  2228,
                        "name" =>  "Lisbon"
                    ],
                    [
                        "id" =>  2231,
                        "name" =>  "Madeira"
                    ],
                    [
                        "id" =>  2232,
                        "name" =>  "Portalegre"
                    ],
                    [
                        "id" =>  2243,
                        "name" =>  "Porto"
                    ],
                    [
                        "id" =>  2238,
                        "name" =>  "Santar\u00e9m"
                    ],
                    [
                        "id" =>  2242,
                        "name" =>  "Set\u00fabal"
                    ],
                    [
                        "id" =>  2245,
                        "name" =>  "Viana do Castelo"
                    ],
                    [
                        "id" =>  2234,
                        "name" =>  "Vila Real"
                    ],
                    [
                        "id" =>  2237,
                        "name" =>  "Viseu"
                    ]
                ]
            ],
            [
                "name" =>  "Puerto Rico",
                "numeric_code" =>  "630",
                "alpha_2" =>  "PR",
                "alpha_3" =>  "PRI",
                "phone_code" =>  "+1-787 and 1-939",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf5\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  5081,
                        "name" =>  "Arecibo"
                    ],
                    [
                        "id" =>  5076,
                        "name" =>  "Bayamon"
                    ],
                    [
                        "id" =>  5079,
                        "name" =>  "Caguas"
                    ],
                    [
                        "id" =>  5077,
                        "name" =>  "Carolina"
                    ],
                    [
                        "id" =>  5080,
                        "name" =>  "Guaynabo"
                    ],
                    [
                        "id" =>  5083,
                        "name" =>  "Mayag\u00fcez"
                    ],
                    [
                        "id" =>  5078,
                        "name" =>  "Ponce"
                    ],
                    [
                        "id" =>  5075,
                        "name" =>  "San Juan"
                    ],
                    [
                        "id" =>  5082,
                        "name" =>  "Toa Baja"
                    ],
                    [
                        "id" =>  5084,
                        "name" =>  "Trujillo Alto"
                    ]
                ]
            ],
            [
                "name" =>  "Qatar",
                "numeric_code" =>  "634",
                "alpha_2" =>  "QA",
                "alpha_3" =>  "QAT",
                "phone_code" =>  "974",
                "currency" =>  "QAR",
                "currency_name" =>  "Qatari riyal",
                "currency_symbol" =>  "\u0642.\u0631",
                "emoji" =>  "\ud83c\uddf6\ud83c\udde6",
                "states" =>  [
                    [
                        "id" =>  3182,
                        "name" =>  "Al Daayen"
                    ],
                    [
                        "id" =>  3183,
                        "name" =>  "Al Khor"
                    ],
                    [
                        "id" =>  3177,
                        "name" =>  "Al Rayyan Municipality"
                    ],
                    [
                        "id" =>  3179,
                        "name" =>  "Al Wakrah"
                    ],
                    [
                        "id" =>  3178,
                        "name" =>  "Al-Shahaniya"
                    ],
                    [
                        "id" =>  3181,
                        "name" =>  "Doha"
                    ],
                    [
                        "id" =>  3180,
                        "name" =>  "Madinat ash Shamal"
                    ],
                    [
                        "id" =>  3184,
                        "name" =>  "Umm Salal Municipality"
                    ]
                ]
            ],
            [
                "name" =>  "Reunion",
                "numeric_code" =>  "638",
                "alpha_2" =>  "RE",
                "alpha_3" =>  "REU",
                "phone_code" =>  "262",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf7\ud83c\uddea",
                "states" =>  []
            ],
            [
                "name" =>  "Romania",
                "numeric_code" =>  "642",
                "alpha_2" =>  "RO",
                "alpha_3" =>  "ROU",
                "phone_code" =>  "40",
                "currency" =>  "RON",
                "currency_name" =>  "Romanian leu",
                "currency_symbol" =>  "lei",
                "emoji" =>  "\ud83c\uddf7\ud83c\uddf4",
                "states" =>  [
                    [
                        "id" =>  4724,
                        "name" =>  "Alba"
                    ],
                    [
                        "id" =>  4739,
                        "name" =>  "Arad County"
                    ],
                    [
                        "id" =>  4722,
                        "name" =>  "Arges"
                    ],
                    [
                        "id" =>  4744,
                        "name" =>  "Bac\u0103u County"
                    ],
                    [
                        "id" =>  4723,
                        "name" =>  "Bihor County"
                    ],
                    [
                        "id" =>  4733,
                        "name" =>  "Bistri\u021ba-N\u0103s\u0103ud County"
                    ],
                    [
                        "id" =>  4740,
                        "name" =>  "Boto\u0219ani County"
                    ],
                    [
                        "id" =>  4736,
                        "name" =>  "Braila"
                    ],
                    [
                        "id" =>  4759,
                        "name" =>  "Bra\u0219ov County"
                    ],
                    [
                        "id" =>  4730,
                        "name" =>  "Bucharest"
                    ],
                    [
                        "id" =>  4756,
                        "name" =>  "Buz\u0103u County"
                    ],
                    [
                        "id" =>  4732,
                        "name" =>  "C\u0103l\u0103ra\u0219i County"
                    ],
                    [
                        "id" =>  4753,
                        "name" =>  "Cara\u0219-Severin County"
                    ],
                    [
                        "id" =>  4734,
                        "name" =>  "Cluj County"
                    ],
                    [
                        "id" =>  4737,
                        "name" =>  "Constan\u021ba County"
                    ],
                    [
                        "id" =>  4754,
                        "name" =>  "Covasna County"
                    ],
                    [
                        "id" =>  4745,
                        "name" =>  "D\u00e2mbovi\u021ba County"
                    ],
                    [
                        "id" =>  4742,
                        "name" =>  "Dolj County"
                    ],
                    [
                        "id" =>  4747,
                        "name" =>  "Gala\u021bi County"
                    ],
                    [
                        "id" =>  4726,
                        "name" =>  "Giurgiu County"
                    ],
                    [
                        "id" =>  4750,
                        "name" =>  "Gorj County"
                    ],
                    [
                        "id" =>  4749,
                        "name" =>  "Harghita County"
                    ],
                    [
                        "id" =>  4721,
                        "name" =>  "Hunedoara County"
                    ],
                    [
                        "id" =>  4743,
                        "name" =>  "Ialomi\u021ba County"
                    ],
                    [
                        "id" =>  4735,
                        "name" =>  "Ia\u0219i County"
                    ],
                    [
                        "id" =>  4725,
                        "name" =>  "Ilfov County"
                    ],
                    [
                        "id" =>  4760,
                        "name" =>  "Maramure\u0219 County"
                    ],
                    [
                        "id" =>  4751,
                        "name" =>  "Mehedin\u021bi County"
                    ],
                    [
                        "id" =>  4915,
                        "name" =>  "Mure\u0219 County"
                    ],
                    [
                        "id" =>  4731,
                        "name" =>  "Neam\u021b County"
                    ],
                    [
                        "id" =>  4738,
                        "name" =>  "Olt County"
                    ],
                    [
                        "id" =>  4729,
                        "name" =>  "Prahova County"
                    ],
                    [
                        "id" =>  4741,
                        "name" =>  "S\u0103laj County"
                    ],
                    [
                        "id" =>  4746,
                        "name" =>  "Satu Mare County"
                    ],
                    [
                        "id" =>  4755,
                        "name" =>  "Sibiu County"
                    ],
                    [
                        "id" =>  4720,
                        "name" =>  "Suceava County"
                    ],
                    [
                        "id" =>  4728,
                        "name" =>  "Teleorman County"
                    ],
                    [
                        "id" =>  4748,
                        "name" =>  "Timi\u0219 County"
                    ],
                    [
                        "id" =>  4727,
                        "name" =>  "Tulcea County"
                    ],
                    [
                        "id" =>  4757,
                        "name" =>  "V\u00e2lcea County"
                    ],
                    [
                        "id" =>  4752,
                        "name" =>  "Vaslui County"
                    ],
                    [
                        "id" =>  4758,
                        "name" =>  "Vrancea County"
                    ]
                ]
            ],
            [
                "name" =>  "Russia",
                "numeric_code" =>  "643",
                "alpha_2" =>  "RU",
                "alpha_3" =>  "RUS",
                "phone_code" =>  "7",
                "currency" =>  "RUB",
                "currency_name" =>  "Russian ruble",
                "currency_symbol" =>  "\u20bd",
                "emoji" =>  "\ud83c\uddf7\ud83c\uddfa",
                "states" =>  [
                    [
                        "id" =>  1911,
                        "name" =>  "Altai Krai"
                    ],
                    [
                        "id" =>  1876,
                        "name" =>  "Altai Republic"
                    ],
                    [
                        "id" =>  1858,
                        "name" =>  "Amur Oblast"
                    ],
                    [
                        "id" =>  1849,
                        "name" =>  "Arkhangelsk"
                    ],
                    [
                        "id" =>  1866,
                        "name" =>  "Astrakhan Oblast"
                    ],
                    [
                        "id" =>  1903,
                        "name" =>  "Belgorod Oblast"
                    ],
                    [
                        "id" =>  1867,
                        "name" =>  "Bryansk Oblast"
                    ],
                    [
                        "id" =>  1893,
                        "name" =>  "Chechen Republic"
                    ],
                    [
                        "id" =>  1845,
                        "name" =>  "Chelyabinsk Oblast"
                    ],
                    [
                        "id" =>  1859,
                        "name" =>  "Chukotka Autonomous Okrug"
                    ],
                    [
                        "id" =>  1914,
                        "name" =>  "Chuvash Republic"
                    ],
                    [
                        "id" =>  1880,
                        "name" =>  "Irkutsk"
                    ],
                    [
                        "id" =>  1864,
                        "name" =>  "Ivanovo Oblast"
                    ],
                    [
                        "id" =>  1835,
                        "name" =>  "Jewish Autonomous Oblast"
                    ],
                    [
                        "id" =>  1892,
                        "name" =>  "Kabardino-Balkar Republic"
                    ],
                    [
                        "id" =>  1902,
                        "name" =>  "Kaliningrad"
                    ],
                    [
                        "id" =>  1844,
                        "name" =>  "Kaluga Oblast"
                    ],
                    [
                        "id" =>  1865,
                        "name" =>  "Kamchatka Krai"
                    ],
                    [
                        "id" =>  1869,
                        "name" =>  "Karachay-Cherkess Republic"
                    ],
                    [
                        "id" =>  1897,
                        "name" =>  "Kemerovo Oblast"
                    ],
                    [
                        "id" =>  1873,
                        "name" =>  "Khabarovsk Krai"
                    ],
                    [
                        "id" =>  1838,
                        "name" =>  "Khanty-Mansi Autonomous Okrug"
                    ],
                    [
                        "id" =>  1890,
                        "name" =>  "Kirov Oblast"
                    ],
                    [
                        "id" =>  1899,
                        "name" =>  "Komi Republic"
                    ],
                    [
                        "id" =>  1910,
                        "name" =>  "Kostroma Oblast"
                    ],
                    [
                        "id" =>  1891,
                        "name" =>  "Krasnodar Krai"
                    ],
                    [
                        "id" =>  1840,
                        "name" =>  "Krasnoyarsk Krai"
                    ],
                    [
                        "id" =>  1915,
                        "name" =>  "Kurgan Oblast"
                    ],
                    [
                        "id" =>  1855,
                        "name" =>  "Kursk Oblast"
                    ],
                    [
                        "id" =>  1896,
                        "name" =>  "Leningrad Oblast"
                    ],
                    [
                        "id" =>  1889,
                        "name" =>  "Lipetsk Oblast"
                    ],
                    [
                        "id" =>  1839,
                        "name" =>  "Magadan Oblast"
                    ],
                    [
                        "id" =>  1870,
                        "name" =>  "Mari El Republic"
                    ],
                    [
                        "id" =>  1901,
                        "name" =>  "Moscow"
                    ],
                    [
                        "id" =>  1882,
                        "name" =>  "Moscow Oblast"
                    ],
                    [
                        "id" =>  1843,
                        "name" =>  "Murmansk Oblast"
                    ],
                    [
                        "id" =>  1836,
                        "name" =>  "Nenets Autonomous Okrug"
                    ],
                    [
                        "id" =>  1857,
                        "name" =>  "Nizhny Novgorod Oblast"
                    ],
                    [
                        "id" =>  1834,
                        "name" =>  "Novgorod Oblast"
                    ],
                    [
                        "id" =>  1888,
                        "name" =>  "Novosibirsk"
                    ],
                    [
                        "id" =>  1846,
                        "name" =>  "Omsk Oblast"
                    ],
                    [
                        "id" =>  1886,
                        "name" =>  "Orenburg Oblast"
                    ],
                    [
                        "id" =>  1908,
                        "name" =>  "Oryol Oblast"
                    ],
                    [
                        "id" =>  1909,
                        "name" =>  "Penza Oblast"
                    ],
                    [
                        "id" =>  1871,
                        "name" =>  "Perm Krai"
                    ],
                    [
                        "id" =>  1833,
                        "name" =>  "Primorsky Krai"
                    ],
                    [
                        "id" =>  1863,
                        "name" =>  "Pskov Oblast"
                    ],
                    [
                        "id" =>  1852,
                        "name" =>  "Republic of Adygea"
                    ],
                    [
                        "id" =>  1854,
                        "name" =>  "Republic of Bashkortostan"
                    ],
                    [
                        "id" =>  1842,
                        "name" =>  "Republic of Buryatia"
                    ],
                    [
                        "id" =>  1850,
                        "name" =>  "Republic of Dagestan"
                    ],
                    [
                        "id" =>  1884,
                        "name" =>  "Republic of Ingushetia"
                    ],
                    [
                        "id" =>  1883,
                        "name" =>  "Republic of Kalmykia"
                    ],
                    [
                        "id" =>  1841,
                        "name" =>  "Republic of Karelia"
                    ],
                    [
                        "id" =>  1877,
                        "name" =>  "Republic of Khakassia"
                    ],
                    [
                        "id" =>  1898,
                        "name" =>  "Republic of Mordovia"
                    ],
                    [
                        "id" =>  1853,
                        "name" =>  "Republic of North Ossetia-Alania"
                    ],
                    [
                        "id" =>  1861,
                        "name" =>  "Republic of Tatarstan"
                    ],
                    [
                        "id" =>  1837,
                        "name" =>  "Rostov Oblast"
                    ],
                    [
                        "id" =>  1905,
                        "name" =>  "Ryazan Oblast"
                    ],
                    [
                        "id" =>  1879,
                        "name" =>  "Saint Petersburg"
                    ],
                    [
                        "id" =>  1848,
                        "name" =>  "Sakha Republic"
                    ],
                    [
                        "id" =>  1875,
                        "name" =>  "Sakhalin"
                    ],
                    [
                        "id" =>  1862,
                        "name" =>  "Samara Oblast"
                    ],
                    [
                        "id" =>  1887,
                        "name" =>  "Saratov Oblast"
                    ],
                    [
                        "id" =>  1912,
                        "name" =>  "Sevastopol"
                    ],
                    [
                        "id" =>  1885,
                        "name" =>  "Smolensk Oblast"
                    ],
                    [
                        "id" =>  1868,
                        "name" =>  "Stavropol Krai"
                    ],
                    [
                        "id" =>  1894,
                        "name" =>  "Sverdlovsk"
                    ],
                    [
                        "id" =>  1878,
                        "name" =>  "Tambov Oblast"
                    ],
                    [
                        "id" =>  1872,
                        "name" =>  "Tomsk Oblast"
                    ],
                    [
                        "id" =>  1895,
                        "name" =>  "Tula Oblast"
                    ],
                    [
                        "id" =>  1900,
                        "name" =>  "Tuva Republic"
                    ],
                    [
                        "id" =>  1860,
                        "name" =>  "Tver Oblast"
                    ],
                    [
                        "id" =>  1907,
                        "name" =>  "Tyumen Oblast"
                    ],
                    [
                        "id" =>  1913,
                        "name" =>  "Udmurt Republic"
                    ],
                    [
                        "id" =>  1856,
                        "name" =>  "Ulyanovsk Oblast"
                    ],
                    [
                        "id" =>  1881,
                        "name" =>  "Vladimir Oblast"
                    ],
                    [
                        "id" =>  4916,
                        "name" =>  "Volgograd Oblast"
                    ],
                    [
                        "id" =>  1874,
                        "name" =>  "Vologda Oblast"
                    ],
                    [
                        "id" =>  1906,
                        "name" =>  "Voronezh Oblast"
                    ],
                    [
                        "id" =>  1847,
                        "name" =>  "Yamalo-Nenets Autonomous Okrug"
                    ],
                    [
                        "id" =>  1851,
                        "name" =>  "Yaroslavl Oblast"
                    ],
                    [
                        "id" =>  1904,
                        "name" =>  "Zabaykalsky Krai"
                    ]
                ]
            ],
            [
                "name" =>  "Rwanda",
                "numeric_code" =>  "646",
                "alpha_2" =>  "RW",
                "alpha_3" =>  "RWA",
                "phone_code" =>  "250",
                "currency" =>  "RWF",
                "currency_name" =>  "Rwandan franc",
                "currency_symbol" =>  "FRw",
                "emoji" =>  "\ud83c\uddf7\ud83c\uddfc",
                "states" =>  [
                    [
                        "id" =>  261,
                        "name" =>  "Eastern Province"
                    ],
                    [
                        "id" =>  262,
                        "name" =>  "Kigali district"
                    ],
                    [
                        "id" =>  263,
                        "name" =>  "Northern Province"
                    ],
                    [
                        "id" =>  259,
                        "name" =>  "Southern Province"
                    ],
                    [
                        "id" =>  260,
                        "name" =>  "Western Province"
                    ]
                ]
            ],
            [
                "name" =>  "Saint Helena",
                "numeric_code" =>  "654",
                "alpha_2" =>  "SH",
                "alpha_3" =>  "SHN",
                "phone_code" =>  "290",
                "currency" =>  "SHP",
                "currency_name" =>  "Saint Helena pound",
                "currency_symbol" =>  "\u00a3",
                "emoji" =>  "\ud83c\uddf8\ud83c\udded",
                "states" =>  []
            ],
            [
                "name" =>  "Saint Kitts And Nevis",
                "numeric_code" =>  "659",
                "alpha_2" =>  "KN",
                "alpha_3" =>  "KNA",
                "phone_code" =>  "+1-869",
                "currency" =>  "XCD",
                "currency_name" =>  "Eastern Caribbean dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf0\ud83c\uddf3",
                "states" =>  [
                    [
                        "id" =>  3833,
                        "name" =>  "Christ Church Nichola Town Parish"
                    ],
                    [
                        "id" =>  3832,
                        "name" =>  "Nevis"
                    ],
                    [
                        "id" =>  3836,
                        "name" =>  "Saint Anne Sandy Point Parish"
                    ],
                    [
                        "id" =>  3837,
                        "name" =>  "Saint George Gingerland Parish"
                    ],
                    [
                        "id" =>  3835,
                        "name" =>  "Saint James Windward Parish"
                    ],
                    [
                        "id" =>  3845,
                        "name" =>  "Saint John Capisterre Parish"
                    ],
                    [
                        "id" =>  3840,
                        "name" =>  "Saint John Figtree Parish"
                    ],
                    [
                        "id" =>  3841,
                        "name" =>  "Saint Kitts"
                    ],
                    [
                        "id" =>  3844,
                        "name" =>  "Saint Mary Cayon Parish"
                    ],
                    [
                        "id" =>  3834,
                        "name" =>  "Saint Paul Capisterre Parish"
                    ],
                    [
                        "id" =>  3838,
                        "name" =>  "Saint Paul Charlestown Parish"
                    ],
                    [
                        "id" =>  3831,
                        "name" =>  "Saint Peter Basseterre Parish"
                    ],
                    [
                        "id" =>  3839,
                        "name" =>  "Saint Thomas Lowland Parish"
                    ],
                    [
                        "id" =>  3842,
                        "name" =>  "Saint Thomas Middle Island Parish"
                    ],
                    [
                        "id" =>  3843,
                        "name" =>  "Trinity Palmetto Point Parish"
                    ]
                ]
            ],
            [
                "name" =>  "Saint Lucia",
                "numeric_code" =>  "662",
                "alpha_2" =>  "LC",
                "alpha_3" =>  "LCA",
                "phone_code" =>  "+1-758",
                "currency" =>  "XCD",
                "currency_name" =>  "Eastern Caribbean dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf1\ud83c\udde8",
                "states" =>  [
                    [
                        "id" =>  3757,
                        "name" =>  "Anse la Raye Quarter"
                    ],
                    [
                        "id" =>  3761,
                        "name" =>  "Canaries"
                    ],
                    [
                        "id" =>  3758,
                        "name" =>  "Castries Quarter"
                    ],
                    [
                        "id" =>  3760,
                        "name" =>  "Choiseul Quarter"
                    ],
                    [
                        "id" =>  3767,
                        "name" =>  "Dauphin Quarter"
                    ],
                    [
                        "id" =>  3756,
                        "name" =>  "Dennery Quarter"
                    ],
                    [
                        "id" =>  3766,
                        "name" =>  "Gros Islet Quarter"
                    ],
                    [
                        "id" =>  3759,
                        "name" =>  "Laborie Quarter"
                    ],
                    [
                        "id" =>  3762,
                        "name" =>  "Micoud Quarter"
                    ],
                    [
                        "id" =>  3765,
                        "name" =>  "Praslin Quarter"
                    ],
                    [
                        "id" =>  3764,
                        "name" =>  "Soufri\u00e8re Quarter"
                    ],
                    [
                        "id" =>  3763,
                        "name" =>  "Vieux Fort Quarter"
                    ]
                ]
            ],
            [
                "name" =>  "Saint Pierre and Miquelon",
                "numeric_code" =>  "666",
                "alpha_2" =>  "PM",
                "alpha_3" =>  "SPM",
                "phone_code" =>  "508",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf5\ud83c\uddf2",
                "states" =>  []
            ],
            [
                "name" =>  "Saint Vincent And The Grenadines",
                "numeric_code" =>  "670",
                "alpha_2" =>  "VC",
                "alpha_3" =>  "VCT",
                "phone_code" =>  "+1-784",
                "currency" =>  "XCD",
                "currency_name" =>  "Eastern Caribbean dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddfb\ud83c\udde8",
                "states" =>  [
                    [
                        "id" =>  3389,
                        "name" =>  "Charlotte Parish"
                    ],
                    [
                        "id" =>  3388,
                        "name" =>  "Grenadines Parish"
                    ],
                    [
                        "id" =>  3386,
                        "name" =>  "Saint Andrew Parish"
                    ],
                    [
                        "id" =>  3387,
                        "name" =>  "Saint David Parish"
                    ],
                    [
                        "id" =>  3384,
                        "name" =>  "Saint George Parish"
                    ],
                    [
                        "id" =>  3385,
                        "name" =>  "Saint Patrick Parish"
                    ]
                ]
            ],
            [
                "name" =>  "Saint-Barthelemy",
                "numeric_code" =>  "652",
                "alpha_2" =>  "BL",
                "alpha_3" =>  "BLM",
                "phone_code" =>  "590",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\udde7\ud83c\uddf1",
                "states" =>  []
            ],
            [
                "name" =>  "Saint-Martin (French part)",
                "numeric_code" =>  "663",
                "alpha_2" =>  "MF",
                "alpha_3" =>  "MAF",
                "phone_code" =>  "590",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf2\ud83c\uddeb",
                "states" =>  []
            ],
            [
                "name" =>  "Samoa",
                "numeric_code" =>  "882",
                "alpha_2" =>  "WS",
                "alpha_3" =>  "WSM",
                "phone_code" =>  "685",
                "currency" =>  "WST",
                "currency_name" =>  "Samoan t\u0101l\u0101",
                "currency_symbol" =>  "SAT",
                "emoji" =>  "\ud83c\uddfc\ud83c\uddf8",
                "states" =>  [
                    [
                        "id" =>  4763,
                        "name" =>  "A'ana"
                    ],
                    [
                        "id" =>  4761,
                        "name" =>  "Aiga-i-le-Tai"
                    ],
                    [
                        "id" =>  4765,
                        "name" =>  "Atua"
                    ],
                    [
                        "id" =>  4764,
                        "name" =>  "Fa'asaleleaga"
                    ],
                    [
                        "id" =>  4769,
                        "name" =>  "Gaga'emauga"
                    ],
                    [
                        "id" =>  4771,
                        "name" =>  "Gaga'ifomauga"
                    ],
                    [
                        "id" =>  4767,
                        "name" =>  "Palauli"
                    ],
                    [
                        "id" =>  4762,
                        "name" =>  "Satupa'itea"
                    ],
                    [
                        "id" =>  4770,
                        "name" =>  "Tuamasaga"
                    ],
                    [
                        "id" =>  4768,
                        "name" =>  "Va'a-o-Fonoti"
                    ],
                    [
                        "id" =>  4766,
                        "name" =>  "Vaisigano"
                    ]
                ]
            ],
            [
                "name" =>  "San Marino",
                "numeric_code" =>  "674",
                "alpha_2" =>  "SM",
                "alpha_3" =>  "SMR",
                "phone_code" =>  "378",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddf2",
                "states" =>  [
                    [
                        "id" =>  59,
                        "name" =>  "Acquaviva"
                    ],
                    [
                        "id" =>  61,
                        "name" =>  "Borgo Maggiore"
                    ],
                    [
                        "id" =>  60,
                        "name" =>  "Chiesanuova"
                    ],
                    [
                        "id" =>  64,
                        "name" =>  "Domagnano"
                    ],
                    [
                        "id" =>  62,
                        "name" =>  "Faetano"
                    ],
                    [
                        "id" =>  66,
                        "name" =>  "Fiorentino"
                    ],
                    [
                        "id" =>  63,
                        "name" =>  "Montegiardino"
                    ],
                    [
                        "id" =>  58,
                        "name" =>  "San Marino"
                    ],
                    [
                        "id" =>  65,
                        "name" =>  "Serravalle"
                    ]
                ]
            ],
            [
                "name" =>  "Sao Tome and Principe",
                "numeric_code" =>  "678",
                "alpha_2" =>  "ST",
                "alpha_3" =>  "STP",
                "phone_code" =>  "239",
                "currency" =>  "STD",
                "currency_name" =>  "Dobra",
                "currency_symbol" =>  "Db",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddf9",
                "states" =>  [
                    [
                        "id" =>  270,
                        "name" =>  "Pr\u00edncipe Province"
                    ],
                    [
                        "id" =>  271,
                        "name" =>  "S\u00e3o Tom\u00e9 Province"
                    ]
                ]
            ],
            [
                "name" =>  "Saudi Arabia",
                "numeric_code" =>  "682",
                "alpha_2" =>  "SA",
                "alpha_3" =>  "SAU",
                "phone_code" =>  "966",
                "currency" =>  "SAR",
                "currency_name" =>  "Saudi riyal",
                "currency_symbol" =>  "\ufdfc",
                "emoji" =>  "\ud83c\uddf8\ud83c\udde6",
                "states" =>  [
                    [
                        "id" =>  2853,
                        "name" =>  "'Asir"
                    ],
                    [
                        "id" =>  2859,
                        "name" =>  "Al Bahah"
                    ],
                    [
                        "id" =>  2857,
                        "name" =>  "Al Jawf"
                    ],
                    [
                        "id" =>  2851,
                        "name" =>  "Al Madinah"
                    ],
                    [
                        "id" =>  2861,
                        "name" =>  "Al-Qassim"
                    ],
                    [
                        "id" =>  2856,
                        "name" =>  "Eastern Province"
                    ],
                    [
                        "id" =>  2855,
                        "name" =>  "Ha'il"
                    ],
                    [
                        "id" =>  2858,
                        "name" =>  "Jizan"
                    ],
                    [
                        "id" =>  2850,
                        "name" =>  "Makkah"
                    ],
                    [
                        "id" =>  2860,
                        "name" =>  "Najran"
                    ],
                    [
                        "id" =>  2854,
                        "name" =>  "Northern Borders"
                    ],
                    [
                        "id" =>  2849,
                        "name" =>  "Riyadh"
                    ],
                    [
                        "id" =>  2852,
                        "name" =>  "Tabuk"
                    ]
                ]
            ],
            [
                "name" =>  "Senegal",
                "numeric_code" =>  "686",
                "alpha_2" =>  "SN",
                "alpha_3" =>  "SEN",
                "phone_code" =>  "221",
                "currency" =>  "XOF",
                "currency_name" =>  "West African CFA franc",
                "currency_symbol" =>  "CFA",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddf3",
                "states" =>  [
                    [
                        "id" =>  473,
                        "name" =>  "Dakar"
                    ],
                    [
                        "id" =>  480,
                        "name" =>  "Diourbel Region"
                    ],
                    [
                        "id" =>  479,
                        "name" =>  "Fatick"
                    ],
                    [
                        "id" =>  475,
                        "name" =>  "Kaffrine"
                    ],
                    [
                        "id" =>  483,
                        "name" =>  "Kaolack"
                    ],
                    [
                        "id" =>  481,
                        "name" =>  "K\u00e9dougou"
                    ],
                    [
                        "id" =>  474,
                        "name" =>  "Kolda"
                    ],
                    [
                        "id" =>  485,
                        "name" =>  "Louga"
                    ],
                    [
                        "id" =>  476,
                        "name" =>  "Matam"
                    ],
                    [
                        "id" =>  477,
                        "name" =>  "Saint-Louis"
                    ],
                    [
                        "id" =>  482,
                        "name" =>  "S\u00e9dhiou"
                    ],
                    [
                        "id" =>  486,
                        "name" =>  "Tambacounda Region"
                    ],
                    [
                        "id" =>  484,
                        "name" =>  "Thi\u00e8s Region"
                    ],
                    [
                        "id" =>  478,
                        "name" =>  "Ziguinchor"
                    ]
                ]
            ],
            [
                "name" =>  "Serbia",
                "numeric_code" =>  "688",
                "alpha_2" =>  "RS",
                "alpha_3" =>  "SRB",
                "phone_code" =>  "381",
                "currency" =>  "RSD",
                "currency_name" =>  "Serbian dinar",
                "currency_symbol" =>  "din",
                "emoji" =>  "\ud83c\uddf7\ud83c\uddf8",
                "states" =>  [
                    [
                        "id" =>  3728,
                        "name" =>  "Belgrade"
                    ],
                    [
                        "id" =>  3717,
                        "name" =>  "Bor District"
                    ],
                    [
                        "id" =>  3732,
                        "name" =>  "Brani\u010devo District"
                    ],
                    [
                        "id" =>  3716,
                        "name" =>  "Central Banat District"
                    ],
                    [
                        "id" =>  3715,
                        "name" =>  "Jablanica District"
                    ],
                    [
                        "id" =>  3724,
                        "name" =>  "Kolubara District"
                    ],
                    [
                        "id" =>  3719,
                        "name" =>  "Ma\u010dva District"
                    ],
                    [
                        "id" =>  3727,
                        "name" =>  "Moravica District"
                    ],
                    [
                        "id" =>  3722,
                        "name" =>  "Ni\u0161ava District"
                    ],
                    [
                        "id" =>  3714,
                        "name" =>  "North Ba\u010dka District"
                    ],
                    [
                        "id" =>  3736,
                        "name" =>  "North Banat District"
                    ],
                    [
                        "id" =>  3721,
                        "name" =>  "P\u010dinja District"
                    ],
                    [
                        "id" =>  3712,
                        "name" =>  "Pirot District"
                    ],
                    [
                        "id" =>  3741,
                        "name" =>  "Podunavlje District"
                    ],
                    [
                        "id" =>  3737,
                        "name" =>  "Pomoravlje District"
                    ],
                    [
                        "id" =>  3720,
                        "name" =>  "Rasina District"
                    ],
                    [
                        "id" =>  3725,
                        "name" =>  "Ra\u0161ka District"
                    ],
                    [
                        "id" =>  3711,
                        "name" =>  "South Ba\u010dka District"
                    ],
                    [
                        "id" =>  3713,
                        "name" =>  "South Banat District"
                    ],
                    [
                        "id" =>  3740,
                        "name" =>  "Srem District"
                    ],
                    [
                        "id" =>  3734,
                        "name" =>  "\u0160umadija District"
                    ],
                    [
                        "id" =>  3718,
                        "name" =>  "Toplica District"
                    ],
                    [
                        "id" =>  3733,
                        "name" =>  "Vojvodina"
                    ],
                    [
                        "id" =>  3726,
                        "name" =>  "West Ba\u010dka District"
                    ],
                    [
                        "id" =>  3731,
                        "name" =>  "Zaje\u010dar District"
                    ],
                    [
                        "id" =>  3729,
                        "name" =>  "Zlatibor District"
                    ]
                ]
            ],
            [
                "name" =>  "Seychelles",
                "numeric_code" =>  "690",
                "alpha_2" =>  "SC",
                "alpha_3" =>  "SYC",
                "phone_code" =>  "248",
                "currency" =>  "SCR",
                "currency_name" =>  "Seychellois rupee",
                "currency_symbol" =>  "SRe",
                "emoji" =>  "\ud83c\uddf8\ud83c\udde8",
                "states" =>  [
                    [
                        "id" =>  513,
                        "name" =>  "Anse Boileau"
                    ],
                    [
                        "id" =>  502,
                        "name" =>  "Anse Royale"
                    ],
                    [
                        "id" =>  506,
                        "name" =>  "Anse-aux-Pins"
                    ],
                    [
                        "id" =>  508,
                        "name" =>  "Au Cap"
                    ],
                    [
                        "id" =>  497,
                        "name" =>  "Baie Lazare"
                    ],
                    [
                        "id" =>  514,
                        "name" =>  "Baie Sainte Anne"
                    ],
                    [
                        "id" =>  512,
                        "name" =>  "Beau Vallon"
                    ],
                    [
                        "id" =>  515,
                        "name" =>  "Bel Air"
                    ],
                    [
                        "id" =>  505,
                        "name" =>  "Bel Ombre"
                    ],
                    [
                        "id" =>  517,
                        "name" =>  "Cascade"
                    ],
                    [
                        "id" =>  503,
                        "name" =>  "Glacis"
                    ],
                    [
                        "id" =>  500,
                        "name" =>  "Grand'Anse Mah\u00e9"
                    ],
                    [
                        "id" =>  504,
                        "name" =>  "Grand'Anse Praslin"
                    ],
                    [
                        "id" =>  495,
                        "name" =>  "La Digue"
                    ],
                    [
                        "id" =>  516,
                        "name" =>  "La Rivi\u00e8re Anglaise"
                    ],
                    [
                        "id" =>  499,
                        "name" =>  "Les Mamelles"
                    ],
                    [
                        "id" =>  494,
                        "name" =>  "Mont Buxton"
                    ],
                    [
                        "id" =>  498,
                        "name" =>  "Mont Fleuri"
                    ],
                    [
                        "id" =>  511,
                        "name" =>  "Plaisance"
                    ],
                    [
                        "id" =>  510,
                        "name" =>  "Pointe La Rue"
                    ],
                    [
                        "id" =>  507,
                        "name" =>  "Port Glaud"
                    ],
                    [
                        "id" =>  501,
                        "name" =>  "Roche Caiman"
                    ],
                    [
                        "id" =>  496,
                        "name" =>  "Saint Louis"
                    ],
                    [
                        "id" =>  509,
                        "name" =>  "Takamaka"
                    ]
                ]
            ],
            [
                "name" =>  "Sierra Leone",
                "numeric_code" =>  "694",
                "alpha_2" =>  "SL",
                "alpha_3" =>  "SLE",
                "phone_code" =>  "232",
                "currency" =>  "SLL",
                "currency_name" =>  "Sierra Leonean leone",
                "currency_symbol" =>  "Le",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddf1",
                "states" =>  [
                    [
                        "id" =>  914,
                        "name" =>  "Eastern Province"
                    ],
                    [
                        "id" =>  911,
                        "name" =>  "Northern Province"
                    ],
                    [
                        "id" =>  912,
                        "name" =>  "Southern Province"
                    ],
                    [
                        "id" =>  913,
                        "name" =>  "Western Area"
                    ]
                ]
            ],
            [
                "name" =>  "Singapore",
                "numeric_code" =>  "702",
                "alpha_2" =>  "SG",
                "alpha_3" =>  "SGP",
                "phone_code" =>  "65",
                "currency" =>  "SGD",
                "currency_name" =>  "Singapore dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddec",
                "states" =>  [
                    [
                        "id" =>  4651,
                        "name" =>  "Central Singapore Community Development Council"
                    ],
                    [
                        "id" =>  4649,
                        "name" =>  "North East Community Development Council"
                    ],
                    [
                        "id" =>  4653,
                        "name" =>  "North West Community Development Council"
                    ],
                    [
                        "id" =>  4650,
                        "name" =>  "South East Community Development Council"
                    ],
                    [
                        "id" =>  4652,
                        "name" =>  "South West Community Development Council"
                    ]
                ]
            ],
            [
                "name" =>  "Sint Maarten (Dutch part)",
                "numeric_code" =>  "534",
                "alpha_2" =>  "SX",
                "alpha_3" =>  "SXM",
                "phone_code" =>  "1721",
                "currency" =>  "ANG",
                "currency_name" =>  "Netherlands Antillean guilder",
                "currency_symbol" =>  "\u0192",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddfd",
                "states" =>  []
            ],
            [
                "name" =>  "Slovakia",
                "numeric_code" =>  "703",
                "alpha_2" =>  "SK",
                "alpha_3" =>  "SVK",
                "phone_code" =>  "421",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddf0",
                "states" =>  [
                    [
                        "id" =>  4352,
                        "name" =>  "Bansk\u00e1 Bystrica Region"
                    ],
                    [
                        "id" =>  4356,
                        "name" =>  "Bratislava Region"
                    ],
                    [
                        "id" =>  4353,
                        "name" =>  "Ko\u0161ice Region"
                    ],
                    [
                        "id" =>  4357,
                        "name" =>  "Nitra Region"
                    ],
                    [
                        "id" =>  4354,
                        "name" =>  "Pre\u0161ov Region"
                    ],
                    [
                        "id" =>  4358,
                        "name" =>  "Tren\u010d\u00edn Region"
                    ],
                    [
                        "id" =>  4355,
                        "name" =>  "Trnava Region"
                    ],
                    [
                        "id" =>  4359,
                        "name" =>  "\u017dilina Region"
                    ]
                ]
            ],
            [
                "name" =>  "Slovenia",
                "numeric_code" =>  "705",
                "alpha_2" =>  "SI",
                "alpha_3" =>  "SVN",
                "phone_code" =>  "386",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddee",
                "states" =>  [
                    [
                        "id" =>  4183,
                        "name" =>  "Ajdov\u0161\u010dina Municipality"
                    ],
                    [
                        "id" =>  4326,
                        "name" =>  "Ankaran Municipality"
                    ],
                    [
                        "id" =>  4301,
                        "name" =>  "Beltinci Municipality"
                    ],
                    [
                        "id" =>  4166,
                        "name" =>  "Benedikt Municipality"
                    ],
                    [
                        "id" =>  4179,
                        "name" =>  "Bistrica ob Sotli Municipality"
                    ],
                    [
                        "id" =>  4202,
                        "name" =>  "Bled Municipality"
                    ],
                    [
                        "id" =>  4278,
                        "name" =>  "Bloke Municipality"
                    ],
                    [
                        "id" =>  4282,
                        "name" =>  "Bohinj Municipality"
                    ],
                    [
                        "id" =>  4200,
                        "name" =>  "Borovnica Municipality"
                    ],
                    [
                        "id" =>  4181,
                        "name" =>  "Bovec Municipality"
                    ],
                    [
                        "id" =>  4141,
                        "name" =>  "Braslov\u010de Municipality"
                    ],
                    [
                        "id" =>  4240,
                        "name" =>  "Brda Municipality"
                    ],
                    [
                        "id" =>  4215,
                        "name" =>  "Bre\u017eice Municipality"
                    ],
                    [
                        "id" =>  4165,
                        "name" =>  "Brezovica Municipality"
                    ],
                    [
                        "id" =>  4147,
                        "name" =>  "Cankova Municipality"
                    ],
                    [
                        "id" =>  4310,
                        "name" =>  "Cerklje na Gorenjskem Municipality"
                    ],
                    [
                        "id" =>  4162,
                        "name" =>  "Cerknica Municipality"
                    ],
                    [
                        "id" =>  4178,
                        "name" =>  "Cerkno Municipality"
                    ],
                    [
                        "id" =>  4176,
                        "name" =>  "Cerkvenjak Municipality"
                    ],
                    [
                        "id" =>  4191,
                        "name" =>  "City Municipality of Celje"
                    ],
                    [
                        "id" =>  4236,
                        "name" =>  "City Municipality of Novo Mesto"
                    ],
                    [
                        "id" =>  4151,
                        "name" =>  "\u010cren\u0161ovci Municipality"
                    ],
                    [
                        "id" =>  4232,
                        "name" =>  "\u010crna na Koro\u0161kem Municipality"
                    ],
                    [
                        "id" =>  4291,
                        "name" =>  "\u010crnomelj Municipality"
                    ],
                    [
                        "id" =>  4304,
                        "name" =>  "Destrnik Municipality"
                    ],
                    [
                        "id" =>  4167,
                        "name" =>  "Diva\u010da Municipality"
                    ],
                    [
                        "id" =>  4295,
                        "name" =>  "Dobje Municipality"
                    ],
                    [
                        "id" =>  4216,
                        "name" =>  "Dobrepolje Municipality"
                    ],
                    [
                        "id" =>  4252,
                        "name" =>  "Dobrna Municipality"
                    ],
                    [
                        "id" =>  4308,
                        "name" =>  "Dobrova\u2013Polhov Gradec Municipality"
                    ],
                    [
                        "id" =>  4189,
                        "name" =>  "Dobrovnik Municipality"
                    ],
                    [
                        "id" =>  4173,
                        "name" =>  "Dol pri Ljubljani Municipality"
                    ],
                    [
                        "id" =>  4281,
                        "name" =>  "Dolenjske Toplice Municipality"
                    ],
                    [
                        "id" =>  4159,
                        "name" =>  "Dom\u017eale Municipality"
                    ],
                    [
                        "id" =>  4290,
                        "name" =>  "Dornava Municipality"
                    ],
                    [
                        "id" =>  4345,
                        "name" =>  "Dravograd Municipality"
                    ],
                    [
                        "id" =>  4213,
                        "name" =>  "Duplek Municipality"
                    ],
                    [
                        "id" =>  4293,
                        "name" =>  "Gorenja Vas\u2013Poljane Municipality"
                    ],
                    [
                        "id" =>  4210,
                        "name" =>  "Gori\u0161nica Municipality"
                    ],
                    [
                        "id" =>  4284,
                        "name" =>  "Gorje Municipality"
                    ],
                    [
                        "id" =>  4343,
                        "name" =>  "Gornja Radgona Municipality"
                    ],
                    [
                        "id" =>  4339,
                        "name" =>  "Gornji Grad Municipality"
                    ],
                    [
                        "id" =>  4271,
                        "name" =>  "Gornji Petrovci Municipality"
                    ],
                    [
                        "id" =>  4217,
                        "name" =>  "Grad Municipality"
                    ],
                    [
                        "id" =>  4336,
                        "name" =>  "Grosuplje Municipality"
                    ],
                    [
                        "id" =>  4145,
                        "name" =>  "Hajdina Municipality"
                    ],
                    [
                        "id" =>  4175,
                        "name" =>  "Ho\u010de\u2013Slivnica Municipality"
                    ],
                    [
                        "id" =>  4327,
                        "name" =>  "Hodo\u0161 Municipality"
                    ],
                    [
                        "id" =>  4193,
                        "name" =>  "Horjul Municipality"
                    ],
                    [
                        "id" =>  4341,
                        "name" =>  "Hrastnik Municipality"
                    ],
                    [
                        "id" =>  4321,
                        "name" =>  "Hrpelje\u2013Kozina Municipality"
                    ],
                    [
                        "id" =>  4152,
                        "name" =>  "Idrija Municipality"
                    ],
                    [
                        "id" =>  4286,
                        "name" =>  "Ig Municipality"
                    ],
                    [
                        "id" =>  4305,
                        "name" =>  "Ivan\u010dna Gorica Municipality"
                    ],
                    [
                        "id" =>  4322,
                        "name" =>  "Izola Municipality"
                    ],
                    [
                        "id" =>  4337,
                        "name" =>  "Jesenice Municipality"
                    ],
                    [
                        "id" =>  4203,
                        "name" =>  "Jezersko Municipality"
                    ],
                    [
                        "id" =>  4266,
                        "name" =>  "Jur\u0161inci Municipality"
                    ],
                    [
                        "id" =>  4180,
                        "name" =>  "Kamnik Municipality"
                    ],
                    [
                        "id" =>  4227,
                        "name" =>  "Kanal ob So\u010di Municipality"
                    ],
                    [
                        "id" =>  4150,
                        "name" =>  "Kidri\u010devo Municipality"
                    ],
                    [
                        "id" =>  4243,
                        "name" =>  "Kobarid Municipality"
                    ],
                    [
                        "id" =>  4325,
                        "name" =>  "Kobilje Municipality"
                    ],
                    [
                        "id" =>  4335,
                        "name" =>  "Ko\u010devje Municipality"
                    ],
                    [
                        "id" =>  4315,
                        "name" =>  "Komen Municipality"
                    ],
                    [
                        "id" =>  4283,
                        "name" =>  "Komenda Municipality"
                    ],
                    [
                        "id" =>  4319,
                        "name" =>  "Koper City Municipality"
                    ],
                    [
                        "id" =>  4254,
                        "name" =>  "Kostanjevica na Krki Municipality"
                    ],
                    [
                        "id" =>  4331,
                        "name" =>  "Kostel Municipality"
                    ],
                    [
                        "id" =>  4186,
                        "name" =>  "Kozje Municipality"
                    ],
                    [
                        "id" =>  4287,
                        "name" =>  "Kranj City Municipality"
                    ],
                    [
                        "id" =>  4340,
                        "name" =>  "Kranjska Gora Municipality"
                    ],
                    [
                        "id" =>  4238,
                        "name" =>  "Kri\u017eevci Municipality"
                    ],
                    [
                        "id" =>  4197,
                        "name" =>  "Kungota"
                    ],
                    [
                        "id" =>  4211,
                        "name" =>  "Kuzma Municipality"
                    ],
                    [
                        "id" =>  4338,
                        "name" =>  "La\u0161ko Municipality"
                    ],
                    [
                        "id" =>  4142,
                        "name" =>  "Lenart Municipality"
                    ],
                    [
                        "id" =>  4225,
                        "name" =>  "Lendava Municipality"
                    ],
                    [
                        "id" =>  4347,
                        "name" =>  "Litija Municipality"
                    ],
                    [
                        "id" =>  4270,
                        "name" =>  "Ljubljana City Municipality"
                    ],
                    [
                        "id" =>  4294,
                        "name" =>  "Ljubno Municipality"
                    ],
                    [
                        "id" =>  4351,
                        "name" =>  "Ljutomer Municipality"
                    ],
                    [
                        "id" =>  4306,
                        "name" =>  "Log\u2013Dragomer Municipality"
                    ],
                    [
                        "id" =>  4350,
                        "name" =>  "Logatec Municipality"
                    ],
                    [
                        "id" =>  4174,
                        "name" =>  "Lo\u0161ka Dolina Municipality"
                    ],
                    [
                        "id" =>  4158,
                        "name" =>  "Lo\u0161ki Potok Municipality"
                    ],
                    [
                        "id" =>  4156,
                        "name" =>  "Lovrenc na Pohorju Municipality"
                    ],
                    [
                        "id" =>  4219,
                        "name" =>  "Lu\u010de Municipality"
                    ],
                    [
                        "id" =>  4302,
                        "name" =>  "Lukovica Municipality"
                    ],
                    [
                        "id" =>  4157,
                        "name" =>  "Maj\u0161perk Municipality"
                    ],
                    [
                        "id" =>  4224,
                        "name" =>  "Makole Municipality"
                    ],
                    [
                        "id" =>  4242,
                        "name" =>  "Maribor City Municipality"
                    ],
                    [
                        "id" =>  4244,
                        "name" =>  "Markovci Municipality"
                    ],
                    [
                        "id" =>  4349,
                        "name" =>  "Medvode Municipality"
                    ],
                    [
                        "id" =>  4348,
                        "name" =>  "Menge\u0161 Municipality"
                    ],
                    [
                        "id" =>  4323,
                        "name" =>  "Metlika Municipality"
                    ],
                    [
                        "id" =>  4265,
                        "name" =>  "Me\u017eica Municipality"
                    ],
                    [
                        "id" =>  4223,
                        "name" =>  "Miklav\u017e na Dravskem Polju Municipality"
                    ],
                    [
                        "id" =>  4220,
                        "name" =>  "Miren\u2013Kostanjevica Municipality"
                    ],
                    [
                        "id" =>  4298,
                        "name" =>  "Mirna Municipality"
                    ],
                    [
                        "id" =>  4237,
                        "name" =>  "Mirna Pe\u010d Municipality"
                    ],
                    [
                        "id" =>  4212,
                        "name" =>  "Mislinja Municipality"
                    ],
                    [
                        "id" =>  4297,
                        "name" =>  "Mokronog\u2013Trebelno Municipality"
                    ],
                    [
                        "id" =>  4168,
                        "name" =>  "Morav\u010de Municipality"
                    ],
                    [
                        "id" =>  4218,
                        "name" =>  "Moravske Toplice Municipality"
                    ],
                    [
                        "id" =>  4190,
                        "name" =>  "Mozirje Municipality"
                    ],
                    [
                        "id" =>  4318,
                        "name" =>  "Municipality of Apa\u010de"
                    ],
                    [
                        "id" =>  4309,
                        "name" =>  "Municipality of Cirkulane"
                    ],
                    [
                        "id" =>  4344,
                        "name" =>  "Municipality of Ilirska Bistrica"
                    ],
                    [
                        "id" =>  4314,
                        "name" =>  "Municipality of Kr\u0161ko"
                    ],
                    [
                        "id" =>  4187,
                        "name" =>  "Municipality of \u0160kofljica"
                    ],
                    [
                        "id" =>  4313,
                        "name" =>  "Murska Sobota City Municipality"
                    ],
                    [
                        "id" =>  4208,
                        "name" =>  "Muta Municipality"
                    ],
                    [
                        "id" =>  4177,
                        "name" =>  "Naklo Municipality"
                    ],
                    [
                        "id" =>  4329,
                        "name" =>  "Nazarje Municipality"
                    ],
                    [
                        "id" =>  4205,
                        "name" =>  "Nova Gorica City Municipality"
                    ],
                    [
                        "id" =>  4320,
                        "name" =>  "Odranci Municipality"
                    ],
                    [
                        "id" =>  4143,
                        "name" =>  "Oplotnica"
                    ],
                    [
                        "id" =>  4221,
                        "name" =>  "Ormo\u017e Municipality"
                    ],
                    [
                        "id" =>  4199,
                        "name" =>  "Osilnica Municipality"
                    ],
                    [
                        "id" =>  4172,
                        "name" =>  "Pesnica Municipality"
                    ],
                    [
                        "id" =>  4201,
                        "name" =>  "Piran Municipality"
                    ],
                    [
                        "id" =>  4184,
                        "name" =>  "Pivka Municipality"
                    ],
                    [
                        "id" =>  4146,
                        "name" =>  "Pod\u010detrtek Municipality"
                    ],
                    [
                        "id" =>  4161,
                        "name" =>  "Podlehnik Municipality"
                    ],
                    [
                        "id" =>  4234,
                        "name" =>  "Podvelka Municipality"
                    ],
                    [
                        "id" =>  4239,
                        "name" =>  "Polj\u010dane Municipality"
                    ],
                    [
                        "id" =>  4272,
                        "name" =>  "Polzela Municipality"
                    ],
                    [
                        "id" =>  4330,
                        "name" =>  "Postojna Municipality"
                    ],
                    [
                        "id" =>  4188,
                        "name" =>  "Prebold Municipality"
                    ],
                    [
                        "id" =>  4303,
                        "name" =>  "Preddvor Municipality"
                    ],
                    [
                        "id" =>  4274,
                        "name" =>  "Prevalje Municipality"
                    ],
                    [
                        "id" =>  4228,
                        "name" =>  "Ptuj City Municipality"
                    ],
                    [
                        "id" =>  4288,
                        "name" =>  "Puconci Municipality"
                    ],
                    [
                        "id" =>  4204,
                        "name" =>  "Ra\u010de\u2013Fram Municipality"
                    ],
                    [
                        "id" =>  4195,
                        "name" =>  "Rade\u010de Municipality"
                    ],
                    [
                        "id" =>  4292,
                        "name" =>  "Radenci Municipality"
                    ],
                    [
                        "id" =>  4275,
                        "name" =>  "Radlje ob Dravi Municipality"
                    ],
                    [
                        "id" =>  4231,
                        "name" =>  "Radovljica Municipality"
                    ],
                    [
                        "id" =>  4155,
                        "name" =>  "Ravne na Koro\u0161kem Municipality"
                    ],
                    [
                        "id" =>  4206,
                        "name" =>  "Razkri\u017eje Municipality"
                    ],
                    [
                        "id" =>  4160,
                        "name" =>  "Re\u010dica ob Savinji Municipality"
                    ],
                    [
                        "id" =>  4253,
                        "name" =>  "Ren\u010de\u2013Vogrsko Municipality"
                    ],
                    [
                        "id" =>  4235,
                        "name" =>  "Ribnica Municipality"
                    ],
                    [
                        "id" =>  4207,
                        "name" =>  "Ribnica na Pohorju Municipality"
                    ],
                    [
                        "id" =>  4233,
                        "name" =>  "Roga\u0161ka Slatina Municipality"
                    ],
                    [
                        "id" =>  4264,
                        "name" =>  "Roga\u0161ovci Municipality"
                    ],
                    [
                        "id" =>  4209,
                        "name" =>  "Rogatec Municipality"
                    ],
                    [
                        "id" =>  4280,
                        "name" =>  "Ru\u0161e Municipality"
                    ],
                    [
                        "id" =>  4222,
                        "name" =>  "\u0160alovci Municipality"
                    ],
                    [
                        "id" =>  4230,
                        "name" =>  "Selnica ob Dravi Municipality"
                    ],
                    [
                        "id" =>  4346,
                        "name" =>  "Semi\u010d Municipality"
                    ],
                    [
                        "id" =>  4317,
                        "name" =>  "\u0160empeter\u2013Vrtojba Municipality"
                    ],
                    [
                        "id" =>  4299,
                        "name" =>  "\u0160en\u010dur Municipality"
                    ],
                    [
                        "id" =>  4324,
                        "name" =>  "\u0160entilj Municipality"
                    ],
                    [
                        "id" =>  4241,
                        "name" =>  "\u0160entjernej Municipality"
                    ],
                    [
                        "id" =>  4171,
                        "name" =>  "\u0160entjur Municipality"
                    ],
                    [
                        "id" =>  4311,
                        "name" =>  "\u0160entrupert Municipality"
                    ],
                    [
                        "id" =>  4268,
                        "name" =>  "Sevnica Municipality"
                    ],
                    [
                        "id" =>  4149,
                        "name" =>  "Se\u017eana Municipality"
                    ],
                    [
                        "id" =>  4170,
                        "name" =>  "\u0160kocjan Municipality"
                    ],
                    [
                        "id" =>  4316,
                        "name" =>  "\u0160kofja Loka Municipality"
                    ],
                    [
                        "id" =>  4169,
                        "name" =>  "Slovenj Gradec City Municipality"
                    ],
                    [
                        "id" =>  4332,
                        "name" =>  "Slovenska Bistrica Municipality"
                    ],
                    [
                        "id" =>  4198,
                        "name" =>  "Slovenske Konjice Municipality"
                    ],
                    [
                        "id" =>  4285,
                        "name" =>  "\u0160marje pri Jel\u0161ah Municipality"
                    ],
                    [
                        "id" =>  4289,
                        "name" =>  "\u0160marje\u0161ke Toplice Municipality"
                    ],
                    [
                        "id" =>  4296,
                        "name" =>  "\u0160martno ob Paki Municipality"
                    ],
                    [
                        "id" =>  4279,
                        "name" =>  "\u0160martno pri Litiji Municipality"
                    ],
                    [
                        "id" =>  4277,
                        "name" =>  "Sodra\u017eica Municipality"
                    ],
                    [
                        "id" =>  4261,
                        "name" =>  "Sol\u010dava Municipality"
                    ],
                    [
                        "id" =>  4248,
                        "name" =>  "\u0160o\u0161tanj Municipality"
                    ],
                    [
                        "id" =>  4263,
                        "name" =>  "Sredi\u0161\u010de ob Dravi"
                    ],
                    [
                        "id" =>  4259,
                        "name" =>  "Star\u0161e Municipality"
                    ],
                    [
                        "id" =>  4185,
                        "name" =>  "\u0160tore Municipality"
                    ],
                    [
                        "id" =>  4333,
                        "name" =>  "Stra\u017ea Municipality"
                    ],
                    [
                        "id" =>  4164,
                        "name" =>  "Sveta Ana Municipality"
                    ],
                    [
                        "id" =>  4260,
                        "name" =>  "Sveta Trojica v Slovenskih Goricah Municipality"
                    ],
                    [
                        "id" =>  4229,
                        "name" =>  "Sveti Andra\u017e v Slovenskih Goricah Municipality"
                    ],
                    [
                        "id" =>  4255,
                        "name" =>  "Sveti Jurij ob \u0160\u010davnici Municipality"
                    ],
                    [
                        "id" =>  4328,
                        "name" =>  "Sveti Jurij v Slovenskih Goricah Municipality"
                    ],
                    [
                        "id" =>  4273,
                        "name" =>  "Sveti Toma\u017e Municipality"
                    ],
                    [
                        "id" =>  4194,
                        "name" =>  "Tabor Municipality"
                    ],
                    [
                        "id" =>  4312,
                        "name" =>  "Ti\u0161ina Municipality"
                    ],
                    [
                        "id" =>  4247,
                        "name" =>  "Tolmin Municipality"
                    ],
                    [
                        "id" =>  4246,
                        "name" =>  "Trbovlje Municipality"
                    ],
                    [
                        "id" =>  4214,
                        "name" =>  "Trebnje Municipality"
                    ],
                    [
                        "id" =>  4153,
                        "name" =>  "Trnovska Vas Municipality"
                    ],
                    [
                        "id" =>  4250,
                        "name" =>  "Tr\u017ei\u010d Municipality"
                    ],
                    [
                        "id" =>  4334,
                        "name" =>  "Trzin Municipality"
                    ],
                    [
                        "id" =>  4251,
                        "name" =>  "Turni\u0161\u010de Municipality"
                    ],
                    [
                        "id" =>  4267,
                        "name" =>  "Velika Polana Municipality"
                    ],
                    [
                        "id" =>  4144,
                        "name" =>  "Velike La\u0161\u010de Municipality"
                    ],
                    [
                        "id" =>  4257,
                        "name" =>  "Ver\u017eej Municipality"
                    ],
                    [
                        "id" =>  4300,
                        "name" =>  "Videm Municipality"
                    ],
                    [
                        "id" =>  4196,
                        "name" =>  "Vipava Municipality"
                    ],
                    [
                        "id" =>  4148,
                        "name" =>  "Vitanje Municipality"
                    ],
                    [
                        "id" =>  4154,
                        "name" =>  "Vodice Municipality"
                    ],
                    [
                        "id" =>  4245,
                        "name" =>  "Vojnik Municipality"
                    ],
                    [
                        "id" =>  4163,
                        "name" =>  "Vransko Municipality"
                    ],
                    [
                        "id" =>  4262,
                        "name" =>  "Vrhnika Municipality"
                    ],
                    [
                        "id" =>  4226,
                        "name" =>  "Vuzenica Municipality"
                    ],
                    [
                        "id" =>  4269,
                        "name" =>  "Zagorje ob Savi Municipality"
                    ],
                    [
                        "id" =>  4258,
                        "name" =>  "\u017dalec Municipality"
                    ],
                    [
                        "id" =>  4182,
                        "name" =>  "Zavr\u010d Municipality"
                    ],
                    [
                        "id" =>  4256,
                        "name" =>  "\u017delezniki Municipality"
                    ],
                    [
                        "id" =>  4249,
                        "name" =>  "\u017detale Municipality"
                    ],
                    [
                        "id" =>  4192,
                        "name" =>  "\u017diri Municipality"
                    ],
                    [
                        "id" =>  4276,
                        "name" =>  "\u017dirovnica Municipality"
                    ],
                    [
                        "id" =>  4342,
                        "name" =>  "Zre\u010de Municipality"
                    ],
                    [
                        "id" =>  4307,
                        "name" =>  "\u017du\u017eemberk Municipality"
                    ]
                ]
            ],
            [
                "name" =>  "Solomon Islands",
                "numeric_code" =>  "090",
                "alpha_2" =>  "SB",
                "alpha_3" =>  "SLB",
                "phone_code" =>  "677",
                "currency" =>  "SBD",
                "currency_name" =>  "Solomon Islands dollar",
                "currency_symbol" =>  "Si$",
                "emoji" =>  "\ud83c\uddf8\ud83c\udde7",
                "states" =>  [
                    [
                        "id" =>  4784,
                        "name" =>  "Central Province"
                    ],
                    [
                        "id" =>  4781,
                        "name" =>  "Choiseul Province"
                    ],
                    [
                        "id" =>  4785,
                        "name" =>  "Guadalcanal Province"
                    ],
                    [
                        "id" =>  4778,
                        "name" =>  "Honiara"
                    ],
                    [
                        "id" =>  4780,
                        "name" =>  "Isabel Province"
                    ],
                    [
                        "id" =>  4782,
                        "name" =>  "Makira-Ulawa Province"
                    ],
                    [
                        "id" =>  4783,
                        "name" =>  "Malaita Province"
                    ],
                    [
                        "id" =>  4787,
                        "name" =>  "Rennell and Bellona Province"
                    ],
                    [
                        "id" =>  4779,
                        "name" =>  "Temotu Province"
                    ],
                    [
                        "id" =>  4786,
                        "name" =>  "Western Province"
                    ]
                ]
            ],
            [
                "name" =>  "Somalia",
                "numeric_code" =>  "706",
                "alpha_2" =>  "SO",
                "alpha_3" =>  "SOM",
                "phone_code" =>  "252",
                "currency" =>  "SOS",
                "currency_name" =>  "Somali shilling",
                "currency_symbol" =>  "Sh.so.",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddf4",
                "states" =>  [
                    [
                        "id" =>  925,
                        "name" =>  "Awdal Region"
                    ],
                    [
                        "id" =>  917,
                        "name" =>  "Bakool"
                    ],
                    [
                        "id" =>  927,
                        "name" =>  "Banaadir"
                    ],
                    [
                        "id" =>  930,
                        "name" =>  "Bari"
                    ],
                    [
                        "id" =>  926,
                        "name" =>  "Bay"
                    ],
                    [
                        "id" =>  918,
                        "name" =>  "Galguduud"
                    ],
                    [
                        "id" =>  928,
                        "name" =>  "Gedo"
                    ],
                    [
                        "id" =>  915,
                        "name" =>  "Hiran"
                    ],
                    [
                        "id" =>  924,
                        "name" =>  "Lower Juba"
                    ],
                    [
                        "id" =>  921,
                        "name" =>  "Lower Shebelle"
                    ],
                    [
                        "id" =>  922,
                        "name" =>  "Middle Juba"
                    ],
                    [
                        "id" =>  923,
                        "name" =>  "Middle Shebelle"
                    ],
                    [
                        "id" =>  916,
                        "name" =>  "Mudug"
                    ],
                    [
                        "id" =>  920,
                        "name" =>  "Nugal"
                    ],
                    [
                        "id" =>  919,
                        "name" =>  "Sanaag Region"
                    ],
                    [
                        "id" =>  929,
                        "name" =>  "Togdheer Region"
                    ]
                ]
            ],
            [
                "name" =>  "South Africa",
                "numeric_code" =>  "710",
                "alpha_2" =>  "ZA",
                "alpha_3" =>  "ZAF",
                "phone_code" =>  "27",
                "currency" =>  "ZAR",
                "currency_name" =>  "South African rand",
                "currency_symbol" =>  "R",
                "emoji" =>  "\ud83c\uddff\ud83c\udde6",
                "states" =>  [
                    [
                        "id" =>  938,
                        "name" =>  "Eastern Cape"
                    ],
                    [
                        "id" =>  932,
                        "name" =>  "Free State"
                    ],
                    [
                        "id" =>  936,
                        "name" =>  "Gauteng"
                    ],
                    [
                        "id" =>  935,
                        "name" =>  "KwaZulu-Natal"
                    ],
                    [
                        "id" =>  933,
                        "name" =>  "Limpopo"
                    ],
                    [
                        "id" =>  937,
                        "name" =>  "Mpumalanga"
                    ],
                    [
                        "id" =>  934,
                        "name" =>  "North West"
                    ],
                    [
                        "id" =>  931,
                        "name" =>  "Northern Cape"
                    ],
                    [
                        "id" =>  939,
                        "name" =>  "Western Cape"
                    ]
                ]
            ],
            [
                "name" =>  "South Georgia",
                "numeric_code" =>  "239",
                "alpha_2" =>  "GS",
                "alpha_3" =>  "SGS",
                "phone_code" =>  "500",
                "currency" =>  "GBP",
                "currency_name" =>  "British pound",
                "currency_symbol" =>  "\u00a3",
                "emoji" =>  "\ud83c\uddec\ud83c\uddf8",
                "states" =>  []
            ],
            [
                "name" =>  "South Korea",
                "numeric_code" =>  "410",
                "alpha_2" =>  "KR",
                "alpha_3" =>  "KOR",
                "phone_code" =>  "82",
                "currency" =>  "KRW",
                "currency_name" =>  "Won",
                "currency_symbol" =>  "\u20a9",
                "emoji" =>  "\ud83c\uddf0\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  3860,
                        "name" =>  "Busan"
                    ],
                    [
                        "id" =>  3846,
                        "name" =>  "Daegu"
                    ],
                    [
                        "id" =>  3850,
                        "name" =>  "Daejeon"
                    ],
                    [
                        "id" =>  3862,
                        "name" =>  "Gangwon Province"
                    ],
                    [
                        "id" =>  3858,
                        "name" =>  "Gwangju"
                    ],
                    [
                        "id" =>  3847,
                        "name" =>  "Gyeonggi Province"
                    ],
                    [
                        "id" =>  3848,
                        "name" =>  "Incheon"
                    ],
                    [
                        "id" =>  3853,
                        "name" =>  "Jeju"
                    ],
                    [
                        "id" =>  3854,
                        "name" =>  "North Chungcheong Province"
                    ],
                    [
                        "id" =>  3855,
                        "name" =>  "North Gyeongsang Province"
                    ],
                    [
                        "id" =>  3851,
                        "name" =>  "North Jeolla Province"
                    ],
                    [
                        "id" =>  3861,
                        "name" =>  "Sejong City"
                    ],
                    [
                        "id" =>  3849,
                        "name" =>  "Seoul"
                    ],
                    [
                        "id" =>  3859,
                        "name" =>  "South Chungcheong Province"
                    ],
                    [
                        "id" =>  3857,
                        "name" =>  "South Gyeongsang Province"
                    ],
                    [
                        "id" =>  3856,
                        "name" =>  "South Jeolla Province"
                    ],
                    [
                        "id" =>  3852,
                        "name" =>  "Ulsan"
                    ]
                ]
            ],
            [
                "name" =>  "South Sudan",
                "numeric_code" =>  "728",
                "alpha_2" =>  "SS",
                "alpha_3" =>  "SSD",
                "phone_code" =>  "211",
                "currency" =>  "SSP",
                "currency_name" =>  "South Sudanese pound",
                "currency_symbol" =>  "\u00a3",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddf8",
                "states" =>  [
                    [
                        "id" =>  2092,
                        "name" =>  "Central Equatoria"
                    ],
                    [
                        "id" =>  2093,
                        "name" =>  "Eastern Equatoria"
                    ],
                    [
                        "id" =>  2094,
                        "name" =>  "Jonglei State"
                    ],
                    [
                        "id" =>  2090,
                        "name" =>  "Lakes"
                    ],
                    [
                        "id" =>  2088,
                        "name" =>  "Northern Bahr el Ghazal"
                    ],
                    [
                        "id" =>  2085,
                        "name" =>  "Unity"
                    ],
                    [
                        "id" =>  2086,
                        "name" =>  "Upper Nile"
                    ],
                    [
                        "id" =>  2087,
                        "name" =>  "Warrap"
                    ],
                    [
                        "id" =>  2091,
                        "name" =>  "Western Bahr el Ghazal"
                    ],
                    [
                        "id" =>  2089,
                        "name" =>  "Western Equatoria"
                    ]
                ]
            ],
            [
                "name" =>  "Spain",
                "numeric_code" =>  "724",
                "alpha_2" =>  "ES",
                "alpha_3" =>  "ESP",
                "phone_code" =>  "34",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddea\ud83c\uddf8",
                "states" =>  [
                    [
                        "id" =>  5089,
                        "name" =>  "A Coru\u00f1a"
                    ],
                    [
                        "id" =>  5109,
                        "name" =>  "Albacete"
                    ],
                    [
                        "id" =>  5108,
                        "name" =>  "Alicante"
                    ],
                    [
                        "id" =>  5095,
                        "name" =>  "Almeria"
                    ],
                    [
                        "id" =>  5093,
                        "name" =>  "Araba"
                    ],
                    [
                        "id" =>  1160,
                        "name" =>  "Asturias"
                    ],
                    [
                        "id" =>  1189,
                        "name" =>  "\u00c1vila"
                    ],
                    [
                        "id" =>  5092,
                        "name" =>  "Badajoz"
                    ],
                    [
                        "id" =>  1174,
                        "name" =>  "Balearic Islands"
                    ],
                    [
                        "id" =>  5102,
                        "name" =>  "Barcelona"
                    ],
                    [
                        "id" =>  5094,
                        "name" =>  "Bizkaia"
                    ],
                    [
                        "id" =>  1146,
                        "name" =>  "Burgos"
                    ],
                    [
                        "id" =>  1190,
                        "name" =>  "Caceres"
                    ],
                    [
                        "id" =>  5096,
                        "name" =>  "C\u00e1diz"
                    ],
                    [
                        "id" =>  1170,
                        "name" =>  "Cantabria"
                    ],
                    [
                        "id" =>  5110,
                        "name" =>  "Castell\u00f3n"
                    ],
                    [
                        "id" =>  5105,
                        "name" =>  "Ciudad Real"
                    ],
                    [
                        "id" =>  5097,
                        "name" =>  "C\u00f3rdoba"
                    ],
                    [
                        "id" =>  5106,
                        "name" =>  "Cuenca"
                    ],
                    [
                        "id" =>  1191,
                        "name" =>  "Gipuzkoa"
                    ],
                    [
                        "id" =>  5103,
                        "name" =>  "Girona"
                    ],
                    [
                        "id" =>  5098,
                        "name" =>  "Granada"
                    ],
                    [
                        "id" =>  5107,
                        "name" =>  "Guadalajara"
                    ],
                    [
                        "id" =>  5099,
                        "name" =>  "Huelva"
                    ],
                    [
                        "id" =>  1177,
                        "name" =>  "Huesca"
                    ],
                    [
                        "id" =>  5100,
                        "name" =>  "Ja\u00e9n"
                    ],
                    [
                        "id" =>  1171,
                        "name" =>  "La Rioja"
                    ],
                    [
                        "id" =>  1185,
                        "name" =>  "Las Palmas"
                    ],
                    [
                        "id" =>  1200,
                        "name" =>  "L\u00e9on"
                    ],
                    [
                        "id" =>  5104,
                        "name" =>  "Lleida"
                    ],
                    [
                        "id" =>  5090,
                        "name" =>  "Lugo"
                    ],
                    [
                        "id" =>  1158,
                        "name" =>  "Madrid"
                    ],
                    [
                        "id" =>  5101,
                        "name" =>  "M\u00e1laga"
                    ],
                    [
                        "id" =>  1176,
                        "name" =>  "Murcia"
                    ],
                    [
                        "id" =>  1204,
                        "name" =>  "Navarra"
                    ],
                    [
                        "id" =>  5091,
                        "name" =>  "Ourense"
                    ],
                    [
                        "id" =>  1157,
                        "name" =>  "Palencia"
                    ],
                    [
                        "id" =>  1167,
                        "name" =>  "Pontevedra"
                    ],
                    [
                        "id" =>  1147,
                        "name" =>  "Salamanca"
                    ],
                    [
                        "id" =>  5112,
                        "name" =>  "Santa Cruz de Tenerife"
                    ],
                    [
                        "id" =>  1192,
                        "name" =>  "Segovia"
                    ],
                    [
                        "id" =>  1193,
                        "name" =>  "Sevilla"
                    ],
                    [
                        "id" =>  1208,
                        "name" =>  "Soria"
                    ],
                    [
                        "id" =>  1203,
                        "name" =>  "Tarragona"
                    ],
                    [
                        "id" =>  5111,
                        "name" =>  "Teruel"
                    ],
                    [
                        "id" =>  1205,
                        "name" =>  "Toledo"
                    ],
                    [
                        "id" =>  1175,
                        "name" =>  "Valencia"
                    ],
                    [
                        "id" =>  1183,
                        "name" =>  "Valladolid"
                    ],
                    [
                        "id" =>  1161,
                        "name" =>  "Zamora"
                    ],
                    [
                        "id" =>  5113,
                        "name" =>  "Zaragoza"
                    ]
                ]
            ],
            [
                "name" =>  "Sri Lanka",
                "numeric_code" =>  "144",
                "alpha_2" =>  "LK",
                "alpha_3" =>  "LKA",
                "phone_code" =>  "94",
                "currency" =>  "LKR",
                "currency_name" =>  "Sri Lankan rupee",
                "currency_symbol" =>  "Rs",
                "emoji" =>  "\ud83c\uddf1\ud83c\uddf0",
                "states" =>  [
                    [
                        "id" =>  2799,
                        "name" =>  "Ampara District"
                    ],
                    [
                        "id" =>  2816,
                        "name" =>  "Anuradhapura District"
                    ],
                    [
                        "id" =>  2790,
                        "name" =>  "Badulla District"
                    ],
                    [
                        "id" =>  2818,
                        "name" =>  "Batticaloa District"
                    ],
                    [
                        "id" =>  2798,
                        "name" =>  "Central Province"
                    ],
                    [
                        "id" =>  2815,
                        "name" =>  "Colombo District"
                    ],
                    [
                        "id" =>  2808,
                        "name" =>  "Eastern Province"
                    ],
                    [
                        "id" =>  2792,
                        "name" =>  "Galle District"
                    ],
                    [
                        "id" =>  2804,
                        "name" =>  "Gampaha District"
                    ],
                    [
                        "id" =>  2791,
                        "name" =>  "Hambantota District"
                    ],
                    [
                        "id" =>  2787,
                        "name" =>  "Jaffna District"
                    ],
                    [
                        "id" =>  2789,
                        "name" =>  "Kalutara District"
                    ],
                    [
                        "id" =>  2788,
                        "name" =>  "Kandy District"
                    ],
                    [
                        "id" =>  2797,
                        "name" =>  "Kegalle District"
                    ],
                    [
                        "id" =>  2793,
                        "name" =>  "Kilinochchi District"
                    ],
                    [
                        "id" =>  2805,
                        "name" =>  "Mannar District"
                    ],
                    [
                        "id" =>  2810,
                        "name" =>  "Matale District"
                    ],
                    [
                        "id" =>  2806,
                        "name" =>  "Matara District"
                    ],
                    [
                        "id" =>  2819,
                        "name" =>  "Monaragala District"
                    ],
                    [
                        "id" =>  2814,
                        "name" =>  "Mullaitivu District"
                    ],
                    [
                        "id" =>  2800,
                        "name" =>  "North Central Province"
                    ],
                    [
                        "id" =>  2817,
                        "name" =>  "North Western Province"
                    ],
                    [
                        "id" =>  2813,
                        "name" =>  "Northern Province"
                    ],
                    [
                        "id" =>  2794,
                        "name" =>  "Nuwara Eliya District"
                    ],
                    [
                        "id" =>  2812,
                        "name" =>  "Polonnaruwa District"
                    ],
                    [
                        "id" =>  2796,
                        "name" =>  "Puttalam District"
                    ],
                    [
                        "id" =>  2807,
                        "name" =>  "Ratnapura district"
                    ],
                    [
                        "id" =>  2803,
                        "name" =>  "Sabaragamuwa Province"
                    ],
                    [
                        "id" =>  2801,
                        "name" =>  "Southern Province"
                    ],
                    [
                        "id" =>  2795,
                        "name" =>  "Trincomalee District"
                    ],
                    [
                        "id" =>  2811,
                        "name" =>  "Uva Province"
                    ],
                    [
                        "id" =>  2809,
                        "name" =>  "Vavuniya District"
                    ],
                    [
                        "id" =>  2802,
                        "name" =>  "Western Province"
                    ]
                ]
            ],
            [
                "name" =>  "Sudan",
                "numeric_code" =>  "729",
                "alpha_2" =>  "SD",
                "alpha_3" =>  "SDN",
                "phone_code" =>  "249",
                "currency" =>  "SDG",
                "currency_name" =>  "Sudanese pound",
                "currency_symbol" =>  ".\u0633.\u062c",
                "emoji" =>  "\ud83c\uddf8\ud83c\udde9",
                "states" =>  [
                    [
                        "id" =>  885,
                        "name" =>  "Al Jazirah"
                    ],
                    [
                        "id" =>  886,
                        "name" =>  "Al Qadarif"
                    ],
                    [
                        "id" =>  887,
                        "name" =>  "Blue Nile"
                    ],
                    [
                        "id" =>  896,
                        "name" =>  "Central Darfur"
                    ],
                    [
                        "id" =>  892,
                        "name" =>  "East Darfur"
                    ],
                    [
                        "id" =>  884,
                        "name" =>  "Kassala"
                    ],
                    [
                        "id" =>  881,
                        "name" =>  "Khartoum"
                    ],
                    [
                        "id" =>  890,
                        "name" =>  "North Darfur"
                    ],
                    [
                        "id" =>  893,
                        "name" =>  "North Kordofan"
                    ],
                    [
                        "id" =>  895,
                        "name" =>  "Northern"
                    ],
                    [
                        "id" =>  880,
                        "name" =>  "Red Sea"
                    ],
                    [
                        "id" =>  891,
                        "name" =>  "River Nile"
                    ],
                    [
                        "id" =>  882,
                        "name" =>  "Sennar"
                    ],
                    [
                        "id" =>  894,
                        "name" =>  "South Darfur"
                    ],
                    [
                        "id" =>  883,
                        "name" =>  "South Kordofan"
                    ],
                    [
                        "id" =>  888,
                        "name" =>  "West Darfur"
                    ],
                    [
                        "id" =>  889,
                        "name" =>  "West Kordofan"
                    ],
                    [
                        "id" =>  879,
                        "name" =>  "White Nile"
                    ]
                ]
            ],
            [
                "name" =>  "Suriname",
                "numeric_code" =>  "740",
                "alpha_2" =>  "SR",
                "alpha_3" =>  "SUR",
                "phone_code" =>  "597",
                "currency" =>  "SRD",
                "currency_name" =>  "Surinamese dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  2846,
                        "name" =>  "Brokopondo District"
                    ],
                    [
                        "id" =>  2839,
                        "name" =>  "Commewijne District"
                    ],
                    [
                        "id" =>  2842,
                        "name" =>  "Coronie District"
                    ],
                    [
                        "id" =>  2845,
                        "name" =>  "Marowijne District"
                    ],
                    [
                        "id" =>  2840,
                        "name" =>  "Nickerie District"
                    ],
                    [
                        "id" =>  2841,
                        "name" =>  "Para District"
                    ],
                    [
                        "id" =>  2843,
                        "name" =>  "Paramaribo District"
                    ],
                    [
                        "id" =>  2848,
                        "name" =>  "Saramacca District"
                    ],
                    [
                        "id" =>  2847,
                        "name" =>  "Sipaliwini District"
                    ],
                    [
                        "id" =>  2844,
                        "name" =>  "Wanica District"
                    ]
                ]
            ],
            [
                "name" =>  "Svalbard And Jan Mayen Islands",
                "numeric_code" =>  "744",
                "alpha_2" =>  "SJ",
                "alpha_3" =>  "SJM",
                "phone_code" =>  "47",
                "currency" =>  "NOK",
                "currency_name" =>  "Norwegian Krone",
                "currency_symbol" =>  "kr",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddef",
                "states" =>  []
            ],
            [
                "name" =>  "Swaziland",
                "numeric_code" =>  "748",
                "alpha_2" =>  "SZ",
                "alpha_3" =>  "SWZ",
                "phone_code" =>  "268",
                "currency" =>  "SZL",
                "currency_name" =>  "Lilangeni",
                "currency_symbol" =>  "E",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddff",
                "states" =>  [
                    [
                        "id" =>  969,
                        "name" =>  "Hhohho District"
                    ],
                    [
                        "id" =>  970,
                        "name" =>  "Lubombo District"
                    ],
                    [
                        "id" =>  968,
                        "name" =>  "Manzini District"
                    ],
                    [
                        "id" =>  971,
                        "name" =>  "Shiselweni District"
                    ]
                ]
            ],
            [
                "name" =>  "Sweden",
                "numeric_code" =>  "752",
                "alpha_2" =>  "SE",
                "alpha_3" =>  "SWE",
                "phone_code" =>  "46",
                "currency" =>  "SEK",
                "currency_name" =>  "Swedish krona",
                "currency_symbol" =>  "kr",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddea",
                "states" =>  [
                    [
                        "id" =>  1537,
                        "name" =>  "Blekinge"
                    ],
                    [
                        "id" =>  1534,
                        "name" =>  "Dalarna County"
                    ],
                    [
                        "id" =>  1533,
                        "name" =>  "G\u00e4vleborg County"
                    ],
                    [
                        "id" =>  1546,
                        "name" =>  "Gotland County"
                    ],
                    [
                        "id" =>  1548,
                        "name" =>  "Halland County"
                    ],
                    [
                        "id" =>  1550,
                        "name" =>  "J\u00f6nk\u00f6ping County"
                    ],
                    [
                        "id" =>  1544,
                        "name" =>  "Kalmar County"
                    ],
                    [
                        "id" =>  1542,
                        "name" =>  "Kronoberg County"
                    ],
                    [
                        "id" =>  1538,
                        "name" =>  "Norrbotten County"
                    ],
                    [
                        "id" =>  1539,
                        "name" =>  "\u00d6rebro County"
                    ],
                    [
                        "id" =>  1536,
                        "name" =>  "\u00d6sterg\u00f6tland County"
                    ],
                    [
                        "id" =>  1541,
                        "name" =>  "Sk\u00e5ne County"
                    ],
                    [
                        "id" =>  1540,
                        "name" =>  "S\u00f6dermanland County"
                    ],
                    [
                        "id" =>  1551,
                        "name" =>  "Stockholm County"
                    ],
                    [
                        "id" =>  1545,
                        "name" =>  "Uppsala County"
                    ],
                    [
                        "id" =>  1535,
                        "name" =>  "V\u00e4rmland County"
                    ],
                    [
                        "id" =>  1543,
                        "name" =>  "V\u00e4sterbotten County"
                    ],
                    [
                        "id" =>  1552,
                        "name" =>  "V\u00e4sternorrland County"
                    ],
                    [
                        "id" =>  1549,
                        "name" =>  "V\u00e4stmanland County"
                    ],
                    [
                        "id" =>  1547,
                        "name" =>  "V\u00e4stra G\u00f6taland County"
                    ]
                ]
            ],
            [
                "name" =>  "Switzerland",
                "numeric_code" =>  "756",
                "alpha_2" =>  "CH",
                "alpha_3" =>  "CHE",
                "phone_code" =>  "41",
                "currency" =>  "CHF",
                "currency_name" =>  "Swiss franc",
                "currency_symbol" =>  "CHf",
                "emoji" =>  "\ud83c\udde8\ud83c\udded",
                "states" =>  [
                    [
                        "id" =>  1639,
                        "name" =>  "Aargau"
                    ],
                    [
                        "id" =>  1655,
                        "name" =>  "Appenzell Ausserrhoden"
                    ],
                    [
                        "id" =>  1649,
                        "name" =>  "Appenzell Innerrhoden"
                    ],
                    [
                        "id" =>  1641,
                        "name" =>  "Basel-Land"
                    ],
                    [
                        "id" =>  4957,
                        "name" =>  "Basel-Stadt"
                    ],
                    [
                        "id" =>  1645,
                        "name" =>  "Bern"
                    ],
                    [
                        "id" =>  1640,
                        "name" =>  "Fribourg"
                    ],
                    [
                        "id" =>  1647,
                        "name" =>  "Geneva"
                    ],
                    [
                        "id" =>  1661,
                        "name" =>  "Glarus"
                    ],
                    [
                        "id" =>  1660,
                        "name" =>  "Graub\u00fcnden"
                    ],
                    [
                        "id" =>  1658,
                        "name" =>  "Jura"
                    ],
                    [
                        "id" =>  1663,
                        "name" =>  "Lucerne"
                    ],
                    [
                        "id" =>  1659,
                        "name" =>  "Neuch\u00e2tel"
                    ],
                    [
                        "id" =>  1652,
                        "name" =>  "Nidwalden"
                    ],
                    [
                        "id" =>  1650,
                        "name" =>  "Obwalden"
                    ],
                    [
                        "id" =>  1654,
                        "name" =>  "Schaffhausen"
                    ],
                    [
                        "id" =>  1653,
                        "name" =>  "Schwyz"
                    ],
                    [
                        "id" =>  1662,
                        "name" =>  "Solothurn"
                    ],
                    [
                        "id" =>  1644,
                        "name" =>  "St. Gallen"
                    ],
                    [
                        "id" =>  1657,
                        "name" =>  "Thurgau"
                    ],
                    [
                        "id" =>  1643,
                        "name" =>  "Ticino"
                    ],
                    [
                        "id" =>  1642,
                        "name" =>  "Uri"
                    ],
                    [
                        "id" =>  1648,
                        "name" =>  "Valais"
                    ],
                    [
                        "id" =>  1651,
                        "name" =>  "Vaud"
                    ],
                    [
                        "id" =>  1646,
                        "name" =>  "Zug"
                    ],
                    [
                        "id" =>  1656,
                        "name" =>  "Z\u00fcrich"
                    ]
                ]
            ],
            [
                "name" =>  "Syria",
                "numeric_code" =>  "760",
                "alpha_2" =>  "SY",
                "alpha_3" =>  "SYR",
                "phone_code" =>  "963",
                "currency" =>  "SYP",
                "currency_name" =>  "Syrian pound",
                "currency_symbol" =>  "LS",
                "emoji" =>  "\ud83c\uddf8\ud83c\uddfe",
                "states" =>  [
                    [
                        "id" =>  2941,
                        "name" =>  "Al-Hasakah"
                    ],
                    [
                        "id" =>  2944,
                        "name" =>  "Al-Raqqah"
                    ],
                    [
                        "id" =>  2946,
                        "name" =>  "Aleppo"
                    ],
                    [
                        "id" =>  2936,
                        "name" =>  "As-Suwayda"
                    ],
                    [
                        "id" =>  2939,
                        "name" =>  "Damascus"
                    ],
                    [
                        "id" =>  2945,
                        "name" =>  "Daraa"
                    ],
                    [
                        "id" =>  2937,
                        "name" =>  "Deir ez-Zor"
                    ],
                    [
                        "id" =>  2934,
                        "name" =>  "Hama"
                    ],
                    [
                        "id" =>  2942,
                        "name" =>  "Homs"
                    ],
                    [
                        "id" =>  2940,
                        "name" =>  "Idlib"
                    ],
                    [
                        "id" =>  2938,
                        "name" =>  "Latakia"
                    ],
                    [
                        "id" =>  2943,
                        "name" =>  "Quneitra"
                    ],
                    [
                        "id" =>  2935,
                        "name" =>  "Rif Dimashq"
                    ],
                    [
                        "id" =>  2947,
                        "name" =>  "Tartus"
                    ]
                ]
            ],
            [
                "name" =>  "Taiwan",
                "numeric_code" =>  "158",
                "alpha_2" =>  "TW",
                "alpha_3" =>  "TWN",
                "phone_code" =>  "886",
                "currency" =>  "TWD",
                "currency_name" =>  "New Taiwan dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf9\ud83c\uddfc",
                "states" =>  [
                    [
                        "id" =>  3404,
                        "name" =>  "Changhua"
                    ],
                    [
                        "id" =>  3408,
                        "name" =>  "Chiayi"
                    ],
                    [
                        "id" =>  3418,
                        "name" =>  "Chiayi"
                    ],
                    [
                        "id" =>  3423,
                        "name" =>  "Hsinchu"
                    ],
                    [
                        "id" =>  3417,
                        "name" =>  "Hsinchu"
                    ],
                    [
                        "id" =>  3411,
                        "name" =>  "Hualien"
                    ],
                    [
                        "id" =>  3412,
                        "name" =>  "Kaohsiung"
                    ],
                    [
                        "id" =>  4965,
                        "name" =>  "Keelung"
                    ],
                    [
                        "id" =>  3415,
                        "name" =>  "Kinmen"
                    ],
                    [
                        "id" =>  3420,
                        "name" =>  "Lienchiang"
                    ],
                    [
                        "id" =>  3413,
                        "name" =>  "Miaoli"
                    ],
                    [
                        "id" =>  3407,
                        "name" =>  "Nantou"
                    ],
                    [
                        "id" =>  4966,
                        "name" =>  "New Taipei"
                    ],
                    [
                        "id" =>  3403,
                        "name" =>  "Penghu"
                    ],
                    [
                        "id" =>  3405,
                        "name" =>  "Pingtung"
                    ],
                    [
                        "id" =>  3406,
                        "name" =>  "Taichung"
                    ],
                    [
                        "id" =>  3421,
                        "name" =>  "Tainan"
                    ],
                    [
                        "id" =>  3422,
                        "name" =>  "Taipei"
                    ],
                    [
                        "id" =>  3410,
                        "name" =>  "Taitung"
                    ],
                    [
                        "id" =>  3419,
                        "name" =>  "Taoyuan"
                    ],
                    [
                        "id" =>  3402,
                        "name" =>  "Yilan"
                    ],
                    [
                        "id" =>  3416,
                        "name" =>  "Yunlin"
                    ]
                ]
            ],
            [
                "name" =>  "Tajikistan",
                "numeric_code" =>  "762",
                "alpha_2" =>  "TJ",
                "alpha_3" =>  "TJK",
                "phone_code" =>  "992",
                "currency" =>  "TJS",
                "currency_name" =>  "Tajikistani somoni",
                "currency_symbol" =>  "SM",
                "emoji" =>  "\ud83c\uddf9\ud83c\uddef",
                "states" =>  [
                    [
                        "id" =>  3397,
                        "name" =>  "districts of Republican Subordination"
                    ],
                    [
                        "id" =>  3399,
                        "name" =>  "Gorno-Badakhshan Autonomous Province"
                    ],
                    [
                        "id" =>  3398,
                        "name" =>  "Khatlon Province"
                    ],
                    [
                        "id" =>  3400,
                        "name" =>  "Sughd Province"
                    ]
                ]
            ],
            [
                "name" =>  "Tanzania",
                "numeric_code" =>  "834",
                "alpha_2" =>  "TZ",
                "alpha_3" =>  "TZA",
                "phone_code" =>  "255",
                "currency" =>  "TZS",
                "currency_name" =>  "Tanzanian shilling",
                "currency_symbol" =>  "TSh",
                "emoji" =>  "\ud83c\uddf9\ud83c\uddff",
                "states" =>  [
                    [
                        "id" =>  1491,
                        "name" =>  "Arusha"
                    ],
                    [
                        "id" =>  1490,
                        "name" =>  "Dar es Salaam"
                    ],
                    [
                        "id" =>  1466,
                        "name" =>  "Dodoma"
                    ],
                    [
                        "id" =>  1481,
                        "name" =>  "Geita"
                    ],
                    [
                        "id" =>  1489,
                        "name" =>  "Iringa"
                    ],
                    [
                        "id" =>  1465,
                        "name" =>  "Kagera"
                    ],
                    [
                        "id" =>  1482,
                        "name" =>  "Katavi"
                    ],
                    [
                        "id" =>  1478,
                        "name" =>  "Kigoma"
                    ],
                    [
                        "id" =>  1467,
                        "name" =>  "Kilimanjaro"
                    ],
                    [
                        "id" =>  1483,
                        "name" =>  "Lindi"
                    ],
                    [
                        "id" =>  1484,
                        "name" =>  "Manyara"
                    ],
                    [
                        "id" =>  1468,
                        "name" =>  "Mara"
                    ],
                    [
                        "id" =>  4955,
                        "name" =>  "Mbeya"
                    ],
                    [
                        "id" =>  1470,
                        "name" =>  "Morogoro"
                    ],
                    [
                        "id" =>  1476,
                        "name" =>  "Mtwara"
                    ],
                    [
                        "id" =>  1479,
                        "name" =>  "Mwanza"
                    ],
                    [
                        "id" =>  1480,
                        "name" =>  "Njombe"
                    ],
                    [
                        "id" =>  1488,
                        "name" =>  "Pemba North"
                    ],
                    [
                        "id" =>  1472,
                        "name" =>  "Pemba South"
                    ],
                    [
                        "id" =>  1485,
                        "name" =>  "Pwani"
                    ],
                    [
                        "id" =>  1477,
                        "name" =>  "Rukwa"
                    ],
                    [
                        "id" =>  1486,
                        "name" =>  "Ruvuma"
                    ],
                    [
                        "id" =>  1463,
                        "name" =>  "Shinyanga"
                    ],
                    [
                        "id" =>  1464,
                        "name" =>  "Simiyu"
                    ],
                    [
                        "id" =>  1474,
                        "name" =>  "Singida"
                    ],
                    [
                        "id" =>  4956,
                        "name" =>  "Songwe"
                    ],
                    [
                        "id" =>  1469,
                        "name" =>  "Tabora"
                    ],
                    [
                        "id" =>  1487,
                        "name" =>  "Tanga"
                    ],
                    [
                        "id" =>  1473,
                        "name" =>  "Zanzibar North"
                    ],
                    [
                        "id" =>  1471,
                        "name" =>  "Zanzibar South"
                    ],
                    [
                        "id" =>  1475,
                        "name" =>  "Zanzibar West"
                    ]
                ]
            ],
            [
                "name" =>  "Thailand",
                "numeric_code" =>  "764",
                "alpha_2" =>  "TH",
                "alpha_3" =>  "THA",
                "phone_code" =>  "66",
                "currency" =>  "THB",
                "currency_name" =>  "Thai baht",
                "currency_symbol" =>  "\u0e3f",
                "emoji" =>  "\ud83c\uddf9\ud83c\udded",
                "states" =>  [
                    [
                        "id" =>  3523,
                        "name" =>  "Amnat Charoen"
                    ],
                    [
                        "id" =>  3519,
                        "name" =>  "Ang Thong"
                    ],
                    [
                        "id" =>  3554,
                        "name" =>  "Bangkok"
                    ],
                    [
                        "id" =>  3533,
                        "name" =>  "Bueng Kan"
                    ],
                    [
                        "id" =>  3534,
                        "name" =>  "Buri Ram"
                    ],
                    [
                        "id" =>  3552,
                        "name" =>  "Chachoengsao"
                    ],
                    [
                        "id" =>  3522,
                        "name" =>  "Chai Nat"
                    ],
                    [
                        "id" =>  4954,
                        "name" =>  "Chaiyaphum"
                    ],
                    [
                        "id" =>  3486,
                        "name" =>  "Chanthaburi"
                    ],
                    [
                        "id" =>  3491,
                        "name" =>  "Chiang Mai"
                    ],
                    [
                        "id" =>  3498,
                        "name" =>  "Chiang Rai"
                    ],
                    [
                        "id" =>  3513,
                        "name" =>  "Chon Buri"
                    ],
                    [
                        "id" =>  3526,
                        "name" =>  "Chumphon"
                    ],
                    [
                        "id" =>  3550,
                        "name" =>  "Kalasin"
                    ],
                    [
                        "id" =>  3516,
                        "name" =>  "Kamphaeng Phet"
                    ],
                    [
                        "id" =>  3511,
                        "name" =>  "Kanchanaburi"
                    ],
                    [
                        "id" =>  3485,
                        "name" =>  "Khon Kaen"
                    ],
                    [
                        "id" =>  3478,
                        "name" =>  "Krabi"
                    ],
                    [
                        "id" =>  3544,
                        "name" =>  "Lampang"
                    ],
                    [
                        "id" =>  3483,
                        "name" =>  "Lamphun"
                    ],
                    [
                        "id" =>  3509,
                        "name" =>  "Loei"
                    ],
                    [
                        "id" =>  3543,
                        "name" =>  "Lop Buri"
                    ],
                    [
                        "id" =>  3505,
                        "name" =>  "Mae Hong Son"
                    ],
                    [
                        "id" =>  3517,
                        "name" =>  "Maha Sarakham"
                    ],
                    [
                        "id" =>  3546,
                        "name" =>  "Mukdahan"
                    ],
                    [
                        "id" =>  3535,
                        "name" =>  "Nakhon Nayok"
                    ],
                    [
                        "id" =>  3503,
                        "name" =>  "Nakhon Pathom"
                    ],
                    [
                        "id" =>  3548,
                        "name" =>  "Nakhon Phanom"
                    ],
                    [
                        "id" =>  3497,
                        "name" =>  "Nakhon Ratchasima"
                    ],
                    [
                        "id" =>  3492,
                        "name" =>  "Nakhon Sawan"
                    ],
                    [
                        "id" =>  3520,
                        "name" =>  "Nakhon Si Thammarat"
                    ],
                    [
                        "id" =>  3530,
                        "name" =>  "Nan"
                    ],
                    [
                        "id" =>  3553,
                        "name" =>  "Narathiwat"
                    ],
                    [
                        "id" =>  3480,
                        "name" =>  "Nong Bua Lam Phu"
                    ],
                    [
                        "id" =>  3484,
                        "name" =>  "Nong Khai"
                    ],
                    [
                        "id" =>  3495,
                        "name" =>  "Nonthaburi"
                    ],
                    [
                        "id" =>  3500,
                        "name" =>  "Pathum Thani"
                    ],
                    [
                        "id" =>  3540,
                        "name" =>  "Pattani"
                    ],
                    [
                        "id" =>  3507,
                        "name" =>  "Pattaya"
                    ],
                    [
                        "id" =>  3549,
                        "name" =>  "Phangnga"
                    ],
                    [
                        "id" =>  3488,
                        "name" =>  "Phatthalung"
                    ],
                    [
                        "id" =>  3538,
                        "name" =>  "Phayao"
                    ],
                    [
                        "id" =>  3515,
                        "name" =>  "Phetchabun"
                    ],
                    [
                        "id" =>  3532,
                        "name" =>  "Phetchaburi"
                    ],
                    [
                        "id" =>  3514,
                        "name" =>  "Phichit"
                    ],
                    [
                        "id" =>  3506,
                        "name" =>  "Phitsanulok"
                    ],
                    [
                        "id" =>  3494,
                        "name" =>  "Phra Nakhon Si Ayutthaya"
                    ],
                    [
                        "id" =>  3528,
                        "name" =>  "Phrae"
                    ],
                    [
                        "id" =>  3536,
                        "name" =>  "Phuket"
                    ],
                    [
                        "id" =>  3542,
                        "name" =>  "Prachin Buri"
                    ],
                    [
                        "id" =>  3508,
                        "name" =>  "Prachuap Khiri Khan"
                    ],
                    [
                        "id" =>  3479,
                        "name" =>  "Ranong"
                    ],
                    [
                        "id" =>  3499,
                        "name" =>  "Ratchaburi"
                    ],
                    [
                        "id" =>  3518,
                        "name" =>  "Rayong"
                    ],
                    [
                        "id" =>  3510,
                        "name" =>  "Roi Et"
                    ],
                    [
                        "id" =>  3529,
                        "name" =>  "Sa Kaeo"
                    ],
                    [
                        "id" =>  3501,
                        "name" =>  "Sakon Nakhon"
                    ],
                    [
                        "id" =>  3481,
                        "name" =>  "Samut Prakan"
                    ],
                    [
                        "id" =>  3504,
                        "name" =>  "Samut Sakhon"
                    ],
                    [
                        "id" =>  3502,
                        "name" =>  "Samut Songkhram"
                    ],
                    [
                        "id" =>  3487,
                        "name" =>  "Saraburi"
                    ],
                    [
                        "id" =>  3537,
                        "name" =>  "Satun"
                    ],
                    [
                        "id" =>  3547,
                        "name" =>  "Si Sa Ket"
                    ],
                    [
                        "id" =>  3490,
                        "name" =>  "Sing Buri"
                    ],
                    [
                        "id" =>  3539,
                        "name" =>  "Songkhla"
                    ],
                    [
                        "id" =>  3545,
                        "name" =>  "Sukhothai"
                    ],
                    [
                        "id" =>  3524,
                        "name" =>  "Suphan Buri"
                    ],
                    [
                        "id" =>  3482,
                        "name" =>  "Surat Thani"
                    ],
                    [
                        "id" =>  3531,
                        "name" =>  "Surin"
                    ],
                    [
                        "id" =>  3525,
                        "name" =>  "Tak"
                    ],
                    [
                        "id" =>  3541,
                        "name" =>  "Trang"
                    ],
                    [
                        "id" =>  3496,
                        "name" =>  "Trat"
                    ],
                    [
                        "id" =>  3512,
                        "name" =>  "Ubon Ratchathani"
                    ],
                    [
                        "id" =>  3527,
                        "name" =>  "Udon Thani"
                    ],
                    [
                        "id" =>  3551,
                        "name" =>  "Uthai Thani"
                    ],
                    [
                        "id" =>  3489,
                        "name" =>  "Uttaradit"
                    ],
                    [
                        "id" =>  3493,
                        "name" =>  "Yala"
                    ],
                    [
                        "id" =>  3521,
                        "name" =>  "Yasothon"
                    ]
                ]
            ],
            [
                "name" =>  "The Bahamas",
                "numeric_code" =>  "044",
                "alpha_2" =>  "BS",
                "alpha_3" =>  "BHS",
                "phone_code" =>  "+1-242",
                "currency" =>  "BSD",
                "currency_name" =>  "Bahamian dollar",
                "currency_symbol" =>  "B$",
                "emoji" =>  "\ud83c\udde7\ud83c\uddf8",
                "states" =>  [
                    [
                        "id" =>  3601,
                        "name" =>  "Acklins"
                    ],
                    [
                        "id" =>  3628,
                        "name" =>  "Acklins and Crooked Islands"
                    ],
                    [
                        "id" =>  3593,
                        "name" =>  "Berry Islands"
                    ],
                    [
                        "id" =>  3629,
                        "name" =>  "Bimini"
                    ],
                    [
                        "id" =>  3605,
                        "name" =>  "Black Point"
                    ],
                    [
                        "id" =>  3611,
                        "name" =>  "Cat Island"
                    ],
                    [
                        "id" =>  3603,
                        "name" =>  "Central Abaco"
                    ],
                    [
                        "id" =>  3631,
                        "name" =>  "Central Andros"
                    ],
                    [
                        "id" =>  3596,
                        "name" =>  "Central Eleuthera"
                    ],
                    [
                        "id" =>  3621,
                        "name" =>  "Crooked Island"
                    ],
                    [
                        "id" =>  3614,
                        "name" =>  "East Grand Bahama"
                    ],
                    [
                        "id" =>  3612,
                        "name" =>  "Exuma"
                    ],
                    [
                        "id" =>  3626,
                        "name" =>  "Freeport"
                    ],
                    [
                        "id" =>  3619,
                        "name" =>  "Fresh Creek"
                    ],
                    [
                        "id" =>  3597,
                        "name" =>  "Governor's Harbour"
                    ],
                    [
                        "id" =>  3632,
                        "name" =>  "Grand Cay"
                    ],
                    [
                        "id" =>  3595,
                        "name" =>  "Green Turtle Cay"
                    ],
                    [
                        "id" =>  3613,
                        "name" =>  "Harbour Island"
                    ],
                    [
                        "id" =>  3598,
                        "name" =>  "High Rock"
                    ],
                    [
                        "id" =>  3624,
                        "name" =>  "Hope Town"
                    ],
                    [
                        "id" =>  3609,
                        "name" =>  "Inagua"
                    ],
                    [
                        "id" =>  3618,
                        "name" =>  "Kemps Bay"
                    ],
                    [
                        "id" =>  3610,
                        "name" =>  "Long Island"
                    ],
                    [
                        "id" =>  3625,
                        "name" =>  "Mangrove Cay"
                    ],
                    [
                        "id" =>  3604,
                        "name" =>  "Marsh Harbour"
                    ],
                    [
                        "id" =>  3633,
                        "name" =>  "Mayaguana District"
                    ],
                    [
                        "id" =>  4881,
                        "name" =>  "New Providence"
                    ],
                    [
                        "id" =>  3594,
                        "name" =>  "Nichollstown and Berry Islands"
                    ],
                    [
                        "id" =>  3616,
                        "name" =>  "North Abaco"
                    ],
                    [
                        "id" =>  3617,
                        "name" =>  "North Andros"
                    ],
                    [
                        "id" =>  3602,
                        "name" =>  "North Eleuthera"
                    ],
                    [
                        "id" =>  3615,
                        "name" =>  "Ragged Island"
                    ],
                    [
                        "id" =>  3623,
                        "name" =>  "Rock Sound"
                    ],
                    [
                        "id" =>  3600,
                        "name" =>  "Rum Cay District"
                    ],
                    [
                        "id" =>  3620,
                        "name" =>  "San Salvador and Rum Cay"
                    ],
                    [
                        "id" =>  3627,
                        "name" =>  "San Salvador Island"
                    ],
                    [
                        "id" =>  3606,
                        "name" =>  "Sandy Point"
                    ],
                    [
                        "id" =>  3608,
                        "name" =>  "South Abaco"
                    ],
                    [
                        "id" =>  3622,
                        "name" =>  "South Andros"
                    ],
                    [
                        "id" =>  3607,
                        "name" =>  "South Eleuthera"
                    ],
                    [
                        "id" =>  3630,
                        "name" =>  "Spanish Wells"
                    ],
                    [
                        "id" =>  3599,
                        "name" =>  "West Grand Bahama"
                    ]
                ]
            ],
            [
                "name" =>  "Togo",
                "numeric_code" =>  "768",
                "alpha_2" =>  "TG",
                "alpha_3" =>  "TGO",
                "phone_code" =>  "228",
                "currency" =>  "XOF",
                "currency_name" =>  "West African CFA franc",
                "currency_symbol" =>  "CFA",
                "emoji" =>  "\ud83c\uddf9\ud83c\uddec",
                "states" =>  [
                    [
                        "id" =>  2575,
                        "name" =>  "Centrale Region"
                    ],
                    [
                        "id" =>  2579,
                        "name" =>  "Kara Region"
                    ],
                    [
                        "id" =>  2576,
                        "name" =>  "Maritime"
                    ],
                    [
                        "id" =>  2577,
                        "name" =>  "Plateaux Region"
                    ],
                    [
                        "id" =>  2578,
                        "name" =>  "Savanes Region"
                    ]
                ]
            ],
            [
                "name" =>  "Tokelau",
                "numeric_code" =>  "772",
                "alpha_2" =>  "TK",
                "alpha_3" =>  "TKL",
                "phone_code" =>  "690",
                "currency" =>  "NZD",
                "currency_name" =>  "New Zealand dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf9\ud83c\uddf0",
                "states" =>  []
            ],
            [
                "name" =>  "Tonga",
                "numeric_code" =>  "776",
                "alpha_2" =>  "TO",
                "alpha_3" =>  "TON",
                "phone_code" =>  "676",
                "currency" =>  "TOP",
                "currency_name" =>  "Tongan pa\u02bbanga",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf9\ud83c\uddf4",
                "states" =>  [
                    [
                        "id" =>  3913,
                        "name" =>  "Ha\u02bbapai"
                    ],
                    [
                        "id" =>  3915,
                        "name" =>  "\u02bbEua"
                    ],
                    [
                        "id" =>  3914,
                        "name" =>  "Niuas"
                    ],
                    [
                        "id" =>  3912,
                        "name" =>  "Tongatapu"
                    ],
                    [
                        "id" =>  3911,
                        "name" =>  "Vava\u02bbu"
                    ]
                ]
            ],
            [
                "name" =>  "Trinidad And Tobago",
                "numeric_code" =>  "780",
                "alpha_2" =>  "TT",
                "alpha_3" =>  "TTO",
                "phone_code" =>  "+1-868",
                "currency" =>  "TTD",
                "currency_name" =>  "Trinidad and Tobago dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf9\ud83c\uddf9",
                "states" =>  [
                    [
                        "id" =>  3362,
                        "name" =>  "Arima"
                    ],
                    [
                        "id" =>  3366,
                        "name" =>  "Chaguanas"
                    ],
                    [
                        "id" =>  3354,
                        "name" =>  "Couva-Tabaquite-Talparo Regional Corporation"
                    ],
                    [
                        "id" =>  3367,
                        "name" =>  "Diego Martin Regional Corporation"
                    ],
                    [
                        "id" =>  3355,
                        "name" =>  "Eastern Tobago"
                    ],
                    [
                        "id" =>  3365,
                        "name" =>  "Penal-Debe Regional Corporation"
                    ],
                    [
                        "id" =>  3360,
                        "name" =>  "Point Fortin"
                    ],
                    [
                        "id" =>  3363,
                        "name" =>  "Port of Spain"
                    ],
                    [
                        "id" =>  3368,
                        "name" =>  "Princes Town Regional Corporation"
                    ],
                    [
                        "id" =>  3356,
                        "name" =>  "Rio Claro-Mayaro Regional Corporation"
                    ],
                    [
                        "id" =>  3359,
                        "name" =>  "San Fernando"
                    ],
                    [
                        "id" =>  3357,
                        "name" =>  "San Juan-Laventille Regional Corporation"
                    ],
                    [
                        "id" =>  3361,
                        "name" =>  "Sangre Grande Regional Corporation"
                    ],
                    [
                        "id" =>  3364,
                        "name" =>  "Siparia Regional Corporation"
                    ],
                    [
                        "id" =>  3358,
                        "name" =>  "Tunapuna-Piarco Regional Corporation"
                    ],
                    [
                        "id" =>  3353,
                        "name" =>  "Western Tobago"
                    ]
                ]
            ],
            [
                "name" =>  "Tunisia",
                "numeric_code" =>  "788",
                "alpha_2" =>  "TN",
                "alpha_3" =>  "TUN",
                "phone_code" =>  "216",
                "currency" =>  "TND",
                "currency_name" =>  "Tunisian dinar",
                "currency_symbol" =>  "\u062a.\u062f",
                "emoji" =>  "\ud83c\uddf9\ud83c\uddf3",
                "states" =>  [
                    [
                        "id" =>  2550,
                        "name" =>  "Ariana"
                    ],
                    [
                        "id" =>  2566,
                        "name" =>  "Ben Arous"
                    ],
                    [
                        "id" =>  2551,
                        "name" =>  "Bizerte"
                    ],
                    [
                        "id" =>  2558,
                        "name" =>  "Gab\u00e8s"
                    ],
                    [
                        "id" =>  2556,
                        "name" =>  "Gafsa"
                    ],
                    [
                        "id" =>  2552,
                        "name" =>  "Jendouba"
                    ],
                    [
                        "id" =>  2564,
                        "name" =>  "Kairouan"
                    ],
                    [
                        "id" =>  2570,
                        "name" =>  "Kasserine"
                    ],
                    [
                        "id" =>  2572,
                        "name" =>  "Kassrine"
                    ],
                    [
                        "id" =>  2562,
                        "name" =>  "Kebili"
                    ],
                    [
                        "id" =>  2561,
                        "name" =>  "Kef"
                    ],
                    [
                        "id" =>  2568,
                        "name" =>  "Mahdia"
                    ],
                    [
                        "id" =>  2555,
                        "name" =>  "Manouba"
                    ],
                    [
                        "id" =>  2560,
                        "name" =>  "Medenine"
                    ],
                    [
                        "id" =>  2553,
                        "name" =>  "Monastir"
                    ],
                    [
                        "id" =>  5116,
                        "name" =>  "Nabeul"
                    ],
                    [
                        "id" =>  2557,
                        "name" =>  "Sfax"
                    ],
                    [
                        "id" =>  2567,
                        "name" =>  "Sidi Bouzid"
                    ],
                    [
                        "id" =>  2563,
                        "name" =>  "Siliana"
                    ],
                    [
                        "id" =>  2571,
                        "name" =>  "Sousse"
                    ],
                    [
                        "id" =>  2559,
                        "name" =>  "Tataouine"
                    ],
                    [
                        "id" =>  2569,
                        "name" =>  "Tozeur"
                    ],
                    [
                        "id" =>  2554,
                        "name" =>  "Tunis"
                    ],
                    [
                        "id" =>  2565,
                        "name" =>  "Zaghouan"
                    ]
                ]
            ],
            [
                "name" =>  "Turkey",
                "numeric_code" =>  "792",
                "alpha_2" =>  "TR",
                "alpha_3" =>  "TUR",
                "phone_code" =>  "90",
                "currency" =>  "TRY",
                "currency_name" =>  "Turkish lira",
                "currency_symbol" =>  "\u20ba",
                "emoji" =>  "\ud83c\uddf9\ud83c\uddf7",
                "states" =>  [
                    [
                        "id" =>  2212,
                        "name" =>  "Adana"
                    ],
                    [
                        "id" =>  2155,
                        "name" =>  "Ad\u0131yaman"
                    ],
                    [
                        "id" =>  2179,
                        "name" =>  "Afyonkarahisar"
                    ],
                    [
                        "id" =>  2193,
                        "name" =>  "A\u011fr\u0131"
                    ],
                    [
                        "id" =>  2210,
                        "name" =>  "Aksaray"
                    ],
                    [
                        "id" =>  2161,
                        "name" =>  "Amasya"
                    ],
                    [
                        "id" =>  2217,
                        "name" =>  "Ankara"
                    ],
                    [
                        "id" =>  2169,
                        "name" =>  "Antalya"
                    ],
                    [
                        "id" =>  2185,
                        "name" =>  "Ardahan"
                    ],
                    [
                        "id" =>  2191,
                        "name" =>  "Artvin"
                    ],
                    [
                        "id" =>  2187,
                        "name" =>  "Ayd\u0131n"
                    ],
                    [
                        "id" =>  2175,
                        "name" =>  "Bal\u0131kesir"
                    ],
                    [
                        "id" =>  2148,
                        "name" =>  "Bart\u0131n"
                    ],
                    [
                        "id" =>  2194,
                        "name" =>  "Batman"
                    ],
                    [
                        "id" =>  2177,
                        "name" =>  "Bayburt"
                    ],
                    [
                        "id" =>  2221,
                        "name" =>  "Bilecik"
                    ],
                    [
                        "id" =>  2153,
                        "name" =>  "Bing\u00f6l"
                    ],
                    [
                        "id" =>  2215,
                        "name" =>  "Bitlis"
                    ],
                    [
                        "id" =>  2172,
                        "name" =>  "Bolu"
                    ],
                    [
                        "id" =>  2209,
                        "name" =>  "Burdur"
                    ],
                    [
                        "id" =>  2163,
                        "name" =>  "Bursa"
                    ],
                    [
                        "id" =>  2216,
                        "name" =>  "\u00c7anakkale"
                    ],
                    [
                        "id" =>  2168,
                        "name" =>  "\u00c7ank\u0131r\u0131"
                    ],
                    [
                        "id" =>  2173,
                        "name" =>  "\u00c7orum"
                    ],
                    [
                        "id" =>  2157,
                        "name" =>  "Denizli"
                    ],
                    [
                        "id" =>  2226,
                        "name" =>  "Diyarbak\u0131r"
                    ],
                    [
                        "id" =>  2202,
                        "name" =>  "D\u00fczce"
                    ],
                    [
                        "id" =>  2151,
                        "name" =>  "Edirne"
                    ],
                    [
                        "id" =>  2159,
                        "name" =>  "Elaz\u0131\u011f"
                    ],
                    [
                        "id" =>  2160,
                        "name" =>  "Erzincan"
                    ],
                    [
                        "id" =>  2165,
                        "name" =>  "Erzurum"
                    ],
                    [
                        "id" =>  2164,
                        "name" =>  "Eski\u015fehir"
                    ],
                    [
                        "id" =>  2203,
                        "name" =>  "Gaziantep"
                    ],
                    [
                        "id" =>  2186,
                        "name" =>  "Giresun"
                    ],
                    [
                        "id" =>  2204,
                        "name" =>  "G\u00fcm\u00fc\u015fhane"
                    ],
                    [
                        "id" =>  2190,
                        "name" =>  "Hakk\u00e2ri"
                    ],
                    [
                        "id" =>  2211,
                        "name" =>  "Hatay"
                    ],
                    [
                        "id" =>  2166,
                        "name" =>  "I\u011fd\u0131r"
                    ],
                    [
                        "id" =>  2222,
                        "name" =>  "Isparta"
                    ],
                    [
                        "id" =>  2170,
                        "name" =>  "Istanbul"
                    ],
                    [
                        "id" =>  2205,
                        "name" =>  "\u0130zmir"
                    ],
                    [
                        "id" =>  2227,
                        "name" =>  "Kahramanmara\u015f"
                    ],
                    [
                        "id" =>  2223,
                        "name" =>  "Karab\u00fck"
                    ],
                    [
                        "id" =>  2184,
                        "name" =>  "Karaman"
                    ],
                    [
                        "id" =>  2208,
                        "name" =>  "Kars"
                    ],
                    [
                        "id" =>  2197,
                        "name" =>  "Kastamonu"
                    ],
                    [
                        "id" =>  2200,
                        "name" =>  "Kayseri"
                    ],
                    [
                        "id" =>  2154,
                        "name" =>  "Kilis"
                    ],
                    [
                        "id" =>  2178,
                        "name" =>  "K\u0131r\u0131kkale"
                    ],
                    [
                        "id" =>  2176,
                        "name" =>  "K\u0131rklareli"
                    ],
                    [
                        "id" =>  2180,
                        "name" =>  "K\u0131r\u015fehir"
                    ],
                    [
                        "id" =>  2195,
                        "name" =>  "Kocaeli"
                    ],
                    [
                        "id" =>  2171,
                        "name" =>  "Konya"
                    ],
                    [
                        "id" =>  2149,
                        "name" =>  "K\u00fctahya"
                    ],
                    [
                        "id" =>  2158,
                        "name" =>  "Malatya"
                    ],
                    [
                        "id" =>  2198,
                        "name" =>  "Manisa"
                    ],
                    [
                        "id" =>  2224,
                        "name" =>  "Mardin"
                    ],
                    [
                        "id" =>  2156,
                        "name" =>  "Mersin"
                    ],
                    [
                        "id" =>  2182,
                        "name" =>  "Mu\u011fla"
                    ],
                    [
                        "id" =>  2162,
                        "name" =>  "Mu\u015f"
                    ],
                    [
                        "id" =>  2196,
                        "name" =>  "Nev\u015fehir"
                    ],
                    [
                        "id" =>  2189,
                        "name" =>  "Ni\u011fde"
                    ],
                    [
                        "id" =>  2174,
                        "name" =>  "Ordu"
                    ],
                    [
                        "id" =>  2214,
                        "name" =>  "Osmaniye"
                    ],
                    [
                        "id" =>  2219,
                        "name" =>  "Rize"
                    ],
                    [
                        "id" =>  2150,
                        "name" =>  "Sakarya"
                    ],
                    [
                        "id" =>  2220,
                        "name" =>  "Samsun"
                    ],
                    [
                        "id" =>  2183,
                        "name" =>  "\u015eanl\u0131urfa"
                    ],
                    [
                        "id" =>  2207,
                        "name" =>  "Siirt"
                    ],
                    [
                        "id" =>  4854,
                        "name" =>  "Sinop"
                    ],
                    [
                        "id" =>  2181,
                        "name" =>  "Sivas"
                    ],
                    [
                        "id" =>  2225,
                        "name" =>  "\u015e\u0131rnak"
                    ],
                    [
                        "id" =>  2167,
                        "name" =>  "Tekirda\u011f"
                    ],
                    [
                        "id" =>  2199,
                        "name" =>  "Tokat"
                    ],
                    [
                        "id" =>  2206,
                        "name" =>  "Trabzon"
                    ],
                    [
                        "id" =>  2192,
                        "name" =>  "Tunceli"
                    ],
                    [
                        "id" =>  2201,
                        "name" =>  "U\u015fak"
                    ],
                    [
                        "id" =>  2152,
                        "name" =>  "Van"
                    ],
                    [
                        "id" =>  2218,
                        "name" =>  "Yalova"
                    ],
                    [
                        "id" =>  2188,
                        "name" =>  "Yozgat"
                    ],
                    [
                        "id" =>  2213,
                        "name" =>  "Zonguldak"
                    ]
                ]
            ],
            [
                "name" =>  "Turkmenistan",
                "numeric_code" =>  "795",
                "alpha_2" =>  "TM",
                "alpha_3" =>  "TKM",
                "phone_code" =>  "993",
                "currency" =>  "TMT",
                "currency_name" =>  "Turkmenistan manat",
                "currency_symbol" =>  "T",
                "emoji" =>  "\ud83c\uddf9\ud83c\uddf2",
                "states" =>  [
                    [
                        "id" =>  3374,
                        "name" =>  "Ahal Region"
                    ],
                    [
                        "id" =>  3371,
                        "name" =>  "Ashgabat"
                    ],
                    [
                        "id" =>  3372,
                        "name" =>  "Balkan Region"
                    ],
                    [
                        "id" =>  3373,
                        "name" =>  "Da\u015foguz Region"
                    ],
                    [
                        "id" =>  3370,
                        "name" =>  "Lebap Region"
                    ],
                    [
                        "id" =>  3369,
                        "name" =>  "Mary Region"
                    ]
                ]
            ],
            [
                "name" =>  "Turks And Caicos Islands",
                "numeric_code" =>  "796",
                "alpha_2" =>  "TC",
                "alpha_3" =>  "TCA",
                "phone_code" =>  "+1-649",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf9\ud83c\udde8",
                "states" =>  []
            ],
            [
                "name" =>  "Tuvalu",
                "numeric_code" =>  "798",
                "alpha_2" =>  "TV",
                "alpha_3" =>  "TUV",
                "phone_code" =>  "688",
                "currency" =>  "AUD",
                "currency_name" =>  "Australian dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddf9\ud83c\uddfb",
                "states" =>  [
                    [
                        "id" =>  3951,
                        "name" =>  "Funafuti"
                    ],
                    [
                        "id" =>  3947,
                        "name" =>  "Nanumanga"
                    ],
                    [
                        "id" =>  3949,
                        "name" =>  "Nanumea"
                    ],
                    [
                        "id" =>  3946,
                        "name" =>  "Niutao Island Council"
                    ],
                    [
                        "id" =>  3948,
                        "name" =>  "Nui"
                    ],
                    [
                        "id" =>  3952,
                        "name" =>  "Nukufetau"
                    ],
                    [
                        "id" =>  3953,
                        "name" =>  "Nukulaelae"
                    ],
                    [
                        "id" =>  3950,
                        "name" =>  "Vaitupu"
                    ]
                ]
            ],
            [
                "name" =>  "Uganda",
                "numeric_code" =>  "800",
                "alpha_2" =>  "UG",
                "alpha_3" =>  "UGA",
                "phone_code" =>  "256",
                "currency" =>  "UGX",
                "currency_name" =>  "Ugandan shilling",
                "currency_symbol" =>  "USh",
                "emoji" =>  "\ud83c\uddfa\ud83c\uddec",
                "states" =>  [
                    [
                        "id" =>  329,
                        "name" =>  "Abim District"
                    ],
                    [
                        "id" =>  361,
                        "name" =>  "Adjumani District"
                    ],
                    [
                        "id" =>  392,
                        "name" =>  "Agago District"
                    ],
                    [
                        "id" =>  344,
                        "name" =>  "Alebtong District"
                    ],
                    [
                        "id" =>  416,
                        "name" =>  "Amolatar District"
                    ],
                    [
                        "id" =>  353,
                        "name" =>  "Amudat District"
                    ],
                    [
                        "id" =>  352,
                        "name" =>  "Amuria District"
                    ],
                    [
                        "id" =>  335,
                        "name" =>  "Amuru District"
                    ],
                    [
                        "id" =>  328,
                        "name" =>  "Apac District"
                    ],
                    [
                        "id" =>  447,
                        "name" =>  "Arua District"
                    ],
                    [
                        "id" =>  441,
                        "name" =>  "Budaka District"
                    ],
                    [
                        "id" =>  349,
                        "name" =>  "Bududa District"
                    ],
                    [
                        "id" =>  387,
                        "name" =>  "Bugiri District"
                    ],
                    [
                        "id" =>  391,
                        "name" =>  "Buhweju District"
                    ],
                    [
                        "id" =>  377,
                        "name" =>  "Buikwe District"
                    ],
                    [
                        "id" =>  343,
                        "name" =>  "Bukedea District"
                    ],
                    [
                        "id" =>  375,
                        "name" =>  "Bukomansimbi District"
                    ],
                    [
                        "id" =>  385,
                        "name" =>  "Bukwo District"
                    ],
                    [
                        "id" =>  428,
                        "name" =>  "Bulambuli District"
                    ],
                    [
                        "id" =>  389,
                        "name" =>  "Buliisa District"
                    ],
                    [
                        "id" =>  419,
                        "name" =>  "Bundibugyo District"
                    ],
                    [
                        "id" =>  381,
                        "name" =>  "Bunyangabu District"
                    ],
                    [
                        "id" =>  386,
                        "name" =>  "Bushenyi District"
                    ],
                    [
                        "id" =>  431,
                        "name" =>  "Busia District"
                    ],
                    [
                        "id" =>  365,
                        "name" =>  "Butaleja District"
                    ],
                    [
                        "id" =>  384,
                        "name" =>  "Butambala District"
                    ],
                    [
                        "id" =>  388,
                        "name" =>  "Butebo District"
                    ],
                    [
                        "id" =>  414,
                        "name" =>  "Buvuma District"
                    ],
                    [
                        "id" =>  380,
                        "name" =>  "Buyende District"
                    ],
                    [
                        "id" =>  396,
                        "name" =>  "Central Region"
                    ],
                    [
                        "id" =>  341,
                        "name" =>  "Dokolo District"
                    ],
                    [
                        "id" =>  372,
                        "name" =>  "Eastern Region"
                    ],
                    [
                        "id" =>  366,
                        "name" =>  "Gomba District"
                    ],
                    [
                        "id" =>  413,
                        "name" =>  "Gulu District"
                    ],
                    [
                        "id" =>  339,
                        "name" =>  "Ibanda District"
                    ],
                    [
                        "id" =>  340,
                        "name" =>  "Iganga District"
                    ],
                    [
                        "id" =>  383,
                        "name" =>  "Isingiro District"
                    ],
                    [
                        "id" =>  367,
                        "name" =>  "Jinja District"
                    ],
                    [
                        "id" =>  434,
                        "name" =>  "Kaabong District"
                    ],
                    [
                        "id" =>  426,
                        "name" =>  "Kabale District"
                    ],
                    [
                        "id" =>  326,
                        "name" =>  "Kabarole District"
                    ],
                    [
                        "id" =>  336,
                        "name" =>  "Kaberamaido District"
                    ],
                    [
                        "id" =>  403,
                        "name" =>  "Kagadi District"
                    ],
                    [
                        "id" =>  399,
                        "name" =>  "Kakumiro District"
                    ],
                    [
                        "id" =>  405,
                        "name" =>  "Kalangala District"
                    ],
                    [
                        "id" =>  398,
                        "name" =>  "Kaliro District"
                    ],
                    [
                        "id" =>  394,
                        "name" =>  "Kalungu District"
                    ],
                    [
                        "id" =>  382,
                        "name" =>  "Kampala District"
                    ],
                    [
                        "id" =>  334,
                        "name" =>  "Kamuli District"
                    ],
                    [
                        "id" =>  360,
                        "name" =>  "Kamwenge District"
                    ],
                    [
                        "id" =>  373,
                        "name" =>  "Kanungu District"
                    ],
                    [
                        "id" =>  432,
                        "name" =>  "Kapchorwa District"
                    ],
                    [
                        "id" =>  440,
                        "name" =>  "Kasese District"
                    ],
                    [
                        "id" =>  420,
                        "name" =>  "Katakwi District"
                    ],
                    [
                        "id" =>  368,
                        "name" =>  "Kayunga District"
                    ],
                    [
                        "id" =>  436,
                        "name" =>  "Kibaale District"
                    ],
                    [
                        "id" =>  347,
                        "name" =>  "Kiboga District"
                    ],
                    [
                        "id" =>  338,
                        "name" =>  "Kibuku District"
                    ],
                    [
                        "id" =>  355,
                        "name" =>  "Kiruhura District"
                    ],
                    [
                        "id" =>  346,
                        "name" =>  "Kiryandongo District"
                    ],
                    [
                        "id" =>  409,
                        "name" =>  "Kisoro District"
                    ],
                    [
                        "id" =>  348,
                        "name" =>  "Kitgum District"
                    ],
                    [
                        "id" =>  345,
                        "name" =>  "Koboko District"
                    ],
                    [
                        "id" =>  401,
                        "name" =>  "Kole District"
                    ],
                    [
                        "id" =>  443,
                        "name" =>  "Kotido District"
                    ],
                    [
                        "id" =>  425,
                        "name" =>  "Kumi District"
                    ],
                    [
                        "id" =>  369,
                        "name" =>  "Kween District"
                    ],
                    [
                        "id" =>  325,
                        "name" =>  "Kyankwanzi District"
                    ],
                    [
                        "id" =>  437,
                        "name" =>  "Kyegegwa District"
                    ],
                    [
                        "id" =>  402,
                        "name" =>  "Kyenjojo District"
                    ],
                    [
                        "id" =>  448,
                        "name" =>  "Kyotera District"
                    ],
                    [
                        "id" =>  411,
                        "name" =>  "Lamwo District"
                    ],
                    [
                        "id" =>  342,
                        "name" =>  "Lira District"
                    ],
                    [
                        "id" =>  445,
                        "name" =>  "Luuka District"
                    ],
                    [
                        "id" =>  433,
                        "name" =>  "Luwero District"
                    ],
                    [
                        "id" =>  417,
                        "name" =>  "Lwengo District"
                    ],
                    [
                        "id" =>  376,
                        "name" =>  "Lyantonde District"
                    ],
                    [
                        "id" =>  438,
                        "name" =>  "Manafwa District"
                    ],
                    [
                        "id" =>  421,
                        "name" =>  "Maracha District"
                    ],
                    [
                        "id" =>  356,
                        "name" =>  "Masaka District"
                    ],
                    [
                        "id" =>  354,
                        "name" =>  "Masindi District"
                    ],
                    [
                        "id" =>  418,
                        "name" =>  "Mayuge District"
                    ],
                    [
                        "id" =>  350,
                        "name" =>  "Mbale District"
                    ],
                    [
                        "id" =>  415,
                        "name" =>  "Mbarara District"
                    ],
                    [
                        "id" =>  435,
                        "name" =>  "Mitooma District"
                    ],
                    [
                        "id" =>  364,
                        "name" =>  "Mityana District"
                    ],
                    [
                        "id" =>  395,
                        "name" =>  "Moroto District"
                    ],
                    [
                        "id" =>  363,
                        "name" =>  "Moyo District"
                    ],
                    [
                        "id" =>  327,
                        "name" =>  "Mpigi District"
                    ],
                    [
                        "id" =>  371,
                        "name" =>  "Mubende District"
                    ],
                    [
                        "id" =>  410,
                        "name" =>  "Mukono District"
                    ],
                    [
                        "id" =>  393,
                        "name" =>  "Nakapiripirit District"
                    ],
                    [
                        "id" =>  423,
                        "name" =>  "Nakaseke District"
                    ],
                    [
                        "id" =>  406,
                        "name" =>  "Nakasongola District"
                    ],
                    [
                        "id" =>  351,
                        "name" =>  "Namayingo District"
                    ],
                    [
                        "id" =>  400,
                        "name" =>  "Namisindwa District"
                    ],
                    [
                        "id" =>  337,
                        "name" =>  "Namutumba District"
                    ],
                    [
                        "id" =>  430,
                        "name" =>  "Napak District"
                    ],
                    [
                        "id" =>  446,
                        "name" =>  "Nebbi District"
                    ],
                    [
                        "id" =>  424,
                        "name" =>  "Ngora District"
                    ],
                    [
                        "id" =>  332,
                        "name" =>  "Northern Region"
                    ],
                    [
                        "id" =>  422,
                        "name" =>  "Ntoroko District"
                    ],
                    [
                        "id" =>  404,
                        "name" =>  "Ntungamo District"
                    ],
                    [
                        "id" =>  378,
                        "name" =>  "Nwoya District"
                    ],
                    [
                        "id" =>  374,
                        "name" =>  "Omoro District"
                    ],
                    [
                        "id" =>  390,
                        "name" =>  "Otuke District"
                    ],
                    [
                        "id" =>  397,
                        "name" =>  "Oyam District"
                    ],
                    [
                        "id" =>  408,
                        "name" =>  "Pader District"
                    ],
                    [
                        "id" =>  357,
                        "name" =>  "Pakwach District"
                    ],
                    [
                        "id" =>  412,
                        "name" =>  "Pallisa District"
                    ],
                    [
                        "id" =>  439,
                        "name" =>  "Rakai District"
                    ],
                    [
                        "id" =>  358,
                        "name" =>  "Rubanda District"
                    ],
                    [
                        "id" =>  442,
                        "name" =>  "Rubirizi District"
                    ],
                    [
                        "id" =>  331,
                        "name" =>  "Rukiga District"
                    ],
                    [
                        "id" =>  324,
                        "name" =>  "Rukungiri District"
                    ],
                    [
                        "id" =>  427,
                        "name" =>  "Sembabule District"
                    ],
                    [
                        "id" =>  333,
                        "name" =>  "Serere District"
                    ],
                    [
                        "id" =>  407,
                        "name" =>  "Sheema District"
                    ],
                    [
                        "id" =>  429,
                        "name" =>  "Sironko District"
                    ],
                    [
                        "id" =>  444,
                        "name" =>  "Soroti District"
                    ],
                    [
                        "id" =>  359,
                        "name" =>  "Tororo District"
                    ],
                    [
                        "id" =>  362,
                        "name" =>  "Wakiso District"
                    ],
                    [
                        "id" =>  370,
                        "name" =>  "Western Region"
                    ],
                    [
                        "id" =>  330,
                        "name" =>  "Yumbe District"
                    ],
                    [
                        "id" =>  379,
                        "name" =>  "Zombo District"
                    ]
                ]
            ],
            [
                "name" =>  "Ukraine",
                "numeric_code" =>  "804",
                "alpha_2" =>  "UA",
                "alpha_3" =>  "UKR",
                "phone_code" =>  "380",
                "currency" =>  "UAH",
                "currency_name" =>  "Ukrainian hryvnia",
                "currency_symbol" =>  "\u20b4",
                "emoji" =>  "\ud83c\uddfa\ud83c\udde6",
                "states" =>  [
                    [
                        "id" =>  4689,
                        "name" =>  "Autonomous Republic of Crimea"
                    ],
                    [
                        "id" =>  4680,
                        "name" =>  "Cherkaska oblast"
                    ],
                    [
                        "id" =>  4692,
                        "name" =>  "Chernihivska oblast"
                    ],
                    [
                        "id" =>  4678,
                        "name" =>  "Chernivetska oblast"
                    ],
                    [
                        "id" =>  4675,
                        "name" =>  "Dnipropetrovska oblast"
                    ],
                    [
                        "id" =>  4691,
                        "name" =>  "Donetska oblast"
                    ],
                    [
                        "id" =>  4682,
                        "name" =>  "Ivano-Frankivska oblast"
                    ],
                    [
                        "id" =>  4686,
                        "name" =>  "Kharkivska oblast"
                    ],
                    [
                        "id" =>  4684,
                        "name" =>  "Khersonska oblast"
                    ],
                    [
                        "id" =>  4681,
                        "name" =>  "Khmelnytska oblast"
                    ],
                    [
                        "id" =>  4677,
                        "name" =>  "Kirovohradska oblast"
                    ],
                    [
                        "id" =>  4676,
                        "name" =>  "Kyiv"
                    ],
                    [
                        "id" =>  4671,
                        "name" =>  "Kyivska oblast"
                    ],
                    [
                        "id" =>  4673,
                        "name" =>  "Luhanska oblast"
                    ],
                    [
                        "id" =>  4672,
                        "name" =>  "Lvivska oblast"
                    ],
                    [
                        "id" =>  4679,
                        "name" =>  "Mykolaivska oblast"
                    ],
                    [
                        "id" =>  4688,
                        "name" =>  "Odeska oblast"
                    ],
                    [
                        "id" =>  5071,
                        "name" =>  "Poltavska oblast"
                    ],
                    [
                        "id" =>  4683,
                        "name" =>  "Rivnenska oblast"
                    ],
                    [
                        "id" =>  4685,
                        "name" =>  "Sumska oblast"
                    ],
                    [
                        "id" =>  4674,
                        "name" =>  "Ternopilska oblast"
                    ],
                    [
                        "id" =>  4669,
                        "name" =>  "Vinnytska oblast"
                    ],
                    [
                        "id" =>  4690,
                        "name" =>  "Volynska oblast"
                    ],
                    [
                        "id" =>  4670,
                        "name" =>  "Zakarpatska Oblast"
                    ],
                    [
                        "id" =>  4687,
                        "name" =>  "Zaporizka oblast"
                    ],
                    [
                        "id" =>  4668,
                        "name" =>  "Zhytomyrska oblast"
                    ]
                ]
            ],
            [
                "name" =>  "United Arab Emirates",
                "numeric_code" =>  "784",
                "alpha_2" =>  "AE",
                "alpha_3" =>  "ARE",
                "phone_code" =>  "971",
                "currency" =>  "AED",
                "currency_name" =>  "United Arab Emirates dirham",
                "currency_symbol" =>  "\u0625.\u062f",
                "emoji" =>  "\ud83c\udde6\ud83c\uddea",
                "states" =>  [
                    [
                        "id" =>  3396,
                        "name" =>  "Abu Dhabi Emirate"
                    ],
                    [
                        "id" =>  3395,
                        "name" =>  "Ajman Emirate"
                    ],
                    [
                        "id" =>  3391,
                        "name" =>  "Dubai"
                    ],
                    [
                        "id" =>  3393,
                        "name" =>  "Fujairah"
                    ],
                    [
                        "id" =>  3394,
                        "name" =>  "Ras al-Khaimah"
                    ],
                    [
                        "id" =>  3390,
                        "name" =>  "Sharjah Emirate"
                    ],
                    [
                        "id" =>  3392,
                        "name" =>  "Umm al-Quwain"
                    ]
                ]
            ],
            [
                "name" =>  "United Kingdom",
                "numeric_code" =>  "826",
                "alpha_2" =>  "GB",
                "alpha_3" =>  "GBR",
                "phone_code" =>  "44",
                "currency" =>  "GBP",
                "currency_name" =>  "British pound",
                "currency_symbol" =>  "\u00a3",
                "emoji" =>  "\ud83c\uddec\ud83c\udde7",
                "states" =>  [
                    [
                        "id" =>  2463,
                        "name" =>  "Aberdeen"
                    ],
                    [
                        "id" =>  2401,
                        "name" =>  "Aberdeenshire"
                    ],
                    [
                        "id" =>  2387,
                        "name" =>  "Angus"
                    ],
                    [
                        "id" =>  2533,
                        "name" =>  "Antrim"
                    ],
                    [
                        "id" =>  2412,
                        "name" =>  "Antrim and Newtownabbey"
                    ],
                    [
                        "id" =>  2498,
                        "name" =>  "Ards"
                    ],
                    [
                        "id" =>  2523,
                        "name" =>  "Ards and North Down"
                    ],
                    [
                        "id" =>  2392,
                        "name" =>  "Argyll and Bute"
                    ],
                    [
                        "id" =>  2331,
                        "name" =>  "Armagh City and District Council"
                    ],
                    [
                        "id" =>  2324,
                        "name" =>  "Armagh, Banbridge and Craigavon"
                    ],
                    [
                        "id" =>  2378,
                        "name" =>  "Ascension Island"
                    ],
                    [
                        "id" =>  2363,
                        "name" =>  "Ballymena Borough"
                    ],
                    [
                        "id" =>  2361,
                        "name" =>  "Ballymoney"
                    ],
                    [
                        "id" =>  2315,
                        "name" =>  "Banbridge"
                    ],
                    [
                        "id" =>  2499,
                        "name" =>  "Barnsley"
                    ],
                    [
                        "id" =>  2339,
                        "name" =>  "Bath and North East Somerset"
                    ],
                    [
                        "id" =>  2507,
                        "name" =>  "Bedford"
                    ],
                    [
                        "id" =>  2311,
                        "name" =>  "Belfast district"
                    ],
                    [
                        "id" =>  2425,
                        "name" =>  "Birmingham"
                    ],
                    [
                        "id" =>  2329,
                        "name" =>  "Blackburn with Darwen"
                    ],
                    [
                        "id" =>  2451,
                        "name" =>  "Blackpool"
                    ],
                    [
                        "id" =>  2530,
                        "name" =>  "Blaenau Gwent County Borough"
                    ],
                    [
                        "id" =>  2504,
                        "name" =>  "Bolton"
                    ],
                    [
                        "id" =>  2342,
                        "name" =>  "Bournemouth"
                    ],
                    [
                        "id" =>  2470,
                        "name" =>  "Bracknell Forest"
                    ],
                    [
                        "id" =>  2529,
                        "name" =>  "Bradford"
                    ],
                    [
                        "id" =>  2452,
                        "name" =>  "Bridgend County Borough"
                    ],
                    [
                        "id" =>  2395,
                        "name" =>  "Brighton and Hove"
                    ],
                    [
                        "id" =>  2405,
                        "name" =>  "Buckinghamshire"
                    ],
                    [
                        "id" =>  2459,
                        "name" =>  "Bury"
                    ],
                    [
                        "id" =>  2298,
                        "name" =>  "Caerphilly County Borough"
                    ],
                    [
                        "id" =>  2517,
                        "name" =>  "Calderdale"
                    ],
                    [
                        "id" =>  2423,
                        "name" =>  "Cambridgeshire"
                    ],
                    [
                        "id" =>  2484,
                        "name" =>  "Carmarthenshire"
                    ],
                    [
                        "id" =>  2439,
                        "name" =>  "Carrickfergus Borough Council"
                    ],
                    [
                        "id" =>  2525,
                        "name" =>  "Castlereagh"
                    ],
                    [
                        "id" =>  2316,
                        "name" =>  "Causeway Coast and Glens"
                    ],
                    [
                        "id" =>  2303,
                        "name" =>  "Central Bedfordshire"
                    ],
                    [
                        "id" =>  2509,
                        "name" =>  "Ceredigion"
                    ],
                    [
                        "id" =>  2444,
                        "name" =>  "Cheshire East"
                    ],
                    [
                        "id" =>  2442,
                        "name" =>  "Cheshire West and Chester"
                    ],
                    [
                        "id" =>  2528,
                        "name" =>  "City and County of Cardiff"
                    ],
                    [
                        "id" =>  2433,
                        "name" =>  "City and County of Swansea"
                    ],
                    [
                        "id" =>  2413,
                        "name" =>  "City of Bristol"
                    ],
                    [
                        "id" =>  2485,
                        "name" =>  "City of Derby"
                    ],
                    [
                        "id" =>  2475,
                        "name" =>  "City of Kingston upon Hull"
                    ],
                    [
                        "id" =>  2318,
                        "name" =>  "City of Leicester"
                    ],
                    [
                        "id" =>  2424,
                        "name" =>  "City of London"
                    ],
                    [
                        "id" =>  2359,
                        "name" =>  "City of Nottingham"
                    ],
                    [
                        "id" =>  2297,
                        "name" =>  "City of Peterborough"
                    ],
                    [
                        "id" =>  2514,
                        "name" =>  "City of Plymouth"
                    ],
                    [
                        "id" =>  2305,
                        "name" =>  "City of Portsmouth"
                    ],
                    [
                        "id" =>  2294,
                        "name" =>  "City of Southampton"
                    ],
                    [
                        "id" =>  2506,
                        "name" =>  "City of Stoke-on-Trent"
                    ],
                    [
                        "id" =>  2372,
                        "name" =>  "City of Sunderland"
                    ],
                    [
                        "id" =>  2357,
                        "name" =>  "City of Westminster"
                    ],
                    [
                        "id" =>  2489,
                        "name" =>  "City of Wolverhampton"
                    ],
                    [
                        "id" =>  2426,
                        "name" =>  "City of York"
                    ],
                    [
                        "id" =>  2450,
                        "name" =>  "Clackmannanshire"
                    ],
                    [
                        "id" =>  2461,
                        "name" =>  "Coleraine Borough Council"
                    ],
                    [
                        "id" =>  2352,
                        "name" =>  "Conwy County Borough"
                    ],
                    [
                        "id" =>  2445,
                        "name" =>  "Cookstown District Council"
                    ],
                    [
                        "id" =>  2312,
                        "name" =>  "Cornwall"
                    ],
                    [
                        "id" =>  2406,
                        "name" =>  "County Durham"
                    ],
                    [
                        "id" =>  2438,
                        "name" =>  "Coventry"
                    ],
                    [
                        "id" =>  2449,
                        "name" =>  "Craigavon Borough Council"
                    ],
                    [
                        "id" =>  2334,
                        "name" =>  "Cumbria"
                    ],
                    [
                        "id" =>  2389,
                        "name" =>  "Darlington"
                    ],
                    [
                        "id" =>  2497,
                        "name" =>  "Denbighshire"
                    ],
                    [
                        "id" =>  2403,
                        "name" =>  "Derbyshire"
                    ],
                    [
                        "id" =>  2446,
                        "name" =>  "Derry City and Strabane"
                    ],
                    [
                        "id" =>  2417,
                        "name" =>  "Derry City Council"
                    ],
                    [
                        "id" =>  2491,
                        "name" =>  "Devon"
                    ],
                    [
                        "id" =>  2364,
                        "name" =>  "Doncaster"
                    ],
                    [
                        "id" =>  2345,
                        "name" =>  "Dorset"
                    ],
                    [
                        "id" =>  2304,
                        "name" =>  "Down District Council"
                    ],
                    [
                        "id" =>  2457,
                        "name" =>  "Dudley"
                    ],
                    [
                        "id" =>  2415,
                        "name" =>  "Dumfries and Galloway"
                    ],
                    [
                        "id" =>  2511,
                        "name" =>  "Dundee"
                    ],
                    [
                        "id" =>  2508,
                        "name" =>  "Dungannon and South Tyrone Borough Council"
                    ],
                    [
                        "id" =>  2374,
                        "name" =>  "East Ayrshire"
                    ],
                    [
                        "id" =>  2454,
                        "name" =>  "East Dunbartonshire"
                    ],
                    [
                        "id" =>  2462,
                        "name" =>  "East Lothian"
                    ],
                    [
                        "id" =>  2333,
                        "name" =>  "East Renfrewshire"
                    ],
                    [
                        "id" =>  2370,
                        "name" =>  "East Riding of Yorkshire"
                    ],
                    [
                        "id" =>  2414,
                        "name" =>  "East Sussex"
                    ],
                    [
                        "id" =>  2428,
                        "name" =>  "Edinburgh"
                    ],
                    [
                        "id" =>  2336,
                        "name" =>  "England"
                    ],
                    [
                        "id" =>  2410,
                        "name" =>  "Essex"
                    ],
                    [
                        "id" =>  2344,
                        "name" =>  "Falkirk"
                    ],
                    [
                        "id" =>  2366,
                        "name" =>  "Fermanagh and Omagh"
                    ],
                    [
                        "id" =>  2531,
                        "name" =>  "Fermanagh District Council"
                    ],
                    [
                        "id" =>  2479,
                        "name" =>  "Fife"
                    ],
                    [
                        "id" =>  2437,
                        "name" =>  "Flintshire"
                    ],
                    [
                        "id" =>  2431,
                        "name" =>  "Gateshead"
                    ],
                    [
                        "id" =>  2404,
                        "name" =>  "Glasgow"
                    ],
                    [
                        "id" =>  2373,
                        "name" =>  "Gloucestershire"
                    ],
                    [
                        "id" =>  2379,
                        "name" =>  "Gwynedd"
                    ],
                    [
                        "id" =>  2466,
                        "name" =>  "Halton"
                    ],
                    [
                        "id" =>  2435,
                        "name" =>  "Hampshire"
                    ],
                    [
                        "id" =>  2309,
                        "name" =>  "Hartlepool"
                    ],
                    [
                        "id" =>  2500,
                        "name" =>  "Herefordshire"
                    ],
                    [
                        "id" =>  2369,
                        "name" =>  "Hertfordshire"
                    ],
                    [
                        "id" =>  2383,
                        "name" =>  "Highland"
                    ],
                    [
                        "id" =>  2388,
                        "name" =>  "Inverclyde"
                    ],
                    [
                        "id" =>  2289,
                        "name" =>  "Isle of Wight"
                    ],
                    [
                        "id" =>  2343,
                        "name" =>  "Isles of Scilly"
                    ],
                    [
                        "id" =>  2464,
                        "name" =>  "Kent"
                    ],
                    [
                        "id" =>  2371,
                        "name" =>  "Kirklees"
                    ],
                    [
                        "id" =>  2330,
                        "name" =>  "Knowsley"
                    ],
                    [
                        "id" =>  2495,
                        "name" =>  "Lancashire"
                    ],
                    [
                        "id" =>  2515,
                        "name" =>  "Larne Borough Council"
                    ],
                    [
                        "id" =>  2503,
                        "name" =>  "Leeds"
                    ],
                    [
                        "id" =>  2516,
                        "name" =>  "Leicestershire"
                    ],
                    [
                        "id" =>  2382,
                        "name" =>  "Limavady Borough Council"
                    ],
                    [
                        "id" =>  2355,
                        "name" =>  "Lincolnshire"
                    ],
                    [
                        "id" =>  2460,
                        "name" =>  "Lisburn and Castlereagh"
                    ],
                    [
                        "id" =>  2494,
                        "name" =>  "Lisburn City Council"
                    ],
                    [
                        "id" =>  2340,
                        "name" =>  "Liverpool"
                    ],
                    [
                        "id" =>  2356,
                        "name" =>  "London Borough of Barking and Dagenham"
                    ],
                    [
                        "id" =>  2520,
                        "name" =>  "London Borough of Barnet"
                    ],
                    [
                        "id" =>  2307,
                        "name" =>  "London Borough of Bexley"
                    ],
                    [
                        "id" =>  2291,
                        "name" =>  "London Borough of Brent"
                    ],
                    [
                        "id" =>  2490,
                        "name" =>  "London Borough of Bromley"
                    ],
                    [
                        "id" =>  2349,
                        "name" =>  "London Borough of Camden"
                    ],
                    [
                        "id" =>  2512,
                        "name" =>  "London Borough of Croydon"
                    ],
                    [
                        "id" =>  2532,
                        "name" =>  "London Borough of Ealing"
                    ],
                    [
                        "id" =>  2476,
                        "name" =>  "London Borough of Enfield"
                    ],
                    [
                        "id" =>  2411,
                        "name" =>  "London Borough of Hackney"
                    ],
                    [
                        "id" =>  2448,
                        "name" =>  "London Borough of Hammersmith and Fulham"
                    ],
                    [
                        "id" =>  2306,
                        "name" =>  "London Borough of Haringey"
                    ],
                    [
                        "id" =>  2385,
                        "name" =>  "London Borough of Harrow"
                    ],
                    [
                        "id" =>  2347,
                        "name" =>  "London Borough of Havering"
                    ],
                    [
                        "id" =>  2376,
                        "name" =>  "London Borough of Hillingdon"
                    ],
                    [
                        "id" =>  2380,
                        "name" =>  "London Borough of Hounslow"
                    ],
                    [
                        "id" =>  2319,
                        "name" =>  "London Borough of Islington"
                    ],
                    [
                        "id" =>  2396,
                        "name" =>  "London Borough of Lambeth"
                    ],
                    [
                        "id" =>  2358,
                        "name" =>  "London Borough of Lewisham"
                    ],
                    [
                        "id" =>  2483,
                        "name" =>  "London Borough of Merton"
                    ],
                    [
                        "id" =>  2418,
                        "name" =>  "London Borough of Newham"
                    ],
                    [
                        "id" =>  2397,
                        "name" =>  "London Borough of Redbridge"
                    ],
                    [
                        "id" =>  2501,
                        "name" =>  "London Borough of Richmond upon Thames"
                    ],
                    [
                        "id" =>  2432,
                        "name" =>  "London Borough of Southwark"
                    ],
                    [
                        "id" =>  2313,
                        "name" =>  "London Borough of Sutton"
                    ],
                    [
                        "id" =>  2390,
                        "name" =>  "London Borough of Tower Hamlets"
                    ],
                    [
                        "id" =>  2326,
                        "name" =>  "London Borough of Waltham Forest"
                    ],
                    [
                        "id" =>  2434,
                        "name" =>  "London Borough of Wandsworth"
                    ],
                    [
                        "id" =>  2322,
                        "name" =>  "Magherafelt District Council"
                    ],
                    [
                        "id" =>  2398,
                        "name" =>  "Manchester"
                    ],
                    [
                        "id" =>  2381,
                        "name" =>  "Medway"
                    ],
                    [
                        "id" =>  2328,
                        "name" =>  "Merthyr Tydfil County Borough"
                    ],
                    [
                        "id" =>  2320,
                        "name" =>  "Metropolitan Borough of Wigan"
                    ],
                    [
                        "id" =>  2429,
                        "name" =>  "Mid and East Antrim"
                    ],
                    [
                        "id" =>  2399,
                        "name" =>  "Mid Ulster"
                    ],
                    [
                        "id" =>  2332,
                        "name" =>  "Middlesbrough"
                    ],
                    [
                        "id" =>  2519,
                        "name" =>  "Midlothian"
                    ],
                    [
                        "id" =>  2416,
                        "name" =>  "Milton Keynes"
                    ],
                    [
                        "id" =>  2402,
                        "name" =>  "Monmouthshire"
                    ],
                    [
                        "id" =>  2360,
                        "name" =>  "Moray"
                    ],
                    [
                        "id" =>  2348,
                        "name" =>  "Moyle District Council"
                    ],
                    [
                        "id" =>  2351,
                        "name" =>  "Neath Port Talbot County Borough"
                    ],
                    [
                        "id" =>  2458,
                        "name" =>  "Newcastle upon Tyne"
                    ],
                    [
                        "id" =>  2524,
                        "name" =>  "Newport"
                    ],
                    [
                        "id" =>  2350,
                        "name" =>  "Newry and Mourne District Council"
                    ],
                    [
                        "id" =>  2534,
                        "name" =>  "Newry, Mourne and Down"
                    ],
                    [
                        "id" =>  2317,
                        "name" =>  "Newtownabbey Borough Council"
                    ],
                    [
                        "id" =>  2473,
                        "name" =>  "Norfolk"
                    ],
                    [
                        "id" =>  2535,
                        "name" =>  "North Ayrshire"
                    ],
                    [
                        "id" =>  2513,
                        "name" =>  "North Down Borough Council"
                    ],
                    [
                        "id" =>  2384,
                        "name" =>  "North East Lincolnshire"
                    ],
                    [
                        "id" =>  2487,
                        "name" =>  "North Lanarkshire"
                    ],
                    [
                        "id" =>  2453,
                        "name" =>  "North Lincolnshire"
                    ],
                    [
                        "id" =>  2430,
                        "name" =>  "North Somerset"
                    ],
                    [
                        "id" =>  2521,
                        "name" =>  "North Tyneside"
                    ],
                    [
                        "id" =>  2522,
                        "name" =>  "North Yorkshire"
                    ],
                    [
                        "id" =>  2480,
                        "name" =>  "Northamptonshire"
                    ],
                    [
                        "id" =>  2337,
                        "name" =>  "Northern Ireland"
                    ],
                    [
                        "id" =>  2365,
                        "name" =>  "Northumberland"
                    ],
                    [
                        "id" =>  2456,
                        "name" =>  "Nottinghamshire"
                    ],
                    [
                        "id" =>  2477,
                        "name" =>  "Oldham"
                    ],
                    [
                        "id" =>  2314,
                        "name" =>  "Omagh District Council"
                    ],
                    [
                        "id" =>  2474,
                        "name" =>  "Orkney Islands"
                    ],
                    [
                        "id" =>  2353,
                        "name" =>  "Outer Hebrides"
                    ],
                    [
                        "id" =>  2321,
                        "name" =>  "Oxfordshire"
                    ],
                    [
                        "id" =>  2486,
                        "name" =>  "Pembrokeshire"
                    ],
                    [
                        "id" =>  2325,
                        "name" =>  "Perth and Kinross"
                    ],
                    [
                        "id" =>  2302,
                        "name" =>  "Poole"
                    ],
                    [
                        "id" =>  2441,
                        "name" =>  "Powys"
                    ],
                    [
                        "id" =>  2455,
                        "name" =>  "Reading"
                    ],
                    [
                        "id" =>  2527,
                        "name" =>  "Redcar and Cleveland"
                    ],
                    [
                        "id" =>  2443,
                        "name" =>  "Renfrewshire"
                    ],
                    [
                        "id" =>  2301,
                        "name" =>  "Rhondda Cynon Taf"
                    ],
                    [
                        "id" =>  2327,
                        "name" =>  "Rochdale"
                    ],
                    [
                        "id" =>  2308,
                        "name" =>  "Rotherham"
                    ],
                    [
                        "id" =>  2492,
                        "name" =>  "Royal Borough of Greenwich"
                    ],
                    [
                        "id" =>  2368,
                        "name" =>  "Royal Borough of Kensington and Chelsea"
                    ],
                    [
                        "id" =>  2481,
                        "name" =>  "Royal Borough of Kingston upon Thames"
                    ],
                    [
                        "id" =>  2472,
                        "name" =>  "Rutland"
                    ],
                    [
                        "id" =>  2502,
                        "name" =>  "Saint Helena"
                    ],
                    [
                        "id" =>  2493,
                        "name" =>  "Salford"
                    ],
                    [
                        "id" =>  2341,
                        "name" =>  "Sandwell"
                    ],
                    [
                        "id" =>  2335,
                        "name" =>  "Scotland"
                    ],
                    [
                        "id" =>  2346,
                        "name" =>  "Scottish Borders"
                    ],
                    [
                        "id" =>  2518,
                        "name" =>  "Sefton"
                    ],
                    [
                        "id" =>  2295,
                        "name" =>  "Sheffield"
                    ],
                    [
                        "id" =>  2300,
                        "name" =>  "Shetland Islands"
                    ],
                    [
                        "id" =>  2407,
                        "name" =>  "Shropshire"
                    ],
                    [
                        "id" =>  2427,
                        "name" =>  "Slough"
                    ],
                    [
                        "id" =>  2469,
                        "name" =>  "Solihull"
                    ],
                    [
                        "id" =>  2386,
                        "name" =>  "Somerset"
                    ],
                    [
                        "id" =>  2377,
                        "name" =>  "South Ayrshire"
                    ],
                    [
                        "id" =>  2400,
                        "name" =>  "South Gloucestershire"
                    ],
                    [
                        "id" =>  2362,
                        "name" =>  "South Lanarkshire"
                    ],
                    [
                        "id" =>  2409,
                        "name" =>  "South Tyneside"
                    ],
                    [
                        "id" =>  2323,
                        "name" =>  "Southend-on-Sea"
                    ],
                    [
                        "id" =>  2290,
                        "name" =>  "St Helens"
                    ],
                    [
                        "id" =>  2447,
                        "name" =>  "Staffordshire"
                    ],
                    [
                        "id" =>  2488,
                        "name" =>  "Stirling"
                    ],
                    [
                        "id" =>  2394,
                        "name" =>  "Stockport"
                    ],
                    [
                        "id" =>  2421,
                        "name" =>  "Stockton-on-Tees"
                    ],
                    [
                        "id" =>  2393,
                        "name" =>  "Strabane District Council"
                    ],
                    [
                        "id" =>  2467,
                        "name" =>  "Suffolk"
                    ],
                    [
                        "id" =>  2526,
                        "name" =>  "Surrey"
                    ],
                    [
                        "id" =>  2422,
                        "name" =>  "Swindon"
                    ],
                    [
                        "id" =>  2367,
                        "name" =>  "Tameside"
                    ],
                    [
                        "id" =>  2310,
                        "name" =>  "Telford and Wrekin"
                    ],
                    [
                        "id" =>  2468,
                        "name" =>  "Thurrock"
                    ],
                    [
                        "id" =>  2478,
                        "name" =>  "Torbay"
                    ],
                    [
                        "id" =>  2496,
                        "name" =>  "Torfaen"
                    ],
                    [
                        "id" =>  2293,
                        "name" =>  "Trafford"
                    ],
                    [
                        "id" =>  2375,
                        "name" =>  "United Kingdom"
                    ],
                    [
                        "id" =>  2299,
                        "name" =>  "Vale of Glamorgan"
                    ],
                    [
                        "id" =>  2465,
                        "name" =>  "Wakefield"
                    ],
                    [
                        "id" =>  2338,
                        "name" =>  "Wales"
                    ],
                    [
                        "id" =>  2292,
                        "name" =>  "Walsall"
                    ],
                    [
                        "id" =>  2420,
                        "name" =>  "Warrington"
                    ],
                    [
                        "id" =>  2505,
                        "name" =>  "Warwickshire"
                    ],
                    [
                        "id" =>  2471,
                        "name" =>  "West Berkshire"
                    ],
                    [
                        "id" =>  2440,
                        "name" =>  "West Dunbartonshire"
                    ],
                    [
                        "id" =>  2354,
                        "name" =>  "West Lothian"
                    ],
                    [
                        "id" =>  2296,
                        "name" =>  "West Sussex"
                    ],
                    [
                        "id" =>  2391,
                        "name" =>  "Wiltshire"
                    ],
                    [
                        "id" =>  2482,
                        "name" =>  "Windsor and Maidenhead"
                    ],
                    [
                        "id" =>  2408,
                        "name" =>  "Wirral"
                    ],
                    [
                        "id" =>  2419,
                        "name" =>  "Wokingham"
                    ],
                    [
                        "id" =>  2510,
                        "name" =>  "Worcestershire"
                    ],
                    [
                        "id" =>  2436,
                        "name" =>  "Wrexham County Borough"
                    ]
                ]
            ],
            [
                "name" =>  "United States",
                "numeric_code" =>  "840",
                "alpha_2" =>  "US",
                "alpha_3" =>  "USA",
                "phone_code" =>  "1",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddfa\ud83c\uddf8",
                "states" =>  [
                    [
                        "id" =>  1456,
                        "name" =>  "Alabama"
                    ],
                    [
                        "id" =>  1400,
                        "name" =>  "Alaska"
                    ],
                    [
                        "id" =>  1424,
                        "name" =>  "American Samoa"
                    ],
                    [
                        "id" =>  1434,
                        "name" =>  "Arizona"
                    ],
                    [
                        "id" =>  1444,
                        "name" =>  "Arkansas"
                    ],
                    [
                        "id" =>  1402,
                        "name" =>  "Baker Island"
                    ],
                    [
                        "id" =>  1416,
                        "name" =>  "California"
                    ],
                    [
                        "id" =>  1450,
                        "name" =>  "Colorado"
                    ],
                    [
                        "id" =>  1435,
                        "name" =>  "Connecticut"
                    ],
                    [
                        "id" =>  1399,
                        "name" =>  "Delaware"
                    ],
                    [
                        "id" =>  1437,
                        "name" =>  "District of Columbia"
                    ],
                    [
                        "id" =>  1436,
                        "name" =>  "Florida"
                    ],
                    [
                        "id" =>  1455,
                        "name" =>  "Georgia"
                    ],
                    [
                        "id" =>  1412,
                        "name" =>  "Guam"
                    ],
                    [
                        "id" =>  1411,
                        "name" =>  "Hawaii"
                    ],
                    [
                        "id" =>  1398,
                        "name" =>  "Howland Island"
                    ],
                    [
                        "id" =>  1460,
                        "name" =>  "Idaho"
                    ],
                    [
                        "id" =>  1425,
                        "name" =>  "Illinois"
                    ],
                    [
                        "id" =>  1440,
                        "name" =>  "Indiana"
                    ],
                    [
                        "id" =>  1459,
                        "name" =>  "Iowa"
                    ],
                    [
                        "id" =>  1410,
                        "name" =>  "Jarvis Island"
                    ],
                    [
                        "id" =>  1428,
                        "name" =>  "Johnston Atoll"
                    ],
                    [
                        "id" =>  1406,
                        "name" =>  "Kansas"
                    ],
                    [
                        "id" =>  1419,
                        "name" =>  "Kentucky"
                    ],
                    [
                        "id" =>  1403,
                        "name" =>  "Kingman Reef"
                    ],
                    [
                        "id" =>  1457,
                        "name" =>  "Louisiana"
                    ],
                    [
                        "id" =>  1453,
                        "name" =>  "Maine"
                    ],
                    [
                        "id" =>  1401,
                        "name" =>  "Maryland"
                    ],
                    [
                        "id" =>  1433,
                        "name" =>  "Massachusetts"
                    ],
                    [
                        "id" =>  1426,
                        "name" =>  "Michigan"
                    ],
                    [
                        "id" =>  1438,
                        "name" =>  "Midway Atoll"
                    ],
                    [
                        "id" =>  1420,
                        "name" =>  "Minnesota"
                    ],
                    [
                        "id" =>  1430,
                        "name" =>  "Mississippi"
                    ],
                    [
                        "id" =>  1451,
                        "name" =>  "Missouri"
                    ],
                    [
                        "id" =>  1446,
                        "name" =>  "Montana"
                    ],
                    [
                        "id" =>  1439,
                        "name" =>  "Navassa Island"
                    ],
                    [
                        "id" =>  1408,
                        "name" =>  "Nebraska"
                    ],
                    [
                        "id" =>  1458,
                        "name" =>  "Nevada"
                    ],
                    [
                        "id" =>  1404,
                        "name" =>  "New Hampshire"
                    ],
                    [
                        "id" =>  1417,
                        "name" =>  "New Jersey"
                    ],
                    [
                        "id" =>  1423,
                        "name" =>  "New Mexico"
                    ],
                    [
                        "id" =>  1452,
                        "name" =>  "New York"
                    ],
                    [
                        "id" =>  1447,
                        "name" =>  "North Carolina"
                    ],
                    [
                        "id" =>  1418,
                        "name" =>  "North Dakota"
                    ],
                    [
                        "id" =>  1431,
                        "name" =>  "Northern Mariana Islands"
                    ],
                    [
                        "id" =>  4851,
                        "name" =>  "Ohio"
                    ],
                    [
                        "id" =>  1421,
                        "name" =>  "Oklahoma"
                    ],
                    [
                        "id" =>  1415,
                        "name" =>  "Oregon"
                    ],
                    [
                        "id" =>  1448,
                        "name" =>  "Palmyra Atoll"
                    ],
                    [
                        "id" =>  1422,
                        "name" =>  "Pennsylvania"
                    ],
                    [
                        "id" =>  1449,
                        "name" =>  "Puerto Rico"
                    ],
                    [
                        "id" =>  1461,
                        "name" =>  "Rhode Island"
                    ],
                    [
                        "id" =>  1443,
                        "name" =>  "South Carolina"
                    ],
                    [
                        "id" =>  1445,
                        "name" =>  "South Dakota"
                    ],
                    [
                        "id" =>  1454,
                        "name" =>  "Tennessee"
                    ],
                    [
                        "id" =>  1407,
                        "name" =>  "Texas"
                    ],
                    [
                        "id" =>  1432,
                        "name" =>  "United States Minor Outlying Islands"
                    ],
                    [
                        "id" =>  1413,
                        "name" =>  "United States Virgin Islands"
                    ],
                    [
                        "id" =>  1414,
                        "name" =>  "Utah"
                    ],
                    [
                        "id" =>  1409,
                        "name" =>  "Vermont"
                    ],
                    [
                        "id" =>  1427,
                        "name" =>  "Virginia"
                    ],
                    [
                        "id" =>  1405,
                        "name" =>  "Wake Island"
                    ],
                    [
                        "id" =>  1462,
                        "name" =>  "Washington"
                    ],
                    [
                        "id" =>  1429,
                        "name" =>  "West Virginia"
                    ],
                    [
                        "id" =>  1441,
                        "name" =>  "Wisconsin"
                    ],
                    [
                        "id" =>  1442,
                        "name" =>  "Wyoming"
                    ]
                ]
            ],
            [
                "name" =>  "United States Minor Outlying Islands",
                "numeric_code" =>  "581",
                "alpha_2" =>  "UM",
                "alpha_3" =>  "UMI",
                "phone_code" =>  "1",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddfa\ud83c\uddf2",
                "states" =>  []
            ],
            [
                "name" =>  "Uruguay",
                "numeric_code" =>  "858",
                "alpha_2" =>  "UY",
                "alpha_3" =>  "URY",
                "phone_code" =>  "598",
                "currency" =>  "UYU",
                "currency_name" =>  "Uruguayan peso",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddfa\ud83c\uddfe",
                "states" =>  [
                    [
                        "id" =>  3205,
                        "name" =>  "Artigas Department"
                    ],
                    [
                        "id" =>  3213,
                        "name" =>  "Canelones Department"
                    ],
                    [
                        "id" =>  3211,
                        "name" =>  "Cerro Largo Department"
                    ],
                    [
                        "id" =>  3208,
                        "name" =>  "Colonia Department"
                    ],
                    [
                        "id" =>  3209,
                        "name" =>  "Durazno Department"
                    ],
                    [
                        "id" =>  3203,
                        "name" =>  "Flores Department"
                    ],
                    [
                        "id" =>  3217,
                        "name" =>  "Florida Department"
                    ],
                    [
                        "id" =>  3215,
                        "name" =>  "Lavalleja Department"
                    ],
                    [
                        "id" =>  3206,
                        "name" =>  "Maldonado Department"
                    ],
                    [
                        "id" =>  3218,
                        "name" =>  "Montevideo Department"
                    ],
                    [
                        "id" =>  3212,
                        "name" =>  "Paysand\u00fa Department"
                    ],
                    [
                        "id" =>  3210,
                        "name" =>  "R\u00edo Negro Department"
                    ],
                    [
                        "id" =>  3207,
                        "name" =>  "Rivera Department"
                    ],
                    [
                        "id" =>  3216,
                        "name" =>  "Rocha Department"
                    ],
                    [
                        "id" =>  3220,
                        "name" =>  "Salto Department"
                    ],
                    [
                        "id" =>  3204,
                        "name" =>  "San Jos\u00e9 Department"
                    ],
                    [
                        "id" =>  3219,
                        "name" =>  "Soriano Department"
                    ],
                    [
                        "id" =>  3221,
                        "name" =>  "Tacuaremb\u00f3 Department"
                    ],
                    [
                        "id" =>  3214,
                        "name" =>  "Treinta y Tres Department"
                    ]
                ]
            ],
            [
                "name" =>  "Uzbekistan",
                "numeric_code" =>  "860",
                "alpha_2" =>  "UZ",
                "alpha_3" =>  "UZB",
                "phone_code" =>  "998",
                "currency" =>  "UZS",
                "currency_name" =>  "Uzbekistani so\u02bbm",
                "currency_symbol" =>  "\u043b\u0432",
                "emoji" =>  "\ud83c\uddfa\ud83c\uddff",
                "states" =>  [
                    [
                        "id" =>  2540,
                        "name" =>  "Andijan Region"
                    ],
                    [
                        "id" =>  2541,
                        "name" =>  "Bukhara Region"
                    ],
                    [
                        "id" =>  2538,
                        "name" =>  "Fergana Region"
                    ],
                    [
                        "id" =>  2545,
                        "name" =>  "Jizzakh Region"
                    ],
                    [
                        "id" =>  2548,
                        "name" =>  "Karakalpakstan"
                    ],
                    [
                        "id" =>  2537,
                        "name" =>  "Namangan Region"
                    ],
                    [
                        "id" =>  2542,
                        "name" =>  "Navoiy Region"
                    ],
                    [
                        "id" =>  2543,
                        "name" =>  "Qashqadaryo Region"
                    ],
                    [
                        "id" =>  2544,
                        "name" =>  "Samarqand Region"
                    ],
                    [
                        "id" =>  2547,
                        "name" =>  "Sirdaryo Region"
                    ],
                    [
                        "id" =>  2546,
                        "name" =>  "Surxondaryo Region"
                    ],
                    [
                        "id" =>  2536,
                        "name" =>  "Tashkent"
                    ],
                    [
                        "id" =>  2549,
                        "name" =>  "Tashkent Region"
                    ],
                    [
                        "id" =>  2539,
                        "name" =>  "Xorazm Region"
                    ]
                ]
            ],
            [
                "name" =>  "Vanuatu",
                "numeric_code" =>  "548",
                "alpha_2" =>  "VU",
                "alpha_3" =>  "VUT",
                "phone_code" =>  "678",
                "currency" =>  "VUV",
                "currency_name" =>  "Vanuatu vatu",
                "currency_symbol" =>  "VT",
                "emoji" =>  "\ud83c\uddfb\ud83c\uddfa",
                "states" =>  [
                    [
                        "id" =>  4775,
                        "name" =>  "Malampa"
                    ],
                    [
                        "id" =>  4773,
                        "name" =>  "Penama"
                    ],
                    [
                        "id" =>  4776,
                        "name" =>  "Sanma"
                    ],
                    [
                        "id" =>  4774,
                        "name" =>  "Shefa"
                    ],
                    [
                        "id" =>  4777,
                        "name" =>  "Tafea"
                    ],
                    [
                        "id" =>  4772,
                        "name" =>  "Torba"
                    ]
                ]
            ],
            [
                "name" =>  "Vatican City State (Holy See)",
                "numeric_code" =>  "336",
                "alpha_2" =>  "VA",
                "alpha_3" =>  "VAT",
                "phone_code" =>  "379",
                "currency" =>  "EUR",
                "currency_name" =>  "Euro",
                "currency_symbol" =>  "\u20ac",
                "emoji" =>  "\ud83c\uddfb\ud83c\udde6",
                "states" =>  []
            ],
            [
                "name" =>  "Venezuela",
                "numeric_code" =>  "862",
                "alpha_2" =>  "VE",
                "alpha_3" =>  "VEN",
                "phone_code" =>  "58",
                "currency" =>  "VEF",
                "currency_name" =>  "Bol\u00edvar",
                "currency_symbol" =>  "Bs",
                "emoji" =>  "\ud83c\uddfb\ud83c\uddea",
                "states" =>  [
                    [
                        "id" =>  2044,
                        "name" =>  "Amazonas"
                    ],
                    [
                        "id" =>  2050,
                        "name" =>  "Anzo\u00e1tegui"
                    ],
                    [
                        "id" =>  4856,
                        "name" =>  "Apure"
                    ],
                    [
                        "id" =>  2047,
                        "name" =>  "Aragua"
                    ],
                    [
                        "id" =>  2049,
                        "name" =>  "Barinas"
                    ],
                    [
                        "id" =>  2039,
                        "name" =>  "Bol\u00edvar"
                    ],
                    [
                        "id" =>  2040,
                        "name" =>  "Carabobo"
                    ],
                    [
                        "id" =>  2034,
                        "name" =>  "Cojedes"
                    ],
                    [
                        "id" =>  2051,
                        "name" =>  "Delta Amacuro"
                    ],
                    [
                        "id" =>  4855,
                        "name" =>  "Distrito Capital"
                    ],
                    [
                        "id" =>  2035,
                        "name" =>  "Falc\u00f3n"
                    ],
                    [
                        "id" =>  2046,
                        "name" =>  "Federal Dependencies of Venezuela"
                    ],
                    [
                        "id" =>  2045,
                        "name" =>  "Gu\u00e1rico"
                    ],
                    [
                        "id" =>  2055,
                        "name" =>  "La Guaira"
                    ],
                    [
                        "id" =>  2038,
                        "name" =>  "Lara"
                    ],
                    [
                        "id" =>  2053,
                        "name" =>  "M\u00e9rida"
                    ],
                    [
                        "id" =>  2037,
                        "name" =>  "Miranda"
                    ],
                    [
                        "id" =>  2054,
                        "name" =>  "Monagas"
                    ],
                    [
                        "id" =>  2052,
                        "name" =>  "Nueva Esparta"
                    ],
                    [
                        "id" =>  2036,
                        "name" =>  "Portuguesa"
                    ],
                    [
                        "id" =>  2056,
                        "name" =>  "Sucre"
                    ],
                    [
                        "id" =>  2048,
                        "name" =>  "T\u00e1chira"
                    ],
                    [
                        "id" =>  2043,
                        "name" =>  "Trujillo"
                    ],
                    [
                        "id" =>  2041,
                        "name" =>  "Yaracuy"
                    ],
                    [
                        "id" =>  2042,
                        "name" =>  "Zulia"
                    ]
                ]
            ],
            [
                "name" =>  "Vietnam",
                "numeric_code" =>  "704",
                "alpha_2" =>  "VN",
                "alpha_3" =>  "VNM",
                "phone_code" =>  "84",
                "currency" =>  "VND",
                "currency_name" =>  "Vietnamese \u0111\u1ed3ng",
                "currency_symbol" =>  "\u20ab",
                "emoji" =>  "\ud83c\uddfb\ud83c\uddf3",
                "states" =>  [
                    [
                        "id" =>  3794,
                        "name" =>  "An Giang"
                    ],
                    [
                        "id" =>  3770,
                        "name" =>  "B\u00e0 R\u1ecba-V\u0169ng T\u00e0u"
                    ],
                    [
                        "id" =>  3815,
                        "name" =>  "B\u1eafc Giang"
                    ],
                    [
                        "id" =>  3822,
                        "name" =>  "B\u1eafc K\u1ea1n"
                    ],
                    [
                        "id" =>  3804,
                        "name" =>  "B\u1ea1c Li\u00eau"
                    ],
                    [
                        "id" =>  3791,
                        "name" =>  "B\u1eafc Ninh"
                    ],
                    [
                        "id" =>  3796,
                        "name" =>  "B\u1ebfn Tre"
                    ],
                    [
                        "id" =>  3785,
                        "name" =>  "B\u00ecnh D\u01b0\u01a1ng"
                    ],
                    [
                        "id" =>  3830,
                        "name" =>  "B\u00ecnh \u0110\u1ecbnh"
                    ],
                    [
                        "id" =>  3797,
                        "name" =>  "B\u00ecnh Ph\u01b0\u1edbc"
                    ],
                    [
                        "id" =>  3787,
                        "name" =>  "B\u00ecnh Thu\u1eadn"
                    ],
                    [
                        "id" =>  3778,
                        "name" =>  "C\u00e0 Mau"
                    ],
                    [
                        "id" =>  4925,
                        "name" =>  "C\u1ea7n Th\u01a1"
                    ],
                    [
                        "id" =>  3782,
                        "name" =>  "Cao B\u1eb1ng"
                    ],
                    [
                        "id" =>  3806,
                        "name" =>  "\u0110\u00e0 N\u1eb5ng"
                    ],
                    [
                        "id" =>  3829,
                        "name" =>  "\u0110\u1eafk L\u1eafk"
                    ],
                    [
                        "id" =>  3823,
                        "name" =>  "\u0110\u1eafk N\u00f4ng"
                    ],
                    [
                        "id" =>  3773,
                        "name" =>  "\u0110i\u1ec7n Bi\u00ean"
                    ],
                    [
                        "id" =>  3821,
                        "name" =>  "\u0110\u1ed3ng Nai"
                    ],
                    [
                        "id" =>  3769,
                        "name" =>  "\u0110\u1ed3ng Th\u00e1p"
                    ],
                    [
                        "id" =>  3813,
                        "name" =>  "Gia Lai"
                    ],
                    [
                        "id" =>  3779,
                        "name" =>  "H\u00e0 Giang"
                    ],
                    [
                        "id" =>  3802,
                        "name" =>  "H\u00e0 Nam"
                    ],
                    [
                        "id" =>  3810,
                        "name" =>  "H\u00e0 N\u1ed9i"
                    ],
                    [
                        "id" =>  3816,
                        "name" =>  "H\u00e0 T\u0129nh"
                    ],
                    [
                        "id" =>  3827,
                        "name" =>  "H\u1ea3i D\u01b0\u01a1ng"
                    ],
                    [
                        "id" =>  3783,
                        "name" =>  "H\u1ea3i Ph\u00f2ng"
                    ],
                    [
                        "id" =>  3777,
                        "name" =>  "H\u1eadu Giang"
                    ],
                    [
                        "id" =>  3811,
                        "name" =>  "H\u1ed3 Ch\u00ed Minh"
                    ],
                    [
                        "id" =>  3799,
                        "name" =>  "H\u00f2a B\u00ecnh"
                    ],
                    [
                        "id" =>  3768,
                        "name" =>  "H\u01b0ng Y\u00ean"
                    ],
                    [
                        "id" =>  3793,
                        "name" =>  "Kh\u00e1nh H\u00f2a"
                    ],
                    [
                        "id" =>  3800,
                        "name" =>  "Ki\u00ean Giang"
                    ],
                    [
                        "id" =>  3772,
                        "name" =>  "Kon Tum"
                    ],
                    [
                        "id" =>  3825,
                        "name" =>  "Lai Ch\u00e2u"
                    ],
                    [
                        "id" =>  3818,
                        "name" =>  "L\u00e2m \u0110\u1ed3ng"
                    ],
                    [
                        "id" =>  3792,
                        "name" =>  "L\u1ea1ng S\u01a1n"
                    ],
                    [
                        "id" =>  3817,
                        "name" =>  "L\u00e0o Cai"
                    ],
                    [
                        "id" =>  3808,
                        "name" =>  "Long An"
                    ],
                    [
                        "id" =>  3789,
                        "name" =>  "Nam \u0110\u1ecbnh"
                    ],
                    [
                        "id" =>  3780,
                        "name" =>  "Ngh\u1ec7 An"
                    ],
                    [
                        "id" =>  3786,
                        "name" =>  "Ninh B\u00ecnh"
                    ],
                    [
                        "id" =>  3788,
                        "name" =>  "Ninh Thu\u1eadn"
                    ],
                    [
                        "id" =>  3801,
                        "name" =>  "Ph\u00fa Th\u1ecd"
                    ],
                    [
                        "id" =>  3824,
                        "name" =>  "Ph\u00fa Y\u00ean"
                    ],
                    [
                        "id" =>  3809,
                        "name" =>  "Qu\u1ea3ng B\u00ecnh"
                    ],
                    [
                        "id" =>  3776,
                        "name" =>  "Qu\u1ea3ng Nam"
                    ],
                    [
                        "id" =>  3828,
                        "name" =>  "Qu\u1ea3ng Ng\u00e3i"
                    ],
                    [
                        "id" =>  3814,
                        "name" =>  "Qu\u1ea3ng Ninh"
                    ],
                    [
                        "id" =>  3803,
                        "name" =>  "Qu\u1ea3ng Tr\u1ecb"
                    ],
                    [
                        "id" =>  3819,
                        "name" =>  "S\u00f3c Tr\u0103ng"
                    ],
                    [
                        "id" =>  3812,
                        "name" =>  "S\u01a1n La"
                    ],
                    [
                        "id" =>  3826,
                        "name" =>  "T\u00e2y Ninh"
                    ],
                    [
                        "id" =>  3775,
                        "name" =>  "Th\u00e1i B\u00ecnh"
                    ],
                    [
                        "id" =>  3807,
                        "name" =>  "Th\u00e1i Nguy\u00ean"
                    ],
                    [
                        "id" =>  3771,
                        "name" =>  "Thanh H\u00f3a"
                    ],
                    [
                        "id" =>  3798,
                        "name" =>  "Th\u1eeba Thi\u00ean-Hu\u1ebf"
                    ],
                    [
                        "id" =>  3781,
                        "name" =>  "Ti\u1ec1n Giang"
                    ],
                    [
                        "id" =>  3805,
                        "name" =>  "Tr\u00e0 Vinh"
                    ],
                    [
                        "id" =>  3795,
                        "name" =>  "Tuy\u00ean Quang"
                    ],
                    [
                        "id" =>  3790,
                        "name" =>  "V\u0129nh Long"
                    ],
                    [
                        "id" =>  3774,
                        "name" =>  "V\u0129nh Ph\u00fac"
                    ],
                    [
                        "id" =>  3784,
                        "name" =>  "Y\u00ean B\u00e1i"
                    ]
                ]
            ],
            [
                "name" =>  "Virgin Islands (British)",
                "numeric_code" =>  "092",
                "alpha_2" =>  "VG",
                "alpha_3" =>  "VGB",
                "phone_code" =>  "+1-284",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddfb\ud83c\uddec",
                "states" =>  []
            ],
            [
                "name" =>  "Virgin Islands (US)",
                "numeric_code" =>  "850",
                "alpha_2" =>  "VI",
                "alpha_3" =>  "VIR",
                "phone_code" =>  "+1-340",
                "currency" =>  "USD",
                "currency_name" =>  "United States dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddfb\ud83c\uddee",
                "states" =>  [
                    [
                        "id" =>  5074,
                        "name" =>  "Saint Croix"
                    ],
                    [
                        "id" =>  5073,
                        "name" =>  "Saint John"
                    ],
                    [
                        "id" =>  5072,
                        "name" =>  "Saint Thomas"
                    ]
                ]
            ],
            [
                "name" =>  "Wallis And Futuna Islands",
                "numeric_code" =>  "876",
                "alpha_2" =>  "WF",
                "alpha_3" =>  "WLF",
                "phone_code" =>  "681",
                "currency" =>  "XPF",
                "currency_name" =>  "CFP franc",
                "currency_symbol" =>  "\u20a3",
                "emoji" =>  "\ud83c\uddfc\ud83c\uddeb",
                "states" =>  []
            ],
            [
                "name" =>  "Western Sahara",
                "numeric_code" =>  "732",
                "alpha_2" =>  "EH",
                "alpha_3" =>  "ESH",
                "phone_code" =>  "212",
                "currency" =>  "MAD",
                "currency_name" =>  "Moroccan Dirham",
                "currency_symbol" =>  "MAD",
                "emoji" =>  "\ud83c\uddea\ud83c\udded",
                "states" =>  []
            ],
            [
                "name" =>  "Yemen",
                "numeric_code" =>  "887",
                "alpha_2" =>  "YE",
                "alpha_3" =>  "YEM",
                "phone_code" =>  "967",
                "currency" =>  "YER",
                "currency_name" =>  "Yemeni rial",
                "currency_symbol" =>  "\ufdfc",
                "emoji" =>  "\ud83c\uddfe\ud83c\uddea",
                "states" =>  [
                    [
                        "id" =>  1242,
                        "name" =>  "'Adan"
                    ],
                    [
                        "id" =>  1250,
                        "name" =>  "'Amran"
                    ],
                    [
                        "id" =>  1237,
                        "name" =>  "Abyan"
                    ],
                    [
                        "id" =>  1240,
                        "name" =>  "Al Bayda'"
                    ],
                    [
                        "id" =>  1241,
                        "name" =>  "Al Hudaydah"
                    ],
                    [
                        "id" =>  1243,
                        "name" =>  "Al Jawf"
                    ],
                    [
                        "id" =>  1251,
                        "name" =>  "Al Mahrah"
                    ],
                    [
                        "id" =>  1235,
                        "name" =>  "Al Mahwit"
                    ],
                    [
                        "id" =>  1246,
                        "name" =>  "Dhamar"
                    ],
                    [
                        "id" =>  1238,
                        "name" =>  "Hadhramaut"
                    ],
                    [
                        "id" =>  1244,
                        "name" =>  "Hajjah"
                    ],
                    [
                        "id" =>  1233,
                        "name" =>  "Ibb"
                    ],
                    [
                        "id" =>  1245,
                        "name" =>  "Lahij"
                    ],
                    [
                        "id" =>  1234,
                        "name" =>  "Ma'rib"
                    ],
                    [
                        "id" =>  1248,
                        "name" =>  "Raymah"
                    ],
                    [
                        "id" =>  1249,
                        "name" =>  "Saada"
                    ],
                    [
                        "id" =>  1236,
                        "name" =>  "Sana'a"
                    ],
                    [
                        "id" =>  1232,
                        "name" =>  "Sana'a"
                    ],
                    [
                        "id" =>  1247,
                        "name" =>  "Shabwah"
                    ],
                    [
                        "id" =>  1239,
                        "name" =>  "Socotra"
                    ],
                    [
                        "id" =>  1231,
                        "name" =>  "Ta'izz"
                    ]
                ]
            ],
            [
                "name" =>  "Zambia",
                "numeric_code" =>  "894",
                "alpha_2" =>  "ZM",
                "alpha_3" =>  "ZMB",
                "phone_code" =>  "260",
                "currency" =>  "ZMW",
                "currency_name" =>  "Zambian kwacha",
                "currency_symbol" =>  "ZK",
                "emoji" =>  "\ud83c\uddff\ud83c\uddf2",
                "states" =>  [
                    [
                        "id" =>  1986,
                        "name" =>  "Central Province"
                    ],
                    [
                        "id" =>  1984,
                        "name" =>  "Copperbelt Province"
                    ],
                    [
                        "id" =>  1991,
                        "name" =>  "Eastern Province"
                    ],
                    [
                        "id" =>  1987,
                        "name" =>  "Luapula Province"
                    ],
                    [
                        "id" =>  1988,
                        "name" =>  "Lusaka Province"
                    ],
                    [
                        "id" =>  1989,
                        "name" =>  "Muchinga Province"
                    ],
                    [
                        "id" =>  1982,
                        "name" =>  "Northern Province"
                    ],
                    [
                        "id" =>  1985,
                        "name" =>  "Northwestern Province"
                    ],
                    [
                        "id" =>  1990,
                        "name" =>  "Southern Province"
                    ],
                    [
                        "id" =>  1983,
                        "name" =>  "Western Province"
                    ]
                ]
            ],
            [
                "name" =>  "Zimbabwe",
                "numeric_code" =>  "716",
                "alpha_2" =>  "ZW",
                "alpha_3" =>  "ZWE",
                "phone_code" =>  "263",
                "currency" =>  "ZWL",
                "currency_name" =>  "Zimbabwe Dollar",
                "currency_symbol" =>  "$",
                "emoji" =>  "\ud83c\uddff\ud83c\uddfc",
                "states" =>  [
                    [
                        "id" =>  1956,
                        "name" =>  "Bulawayo Province"
                    ],
                    [
                        "id" =>  1958,
                        "name" =>  "Harare Province"
                    ],
                    [
                        "id" =>  1959,
                        "name" =>  "Manicaland"
                    ],
                    [
                        "id" =>  1955,
                        "name" =>  "Mashonaland Central Province"
                    ],
                    [
                        "id" =>  1951,
                        "name" =>  "Mashonaland East Province"
                    ],
                    [
                        "id" =>  1953,
                        "name" =>  "Mashonaland West Province"
                    ],
                    [
                        "id" =>  1960,
                        "name" =>  "Masvingo Province"
                    ],
                    [
                        "id" =>  1954,
                        "name" =>  "Matabeleland North Province"
                    ],
                    [
                        "id" =>  1952,
                        "name" =>  "Matabeleland South Province"
                    ],
                    [
                        "id" =>  1957,
                        "name" =>  "Midlands Province"
                    ]
                ]
            ]
        ];

        return $country_list;
    }
}

if ( ! function_exists( 'tutor_get_country_info_by_name' ) ) {
    /**
     * Get country info by country name 
     *
     * @since 3.0.0
     *
     * @return array|null
     */
    function tutor_get_country_info_by_name( $country_name ) {
        $countries = tutor_get_country_list();
        foreach ( $countries as $country ) {
            if ( strtolower( $country['name'] ) === strtolower( $country_name ) ) {
                return $country;
            }
        }
    }
}