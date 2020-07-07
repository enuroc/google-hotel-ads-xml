<?php

namespace Bahiazul\GoogleHotelAds\Xml;

class PhotoURL
{
    /**
     * Specifies the location of the photo. The location should be public
     * (not behind a firewall) and should include the protocol (http://).
     *
     * @var string
     */
    public $url;

    /**
     * Defines the caption for the photo. This element takes a single child
     * element, <Text>, which has two required attributes, text and language.
     * The text attribute is the caption, and the language attribute specifies
     * a two-letter language code such as "en".
     *
     * @var Caption
     */
    public $caption;
}
