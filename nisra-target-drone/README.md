# NISRA Target Domain
NISRA 靶機 source code 跟 build up 指南

## Requirement
- ubuntu server (version: 20.04)
- apache http server (version: 2.4.41 (ubuntu))
- php (version: 7.4.3)
- mysql (version: 8.0.28)

## Rebuild

### Install
- `./settings/install.sh` 裡面已經包好需要的安裝
	- `sudo chmod 774 install.sh`
	- `sudo bash install.sh`
- `./settings/full-backup-2021-12-26.sql` 是需要的 database full backup
	- Restore
		- `sudo mysql -u root [database_name] < [name].sql`
	- backup
		- `sudo mysqldump -u root [database_name] > [name].sql`

### Highlight
- The GRANT of user nisra:
	- **Never use GRANT ALL**, **Only give SELECT, INSERT, UPDATE, DELETE, CREATE**


## SETTINGS

### MYSQL SERVER
* The password of mysql VALIDATE PASSWORD: `n15Ra_TaRG1t_D0Ma1n`
* TABLE SETTINGS: (should be load by backup)
	* USER: `nisra`
	* PASSWARD: `n15ra_TarGet_2021`
	* DATABASES: `nisra_target`
* TABLES:
	```
	CREATE TABLE `users` (
		`id` int unsigned NOT NULL AUTO_INCREMENT,
		`username` varchar(50) NOT NULL,
		`password` varchar(50) NOT NULL,
		`email` varchar(150) NOT NULL,
		`permission` int NOT NULL,
		PRIMARY KEY (`id`)
	);
	```
	```
	CREATE TABLE `events` (
		`id` int unsigned NOT NULL AUTO_INCREMENT,
		`title` varchar(150) NOT NULL,
		`event_date` timestamp,
		`info` varchar(1500) NOT NULL,
		`notes` varchar(1500),
		PRIMARY KEY (`id`)
	);
	```
