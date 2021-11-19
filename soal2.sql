SELECT mhs_nama, nilai, mk_kode
FROM tb_mahasiswa, tb_mahasiswa_nilai, tb_matakuliah
WHERE nilai = '80' AND mhs_nama = 'Sari' AND mk_kode = 'MK303'