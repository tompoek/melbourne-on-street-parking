# Melbourne On-street Parking Bay Sensors

Demo instructions: (local PHP environment)
1. Install [XAMPP](https://www.apachefriends.org/).
2. ```git clone https://github.com/tompoek/melbourne-on-street-parking && cd melbourne-on-street-parking```
3. ```cp visual.html execute_command.php /Applications/XAMPP/htdocs``` (copy the two files into XAMPP directory, my example: MacOS)
4. In XAMPP, run Apache and MySQL.
5. Open a web browser, navigate to ```localhost/visual.html``` then enjoy watching!

![Demo Image](./demo-img.png)

Progress:
* Schedule updateAllData() function every two mins
* On Bay 1: Extract (from hard-coded data) bay ID, last updated, and status description, then show in text
* Use data from console command output
* Extend this method to Bay 2
* Change bay color according to status description

TODO / TOFIX:
* Crawl status of more parking bays

Final Goal: Visualize in a map

Data source: https://data.melbourne.vic.gov.au/explore/dataset/on-street-parking-bay-sensors/information/

