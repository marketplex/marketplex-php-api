<?php
namespace Marketplex\Api;

use Marketplex\Api\Model\Marketplace;
use Marketplex\Api\Model\MarketplaceConfiguration;


class ApiMarketplaces extends ApiAbstract {
    /**
     * Retourne la liste des places de marché et leur configuration
     * @return Marketplace[]
     */
    public function getList() {
        return $this->client->get("/marketplaces/list");
    }
    
    public function setConfiguration($marketplace, MarketplaceConfiguration $configuration) {
      return $this->client->post("/marketplaces/configuration", [
          "marketplace" => $marketplace,
          "configuration" => $configuration,
      ]);
    }
}
