<?php declare(strict_types=1);

namespace Somnambulist\Domain\Entities\Types\Geography;

use Somnambulist\Domain\Entities\AbstractMultiton;

/**
 * Class Country
 *
 * @package    Somnambulist\Domain\Entities\Types\Geography
 * @subpackage Somnambulist\Domain\Entities\Types\Geography\Country
 */
final class Country extends AbstractMultiton
{

    /**
     * @var string
     */
    private $name;

    /**
     * Constructor.
     *
     * @param string $code
     * @param string $name
     */
    protected function __construct(string $code, string $name)
    {
        $this->name = $name;

        parent::__construct($code);
    }

    protected static function initializeMembers()
    {
        foreach (static::$mappings as $code => $name) {
            new static($code, $name);
        }
    }

    public function toString(): string
    {
        return (string)$this->name();
    }

    public function equals(object $object): bool
    {
        if (get_class($object) === get_class($this)) {
            return $object->code() === $this->code() && $object->name() === $this->name();
        }

        return false;
    }

    public function code(): string
    {
        return $this->key();
    }

    public function name(): string
    {
        return $this->name;
    }

    private static $mappings = [
        'ABW' => 'Aruba',
        'AFG' => 'Afghanistan',
        'AGO' => 'Angola',
        'AIA' => 'Anguilla',
        'ALA' => 'Åland Islands',
        'ALB' => 'Albania',
        'AND' => 'Andorra',
        'ANT' => 'Netherlands Antilles',
        'ARE' => 'United Arab Emirates',
        'ARG' => 'Argentina',
        'ARM' => 'Armenia',
        'ASM' => 'American Samoa',
        'ATA' => 'Antarctica',
        'ATF' => 'French Southern Territories',
        'ATG' => 'Antigua and Barbuda',
        'AUS' => 'Australia',
        'AUT' => 'Austria',
        'AZE' => 'Azerbaijan',
        'BDI' => 'Burundi',
        'BEL' => 'Belgium',
        'BEN' => 'Benin',
        'BES' => 'Bonaire, Saint Eustatius and Saba',
        'BFA' => 'Burkina Faso',
        'BGD' => 'Bangladesh',
        'BGR' => 'Bulgaria',
        'BHR' => 'Bahrain',
        'BHS' => 'Bahamas',
        'BIH' => 'Bosnia and Herzegovina',
        'BLM' => 'Saint Barthélemy',
        'BLR' => 'Belarus',
        'BLZ' => 'Belize',
        'BMU' => 'Bermuda',
        'BOL' => 'Bolivia',
        'BRA' => 'Brazil',
        'BRB' => 'Barbados',
        'BRN' => 'Brunei Darussalam',
        'BTN' => 'Bhutan',
        'BVT' => 'Bouvet Island',
        'BWA' => 'Botswana',
        'CAF' => 'Central African Republic',
        'CAN' => 'Canada',
        'CCK' => 'Cocos (Keeling) Islands',
        'CHE' => 'Switzerland',
        'CHL' => 'Chile',
        'CHN' => 'China',
        'CIV' => 'Cote D\'Ivoire',
        'CMR' => 'Cameroon',
        'COD' => 'Congo, the Democratic Republic of the',
        'COG' => 'Congo',
        'COK' => 'Cook Islands',
        'COL' => 'Colombia',
        'COM' => 'Comoros',
        'CPV' => 'Cape Verde',
        'CRI' => 'Costa Rica',
        'CUB' => 'Cuba',
        'CUW' => 'Curaçao',
        'CXR' => 'Christmas Island',
        'CYM' => 'Cayman Islands',
        'CYP' => 'Cyprus',
        'CZE' => 'Czech Republic',
        'DEU' => 'Germany',
        'DJI' => 'Djibouti',
        'DMA' => 'Dominica',
        'DNK' => 'Denmark',
        'DOM' => 'Dominican Republic',
        'DZA' => 'Algeria',
        'ECU' => 'Ecuador',
        'EGY' => 'Egypt',
        'ERI' => 'Eritrea',
        'ESH' => 'Western Sahara',
        'ESP' => 'Spain',
        'EST' => 'Estonia',
        'ETH' => 'Ethiopia',
        'FIN' => 'Finland',
        'FJI' => 'Fiji',
        'FLK' => 'Falkland Islands (Malvinas)',
        'FRA' => 'France',
        'FRO' => 'Faroe Islands',
        'FSM' => 'Micronesia, Federated States of',
        'GAB' => 'Gabon',
        'GBR' => 'United Kingdom',
        'GEO' => 'Georgia',
        'GGY' => 'Guernsey',
        'GHA' => 'Ghana',
        'GIB' => 'Gibraltar',
        'GIN' => 'Guinea',
        'GLP' => 'Guadeloupe',
        'GMB' => 'Gambia',
        'GNB' => 'Guinea-Bissau',
        'GNQ' => 'Equatorial Guinea',
        'GRC' => 'Greece',
        'GRD' => 'Grenada',
        'GRL' => 'Greenland',
        'GTM' => 'Guatemala',
        'GUF' => 'French Guiana',
        'GUM' => 'Guam',
        'GUY' => 'Guyana',
        'HKG' => 'Hong Kong',
        'HMD' => 'Heard Island and Mcdonald Islands',
        'HND' => 'Honduras',
        'HRV' => 'Croatia',
        'HTI' => 'Haiti',
        'HUN' => 'Hungary',
        'IDN' => 'Indonesia',
        'IMN' => 'Isle of Man',
        'IND' => 'India',
        'IOT' => 'British Indian Ocean Territory',
        'IRL' => 'Ireland',
        'IRN' => 'Iran, Islamic Republic of',
        'IRQ' => 'Iraq',
        'ISL' => 'Iceland',
        'ISR' => 'Israel',
        'ITA' => 'Italy',
        'JAM' => 'Jamaica',
        'JEY' => 'Jersey',
        'JOR' => 'Jordan',
        'JPN' => 'Japan',
        'KAZ' => 'Kazakhstan',
        'KEN' => 'Kenya',
        'KGZ' => 'Kyrgyzstan',
        'KHM' => 'Cambodia',
        'KIR' => 'Kiribati',
        'KNA' => 'Saint Kitts and Nevis',
        'KOR' => 'Korea, Republic of',
        'KWT' => 'Kuwait',
        'LAO' => 'Lao People\'s Democratic Republic',
        'LBN' => 'Lebanon',
        'LBR' => 'Liberia',
        'LBY' => 'Libyan Arab Jamahiriya',
        'LCA' => 'Saint Lucia',
        'LIE' => 'Liechtenstein',
        'LKA' => 'Sri Lanka',
        'LSO' => 'Lesotho',
        'LTU' => 'Lithuania',
        'LUX' => 'Luxembourg',
        'LVA' => 'Latvia',
        'MAC' => 'Macao',
        'MAF' => 'Saint Martin (French part)',
        'MAR' => 'Morocco',
        'MCO' => 'Monaco',
        'MDA' => 'Moldova, Republic of',
        'MDG' => 'Madagascar',
        'MDV' => 'Maldives',
        'MEX' => 'Mexico',
        'MHL' => 'Marshall Islands',
        'MKD' => 'Macedonia, the Former Yugoslav Republic of',
        'MLI' => 'Mali',
        'MLT' => 'Malta',
        'MMR' => 'Myanmar',
        'MNE' => 'Montenegro',
        'MNG' => 'Mongolia',
        'MNP' => 'Northern Mariana Islands',
        'MOZ' => 'Mozambique',
        'MRT' => 'Mauritania',
        'MSR' => 'Montserrat',
        'MTQ' => 'Martinique',
        'MUS' => 'Mauritius',
        'MWI' => 'Malawi',
        'MYS' => 'Malaysia',
        'MYT' => 'Mayotte',
        'NAM' => 'Namibia',
        'NCL' => 'New Caledonia',
        'NER' => 'Niger',
        'NFK' => 'Norfolk Island',
        'NGA' => 'Nigeria',
        'NIC' => 'Nicaragua',
        'NIU' => 'Niue',
        'NLD' => 'Netherlands',
        'NOR' => 'Norway',
        'NPL' => 'Nepal',
        'NRU' => 'Nauru',
        'NZL' => 'New Zealand',
        'OMN' => 'Oman',
        'PAK' => 'Pakistan',
        'PAN' => 'Panama',
        'PCN' => 'Pitcairn',
        'PER' => 'Peru',
        'PHL' => 'Philippines',
        'PLW' => 'Palau',
        'PNG' => 'Papua New Guinea',
        'POL' => 'Poland',
        'PRI' => 'Puerto Rico',
        'PRK' => 'Korea, Democratic People\'s Republic of',
        'PRT' => 'Portugal',
        'PRY' => 'Paraguay',
        'PSE' => 'Palestinian Territory, Occupied',
        'PYF' => 'French Polynesia',
        'QAT' => 'Qatar',
        'REU' => 'Reunion',
        'ROU' => 'Romania',
        'RUS' => 'Russian Federation',
        'RWA' => 'Rwanda',
        'SAU' => 'Saudi Arabia',
        'SCG' => 'Serbia and Montenegro',
        'SDN' => 'Sudan',
        'SEN' => 'Senegal',
        'SGP' => 'Singapore',
        'SGS' => 'South Georgia and the South Sandwich Islands',
        'SHN' => 'Saint Helena',
        'SJM' => 'Svalbard and Jan Mayen',
        'SLB' => 'Solomon Islands',
        'SLE' => 'Sierra Leone',
        'SLV' => 'El Salvador',
        'SMR' => 'San Marino',
        'SOM' => 'Somalia',
        'SPM' => 'Saint Pierre and Miquelon',
        'SRB' => 'Serbia',
        'SSD' => 'South Sudan',
        'STP' => 'Sao Tome and Principe',
        'SUR' => 'Suriname',
        'SVK' => 'Slovakia',
        'SVN' => 'Slovenia',
        'SWE' => 'Sweden',
        'SWZ' => 'Swaziland',
        'SXM' => 'Sint Maarten (Dutch part)',
        'SYC' => 'Seychelles',
        'SYR' => 'Syrian Arab Republic',
        'TCA' => 'Turks and Caicos Islands',
        'TCD' => 'Chad',
        'TGO' => 'Togo',
        'THA' => 'Thailand',
        'TJK' => 'Tajikistan',
        'TKL' => 'Tokelau',
        'TKM' => 'Turkmenistan',
        'TLS' => 'Timor-Leste',
        'TON' => 'Tonga',
        'TTO' => 'Trinidad and Tobago',
        'TUN' => 'Tunisia',
        'TUR' => 'Turkey',
        'TUV' => 'Tuvalu',
        'TWN' => 'Taiwan, Province of China',
        'TZA' => 'Tanzania, United Republic of',
        'UGA' => 'Uganda',
        'UKR' => 'Ukraine',
        'UMI' => 'United States Minor Outlying Islands',
        'URY' => 'Uruguay',
        'USA' => 'United States of America',
        'UZB' => 'Uzbekistan',
        'VAT' => 'Holy See (Vatican City State)',
        'VCT' => 'Saint Vincent and the Grenadines',
        'VEN' => 'Venezuela',
        'VGB' => 'Virgin Islands, British',
        'VIR' => 'Virgin Islands, U.s.',
        'VNM' => 'Viet Nam',
        'VUT' => 'Vanuatu',
        'WLF' => 'Wallis and Futuna',
        'WSM' => 'Samoa',
        'YEM' => 'Yemen',
        'ZAF' => 'South Africa',
        'ZMB' => 'Zambia',
        'ZWE' => 'Zimbabwe',
        // the ranges AAA to AAZ, QMA to QZZ, XAA to XZZ, and ZZA to ZZZ are reserved for user use
        // see: https://www.iso.org/glossary-for-iso-3166.html
        'ZZZ' => 'Worldwide',
    ];
}
