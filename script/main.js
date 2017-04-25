(function (){

"use strict";

var admin_but = document.querySelector(".admin_login_but"),
    login_con = document.querySelector(".admin_login_con"),
    close_but = document.querySelector(".login_close");

admin_but.addEventListener("click", showLogin, false);
close_but.addEventListener("click", hideLogin, false);

function showLogin(e){
  console.log("working");
e.preventDefault();
var tl = new TimelineMax();
      tl.to(login_con, 0, {display:"block"})
        .to(login_con, 0, {css:{height:"150px"}})
        .to(window, 1, {scrollTo:".admin_login_con"});
}

function hideLogin(){
  var tl = new TimelineMax();
  tl.to(login_con, .8, {css:{height:"0px"}})
  .to(login_con, 0, {display:"none"}, '-=.6');
}



})();
