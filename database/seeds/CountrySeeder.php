<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder {

    public function run () {
        $countries = $this->getCountries();
        DB::table('Country')->insert(
            $countries
        );
    }

    private function getCountries() {
        return [
            ['id' => 1, 'name' => 'Andorra', 'iso2' => 'AD', 'iso3' => 'AND', 'isoNumeric' => '020', 'fipsCode' => 'AN', 'currencyId' => 47, 'capital' => 'Andorra la Vella', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 2, 'name' => 'United Arab Emirates', 'iso2' => 'AE', 'iso3' => 'ARE', 'isoNumeric' => '784', 'fipsCode' => 'AE', 'currencyId' => 1, 'capital' => 'Abu Dhabi', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 3, 'name' => 'Afghanistan', 'iso2' => 'AF', 'iso3' => 'AFG', 'isoNumeric' => '004', 'fipsCode' => 'AF', 'currencyId' => 2, 'capital' => 'Kabul', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 4, 'name' => 'Antigua and Barbuda', 'iso2' => 'AG', 'iso3' => 'ATG', 'isoNumeric' => '028', 'fipsCode' => 'AC', 'currencyId' => 161, 'capital' => 'St. Johns', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 5, 'name' => 'Anguilla', 'iso2' => 'AI', 'iso3' => 'AIA', 'isoNumeric' => '660', 'fipsCode' => 'AV', 'currencyId' => 161, 'capital' => 'The Valley', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 6, 'name' => 'Albania', 'iso2' => 'AL', 'iso3' => 'ALB', 'isoNumeric' => '008', 'fipsCode' => 'AL', 'currencyId' => 3, 'capital' => 'Tirana', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 7, 'name' => 'Armenia', 'iso2' => 'AM', 'iso3' => 'ARM', 'isoNumeric' => '051', 'fipsCode' => 'AM', 'currencyId' => 4, 'capital' => 'Yerevan', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 8, 'name' => 'Angola', 'iso2' => 'AO', 'iso3' => 'AGO', 'isoNumeric' => '024', 'fipsCode' => 'AO', 'currencyId' => 6, 'capital' => 'Luanda', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 9, 'name' => 'Antarctica', 'iso2' => 'AQ', 'iso3' => 'ATA', 'isoNumeric' => '010', 'fipsCode' => 'AY', 'currencyId' => NULL, 'capital' => '', 'continentId' => 2, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 10, 'name' => 'Argentina', 'iso2' => 'AR', 'iso3' => 'ARG', 'isoNumeric' => '032', 'fipsCode' => 'AR', 'currencyId' => 7, 'capital' => 'Buenos Aires', 'continentId' => 7, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 11, 'name' => 'American Samoa', 'iso2' => 'AS', 'iso3' => 'ASM', 'isoNumeric' => '016', 'fipsCode' => 'AQ', 'currencyId' => 151, 'capital' => 'Pago Pago', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '1'],

            ['id' => 12, 'name' => 'Austria', 'iso2' => 'AT', 'iso3' => 'AUT', 'isoNumeric' => '040', 'fipsCode' => 'AU', 'currencyId' => 47, 'capital' => 'Vienna', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 13, 'name' => 'Australia', 'iso2' => 'AU', 'iso3' => 'AUS', 'isoNumeric' => '036', 'fipsCode' => 'AS', 'currencyId' => 8, 'capital' => 'Canberra', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 14, 'name' => 'Aruba', 'iso2' => 'AW', 'iso3' => 'ABW', 'isoNumeric' => '533', 'fipsCode' => 'AA', 'currencyId' => 9, 'capital' => 'Oranjestad', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 15, 'name' => 'Åland', 'iso2' => 'AX', 'iso3' => 'ALA', 'isoNumeric' => '248', 'fipsCode' => '', 'currencyId' => 47, 'capital' => 'Mariehamn', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 16, 'name' => 'Azerbaijan', 'iso2' => 'AZ', 'iso3' => 'AZE', 'isoNumeric' => '031', 'fipsCode' => 'AJ', 'currencyId' => 10, 'capital' => 'Baku', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 17, 'name' => 'Bosnia and Herzegovina', 'iso2' => 'BA', 'iso3' => 'BIH', 'isoNumeric' => '070', 'fipsCode' => 'BK', 'currencyId' => 11, 'capital' => 'Sarajevo', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 18, 'name' => 'Barbados', 'iso2' => 'BB', 'iso3' => 'BRB', 'isoNumeric' => '052', 'fipsCode' => 'BB', 'currencyId' => 12, 'capital' => 'Bridgetown', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 19, 'name' => 'Bangladesh', 'iso2' => 'BD', 'iso3' => 'BGD', 'isoNumeric' => '050', 'fipsCode' => 'BG', 'currencyId' => 13, 'capital' => 'Dhaka', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 20, 'name' => 'Belgium', 'iso2' => 'BE', 'iso3' => 'BEL', 'isoNumeric' => '056', 'fipsCode' => 'BE', 'currencyId' => 47, 'capital' => 'Brussels', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 21, 'name' => 'Burkina Faso', 'iso2' => 'BF', 'iso3' => 'BFA', 'isoNumeric' => '854', 'fipsCode' => 'UV', 'currencyId' => 163, 'capital' => 'Ouagadougou', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 22, 'name' => 'Bulgaria', 'iso2' => 'BG', 'iso3' => 'BGR', 'isoNumeric' => '100', 'fipsCode' => 'BU', 'currencyId' => 14, 'capital' => 'Sofia', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 23, 'name' => 'Bahrain', 'iso2' => 'BH', 'iso3' => 'BHR', 'isoNumeric' => '048', 'fipsCode' => 'BA', 'currencyId' => 15, 'capital' => 'Manama', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 24, 'name' => 'Burundi', 'iso2' => 'BI', 'iso3' => 'BDI', 'isoNumeric' => '108', 'fipsCode' => 'BY', 'currencyId' => 16, 'capital' => 'Bujumbura', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 25, 'name' => 'Benin', 'iso2' => 'BJ', 'iso3' => 'BEN', 'isoNumeric' => '204', 'fipsCode' => 'BN', 'currencyId' => 163, 'capital' => 'Porto-Novo', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 26, 'name' => 'Saint Barthélemy', 'iso2' => 'BL', 'iso3' => 'BLM', 'isoNumeric' => '652', 'fipsCode' => 'TB', 'currencyId' => 47, 'capital' => 'Gustavia', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 27, 'name' => 'Bermuda', 'iso2' => 'BM', 'iso3' => 'BMU', 'isoNumeric' => '060', 'fipsCode' => 'BD', 'currencyId' => 17, 'capital' => 'Hamilton', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 28, 'name' => 'Brunei', 'iso2' => 'BN', 'iso3' => 'BRN', 'isoNumeric' => '096', 'fipsCode' => 'BX', 'currencyId' => 18, 'capital' => 'Bandar Seri Begawan', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 29, 'name' => 'Bolivia', 'iso2' => 'BO', 'iso3' => 'BOL', 'isoNumeric' => '068', 'fipsCode' => 'BL', 'currencyId' => 19, 'capital' => 'Sucre', 'continentId' => 7, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 30, 'name' => 'Bonaire', 'iso2' => 'BQ', 'iso3' => 'BES', 'isoNumeric' => '535', 'fipsCode' => '', 'currencyId' => 151, 'capital' => '', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 31, 'name' => 'Brazil', 'iso2' => 'BR', 'iso3' => 'BRA', 'isoNumeric' => '076', 'fipsCode' => 'BR', 'currencyId' => 20, 'capital' => 'Brasília', 'continentId' => 7, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 32, 'name' => 'Bahamas', 'iso2' => 'BS', 'iso3' => 'BHS', 'isoNumeric' => '044', 'fipsCode' => 'BF', 'currencyId' => 21, 'capital' => 'Nassau', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 33, 'name' => 'Bhutan', 'iso2' => 'BT', 'iso3' => 'BTN', 'isoNumeric' => '064', 'fipsCode' => 'BT', 'currencyId' => 23, 'capital' => 'Thimphu', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 34, 'name' => 'Bouvet Island', 'iso2' => 'BV', 'iso3' => 'BVT', 'isoNumeric' => '074', 'fipsCode' => 'BV', 'currencyId' => 110, 'capital' => '', 'continentId' => 2, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 35, 'name' => 'Botswana', 'iso2' => 'BW', 'iso3' => 'BWA', 'isoNumeric' => '072', 'fipsCode' => 'BC', 'currencyId' => 24, 'capital' => 'Gaborone', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 36, 'name' => 'Belarus', 'iso2' => 'BY', 'iso3' => 'BLR', 'isoNumeric' => '112', 'fipsCode' => 'BO', 'currencyId' => 25, 'capital' => 'Minsk', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 37, 'name' => 'Belize', 'iso2' => 'BZ', 'iso3' => 'BLZ', 'isoNumeric' => '084', 'fipsCode' => 'BH', 'currencyId' => 26, 'capital' => 'Belmopan', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 38, 'name' => 'Canada', 'iso2' => 'CA', 'iso3' => 'CAN', 'isoNumeric' => '124', 'fipsCode' => 'CA', 'currencyId' => 27, 'capital' => 'Ottawa', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 39, 'name' => 'Cocos [Keeling] Islands', 'iso2' => 'CC', 'iso3' => 'CCK', 'isoNumeric' => '166', 'fipsCode' => 'CK', 'currencyId' => 8, 'capital' => 'West Island', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 40, 'name' => 'Democratic Republic of the Con', 'iso2' => 'CD', 'iso3' => 'COD', 'isoNumeric' => '180', 'fipsCode' => 'CG', 'currencyId' => 28, 'capital' => 'Kinshasa', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 41, 'name' => 'Central African Republic', 'iso2' => 'CF', 'iso3' => 'CAF', 'isoNumeric' => '140', 'fipsCode' => 'CT', 'currencyId' => 158, 'capital' => 'Bangui', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 42, 'name' => 'Republic of the Congo', 'iso2' => 'CG', 'iso3' => 'COG', 'isoNumeric' => '178', 'fipsCode' => 'CF', 'currencyId' => 158, 'capital' => 'Brazzaville', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 43, 'name' => 'Switzerland', 'iso2' => 'CH', 'iso3' => 'CHE', 'isoNumeric' => '756', 'fipsCode' => 'SZ', 'currencyId' => 29, 'capital' => 'Berne', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 44, 'name' => 'Ivory Coast', 'iso2' => 'CI', 'iso3' => 'CIV', 'isoNumeric' => '384', 'fipsCode' => 'IV', 'currencyId' => 163, 'capital' => 'Yamoussoukro', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 45, 'name' => 'Cook Islands', 'iso2' => 'CK', 'iso3' => 'COK', 'isoNumeric' => '184', 'fipsCode' => 'CW', 'currencyId' => 112, 'capital' => 'Avarua', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 46, 'name' => 'Chile', 'iso2' => 'CL', 'iso3' => 'CHL', 'isoNumeric' => '152', 'fipsCode' => 'CI', 'currencyId' => 31, 'capital' => 'Santiago', 'continentId' => 7, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 47, 'name' => 'Cameroon', 'iso2' => 'CM', 'iso3' => 'CMR', 'isoNumeric' => '120', 'fipsCode' => 'CM', 'currencyId' => 158, 'capital' => 'Yaoundé', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 48, 'name' => 'China', 'iso2' => 'CN', 'iso3' => 'CHN', 'isoNumeric' => '156', 'fipsCode' => 'CH', 'currencyId' => 32, 'capital' => 'Beijing', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 49, 'name' => 'Colombia', 'iso2' => 'CO', 'iso3' => 'COL', 'isoNumeric' => '170', 'fipsCode' => 'CO', 'currencyId' => 33, 'capital' => 'Bogotá', 'continentId' => 7, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 50, 'name' => 'Costa Rica', 'iso2' => 'CR', 'iso3' => 'CRI', 'isoNumeric' => '188', 'fipsCode' => 'CS', 'currencyId' => 34, 'capital' => 'San José', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 51, 'name' => 'Cuba', 'iso2' => 'CU', 'iso3' => 'CUB', 'isoNumeric' => '192', 'fipsCode' => 'CU', 'currencyId' => 36, 'capital' => 'Havana', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 52, 'name' => 'Cape Verde', 'iso2' => 'CV', 'iso3' => 'CPV', 'isoNumeric' => '132', 'fipsCode' => 'CV', 'currencyId' => 37, 'capital' => 'Praia', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 53, 'name' => 'Curacao', 'iso2' => 'CW', 'iso3' => 'CUW', 'isoNumeric' => '531', 'fipsCode' => 'UC', 'currencyId' => 5, 'capital' => 'Willemstad', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 54, 'name' => 'Christmas Island', 'iso2' => 'CX', 'iso3' => 'CXR', 'isoNumeric' => '162', 'fipsCode' => 'KT', 'currencyId' => 8, 'capital' => 'The Settlement', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 55, 'name' => 'Cyprus', 'iso2' => 'CY', 'iso3' => 'CYP', 'isoNumeric' => '196', 'fipsCode' => 'CY', 'currencyId' => 47, 'capital' => 'Nicosia', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 56, 'name' => 'Czech Republic', 'iso2' => 'CZ', 'iso3' => 'CZE', 'isoNumeric' => '203', 'fipsCode' => 'EZ', 'currencyId' => 38, 'capital' => 'Prague', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 57, 'name' => 'Germany', 'iso2' => 'DE', 'iso3' => 'DEU', 'isoNumeric' => '276', 'fipsCode' => 'GM', 'currencyId' => 47, 'capital' => 'Berlin', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 58, 'name' => 'Djibouti', 'iso2' => 'DJ', 'iso3' => 'DJI', 'isoNumeric' => '262', 'fipsCode' => 'DJ', 'currencyId' => 39, 'capital' => 'Djibouti', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 59, 'name' => 'Denmark', 'iso2' => 'DK', 'iso3' => 'DNK', 'isoNumeric' => '208', 'fipsCode' => 'DA', 'currencyId' => 40, 'capital' => 'Copenhagen', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 60, 'name' => 'Dominica', 'iso2' => 'DM', 'iso3' => 'DMA', 'isoNumeric' => '212', 'fipsCode' => 'DO', 'currencyId' => 161, 'capital' => 'Roseau', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 61, 'name' => 'Dominican Republic', 'iso2' => 'DO', 'iso3' => 'DOM', 'isoNumeric' => '214', 'fipsCode' => 'DR', 'currencyId' => 41, 'capital' => 'Santo Domingo', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 62, 'name' => 'Algeria', 'iso2' => 'DZ', 'iso3' => 'DZA', 'isoNumeric' => '012', 'fipsCode' => 'AG', 'currencyId' => 42, 'capital' => 'Algiers', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 63, 'name' => 'Ecuador', 'iso2' => 'EC', 'iso3' => 'ECU', 'isoNumeric' => '218', 'fipsCode' => 'EC', 'currencyId' => 151, 'capital' => 'Quito', 'continentId' => 7, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 64, 'name' => 'Estonia', 'iso2' => 'EE', 'iso3' => 'EST', 'isoNumeric' => '233', 'fipsCode' => 'EN', 'currencyId' => 47, 'capital' => 'Tallinn', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 65, 'name' => 'Egypt', 'iso2' => 'EG', 'iso3' => 'EGY', 'isoNumeric' => '818', 'fipsCode' => 'EG', 'currencyId' => 44, 'capital' => 'Cairo', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 66, 'name' => 'Western Sahara', 'iso2' => 'EH', 'iso3' => 'ESH', 'isoNumeric' => '732', 'fipsCode' => 'WI', 'currencyId' => 92, 'capital' => 'El Aaiún', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 67, 'name' => 'Eritrea', 'iso2' => 'ER', 'iso3' => 'ERI', 'isoNumeric' => '232', 'fipsCode' => 'ER', 'currencyId' => 45, 'capital' => 'Asmara', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 68, 'name' => 'Spain', 'iso2' => 'ES', 'iso3' => 'ESP', 'isoNumeric' => '724', 'fipsCode' => 'SP', 'currencyId' => 47, 'capital' => 'Madrid', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 69, 'name' => 'Ethiopia', 'iso2' => 'ET', 'iso3' => 'ETH', 'isoNumeric' => '231', 'fipsCode' => 'ET', 'currencyId' => 46, 'capital' => 'Addis Ababa', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 70, 'name' => 'Finland', 'iso2' => 'FI', 'iso3' => 'FIN', 'isoNumeric' => '246', 'fipsCode' => 'FI', 'currencyId' => 47, 'capital' => 'Helsinki', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 71, 'name' => 'Fiji', 'iso2' => 'FJ', 'iso3' => 'FJI', 'isoNumeric' => '242', 'fipsCode' => 'FJ', 'currencyId' => 48, 'capital' => 'Suva', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 72, 'name' => 'Falkland Islands', 'iso2' => 'FK', 'iso3' => 'FLK', 'isoNumeric' => '238', 'fipsCode' => 'FK', 'currencyId' => 49, 'capital' => 'Stanley', 'continentId' => 7, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 73, 'name' => 'Micronesia', 'iso2' => 'FM', 'iso3' => 'FSM', 'isoNumeric' => '583', 'fipsCode' => 'FM', 'currencyId' => 151, 'capital' => 'Palikir', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '1'],

            ['id' => 74, 'name' => 'Faroe Islands', 'iso2' => 'FO', 'iso3' => 'FRO', 'isoNumeric' => '234', 'fipsCode' => 'FO', 'currencyId' => 40, 'capital' => 'Tórshavn', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 75, 'name' => 'France', 'iso2' => 'FR', 'iso3' => 'FRA', 'isoNumeric' => '250', 'fipsCode' => 'FR', 'currencyId' => 47, 'capital' => 'Paris', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 76, 'name' => 'Gabon', 'iso2' => 'GA', 'iso3' => 'GAB', 'isoNumeric' => '266', 'fipsCode' => 'GB', 'currencyId' => 158, 'capital' => 'Libreville', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 77, 'name' => 'United Kingdom', 'iso2' => 'GB', 'iso3' => 'GBR', 'isoNumeric' => '826', 'fipsCode' => 'UK', 'currencyId' => 50, 'capital' => 'London', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 78, 'name' => 'Grenada', 'iso2' => 'GD', 'iso3' => 'GRD', 'isoNumeric' => '308', 'fipsCode' => 'GJ', 'currencyId' => 161, 'capital' => 'St. Georges', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 79, 'name' => 'Georgia', 'iso2' => 'GE', 'iso3' => 'GEO', 'isoNumeric' => '268', 'fipsCode' => 'GG', 'currencyId' => 51, 'capital' => 'Tbilisi', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 80, 'name' => 'French Guiana', 'iso2' => 'GF', 'iso3' => 'GUF', 'isoNumeric' => '254', 'fipsCode' => 'FG', 'currencyId' => 47, 'capital' => 'Cayenne', 'continentId' => 7, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 81, 'name' => 'Guernsey', 'iso2' => 'GG', 'iso3' => 'GGY', 'isoNumeric' => '831', 'fipsCode' => 'GK', 'currencyId' => 50, 'capital' => 'St Peter Port', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 82, 'name' => 'Ghana', 'iso2' => 'GH', 'iso3' => 'GHA', 'isoNumeric' => '288', 'fipsCode' => 'GH', 'currencyId' => 53, 'capital' => 'Accra', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 83, 'name' => 'Gibraltar', 'iso2' => 'GI', 'iso3' => 'GIB', 'isoNumeric' => '292', 'fipsCode' => 'GI', 'currencyId' => 54, 'capital' => 'Gibraltar', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 84, 'name' => 'Greenland', 'iso2' => 'GL', 'iso3' => 'GRL', 'isoNumeric' => '304', 'fipsCode' => 'GL', 'currencyId' => 40, 'capital' => 'Nuuk', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 85, 'name' => 'Gambia', 'iso2' => 'GM', 'iso3' => 'GMB', 'isoNumeric' => '270', 'fipsCode' => 'GA', 'currencyId' => 55, 'capital' => 'Banjul', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 86, 'name' => 'Guinea', 'iso2' => 'GN', 'iso3' => 'GIN', 'isoNumeric' => '324', 'fipsCode' => 'GV', 'currencyId' => 56, 'capital' => 'Conakry', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 87, 'name' => 'Guadeloupe', 'iso2' => 'GP', 'iso3' => 'GLP', 'isoNumeric' => '312', 'fipsCode' => 'GP', 'currencyId' => 47, 'capital' => 'Basse-Terre', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 88, 'name' => 'Equatorial Guinea', 'iso2' => 'GQ', 'iso3' => 'GNQ', 'isoNumeric' => '226', 'fipsCode' => 'EK', 'currencyId' => 158, 'capital' => 'Malabo', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 89, 'name' => 'Greece', 'iso2' => 'GR', 'iso3' => 'GRC', 'isoNumeric' => '300', 'fipsCode' => 'GR', 'currencyId' => 47, 'capital' => 'Athens', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 90, 'name' => 'South Georgia and the South Sa', 'iso2' => 'GS', 'iso3' => 'SGS', 'isoNumeric' => '239', 'fipsCode' => 'SX', 'currencyId' => 50, 'capital' => 'Grytviken', 'continentId' => 2, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 91, 'name' => 'Guatemala', 'iso2' => 'GT', 'iso3' => 'GTM', 'isoNumeric' => '320', 'fipsCode' => 'GT', 'currencyId' => 57, 'capital' => 'Guatemala City', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 92, 'name' => 'Guam', 'iso2' => 'GU', 'iso3' => 'GUM', 'isoNumeric' => '316', 'fipsCode' => 'GQ', 'currencyId' => 151, 'capital' => 'Hagåtña', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '1'],

            ['id' => 93, 'name' => 'Guinea-Bissau', 'iso2' => 'GW', 'iso3' => 'GNB', 'isoNumeric' => '624', 'fipsCode' => 'PU', 'currencyId' => 163, 'capital' => 'Bissau', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 94, 'name' => 'Guyana', 'iso2' => 'GY', 'iso3' => 'GUY', 'isoNumeric' => '328', 'fipsCode' => 'GY', 'currencyId' => 58, 'capital' => 'Georgetown', 'continentId' => 7, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 95, 'name' => 'Hong Kong', 'iso2' => 'HK', 'iso3' => 'HKG', 'isoNumeric' => '344', 'fipsCode' => 'HK', 'currencyId' => 59, 'capital' => 'Hong Kong', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 96, 'name' => 'Heard Island and McDonald Isla', 'iso2' => 'HM', 'iso3' => 'HMD', 'isoNumeric' => '334', 'fipsCode' => 'HM', 'currencyId' => 8, 'capital' => '', 'continentId' => 2, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 97, 'name' => 'Honduras', 'iso2' => 'HN', 'iso3' => 'HND', 'isoNumeric' => '340', 'fipsCode' => 'HO', 'currencyId' => 60, 'capital' => 'Tegucigalpa', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 98, 'name' => 'Croatia', 'iso2' => 'HR', 'iso3' => 'HRV', 'isoNumeric' => '191', 'fipsCode' => 'HR', 'currencyId' => 61, 'capital' => 'Zagreb', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 99, 'name' => 'Haiti', 'iso2' => 'HT', 'iso3' => 'HTI', 'isoNumeric' => '332', 'fipsCode' => 'HA', 'currencyId' => 62, 'capital' => 'Port-au-Prince', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 100, 'name' => 'Hungary', 'iso2' => 'HU', 'iso3' => 'HUN', 'isoNumeric' => '348', 'fipsCode' => 'HU', 'currencyId' => 63, 'capital' => 'Budapest', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 101, 'name' => 'Indonesia', 'iso2' => 'ID', 'iso3' => 'IDN', 'isoNumeric' => '360', 'fipsCode' => 'ID', 'currencyId' => 64, 'capital' => 'Jakarta', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 102, 'name' => 'Ireland', 'iso2' => 'IE', 'iso3' => 'IRL', 'isoNumeric' => '372', 'fipsCode' => 'EI', 'currencyId' => 47, 'capital' => 'Dublin', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 103, 'name' => 'Israel', 'iso2' => 'IL', 'iso3' => 'ISR', 'isoNumeric' => '376', 'fipsCode' => 'IS', 'currencyId' => 65, 'capital' => '', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 104, 'name' => 'Isle of Man', 'iso2' => 'IM', 'iso3' => 'IMN', 'isoNumeric' => '833', 'fipsCode' => 'IM', 'currencyId' => 50, 'capital' => 'Douglas', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 105, 'name' => 'India', 'iso2' => 'IN', 'iso3' => 'IND', 'isoNumeric' => '356', 'fipsCode' => 'IN', 'currencyId' => 67, 'capital' => 'New Delhi', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 106, 'name' => 'British Indian Ocean Territory', 'iso2' => 'IO', 'iso3' => 'IOT', 'isoNumeric' => '086', 'fipsCode' => 'IO', 'currencyId' => 151, 'capital' => '', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 107, 'name' => 'Iraq', 'iso2' => 'IQ', 'iso3' => 'IRQ', 'isoNumeric' => '368', 'fipsCode' => 'IZ', 'currencyId' => 68, 'capital' => 'Baghdad', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 108, 'name' => 'Iran', 'iso2' => 'IR', 'iso3' => 'IRN', 'isoNumeric' => '364', 'fipsCode' => 'IR', 'currencyId' => 69, 'capital' => 'Tehran', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 109, 'name' => 'Iceland', 'iso2' => 'IS', 'iso3' => 'ISL', 'isoNumeric' => '352', 'fipsCode' => 'IC', 'currencyId' => 70, 'capital' => 'Reykjavik', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 110, 'name' => 'Italy', 'iso2' => 'IT', 'iso3' => 'ITA', 'isoNumeric' => '380', 'fipsCode' => 'IT', 'currencyId' => 47, 'capital' => 'Rome', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 111, 'name' => 'Jersey', 'iso2' => 'JE', 'iso3' => 'JEY', 'isoNumeric' => '832', 'fipsCode' => 'JE', 'currencyId' => 50, 'capital' => 'Saint Helier', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 112, 'name' => 'Jamaica', 'iso2' => 'JM', 'iso3' => 'JAM', 'isoNumeric' => '388', 'fipsCode' => 'JM', 'currencyId' => 72, 'capital' => 'Kingston', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 113, 'name' => 'Jordan', 'iso2' => 'JO', 'iso3' => 'JOR', 'isoNumeric' => '400', 'fipsCode' => 'JO', 'currencyId' => 73, 'capital' => 'Amman', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 114, 'name' => 'Japan', 'iso2' => 'JP', 'iso3' => 'JPN', 'isoNumeric' => '392', 'fipsCode' => 'JA', 'currencyId' => 74, 'capital' => 'Tokyo', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 115, 'name' => 'Kenya', 'iso2' => 'KE', 'iso3' => 'KEN', 'isoNumeric' => '404', 'fipsCode' => 'KE', 'currencyId' => 75, 'capital' => 'Nairobi', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 116, 'name' => 'Kyrgyzstan', 'iso2' => 'KG', 'iso3' => 'KGZ', 'isoNumeric' => '417', 'fipsCode' => 'KG', 'currencyId' => 76, 'capital' => 'Bishkek', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 117, 'name' => 'Cambodia', 'iso2' => 'KH', 'iso3' => 'KHM', 'isoNumeric' => '116', 'fipsCode' => 'CB', 'currencyId' => 77, 'capital' => 'Phnom Penh', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 118, 'name' => 'Kiribati', 'iso2' => 'KI', 'iso3' => 'KIR', 'isoNumeric' => '296', 'fipsCode' => 'KR', 'currencyId' => 8, 'capital' => 'Tarawa', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 119, 'name' => 'Comoros', 'iso2' => 'KM', 'iso3' => 'COM', 'isoNumeric' => '174', 'fipsCode' => 'CN', 'currencyId' => 78, 'capital' => 'Moroni', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 120, 'name' => 'Saint Kitts and Nevis', 'iso2' => 'KN', 'iso3' => 'KNA', 'isoNumeric' => '659', 'fipsCode' => 'SC', 'currencyId' => 161, 'capital' => 'Basseterre', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 121, 'name' => 'North Korea', 'iso2' => 'KP', 'iso3' => 'PRK', 'isoNumeric' => '408', 'fipsCode' => 'KN', 'currencyId' => 79, 'capital' => 'Pyongyang', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 122, 'name' => 'South Korea', 'iso2' => 'KR', 'iso3' => 'KOR', 'isoNumeric' => '410', 'fipsCode' => 'KS', 'currencyId' => 80, 'capital' => 'Seoul', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 123, 'name' => 'Kuwait', 'iso2' => 'KW', 'iso3' => 'KWT', 'isoNumeric' => '414', 'fipsCode' => 'KU', 'currencyId' => 81, 'capital' => 'Kuwait City', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 124, 'name' => 'Cayman Islands', 'iso2' => 'KY', 'iso3' => 'CYM', 'isoNumeric' => '136', 'fipsCode' => 'CJ', 'currencyId' => 82, 'capital' => 'George Town', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 125, 'name' => 'Kazakhstan', 'iso2' => 'KZ', 'iso3' => 'KAZ', 'isoNumeric' => '398', 'fipsCode' => 'KZ', 'currencyId' => 83, 'capital' => 'Astana', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 126, 'name' => 'Laos', 'iso2' => 'LA', 'iso3' => 'LAO', 'isoNumeric' => '418', 'fipsCode' => 'LA', 'currencyId' => 84, 'capital' => 'Vientiane', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 127, 'name' => 'Lebanon', 'iso2' => 'LB', 'iso3' => 'LBN', 'isoNumeric' => '422', 'fipsCode' => 'LE', 'currencyId' => 85, 'capital' => 'Beirut', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 128, 'name' => 'Saint Lucia', 'iso2' => 'LC', 'iso3' => 'LCA', 'isoNumeric' => '662', 'fipsCode' => 'ST', 'currencyId' => 161, 'capital' => 'Castries', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 129, 'name' => 'Liechtenstein', 'iso2' => 'LI', 'iso3' => 'LIE', 'isoNumeric' => '438', 'fipsCode' => 'LS', 'currencyId' => 29, 'capital' => 'Vaduz', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 130, 'name' => 'Sri Lanka', 'iso2' => 'LK', 'iso3' => 'LKA', 'isoNumeric' => '144', 'fipsCode' => 'CE', 'currencyId' => 86, 'capital' => 'Colombo', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 131, 'name' => 'Liberia', 'iso2' => 'LR', 'iso3' => 'LBR', 'isoNumeric' => '430', 'fipsCode' => 'LI', 'currencyId' => 87, 'capital' => 'Monrovia', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 132, 'name' => 'Lesotho', 'iso2' => 'LS', 'iso3' => 'LSO', 'isoNumeric' => '426', 'fipsCode' => 'LT', 'currencyId' => 88, 'capital' => 'Maseru', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 133, 'name' => 'Lithuania', 'iso2' => 'LT', 'iso3' => 'LTU', 'isoNumeric' => '440', 'fipsCode' => 'LH', 'currencyId' => 89, 'capital' => 'Vilnius', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 134, 'name' => 'Luxembourg', 'iso2' => 'LU', 'iso3' => 'LUX', 'isoNumeric' => '442', 'fipsCode' => 'LU', 'currencyId' => 47, 'capital' => 'Luxembourg', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 135, 'name' => 'Latvia', 'iso2' => 'LV', 'iso3' => 'LVA', 'isoNumeric' => '428', 'fipsCode' => 'LG', 'currencyId' => 47, 'capital' => 'Riga', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 136, 'name' => 'Libya', 'iso2' => 'LY', 'iso3' => 'LBY', 'isoNumeric' => '434', 'fipsCode' => 'LY', 'currencyId' => 91, 'capital' => 'Tripoli', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 137, 'name' => 'Morocco', 'iso2' => 'MA', 'iso3' => 'MAR', 'isoNumeric' => '504', 'fipsCode' => 'MO', 'currencyId' => 92, 'capital' => 'Rabat', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 138, 'name' => 'Monaco', 'iso2' => 'MC', 'iso3' => 'MCO', 'isoNumeric' => '492', 'fipsCode' => 'MN', 'currencyId' => 47, 'capital' => 'Monaco', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 139, 'name' => 'Moldova', 'iso2' => 'MD', 'iso3' => 'MDA', 'isoNumeric' => '498', 'fipsCode' => 'MD', 'currencyId' => 93, 'capital' => 'Chişinău', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 140, 'name' => 'Montenegro', 'iso2' => 'ME', 'iso3' => 'MNE', 'isoNumeric' => '499', 'fipsCode' => 'MJ', 'currencyId' => 47, 'capital' => 'Podgorica', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 141, 'name' => 'Saint Martin', 'iso2' => 'MF', 'iso3' => 'MAF', 'isoNumeric' => '663', 'fipsCode' => 'RN', 'currencyId' => 47, 'capital' => 'Marigot', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 142, 'name' => 'Madagascar', 'iso2' => 'MG', 'iso3' => 'MDG', 'isoNumeric' => '450', 'fipsCode' => 'MA', 'currencyId' => 94, 'capital' => 'Antananarivo', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 143, 'name' => 'Marshall Islands', 'iso2' => 'MH', 'iso3' => 'MHL', 'isoNumeric' => '584', 'fipsCode' => 'RM', 'currencyId' => 151, 'capital' => 'Majuro', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '1'],

            ['id' => 144, 'name' => 'Macedonia', 'iso2' => 'MK', 'iso3' => 'MKD', 'isoNumeric' => '807', 'fipsCode' => 'MK', 'currencyId' => 95, 'capital' => 'Skopje', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 145, 'name' => 'Mali', 'iso2' => 'ML', 'iso3' => 'MLI', 'isoNumeric' => '466', 'fipsCode' => 'ML', 'currencyId' => 163, 'capital' => 'Bamako', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 146, 'name' => 'Myanmar [Burma]', 'iso2' => 'MM', 'iso3' => 'MMR', 'isoNumeric' => '104', 'fipsCode' => 'BM', 'currencyId' => 96, 'capital' => 'Nay Pyi Taw', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 147, 'name' => 'Mongolia', 'iso2' => 'MN', 'iso3' => 'MNG', 'isoNumeric' => '496', 'fipsCode' => 'MG', 'currencyId' => 97, 'capital' => 'Ulan Bator', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 148, 'name' => 'Macao', 'iso2' => 'MO', 'iso3' => 'MAC', 'isoNumeric' => '446', 'fipsCode' => 'MC', 'currencyId' => 98, 'capital' => 'Macao', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 149, 'name' => 'Northern Mariana Islands', 'iso2' => 'MP', 'iso3' => 'MNP', 'isoNumeric' => '580', 'fipsCode' => 'CQ', 'currencyId' => 151, 'capital' => 'Saipan', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '1'],

            ['id' => 150, 'name' => 'Martinique', 'iso2' => 'MQ', 'iso3' => 'MTQ', 'isoNumeric' => '474', 'fipsCode' => 'MB', 'currencyId' => 47, 'capital' => 'Fort-de-France', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 151, 'name' => 'Mauritania', 'iso2' => 'MR', 'iso3' => 'MRT', 'isoNumeric' => '478', 'fipsCode' => 'MR', 'currencyId' => 99, 'capital' => 'Nouakchott', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 152, 'name' => 'Montserrat', 'iso2' => 'MS', 'iso3' => 'MSR', 'isoNumeric' => '500', 'fipsCode' => 'MH', 'currencyId' => 161, 'capital' => 'Plymouth', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 153, 'name' => 'Malta', 'iso2' => 'MT', 'iso3' => 'MLT', 'isoNumeric' => '470', 'fipsCode' => 'MT', 'currencyId' => 47, 'capital' => 'Valletta', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 154, 'name' => 'Mauritius', 'iso2' => 'MU', 'iso3' => 'MUS', 'isoNumeric' => '480', 'fipsCode' => 'MP', 'currencyId' => 101, 'capital' => 'Port Louis', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 155, 'name' => 'Maldives', 'iso2' => 'MV', 'iso3' => 'MDV', 'isoNumeric' => '462', 'fipsCode' => 'MV', 'currencyId' => 102, 'capital' => 'Malé', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 156, 'name' => 'Malawi', 'iso2' => 'MW', 'iso3' => 'MWI', 'isoNumeric' => '454', 'fipsCode' => 'MI', 'currencyId' => 103, 'capital' => 'Lilongwe', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 157, 'name' => 'Mexico', 'iso2' => 'MX', 'iso3' => 'MEX', 'isoNumeric' => '484', 'fipsCode' => 'MX', 'currencyId' => 104, 'capital' => 'Mexico City', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 158, 'name' => 'Malaysia', 'iso2' => 'MY', 'iso3' => 'MYS', 'isoNumeric' => '458', 'fipsCode' => 'MY', 'currencyId' => 105, 'capital' => 'Kuala Lumpur', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 159, 'name' => 'Mozambique', 'iso2' => 'MZ', 'iso3' => 'MOZ', 'isoNumeric' => '508', 'fipsCode' => 'MZ', 'currencyId' => 106, 'capital' => 'Maputo', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 160, 'name' => 'Namibia', 'iso2' => 'NA', 'iso3' => 'NAM', 'isoNumeric' => '516', 'fipsCode' => 'WA', 'currencyId' => 107, 'capital' => 'Windhoek', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 161, 'name' => 'New Caledonia', 'iso2' => 'NC', 'iso3' => 'NCL', 'isoNumeric' => '540', 'fipsCode' => 'NC', 'currencyId' => 165, 'capital' => 'Noumea', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 162, 'name' => 'Niger', 'iso2' => 'NE', 'iso3' => 'NER', 'isoNumeric' => '562', 'fipsCode' => 'NG', 'currencyId' => 163, 'capital' => 'Niamey', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 163, 'name' => 'Norfolk Island', 'iso2' => 'NF', 'iso3' => 'NFK', 'isoNumeric' => '574', 'fipsCode' => 'NF', 'currencyId' => 8, 'capital' => 'Kingston', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 164, 'name' => 'Nigeria', 'iso2' => 'NG', 'iso3' => 'NGA', 'isoNumeric' => '566', 'fipsCode' => 'NI', 'currencyId' => 108, 'capital' => 'Abuja', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 165, 'name' => 'Nicaragua', 'iso2' => 'NI', 'iso3' => 'NIC', 'isoNumeric' => '558', 'fipsCode' => 'NU', 'currencyId' => 109, 'capital' => 'Managua', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 166, 'name' => 'Netherlands', 'iso2' => 'NL', 'iso3' => 'NLD', 'isoNumeric' => '528', 'fipsCode' => 'NL', 'currencyId' => 47, 'capital' => 'Amsterdam', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 167, 'name' => 'Norway', 'iso2' => 'NO', 'iso3' => 'NOR', 'isoNumeric' => '578', 'fipsCode' => 'NO', 'currencyId' => 110, 'capital' => 'Oslo', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 168, 'name' => 'Nepal', 'iso2' => 'NP', 'iso3' => 'NPL', 'isoNumeric' => '524', 'fipsCode' => 'NP', 'currencyId' => 111, 'capital' => 'Kathmandu', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 169, 'name' => 'Nauru', 'iso2' => 'NR', 'iso3' => 'NRU', 'isoNumeric' => '520', 'fipsCode' => 'NR', 'currencyId' => 8, 'capital' => '', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 170, 'name' => 'Niue', 'iso2' => 'NU', 'iso3' => 'NIU', 'isoNumeric' => '570', 'fipsCode' => 'NE', 'currencyId' => 112, 'capital' => 'Alofi', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 171, 'name' => 'New Zealand', 'iso2' => 'NZ', 'iso3' => 'NZL', 'isoNumeric' => '554', 'fipsCode' => 'NZ', 'currencyId' => 112, 'capital' => 'Wellington', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 172, 'name' => 'Oman', 'iso2' => 'OM', 'iso3' => 'OMN', 'isoNumeric' => '512', 'fipsCode' => 'MU', 'currencyId' => 113, 'capital' => 'Muscat', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 173, 'name' => 'Panama', 'iso2' => 'PA', 'iso3' => 'PAN', 'isoNumeric' => '591', 'fipsCode' => 'PM', 'currencyId' => 114, 'capital' => 'Panama City', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 174, 'name' => 'Peru', 'iso2' => 'PE', 'iso3' => 'PER', 'isoNumeric' => '604', 'fipsCode' => 'PE', 'currencyId' => 115, 'capital' => 'Lima', 'continentId' => 7, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 175, 'name' => 'French Polynesia', 'iso2' => 'PF', 'iso3' => 'PYF', 'isoNumeric' => '258', 'fipsCode' => 'FP', 'currencyId' => 165, 'capital' => 'Papeete', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 176, 'name' => 'Papua New Guinea', 'iso2' => 'PG', 'iso3' => 'PNG', 'isoNumeric' => '598', 'fipsCode' => 'PP', 'currencyId' => 116, 'capital' => 'Port Moresby', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 177, 'name' => 'Philippines', 'iso2' => 'PH', 'iso3' => 'PHL', 'isoNumeric' => '608', 'fipsCode' => 'RP', 'currencyId' => 117, 'capital' => 'Manila', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 178, 'name' => 'Pakistan', 'iso2' => 'PK', 'iso3' => 'PAK', 'isoNumeric' => '586', 'fipsCode' => 'PK', 'currencyId' => 118, 'capital' => 'Islamabad', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 179, 'name' => 'Poland', 'iso2' => 'PL', 'iso3' => 'POL', 'isoNumeric' => '616', 'fipsCode' => 'PL', 'currencyId' => 119, 'capital' => 'Warsaw', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 180, 'name' => 'Saint Pierre and Miquelon', 'iso2' => 'PM', 'iso3' => 'SPM', 'isoNumeric' => '666', 'fipsCode' => 'SB', 'currencyId' => 47, 'capital' => 'Saint-Pierre', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 181, 'name' => 'Pitcairn Islands', 'iso2' => 'PN', 'iso3' => 'PCN', 'isoNumeric' => '612', 'fipsCode' => 'PC', 'currencyId' => 112, 'capital' => 'Adamstown', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 182, 'name' => 'Puerto Rico', 'iso2' => 'PR', 'iso3' => 'PRI', 'isoNumeric' => '630', 'fipsCode' => 'RQ', 'currencyId' => 151, 'capital' => 'San Juan', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '1'],

            ['id' => 183, 'name' => 'Palestine', 'iso2' => 'PS', 'iso3' => 'PSE', 'isoNumeric' => '275', 'fipsCode' => 'WE', 'currencyId' => 65, 'capital' => '', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 184, 'name' => 'Portugal', 'iso2' => 'PT', 'iso3' => 'PRT', 'isoNumeric' => '620', 'fipsCode' => 'PO', 'currencyId' => 47, 'capital' => 'Lisbon', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 185, 'name' => 'Palau', 'iso2' => 'PW', 'iso3' => 'PLW', 'isoNumeric' => '585', 'fipsCode' => 'PS', 'currencyId' => 151, 'capital' => 'Melekeok - Palau State Capital', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '1'],

            ['id' => 186, 'name' => 'Paraguay', 'iso2' => 'PY', 'iso3' => 'PRY', 'isoNumeric' => '600', 'fipsCode' => 'PA', 'currencyId' => 120, 'capital' => 'Asunción', 'continentId' => 7, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 187, 'name' => 'Qatar', 'iso2' => 'QA', 'iso3' => 'QAT', 'isoNumeric' => '634', 'fipsCode' => 'QA', 'currencyId' => 121, 'capital' => 'Doha', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 188, 'name' => 'Réunion', 'iso2' => 'RE', 'iso3' => 'REU', 'isoNumeric' => '638', 'fipsCode' => 'RE', 'currencyId' => 47, 'capital' => 'Saint-Denis', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 189, 'name' => 'Romania', 'iso2' => 'RO', 'iso3' => 'ROU', 'isoNumeric' => '642', 'fipsCode' => 'RO', 'currencyId' => 122, 'capital' => 'Bucharest', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 190, 'name' => 'Serbia', 'iso2' => 'RS', 'iso3' => 'SRB', 'isoNumeric' => '688', 'fipsCode' => 'RI', 'currencyId' => 123, 'capital' => 'Belgrade', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 191, 'name' => 'Russia', 'iso2' => 'RU', 'iso3' => 'RUS', 'isoNumeric' => '643', 'fipsCode' => 'RS', 'currencyId' => 124, 'capital' => 'Moscow', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 192, 'name' => 'Rwanda', 'iso2' => 'RW', 'iso3' => 'RWA', 'isoNumeric' => '646', 'fipsCode' => 'RW', 'currencyId' => 125, 'capital' => 'Kigali', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 193, 'name' => 'Saudi Arabia', 'iso2' => 'SA', 'iso3' => 'SAU', 'isoNumeric' => '682', 'fipsCode' => 'SA', 'currencyId' => 126, 'capital' => 'Riyadh', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 194, 'name' => 'Solomon Islands', 'iso2' => 'SB', 'iso3' => 'SLB', 'isoNumeric' => '090', 'fipsCode' => 'BP', 'currencyId' => 127, 'capital' => 'Honiara', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 195, 'name' => 'Seychelles', 'iso2' => 'SC', 'iso3' => 'SYC', 'isoNumeric' => '690', 'fipsCode' => 'SE', 'currencyId' => 128, 'capital' => 'Victoria', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 196, 'name' => 'Sudan', 'iso2' => 'SD', 'iso3' => 'SDN', 'isoNumeric' => '729', 'fipsCode' => 'SU', 'currencyId' => 129, 'capital' => 'Khartoum', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 197, 'name' => 'Sweden', 'iso2' => 'SE', 'iso3' => 'SWE', 'isoNumeric' => '752', 'fipsCode' => 'SW', 'currencyId' => 130, 'capital' => 'Stockholm', 'continentId' => 4, 'isEU' => '1', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 198, 'name' => 'Singapore', 'iso2' => 'SG', 'iso3' => 'SGP', 'isoNumeric' => '702', 'fipsCode' => 'SN', 'currencyId' => 131, 'capital' => 'Singapore', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 199, 'name' => 'Saint Helena', 'iso2' => 'SH', 'iso3' => 'SHN', 'isoNumeric' => '654', 'fipsCode' => 'SH', 'currencyId' => 132, 'capital' => 'Jamestown', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 200, 'name' => 'Slovenia', 'iso2' => 'SI', 'iso3' => 'SVN', 'isoNumeric' => '705', 'fipsCode' => 'SI', 'currencyId' => 47, 'capital' => 'Ljubljana', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 201, 'name' => 'Svalbard and Jan Mayen', 'iso2' => 'SJ', 'iso3' => 'SJM', 'isoNumeric' => '744', 'fipsCode' => 'SV', 'currencyId' => 110, 'capital' => 'Longyearbyen', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 202, 'name' => 'Slovakia', 'iso2' => 'SK', 'iso3' => 'SVK', 'isoNumeric' => '703', 'fipsCode' => 'LO', 'currencyId' => 47, 'capital' => 'Bratislava', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 203, 'name' => 'Sierra Leone', 'iso2' => 'SL', 'iso3' => 'SLE', 'isoNumeric' => '694', 'fipsCode' => 'SL', 'currencyId' => 133, 'capital' => 'Freetown', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 204, 'name' => 'San Marino', 'iso2' => 'SM', 'iso3' => 'SMR', 'isoNumeric' => '674', 'fipsCode' => 'SM', 'currencyId' => 47, 'capital' => 'San Marino', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 205, 'name' => 'Senegal', 'iso2' => 'SN', 'iso3' => 'SEN', 'isoNumeric' => '686', 'fipsCode' => 'SG', 'currencyId' => 163, 'capital' => 'Dakar', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 206, 'name' => 'Somalia', 'iso2' => 'SO', 'iso3' => 'SOM', 'isoNumeric' => '706', 'fipsCode' => 'SO', 'currencyId' => 134, 'capital' => 'Mogadishu', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 207, 'name' => 'Suriname', 'iso2' => 'SR', 'iso3' => 'SUR', 'isoNumeric' => '740', 'fipsCode' => 'NS', 'currencyId' => 135, 'capital' => 'Paramaribo', 'continentId' => 7, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 208, 'name' => 'South Sudan', 'iso2' => 'SS', 'iso3' => 'SSD', 'isoNumeric' => '728', 'fipsCode' => 'OD', 'currencyId' => NULL, 'capital' => 'Juba', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 209, 'name' => 'São Tomé and Príncipe', 'iso2' => 'ST', 'iso3' => 'STP', 'isoNumeric' => '678', 'fipsCode' => 'TP', 'currencyId' => 136, 'capital' => 'São Tomé', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 210, 'name' => 'El Salvador', 'iso2' => 'SV', 'iso3' => 'SLV', 'isoNumeric' => '222', 'fipsCode' => 'ES', 'currencyId' => 151, 'capital' => 'San Salvador', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 211, 'name' => 'Sint Maarten', 'iso2' => 'SX', 'iso3' => 'SXM', 'isoNumeric' => '534', 'fipsCode' => 'NN', 'currencyId' => 5, 'capital' => 'Philipsburg', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 212, 'name' => 'Syria', 'iso2' => 'SY', 'iso3' => 'SYR', 'isoNumeric' => '760', 'fipsCode' => 'SY', 'currencyId' => 138, 'capital' => 'Damascus', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 213, 'name' => 'Swaziland', 'iso2' => 'SZ', 'iso3' => 'SWZ', 'isoNumeric' => '748', 'fipsCode' => 'WZ', 'currencyId' => 139, 'capital' => 'Mbabane', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 214, 'name' => 'Turks and Caicos Islands', 'iso2' => 'TC', 'iso3' => 'TCA', 'isoNumeric' => '796', 'fipsCode' => 'TK', 'currencyId' => 151, 'capital' => 'Cockburn Town', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 215, 'name' => 'Chad', 'iso2' => 'TD', 'iso3' => 'TCD', 'isoNumeric' => '148', 'fipsCode' => 'CD', 'currencyId' => 158, 'capital' => 'NDjamena', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 216, 'name' => 'French Southern Territories', 'iso2' => 'TF', 'iso3' => 'ATF', 'isoNumeric' => '260', 'fipsCode' => 'FS', 'currencyId' => 47, 'capital' => 'Port-aux-Français', 'continentId' => 2, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 217, 'name' => 'Togo', 'iso2' => 'TG', 'iso3' => 'TGO', 'isoNumeric' => '768', 'fipsCode' => 'TO', 'currencyId' => 163, 'capital' => 'Lomé', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 218, 'name' => 'Thailand', 'iso2' => 'TH', 'iso3' => 'THA', 'isoNumeric' => '764', 'fipsCode' => 'TH', 'currencyId' => 140, 'capital' => 'Bangkok', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 219, 'name' => 'Tajikistan', 'iso2' => 'TJ', 'iso3' => 'TJK', 'isoNumeric' => '762', 'fipsCode' => 'TI', 'currencyId' => 141, 'capital' => 'Dushanbe', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 220, 'name' => 'Tokelau', 'iso2' => 'TK', 'iso3' => 'TKL', 'isoNumeric' => '772', 'fipsCode' => 'TL', 'currencyId' => 112, 'capital' => '', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 221, 'name' => 'East Timor', 'iso2' => 'TL', 'iso3' => 'TLS', 'isoNumeric' => '626', 'fipsCode' => 'TT', 'currencyId' => 151, 'capital' => 'Dili', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 222, 'name' => 'Turkmenistan', 'iso2' => 'TM', 'iso3' => 'TKM', 'isoNumeric' => '795', 'fipsCode' => 'TX', 'currencyId' => 142, 'capital' => 'Ashgabat', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 223, 'name' => 'Tunisia', 'iso2' => 'TN', 'iso3' => 'TUN', 'isoNumeric' => '788', 'fipsCode' => 'TS', 'currencyId' => 143, 'capital' => 'Tunis', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 224, 'name' => 'Tonga', 'iso2' => 'TO', 'iso3' => 'TON', 'isoNumeric' => '776', 'fipsCode' => 'TN', 'currencyId' => 144, 'capital' => 'Nukualofa', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 225, 'name' => 'Turkey', 'iso2' => 'TR', 'iso3' => 'TUR', 'isoNumeric' => '792', 'fipsCode' => 'TU', 'currencyId' => 145, 'capital' => 'Ankara', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 226, 'name' => 'Trinidad and Tobago', 'iso2' => 'TT', 'iso3' => 'TTO', 'isoNumeric' => '780', 'fipsCode' => 'TD', 'currencyId' => 146, 'capital' => 'Port of Spain', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 227, 'name' => 'Tuvalu', 'iso2' => 'TV', 'iso3' => 'TUV', 'isoNumeric' => '798', 'fipsCode' => 'TV', 'currencyId' => 8, 'capital' => 'Funafuti', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 228, 'name' => 'Taiwan', 'iso2' => 'TW', 'iso3' => 'TWN', 'isoNumeric' => '158', 'fipsCode' => 'TW', 'currencyId' => 147, 'capital' => 'Taipei', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 229, 'name' => 'Tanzania', 'iso2' => 'TZ', 'iso3' => 'TZA', 'isoNumeric' => '834', 'fipsCode' => 'TZ', 'currencyId' => 148, 'capital' => 'Dodoma', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 230, 'name' => 'Ukraine', 'iso2' => 'UA', 'iso3' => 'UKR', 'isoNumeric' => '804', 'fipsCode' => 'UP', 'currencyId' => 149, 'capital' => 'Kyiv', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 231, 'name' => 'Uganda', 'iso2' => 'UG', 'iso3' => 'UGA', 'isoNumeric' => '800', 'fipsCode' => 'UG', 'currencyId' => 150, 'capital' => 'Kampala', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 232, 'name' => 'U.S. Minor Outlying Islands', 'iso2' => 'UM', 'iso3' => 'UMI', 'isoNumeric' => '581', 'fipsCode' => '', 'currencyId' => 151, 'capital' => '', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 233, 'name' => 'United States', 'iso2' => 'US', 'iso3' => 'USA', 'isoNumeric' => '840', 'fipsCode' => 'US', 'currencyId' => 151, 'capital' => 'Washington', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 234, 'name' => 'Uruguay', 'iso2' => 'UY', 'iso3' => 'URY', 'isoNumeric' => '858', 'fipsCode' => 'UY', 'currencyId' => 152, 'capital' => 'Montevideo', 'continentId' => 7, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 235, 'name' => 'Uzbekistan', 'iso2' => 'UZ', 'iso3' => 'UZB', 'isoNumeric' => '860', 'fipsCode' => 'UZ', 'currencyId' => 153, 'capital' => 'Tashkent', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 236, 'name' => 'Vatican City', 'iso2' => 'VA', 'iso3' => 'VAT', 'isoNumeric' => '336', 'fipsCode' => 'VT', 'currencyId' => 47, 'capital' => 'Vatican', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 237, 'name' => 'Saint Vincent and the Grenadin', 'iso2' => 'VC', 'iso3' => 'VCT', 'isoNumeric' => '670', 'fipsCode' => 'VC', 'currencyId' => 161, 'capital' => 'Kingstown', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 238, 'name' => 'Venezuela', 'iso2' => 'VE', 'iso3' => 'VEN', 'isoNumeric' => '862', 'fipsCode' => 'VE', 'currencyId' => 154, 'capital' => 'Caracas', 'continentId' => 7, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 239, 'name' => 'British Virgin Islands', 'iso2' => 'VG', 'iso3' => 'VGB', 'isoNumeric' => '092', 'fipsCode' => 'VI', 'currencyId' => 151, 'capital' => 'Road Town', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 240, 'name' => 'U.S. Virgin Islands', 'iso2' => 'VI', 'iso3' => 'VIR', 'isoNumeric' => '850', 'fipsCode' => 'VQ', 'currencyId' => 151, 'capital' => 'Charlotte Amalie', 'continentId' => 5, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '1'],

            ['id' => 241, 'name' => 'Vietnam', 'iso2' => 'VN', 'iso3' => 'VNM', 'isoNumeric' => '704', 'fipsCode' => 'VM', 'currencyId' => 155, 'capital' => 'Hanoi', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 242, 'name' => 'Vanuatu', 'iso2' => 'VU', 'iso3' => 'VUT', 'isoNumeric' => '548', 'fipsCode' => 'NH', 'currencyId' => 156, 'capital' => 'Port Vila', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 243, 'name' => 'Wallis and Futuna', 'iso2' => 'WF', 'iso3' => 'WLF', 'isoNumeric' => '876', 'fipsCode' => 'WF', 'currencyId' => 165, 'capital' => 'Mata-Utu', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 244, 'name' => 'Samoa', 'iso2' => 'WS', 'iso3' => 'WSM', 'isoNumeric' => '882', 'fipsCode' => 'WS', 'currencyId' => 157, 'capital' => 'Apia', 'continentId' => 6, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 245, 'name' => 'Kosovo', 'iso2' => 'XK', 'iso3' => 'XKX', 'isoNumeric' => '0', 'fipsCode' => 'KV', 'currencyId' => 47, 'capital' => 'Pristina', 'continentId' => 4, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 246, 'name' => 'Yemen', 'iso2' => 'YE', 'iso3' => 'YEM', 'isoNumeric' => '887', 'fipsCode' => 'YM', 'currencyId' => 167, 'capital' => 'Sanaa', 'continentId' => 3, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 247, 'name' => 'Mayotte', 'iso2' => 'YT', 'iso3' => 'MYT', 'isoNumeric' => '175', 'fipsCode' => 'MF', 'currencyId' => 47, 'capital' => 'Mamoutzou', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 248, 'name' => 'South Africa', 'iso2' => 'ZA', 'iso3' => 'ZAF', 'isoNumeric' => '710', 'fipsCode' => 'SF', 'currencyId' => 168, 'capital' => 'Pretoria', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 249, 'name' => 'Zambia', 'iso2' => 'ZM', 'iso3' => 'ZMB', 'isoNumeric' => '894', 'fipsCode' => 'ZA', 'currencyId' => 170, 'capital' => 'Lusaka', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0'],

            ['id' => 250, 'name' => 'Zimbabwe', 'iso2' => 'ZW', 'iso3' => 'ZWE', 'isoNumeric' => '716', 'fipsCode' => 'ZI', 'currencyId' => 171, 'capital' => 'Harare', 'continentId' => 1, 'isEU' => '0', 'isUK' => '0', 'isUSTerritory' => '0']

        ];
    }
}
