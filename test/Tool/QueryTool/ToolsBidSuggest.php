<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 15:27
 */

require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Tool\QueryTool\V1\ToolsBidSuggest();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setPricing('PRICING_CPC');

print_r($client->excute($req));