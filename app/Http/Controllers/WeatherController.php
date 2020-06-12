<?php

namespace App\Http\Controllers;

use App\Library\Sdk\OpenWeatherMap;
use Illuminate\Http\Request;

/**
 * Class WeatherController
 *
 * @package App\Http\Controllers\Base
 */
class WeatherController extends Controller
{
    /**
     * GET Weather forecast by location.
     * Url /weather-forecast?q={location}
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getWeatherForecast(Request $request)
    {
        try {

            // get sdk
            $sdk = new OpenWeatherMap;

            // set weather location
            if(!empty($request->q)) {
                $sdk->setQuery($request->q);
            }

            // set weather units
            if(!empty($request->units)) {
                $sdk->setUnits($request->units);
            }

            // get weather forecast
            $result = $sdk->getWeatherForecast();

            // return success response
            return response()->json([
                'data' => $result
            ]);

        } catch (\Exception $e) {

            // return exception response
            return response()->json(
                [
                    'exception' => $e->getMessage()
                ]
            );
        }
    }
}
