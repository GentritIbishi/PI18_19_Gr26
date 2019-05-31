CREATE TABLE articles (
    a_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    a_title VARCHAR(256) NOT NULL,
    a_text TEXT NOT NULL,
    a_author varchar(256) NOT NULL,
    a_time DATETIME
);

INSERT INTO article (a_title, a_text, a_author, a_date) VALUES (
    'LG V30', 'the newest flagship phone from LG is here and it looks
     amazing, but will it top the competition?'
    , 'Admin', '2019-04-01 12:23:45');
INSERT INTO article (a_title, a_text, a_author, a_date) VALUES(
    'SAMSUNG GALAXY S10', 'With its new design, it already looks like it 
    could win the phone of the year award, but will everyone like the 
    holepunch display?', 'Admin', '2019-04-01 12:23:45'
);
INSERT INTO article (a_title, a_text, a_author, a_date) VALUES(
    'Samsung Galaxy A70 review', 'The Samsung Galaxy A70 raises the bar
     within the new A series - a completely reimagined lineup to lead a 
     full-scale war in the midrange kingdom. And the rule of the Chinese makers is very much threatened, having already seen what the A40 and A50 are capable of.', 'Admin', '2019-04-01 12:23:45'
);
INSERT INTO article (a_title, a_text, a_author, a_date) VALUES(
    ' Asus Zenfone 6 review', 'Asus is far from a major player in the 
    smartphone industry. As far as the wider tech world is concerned, 
    however, the Taiwanese company is a behemoth, with its expertise in computer hardware earning it many fans.', 'Admin', '2019-04-01 12:23:45'
);
INSERT INTO article (a_title, a_text, a_author, a_date) VALUES(
    'Verizon announces pricing for Motorola Moto Z4', 'Moto Z4 is the 
    latest smartphone on the horizon, with a Snapdragon 675 chipset and plenty of storage', 'Amdin' ,'2019-04-01 12:23:45'
);
INSERT INTO article (a_title, a_text, a_author, a_date) VALUES(
    'Samsung Galaxy A70 review', 'The Samsung Galaxy A70 raises the bar 
    within the new A series - a completely reimagined lineup to lead a full-scale war in the midrange kingdom.', 'Admin', '2019-04-01 12:23:45'
);
INSERT INTO article (a_title, a_text, a_author, a_date) VALUES(
    'Motorola One Vision review', 'Even though Motorola is not the 
    dominant maker it once was it was never afraid to innovate and push 
    the envelope. The company is even looking to release a foldable phone, reviving the RAZR series, but that doesnt mean its overlooking its midrange lineup.', 'Admin', '2019-04-01 12:23:45'
);
INSERT INTO article (a_title, a_text, a_author, a_date) VALUES(
    'Huawei P30 Lite review', 'What looks like a Huawei P30, feels like a P30, snaps photos like a P30, and yet its cheaper and lighter? Well, Huawei would have you believe its the Huawei P30 Lite. ', 'Admin','2019-04-01 12:23:45'
);
INSERT INTO article (a_title, a_text, a_author, a_date) VALUES(
    'Samsung Galaxy Fold review', 'The Galaxy Fold was the "one more thing" 
    at Samsungs MWC event this year and what a thing it was! A smartphone with a massive foldable AMOLED screen, a second AMOLED on the outside 
    for mundane tasks, a bunch of trendy cameras all over - these wrapped within a unique body with a sophisticated hinge. And being a first of its kind, the Galaxy Fold promised one thing - to show you the future if you are ready to pay the price - and a steep price it is.', 'Admin', '2019-04-01 12:23:45'
);
INSERT INTO article (a_title, a_text, a_author, a_date) VALUES(
    'Samsung Galaxy M10 review', 'After making a couple of adjustments to its strategy, Samsung is finally ready to make a comeback to the low-end and mid-range markets. ', 'Admin',  '2019-04-01 12:23:45'
);