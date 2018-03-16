# heroku
стартер для деплоинга PHP-приложения

Чтобы приложение, использующее PHP, заработало на Heroku, оно должно иметь отношение к менеджеру зависимостей Composer. Даже если у нас просто один файл index.php, в котором нет никаких зависимостей, всё равно должен быть как минимум пустой файл `composer.json`, который позволяет сервису распознать, что это именно приложение PHP.

```

mkdir $(date +%Y%m%d_%H%M%S) && cd $_ && git clone -b php https://github.com/GossJS/heroku.git . && rm -rf .git

git init
heroku create
git add .
git commit -m 'first'
git push heroku master
heroku open

```

или можно забрать просто содержимое этой папки вместо первого шага

```
mkdir $(date +%Y%m%d_%H%M%S) && cd $_ && svn checkout https://github.com/GossJS/heroku/branches/php .

```
