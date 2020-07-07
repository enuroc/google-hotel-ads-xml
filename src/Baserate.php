<?php

namespace Bahiazul\GoogleHotelAds\Xml;

class Baserate extends MonetaryValue
{
    /**
     * A Boolean that indicates if this rate includes taxes and fees.
     * In general, set this value to "false" for US and Canadian end-users and
     * supply values for the <Tax> and <OtherFees> elements. If you use
     * all-inclusive prices, you may not be eligible to appear in the listings
     * if your prices do not separate out taxes and fees for US and Canadian
     * users.
     * For all other end-users, you typically include the taxes and fees in
     * the base rate and set the value of the all_inclusive attribute to "true".
     * For more information, refer to Taxes and Fees Policy.
     *
     * The default value is "false".
     *
     * @var bool
     */
    public $all_inclusive;
}
