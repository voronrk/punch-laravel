# Задание 14
1-2. Связи между моделями реализованы в модели Punch (один-ко-многим для чтения, многие-к-одному для сохранения). 
3. В компоненте CardWrapper добавлена жадная загрузка модели Punch со всеми связанными моделям.
4-5. Не придумал, где в этом проекте можно использовать трейты и полиморфные отношения. Буду реализовывать их в курсовом проекте.

# Задание 13
1. Модели были созданы одновременно с миграциями на прошлом занятии.
2. Выборка по условиям будет сделана в процессе реализации фильтрации, поэтому пока её нет. Из всех методов по работе с Eloquent пока реализованы только связи между моделями (это уже относится к следующему занятию).
3. Сделал валидацию сохраняемых данных с редиректом на страницу формы с выводом подсказок к некорректным полям (пока не всю).

На сегодня сделано:
1. Реализованы в виде компонентов фильр и блок с карточками (а также сама карточка). Данные в них подгружаются из моделей.
2. Доработано создание новой записи в базе. Теперь обрабатываются массивы чекбоксов и сохраняются все картинки. Также реализовано сохранение данных в связанные таблицы. После сохранения производится редирект на главную страницу, где отображаются все записи, включая новую.


# Задание 12

Это действующий проект, который выбран в качестве учебного задания и рефакторится на Laravel, поэтому многое здесь пока сделано как попало (в частности, шаблоны напрямую перетащены из старой версии).

1. Валидацию сделать не успел.
UPD. Частично сделал. Класс StorePunchRequest проверяет обязательность трёх полей. Корректное перенаправление в случае неуспеха сделать не успел.
2. В проекте созданы миграции для всех таблиц (в т.ч. для изображений) и заполнители для некоторых из них.
3. На данный момент реализовано сохранение части данных из формы и роутинг на тестовую страницу, где выводится массив запроса и сохранённая картинка.

Вопрос по архитектуре. Данные множественного типа (в т.ч. картинки) хранятся в связанных таблицах, где колонка 'punch' - ID записи в основной таблице, а 'value' - значение. При сохранении данных из формы всегда помимо основной таблицы punches заполняются связанные таблицы punch_machines, punch_materials, punch_pics и punch_products, и ни в каких других случаях данные в эти таблицы не пишутся. Где правильно размещать логику сохранения в эти таблицы: в контроллере PunchController или модели Punch?