CREATE TABLE arena_database.users (
	user_id BIGINT NOT NULL,
	user_creation_time BIGINT DEFAULT CAST(FORMATDATETIME(CURRENT_TIMESTAMP(), 'yyyyMMddHHmmssSSS') AS BIGINT) NOT NULL,
	user_name varchar(100) NOT NULL,
	user_email_id varchar(100) NULL,
	user_passphrase varchar(100) NOT NULL,
	CONSTRAINT users_id-PK PRIMARY KEY (user_id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;
-- CREATE UNIQUE INDEX users_user_id_IDX USING BTREE ON arena_database.users (user_id);



SELECT CAST(UTC_TIMESTAMP() AS BIGINT);


, UTC_TIMESTAMP() + 0;

ELECT , CAST(TIME "11:35:00" AS YEAR);