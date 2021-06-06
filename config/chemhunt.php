
<?php

return
[

    'day'=>env('CHEMHUNT_DAY','0'),
    'registration_status'=>env('CHEMHUNT_REGISTRATION_STATUS',false),
    'exam_status'=>env('CHEMHUNT_EXAM_STATUS',false),
    'exam_hours'=>env('chemhunt_exam_time_hours'),
    'exam_minutes'=>env('chemhunt_exam_time_minutes'),
    'login_status'=>env('CHEMHUNT_LOGIN_STATUS',false)

];
