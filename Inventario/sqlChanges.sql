--SQLCHANGES

--Fix error with produc not saving
ALTER TABLE `tbl_product` CHANGE `barcode_path` `barcode_path` VARCHAR(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0';
ALTER TABLE `tbl_product` CHANGE `barcode` `barcode` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0';