<?php
namespace IndianShareMarket\Services;

use IndianShareMarket\DataProviders\Url;
use IndianShareMarket\Services\ParseDocument;
use IndianShareMarket\Exceptions\ExchangeException;

class Bse implements ExchangeInterface
{
    /** @var $parseDocument \IndianShareMarket\Services\ParseDocument */
    private $parseDocument;

    /** Nse constructor. */
    public function __construct()
    {
        $this->parseDocument = new ParseDocument();
    }

    public function stockList(string $format): array
    {
        throw new ExchangeException(
            'Currently this feature is not available :(... By the time you can download Bse stocks from here : '
            .Url::$bseStocks
        );

        return [];
    }
}
