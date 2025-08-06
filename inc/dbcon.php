<?php
date_default_timezone_set("Asia/Calcutta");

$con = mysqli_connect('localhost', 'root',  password:'', database:'u574893702_kirtidhara_inv');

function mres($con, $str)
{
    return mysqli_real_escape_string($con, $str);
}
function redirect($url)
{
?>
    <script>
        window.location.href = '<?php echo $url ?>'
    </script>
<?php
}