# php-forex-daytrader-signals-apis
View data and signals for binary options markets from a single dashboard, on a Mac, PC, or mobile device.
> **Warning:** This sample is not meant for production. It serves as a rough draft or proof of concept. 
> Code syntax, formatting, comments, free typose and flagrant misuse of CSS may be offensive to the senses.

![Screen shot](https://github.com/185SE14THST/php-forex-daytrader-signals-apis/blob/master/sample.jpg "Sample #1")

This repo contains the samples that demonstrate a 'getting a currency pair quote' for day traders and currency exchange persons. With further development the sample may show:
* Integration with live 3rd party currency data providers via REST API.
* Styled charts with associates news articles from 3rd party news sources
* A simple algorithm for signaling recomended trades.
* Responsive design, 'no-blink' pages and mobile friendly.

> **Note:** If you are unfamiliar with Git and GitHub, you can download the entire collection as a 
> [ZIP file](../../archive/master.zip), but be 
> sure to unzip everything to access shared dependencies. 

## Using the sample

![Screen shot](https://github.com/185SE14THST/php-forex-daytrader-signals-apis/blob/master/sample2.jpg "Sample #2")

The easiest way to use these samples without using Git is to download the zip file containing the current version (using the following link or by clicking the "Download ZIP" button on the repo page). You can then unzip the entire archive and use the samples in Visual Studio Code. Node JS is also required prior to using this sample.

   [Download the samples ZIP](../../archive/master.zip)

   **Deploy to local development enviroment:** 
   1. Unzip the files to the folder you will be serviing your web files from. (Apache is recommended)
   ```
cd /var/www/html
unzip master.zip
```
   2. Run a 'composer install' to include dependencies at the root of the project folder.
```
cd path/to/project/folder
composer install
```
   3. Create a local host record for fadex.demo.com (hosts file)
```
127.0.0.1   fadex.demo.com
```
   4. Modify the site directive with the following followed by an apache2 service restart. Use the appropriate folder paths based on where you unzipped the master.zip file.
```
 ServerName fadex.demo.com
 DocumentRoot /var/www/html/project_fadex/web
 <Directory /var/www/html/project_fadex/web>
         Options -Indexes +FollowSymLinks +MultiViews
         AllowOverride All
         Require all granted
 </Directory>
 ErrorLog /var/log/apache2/project_fadex_error.log
```
   5. Open your web browser and navigate to fadex.demo.com .
   6. Click on the 'Quick Analysis...' button several times to simulate retriving a currency pair quote.
   
> **Note:** This project has been tested using Mozilla FIrefox. Chrome based browsers require specific CSS modifications.

[Get a free copy of Visual Studio Code with support for building Angular apps](https://code.visualstudio.com/download)

## Open source tool kit
The following technologies were used to develope this sample:
* [Microsoft Azure](https://azure.microsoft.com/en-us/)
* [CentOS 7 x86_64 minimal](https://www.centos.org/)
* [Visual Studio Code version 1.11](https://code.visualstudio.com/)
* [Bootstrap v4.0.0-alpha.6](https://v4-alpha.getbootstrap.com/)
* [Symfony 3.3](https://symfony.com/download)
* [Apache2](http://httpd.apache.org/)
* [Syntevo SmartGit 17.0.3](http://www.syntevo.com/smartgit/)
* [Oracle VirtualBox 5.1](https://www.virtualbox.org/)


## License

Copyright (c) JP. All rights reserved.

Licensed under the [MIT](LICENSE.txt) License.

## Contact for collaboration
**Projects:** Intrested in taking this sample development even further? Contact the author of this sample for collaborative opportunities.
