CREATE TABLE User (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL
);

CREATE TABLE Friend (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  friend_id INT,
  status VARCHAR(20) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES User(id),
  FOREIGN KEY (friend_id) REFERENCES User(id)
);

CREATE TABLE Room (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  type VARCHAR(20) NOT NULL
);

CREATE TABLE UserRoom (
  user_id INT,
  room_id INT,
  FOREIGN KEY (user_id) REFERENCES User(id),
  FOREIGN KEY (room_id) REFERENCES Room(id)
);

CREATE TABLE Message (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  room_id INT,
  content TEXT,
  timestamp DATETIME,
  FOREIGN KEY (user_id) REFERENCES User(id),
  FOREIGN KEY (room_id) REFERENCES Room(id)
);
