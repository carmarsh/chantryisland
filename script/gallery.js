(function(){

  var image_thumbs = document.querySelectorAll('.galImage_thumb'),
      image_large = document.querySelector(".galImage_large"),
      image_desc = document.querySelector(".galImage_desc"),
      next_button = document.querySelector("#next_button"),
      gallery_con = document.querySelector("#expanded_gallery_con"),
      close_button = document.querySelector("#close_button"),
      currentimg = 0,
      imgcount;



 window.addEventListener("load", countRequest, false);

      //get the # of rows in table request from database
      function makeRequest4() {
        console.log("makerequest4workign")
         httpRequest = new XMLHttpRequest();
         if(!httpRequest){
           console.log("browser not compatible");
           return false;
         }
         httpRequest.onload = returnCount;
         httpRequest.open('GET', 'includes/count.php');
         httpRequest.send();
      }

      //returning number of rows
      function returnCount(){
        if (httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200) {
            imgcount = JSON.parse(httpRequest.responseText);
            console.log(imgcount);

                    [].forEach.call(image_thumbs, function(image_thumb){
                      image_thumb.addEventListener("click", makeRequest, false);
                    });


function makeRequest(){
  console.log("make request working");
  httpRequest= new XMLHttpRequest();
  if(!httpRequest){
    console.log("browser not compatible");
    return false;
  }
  httpRequest.onreadystatechange = expandgalImage;
  httpRequest.open('GET', 'includes/getgallery.php' + '?galImage=' + this.id);
  httpRequest.send();
}


//showing large version of image
function expandgalImage(){

  gallery_con.style.display = "block";

  if (httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){

    var galImage_data = JSON.parse(httpRequest.responseText);
    image_large.src = "img/gallery/" + galImage_data.gallery_image + '.jpg';
    image_desc.firstChild.nodeValue = galImage_data.gallery_desc;


        currentimg = parseInt(galImage_data.gallery_id);

        console.log(currentimg);

      next_button.addEventListener("click", makeRequest2, false);
      back_button.addEventListener("click", makeRequest3, false);


      function makeRequest2(){
        httpRequest= new XMLHttpRequest();
        if(!httpRequest){
          console.log("browser not compatible");
          return false;
        }
        httpRequest.onreadystatechange = nextgalImage;
        httpRequest.open('GET', 'includes/getgallery.php' + '?galImage=' + currentimg);
        httpRequest.send();
    }

    //next image in database on next
      function nextgalImage(){
        // console.log("next image working");
        if (httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
          var nextgalImage_data = JSON.parse(httpRequest.responseText);
          image_large.src = "img/gallery/" + nextgalImage_data.gallery_image + '.jpg';
          image_desc.firstChild.nodeValue = nextgalImage_data.gallery_desc;
          console.log(currentimg);

          if(currentimg === imgcount){
            currentimg = 0;
          }
          currentimg = currentimg + 1;
        }
      }

      //request for previous image info
      function makeRequest3(){
        httpRequest = new XMLHttpRequest();
        if(!httpRequest){
          console.log("browser not compatible");
          return false;
        }

        console.log(currentimg);


        httpRequest.onreadystatechange = prevgalImage;
        httpRequest.open('GET', 'includes/getgallery.php' + '?galImage=' + currentimg);
        httpRequest.send();


      }

      //previous image on prev button
      function prevgalImage(){
        if (httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
          var prevgalImage_data = JSON.parse(httpRequest.responseText);
          image_large.src = "img/gallery/" + prevgalImage_data.gallery_image + '.jpg';
          image_desc.firstChild.nodeValue = prevgalImage_data.gallery_desc;

          if(currentimg === 1){
            currentimg = 48;
          }else{
          currentimg--;
        }

          }
        }

}
}
}
}




//close gallery viewer
close_button.addEventListener("click", closeGallery, false);

function closeGallery() {
  gallery_con.style.display="none";
  currentimg = 0;
}


})();
