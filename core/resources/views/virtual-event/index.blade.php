<!doctype html   {{ $lang=='ar' ? 'lang=ar dir=rtl' : '' }}>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""  {{ $lang=='ar' ? 'lang=ar dir=rtl' : '' }}> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""  {{ $lang=='ar' ? 'lang=ar dir=rtl' : '' }}> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""  {{ $lang=='ar' ? 'lang=ar dir=rtl' : '' }}> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""  {{ $lang=='ar' ? 'lang=ar dir=rtl' : '' }}> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Tatmeen | Official Website</title>
    <meta name="description" content="Tatmeen is a highly advanced track and trace platform for pharmaceuticals and medical products. Initiated by the Ministry of Health and Prevention to ensure protection of public health and improve the security of healthcare at all stages.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{ asset('') }}/apple-touch-icon.png">

    <meta itemprop="image" content="{{asset('img/TATMEEN_LOGO.png')}}">

    <!-- Twitter Card data -->
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="Tatmeen | Official Website">
    <meta name="twitter:description" content="Tatmeen is a highly advanced track and trace platform for pharmaceuticals and medical products. Initiated by the Ministry of Health and Prevention to ensure protection of public health and improve the security of healthcare at all stages.">
    <meta name="twitter:creator" content="@author_handle">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="{{asset('img/TATMEEN_LOGO.png')}}">

    <!-- Open Graph data -->
    <meta property="og:title" content="Tatmeen | Official Website" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:image" content="{{asset('img/TATMEEN_LOGO.png')}}" />
    <meta property="og:description" content="Tatmeen is a highly advanced track and trace platform for pharmaceuticals and medical products. Initiated by the Ministry of Health and Prevention to ensure protection of public health and improve the security of healthcare at all stages." />
    <meta property="og:site_name" content="Tatmeen | Official Website" />
    <meta property="article:published_time" content="2021-09-27T05:59:00+01:00" />
    <meta property="article:modified_time" content="2021-09-27T19:08:47+01:00" />
    <meta property="article:section" content="Homepage" />
    <meta property="article:tag" content="Tatmeen | Official Website" />
    <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/png">

    @if($lang=='ar')
        <link rel="stylesheet" href="{{ asset('') }}/css/bootstrap-ar.min.css">
    @else
        <link rel="stylesheet" href="{{ asset('') }}/css/bootstrap.min.css">
    @endif
    <style>
    </style>
    <link rel="stylesheet" href="{{ asset('') }}/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="{{ asset('') }}/fonts/Theme.FontAwesome.css">
    <link rel="stylesheet" href="{{ asset('') }}/fonts/roboto/stylesheet.css">
    <link rel="stylesheet" href="{{ asset('') }}/fonts/cairo/stylesheet.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset('') }}/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('') }}/css/main.css?v={{ rand(1,99999) }}">

    <style>
        .greenbg {
            background-color: green;
            background-image: url({{asset('img/registration/bg.png')}});
        }

        h1 {
            color: #fff;
            padding-left: 30px;
            border-left: 3px solid #b8942f;
            font-size: 60px;
            line-height: 65px;
            margin-bottom: 40px;
        }

        h2 {
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            margin: 40px 0;
        }

        label {
            color: #fff;
            font-size: 20px;
            text-transform: uppercase;
        }

        input, select {
            height: 50px;
            line-height: 50px;
            font-size: 50px;
            text-transform: uppercase;
        }

        input[type=submit] {
            margin-top: 20px;
            background-color: #b8942f;
            color: #fff;
            border: 0;
            font-size: 36px;
            height: auto;
        }

        #header .top {
             padding-top: 15px;
            padding-bottom: 15px;
        }

        .date {
            background-color: #ccc;
            padding: 20px;
            float: left;
            width: 100%;
        }

        .date label {
            height: 60px;
            float: left;
        }

        .date input, .date span {
            height: 40px;
            line-height: 40px;
            display: inline-block;
            float: left;
        }

        .date input {
            margin-right: 20px;
        }

        .dropdown {
            background-image: url({{asset('img/registration/dropdown.png')}});
            background-repeat: no-repeat;
            background-position: 96% center;
        }

        /* The container must be positioned relative: */
        .custom-select {
            position: relative;
            font-family: Arial;
        }

        .custom-select select {
            display: none; /*hide original SELECT element: */
        }

        .select-selected {
            background-color: #fff;
        }

        /* Style the arrow inside the select element: */
        .select-selected:after {
            position: absolute;
            content: "";
            top: 19px;
            right: 14px;
            width: 0;
            height: 0;
            border: 9px solid transparent;
            border-color: #000 transparent transparent transparent;
        }

        /* Point the arrow upwards when the select box is open (active): */
        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 7px;
        }

        /* style the items (options), including the selected item: */
        .select-items div,.select-selected {
            color: #000;
            padding: 8px 16px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
            border-radius: 3px;
        }

        /* Style items (options): */
        .select-items {
            position: absolute;
            background-color: #fff;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
            max-height: 300px;
            overflow-y: auto;
        }

        /* Hide the items when the select box is closed: */
        .select-hide {
            display: none;
        }

        .select-items div:hover, .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
        }

        @media only screen and (max-width: 767px) {

            h1 {
                font-size: 40px;
                line-height: 45px;
                margin-bottom: 20px;
            }
            h2 {
                font-size: 30px;
                margin: 30px 0;
            }

            #header .left, #header .right {
                text-align: center;
            }

            #mohapLogo, #tatmeenLogo {
            }
        }
    </style>

    <script src="{{ asset('') }}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>

<?php
// All countries
// length 252
$countries_list = array(
    "AF" => array("name" => "Afghanistan", "phone" => "93"),
    "AX" => array("name" => "Aland Islands", "phone" => "358"),
    "AL" => array("name" => "Albania", "phone" => "355"),
    "DZ" => array("name" => "Algeria", "phone" => "213"),
    "AS" => array("name" => "American Samoa", "phone" => "1684"),
    "AD" => array("name" => "Andorra", "phone" => "376"),
    "AO" => array("name" => "Angola", "phone" => "244"),
    "AI" => array("name" => "Anguilla", "phone" => "1264"),
    "AQ" => array("name" => "Antarctica", "phone" => "672"),
    "AG" => array("name" => "Antigua and Barbuda", "phone" => "1268"),
    "AR" => array("name" => "Argentina", "phone" => "54"),
    "AM" => array("name" => "Armenia", "phone" => "374"),
    "AW" => array("name" => "Aruba", "phone" => "297"),
    "AU" => array("name" => "Australia", "phone" => "61"),
    "AT" => array("name" => "Austria", "phone" => "43"),
    "AZ" => array("name" => "Azerbaijan", "phone" => "994"),
    "BS" => array("name" => "Bahamas", "phone" => "1242"),
    "BH" => array("name" => "Bahrain", "phone" => "973"),
    "BD" => array("name" => "Bangladesh", "phone" => "880"),
    "BB" => array("name" => "Barbados", "phone" => "1246"),
    "BY" => array("name" => "Belarus", "phone" => "375"),
    "BE" => array("name" => "Belgium", "phone" => "32"),
    "BZ" => array("name" => "Belize", "phone" => "501"),
    "BJ" => array("name" => "Benin", "phone" => "229"),
    "BM" => array("name" => "Bermuda", "phone" => "1441"),
    "BT" => array("name" => "Bhutan", "phone" => "975"),
    "BO" => array("name" => "Bolivia", "phone" => "591"),
    "BQ" => array("name" => "Bonaire, Sint Eustatius and Saba", "phone" => "599"),
    "BA" => array("name" => "Bosnia and Herzegovina", "phone" => "387"),
    "BW" => array("name" => "Botswana", "phone" => "267"),
    "BV" => array("name" => "Bouvet Island", "phone" => "55"),
    "BR" => array("name" => "Brazil", "phone" => "55"),
    "IO" => array("name" => "British Indian Ocean Territory", "phone" => "246"),
    "BN" => array("name" => "Brunei Darussalam", "phone" => "673"),
    "BG" => array("name" => "Bulgaria", "phone" => "359"),
    "BF" => array("name" => "Burkina Faso", "phone" => "226"),
    "BI" => array("name" => "Burundi", "phone" => "257"),
    "KH" => array("name" => "Cambodia", "phone" => "855"),
    "CM" => array("name" => "Cameroon", "phone" => "237"),
    "CA" => array("name" => "Canada", "phone" => "1"),
    "CV" => array("name" => "Cape Verde", "phone" => "238"),
    "KY" => array("name" => "Cayman Islands", "phone" => "1345"),
    "CF" => array("name" => "Central African Republic", "phone" => "236"),
    "TD" => array("name" => "Chad", "phone" => "235"),
    "CL" => array("name" => "Chile", "phone" => "56"),
    "CN" => array("name" => "China", "phone" => "86"),
    "CX" => array("name" => "Christmas Island", "phone" => "61"),
    "CC" => array("name" => "Cocos (Keeling) Islands", "phone" => "672"),
    "CO" => array("name" => "Colombia", "phone" => "57"),
    "KM" => array("name" => "Comoros", "phone" => "269"),
    "CG" => array("name" => "Congo", "phone" => "242"),
    "CD" => array("name" => "Congo, Democratic Republic of the Congo", "phone" => "242"),
    "CK" => array("name" => "Cook Islands", "phone" => "682"),
    "CR" => array("name" => "Costa Rica", "phone" => "506"),
    "CI" => array("name" => "Cote D'Ivoire", "phone" => "225"),
    "HR" => array("name" => "Croatia", "phone" => "385"),
    "CU" => array("name" => "Cuba", "phone" => "53"),
    "CW" => array("name" => "Curacao", "phone" => "599"),
    "CY" => array("name" => "Cyprus", "phone" => "357"),
    "CZ" => array("name" => "Czech Republic", "phone" => "420"),
    "DK" => array("name" => "Denmark", "phone" => "45"),
    "DJ" => array("name" => "Djibouti", "phone" => "253"),
    "DM" => array("name" => "Dominica", "phone" => "1767"),
    "DO" => array("name" => "Dominican Republic", "phone" => "1809"),
    "EC" => array("name" => "Ecuador", "phone" => "593"),
    "EG" => array("name" => "Egypt", "phone" => "20"),
    "SV" => array("name" => "El Salvador", "phone" => "503"),
    "GQ" => array("name" => "Equatorial Guinea", "phone" => "240"),
    "ER" => array("name" => "Eritrea", "phone" => "291"),
    "EE" => array("name" => "Estonia", "phone" => "372"),
    "ET" => array("name" => "Ethiopia", "phone" => "251"),
    "FK" => array("name" => "Falkland Islands (Malvinas)", "phone" => "500"),
    "FO" => array("name" => "Faroe Islands", "phone" => "298"),
    "FJ" => array("name" => "Fiji", "phone" => "679"),
    "FI" => array("name" => "Finland", "phone" => "358"),
    "FR" => array("name" => "France", "phone" => "33"),
    "GF" => array("name" => "French Guiana", "phone" => "594"),
    "PF" => array("name" => "French Polynesia", "phone" => "689"),
    "TF" => array("name" => "French Southern Territories", "phone" => "262"),
    "GA" => array("name" => "Gabon", "phone" => "241"),
    "GM" => array("name" => "Gambia", "phone" => "220"),
    "GE" => array("name" => "Georgia", "phone" => "995"),
    "DE" => array("name" => "Germany", "phone" => "49"),
    "GH" => array("name" => "Ghana", "phone" => "233"),
    "GI" => array("name" => "Gibraltar", "phone" => "350"),
    "GR" => array("name" => "Greece", "phone" => "30"),
    "GL" => array("name" => "Greenland", "phone" => "299"),
    "GD" => array("name" => "Grenada", "phone" => "1473"),
    "GP" => array("name" => "Guadeloupe", "phone" => "590"),
    "GU" => array("name" => "Guam", "phone" => "1671"),
    "GT" => array("name" => "Guatemala", "phone" => "502"),
    "GG" => array("name" => "Guernsey", "phone" => "44"),
    "GN" => array("name" => "Guinea", "phone" => "224"),
    "GW" => array("name" => "Guinea-Bissau", "phone" => "245"),
    "GY" => array("name" => "Guyana", "phone" => "592"),
    "HT" => array("name" => "Haiti", "phone" => "509"),
    "HM" => array("name" => "Heard Island and Mcdonald Islands", "phone" => "0"),
    "VA" => array("name" => "Holy See (Vatican City State)", "phone" => "39"),
    "HN" => array("name" => "Honduras", "phone" => "504"),
    "HK" => array("name" => "Hong Kong", "phone" => "852"),
    "HU" => array("name" => "Hungary", "phone" => "36"),
    "IS" => array("name" => "Iceland", "phone" => "354"),
    "IN" => array("name" => "India", "phone" => "91"),
    "ID" => array("name" => "Indonesia", "phone" => "62"),
    "IR" => array("name" => "Iran, Islamic Republic of", "phone" => "98"),
    "IQ" => array("name" => "Iraq", "phone" => "964"),
    "IE" => array("name" => "Ireland", "phone" => "353"),
    "IM" => array("name" => "Isle of Man", "phone" => "44"),
    "IL" => array("name" => "Israel", "phone" => "972"),
    "IT" => array("name" => "Italy", "phone" => "39"),
    "JM" => array("name" => "Jamaica", "phone" => "1876"),
    "JP" => array("name" => "Japan", "phone" => "81"),
    "JE" => array("name" => "Jersey", "phone" => "44"),
    "JO" => array("name" => "Jordan", "phone" => "962"),
    "KZ" => array("name" => "Kazakhstan", "phone" => "7"),
    "KE" => array("name" => "Kenya", "phone" => "254"),
    "KI" => array("name" => "Kiribati", "phone" => "686"),
    "KP" => array("name" => "Korea, Democratic People's Republic of", "phone" => "850"),
    "KR" => array("name" => "Korea, Republic of", "phone" => "82"),
    "XK" => array("name" => "Kosovo", "phone" => "381"),
    "KW" => array("name" => "Kuwait", "phone" => "965"),
    "KG" => array("name" => "Kyrgyzstan", "phone" => "996"),
    "LA" => array("name" => "Lao People's Democratic Republic", "phone" => "856"),
    "LV" => array("name" => "Latvia", "phone" => "371"),
    "LB" => array("name" => "Lebanon", "phone" => "961"),
    "LS" => array("name" => "Lesotho", "phone" => "266"),
    "LR" => array("name" => "Liberia", "phone" => "231"),
    "LY" => array("name" => "Libyan Arab Jamahiriya", "phone" => "218"),
    "LI" => array("name" => "Liechtenstein", "phone" => "423"),
    "LT" => array("name" => "Lithuania", "phone" => "370"),
    "LU" => array("name" => "Luxembourg", "phone" => "352"),
    "MO" => array("name" => "Macao", "phone" => "853"),
    "MK" => array("name" => "Macedonia, the Former Yugoslav Republic of", "phone" => "389"),
    "MG" => array("name" => "Madagascar", "phone" => "261"),
    "MW" => array("name" => "Malawi", "phone" => "265"),
    "MY" => array("name" => "Malaysia", "phone" => "60"),
    "MV" => array("name" => "Maldives", "phone" => "960"),
    "ML" => array("name" => "Mali", "phone" => "223"),
    "MT" => array("name" => "Malta", "phone" => "356"),
    "MH" => array("name" => "Marshall Islands", "phone" => "692"),
    "MQ" => array("name" => "Martinique", "phone" => "596"),
    "MR" => array("name" => "Mauritania", "phone" => "222"),
    "MU" => array("name" => "Mauritius", "phone" => "230"),
    "YT" => array("name" => "Mayotte", "phone" => "269"),
    "MX" => array("name" => "Mexico", "phone" => "52"),
    "FM" => array("name" => "Micronesia, Federated States of", "phone" => "691"),
    "MD" => array("name" => "Moldova, Republic of", "phone" => "373"),
    "MC" => array("name" => "Monaco", "phone" => "377"),
    "MN" => array("name" => "Mongolia", "phone" => "976"),
    "ME" => array("name" => "Montenegro", "phone" => "382"),
    "MS" => array("name" => "Montserrat", "phone" => "1664"),
    "MA" => array("name" => "Morocco", "phone" => "212"),
    "MZ" => array("name" => "Mozambique", "phone" => "258"),
    "MM" => array("name" => "Myanmar", "phone" => "95"),
    "NA" => array("name" => "Namibia", "phone" => "264"),
    "NR" => array("name" => "Nauru", "phone" => "674"),
    "NP" => array("name" => "Nepal", "phone" => "977"),
    "NL" => array("name" => "Netherlands", "phone" => "31"),
    "AN" => array("name" => "Netherlands Antilles", "phone" => "599"),
    "NC" => array("name" => "New Caledonia", "phone" => "687"),
    "NZ" => array("name" => "New Zealand", "phone" => "64"),
    "NI" => array("name" => "Nicaragua", "phone" => "505"),
    "NE" => array("name" => "Niger", "phone" => "227"),
    "NG" => array("name" => "Nigeria", "phone" => "234"),
    "NU" => array("name" => "Niue", "phone" => "683"),
    "NF" => array("name" => "Norfolk Island", "phone" => "672"),
    "MP" => array("name" => "Northern Mariana Islands", "phone" => "1670"),
    "NO" => array("name" => "Norway", "phone" => "47"),
    "OM" => array("name" => "Oman", "phone" => "968"),
    "PK" => array("name" => "Pakistan", "phone" => "92"),
    "PW" => array("name" => "Palau", "phone" => "680"),
    "PS" => array("name" => "Palestinian Territory, Occupied", "phone" => "970"),
    "PA" => array("name" => "Panama", "phone" => "507"),
    "PG" => array("name" => "Papua New Guinea", "phone" => "675"),
    "PY" => array("name" => "Paraguay", "phone" => "595"),
    "PE" => array("name" => "Peru", "phone" => "51"),
    "PH" => array("name" => "Philippines", "phone" => "63"),
    "PN" => array("name" => "Pitcairn", "phone" => "64"),
    "PL" => array("name" => "Poland", "phone" => "48"),
    "PT" => array("name" => "Portugal", "phone" => "351"),
    "PR" => array("name" => "Puerto Rico", "phone" => "1787"),
    "QA" => array("name" => "Qatar", "phone" => "974"),
    "RE" => array("name" => "Reunion", "phone" => "262"),
    "RO" => array("name" => "Romania", "phone" => "40"),
    "RU" => array("name" => "Russian Federation", "phone" => "70"),
    "RW" => array("name" => "Rwanda", "phone" => "250"),
    "BL" => array("name" => "Saint Barthelemy", "phone" => "590"),
    "SH" => array("name" => "Saint Helena", "phone" => "290"),
    "KN" => array("name" => "Saint Kitts and Nevis", "phone" => "1869"),
    "LC" => array("name" => "Saint Lucia", "phone" => "1758"),
    "MF" => array("name" => "Saint Martin", "phone" => "590"),
    "PM" => array("name" => "Saint Pierre and Miquelon", "phone" => "508"),
    "VC" => array("name" => "Saint Vincent and the Grenadines", "phone" => "1784"),
    "WS" => array("name" => "Samoa", "phone" => "684"),
    "SM" => array("name" => "San Marino", "phone" => "378"),
    "ST" => array("name" => "Sao Tome and Principe", "phone" => "239"),
    "SA" => array("name" => "Saudi Arabia", "phone" => "966"),
    "SN" => array("name" => "Senegal", "phone" => "221"),
    "RS" => array("name" => "Serbia", "phone" => "381"),
    "CS" => array("name" => "Serbia and Montenegro", "phone" => "381"),
    "SC" => array("name" => "Seychelles", "phone" => "248"),
    "SL" => array("name" => "Sierra Leone", "phone" => "232"),
    "SG" => array("name" => "Singapore", "phone" => "65"),
    "SX" => array("name" => "Sint Maarten", "phone" => "1"),
    "SK" => array("name" => "Slovakia", "phone" => "421"),
    "SI" => array("name" => "Slovenia", "phone" => "386"),
    "SB" => array("name" => "Solomon Islands", "phone" => "677"),
    "SO" => array("name" => "Somalia", "phone" => "252"),
    "ZA" => array("name" => "South Africa", "phone" => "27"),
    "GS" => array("name" => "South Georgia and the South Sandwich Islands", "phone" => "500"),
    "SS" => array("name" => "South Sudan", "phone" => "211"),
    "ES" => array("name" => "Spain", "phone" => "34"),
    "LK" => array("name" => "Sri Lanka", "phone" => "94"),
    "SD" => array("name" => "Sudan", "phone" => "249"),
    "SR" => array("name" => "Suriname", "phone" => "597"),
    "SJ" => array("name" => "Svalbard and Jan Mayen", "phone" => "47"),
    "SZ" => array("name" => "Swaziland", "phone" => "268"),
    "SE" => array("name" => "Sweden", "phone" => "46"),
    "CH" => array("name" => "Switzerland", "phone" => "41"),
    "SY" => array("name" => "Syrian Arab Republic", "phone" => "963"),
    "TW" => array("name" => "Taiwan, Province of China", "phone" => "886"),
    "TJ" => array("name" => "Tajikistan", "phone" => "992"),
    "TZ" => array("name" => "Tanzania, United Republic of", "phone" => "255"),
    "TH" => array("name" => "Thailand", "phone" => "66"),
    "TL" => array("name" => "Timor-Leste", "phone" => "670"),
    "TG" => array("name" => "Togo", "phone" => "228"),
    "TK" => array("name" => "Tokelau", "phone" => "690"),
    "TO" => array("name" => "Tonga", "phone" => "676"),
    "TT" => array("name" => "Trinidad and Tobago", "phone" => "1868"),
    "TN" => array("name" => "Tunisia", "phone" => "216"),
    "TR" => array("name" => "Turkey", "phone" => "90"),
    "TM" => array("name" => "Turkmenistan", "phone" => "7370"),
    "TC" => array("name" => "Turks and Caicos Islands", "phone" => "1649"),
    "TV" => array("name" => "Tuvalu", "phone" => "688"),
    "UG" => array("name" => "Uganda", "phone" => "256"),
    "UA" => array("name" => "Ukraine", "phone" => "380"),
    "AE" => array("name" => "United Arab Emirates", "phone" => "971"),
    "GB" => array("name" => "United Kingdom", "phone" => "44"),
    "US" => array("name" => "United States", "phone" => "1"),
    "UM" => array("name" => "United States Minor Outlying Islands", "phone" => "1"),
    "UY" => array("name" => "Uruguay", "phone" => "598"),
    "UZ" => array("name" => "Uzbekistan", "phone" => "998"),
    "VU" => array("name" => "Vanuatu", "phone" => "678"),
    "VE" => array("name" => "Venezuela", "phone" => "58"),
    "VN" => array("name" => "Viet Nam", "phone" => "84"),
    "VG" => array("name" => "Virgin Islands, British", "phone" => "1284"),
    "VI" => array("name" => "Virgin Islands, U.s.", "phone" => "1340"),
    "WF" => array("name" => "Wallis and Futuna", "phone" => "681"),
    "EH" => array("name" => "Western Sahara", "phone" => "212"),
    "YE" => array("name" => "Yemen", "phone" => "967"),
    "ZM" => array("name" => "Zambia", "phone" => "260"),
    "ZW" => array("name" => "Zimbabwe", "phone" => "263")
);
?>

<body class="" id="maincontent">
<!--
<div id="readspeaker_button1" class="rs_skip rsbtn rs_preserve">
    <a rel="nofollow" class="rsbtn_play" accesskey="L" title="Listen to this page using ReadSpeaker"href="//app-as.readspeaker.com/cgi-bin/rsent?customerid=7426&amp;lang=en_uk&amp;readid=maincontent&amp;url=http://188.166.44.182/EVO/Tatmeen/V3/">
    <span class="rsbtn_left rsimg rspart"><span class="rsbtn_text"><span>Listen</span></span></span>
    <span class="rsbtn_right rsimg rsplay rspart"></span>
    </a>
</div>
-->
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header id="header">
    <div class="container">
        <div class="row top">
            <div class="col-md-6 col-sm-6 col-6 left">
                <img src="{{ $lang == "ar" ? asset('/img/MOHAPUAELogoAr.png') : asset('/img/MOHAPUAELogoEn.png') }}" id="mohapLogo">
            </div>
            <div class="col-md-6 col-sm-6  col-6 right">
                <img src="{{ asset('') }}/img/TATMEEN_LOGO.png" id="tatmeenLogo">
            </div>
        </div>
    </div>
</header>

<section id="landing" class="greenbg">
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p class="mb-0">{{ $error }}</p>
                @endforeach
            </div>
            <br/>
        @endif
        @if (Session::has('success'))
            <div class="alert alert-success">
                <p class="mb-0">{{ Session::get('success') }}</p>
            </div>
                <br/>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger">
                <p class="mb-0">{{ Session::get('error') }}</p>
            </div>
                <br/>
        @endif

        <div class="row">

            @if(
                intval(env('VIRTUAL_EVENT_MAX_DATE')) - $dates['2022-06-07'] < 1 &&
                intval(env('VIRTUAL_EVENT_MAX_DATE')) - $dates['2022-06-08'] < 1 &&
                intval(env('VIRTUAL_EVENT_MAX_DATE')) - $dates['2022-06-09'] < 1
            )
                <div class="col-md-12 text-center">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <h1 style="border-left: 0">TATMEEN<br/>ONBOARDING<br/>EVENT</h1>
                    <br/>
                    <br/>
                    <br/>
                    <div class="alert-danger alert">Sorry but all dates are fully booked.</div>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </div>
            @else
                <form action="{{ url('registration/register') }}" method="post">
                    <div class="row mt-5">
                        <div class="col-md-5">
                            <h1>TATMEEN<br/>ONBOARDING<br/>EVENT</h1>
                            <img src="{{asset('img/registration/image2.png')}}" width="100%">
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                            <div class="col-md-12">
                                <br/>
                                <label>Company Name:</label>
                                <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" value="{{ old('company') ? old('company') : '' }}">
                            </div>
                            <div class="col-md-12">
                                <br/>
                                <label>Email Adress:</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ? old('email') : '' }}">
                            </div>
                            <div class="col-md-12">
                                <br/>
                                <label>Country Code:</label>
                                <div class="custom-select">
                                    <select name="country_code" class="form-control dropdown">
                                        @foreach($countries_list as $country)
                                            <?php $d = $country['name'].' (+'. $country['phone'].')'; ?>
                                            <option value="{{ $d }}" {{ old('country_code') ? (old('country_code')==$d ? 'selected': '') : ( $d == 'United Arab Emirates (+971)' ? 'selected' : '') }}>{{ $d }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br/>
                                <label>Mobile Number:</label>
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') ? old('phone') : '' }}">
                            </div>
                            <div class="col-md-12">
                                <br/>
                                <label>Name:</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ? old('name') : '' }}">
                            </div>
                            <div class="col-md-12">
                                <br/>
                                <label>Title:</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ? old('title') : '' }}">
                            </div>
                            <div class="col-md-12">
                                <br/>
                                <label>Date:</label>
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="date">--}}
{{--                                            <label for="2022-06-07"><input type="radio" name="date" value="2022-06-07" id="2022-06-07"> <span>July 07, 2022</span></label>--}}
{{--                                            <span>(Slots Left: {{ intval(env('VIRTUAL_EVENT_MAX_DATE')) - $dates['2022-06-07'] }})</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="date">--}}
{{--                                            <label for="2022-06-08"><input type="radio" name="date" value="2022-06-08" id="2022-06-08"><span>July 08, 2022</span></label>--}}
{{--                                            <span>(Slots Left: {{ intval(env('VIRTUAL_EVENT_MAX_DATE')) - $dates['2022-06-08'] }})</span>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="date">--}}
{{--                                            <label for="2022-06-09"><input type="radio" name="date" value="2022-06-09" id="2022-06-09"><span>July 09, 2022</span></label>--}}
{{--                                            <span>(Slots Left: {{ intval(env('VIRTUAL_EVENT_MAX_DATE')) - $dates['2022-06-09'] }})</span>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="custom-select">
                                    <select name="date" class="form-control dropdown">
                                        <option {{ intval(env('VIRTUAL_EVENT_MAX_DATE')) - $dates['2022-06-07'] < 1 ? 'disabled' : '' }} value="2022-06-07" {{ old('date') ? (old('date')=='2022-06-07' ? 'selected': '') : '' }}>June 07, 2022 (12PM - 5PM Abu Dhabi Time) {{ intval(env('VIRTUAL_EVENT_MAX_DATE')) - $dates['2022-06-07'] < 1 ? '(Fully booked)' : '' }}</option>
                                        <option {{ intval(env('VIRTUAL_EVENT_MAX_DATE')) - $dates['2022-06-08'] < 1 ? 'disabled' : '' }} value="2022-06-08" {{ old('date') ? (old('date')=='2022-06-08' ? 'selected': '') : '' }}>June 08, 2022 (12PM - 5PM Abu Dhabi Time) {{ intval(env('VIRTUAL_EVENT_MAX_DATE')) - $dates['2022-06-08'] < 1 ? '(Fully booked)' : '' }}</option>
                                        <option {{ intval(env('VIRTUAL_EVENT_MAX_DATE')) - $dates['2022-06-09'] < 1 ? 'disabled' : '' }} value="2022-06-09" {{ old('date') ? (old('date')=='2022-06-09' ? 'selected': '') : '' }}>June 09, 2022 (12PM - 5PM Abu Dhabi Time) {{ intval(env('VIRTUAL_EVENT_MAX_DATE')) - $dates['2022-06-09'] < 1 ? '(Fully booked)' : '' }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br/>
                                <input type="submit" class="form-control" value="register" id="registerBt">
                                <br/>
                            </div>
                        </div>
                    </div>
                </form>
            @endif
        </div>

    </div>
</section>
<div class="container-fluid whitebgfull">
    <div class="row">
        <div class="col-md-12 text-center">
            <br/>
            <img src="{{ asset('img/registration/evoteq-red.png') }}">
            <br/>
            <br/>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('') }}/js/vendor/jquery-1.11.2.min.js"></script>
<script src="{{ asset('') }}/js/inview.js"></script>
<script src="{{ asset('') }}/js/vendor/bootstrap.min.js"></script>
<script>

    $('#registerBt').on('click',function(){
        setTimeout(function () {
            $(this).attr('disabled','disabled');
        },300);
    });

    var x, i, j, l, ll, selElmnt, a, b, c;
    /* Look for any elements with the class "custom-select": */
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /* For each element, create a new DIV that will act as the selected item: */
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /* For each element, create a new DIV that will contain the option list: */
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 0; j < ll; j++) {
            /* For each option in the original select element,
            create a new DIV that will act as an option item: */
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /* When an item is clicked, update the original select box,
                and the selected item: */
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /* When the select box is clicked, close any other select boxes,
            and open/close the current select box: */
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {
        /* A function that will close all select boxes in the document,
        except the current select box: */
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }

    /* If the user clicks anywhere outside the select box,
    then close all select boxes: */
    document.addEventListener("click", closeAllSelect);
</script>
</html>


