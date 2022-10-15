CREATE TABLE IF NOT EXISTS users (
  `user_id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(127) NOT NULL,
  `email` varchar(127) NOT NULL,
  `username` varchar(127) NOT NULL,
  `password` varchar(127) NOT NULL
  -- image
  );
