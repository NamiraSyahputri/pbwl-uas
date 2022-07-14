CREATE TABLE tb_perawatan (
  perawatan_id int(11) NOT NULL AUTO_INCREMENT,
  perawatan_nama varchar(100) NOT NULL,
  perawatan_jenis varchar(100) NOT NULL,
  perawatan_harga int(11) NOT NULL,
  PRIMARY KEY(perawatan_id)
  
);


CREATE TABLE tb_booking (
  booking_id int(11) NOT NULL AUTO_INCREMENT,
  booking_id_perawatan int(11) NOT NULL,
  booking_tgl date,
  PRIMARY KEY(booking_id),
  FOREIGN KEY(booking_id_perawatan) REFERENCES tb_perawatan(perawatan_id) ON UPDATE CASCADE ON DELETE RESTRICT
);