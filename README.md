# Irion

## Troubleshooting

- Error: Call to undefined function trans_fb() --> `composer dump-autoload`

## Convert xlsx to laravel data

The Strukturplan can be converted to json data, which will generate all the routes and blades.
Only manual step is to add an index to each row in the Strukturplan.
The index has following syntag XXYYZZ where XX describes the 1st Menu Level, YY the 2nd Menu Level und ZZ the 3rd Menu Level.

This can be achieved by

* adding the column A to the Excel Sheet
* add INDEX as title in A1
* add 10000 to A2
* use the following command on all other rows: =WENN(B3<>"";RUNDEN(A2+10000;-4);WENN(C3<>"";RUNDEN(A2+100;-2);WENN(D3<>"";A2+1;0)))

/generator/*.json files show how the json should be formatted.

After updating the json-files the /generator/generator.php should be run.
This creates/updates the following files:

* /generator/generator.php ==> /routes/web.php
* /generator/nav-{{lang}}.php ==> /ressources/views/lang/{{lang}}/nav.blade.php
