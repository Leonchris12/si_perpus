create database ppl_barang;
use ppl_barang;

create table barang(
    id_obat int not null primary key auto_increment,
    nama_obat varchar(200) not null,
    harga_obat int,
    jumlah_obat int
)