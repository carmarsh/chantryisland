(function (){

"use strict";


//opening pages
var exp_buts = document.querySelectorAll(".exp_button"),
    less_buts = document.querySelectorAll(".less_button"),
    edit_cons = document.querySelectorAll(".page_edits_con");

    [].forEach.call(exp_buts, function(exp_but){
      exp_but.addEventListener("click", expandSect, false);
    });

    [].forEach.call(less_buts, function(less_but){
      less_but.addEventListener("click", hideSect, false);
    });

    function expandSect(){
      console.log(this.dataset.box);
      var page = this.dataset.box;
      TweenMax.to(edit_cons[page], 0, {display:"block"});
      // TweenMax.to(edit_cons[page], 1, {height:"auto"});
      this.style.display="none";
      less_buts[page].style.display="block";
    }

    function hideSect(){
      var page = this.dataset.box;
      TweenMax.to(edit_cons[page], 0, {display:"none"});
      // TweenMax.to(edit_cons[page], 1, {height:"0px"});
      this.style.display="none";
      exp_buts[page].style.display="block";
    }


//form confirmation
var input_sub = document.querySelectorAll("input[type=submit]");

[].forEach.call(input_sub, function(input){
  input.addEventListener("click", showConfirm, false);
});

function showConfirm(){
  console.log(this.name);
  var r = confirm("Are you sure you want to commit these changes?");

  if(r){

  }else{
      this.name="";
  }
  return r;

}



})();
