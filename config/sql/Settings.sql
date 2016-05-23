/**/
CREATE TABLE IF NOT EXISTS Settings (
	  id int(2) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	  Name VARCHAR(24) NOT NULL,
	  Dscp VARCHAR(24) NOT NULL,
	  Vale VARCHAR(12) NOT NULL DEFAULT '0'
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO Settings VALUES (NULL,'SetApp_Demo','Description','Online');
INSERT INTO Settings VALUES (NULL,'SetApp_Lang','Description','English');
INSERT INTO Settings VALUES (NULL,'SetApp_Stle','Description','Inverse');
INSERT INTO Settings VALUES (NULL,'SetApp_Lyut','Description','Default');
INSERT INTO Settings VALUES (NULL,'SetApp_Menu','Description','Right');
INSERT INTO Settings VALUES (NULL,'SetApp_0006','Description','Value');
INSERT INTO Settings VALUES (NULL,'SetApp_0007','Description','Value');
INSERT INTO Settings VALUES (NULL,'SetApp_0008','Description','Value');




