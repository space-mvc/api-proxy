# api-proxy

## Install instructions

1) Run ```git clone https://github.com/space-mvc/api-proxy.git```

2) Run ```composer install```

3) Create a virtual host as http://local.api-proxy.com for example 

4) Setup laravel folder permissions

```sudo chgrp -R www-data storage bootstrap/cache```

```sudo chmod -R ug+rwx storage bootstrap/cache```

--------------------------------------

## Test Url

http://local.api-proxy.com/weather-forecast?q=new%20york

## Example Controller 

/app/Http/Controllers/WeatherController.php

## Example SDK File

/app/Library/Sdk/OpenWeatherMap.php

### Tested Queries (for open weather map)

/weather-forecast?q=new%20york

/weather-forecast?q=london

/weather-forecast?q=manchester

/weather-forecast?q=england
