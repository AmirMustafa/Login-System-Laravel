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


![Screenshot of LinkedIn Login API Page 1 ](https://cloud.githubusercontent.com/assets/15896579/24588640/a738540a-17e9-11e7-8598-c8584ebf0721.png?raw=true "Screenshot of LinkedIn Login API Page 1")
<br/><br/><br/>

![Screenshot of LinkedIn Login API Page 2](https://cloud.githubusercontent.com/assets/15896579/24588641/aa385376-17e9-11e7-9cf1-320aa39360f6.png?raw=true "Screenshot of LinkedIn Login API Page 2")
<br/><br/><br/>

![Screenshot of LinkedIn Login API Page 3](https://cloud.githubusercontent.com/assets/15896579/24588642/aea3e736-17e9-11e7-96fa-5c13f5e54358.png?raw=true "Screenshot of LinkedIn Login API Page 3")
<br/><br/><br/>

![Screenshot of LinkedIn Login API Page 4](https://cloud.githubusercontent.com/assets/15896579/24588643/b25e04b0-17e9-11e7-9c65-7d3749819624.png?raw=true "Screenshot of LinkedIn Login API Page 4")
<br/><br/><br/>

![Screenshot of LinkedIn APP Dashboard](https://cloud.githubusercontent.com/assets/15896579/24588644/b7978ea6-17e9-11e7-80ef-595f25b69b0d.png?raw=true "Screenshot of LinkedIn APP Dashboard")
<br/><br/><br/>

![Screenshot of LinkedIn APP Dashboard](https://cloud.githubusercontent.com/assets/15896579/24588646/bca3ecfa-17e9-11e7-9489-c92a8a00ae1c.png?raw=true "Screenshot of LinkedIn APP Dashboard")

![Screenshot of LinkedIn APP Dashboard](https://cloud.githubusercontent.com/assets/15896579/24588647/c0acdf00-17e9-11e7-98bf-7f4ee287a500.png?raw=true "Screenshot of LinkedIn APP Dashboard")
<br/><br/><br/>

![Screenshot of LinkedIn APP Dashboard](https://cloud.githubusercontent.com/assets/15896579/24588648/c44372fa-17e9-11e7-96c9-87a907f7139a.png?raw=true "Screenshot of LinkedIn APP Dashboard")


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


