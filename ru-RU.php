<?php
/*
TO CREATE A NEW LANGUAGE, COPY THE en-us.php to your own localization code name.
We are going to keep these files in the iso xx-xx format because that will also
allow us to autoformat numbers on the sites.

PLEASE put your name somewhere at the top of the language file so we can get in touch with
you to update it and thank you for your hard work!

PLEASE NOTE: DO NOT ADD RANDOM KEYS in the middle of the translations.  In order to make it easier to tell what language keys are missing, from this point forward, we are going to add all new language keys at the BOTTOM of this file. The number of lines in your language file will tell you which keys still need to be translated.  If you have questions please ask on the forums or on Discord.

UserSpice 4
An Open Source PHP User Management System
by the UserSpice Team at http://UserSpice.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/*
%m1% - Dymamic markers which are replaced at run time by the relevant index.
*/

$lang = array();
//important strings
//You defiitely want to customize these for your language
$lang = array_merge($lang, array(
    "THIS_LANGUAGE" => "Русский",
    "THIS_CODE" => "ru-RU",
    "MISSING_TEXT" => "Отсуствующий текст",
));

//Database Menus
$lang = array_merge($lang, array(
    "MENU_HOME" => "Главная",
    "MENU_HELP" => "Помощь",
    "MENU_ACCOUNT" => "Профиль",
    "MENU_DASH" => "Панель управления",
    "MENU_USER_MGR" => "Пользователи",
    "MENU_PAGE_MGR" => "Страницы",
    "MENU_PERM_MGR" => "Права доступа",
    "MENU_MSGS_MGR" => "Сообщения",
    "MENU_LOGS_MGR" => "Логи",
    "MENU_LOGOUT" => "Выйти",
));

// Signup
$lang = array_merge($lang, array(
    "SIGNUP_TEXT" => "Регистрация",
    "SIGNUP_BUTTONTEXT" => "Зарегистрироваться",
    "SIGNUP_AUDITTEXT" => "Зарегистрировано",
));

// Signin
$lang = array_merge($lang, array(
    "SIGNIN_FAIL" => "** ОШИБКА ВХОДА **",
    "SIGNIN_PLEASE_CHK" => "Проверьте логин и пароль на ошибки и попробуйте снова",
    "SIGNIN_UORE" => "Логин или Email",
    "SIGNIN_PASS" => "Пароль",
    "SIGNIN_TITLE" => "Вход на сайт",
    "SIGNIN_TEXT" => "Войти",
    "SIGNOUT_TEXT" => "Выйти",
    "SIGNIN_BUTTONTEXT" => "Вход",
    "SIGNIN_REMEMBER" => "Запомнить меня",
    "SIGNIN_AUDITTEXT" => "Авторизован",
    "SIGNIN_FORGOTPASS" => "Забыли пароль?",
    "SIGNOUT_AUDITTEXT" => "Выйти",
));

// Account Page
$lang = array_merge($lang, array(
    "ACCT_EDIT" => "Изменить профиль",
    "ACCT_2FA" => "Двухфакторная авторизация",
    "ACCT_SESS" => "Сессии",
    "ACCT_HOME" => "Профиль",
    "ACCT_SINCE" => "Дата регистрации",
    "ACCT_LOGINS" => "Количество авторизаций",
    "ACCT_SESSIONS" => "Количество активных сессий",
    "ACCT_MNG_SES" => "Нажмите Сессии для подробной информации",
));

//General Terms
$lang = array_merge($lang, array(
    "GEN_ENABLED" => "Включено",
    "GEN_DISABLED" => "Отключено",
    "GEN_ENABLE" => "Включить",
    "GEN_DISABLE" => "Отключить",
    "GEN_NO" => "Нет",
    "GEN_YES" => "Да",
    "GEN_MIN" => "от",
    "GEN_MAX" => "до",
    "GEN_CHAR" => "символов", //as in characters
    "GEN_SUBMIT" => "Отправить",
    "GEN_MANAGE" => "Управлять",
    "GEN_VERIFY" => "Подтвердить",
    "GEN_SESSION" => "Сессия",
    "GEN_SESSIONS" => "Сессии",
    "GEN_EMAIL" => "Email",
    "GEN_FNAME" => "Имя",
    "GEN_LNAME" => "Фамилия",
    "GEN_UNAME" => "Логин",
    "GEN_PASS" => "Пароль",
    "GEN_MSG" => "Управлять",
    "GEN_TODAY" => "Сегодня",
    "GEN_CLOSE" => "Закрыть",
    "GEN_CANCEL" => "Отмена",
    "GEN_CHECK" => "[ выбрать/снять всё ]",
    "GEN_WITH" => "с",
    "GEN_UPDATED" => "обновлено",
    "GEN_UPDATE" => "Обновить",
    "GEN_BY" => "от",
    "GEN_FUNCTIONS" => "Функции",
    "GEN_NUMBER" => "число",
    "GEN_NUMBERS" => "числа",
    "GEN_INFO" => "Информация",
    "GEN_REC" => "Записано",
    "GEN_DEL" => "Удалить",
    "GEN_NOT_AVAIL" => "Недоступно",
    "GEN_AVAIL" => "Доступно",
    "GEN_BACK" => "Назад",
    "GEN_RESET" => "Сброс",
    "GEN_REQ" => "обязательно",
    "GEN_AND" => "и",
    "GEN_SAME" => "должны совпадать",
));

//validation class
$lang = array_merge($lang, array(
    "VAL_SAME" => "должны совпадать",
    "VAL_EXISTS" => "уже занят. Попробуйте другой",
    "VAL_DB" => "Ошибка базы данных",
    "VAL_NUM" => "должно быть числом",
    "VAL_INT" => "должно быть целым числом",
    "VAL_EMAIL" => "нужен правильный email",
    "VAL_NO_EMAIL" => "не похоже на email",
    "VAL_SERVER" => "должно принадлежать серверу",
    "VAL_LESS" => "должно быть меньше чем",
    "VAL_GREAT" => "должно быть больше чем",
    "VAL_LESS_EQ" => "должно быть меньше или около",
    "VAL_GREAT_EQ" => "должно быть больше или около",
    "VAL_NOT_EQ" => "должно не быть",
    "VAL_EQ" => "должно быть",
    "VAL_TZ" => "нужно правильное название временной зоны",
    "VAL_MUST" => "должно быть",
    "VAL_MUST_LIST" => "должно быть одним из следующих",
    "VAL_TIME" => "должно быть правильным временем",
    "VAL_SEL" => "не верный выбор",
    "VAL_NA_PHONE" => "укажите правильный телефон",
));

//Time
$lang = array_merge($lang, array(
    "T_YEARS" => "Лет",
    "T_YEAR" => "Год",
    "T_MONTHS" => "Месяцев",
    "T_MONTH" => "Месяц",
    "T_WEEKS" => "Недель",
    "T_WEEK" => "Неделя",
    "T_DAYS" => "Дней",
    "T_DAY" => "День",
    "T_HOURS" => "Часов",
    "T_HOUR" => "Час",
    "T_MINUTES" => "Минут",
    "T_MINUTE" => "Минута",
    "T_SECONDS" => "Секунд",
    "T_SECOND" => "Секунда",
));


//Passwords
$lang = array_merge($lang, array(
    "PW_NEW" => "Новый пароль",
    "PW_OLD" => "Старый пароль",
    "PW_CONF" => "Пароль ещё раз",
    "PW_RESET" => "Сбросить пароль",
    "PW_UPD" => "Пароль изменён",
    "PW_SHOULD" => "Пароли должны быть:",
    "PW_SHOW" => "Показать пароль",
    "PW_SHOWS" => "Показать пароли",
));


//Join
$lang = array_merge($lang, array(
    "JOIN_SUC" => "Добро пожаловать на ",
    "JOIN_THANKS" => "Спасибо за регистрацию!",
    "JOIN_HAVE" => "Хотя бы ",
    "JOIN_CAP" => " заглавную букву",
    "JOIN_TWICE" => "Введены дважды верно",
    "JOIN_CLOSED" => "Регистрация временно отключена. Свяжитесь с администратором для уточнения деталей.",
    "JOIN_TC" => "Пользовательское соглашение",
    "JOIN_ACCEPTTC" => "Я принимаю пользовательские условия",
    "JOIN_CHANGED" => "Наши пользовательские условия изменились",
    "JOIN_ACCEPT" => "Принять пользовательские условия и продолжить",
));

//Sessions
$lang = array_merge($lang, array(
    "SESS_SUC" => "Успешно завершено ",
));

//Messages
$lang = array_merge($lang, array(
    "MSG_SENT" => "Ваше сообщение отправлено!",
    "MSG_MASS" => "Ваши сообщения отправлены!",
    "MSG_NEW" => "Новое сообщение",
    "MSG_NEW_MASS" => "Новая рассылка",
    "MSG_CONV" => "Сообщения",
    "MSG_NO_CONV" => "Сообщений нет",
    "MSG_NO_ARC" => "Сообщений нет",
    "MSG_QUEST" => "Отправить Email уведомление?",
    "MSG_ARC" => "Архивные переписки",
    "MSG_VIEW_ARC" => "Показать архив",
    "MSG_SETTINGS" => "Настройки сообщений",
    "MSG_READ" => "Прочитать",
    "MSG_BODY" => "Сообщение",
    "MSG_SUB" => "Тема",
    "MSG_DEL" => "Доставлено",
    "MSG_REPLY" => "Ответить",
    "MSG_QUICK" => "Быстырй ответ",
    "MSG_SELECT" => "Выберите пользователя",
    "MSG_UNKN" => "Неизвестный получатель",
    "MSG_NOTIF" => "Получать Email уведомления",
    "MSG_BLANK" => "Сообщение не может быть пустым",
    "MSG_MODAL" => "Нажмите здесь или Alt + R чтобы начать вводить или Shift + R для расширенного ответа.",
    "MSG_ARCHIVE_SUCCESSFUL" => "Вы скрыли %m1% переписок",
    "MSG_UNARCHIVE_SUCCESSFUL" => "Вы восстановили %m1% переписок",
    "MSG_DELETE_SUCCESSFUL" => "Вы удалили %m1% переписок",
    "USER_MESSAGE_EXEMPT" => "Пользователь %m1% исключен из сообщений",
    "MSG_MK_READ" => "Прочитано",
    "MSG_MK_UNREAD" => "Непрочитано",
    "MSG_ARC_THR" => "Скрыть выбранное",
    "MSG_UN_THR" => "Восстановить выбранное",
    "MSG_DEL_THR" => "Удалить выбранное",
    "MSG_SEND" => "Отправить сообщение",
));

//2 Factor Authentication
$lang = array_merge($lang, array(
    "2FA" => "Двухфакторная авторизация",
    "2FA_CONF" => "Вы точно хотите отключить 2FA?",
    "2FA_SCAN" => "Сканируйте этот QR код вашим телефоном или введите ключ",
    "2FA_THEN" => "Затем введите один из временных паролей",
    "2FA_FAIL" => "Ошибка с проверкой 2FA. Проверьте интернет соединение.",
    "2FA_CODE" => "2FA код",
    "2FA_EXP" => "Истёк 1 отпечаток пальца",
    "2FA_EXPD" => "Истёк",
    "2FA_EXPS" => "Истекает",
    "2FA_ACTIVE" => "Активные сессии",
    "2FA_NOT_FN" => "Отпечатки пальца не найдены",
    "2FA_FP" => "Отпечатки пальца",
    "2FA_NP" => "<strong>Ошибка входа:</strong> 2FA код отсутствует. Попробуйте снова.",
    "2FA_INV" => "<strong>Ошибка входа:</strong> 2FA код не верный. Попробуйте снова.",
    "2FA_FATAL" => "<strong>Критическая ошибка:</strong> свяжитесь с администратором.",
));

//Redirect Messages - These get a plus between each word
$lang = array_merge($lang, array(
    "REDIR_2FA" => "Двухфакторная+авторизация+сейчас+не+доступна.",
    "REDIR_2FA_EN" => "Двухфакторная+авторизация+включена",
    "REDIR_2FA_DIS" => "Двухфакторная+авторизация+отключена",
    "REDIR_2FA_VER" => "Двухфакторная+авторизация+пройдена+и+включена",
    "REDIR_SOM_TING_WONG" => "Что-то+пошло+не+так.+Попробуйте+снова.",
    "REDIR_MSG_NOEX" => "Такой+темы+не+существует,+либо+у+Вас+нет+доступа",
    "REDIR_UN_ONCE" => "Логин+уже+менялся,+больше+нельзя",
    "REDIR_EM_SUCC" => "Email+обновлено+успешно",
));

//Emails
$lang = array_merge($lang, array(
    "EML_CONF" => "Подтвердить Email",
    "EML_VER" => "Подтвердите Ваш Email",
    "EML_CHK" => "Запрос на смену Email отправлен. Пожалуйста, перейдите по ссылке в письме и подтвердите смену.",
    "EML_MAT" => "Ваши email не совпадают.",
    "EML_HELLO" => "Привет от ",
    "EML_HI" => "Привет ",
    "EML_AD_HAS" => "Администратор выполнил сброс Вашего пароля.",
    "EML_AC_HAS" => "Администратор создал Вам аккаунт.",
    "EML_REQ" => "Вы должны задать свой пароль по ссылке ниже.",
    "EML_EXP" => "Учтите, что ссылка станет не рабочей через ",
    "EML_VER_EXP" => "Учтите, что верификация станет не рабочей через ",
    "EML_CLICK" => "Нажмите здесь чтобы войти.",
    "EML_REC" => "Советуем изменить пароль после авторизации на сайте.",
    "EML_MSG" => "Новое сообщение от",
    "EML_REPLY" => "Нажмите здесь чтобы ответить",
    "EML_WHY" => "Вы получили это письмо, потому что хотите изменить пароль. Если вы этого не делали, просто игнорируйте письмо.",
    "EML_HOW" => "Для сменя пароля перейдите по ссылке ниже.",
    "EML_EML" => "Запрос на смену email сделан через Ваш профиль.",
    "EML_VER_EML" => "Спасибо за регистрацию! Для активации учетной записи перейдите по ссылке ниже.",
));

//Verification
$lang = array_merge($lang, array(
    "VER_SUC" => "Ваш Email подтвержден!",
    "VER_FAIL" => "Мы не смогли подтвердить Ваш аккаунт, попробуйте снова",
    "VER_RESEND" => "Выслать письмо ещё раз",
    "VER_AGAIN" => "Введите свой email и попробуйте снова",
    "VER_PAGE" => "<li>Зайдите в почту и перейдите по ссылке из письма</li><li>Готово</li>",
    "VER_RES_SUC" => "<p>Ссылка для подтверждения отправлена на email.</p><p>Зайдите в почту и перейдите по ссылке из письма.</p><p>Подтверждение действительно в течении ",
    "VER_OOPS" => "Что-то пошло не так, возможно устарела ссылка. Попробуйте снова.",
    "VER_RESET" => "Ваш пароль успешно изменён!",
    "VER_INS" => "<li>Введите свой email и нажмите Сброс</li><li>Зайдите в почту и перейдите по ссылке из письма.</li><li>Следуйте инструкциям на экране</li>",
    "VER_SENT" => "<p>Ссылка для смены пароля отправлена на email.</p><p>Зайдите в почту и перейдите по ссылке из письма.</p><p>Подтверждение действительно в течении ",
    "VER_PLEASE" => "Задайте новый пароль",
));

//User Settings
$lang = array_merge($lang, array(
    "SET_PIN" => "Изменить Пин-код",
    "SET_WHY" => "Как изменить?",
    "SET_PW_MATCH" => "Должно соответствовать новому паролю",
    "SET_PIN_NEXT" => "Вы можете установить новый пин-код во время следующей верификации",
    "SET_UPDATE" => "Обновить профиль",
    "SET_NOCHANGE" => "Администратор запретил изменение логина",
    "SET_ONECHANGE" => "Администратор разрешил изменение логина лишь раз и вы это уже сделали",
    "SET_GRAVITAR" => "<strong>Хотите изменить аватар?</strong><br>Перейдите на сайт <a href='https://ru.gravatar.com/'>gravatar.com</a> и создайте аккаунт с текущим email адресом. Именно там задается аватарка.",
    "SET_NOTE1" => "<p>У вас имеется <strong>неподтвержденный запрос</strong> на смену email",
    "SET_NOTE2" => ".</p><p>Воспользуйтесь ссылкой в письме для подтверждения</p><p>Если вы потеряли письмо, смените email ещё раз.</p>",
    "SET_PW_REQ" => "нужен для изменения пароля, email или пин-кода",
    "SET_PW_REQI" => "Нужно для изменения пароля",
));

//Errors
$lang = array_merge($lang, array(
    "ERR_FAIL_ACT" => "Невозможно завершить активные сессии: ",
    "ERR_EMAIL" => "Email не отправлен. Обратитесь к администратору.",
    "ERR_EM_DB" => "Такой email не зарегистрирован на сайте.",
    "ERR_TC" => "Пожалуйста, прочтите и примите пользовательское соглашение.",
    "ERR_CAP" => "Вы не прошли проверку каптчи!",
    "ERR_PW_SAME" => "Нельзя использовать старый пароль как новый!",
    "ERR_PW_FAIL" => "Вы указали не правильный текущий пароль, изменения не сохранены.",
    "ERR_GOOG" => "<strong>Примечание:</strong> если вы входили через Google/Facebook, то для смены пароля нужно использовать функцию «Забыли пароль?».",
    "ERR_EM_VER" => "Email верификация отключена. Обратитесь к администратору.",
    "ERR_EMAIL_STR" => "Что-то пошло не так. Пожалуйста, введите email ещё раз.",

));

//Maintenance Page
$lang = array_merge($lang, array(
    "MAINT_HEAD" => "Сайт на реконструкции!",
    "MAINT_MSG" => "Приносим извинения, на сайте проводятся плановые технические работы.<br>Скоро всё заработает!",
    "MAINT_BAN" => "Извините, но Вы заблокированы. Если Вы считаете это ошибкой, свяжитесь с администратором.",
    "MAINT_TOK" => "Произошла ошибка с формой. Вернитесь назад и попробуйте снова. Не обновляйте страницу - это может вызвать ошибки. Если ничего не помогло - обратитесь к администратору.",
    "MAINT_OPEN" => "Пользовательский PHP Framework с открытым кодом.",
    "MAINT_PLEASE" => "Вы успешно установили UserSpice!<br>Для просмотра документации перейдите на"
));

//dataTables Added in 4.4.08
//NOTE: do not change the words like _START_ between the two _ symbols!
$lang = array_merge($lang, array(
    "DAT_SEARCH" => "Поиск",
    "DAT_FIRST" => "Первый",
    "DAT_LAST" => "Последний",
    "DAT_NEXT" => "Далее",
    "DAT_PREV" => "Назад",
    "DAT_NODATA" => "Нет данных для отображения",
    "DAT_INFO" => "Показано _START_ до _END_ из _TOTAL_ записей",
    "DAT_ZERO" => "Показано ноль записей",
    "DAT_FILTERED" => "(отобрано из _MAX_ записей)",
    "DAT_MENU_LENG" => "Показать _MENU_ записей",
    "DAT_LOADING" => "Загрузка...",
    "DAT_PROCESS" => "Обработка...",
    "DAT_NO_REC" => "Ничего не найдено",
    "DAT_ASC" => "Сортировать по возрастанию",
    "DAT_DESC" => "Сортировать по убыванию",
));


//LEAVE THIS LINE AT THE BOTTOM.  It allows users/lang to override these keys
if (file_exists($abs_us_root . $us_url_root . "usersc/lang/" . $lang["THIS_CODE"] . ".php")) {
    include($abs_us_root . $us_url_root . "usersc/lang/" . $lang["THIS_CODE"] . ".php");
}
?>
