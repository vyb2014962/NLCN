create database shop;
use shop;
create table user(
	user_id int not null primary key,
    user_ten varchar(30),
    user_mk varchar(30)
    );
    INSERT INTO user  (user_id,user_ten,user_mk) values (1,'B2014962','123');
create table thanh_pho (
	tp_ma INT NOT NULL PRIMARY KEY,
	tpho_ten varchar(100) 
)CHARACTER SET = UTF8;
create table quan_huyen(
	ma_qhuyen INT UNSIGNED NOT NULL PRIMARY KEY,
	qhuyen_ten varchar(30),
    tp_ma int,
    FOREIGN KEY (tp_ma) REFERENCES thanh_pho(tp_ma)
)CHARACTER SET = UTF8;
	
INSERT INTO thanh_pho (tp_ma,tpho_ten) values (1,'Cần Thơ');
INSERT INTO thanh_pho (tp_ma,tpho_ten) values (2,'Đà Nẵng');
INSERT INTO thanh_pho (tp_ma,tpho_ten) values (3,'Hồ Chí Minh');

INSERT INTO quan_huyen (ma_qhuyen,qhuyen_ten,tp_ma) values (1,'Omon',1);
INSERT INTO quan_huyen (ma_qhuyen,qhuyen_ten,tp_ma) values (2,'Thới Lai',1);
INSERT INTO quan_huyen (ma_qhuyen,qhuyen_ten,tp_ma) values (3,'Bình thủy',1);
INSERT INTO quan_huyen (ma_qhuyen,qhuyen_ten,tp_ma) values (4,'Cái răng',1);


create table brand_mobie(
	ma_brand INT NOT NULL PRIMARY KEY,
	brand_ten varchar(30)
)CHARACTER SET = UTF8;

create table dien_thoai(
	dthoai_ma INT UNSIGNED NOT NULL PRIMARY KEY,
	dthoai_ten varchar(1000),
	price varchar(30),
    gift varchar(30),
    ma_brand int,
    pres varchar(10),
    dgia varchar(10),
    dgia_sl varchar(20),
     img varchar(100),
    FOREIGN KEY (ma_brand) REFERENCES brand_mobie(ma_brand)
)CHARACTER SET = UTF8;
select * from dien_thoai;
drop table dien_thoai_sale;
create table dien_thoai_sale(
	dthoai_ma INT UNSIGNED NOT NULL PRIMARY KEY,
	dthoai_ten varchar(1000),
    price varchar(30),
    gift varchar(30),
    ma_brand int,
    pres varchar(10),
    dgia varchar(10),
      img varchar(100),
    FOREIGN KEY (ma_brand) REFERENCES brand_mobie(ma_brand)
)CHARACTER SET = UTF8;
INSERT INTO brand_mobie (ma_brand,brand_ten) values (1,'Iphone');
INSERT INTO brand_mobie (ma_brand,brand_ten) values (2,'oppo');
INSERT INTO brand_mobie (ma_brand,brand_ten) values (3,'realme');
INSERT INTO brand_mobie (ma_brand,brand_ten) values (4,'samsung');
INSERT INTO brand_mobie (ma_brand,brand_ten) values (5,'xiaomi');

INSERT INTO dien_thoai_sale (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,img) values (1,'Samsung Galaxy A34 5G 256GB','8.490.000','Quà 750.000','-10%',4,'4.2','../img/1.webp');
INSERT INTO dien_thoai_sale (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,img) values (2,'Samsung Galaxy A14 6GB','4.390.000','Quà 200.000','-12%',4,'4.3','../img/2.webp');
INSERT INTO dien_thoai_sale (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,img) values (3,'Samsung Galaxy A24 8GB','6.690.000','Quà 250.000','-4%',4,'4.2','../img/3.webp');
INSERT INTO dien_thoai_sale (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,img) values (4,'Samsung Galaxy S23 5G 128GB','16.390.000','Quà 750.000','-28%',4,'4.4','../img/4.webp');
INSERT INTO dien_thoai_sale (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,img) values (5,'Samsung Galaxy S22 Ultra 5G 128GB ','30.990.000','Giảm sốc 18.890.000','-39%',4,'4.2','../img/5.webp');




    
    
INSERT INTO dien_thoai (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,dgia_sl,img) values (1,' iPhone 14 Pro Max 128GB ','29.990.000','Giá Rẻ 26.550.000','-9%',1,'4.3','271','../img/phone1.jpg');
INSERT INTO dien_thoai (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,dgia_sl,img) values (2,' iPhone 14 Pro','27.990.000','Giá Rẻ 24.990.000','-10%',1,'4.3','132','../img/phone2.jpg');
INSERT INTO dien_thoai (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,dgia_sl,img) values (3,'  iPhone 11 64GB ','11.990.000','Giá Rẻ 10.390.000','-13%',1,'4.8','27','../img/phone3.jpg');
INSERT INTO dien_thoai (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,dgia_sl,img) values (4,' OPPO Reno8 T 5G 128GB  ','9.990.000','Giá Rẻ 9.550.000','-3%',2,'4.9','21','../img/phone4.jpg');
INSERT INTO dien_thoai (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,dgia_sl,img) values (5,' OPPO Reno8 Z 5G ','18.990.000','Giá Rẻ 17.490.000','-5%',2,'4.3','11','../img/phone5.jpg');
INSERT INTO dien_thoai (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,dgia_sl,img) values (6,'  Xiaomi Redmi 12C 128GB  ','2.190.000','Giá Rẻ 1.890.000','-13%',5,'4.3','131','../img/phone6.jpg');
INSERT INTO dien_thoai (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,dgia_sl,img) values (7,' OPPO Find N2 Flip','19.990.000','Quà 200.000','-9%',2,'4.5','32','../img/phone7.jpg');
INSERT INTO dien_thoai (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,dgia_sl,img) values (8,' Xiaomi 12T 5G 256GB','12.990.000','Giá Rẻ 10.990.000','-15%',3,'4.6','84','../img/phone8.jpg');
INSERT INTO dien_thoai (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,dgia_sl,img) values (9,'realme C55 6GB','4.990.000','Giá Rẻ 4.550.000','-8%',3,'4.2','100','../img/phone9.jpg');
INSERT INTO dien_thoai (dthoai_ma,dthoai_ten,price,gift,pres,ma_brand,dgia,dgia_sl,img) values (10,' realme C30s (4GB/64GB) ','2.990.000','Giá Rẻ 2.550.000','-13%',3,'4.5','59','../img/phone10.jpg');