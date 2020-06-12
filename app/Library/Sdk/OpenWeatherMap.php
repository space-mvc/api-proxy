<?php

namespace App\Library\Sdk;

/**
 * Class OpenWeatherMap
 *
 * @package App\Library\Sdk
 */
class OpenWeatherMap
{
    /** @var string $appId */
    protected $appId = '1ef1f0af7d3238f2b57951577a1f8356';

    /** @var string $baseUrl */
    public $baseUrl = 'http://api.openweathermap.org/data/2.5/weather?';

    /** @var string $query */
    protected $query = 'london';

    /** @var string $units */
    protected $units = ''; // '', 'metric', 'imperial'

    /**
     * getWeatherForecast.
     *
     * @return false|string
     */
    public function getWeatherForecast()
    {
        return json_decode(file_get_contents($this->baseUrl.'appid='.$this->appId.'&q='.$this->query.'&units='.$this->units));
    }

    /**
     * setQuery.
     *
     * @param $query
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }

    /**
     * setUnits.
     *
     * @param $units
     */
    public function setUnits($units)
    {
        $this->units = $units;
    }

}
