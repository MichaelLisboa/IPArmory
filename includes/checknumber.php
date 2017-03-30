<?php

// checknumber.php - V 0.2
// (C) 2014 James Nonnemaker (james[at]ustelcom[dot]net) - Feel free to redistribute/modify, but please give me credit.
// Checks that a telephone number's length is appropriate for the selected country (country code).
// It is best to strip out punctuation before passing a number to this function.
// This function will return true if the number would be valid for the region, false if not.
//
// Example: if (checknumber($country,$number)) { true action; } else { false action; }
// You can either paste this function in your script, or "include('checknumber.php');"
//
// This, and other goodies I've written can be found at www.moo.net/code

function checknumber($countrycode,$phonenumber) {
if (($countrycode == '93') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Afghanistan
if (($countrycode == '355') and (strlen($phonenumber) >= '3') and (strlen($phonenumber) <= '9')) { return true; } //Albania
if (($countrycode == '213') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '9')) { return true; } //Algeria
if (($countrycode == '376') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '9')) { return true; } //Andorra
if (($countrycode == '244') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Angola
if (($countrycode == '54') and (strlen($phonenumber) >= '10') and (strlen($phonenumber) <= '10')) { return true; } //Argentina
if (($countrycode == '374') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Armenia
if (($countrycode == '297') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Aruba
if (($countrycode == '61') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '15')) { return true; } //Australia
if (($countrycode == '672') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '6')) { return true; } //Australian External Territories
if (($countrycode == '43') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '13')) { return true; } //Austria
if (($countrycode == '994') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '9')) { return true; } //Azerbaijan
if (($countrycode == '973') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Bahrain
if (($countrycode == '880') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '10')) { return true; } //Bangladesh
if (($countrycode == '375') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '10')) { return true; } //Belarus
if (($countrycode == '32') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '9')) { return true; } //Belgium
if (($countrycode == '501') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Belize
if (($countrycode == '229') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Benin
if (($countrycode == '975') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '8')) { return true; } //Bhutan
if (($countrycode == '591') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Bolivia (Plurinational State of)
if (($countrycode == '599') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Bonaire Sint Eustatius and Saba
if (($countrycode == '387') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Bosnia and Herzegovina
if (($countrycode == '267') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '8')) { return true; } //Botswana
if (($countrycode == '55') and (strlen($phonenumber) >= '10') and (strlen($phonenumber) <= '10')) { return true; } //Brazil
if (($countrycode == '673') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Brunei Darussalam
if (($countrycode == '359') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '9')) { return true; } //Bulgaria
if (($countrycode == '226') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Burkina Faso
if (($countrycode == '257') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Burundi
if (($countrycode == '855') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Cambodia
if (($countrycode == '237') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Cameroon
if (($countrycode == '238') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Cape Verde
if (($countrycode == '236') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Central African Rep.
if (($countrycode == '235') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Chad
if (($countrycode == '56') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '9')) { return true; } //Chile
if (($countrycode == '86') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '12')) { return true; } //China
if (($countrycode == '57') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '10')) { return true; } //Colombia
if (($countrycode == '269') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Comoros
if (($countrycode == '242') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Congo
if (($countrycode == '682') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '5')) { return true; } //Cook Islands
if (($countrycode == '506') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Costa Rica
if (($countrycode == '225') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //C?te d'Ivoire
if (($countrycode == '385') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '12')) { return true; } //Croatia
if (($countrycode == '53') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '8')) { return true; } //Cuba
if (($countrycode == '599') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '8')) { return true; } //Cura?ao
if (($countrycode == '357') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '11')) { return true; } //Cyprus
if (($countrycode == '420') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '12')) { return true; } //Czech Rep.
if (($countrycode == '850') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '17')) { return true; } //Dem. People's Rep. of Korea
if (($countrycode == '243') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '9')) { return true; } //Dem. Rep. of the Congo
if (($countrycode == '45') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Denmark
if (($countrycode == '246') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Diego Garcia
if (($countrycode == '253') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '6')) { return true; } //Djibouti
if (($countrycode == '593') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Ecuador
if (($countrycode == '20') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '9')) { return true; } //Egypt
if (($countrycode == '503') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '11')) { return true; } //El Salvador
if (($countrycode == '240') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Equatorial Guinea
if (($countrycode == '291') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Eritrea
if (($countrycode == '372') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '10')) { return true; } //Estonia
if (($countrycode == '251') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Ethiopia
if (($countrycode == '500') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '5')) { return true; } //Falkland Islands (Malvinas)
if (($countrycode == '298') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '6')) { return true; } //Faroe Islands
if (($countrycode == '679') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Fiji
if (($countrycode == '358') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '12')) { return true; } //Finland
if (($countrycode == '33') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //France
if (($countrycode == '262') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //French Departments and Territories in the Indian Ocean
if (($countrycode == '594') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //French Guiana
if (($countrycode == '689') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '6')) { return true; } //French Polynesia
if (($countrycode == '241') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '7')) { return true; } //Gabon
if (($countrycode == '220') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Gambia
if (($countrycode == '995') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Georgia
if (($countrycode == '49') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '13')) { return true; } //Germany
if (($countrycode == '233') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '9')) { return true; } //Ghana
if (($countrycode == '350') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Gibraltar
if (($countrycode == '30') and (strlen($phonenumber) >= '10') and (strlen($phonenumber) <= '10')) { return true; } //Greece
if (($countrycode == '299') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '6')) { return true; } //Greenland
if (($countrycode == '590') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Guadeloupe
if (($countrycode == '502') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Guatemala
if (($countrycode == '224') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Guinea
if (($countrycode == '245') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Guinea-Bissau
if (($countrycode == '592') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Guyana
if (($countrycode == '509') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Haiti
if (($countrycode == '504') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Honduras
if (($countrycode == '852') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '9')) { return true; } //Hong Kong China
if (($countrycode == '36') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '9')) { return true; } //Hungary
if (($countrycode == '354') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '9')) { return true; } //Iceland
if (($countrycode == '91') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '10')) { return true; } //India
if (($countrycode == '62') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '10')) { return true; } //Indonesia
if (($countrycode == '870') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Inmarsat SNAC
if (($countrycode == '800') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //International Freephone Service
if (($countrycode == '882') and (strlen($phonenumber) >= '0') and (strlen($phonenumber) <= '0')) { return true; } //International Networks shared code
if (($countrycode == '883') and (strlen($phonenumber) >= '0') and (strlen($phonenumber) <= '0')) { return true; } //International Networks shared code
if (($countrycode == '979') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //International Premium Rate Service (IPRS)
if (($countrycode == '808') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //International Shared Cost Service (ISCS)
if (($countrycode == '98') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '10')) { return true; } //Iran (Islamic Republic of)
if (($countrycode == '964') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '10')) { return true; } //Iraq
if (($countrycode == '353') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '11')) { return true; } //Ireland
if (($countrycode == '972') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '9')) { return true; } //Israel
if (($countrycode == '39') and (strlen($phonenumber) >= '1') and (strlen($phonenumber) <= '11')) { return true; } //Italy
if (($countrycode == '81') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '13')) { return true; } //Japan
if (($countrycode == '962') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '9')) { return true; } //Jordan
if (($countrycode == '7') and (strlen($phonenumber) >= '10') and (strlen($phonenumber) <= '10')) { return true; } //Kazakhstan
if (($countrycode == '254') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '10')) { return true; } //Kenya
if (($countrycode == '686') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '5')) { return true; } //Kiribati
if (($countrycode == '82') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '11')) { return true; } //Korea (Rep. of)
if (($countrycode == '965') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '8')) { return true; } //Kuwait
if (($countrycode == '996') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Kyrgyzstan
if (($countrycode == '856') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '10')) { return true; } //Lao P.D.R.
if (($countrycode == '371') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '8')) { return true; } //Latvia
if (($countrycode == '961') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '8')) { return true; } //Lebanon
if (($countrycode == '266') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Lesotho
if (($countrycode == '231') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '8')) { return true; } //Liberia
if (($countrycode == '218') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '9')) { return true; } //Libya
if (($countrycode == '423') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '9')) { return true; } //Liechtenstein
if (($countrycode == '370') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Lithuania
if (($countrycode == '352') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '11')) { return true; } //Luxembourg
if (($countrycode == '853') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '8')) { return true; } //Macao China
if (($countrycode == '261') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '10')) { return true; } //Madagascar
if (($countrycode == '265') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '8')) { return true; } //Malawi
if (($countrycode == '60') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '9')) { return true; } //Malaysia
if (($countrycode == '960') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Maldives
if (($countrycode == '223') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Mali
if (($countrycode == '356') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Malta
if (($countrycode == '692') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Marshall Islands
if (($countrycode == '596') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Martinique
if (($countrycode == '222') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Mauritania
if (($countrycode == '230') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Mauritius
if (($countrycode == '52') and (strlen($phonenumber) >= '10') and (strlen($phonenumber) <= '10')) { return true; } //Mexico
if (($countrycode == '691') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Micronesia
if (($countrycode == '373') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Moldova (Republic of)
if (($countrycode == '377') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '9')) { return true; } //Monaco
if (($countrycode == '976') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '8')) { return true; } //Mongolia
if (($countrycode == '382') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '12')) { return true; } //Montenegro
if (($countrycode == '212') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Morocco
if (($countrycode == '258') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '9')) { return true; } //Mozambique
if (($countrycode == '95') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '9')) { return true; } //Myanmar
if (($countrycode == '264') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '10')) { return true; } //Namibia
if (($countrycode == '674') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '7')) { return true; } //Nauru
if (($countrycode == '977') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '9')) { return true; } //Nepal
if (($countrycode == '31') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Netherlands
if (($countrycode == '687') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '6')) { return true; } //New Caledonia
if (($countrycode == '64') and (strlen($phonenumber) >= '3') and (strlen($phonenumber) <= '10')) { return true; } //New Zealand
if (($countrycode == '505') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Nicaragua
if (($countrycode == '227') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Niger
if (($countrycode == '234') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '10')) { return true; } //Nigeria
if (($countrycode == '683') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '4')) { return true; } //Niue
if (($countrycode == '47') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '8')) { return true; } //Norway
if (($countrycode == '968') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '8')) { return true; } //Oman
if (($countrycode == '92') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '11')) { return true; } //Pakistan
if (($countrycode == '680') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Palau
if (($countrycode == '507') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '8')) { return true; } //Panama
if (($countrycode == '675') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '11')) { return true; } //Papua New Guinea
if (($countrycode == '595') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '9')) { return true; } //Paraguay
if (($countrycode == '51') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '11')) { return true; } //Peru
if (($countrycode == '63') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '10')) { return true; } //Philippines
if (($countrycode == '48') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '9')) { return true; } //Poland
if (($countrycode == '351') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '11')) { return true; } //Portugal
if (($countrycode == '974') and (strlen($phonenumber) >= '3') and (strlen($phonenumber) <= '8')) { return true; } //Qatar
if (($countrycode == '40') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Romania
if (($countrycode == '7') and (strlen($phonenumber) >= '10') and (strlen($phonenumber) <= '10')) { return true; } //Russian Federation
if (($countrycode == '250') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Rwanda
if (($countrycode == '247') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '4')) { return true; } //Saint Helena Ascension and Tristan da Cunha
if (($countrycode == '290') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '4')) { return true; } //Saint Helena Ascension and Tristan da Cunha
if (($countrycode == '508') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '6')) { return true; } //Saint Pierre and Miquelon
if (($countrycode == '685') and (strlen($phonenumber) >= '3') and (strlen($phonenumber) <= '7')) { return true; } //Samoa
if (($countrycode == '378') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '10')) { return true; } //San Marino
if (($countrycode == '239') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Sao Tome and Principe
if (($countrycode == '966') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '9')) { return true; } //Saudi Arabia
if (($countrycode == '221') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Senegal
if (($countrycode == '381') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '12')) { return true; } //Serbia
if (($countrycode == '248') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Seychelles
if (($countrycode == '232') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Sierra Leone
if (($countrycode == '65') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '12')) { return true; } //Singapore
if (($countrycode == '421') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '9')) { return true; } //Slovakia
if (($countrycode == '386') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Slovenia
if (($countrycode == '677') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '5')) { return true; } //Solomon Islands
if (($countrycode == '252') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '8')) { return true; } //Somalia
if (($countrycode == '27') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //South Africa
if (($countrycode == '211') and (strlen($phonenumber) >= '1') and (strlen($phonenumber) <= '15')) { return true; } //South Sudan
if (($countrycode == '34') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Spain
if (($countrycode == '94') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Sri Lanka
if (($countrycode == '249') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Sudan
if (($countrycode == '597') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '7')) { return true; } //Suriname
if (($countrycode == '268') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '8')) { return true; } //Swaziland
if (($countrycode == '46') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '13')) { return true; } //Sweden
if (($countrycode == '41') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '12')) { return true; } //Switzerland
if (($countrycode == '963') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '10')) { return true; } //Syrian Arab Republic
if (($countrycode == '886') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '9')) { return true; } //Taiwan China
if (($countrycode == '992') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Tajikistan
if (($countrycode == '255') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Tanzania
if (($countrycode == '888') and (strlen($phonenumber) >= '1') and (strlen($phonenumber) <= '15')) { return true; } //Telecommunications for Disaster Relief (TDR)
if (($countrycode == '66') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '9')) { return true; } //Thailand
if (($countrycode == '389') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '9')) { return true; } //The Former Yugoslav Republic of Macedonia
if (($countrycode == '670') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '7')) { return true; } //Timor-Leste
if (($countrycode == '228') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Togo
if (($countrycode == '690') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '4')) { return true; } //Tokelau
if (($countrycode == '676') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '7')) { return true; } //Tonga
if (($countrycode == '991') and (strlen($phonenumber) >= '1') and (strlen($phonenumber) <= '15')) { return true; } //Trial of a proposed new international service shared code
if (($countrycode == '216') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Tunisia
if (($countrycode == '90') and (strlen($phonenumber) >= '10') and (strlen($phonenumber) <= '10')) { return true; } //Turkey
if (($countrycode == '993') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '8')) { return true; } //Turkmenistan
if (($countrycode == '688') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '6')) { return true; } //Tuvalu
if (($countrycode == '256') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Uganda
if (($countrycode == '380') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Ukraine
if (($countrycode == '971') and (strlen($phonenumber) >= '8') and (strlen($phonenumber) <= '9')) { return true; } //United Arab Emirates
if (($countrycode == '44') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '10')) { return true; } //United Kingdom
if (($countrycode == '1') and (strlen($phonenumber) >= '10') and (strlen($phonenumber) <= '10')) { return true; } //United States / Canada / Many Island Nations
if (($countrycode == '878') and (strlen($phonenumber) >= '1') and (strlen($phonenumber) <= '15')) { return true; } //Universal Personal Telecommunication (UPT)
if (($countrycode == '598') and (strlen($phonenumber) >= '4') and (strlen($phonenumber) <= '11')) { return true; } //Uruguay
if (($countrycode == '998') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Uzbekistan
if (($countrycode == '678') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '7')) { return true; } //Vanuatu
if (($countrycode == '39') and (strlen($phonenumber) >= '1') and (strlen($phonenumber) <= '11')) { return true; } //Vatican
if (($countrycode == '379') and (strlen($phonenumber) >= '1') and (strlen($phonenumber) <= '11')) { return true; } //Vatican
if (($countrycode == '58') and (strlen($phonenumber) >= '10') and (strlen($phonenumber) <= '10')) { return true; } //Venezuela (Bolivarian Republic of)
if (($countrycode == '84') and (strlen($phonenumber) >= '7') and (strlen($phonenumber) <= '10')) { return true; } //Viet Nam
if (($countrycode == '681') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '6')) { return true; } //Wallis and Futuna
if (($countrycode == '967') and (strlen($phonenumber) >= '6') and (strlen($phonenumber) <= '9')) { return true; } //Yemen
if (($countrycode == '260') and (strlen($phonenumber) >= '9') and (strlen($phonenumber) <= '9')) { return true; } //Zambia
if (($countrycode == '263') and (strlen($phonenumber) >= '5') and (strlen($phonenumber) <= '10')) { return true; } //Zimbabwe

return false;
}

?>