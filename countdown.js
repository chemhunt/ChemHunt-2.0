<script>
    function getTimeRemaining(endtime) {
    var t = Date.parse(endtime)-Date.parse(new Date());
    if (t<0) {
    document.getElementById('huntForm').remove();
    document.getElementById('clock').style.visibility='hidden';
    document.getElementById('timeUp-1').style.visibility='visible';
    return false; }
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
};
}
    function initializeClock(endtime) {
    var minutesSpan = document.getElementById('minutes');
    var secondsSpan = document.getElementById('seconds');
    function updateClock() {
    var t = getTimeRemaining(endtime);
    if (t.total <= 30000){
    if (document.getElementById('hunt').className === 'bg-red-600'){
    document.getElementById('hunt').classList.remove('bg-red-600') ;
    document.getElementById('hunt').classList.add('bg-blue-300') ;
}
    else{
    document.getElementById('hunt').classList.remove('bg-blue-300') ;
    document.getElementById('hunt').classList.add('bg-red-600') ;
}
}
    if (t) {
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
} else {
    clearInterval(timeinterval);
}
}

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}
    var deadline = new Date();
    deadline.setHours({{ config('chemhunt.exam_hours') }},{{ config('chemhunt.exam_minutes') }},0);
    initializeClock(deadline);
</script>
