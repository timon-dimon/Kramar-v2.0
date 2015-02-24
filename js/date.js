var d = new Date();
var day=new Array("Воскресенье","Понедельник","Вторник",
"Среда","Четверг","Пятница","Суббота");
var month=new Array("января","февраля","марта","апреля","мая","июня",
"июля","августа","сентября","октября","ноября","декабря");
var TODAY = "Текущее время и дата: <b>"+d.getDate()+ " " + month[d.getMonth()] + " " + d.getFullYear() + "</b> " + d.getHours() + ":" + d.getMinutes();
var TODAYCOPY = d.getFullYear();