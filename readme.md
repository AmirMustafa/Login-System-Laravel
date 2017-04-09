# Login System in Laravel

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

This project shows the Login System Functionality which follows CRUD rule. This project uses MySql as the database. For better understanding proper comments are provided.

## Installation

1. Download [Composer](https://getcomposer.org/) for better Laravel Management.<br>
2. Clone this repository or download zip file<br>
3. Place this project inside XAMPP or WAMP and Start the Apache and phpMyAdmin<br><br>
4. Rename folder to laravel3.<br>
5. Create database laravel in phpmyAdmin and import laravel.sql file provided in the project.<br>
6. Open .env file in root directory of project and configure your database as shown in the snippet below.<br>

```DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=123456
```
7. If you are using localhost without port change the localhost:8888 to localhost in the following pages i.e. signup.blade.php (line - 196 and 225), login.blade.php(line 196 and 210), home.blade.php(line 32, 63 and 64). Note to get these files goto resources/views/<br>
8. In the browser open url: localhost/laravel3/signup.<br>

## Preview


![Screenshot of Laravel Login Page1 ](https://cloud.githubusercontent.com/assets/15896579/24839314/665da890-1d75-11e7-8ed6-f5183eb75545.png?raw=true "Screenshot of Laravel Login Page1")
<br/><br/><br/>

![Screenshot of Laravel Login Page2 ](https://cloud.githubusercontent.com/assets/15896579/24839315/69744a48-1d75-11e7-8067-47d55b899179.png?raw=true "Screenshot of Laravel Login Page2")
<br/><br/><br/>

![Screenshot of Laravel Login Page3 ](https://cloud.githubusercontent.com/assets/15896579/24839316/6c165d4a-1d75-11e7-9679-6af56e028bc9.png?raw=true "Screenshot of Laravel Login Page3")
<br/><br/><br/>

![Screenshot of Laravel Login Page4 ](https://cloud.githubusercontent.com/assets/15896579/24839317/6ecfe0d8-1d75-11e7-8dea-a403163a9112.png?raw=true "Screenshot of Laravel Login Page4")
<br/><br/><br/>

![Screenshot of Laravel Login Page5 ](https://cloud.githubusercontent.com/assets/15896579/24839318/7258bc66-1d75-11e7-93e4-5d46b2507d77.png?raw=true "Screenshot of Laravel Login Page5")
<br/><br/><br/>

![Screenshot of Laravel Login Page6 ](https://cloud.githubusercontent.com/assets/15896579/24839322/76d2e492-1d75-11e7-9d30-34038cf0dfc8.png?raw=true "Screenshot of Laravel Login Page6")
<br/><br/><br/>



## License

(The MIT License)

Copyright (c) 2016 Amir Mustafa

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


