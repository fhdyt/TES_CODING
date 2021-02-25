<?php
class M_Web extends CI_Model
{
  public function detail()
  {
    $hasil = $this->db->query(
      'SELECT * FROM
                                KONF_WEB AS WEB
                                LEFT JOIN KONF_PENGANTIN AS PENGANTIN
                                ON
                                WEB.KONF_LINK=PENGANTIN.KONF_LINK
                                LEFT JOIN KONF_PEMBUKAAN AS PEMBUKAAN
                                ON
                                WEB.KONF_LINK=PEMBUKAAN.KONF_LINK
                                LEFT JOIN KONF_JADWAL AS JADWAL
                                ON
                                WEB.KONF_LINK=JADWAL.KONF_LINK
                                LEFT JOIN KONF_INFORMASI AS INFORMASI
                                ON
                                WEB.KONF_LINK=INFORMASI.KONF_LINK
                                LEFT JOIN KONF_VIDEO AS VIDEO
                                ON
                                WEB.KONF_LINK=VIDEO.KONF_LINK
                                LEFT JOIN KONF_LIVE AS LIVE
                                ON
                                WEB.KONF_LINK=LIVE.KONF_LINK
                                LEFT JOIN KONF_MUSIK AS MUSIK
                                ON
                                WEB.KONF_LINK=MUSIK.KONF_LINK
                                LEFT JOIN KONF_AMPLOP AS AMPLOP
                                ON
                                WEB.KONF_LINK=AMPLOP.KONF_LINK
                                WHERE WEB.KONF_LINK="' . $_SERVER['HTTP_HOST'] . '"
                                LIMIT 1
                                '
    )->result();
    return $hasil;
  }
}
