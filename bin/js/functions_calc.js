var stav = 0.105;
var calc_obj = '{"1":{"sum":300000,"objects":{"1":{"name":"Отдых","image":"1_1.jpg"},"2":{"name":"Телевизор","image":"1_2.jpg"}}},"2":{"sum":500000,"objects":{"1":{"name":"Шуба","image":"2_1.jpg"},"2":{"name":"Кухня","image":"2_2.jpg"}}},"3":{"sum":800000,"objects":{"1":{"name":"Мотоцикл BMW","image":"3_1.jpg"},"2":{"name":"Мебель","image":"3_2.jpg"}}},"4":{"sum":1000000,"objects":{"1":{"name":"Ремонт простой","image":"4_1.jpg"},"2":{"name":"Бриллиантовое колье","image":"4_2.jpg"}}},"5":{"sum":1500000,"objects":{"1":{"name":"Земельный участок","image":"5_1.jpg"},"2":{"name":"Audi Q3","image":"5_2.jpg"}}},"6":{"sum":2000000,"objects":{"1":{"name":"Ремонт дизайнерский","image":"6_1.jpg"},"2":{"name":"Дача","image":"6_2.jpg"}}},"7":{"sum":2500000,"objects":{"1":{"name":"BMW 5 серии","image":"7_1.jpg"},"2":{"name":"Мерседес E класса","image":"7_2.jpg"}}},"8":{"sum":3000000,"objects":{"1":{"name":"Квартира","image":"8_1.jpg"},"2":{"name":"Дом","image":"8_2.jpg"}}}}';
var objects = JSON.parse(calc_obj);

 var plat = 0;
 var year = 0;
 var ost = 0;
 var vygod = 0;
 var new_plat = 0; 

function number_format( number, decimals, dec_point, thousands_sep ) {	// Format a number with grouped thousands
	// 
	// +   original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
	// +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// +	 bugfix by: Michael White (http://crestidg.com)

	var i, j, kw, kd, km;

	// input sanitation & defaults
	if( isNaN(decimals = Math.abs(decimals)) ){
		decimals = 2;
	}
	if( dec_point == undefined ){
		dec_point = ",";
	}
	if( thousands_sep == undefined ){
		thousands_sep = ".";
	}

	i = parseInt(number = (+number || 0).toFixed(decimals)) + "";

	if( (j = i.length) > 3 ){
		j = j % 3;
	} else{
		j = 0;
	}

	km = (j ? i.substr(0, j) + thousands_sep : "");
	kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
	//kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).slice(2) : "");
	kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");


	return km + kw + kd;
}

function showResults(key){
 var date = new Date();
 
 $("#year_begin").text(date.getFullYear());
 $("#year_end").text(year);
 $("#sum_vygod").text(number_format(vygod,0,'',' ') + ' руб.');
 $("#new_plat").text(number_format(new_plat,0,'',' ') + ' руб./мес.');
 $("#pereplat").text(number_format(parseInt(plat-new_plat),0,'',' ') + ' руб./мес.');
 $(".result-img:nth-child(1)").find("p").html(objects[key].objects[1].name);
 $(".result-img:nth-child(1)").find("img").attr('src','images_calc/' + objects[key].objects[1].image);
 $(".result-img:nth-child(2)").find("p").html(objects[key].objects[2].name);
 $(".result-img:nth-child(2)").find("img").attr('src','images_calc/' + objects[key].objects[2].image);
 $(".result-refinanse").show();
}

function Raschet(){
 plat = parseInt($('#i1').val());
 year = parseInt($('#i2').val());
 ost = parseInt($('#i3').val());
 
 if(!plat || !year || !ost){
    alert('Недостаточно данных для расчета');
    return;
 }
 
 var date = new Date();
 var cur_month = date.getMonth();
 var diff_years = year - date.getFullYear();
 var num_months = diff_years*12 + (12 - cur_month);
 //alert(num_months);
 new_plat = ost * ( ( stav / 12 ) / ( 1 - Math.pow( ( 1 + ( stav / 12 ) ), -num_months ) ) );
 new_plat = parseInt(new_plat);
 var new_sum = new_plat*num_months;
 var old_sum = plat*num_months;
 vygod = parseInt(old_sum - new_sum);
 /*
 for(var obj in objects){ 
   //console.log(objects[obj].objects[2].name);
 }
 */
 switch(vygod){
    case vygod>0 && vygod <= 300000 ? vygod : true:
        showResults(1);
    break;
    case vygod>300000 && vygod <= 500000 ? vygod : true:
        showResults(2);
    break;
    case vygod>500000 && vygod <= 800000 ? vygod : true:
        showResults(3);
    break;
    case vygod>800000 && vygod <= 1000000 ? vygod : true:
        showResults(4);
    break;
    case vygod>1000000 && vygod <= 1500000 ? vygod : true:
        showResults(5);
    break;
    case vygod>1500000 && vygod <= 2000000 ? vygod : true:
        showResults(6);
    break;
    case vygod>2000000 && vygod <= 2500000 ? vygod : true:
        showResults(7);
    break;
    case vygod>3000000 ? vygod : true:
        showResults(8);
    break;
    default:
        $('.result-refinanse').hide();
 }
}

$(document).ready(function(){
 
 $(".calculator form button[type=submit]").on('click',function(){
  Raschet();
 });
 
});