CREATE TABLE `pegawai` (
  `pegawai_id` int(11) NOT NULL auto_increment,
  `pegawai_nama` varchar(50) NOT NULL,
  `pegawai_bagian` varchar(10) NOT NULL,
  `pegawai_gajih` varchar(30) NOT NULL,
  PRIMARY KEY  (`pegawai_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;