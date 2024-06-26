/* функция получения текущей даты и времени */
function date_time() {
  var current_datetime = new Date();
  var day = zero_first_format(current_datetime.getDate());
  var month = zero_first_format(current_datetime.getMonth() + 1);
  var year = current_datetime.getFullYear();
  var hours = zero_first_format(current_datetime.getHours());
  var minutes = zero_first_format(current_datetime.getMinutes());
  var seconds = zero_first_format(current_datetime.getSeconds());

  return day + "." + month + "." + year + " " + hours + ":" + minutes + ":" + seconds;
}

/* функция добавления ведущего нуля к числу, если оно меньше 10 */
function zero_first_format(value) {
  if (value < 10) {
    value = '0' + value;
  }
  return value;
}

/* выводим текущую дату и время на сайт в блок с id "dateTime" */
function updateDateTime() {
  document.getElementById('dateTime').innerHTML = date_time();
}

/* вызываем функцию обновления времени каждую секунду */
setInterval(updateDateTime, 1000);

/* сразу же обновляем время */
updateDateTime();


var currentYear = new Date().getFullYear();
    document.getElementById('current-year').innerHTML = currentYear;