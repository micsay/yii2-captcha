# yii2-captcha
###installation
`php composer.phar require micsay/yii2-captcha ~1.0`
###Usage
```
use micsay\captcha\CaptchaBuilder;
\\...

public function actionCaptcha(){
    $captcha = new CaptchaBuilder();
    $verifycode = $captcha->getPharse();
    $base64 = $captcha->base64();
    return $base64;
}

```

###API
```
    $captcha = new CaptchaBuilder();
    $captcha->minLength = 4;
    $captcha->maxLength = 5;
    $captcha->foreColor = 0x00ff00;
    $captcha->width = 80;
    $captcha->height = 45;
```
