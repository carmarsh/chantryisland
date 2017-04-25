(function(){

var sched_con = document.querySelector("#tours_dates_sched_section"),
    month_buts = sched_con.querySelectorAll(".blue_book_but"),
    tables = sched_con.querySelectorAll(".table_month"),
    date = new Date(),
    month = date.getMonth();

window.addEventListener("load", displaySched, false);

//display schedule based on current month
function displaySched(){
  if(month >= 0 && month < 5 || month > 8 ){
    //jan-may OR Oct-Dec
    tables[0].style.display="block";
    month_buts[0].classList.add("active_month");
  }
  if(month == 5){
    //June
    tables[1].style.display="block";
  }
  if(month == 6){
    //july
    tables[2].style.display="block";
  }
  if(month == 7){
    //august
    tables[3].style.display="block";
  }
  if(month == 8){
    //september
    tables[4].style.display="block";
  } else{
    tables[0].style.display="block";
  }
}



    [].forEach.call(month_buts, function(month_but){
      month_but.addEventListener("click", changeSched, false);
    });

//change schedule on click
    function changeSched(){
      var month = this.id;
      var table = "#table_" + month;

      [].forEach.call(tables, function(table){
        table.style.display="none";
      });

      [].forEach.call(month_buts, function(month_but){
        month_but.classList.remove("active_month");
      });

      document.querySelector(table).style.display="block";
      this.classList.add("active_month");

    }






})();
