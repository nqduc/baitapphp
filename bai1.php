<html>
   
   <head>
      <title>Bài tập Class (Lớp) trong PHP</title>
   </head>
   <body>
   
      <?php 
         class MyClass {
            public function __construct()
         {
            echo 'class đã được khởi tạo'."<br>";
         }
      }
         $userclass= new MyClass;
      ?>
       
   </body>
</html>