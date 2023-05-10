create table myLogin(
  id int(11) NOT NULL AUTO_INCREMENT,
  login_id varchar(20) NOT NULL,
  login_pw varchar(20) NOT NULL,
  created datetime NOT NULL,
  PRIMARY KEY(id)
);

 INSERT INTO myLogin values (0,'admin','0000',now());
 
CREATE DATABASE Login;

COMMIT;