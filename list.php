
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SG Explore</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
</head>
<body>
<!--    <style>-->
<!--        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display=swap');-->
<!--:root {-->
<!--  --value: 40%;-->
<!--  --back-color: #EBECF0;-->
<!--}-->

<!--*-->
<!--{-->
<!--  margin: 0;-->
<!--  padding: 0;-->
<!--  box-sizing: border-box;-->
<!--  font-family: 'Poppins', sans-serif;-->
<!--}-->
<!--body-->
<!--{-->
<!--  display: flex;-->
<!--  justify-content: space-around;-->
  <!--align-items: center;-->
<!--  min-height: 100vh;-->
<!--  background: #ebecf0; -->
<!--   font-family: 'Poppins',sans-serif;-->
<!--   color: #8a92a5;-->


<!--}-->
<!--.container-->
<!--{-->
<!--  position: relative;-->
<!--  display: flex;-->
<!--  justify-content: space-around;-->
  <!--align-items: center;-->
<!--  flex-wrap: wrap;-->
<!--  width:909px;-->
<!--}-->
<!--.container .box1-->
<!--{-->
<!--  width: 263px;-->
<!--  margin: 20px;-->
<!--  padding: 10px 2px;-->
<!-- }  -->

<!--.container .box1 .button_t-->
<!--{-->
<!--    display:block;-->
<!--    position: relative;-->
    <!--text-align: center;-->
    <!--justify-content: center;-->
    <!--align-items: center;-->
<!--}-->
<!--.buttont-->
<!--{-->
<!--    display: block;-->
<!--    position: relative;-->
<!--    box-shadow:-4px -4px 12px rgb(255, 255, 255),-->
<!--     4px 4px 12px rgba(121, 130, 160, 0.747);-->
<!--    width: 260px;-->
    <!--width: min-content;-->
    <!--width: fit-content(20em);-->
    <!--width: auto;-->
    
<!--    height: 45px;-->
<!--    border-radius: 50px;-->
<!--    font-size: 18px;-->
<!--    font-weight:500;-->
<!--    outline: none;-->
<!--    border: none;-->
<!--    background: #ebecf0;-->
<!--    line-height: 36px;-->
<!--    margin: 20px;-->
<!--    padding: 5px 5px;-->
<!--    cursor:pointer;-->
   
    
<!--}-->
<!--.buttont:hover-->
<!--{-->
<!--    box-shadow:inset -4px -4px 8px rgb(255, 255, 255),-->
<!--    inset  4px 4px 8px rgba(121, 130, 160, 0.747);-->
<!--}-->
<!--a{-->
<!--  text-decoration: none;-->
<!--  color: #8a92a5;-->
<!--  text-align:center;-->
<!--}-->
<!--    </style>-->
<style>
      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display=swap');
:root {
--value: 40%;
--back-color: #EBECF0;
}

*
{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}
body
{
background: #ebecf0; 
 font-family: 'Poppins',sans-serif;
}

.buttont
{
  display: block;
  width: max-content;
  height: 20px;
  font-size: 18px;
  font-weight: 500;
  background: #ebecf0;
  line-height: 16px;
  margin: 16px;
  padding: 5px 5px;
  cursor:pointer;  
}

a{
text-decoration: none;
color: #8a92a5;
}
i{
  margin-right: 10px;
  font-size: 22px;
}
  </style>
    
<?php
    $parameter = $_GET['pathUrl'];
    if ($parameter != null){
        $path = $parameter;
        $pathParameter = $parameter."/";
    } else {
        $path ="./";
        $pathParameter = "";
    }
    
    $files = scandir($path);
    $files = array_diff(scandir($path), array('.', '..'));
    
    echo "<div class='container'>";
        echo "<div class='box1'>";
    
    foreach($files as $file){
        
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    
    $file_without_ext = pathinfo($file, PATHINFO_FILENAME);
      if ($ext=="php"){}
      else if ($ext=="html"){}
      else if ($ext=="css"){}
      else if ($ext=="pdf"){
          
          echo "<div class='button_t'>";
          echo "<a href='https://techno3gamma.in/students-guide/doc_embed.html?docUrl=https://techno3gamma.in/students-guide/$pathParameter$file'>
                    <span class='buttont'>
                        <i class='fa-solid fa-file-pdf'></i>
                        $file_without_ext
                    </span>
                 </a>";
                echo "";
            echo "</div>";

        } else {
        
        echo "<div class='button_t'>";
            echo "<a href='https://techno3gamma.in/students-guide/list.php?pathUrl=$pathParameter$file'>
                    <span class='buttont'>
                        <i class='fa-solid fa-folder'></i>
                        $file_without_ext
                    </span>
                 </a>";
            echo "";
            echo "</div>";
            
        }
    }
    echo "</div>"; 
    echo "</div>";
?>
</body>
</html>



