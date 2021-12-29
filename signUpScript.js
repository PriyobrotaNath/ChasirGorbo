// JavaScript Document

$("#pay_method").change(function()
{
  $('.payment_method').slideUp();
  switch($('#pay_method :selected').val())
  {
    case '1': $('#farmer').slideDown(); $('#blog-id').slideUp(); $('#near-buyer').slideUp(); $('#local-diller').slideUp(); $('#exporter').slideUp(); $('#organization').slideUp(); break;
    case '2': $('#near-buyer').slideDown();$('#blog-id').slideUp(); $('#farmer').slideUp(); $('#local-diller').slideUp(); $('#exporter').slideUp(); $('#organization').slideUp(); break;
    case '3': $('#local-diller').slideDown();$('#blog-id').slideUp(); $('#farmer').slideUp();$('#near-buyer').slideUp();$('#exporter').slideUp();$('#organization').slideUp();break;
    case '4': $('#exporter').slideDown();$('#blog-id').slideUp();$('#farmer').slideUp();$('#near-buyer').slideUp();$('#local-diller').slideUp();$('#organization').slideUp(); break;
	case '5': $('#organization').slideDown();$('#blog-id').slideUp();$('#farmer').slideUp();$('#near-buyer').slideUp();$('#local-diller').slideUp();$('#exporter').slideUp(); break;
	
  }
});
