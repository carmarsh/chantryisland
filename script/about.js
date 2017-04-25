(function(){

var lhouse_buts = document.querySelectorAll(".lhouse_caption"),
    lhouse_overlays = document.querySelectorAll(".lhouse_overlay"),
    lhouse_paras = document.querySelectorAll(".lhouse_info"),
    mobile_info = document.querySelector("#mobile_lhouse_info_con"),
    infos = document.querySelectorAll(".m_info"),
    close_but = document.querySelector("#close_but");


    [].forEach.call(lhouse_buts, function(lhouse_but) {
      lhouse_but.addEventListener("mouseover", showOverlay, false);
      lhouse_but.addEventListener("click", showInfoDiv, false);
    });

    close_but.addEventListener("click", closeInfoDiv, false);



    function showOverlay(){
      var num = this.dataset.box;
      var tl = new TimelineMax();
      tl.to(lhouse_overlays[num], .5, {autoAlpha:1, ease: Power1.easeIn})
        .to(lhouse_paras[num], 1, {autoAlpha:1, ease: Power1.easeInOut}, '-=.5')
        .to(lhouse_paras[num], 1, {css:{marginTop:"5px"}, ease: Power1.easeInOut}, '-=1');
        lhouse_buts[num].addEventListener("mouseout", hideOverlay, false);

        function hideOverlay(){
          var tl = new TimelineMax();
          tl.to(lhouse_paras[num], .5, {css:{marginTop:"100px"}, ease: Power1.easeInOut})
          .to(lhouse_paras[num], .5, {autoAlpha:0, ease: Power1.easeInOut}, '-=.7')
          .to(lhouse_overlays[num], .5, {autoAlpha:0, ease: Power1.easeInOut}, '-=.5');

        }
    }

    function showInfoDiv(){
      var num = this.dataset.box;
      console.log(num);

      [].forEach.call(infos, function(info) {
        TweenMax.to(info, 1, {autoAlpha:0});
        TweenMax.to(info, 0, {delay: 1, display:"none"});
      });

      [].forEach.call(lhouse_buts, function(but) {
        but.classList.remove("clickedinfo");
      });


      var tl = new TimelineMax();

      tl.to(mobile_info, 1, {height:"200px"})
      .to(infos[num], 0, {display:"block"})
      .to(infos[num], 1, {autoAlpha:1});

    lhouse_buts[num].classList.add("clickedinfo");

    }

    function closeInfoDiv(){
      var tl = new TimelineMax();
      tl.to(infos[0], 1, {autoAlpha:0})
      .to(infos[1], 1, {autoAlpha:0})
      .to(mobile_info, 1, {display: "none"});
    }



})();
