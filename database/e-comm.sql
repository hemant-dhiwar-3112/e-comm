create database e_comm;

use e_comm;

create table
    ecomm_registration (
        R_ID int (10) AUTO_INCREMENT,
        R_NAME varchar(20),
        R_DOB varchar(200),
        R_PHONE_NO1 varchar(200) UNIQUE,
        R_PHONE_NO2 varchar(200),
        R_EMAIL varchar(200),
        PRIMARY key (R_ID)
    );

create table
    ecomm_login (
        L_ID int (10) AUTO_INCREMENT,
        L_EMAIL LONGTEXT NOT NULl,
        L_PHONE VARCHAR(200) UNIQUE,
        L_PASSWORD varchar(200),
        PRIMARY key (L_ID)
    );

CREATE TABLE
    ecomm_product_S (
        S_ID int (10) AUTO_INCREMENT,
        S_name VARCHAR(50),
        S_last VARCHAR(60),
        hi1 VARCHAR(60),
        hi2 VARCHAR(60),
        hi3 VARCHAR(60),
        hi4 VARCHAR(60),
        hi5 VARCHAR(60),
        S_poster VARCHAR(200),
        S_cast VARCHAR(10),
        PRIMARY key (S_ID)
    );

INSERT INTO
    ecomm_product_S (
        S_name,
        S_last,
        hi1,
        hi2,
        hi3,
        hi4,
        hi5,
        S_poster,
        S_cast
    )
VALUES
    (
        'Redmi 12 5G ',
        '256 GB Storage jade Black (8 GB RAM)',
        '8 GB RAM | 256 GB ROM | Expandable Upto 1 TB',
        '17.25 cm (6.79 inch) Full HD+ Display',
        '50MP + 2MP | 8MP Front Camera',
        '5000 mAh Battery',
        'Snapdragon 4 Gen 2 Processor',
        'S-1.jpg',
        '14,499'
    ),
    (
        'OnePlus ',
        'Nord CE 3 Lite 5G(Pastel Lime, 128 GB)  (8 GB RAM)',
        '8 GB RAM | 128 GB ROM',
        '17.07 cm (6.72 inch) Display',
        '108MP Rear Camera',
        'Android Android 13',
        '5000 mAh Battery',
        'S-2.jpg',
        '17,999'
    ),
    (
        'Realme C53 ',
        '(Champion Gold, 128 GB)  (4 GB RAM)',
        '4 GB RAM | 128 GB ROM | Expandable Upto 2 TB',
        '17.12 cm (6.74 inch) HD Display',
        '108MP + 2MP | 8MP Front Camera',
        '5000 mAh Battery',
        'T612 Processor',
        'S-3.jpg',
        '9,999'
    ),
    (
        'Vivo Y36 ',
        '(Vibrant Gold, 128 GB)  (8 GB RAM)',
        '8 GB RAM | 128 GB ROM',
        '16.87 cm (6.64 inch) Full HD+ Display',
        '50MP + 2MP | 16MP Front Camera',
        '5000 mAh Battery',
        'Snapdragon 680 Processor',
        'S-4.jpg',
        '16,999'
    ),
    (
        'IQOO Z6 ',
        'Lite 5G (With Charger) (Stellar Green, 128 GB)  (6 GB RAM)',
        '6 GB RAM | 128 GB ROM',
        '16.97 cm (6.68 inch) Display',
        '50MP Rear Camera',
        'Android Q 12',
        '5000 mAh Battery',
        'S-5.jpg',
        '12,399'
    ),
    (
        'Realme C55 ',
        '(Rainforest, 128 GB)  (8 GB RAM)',
        '8 GB RAM | 128 GB ROM | Expandable Upto 1 TB',
        '17.07 cm (6.72 inch) Full HD+ Display',
        '64MP + 2MP | 8MP Front Camera',
        '5000 mAh Battery',
        'Helio G88 Processor',
        'S-6.jpg',
        '10,999'
    ),
    (
        'Infinix Note ',
        '30 5G (Interstellar Blue, 256 GB)  (8 GB RAM)',
        '8 GB RAM | 256 GB ROM | Expandable Upto 2 TB',
        '17.22 cm (6.78 inch) Full HD+ Display',
        '108 MP + 2 MP+ AI Lens | 16MP Front Camera',
        '5000 mAh Li-ion Polymer Battery',
        'Dimensity 6080 Processor',
        'S-7.jpg',
        '10,999'
    ),
    (
        'Infinix Zero ',
        '30 5G (Fantasy Purple, 256 GB)  (12 GB RAM)',
        '12 GB RAM | 256 GB ROM',
        '17.22 cm (6.78 inch) Full HD+ Display',
        '108MP (OIS) + 13MP + 2MP | 50MP Front Camera',
        '5000 mAh Lithium-ion Polymer Battery',
        'Dimensity 8020 Process',
        'S-8.jpg',
        '10,999'
    );

CREATE TABLE
    ecomm_product_T (
        T_ID int (10) AUTO_INCREMENT,
        T_name VARCHAR(50),
        T_last VARCHAR(500),
        hi1 VARCHAR(60),
        hi2 VARCHAR(60),
        hi3 VARCHAR(60),
        hi4 VARCHAR(60),
        hi5 VARCHAR(60),
        T_poster VARCHAR(200),
        T_cast VARCHAR(10),
        PRIMARY key (T_ID)
    );

INSERT INTO
    ecomm_product_T (
        T_name,
        T_last,
        hi1,
        hi2,
        hi3,
        hi4,
        hi5,
        T_poster,
        T_cast
    )
VALUES
    (
        'Mi A Series ',
        '80 cm (32 inch) HD Ready LED Smart Google TV 2024 Edition',
        'Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube',
        'Operating System: Google TV',
        'Resolution: HD Ready 1366 x 768 Pixels',
        'Sound Output: 20 W',
        'Refresh Rate: 60 Hz',
        'stv-1.jpg',
        '12,999'
    ),
    (
        'REDMI 80 cm ',
        '(32 inch) HD Ready LED Smart FireTv OS 7 TV 2024 Edition with Dolby Audio & DTS: Virtual X  (L32MA- FVIN)',
        'Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube',
        'Operating System: FireTv OS 7',
        'Resolution: HD Ready 1366 x 768 Pixels',
        'Sound Output: 20 W',
        'Refresh Rate: 60 Hz',
        'stv-2.jpg',
        '11,999'
    ),
    (
        'Acer Advanced  ',
        'I Series 80.01 cm (32 inch) HD Ready LED Smart Google TV 2023 Edition with 1.5GB RAM, 16GB Storage, 30W Dolby Audio  (AR32GR2841HDFL)',
        'Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube',
        'Operating System: Google TV',
        'Resolution: HD Ready 1366 x 768 Pixels',
        'Sound Output: 30 W',
        'Refresh Rate: 60 Hz',
        'stv-3.jpg',
        '12,999'
    ),
    (
        'iFFALCON ',
        'by TCL U62 108 cm (43 inch) Ultra HD (4K) LED Smart Google TV with Dolby Audio, HDR10  (iFF43U62)',
        'Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube',
        'Operating System: FireTv OS 7',
        'Resolution: Ultra HD (4K) 3840 x 2160 Pixels',
        'Sound Output: 24 W',
        'Refresh Rate: 60 Hz',
        'stv-4.jpg',
        '18,999'
    ),
    (
        'SAMSUNG ',
        'Crystal Vision 4K iSmart with Voice Assistant 108 cm (43 inch) Ultra HD (4K) LED Smart Tizen TV 2023 Edition with IOT Sensors for Light & Camera  (UA43CUE70AKLXL) ',
        'Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube',
        'Operating System: Tizen',
        'Resolution: Ultra HD (4K) 3840 x 2160 Pixels',
        'Sound Output: 20 W',
        'Refresh Rate: 50 Hz',
        'stv-5.jpg',
        '32,999'
    ),
    (
        'Acer Advanced  ',
        'I Series 102 cm (40 inch) Full HD LED Smart Google TV 2023 Edition with 1.5GB RAM, 16GB Storage, 30W Dolby Audio  (AR40GR2841FDFL)',
        'Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube',
        'Operating System: Google TV',
        'Resolution:  Full HD 1080 x 1920 Pixels',
        'Sound Output: 30 W',
        'Refresh Rate: 60 Hz',
        'stv-6.jpg',
        '16,999'
    ),
    (
        'SAMSUNG ',
        '80 cm (32 Inch) HD Ready LED Smart Tizen TV with Bezel-free Design  (UA32T4380AKXXL)',
        'Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube',
        'Operating System: Tizen',
        'Resolution: HHD Ready 1366 x 768 Pixels',
        'Sound Output: 20 W',
        'Refresh Rate: 50 Hz',
        'stv-7.jpg',
        '15,299'
    ),
    (
        'Acer Advanced  ',
        'I Series 80.01 cm (32 inch) HD Ready LED Smart Google TV 2023 Edition with 1.5GB RAM, 16GB Storage, 30W Dolby Audio  (AR32GR2841HDFL)',
        'Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube',
        'Operating System: Google TV',
        'Resolution: HD Ready 1366 x 768 Pixels',
        'Sound Output: 30 W',
        'Refresh Rate: 60 Hz',
        'stv-8.jpg',
        '12,999'
    );

CREATE TABLE
    ecomm_product_L (
        L_ID int (10) AUTO_INCREMENT,
        L_name VARCHAR(50),
        L_last VARCHAR(500),
        hi1 VARCHAR(60),
        hi2 VARCHAR(60),
        hi3 VARCHAR(60),
        hi4 VARCHAR(60),
        hi5 VARCHAR(60),
        L_poster VARCHAR(200),
        L_cast VARCHAR(10),
        PRIMARY key (L_ID)
    );

INSERT INTO
    ecomm_product_L (
        L_name,
        L_last,
        hi1,
        hi2,
        hi3,
        hi4,
        hi5,
        L_poster,
        L_cast
    )
VALUES
    (
        'DELL Intel ',
        'Core i3 11th Gen 1115G4 - (8 GB/SSD/256 GB SSD/Windows 11 Home) Vostro 3420 Notebook  (14 inch, Carbon Black, 1.48 Kg, With MS Office)',
        '35.56 cm (14 inch) Display',
        '8 GB DDR4 RAM',
        '256 GB SSd',
        '64 bit Windiws 11 Operating System',
        'Intel Core i3 processor (11 th Gen)',
        'L-1.jpg',
        '30,999'
    ),
    (
        'HP 2023 ',
        'Intel Core i3 12th Gen 1215U - (8 GB/SSD/512 GB SSD/Windows 11 Home) 15s-fy5003TU Thin and Light Laptop  (15.6 Inch, Natural Silver, 1.69 Kg, With MS Office)',
        '39.62 cm (15.6 Inch) Display',
        '8 GB DDR4 RAM',
        '512 GB SSD',
        'Windowa 11 Operating System',
        'Intel Core i3 processor (12 th Gen)',
        'L-2.jpg',
        '36,999'
    ),
    (
        'ASUS Vivobook ',
        '15 Intel Core i3 12th Gen 1215U - (8 GB/SSD/512 GB SSD/Windows 11 Home) X1502ZA-EJ953WS Thin and Light Laptop  (15.6 Inch, Icelight Silver, 1.70 kg, With MS Office)',
        '39.62 cm (15.6 Inch) Display',
        '8 GB DDR4 RAM',
        '512 GB SSD',
        'Windowa 11 Operating System',
        'Intel Core i3 processor (12 th Gen)',
        'L-3.jpg',
        '35,999'
    ),
    (
        'Lenovo IdeaPad ',
        'Slim 3 AMD Ryzen 5 Quad Core 7520U - (16 GB/SSD/512 GB SSD/Windows 11 Home) 15AMN8 Thin and Light Laptop  (15.6 Inch, Arctic Grey, 1.62 kg, With MS Office)',
        '39.62 cm (15.6 Inch) Display',
        '16 GB LPDDR5 RAM',
        '512 GB SSD',
        'Windowa 11 Operating System',
        'AMD Ryzen 5 Quad Core processor',
        'L-4.jpg',
        '43,499'
    ),
    (
        'ASUS Vivobook ',
        '15 Intel Core i3 12th Gen 1215U - (8 GB/SSD/512 GB SSD/Windows 11 Home) X1502ZA-EJ953WS Thin and Light Laptop  (15.6 Inch, Icelight Silver, 1.70 kg, With MS Office)',
        '39.62 cm (15.6 Inch) Display',
        '8 GB DDR4 RAM',
        '512 GB SSD',
        'Windowa 11 Operating System',
        'Intel Core i3 processor (12 th Gen)',
        'L-5.jpg',
        '35,999'
    ),
    (
        'Acer Extensa ',
        'Intel Core i3 N305 - (8 GB/SSD/512 GB SSD/Windows 11 Home) EX215-33 Notebook  (15.6 Inch, Pure Silver, 1.7 Kg) ',
        '39.62 cm (15.6 inch) Display',
        '8 GB DDR4 RAM',
        '512 GB SSd',
        '64 bit Windiws 11 Operating System',
        'Intel Core i3 processor (11 th Gen)',
        'L-6.jpg',
        '31,499'
    ),
    (
        'HP Pavilion ',
        'AMD Ryzen 5 Hexa Core 5625U - (8 GB/SSD/512 GB SSD/Windows 11 Home) 15-eh2050au Thin and Light Laptop  (15.6 inch, Natural Silver, 1.75 Kg, With MS Office)',
        '39.62 cm (15.6 Inch) Display',
        '16 GB LPDDR5 RAM',
        '512 GB SSD',
        'Windowa 11 Operating System',
        'AMD Ryzen 5 Quad Core processor',
        'L-7.jpg',
        '50,999'
    );

CREATE TABLE
    ecomm_product_H (
        H_ID int (10) AUTO_INCREMENT,
        H_name VARCHAR(50),
        H_last VARCHAR(60),
        hi1 VARCHAR(60),
        hi2 VARCHAR(60),
        hi3 VARCHAR(60),
        hi4 VARCHAR(60),
        hi5 VARCHAR(60),
        H_poster VARCHAR(200),
        H_cast VARCHAR(10),
        PRIMARY key (H_ID)
    );

INSERT INTO
    ecomm_product_H (
        H_name,
        H_last,
        hi1,
        hi2,
        hi3,
        hi4,
        hi5,
        H_poster,
        H_cast
    )
VALUES
    (
        'Boult Z40  ',
        'with Zen ENC Mic, 60H Battery Life, Low Latency Gaming, Made In India, 5.3 Bluetooth Headset  (Blue, In the Ear)',
        'With Mic:Yes',
        'Bluetooth version: 5.3',
        'Wireless range: 10 m',
        'Battery life: 60 hrs',
        'Zen Tech ENC mic |Low Latency Gaming | 60Hrs Battery Life',
        'h-1.jpg',
        '1,299'
    ),
    (
        'boAt Rockerz ',
        '110 with 40 HRS Playback, ENx Technology, Beast Mode & ASAP Charge Bluetooth Headset  (Active black, In the Ear)',
        'With Mic:Yes',
        'Bluetooth version: 5.3',
        'Wireless range: 10 m',
        '40 hours Playtime',
        'Dual Device Pairing',
        'h-2.jpg',
        '799'
    ),
    (
        'SpinBot Ranger ',
        'HX500 Tri-Mode Wireless Gaming Headphones | 28ms Low-Latency |2.4GHz & Bluetooth & Wired Gaming Headset  (Black, On the Ear)',
        'With Mic:Yes',
        'Bluetooth version: 5.3',
        'Wireless range: 10 m',
        'Connector type: Yes',
        'Battery life: 25 Hrs | Charging time: 2',
        'h-3.jpg',
        '1,999'
    ),
    (
        'boAt Airdopes ',
        '161/163 with ASAP Charge & 40 HRS Playback Bluetooth Headset  (Pebble Black, Active Black, True Wireless) ',
        'With Mic:Yes',
        'Bluetooth version: 5.1',
        'Wireless range: 10 m',
        '40 hours Playtime',
        'Low Latency Gaming',
        'h-4.jpg',
        '999'
    );

CREATE TABLE
    ecomm_product_D (
        D_ID int (10) AUTO_INCREMENT,
        D_name VARCHAR(50),
        D_last VARCHAR(60),
        hi1 VARCHAR(60),
        hi2 VARCHAR(60),
        D_poster VARCHAR(200),
        D_cast VARCHAR(10),
        PRIMARY key (D_ID)
    );

INSERT INTO
    ecomm_product_D (D_name, D_last, hi1, hi2, D_poster, D_cast)
VALUES
    (
        'Women ',
        'A-line Black Dress',
        'bluetiful color',
        'all size available',
        'p1.png',
        '390'
    ),
    (
        'Men Regular ',
        'Fit Washed Cut Away Collar Casual Shirt',
        'cool color',
        'all size available',
        'p2.png',
        '429'
    ),
    (
        'Women ',
        'Maxi Pink Dress',
        'bluetiful color',
        'all size available',
        'p3.png',
        '369'
    ),
    (
        'Men Slim ',
        'Fit Solid Slim Collar Casual Shirt',
        'cool color',
        'all size available',
        'p4.png',
        '500'
    );

CREATE TABLE
    mycard (
        C_ID int (10) AUTO_INCREMENT,
        C_name VARCHAR(50),
        C_last VARCHAR(60),
        hi1 VARCHAR(60),
        hi2 VARCHAR(60),
        hi3 VARCHAR(60),
        hi4 VARCHAR(60),
        hi5 VARCHAR(60),
        C_poster VARCHAR(200),
        C_cast VARCHAR(10),
        C_cati VARCHAR(10),
        pro_id int (10),
        PRIMARY key (C_ID)
    );

CREATE TABLE
    ecomm_address (
        A_ID int (10) AUTO_INCREMENT,
        A_House_No VARCHAR(100),
        A_Street VARCHAR(100),
        A_City VARCHAR(100),
        A_State VARCHAR(50),
        A_District VARCHAR(50),
        A_Pincode VARCHAR(50),
        pro_id int (10),
        PRIMARY key (A_ID)
    );

CREATE TABLE
    ecomm_order (
        O_ID int (10) AUTO_INCREMENT,
        O_order_No VARCHAR(20),
        O_fname VARCHAR(100),
        O_lname VARCHAR(400),
        O_addres VARCHAR(600),
        O_photo VARCHAR(200),
        O_amount VARCHAR(50),
        O_status VARCHAR(50),
        O_datetime VARCHAR(500),
        O_catigary VARCHAR(10),
        O_dstatus VARCHAR(100),
        pro_id int (10),
        PRIMARY key (O_ID)
    );