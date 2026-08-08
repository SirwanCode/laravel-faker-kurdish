<?php

namespace sirwancode\laravelfakerkurdish;

class KuFaker  
{
   private static $sorani;
   private static $kurmanji;

 
   private static function initializeVariables()
   {
       if (is_null(self::$sorani) || is_null(self::$kurmanji)){
            self::$sorani =   include __DIR__ . '/libs/sorani.php';
            self::$kurmanji = include __DIR__ . '/libs/kurmanji.php';
       }
     
   }

   private static function genRndValue($type,$dialect)
   {
      self::initializeVariables();
      $allValues=[];
      if($dialect=='sorani'){
         $allValues=self::$sorani[$type];
      }else{
        $allValues=self::$kurmanji[$type];
      }
       
      return isset($allValues) ? $allValues[array_rand($allValues)]: null;
   }

   public static function sFirstname()
   {
        return self::genRndValue('firstname','sorani');
   }
   public static function kFirstname()
   {
        return self::genRndValue('firstname','kurmanji');
   }
   public static function sLastname()
   {
        return self::genRndValue('lastname','sorani');
   }
   public static function kLastname()
   {
        return self::genRndValue('lastname','kurmanji');
   }
   public static function sFullname()
   {
        return self::genRndValue('firstname','sorani') . ' ' . self::genRndValue('lastname','sorani');
   }
   public static function kFullname()
   {
        return self::genRndValue('firstname','kurmanji') . ' ' . self::genRndValue('lastname','kurmanji');
   }
   public static function sEmail()
   {
        $special=['_','.',''];
        $spc=$special[array_rand($special)];
        return   self::genRndValue('firstnameEn','sorani') .
                           $spc . self::genRndValue('lastnameEn','sorani') . 
                           self::genRndValue('email','sorani') ;
   }
   public static function kEmail()
   {
        $special=['_','.',''];
        $spc=$special[array_rand($special)];
        return   self::genRndValue('firstnameEn','kurmanji') .
                           $spc . self::genRndValue('lastnameEn','kurmanji') . 
                           self::genRndValue('email','kurmanji') ;
   }
   public static function sAddress()
   {
      return self::genRndValue('address','sorani');
   }
   public static function kAddress()
   {
      return self::genRndValue('address','kurmanji');
   }
   public static function sCountry()
   {
     return self::genRndValue('country','sorani');
   }
   public static function kCountry()
   {
     return self::genRndValue('country','kurmanji');
   }
   public static function sProvince()
   {
     return self::genRndValue('province','sorani');
   }
   public static function kProvince()
   {
     return self::genRndValue('province','kurmanji');
   }
   public static function sCity()
   {
     return self::genRndValue('city','sorani');
   }
   public static function kCity()
   {
     return self::genRndValue('city','kurmanji');
   }

   public static function sTelephone()
   {
     return self::genRndValue('telephone','sorani') .' '. rand(1000000,9999999);
   }
   public static function kTelephone()
   {
     return self::genRndValue('telephone','kurmanji') .' '. rand(1000000,9999999);
   }
   public static function sMobile()
   {
     return self::genRndValue('mobile','sorani') .' '.  rand(100,999) .' '. rand(1000,9999);
   }
   public static function kMobile()
   {
     return self::genRndValue('mobile','kurmanji') .' '.  rand(100,999) .' '. rand(1000,9999);
   }
   public static function sCompany()
   {
     return self::genRndValue('company','sorani');
   }
   public static function kCompany()
   {
     return self::genRndValue('company','kurmanji');
   }
   public static function sJob()
   {
     return self::genRndValue('job','sorani');
   }
   public static function kJob()
   {
     return self::genRndValue('job','kurmanji');
   }
   public static function sColor()
   {
     return self::genRndValue('color','sorani');
   }
   public static function kColor()
   {
     return self::genRndValue('color','kurmanji');
   }

   public static function sProduct()
   {
     return self::genRndValue('product','sorani');
   }
   public static function kProduct()
   {
     return self::genRndValue('product','kurmanji');
   }

   public static function sWebsite()
   {
     return  self::genRndValue('protocol','sorani'). '://www.'.
            self::genRndValue('firstnameEn','sorani'). self::genRndValue('lastnameEn','sorani').
            '.'. self::genRndValue('internet','sorani');
   }
   public static function kWebsite()
   {
     return  self::genRndValue('protocol','kurmanji'). '://www.'.
            self::genRndValue('firstnameEn','kurmanji'). self::genRndValue('lastnameEn','kurmanji').
            '.'. self::genRndValue('internet','kurmanji');
   }
   public static function sInternet()
   {
     return  self::genRndValue('internet','sorani');
   }
   public static function kInternet()
   {
     return  self::genRndValue('internet','kurmanji');
   }

   public static function sWord()
   {
     return  self::genRndValue('word','sorani');
   }
   public static function kWord()
   {
     return  self::genRndValue('word','kurmanji');
   }
   public static function sSentence()
   {
     return  self::genRndValue('sentence','sorani');
   }
   public static function kSentence()
   {
     return  self::genRndValue('sentence','kurmanji');
   }
   public static function sParagraph()
   {
     return  self::genRndValue('paragraph','sorani');
   }
   public static function kParagraph()
   {
     return  self::genRndValue('paragraph','kurmanji');
   }
}