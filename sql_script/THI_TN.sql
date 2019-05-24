create database THI_TN;
--drop database THI_TN

use THI_TN;

create table Account (
	USERID char(8) primary key,
	PASS char(14),
	ROLE char(10),
	constraint chk_role check(ROLE = 'Truong' or ROLE = 'Coso1' or ROLE = 'Coso2' or ROLE = 'Giangvien' or ROLE = 'Sinhvien')
);

create table CoSo (
	MACS char(3) primary key,
	TENCS nvarchar(40) unique,
	DIACHI nvarchar(100)
);

--auto increment table Khoa
create function AUTOID_KHOA()
returns char(8)
as
begin
	DECLARE @ID CHAR(8)
	IF(SELECT COUNT(MAKH) FROM Khoa) = 0
		SET @ID = '0'
	ELSE
		SELECT @ID = MAX(RIGHT(MAKH,4)) FROM Khoa
		SELECT @ID = CASE 
			WHEN @ID >= 0 and @ID < 9 THEN 'KHOA000' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 9 and @ID < 99 THEN 'KHOA00' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 99 and @ID < 999 THEN 'KHOA0' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 999 THEN 'KHOA' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
	end
	return @ID
end

create table Khoa (
	MAKH char(8) default dbo.AUTOID_KHOA() primary key,
	TENKH nvarchar(40) unique,
	MACS char(3),
	constraint fk_khoa_coso foreign key (MACS) references CoSo(MACS)
);

--auto increment table Lop
create function AUTOID_LOP()
returns char(8)
as
begin
	DECLARE @ID CHAR(8)
	IF(SELECT COUNT(MALOP) FROM Lop) = 0
		SET @ID = '0'
	ELSE
		SELECT @ID = MAX(RIGHT(MALOP,5)) FROM Lop
		SELECT @ID = CASE 
			WHEN @ID >= 0 and @ID < 9 THEN 'LOP0000' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 9 and @ID < 99 THEN 'LOP000' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 99 and @ID < 999 THEN 'LOP00' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 990 and @ID < 9999 THEN 'LOP0' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 9999 THEN 'LOP' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
	end
	return @ID
end

create table Lop (
	MALOP char(8) default dbo.AUTOID_LOP() primary key,
	TENLOP nvarchar(40) unique,
	MAKH char(8),
	constraint fk_lop_khoa foreign key (MAKH) references Khoa(MAKH)
);

--auto increment table MonHoc
create function AUTOID_MONHOC()
returns char(5)
as
begin
	DECLARE @ID CHAR(5)
	IF(SELECT COUNT(MAMH) FROM MonHoc) = 0
		SET @ID = '0'
	ELSE
		SELECT @ID = MAX(RIGHT(MAMH,4)) FROM MonHoc
		SELECT @ID = CASE 
			WHEN @ID >= 0 and @ID < 9 THEN 'M000' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 9 and @ID < 99 THEN 'M00' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 99 and @ID < 999 THEN 'M0' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 999 THEN 'M' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
	end
	return @ID
end

create table MonHoc (
	MAMH char(5) default dbo.AUTOID_MONHOC() primary key,
	TENMH nvarchar(40) unique
);

--auto increment table SinhVien
create function AUTOID_SINHVIEN()
returns char(8)
as
begin
	DECLARE @ID CHAR(8)
	IF(SELECT COUNT(MASV) FROM SinhVien) = 0
		SET @ID = '0'
	ELSE
		SELECT @ID = MAX(RIGHT(MASV,6)) FROM SinhVien
		SELECT @ID = CASE 
			WHEN @ID >= 0 and @ID < 9 THEN 'SV00000' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 9 and @ID < 99 THEN 'SV0000' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 99 and @ID < 999 THEN 'SV000' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 999 and @ID < 9999 THEN 'SV00' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 9999 and @ID < 99999 THEN 'SV0' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 99999 THEN 'SV' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
	end
	return @ID
end

create table SinhVien (
	MASV char(8) default dbo.AUTOID_SINHVIEN() primary key,
	HO nvarchar(40),
	TEN nvarchar(10),
	NGAYSINH datetime,
	DIACHI nvarchar(40),
	MALOP char(8),
	USERID char(8),
	constraint fk_sv_lop foreign key (MALOP) references Lop(MALOP),
	constraint fk_sv_acc foreign key (USERID) references Account(USERID)
);

--auto increment table GiaoVien
create function AUTOID_GIAOVIEN()
returns char(8)
as
begin
	DECLARE @ID CHAR(8)
	IF(SELECT COUNT(MAGV) FROM GiaoVien) = 0
		SET @ID = '0'
	ELSE
		SELECT @ID = MAX(RIGHT(MAGV,6)) FROM GiaoVien
		SELECT @ID = CASE 
			WHEN @ID >= 0 and @ID < 9 THEN 'GV00000' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 9 and @ID < 99 THEN 'GV0000' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 99 and @ID < 999 THEN 'GV000' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 999 and @ID < 9999 THEN 'GV00' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 9999 and @ID < 99999 THEN 'GV0' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
			WHEN @ID >= 99999 THEN 'GV' + CONVERT(CHAR, CONVERT(INT, @ID) + 1)
	end
	return @ID
end

create table GiaoVien (
	MAGV char(8) default dbo.AUTOID_GIAOVIEN() primary key,
	HO nvarchar(40),
	TEN nvarchar(90),
	HOCVI nvarchar(40),
	MAKH char(8),
	USERID char(8),
	constraint fk_gv_kh foreign key (MAKH) references Khoa(MAKH),
	constraint fk_gv_acc foreign key (USERID) references Account(USERID)
);

create table GiaoVien_DangKy (
	MAGV char(8),
	MALOP char(8),
	MAMH char(5),
	TRINHDO char(1) ,
	NGAYTHI datetime default GETDATE(),
	LAN smallint,
	SOCAUTHI smallint,
	THOIGIAN smallint,
	primary key(MALOP, MAMH, LAN),
	constraint chk_trinhdo_gvdk check(TRINHDO = 'A' or TRINHDO = 'B' or TRINHDO = 'C'),
	constraint chk_lan check(LAN >= 1 and LAN <= 2),
	constraint chk_socauthi check(SOCAUTHI <= 100 and SOCAUTHI >= 10),
	constraint chk_thoigian check(THOIGIAN >= 15 and THOIGIAN <= 60),
	constraint fk_gkdk_gv foreign key (MAGV) references GiaoVien(MAGV),
	constraint fk_gkdk_lop foreign key (MALOP) references Lop(MALOP),
	constraint fk_gkdk_mh foreign key (MAMH) references MonHoc(MAMH)
);

create table BoDe (
	CAUHOI int IDENTITY(1,1) primary key,
	MAMH char(5),
	TRINHDO char(1),
	NOIDUNG text,
	A nvarchar(30),
	B nvarchar(30),
	C nvarchar(30),
	D nvarchar(30),
	DAP_AN char(1),
	MAGV char(8),
	constraint chk_trinhdo_bd check(TRINHDO = 'A' or TRINHDO = 'B' or TRINHDO = 'C'),
	constraint chk_dapan check(DAP_AN = 'A' or DAP_AN = 'B' or DAP_AN = 'C' or DAP_AN = 'D'),
	constraint fk_bd_mh foreign key (MAMH) references MonHoc(MAMH),
	constraint fk_bd_gv foreign key (MAGV) references GiaoVien(MAGV)
);

create table BangDiem (
	MASV char(8),
	MAMH char(5),
	LAN smallint,
	NGAYTHI datetime,
	DIEM float,
	BAITHI text,
	primary key (MASV, MAMH, LAN),
	constraint chk_lan_bdiem check(LAN >= 1 and LAN <= 2),
	constraint chk_diem check(DIEM >= 0 and DIEM <= 10),
	constraint fk_bdiem_sv foreign key (MASV) references SinhVien(MASV),
	constraint fk_bdiem_mh foreign key (MAMH) references MonHoc(MAMH)
);

-- INSERT DATA
insert into Account values ('lvdanh', '123456', 'Truong');
insert into Account values ('nthien', '123456', 'Coso1');
insert into Account values ('pvhuy', '123456', 'Coso2');

insert into CoSo values ('CS1', N'Cơ sở 1', N'192 Hàm Tử')
insert into CoSo values ('CS2', N'Cơ sở 2', N'32 Bùi Viện')

insert into Khoa(TENKH,MACS) values (N'Công nghệ thông tin', 'CS1')
insert into Khoa(TENKH,MACS) values (N'Tài chính ngân hàng', 'CS1')
insert into Khoa(TENKH,MACS) values (N'Toán thống kê', 'CS1')
insert into Khoa(TENKH,MACS) values (N'Điện ,Điện tử', 'CS1')
insert into Khoa(TENKH,MACS) values (N'Mỹ thuật công nghiệp', 'CS2')
insert into Khoa(TENKH,MACS) values (N'Khoa học ứng dụng', 'CS2')
insert into Khoa(TENKH,MACS) values (N'Xã hội nhân văn', 'CS2')
insert into Khoa(TENKH,MACS) values (N'Quản trị kinh doanh', 'CS2')

insert into Lop(TENLOP, MAKH) values (N'Lớp CNTT 1', 'KHOA0001')
insert into Lop(TENLOP, MAKH) values (N'Lớp CNTT 2', 'KHOA0001')
insert into Lop(TENLOP, MAKH) values (N'Lớp TCNH 1', 'KHOA0002')
insert into Lop(TENLOP, MAKH) values (N'Lớp TCNH 2', 'KHOA0002')
insert into Lop(TENLOP, MAKH) values (N'Lớp TTK 1', 'KHOA0003')
insert into Lop(TENLOP, MAKH) values (N'Lớp TTK 2', 'KHOA0003')
insert into Lop(TENLOP, MAKH) values (N'Lớp DDT 1', 'KHOA0004')
insert into Lop(TENLOP, MAKH) values (N'Lớp DDT 2', 'KHOA0004')
insert into Lop(TENLOP, MAKH) values (N'Lớp MTCN 1', 'KHOA0005')
insert into Lop(TENLOP, MAKH) values (N'Lớp MTCN 2', 'KHOA0005')
insert into Lop(TENLOP, MAKH) values (N'Lớp KHUD 1', 'KHOA0006')
insert into Lop(TENLOP, MAKH) values (N'Lớp KHUD 2', 'KHOA0006')
insert into Lop(TENLOP, MAKH) values (N'Lớp KHNV 1', 'KHOA0007')
insert into Lop(TENLOP, MAKH) values (N'Lớp KHNV 2', 'KHOA0007')
insert into Lop(TENLOP, MAKH) values (N'Lớp QTKD 1', 'KHOA0008')
insert into Lop(TENLOP, MAKH) values (N'Lớp QTKD 2', 'KHOA0008')

INSERT INTO GiaoVien(HO, TEN, HOCVI, MAKH) VALUES (N'Trần', N'Hồng Nhung', N'Thạc sĩ', 'KHOA0001')