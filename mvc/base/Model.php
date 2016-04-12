<?php

    namespace nox\mvc\base;

    /**
     * Class Model
     *
     * @package nox\mvc\base
     */
    class Model extends \yii\base\Model
    {
        #region Constants
        #region Custom Listings
        #region Yes/No
        const YES                    = 1;
        const NO                     = 0;
        #endregion

        #region Statuses
        const STATUS_ACTIVE          = 1;
        const STATUS_INACTIVE        = 0;
        #endregion

        #region Genders
        const GENDER_MALE            = 'M';
        const GENDER_FEMALE          = 'F';
        #endregion

        #region Weekdays
        const WEEKDAY_SUNDAY         = 0;
        const WEEKDAY_MONDAY         = 1;
        const WEEKDAY_TUESDAY        = 2;
        const WEEKDAY_WEDNESDAY      = 3;
        const WEEKDAY_THURSDAY       = 4;
        const WEEKDAY_FRIDAY         = 5;
        const WEEKDAY_SATURDAY       = 6;
        #endregion

        #region Months
        const MONTH_JANUARY          = 1;
        const MONTH_FEBRUARY         = 2;
        const MONTH_MARCH            = 3;
        const MONTH_APRIL            = 4;
        const MONTH_MAY              = 5;
        const MONTH_JUNE             = 6;
        const MONTH_JULY             = 7;
        const MONTH_AUGUST           = 8;
        const MONTH_SEPTEMBER        = 9;
        const MONTH_OCTOBER          = 10;
        const MONTH_NOVEMBER         = 11;
        const MONTH_DECEMBER         = 12;
        #endregion

        #region Years
        const YEAR_2000              = 2000;
        const YEAR_2001              = 2001;
        const YEAR_2002              = 2002;
        const YEAR_2003              = 2003;
        const YEAR_2004              = 2004;
        const YEAR_2005              = 2005;
        const YEAR_2006              = 2006;
        const YEAR_2007              = 2007;
        const YEAR_2008              = 2008;
        const YEAR_2009              = 2009;
        const YEAR_2010              = 2010;
        const YEAR_2011              = 2011;
        const YEAR_2012              = 2012;
        const YEAR_2013              = 2013;
        const YEAR_2014              = 2014;
        const YEAR_2015              = 2015;
        const YEAR_2016              = 2016;
        const YEAR_2017              = 2017;
        const YEAR_2018              = 2018;
        const YEAR_2019              = 2019;
        const YEAR_2020              = 2020;
        const YEAR_2021              = 2021;
        const YEAR_2022              = 2022;
        const YEAR_2023              = 2023;
        const YEAR_2024              = 2024;
        const YEAR_2025              = 2025;
        const YEAR_2026              = 2026;
        const YEAR_2027              = 2027;
        const YEAR_2028              = 2028;
        const YEAR_2029              = 2029;
        const YEAR_2030              = 2030;
        const YEAR_2031              = 2031;
        const YEAR_2032              = 2032;
        #endregion

        #region States
        const STATE_AC = 'AC';
        const STATE_AL = 'AL';
        const STATE_AP = 'AP';
        const STATE_AM = 'AM';
        const STATE_BA = 'BA';
        const STATE_CE = 'CE';
        const STATE_DF = 'DF';
        const STATE_ES = 'ES';
        const STATE_GO = 'GO';
        const STATE_MA = 'MA';
        const STATE_MT = 'MT';
        const STATE_MS = 'MS';
        const STATE_MG = 'MG';
        const STATE_PA = 'PA';
        const STATE_PB = 'PB';
        const STATE_PR = 'PR';
        const STATE_PE = 'PE';
        const STATE_PI = 'PI';
        const STATE_RJ = 'RJ';
        const STATE_RN = 'RN';
        const STATE_RS = 'RS';
        const STATE_RO = 'RO';
        const STATE_RR = 'RR';
        const STATE_SC = 'SC';
        const STATE_SP = 'SP';
        const STATE_SE = 'SE';
        const STATE_TO = 'TO';
        #endregion
        #endregion

        #region Listings
        const LISTING_METHOD_DEFAULT = 1;
        const LISTING_METHOD_AJAX    = 2;
        const LISTING_METHOD_SIMPLE  = self::LISTING_METHOD_AJAX;
        #endregion

        #region Scenarios
        const SCENARIO_INSERT      = 'insert';
        const SCENARIO_UPDATE      = 'update';
        const SCENARIO_REST_INSERT = 'rest-insert';
        const SCENARIO_REST_UPDATE = 'rest-update';
        #endregion
        #endregion

        /**
         * @var array
         */
        protected static $fields = [];

        /**
         * @var bool
         */
        protected $isSearch = false;

        #region Attributes Labels
        /**
         * Gets an attribute label
         *
         * @param string $attribute
         *
         * @return string
         */
        public function getAttributeLabel($attribute)
        {
            return parent::getAttributeLabel($attribute);
        }
        #endregion

        #region Getters and Setters
        /**
         * @inheritdoc
         */
        public function fields()
        {
            return static::$fields;
        }
        #endregion

        #region Custom Listings
        #region Statuses
        /**
         * Returns the status.
         *
         * @param $id integer Status Code
         *
         * @return string Status Label
         */
        public static function getStatusById($id)
        {
            switch ((int)$id) {
                case self::STATUS_INACTIVE: {
                    return 'Inativo';
                }

                case self::STATUS_ACTIVE: {
                    return 'Ativo';
                }

                default: {
                    return '';
                }
            }
        }

        /**
         * Returns the status.
         *
         * @param $id integer Status Code
         *
         * @return string Status Label
         */
        public static function getFormatedStatusById($id)
        {
            switch ((int)$id) {
                case self::STATUS_INACTIVE: {
                    return '<span class="text-danger"><strong>Inativo</strong></span>';
                }

                case self::STATUS_ACTIVE: {
                    return '<span class="text-success"><strong>Ativo</strong></span>';
                }

                default: {
                    return '';
                }
            }
        }

        /**
         * Returns the Status listing
         *
         * @return array
         */
        public static function getStatusList()
        {
            return [
                self::STATUS_INACTIVE => self::getStatusById(self::STATUS_INACTIVE),
                self::STATUS_ACTIVE   => self::getStatusById(self::STATUS_ACTIVE)
            ];
        }

        /**
         * @return array
         */
        public static function getStatusRange()
        {
            $items = self::getStatusList();
            $range = [];

            foreach ($items as $key => $value) {
                $range[] = $key;
            }

            return $range;
        }
        #endregion

        #region Yes/No
        /**
         * @param $id integer Code
         *
         * @return string Label
         */
        public static function getYesNoById($id)
        {
            switch ((int)$id) {
                case self::YES: {
                    return 'Sim';
                }

                case self::NO: {
                    return 'Não';
                }

                default: {
                    return '';
                }
            }
        }

        /**
         * @param $id integer Code
         *
         * @return string Label
         */
        public static function getFormatedYesNoById($id)
        {
            switch ((int)$id) {
                case self::YES: {
                    return '<span class="label label-sm label-success">Sim</span>';
                }

                case self::NO: {
                    return '<span class="label label-sm label-danger">Não</span>';
                }

                default: {
                    return '';
                }
            }
        }

        /**
         * @return array
         */
        public static function getYesNoList()
        {
            return [
                self::YES => self::getYesNoById(self::YES),
                self::NO  => self::getYesNoById(self::NO)
            ];
        }

        /**
         * @return array
         */
        public static function getYesNoRange()
        {
            $items = self::getYesNoList();
            $range = [];

            foreach ($items as $key => $value) {
                $range[] = $key;
            }

            return $range;
        }
        #endregion

        #region Genders
        /**
         * @param $id string
         *
         * @return string
         */
        public static function getGenderById($id)
        {
            switch (strtoupper((string)$id)) {
                case self::GENDER_MALE: {
                    return 'Masculino';
                }

                case self::GENDER_FEMALE: {
                    return 'Feminino';
                }

                default: {
                    return '';
                }
            }
        }

        /**
         * Returns the Status listing
         *
         * @return array
         */
        public static function getGenderList()
        {
            return [
                self::GENDER_MALE   => self::getGenderById(self::GENDER_MALE),
                self::GENDER_FEMALE => self::getGenderById(self::GENDER_FEMALE)
            ];
        }

        /**
         * @return array
         */
        public static function getGenderRange()
        {
            $items = self::getGenderList();
            $range = [];

            foreach ($items as $key => $value) {
                $range[] = $key;
            }

            return $range;
        }
        #endregion

        #region Weekdays
        /**
         * @param integer $id
         *
         * @return string
         */
        public static function getWeekdayById($id)
        {
            switch ((int)$id) {
                case self::WEEKDAY_SUNDAY: {
                    return 'Domingo';
                }

                case self::WEEKDAY_MONDAY: {
                    return 'Segunda-feira';
                }

                case self::WEEKDAY_TUESDAY: {
                    return 'Terça-feira';
                }

                case self::WEEKDAY_WEDNESDAY: {
                    return 'Quarta-feira';
                }

                case self::WEEKDAY_THURSDAY: {
                    return 'Quinta-feira';
                }

                case self::WEEKDAY_FRIDAY: {
                    return 'Sexta-feira';
                }

                case self::WEEKDAY_SATURDAY: {
                    return 'Sábado';
                }

                default: {
                    return '';
                }
            }
        }

        /**
         * @param integer $id
         *
         * @return string
         */
        public static function getWeekdayAbbrById($id)
        {
            switch ((int)$id) {
                case self::WEEKDAY_SUNDAY: {
                    return 'Dom';
                }

                case self::WEEKDAY_MONDAY: {
                    return 'Seg';
                }

                case self::WEEKDAY_TUESDAY: {
                    return 'Ter';
                }

                case self::WEEKDAY_WEDNESDAY: {
                    return 'Qua';
                }

                case self::WEEKDAY_THURSDAY: {
                    return 'Qui';
                }

                case self::WEEKDAY_FRIDAY: {
                    return 'Sex';
                }

                case self::WEEKDAY_SATURDAY: {
                    return 'Sáb';
                }

                default: {
                    return '';
                }
            }
        }

        /**
         * @return array
         */
        public static function getWeekdayList()
        {
            return [
                self::WEEKDAY_SUNDAY    => self::getWeekdayById(self::WEEKDAY_SUNDAY),
                self::WEEKDAY_MONDAY    => self::getWeekdayById(self::WEEKDAY_MONDAY),
                self::WEEKDAY_TUESDAY   => self::getWeekdayById(self::WEEKDAY_TUESDAY),
                self::WEEKDAY_WEDNESDAY => self::getWeekdayById(self::WEEKDAY_WEDNESDAY),
                self::WEEKDAY_THURSDAY  => self::getWeekdayById(self::WEEKDAY_THURSDAY),
                self::WEEKDAY_FRIDAY    => self::getWeekdayById(self::WEEKDAY_FRIDAY),
                self::WEEKDAY_SATURDAY  => self::getWeekdayById(self::WEEKDAY_SATURDAY)
            ];
        }

        /**
         * @return array
         */
        public static function getWeekdayRange()
        {
            $items = self::getWeekdayList();
            $range = [];

            foreach ($items as $key => $value) {
                $range[] = $key;
            }

            return $range;
        }

        /**
         * @return integer
         */
        public static function getCurrentWeekday()
        {
            return (int)date('w');
        }
        #endregion

        #region Months
        /**
         * @param integer $id
         *
         * @return string
         */
        public static function getMonthById($id)
        {
            switch ((int)$id) {
                case self::MONTH_JANUARY: {
                    return 'Janeiro';
                }

                case self::MONTH_FEBRUARY: {
                    return 'Fevereiro';
                }

                case self::MONTH_MARCH: {
                    return 'Março';
                }

                case self::MONTH_APRIL: {
                    return 'Abril';
                }

                case self::MONTH_MAY: {
                    return 'Maio';
                }

                case self::MONTH_JUNE: {
                    return 'Junho';
                }

                case self::MONTH_JULY: {
                    return 'Julho';
                }

                case self::MONTH_AUGUST: {
                    return 'Agosto';
                }

                case self::MONTH_SEPTEMBER: {
                    return 'Setembro';
                }

                case self::MONTH_OCTOBER: {
                    return 'Outubro';
                }

                case self::MONTH_NOVEMBER: {
                    return 'Novembro';
                }

                case self::MONTH_DECEMBER: {
                    return 'Dezembro';
                }

                default: {
                    return '';
                }
            }
        }

        /**
         * @param integer $id
         *
         * @return string
         */
        public static function getMonthAbbrById($id)
        {
            switch ((int)$id) {
                case self::MONTH_JANUARY: {
                    return 'Jan';
                }

                case self::MONTH_FEBRUARY: {
                    return 'Fev';
                }

                case self::MONTH_MARCH: {
                    return 'Mar';
                }

                case self::MONTH_APRIL: {
                    return 'Abr';
                }

                case self::MONTH_MAY: {
                    return 'Mai';
                }

                case self::MONTH_JUNE: {
                    return 'Jun';
                }

                case self::MONTH_JULY: {
                    return 'Jul';
                }

                case self::MONTH_AUGUST: {
                    return 'Ago';
                }

                case self::MONTH_SEPTEMBER: {
                    return 'Set';
                }

                case self::MONTH_OCTOBER: {
                    return 'Out';
                }

                case self::MONTH_NOVEMBER: {
                    return 'Nov';
                }

                case self::MONTH_DECEMBER: {
                    return 'Dez';
                }

                default: {
                    return '';
                }
            }
        }

        /**
         * @return array
         */
        public static function getMonthList()
        {
            return [
                self::MONTH_JANUARY   => self::getMonthById(self::MONTH_JANUARY),
                self::MONTH_FEBRUARY  => self::getMonthById(self::MONTH_FEBRUARY),
                self::MONTH_MARCH     => self::getMonthById(self::MONTH_MARCH),
                self::MONTH_APRIL     => self::getMonthById(self::MONTH_APRIL),
                self::MONTH_MAY       => self::getMonthById(self::MONTH_MAY),
                self::MONTH_JUNE      => self::getMonthById(self::MONTH_JUNE),
                self::MONTH_JULY      => self::getMonthById(self::MONTH_JULY),
                self::MONTH_AUGUST    => self::getMonthById(self::MONTH_AUGUST),
                self::MONTH_SEPTEMBER => self::getMonthById(self::MONTH_SEPTEMBER),
                self::MONTH_OCTOBER   => self::getMonthById(self::MONTH_OCTOBER),
                self::MONTH_NOVEMBER  => self::getMonthById(self::MONTH_NOVEMBER),
                self::MONTH_DECEMBER  => self::getMonthById(self::MONTH_DECEMBER)
            ];
        }

        /**
         * @return array
         */
        public static function getMonthRange()
        {
            $items = self::getMonthList();
            $range = [];

            foreach ($items as $key => $value) {
                $range[] = $key;
            }

            return $range;
        }

        /**
         * @return integer
         */
        public static function getCurrentMonth()
        {
            return (int)date('n');
        }
        #endregion

        #region Years
        /**
         * @param $id integer
         *
         * @return string
         */
        public static function getYearById($id)
        {
            switch ((int)$id) {
                case self::YEAR_2000: {
                    return '2000';
                }

                case self::YEAR_2001: {
                    return '2001';
                }

                case self::YEAR_2002: {
                    return '2002';
                }

                case self::YEAR_2003: {
                    return '2003';
                }

                case self::YEAR_2004: {
                    return '2004';
                }

                case self::YEAR_2005: {
                    return '2005';
                }

                case self::YEAR_2006: {
                    return '2006';
                }

                case self::YEAR_2007: {
                    return '2007';
                }

                case self::YEAR_2008: {
                    return '2008';
                }

                case self::YEAR_2009: {
                    return '2009';
                }

                case self::YEAR_2010: {
                    return '2010';
                }

                case self::YEAR_2011: {
                    return '2011';
                }

                case self::YEAR_2012: {
                    return '2012';
                }

                case self::YEAR_2013: {
                    return '2013';
                }

                case self::YEAR_2014: {
                    return '2014';
                }

                case self::YEAR_2015: {
                    return '2015';
                }

                case self::YEAR_2016: {
                    return '2016';
                }

                case self::YEAR_2017: {
                    return '2017';
                }

                case self::YEAR_2018: {
                    return '2018';
                }

                case self::YEAR_2019: {
                    return '2019';
                }

                case self::YEAR_2020: {
                    return '2020';
                }

                case self::YEAR_2021: {
                    return '2021';
                }

                case self::YEAR_2022: {
                    return '2022';
                }

                case self::YEAR_2023: {
                    return '2023';
                }

                case self::YEAR_2024: {
                    return '2024';
                }

                case self::YEAR_2025: {
                    return '2025';
                }

                case self::YEAR_2026: {
                    return '2026';
                }

                case self::YEAR_2027: {
                    return '2027';
                }

                case self::YEAR_2028: {
                    return '2028';
                }

                case self::YEAR_2029: {
                    return '2029';
                }

                case self::YEAR_2030: {
                    return '2030';
                }

                case self::YEAR_2031: {
                    return '2031';
                }

                case self::YEAR_2032: {
                    return '2032';
                }

                default: {
                    return '';
                }
            }
        }

        /**
         * @return array
         */
        public static function getYearList()
        {
            return [
                self::YEAR_2000 => self::getYearById(self::YEAR_2000),
                self::YEAR_2001 => self::getYearById(self::YEAR_2001),
                self::YEAR_2002 => self::getYearById(self::YEAR_2002),
                self::YEAR_2003 => self::getYearById(self::YEAR_2003),
                self::YEAR_2004 => self::getYearById(self::YEAR_2004),
                self::YEAR_2005 => self::getYearById(self::YEAR_2005),
                self::YEAR_2006 => self::getYearById(self::YEAR_2006),
                self::YEAR_2007 => self::getYearById(self::YEAR_2007),
                self::YEAR_2008 => self::getYearById(self::YEAR_2008),
                self::YEAR_2009 => self::getYearById(self::YEAR_2009),
                self::YEAR_2010 => self::getYearById(self::YEAR_2010),
                self::YEAR_2011 => self::getYearById(self::YEAR_2011),
                self::YEAR_2012 => self::getYearById(self::YEAR_2012),
                self::YEAR_2013 => self::getYearById(self::YEAR_2013),
                self::YEAR_2014 => self::getYearById(self::YEAR_2014),
                self::YEAR_2015 => self::getYearById(self::YEAR_2015),
                self::YEAR_2016 => self::getYearById(self::YEAR_2016),
                self::YEAR_2017 => self::getYearById(self::YEAR_2017),
                self::YEAR_2018 => self::getYearById(self::YEAR_2018),
                self::YEAR_2019 => self::getYearById(self::YEAR_2019),
                self::YEAR_2020 => self::getYearById(self::YEAR_2020),
                self::YEAR_2021 => self::getYearById(self::YEAR_2021),
                self::YEAR_2022 => self::getYearById(self::YEAR_2022),
                self::YEAR_2023 => self::getYearById(self::YEAR_2023),
                self::YEAR_2024 => self::getYearById(self::YEAR_2024),
                self::YEAR_2025 => self::getYearById(self::YEAR_2025),
                self::YEAR_2026 => self::getYearById(self::YEAR_2026),
                self::YEAR_2027 => self::getYearById(self::YEAR_2027),
                self::YEAR_2028 => self::getYearById(self::YEAR_2028),
                self::YEAR_2029 => self::getYearById(self::YEAR_2029),
                self::YEAR_2030 => self::getYearById(self::YEAR_2030),
                self::YEAR_2031 => self::getYearById(self::YEAR_2031)
            ];
        }

        /**
         * @return array
         */
        public static function getYearRange()
        {
            $items = self::getYearList();
            $range = [];

            foreach ($items as $key => $value) {
                $range[] = $key;
            }

            return $range;
        }

        /**
         * @return integer
         */
        public static function getCurrentYear()
        {
            return (int)date('Y');
        }
        #endregion

        #region Days
        /**
         * @return array
         */
        public static function getDaysRange()
        {
            return [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31];
        }
        #endregion

        #region States
        /**
         * Returns the State.
         *
         * @param string $id
         *
         * @return string
         */
        public static function getStateById($id)
        {
            switch (strtoupper((string)$id)) {
                case self::STATE_AC: {
                    return 'Acre';
                }

                case self::STATE_AL: {
                    return 'Alagoas';
                }

                case self::STATE_AP: {
                    return 'Amapá';
                }

                case self::STATE_AM: {
                    return 'Amazonas';
                }

                case self::STATE_BA: {
                    return 'Bahia';
                }

                case self::STATE_CE: {
                    return 'Ceará';
                }

                case self::STATE_DF: {
                    return 'Distrito Federal';
                }

                case self::STATE_ES: {
                    return 'Espírito Santo';
                }

                case self::STATE_GO: {
                    return 'Goiás';
                }

                case self::STATE_MA: {
                    return 'Maranhão';
                }

                case self::STATE_MT: {
                    return 'Mato Grosso';
                }

                case self::STATE_MS: {
                    return 'Mato Grosso do Sul';
                }

                case self::STATE_MG: {
                    return 'Minas Gerais';
                }

                case self::STATE_PA: {
                    return 'Pará';
                }

                case self::STATE_PB: {
                    return 'Paraíba';
                }

                case self::STATE_PR: {
                    return 'Paraná';
                }

                case self::STATE_PE: {
                    return 'Pernambuco';
                }

                case self::STATE_PI: {
                    return 'Piauí';
                }

                case self::STATE_RJ: {
                    return 'Rio de Janeiro';
                }

                case self::STATE_RN: {
                    return 'Rio Grande do Norte';
                }

                case self::STATE_RS: {
                    return 'Rio Grande do Sul';
                }

                case self::STATE_RO: {
                    return 'Rondônia';
                }

                case self::STATE_RR: {
                    return 'Roraima';
                }

                case self::STATE_SC: {
                    return 'Santa Catarina';
                }

                case self::STATE_SP: {
                    return 'São Paulo';
                }

                case self::STATE_SE: {
                    return 'Sergipe';
                }

                case self::STATE_TO: {
                    return 'Tocantins';
                }

                default: {
                    return '';
                }
            }
        }

        /**
         * Returns the Status listing
         *
         * @return array
         */
        public static function getStateList()
        {
            return [
                self::STATE_AC => self::getStateById(self::STATE_AC),
                self::STATE_AL => self::getStateById(self::STATE_AL),
                self::STATE_AP => self::getStateById(self::STATE_AP),
                self::STATE_AM => self::getStateById(self::STATE_AM),
                self::STATE_BA => self::getStateById(self::STATE_BA),
                self::STATE_CE => self::getStateById(self::STATE_CE),
                self::STATE_DF => self::getStateById(self::STATE_DF),
                self::STATE_ES => self::getStateById(self::STATE_ES),
                self::STATE_GO => self::getStateById(self::STATE_GO),
                self::STATE_MA => self::getStateById(self::STATE_MA),
                self::STATE_MT => self::getStateById(self::STATE_MT),
                self::STATE_MS => self::getStateById(self::STATE_MS),
                self::STATE_MG => self::getStateById(self::STATE_MG),
                self::STATE_PA => self::getStateById(self::STATE_PA),
                self::STATE_PB => self::getStateById(self::STATE_PB),
                self::STATE_PR => self::getStateById(self::STATE_PR),
                self::STATE_PE => self::getStateById(self::STATE_PE),
                self::STATE_PI => self::getStateById(self::STATE_PI),
                self::STATE_RJ => self::getStateById(self::STATE_RJ),
                self::STATE_RN => self::getStateById(self::STATE_RN),
                self::STATE_RS => self::getStateById(self::STATE_RS),
                self::STATE_RO => self::getStateById(self::STATE_RO),
                self::STATE_RR => self::getStateById(self::STATE_RR),
                self::STATE_SC => self::getStateById(self::STATE_SC),
                self::STATE_SP => self::getStateById(self::STATE_SP),
                self::STATE_SE => self::getStateById(self::STATE_SE),
                self::STATE_TO => self::getStateById(self::STATE_TO),
            ];
        }

        /**
         * @return array
         */
        public static function getStateRange()
        {
            $items = self::getStateList();
            $range = [];

            foreach ($items as $key => $value) {
                $range[] = $key;
            }

            return $range;
        }
        #endregion
        #endregion
    }
