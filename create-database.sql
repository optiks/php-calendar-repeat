CREATE TABLE `duration` (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id), description VARCHAR(100));
INSERT INTO `duration` (description) VALUES ('Daily');
INSERT INTO `duration` (description) VALUES ('Weekly');
INSERT INTO `duration` (description) VALUES ('Monthly');
INSERT INTO `duration` (description) VALUES ('Yearly');

CREATE TABLE `repeat` (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id), duration_id INT, repeat_interval INT, repeat_on_monday BOOL, repeat_on_tuesday BOOL, repeat_on_wednesday BOOL, repeat_on_thursday BOOL, repeat_on_friday BOOL, repeat_on_saturday BOOL, repeat_on_sunday BOOL, starts_on DATE);
