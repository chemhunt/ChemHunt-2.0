
<?php

return
[

    'day'=>env('CHEMHUNT_DAY','0'),
    'registration_status'=>env('CHEMHUNT_REGISTRATION_STATUS',false),
    'exam_status'=>env('CHEMHUNT_EXAM_STATUS',false),
    'exam_end_hours'=>env('CHEMHUNT_EXAM_END_TIME_HOURS'),
    'exam_end_minutes'=>env('CHEMHUNT_EXAM_END_TIME_MINUTES'),
    'exam_start_hours'=>env('CHEMHUNT_EXAM_START_TIME_HOURS'),
    'exam_start_minutes'=>env('CHEMHUNT_EXAM_START_TIME_MINUTES'),
    'login_status'=>env('CHEMHUNT_LOGIN_STATUS',false)

];
