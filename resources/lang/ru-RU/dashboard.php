<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'dashboard'          => 'Панель управления',
    'writeable_settings' => 'У вас недостаточно прав на запись в папку с Cachet. Пожалуйста, убедитесь, что веб-серверу достаточно привелегий для записи в папку <code>./bootstrap/cachet</code>.',

    // Incidents
    'incidents' => [
        'title'                    => 'Инциденты и плановые работы',
        'incidents'                => 'Инциденты',
        'logged'                   => '{0}There are no incidents, good work.|[1]You have logged one incident.|[2,*]You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => 'Создать шаблон',
        'incident-templates'       => 'Шаблоны инцидентов',
        'updates'                  => [
            'title'   => 'Incident updates for :incident',
            'count'   => '{0}Zero Updates|[1]One Update|[2]Two Updates|[3,*]Several Updates',
            'add'     => [
                'title'   => 'Создать новое обновление инцидента',
                'success' => 'Your new incident update has been created.',
                'failure' => 'Something went wrong with the incident update.',
            ],
            'edit' => [
                'title'   => 'Edit incident update',
                'success' => 'The incident update has been updated.',
                'failure' => 'Something went wrong updating the incident update',
            ],
        ],
        'reported_by'              => 'Reported by :user',
        'add'                      => [
            'title'   => 'Добавить инцидент',
            'success' => 'Инцидент добавлен.',
            'failure' => 'При добавлении инцидента произошла ошибка, пожалуйста, попробуйте ещё раз.',
        ],
        'edit' => [
            'title'   => 'Изменить инцидент',
            'success' => 'Инцидент обновлен.',
            'failure' => 'При редактировании инцидента произошла ошибка, пожалуйста, попробуйте ещё раз.',
        ],
        'delete' => [
            'success' => 'Инцидент удалён и больше не будет отображаться на статусной странице.',
            'failure' => 'Инцидент не может быть уделён, пожалуйста, попробуйте ещё раз.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Шаблоны инцидентов',
            'add'   => [
                'title'   => 'Создать шаблон инцидента',
                'message' => 'Необходимо добавить шаблон инцидента.',
                'success' => 'Новый шаблон инцидента создан.',
                'failure' => 'С шаблоном инцидента что-то не так.',
            ],
            'edit' => [
                'title'   => 'Изменить шаблон',
                'success' => 'Шаблон инцидента обновлён.',
                'failure' => 'Что-то пошло не так при изменении шаблона инцидента',
            ],
            'delete' => [
                'success' => 'Шаблон инцидента удалён.',
                'failure' => 'Шаблон инцидента не может быть уделён, пожалуйста, попробуйте ещё раз.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Плановые работы',
        'logged'       => '{0}There has been no Maintenance, good work.|[1]You have logged one schedule.|[2,*]You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Запланировано на :timestamp',
        'add'          => [
            'title'   => 'Добавить плановые работы',
            'success' => 'Плановые работы добавлены.',
            'failure' => 'Что-то пошло не так при добавлении плановых работ, пожалуйста, попробуйте ещё раз.',
        ],
        'edit' => [
            'title'   => 'Изменить плановые работы',
            'success' => 'Плановые работы обновлены!',
            'failure' => 'Что-то пошло не так при изменении плановых работ, пожалуйста, попробуйте ещё раз.',
        ],
        'delete' => [
            'success' => 'Плановые работы удалены и больше не будут отображаться на статусной странице.',
            'failure' => 'Плановые работы не могут быть уделены, пожалуйста, попробуйте ещё раз.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Компоненты',
        'component_statuses' => ' Статусы компонентов',
        'listed_group'       => 'В группе :name',
        'add'                => [
            'title'   => 'Добавить компонент',
            'message' => 'Необходимо добавить компонент.',
            'success' => 'Компонент создан.',
            'failure' => 'Что-то не так с компонентом, пожалуйста, повторите ещё раз.',
        ],
        'edit' => [
            'title'   => 'Изменить компонент',
            'success' => 'Компонент обновлён.',
            'failure' => 'Что-то не так с компонентом, пожалуйста, повторите ещё раз.',
        ],
        'delete' => [
            'success' => 'Компонент удалён!',
            'failure' => 'Компонент не может быть удалён, пожалуйста, повторите ещё раз.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Группа компонентов|Группы компонентов',
            'no_components' => 'Необходимо добавить группу компонентов.',
            'add'           => [
                'title'   => 'Добавить группу компонентов',
                'success' => 'Группа компонентов добавлена.',
                'failure' => 'Что-то не так с компонентом, пожалуйста, повторите ещё раз.',
            ],
            'edit' => [
                'title'   => 'Изменить группу компонентов',
                'success' => 'Группа компонентов обновлена.',
                'failure' => 'Что-то не так с компонентом, пожалуйста, повторите ещё раз.',
            ],
            'delete' => [
                'success' => 'Группа компонентов удалена!',
                'failure' => 'Группа компонентов не может быть удалена, пожалуйста, повторите ещё раз.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Метрики',
        'add'     => [
            'title'   => 'Создать метрику',
            'message' => 'Необходимо добавить метрику.',
            'success' => 'Метрика создана.',
            'failure' => 'С метрикой что-то пошло не так, пожалуйста, повторите ещё раз.',
        ],
        'edit' => [
            'title'   => 'Изменить метрику',
            'success' => 'Метрика обновлена.',
            'failure' => 'С метрикой что-то пошло не так, пожалуйста, повторите ещё раз.',
        ],
        'delete' => [
            'success' => 'Метрика удалена и больше не будет отображаться на статусной странице.',
            'failure' => 'Метрика не может быть удалена, пожалуйста, повторите ещё раз.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'          => 'Подписчики',
        'description'          => 'Подписчики будут получать уведомления по электронной почте при добавлении инцидентов или изменении статусов компонентов.',
        'description_disabled' => 'To use this feature, you need allow people to signup for notifications.',
        'verified'             => 'Подтверждён',
        'not_verified'         => 'Не подтверждён',
        'subscriber'           => ':email, подписан :date',
        'no_subscriptions'     => 'Подписан на все обновления',
        'global'               => 'Globally subscribed',
        'add'                  => [
            'title'   => 'Добавить нового подписчика',
            'success' => 'Подписчик добавлен!',
            'failure' => 'Что-то пошло не так при добавлении подписчика, пожалуйста, повторите ещё раз.',
            'help'    => 'Введите каждого подписчика с новой строки.',
        ],
        'edit' => [
            'title'   => 'Обновить подписчика',
            'success' => 'Подписчик обновлён!',
            'failure' => 'Что-то пошло не так при изменении подписчика, пожалуйста, попробуйте ещё раз.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Команда',
        'member'      => 'Участник',
        'profile'     => 'Профиль',
        'description' => 'Участники команды смогут добавлять и изменять компоненты и инциденты.',
        'add'         => [
            'title'   => 'Добавить нового участника команды',
            'success' => 'Участник команды добавлен.',
            'failure' => 'Участник команды не может быть добавлен, пожалуйста, повторите ещё раз.',
        ],
        'edit' => [
            'title'   => 'Обновить профиль',
            'success' => 'Профиль обновлён.',
            'failure' => 'Что-то пошло не так при обновлении профиля, пожалуйста, повторите ещё раз.',
        ],
        'delete' => [
            'success' => 'Участник команды удалён и больше не сможет получить доступ к панели управления!',
            'failure' => 'Участник команды не может быть добавлен, пожалуйста, повторите ещё раз.',
        ],
        'invite' => [
            'title'   => 'Пригласить нового участника команды',
            'success' => 'Приглашение отправлено',
            'failure' => 'Не получается отправить приглашение, пожалуйста, попробуйте ещё раз.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Настройки',
        'app-setup' => [
            'app-setup'   => 'Настройки приложения',
            'images-only' => 'Можно загружать только изображения.',
            'too-big'     => 'Загруженный вами файл слишком большой. Загрузите картинку меньше чем :size',
        ],
        'analytics' => [
            'analytics' => 'Аналитика',
        ],
        'log' => [
            'log' => 'Журнал',
        ],
        'localization' => [
            'localization' => 'Региональные настройки',
        ],
        'customization' => [
            'customization' => 'Пользовательские настройки',
            'header'        => 'Верхний колонтитул HTML',
            'footer'        => 'Нижний колонтитул HTML',
        ],
        'mail' => [
            'mail'  => 'Электронная почта',
            'test'  => 'Тест',
            'email' => [
                'subject' => 'Тестовое уведомление от Cachet',
                'body'    => 'Это тестовое уведомления от Cachet.',
            ],
        ],
        'security' => [
            'security'   => 'Безопасность',
            'two-factor' => 'Пользователи без двухфакторной аутентификации',
        ],
        'stylesheet' => [
            'stylesheet' => 'Таблица стилей',
        ],
        'theme' => [
            'theme' => 'Тема',
        ],
        'edit' => [
            'success' => 'Настройки сохранены.',
            'failure' => 'Не удаётся сохранить настройки.',
        ],
        'credits' => [
            'credits'       => 'Разработчики',
            'contributors'  => 'Контрибьюторы',
            'license'       => 'Cachet - это проект с открытым исходным кодом по лицензии BSD-3, разрабатываемый компанией <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Партнеры и спонсоры',
            'backers'       => 'Если вы хотите поддержать будущую разработку, присоединяйтесь к сбору средств в <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a>.',
            'thank-you'     => 'Спасибо всем нашим :count контрибьюторам.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Войти',
        'logged_in'  => 'Вы вошли в систему.',
        'welcome'    => 'С возвращением!',
        'two-factor' => 'Пожалуйста, введите ваш токен.',
    ],

    // Sidebar footer
    'help'        => 'Помощь',
    'status_page' => 'Статусная страница',
    'logout'      => 'Выйти',

    // Notifications
    'notifications' => [
        'notifications' => 'Уведомления',
        'awesome'       => 'Отлично.',
        'whoops'        => 'Ой-ой!',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Поддержать Cachet',
        'support_subtitle' => 'Посетите нашу страницу на <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong>!',
        'news'             => 'Последние новости',
        'news_subtitle'    => 'Проверить обновления',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Добро пожаловать на вашу статусную страницу!',
        'message' => 'Ваша статусная страница почти готова! Возможно, вы захотите настроить дополнительные параметры',
        'close'   => 'Закрыть и перейти к панели управления',
        'steps'   => [
            'component'  => 'Создание компонентов',
            'incident'   => 'Создание инцидентов',
            'customize'  => 'Настройка',
            'team'       => 'Добавление пользователей',
            'api'        => 'Создание API токена',
            'two-factor' => 'Двухфакторная аутентификация',
        ],
    ],

];
