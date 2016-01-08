<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = '[
                    {
                      "name": "United States",
                      "isoName": "US",
                      "code": "1"
                    },
        			{
                      "name": "India",
                      "isoName": "IN",
                      "code": "91"
                    },
        			{
                      "name": "Vietnam",
                      "isoName": "VN",
                      "code": "84"
                    },
        			{
                      "name": "Germany",
                      "isoName": "DE",
                      "code": "49"
                    },
                    {
                      "name": "Afghanistan",
                      "isoName": "AF",
                      "code": "93"
                    },
                    {
                      "name": "Aland Islands",
                      "isoName": "AX",
                      "code": "358"
                    },
                    {
                      "name": "Albania",
                      "isoName": "AL",
                      "code": "355"
                    },
                    {
                      "name": "Algeria",
                      "isoName": "DZ",
                      "code": "213"
                    },
                    {
                      "name": "American Samoa",
                      "isoName": "AS",
                      "code": "1684"
                    },
                    {
                      "name": "Andorra",
                      "isoName": "AD",
                      "code": "376"
                    },
                    {
                      "name": "Angola",
                      "isoName": "AO",
                      "code": "244"
                    },
                    {
                      "name": "Anguilla",
                      "isoName": "AI",
                      "code": "1264"
                    },
                    {
                      "name": "Antigua and Barbuda",
                      "isoName": "AG",
                      "code": "1268"
                    },
                    {
                      "name": "Argentina",
                      "isoName": "AR",
                      "code": "54"
                    },
                    {
                      "name": "Armenia",
                      "isoName": "AM",
                      "code": "374"
                    },
                    {
                      "name": "Aruba",
                      "isoName": "AW",
                      "code": "297"
                    },
                    {
                      "name": "Ascension",
                      "isoName": "AC",
                      "code": "247"
                    },
                    {
                      "name": "Australia",
                      "isoName": "AU",
                      "code": "61"
                    },
                    {
                      "name": "Austria",
                      "isoName": "AT",
                      "code": "43"
                    },
                    {
                      "name": "Azerbaijan",
                      "isoName": "AZ",
                      "code": "994"
                    },
                    {
                      "name": "Bahamas",
                      "isoName": "BS",
                      "code": "1"
                    },
                    {
                      "name": "Bahrain",
                      "isoName": "BH",
                      "code": "973"
                    },
                    {
                      "name": "Bangladesh",
                      "isoName": "BD",
                      "code": "880"
                    },
                    {
                      "name": "Barbados",
                      "isoName": "BB",
                      "code": "1246"
                    },
                    {
                      "name": "Belarus",
                      "isoName": "BY",
                      "code": "375"
                    },
                    {
                      "name": "Belgium",
                      "isoName": "BE",
                      "code": "32"
                    },
                    {
                      "name": "Belize",
                      "isoName": "BZ",
                      "code": "501"
                    },
                    {
                      "name": "Benin",
                      "isoName": "BJ",
                      "code": "229"
                    },
                    {
                      "name": "Bermuda",
                      "isoName": "BM",
                      "code": "1441"
                    },
                    {
                      "name": "Bhutan",
                      "isoName": "BT",
                      "code": "975"
                    },
                    {
                      "name": "Bolivia",
                      "isoName": "BO",
                      "code": "591"
                    },
                    {
                      "name": "Bosnia and Herzegovina",
                      "isoName": "BA",
                      "code": "387"
                    },
                    {
                      "name": "Botswana",
                      "isoName": "BW",
                      "code": "267"
                    },
                    {
                      "name": "Brazil",
                      "isoName": "BR",
                      "code": "55"
                    },
                    {
                      "name": "British Virgin Islands",
                      "isoName": "VG",
                      "code": "1284"
                    },
                    {
                      "name": "Brunei",
                      "isoName": "BN",
                      "code": "673"
                    },
                    {
                      "name": "Bulgaria",
                      "isoName": "BG",
                      "code": "359"
                    },
                    {
                      "name": "Burkina Faso",
                      "isoName": "BF",
                      "code": "226"
                    },
                    {
                      "name": "Burundi",
                      "isoName": "BI",
                      "code": "257"
                    },
                    {
                      "name": "Cambodia",
                      "isoName": "KH",
                      "code": "855"
                    },
                    {
                      "name": "Cameroon",
                      "isoName": "CM",
                      "code": "237"
                    },
                    {
                      "name": "Canada",
                      "isoName": "CA",
                      "code": "1"
                    },
                    {
                      "name": "Canary Islands",
                      "isoName": "IC",
                      "code": "3491"
                    },
                    {
                      "name": "Cape Verde",
                      "isoName": "CV",
                      "code": "238"
                    },
                    {
                      "name": "Cayman Islands",
                      "isoName": "KY",
                      "code": "1345"
                    },
                    {
                      "name": "Central Africa",
                      "isoName": "CF",
                      "code": "236"
                    },
                    {
                      "name": "Chad",
                      "isoName": "TD",
                      "code": "235"
                    },
                    {
                      "name": "Chile",
                      "isoName": "CL",
                      "code": "56"
                    },
                    {
                      "name": "China",
                      "isoName": "CN",
                      "code": "86"
                    },
                    {
                      "name": "Christmas Island",
                      "isoName": "CX",
                      "code": "61"
                    },
                    {
                      "name": "Cocos",
                      "isoName": "CC",
                      "code": "61"
                    },
                    {
                      "name": "Colombia",
                      "isoName": "CO",
                      "code": "57"
                    },
                    {
                      "name": "Comoros",
                      "isoName": "KM",
                      "code": "269"
                    },
                    {
                      "name": "Congo",
                      "isoName": "CG",
                      "code": "242"
                    },
                    {
                      "name": "Costa Rica",
                      "isoName": "CR",
                      "code": "506"
                    },
                    {
                      "name": "Croatia",
                      "isoName": "HR",
                      "code": "385"
                    },
                    {
                      "name": "Cyprus",
                      "isoName": "CY",
                      "code": "357"
                    },
                    {
                      "name": "Czech Republic",
                      "isoName": "CZ",
                      "code": "420"
                    },
                    {
                      "name": "Dem Rep",
                      "isoName": "CD",
                      "code": "243"
                    },
                    {
                      "name": "Denmark",
                      "isoName": "DK",
                      "code": "45"
                    },
                    {
                      "name": "Djibouti",
                      "isoName": "DJ",
                      "code": "253"
                    },
                    {
                      "name": "Dominica",
                      "isoName": "DM",
                      "code": "1767"
                    },
                    {
                      "name": "Dominican Republic",
                      "isoName": "DO",
                      "code": "1809"
                    },
                    {
                      "name": "Ecuador",
                      "isoName": "EC",
                      "code": "593"
                    },
                    {
                      "name": "Egypt",
                      "isoName": "EG",
                      "code": "20"
                    },
                    {
                      "name": "El Salvador",
                      "isoName": "SV",
                      "code": "503"
                    },
                    {
                      "name": "Equatorial Guinea",
                      "isoName": "GQ",
                      "code": "240"
                    },
                    {
                      "name": "Eritrea",
                      "isoName": "ER",
                      "code": "291"
                    },
                    {
                      "name": "Estonia",
                      "isoName": "EE",
                      "code": "372"
                    },
                    {
                      "name": "Ethiopia",
                      "isoName": "ET",
                      "code": "251"
                    },
                    {
                      "name": "Faroe Islands",
                      "isoName": "FO",
                      "code": "298"
                    },
                    {
                      "name": "Fiji",
                      "isoName": "FJ",
                      "code": "679"
                    },
                    {
                      "name": "Finland",
                      "isoName": "FI",
                      "code": "358"
                    },
                    {
                      "name": "France",
                      "isoName": "FR",
                      "code": "33"
                    },
                    {
                      "name": "French Guiana",
                      "isoName": "GF",
                      "code": "594"
                    },
                    {
                      "name": "French Polynesia",
                      "isoName": "PF",
                      "code": "689"
                    },
                    {
                      "name": "Gabon",
                      "isoName": "GA",
                      "code": "241"
                    },
                    {
                      "name": "Gambia",
                      "isoName": "GM",
                      "code": "220"
                    },
                    {
                      "name": "Georgia",
                      "isoName": "GE",
                      "code": "995"
                    },
                    
                    {
                      "name": "Ghana",
                      "isoName": "GH",
                      "code": "233"
                    },
                    {
                      "name": "Gibraltar",
                      "isoName": "GI",
                      "code": "350"
                    },
                    {
                      "name": "Greece",
                      "isoName": "GR",
                      "code": "30"
                    },
                    {
                      "name": "Greenland",
                      "isoName": "GL",
                      "code": "299"
                    },
                    {
                      "name": "Grenada",
                      "isoName": "GD",
                      "code": "1473"
                    },
                    {
                      "name": "Guadeloupe",
                      "isoName": "GP",
                      "code": "590"
                    },
                    {
                      "name": "Guam",
                      "isoName": "GU",
                      "code": "1671"
                    },
                    {
                      "name": "Guatemala",
                      "isoName": "GT",
                      "code": "502"
                    },
                    {
                      "name": "Guinea",
                      "isoName": "GN",
                      "code": "224"
                    },
                    {
                      "name": "Guyana",
                      "isoName": "GY",
                      "code": "592"
                    },
                    {
                      "name": "Haiti",
                      "isoName": "HT",
                      "code": "509"
                    },
                    {
                      "name": "Honduras",
                      "isoName": "HN",
                      "code": "504"
                    },
                    {
                      "name": "Hong Kong",
                      "isoName": "HK",
                      "code": "852"
                    },
                    {
                      "name": "Hungary",
                      "isoName": "HU",
                      "code": "36"
                    },
                    {
                      "name": "Iceland",
                      "isoName": "IS",
                      "code": "354"
                    },                    
                    {
                      "name": "Indonesia",
                      "isoName": "ID",
                      "code": "62"
                    },
                    {
                      "name": "Iran",
                      "isoName": "IR",
                      "code": "98"
                    },
                    {
                      "name": "Iraq",
                      "isoName": "IQ",
                      "code": "964"
                    },
                    {
                      "name": "Ireland",
                      "isoName": "IE",
                      "code": "353"
                    },
                    {
                      "name": "Israel",
                      "isoName": "IL",
                      "code": "972"
                    },
                    {
                      "name": "Italy",
                      "isoName": "IT",
                      "code": "39"
                    },
                    {
                      "name": "Ivory Coast",
                      "isoName": "CI",
                      "code": "225"
                    },
                    {
                      "name": "Jamaica",
                      "isoName": "JM",
                      "code": "1876"
                    },
                    {
                      "name": "Japan",
                      "isoName": "JP",
                      "code": "81"
                    },
                    {
                      "name": "Jordan",
                      "isoName": "JO",
                      "code": "962"
                    },
                    {
                      "name": "Kazakhstan",
                      "isoName": "KZ",
                      "code": "7"
                    },
                    {
                      "name": "Kenya",
                      "isoName": "KE",
                      "code": "254"
                    },
                    {
                      "name": "Kosovo",
                      "isoName": "KX",
                      "code": "883"
                    },
                    {
                      "name": "Kuwait",
                      "isoName": "KW",
                      "code": "965"
                    },
                    {
                      "name": "Kyrgyzstan",
                      "isoName": "KG",
                      "code": "996"
                    },
                    {
                      "name": "Laos",
                      "isoName": "LA",
                      "code": "856"
                    },
                    {
                      "name": "Latvia",
                      "isoName": "LV",
                      "code": "371"
                    },
                    {
                      "name": "Lebanon",
                      "isoName": "LB",
                      "code": "961"
                    },
                    {
                      "name": "Lesotho",
                      "isoName": "LS",
                      "code": "266"
                    },
                    {
                      "name": "Liberia",
                      "isoName": "LR",
                      "code": "231"
                    },
                    {
                      "name": "Libya",
                      "isoName": "LY",
                      "code": "218"
                    },
                    {
                      "name": "Liechtenstein",
                      "isoName": "LI",
                      "code": "423"
                    },
                    {
                      "name": "Lithuania",
                      "isoName": "LT",
                      "code": "370"
                    },
                    {
                      "name": "Luxembourg",
                      "isoName": "LU",
                      "code": "352"
                    },
                    {
                      "name": "Macau",
                      "isoName": "MO",
                      "code": "853"
                    },
                    {
                      "name": "Macedonia",
                      "isoName": "MK",
                      "code": "389"
                    },
                    {
                      "name": "Madagascar",
                      "isoName": "MG",
                      "code": "261"
                    },
                    {
                      "name": "Malawi",
                      "isoName": "MW",
                      "code": "265"
                    },
                    {
                      "name": "Malaysia",
                      "isoName": "MY",
                      "code": "60"
                    },
                    {
                      "name": "Maldives",
                      "isoName": "MV",
                      "code": "960"
                    },
                    {
                      "name": "Mali",
                      "isoName": "ML",
                      "code": "223"
                    },
                    {
                      "name": "Malta",
                      "isoName": "MT",
                      "code": "356"
                    },
                    {
                      "name": "Marshall Islands",
                      "isoName": "MH",
                      "code": "692"
                    },
                    {
                      "name": "Martinique",
                      "isoName": "MQ",
                      "code": "596"
                    },
                    {
                      "name": "Mauritania",
                      "isoName": "MR",
                      "code": "222"
                    },
                    {
                      "name": "Mauritius",
                      "isoName": "MU",
                      "code": "230"
                    },
                    {
                      "name": "Mayotte",
                      "isoName": "YT",
                      "code": "262"
                    },
                    {
                      "name": "Mexico",
                      "isoName": "MX",
                      "code": "52"
                    },
                    {
                      "name": "Micronesia",
                      "isoName": "FM",
                      "code": "691"
                    },
                    {
                      "name": "Moldova",
                      "isoName": "MD",
                      "code": "373"
                    },
                    {
                      "name": "Monaco",
                      "isoName": "MC",
                      "code": "377"
                    },
                    {
                      "name": "Mongolia",
                      "isoName": "MN",
                      "code": "976"
                    },
                    {
                      "name": "Montenegro",
                      "isoName": "ME",
                      "code": "382"
                    },
                    {
                      "name": "Montserrat",
                      "isoName": "MS",
                      "code": "1664"
                    },
                    {
                      "name": "Morocco",
                      "isoName": "MA",
                      "code": "212"
                    },
                    {
                      "name": "Mozambique",
                      "isoName": "MZ",
                      "code": "258"
                    },
                    {
                      "name": "Myanmar",
                      "isoName": "MM",
                      "code": "95"
                    },
                    {
                      "name": "Namibia",
                      "isoName": "NA",
                      "code": "264"
                    },
                    {
                      "name": "Nepal",
                      "isoName": "NP",
                      "code": "977"
                    },
                    {
                      "name": "Netherlands",
                      "isoName": "NL",
                      "code": "31"
                    },
                    {
                      "name": "Netherlands Antilles",
                      "isoName": "AN",
                      "code": "599"
                    },
                    {
                      "name": "New Caledonia",
                      "isoName": "NC",
                      "code": "687"
                    },
                    {
                      "name": "New Zealand",
                      "isoName": "NZ",
                      "code": "64"
                    },
                    {
                      "name": "Nicaragua",
                      "isoName": "NI",
                      "code": "505"
                    },
                    {
                      "name": "Niger",
                      "isoName": "NE",
                      "code": "227"
                    },
                    {
                      "name": "Nigeria",
                      "isoName": "NG",
                      "code": "234"
                    },
                    {
                      "name": "North Korea",
                      "isoName": "KP",
                      "code": "850"
                    },
                    {
                      "name": "Northern Mariana Islands",
                      "isoName": "MP",
                      "code": "1670"
                    },
                    {
                      "name": "Norway",
                      "isoName": "NO",
                      "code": "47"
                    },
                    {
                      "name": "Oman",
                      "isoName": "OM",
                      "code": "968"
                    },
                    {
                      "name": "Pakistan",
                      "isoName": "PK",
                      "code": "92"
                    },
                    {
                      "name": "Palau",
                      "isoName": "PW",
                      "code": "680"
                    },
                    {
                      "name": "Palestinian Territory",
                      "isoName": "PS",
                      "code": "970"
                    },
                    {
                      "name": "Panama",
                      "isoName": "PA",
                      "code": "507"
                    },
                    {
                      "name": "Paraguay",
                      "isoName": "PY",
                      "code": "595"
                    },
                    {
                      "name": "Peru",
                      "isoName": "PE",
                      "code": "51"
                    },
                    {
                      "name": "Philippines",
                      "isoName": "PH",
                      "code": "63"
                    },
                    {
                      "name": "Poland",
                      "isoName": "PL",
                      "code": "48"
                    },
                    {
                      "name": "Portugal",
                      "isoName": "PT",
                      "code": "351"
                    },
                    {
                      "name": "Puerto Rico",
                      "isoName": "PR",
                      "code": "1787"
                    },
                    {
                      "name": "Qatar",
                      "isoName": "QA",
                      "code": "974"
                    },
                    {
                      "name": "Reunion",
                      "isoName": "RE",
                      "code": "262"
                    },
                    {
                      "name": "Romania",
                      "isoName": "RO",
                      "code": "40"
                    },
                    {
                      "name": "Russia",
                      "isoName": "RU",
                      "code": "7"
                    },
                    {
                      "name": "Rwanda",
                      "isoName": "RW",
                      "code": "250"
                    },
                    {
                      "name": "Saint Kitts and Nevis",
                      "isoName": "KN",
                      "code": "1869"
                    },
                    {
                      "name": "Saint Lucia",
                      "isoName": "KN",
                      "code": "1758"
                    },
                    {
                      "name": "Saint Pierre and Miquelon",
                      "isoName": "PM",
                      "code": "508"
                    },
                    {
                      "name": "Saint Vincent and the Grenadines",
                      "isoName": "VC",
                      "code": "1784"
                    },
                    {
                      "name": "Samoa",
                      "isoName": "WS",
                      "code": "685"
                    },
                    {
                      "name": "San Marino",
                      "isoName": "SM",
                      "code": "378"
                    },
                    {
                      "name": "Saudi Arabia",
                      "isoName": "SA",
                      "code": "966"
                    },
                    {
                      "name": "Senegal",
                      "isoName": "SN",
                      "code": "221"
                    },
                    {
                      "name": "Serbia",
                      "isoName": "RS",
                      "code": "381"
                    },
                    {
                      "name": "Seychelles",
                      "isoName": "SC",
                      "code": "248"
                    },
                    {
                      "name": "Sierra Leone",
                      "isoName": "SL",
                      "code": "232"
                    },
                    {
                      "name": "Singapore",
                      "isoName": "SG",
                      "code": "65"
                    },
                    {
                      "name": "Slovakia",
                      "isoName": "SK",
                      "code": "421"
                    },
                    {
                      "name": "Slovenia",
                      "isoName": "SI",
                      "code": "386"
                    },
                    {
                      "name": "Somalia",
                      "isoName": "SO",
                      "code": "252"
                    },
                    {
                      "name": "South Africa",
                      "isoName": "ZA",
                      "code": "27"
                    },
                    {
                      "name": "South Korea",
                      "isoName": "KR",
                      "code": "82"
                    },
                    {
                      "name": "Spain",
                      "isoName": "ES",
                      "code": "34"
                    },
                    {
                      "name": "Sri Lanka",
                      "isoName": "LK",
                      "code": "94"
                    },
                    {
                      "name": "Sudan",
                      "isoName": "SD",
                      "code": "249"
                    },
                    {
                      "name": "Suriname",
                      "isoName": "SR",
                      "code": "597"
                    },
                    {
                      "name": "Swaziland",
                      "isoName": "SZ",
                      "code": "268"
                    },
                    {
                      "name": "Sweden",
                      "isoName": "SE",
                      "code": "46"
                    },
                    {
                      "name": "Switzerland",
                      "isoName": "CH",
                      "code": "41"
                    },
                    {
                      "name": "Syria",
                      "isoName": "SY",
                      "code": "963"
                    },
                    {
                      "name": "Taiwan",
                      "isoName": "TW",
                      "code": "886"
                    },
                    {
                      "name": "Tajikistan",
                      "isoName": "TJ",
                      "code": "992"
                    },
                    {
                      "name": "Tanzania",
                      "isoName": "TZ",
                      "code": "255"
                    },
                    {
                      "name": "Thailand",
                      "isoName": "TH",
                      "code": "66"
                    },
                    {
                      "name": "Togo",
                      "isoName": "TG",
                      "code": "228"
                    },
                    {
                      "name": "Tonga",
                      "isoName": "TO",
                      "code": "676"
                    },
                    {
                      "name": "Trinidad and Tobago",
                      "isoName": "TT",
                      "code": "1868"
                    },
                    {
                      "name": "Tunisia",
                      "isoName": "TN",
                      "code": "216"
                    },
                    {
                      "name": "Turkey",
                      "isoName": "TR",
                      "code": "90"
                    },
                    {
                      "name": "Turkmenistan",
                      "isoName": "TM",
                      "code": "993"
                    },
                    {
                      "name": "Turks and Caicos Islands",
                      "isoName": "TC",
                      "code": "1649"
                    },
                    {
                      "name": "Tuvalu",
                      "isoName": "TV",
                      "code": "688"
                    },
                    {
                      "name": "US Virgin Islands",
                      "isoName": "VI",
                      "code": "1340"
                    },
                    {
                      "name": "Uganda",
                      "isoName": "UG",
                      "code": "256"
                    },
                    {
                      "name": "Ukraine",
                      "isoName": "UA",
                      "code": "380"
                    },
                    {
                      "name": "United Arab Emirates",
                      "isoName": "AE",
                      "code": "971"
                    },
                    {
                      "name": "United Kingdom",
                      "isoName": "GB",
                      "code": "44"
                    },
                    {
                      "name": "Uruguay",
                      "isoName": "UY",
                      "code": "598"
                    },
                    {
                      "name": "Uzbekistan",
                      "isoName": "UZ",
                      "code": "998"
                    },
                    {
                      "name": "Venezuela",
                      "isoName": "VE",
                      "code": "58"
                    },                   
                    {
                      "name": "Western Sahara",
                      "isoName": "EH",
                      "code": "212"
                    },
                    {
                      "name": "Yemen",
                      "isoName": "YE",
                      "code": "967"
                    },
                    {
                      "name": "Zambia",
                      "isoName": "ZM",
                      "code": "260"
                    },
                    {
                      "name": "Zimbabwe",
                      "isoName": "ZW",
                      "code": "263"
                    }
                  ]';

        $countries = json_decode($json, true);

        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'name' => $country['name']
            ]);
        }
    }
}
