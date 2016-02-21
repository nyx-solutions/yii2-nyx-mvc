<?php

    namespace nox\mvc\base;

    /**
     * Class Model
     *
     * @package nox\mvc
     */
    class Model extends \yii\base\Model
    {
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
        #endregion

        /**
         * @var bool
         */
        protected $isSearch = false;

        #region Public Methods
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
                case static::STATUS_INACTIVE: {
                    return 'Inativo';
                }

                case static::STATUS_ACTIVE: {
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
                case static::STATUS_INACTIVE: {
                    return '<span class="text-danger"><strong>Inativo</strong></span>';
                }

                case static::STATUS_ACTIVE: {
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
                static::STATUS_INACTIVE => static::getStatusById(static::STATUS_INACTIVE),
                static::STATUS_ACTIVE   => static::getStatusById(static::STATUS_ACTIVE)
            ];
        }

        /**
         * @return array
         */
        public static function getStatusRange()
        {
            $items = static::getStatusList();
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
                case static::YES: {
                    return 'Sim';
                }

                case static::NO: {
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
                case static::YES: {
                    return '<span class="label label-sm label-success">Sim</span>';
                }

                case static::NO: {
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
                static::YES => static::getYesNoById(static::YES),
                static::NO  => static::getYesNoById(static::NO)
            ];
        }

        /**
         * @return array
         */
        public static function getYesNoRange()
        {
            $items = static::getYesNoList();
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
                case static::GENDER_MALE: {
                    return 'Masculino';
                }

                case static::GENDER_FEMALE: {
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
                static::GENDER_MALE   => static::getGenderById(static::GENDER_MALE),
                static::GENDER_FEMALE => static::getGenderById(static::GENDER_FEMALE)
            ];
        }

        /**
         * @return array
         */
        public static function getGenderRange()
        {
            $items = static::getGenderList();
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
                case static::WEEKDAY_SUNDAY: {
                    return 'Domingo';
                }

                case static::WEEKDAY_MONDAY: {
                    return 'Segunda-feira';
                }

                case static::WEEKDAY_TUESDAY: {
                    return 'Terça-feira';
                }

                case static::WEEKDAY_WEDNESDAY: {
                    return 'Quarta-feira';
                }

                case static::WEEKDAY_THURSDAY: {
                    return 'Quinta-feira';
                }

                case static::WEEKDAY_FRIDAY: {
                    return 'Sexta-feira';
                }

                case static::WEEKDAY_SATURDAY: {
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
                case static::WEEKDAY_SUNDAY: {
                    return 'Dom';
                }

                case static::WEEKDAY_MONDAY: {
                    return 'Seg';
                }

                case static::WEEKDAY_TUESDAY: {
                    return 'Ter';
                }

                case static::WEEKDAY_WEDNESDAY: {
                    return 'Qua';
                }

                case static::WEEKDAY_THURSDAY: {
                    return 'Qui';
                }

                case static::WEEKDAY_FRIDAY: {
                    return 'Sex';
                }

                case static::WEEKDAY_SATURDAY: {
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
                static::WEEKDAY_SUNDAY    => static::getWeekdayById(static::WEEKDAY_SUNDAY),
                static::WEEKDAY_MONDAY    => static::getWeekdayById(static::WEEKDAY_MONDAY),
                static::WEEKDAY_TUESDAY   => static::getWeekdayById(static::WEEKDAY_TUESDAY),
                static::WEEKDAY_WEDNESDAY => static::getWeekdayById(static::WEEKDAY_WEDNESDAY),
                static::WEEKDAY_THURSDAY  => static::getWeekdayById(static::WEEKDAY_THURSDAY),
                static::WEEKDAY_FRIDAY    => static::getWeekdayById(static::WEEKDAY_FRIDAY),
                static::WEEKDAY_SATURDAY  => static::getWeekdayById(static::WEEKDAY_SATURDAY)
            ];
        }

        /**
         * @return array
         */
        public static function getWeekdayRange()
        {
            $items = static::getWeekdayList();
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
                case static::MONTH_JANUARY: {
                    return 'Janeiro';
                }

                case static::MONTH_FEBRUARY: {
                    return 'Fevereiro';
                }

                case static::MONTH_MARCH: {
                    return 'Março';
                }

                case static::MONTH_APRIL: {
                    return 'Abril';
                }

                case static::MONTH_MAY: {
                    return 'Maio';
                }

                case static::MONTH_JUNE: {
                    return 'Junho';
                }

                case static::MONTH_JULY: {
                    return 'Julho';
                }

                case static::MONTH_AUGUST: {
                    return 'Agosto';
                }

                case static::MONTH_SEPTEMBER: {
                    return 'Setembro';
                }

                case static::MONTH_OCTOBER: {
                    return 'Outubro';
                }

                case static::MONTH_NOVEMBER: {
                    return 'Novembro';
                }

                case static::MONTH_DECEMBER: {
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
                case static::MONTH_JANUARY: {
                    return 'Jan';
                }

                case static::MONTH_FEBRUARY: {
                    return 'Fev';
                }

                case static::MONTH_MARCH: {
                    return 'Mar';
                }

                case static::MONTH_APRIL: {
                    return 'Abr';
                }

                case static::MONTH_MAY: {
                    return 'Mai';
                }

                case static::MONTH_JUNE: {
                    return 'Jun';
                }

                case static::MONTH_JULY: {
                    return 'Jul';
                }

                case static::MONTH_AUGUST: {
                    return 'Ago';
                }

                case static::MONTH_SEPTEMBER: {
                    return 'Set';
                }

                case static::MONTH_OCTOBER: {
                    return 'Out';
                }

                case static::MONTH_NOVEMBER: {
                    return 'Nov';
                }

                case static::MONTH_DECEMBER: {
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
                static::MONTH_JANUARY   => static::getMonthById(static::MONTH_JANUARY),
                static::MONTH_FEBRUARY  => static::getMonthById(static::MONTH_FEBRUARY),
                static::MONTH_MARCH     => static::getMonthById(static::MONTH_MARCH),
                static::MONTH_APRIL     => static::getMonthById(static::MONTH_APRIL),
                static::MONTH_MAY       => static::getMonthById(static::MONTH_MAY),
                static::MONTH_JUNE      => static::getMonthById(static::MONTH_JUNE),
                static::MONTH_JULY      => static::getMonthById(static::MONTH_JULY),
                static::MONTH_AUGUST    => static::getMonthById(static::MONTH_AUGUST),
                static::MONTH_SEPTEMBER => static::getMonthById(static::MONTH_SEPTEMBER),
                static::MONTH_OCTOBER   => static::getMonthById(static::MONTH_OCTOBER),
                static::MONTH_NOVEMBER  => static::getMonthById(static::MONTH_NOVEMBER),
                static::MONTH_DECEMBER  => static::getMonthById(static::MONTH_DECEMBER)
            ];
        }

        /**
         * @return array
         */
        public static function getMonthRange()
        {
            $items = static::getMonthList();
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
                case static::YEAR_2000: {
                    return '2000';
                }

                case static::YEAR_2001: {
                    return '2001';
                }

                case static::YEAR_2002: {
                    return '2002';
                }

                case static::YEAR_2003: {
                    return '2003';
                }

                case static::YEAR_2004: {
                    return '2004';
                }

                case static::YEAR_2005: {
                    return '2005';
                }

                case static::YEAR_2006: {
                    return '2006';
                }

                case static::YEAR_2007: {
                    return '2007';
                }

                case static::YEAR_2008: {
                    return '2008';
                }

                case static::YEAR_2009: {
                    return '2009';
                }

                case static::YEAR_2010: {
                    return '2010';
                }

                case static::YEAR_2011: {
                    return '2011';
                }

                case static::YEAR_2012: {
                    return '2012';
                }

                case static::YEAR_2013: {
                    return '2013';
                }

                case static::YEAR_2014: {
                    return '2014';
                }

                case static::YEAR_2015: {
                    return '2015';
                }

                case static::YEAR_2016: {
                    return '2016';
                }

                case static::YEAR_2017: {
                    return '2017';
                }

                case static::YEAR_2018: {
                    return '2018';
                }

                case static::YEAR_2019: {
                    return '2019';
                }

                case static::YEAR_2020: {
                    return '2020';
                }

                case static::YEAR_2021: {
                    return '2021';
                }

                case static::YEAR_2022: {
                    return '2022';
                }

                case static::YEAR_2023: {
                    return '2023';
                }

                case static::YEAR_2024: {
                    return '2024';
                }

                case static::YEAR_2025: {
                    return '2025';
                }

                case static::YEAR_2026: {
                    return '2026';
                }

                case static::YEAR_2027: {
                    return '2027';
                }

                case static::YEAR_2028: {
                    return '2028';
                }

                case static::YEAR_2029: {
                    return '2029';
                }

                case static::YEAR_2030: {
                    return '2030';
                }

                case static::YEAR_2031: {
                    return '2031';
                }

                case static::YEAR_2032: {
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
                static::YEAR_2000 => static::getYearById(static::YEAR_2000),
                static::YEAR_2001 => static::getYearById(static::YEAR_2001),
                static::YEAR_2002 => static::getYearById(static::YEAR_2002),
                static::YEAR_2003 => static::getYearById(static::YEAR_2003),
                static::YEAR_2004 => static::getYearById(static::YEAR_2004),
                static::YEAR_2005 => static::getYearById(static::YEAR_2005),
                static::YEAR_2006 => static::getYearById(static::YEAR_2006),
                static::YEAR_2007 => static::getYearById(static::YEAR_2007),
                static::YEAR_2008 => static::getYearById(static::YEAR_2008),
                static::YEAR_2009 => static::getYearById(static::YEAR_2009),
                static::YEAR_2010 => static::getYearById(static::YEAR_2010),
                static::YEAR_2011 => static::getYearById(static::YEAR_2011),
                static::YEAR_2012 => static::getYearById(static::YEAR_2012),
                static::YEAR_2013 => static::getYearById(static::YEAR_2013),
                static::YEAR_2014 => static::getYearById(static::YEAR_2014),
                static::YEAR_2015 => static::getYearById(static::YEAR_2015),
                static::YEAR_2016 => static::getYearById(static::YEAR_2016),
                static::YEAR_2017 => static::getYearById(static::YEAR_2017),
                static::YEAR_2018 => static::getYearById(static::YEAR_2018),
                static::YEAR_2019 => static::getYearById(static::YEAR_2019),
                static::YEAR_2020 => static::getYearById(static::YEAR_2020),
                static::YEAR_2021 => static::getYearById(static::YEAR_2021),
                static::YEAR_2022 => static::getYearById(static::YEAR_2022),
                static::YEAR_2023 => static::getYearById(static::YEAR_2023),
                static::YEAR_2024 => static::getYearById(static::YEAR_2024),
                static::YEAR_2025 => static::getYearById(static::YEAR_2025),
                static::YEAR_2026 => static::getYearById(static::YEAR_2026),
                static::YEAR_2027 => static::getYearById(static::YEAR_2027),
                static::YEAR_2028 => static::getYearById(static::YEAR_2028),
                static::YEAR_2029 => static::getYearById(static::YEAR_2029),
                static::YEAR_2030 => static::getYearById(static::YEAR_2030),
                static::YEAR_2031 => static::getYearById(static::YEAR_2031)
            ];
        }

        /**
         * @return array
         */
        public static function getYearRange()
        {
            $items = static::getYearList();
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
        #endregion
    }
