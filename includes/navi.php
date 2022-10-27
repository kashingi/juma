<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
          $(document).ready(function(){
            $("p").mouseenter(function(){
              $(this).css("background-color", "skyblue");
            });
            $("p").mouseleave(function(){
              $(this).css("background-color", "white");
            });
            $(".to").click(function(){
                $(".om").fadeToggle(4000);
              });
                $(".uld").click(function(){
                  $(".lid").fadeToggle(4000);
                });
          });

        </script>
    </head>
    <body>
		<div>
			<h4>we produce valid and efficient systems</h4>
      <br>
      <br>  
      <br>
      
      <div>
        <h6 class="to">Learn, Create, and innovate</h6>
        <p class="om">Take your idea from a paper to a business</p>
      </div>
      <div>
        <h6 class="uld">Test this</h6>
        <ol class="lid">
          <li>Digital skills</li>
          <li>Bootcamps</li>
          <li>Corporate training</li>
          <li>Software design</li>
          <li>Enterprenuership</li>
          <li>Upto date skills</li>
        </ol>
      </div>
      <div>
        <p>We are listening and caring school.</p>
      </div>
		</div>
    </body>
</html>