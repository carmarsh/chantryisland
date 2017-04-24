(function(){
var circles = document.querySelectorAll(".d_circle"),
    dtitle = document.querySelector("#d_title"),
    dprice = document.querySelector("#d_price");

  var info = {
      circle0: {
                  title: "SHIPMATE",
                  price: "$1.00 - $199.00"
                },

      circle1: {
                title: "LIFESAVING CREW",
                price: "$200.00 - $999.00"
                },

      circle2: { title: "ASSISTANT LIGHTHOUSE CREW",
                price: "$1000.00 - $4999.00"
              },

      circle3: { title: "LIGHTHOUSE KEEPERS",
                price: "$5000.00 - $9999.00"
                },

      circle4: { title: "CAPTAIN LAMBERT'S CREW",
              price: "$10000.00 - $25000.00"
              },

      circle5: { title: "QUEEN VICTORIA'S CREW",
                price: "$2500.00 +"
              }
            };



    [].forEach.call(circles, function(circle){
      circle.addEventListener("mouseover", displayInfo, false);
    });

    function displayInfo(){

      [].forEach.call(circles, function(circle){
          circle.classList.remove("active_circ");
      });



      var circ = this.id;
      dtitle.firstChild.nodeValue = info[circ].title;
      dprice.firstChild.nodeValue = info[circ].price;
      this.classList.add("active_circ");

    }



  })();
