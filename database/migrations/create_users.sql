CREATE TABLE users (
  id int AUTO_INCREMENT,
  first_name VARCHAR(255),
  last_name VARCHAR(255),
  email VARCHAR(255),
  optin TINYINT,
  created_at TIMESTAMP,
  updaterd_at TIMESTAMP,
  PRIMARY KEY id
)
