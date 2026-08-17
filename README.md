 #   🚀Kurdish Faker   
 
A comprehensive Kurdish (Sorani and Kurmanji) Faker for  Laravel Framework, providing realistic fake data for testing, development, and database seeding.  

## ✨ Features

- 👤 Generate realistic Kurdish (Sorani and Kurmanji) values
- 🎊 Ready for Laravel database factories and seeders
- 🧪 Perfect for testing and development
- 📦 Easy installation with Composer
- ❤️ Open source and community-driven  


<br>

 

## 🔧Installation  


Step 1  

get install package with composer  

```cmd

composer require sirwancode/laravel-faker-kurdish

```

 
Step 2  

add Class to your controller or wherever you need 

```php 
use sirwancode\laravelfakerkurdish\KuFaker;
```

---

### ➿Manual Installation

If you prefer to install Laravel Faker Kurdish manually, follow these steps.

#### 1. Download the package

Download the latest release and extract it.

#### 2. Add the package to your Laravel project

Create a `packages` directory in the root of your Laravel application and place the package inside it.

Your project structure should look like this:

```text
myproject/
├── app/
├── config/
├── resources/
├── routes/
├── vendor/
└── packages/
    └── laravel-faker-kurdish/
        ├── src/
        ├── composer.json
        ├── LICENSE
        └── README.md
 
```
#### 3. Configure autoloading
Add the package namespace to your application's composer.json:

```text
"autoload": {
    "psr-4": {
        "App\\": "app/",
        "sirwancode\\laravelfakerkurdish\\": "packages/laravel-faker-kurdish/src/"
    }
}
 
```

#### 4.Rebuilds autoload index
run following command

```bash
composer dump-autoload
 
```

#### 5.add Class to your controller or wherever you need
```php 
use sirwancode\laravelfakerkurdish\KuFaker;
```



---


## ⚡ Usage  

in your codes just use one of the following methods:

| Method | dialect | Description |
|--------|-------------|-------------|
| ` KuFaker::sFullname()` | sorani |Generate a random Kurdish full name. |
| ` KuFaker::kFullname()` | kurmanji | Generate a random Kurdish full name. |
| ` KuFaker::sFirstname()` | sorani |Generate a random Kurdish first name. |
| ` KuFaker::kFirstname()` | kurmanji | Generate a random Kurdish first name. | 
| ` KuFaker::sLastname()` | sorani |Generate a random Kurdish last name. |
| ` KuFaker::kLastname()` | kurmanji | Generate a random Kurdish last name. | 
| ` KuFaker::sEmail()` | sorani |Generate a random email address. |
| ` KuFaker::kEmail()` | kurmanji | Generate a random email address. | 
| ` KuFaker::sAddress()` | sorani |Generate a random Kurdish address. |
| ` KuFaker::kAddress()` | kurmanji | Generate a random Kurdish addresse. | 
| ` KuFaker::sCountry()` | sorani |Generate a random country name. |
| ` KuFaker::kCountry()` | kurmanji | Generate a random  country name. | 
| ` KuFaker::sProvince()` | sorani |Generate a random Kurdish province name |
| ` KuFaker::kProvince()` | kurmanji | Generate a random Kurdish province name. | 
| ` KuFaker::sCity()` | sorani |Generate a random Kurdish city name. |
| ` KuFaker::kCity()` | kurmanji | Generate a random Kurdish city name. | 
| ` KuFaker::sTelephone()` | sorani |Generate a random telephone number. |
| ` KuFaker::kTelephone()` | kurmanji | Generate a random telephone numbere. | 
| ` KuFaker::sMobile()` | sorani |Generate a random mobile number. |
| ` KuFaker::kMobile()` | kurmanji | Generate a random mobile number. | 
| ` KuFaker::sCompany()` | sorani |Generate a random company . |
| ` KuFaker::kCompany()` | kurmanji | Generate a random company. | 
| ` KuFaker::sJob()` | sorani |Generate a random job title. |
| ` KuFaker::kJob()` | kurmanji | Generate a random job title. | 
| ` KuFaker::sColor()` | sorani |Generate a random Kurdish color. |
| ` KuFaker::kColor()` | kurmanji | Generate a random Kurdish color. | 
| ` KuFaker::sProduct()` | sorani |Generate a random product. |
| ` KuFaker::kProduct()` | kurmanji | Generate a random product. | 
| ` KuFaker::sWebsite()` | sorani |Generate a random website address. |
| ` KuFaker::kWebsite()` | kurmanji | Generate a random website address. | 
| ` KuFaker::sInternet()` | sorani |Generate a random internet protocol. |
| ` KuFaker::kInternet()` | kurmanji | Generate a random internet protocol. | 
| ` KuFaker::sWord()` | sorani |Generate a random Kurdish word. |
| ` KuFaker::kWord()` | kurmanji | Generate a random Kurdish word. | 
| ` KuFaker::sSentence()` | sorani |Generate a random  Kurdish sentence. |
| ` KuFaker::kSentence()` | kurmanji | Generate a random Kurdish  sentence. | 
| ` KuFaker::sParagraph()` | sorani |Generate a random Kurdish  paragraph. |
| ` KuFaker::kParagraph()` | kurmanji | Generate a random Kurdish paragraph. | 


 ---

<h1 align="right" dir="rtl">🇹🇯 کوردی Kurdî </h1>

## :book: دەربارەی پڕۆژە  


فەیکەرێکی گشتگیری کوردی (سۆرانی و کرمانجی) بۆ چوارچێوەی لاراڤێل، دابینکردنی داتای ساختەی واقیعی بۆ تاقیکردنەوە و پەرەپێدان، و پڕکردنەوەی داتابەیس.  
<br>
Sextekariyek berfireh a Kurdî (Soranî û Kurmancî) ji bo Çarçoveya Laravel, ku daneyên rastîn ên sexte ji bo ceribandin, pêşvebirin û dagirtina daneyê peyda dike

## ✨ تایبەتمەندیەکان Taybetmendî

- 👤 درووستکردنی ووشەی واقیعی کوردی (سۆرانی و کرمانجی) Peyvên rastîn ên Kurdî (Soranî û Kurmancî) çêbikin
- 🎊 ئامادەیە بۆ کارگەکانی داتابەیسی لاراڤێل و تۆوکەرەکان Ji bo kargeh û tovkerên databasa Laravel amade ye
- 🧪 تەواو گونجاوە بۆ تاقیکردنەوە و پەرەپێدان Ji bo ceribandin û pêşvebirinê bêkêmasî ye
- 📦 دانانی ئاسانە بە کۆمپۆزەر Sazkirina hêsan bi Composer re
- ❤️ سەرچاوە کراوە و کۆمەڵایەتی Çavkaniya vekirî û ji hêla civakê ve tê rêvebirin


<br>

 

## 🔧دامەزراندن sazkirin  


هەنگاوی یەکەم - gava 1 

پاکێجێک لەگەڵ composer دابمەزرێنە
pakêtê bi composer saz bike


```cmd

composer require sirwancode/laravel-faker-kurdish


```

 
هەنگاوی دووەم - gava 2  

کلاس زیاد بکە بۆ کۆنترۆڵکەرەکەت یان لە هەر شوێنێک کە پێویستت پێی بێت  

Class li kontrolkera xwe an li her deverê ku hûn hewce ne zêde bikin  



```php 
use sirwancode\laravelfakerkurdish\KuFaker;
```


 ## ⚡ بەکارهێنان Bikaranîn  

لە کۆدەکانتدا تەنها یەکێک لەو میتۆدانە بەکاربهێنە کە لە خشتەی سەرەوەدا باسکراوە  

Di kodên xwe de tenê yek ji method ku di tabloya jorîn de hatine behs kirin bikar bînin
