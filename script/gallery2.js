(function(){

  var image_thumbs = document.querySelectorAll('.galimg'),
      image_large = document.querySelector(".galImage_large"),
      image_desc = document.querySelector(".galImage_desc"),
      next_button = document.querySelector("#next_button"),
      prev_button = document.querySelector("#back_button"),
      gallery_con = document.querySelector("#expanded_gallery_con"),
      close_button = document.querySelector("#close_button"),
      current_img = 0,
      count = 0,
      row_count;


      //WHEN WINDOW LOADS REQUEST # OF IMAGES
      window.addEventListener("load", countRequest, false);

      function countRequest(){ // REQUEST # OF ROWS (AKA # OF IMAGES)
         httpRequest = new XMLHttpRequest();
         if(!httpRequest){
           console.log("browser not compatible");
           return false;
         }
         httpRequest.onload = returnCount;
         httpRequest.open('GET', 'admin/phpscripts/count.php');
         httpRequest.send();

      }

      function returnCount(){
        if (httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200) {
            row_count = JSON.parse(httpRequest.responseText);
            console.log(row_count);
          }

          //WHEN THUMBNAIL IS CLICKED, REQUEST LARGE IMAGE FROM DB
          [].forEach.call(image_thumbs, function(image_thumb){
            image_thumb.addEventListener("click", getLargeImg, false);
          });



          function getLargeImg(){
            httpRequest= new XMLHttpRequest();
            if(!httpRequest){
              console.log("browser not compatible");
              return false;
            }
            httpRequest.onreadystatechange = showLargeImg;
            httpRequest.open('GET', 'admin/phpscripts/getgallery.php' + '?image=' + this.id);
            httpRequest.send();
          }


          function showLargeImg(){
            //SHOW GALLERY
            gallery_con.style.display = "block";
            document.body.classList.add("noscroll");

            if (httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
              var image_data = JSON.parse(httpRequest.responseText);
              image_large.src = "img/gallery/" + image_data.gallery_image;
              image_desc.firstChild.nodeValue = image_data.gallery_desc;

          }

          current_img = parseInt(image_data.gallery_id);

        next_button.addEventListener("click", function(ev){
          navigate(1);
        });
        prev_button.addEventListener("click", function(ev){
          navigate(-1);
        });


        function navigate(direction){

          current_img = current_img + direction;

          if(direction == -1 && current_img == 0){
            current_img = row_count;
          }

          if(direction == 1 && current_img == row_count + 1){
            current_img = 1;
          }
          imgRequest(current_img);
        }


          function imgRequest(){
            console.log("firing");
            httpRequest= new XMLHttpRequest();
            if(!httpRequest){
              console.log("browser not compatible");
              return false;
            }
            httpRequest.onreadystatechange = getImg;
            httpRequest.open('GET', 'admin/phpscripts/getgallery.php' + '?image=' + current_img);
            httpRequest.send();
          }


            function getImg(){
              if (httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
                      console.log("next image working");
                var nextimage_data = JSON.parse(httpRequest.responseText);
                image_large.src = "img/gallery/" + nextimage_data.gallery_image;
                image_desc.firstChild.nodeValue = nextimage_data.gallery_desc;
              }
            }

          }

      }



      //CLOSE GALLERY
      close_button.addEventListener("click", closeGallery, false);
      function closeGallery() {
        gallery_con.style.display="none";
        document.body.classList.remove("noscroll");
        location.reload();
      }










})();
