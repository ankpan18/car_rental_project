DROP table if exists contact ;
-- varchar saves space but is slow to fetch when we have a lot of data



create table contact(
    Name varchar(15),
    Gender varchar(15),
    Age INT,
    Email varchar(30),
    Phone BIGINT,
    Other varchar(20),
    Date DATE
     );


desc contact;