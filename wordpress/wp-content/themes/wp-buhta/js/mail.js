$("#form").submit(function(){return $.ajax({type:"POST",url:"mail.php",data:$(this).serialize()}).done(function(){$(this).find("input").val(""),alert("Спасибо за заявку! Скоро мы с вами свяжемся."),$("#form").trigger("reset")}),!1});
//# sourceMappingURL=maps/mail.js.map
