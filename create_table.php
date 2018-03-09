<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Create TABLE</title>
</head>
<body>

<?php
##########################################################################
$password = "U5CAdmin";  // Modify Password each time
##########################################################################
?>
<?php

print "<h2 align=\"center\">Create envirowestern TABLE</h2>";
// If password is valid let the user get access
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {

// Set the variables for the database access:
  require_once('connectvars.php');
  
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "CREATE TABLE envirowestern (
id INT AUTO_INCREMENT, 
code int(8), 
prize VARCHAR(100),
fname VARCHAR (20),
lname VARCHAR (30),
email VARCHAR (30),
PRIMARY KEY (id)
)";
 
if (mysqli_query ($dbc, $query)) {
 	echo "The query was successfully executed!<br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
}

$insert = "INSERT INTO envirowestern (id, code, prize)
        VALUES 
            ('1','57274264','$50 Farm Boy Gift Basket'),
            ('2','40894683','$25 Root Cellar Giftcard'),
            ('3','50229864','$10 Downtown Dollar Giftcard'),
            ('4','03776190','EnviroWestern Tote Bag'),
            ('5','00851882','EnviroWestern Tote Bag'),
            ('6','13903864','EnviroWestern Tote Bag'),
            ('7','55894252','EnviroWestern Tote Bag'),
            ('8','41090713','EnviroWestern Tote Bag'),
            ('9','39414082','EnviroWestern Tote Bag'),
            ('10','77948156','EnviroWestern Tote Bag'),
            ('11','86830083','EnviroWestern Tote Bag'),
            ('12','63578762','EnviroWestern Tote Bag'),
            ('13','18805180','EnviroWestern Tote Bag'),
            ('14','19223723','EnviroWestern Tote Bag'),
            ('15','64591278','EnviroWestern Tote Bag'),
            ('16','09963761','EnviroWestern Tote Bag'),
            ('17','13782234','EnviroWestern Tote Bag'),
            ('18','86485963','EnviroWestern Tote Bag'),
            ('19','95352095','Lindt Chocolate'),
            ('20','75930653','Lindt Chocolate'),
            ('21','99824707','Lindt Chocolate'),
            ('22','02632163','Lindt Chocolate'),
            ('23','63929781','USC Platinum Card'),
            ('24','92429092','USC Platinum Card'),
            ('25','38731430','USC Platinum Card'),
            ('26','63473098','USC Platinum Card'),
            ('27','00360321','USC Platinum Card'),
            ('28','40266682','USC Platinum Card'),
            ('29','50980971','USC Platinum Card'),
            ('30','61013769','USC Platinum Card'),
            ('31','51753760','USC Platinum Card'),
            ('32','90621180','USC Platinum Card'),
            ('33','51150868','Reusable Produce Bag'),
            ('34','36191086','Reusable Produce Bag'),
            ('35','53624282','Reusable Produce Bag'),
            ('36','46388765','Reusable Produce Bag'),
            ('37','36154002','Reusable Produce Bag'),
            ('38','58264411','Reusable Produce Bag'),
            ('39','31739889','Reusable Produce Bag'),
            ('40','27077359','Reusable Produce Bag'),
            ('41','69856082','Reusable Produce Bag'),
            ('42','55686412','Reusable Produce Bag'),
            ('43','46528588','Reusable Produce Bag'),
            ('44','84002288','Reusable Produce Bag'),
            ('45','74242846','Reusable Produce Bag'),
            ('46','11107532','Reusable Produce Bag'),
            ('47','33313423','Reusable Produce Bag'),
            ('48','31835584','Reusable Produce Bag'),
            ('49','81611262','Reusable Produce Bag'),
            ('50','13265306','Reusable Produce Bag'),
            ('51','86479114','Stainless Steel Straw'),
            ('52','94962752','Stainless Steel Straw'),
            ('53','84698480','Stainless Steel Straw'),
            ('54','91816282','Stainless Steel Straw'),
            ('55','45059930','Stainless Steel Straw'),
            ('56','19998621','Stainless Steel Straw'),
            ('57','85277830','Stainless Steel Straw'),
            ('58','38343779','Stainless Steel Straw'),
            ('59','82904488','Stainless Steel Straw'),
            ('60','66217451','Stainless Steel Straw'),
            ('61','04774914','Stainless Steel Straw'),
            ('62','46240432','Stainless Steel Straw'),
            ('63','34737615','Stainless Steel Straw'),
            ('64','75443079','Stainless Steel Straw'),
            ('65','92707975','Stainless Steel Straw'),
            ('66','70092543','Stainless Steel Straw'),
            ('67','29136761','Stainless Steel Straw'),
            ('68','38473553','Stainless Steel Straw'),
            ('69','56377426','Stainless Steel Straw'),
            ('70','86173947','Stainless Steel Straw'),
            ('71','55145211','Stainless Steel Straw'),
            ('72','65707032','Stainless Steel Straw'),
            ('73','17197627','Stainless Steel Straw'),
            ('74','62581528','Stainless Steel Straw'),
            ('75','14183891','Stainless Steel Straw'),
            ('76','35840711','Stainless Steel Straw'),
            ('77','01655865','Stainless Steel Straw'),
            ('78','28500196','Stainless Steel Straw'),
            ('79','56416745','Stainless Steel Straw'),
            ('80','78903884','Stainless Steel Straw'),
            ('81','44784710','Stainless Steel Straw'),
            ('82','59459562','Stainless Steel Straw'),
            ('83','74198318','$10 Downtown Dollar Giftcard'),
            ('84','62468149','$10 Downtown Dollar Giftcard'),
            ('85','37916830','Eco Soul Life Travel Mug - Green'),
            ('86','80490927','Eco Soul Life Travel Mug - Green'),
            ('87','36700027','Eco Soul Life Travel Mug - Green'),
            ('88','65066736','Eco Soul Life Travel Mug - Bamboo'),
            ('89','06575451','Eco Soul Life Travel Mug - Bamboo'),
            ('90','25549714','Eco Soul Life Travel Mug - Bamboo'),
            ('91','38460461','1 Tupperware Set'),
            ('92','21104313','1 Tupperware Set'),
            ('93','48496267','Energy Saving Adapter'),
            ('94','54759009','Energy Saving Adapter'),
            ('95','67302347','Stainless Steel Waterbottle'),
            ('96','35759538','Stainless Steel Waterbottle'),
            ('97','06118261','Stainless Steel Waterbottle'),
            ('98','02658839','Stainless Steel Waterbottle'),
            ('99','35260162','Stainless Steel Waterbottle'),
            ('100','31300521','Reusable Waterbottle'),
            ('101','21400634','Reusable Waterbottle'),
            ('102','29272343','Reusable Waterbottle'),
            ('103','24955347','Reusable Waterbottle'),
            ('104','41528995','Reusable Waterbottle'),
            ('105','03990215','Reusable Waterbottle'),
            ('106','73623625','Reusable Waterbottle'),
            ('107','54681127','Reusable Waterbottle'),
            ('108','04652680','Reusable Waterbottle'),
            ('109','75801456','Reusable Waterbottle'),
            ('110','55291302','$40 Moksha Yoga Voucher - One Week of Unlimited Hot Yoga'),
            ('111','25004931','$40 Moksha Yoga Voucher - One Week of Unlimited Hot Yoga'),
            ('112','51361197','$40 Moksha Yoga Voucher - One Week of Unlimited Hot Yoga'),
            ('113','44803518','$40 Moksha Yoga Voucher - One Week of Unlimited Hot Yoga'),
            ('114','51607476','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('115','28027033','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('116','91876752','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('117','84201808','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('118','69801053','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('119','22517721','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('120','04504795','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('121','43616357','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('122','26644136','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('123','68358743','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('124','67826752','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('125','48849762','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('126','91321280','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('127','53390220','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('128','75812840','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('129','55473889','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('130','40714800','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('131','54132694','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('132','62734071','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('133','24558636','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('134','88689335','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('135','69389783','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('136','46507941','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('137','09716859','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('138','75666650','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('139','30043362','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('140','71689291','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('141','12907961','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('142','16233407','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('143','92736045','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('144','64832339','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('145','63363577','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('146','81337125','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('147','15018896','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('148','42871868','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('149','05129499','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('150','93101152','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('151','18135697','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('152','18012295','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('153','70087287','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('154','32751966','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('155','68680295','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('156','81919028','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('157','08769976','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('158','53390781','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('159','41783508','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('160','08176631','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('161','75569144','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('162','16686772','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('163','12196671','First Class FREE Pass - Moksha Yoga + $10 Off Coupon at Smooth Wax Bar'),
            ('164','17307063','$25 Smooth Wax Bar Gift Voucher'),
            ('165','69422689','$25 Smooth Wax Bar Gift Voucher'),
            ('166','94193041','$35 Voucher for a Tour of the London Brewing Co-op (Up to 4 People)'),
            ('167','77578388','$10 Downtown Dollar Giftcard'),
            ('168','99562580','$10 Downtown Dollar Giftcard'),
            ('169','94791482','Abeego Beeswax Wraps Variety Pack');
         ";

if (mysqli_query ($dbc, $insert)) {
    echo "The insert was successfully executed!<br />";
} else {
    echo "The query could not be executed!" . mysqli_error($dbc);
}

mysqli_close($dbc);

}
else
{
// Wrong password or no password entered display this message
    if (isset($_POST['password']) || $password == "") {
        print "<p align=\"center\"><color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password</font></p>";}
    print "<form method=\"post\"><p align=\"center\">Please enter your password for access<br>";
    print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Login\" type=\"submit\"></p></form>";
}

?>
</body>
</html>