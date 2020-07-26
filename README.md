# CCDI - Admin Panel - Career Guidance System 

-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `exp_date` BEFORE INSERT ON `user` FOR EACH ROW SET

    NEW.created_at = IFNULL(NEW.created_at, NOW()),

    NEW.exp_date_at = TIMESTAMPADD(DAY, 15, NEW.created_at)
$$
DELIMITER ;
