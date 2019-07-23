<?php
/*  1.https://www.youtube.com/watch?v=kyDE63z2n4o */




/*2.https://www.youtube.com/watch?v=lmKIdQECYyc*/
Composer - менеджер зависимостей для PHP (Dependency Manager for PHP) или пакетный менеджер 
(зависимости это пакеты - логически законченные сторонние или собственные наработки, использующиеся в проекте).
Все зависимости composer хранит в файле composer.json.
Создать этот файл можно командой composer init.
Делается это командой create-project ("Create new project from a package into given directory.") в папке, 
где хотите создать папку проекта.
Например возьмём пакет продвинутой заготовки для приложения на yii2 
(https://packagist.org/packages/yiisoft/yii2-app-advanced). Значит этот пакет загрузили на packagist.org.

Командой composer update(Updates your dependencies to the latest version according to composer.json, and updates the composer.lock file.)
 – обновляет все установленные (или установит заново случайно удалённые) пакеты до свежих версий. 
 А может и не обновлять версии до самых свежих, если создать специальный composer.lock файл 
 — это позволяет зафиксировать комбинацию из стабильных версий всех используемых в проекте библиотек

?>