<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nova";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "
CREATE TABLE IF NOT EXISTS `user` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_type` int(11) DEFAULT NULL COMMENT '1 = Admin | 2 = Operator | 3 =  Staff',
  `usr_name` varchar(64) DEFAULT NULL,
  `usr_contact` varchar(15) DEFAULT NULL,
  `usr_email` varchar(64) DEFAULT NULL,
  `usr_username` varchar(32) DEFAULT NULL,
  `usr_password` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;
INSERT INTO `user` (`usr_id`, `usr_type`, `usr_name`, `usr_contact`, `usr_email`, `usr_username`, `usr_password`) VALUES
(1, NULL, 'Nirjhor Anjum', '01613211000', 'nirjhor@mail.org', NULL, NULL),
(2, NULL, 'Nirjhor Anjum', '01613211000', 'nirjhor@mail.org', NULL, NULL);
";

if ($conn->query($sql) === TRUE) 
{
    echo "Table user created successfully";
} 
else 
{
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>