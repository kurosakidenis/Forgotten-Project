<?php
session_start();
require 'db.php';
$username= mysqli_real_escape_string ($conn,$_POST['username']);

 $email =mysqli_real_escape_string ($conn,$_POST['email']) ;
 $password = mysqli_real_escape_string ($conn,$_POST['password']);
 $confirmcode=uniqid();
 $name = ''; $type = ''; $size = ''; $error = '';
    function compress_image($source_url, $destination_url, $quality) {

        $info = getimagesize($source_url);

            if ($info['mime'] == 'image/jpeg')
                    $image = imagecreatefromjpeg($source_url);

            elseif ($info['mime'] == 'image/gif')
                    $image = imagecreatefromgif($source_url);

        elseif ($info['mime'] == 'image/png')
                    $image = imagecreatefrompng($source_url);

            imagejpeg($image, $destination_url, $quality);
        return $destination_url;
    }
        function isMobile() {
    return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackbe‌​rry|iemobile|bolt|bo‌​ost|cricket|docomo|f‌​one|hiptop|mini|oper‌​a mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|‌​webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
 if(isset($_FILES['photo']))
 {
   $rand=uniqid();
      $errors= array();
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
      $file_ext=strtolower(end((explode('.',$_FILES['photo']['name']))));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 10485760){
         $errors[]='File size must be less than 10 MB';
      }

      if(empty($errors)===true)
      {
        $upload_dir = 'user_images/';
         compress_image($file_tmp,$upload_dir.$rand,80);

         
      $algo='6';
      $rounds='5000';
      $CryptSalt='$'.$algo.'$rounds='.$rounds.'$';      
      $hashedpassword=crypt($password,$CryptSalt);

      
      
      $mimi=$username;
      $vids=$mimi."vid_entry";
      $yeye="albums";
      $jana=$mimi.$yeye;
      $wewe="storyyako";
      $sisi=$mimi.$wewe;
      $leo="private";
      $kesho=$mimi.$leo;
      $shared="shared";
      $sh_albums="shrdal";
      $lini="pals";
      $friends=$mimi.$lini;
      $shared_pics=$mimi.$shared;
      $shared_albums=$mimi.$sh_albums;


      $_SESSION['userName'] = $username;

      $sql="CREATE TABLE  $sisi (
        `pic_id` int(11) NOT NULL AUTO_INCREMENT,
        `picname` varchar(200),
        `userPic` varchar(200) NOT NULL,
        PRIMARY KEY (`pic_id`));";

        $sql.="CREATE TABLE  $jana(
          `album_id` int(11) NOT NULL AUTO_INCREMENT,
          `album_name` varchar(200) NOT NULL,
          `userPic` varchar(200) NOT NULL,
            `pic_no` int(200) NOT NULL,
          PRIMARY KEY (`album_id`));";

       $sql.="CREATE TABLE $kesho(
        `pic_id` int(11) NOT NULL AUTO_INCREMENT,
        `picname` varchar(200),
        `userPic` varchar(200) NOT NULL,
        PRIMARY KEY (`pic_id`));";

        $sql.="CREATE TABLE $friends(
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(200) NOT NULL,
        `userPic` varchar(200) NOT NULL,
        `status` int(1) NOT NULL,
        PRIMARY KEY(`id`));";
        $sql.="CREATE TABLE IF NOT EXISTS $vids (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `url` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1;";

        $sql.="CREATE TABLE  $shared_albums(
          `album_id` int(11) NOT NULL AUTO_INCREMENT,
          `album_name` varchar(200) NOT NULL,
          `name` varchar(200) NOT NULL,
          `userPic` varchar(200) NOT NULL,
            `pic_no` int(200) NOT NULL,
          PRIMARY KEY (`album_id`));";
          $sql.="CREATE TABLE $shared_pics(
          `pic_id` int(11) NOT NULL AUTO_INCREMENT,
          `name` varchar(200),
          `userPic` varchar(200) NOT NULL,
          PRIMARY KEY (`pic_id`));"; 

      $sql.="INSERT INTO members(name,email,password,photo_id,confirmcode)
      VALUES('$username','$email','$hashedpassword','$rand','$confirmcode');
      ";
      if (mysqli_multi_query($conn,$sql)===true)
      {
        
    
      // If the user is on a mobile device, redirect them
if(isMobile()===true && mysqli_multi_query($conn,$sql1)===true){
    header('location:frame.php?id=$username');
}
else{
  header('location:view.php?id=$username');
}
      }
else{
  echo "username ".$username." alerady exists" ;
    }


      }
      else{
         echo "error";
      }
      


}
mysqli_close($conn);
 ?>

<?php
/*$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

header('Location: http://detectmobilebrowser.com/mobile');
*/
?>
function isMobile() {
    return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackbe‌​rry|iemobile|bolt|bo‌​ost|cricket|docomo|f‌​one|hiptop|mini|oper‌​a mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|‌​webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
// If the user is on a mobile device, redirect them
if(isMobile()){
    header("Location: http://m.yoursite.com/");
}