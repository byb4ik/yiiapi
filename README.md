1. Разворачиваем проект
2. Применяем миграции
3. По умолчанию в базе создается пользователь:
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => '100admin',
            'accessToken' => '100token100',
4. Консольная команда для добавления:
 yii import
5. Консольная команда для обновления:
 yii update
4. Реализовано 2 метода 
GET /currencies - возвращает список курсов валют с возможность пагинации
GET /currency/<id> - возвращает курс валюты для переданного id
5. API закрыто bearer авторизацией.
6. Для авторизации используйте токен 100token100