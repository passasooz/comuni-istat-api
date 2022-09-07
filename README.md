![Alt text](https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Flag_of_Italy.svg/320px-Flag_of_Italy.svg.png)

# Comuni ISTAT API

## Endpoints

Each endpoint returns dataset in **JSON FORMAT**
All requests with method **GET** and **HTTPS** protocol

| RESULT | URL | RESPONSE | PARAMS |
| ------ | ------ | ------ | ------ |
| Municipalities | [https://comuni-istat-api.herokuapp.com/api/comuni][all] | Array []
| Municipality's codes | [https://comuni-istat-api.herokuapp.com/api/comuni/codici][allWithCodes] | Object { key: value }
| Municipality's details | [https://comuni-istat-api.herokuapp.com/api/comune/{municipalityCode}][comuneDetail] | Object { key: value } | Municipality's code
| Provinces | [https://comuni-istat-api.herokuapp.com/api/province][provinces] | Array []
| Provinces of a region | [https://comuni-istat-api.herokuapp.com/api/province/{regionName}][provinceRegione] | Array [] | Region name
| Municipalities of a province | [https://comuni-istat-api.herokuapp.com/api/provincia/{provinceNameShort}/comuni][comuniProvincia] | Array [] | Province name (short)
| Regions | [https://comuni-istat-api.herokuapp.com/api/regioni][regioni] | Array []
| Municipalities of a region | [https://comuni-istat-api.herokuapp.com/api/regione/{regionName}/comuni][comuniRegone] | Array [] | Region name
| Provinces name (short) or Car Codes | [https://comuni-istat-api.herokuapp.com/api/sigle-auto][carCodes] | Array []

#### This collection is extract from an Excel published by **ISTAT** (Italian National Istitute of Statistics)

## License

GPL

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

   [all]: <https://comuni-istat-api.herokuapp.com/api/comuni>
   [allWithCodes]: <https://comuni-istat-api.herokuapp.com/api/comuni/codici>
   [comuneDetail]: <https://comuni-istat-api.herokuapp.com/api/comune/1001>
   [provinces]: <https://comuni-istat-api.herokuapp.com/api/province>
   [provinceRegione]: <https://comuni-istat-api.herokuapp.com/api/province/Lombardia>
   [comuniProvincia]: <https://comuni-istat-api.herokuapp.com/api/provincia/BG/comuni>
   [regioni]: <https://comuni-istat-api.herokuapp.com/api/regioni>
   [comuniRegone]: <https://comuni-istat-api.herokuapp.com/api/regione/Lombardia/comuni>
   [carCodes]: <https://comuni-istat-api.herokuapp.com/api/sigle-auto>
