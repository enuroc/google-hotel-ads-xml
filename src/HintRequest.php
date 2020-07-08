<?php

namespace Bahiazul\GoogleHotelAds\Xml;

/**
 * The root element of a Hint Request message. Google sends a Hint Request
 * message to your server and expects a response that specifies the hotels and
 * itineraries whose prices have changed since the last time Google received a
 * successful Hint Response from your server.
 *
 * If there are any price changes, Google then sends a <Query> that fetches the
 * updated pricing data for the indicated hotels and itineraries.
 *
 * For more information, consult Hint Request Messages.
 *
 * The Hint Request Message Schema defines the structure and constraints of a
 * Hint Request message.
 */
class HintRequest extends Base
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var DateTime
     */
    public $timestamp;

    /**
     * The last time that Google succeeded in getting a Hint Response message to
     * a Hint Request message.
     *
     * If this time is older than the last time you updated prices on your
     * server, then you should respond with a Hint Response message specifying
     * which hotels have changed.
     *
     * For more information, consult Hint Response Messages.
     *
     * @var DateTime
     */
    public $lastFetchTime;
}
