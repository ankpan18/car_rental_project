DROP table if exists booking ;
-- varchar saves space but is slow to fetch when we have a lot of data



create table booking(
    Fname varchar(15),
    Lname varchar(15),
    Email varchar(30),
    Phone BIGINT,
    Cars varchar(25),
    Duration varchar(25),
    Note varchar(100),
    Time DATE
     );


desc booking;